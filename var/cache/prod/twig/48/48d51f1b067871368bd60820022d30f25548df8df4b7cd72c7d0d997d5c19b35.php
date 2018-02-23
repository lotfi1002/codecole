<?php

/* base.html.twig */
class __TwigTemplate_9d88332ed71961b09d263aa635e52c63cf207be4f496f0e3628f5cd83c4f98a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77a469c3ec14f8c8ce0c8e1247ca0e08e19717fc17053f5b54f11365cbed3093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a469c3ec14f8c8ce0c8e1247ca0e08e19717fc17053f5b54f11365cbed3093->enter($__internal_77a469c3ec14f8c8ce0c8e1247ca0e08e19717fc17053f5b54f11365cbed3093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_77a469c3ec14f8c8ce0c8e1247ca0e08e19717fc17053f5b54f11365cbed3093->leave($__internal_77a469c3ec14f8c8ce0c8e1247ca0e08e19717fc17053f5b54f11365cbed3093_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_95c45f4495e3269b3a8612fb4014f8813bbe3ab0afb39822513a37b78a11d61d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c45f4495e3269b3a8612fb4014f8813bbe3ab0afb39822513a37b78a11d61d->enter($__internal_95c45f4495e3269b3a8612fb4014f8813bbe3ab0afb39822513a37b78a11d61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_95c45f4495e3269b3a8612fb4014f8813bbe3ab0afb39822513a37b78a11d61d->leave($__internal_95c45f4495e3269b3a8612fb4014f8813bbe3ab0afb39822513a37b78a11d61d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b8436312f81b51d335f0b8346bb9e3ffbdff8680cbca00a87dd3daf65bdeca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8436312f81b51d335f0b8346bb9e3ffbdff8680cbca00a87dd3daf65bdeca9->enter($__internal_5b8436312f81b51d335f0b8346bb9e3ffbdff8680cbca00a87dd3daf65bdeca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5b8436312f81b51d335f0b8346bb9e3ffbdff8680cbca00a87dd3daf65bdeca9->leave($__internal_5b8436312f81b51d335f0b8346bb9e3ffbdff8680cbca00a87dd3daf65bdeca9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1db9d64b2d7a329b7da0b08709c07d209297e04dc14b8d6da98548cd7cec53ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db9d64b2d7a329b7da0b08709c07d209297e04dc14b8d6da98548cd7cec53ee->enter($__internal_1db9d64b2d7a329b7da0b08709c07d209297e04dc14b8d6da98548cd7cec53ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1db9d64b2d7a329b7da0b08709c07d209297e04dc14b8d6da98548cd7cec53ee->leave($__internal_1db9d64b2d7a329b7da0b08709c07d209297e04dc14b8d6da98548cd7cec53ee_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_097216c24db258ed69aca6e3018ba151858372a980552601167acc8c2c1dec9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097216c24db258ed69aca6e3018ba151858372a980552601167acc8c2c1dec9f->enter($__internal_097216c24db258ed69aca6e3018ba151858372a980552601167acc8c2c1dec9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_097216c24db258ed69aca6e3018ba151858372a980552601167acc8c2c1dec9f->leave($__internal_097216c24db258ed69aca6e3018ba151858372a980552601167acc8c2c1dec9f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\base.html.twig");
    }
}
