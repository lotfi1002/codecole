<?php

/* default/index.html.twig */
class __TwigTemplate_b4f386a019b7489396d9644eb09939b81c371b5541cfaac2b39d7445d4243e21 extends Twig_Template
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
        $__internal_918de5f554402148ce78eeb0d2355132d32f1705378eb85f582229b8e92d6492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918de5f554402148ce78eeb0d2355132d32f1705378eb85f582229b8e92d6492->enter($__internal_918de5f554402148ce78eeb0d2355132d32f1705378eb85f582229b8e92d6492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_918de5f554402148ce78eeb0d2355132d32f1705378eb85f582229b8e92d6492->leave($__internal_918de5f554402148ce78eeb0d2355132d32f1705378eb85f582229b8e92d6492_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65ea3d54ce13f075cacd0e97db48c6787c627c8ca7a9ebca7dc171e70c1d0f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ea3d54ce13f075cacd0e97db48c6787c627c8ca7a9ebca7dc171e70c1d0f26->enter($__internal_65ea3d54ce13f075cacd0e97db48c6787c627c8ca7a9ebca7dc171e70c1d0f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1> Welcome Keltoum</h1>

";
        
        $__internal_65ea3d54ce13f075cacd0e97db48c6787c627c8ca7a9ebca7dc171e70c1d0f26->leave($__internal_65ea3d54ce13f075cacd0e97db48c6787c627c8ca7a9ebca7dc171e70c1d0f26_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
