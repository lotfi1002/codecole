<?php

/* evaluation/evaluation.html.twig */
class __TwigTemplate_b92e3a2bbb62159d555a5b555ece8d8c6d03290e7bcfce75256ff3d7fd96e25b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "evaluation/evaluation.html.twig", 2);
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
        $__internal_76e8b362478d4a45fc2ab1421212ea6f7cdfcb2a6e9e856e83a58de3d4866ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e8b362478d4a45fc2ab1421212ea6f7cdfcb2a6e9e856e83a58de3d4866ce9->enter($__internal_76e8b362478d4a45fc2ab1421212ea6f7cdfcb2a6e9e856e83a58de3d4866ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/evaluation.html.twig"));

        $__internal_1ea5a69540373cf889b669544ad3d1bba394926e01b1f0cffcb5a3bc727c4564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea5a69540373cf889b669544ad3d1bba394926e01b1f0cffcb5a3bc727c4564->enter($__internal_1ea5a69540373cf889b669544ad3d1bba394926e01b1f0cffcb5a3bc727c4564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/evaluation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76e8b362478d4a45fc2ab1421212ea6f7cdfcb2a6e9e856e83a58de3d4866ce9->leave($__internal_76e8b362478d4a45fc2ab1421212ea6f7cdfcb2a6e9e856e83a58de3d4866ce9_prof);

        
        $__internal_1ea5a69540373cf889b669544ad3d1bba394926e01b1f0cffcb5a3bc727c4564->leave($__internal_1ea5a69540373cf889b669544ad3d1bba394926e01b1f0cffcb5a3bc727c4564_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_174bb3c7c911bd389d342f4afcee9fc736b836130a936fbf821e3da2280353ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174bb3c7c911bd389d342f4afcee9fc736b836130a936fbf821e3da2280353ca->enter($__internal_174bb3c7c911bd389d342f4afcee9fc736b836130a936fbf821e3da2280353ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb766c46ab2006894a8ac7eda52fcf4b04c2309c22ddd24d90f203866c175b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb766c46ab2006894a8ac7eda52fcf4b04c2309c22ddd24d90f203866c175b03->enter($__internal_bb766c46ab2006894a8ac7eda52fcf4b04c2309c22ddd24d90f203866c175b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1 class=\"well\">Créer Une Evaluation</h1>
  <div class=\"col-lg-12 well\">
  <div class=\"row\">
    ";
        // line 8
        if ((($context["done"] ?? $this->getContext($context, "done")) == 1)) {
            // line 9
            echo "    <div role=\"alert\" class=\"alert alert-success alert-dismissible\">
                    <button type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\" class=\"mdi mdi-close\"></span></button><span class=\"icon mdi mdi-check\"></span><strong>Bien!</strong>votre evaluation a été créé
                  </div>
    ";
        } elseif ((        // line 12
($context["done"] ?? $this->getContext($context, "done")) ==  -1)) {
            // line 13
            echo "    <div role=\"alert\" class=\"alert alert-danger alert-dismissible\">
                    <button type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\" class=\"mdi mdi-close\"></span></button><span class=\"icon mdi mdi-close-circle-o\"></span><strong>Error ! </strong> entrer tout les champs
                  </div>  
                  ";
        }
        // line 16
        echo "            
        <form method=\"get\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_evaluation");
        echo "\">
          <div class=\"col-sm-12\">
            <div class=\"row\">
              <div class=\"col-sm-6 form-group\">
                <label>Titre de l'évaluation</label>
                <input type=\"text\" name=\"titre\" placeholder=\"\" class=\"form-control\" required>
              </div>
              <div class=\"col-sm-6 form-group\">
                <label>Noté sur</label>
                <input type=\"number\" min='0' max='20' step='0.1' name=\"note\" placeholder=\"Pas de note\" class=\"form-control\" required>
              </div>
              <div class=\"col-sm-6 form-group\">
                        <label >Date</label>                     
                            <input type=\"date\" name=\"date\" class=\"form-control\" id=\"date\" name=\"date\" required>
                    </div>
                    <div class=\"col-sm-6 form-group\">
                        <label >Classe</label>                     
                            <select name=\"classe\" class=\"form-control\" >
                
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classes"] ?? $this->getContext($context, "classes")));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            echo " 
                      <option value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "classeFr", array(), "array"), "html", null, true);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </select> 
                    </div>
            </div>          
          <div class=\"form-group\">
            <label>Domaine, discipline, groupe de compétences</label>
             <select name=\"discipline\" class=\"form-control\" >
                
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["matieres"] ?? $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            echo " 
                      <option value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nom", array(), "array"), "html", null, true);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </select> 
          </div>    
          <div class=\"form-group\">
            <label>Élément(s) de programme évalué(s) - max 128 caractères</label>
            <input type=\"text\" placeholder=\"Ex: Pratiquer différents formes de lecture \" name='element' class=\"form-control\" required>

          </div>  
            <h4>Compétences évaluées</h4>
    <button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
 Insérer Depuis le référentiel
  </button>
</p>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <h4 class=\"modal-title\">Cycle 2 - Programme 2018</h4>
        </div>
        <div class=\"modal-body\">
          <table id=\"table1\" class=\"table table-striped table-hover table-fw-widget\">
                    
                    <thead>
                  <tr>
                         <th></th>
                        
                        <th>competance</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["competances"] ?? $this->getContext($context, "competances")));
        foreach ($context['_seq'] as $context["_key"] => $context["competance"]) {
            echo " 
                      <tr class=\"odd gradeX\">
                        <td><input  type=\"checkbox\" name=\"competances[]\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["competance"], "getId", array(), "method"), "html", null, true);
            echo "\">
                          </td>
                        
                        <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["competance"], "getNom", array(), "method"), "html", null, true);
            echo "</td>
                      </tr>
                      </tbody>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                    </table>


        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
        </div>
      </div>
    </div>
  </div>
  </div>



          <button type=\"submit\"  class=\"btn btn-lg btn-info\">Enregistrer</button>          
          </div>
        </form> 
        </div>
  </div>
 
";
        
        $__internal_bb766c46ab2006894a8ac7eda52fcf4b04c2309c22ddd24d90f203866c175b03->leave($__internal_bb766c46ab2006894a8ac7eda52fcf4b04c2309c22ddd24d90f203866c175b03_prof);

        
        $__internal_174bb3c7c911bd389d342f4afcee9fc736b836130a936fbf821e3da2280353ca->leave($__internal_174bb3c7c911bd389d342f4afcee9fc736b836130a936fbf821e3da2280353ca_prof);

    }

    public function getTemplateName()
    {
        return "evaluation/evaluation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 92,  184 => 88,  178 => 85,  171 => 83,  135 => 49,  125 => 47,  119 => 46,  110 => 39,  100 => 37,  94 => 36,  72 => 17,  69 => 16,  63 => 13,  61 => 12,  56 => 9,  54 => 8,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
    {% extends 'base.html.twig' %}

{% block body %}
    <h1 class=\"well\">Créer Une Evaluation</h1>
  <div class=\"col-lg-12 well\">
  <div class=\"row\">
    {% if done==1 %}
    <div role=\"alert\" class=\"alert alert-success alert-dismissible\">
                    <button type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\" class=\"mdi mdi-close\"></span></button><span class=\"icon mdi mdi-check\"></span><strong>Bien!</strong>votre evaluation a été créé
                  </div>
    {% elseif done==-1 %}
    <div role=\"alert\" class=\"alert alert-danger alert-dismissible\">
                    <button type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\" class=\"mdi mdi-close\"></span></button><span class=\"icon mdi mdi-close-circle-o\"></span><strong>Error ! </strong> entrer tout les champs
                  </div>  
                  {% endif %}            
        <form method=\"get\" action=\"{{path('save_evaluation')}}\">
          <div class=\"col-sm-12\">
            <div class=\"row\">
              <div class=\"col-sm-6 form-group\">
                <label>Titre de l'évaluation</label>
                <input type=\"text\" name=\"titre\" placeholder=\"\" class=\"form-control\" required>
              </div>
              <div class=\"col-sm-6 form-group\">
                <label>Noté sur</label>
                <input type=\"number\" min='0' max='20' step='0.1' name=\"note\" placeholder=\"Pas de note\" class=\"form-control\" required>
              </div>
              <div class=\"col-sm-6 form-group\">
                        <label >Date</label>                     
                            <input type=\"date\" name=\"date\" class=\"form-control\" id=\"date\" name=\"date\" required>
                    </div>
                    <div class=\"col-sm-6 form-group\">
                        <label >Classe</label>                     
                            <select name=\"classe\" class=\"form-control\" >
                
                {% for classe in classes %} 
                      <option value=\"{{classe['id']}}\">{{classe['classeFr']}}</option>
                      {% endfor %}
            </select> 
                    </div>
            </div>          
          <div class=\"form-group\">
            <label>Domaine, discipline, groupe de compétences</label>
             <select name=\"discipline\" class=\"form-control\" >
                
                {% for matiere in matieres %} 
                      <option value=\"{{matiere['id']}}\">{{matiere['nom']}}</option>
                      {% endfor %}
            </select> 
          </div>    
          <div class=\"form-group\">
            <label>Élément(s) de programme évalué(s) - max 128 caractères</label>
            <input type=\"text\" placeholder=\"Ex: Pratiquer différents formes de lecture \" name='element' class=\"form-control\" required>

          </div>  
            <h4>Compétences évaluées</h4>
    <button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
 Insérer Depuis le référentiel
  </button>
</p>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <h4 class=\"modal-title\">Cycle 2 - Programme 2018</h4>
        </div>
        <div class=\"modal-body\">
          <table id=\"table1\" class=\"table table-striped table-hover table-fw-widget\">
                    
                    <thead>
                  <tr>
                         <th></th>
                        
                        <th>competance</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                      {% for competance in competances %} 
                      <tr class=\"odd gradeX\">
                        <td><input  type=\"checkbox\" name=\"competances[]\" value=\"{{competance.getId()}}\">
                          </td>
                        
                        <td>{{competance.getNom()}}</td>
                      </tr>
                      </tbody>
                      {% endfor %}
                    </table>


        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
        </div>
      </div>
    </div>
  </div>
  </div>



          <button type=\"submit\"  class=\"btn btn-lg btn-info\">Enregistrer</button>          
          </div>
        </form> 
        </div>
  </div>
 
{% endblock %}



















", "evaluation/evaluation.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\evaluation\\evaluation.html.twig");
    }
}
