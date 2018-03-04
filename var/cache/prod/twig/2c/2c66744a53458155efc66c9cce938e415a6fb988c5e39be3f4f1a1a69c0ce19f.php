<?php

/* myspace/index.html.twig */
class __TwigTemplate_452c97201890c7668c62690d8b94a497b7fdef52b6fa20ed342a1fee137bcce2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91861ce691d646912955bb04f54714780e64f87b9d357749de270937cb6327f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91861ce691d646912955bb04f54714780e64f87b9d357749de270937cb6327f3->enter($__internal_91861ce691d646912955bb04f54714780e64f87b9d357749de270937cb6327f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/index.html.twig"));

        // line 1
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"> Logout</a>
TOTO";
        
        $__internal_91861ce691d646912955bb04f54714780e64f87b9d357749de270937cb6327f3->leave($__internal_91861ce691d646912955bb04f54714780e64f87b9d357749de270937cb6327f3_prof);

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
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{path('logout')}}\"> Logout</a>
TOTO", "myspace/index.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\myspace\\index.html.twig");
    }
}
