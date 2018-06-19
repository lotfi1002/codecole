<?php
namespace ParametrageBundle\Functions;

class PDF_FreeDay extends \TCPDF {
    //Page header
    public function Header() {
        // Logo
        $image_file = '../web/assets/images/LogoEcole_keltom.png';
        $this->Image($image_file, 10, 10, 50, 25, 'PNG', '', 'C', false, 300, '', false, false, 0, false, false, false);
// $file, $x, $y, $w, $h, $type, $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=0, $fitbox=false, $hidden=false, $fitonpage=false)

        $image_file = '../web/assets/images/LogoAcademie_keltom.jpg';
        $this->Image($image_file, 60, 10, 140, 25, 'JPG', '', 'L', false, 300, '', false, false, 0, false, false, false);
    }
    // Page footer
    public function Footer() {
        $image_file = '../web/assets/images/FichierSignature_keltom.png';
        
        $this->Image($image_file, 150, 260, 50, 25, 'PNG', '', 'C', false, 300, '', false, false, 0, false, false, false);
        $this->SetFont('helvetica', 'B', 15);
        // Title
        $this->SetXY(115,260);
        $this->Cell(80, 30, 'Direction : ', 0, false, 'L', 0, '', 0, false, 'M', 'M');
    }
}