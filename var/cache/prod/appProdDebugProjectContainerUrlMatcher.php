<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        // register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::indexAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login_route
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_route',);
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
        }

        // app_space_index
        if ('/myspace' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SpaceController::indexAction',  '_route' => 'app_space_index',);
        }

        // app_user_index
        if ('/user/register' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'app_user_index',);
        }

        // app_user_saveuser
        if ('/user/saveuser' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::saveUserAction',  '_route' => 'app_user_saveuser',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
