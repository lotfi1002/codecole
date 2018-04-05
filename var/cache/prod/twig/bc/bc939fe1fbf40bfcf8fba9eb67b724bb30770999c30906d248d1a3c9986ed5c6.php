<?php

/* login/login.html.twig */
class __TwigTemplate_6938718b642b860841ff97904a8f19759cdf7dcb991c8062ecafd58722f3046e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd3715731489e4118cf832cbf514829c437df523453b970d3d81ae971e8facc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3715731489e4118cf832cbf514829c437df523453b970d3d81ae971e8facc4->enter($__internal_bd3715731489e4118cf832cbf514829c437df523453b970d3d81ae971e8facc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"assets/img/logo-fav.png\">
    <title>Beagle</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/perfect-scrollbar/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/material-design-icons/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\"/><!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
  </head>
  <body class=\"be-splash-screen\">
     ";
        // line 20
        echo "    ";
        // line 21
        echo "
    ";
        // line 22
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 23
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 25
        echo "    <div class=\"be-wrapper be-login\">
      <div class=\"be-content\">
        <div class=\"main-content container-fluid\">
          <div class=\"splash-container\">
            <div class=\"panel panel-default panel-border-color panel-border-color-primary\">
              <div class=\"panel-heading\"><img src=\"assets/img/logo-xx.png\" alt=\"logo\" width=\"102\" height=\"27\" class=\"logo-img\"><span class=\"splash-description\">Veuillez entrer vos informations.</span></div>
              <div class=\"panel-body\">
                <form action=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
                  <div class=\"form-group\">
                    <input  id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" type=\"text\" placeholder=\"Nom d'utlisateur\" autocomplete=\"off\" class=\"form-control\">
                  </div>
                  <div class=\"form-group\">
                    <input id=\"password\" name=\"_password\" type=\"password\" placeholder=\"Mot de passe\" class=\"form-control\">
                    ";
        // line 43
        echo "                  </div>
                  <div class=\"form-group row login-tools\">
                    <div class=\"col-xs-6 login-remember\">
                      <div class=\"be-checkbox\">
                        <input type=\"checkbox\" id=\"remember\">
                        <label for=\"remember\">Se souvient de moi </label>
                      </div>
                    </div>
                    <div class=\"col-xs-6 login-forgot-password\"><a href=\"#\">Mot de passe Oublié?</a></div>
                  </div>
                  <div class=\"form-group login-submit\">
                    <button data-dismiss=\"modal\" type=\"submit\" class=\"btn btn-primary btn-xl\"> Se Connecter</button>
                  </div>
                </form>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </div>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/jquery/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js\" type=\"text/javascript"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
      \$(document).ready(function(){
        //initialize the javascript
        App.init();
      });
      
    </script>
  </body>
</html>";
        
        $__internal_bd3715731489e4118cf832cbf514829c437df523453b970d3d81ae971e8facc4->leave($__internal_bd3715731489e4118cf832cbf514829c437df523453b970d3d81ae971e8facc4_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 67,  116 => 66,  112 => 65,  108 => 64,  85 => 43,  78 => 34,  73 => 32,  64 => 25,  58 => 23,  56 => 22,  53 => 21,  51 => 20,  45 => 16,  38 => 12,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"assets/img/logo-fav.png\">
    <title>Beagle</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('lib/perfect-scrollbar/css/perfect-scrollbar.min.css')}}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('lib/material-design-icons/css/material-design-iconic-font.min.css')}}\"/><!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\" type=\"text/css\"/>
  </head>
  <body class=\"be-splash-screen\">
     {# app/Resources/views/security/login.html.twig #}
    {# ... you will probably extend your base template, like base.html.twig #}

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <div class=\"be-wrapper be-login\">
      <div class=\"be-content\">
        <div class=\"main-content container-fluid\">
          <div class=\"splash-container\">
            <div class=\"panel panel-default panel-border-color panel-border-color-primary\">
              <div class=\"panel-heading\"><img src=\"assets/img/logo-xx.png\" alt=\"logo\" width=\"102\" height=\"27\" class=\"logo-img\"><span class=\"splash-description\">Veuillez entrer vos informations.</span></div>
              <div class=\"panel-body\">
                <form action=\"{{ path('login_check') }}\" method=\"post\">
                  <div class=\"form-group\">
                    <input  id=\"username\" name=\"_username\" value=\"{{ last_username }}\" type=\"text\" placeholder=\"Nom d'utlisateur\" autocomplete=\"off\" class=\"form-control\">
                  </div>
                  <div class=\"form-group\">
                    <input id=\"password\" name=\"_password\" type=\"password\" placeholder=\"Mot de passe\" class=\"form-control\">
                    {#
            If you want to control the URL the user
            is redirected to on success (more details below)
            <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
        #}
                  </div>
                  <div class=\"form-group row login-tools\">
                    <div class=\"col-xs-6 login-remember\">
                      <div class=\"be-checkbox\">
                        <input type=\"checkbox\" id=\"remember\">
                        <label for=\"remember\">Se souvient de moi </label>
                      </div>
                    </div>
                    <div class=\"col-xs-6 login-forgot-password\"><a href=\"#\">Mot de passe Oublié?</a></div>
                  </div>
                  <div class=\"form-group login-submit\">
                    <button data-dismiss=\"modal\" type=\"submit\" class=\"btn btn-primary btn-xl\"> Se Connecter</button>
                  </div>
                </form>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </div>
    <script src=\"{{asset('lib/jquery/jquery.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('js/main.js\" type=\"text/javascript')}}\"></script>
    <script src=\"{{asset('lib/bootstrap/dist/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
      \$(document).ready(function(){
        //initialize the javascript
        App.init();
      });
      
    </script>
  </body>
</html>", "login/login.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\login\\login.html.twig");
    }
}
