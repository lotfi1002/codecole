<?php

/* evaluation/listerEvaluation.html.twig */
class __TwigTemplate_860ea5a3da7a45303ea3c10d79927114b550fd5dd7010874834242675fb14f58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "evaluation/listerEvaluation.html.twig", 1);
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
        $__internal_98e2a1b11dd4fe6a5d50d5a6a6feb5cccacf548e9d7d3249e4086e301ea5d615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e2a1b11dd4fe6a5d50d5a6a6feb5cccacf548e9d7d3249e4086e301ea5d615->enter($__internal_98e2a1b11dd4fe6a5d50d5a6a6feb5cccacf548e9d7d3249e4086e301ea5d615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/listerEvaluation.html.twig"));

        $__internal_d4e852d4fdd11a1907c33972921446e03e1b63f2330f38c2261c0e34a916bd58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e852d4fdd11a1907c33972921446e03e1b63f2330f38c2261c0e34a916bd58->enter($__internal_d4e852d4fdd11a1907c33972921446e03e1b63f2330f38c2261c0e34a916bd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/listerEvaluation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98e2a1b11dd4fe6a5d50d5a6a6feb5cccacf548e9d7d3249e4086e301ea5d615->leave($__internal_98e2a1b11dd4fe6a5d50d5a6a6feb5cccacf548e9d7d3249e4086e301ea5d615_prof);

        
        $__internal_d4e852d4fdd11a1907c33972921446e03e1b63f2330f38c2261c0e34a916bd58->leave($__internal_d4e852d4fdd11a1907c33972921446e03e1b63f2330f38c2261c0e34a916bd58_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a623167aaaec2cab732addb97da3e2710280325501de58ed8a48bdd53494b882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a623167aaaec2cab732addb97da3e2710280325501de58ed8a48bdd53494b882->enter($__internal_a623167aaaec2cab732addb97da3e2710280325501de58ed8a48bdd53494b882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1d4d21ee6ecdde859e387b0fff460bf8396a036ad5c49d1b1a964b79f10b35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d4d21ee6ecdde859e387b0fff460bf8396a036ad5c49d1b1a964b79f10b35c->enter($__internal_a1d4d21ee6ecdde859e387b0fff460bf8396a036ad5c49d1b1a964b79f10b35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $context["c"] = 0;
        // line 6
        echo "    <h1 class=\"well\">résultat</h1>
   
                  <div class=\"col-sm-12\">
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">les classes</div>
                <div class=\"tab-container\">
                  <ul class=\"nav nav-tabs\">
                    ";
        // line 13
        $context["cls"] = "active";
        // line 14
        echo "                    ";
        $context["exp"] = "true";
        // line 15
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groupes"] ?? $this->getContext($context, "groupes")));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            echo " 
                    <li class=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["cls"] ?? $this->getContext($context, "cls")), "html", null, true);
            echo "\"><a href=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "classeFr", array(), "array"), "html", null, true);
            echo "\" onclick=\"changeT(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array(), "array"), "html", null, true);
            echo ");\"  data-toggle=\"tab\" aria-expanded=\"";
            echo twig_escape_filter($this->env, ($context["exp"] ?? $this->getContext($context, "exp")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "classeFr", array(), "array"), "html", null, true);
            echo "</a></li>
                    ";
            // line 17
            $context["cls"] = "";
            // line 18
            echo "                    ";
            $context["exp"] = "false";
            // line 19
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "


                     </ul>
                  <div class=\"tab-content\">
                    ";
        // line 25
        $context["cls"] = "active";
        // line 26
        echo "                    
                      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groupes"] ?? $this->getContext($context, "groupes")));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 28
            echo "

                    <div id=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "classeFr", array(), "array"), "html", null, true);
            echo "\" class=\"tab-pane ";
            echo twig_escape_filter($this->env, ($context["cls"] ?? $this->getContext($context, "cls")), "html", null, true);
            echo "\" >
                      <div id='container";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array(), "array"), "html", null, true);
            echo "' class=\"panel-body\">



<table class=\"table\">
                    <thead>
                      <tr>

                        <th>Titre d'evaluation</th>
                        <th>Note sur</th>
                        <th>Date</th>
                        <th>Discipline</th>
                        <th>Élément(s) de programme évalué(s)</th>
                      </tr>
                    </thead>
                    <tbody>
                    \t";
            // line 47
            $context["gid"] = $this->getAttribute($context["groupe"], "id", array(), "array");
            // line 48
            echo "                    \t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["evaluations"] ?? $this->getContext($context, "evaluations")), ($context["gid"] ?? $this->getContext($context, "gid")), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
                // line 49
                echo "                    \t<a id='a";
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array(), "array"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array(), "array"), "html", null, true);
                echo "' href='resultat?id_e=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array(), "array"), "html", null, true);
                echo "&id_g=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array(), "array"), "html", null, true);
                echo "' ></a>
                      <tr class='trh' id='";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array(), "array"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array(), "array"), "html", null, true);
                echo "' onclick=\"customHref(this.id)\">
                      \t
                        <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "titre", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "note", array(), "array"), "html", null, true);
                echo "</td>
                        <td class=\"date\">";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "date", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "element", array(), "array"), "html", null, true);
                echo "</td>
                       
                      </tr>
                      
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                    </tbody>
                  </table>




                      \t</div>
                    </div>
                    
                    ";
            // line 70
            $context["cls"] = "cont";
            // line 71
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "<style type=\"text/css\">
                    \t
                    \t.trh:hover{

                    \t\tbackground-color:#2a75f3; 
                    \t\tcolor:white;
                    \t\tcursor: pointer;
                    \t}
                    </style>
                    <script type=\"text/javascript\">
                    \tfunction customHref(id){
                    \t\t\tdocument.getElementById('a'+id).click();


                    \t}

                    </script>


";
        
        $__internal_a1d4d21ee6ecdde859e387b0fff460bf8396a036ad5c49d1b1a964b79f10b35c->leave($__internal_a1d4d21ee6ecdde859e387b0fff460bf8396a036ad5c49d1b1a964b79f10b35c_prof);

        
        $__internal_a623167aaaec2cab732addb97da3e2710280325501de58ed8a48bdd53494b882->leave($__internal_a623167aaaec2cab732addb97da3e2710280325501de58ed8a48bdd53494b882_prof);

    }

    public function getTemplateName()
    {
        return "evaluation/listerEvaluation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 73,  208 => 71,  206 => 70,  195 => 61,  184 => 56,  180 => 55,  176 => 54,  172 => 53,  168 => 52,  161 => 50,  150 => 49,  145 => 48,  143 => 47,  124 => 31,  118 => 30,  114 => 28,  110 => 27,  107 => 26,  105 => 25,  98 => 20,  92 => 19,  89 => 18,  87 => 17,  75 => 16,  68 => 15,  65 => 14,  63 => 13,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {% extends 'base.html.twig' %}

{% block body %}

{% set c = 0 %}
    <h1 class=\"well\">résultat</h1>
   
                  <div class=\"col-sm-12\">
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">les classes</div>
                <div class=\"tab-container\">
                  <ul class=\"nav nav-tabs\">
                    {% set cls = 'active' %}
                    {% set exp = 'true' %}
                    {% for groupe in groupes %} 
                    <li class=\"{{ cls }}\"><a href=\"#{{groupe['classeFr']}}\" onclick=\"changeT({{groupe['id']}});\"  data-toggle=\"tab\" aria-expanded=\"{{ exp }}\">{{groupe['classeFr']}}</a></li>
                    {% set cls = '' %}
                    {% set exp = 'false' %}
                    {% endfor %}



                     </ul>
                  <div class=\"tab-content\">
                    {% set cls = 'active' %}
                    
                      {% for groupe in groupes %}


                    <div id=\"{{groupe['classeFr']}}\" class=\"tab-pane {{ cls }}\" >
                      <div id='container{{groupe['id']}}' class=\"panel-body\">



<table class=\"table\">
                    <thead>
                      <tr>

                        <th>Titre d'evaluation</th>
                        <th>Note sur</th>
                        <th>Date</th>
                        <th>Discipline</th>
                        <th>Élément(s) de programme évalué(s)</th>
                      </tr>
                    </thead>
                    <tbody>
                    \t{% set gid = groupe['id'] %}
                    \t{% for evaluation in evaluations[gid] %}
                    \t<a id='a{{evaluation['id']}}-{{groupe['id']}}' href='resultat?id_e={{evaluation['id']}}&id_g={{groupe['id']}}' ></a>
                      <tr class='trh' id='{{evaluation['id']}}-{{groupe['id']}}' onclick=\"customHref(this.id)\">
                      \t
                        <td>{{evaluation['titre']}}</td>
                        <td>{{evaluation['note']}}</td>
                        <td class=\"date\">{{evaluation['date']}}</td>
                        <td>{{evaluation['nom']}}</td>
                        <td>{{evaluation['element']}}</td>
                       
                      </tr>
                      
                      {% endfor %}
                    </tbody>
                  </table>




                      \t</div>
                    </div>
                    
                    {% set cls = 'cont' %}

{% endfor %}
<style type=\"text/css\">
                    \t
                    \t.trh:hover{

                    \t\tbackground-color:#2a75f3; 
                    \t\tcolor:white;
                    \t\tcursor: pointer;
                    \t}
                    </style>
                    <script type=\"text/javascript\">
                    \tfunction customHref(id){
                    \t\t\tdocument.getElementById('a'+id).click();


                    \t}

                    </script>


{% endblock %}", "evaluation/listerEvaluation.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\evaluation\\listerEvaluation.html.twig");
    }
}
