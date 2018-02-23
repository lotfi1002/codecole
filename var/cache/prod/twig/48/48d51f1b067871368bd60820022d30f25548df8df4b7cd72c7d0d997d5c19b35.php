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
        $__internal_d985e5724fb94bc676e0ae5c3d4a8318243b8722efcecfba6b38196af7fdd21f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d985e5724fb94bc676e0ae5c3d4a8318243b8722efcecfba6b38196af7fdd21f->enter($__internal_d985e5724fb94bc676e0ae5c3d4a8318243b8722efcecfba6b38196af7fdd21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d985e5724fb94bc676e0ae5c3d4a8318243b8722efcecfba6b38196af7fdd21f->leave($__internal_d985e5724fb94bc676e0ae5c3d4a8318243b8722efcecfba6b38196af7fdd21f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fb2abee28b14abc4c47963f3e49eade967b3d61d3878a1b225c05693e391e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb2abee28b14abc4c47963f3e49eade967b3d61d3878a1b225c05693e391e3f->enter($__internal_2fb2abee28b14abc4c47963f3e49eade967b3d61d3878a1b225c05693e391e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2fb2abee28b14abc4c47963f3e49eade967b3d61d3878a1b225c05693e391e3f->leave($__internal_2fb2abee28b14abc4c47963f3e49eade967b3d61d3878a1b225c05693e391e3f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0d3e6f7facd66c2d0ddcea43d4044ec603e6081c6595d21fc0b68c294a2e39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d3e6f7facd66c2d0ddcea43d4044ec603e6081c6595d21fc0b68c294a2e39c->enter($__internal_d0d3e6f7facd66c2d0ddcea43d4044ec603e6081c6595d21fc0b68c294a2e39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d0d3e6f7facd66c2d0ddcea43d4044ec603e6081c6595d21fc0b68c294a2e39c->leave($__internal_d0d3e6f7facd66c2d0ddcea43d4044ec603e6081c6595d21fc0b68c294a2e39c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a46446da1769e4b1edb8062e9c188b840aaaf91198af71a659ada441ca8e2a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a46446da1769e4b1edb8062e9c188b840aaaf91198af71a659ada441ca8e2a4->enter($__internal_4a46446da1769e4b1edb8062e9c188b840aaaf91198af71a659ada441ca8e2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4a46446da1769e4b1edb8062e9c188b840aaaf91198af71a659ada441ca8e2a4->leave($__internal_4a46446da1769e4b1edb8062e9c188b840aaaf91198af71a659ada441ca8e2a4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53c341ea74f7e384bc19643ca003b37e6c0b43367bd8eaa5882422dca9bf5bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c341ea74f7e384bc19643ca003b37e6c0b43367bd8eaa5882422dca9bf5bbe->enter($__internal_53c341ea74f7e384bc19643ca003b37e6c0b43367bd8eaa5882422dca9bf5bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_53c341ea74f7e384bc19643ca003b37e6c0b43367bd8eaa5882422dca9bf5bbe->leave($__internal_53c341ea74f7e384bc19643ca003b37e6c0b43367bd8eaa5882422dca9bf5bbe_prof);

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
