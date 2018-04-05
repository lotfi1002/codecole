<?php

/* adminspace/index.html.twig */
class __TwigTemplate_c2b0e862de355b97d7f2b8422757d868fc37a5b07a9de27052cab55897a0ef3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adminspace/index.html.twig", 1);
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
        $__internal_0e3a47a0ca1abafa301c363d72ec2293116688cc393bb4eebd90ff199105a1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3a47a0ca1abafa301c363d72ec2293116688cc393bb4eebd90ff199105a1f6->enter($__internal_0e3a47a0ca1abafa301c363d72ec2293116688cc393bb4eebd90ff199105a1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminspace/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e3a47a0ca1abafa301c363d72ec2293116688cc393bb4eebd90ff199105a1f6->leave($__internal_0e3a47a0ca1abafa301c363d72ec2293116688cc393bb4eebd90ff199105a1f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3347da315adfc4971963a457e4580222128bc9028bb824e162b6ddd5bf316f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3347da315adfc4971963a457e4580222128bc9028bb824e162b6ddd5bf316f26->enter($__internal_3347da315adfc4971963a457e4580222128bc9028bb824e162b6ddd5bf316f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1> Admin space</h1>

<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"> Logout</a>
";
        
        $__internal_3347da315adfc4971963a457e4580222128bc9028bb824e162b6ddd5bf316f26->leave($__internal_3347da315adfc4971963a457e4580222128bc9028bb824e162b6ddd5bf316f26_prof);

    }

    public function getTemplateName()
    {
        return "adminspace/index.html.twig";
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

<h1> Admin space</h1>

<a href=\"{{path('logout')}}\"> Logout</a>
{% endblock %}", "adminspace/index.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\adminspace\\index.html.twig");
    }
}
