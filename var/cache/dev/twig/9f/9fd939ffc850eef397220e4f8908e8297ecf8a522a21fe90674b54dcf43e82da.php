<?php

/* evaluation/accueil.html.twig */
class __TwigTemplate_90bb3f5d5812412836f3549b25af631dd9ada14500039937fa8bced428e0311b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "evaluation/accueil.html.twig", 1);
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
        $__internal_74dce42a194168137f0701945b3e92b7cd91cbbb22410d8f6b35054859a6610b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74dce42a194168137f0701945b3e92b7cd91cbbb22410d8f6b35054859a6610b->enter($__internal_74dce42a194168137f0701945b3e92b7cd91cbbb22410d8f6b35054859a6610b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/accueil.html.twig"));

        $__internal_0ba092a217dea8248bcdb33f99b379898da3e04b40086fb0559ede7db0cccd7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba092a217dea8248bcdb33f99b379898da3e04b40086fb0559ede7db0cccd7d->enter($__internal_0ba092a217dea8248bcdb33f99b379898da3e04b40086fb0559ede7db0cccd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74dce42a194168137f0701945b3e92b7cd91cbbb22410d8f6b35054859a6610b->leave($__internal_74dce42a194168137f0701945b3e92b7cd91cbbb22410d8f6b35054859a6610b_prof);

        
        $__internal_0ba092a217dea8248bcdb33f99b379898da3e04b40086fb0559ede7db0cccd7d->leave($__internal_0ba092a217dea8248bcdb33f99b379898da3e04b40086fb0559ede7db0cccd7d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_042865e604cd8414e65d1b8024b7dc38458aa26171b17bcd8b6109389380af44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042865e604cd8414e65d1b8024b7dc38458aa26171b17bcd8b6109389380af44->enter($__internal_042865e604cd8414e65d1b8024b7dc38458aa26171b17bcd8b6109389380af44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56c55eaae87070ca93340a50c9d6b663f218f5537b6a74956a450987125536a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c55eaae87070ca93340a50c9d6b663f218f5537b6a74956a450987125536a8->enter($__internal_56c55eaae87070ca93340a50c9d6b663f218f5537b6a74956a450987125536a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>Accueil</h1>

<table style=\"width:100%\">
\t<tbody><tr style=\"height: 130px\">
\t\t<td colspan=\"3\">
\t\t   
\t\t        <a href=\"#\"><button class=\"btn btn-space btn-warning btn-big\" style=\"width: 99%; height: 120px\"><i class=\"icon mdi mdi-home\"></i> Acceuil </button></a>
\t\t  
        </td>
    </tr>
    <tr style=\"height: 150px\">
\t\t<td>
\t\t
\t\t\t    <a href=\"evaluation/add\"><button class=\"btn btn-space btn-primary btn-big\" style=\"width: 98%; height: 139px;\"><i class=\"icon mdi mdi-open-in-new\"></i> Ajouter Evaluation </button></a>
\t\t\t
\t\t</td>
\t\t<td>
\t\t  
\t\t        <a href=\"evaluation/listerEvaluation\"><button class=\"btn btn-space btn-primary btn-big\" style=\"width: 98%; height: 139px;\"><i class=\"icon mdi mdi-view-list\"></i>lister evaluation</button></a>
\t\t\t
\t\t</td>
\t\t
\t\t<td>
\t\t   
\t\t        <a href=\"evaluation/appreciation\"><button class=\"btn btn-space btn-primary btn-big\" style=\"width: 98%; height: 139px;\"><i class=\"icon mdi mdi-edit\"></i>gestion d'appreciations</button></a>
\t\t
\t\t</td>
    </tr>
    
</tbody></table>


";
        
        $__internal_56c55eaae87070ca93340a50c9d6b663f218f5537b6a74956a450987125536a8->leave($__internal_56c55eaae87070ca93340a50c9d6b663f218f5537b6a74956a450987125536a8_prof);

        
        $__internal_042865e604cd8414e65d1b8024b7dc38458aa26171b17bcd8b6109389380af44->leave($__internal_042865e604cd8414e65d1b8024b7dc38458aa26171b17bcd8b6109389380af44_prof);

    }

    public function getTemplateName()
    {
        return "evaluation/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {% extends 'base.html.twig' %}

{% block body %}

<h1>Accueil</h1>

<table style=\"width:100%\">
\t<tbody><tr style=\"height: 130px\">
\t\t<td colspan=\"3\">
\t\t   
\t\t        <a href=\"#\"><button class=\"btn btn-space btn-warning btn-big\" style=\"width: 99%; height: 120px\"><i class=\"icon mdi mdi-home\"></i> Acceuil </button></a>
\t\t  
        </td>
    </tr>
    <tr style=\"height: 150px\">
\t\t<td>
\t\t
\t\t\t    <a href=\"evaluation/add\"><button class=\"btn btn-space btn-primary btn-big\" style=\"width: 98%; height: 139px;\"><i class=\"icon mdi mdi-open-in-new\"></i> Ajouter Evaluation </button></a>
\t\t\t
\t\t</td>
\t\t<td>
\t\t  
\t\t        <a href=\"evaluation/listerEvaluation\"><button class=\"btn btn-space btn-primary btn-big\" style=\"width: 98%; height: 139px;\"><i class=\"icon mdi mdi-view-list\"></i>lister evaluation</button></a>
\t\t\t
\t\t</td>
\t\t
\t\t<td>
\t\t   
\t\t        <a href=\"evaluation/appreciation\"><button class=\"btn btn-space btn-primary btn-big\" style=\"width: 98%; height: 139px;\"><i class=\"icon mdi mdi-edit\"></i>gestion d'appreciations</button></a>
\t\t
\t\t</td>
    </tr>
    
</tbody></table>


{% endblock %}", "evaluation/accueil.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\evaluation\\accueil.html.twig");
    }
}
