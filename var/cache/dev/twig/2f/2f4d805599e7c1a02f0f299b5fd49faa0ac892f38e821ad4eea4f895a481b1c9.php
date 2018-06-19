<?php

/* myspace/ecoleIns.html.twig */
class __TwigTemplate_d57600fe0f54dc740486cd76ad1ddf4b4b60b3a9f7ee7460bb6c40e141d8c711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "myspace/ecoleIns.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a279fc1881bbfa889c61a32f0952487fc34ab62942cb4501d6f4b2eb0a8b113c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a279fc1881bbfa889c61a32f0952487fc34ab62942cb4501d6f4b2eb0a8b113c->enter($__internal_a279fc1881bbfa889c61a32f0952487fc34ab62942cb4501d6f4b2eb0a8b113c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/ecoleIns.html.twig"));

        $__internal_f10ecf98629c8b62d0d19802febb8f78cd48a8f8e3c97c944bd6d8c258477421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10ecf98629c8b62d0d19802febb8f78cd48a8f8e3c97c944bd6d8c258477421->enter($__internal_f10ecf98629c8b62d0d19802febb8f78cd48a8f8e3c97c944bd6d8c258477421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/ecoleIns.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a279fc1881bbfa889c61a32f0952487fc34ab62942cb4501d6f4b2eb0a8b113c->leave($__internal_a279fc1881bbfa889c61a32f0952487fc34ab62942cb4501d6f4b2eb0a8b113c_prof);

        
        $__internal_f10ecf98629c8b62d0d19802febb8f78cd48a8f8e3c97c944bd6d8c258477421->leave($__internal_f10ecf98629c8b62d0d19802febb8f78cd48a8f8e3c97c944bd6d8c258477421_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7526d9250032bc0f589652a03736bb08b0b35e03f2e33b3ba6f43cb5ead1481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7526d9250032bc0f589652a03736bb08b0b35e03f2e33b3ba6f43cb5ead1481->enter($__internal_b7526d9250032bc0f589652a03736bb08b0b35e03f2e33b3ba6f43cb5ead1481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d30ce8b76b1909d1497efcbdcee7a63b123e11d471381efdbc3819c91e04b6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30ce8b76b1909d1497efcbdcee7a63b123e11d471381efdbc3819c91e04b6a2->enter($__internal_d30ce8b76b1909d1497efcbdcee7a63b123e11d471381efdbc3819c91e04b6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<link href=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<div class=\"panel panel-default panel-border-color panel-border-color-primary\">
  <div class=\"panel-heading panel-heading-divider\"><span class=\"panel-subtitle\"></span></div>
  <div class=\"panel-body\">
    <form action=\"#\" style=\"border-radius: 0px;\" class=\"form-horizontal group-border-dashed\">
      <div class=\"form-group\">
        <label class=\"col-sm-3 control-label\">Nom</label>
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"nom\" placeholder=\"nom\" class=\"form-control\">
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"col-sm-3 control-label\">Adresse</label>
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"adresse\" placeholder=\"adresse\" class=\"form-control\">
        </div>
      </div>
    </form>
  </div>
</div>
<div class=\"container\">
    <div class=\"row clearfix\">
    <div class=\"col-md-12 column\">
      <table class=\"table table-bordered table-hover\" id=\"tab_logic\">
        <thead>
          <tr >
            <th class=\"text-center\">
              #
            </th>
            <th class=\"text-center\">
              Cycle
            </th>
            <th class=\"text-center\">
              Niveau
            </th>
          
          </tr>
        </thead>
        <tbody>
          <tr id='addr0'>
            <td>
            1
            </td>
            <td>
            
             <select type=\"text\" name='Cycle'  placeholder='Cycle' class=\"form-control\">
                      <option value\"Maternelle\">Maternelle</option>
                        <option value\"Primaire\">Primaire</option>
                        <option value\"Secondaire\">Secondaire</option>
                </select>
            </td>
            <td>
            <select type=\"text\" name='Niveau' placeholder='Niveau' class=\"form-control\"/>
            <optgroup label=\"Maternelle\">
                 <option value \"PS\">PS- MS -GS </option>
            </optgroup>
            <optgroup label=\"Primaire\">
              <option value \"CP CE1 CE2 CM1 CM2\"> CP- CE1- CE2- CM1- CM2 </option>
            </optgroup>
             <optgroup label=\"Secondaire\">
              <option value \"CP CE1 CE2 CM1 CM2\"> CP- CE1- CE2- CM1- CM2 </option>
            </optgroup>           
                </select>
            </td>
          </tr>
          <tr id='addr1'></tr>
        </tbody>
      </table>
    </div>
  </div>
  <a id=\"add_row\" class=\"btn btn-default pull-left\">Ajouter</a><a id='delete_row' class=\"pull-right btn btn-default\">Supprimer</a>
</div>
 <style type=\"text/css\">
.ce_btn_elv{
  border:none;
  background: transparent;
  margin-left: 570px;
}
</style>
          <div class=\"row\">
            <div class=\"form-group xs-pt-10\">
              <div class=\"icon-container col-sm-3\">
                <button class=\"ce_btn_elv\" type=\"submit\"><div class=\"icon\"><span class=\"mdi mdi-check\"></span></div><span class=\"icon-class\"> Valider </span></button>
              </div>
<script type=\"text/javascript\">
     \$(document).ready(function(){
      var i=1;
     \$(\"#add_row\").click(function(){
      \$('#addr'+i).html(\"<td>\"+ (i+1) +\"</td><td><select name='Cycle'  placeholder='Cycle' class='form-control'><option value='Matrenelle'>Maternelle</option><option value='Primaire'>Primaire</option><option value='Secondaire'>Secondaire</option></select></td><td><select name='Niveau'  placeholder='Niveau' class='form-control'><optgroup label='Maternelle'><option value 'PS'>PS- MS -GS </option></optgroup><optgroup label='Primaire'><option value 'CP CE1 CE2 CM1 CM2'>CP- CE1- CE2- CM1- CM2</option></optgroup><optgroup label='Secondaire'><option value 'CP CE1 CE2 CM1 CM2'>CP- CE1- CE2- CM1- CM2</option></optgroup></select></td>\");

      \$('#tab_logic').append('<tr id=\"addr'+(i+1)+'\"></tr>');
      i++; 
  });
     \$(\"#delete_row\").click(function(){
       if(i>1){
     \$(\"#addr\"+(i-1)).html('');
     i--;
     }
   });

});</script>
";
        
        $__internal_d30ce8b76b1909d1497efcbdcee7a63b123e11d471381efdbc3819c91e04b6a2->leave($__internal_d30ce8b76b1909d1497efcbdcee7a63b123e11d471381efdbc3819c91e04b6a2_prof);

        
        $__internal_b7526d9250032bc0f589652a03736bb08b0b35e03f2e33b3ba6f43cb5ead1481->leave($__internal_b7526d9250032bc0f589652a03736bb08b0b35e03f2e33b3ba6f43cb5ead1481_prof);

    }

    public function getTemplateName()
    {
        return "myspace/ecoleIns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}

<link href=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<div class=\"panel panel-default panel-border-color panel-border-color-primary\">
  <div class=\"panel-heading panel-heading-divider\"><span class=\"panel-subtitle\"></span></div>
  <div class=\"panel-body\">
    <form action=\"#\" style=\"border-radius: 0px;\" class=\"form-horizontal group-border-dashed\">
      <div class=\"form-group\">
        <label class=\"col-sm-3 control-label\">Nom</label>
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"nom\" placeholder=\"nom\" class=\"form-control\">
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"col-sm-3 control-label\">Adresse</label>
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"adresse\" placeholder=\"adresse\" class=\"form-control\">
        </div>
      </div>
    </form>
  </div>
</div>
<div class=\"container\">
    <div class=\"row clearfix\">
    <div class=\"col-md-12 column\">
      <table class=\"table table-bordered table-hover\" id=\"tab_logic\">
        <thead>
          <tr >
            <th class=\"text-center\">
              #
            </th>
            <th class=\"text-center\">
              Cycle
            </th>
            <th class=\"text-center\">
              Niveau
            </th>
          
          </tr>
        </thead>
        <tbody>
          <tr id='addr0'>
            <td>
            1
            </td>
            <td>
            
             <select type=\"text\" name='Cycle'  placeholder='Cycle' class=\"form-control\">
                      <option value\"Maternelle\">Maternelle</option>
                        <option value\"Primaire\">Primaire</option>
                        <option value\"Secondaire\">Secondaire</option>
                </select>
            </td>
            <td>
            <select type=\"text\" name='Niveau' placeholder='Niveau' class=\"form-control\"/>
            <optgroup label=\"Maternelle\">
                 <option value \"PS\">PS- MS -GS </option>
            </optgroup>
            <optgroup label=\"Primaire\">
              <option value \"CP CE1 CE2 CM1 CM2\"> CP- CE1- CE2- CM1- CM2 </option>
            </optgroup>
             <optgroup label=\"Secondaire\">
              <option value \"CP CE1 CE2 CM1 CM2\"> CP- CE1- CE2- CM1- CM2 </option>
            </optgroup>           
                </select>
            </td>
          </tr>
          <tr id='addr1'></tr>
        </tbody>
      </table>
    </div>
  </div>
  <a id=\"add_row\" class=\"btn btn-default pull-left\">Ajouter</a><a id='delete_row' class=\"pull-right btn btn-default\">Supprimer</a>
</div>
 <style type=\"text/css\">
.ce_btn_elv{
  border:none;
  background: transparent;
  margin-left: 570px;
}
</style>
          <div class=\"row\">
            <div class=\"form-group xs-pt-10\">
              <div class=\"icon-container col-sm-3\">
                <button class=\"ce_btn_elv\" type=\"submit\"><div class=\"icon\"><span class=\"mdi mdi-check\"></span></div><span class=\"icon-class\"> Valider </span></button>
              </div>
<script type=\"text/javascript\">
     \$(document).ready(function(){
      var i=1;
     \$(\"#add_row\").click(function(){
      \$('#addr'+i).html(\"<td>\"+ (i+1) +\"</td><td><select name='Cycle'  placeholder='Cycle' class='form-control'><option value='Matrenelle'>Maternelle</option><option value='Primaire'>Primaire</option><option value='Secondaire'>Secondaire</option></select></td><td><select name='Niveau'  placeholder='Niveau' class='form-control'><optgroup label='Maternelle'><option value 'PS'>PS- MS -GS </option></optgroup><optgroup label='Primaire'><option value 'CP CE1 CE2 CM1 CM2'>CP- CE1- CE2- CM1- CM2</option></optgroup><optgroup label='Secondaire'><option value 'CP CE1 CE2 CM1 CM2'>CP- CE1- CE2- CM1- CM2</option></optgroup></select></td>\");

      \$('#tab_logic').append('<tr id=\"addr'+(i+1)+'\"></tr>');
      i++; 
  });
     \$(\"#delete_row\").click(function(){
       if(i>1){
     \$(\"#addr\"+(i-1)).html('');
     i--;
     }
   });

});</script>
{% endblock %}", "myspace/ecoleIns.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\myspace\\ecoleIns.html.twig");
    }
}
