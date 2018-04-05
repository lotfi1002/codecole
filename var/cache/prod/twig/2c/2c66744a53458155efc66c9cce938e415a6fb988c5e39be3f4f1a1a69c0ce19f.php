<?php

/* myspace/index.html.twig */
class __TwigTemplate_452c97201890c7668c62690d8b94a497b7fdef52b6fa20ed342a1fee137bcce2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "myspace/index.html.twig", 1);
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
        $__internal_aa70736774e45eb955877a3986473857f2d2ae259644bc1a35ffd8590a736670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa70736774e45eb955877a3986473857f2d2ae259644bc1a35ffd8590a736670->enter($__internal_aa70736774e45eb955877a3986473857f2d2ae259644bc1a35ffd8590a736670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa70736774e45eb955877a3986473857f2d2ae259644bc1a35ffd8590a736670->leave($__internal_aa70736774e45eb955877a3986473857f2d2ae259644bc1a35ffd8590a736670_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cc93620a80ea7c9cdc15c172ba85d6d67b8f0a20c50524d3863e7d8859db305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc93620a80ea7c9cdc15c172ba85d6d67b8f0a20c50524d3863e7d8859db305->enter($__internal_1cc93620a80ea7c9cdc15c172ba85d6d67b8f0a20c50524d3863e7d8859db305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1> Welcome Keltoum</h1>

<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"> Logout</a>
";
        
        $__internal_1cc93620a80ea7c9cdc15c172ba85d6d67b8f0a20c50524d3863e7d8859db305->leave($__internal_1cc93620a80ea7c9cdc15c172ba85d6d67b8f0a20c50524d3863e7d8859db305_prof);

    }

    public function getTemplateName()
    {
        return "myspace/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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

<h1> Welcome Keltoum</h1>

<a href=\"{{path('logout')}}\"> Logout</a>
{% endblock %}", "myspace/index.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\myspace\\index.html.twig");
    }
}
