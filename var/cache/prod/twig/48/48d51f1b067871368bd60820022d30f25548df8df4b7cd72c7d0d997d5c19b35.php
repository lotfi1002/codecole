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
        $__internal_c06ec3d6172197dae80ae2d883ba0b748ceea467c49ba369e4befa02af1ade5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06ec3d6172197dae80ae2d883ba0b748ceea467c49ba369e4befa02af1ade5a->enter($__internal_c06ec3d6172197dae80ae2d883ba0b748ceea467c49ba369e4befa02af1ade5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c06ec3d6172197dae80ae2d883ba0b748ceea467c49ba369e4befa02af1ade5a->leave($__internal_c06ec3d6172197dae80ae2d883ba0b748ceea467c49ba369e4befa02af1ade5a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e4c4d2faf4a29bb4e815a81d220acc4edd77667312e0311c89f93a37d70e7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4c4d2faf4a29bb4e815a81d220acc4edd77667312e0311c89f93a37d70e7d1->enter($__internal_9e4c4d2faf4a29bb4e815a81d220acc4edd77667312e0311c89f93a37d70e7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9e4c4d2faf4a29bb4e815a81d220acc4edd77667312e0311c89f93a37d70e7d1->leave($__internal_9e4c4d2faf4a29bb4e815a81d220acc4edd77667312e0311c89f93a37d70e7d1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba8b28cdf40cc4e14d096262cd4c60cfb9a6f63ce3608164ee2d823091461502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8b28cdf40cc4e14d096262cd4c60cfb9a6f63ce3608164ee2d823091461502->enter($__internal_ba8b28cdf40cc4e14d096262cd4c60cfb9a6f63ce3608164ee2d823091461502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ba8b28cdf40cc4e14d096262cd4c60cfb9a6f63ce3608164ee2d823091461502->leave($__internal_ba8b28cdf40cc4e14d096262cd4c60cfb9a6f63ce3608164ee2d823091461502_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cce833c212fb1ffb410488ee17e09791119c6b791a5c08d06546f3d974957a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce833c212fb1ffb410488ee17e09791119c6b791a5c08d06546f3d974957a8d->enter($__internal_cce833c212fb1ffb410488ee17e09791119c6b791a5c08d06546f3d974957a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cce833c212fb1ffb410488ee17e09791119c6b791a5c08d06546f3d974957a8d->leave($__internal_cce833c212fb1ffb410488ee17e09791119c6b791a5c08d06546f3d974957a8d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6748ec9b6c6db840c028b558e8298464f7bedab3ad2eae87e1a4493dd775b246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6748ec9b6c6db840c028b558e8298464f7bedab3ad2eae87e1a4493dd775b246->enter($__internal_6748ec9b6c6db840c028b558e8298464f7bedab3ad2eae87e1a4493dd775b246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6748ec9b6c6db840c028b558e8298464f7bedab3ad2eae87e1a4493dd775b246->leave($__internal_6748ec9b6c6db840c028b558e8298464f7bedab3ad2eae87e1a4493dd775b246_prof);

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
