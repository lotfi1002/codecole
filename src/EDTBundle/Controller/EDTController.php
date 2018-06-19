<?php

namespace EDTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use EDTBundle\Entity\salle;
use EDTBundle\Entity\format;
use EDTBundle\Entity\matiere;
use AppBundle\Entity\Carte;


class EDTController extends Controller
{
    public function indexAction()
    {
        return $this->render('@EDT/EDT/index.html.twig');
    }


    public function checkNumber ($nbr, $start = 0, $end = 20, $type='int'){
    	if ($nbr == "") return false;
    	switch ($type) {
    		case 'int':
    			return (ctype_digit($nbr) && $nbr <= $end && $nbr >= $start);
    			break;
    		
    		default:
    			return floatval($nbr) && $nbr <= $end && $nbr >= $start;
    			break;
    	}
    }


    public function nouveauAction(Request $req){

    	if ($req->isMethod('post')){
			$edt_name = $req->get('nom');
			$annee_scolaire = $req->get('AnneeScolaire');
			$jourParSemaine = $req->get('joursParSemane');
			$coursParJour = $req->get('coursParJour');
			$min_duree = $req->get('minDuree');
			$premierHeure = $req->get('firsthour'); 
			$premierMinute = $req->get('firstmin'); 
			$debutAnnee = $req->get('debutAnnee');
			$nbrSemaine = $req->get('semaineParAn');
			$cycle = $req->get('Cycle') == "Autre" ? $req->get('Cycle2') : $req->get('Cycle');

			if($edt_name == "" || $debutAnnee == "" || $cycle == ""  || ! $this->checkNumber($min_duree, 0, 60) 
				|| ! $this->checkNumber($nbrSemaine,1 , 50)          || ! $this->checkNumber($jourParSemaine, 1, 7) 
				|| ! $this->checkNumber ($annee_scolaire, 1975, 2025)|| ! $this->checkNumber($coursParJour, 1, 24) 
				|| ! $this->checkNumber($premierHeure, 1, 24)        || ! $this->checkNumber($premierMinute,0,60)
				) {
				return $this->render('@EDT/EDT/nouveau.html.twig', array('err' => true));
			}
			else {
				$em = $this->getDoctrine()->getManager();
				$format = new format();
				$format->setNomEdt($edt_name);
				$format->setNbrJourParSemaine($jourParSemaine);
				$format->setNbrCoursParJour($coursParJour);
				$format->setAnneeScolaire($annee_scolaire);
				$format->setMinDureeCours($min_duree);
				$format->setPremierCoursEnHeure($premierHeure);
				$format->setPremierCoursEnMinute($premierMinute);
				$date= new \Datetime($debutAnnee);
				$format->setDebutAnnee($date);
				$format->setNbrSemaine($nbrSemaine);
				$format->setCycle($cycle);
				$format->setLastUpdate(new \Datetime('now'));
				$em->persist($format);
				$em->flush();
			} 
	    	return $this->render('@EDT/EDT/nouveau.html.twig');

    	}
    	return $this->render('@EDT/EDT/nouveau.html.twig');
    }

    public function chargerAction(Request $req){
    	$rep = $repository = $this->getDoctrine()->getRepository('EDTBundle:format');
    	if ($req->isMethod('post')){
    		return new Response($rep->find($req->get('sel'))->getNomEdt());
    	}
    	$formats = $rep->findAll();
    	return $this->render('@EDT/EDT/charger.html.twig', array('formats' => $formats));	
    }

    public function getListColor(){
    	$colors = "yellow-red-blue-purple-cyan-lightgreen-darkgreen-orange-brown-darkblue-pink";

    	for ($r=50; $r<=200; $r=$r+50){
	    	for ($g=50; $g<=200; $g=$g+50){
    			for ($b=50; $b<=200; $b=$b+50){
    				$colors.= sprintf("#%02x%02x%02x", $r, $g, $b)."-";
    			}	
    		}	
    	}
    	return explode('-', $colors);
    }

        public function carteAction(Request $req){
		$repository = $this->getDoctrine()->getRepository('EDTBundle:matiere');
		$mats = $repository->findAll();
		$repository = $this->getDoctrine()->getRepository('EDTBundle:professeur');
		$profs = $repository->findAll();
		$repository = $this->getDoctrine()->getRepository('EDTBundle:format');
		$formats = $repository->findAll();
		$repository = $this->getDoctrine()->getRepository('AppBundle:Carte');
		$cartes = $repository->findAll();
		$colors = $this->getListColor();
		if ($req->isMethod('post')){
			if($req->get('prof') != "rien" && $req->get('format') != "rien" && $req->get('mats')!= null){
				$em = $this->getDoctrine()->getManager();
				$cnx = $em->getConnection();
				foreach ($req->get('mats') as $mat) {
					$card = new carte();
					$rqt = $cnx->prepare(
						"select id from carte where id_professeur=".$req->get('prof')." and id_matiere=".$mat." and id_format=".$req->get('format')
					);
					$rqt->execute();
					$crd = $repository->find($rqt->fetch());
					if($crd != null) 
						return $this->render('@EDT/EDT/carte.html.twig', array( 'mats'=> $mats, 'profs' => $profs, 'cartes' => $cartes, 'formats' => $formats, 'colors' => $colors, 'err2' => true));
					else {
						$card->setIdProfesseur($req->get('prof'));
						$card->setIdFormat($req->get('format'));
						$card->setCouleur($req->get('CodeColor'));
						$card->setIdMatiere($mat);
						$card->setAbreviation($req->get($mat));
						$em->persist($card);
						$em->flush();
					}
				}
				$repository = $this->getDoctrine()->getRepository('AppBundle:Carte');
				$cartes = $repository->findAll();
				return $this->render('@EDT/EDT/carte.html.twig', array( 'mats'=> $mats, 'profs' => $profs, 'cartes' => $cartes, 'formats' => $formats, 'colors' => $colors));
			}
			else return $this->render('@EDT/EDT/carte.html.twig', array( 'mats'=> $mats, 'profs' => $profs, 'cartes' => $cartes, 'formats' => $formats, 'colors' => $colors, 'err' => true));		
		}
		return $this->render('@EDT/EDT/carte.html.twig', array( 'mats'=> $mats, 'profs' => $profs, 'cartes' => $cartes, 'formats' => $formats, 'colors' => $colors));
    }

    public function matiereAction(Request $req){
		$repository = $this->getDoctrine()->getRepository('EDTBundle:matiere');
		$mats = $repository->findAll();
		if($req->isMethod('post')){
			if($req->get('nom') == '')
		    	return $this->render('@EDT/EDT/matiere.html.twig', array('mats' => $mats, 'err' => true));
		    else {
		    	$em = $this->getDoctrine()->getManager();
		    	$mat = new matiere();
		    	$mat->setNom(strtoupper($req->get('nom')));
		    	$mat->setAbreviation(strtoupper(substr($req->get('nom'), 0, 2)));
		    	foreach ($mats as $key) {
		    		if ($key->getNom() == strtoupper($req->get('nom'))) 
		    	    	return $this->render('@EDT/EDT/matiere.html.twig', array('mats' => $mats, 'err2' => true));	
		    	}
		    	$em->persist($mat);
            	$em->flush();
				$repository = $this->getDoctrine()->getRepository('EDTBundle:matiere');
				$mats = $repository->findAll();
    	    	return $this->render('@EDT/EDT/matiere.html.twig', array('mats' => $mats, 'err' => false));	
		    }
		}
    	return $this->render('@EDT/EDT/matiere.html.twig', array('mats' => $mats, 'err' => false));	
    }

    public function profAction(Request $req){
    	return $this->render('@EDT/EDT/enseignant.html.twig');	
    }

    public function salleAction(Request $req){
		$repository = $this->getDoctrine()->getRepository('EDTBundle:salle');
		$salles = $repository->findAll();
		if($req->isMethod('post')){
			if($req->get('nom') == '' || $req->get('type') == '')
		    	return $this->render('@EDT/EDT/salle.html.twig', array('salles' => $salles, 'err' => true));
		    else {
		    	$em = $this->getDoctrine()->getManager();
		    	$salle = new salle();
		    	$salle->setNom(strtoupper($req->get('nom')));
		    	$salle->setType(strtoupper($req->get('type')));
		    	foreach ($salles as $key) {
		    		if ($key->getNom() == strtoupper($req->get('nom'))) 
		    	    	return $this->render('@EDT/EDT/salle.html.twig', array('salles' => $salles, 'err2' => true));	
		    	}
		    	$em->persist($salle);
            	$em->flush();
				$repository = $this->getDoctrine()->getRepository('EDTBundle:salle');
				$salles = $repository->findAll();
    	    	return $this->render('@EDT/EDT/salle.html.twig', array('salles' => $salles, 'err' => false));	
		    }
		}
    	return $this->render('@EDT/EDT/salle.html.twig', array('salles' => $salles, 'err' => false));
    }

    public function delAction(Request $req, $type ,$id){
    	if($type == "salle"){
			$repository = $this->getDoctrine()->getRepository('EDTBundle:salle');
			$em = $this->getDoctrine()->getManager();
			$salle = $repository->find($id);
			if ($salle){
				$em->remove($salle);
	    		$em->flush();
	    	}
			$salles = $repository->findAll();
	    	return $this->render('@EDT/EDT/salle.html.twig', array('salles' => $salles, 'err' => false));	
		}
		elseif ($type == "matiere"){
			$repository = $this->getDoctrine()->getRepository('EDTBundle:matiere');
			$em = $this->getDoctrine()->getManager();
			$mat = $repository->find($id);
			if ($mat){
				$em->remove($mat);
	    		$em->flush();
	    	}
			$mats = $repository->findAll();
	    	return $this->render('@EDT/EDT/matiere.html.twig', array('mats' => $mats, 'err' => false));	
		}
    }
}