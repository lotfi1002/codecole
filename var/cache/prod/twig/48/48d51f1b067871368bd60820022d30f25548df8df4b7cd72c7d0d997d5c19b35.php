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
        $__internal_177cb7236b69b1554bd92990dbaf00e875115a5b279c17428f22e060de6a15f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177cb7236b69b1554bd92990dbaf00e875115a5b279c17428f22e060de6a15f3->enter($__internal_177cb7236b69b1554bd92990dbaf00e875115a5b279c17428f22e060de6a15f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_177cb7236b69b1554bd92990dbaf00e875115a5b279c17428f22e060de6a15f3->leave($__internal_177cb7236b69b1554bd92990dbaf00e875115a5b279c17428f22e060de6a15f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4f7707cb42d30b5b1a90fac0f44784453cb4e7f2cf499d758670f04af69e7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f7707cb42d30b5b1a90fac0f44784453cb4e7f2cf499d758670f04af69e7a3->enter($__internal_f4f7707cb42d30b5b1a90fac0f44784453cb4e7f2cf499d758670f04af69e7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f4f7707cb42d30b5b1a90fac0f44784453cb4e7f2cf499d758670f04af69e7a3->leave($__internal_f4f7707cb42d30b5b1a90fac0f44784453cb4e7f2cf499d758670f04af69e7a3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a347bd3cb3ea96e43949a54d077e435f91177abb52cceed94aeb831e6ca5458c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a347bd3cb3ea96e43949a54d077e435f91177abb52cceed94aeb831e6ca5458c->enter($__internal_a347bd3cb3ea96e43949a54d077e435f91177abb52cceed94aeb831e6ca5458c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a347bd3cb3ea96e43949a54d077e435f91177abb52cceed94aeb831e6ca5458c->leave($__internal_a347bd3cb3ea96e43949a54d077e435f91177abb52cceed94aeb831e6ca5458c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_99bbeee845c3b637d6b59c145f8d09a2d31a66c4db5ab8993d8f7039b1542164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bbeee845c3b637d6b59c145f8d09a2d31a66c4db5ab8993d8f7039b1542164->enter($__internal_99bbeee845c3b637d6b59c145f8d09a2d31a66c4db5ab8993d8f7039b1542164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_99bbeee845c3b637d6b59c145f8d09a2d31a66c4db5ab8993d8f7039b1542164->leave($__internal_99bbeee845c3b637d6b59c145f8d09a2d31a66c4db5ab8993d8f7039b1542164_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c08c34c58d4f5059181cbe8995d27529310a81a96a8e01ec6fccd1612c29c0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08c34c58d4f5059181cbe8995d27529310a81a96a8e01ec6fccd1612c29c0c7->enter($__internal_c08c34c58d4f5059181cbe8995d27529310a81a96a8e01ec6fccd1612c29c0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c08c34c58d4f5059181cbe8995d27529310a81a96a8e01ec6fccd1612c29c0c7->leave($__internal_c08c34c58d4f5059181cbe8995d27529310a81a96a8e01ec6fccd1612c29c0c7_prof);

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
