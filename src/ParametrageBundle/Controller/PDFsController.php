<?php

namespace ParametrageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ParametrageBundle\Functions\PDF_FreeDay;
use ParametrageBundle\Entity\CalendrierScolaire;
use AppBundle\Entity\AnneeScolaires;

class PDFsController extends Controller
{
	public function getThisYears(){
    	$repository = $this->getDoctrine()->getRepository('AppBundle:AnneeScolaires');
    	return $repository->findOneBy(['isActive' => true])->getAnnee();
    }

	public function JFVAction(){
		$repository = $this->getDoctrine()->getRepository('ParametrageBundle:CalendrierScolaire');
		$cs = $repository->findOneBy(['anneeScolaire' => $this->getThisYears()]);
		if($cs !== null) {
			$lf = $cs->getListeFeries();
			$l = explode('*', $lf);
			$listeFiries = [];
			foreach ($l as $key) {
				$listeF = explode('+', $key);
				array_push($listeFiries, $listeF);
			}
		    $html = $this->renderView(
		         '@Parametrage/Parametrage/template.html.twig',
		         array('listeFiries' => $listeFiries, )
		    );
		}
		$html = $this->renderView(
	         '@Parametrage/Parametrage/template.html.twig',
	         array( 'listeFiries' => 'rien', )
	    );
	  
	    $this->returnPDFResponseFromHTML($html);
	}
	public function returnPDFResponseFromHTML($html)
	{
		$pdf = new PDF_FreeDay();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Nicola Asuni');
		$pdf->SetTitle('TCPDF Example 003');
		$pdf->SetSubject('TCPDF Tutorial');
		$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		$pdf->SetMargins(20, 50, 20);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		$pdf->SetAutoPageBreak(TRUE, 50);
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
		if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
		    require_once(dirname(__FILE__).'/lang/eng.php');
		    $pdf->setLanguageArray($l);
		}
		$pdf->SetFont('times', 'BI', 14);
		$pdf->AddPage();
		
		$txt = "Jours fériés et vacances";
		$pdf->Write(0, $txt, '', 0, 'C', true, 0, false, false, 0);
		$pdf->ln(10);
		//------------------Table will be here
		$pdf->SetFont('times', '', 12);
		$repository = $this->getDoctrine()->getRepository('ParametrageBundle:CalendrierScolaire');
		$cs = $repository->findOneBy(['anneeScolaire' => $this->getThisYears()]);
		$tbl = "";
		if ($cs !== null) {
			$lf = $cs->getListeFeries();
			$l = explode('*', $lf);
			$listeFiries = [];
			$clr = ['lightgrey', 'darkgrey'];
			$c = 0;
			$ext = [];
			foreach ($l as $key) {
				$c = $c == 0 ? 1 : 0 ;
				$listeF = explode('+', $key);
				if($listeF[2] != '' && ! in_array($listeF[2], $ext) ) {
					$tbl .="<tr bgcolor=\"".$clr[$c]."\"><td>".$listeF[0]."</td><td>".$listeF[1]."</td><td>".$listeF[2]."</td></tr>";
				}
				array_push($ext, $listeF[2]);
			}
		}
		$txt = $tbl == "" ? "Vous n'avez pas encore saisie les jours fériés ou les vacances !" :
		'
	<table border="1" align="center">
		<tr bgcolor="#81BEF7"><td><strong>Fériés du</strong></td><td><strong>Au</strong></td><td><strong>Libellé</strong></td></tr>'
		.$tbl.
	'</table>
		';

		$pdf->writeHTML($txt, true, false, true, false, '');
		//------------------Fin Table 
		$pdf->Output('example_003.pdf', 'I');
	}
}
