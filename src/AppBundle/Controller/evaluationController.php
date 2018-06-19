<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Competance;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Evaluation;
use AppBundle\Entity\Resultat;
use AppBundle\Entity\PlanEvaluation;
use AppBundle\Entity\appreciation;

class evaluationController extends Controller
{


 /**
     * @Route("/emploi/master")
     */
    public function emploiMasterAction()
    {
			$em = $this->getDoctrine()->getManager(); // ...or getEntityManager() prior to Symfony 2.1
			$connection = $em->getConnection();
			$statement = $connection->prepare("SELECT c.* , p.nom as nom_p , p.prenom as prenom_p ,m.nom as matiere from matiere as m ,professeur as p , carte as c WHERE c.id_professeur=p.id and c.id_matiere=m.id");
			$statement->execute();
			$cartes = $statement->fetchAll();





return $this->render('emploi/master.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'cartes'=>$cartes));

}





public function getListColor(){
    	$colors = "yellow-red-blue-purple-cyan-lightgreen-darkgreen-orange-brown-darkblue-pink";

    	for ($r=50; $r<=200; $r=$r+50){
	    	for ($g=50; $g<=200; $g=$g+50){
    			for ($b=50; $b<=200; $b=$b+50){
    				$colors.='-'.sprintf("#%02x%02x%02x", $r, $g, $b);
    			}	
    		}	
    	}
    	return explode('-', $colors);
    }




	/**
     * @Route("/evaluation/appreciation/add")
     */
public function addAppreciationAction(Request $request){




$em = $this->getDoctrine()->getManager();
$connection = $em->getConnection();
$repository = $this->getDoctrine()->getRepository(appreciation::class);


$appr = new appreciation();
$appr->setIdFormatAp($request->get('cycle'));
$appr->setColor('blue');
$em->persist($appr);

$em->flush();

//$n=$request->get('row');



$row="<tr id='row***' style='height:40px;'><input style='height:30px;' type='hidden' name='rows[]' value='***' ><td><div class='input-group xs-mb-5'><input  style='height:30px;'    name='lettre-***'  oninput='bar(\"n-***\");' class='form-control'><span class='input-group-btn'><button  style='height:30px;border:none;background-color:blue;' id='n-***' type='button' onclick='mod(this.id);' data-toggle='modal' data-target='#mod-primary' class='btn btn-space btn-success'  ></button></span><input type='hidden' name='color-***' id='inpt-***' value='blue' ></div></td><td><div class='be-radio inline'><input  style='height:30px;width:60px;' id='per***' oninput='updatePer();' name='p0-***'   class='form-control'></div><div  class='be-radio inline'><input  style='height:30px;width:60px;' id='per***b' oninput='updatePer();' name='p1-***'   class='form-control'></div></td><td><input  style='height:30px;'  name='app-***'        class='form-control'></td><td><input  style='height:30px;'  name='niveau-***'     class='form-control'></td><td class='actions'><a id='del-***' onclick='del(this.id)' class='icon'><i class='mdi mdi-delete'></i></a></td></tr>|<div id='pro-***' style='background-color:blue' class='progress-bar progress-bar-primary progress-bar-striped active' ></div>";
$row=str_replace('***', $appr->getId(),$row);





	return new Response($row);
}



	/**
     * @Route("/evaluation/appreciation/delete")
     */
public function deleteAppreciationAction(Request $request){


$em = $this->getDoctrine()->getManager();
$connection = $em->getConnection();
$repository = $this->getDoctrine()->getRepository(appreciation::class);


$appr = $repository->find($request->get('id'));
$em->remove($appr);

$em->flush();


return new Response($request->get('id'));

}







	/**
     * @Route("/evaluation/appreciation/save" , name="save_appreciation")
     */
public function AppreciationSaveAction(Request $request){
	$id_p=1;
$em = $this->getDoctrine()->getManager();
$connection = $em->getConnection();
$repository = $this->getDoctrine()->getRepository(appreciation::class);



		
			


	$apprs=$request->get('rows');
	
	foreach ($apprs as $appr) {
		$used='0';
		$color=$request->get('color-'.$appr);
		$lettre=$request->get('lettre-'.$appr);
		$debut=$request->get('p0-'.$appr);
		$fin=$request->get('p1-'.$appr);
		$app=$request->get('app-'.$appr);
		$nv=$request->get('niveau-'.$appr);
		if($request->get('che-'.$appr))
			$used='1';
		$Appr = $repository->find($appr);

if(!$Appr)
	return new Response($appr);


		$Appr->setLettre($lettre);
		$Appr->setColor($color);
		
		$Appr->setDebutPourcentage($debut);
		$Appr->setFinPourcentage($fin);
		$Appr->setAppreciation($app);
		$Appr->setNiveauAc($nv);
		$em->persist($Appr);

}
$em->flush();
		//return new Response('done');
	


	$id_p=1;
			
			
			$statement = $connection->prepare("SELECT * from appreciation where idFormatAp=$id_p order by FinPourcentage desc ");
			$statement->execute();
			$appr = $statement->fetchAll();
$colors=self::getListColor();



return $this->render('evaluation/appreciation.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'apprs'=>$appr,'colors'=>$colors,'cycle'=>$id_p,'saved'=>true));






}

 	/**
     * @Route("/evaluation/appreciation")
     */
    public function appreciationAction(Request $request)
    {
			$id_p=1;
			$em = $this->getDoctrine()->getManager(); // ...or getEntityManager() prior to Symfony 2.1
			$connection = $em->getConnection();
			$statement = $connection->prepare("SELECT * from appreciation where idFormatAp=$id_p order by FinPourcentage desc ");
			$statement->execute();
			$appr = $statement->fetchAll();
$colors=self::getListColor();



return $this->render('evaluation/appreciation.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'apprs'=>$appr,'colors'=>$colors,'cycle'=>$id_p,'saved'=>false));

}


    /**
     * @Route("/evaluation")
     */
    public function indexAction()
    {

    	$user = null ;
		$competances = null ;
		
			
			
			
			
        return $this->render('evaluation/accueil.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..')
        ));

}


    /**
     * @Route("/evaluation/add")
     */
    public function evaluationAction()
    {

    	$user = null ;
		$competances = null ;
		
			$repository = $this->getDoctrine()->getRepository(Competance::class);
			$competances = $repository->findAll();
			$em = $this->getDoctrine()->getManager(); // ...or getEntityManager() prior to Symfony 2.1
			$connection = $em->getConnection();
			$statement = $connection->prepare("SELECT * from type_competance");
			$statement->execute();
			$matieres = $statement->fetchAll();
			$statement = $connection->prepare("SELECT classeFr , classe.id from prof_mat_classe , classe where id_professeur=1 and id_classe=classe.id");
			$statement->execute();
			$classes=$statement->fetchAll();
        return $this->render('evaluation/evaluation.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'done'=>0,'competances'=>$competances,'matieres'=>$matieres,'classes'=>$classes
        ));

}



	/**
     * @Route("/evaluation/resultat/save" , name="save_resultat") 
     */
public function resultatSaveAction(Request $request)
    {
    	$id_p=1;
		$plan=array();
		$em = $this->getDoctrine()->getManager();
		$connection = $em->getConnection();
		$etudiants=$request->get('etd');
		$classe=$request->get('classe');
		$classeName=$request->get('classename');

		foreach ($etudiants as $etudiant) {
			
			$competances = $request->get('comp'.$etudiant);
			foreach ($competances as $competance) {
			
			$appr=explode("*",$competance);

			

			$resultat = new Resultat();
			$resultat->setIdEtudiant($etudiant);
			$resultat->setNote($request->get('n'.$etudiant));

			$plan[]=$appr[1];
			$resultat->setIdPlanEvaluation($appr[1]);
			$resultat->setAppreciation($appr[0]);
			if(!$resultat->security)
				return new Response('f*'.$classe.'*'.$classeName);
			$em->persist($resultat);

		}}

			

			$plan=implode(",",$plan);
			$em2 = $this->getDoctrine()->getManager();
			$connection2 = $em->getConnection();
			$statement = $connection->prepare("select id from resultat where id_plan_evaluation in ($plan) ");
			$statement->execute();
			$ids = $statement->fetchAll();
			$repository = $this->getDoctrine()->getRepository(Resultat::class);
			foreach ($ids as $id) {
				
				$em2->remove($repository->find($id));
			}
			
			$em2->flush();
			$em->flush();

			return new Response('s*'.$classe.'*'.$classeName);

}



	/**
     * @Route("/evaluation/resultat" , name="resultat") 
     */
public function resultatEvaluationAction(Request $request)
    {
$id_e=$request->get('id_e');
$id_p=1;
$id_c=1;
$id_g=$request->get('id_g');
$etudiants = array();
$em = $this->getDoctrine()->getManager(); // ...or getEntityManager() prior to Symfony 2.1
			$connection = $em->getConnection();
			$statement = $connection->prepare("SELECT cl.id , cl.classeFr from classe as cl , prof_mat_classe as c where c.id_professeur=$id_p and c.id_classe=cl.id and cl.id=$id_g");
			$statement->execute();
			$groupes = $statement->fetchAll();
			$id=$groupes['0']['id'];
			foreach ($groupes as $g) {
			$id=$g['id'];
		$statement = $connection->prepare("SELECT e.id,e.prenom,e.nom FROM classe_etudiant as ce , etudiant as e where ce.id_classe=$id and ce.id_etudiant=e.id");
			$statement->execute();
			$etudiants[$id] = $statement->fetchAll();
		}
			$statement = $connection->prepare("SELECT  c.nom,p.id as id from competance as c , plan_evaluation as p where p.id_evaluation=$id_e and p.id_competance=c.id");
			$statement->execute();
			$competances = $statement->fetchAll();
			$statement = $connection->prepare("SELECT note from evaluation where id=$id_e ");
			$statement->execute();
			$note = $statement->fetchAll()['0']['note'];

			$statement = $connection->prepare("SELECT * from appreciation where idFormatAp=$id_c order by finPourcentage desc");
			$statement->execute();
			$apprs = $statement->fetchAll();

			$statement = $connection->prepare("SELECT note, appreciation , id_etudiant , id_competance , CONCAT(id_etudiant, '-',plan_evaluation.id ) as bid from resultat , plan_evaluation where id_plan_evaluation=plan_evaluation.id and id_evaluation=$id_e");
			$statement->execute();
			$resultats3 = $statement->fetchAll();
			$resultats=array();
			$resultats2=array();
			foreach ($resultats3 as $re) {
				
				$resultats[$re['bid']]=array('n'=>$re['note'],'ap'=>$re['appreciation'],'c'=>$re['id_competance'],'e'=>$re['id_etudiant']);
				$resultats2[$re['id_etudiant']]=$re['note'];
			}
			
			
    return $this->render('evaluation/resultat.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'groupes'=>$groupes,'etudiants'=>$etudiants,'competances'=>$competances,'note'=>$note,'plan'=>$id_e,'apprs'=>$apprs,'resultats'=>$resultats,'resultats2'=>$resultats2
        ));
       
    }




	/**
     * @Route("/evaluation/listerEvaluation") 
     */

	public function listerEvaluation(){

$id_e=25;
$id_p=1;
$id_c=1;
$evaluations = array();
$em = $this->getDoctrine()->getManager(); // ...or getEntityManager() prior to Symfony 2.1
			$connection = $em->getConnection();
			$statement = $connection->prepare("SELECT distinct classe.id , classe.classeFr FROM `evaluation` , classe where id_classe=classe.id and id_professeur=$id_p");
			$statement->execute();
			$groupes = $statement->fetchAll();
			
			foreach ($groupes as $g) {
			$id=$g['id'];
		$statement = $connection->prepare("SELECT titre, note, evaluation.date ,evaluation.id, element ,type_competance.nom FROM evaluation , type_competance WHERE id_type_competance=type_competance.id and id_professeur=$id_p and id_classe=$id");
			$statement->execute();
			$evaluations[$id] = $statement->fetchAll();
		}
	return $this->render('evaluation/listerEvaluation.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'evaluations'=>$evaluations,'groupes'=>$groupes
        ));



}


     /**
     * @Route("/evaluation/save" , name="save_evaluation") 
     */
    public function saveEvaluationAction(Request $request)
    {

    	$em = $this->getDoctrine()->getManager();
    	$connection = $em->getConnection();
			$statement = $connection->prepare("select * from type_competance");
			$statement->execute();
			$matieres = $statement->fetchAll();



			$statement = $connection->prepare("SELECT classeFr , classe.id from prof_mat_classe , classe where id_professeur=1 and id_classe=classe.id");
			$statement->execute();
			$classes = $statement->fetchAll();





			$repository = $this->getDoctrine()->getRepository(Competance::class);
			$competances = $repository->findAll();
			$done=-1;
			$note=$request->get('note');
			if(ctype_digit($note) or floatval($note)){
				$done=1;
				$ev = new evaluation();
				$ev->setTitre($request->get('titre'));
				$date = new \DateTime($request->get('date'));
				$ev->setIdProfesseur(1);
				$ev->setDate($date);
				$ev->setNote($note);
				$ev->setIdClasse($request->get('classe'));
				$ev->setElement($request->get('element'));
				$ev->setIdTypeCompetance($request->get('discipline'));
				$em->persist($ev);
				$competancess =$request->get('competances');
				$em->flush();
				if($competancess){
			foreach( $competancess as $competance){
				$pv = new PlanEvaluation();
				$pv->setIdCompetance($competance);
				$pv->setIdEvaluation($ev->getId());
				$em->persist($pv);
			}}
		    $em->flush();}

        return $this->render('evaluation/evaluation.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'done'=>$done,'competances'=>$competances,'matieres'=>$matieres,'classes'=>$classes
        ));}
}
