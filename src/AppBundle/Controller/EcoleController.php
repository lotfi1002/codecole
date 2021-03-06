<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Ecole;

class EcoleController extends Controller
{
	


	/**
     * @Route("/myspace/newecole")
     */
	public function newecoleAction(Request $request)
	{
 $user = null ;
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
	
		
		}
			
			 return $this->render('ecole/newecole.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));


	}


	/**
     * @Route("/myspace/ecole", name="ecole")
     */
    public function ecoleAction(Request $request)
    {
		 $user = null ;
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
	
		
		}
			
			 return $this->render('myspace/addcole.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }

	/**
     * @Route("/myspace/ecoles" , name="liste_ecoles")
     */
    public function listEcoleAction(Request $request)
    {
		 $user = null ;
		 $ecoles = null ;
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
			//$ecole = new Ecole();
			
			$repository = $this->getDoctrine()->getRepository(Ecole::class);
			$ecoles = $repository->findAll();



		
		}
			
			 return $this->render('myspace/listecoles.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,'ecoles'=>$ecoles
        ));
       
    }

	
	/**
     * @Route("/myspace/saveecole" , name="save_ecole")
     */
	
    public function saveAction(Request $request)
    {
		 $user = null ;
		 $ecole = null;
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			$ecole = new Ecole();
			$ecole->setNom($request->request->get('nom'));
			$ecole->setNomAr($request->request->get('nom_ar'));
			$ecole->setLogo('test');
			$ecole->setAdresse($request->request->get('adresse'));
			$ecole->setNbrSemestre($request->request->get('nbr_semestre'));
			$ecole->setNbrCycle($request->request->get('nbr_cycle'));
			$ecole->setAdresseAr($request->request->get('adresse_ar'));

			$em->persist($ecole);

				// actually executes the queries (i.e. the INSERT query)
		    $em->flush();
		
		}
			// params  array('max' => 10)
			  return $this->redirectToRoute('liste_ecoles', array());
        
       
    }

	
	
	
	}


?>