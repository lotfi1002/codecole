<?php

/* myspace/Ficheseleve.html.twig */
class __TwigTemplate_62fd4f2feafa36557ab87f6bb4900aa5fbf18853cd34382378d714e6a71c395f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "myspace/Ficheseleve.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_602d662d4a00ccce10ce76dbc7fc898c4c2ae43f936a004de33786a080844a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602d662d4a00ccce10ce76dbc7fc898c4c2ae43f936a004de33786a080844a22->enter($__internal_602d662d4a00ccce10ce76dbc7fc898c4c2ae43f936a004de33786a080844a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/Ficheseleve.html.twig"));

        $__internal_be4caba5d5af2eeabe848eaf1b6a44f885bb089314db26de16db6c1d543b5e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4caba5d5af2eeabe848eaf1b6a44f885bb089314db26de16db6c1d543b5e2f->enter($__internal_be4caba5d5af2eeabe848eaf1b6a44f885bb089314db26de16db6c1d543b5e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/Ficheseleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_602d662d4a00ccce10ce76dbc7fc898c4c2ae43f936a004de33786a080844a22->leave($__internal_602d662d4a00ccce10ce76dbc7fc898c4c2ae43f936a004de33786a080844a22_prof);

        
        $__internal_be4caba5d5af2eeabe848eaf1b6a44f885bb089314db26de16db6c1d543b5e2f->leave($__internal_be4caba5d5af2eeabe848eaf1b6a44f885bb089314db26de16db6c1d543b5e2f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d398715105f1bd55e8b92bc3185bc7c340ba7e139a691975d641547572349a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d398715105f1bd55e8b92bc3185bc7c340ba7e139a691975d641547572349a9->enter($__internal_4d398715105f1bd55e8b92bc3185bc7c340ba7e139a691975d641547572349a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10d953d08d1e11a182b49ccfe6baf8c570a5844e40e1f36845bfcd85bf9b5553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d953d08d1e11a182b49ccfe6baf8c570a5844e40e1f36845bfcd85bf9b5553->enter($__internal_10d953d08d1e11a182b49ccfe6baf8c570a5844e40e1f36845bfcd85bf9b5553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "          <h3 class=\"text-center\"></h3>
            <div class=\"form-group\">
              <div class=\"icon-container\">
                <label class=\"col-sm-2 control-label\"  style= \"font-size:16px;\"for=\"textinput\">Rechercher fiche élève :</label>
                <div class=\"col-sm-8\">
                  <input type=\"text\" onchange=\"getEtudiant();\" placeholder=\"Rechercher\" class=\"form-control\">
                </div>
                <div class=\"icon\"><span class=\"mdi mdi-search\"></span></div><span class=\"icon-class\"></span>
              </div>
            </div>
            <!--Default Tabs-->
            <div class=\"col-sm-12\">
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\"></div>
                <div class=\"tab-container\">
                  <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#tous\" data-toggle=\"tab\">Tous</a></li>
                    <li ><a href=\"#Inscrits\" data-toggle=\"tab\">Inscrits</a></li>
                    <li><a href=\"#Enattente\" data-toggle=\"tab\">En attente</a></li>
                    <li><a href=\"#Partis\" data-toggle=\"tab\">Partis</a></li>
                    <li><a href=\"#Radies\" data-toggle=\"tab\">Radiés</a></li>
                  </ul>
                  <div class=\"tab-content\">
                    <div id=\"tous\" class=\"tab-pane active cont\">
                  <table id=\"table1\" class=\"table table-striped table-hover table-fw-widget\">
                    <thead>
                      <tr>
                        <th>Matricule élève</th>
                        <th>Nom et Prénom</th>
                        <th>Nom et prénm (fr)</th>
                        <th>Date de naissance</th>
                        <th>Genre</th>
                        <th>Niveau scolaire</th>
                        <th>Classe</th>
                        <th>Statut</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etds"] ?? $this->getContext($context, "etds")));
        foreach ($context['_seq'] as $context["_key"] => $context["etd"]) {
            // line 44
            echo "                      <tr class=\"odd gradeX\">
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getMatricule", array(), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getNom", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getPrenom", array(), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getNomfr", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getPrenomfr", array(), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["etd"], "getDate", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getSex", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getNiveau2", array(), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getClasse", array(), "method"), "html", null, true);
            echo "</td>

                        <td ondblclick=\"ChangeStatut('CS-";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getId", array(), "method"), "html", null, true);
            echo "')\" id=\"CS-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getStatut", array(), "method"), "html", null, true);
            echo "</td>

                        <td><a href=\"Ficheselevev3/";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getId", array(), "method"), "html", null, true);
            echo "\">Fiche eleve</a></td>
                      </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                      </tbody>
                    </table>
                    </div>
                    <div id=\"Inscrits\" class=\"tab-pane cont\">
                       <table id=\"table1\" class=\"table table-striped table-hover table-fw-widget\">
                    <thead>
                      <tr>
                        <th>Matricule élève</th>
                        <th>Nom et Prénom</th>
                        <th>Nom et prénm (fr)</th>
                        <th>Date de naissance</th>
                        <th>Genre</th>
                        <th>Niveau scolaire</th>
                        <th>Classe</th>
                        <th>Statut</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etds"] ?? $this->getContext($context, "etds")));
        foreach ($context['_seq'] as $context["_key"] => $context["etd"]) {
            // line 78
            echo "                        ";
            if (($this->getAttribute($context["etd"], "getStatut", array(), "method") == "Inscrits")) {
                // line 79
                echo "                      <tr class=\"odd gradeX\">
                        <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getMatricule", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getNom", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getPrenom", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getNomfr", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getPrenomfr", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 83
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["etd"], "getDate", array(), "method"), "Y-m-d"), "html", null, true);
                echo "</td>
                        <td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getSex", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getNiveau2", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getClasse", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getStatut", array(), "method"), "html", null, true);
                echo "</td>
                        <td>Fiche élève</td>
                      </tr>
                      ";
            }
            // line 91
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                    </tbody>
                    </table>
                    </div>
                    <div id=\"Enattente\" class=\"tab-pane cont\">
                       <table id=\"table1\" class=\"table table-striped table-hover table-fw-widget\">
                    <thead>
                      <tr>
                        <th>Matricule élève</th>
                        <th>Nom et Prénom</th>
                        <th>Nom et prénm (fr)</th>
                        <th>Date de naissance</th>
                        <th>Genre</th>
                        <th>Niveau scolaire</th>
                        <th>Classe</th>
                        <th>Statut</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etds"] ?? $this->getContext($context, "etds")));
        foreach ($context['_seq'] as $context["_key"] => $context["etd"]) {
            // line 112
            echo "                        ";
            if (($this->getAttribute($context["etd"], "getStatut", array(), "method") == "En attente")) {
                // line 113
                echo "                        <tr class=\"odd gradeX\">
                        <td>";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getMatricule", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getNom", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getPrenom", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getNomfr", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getPrenomfr", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 117
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["etd"], "getDate", array(), "method"), "Y-m-d"), "html", null, true);
                echo "</td>
                        <td>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getSex", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getNiveau2", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getClasse", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getStatut", array(), "method"), "html", null, true);
                echo "</td>
                        <td>Fiche élève</td>
                      </tr>
                      ";
            }
            // line 125
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                      </tbody>
                    </table>
                    </div>
                    <div id=\"Partis\" class=\"tab-pane\">
                        <table id=\"table1\" class=\"table table-striped table-hover table-fw-widget\">
                    <thead>
                      <tr>
                        <th>Matricule élève</th>
                        <th>Nom et Prénom</th>
                        <th>Nom et prénm (fr)</th>
                        <th>Date de naissance</th>
                        <th>Genre</th>
                        <th>Niveau scolaire</th>
                        <th>Classe</th>
                        <th>Statut</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etds"] ?? $this->getContext($context, "etds")));
        foreach ($context['_seq'] as $context["_key"] => $context["etd"]) {
            // line 146
            echo "                        ";
            if (($this->getAttribute($context["etd"], "getStatut", array(), "method") == "Partis")) {
                // line 147
                echo "                        <tr class=\"odd gradeX\">
                        <td>";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getMatricule", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getNom", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getPrenom", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getNomfr", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getPrenomfr", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 151
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["etd"], "getDate", array(), "method"), "Y-m-d"), "html", null, true);
                echo "</td>
                        <td>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getSex", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getNiveau2", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getClasse", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getStatut", array(), "method"), "html", null, true);
                echo "</td>
                        <td>Fiche élève</td>
                      </tr>
                      ";
            }
            // line 159
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                      </tbody>
                    </table>
                    </div>
                        <div id=\"Radies\" class=\"tab-pane\">
                      <table id=\"table1\" class=\"table table-striped table-hover table-fw-widget\">
                    <thead>
                      <tr>
                        <th>Matricule élève</th>
                        <th>Nom et Prénom</th>
                        <th>Nom et prénm (fr)</th>
                        <th>Date de naissance</th>
                        <th>Genre</th>
                        <th>Niveau scolaire</th>
                        <th>Classe</th>
                        <th>Statut</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etds"] ?? $this->getContext($context, "etds")));
        foreach ($context['_seq'] as $context["_key"] => $context["etd"]) {
            // line 180
            echo "                        ";
            if (($this->getAttribute($context["etd"], "getStatut", array(), "method") == "Radiés")) {
                // line 181
                echo "                      <tr class=\"odd gradeX\">
                        <td>";
                // line 182
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getMatricule", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 183
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getNom", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getPrenom", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 184
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getNomfr", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getPrenomfr", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 185
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["etd"], "getDate", array(), "method"), "Y-m-d"), "html", null, true);
                echo "</td>
                        <td>";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getSex", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getNiveau2", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getClasse", array(), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($context["etd"], "getStatut", array(), "method"), "html", null, true);
                echo "</td>
                        <td>Fiche élève</td>
                      </tr>
                      ";
            }
            // line 193
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                      </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
          <div class=\"row\">
                <label class=\"col-sm-2 control-label\" style=\"margin-left:30px; font-size:14px;\">Imprimer fiches sélectionées</label>
                  <button class=\"btn btn-rounded btn-space btn-success\"> PDF </button>
                <button class=\"btn btn-rounded btn-space btn-success\" > XLS </button>
            

                  <div class=\"col-sm-7\"><div class=\"dataTables_paginate paging_simple_numbers\" id=\"table1_paginate\"><ul class=\"pagination\"><li class=\"paginate_button previous disabled\" id=\"table1_previous\"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"0\" tabindex=\"0\">Previous</a></li><li class=\"paginate_button active\"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"1\" tabindex=\"0\">1</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"2\" tabindex=\"0\">2</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"3\" tabindex=\"0\">3</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"4\" tabindex=\"0\">4</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"5\" tabindex=\"0\">5</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"6\" tabindex=\"0\">6</a></li><li class=\"paginate_button next\" id=\"table1_next\"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"7\" tabindex=\"0\">Next</a></li></ul></div></div>
                </div>
                </div>
              </div>
            </div>
 ";
        
        $__internal_10d953d08d1e11a182b49ccfe6baf8c570a5844e40e1f36845bfcd85bf9b5553->leave($__internal_10d953d08d1e11a182b49ccfe6baf8c570a5844e40e1f36845bfcd85bf9b5553_prof);

        
        $__internal_4d398715105f1bd55e8b92bc3185bc7c340ba7e139a691975d641547572349a9->leave($__internal_4d398715105f1bd55e8b92bc3185bc7c340ba7e139a691975d641547572349a9_prof);

    }

    // line 211
    public function block_js($context, array $blocks = array())
    {
        $__internal_a684f93c130573a60d7ce379ddfa4e52e19059c199bc15154c5a2219034612a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a684f93c130573a60d7ce379ddfa4e52e19059c199bc15154c5a2219034612a5->enter($__internal_a684f93c130573a60d7ce379ddfa4e52e19059c199bc15154c5a2219034612a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_441f3c92a967a44cd21d463235dc676b74b671a728366caa531a9e9e61af3d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441f3c92a967a44cd21d463235dc676b74b671a728366caa531a9e9e61af3d37->enter($__internal_441f3c92a967a44cd21d463235dc676b74b671a728366caa531a9e9e61af3d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 212
        echo " <script type=\"text/javascript\">
 function ChangeStatut(id){
  if(document.getElementById(id).innerHTML !== ''){
    var x = \"\";
    switch(document.getElementById(id).innerHTML){
      case 'Inscrits' :
         x = document.getElementById(id).innerHTML = 'En attente';
        break;
      case 'En attente':
          x = document.getElementById(id).innerHTML = 'Partis';
        break;
      case 'Partis' :
         x = document.getElementById(id).innerHTML = 'Radiés';
        break;
      default :
         x = document.getElementById(id).innerHTML = 'Inscrits';
        break;
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          
        }
    };
    var filename = id.substr(3, id.length );
    filename = filename.concat(\"/\");
    filename = filename.concat(x);
    xhttp.open(\"GET\", filename , true);
    xhttp.send();
    location.reload();
  }
}
</script>
";
        
        $__internal_441f3c92a967a44cd21d463235dc676b74b671a728366caa531a9e9e61af3d37->leave($__internal_441f3c92a967a44cd21d463235dc676b74b671a728366caa531a9e9e61af3d37_prof);

        
        $__internal_a684f93c130573a60d7ce379ddfa4e52e19059c199bc15154c5a2219034612a5->leave($__internal_a684f93c130573a60d7ce379ddfa4e52e19059c199bc15154c5a2219034612a5_prof);

    }

    public function getTemplateName()
    {
        return "myspace/Ficheseleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 212,  479 => 211,  453 => 194,  447 => 193,  440 => 189,  436 => 188,  432 => 187,  428 => 186,  424 => 185,  418 => 184,  412 => 183,  408 => 182,  405 => 181,  402 => 180,  398 => 179,  377 => 160,  371 => 159,  364 => 155,  360 => 154,  356 => 153,  352 => 152,  348 => 151,  342 => 150,  336 => 149,  332 => 148,  329 => 147,  326 => 146,  322 => 145,  301 => 126,  295 => 125,  288 => 121,  284 => 120,  280 => 119,  276 => 118,  272 => 117,  266 => 116,  260 => 115,  256 => 114,  253 => 113,  250 => 112,  246 => 111,  225 => 92,  219 => 91,  212 => 87,  208 => 86,  204 => 85,  200 => 84,  196 => 83,  190 => 82,  184 => 81,  180 => 80,  177 => 79,  174 => 78,  170 => 77,  149 => 58,  140 => 55,  131 => 53,  126 => 51,  122 => 50,  118 => 49,  114 => 48,  108 => 47,  102 => 46,  98 => 45,  95 => 44,  91 => 43,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends 'base2.html.twig' %}

{% block body %}
          <h3 class=\"text-center\"></h3>
            <div class=\"form-group\">
              <div class=\"icon-container\">
                <label class=\"col-sm-2 control-label\"  style= \"font-size:16px;\"for=\"textinput\">Rechercher fiche élève :</label>
                <div class=\"col-sm-8\">
                  <input type=\"text\" onchange=\"getEtudiant();\" placeholder=\"Rechercher\" class=\"form-control\">
                </div>
                <div class=\"icon\"><span class=\"mdi mdi-search\"></span></div><span class=\"icon-class\"></span>
              </div>
            </div>
            <!--Default Tabs-->
            <div class=\"col-sm-12\">
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\"></div>
                <div class=\"tab-container\">
                  <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#tous\" data-toggle=\"tab\">Tous</a></li>
                    <li ><a href=\"#Inscrits\" data-toggle=\"tab\">Inscrits</a></li>
                    <li><a href=\"#Enattente\" data-toggle=\"tab\">En attente</a></li>
                    <li><a href=\"#Partis\" data-toggle=\"tab\">Partis</a></li>
                    <li><a href=\"#Radies\" data-toggle=\"tab\">Radiés</a></li>
                  </ul>
                  <div class=\"tab-content\">
                    <div id=\"tous\" class=\"tab-pane active cont\">
                  <table id=\"table1\" class=\"table table-striped table-hover table-fw-widget\">
                    <thead>
                      <tr>
                        <th>Matricule élève</th>
                        <th>Nom et Prénom</th>
                        <th>Nom et prénm (fr)</th>
                        <th>Date de naissance</th>
                        <th>Genre</th>
                        <th>Niveau scolaire</th>
                        <th>Classe</th>
                        <th>Statut</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for etd in etds %}
                      <tr class=\"odd gradeX\">
                        <td>{{ etd.getMatricule() }}</td>
                        <td>{{ etd.getNom() }} {{ etd.getPrenom() }}</td>
                        <td>{{ etd.getNomfr() }} {{ etd.getPrenomfr() }}</td>
                        <td>{{ etd.getDate()|date('Y-m-d') }}</td>
                        <td>{{ etd.getSex }}</td>
                        <td>{{ etd.getNiveau2() }}</td>
                        <td>{{ etd.getClasse() }}</td>

                        <td ondblclick=\"ChangeStatut('CS-{{ etd.getId() }}')\" id=\"CS-{{ etd.getId() }}\">{{ etd.getStatut() }}</td>

                        <td><a href=\"Ficheselevev3/{{ etd.getId() }}\">Fiche eleve</a></td>
                      </tr>
                      {% endfor %}
                      </tbody>
                    </table>
                    </div>
                    <div id=\"Inscrits\" class=\"tab-pane cont\">
                       <table id=\"table1\" class=\"table table-striped table-hover table-fw-widget\">
                    <thead>
                      <tr>
                        <th>Matricule élève</th>
                        <th>Nom et Prénom</th>
                        <th>Nom et prénm (fr)</th>
                        <th>Date de naissance</th>
                        <th>Genre</th>
                        <th>Niveau scolaire</th>
                        <th>Classe</th>
                        <th>Statut</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for etd in etds %}
                        {% if etd.getStatut() == 'Inscrits' %}
                      <tr class=\"odd gradeX\">
                        <td>{{ etd.getMatricule() }}</td>
                        <td>{{ etd.getNom() }} {{ etd.getPrenom() }}</td>
                        <td>{{ etd.getNomfr() }} {{ etd.getPrenomfr() }}</td>
                        <td>{{ etd.getDate()|date('Y-m-d') }}</td>
                        <td>{{ etd.getSex }}</td>
                        <td>{{ etd.getNiveau2() }}</td>
                        <td>{{ etd.getClasse() }}</td>
                        <td>{{ etd.getStatut() }}</td>
                        <td>Fiche élève</td>
                      </tr>
                      {% endif %}
                      {% endfor %}
                    </tbody>
                    </table>
                    </div>
                    <div id=\"Enattente\" class=\"tab-pane cont\">
                       <table id=\"table1\" class=\"table table-striped table-hover table-fw-widget\">
                    <thead>
                      <tr>
                        <th>Matricule élève</th>
                        <th>Nom et Prénom</th>
                        <th>Nom et prénm (fr)</th>
                        <th>Date de naissance</th>
                        <th>Genre</th>
                        <th>Niveau scolaire</th>
                        <th>Classe</th>
                        <th>Statut</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for etd in etds %}
                        {% if etd.getStatut() == 'En attente' %}
                        <tr class=\"odd gradeX\">
                        <td>{{ etd.getMatricule() }}</td>
                        <td>{{ etd.getNom() }} {{ etd.getPrenom() }}</td>
                        <td>{{ etd.getNomfr() }} {{ etd.getPrenomfr() }}</td>
                        <td>{{ etd.getDate()|date('Y-m-d') }}</td>
                        <td>{{ etd.getSex }}</td>
                        <td>{{ etd.getNiveau2() }}</td>
                        <td>{{ etd.getClasse() }}</td>
                        <td>{{ etd.getStatut() }}</td>
                        <td>Fiche élève</td>
                      </tr>
                      {% endif %}
                      {% endfor %}
                      </tbody>
                    </table>
                    </div>
                    <div id=\"Partis\" class=\"tab-pane\">
                        <table id=\"table1\" class=\"table table-striped table-hover table-fw-widget\">
                    <thead>
                      <tr>
                        <th>Matricule élève</th>
                        <th>Nom et Prénom</th>
                        <th>Nom et prénm (fr)</th>
                        <th>Date de naissance</th>
                        <th>Genre</th>
                        <th>Niveau scolaire</th>
                        <th>Classe</th>
                        <th>Statut</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for etd in etds %}
                        {% if etd.getStatut() == 'Partis' %}
                        <tr class=\"odd gradeX\">
                        <td>{{ etd.getMatricule() }}</td>
                        <td>{{ etd.getNom() }} {{ etd.getPrenom() }}</td>
                        <td>{{ etd.getNomfr() }} {{ etd.getPrenomfr() }}</td>
                        <td>{{ etd.getDate()|date('Y-m-d') }}</td>
                        <td>{{ etd.getSex }}</td>
                        <td>{{ etd.getNiveau2() }}</td>
                        <td>{{ etd.getClasse() }}</td>
                        <td>{{ etd.getStatut() }}</td>
                        <td>Fiche élève</td>
                      </tr>
                      {% endif %}
                      {% endfor %}
                      </tbody>
                    </table>
                    </div>
                        <div id=\"Radies\" class=\"tab-pane\">
                      <table id=\"table1\" class=\"table table-striped table-hover table-fw-widget\">
                    <thead>
                      <tr>
                        <th>Matricule élève</th>
                        <th>Nom et Prénom</th>
                        <th>Nom et prénm (fr)</th>
                        <th>Date de naissance</th>
                        <th>Genre</th>
                        <th>Niveau scolaire</th>
                        <th>Classe</th>
                        <th>Statut</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for etd in etds %}
                        {% if etd.getStatut() == 'Radiés' %}
                      <tr class=\"odd gradeX\">
                        <td>{{ etd.getMatricule() }}</td>
                        <td>{{ etd.getNom() }} {{ etd.getPrenom() }}</td>
                        <td>{{ etd.getNomfr() }} {{ etd.getPrenomfr() }}</td>
                        <td>{{ etd.getDate()|date('Y-m-d') }}</td>
                        <td>{{ etd.getSex }}</td>
                        <td>{{ etd.getNiveau2() }}</td>
                        <td>{{ etd.getClasse() }}</td>
                        <td>{{ etd.getStatut() }}</td>
                        <td>Fiche élève</td>
                      </tr>
                      {% endif %}
                      {% endfor %}
                      </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
          <div class=\"row\">
                <label class=\"col-sm-2 control-label\" style=\"margin-left:30px; font-size:14px;\">Imprimer fiches sélectionées</label>
                  <button class=\"btn btn-rounded btn-space btn-success\"> PDF </button>
                <button class=\"btn btn-rounded btn-space btn-success\" > XLS </button>
            

                  <div class=\"col-sm-7\"><div class=\"dataTables_paginate paging_simple_numbers\" id=\"table1_paginate\"><ul class=\"pagination\"><li class=\"paginate_button previous disabled\" id=\"table1_previous\"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"0\" tabindex=\"0\">Previous</a></li><li class=\"paginate_button active\"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"1\" tabindex=\"0\">1</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"2\" tabindex=\"0\">2</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"3\" tabindex=\"0\">3</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"4\" tabindex=\"0\">4</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"5\" tabindex=\"0\">5</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"6\" tabindex=\"0\">6</a></li><li class=\"paginate_button next\" id=\"table1_next\"><a href=\"#\" aria-controls=\"table1\" data-dt-idx=\"7\" tabindex=\"0\">Next</a></li></ul></div></div>
                </div>
                </div>
              </div>
            </div>
 {% endblock %}
 {% block js %}
 <script type=\"text/javascript\">
 function ChangeStatut(id){
  if(document.getElementById(id).innerHTML !== ''){
    var x = \"\";
    switch(document.getElementById(id).innerHTML){
      case 'Inscrits' :
         x = document.getElementById(id).innerHTML = 'En attente';
        break;
      case 'En attente':
          x = document.getElementById(id).innerHTML = 'Partis';
        break;
      case 'Partis' :
         x = document.getElementById(id).innerHTML = 'Radiés';
        break;
      default :
         x = document.getElementById(id).innerHTML = 'Inscrits';
        break;
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          
        }
    };
    var filename = id.substr(3, id.length );
    filename = filename.concat(\"/\");
    filename = filename.concat(x);
    xhttp.open(\"GET\", filename , true);
    xhttp.send();
    location.reload();
  }
}
</script>
{% endblock %}", "myspace/Ficheseleve.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\myspace\\Ficheseleve.html.twig");
    }
}
