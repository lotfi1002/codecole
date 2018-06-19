<?php

/* default/index.html.twig */
class __TwigTemplate_a4a8f5255bff773ab01537a40755a636eabd4a0d3854916dbd4b4a51117ec7e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_06e1786d0ccf021bdffa052d6f7cad418446256681de0b9d69a1c038bb44c125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e1786d0ccf021bdffa052d6f7cad418446256681de0b9d69a1c038bb44c125->enter($__internal_06e1786d0ccf021bdffa052d6f7cad418446256681de0b9d69a1c038bb44c125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_3503a5efb5b8b382918a09f1da134b1d6b1244ffecebb2f131ba39175aaa7ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3503a5efb5b8b382918a09f1da134b1d6b1244ffecebb2f131ba39175aaa7ed6->enter($__internal_3503a5efb5b8b382918a09f1da134b1d6b1244ffecebb2f131ba39175aaa7ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06e1786d0ccf021bdffa052d6f7cad418446256681de0b9d69a1c038bb44c125->leave($__internal_06e1786d0ccf021bdffa052d6f7cad418446256681de0b9d69a1c038bb44c125_prof);

        
        $__internal_3503a5efb5b8b382918a09f1da134b1d6b1244ffecebb2f131ba39175aaa7ed6->leave($__internal_3503a5efb5b8b382918a09f1da134b1d6b1244ffecebb2f131ba39175aaa7ed6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9028d281dee4c847455b4a28169a1aed134c0c7a9eb679c92f03c7b8c3c530e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9028d281dee4c847455b4a28169a1aed134c0c7a9eb679c92f03c7b8c3c530e->enter($__internal_a9028d281dee4c847455b4a28169a1aed134c0c7a9eb679c92f03c7b8c3c530e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7da4ff8601543b8e42293e12e8a871a8aab86f1b6d1542cfa7eef74706fbe2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da4ff8601543b8e42293e12e8a871a8aab86f1b6d1542cfa7eef74706fbe2d0->enter($__internal_7da4ff8601543b8e42293e12e8a871a8aab86f1b6d1542cfa7eef74706fbe2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1> Welcome Keltoum</h1>

";
        
        $__internal_7da4ff8601543b8e42293e12e8a871a8aab86f1b6d1542cfa7eef74706fbe2d0->leave($__internal_7da4ff8601543b8e42293e12e8a871a8aab86f1b6d1542cfa7eef74706fbe2d0_prof);

        
        $__internal_a9028d281dee4c847455b4a28169a1aed134c0c7a9eb679c92f03c7b8c3c530e->leave($__internal_a9028d281dee4c847455b4a28169a1aed134c0c7a9eb679c92f03c7b8c3c530e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<h1> Welcome Keltoum</h1>

{% endblock %}
", "default/index.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\default\\index.html.twig");
    }
}
