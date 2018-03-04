<?php

/* myspace/listecoles.html.twig */
class __TwigTemplate_036da0cc05ca5604e20dffcd9fc93d8a3b05bb28993253b83ede13f2de4ec4e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "myspace/listecoles.html.twig", 1);
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
        $__internal_1827509ff7d30c72a466649db274243ff43dba4d58178dbd31ccc084b0ac9cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1827509ff7d30c72a466649db274243ff43dba4d58178dbd31ccc084b0ac9cbc->enter($__internal_1827509ff7d30c72a466649db274243ff43dba4d58178dbd31ccc084b0ac9cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/listecoles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1827509ff7d30c72a466649db274243ff43dba4d58178dbd31ccc084b0ac9cbc->leave($__internal_1827509ff7d30c72a466649db274243ff43dba4d58178dbd31ccc084b0ac9cbc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae498785f326793c291551c06f0fd33f3083e48c5913c31c9f038de58da433e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae498785f326793c291551c06f0fd33f3083e48c5913c31c9f038de58da433e8->enter($__internal_ae498785f326793c291551c06f0fd33f3083e48c5913c31c9f038de58da433e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1> Welcome Keltoum</h1>

<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"> Logout</a>


<table>
<th>
Nom
</th>
<th>
Adresse
</th>
<th>
Logo
</th>

";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ecoles"]) ? $context["ecoles"] : $this->getContext($context, "ecoles")));
        foreach ($context['_seq'] as $context["_key"] => $context["ecole"]) {
            // line 22
            echo "
<tr><td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "nom", array()), "html", null, true);
            echo "</td> <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "adresse", array()), "html", null, true);
            echo "</td> <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "logo", array()), "html", null, true);
            echo "</td></tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
</table>

";
        
        $__internal_ae498785f326793c291551c06f0fd33f3083e48c5913c31c9f038de58da433e8->leave($__internal_ae498785f326793c291551c06f0fd33f3083e48c5913c31c9f038de58da433e8_prof);

    }

    public function getTemplateName()
    {
        return "myspace/listecoles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  69 => 23,  66 => 22,  62 => 21,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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


<table>
<th>
Nom
</th>
<th>
Adresse
</th>
<th>
Logo
</th>

{% for ecole in ecoles %}

<tr><td>{{ ecole.nom }}</td> <td>{{ ecole.adresse }}</td> <td>{{ ecole.logo }}</td></tr>

{% endfor %}

</table>

{% endblock %}


", "myspace/listecoles.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\myspace\\listecoles.html.twig");
    }
}
