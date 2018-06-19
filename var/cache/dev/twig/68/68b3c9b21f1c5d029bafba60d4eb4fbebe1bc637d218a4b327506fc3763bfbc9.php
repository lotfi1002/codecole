<?php

/* myspace/parametrage2.html.twig */
class __TwigTemplate_b60ef7d3e7770c7907f8eee58eeea050da161ef7dd42f40ac325d3a71066b6ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "myspace/parametrage2.html.twig", 1);
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
        $__internal_0c6f3889ee8e1f1417fafe7453f38d61d83624dbcd9d71fb7782a96b14c0245e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6f3889ee8e1f1417fafe7453f38d61d83624dbcd9d71fb7782a96b14c0245e->enter($__internal_0c6f3889ee8e1f1417fafe7453f38d61d83624dbcd9d71fb7782a96b14c0245e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/parametrage2.html.twig"));

        $__internal_947d23deb72ce74426b5aa40c9b94978815604a89da6f41aeb22a1b9437b61b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947d23deb72ce74426b5aa40c9b94978815604a89da6f41aeb22a1b9437b61b1->enter($__internal_947d23deb72ce74426b5aa40c9b94978815604a89da6f41aeb22a1b9437b61b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/parametrage2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c6f3889ee8e1f1417fafe7453f38d61d83624dbcd9d71fb7782a96b14c0245e->leave($__internal_0c6f3889ee8e1f1417fafe7453f38d61d83624dbcd9d71fb7782a96b14c0245e_prof);

        
        $__internal_947d23deb72ce74426b5aa40c9b94978815604a89da6f41aeb22a1b9437b61b1->leave($__internal_947d23deb72ce74426b5aa40c9b94978815604a89da6f41aeb22a1b9437b61b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ab41f4611398b5252723054b30ba3943491a1c9469c66692176cdba1fb74eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab41f4611398b5252723054b30ba3943491a1c9469c66692176cdba1fb74eb5->enter($__internal_8ab41f4611398b5252723054b30ba3943491a1c9469c66692176cdba1fb74eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1eadc164dcf2881476f320fefba4044945593a55b9e0c2455cd0b0245261635d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eadc164dcf2881476f320fefba4044945593a55b9e0c2455cd0b0245261635d->enter($__internal_1eadc164dcf2881476f320fefba4044945593a55b9e0c2455cd0b0245261635d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "          <h1 class=\"text-center\"> Paramétrage </h1><br>
            <div class=\"container\">
              <table style=\"width:90%\">
                <tr style=\"height: 190px\">
                  <div class=\"row\">
                    <td>
                      <div>
                      <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ecoleIns");
        echo "\">  <button class=\"btn btn-space btn-primary btn-big\"  style=\"width: 83%; height: 170px;margin-left:60px;font-size:20px;\"> Etablissement </button></a>  
                      </div>
                    </td><td>
                      <div>
                        <a href=\"eleve1.html\"><button class=\"btn btn-space btn-success btn-big\" style=\"width: 90%; height: 170px;margin-left:60px;font-size:20px;\"> Année scolaire </button></a>
                      </div>
                    </td><td>
                    <div>
                      <button class=\"btn btn-space btn-default btn-big\" style=\"width: 93%; height: 170px;margin-left:60px;font-size:20px;\"> Utilisateurs</button>
                    </div>
                    </td>
                  </div>
                </tr>
                <tr  style=\"height: 190px\">
                  <div class=\"row\">
                  <td>
                    <div>
                      <a href=\"page3.html\"><button class=\"btn btn-space btn-warning btn-big\"  style=\"width: 83%; height: 170px;margin-left:60px;font-size:20px;\">Structure scolaire </button></a>
                    </div>
                  </td>
                  <td>
                    <div>
                      <button class=\"btn btn-space btn-danger btn-big\"  style=\"width: 90%; height: 170px;margin-left:60px;font-size:20px;\"> Matières </button>  
                    </div>
                  </td>
                  <td>
                    <div>
                         <button class=\"btn btn-space btn-primary btn-big\"  style=\"width: 93%; height: 170px;margin-left:60px;font-size:20px;\">Enseignants  </button>
                    </div>
                  </td>
                  </div>
                </tr>
                  </div>
                </tr>
              </table>
            </div>
          </div>
 ";
        
        $__internal_1eadc164dcf2881476f320fefba4044945593a55b9e0c2455cd0b0245261635d->leave($__internal_1eadc164dcf2881476f320fefba4044945593a55b9e0c2455cd0b0245261635d_prof);

        
        $__internal_8ab41f4611398b5252723054b30ba3943491a1c9469c66692176cdba1fb74eb5->leave($__internal_8ab41f4611398b5252723054b30ba3943491a1c9469c66692176cdba1fb74eb5_prof);

    }

    public function getTemplateName()
    {
        return "myspace/parametrage2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
          <h1 class=\"text-center\"> Paramétrage </h1><br>
            <div class=\"container\">
              <table style=\"width:90%\">
                <tr style=\"height: 190px\">
                  <div class=\"row\">
                    <td>
                      <div>
                      <a href=\"{{path('ecoleIns')}}\">  <button class=\"btn btn-space btn-primary btn-big\"  style=\"width: 83%; height: 170px;margin-left:60px;font-size:20px;\"> Etablissement </button></a>  
                      </div>
                    </td><td>
                      <div>
                        <a href=\"eleve1.html\"><button class=\"btn btn-space btn-success btn-big\" style=\"width: 90%; height: 170px;margin-left:60px;font-size:20px;\"> Année scolaire </button></a>
                      </div>
                    </td><td>
                    <div>
                      <button class=\"btn btn-space btn-default btn-big\" style=\"width: 93%; height: 170px;margin-left:60px;font-size:20px;\"> Utilisateurs</button>
                    </div>
                    </td>
                  </div>
                </tr>
                <tr  style=\"height: 190px\">
                  <div class=\"row\">
                  <td>
                    <div>
                      <a href=\"page3.html\"><button class=\"btn btn-space btn-warning btn-big\"  style=\"width: 83%; height: 170px;margin-left:60px;font-size:20px;\">Structure scolaire </button></a>
                    </div>
                  </td>
                  <td>
                    <div>
                      <button class=\"btn btn-space btn-danger btn-big\"  style=\"width: 90%; height: 170px;margin-left:60px;font-size:20px;\"> Matières </button>  
                    </div>
                  </td>
                  <td>
                    <div>
                         <button class=\"btn btn-space btn-primary btn-big\"  style=\"width: 93%; height: 170px;margin-left:60px;font-size:20px;\">Enseignants  </button>
                    </div>
                  </td>
                  </div>
                </tr>
                  </div>
                </tr>
              </table>
            </div>
          </div>
 {% endblock %}", "myspace/parametrage2.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\myspace\\parametrage2.html.twig");
    }
}
