<?php

/* myspace/eleve2.html.twig */
class __TwigTemplate_d030843e884b5be56cea5c96420437b9bafaae77243b8a0cc12fe4188d4362f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "myspace/eleve2.html.twig", 1);
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
        $__internal_f4085883590369c0c522b3607410d2f8a41b8525894b838170a989b7e59199b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4085883590369c0c522b3607410d2f8a41b8525894b838170a989b7e59199b0->enter($__internal_f4085883590369c0c522b3607410d2f8a41b8525894b838170a989b7e59199b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/eleve2.html.twig"));

        $__internal_00e3d2d98f9541a03112c49f6ee4a2535339a31890914d5310a978694caedd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e3d2d98f9541a03112c49f6ee4a2535339a31890914d5310a978694caedd02->enter($__internal_00e3d2d98f9541a03112c49f6ee4a2535339a31890914d5310a978694caedd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/eleve2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4085883590369c0c522b3607410d2f8a41b8525894b838170a989b7e59199b0->leave($__internal_f4085883590369c0c522b3607410d2f8a41b8525894b838170a989b7e59199b0_prof);

        
        $__internal_00e3d2d98f9541a03112c49f6ee4a2535339a31890914d5310a978694caedd02->leave($__internal_00e3d2d98f9541a03112c49f6ee4a2535339a31890914d5310a978694caedd02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c00456924050c0739a3cefa858c4a79b859fe407ac462ade62631a52a4f0098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c00456924050c0739a3cefa858c4a79b859fe407ac462ade62631a52a4f0098->enter($__internal_8c00456924050c0739a3cefa858c4a79b859fe407ac462ade62631a52a4f0098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70f2d1ee395de7d8c821334a98a44b66e0b26795b4ab81874d3585989bc52116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f2d1ee395de7d8c821334a98a44b66e0b26795b4ab81874d3585989bc52116->enter($__internal_70f2d1ee395de7d8c821334a98a44b66e0b26795b4ab81874d3585989bc52116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ecolev3");
        echo "\"><button class=\"btn btn-space btn-primary btn-big\" style=\"width: 48%; height: 170px;margin-left:200px;font-size:17px;\"><i class=\"icon mdi mdi-assignment-account\"></i><br> Nouvelle Inscription </button></a>
                      </div>
                    </td><td>
                    <div>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Ficheseleve");
        echo "\">  <button class=\"btn btn-space btn-default btn-big\" style=\"width: 83%; height: 170px;font-size:17px;\"><i class=\"icon mdi mdi-view-web\"></i> <br>Fiches élèves </button></a>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Listeeleve");
        echo "\"><button class=\"btn btn-space btn-danger btn-big\"  style=\"width: 48%; height: 170px;margin-left:200px;font-size:17px;\"><i class=\"icon mdi mdi-collection-text\"></i> <br> Listes élèves</button></a>
                    </div>
                  </td>
                  <td>
                    <div>
                      <button class=\"btn btn-space btn-warning btn-big\"  style=\"width: 83%; height: 170px;font-size:17px;\"><i class=\"icon mdi mdi-assignment\"></i> <br>Suivi des inscriptions </button>  
                    </div>
                  </td>
                  
                  </div>
                </tr>
              </table>
            </div>
          </div>
 ";
        
        $__internal_70f2d1ee395de7d8c821334a98a44b66e0b26795b4ab81874d3585989bc52116->leave($__internal_70f2d1ee395de7d8c821334a98a44b66e0b26795b4ab81874d3585989bc52116_prof);

        
        $__internal_8c00456924050c0739a3cefa858c4a79b859fe407ac462ade62631a52a4f0098->leave($__internal_8c00456924050c0739a3cefa858c4a79b859fe407ac462ade62631a52a4f0098_prof);

    }

    public function getTemplateName()
    {
        return "myspace/eleve2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
                       <a href=\"{{path('ecolev3')}}\"><button class=\"btn btn-space btn-primary btn-big\" style=\"width: 48%; height: 170px;margin-left:200px;font-size:17px;\"><i class=\"icon mdi mdi-assignment-account\"></i><br> Nouvelle Inscription </button></a>
                      </div>
                    </td><td>
                    <div>
                    <a href=\"{{path('Ficheseleve')}}\">  <button class=\"btn btn-space btn-default btn-big\" style=\"width: 83%; height: 170px;font-size:17px;\"><i class=\"icon mdi mdi-view-web\"></i> <br>Fiches élèves </button></a>
                    </div>
                    </td>
                  </div>
                </tr>
                <tr  style=\"height: 290px;\">
                  <div class=\"row\">
                  <td>
                    <div>
                      <a href=\"{{path('Listeeleve')}}\"><button class=\"btn btn-space btn-danger btn-big\"  style=\"width: 48%; height: 170px;margin-left:200px;font-size:17px;\"><i class=\"icon mdi mdi-collection-text\"></i> <br> Listes élèves</button></a>
                    </div>
                  </td>
                  <td>
                    <div>
                      <button class=\"btn btn-space btn-warning btn-big\"  style=\"width: 83%; height: 170px;font-size:17px;\"><i class=\"icon mdi mdi-assignment\"></i> <br>Suivi des inscriptions </button>  
                    </div>
                  </td>
                  
                  </div>
                </tr>
              </table>
            </div>
          </div>
 {% endblock %}            ", "myspace/eleve2.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\myspace\\eleve2.html.twig");
    }
}
