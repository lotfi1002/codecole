<?php

/* myspace/accueil.html.twig */
class __TwigTemplate_7a676f1561a4b51b12a4d4f9d9dd01ac881574bf349bad4d8224f32b93c839a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "myspace/accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09e2b56695327a3b3ec71b25e639fd5210600e74fb89950949cbd9149671aaf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e2b56695327a3b3ec71b25e639fd5210600e74fb89950949cbd9149671aaf4->enter($__internal_09e2b56695327a3b3ec71b25e639fd5210600e74fb89950949cbd9149671aaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/accueil.html.twig"));

        $__internal_9a59c322b4ae8dbbcf32a6c94bcbec6838ea108b1c81e8454a3a0c510a29c10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a59c322b4ae8dbbcf32a6c94bcbec6838ea108b1c81e8454a3a0c510a29c10a->enter($__internal_9a59c322b4ae8dbbcf32a6c94bcbec6838ea108b1c81e8454a3a0c510a29c10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e2b56695327a3b3ec71b25e639fd5210600e74fb89950949cbd9149671aaf4->leave($__internal_09e2b56695327a3b3ec71b25e639fd5210600e74fb89950949cbd9149671aaf4_prof);

        
        $__internal_9a59c322b4ae8dbbcf32a6c94bcbec6838ea108b1c81e8454a3a0c510a29c10a->leave($__internal_9a59c322b4ae8dbbcf32a6c94bcbec6838ea108b1c81e8454a3a0c510a29c10a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84d56fd05cbca81e533c4023dc2593c1bd82f609cb7efbb1f7b86172953501a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d56fd05cbca81e533c4023dc2593c1bd82f609cb7efbb1f7b86172953501a5->enter($__internal_84d56fd05cbca81e533c4023dc2593c1bd82f609cb7efbb1f7b86172953501a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e455f42b7869f5934c986ae8178c39f97b82bf64f80167ab710cc2e65e32613e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e455f42b7869f5934c986ae8178c39f97b82bf64f80167ab710cc2e65e32613e->enter($__internal_e455f42b7869f5934c986ae8178c39f97b82bf64f80167ab710cc2e65e32613e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "          <h1 class=\"text-center\"> Accueil </h1><br>
            <div class=\"container\">
              <table style=\"width:90%\">
                <tr style=\"height: 190px\">
                  <div class=\"row\">
                    <td>
                      <div>
                        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("parametrage");
        echo "\"><button class=\"btn btn-space btn-success btn-big\"  style=\"width: 90%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-settings\"></i> <br> paramétrage </button> </a> 
                      </div>
                    </td><td>
                      <div>
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eleve1");
        echo "\"><button class=\"btn btn-space btn-primary btn-big\" style=\"width: 90%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-folder-person\"></i> <br> Elève </button></a>
                      </div>
                    </td><td>
                    <div>
                      <button class=\"btn btn-space btn-default btn-big\" style=\"width: 75%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-collection-bookmark\"></i> <br> Référentiel des compétences</button>
                    </div>
                    </td>
                  </div>
                </tr>
                <tr  style=\"height: 190px\">
                  <div class=\"row\">
                  <td>
                    <div>
                      <a href=\"page3.html\"><button class=\"btn btn-space btn-warning btn-big\"  style=\"width: 90%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon icon mdi mdi-book\"></i><br> Evaluations </button></a>
                    </div>
                  </td>
                  <td>
                    <div>
                      <button class=\"btn btn-space btn-danger btn-big\"  style=\"width: 90%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-assignment\"></i><br> Appreciations </button>  
                    </div>
                  </td>
                  <td>
                    <div>
                         <button class=\"btn btn-space btn-success btn-big\"  style=\"width: 75%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-chart\"></i> <br>Statistiques  </button>
                    </div>
                  </td>
                  </div>
                </tr>
                <tr  style=\"height: 190px\">
                  <div class=\"row\">
                    <td>
                      <div>
                        <button class=\"btn btn-space btn-primary btn-big\"  style=\"width: 90%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-collection-text\"></i><br>Livret périodiques  </button>
                      </div>
                    </td>
                    <td>
                      <div>
                        <button class=\"btn btn-space btn-default btn-big\"  style=\"width: 90%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-file-text\"></i><br> Bulletins scolaires </button>
                      </div>
                    </td>
                    <td>
                      <div>
                        <button class=\"btn btn-space btn-warning btn-big\"  style=\"width: 75%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-local-post-office\"></i><br>Massar  </button>
                      </div>
                    </td>
                  </div>
                </tr>
              </table>
            </div>
          </div>
";
        
        $__internal_e455f42b7869f5934c986ae8178c39f97b82bf64f80167ab710cc2e65e32613e->leave($__internal_e455f42b7869f5934c986ae8178c39f97b82bf64f80167ab710cc2e65e32613e_prof);

        
        $__internal_84d56fd05cbca81e533c4023dc2593c1bd82f609cb7efbb1f7b86172953501a5->leave($__internal_84d56fd05cbca81e533c4023dc2593c1bd82f609cb7efbb1f7b86172953501a5_prof);

    }

    public function getTemplateName()
    {
        return "myspace/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  {% extends 'base.html.twig' %}

{% block body %}
          <h1 class=\"text-center\"> Accueil </h1><br>
            <div class=\"container\">
              <table style=\"width:90%\">
                <tr style=\"height: 190px\">
                  <div class=\"row\">
                    <td>
                      <div>
                        <a href=\"{{path('parametrage')}}\"><button class=\"btn btn-space btn-success btn-big\"  style=\"width: 90%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-settings\"></i> <br> paramétrage </button> </a> 
                      </div>
                    </td><td>
                      <div>
                        <a href=\"{{path('eleve1')}}\"><button class=\"btn btn-space btn-primary btn-big\" style=\"width: 90%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-folder-person\"></i> <br> Elève </button></a>
                      </div>
                    </td><td>
                    <div>
                      <button class=\"btn btn-space btn-default btn-big\" style=\"width: 75%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-collection-bookmark\"></i> <br> Référentiel des compétences</button>
                    </div>
                    </td>
                  </div>
                </tr>
                <tr  style=\"height: 190px\">
                  <div class=\"row\">
                  <td>
                    <div>
                      <a href=\"page3.html\"><button class=\"btn btn-space btn-warning btn-big\"  style=\"width: 90%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon icon mdi mdi-book\"></i><br> Evaluations </button></a>
                    </div>
                  </td>
                  <td>
                    <div>
                      <button class=\"btn btn-space btn-danger btn-big\"  style=\"width: 90%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-assignment\"></i><br> Appreciations </button>  
                    </div>
                  </td>
                  <td>
                    <div>
                         <button class=\"btn btn-space btn-success btn-big\"  style=\"width: 75%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-chart\"></i> <br>Statistiques  </button>
                    </div>
                  </td>
                  </div>
                </tr>
                <tr  style=\"height: 190px\">
                  <div class=\"row\">
                    <td>
                      <div>
                        <button class=\"btn btn-space btn-primary btn-big\"  style=\"width: 90%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-collection-text\"></i><br>Livret périodiques  </button>
                      </div>
                    </td>
                    <td>
                      <div>
                        <button class=\"btn btn-space btn-default btn-big\"  style=\"width: 90%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-file-text\"></i><br> Bulletins scolaires </button>
                      </div>
                    </td>
                    <td>
                      <div>
                        <button class=\"btn btn-space btn-warning btn-big\"  style=\"width: 75%; height: 170px;margin-left:60px;font-size:17px;\"><i class=\"icon mdi mdi-local-post-office\"></i><br>Massar  </button>
                      </div>
                    </td>
                  </div>
                </tr>
              </table>
            </div>
          </div>
{% endblock %}", "myspace/accueil.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\myspace\\accueil.html.twig");
    }
}
