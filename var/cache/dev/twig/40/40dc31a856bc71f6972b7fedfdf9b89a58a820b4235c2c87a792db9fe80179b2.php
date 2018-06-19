<?php

/* evaluation/appreciation.html.twig */
class __TwigTemplate_5aea10e4e29aa65be3cf88744492aad5c98f6c5995cd429c57830715a1f4c8c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "evaluation/appreciation.html.twig", 1);
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
        $__internal_5c99f11fbeb3b1df1de9dee01c195c95cf3642fa79751c16db04eec40ac64645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c99f11fbeb3b1df1de9dee01c195c95cf3642fa79751c16db04eec40ac64645->enter($__internal_5c99f11fbeb3b1df1de9dee01c195c95cf3642fa79751c16db04eec40ac64645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/appreciation.html.twig"));

        $__internal_d98ee8809010d6c08c9c49fb86fbdbfce6ef59234d65dbc378e7cec4f8cb27eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98ee8809010d6c08c9c49fb86fbdbfce6ef59234d65dbc378e7cec4f8cb27eb->enter($__internal_d98ee8809010d6c08c9c49fb86fbdbfce6ef59234d65dbc378e7cec4f8cb27eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/appreciation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c99f11fbeb3b1df1de9dee01c195c95cf3642fa79751c16db04eec40ac64645->leave($__internal_5c99f11fbeb3b1df1de9dee01c195c95cf3642fa79751c16db04eec40ac64645_prof);

        
        $__internal_d98ee8809010d6c08c9c49fb86fbdbfce6ef59234d65dbc378e7cec4f8cb27eb->leave($__internal_d98ee8809010d6c08c9c49fb86fbdbfce6ef59234d65dbc378e7cec4f8cb27eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5962ef74af206900ce4396b36c4d7f21203c41dde5086bc4276500b0a93912f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5962ef74af206900ce4396b36c4d7f21203c41dde5086bc4276500b0a93912f1->enter($__internal_5962ef74af206900ce4396b36c4d7f21203c41dde5086bc4276500b0a93912f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a07ad9fa0ecddfbc3f49acfb93902f11342ba0c168a30057a543c1386afe5154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07ad9fa0ecddfbc3f49acfb93902f11342ba0c168a30057a543c1386afe5154->enter($__internal_a07ad9fa0ecddfbc3f49acfb93902f11342ba0c168a30057a543c1386afe5154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


<div  class=\"col-sm-12\">
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Codage utilisé pour les compétences
                 
                </div>
                <div class=\"panel-body\">
                  ";
        // line 13
        if (($context["saved"] ?? $this->getContext($context, "saved"))) {
            // line 14
            echo "                  <div role=\"alert\" class=\"alert alert-success alert-dismissible\">
                    <button type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\" class=\"mdi mdi-close\"></span></button><span class=\"icon mdi mdi-check\"></span><strong>Bien! </strong> votre appreciation bien sauvgarder
                  </div>
                  ";
        }
        // line 17
        echo " 
                \t<form method=\"post\" action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_appreciation");
        echo "\">
                  <table id='myTable' class=\"table table-condensed table-hover table-bordered table-striped\">
                    <thead>
                      <tr>
                      \t
                        <th style=\"width:13%;\" >Lettres</th>
                        <th style=\"width:15%;\" >Pourcentage</th>
                        <th style=\"width:15%;\">Appreciations</th>
                        <th>Niveaux d'acquisition</th>
                        <th style=\"width:5%;\" >Effacer</th>
                      </tr>
                    </thead>
                    <tbody id='tabla'>
                    \t";
        // line 31
        $context["gid"] = 0;
        // line 32
        echo "                    \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apprs"] ?? $this->getContext($context, "apprs")));
        foreach ($context['_seq'] as $context["_key"] => $context["appr"]) {
            // line 33
            echo "                      <tr id='row";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo "' style='height:40px;'>
                        <input style='height:30px;' type=\"hidden\" name=\"rows[]\" value='";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo "'>
                      \t
                        <td><div class=\"input-group xs-mb-5\">
                          <input  style='height:30px;'   value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "lettre", array(), "array"), "html", null, true);
            echo "\" name='lettre-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo "'  oninput=\"bar('n-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo "');\" class=\"form-control\"><span class=\"input-group-btn\">
                            <button  style='height:30px;background:";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "color", array(), "array"), "html", null, true);
            echo ";border:none;' id='n-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo "' type=\"button\" onclick=\"mod(this.id);\" 



                            data-toggle=\"modal\" data-target=\"#mod-primary\" class=\"btn btn-space btn-success\"




                            >";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "lettre", array(), "array"), "html", null, true);
            echo "</button></span>
                            <input type=\"hidden\" name=\"color-";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo "\" id='inpt-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo "' value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "color", array(), "array"), "html", null, true);
            echo "\" >
                        </div>
                          </td>
                        <td>
                        \t<div>
                        <div class=\"be-radio inline\">
                          <input  style='height:30px;width:60px;' id='per";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo "' oninput=\"updatePer();\" name='p0-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo "' value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "debutPourcentage", array(), "array"), "html", null, true);
            echo "\"  class=\"form-control\">
                         
                        </div>
                        <div  class=\"be-radio inline\">
                          <input  style='height:30px;width:60px;' id='per";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo "b' oninput=\"updatePer();\" name='p1-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo "' value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "finPourcentage", array(), "array"), "html", null, true);
            echo "\"   class=\"form-control\">
                          ";
            // line 59
            $context["gid"] = (($context["gid"] ?? $this->getContext($context, "gid")) + 1);
            // line 60
            echo "                        </div>
                        
                      </div>
                      </td>
                        <td><input  style='height:30px;'  name='app-";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo "'       value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "appreciation", array(), "array"), "html", null, true);
            echo "\"  class=\"form-control\"></td>
                        <td><input  style='height:30px;'  name='niveau-";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo "'    value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "niveauAc", array(), "array"), "html", null, true);
            echo "\"  class=\"form-control\"></td>
                        <td class='actions'>
                          

<a id='del-";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo "' onclick='del(this.id)' class=\"icon\"><i class=\"mdi mdi-delete\"></i></a>

                        </td>
                      </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                    </tbody>
                  </table>
                   
                   <button type='button' style='font-size: 20px' onclick=\"addRow()\" class=\"btn btn-rounded btn-space btn-success\">+</button>
                  <input type=\"hidden\" name=\"cycle\" value='";
        // line 78
        echo twig_escape_filter($this->env, ($context["cycle"] ?? $this->getContext($context, "cycle")), "html", null, true);
        echo "'>
                  <button type=\"submit\" class=\"btn btn-space btn-primary\">Sauvgarder</button>
              </form>
              <div id='perc' class=\"progress\">
            \t";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apprs"] ?? $this->getContext($context, "apprs")));
        foreach ($context['_seq'] as $context["_key"] => $context["appr"]) {
            // line 83
            echo "                      <div id='pro-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo "' class=\"progress-bar progress-bar-primary progress-bar-striped active\" ></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                    </div>
                </div>
              </div>

            </div>
            

                






                <div id=\"mod-primary\" tabindex=\"-1\" role=\"dialog\" class=\"modal fade\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <style>
            .clr{
  width:19%;
  float:left;
  margin-left:4.5px;

}
          </style>
         ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["colors"] ?? $this->getContext($context, "colors")));
        foreach ($context['_seq'] as $context["_key"] => $context["clr"]) {
            // line 111
            echo "
      <div class=\"clr\"><button type=\"button\" onclick=\"getColor('";
            // line 112
            echo twig_escape_filter($this->env, $context["clr"], "html", null, true);
            echo "');\" class=\"btn btn-space\" style=\"background: ";
            echo twig_escape_filter($this->env, $context["clr"], "html", null, true);
            echo "; width:100%; height:15px;\"></button></div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "         
     
        </div>
      </div>
    </div>
            <script type=\"text/javascript\">
            \t
              
              var id_btn= 'none';
              var cycle=";
        // line 123
        echo twig_escape_filter($this->env, ($context["cycle"] ?? $this->getContext($context, "cycle")), "html", null, true);
        echo ";

              function mod(id){

                id_btn=id;

              }
              
            \t\tfunction bar(id){
                    event.target.value=event.target.value.toUpperCase();
            \t\t\t\tdocument.getElementById(id).innerHTML=event.target.value;


            \t\t}
            \t\tfunction updatePer(){

                 
                  var rows = document.getElementById(\"myTable\").rows;
            \t\t\tfor(var i=(rows.length-1);i>-1;i--){
                    var idr=rows[i].id.split('w')[1];
            \t\t\t\tvar a=document.getElementById('per'+idr).value;
            \t\t\t\tvar a1=document.getElementById('per'+idr+'b').value;
            \t\t\t\t//var id =document.getElementById('per'+i+'b').name.split('-');
            \t\t\t\t

            \t\t\t\tvar w=a1-a;
            \t\t\t\tvar elm = document.getElementById('pro-'+idr);
            \t\t\t\telm.style.width=0+'%';
            \t\t\t\t//if(document.getElementById(\"che-\"+id[1]).checked){
\t\t\t\t\t\t\t\telm.style.width=w+'%';
            \t\t\t\t\t
            \t\t\t\t\t
            \t\t\t\t\telm.style.backgroundColor=document.getElementById('n-'+idr).style.backgroundColor;
            \t\t\t\t\telm.innerHTML=a1+'% - '+a+'%';




            \t\t\t//\t}



            \t\t\t}
            \t\t\t\t
            \t\t}



                function getColor(\$clr){
  
   \$('#mod-primary').modal('hide');
  document.getElementById(id_btn).style.background = \$clr;
  document.getElementById('inpt-'+id_btn.split('-')[1]).value = \$clr;
  updatePer();
}

function addRow(){

var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      

      var data=this.responseText.split('|');

     /* var parser = new DOMParser()
      var el = parser.parseFromString(data[0], \"text/xml\");
      alert(el);
      document.getElementById(\"tabla\").appendChild(el);
      //innerHTML += data[0];*/

      \$('#myTable').find('tbody').append(data[0]);
      document.getElementById(\"perc\").innerHTML += data[1];
    }
  };
  xhttp.open(\"GET\", \"/evaluation/appreciation/add?cycle=";
        // line 198
        echo twig_escape_filter($this->env, ($context["cycle"] ?? $this->getContext($context, "cycle")), "html", null, true);
        echo "\", true);
  xhttp.send();
}


function del(id){

var n_id='row'+id.split('-')[1];
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      

      if(this.responseText==id.split('-')[1]){
        
        document.getElementById(n_id).remove();
        document.getElementById('pro-'+id.split('-')[1]).remove();
        updatePer();
       
      }
    }
  };
  xhttp.open(\"GET\", \"/evaluation/appreciation/delete?id=\"+id.split('-')[1], true);
  xhttp.send();


}


updatePer();
            </script>

";
        
        $__internal_a07ad9fa0ecddfbc3f49acfb93902f11342ba0c168a30057a543c1386afe5154->leave($__internal_a07ad9fa0ecddfbc3f49acfb93902f11342ba0c168a30057a543c1386afe5154_prof);

        
        $__internal_5962ef74af206900ce4396b36c4d7f21203c41dde5086bc4276500b0a93912f1->leave($__internal_5962ef74af206900ce4396b36c4d7f21203c41dde5086bc4276500b0a93912f1_prof);

    }

    public function getTemplateName()
    {
        return "evaluation/appreciation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 198,  278 => 123,  267 => 114,  257 => 112,  254 => 111,  250 => 110,  223 => 85,  214 => 83,  210 => 82,  203 => 78,  197 => 74,  186 => 69,  177 => 65,  171 => 64,  165 => 60,  163 => 59,  155 => 58,  144 => 54,  131 => 48,  127 => 47,  113 => 38,  105 => 37,  99 => 34,  94 => 33,  89 => 32,  87 => 31,  71 => 18,  68 => 17,  62 => 14,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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



<div  class=\"col-sm-12\">
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Codage utilisé pour les compétences
                 
                </div>
                <div class=\"panel-body\">
                  {% if saved %}
                  <div role=\"alert\" class=\"alert alert-success alert-dismissible\">
                    <button type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\" class=\"mdi mdi-close\"></span></button><span class=\"icon mdi mdi-check\"></span><strong>Bien! </strong> votre appreciation bien sauvgarder
                  </div>
                  {% endif %} 
                \t<form method=\"post\" action=\"{{path('save_appreciation')}}\">
                  <table id='myTable' class=\"table table-condensed table-hover table-bordered table-striped\">
                    <thead>
                      <tr>
                      \t
                        <th style=\"width:13%;\" >Lettres</th>
                        <th style=\"width:15%;\" >Pourcentage</th>
                        <th style=\"width:15%;\">Appreciations</th>
                        <th>Niveaux d'acquisition</th>
                        <th style=\"width:5%;\" >Effacer</th>
                      </tr>
                    </thead>
                    <tbody id='tabla'>
                    \t{% set gid = 0 %}
                    \t{% for appr in apprs %}
                      <tr id='row{{appr['id']}}' style='height:40px;'>
                        <input style='height:30px;' type=\"hidden\" name=\"rows[]\" value='{{appr['id']}}'>
                      \t
                        <td><div class=\"input-group xs-mb-5\">
                          <input  style='height:30px;'   value=\"{{appr['lettre']}}\" name='lettre-{{appr['id']}}'  oninput=\"bar('n-{{appr['id']}}');\" class=\"form-control\"><span class=\"input-group-btn\">
                            <button  style='height:30px;background:{{appr['color']}};border:none;' id='n-{{appr['id']}}' type=\"button\" onclick=\"mod(this.id);\" 



                            data-toggle=\"modal\" data-target=\"#mod-primary\" class=\"btn btn-space btn-success\"




                            >{{appr['lettre']}}</button></span>
                            <input type=\"hidden\" name=\"color-{{appr['id']}}\" id='inpt-{{appr['id']}}' value=\"{{appr['color']}}\" >
                        </div>
                          </td>
                        <td>
                        \t<div>
                        <div class=\"be-radio inline\">
                          <input  style='height:30px;width:60px;' id='per{{appr['id']}}' oninput=\"updatePer();\" name='p0-{{appr['id']}}' value=\"{{appr['debutPourcentage']}}\"  class=\"form-control\">
                         
                        </div>
                        <div  class=\"be-radio inline\">
                          <input  style='height:30px;width:60px;' id='per{{appr['id']}}b' oninput=\"updatePer();\" name='p1-{{appr['id']}}' value=\"{{appr['finPourcentage']}}\"   class=\"form-control\">
                          {% set gid = gid+1 %}
                        </div>
                        
                      </div>
                      </td>
                        <td><input  style='height:30px;'  name='app-{{appr['id']}}'       value=\"{{appr['appreciation']}}\"  class=\"form-control\"></td>
                        <td><input  style='height:30px;'  name='niveau-{{appr['id']}}'    value=\"{{appr['niveauAc']}}\"  class=\"form-control\"></td>
                        <td class='actions'>
                          

<a id='del-{{appr['id']}}' onclick='del(this.id)' class=\"icon\"><i class=\"mdi mdi-delete\"></i></a>

                        </td>
                      </tr>
                      {% endfor %}
                    </tbody>
                  </table>
                   
                   <button type='button' style='font-size: 20px' onclick=\"addRow()\" class=\"btn btn-rounded btn-space btn-success\">+</button>
                  <input type=\"hidden\" name=\"cycle\" value='{{cycle}}'>
                  <button type=\"submit\" class=\"btn btn-space btn-primary\">Sauvgarder</button>
              </form>
              <div id='perc' class=\"progress\">
            \t{% for appr in apprs %}
                      <div id='pro-{{appr['id']}}' class=\"progress-bar progress-bar-primary progress-bar-striped active\" ></div>
                {% endfor %}
                    </div>
                </div>
              </div>

            </div>
            

                






                <div id=\"mod-primary\" tabindex=\"-1\" role=\"dialog\" class=\"modal fade\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <style>
            .clr{
  width:19%;
  float:left;
  margin-left:4.5px;

}
          </style>
         {% for clr in colors %}

      <div class=\"clr\"><button type=\"button\" onclick=\"getColor('{{ clr }}');\" class=\"btn btn-space\" style=\"background: {{ clr }}; width:100%; height:15px;\"></button></div>
      {% endfor %}
         
     
        </div>
      </div>
    </div>
            <script type=\"text/javascript\">
            \t
              
              var id_btn= 'none';
              var cycle={{cycle}};

              function mod(id){

                id_btn=id;

              }
              
            \t\tfunction bar(id){
                    event.target.value=event.target.value.toUpperCase();
            \t\t\t\tdocument.getElementById(id).innerHTML=event.target.value;


            \t\t}
            \t\tfunction updatePer(){

                 
                  var rows = document.getElementById(\"myTable\").rows;
            \t\t\tfor(var i=(rows.length-1);i>-1;i--){
                    var idr=rows[i].id.split('w')[1];
            \t\t\t\tvar a=document.getElementById('per'+idr).value;
            \t\t\t\tvar a1=document.getElementById('per'+idr+'b').value;
            \t\t\t\t//var id =document.getElementById('per'+i+'b').name.split('-');
            \t\t\t\t

            \t\t\t\tvar w=a1-a;
            \t\t\t\tvar elm = document.getElementById('pro-'+idr);
            \t\t\t\telm.style.width=0+'%';
            \t\t\t\t//if(document.getElementById(\"che-\"+id[1]).checked){
\t\t\t\t\t\t\t\telm.style.width=w+'%';
            \t\t\t\t\t
            \t\t\t\t\t
            \t\t\t\t\telm.style.backgroundColor=document.getElementById('n-'+idr).style.backgroundColor;
            \t\t\t\t\telm.innerHTML=a1+'% - '+a+'%';




            \t\t\t//\t}



            \t\t\t}
            \t\t\t\t
            \t\t}



                function getColor(\$clr){
  
   \$('#mod-primary').modal('hide');
  document.getElementById(id_btn).style.background = \$clr;
  document.getElementById('inpt-'+id_btn.split('-')[1]).value = \$clr;
  updatePer();
}

function addRow(){

var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      

      var data=this.responseText.split('|');

     /* var parser = new DOMParser()
      var el = parser.parseFromString(data[0], \"text/xml\");
      alert(el);
      document.getElementById(\"tabla\").appendChild(el);
      //innerHTML += data[0];*/

      \$('#myTable').find('tbody').append(data[0]);
      document.getElementById(\"perc\").innerHTML += data[1];
    }
  };
  xhttp.open(\"GET\", \"/evaluation/appreciation/add?cycle={{cycle}}\", true);
  xhttp.send();
}


function del(id){

var n_id='row'+id.split('-')[1];
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      

      if(this.responseText==id.split('-')[1]){
        
        document.getElementById(n_id).remove();
        document.getElementById('pro-'+id.split('-')[1]).remove();
        updatePer();
       
      }
    }
  };
  xhttp.open(\"GET\", \"/evaluation/appreciation/delete?id=\"+id.split('-')[1], true);
  xhttp.send();


}


updatePer();
            </script>

{% endblock %}", "evaluation/appreciation.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\evaluation\\appreciation.html.twig");
    }
}
