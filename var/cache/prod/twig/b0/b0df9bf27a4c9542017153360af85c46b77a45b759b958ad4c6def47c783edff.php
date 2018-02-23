<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bf033f54da4e49550989abe28cf6bcc57466651b44871cd4f4a4568008990cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05b216723e7771dfd24913b5339d15e6856e2b35f5dd662b245537e90cdd1711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b216723e7771dfd24913b5339d15e6856e2b35f5dd662b245537e90cdd1711->enter($__internal_05b216723e7771dfd24913b5339d15e6856e2b35f5dd662b245537e90cdd1711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_05b216723e7771dfd24913b5339d15e6856e2b35f5dd662b245537e90cdd1711->leave($__internal_05b216723e7771dfd24913b5339d15e6856e2b35f5dd662b245537e90cdd1711_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7ff45a2d47961c4a0fd18e44d02ae07a09ff2c0592081c308258f3e9e49fd8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ff45a2d47961c4a0fd18e44d02ae07a09ff2c0592081c308258f3e9e49fd8e->enter($__internal_d7ff45a2d47961c4a0fd18e44d02ae07a09ff2c0592081c308258f3e9e49fd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d7ff45a2d47961c4a0fd18e44d02ae07a09ff2c0592081c308258f3e9e49fd8e->leave($__internal_d7ff45a2d47961c4a0fd18e44d02ae07a09ff2c0592081c308258f3e9e49fd8e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4da2293b05840a1c6911cf4638cffcc9ab1e68134f5884b9c55a6376344d287f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da2293b05840a1c6911cf4638cffcc9ab1e68134f5884b9c55a6376344d287f->enter($__internal_4da2293b05840a1c6911cf4638cffcc9ab1e68134f5884b9c55a6376344d287f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4da2293b05840a1c6911cf4638cffcc9ab1e68134f5884b9c55a6376344d287f->leave($__internal_4da2293b05840a1c6911cf4638cffcc9ab1e68134f5884b9c55a6376344d287f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac73909e679761b699395209debc1ec7d8f9294ca396b64ee511eff9489ffa35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac73909e679761b699395209debc1ec7d8f9294ca396b64ee511eff9489ffa35->enter($__internal_ac73909e679761b699395209debc1ec7d8f9294ca396b64ee511eff9489ffa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ac73909e679761b699395209debc1ec7d8f9294ca396b64ee511eff9489ffa35->leave($__internal_ac73909e679761b699395209debc1ec7d8f9294ca396b64ee511eff9489ffa35_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\codecole\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
