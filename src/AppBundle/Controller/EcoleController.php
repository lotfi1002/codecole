<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Ecole;

class EcoleController extends Controller
{

	/**
     * @Route("/myspace/ecole")
     */
    public function listEcoleAction(Request $request)
    {
		 $user = null ;
		 $ecole = null ;
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
			//$ecole = new Ecole();
			
			$repository = $this->getDoctrine()->getRepository(Ecole::class);
			$ecoles = $repository->findAll();



		
		}
			
			 return $this->render('myspace/listecoles.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,'ecoles'=>$ecoles,
        ));
       
    }
}


?>