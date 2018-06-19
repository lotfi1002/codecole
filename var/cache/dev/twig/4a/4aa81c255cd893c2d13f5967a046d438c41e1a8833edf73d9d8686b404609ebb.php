<?php

/* myspace/eleve1.html.twig */
class __TwigTemplate_64513bf0aa636075d89ba7d86a1c9702d5cd0f9e4907e242eb163c953f373479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "myspace/eleve1.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3eaa8ac178edf215c989cf649b7c4d4b3972c7d8e7f8abc01e4f12230e94a28c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eaa8ac178edf215c989cf649b7c4d4b3972c7d8e7f8abc01e4f12230e94a28c->enter($__internal_3eaa8ac178edf215c989cf649b7c4d4b3972c7d8e7f8abc01e4f12230e94a28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/eleve1.html.twig"));

        $__internal_66d1ef1172d4af0ca963c01a731fef5bad3df8d5fe51c9d66203f4c101849ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d1ef1172d4af0ca963c01a731fef5bad3df8d5fe51c9d66203f4c101849ad7->enter($__internal_66d1ef1172d4af0ca963c01a731fef5bad3df8d5fe51c9d66203f4c101849ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/eleve1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eaa8ac178edf215c989cf649b7c4d4b3972c7d8e7f8abc01e4f12230e94a28c->leave($__internal_3eaa8ac178edf215c989cf649b7c4d4b3972c7d8e7f8abc01e4f12230e94a28c_prof);

        
        $__internal_66d1ef1172d4af0ca963c01a731fef5bad3df8d5fe51c9d66203f4c101849ad7->leave($__internal_66d1ef1172d4af0ca963c01a731fef5bad3df8d5fe51c9d66203f4c101849ad7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22c21dfa82b45dc5b3c91c451f1631109104d89f62e1f3376d7e0fa63c7c8e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c21dfa82b45dc5b3c91c451f1631109104d89f62e1f3376d7e0fa63c7c8e4c->enter($__internal_22c21dfa82b45dc5b3c91c451f1631109104d89f62e1f3376d7e0fa63c7c8e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3c0ff95ffb59e61690491ab2cf89e4fe62e040cc7a182a9ab3d497092e4fd04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c0ff95ffb59e61690491ab2cf89e4fe62e040cc7a182a9ab3d497092e4fd04->enter($__internal_b3c0ff95ffb59e61690491ab2cf89e4fe62e040cc7a182a9ab3d497092e4fd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "          <h1 class=\"text-center\">Gestion élèves</h1>
            <div class=\"container\">
              <table style=\"width:90%;\">
                <tr style=\"height: 290px;\">
                  <div class=\"row\">
                  <td>
                      <div>
                       <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eleve2");
        echo "\"><button class=\"btn btn-space btn-primary btn-big\" style=\"width: 50%; height: 170px;margin-left:200px;font-size:17px;\"><i class=\"icon mdi mdi-assignment-account\"></i><br> Gestion d'inscription </button></a>
                      </div>
                    </td><td>
                    <div>
                     <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servsco");
        echo "\"><button class=\"btn btn-space btn-default btn-big\" style=\"width: 80%; height: 170px;font-size:17px;\"><i class=\"icon mdi mdi-view-web\"></i> <br>Services scolaires </button></a>
                    </div>
                    </td>
                  </div>
                </tr>
                <tr  style=\"height: 290px;\">
                  <div class=\"row\">
                  <td>
                    <div>
                      <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobilite");
        echo "\"><button class=\"btn btn-space btn-danger btn-big\"  style=\"width: 50%; height: 170px;margin-left:200px;font-size:17px;\"><i class=\"icon mdi mdi-view-dashboard\"></i> <br> Mobilité élèves</button></a>
                    </div>
                  </td>
                  <td>
                    <div>
                    <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registreINS");
        echo "\">  <button class=\"btn btn-space btn-warning btn-big\"  style=\"width: 80%; height: 170px;font-size:17px;\"><i class=\"icon mdi mdi-assignment\"></i> <br>Registre des inscriptions </button></a>  
                    </div>
                  </td>
                  
                  </div>
                </tr>
              </table>
            </div>
          </div>
 ";
        
        $__internal_b3c0ff95ffb59e61690491ab2cf89e4fe62e040cc7a182a9ab3d497092e4fd04->leave($__internal_b3c0ff95ffb59e61690491ab2cf89e4fe62e040cc7a182a9ab3d497092e4fd04_prof);

        
        $__internal_22c21dfa82b45dc5b3c91c451f1631109104d89f62e1f3376d7e0fa63c7c8e4c->leave($__internal_22c21dfa82b45dc5b3c91c451f1631109104d89f62e1f3376d7e0fa63c7c8e4c_prof);

    }

    public function getTemplateName()
    {
        return "myspace/eleve1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 29,  77 => 24,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}
          <h1 class=\"text-center\">Gestion élèves</h1>
            <div class=\"container\">
              <table style=\"width:90%;\">
                <tr style=\"height: 290px;\">
                  <div class=\"row\">
                  <td>
                      <div>
                       <a href=\"{{path('eleve2')}}\"><button class=\"btn btn-space btn-primary btn-big\" style=\"width: 50%; height: 170px;margin-left:200px;font-size:17px;\"><i class=\"icon mdi mdi-assignment-account\"></i><br> Gestion d'inscription </button></a>
                      </div>
                    </td><td>
                    <div>
                     <a href=\"{{path('servsco')}}\"><button class=\"btn btn-space btn-default btn-big\" style=\"width: 80%; height: 170px;font-size:17px;\"><i class=\"icon mdi mdi-view-web\"></i> <br>Services scolaires </button></a>
                    </div>
                    </td>
                  </div>
                </tr>
                <tr  style=\"height: 290px;\">
                  <div class=\"row\">
                  <td>
                    <div>
                      <a href=\"{{path('mobilite')}}\"><button class=\"btn btn-space btn-danger btn-big\"  style=\"width: 50%; height: 170px;margin-left:200px;font-size:17px;\"><i class=\"icon mdi mdi-view-dashboard\"></i> <br> Mobilité élèves</button></a>
                    </div>
                  </td>
                  <td>
                    <div>
                    <a href=\"{{path('registreINS')}}\">  <button class=\"btn btn-space btn-warning btn-big\"  style=\"width: 80%; height: 170px;font-size:17px;\"><i class=\"icon mdi mdi-assignment\"></i> <br>Registre des inscriptions </button></a>  
                    </div>
                  </td>
                  
                  </div>
                </tr>
              </table>
            </div>
          </div>
 {% endblock %}        ", "myspace/eleve1.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\myspace\\eleve1.html.twig");
    }
}
