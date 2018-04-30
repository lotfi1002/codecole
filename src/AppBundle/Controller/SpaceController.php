<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class SpaceController extends Controller
{

	/**
     * @Route("/myspace")
     */
    public function indexAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }



    /**
     * @Route("/myspace/parametrage" , name="parametrage")
     */
    public function parametrageAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/parametrage2.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }

    /**
     * @Route("/myspace/eleve1" , name="eleve1")
     */
    public function eleve1Action(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/eleve1.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
     /**
     * @Route("/myspace/eleve2" , name="eleve2")
     */
    public function eleve2Action(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/eleve2.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
    /**
     * @Route("/myspace/ecolev3 " , name="ecolev3")
     */
    public function ecolev3Action(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/ecolev3.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }

    /**
     * @Route("/myspace/Ficheseleve " , name="Ficheseleve")
     */
    public function FicheseleveAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/Ficheseleve.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
     /**
     * @Route("/myspace/Listeeleve " , name="Listeeleve")
     */
    public function ListeeleveAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/Listeeleve.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
     /**
     * @Route("/myspace/servsco " , name="servsco")
     */
    public function servscoAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/servsco.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
     /**
     * @Route("/myspace/transportVCL" , name="transportVCL")
     */
    public function  transportVCLAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/transportVCL.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
      /**
     * @Route("/myspace/transportAFF" , name="transportAFF")
     */
    public function  transportAFFAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/transportAFF.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
     /**
     * @Route("/myspace/transportCSL" , name="transportCSL")
     */
    public function  transportCSLAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/transportCSL.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
     /**
     * @Route("/myspace/transportEDT" , name="transportEDT")
     */
    public function  transportEDTAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/transportEDT.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
     /**
     * @Route("/myspace/transportAUTRE" , name="transportAUTRE")
     */
    public function  transportAUTREAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/transportAUTRE.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
    /**
     * @Route("/myspace/mobilite" , name="mobilite")
     */
    public function  mobiliteAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/mobilite.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
     /**
     * @Route("/myspace/Listedepart" , name="Listedepart")
     */
    public function  ListedepartAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/Listedepart.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
     /**
     * @Route("/myspace/Listedepart2" , name="Listedepart2")
     */
    public function  Listedepart2Action(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/Listedepart2.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
     /**
     * @Route("/myspace/registreINS" , name="registreINS")
     */
    public function  registreINSAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/registreINS.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
         /**
     * @Route("/myspace/reditionregistre" , name="editionregistre")
     */
    public function  editionregistreAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/editionregistre.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
}


?>