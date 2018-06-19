<?php

/* evaluation/resultat.html.twig */
class __TwigTemplate_428704e489ae2e9b15c31b9ea763310c1d14111a452918c91efbe18f0ab7a19f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "evaluation/resultat.html.twig", 1);
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
        $__internal_daeddcdee0d35ef95f205b53cfd616f55bf4a7ded43379dec855261d06a170de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daeddcdee0d35ef95f205b53cfd616f55bf4a7ded43379dec855261d06a170de->enter($__internal_daeddcdee0d35ef95f205b53cfd616f55bf4a7ded43379dec855261d06a170de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/resultat.html.twig"));

        $__internal_5e72a2b645b99b61780bcfe3c5d7fb0b3bd84fa96a10c11691ed9b2d17909fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e72a2b645b99b61780bcfe3c5d7fb0b3bd84fa96a10c11691ed9b2d17909fc1->enter($__internal_5e72a2b645b99b61780bcfe3c5d7fb0b3bd84fa96a10c11691ed9b2d17909fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "evaluation/resultat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daeddcdee0d35ef95f205b53cfd616f55bf4a7ded43379dec855261d06a170de->leave($__internal_daeddcdee0d35ef95f205b53cfd616f55bf4a7ded43379dec855261d06a170de_prof);

        
        $__internal_5e72a2b645b99b61780bcfe3c5d7fb0b3bd84fa96a10c11691ed9b2d17909fc1->leave($__internal_5e72a2b645b99b61780bcfe3c5d7fb0b3bd84fa96a10c11691ed9b2d17909fc1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_126aee83f96f061747ab63a7b1290528dff8b5688cc54ecc92708d63c83e3d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126aee83f96f061747ab63a7b1290528dff8b5688cc54ecc92708d63c83e3d76->enter($__internal_126aee83f96f061747ab63a7b1290528dff8b5688cc54ecc92708d63c83e3d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6234b8936ff6118ac50f3914e894623de9c02009580dcd9faa2ca671decf5b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6234b8936ff6118ac50f3914e894623de9c02009580dcd9faa2ca671decf5b76->enter($__internal_6234b8936ff6118ac50f3914e894623de9c02009580dcd9faa2ca671decf5b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $context["c"] = 0;
        // line 6
        $context["functions"] = array();
        // line 7
        echo "    <h1 class=\"well\">résultat</h1>
   
                  <div class=\"col-sm-12\">
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">les classes</div>
                <div class=\"tab-container\">
                  <ul class=\"nav nav-tabs\">
                    ";
        // line 14
        $context["cls"] = "active";
        // line 15
        echo "                    ";
        $context["exp"] = "true";
        // line 16
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groupes"] ?? $this->getContext($context, "groupes")));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            echo " 
                    <li class=\"";
            // line 17
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
            // line 18
            $context["cls"] = "";
            // line 19
            echo "                    ";
            $context["exp"] = "false";
            // line 20
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
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
                  <form class='frm' method=\"post\" action=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_resultat");
            echo "\" >
                    <input type=\"hidden\"  name=\"classe\"  value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array(), "array"), "html", null, true);
            echo "\">
                    <input type=\"hidden\"  name=\"plane\"  value=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["plan"] ?? $this->getContext($context, "plan")), "html", null, true);
            echo "\">
                    <input type=\"hidden\"  name=\"classename\"  value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "classeFr", array(), "array"), "html", null, true);
            echo "\">




                 


                  <table id='t";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array(), "array"), "html", null, true);
            echo "' class=\"table table-condensed table-hover table-bordered table-striped\">
                    <thead>
                      <tr id='xxx'>
                        
                        <th style=\"width:5%;\">etudiant</th>
                        
                        <th style=\"width:5%;\">note</th>
                        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["competances"] ?? $this->getContext($context, "competances")));
            foreach ($context['_seq'] as $context["_key"] => $context["competance"]) {
                // line 51
                echo "                        <th style=\"width:15%;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competance"], "nom", array(), "array"), "html", null, true);
                echo "</th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                        
                      </tr>
                    </thead>

                    <tbody>
                      ";
            // line 58
            $context["gid"] = $this->getAttribute($context["groupe"], "id", array(), "array");
            // line 59
            echo "
<tr id='xxx'>
                      <td>Sélection globale</td>
                      <td><button  type='button' onclick='allNotes(";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array(), "array"), "html", null, true);
            echo ")' class=\"btn btn-space btn-primary \">Renseigner<br>les compétences<br>à partir des notes.</button></td>
                      ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["competances"] ?? $this->getContext($context, "competances")));
            foreach ($context['_seq'] as $context["_key"] => $context["competance"]) {
                // line 64
                echo "                        <td class=\"text-right\">
                          <p class=\"xs-mt-10 xs-mb-10\">
                            ";
                // line 66
                $context["b"] = 0;
                // line 67
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["apprs"] ?? $this->getContext($context, "apprs")));
                foreach ($context['_seq'] as $context["_key"] => $context["appr"]) {
                    // line 68
                    echo "
                    <button  type='button' name=\"";
                    // line 69
                    echo twig_escape_filter($this->env, ($context["b"] ?? $this->getContext($context, "b")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array(), "array"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["competance"], "id", array(), "array"), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, ($context["b"] ?? $this->getContext($context, "b")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array(), "array"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["competance"], "id", array(), "array"), "html", null, true);
                    echo "\" onclick='make_borderA(this.id);'  class=\"btn btn-space btn-primary\" style=\"background-color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "color", array(), "array"), "html", null, true);
                    echo "; border:none; \" title='";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "appreciation", array(), "array"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "niveauAc", array(), "array"), "html", null, true);
                    echo "' >";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "lettre", array(), "array"), "html", null, true);
                    echo "</button>
                    <input type=\"hidden\" id=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array(), "array"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["competance"], "id", array(), "array"), "html", null, true);
                    echo "\" name=\"xzxzxz[]\"  value=\"*\">
                    ";
                    // line 71
                    $context["b"] = (($context["b"] ?? $this->getContext($context, "b")) + 1);
                    // line 72
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                  </p></td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "</tr>
                      ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["etudiants"] ?? $this->getContext($context, "etudiants")), ($context["gid"] ?? $this->getContext($context, "gid")), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
                // line 77
                echo "                      ";
                $context["id_e"] = $this->getAttribute($context["etudiant"], "id", array(), "array");
                // line 78
                echo "                      <tr id='row";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array(), "array"), "html", null, true);
                echo "'>
                        
                        <td style=\"width:5%;\" class=\"user-avatar cell-detail user-info\"><img src=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar6.png"), "html", null, true);
                echo "\" alt=\"Avatar\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "prenom", array(), "array"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "nom", array(), "array"), "html", null, true);
                echo "</span><span class=\"cell-detail-description\">Developer</span>
                        <input type=\"hidden\"  name=\"etd[]\"  value=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array(), "array"), "html", null, true);
                echo "\">
                        </td>
                        
                        <td style=\"width:5%;\" class=\"milestone\" style=\"display:block;\" ><div style=\"width:60%;\" class=\"input-group xs-mb-5\">
                          <input style=\"height:30px;\" id='n";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array(), "array"), "html", null, true);
                echo "' name='n";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array(), "array"), "html", null, true);
                echo "' oninput=\"bar(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array(), "array"), "html", null, true);
                echo ");\" type=\"number\" value=\"";
                if ($this->getAttribute(($context["resultats2"] ?? null), $this->getAttribute($context["etudiant"], "id", array(), "array"), array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["resultats2"] ?? $this->getContext($context, "resultats2")), $this->getAttribute($context["etudiant"], "id", array(), "array"), array(), "array"), "html", null, true);
                }
                echo "\" class=\"form-control\"><span class=\"input-group-btn\">
                            <button  style=\"height:30px;\" type=\"button\" class=\"btn btn-primary\">/ ";
                // line 86
                echo twig_escape_filter($this->env, ($context["note"] ?? $this->getContext($context, "note")), "html", null, true);
                echo "</button></span>
                        </div>
                          <div class=\"progress\">
                            <div id=\"b";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array(), "array"), "html", null, true);
                echo "\" style=\"width: 0%\" class=\"progress-bar progress-bar-primary\"></div>
                          </div>
                        </td>
                        ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["competances"] ?? $this->getContext($context, "competances")));
                foreach ($context['_seq'] as $context["_key"] => $context["competance"]) {
                    // line 93
                    echo "                        <td class=\"text-right\" id='com";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["competance"], "id", array(), "array"), "html", null, true);
                    echo "'>
                          <p class=\"xs-mt-10 xs-mb-10\">
                            ";
                    // line 95
                    $context["c"] = 0;
                    // line 96
                    echo "                          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["apprs"] ?? $this->getContext($context, "apprs")));
                    foreach ($context['_seq'] as $context["_key"] => $context["appr"]) {
                        // line 97
                        echo "                            ";
                        if ($this->getAttribute(($context["resultats2"] ?? null), $this->getAttribute($context["etudiant"], "id", array(), "array"), array(), "array", true, true)) {
                            // line 98
                            echo "                            
                            ";
                            // line 99
                            if (($this->getAttribute($this->getAttribute(($context["resultats"] ?? $this->getContext($context, "resultats")), (($this->getAttribute($context["etudiant"], "id", array(), "array") . "-") . $this->getAttribute($context["competance"], "id", array(), "array")), array(), "array"), "ap", array()) == $this->getAttribute($context["appr"], "id", array(), "array"))) {
                                // line 100
                                echo "                            
                            ";
                                // line 101
                                $context["fc"] = ((((($context["c"] ?? $this->getContext($context, "c")) . "-e") . $this->getAttribute($context["etudiant"], "id", array(), "array")) . "-") . $this->getAttribute($context["competance"], "id", array(), "array"));
                                // line 102
                                echo "                            ";
                                $context["functions"] = twig_array_merge(($context["functions"] ?? $this->getContext($context, "functions")), array(0 => ($context["fc"] ?? $this->getContext($context, "fc"))));
                                // line 103
                                echo "

                            ";
                            }
                            // line 106
                            echo "                            ";
                        }
                        // line 107
                        echo "
                    <button  type='button' name='";
                        // line 108
                        echo twig_escape_filter($this->env, ($context["c"] ?? $this->getContext($context, "c")), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array(), "array"), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["competance"], "id", array(), "array"), "html", null, true);
                        echo "' id=\"";
                        echo twig_escape_filter($this->env, ($context["c"] ?? $this->getContext($context, "c")), "html", null, true);
                        echo "-e";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array(), "array"), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["competance"], "id", array(), "array"), "html", null, true);
                        echo "\" onclick='make_border(this.id);'  class=\"btn btn-space btn-primary\" style=\"background-color: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "color", array(), "array"), "html", null, true);
                        echo "; border:none; \" title='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "appreciation", array(), "array"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "niveauAc", array(), "array"), "html", null, true);
                        echo "' >";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "lettre", array(), "array"), "html", null, true);
                        echo "</button>
                    ";
                        // line 109
                        $context["c"] = (($context["c"] ?? $this->getContext($context, "c")) + 1);
                        // line 110
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appr'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    echo "                    <input type=\"hidden\" id=\"e";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array(), "array"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["competance"], "id", array(), "array"), "html", null, true);
                    echo "\" name=\"comp";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "id", array(), "array"), "html", null, true);
                    echo "[]\"  value=\"*\">
                  </p>
                        </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competance'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "                      </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                     
                      
                    </tbody>
                  </table>
                  
                  <button type='submit'  style='width:20%;' class=\"btn btn-space btn-success hover\"><i class=\"icon icon-left mdi mdi-check\"></i> Envoyer</button>
                </form>
                
                </div>
                    </div>
                    ";
            // line 127
            $context["cls"] = "cont";
            // line 128
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
                    <script>
                     


                        var nvs = {
                          ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apprs"] ?? $this->getContext($context, "apprs")));
        foreach ($context['_seq'] as $context["_key"] => $context["appr"]) {
            // line 137
            echo "                          '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "lettre", array(), "array"), "html", null, true);
            echo "':";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "id", array(), "array"), "html", null, true);
            echo ",
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                        }
                        var id='abcd';

                        var result ={'s' : '<div id=\"xxx\" style=\"display:none\"  role=\"alert\"  class=\"alert alert-success alert-dismissible\"><button type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\" class=\"mdi mdi-close\"></span></button><span class=\"icon mdi mdi-check\"></span><strong>Bien!</strong>  votre resultat pour classe a bien *cls* ajoute</div>','f' : '<div style=\"display:none\" id=\"xxx\"  role=\"alert\" class=\"alert alert-danger alert-dismissible\"><button type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\" class=\"mdi mdi-close\"></span></button><span class=\"icon mdi mdi-close-circle-o\"></span><strong>Attention!</strong> votre resultat pour classe *cls* n a pas bien ajouter redigez votre saisi</div>'};
                          





                      function make_borderA(id){

                        var elms=document.getElementsByName(id);
                        
                        for (var i=0;i < elms.length;i++){
                          make_border(elms[i].id);

                        }

                      }
                      function bar(id){
                          var n=document.getElementById('n'+id).value;
                          if(";
        // line 161
        echo twig_escape_filter($this->env, ($context["note"] ?? $this->getContext($context, "note")), "html", null, true);
        echo "<n){
                            n=";
        // line 162
        echo twig_escape_filter($this->env, ($context["note"] ?? $this->getContext($context, "note")), "html", null, true);
        echo ";
                            document.getElementById('n'+id).value=n;
                          }
                          else if (0>n){
                              n=0;
                              document.getElementById('n'+id).value=n;

                          }
                          var w=(n/";
        // line 170
        echo twig_escape_filter($this->env, ($context["note"] ?? $this->getContext($context, "note")), "html", null, true);
        echo ")*100;
                          
                          document.getElementById('b'+id).style.width=w+'%';


                      }

                       function make_border(id){
                        
                        var n_id=id.split(\"-\");
                          for (var i = 0;i<";
        // line 180
        echo twig_escape_filter($this->env, ($context["c"] ?? $this->getContext($context, "c")), "html", null, true);
        echo "; i++) 
                            document.getElementById(i+'-'+n_id[1]+'-'+n_id[2]).style.border='none';
                          
                          document.getElementById(n_id[1]+'-'+n_id[2]).value=nvs[document.getElementById(id).innerHTML]+'*'+n_id[2];
                          document.getElementById(id).style.border='2px solid black';
                      }


                      \$(document).ready(function () {
    \$('.frm').on('submit', function(e) {
        e.preventDefault();
        //alert('done');
        \$.ajax({
            url : \$(this).attr('action') || window.location.pathname,
            type: \"GET\",
            data: \$(this).serialize(),
            success: function (data) {
              
              response=data.split('*');

              \$('#container'+response[1]).append(result[response[0]].replace('*cls*',response[2]).replace('xxx',id));
              document.getElementById(id).style.display=true;
        \$(\"#\"+id).animate({
            height: 'toggle'
        });
          id=id+'x';
            },
            error: function (jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });
});

";
        // line 214
        $context["cc"] = 0;
        // line 215
        echo "
              function allNotes(id){

                  var t = document.getElementById('t'+id);
                  var rows= t.rows;
                  for (var i = rows.length - 1; i >= 0; i--) {
                    var tds =rows[i].cells;
                    var id_r=rows[i].id;
                    if(id_r=='xxx')
                      continue;
                    var nn=document.getElementById('n'+id_r.split('w')[1]).value;
                    if(!nn)
                      continue;
                    var note = (nn/";
        // line 228
        echo twig_escape_filter($this->env, ($context["note"] ?? $this->getContext($context, "note")), "html", null, true);
        echo ")*100;
                    var n=-1;
                    if(false){
                      n=-1;
                    }";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apprs"] ?? $this->getContext($context, "apprs")));
        foreach ($context['_seq'] as $context["_key"] => $context["appr"]) {
            // line 233
            echo "                    else if (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "debutPourcentage", array(), "array"), "html", null, true);
            echo " < note && ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appr"], "finPourcentage", array(), "array"), "html", null, true);
            echo " >= note ){
                      n=";
            // line 234
            echo twig_escape_filter($this->env, ($context["cc"] ?? $this->getContext($context, "cc")), "html", null, true);
            echo ";
                      ";
            // line 235
            $context["cc"] = (($context["cc"] ?? $this->getContext($context, "cc")) + 1);
            // line 236
            echo "                    }";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "                    else continue;
                    for (var j = 0; j <tds.length; j++) {
                      if(tds[j].id.startsWith('com')){
                        make_border(n+'-e'+id_r.split('w')[1]+'-'+tds[j].id.split('m')[1]);
}}}}


";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["functions"] ?? $this->getContext($context, "functions")));
        foreach ($context['_seq'] as $context["_key"] => $context["fun"]) {
            // line 245
            echo "make_border('";
            echo twig_escape_filter($this->env, $context["fun"], "html", null, true);
            echo "');
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fun'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "
                    </script>





                  </div>
                </div>
              </div>
            </div>
 
";
        
        $__internal_6234b8936ff6118ac50f3914e894623de9c02009580dcd9faa2ca671decf5b76->leave($__internal_6234b8936ff6118ac50f3914e894623de9c02009580dcd9faa2ca671decf5b76_prof);

        
        $__internal_126aee83f96f061747ab63a7b1290528dff8b5688cc54ecc92708d63c83e3d76->leave($__internal_126aee83f96f061747ab63a7b1290528dff8b5688cc54ecc92708d63c83e3d76_prof);

    }

    public function getTemplateName()
    {
        return "evaluation/resultat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 247,  598 => 245,  594 => 244,  585 => 237,  579 => 236,  577 => 235,  573 => 234,  566 => 233,  562 => 232,  555 => 228,  540 => 215,  538 => 214,  501 => 180,  488 => 170,  477 => 162,  473 => 161,  449 => 139,  438 => 137,  434 => 136,  426 => 130,  419 => 128,  417 => 127,  405 => 117,  398 => 115,  383 => 111,  377 => 110,  375 => 109,  353 => 108,  350 => 107,  347 => 106,  342 => 103,  339 => 102,  337 => 101,  334 => 100,  332 => 99,  329 => 98,  326 => 97,  321 => 96,  319 => 95,  313 => 93,  309 => 92,  303 => 89,  297 => 86,  285 => 85,  278 => 81,  270 => 80,  264 => 78,  261 => 77,  257 => 76,  254 => 75,  247 => 73,  241 => 72,  239 => 71,  233 => 70,  211 => 69,  208 => 68,  203 => 67,  201 => 66,  197 => 64,  193 => 63,  189 => 62,  184 => 59,  182 => 58,  175 => 53,  166 => 51,  162 => 50,  152 => 43,  141 => 35,  137 => 34,  133 => 33,  129 => 32,  125 => 31,  119 => 30,  115 => 28,  111 => 27,  108 => 26,  106 => 25,  100 => 21,  94 => 20,  91 => 19,  89 => 18,  77 => 17,  70 => 16,  67 => 15,  65 => 14,  56 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% set functions = [] %}
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
                  <form class='frm' method=\"post\" action=\"{{path('save_resultat')}}\" >
                    <input type=\"hidden\"  name=\"classe\"  value=\"{{groupe['id']}}\">
                    <input type=\"hidden\"  name=\"plane\"  value=\"{{plan}}\">
                    <input type=\"hidden\"  name=\"classename\"  value=\"{{groupe['classeFr']}}\">




                 


                  <table id='t{{groupe['id']}}' class=\"table table-condensed table-hover table-bordered table-striped\">
                    <thead>
                      <tr id='xxx'>
                        
                        <th style=\"width:5%;\">etudiant</th>
                        
                        <th style=\"width:5%;\">note</th>
                        {% for competance in competances %}
                        <th style=\"width:15%;\">{{competance['nom']}}</th>
                        {% endfor %}
                        
                      </tr>
                    </thead>

                    <tbody>
                      {% set gid = groupe['id'] %}

<tr id='xxx'>
                      <td>Sélection globale</td>
                      <td><button  type='button' onclick='allNotes({{groupe['id']}})' class=\"btn btn-space btn-primary \">Renseigner<br>les compétences<br>à partir des notes.</button></td>
                      {% for competance in competances %}
                        <td class=\"text-right\">
                          <p class=\"xs-mt-10 xs-mb-10\">
                            {% set b = 0 %}
                          {% for appr in apprs %}

                    <button  type='button' name=\"{{b}}-{{groupe['id']}}-{{competance['id']}}\" id=\"{{b}}-{{groupe['id']}}-{{competance['id']}}\" onclick='make_borderA(this.id);'  class=\"btn btn-space btn-primary\" style=\"background-color: {{appr['color']}}; border:none; \" title='{{appr['appreciation']}} - {{appr['niveauAc']}}' >{{appr['lettre']}}</button>
                    <input type=\"hidden\" id=\"{{groupe['id']}}-{{competance['id']}}\" name=\"xzxzxz[]\"  value=\"*\">
                    {% set b = b+1 %}
                    {% endfor %}
                  </p></td>
                    {% endfor %}
</tr>
                      {% for etudiant in etudiants[gid] %}
                      {% set id_e = etudiant['id'] %}
                      <tr id='row{{etudiant['id']}}'>
                        
                        <td style=\"width:5%;\" class=\"user-avatar cell-detail user-info\"><img src=\"{{ asset('img/avatar6.png') }}\" alt=\"Avatar\"><span>{{etudiant['prenom']}} {{etudiant['nom']}}</span><span class=\"cell-detail-description\">Developer</span>
                        <input type=\"hidden\"  name=\"etd[]\"  value=\"{{etudiant['id']}}\">
                        </td>
                        
                        <td style=\"width:5%;\" class=\"milestone\" style=\"display:block;\" ><div style=\"width:60%;\" class=\"input-group xs-mb-5\">
                          <input style=\"height:30px;\" id='n{{etudiant['id']}}' name='n{{etudiant['id']}}' oninput=\"bar({{etudiant['id']}});\" type=\"number\" value=\"{% if resultats2[etudiant['id']] is defined %}{{resultats2[etudiant['id']]}}{% endif %}\" class=\"form-control\"><span class=\"input-group-btn\">
                            <button  style=\"height:30px;\" type=\"button\" class=\"btn btn-primary\">/ {{note}}</button></span>
                        </div>
                          <div class=\"progress\">
                            <div id=\"b{{etudiant['id']}}\" style=\"width: 0%\" class=\"progress-bar progress-bar-primary\"></div>
                          </div>
                        </td>
                        {% for competance in competances %}
                        <td class=\"text-right\" id='com{{competance['id']}}'>
                          <p class=\"xs-mt-10 xs-mb-10\">
                            {% set c = 0 %}
                          {% for appr in apprs %}
                            {% if resultats2[etudiant['id']] is defined %}
                            
                            {% if resultats[etudiant['id']~'-'~competance['id']].ap == appr['id'] %}
                            
                            {% set fc=c~\"-e\"~etudiant['id']~\"-\"~competance['id'] %}
                            {% set functions = functions|merge([fc]) %}


                            {% endif %}
                            {% endif %}

                    <button  type='button' name='{{c}}-{{groupe['id']}}-{{competance['id']}}' id=\"{{c}}-e{{etudiant['id']}}-{{competance['id']}}\" onclick='make_border(this.id);'  class=\"btn btn-space btn-primary\" style=\"background-color: {{appr['color']}}; border:none; \" title='{{appr['appreciation']}} - {{appr['niveauAc']}}' >{{appr['lettre']}}</button>
                    {% set c = c+1 %}
                    {% endfor %}
                    <input type=\"hidden\" id=\"e{{etudiant['id']}}-{{competance['id']}}\" name=\"comp{{etudiant['id']}}[]\"  value=\"*\">
                  </p>
                        </td>
                        {% endfor %}
                      </tr>
                      {% endfor %}
                     
                      
                    </tbody>
                  </table>
                  
                  <button type='submit'  style='width:20%;' class=\"btn btn-space btn-success hover\"><i class=\"icon icon-left mdi mdi-check\"></i> Envoyer</button>
                </form>
                
                </div>
                    </div>
                    {% set cls = 'cont' %}

{% endfor %}
                    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
                    <script>
                     


                        var nvs = {
                          {% for appr in apprs %}
                          '{{appr['lettre']}}':{{appr['id']}},
                            {% endfor %}
                        }
                        var id='abcd';

                        var result ={'s' : '<div id=\"xxx\" style=\"display:none\"  role=\"alert\"  class=\"alert alert-success alert-dismissible\"><button type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\" class=\"mdi mdi-close\"></span></button><span class=\"icon mdi mdi-check\"></span><strong>Bien!</strong>  votre resultat pour classe a bien *cls* ajoute</div>','f' : '<div style=\"display:none\" id=\"xxx\"  role=\"alert\" class=\"alert alert-danger alert-dismissible\"><button type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\" class=\"mdi mdi-close\"></span></button><span class=\"icon mdi mdi-close-circle-o\"></span><strong>Attention!</strong> votre resultat pour classe *cls* n a pas bien ajouter redigez votre saisi</div>'};
                          





                      function make_borderA(id){

                        var elms=document.getElementsByName(id);
                        
                        for (var i=0;i < elms.length;i++){
                          make_border(elms[i].id);

                        }

                      }
                      function bar(id){
                          var n=document.getElementById('n'+id).value;
                          if({{note}}<n){
                            n={{note}};
                            document.getElementById('n'+id).value=n;
                          }
                          else if (0>n){
                              n=0;
                              document.getElementById('n'+id).value=n;

                          }
                          var w=(n/{{note}})*100;
                          
                          document.getElementById('b'+id).style.width=w+'%';


                      }

                       function make_border(id){
                        
                        var n_id=id.split(\"-\");
                          for (var i = 0;i<{{c}}; i++) 
                            document.getElementById(i+'-'+n_id[1]+'-'+n_id[2]).style.border='none';
                          
                          document.getElementById(n_id[1]+'-'+n_id[2]).value=nvs[document.getElementById(id).innerHTML]+'*'+n_id[2];
                          document.getElementById(id).style.border='2px solid black';
                      }


                      \$(document).ready(function () {
    \$('.frm').on('submit', function(e) {
        e.preventDefault();
        //alert('done');
        \$.ajax({
            url : \$(this).attr('action') || window.location.pathname,
            type: \"GET\",
            data: \$(this).serialize(),
            success: function (data) {
              
              response=data.split('*');

              \$('#container'+response[1]).append(result[response[0]].replace('*cls*',response[2]).replace('xxx',id));
              document.getElementById(id).style.display=true;
        \$(\"#\"+id).animate({
            height: 'toggle'
        });
          id=id+'x';
            },
            error: function (jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });
});

{% set cc = 0 %}

              function allNotes(id){

                  var t = document.getElementById('t'+id);
                  var rows= t.rows;
                  for (var i = rows.length - 1; i >= 0; i--) {
                    var tds =rows[i].cells;
                    var id_r=rows[i].id;
                    if(id_r=='xxx')
                      continue;
                    var nn=document.getElementById('n'+id_r.split('w')[1]).value;
                    if(!nn)
                      continue;
                    var note = (nn/{{note}})*100;
                    var n=-1;
                    if(false){
                      n=-1;
                    }{% for appr in apprs %}
                    else if ({{appr['debutPourcentage']}} < note && {{appr['finPourcentage']}} >= note ){
                      n={{cc}};
                      {% set cc = cc+1 %}
                    }{% endfor %}
                    else continue;
                    for (var j = 0; j <tds.length; j++) {
                      if(tds[j].id.startsWith('com')){
                        make_border(n+'-e'+id_r.split('w')[1]+'-'+tds[j].id.split('m')[1]);
}}}}


{% for fun in functions %}
make_border('{{ fun }}');
{% endfor %}

                    </script>





                  </div>
                </div>
              </div>
            </div>
 
{% endblock %}", "evaluation/resultat.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\evaluation\\resultat.html.twig");
    }
}
