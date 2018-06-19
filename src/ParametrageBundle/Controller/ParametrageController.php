<?php

namespace ParametrageBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ParametrageBundle\Functions\DaysCalender;
use ParametrageBundle\Functions\PDF_FreeDay;
use ParametrageBundle\Entity\Etablissement;
use ParametrageBundle\Entity\CalendrierScolaire;
use ParametrageBundle\Entity\ServicesProposes;
use ParametrageBundle\Entity\CycleScolaire;
use ParametrageBundle\Entity\CyclePedagogique;
use ParametrageBundle\Entity\NiveauScolaire;
use ParametrageBundle\Entity\Classe;
use ParametrageBundle\Entity\BusScolaire;
use ParametrageBundle\Entity\SalleEspace;
use AppBundle\Entity\AnneeScolaires;

class ParametrageController extends Controller
{
    public function getYears(){
    	$repository = $this->getDoctrine()->getRepository('AppBundle:AnneeScolaires');
    	return $repository->findBy(array(), array('id' => 'ASC'));
    }
	
	public function getThisYears(){
    	$repository = $this->getDoctrine()->getRepository('AppBundle:AnneeScolaires');
    	return $repository->findOneBy(['isActive' => true])->getAnnee();
    }

    public function setYears($yr){
    	$repository = $this->getDoctrine()->getRepository('AppBundle:AnneeScolaires');
    	$em = $this->getDoctrine()->getManager();
    	$years = $repository->findAll();
    	foreach ($years as $key) {
    		$key->setIsActive(false);
    		if($key->getAnnee() == $yr) $key->setIsActive(true);
    	}
    	$em->flush();
    }

    public function indexAction(Request $req)
    {
    	if ($req->isMethod('post')){
    		$this->setYears($req->get('YearSelected'));
    	}
    	$years = $this->getYears();
        return $this->render('@Parametrage/Parametrage/index.html.twig', array( 'years'=>$years, ) );
    }

    public function saveLogo($logo, $nom, $type){
		$uri = substr($logo,strpos($logo,",")+1);
		if($type == 'LogoAcademie')	{
			file_put_contents('../web/assets/images/'.$type.'_'.$nom.'.jpg', base64_decode($uri)); 
			return $type.'_'.$nom.'.jpg';
		}
		else file_put_contents('../web/assets/images/'.$type.'_'.$nom.'.png', base64_decode($uri));
		return $type.'_'.$nom.'.png';
    }

    public function EtablissementAction(Request $req)
    {
    	$repository = $this->getDoctrine()->getRepository('ParametrageBundle:Etablissement');
    	if($req->isMethod('post')){
    		$LogoEcole = $req->get('LogoEcole') !== '' ? $this->saveLogo($req->get('LogoEcole'), $req->get('nom'), 'LogoEcole') : false;
    		$LogoAcademie = $req->get('LogoAcademie') !== '' ? $this->saveLogo($req->get('LogoAcademie'), $req->get('nom'), 'LogoAcademie') : false;
    		$FichierSignature = $req->get('FichierSignature') !== '' ? $this->saveLogo($req->get('FichierSignature'), $req->get('nom'), 'FichierSignature') : false;
    		
	        $em = $this->getDoctrine()->getManager();
	        $Etablissement = $repository->find(1);
	        $isEtablissement = false;
	        if(!$Etablissement) $Etablissement = new Etablissement();
	        else $isEtablissement = true;
	        $Etablissement->setNom($req->get('nom'));
	        $Etablissement->setNomAr($req->get('nomAr'));
	        $Etablissement->setAdresse($req->get('adresse'));
	        $Etablissement->setAdresseAr($req->get('adresseAr'));
	        $Etablissement->setVille($req->get('ville'));
	        $Etablissement->setVilleAr($req->get('villeAr'));
	        $Etablissement->setTel($req->get('tel'));
	        $Etablissement->setFax($req->get('fax'));
	        $Etablissement->setSite($req->get('site'));
	        $Etablissement->setEmail($req->get('email'));
	        $Etablissement->setAcademie($req->get('academie'));
	        $Etablissement->setAcademieAr($req->get('academieAr'));
	        $Etablissement->setNumAutorisation($req->get('NumAutorisation'));
	        $Etablissement->setIdentifiant($req->get('identifiant'));
	        if($LogoEcole !== false )$Etablissement->setLogoEcole($LogoEcole);
	        if($LogoAcademie !== false )$Etablissement->setLogoAcademie($LogoAcademie);
	        $Etablissement->setNomDir($req->get('nomDir'));
	        $Etablissement->setNomDirAr($req->get('nomDirAr'));
	        $Etablissement->setPrenomDir($req->get('prenomDir'));
	        $Etablissement->setPrenomDirAr($req->get('prenomDirAr'));
	        if($FichierSignature !== false )$Etablissement->setFichierSignature($FichierSignature);
	        if(!$isEtablissement) $em->persist($Etablissement);
	        $em->flush();
    	}
    	$Etablissement = $repository->find(1);
    	$years = $this->getYears();
        return $this->render('@Parametrage/Parametrage/Etablissement.html.twig', array('Etablissement' => $Etablissement, 'years'=>$years)) ;
    }


    public function AnneeScolaireAction(Request $req)
    {
    	$repository = $this->getDoctrine()->getRepository('AppBundle:AnneeScolaires');
    	if($req->isMethod('post')){
			$years = $repository->findBy(array(), array('id' => 'ASC'));
			$em = $this->getDoctrine()->getManager();
			$cnx = $em->getConnection();
    		if($req->get('anneescolaire') !== null){
    			if ($req->get('anneescolaire') == '' || $req->get('anneescolaire') < 1975 || $req->get('anneescolaire') > 2050){
    				return $this->render('@Parametrage/Parametrage/AnneeScolaire.html.twig', array('years' => $years, "err" => "l'année scolaire que vous avez entrez n'est pas valide."));
    			}
    			$rqt = $cnx->prepare("Truncate table annee_scolaires")->execute();
    			$year = explode("-", (new \Datetime('now'))->format('Y-m-d'))[0]-1;
    			$start = $year > $req->get('anneescolaire') ? $year : $req->get('anneescolaire');
    			$stop = $year < $req->get('anneescolaire') ? $year : $req->get('anneescolaire');
    			for($i=$start; $i >= $stop; $i--){
    				$yr = new AnneeScolaires();
    				$yr->setAnnee($i);
    				if($i == $start) $yr->setIsActive(true);
    				else $yr->setIsActive(false);
    				$em->persist($yr);
    				$em->flush();
    			}
    		}
  			if($req->get('anneescolaire') === null){
    			$rqt = $cnx->prepare("Truncate table annee_scolaires")->execute();
    			$start = reset($years)->getAnnee() + 1;
    			$stop = end($years)->getAnnee();
    			for($i=$start; $i >= $stop; $i--){
    				$yr = new AnneeScolaires();
    				$yr->setAnnee($i);
    				if($i == $start) $yr->setIsActive(true);
    				else $yr->setIsActive(false);
    				$em->persist($yr);
    				$em->flush();
    			}
			}
    	}
    	$years = $this->getYears();
        return $this->render('@Parametrage/Parametrage/AnneeScolaire.html.twig', array('years' => $years));
    }

	public function diff_weeks($dt1, $dt2) 
	{
		$diff = (strtotime($dt2->format('Y-m-d H:i:s')) - strtotime($dt1->format('Y-m-d H:i:s')) );
		$diff /= (60 * 60 * 24 * 7);
		return abs(round($diff)); 
	}

	public function checkDays($jours, $typeReture){
		$jrs = explode('-', substr($jours, 0, -1));
		$err = false;
		$days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
		$db = array_search($jrs[0],$days);
		$fin = array_search(end($jrs),$days);
		$cnt = 0;
		$daysArray = [];
		for ($i = $db; $i < $fin; $i++){
			if ($jrs[$cnt] != $days[$i]){
				$err = true;
			}
			else array_push($daysArray, $jrs[$cnt]);
			$cnt++;
		}
		if ($typeReture == 'BoolReturn') return $err;
		else return $daysArray;
	}

/*
	public function CheckFreeDay($d2, $f2){

	}
*/
    public function CalendrierScolaireAction(Request $req, $step)
    {	
		$repository = $this->getDoctrine()->getRepository('ParametrageBundle:CalendrierScolaire');
		$em = $this->getDoctrine()->getManager();
		$cs = $repository->findOneBy(['anneeScolaire' => $this->getThisYears()]);
		//return new Response($cs->getAnneeScolaire());
    	if ($req->isMethod('post')){
    		if($step == "AddFreeDay"){
    			if($cs->getListeFeries() != '')
	    			$cs->setListeFeries($cs->getListeFeries()."*".$req->get('FD')."+".$req->get('FF')."+".$req->get('FL'));
    			else 
    				$cs->setListeFeries($req->get('FD')."+".$req->get('FF')."+".$req->get('FL'));
    			$em->flush();
    		}
    	}
    	if($cs !== null){
			$a = new DaysCalender();
			$semestres = $cs->getSemestres();
			$s = explode('*', $semestres);
			$Semestres = [];
			foreach ($s as $key) {
				$sem = explode('+', $key);
				array_push($Semestres, $sem);
			}
			$lf = $cs->getListeFeries();
			$l = explode('*', $lf);
			$listeFiries = [];
			foreach ($l as $key) {
				$listeF = explode('+', $key);
				array_push($listeFiries, $listeF);
			}
			$daysArray = $a->getAllDay(new \Datetime($cs->getDebut()), new \Datetime($cs->getFin()), $Semestres, $listeFiries);
			$years = $this->getYears();
			return $this->render('@Parametrage/Parametrage/CalendrierEcole.html.twig', array(
				'as' => $cs->getAnneeScolaire(), 'debut' => $cs->getDebut(), 'fin' => $cs->getFin(), 'jours' => $cs->getJours(), 'daysArray' => $daysArray, 'years' => $years,
			));
		}
    	if ($req->isMethod('post')){
			if($step == 'step2'){
				$as = $req->get('AnneeScolaire');
				$Debut = new \Datetime($req->get('debut'));
				$fin = new \Datetime($req->get('fin'));
			    $diff = $this->diff_weeks($Debut, $fin);
			    $years = $this->getYears();
			    return $this->render('@Parametrage/Parametrage/CalendrierScolaire.html.twig', array('step' => 'step2', 'debut'=> $req->get('debut'), 'fin'=> $req->get('fin'), 'diff' => $diff, 'years' => $years, ));
			}
			if($step == 'step3'){
				$diff = $req->get('diff');
				$jours = $req->get('jours');
				$periode = substr($req->get('periode'), 0, -1);
				$years = $this->getYears();
				if($this->checkDays($jours, 'BoolReturn')){
					return $this->render('@Parametrage/Parametrage/CalendrierScolaire.html.twig', array('step' => 'step2', 'diff' => $diff, 'err' => true, 'years' => $years, ));
				}							    
				//$jours = $this->checkDays($jours, 'ArrayReturn');
			    return $this->render('@Parametrage/Parametrage/CalendrierScolaire.html.twig', array('step' => 'step3', 'diff' => $diff, 'debut'=> $req->get('debut'), 'fin' => $req->get('fin'), 'periode' => $periode, "jours"=>$jours, 'years' => $years, ));
			}
			if($step == 'fin'){
				$as = $this->getThisYears();
				$Debut = $req->get('debut');
				$fin = $req->get('fin');
				$jours = $req->get('jours');
				$periode = $req->get('periode');
				$Semestres = "";
				for($i=1; $i<=$periode; $i++){
					$Semestre = $req->get('DS'.$i)."+".$req->get('FS'.$i);
					$Semestres .= $Semestre."*";
				}
				$Semestres = substr($Semestres, 0, -1);
				$nbjf = $req->get('nbjf');
				$listeFiries = "";
				for($i=0; $i<$nbjf; $i++){
					$ferie = $req->get('DF-'.($i+1))."+".$req->get('FF-'.($i+1))."+".$req->get('LF-'.($i+1));
					$listeFiries .= $ferie."*";
				}
				$listeFiries = substr( $listeFiries, 0, -1 );
				$cs = new CalendrierScolaire();
				$cs->setAnneeScolaire($as);
				$cs->setDebut($Debut);
				$cs->setFin($fin);
				$cs->setJours($jours);
				$cs->setPeriode($periode);
				$cs->setSemestres($Semestres);
				$cs->setNbrJoursFerie($nbjf);
				$cs->setListeFeries($listeFiries);
				$em->persist($cs);
				$em->flush();
			}
    	}
		$years = $this->getYears();
    	return $this->render('@Parametrage/Parametrage/CalendrierScolaire.html.twig', array('step' => 'step1', 'years' => $years));
    }

    public function ServicesProposesAction(Request $req, $id){
    	$years = $this->getYears();
    	$rep = $this->getDoctrine()->getRepository('ParametrageBundle:ServicesProposes');
    	$em = $this->getDoctrine()->getManager();
		if ($id !== 'new'){
			$sp = $rep->find($id);
			if($sp === null){
				$sps = $rep->findBy(['annee' => $this->getThisYears()]);
		    	$years = $this->getYears();
		    	return $this->render("@Parametrage/Parametrage/ServicesProposes.html.twig", 
		    		array('years' => $years, 'sps' => $sps, "err" => "Le Service que vous avez en train de supprimer n'existe pas essayez d'actualiser la page avant de supprimer !"));
		    }
			$em->remove($sp);
			$em->flush();
			return new Response($id);
		}
    	if($req->isMethod('post')){
			$sp = $rep->findBy(['annee' => $this->getThisYears()]);
			foreach ($sp as $key) {
				if($req->get('CSFR-'.$key->getId()) == '' || $req->get('CSAR-'.$key->getId()) == ''){
					$sps = $rep->findBy(['annee' => $this->getThisYears()]);
			    	$years = $this->getYears();
			    	return $this->render("@Parametrage/Parametrage/ServicesProposes.html.twig", 
			    		array('years' => $years, 'sps' => $sps, "err" => "Vous essayez de modifier un service! Avez-vous laissé un champ vide?"));
		    	}
    			$key->setScolariteFR($req->get('CSFR-'.$key->getId()));
    			$key->setScolariteAR($req->get('CSAR-'.$key->getId()));
			}
    		for($i = 1; $i<=$req->get('nb_Services'); $i++){
				if($req->get('ASFR-'.$i) == '' && $req->get('ASAR-'.$i) == ''){
					$sps = $rep->findBy(['annee' => $this->getThisYears()]);
			    	$years = $this->getYears();
			    	return $this->render("@Parametrage/Parametrage/ServicesProposes.html.twig", 
			    		array('years' => $years, 'sps' => $sps, "err" => "Une nouvelle extension de service n'a pas été complétée en raison d'une erreur de champ vide Les champs 'Scolarité' et 'التمدرس' sont obligatoires."));
		    	}
    			if($req->get('ASFR-'.$i) != '' && $req->get('ASAR-'.$i) != ""){
    				$sp = new ServicesProposes();
	    			$sp->setScolariteFR($req->get('ASFR-'.$i));
	    			$sp->setScolariteAR($req->get('ASAR-'.$i));
	    			$sp->setAnnee($this->getThisYears());
	    			$em->persist($sp);
	    		}
    		}
			$em->flush();
    	}
    	$sps = $rep->findBy(['annee' => $this->getThisYears()]);
    	$years = $this->getYears();
    	return $this->render("@Parametrage/Parametrage/ServicesProposes.html.twig", 
    		array('years' => $years, 'sps' => $sps, ));
    }


    public function StructureScolaireAction(Request $req, $form, $id){
    	$years = $this->getYears();
    	$repCS = $this->getDoctrine()->getRepository('ParametrageBundle:CycleScolaire');
    	$repCP = $this->getDoctrine()->getRepository('ParametrageBundle:CyclePedagogique');
    	$repNS = $this->getDoctrine()->getRepository('ParametrageBundle:NiveauScolaire');
    	$repCL = $this->getDoctrine()->getRepository('ParametrageBundle:Classe');
    	$em = $this->getDoctrine()->getManager();
		$CSs = $repCS->findBy(['annee' => $this->getThisYears()]);
		$CPs = $repCP->findBy(['annee' => $this->getThisYears()]);
		$IDsCP = [];
		foreach ($repCP->findBy(['annee' => $this->getThisYears()]) as $key) array_push($IDsCP, $key->getId());
		$IDsCS = [];
		foreach ($repCS->findBy(['annee' => $this->getThisYears()]) as $key) array_push($IDsCS, $key->getId());
    	$NSs = $repNS->findBy(['idCycleScolaire' => $IDsCS, 'idCyclePedagogique' => $IDsCP]);
    	$IDsNS = [];
		foreach ($NSs as $key) array_push($IDsNS, $key->getId());
    	$CLs = $repCL->findBy(['idNiveauScolaire' => $IDsNS]);
		if ($id !== 'new'){
			if($form == 'table1'){
				$cs = $repCS->find(explode('-', $id)[1]);
				if($cs === null){
			    	$years = $this->getYears();
			    	return $this->render("@Parametrage/Parametrage/StructureScolaire.html.twig", 
			    		array('years' => $years, 'CSs' => $CSs, 'CPs' => $CPs, 'NSs' => $NSs, 'CLs' => $CLs, "err" => "Le Cycle Scolaire que vous avez en train de supprimer n'existe pas essayez d'actualiser la page avant de supprimer !"));
			    }
				$em->remove($cs); $em->flush(); return new Response($id);
    		}
    		elseif($form == 'table2'){
				$cp = $repCP->find(explode('-', $id)[1]);
				if($cp === null){
			    	$years = $this->getYears();
			    	return $this->render("@Parametrage/Parametrage/StructureScolaire.html.twig", 
			    		array('years' => $years, 'CSs' => $CSs, 'CPs' => $CPs, 'NSs' => $NSs, 'CLs' => $CLs, "err" => "Le Cycle Pédagogique que vous avez en train de supprimer n'existe pas essayez d'actualiser la page avant de supprimer !"));
			    }
				$em->remove($cp); $em->flush(); return new Response($id);
    		}
    		elseif (substr($form, 0, 3) == 'tab' && substr($form, 0, 4) != 'tab-'){ 
    			$ns = $repNS->find(explode('-', $id)[1]);
				if($ns === null){
			    	$years = $this->getYears();
			    	return $this->render("@Parametrage/Parametrage/StructureScolaire.html.twig", 
			    		array('years' => $years, 'CSs' => $CSs, 'CPs' => $CPs, 'NSs' => $NSs, 'CLs' => $CLs, "err" => "Le Cycle Pédagogique que vous avez en train de supprimer n'existe pas essayez d'actualiser la page avant de supprimer !"));
			    }
				$em->remove($ns); $em->flush(); return new Response($id);
    		}
    		elseif (substr($form, 0, 4) == 'tab-'){
    			$cl = $repCL->find(explode('-',substr($id, 2, strlen($id)))[0]);
    			$ns = $repNS->find(explode('-',substr($id, 2, strlen($id)))[1]); 
				if($cl === null){
			    	$years = $this->getYears();
			    	return $this->render("@Parametrage/Parametrage/StructureScolaire.html.twig", 
			    		array('years' => $years, 'CSs' => $CSs, 'CPs' => $CPs, 'NSs' => $NSs, 'CLs' => $CLs, "err" => "La classe que vous avez en train de supprimer n'existe pas essayez d'actualiser la page avant de supprimer !"));
			    }
			    $ns->setNbClasses($ns->getNbClasses() - 1);
				$em->remove($cl); $em->flush(); return new Response(explode('-',substr($id, 0, strlen($id)))[0]);
    		}
		}
    	if($req->isMethod('post')){
    		if($form == 'table1'){
				$cs = $repCS->findBy(['annee' => $this->getThisYears()]);
				foreach ($cs as $key) {
					if($req->get('CCSFR-'.$key->getId()) == '' || $req->get('CCSAR-'.$key->getId()) == ''){
				    	$years = $this->getYears();
				    	return $this->render("@Parametrage/Parametrage/StructureScolaire.html.twig", 
				    		array('years' => $years, 'CSs' => $CSs, 'CPs' => $CPs, 'NSs' => $NSs, 'CLs' => $CLs, "err" => "Vous essayez de modifier un cycle! Avez-vous laissé un champ vide?"));
			    	}
	    			$key->setCycleScolaireFr($req->get('CCSFR-'.$key->getId()));
	    			$key->setCycleScolaireAr($req->get('CCSAR-'.$key->getId()));
				}
	    		for($i = 1; $i<=$req->get('nb_CS'); $i++){
					if($req->get('ACSFR-'.$i) == '' && $req->get('ACSAR-'.$i) == ''){
				    	$years = $this->getYears();
				    	return $this->render("@Parametrage/Parametrage/StructureScolaire.html.twig", 
				    		array('years' => $years, 'CSs' => $CSs, 'CPs' => $CPs, 'NSs' => $NSs, 'CLs' => $CLs, "err" => "Une nouvelle extension de cycle scolaire n'a pas été complétée en raison d'une erreur de champ vide Les champs 'Cycle scolaire' et 'السلك المدرسي' sont obligatoires."));
			    	}
	    			else{
	    				$cs = new CycleScolaire();
		    			$cs->setCycleScolaireFr($req->get('ACSFR-'.$i));
		    			$cs->setCycleScolaireAr($req->get('ACSAR-'.$i));
		    			$cs->setAnnee($this->getThisYears()); $em->persist($cs);
		    		}
	    		}
				$em->flush();
    		}
    		elseif($form == 'table2'){
    			$cp = $repCP->findBy(['annee' => $this->getThisYears()]);
				foreach ($cp as $key) {
					if($req->get('CCPFR-'.$key->getId()) == '' || $req->get('CCPAR-'.$key->getId()) == '' ||
					   $req->get('CINFR-'.$key->getId()) == '' || $req->get('CINAR-'.$key->getId()) == ''){
				    	$years = $this->getYears();
				    	return $this->render("@Parametrage/Parametrage/StructureScolaire.html.twig", 
				    		array('years' => $years, 'CSs' => $CSs, 'CPs' => $CPs, 'NSs' => $NSs, 'CLs' => $CLs, "err" => "Vous essayez de modifier un cycle! Avez-vous laissé un champ vide?"));
			    	}
	    			$key->setCycleFr($req->get('CCPFR-'.$key->getId()));
	    			$key->setCycleAr($req->get('CCPAR-'.$key->getId()));
	    			$key->setIntituleFr($req->get('CINFR-'.$key->getId()));
	    			$key->setIntituleAr($req->get('CINAR-'.$key->getId()));
				}
	    		for($i = 1; $i<=$req->get('nb_CP'); $i++){
					if($req->get('ACPFR-'.$i) == '' && $req->get('ACPAR-'.$i) == '' &&
				       $req->get('AINFR-'.$i) == '' && $req->get('AINAR-'.$i) == ''){
				    	$years = $this->getYears();
				    	return $this->render("@Parametrage/Parametrage/StructureScolaire.html.twig", 
				    		array('years' => $years, 'CSs' => $CSs, 'CPs' => $CPs, 'NSs' => $NSs, 'CLs' => $CLs, "err" => "Une nouvelle extension de cycle pédagogique n'a pas été complétée en raison d'une erreur de champ vide Les champs 'Cycle', 'Intitulé', 'التسمية' et 'السلك' sont obligatoires."));
			    	}
	    			else{
	    				$cp = new CyclePedagogique();
		    			$cp->setCycleFr($req->get('ACPFR-'.$i));
		    			$cp->setCycleAr($req->get('ACPAR-'.$i));
		    			$cp->setIntituleFr($req->get('AINFR-'.$i));
		    			$cp->setIntituleAr($req->get('AINAR-'.$i));
		    			$cp->setAnnee($this->getThisYears()); $em->persist($cp);
		    		}
	    		}
				$em->flush();
    		}
    		elseif (substr($form, 0, 3) == 'tab' && substr($form, 0, 4) != 'tab-'){
				$IDsCS = [];
				foreach ($repCS->findBy(['annee' => $this->getThisYears(), 'cycleScolaireFr' => substr($form, 3, strlen($form))]) as $key) array_push($IDsCS, $key->getId());
		    	$NSs2 = $repNS->findBy(['idCycleScolaire' => $IDsCS, 'idCyclePedagogique' => $IDsCP]);
				$idTab = $repCS->findOneBy(['cycleScolaireFr' => substr($form, 3, strlen($form)), 'annee' => $this->getThisYears()])->getId();
				foreach ($NSs2 as $key) {
					if($req->get('CSGFR-'.$key->getId()) == '' || $req->get('CSGAR-'.$key->getId()) == '' ||
					   $req->get('CNSFR-'.$key->getId()) == '' || $req->get('CNSAR-'.$key->getId()) == ''){
				    	$years = $this->getYears();
				    	return $this->render("@Parametrage/Parametrage/StructureScolaire.html.twig", 
				    		array('years' => $years, 'CSs' => $CSs, 'CPs' => $CPs, 'NSs' => $NSs, 'CLs' => $CLs, "err" => "Vous essayez de modifier un niveau! Avez-vous laissé un champ vide?"));
			    	}
	    			$key->setIdCycleScolaire($idTab);
	    			$key->setIdCyclePedagogique($req->get('CCYFR-'.$key->getId()));
	    			$key->setSigleFr($req->get('CSGFR-'.$key->getId()));
	    			$key->setSigleAr($req->get('CSGAR-'.$key->getId()));
	    			$key->setNiveauScolaire($req->get('CNSFR-'.$key->getId()));
	    			$key->setNiveauScolaireAr($req->get('CNSAR-'.$key->getId()));
	    			$key->setNbClasses(0);
				}
	    		for($i = 1; $i<=$req->get('nb_NS-'.$idTab); $i++){
					if($req->get('ASGFR-'.$i) == '' && $req->get('ASGAR-'.$i) == '' &&
				       $req->get('ANSFR-'.$i) == '' && $req->get('ANSAR-'.$i) == ''){
				    	$years = $this->getYears();
				    	return $this->render("@Parametrage/Parametrage/StructureScolaire.html.twig", 
				    		array('years' => $years, 'CSs' => $CSs, 'CPs' => $CPs, 'NSs' => $NSs, 'CLs' => $CLs, "err" => "Une nouvelle extension de niveau scolaire n'a pas été complétée en raison d'une erreur de champ vide Les champs 'Sigle', 'Niveau scolaire', 'المستوى الدراسي' et 'الرمز' sont obligatoires."));
			    	}
	    			else{
	    				$ns = new NiveauScolaire();
		    			$ns->setIdCycleScolaire($idTab);
		    			$ns->setIdCyclePedagogique($req->get('ACYFR-'.$i));
		    			$ns->setSigleFr($req->get('ASGFR-'.$i));
		    			$ns->setSigleAr($req->get('ASGAR-'.$i));
		    			$ns->setNiveauScolaire($req->get('ANSFR-'.$i));
		    			$ns->setNiveauScolaireAr($req->get('ANSAR-'.$i));
	    				$ns->setNbClasses(0); $em->persist($ns);
		    		}
	    		}
				$em->flush();
    		}


    		elseif (substr($form, 0, 4) == 'tab-'){
    			$IDsCS = [];
				foreach ($repCS->findBy(['annee' => $this->getThisYears(), 'cycleScolaireFr' => substr($form, 4, strlen($form))]) as $key) array_push($IDsCS, $key->getId());
		    	$NSs3 = $repNS->findBy(['idCycleScolaire' => $IDsCS, 'idCyclePedagogique' => $IDsCP]);
    	    	$IDsNS = [];
				foreach ($NSs3 as $key) array_push($IDsNS, $key->getId());
		    	$cl = $repCL->findBy(['idNiveauScolaire' => $IDsNS]);
		    	$idTab = $repCS->findOneBy(['cycleScolaireFr' => substr($form, 4, strlen($form)), 'annee' => $this->getThisYears()])->getId();
				foreach ($cl as $key) {
					if($req->get('CCOFR-'.$key->getId()) == '' || $req->get('CCOAR-'.$key->getId()) == '' ||
					   $req->get('CCLFR-'.$key->getId()) == '' || $req->get('CCLAR-'.$key->getId()) == ''){
				    	$years = $this->getYears();
				    	return $this->render("@Parametrage/Parametrage/StructureScolaire.html.twig", 
				    		array('years' => $years, 'CSs' => $CSs, 'CPs' => $CPs, 'NSs' => $NSs, 'CLs' => $CLs, "err" => "Vous essayez de modifier une classe! Avez-vous laissé un champ vide?"));
			    	}
	    			$key->setIdNiveauScolaire($req->get('CNCFR-'.$key->getId()));
	    			$key->setCodeFr($req->get('CCOFR-'.$key->getId()));
	    			$key->setCodeAr($req->get('CCOAR-'.$key->getId()));
	    			$key->setClasseFr($req->get('CCLFR-'.$key->getId()));
	    			$key->setClasseAr($req->get('CCLAR-'.$key->getId()));
				}
	    		for($i = 1; $i<=$req->get('nb_CL-'.$idTab); $i++){
					if($req->get('ACOFR-'.$i) == '' && $req->get('ACOAR-'.$i) == '' &&
				        $req->get('ACLFR-'.$i) == '' && $req->get('ACLAR-'.$i) == ''){
				    	$years = $this->getYears();
				    	return $this->render("@Parametrage/Parametrage/StructureScolaire.html.twig", 
				    		array('years' => $years, 'CSs' => $CSs, 'CPs' => $CPs, 'NSs' => $NSs, 'CLs' => $CLs, "err" => "Une nouvelle extension d'une nouvelle classe n'a pas été complétée en raison d'une erreur de champ vide Les champs 'Code', 'Classe', 'القسم' et 'الرمز' sont obligatoires."));
			    	}
	    			else{
	    				$cl = new Classe();
		    			$cl->setIdNiveauScolaire($req->get('ANCFR-'.$i));
		    			$ns = $repNS->find($req->get('ANCFR-'.$i));
		    			$cl->setCodeFr($req->get('ACOFR-'.$i));
		    			$cl->setCodeAr($req->get('ACOAR-'.$i));
		    			$cl->setClasseFr($req->get('ACLFR-'.$i));
		    			$cl->setClasseAr($req->get('ACLAR-'.$i));
		    			$ns->setNbClasses($ns->getNbClasses() + 1 ); $em->persist($cl);
		    		}
	    		}
				$em->flush();
    		}
    	}
    	/*------------*/
    	$CSs = $repCS->findBy(['annee' => $this->getThisYears()]);
    	$CPs = $repCP->findBy(['annee' => $this->getThisYears()]);
		$IDsCP = [];
		foreach ($repCP->findBy(['annee' => $this->getThisYears()]) as $key) array_push($IDsCP, $key->getId());
		$IDsCS = []; 
		foreach ($repCS->findBy(['annee' => $this->getThisYears()]) as $key) array_push($IDsCS, $key->getId());
    	$NSs = $repNS->findBy(['idCycleScolaire' => $IDsCS, 'idCyclePedagogique' => $IDsCP]);
    	$IDsNS = [];
		foreach ($NSs as $key) array_push($IDsNS, $key->getId());
    	$CLs = $repCL->findBy(['idNiveauScolaire' => $IDsNS]);
    	$years = $this->getYears();
    	/*-----------*/
    	return $this->render("@Parametrage/Parametrage/StructureScolaire.html.twig", 
    		array('years' => $years, 'CSs' => $CSs, 'CPs' => $CPs, 'NSs' => $NSs, 'CLs' => $CLs,));
    }

    public function SalleEspaceMoyenAction(Request $req, $tab, $id){
		$em = $this->getDoctrine()->getManager();
		$repSE = $this->getDoctrine()->getRepository('ParametrageBundle:SalleEspace');
		$repBS = $this->getDoctrine()->getRepository('ParametrageBundle:BusScolaire');
		$SEs = $repSE->findBy(['annee' => $this->getThisYears()]);
		$BSs = $repBS->findBy(['annee' => $this->getThisYears()]);
    	if ($id !== 'new'){
			if($tab == 'tableSalle'){
				$se = $repSE->find(explode('-', $id)[1]);
				if($se === null){
			    	$years = $this->getYears();
			    	return $this->render("@Parametrage/Parametrage/SalleEspaceMoyen.html.twig", 
			    		array('years' => $years, 'SEs' => $SEs, 'BSs' => $BSs, "err" => "La Salle/Espace que vous avez en train de supprimer n'existe pas essayez d'actualiser la page avant de supprimer !"));
			    }
				$em->remove($se); $em->flush(); return new Response($id);
    		}
    		if($tab == 'tableBus'){
				$bs = $repBS->find(explode('-', $id)[1]);
				if($bs === null){
			    	$years = $this->getYears();
			    	return $this->render("@Parametrage/Parametrage/SalleEspaceMoyen.html.twig", 
			    		array('years' => $years, 'BSs' => $BSs, 'SEs' => $SEs, "err" => "Le Bus que vous avez en train de supprimer n'existe pas essayez d'actualiser la page avant de supprimer !"));
			    }
				$em->remove($bs); $em->flush(); return new Response($id);
    		}
    	}
    	if($req->isMethod('post')){
    		if($tab == 'tableSalle'){
				foreach ($SEs as $key) {
					if($req->get('CSAES-'.$key->getId()) == '' || $req->get('CCODE-'.$key->getId()) == '' ||
					   $req->get('CLOCA-'.$key->getId()) == '' || $req->get('CNATU-'.$key->getId()) == ''){
				    	$years = $this->getYears();
				    	return $this->render("@Parametrage/Parametrage/SalleEspaceMoyen.html.twig", 
				    		array('years' => $years, 'SEs' => $SEs, 'BSs' => $BSs, "err" => "Vous essayez de modifier une Salle/Espace! Avez-vous laissé un champ vide?"));
			    	}
	    			$key->setSalleEspace($req->get('CSAES-'.$key->getId()));
	    			$key->setCode($req->get('CCODE-'.$key->getId()));
	    			$key->setLocalisation($req->get('CLOCA-'.$key->getId()));
	    			$key->setNature($req->get('CNATU-'.$key->getId()));
	    			$key->setAnnee($this->getThisYears());
				}
	    		for($i = 1; $i<=$req->get('nb_SE'); $i++){
					if($req->get('ASAES-'.$i) == '' && $req->get('ACODE-'.$i) == '' &&
					   $req->get('ALOCA-'.$i) == '' && $req->get('ANATU-'.$i) == ''){
				    	$years = $this->getYears();
				    	return $this->render("@Parametrage/Parametrage/StructureScolaire.html.twig", 
				    		array('years' => $years, 'SEs' => $SEs, 'BSs' => $BSs, "err" => "Une nouvelle extension de Salle/Espace n'a pas été complétée en raison d'une erreur de champ vide Les champs 'Salle/Espace', 'Code', 'Localisation' et 'Nature' sont obligatoires."));
			    	}
	    			else{
	    				$se = new SalleEspace();
						$se->setSalleEspace($req->get('ASAES-'.$i));
						$se->setCode($req->get('ACODE-'.$i));
						$se->setLocalisation($req->get('ALOCA-'.$i));
						$se->setNature($req->get('ANATU-'.$i));
		    			$se->setAnnee($this->getThisYears()); $em->persist($se);
		    		}
	    		}
				$em->flush();
    		}
    		elseif($tab == 'tableBus'){
    			foreach ($BSs as $key) {
					if($req->get('CBUSS-'.$key->getId()) == '' || $req->get('CCOBS-'.$key->getId()) == '' ||
					   $req->get('CMATR-'.$key->getId()) == '' || $req->get('CDAAC-'.$key->getId()) == ''){
				    	$years = $this->getYears();
				    	return $this->render("@Parametrage/Parametrage/SalleEspaceMoyen.html.twig", 
				    		array('years' => $years, 'SEs' => $SEs, 'BSs' => $BSs, "err" => "Vous essayez de modifier un Bus! Avez-vous laissé un champ vide?"));
			    	}
	    			$key->setBus($req->get('CBUSS-'.$key->getId()));
	    			$key->setCode($req->get('CCOBS-'.$key->getId()));
	    			$key->setMatricule($req->get('CMATR-'.$key->getId()));
	    			$key->setDateAcuisition( new \Datetime($req->get('CDAAC-'.$key->getId())) );
	    			$key->setAgentConduite($req->get('CAGCO-'.$key->getId()));
	    			$key->setAccompagnatrice($req->get('CACCO-'.$key->getId()));
	    			$key->setAnnee($this->getThisYears());
				}
	    		for($i = 1; $i<=$req->get('nb_BS'); $i++){
					if($req->get('ABUSS-'.$i) == '' && $req->get('ACOBS-'.$i) == '' &&
					   $req->get('AMATR-'.$i) == '' && $req->get('ADAAC-'.$i) == ''){
						//return new Response("x");
				    	$years = $this->getYears();
				    	return $this->render("@Parametrage/Parametrage/SalleEspaceMoyen.html.twig", 
				    		array('years' => $years, 'SEs' => $SEs, 'BSs' => $BSs, "err" => "Une nouvelle extension de Bus n'a pas été complétée en raison d'une erreur de champ vide Les champs 'Bus', 'Code', 'Matricule' et 'Date d'aquisation' sont obligatoires."));
			    	}
	    			else{
	    				$bs = new BusScolaire();
						$bs->setBus($req->get('ABUSS-'.$i));
						$bs->setCode($req->get('ACOBS-'.$i));
						$bs->setMatricule($req->get('AMATR-'.$i));
						$bs->setDateAcuisition( new \Datetime($req->get('ADAAC-'.$i)) );
						$bs->setAgentConduite($req->get('AAGCO-'.$i));
						$bs->setAccompagnatrice($req->get('AACCO-'.$i));
						$bs->setAnnee($this->getThisYears()); $em->persist($bs);
		    		}
	    		}
				$em->flush();	
    		}
    	}
		$SEs = $repSE->findBy(['annee' => $this->getThisYears()]);
		$BSs = $repBS->findBy(['annee' => $this->getThisYears()]);
    	$years = $this->getYears();
    	return $this->render ("@Parametrage/Parametrage/SalleEspaceMoyen.html.twig", array( 
    		'years' => $years,  'SEs' => $SEs, 'BSs' => $BSs,
    	));
    }

}