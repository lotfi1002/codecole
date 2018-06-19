<?php

/* myspace/ecolev3.html.twig */
class __TwigTemplate_e2a00925a6bc2ae017db218d35b3c1fb10e7254b1a7a9b5533d7bc55c26a1799 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "myspace/ecolev3.html.twig", 1);
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
        $__internal_640796286d9a225d79e1372595e42283bc2f2ce430db52f54634ae024990abb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_640796286d9a225d79e1372595e42283bc2f2ce430db52f54634ae024990abb8->enter($__internal_640796286d9a225d79e1372595e42283bc2f2ce430db52f54634ae024990abb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/ecolev3.html.twig"));

        $__internal_1e97437affa38798091a4ba4953f7a06c0e2a96a22133e9ef3c2caa19bb01a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e97437affa38798091a4ba4953f7a06c0e2a96a22133e9ef3c2caa19bb01a91->enter($__internal_1e97437affa38798091a4ba4953f7a06c0e2a96a22133e9ef3c2caa19bb01a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myspace/ecolev3.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_640796286d9a225d79e1372595e42283bc2f2ce430db52f54634ae024990abb8->leave($__internal_640796286d9a225d79e1372595e42283bc2f2ce430db52f54634ae024990abb8_prof);

        
        $__internal_1e97437affa38798091a4ba4953f7a06c0e2a96a22133e9ef3c2caa19bb01a91->leave($__internal_1e97437affa38798091a4ba4953f7a06c0e2a96a22133e9ef3c2caa19bb01a91_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c4530abf64dc5809f6c51c16d441e24c93759edc038179a3d31f8c030f54d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4530abf64dc5809f6c51c16d441e24c93759edc038179a3d31f8c030f54d37->enter($__internal_4c4530abf64dc5809f6c51c16d441e24c93759edc038179a3d31f8c030f54d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da8b7f89f03df1337421ac075c3f3259a4bc685a0714c4cfb28d056f395e48ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8b7f89f03df1337421ac075c3f3259a4bc685a0714c4cfb28d056f395e48ce->enter($__internal_da8b7f89f03df1337421ac075c3f3259a4bc685a0714c4cfb28d056f395e48ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "          <section id=\"fh5co-contact\" data-section=\"contact\">
    <div class=\"container\">
    
    <div class=\"row\">
      <a class=\"btn btn-default loading\">Général</a>
      <a class=\"btn btn-default loading\"> Complément</a>
      <a class=\"btn btn-default loading\">Curcus</a>
      <a class=\"btn btn-default loading\">Frais d'écolage</a>
      <a class=\"btn btn-default loading\">Autres</a>
      
    </div>

<br>
";
        // line 17
        if (array_key_exists("ErrTitle", $context)) {
            // line 18
            echo "<div role=\"alert\" class=\"alert alert-danger alert-dismissible\">
  <button type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\" class=\"mdi mdi-close\"></span></button><span class=\"icon mdi mdi-close-circle-o\"></span><strong>";
            // line 19
            echo twig_escape_filter($this->env, ($context["ErrTitle"] ?? $this->getContext($context, "ErrTitle")), "html", null, true);
            echo " </strong> ";
            echo twig_escape_filter($this->env, ($context["ErrMsg"] ?? $this->getContext($context, "ErrMsg")), "html", null, true);
            echo "</div>
";
        }
        // line 21
        echo "      <div class=\"row row-bottom-padded-md\">
        <div class=\"col-md-6 to-animate\">

          <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ecolev3");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"panel panel-default panel-border-color panel-border-color-primary\">
                <div class=\"panel-heading panel-heading-divider\">Etat civil  <span class=\"panel-subtitle\"></span></div>
                <div class=\"panel-body\"> 
                  <formaction=\"#\" data-parsley-validate=\"\" novalidate=\"\">
                    <div class=\"form-group xs-pt-10\">
                     <label class=\"col-sm-2 control-label\"  for=\"textinput\">C.N.E</label>
                      <div class=\"col-sm-4\">

                        <input type=\"text\" name=\"cne\" placeholder=\"C.N.E\" class=\"form-control\"";
        // line 33
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getCne", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">

                      </div>
                      <div class=\"col-sm-2\">
                        <label class=\"control-label\" for=\"textinput\">Code Massar</label>
                      </div>
                      <div class=\"col-sm-4\">

                        <input type=\"text\" name=\"cmasar\" placeholder=\"Code Massar\" class=\"form-control\"";
        // line 41
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getIdMassar", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">

                      </div>
                    </div>
            <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"textinput\">Nom</label>
            <div class=\"col-sm-10\">

              <input type=\"text\" name=\"nom\" placeholder=\"Nom\" class=\"form-control\" ";
        // line 49
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getNom", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">

            </div>
          </div>
           <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"textinput\">Prenom</label>
            <div class=\"col-sm-10\">

              <input type=\"text\" name=\"prenom\" placeholder=\"Prenom\" class=\"form-control\" ";
        // line 57
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getPrenom", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">

            </div>
          </div>
               <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"textinput\">Nom (fr)</label>
            <div class=\"col-sm-10\">

              <input type=\"text\" name=\"nomfr\" placeholder=\"Nom (fr)\" class=\"form-control\"";
        // line 65
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getNomfr", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">

            </div>
          </div>
                 <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"textinput\">Prenom (fr)</label>
            <div class=\"col-sm-10\">

              <input type=\"text\" name=\"prenomfr\" placeholder=\"Prenom(fr)\" class=\"form-control\"";
        // line 73
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getPrenomfr", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">
            </div>
          </div>
                 <div class=\"form-group\">
                <label for=\"date\" class=\"col-sm-2 control-label\">Date de naissance</label>
                  <div class=\"col-sm-4\">
                    <input type=\"date\" class=\"form-control\" id=\"date\" name=\"date\"";
        // line 79
        if (array_key_exists("etd", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getDate", array(), "method"), "Y-m-d"), "html", null, true);
            echo "\"";
        }
        echo ">
                  </div>
               
                   
                      <div class=\"col-sm-4\">
                        <div class=\"be-radio-icon inline\">

                          <input type=\"radio\" checked=\"\" name=\"sex\" id=\"rad1\" value=\"female\"";
        // line 86
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getSex", array(), "method") == "female"))) {
            echo "checked";
        }
        echo ">
                          <label for=\"rad1\"><span class=\"mdi mdi-female\"></span></label>
                        </div>
                        <div class=\"be-radio-icon inline\">
                          <input type=\"radio\" name=\"sex\" id=\"rad2\" value=\"male\"";
        // line 90
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getSex", array(), "method") == "male"))) {
            echo "checked";
        }
        echo ">

                          <label for=\"rad2\"><span class=\"mdi mdi-male-alt\"></span></label>
                        </div>
                      </div>
                    </div>
               <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"textinput\">Lieu de naissance</label>
            
            <div class=\"col-sm-4\">

              <select name=\"lieu1\" class=\"form-control\"";
        // line 101
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getLieu1", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">
                <option value=\"Autre\"  ";
        // line 102
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getLieu1", array(), "method") == "Autre"))) {
            echo "selected";
        }
        echo ">Autre</option>
                <option value=\"Tetouan\" ";
        // line 103
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getLieu1", array(), "method") == "Tetouan"))) {
            echo "selected";
        }
        echo ">Tetouan</option>
                <option value=\"Tanger\" ";
        // line 104
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getLieu1", array(), "method") == "Tanger"))) {
            echo "selected";
        }
        echo ">Tanger</option>

              </select>
            </div>
             <div class=\"col-sm-2\">
                        <label class=\"control-label\" for=\"textinput\">Autre, précisez</label>
                      </div>
                      <div class=\"col-sm-4\">

                        <input type=\"text\" name=\"autre1\" placeholder=\"Autre...\" class=\"form-control\"";
        // line 113
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getAutre1", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">

                      </div>
          </div>
               <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"textinput\">Lieu de naissance (fr)</label>
            <div class=\"col-sm-4\">

              <select name=\"lieu2\" class=\"form-control\"";
        // line 121
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getLieu2", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">
                <option value=\"Autre\"  ";
        // line 122
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getLieu2", array(), "method") == "Autre"))) {
            echo "selected";
        }
        echo ">Autre</option>
                <option value=\"Tetouan\" ";
        // line 123
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getLieu2", array(), "method") == "Tetouan"))) {
            echo "selected";
        }
        echo ">Tetouan</option>
                <option value=\"Tanger\" ";
        // line 124
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getLieu2", array(), "method") == "Tanger"))) {
            echo "selected";
        }
        echo ">Tanger</option>

              </select>
            </div>
                 <div class=\"col-sm-2\">
                        <label class=\"control-label\" for=\"textinput\">Autre, précisez</label>
                      </div>
                      <div class=\"col-sm-4\">
                        <input type=\"text\" name=\"autre2\" placeholder=\"Autre...\" class=\"form-control\"";
        // line 132
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getAutre2", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">
                      </div>
          </div>
               <div class=\"form-group\">

            <label class=\"col-sm-2 control-label\" for=\"textinput\">Nationalité</label>
                  <div class=\"col-sm-6\">
                        <div class=\"be-radio inline\">
                          <input type=\"radio\" ";
        // line 140
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getNat", array(), "method") == "marocaine"))) {
            echo "checked";
        }
        echo " name=\"nat\" value=\"marocaine\" id=\"raD6\" onclick= \"DisabledAP()\">
                          <label for=\"raD6\">Marocaine</label>
                        </div>
                        <div class=\"be-radio inline\">
                          <input type=\"radio\" ";
        // line 144
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getNat", array(), "method") != "marocaine"))) {
            echo "checked";
        }
        echo " name=\"nat\" id=\"raD7\" value =\"autre\" onclick= \"DisabledAP()\">
                          <label for=\"raD7\">Autre</label>
                        </div>
                      </div>
            <div class=\"col-sm-4\">
              <input type=\"text\" placeholder=\"Autre précisez\" name=\"nat2\" class=\"form-control\" disabled id=\"AutreP\"";
        // line 149
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getNat", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo " >
            </div>
          </div>
               <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"textinput\">C.I.N</label>
            <div class=\"col-sm-4\">
              <input type=\"text\" name=\"cin\" placeholder=\"C.I.N\" class=\"form-control\"";
        // line 155
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getCin", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">

            </div>
          </div>
                </div>
              </div>
            </div>
            <div class=\"col-sm-6 form-horizontal\">
              <div class=\"panel panel-default panel-border-color panel-border-color-primary\">
               <div class=\"panel-heading panel-heading-divider\">Situation Scolaire<span class=\"panel-subtitle\"></span></div>
                <div class=\"panel-body\">
                  
                     <!-- Block image -->
                    <div class=\"user-display-info2\">
                      <input type=\"file\" name= \"photo\" id=\"a\" class=\"form-control input-file-w65\" accept=\"image/*\" onchange=\"PreviewImage();\">
                    </div>
                    <div class=\"user-display-avatar2\">
                      <img id=\"b\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar-150.png"), "html", null, true);
        echo "\" alt=\"Avatar\" >

                      
                    </div>

                     <!-- Text input-->
                     <div class=\"form-group xs-pt-10\">
                      ";
        // line 179
        if (array_key_exists("errMat", $context)) {
            // line 180
            echo "                     <label class=\"col-sm-2 control-label\" for=\"textinput\" style=\"color: red\">Matricule</label>
                     ";
        } else {
            // line 182
            echo "                     <label class=\"col-sm-2 control-label\" for=\"textinput\">Matricule</label>
                     ";
        }
        // line 184
        echo "
            <div class=\"col-sm-4\">
                     ";
        // line 186
        if (array_key_exists("errMat", $context)) {
            // line 187
            echo "                        <input type=\"text\" name=\"matricule\" placeholder=\"Matricule\" class=\"form-control\" style=\"border:1px solid red;\">
                     ";
        } else {
            // line 189
            echo "                         <input type=\"text\" name=\"matricule\" placeholder=\"Matricule\" class=\"form-control\">
                     ";
        }
        // line 191
        echo "
            </div>
             <div class=\"col-sm-2\">
                        <label class=\"control-label\" for=\"textinput\">Statut</label>
                      </div>
                      <div class=\"col-sm-4\">
                        <select name=\"statut\" class=\"form-control\" ";
        // line 197
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getStatut", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">
                <option value=\"Inscrits\"  ";
        // line 198
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getStatut", array(), "method") == "Inscrits"))) {
            echo "selected";
        }
        echo ">Inscrits</option>
                <option value=\"En attente\" ";
        // line 199
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getStatut", array(), "method") == "En attente"))) {
            echo "selected";
        }
        echo ">En attente</option>
                <option value=\"Partis\"  ";
        // line 200
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getStatut", array(), "method") == "Partis"))) {
            echo "selected";
        }
        echo ">Partis</option>
                <option value=\"Radiés\"  ";
        // line 201
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getStatut", array(), "method") == "Radiés"))) {
            echo "selected";
        }
        echo ">Radiés</option>

              </select>
                      </div>
          </div>
                   <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Niveau de scolarité actuelle </label>
              <div class=\"col-sm-10\">
                <select class=\"form-control\" name=\"niveau\">
                  <option value=\"الأول\">الأول</option>
                  <option value =\"الثاني\">الثاني</option>
                  <option value =\"الثالث\">الثالث</option>
                  <option value =\"الرابع\">الرابع</option>
                  <option value =\"الخامس\">الخامس</option>
                  <option value =\"السادس\">السادس</option>
                </select>
              </div>
          </div>
                     <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Niveau de scolarité actuelle (fr)</label>
              <div class=\"col-sm-10\">
                <select class=\"form-control\" name=\"niveau2\">
                  <option value=\"CP\">CP</option>
                  <option value=\"CE1\">CE1</option>
                  <option value=\"CE2\">CE2</option>
                  <option value=\"CM1\">CM1</option>
                  <option value=\"CM2\">CEM2</option>
                </select>
              </div>
          </div>
           <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Classe actuelle </label>
              <div class=\"col-sm-4\">
                <select class=\"form-control\" name=\"classe\">
                  <option value=\"primaire\">cp</option>
                  <option value=\"secondaire\">cpe</option>
                </select>
              </div>
               <div class=\"col-sm-2\">
                        <label class=\"control-label\" for=\"textinput\">Redoublant</label>
                      </div>
                      <div class=\"col-sm-2\">

                        <input type=\"text\" name=\"red\" placeholder=\"\" class=\"form-control\"";
        // line 244
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getRed", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">

                      </div>
          </div>   <div class=\"form-group xs-pt-10\">
                     <label class=\"col-sm-2 control-label\" for=\"textinput\">Transport scolaire</label>
            <div class=\"col-sm-2\">

              <input type=\"text\" name=\"transport\" placeholder=\"\" class=\"form-control\"";
        // line 251
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getTransport", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">
            </div>
          </div>
              <div class=\"form-group\">
                <label for=\"date\" class=\"col-sm-2 control-label\">Date d'entrée'</label>
                  <div class=\"col-sm-4\">

                    <input type=\"date\" class=\"form-control\" id=\"date\" name=\"date2\" ";
        // line 258
        if (array_key_exists("etd", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getDate2", array(), "method"), "Y-m-d"), "html", null, true);
            echo "\"";
        }
        echo ">
                    </div>
                     <label class=\"col-sm-2 control-label\">Niveau scolaire d'entrée </label>
              <div class=\"col-sm-4\">
                <select class=\"form-control\" name=\"niveau3\">
                  <option value=\"primaire\">primaire</option>
                  <option value=\"secondaire\">secondaire</option>
                </select>
              </div> 
            </div>
                </div>
              </div>
           </div>
          
            <div class=\"col-sm-6 form-horizontal\">
              <div class=\"panel panel-default panel-border-color panel-border-color-primary\">
             <div class=\"panel-heading panel-heading-divider\">Etablissement d'origine<span class=\"panel-subtitle\"></span></div>
                <div class=\"panel-body\">
                  
                         <div class=\"form-group xs-pt-10\">
                     <label class=\"col-sm-2 control-label\" for=\"textinput\">Etablissement d'origine</label>
            <div class=\"col-sm-4\">
              <input type=\"text\" name=\"etablissement\" placeholder=\"Etablissement d'origine\" class=\"form-control\">
            </div>
                  <div class=\"col-sm-6\">
                        <div class=\"be-radio inline\">
                          <input type=\"radio\" checked=\"\" name=\"rad3\" id=\"Rad6\" value=\"public\" ";
        // line 284
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getRad3", array(), "method") == "public"))) {
            echo "checked";
        }
        echo ">
                          <label for=\"Rad6\">public</label>
                        </div>
                        <div class=\"be-radio inline\">
                          <input type=\"radio\" checked=\"\" name=\"rad3\" id=\"Rad7\" value=\"prive\"";
        // line 288
        if ((array_key_exists("etd", $context) && ($this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getRad3", array(), "method") == "privé"))) {
            echo "checked";
        }
        echo ">

                          <label for=\"Rad7\">privé</label>
                        </div>
                      </div>
          </div>
             <div class=\"form-group\">
                     <label class=\"col-sm-2 control-label\" for=\"textinput\">Code d'Etablissement d'origine</label>
            <div class=\"col-sm-4\">
              <input type=\"text\" name=\"code\" placeholder=\"Code\" class=\"form-control\"";
        // line 297
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getCode", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">

            </div>
             <label class=\"col-sm-2 control-label\"> Ville</label>
              <div class=\"col-sm-4\">
                <select class=\"form-control\" name=\"ville\">
                  <option value=\"tanger\">Tanger</option>
                  <option value=\"tanger\">Tetouan</option>
                </select>
          </div>
        </div>
         <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"textinput\">Certificat de scolarité d'origine</label>
               <div class=\"col-sm-10\">
                <input type=\"file\" class=\"form-control\" name=\"testfile\">
                </div>
             </div>
      
                </div>
              </div>
            </div>
      <div class=\"row row-bottom-padded-md\">
        <div class=\"col-md-6 form-horizontal\">
          
              <div class=\"panel panel-default panel-border-color panel-border-color-primary\" style=\"margin-top:-200px;\">

                 <div class=\"panel-heading panel-heading-divider\">Adresse de communication <span class=\"panel-subtitle\"></span></div>
                <div class=\"panel-body\">
                  <form>
                      <div class=\"form-group xs-pt-10\">
                     <label class=\"col-sm-2 control-label\" for=\"textinput\">Adresse domicile</label>
            <div class=\"col-sm-10\">

              <input type=\"text\" name=\"adresse\" placeholder=\"Adresse domicile\" class=\"form-control\"";
        // line 330
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getAdresse", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">

            </div>
          </div>
             <div class=\"form-group xs-pt-10\">
                     <label class=\"col-sm-2 control-label\" for=\"textinput\">Téléphone domicile</label>
                      <div class=\"col-sm-4\">

                        <input type=\"text\" name=\"telephone\" placeholder=\"téléphone\" class=\"form-control\"";
        // line 338
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getTel", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">

                      </div>
                      <div class=\"col-sm-2\">
                        <label class=\"control-label\" for=\"textinput\">Portable élève</label>
                      </div>
                      <div class=\"col-sm-4\">

                        <input type=\"text\" name=\"portable\" placeholder=\"Portable\" class=\"form-control\"";
        // line 346
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getPortable", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">

                      </div>
                    </div>
             
              <div class=\"form-group xs-pt-10\">
                     <label class=\"col-sm-2 control-label\" for=\"textinput\">E-mail élève</label>
            <div class=\"col-sm-10\">

              <input type=\"text\" name=\"email\" placeholder=\"E-mail élève\" class=\"form-control\"";
        // line 355
        if (array_key_exists("etd", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["etd"] ?? $this->getContext($context, "etd")), "getEmail", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">

            </div>
          </div>

                </div>
              </div>
            </div>

            </div>
<style type=\"text/css\">
.ce_btn_elv{
  border:none;
  background: transparent;
}
</style>
          <div class=\"row\">
            <div class=\"form-group xs-pt-10\"style=\"margin-left:200px;\">
              <div class=\"icon-container col-sm-3\">
                <button class=\"ce_btn_elv\" type=\"submit\"><div class=\"icon\"><span class=\"mdi mdi-check\"></span></div><span class=\"icon-class\"> Enregistrer </span></button>
              </div>
            
              <div class=\"icon-container col-sm-3\">
                <button class=\"ce_btn_elv\" type=\"button\" onClick=\"window.print()\"><div class=\"icon\"><span class=\"mdi mdi-print\"></span></div><span class=\"icon-class\">Imprimer fiche</span></button>
              </div>
              <div class=\"icon-container col-sm-3\">
                <button class=\"ce_btn_elv\" type=\"button\"><div class=\"icon\"><span class=\"mdi mdi-delete\"></span></div><span class=\"icon-class\">Supprimer</span></button>
              </div>
            </div>
          </div>
        </form>
  ";
        
        $__internal_da8b7f89f03df1337421ac075c3f3259a4bc685a0714c4cfb28d056f395e48ce->leave($__internal_da8b7f89f03df1337421ac075c3f3259a4bc685a0714c4cfb28d056f395e48ce_prof);

        
        $__internal_4c4530abf64dc5809f6c51c16d441e24c93759edc038179a3d31f8c030f54d37->leave($__internal_4c4530abf64dc5809f6c51c16d441e24c93759edc038179a3d31f8c030f54d37_prof);

    }

    public function getTemplateName()
    {
        return "myspace/ecolev3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  659 => 355,  643 => 346,  628 => 338,  613 => 330,  573 => 297,  559 => 288,  550 => 284,  517 => 258,  503 => 251,  489 => 244,  441 => 201,  435 => 200,  429 => 199,  423 => 198,  415 => 197,  407 => 191,  403 => 189,  399 => 187,  397 => 186,  393 => 184,  389 => 182,  385 => 180,  383 => 179,  373 => 172,  349 => 155,  336 => 149,  326 => 144,  317 => 140,  302 => 132,  289 => 124,  283 => 123,  277 => 122,  269 => 121,  254 => 113,  240 => 104,  234 => 103,  228 => 102,  220 => 101,  204 => 90,  195 => 86,  181 => 79,  168 => 73,  153 => 65,  138 => 57,  123 => 49,  108 => 41,  93 => 33,  81 => 24,  76 => 21,  69 => 19,  66 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
          <section id=\"fh5co-contact\" data-section=\"contact\">
    <div class=\"container\">
    
    <div class=\"row\">
      <a class=\"btn btn-default loading\">Général</a>
      <a class=\"btn btn-default loading\"> Complément</a>
      <a class=\"btn btn-default loading\">Curcus</a>
      <a class=\"btn btn-default loading\">Frais d'écolage</a>
      <a class=\"btn btn-default loading\">Autres</a>
      
    </div>

<br>
{% if ErrTitle is defined %}
<div role=\"alert\" class=\"alert alert-danger alert-dismissible\">
  <button type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\" class=\"mdi mdi-close\"></span></button><span class=\"icon mdi mdi-close-circle-o\"></span><strong>{{ ErrTitle }} </strong> {{ ErrMsg }}</div>
{% endif %}
      <div class=\"row row-bottom-padded-md\">
        <div class=\"col-md-6 to-animate\">

          <form class=\"form-horizontal\" role=\"form\" action=\"{{ path('ecolev3') }}\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"panel panel-default panel-border-color panel-border-color-primary\">
                <div class=\"panel-heading panel-heading-divider\">Etat civil  <span class=\"panel-subtitle\"></span></div>
                <div class=\"panel-body\"> 
                  <formaction=\"#\" data-parsley-validate=\"\" novalidate=\"\">
                    <div class=\"form-group xs-pt-10\">
                     <label class=\"col-sm-2 control-label\"  for=\"textinput\">C.N.E</label>
                      <div class=\"col-sm-4\">

                        <input type=\"text\" name=\"cne\" placeholder=\"C.N.E\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getCne() }}\"{%endif%}>

                      </div>
                      <div class=\"col-sm-2\">
                        <label class=\"control-label\" for=\"textinput\">Code Massar</label>
                      </div>
                      <div class=\"col-sm-4\">

                        <input type=\"text\" name=\"cmasar\" placeholder=\"Code Massar\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getIdMassar() }}\"{%endif%}>

                      </div>
                    </div>
            <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"textinput\">Nom</label>
            <div class=\"col-sm-10\">

              <input type=\"text\" name=\"nom\" placeholder=\"Nom\" class=\"form-control\" {% if etd is defined %}value=\"{{ etd.getNom() }}\"{%endif%}>

            </div>
          </div>
           <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"textinput\">Prenom</label>
            <div class=\"col-sm-10\">

              <input type=\"text\" name=\"prenom\" placeholder=\"Prenom\" class=\"form-control\" {% if etd is defined %}value=\"{{ etd.getPrenom() }}\"{%endif%}>

            </div>
          </div>
               <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"textinput\">Nom (fr)</label>
            <div class=\"col-sm-10\">

              <input type=\"text\" name=\"nomfr\" placeholder=\"Nom (fr)\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getNomfr() }}\"{%endif%}>

            </div>
          </div>
                 <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"textinput\">Prenom (fr)</label>
            <div class=\"col-sm-10\">

              <input type=\"text\" name=\"prenomfr\" placeholder=\"Prenom(fr)\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getPrenomfr() }}\"{%endif%}>
            </div>
          </div>
                 <div class=\"form-group\">
                <label for=\"date\" class=\"col-sm-2 control-label\">Date de naissance</label>
                  <div class=\"col-sm-4\">
                    <input type=\"date\" class=\"form-control\" id=\"date\" name=\"date\"{% if etd is defined %} value=\"{{ etd.getDate()|date('Y-m-d') }}\"{%endif%}>
                  </div>
               
                   
                      <div class=\"col-sm-4\">
                        <div class=\"be-radio-icon inline\">

                          <input type=\"radio\" checked=\"\" name=\"sex\" id=\"rad1\" value=\"female\"{% if etd is defined and etd.getSex()=='female'%}checked{%endif%}>
                          <label for=\"rad1\"><span class=\"mdi mdi-female\"></span></label>
                        </div>
                        <div class=\"be-radio-icon inline\">
                          <input type=\"radio\" name=\"sex\" id=\"rad2\" value=\"male\"{% if etd is defined and etd.getSex()=='male'%}checked{%endif%}>

                          <label for=\"rad2\"><span class=\"mdi mdi-male-alt\"></span></label>
                        </div>
                      </div>
                    </div>
               <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"textinput\">Lieu de naissance</label>
            
            <div class=\"col-sm-4\">

              <select name=\"lieu1\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getLieu1() }}\"{%endif%}>
                <option value=\"Autre\"  {% if etd is defined and etd.getLieu1() == \"Autre\" %}selected{%endif%}>Autre</option>
                <option value=\"Tetouan\" {% if etd is defined and etd.getLieu1() == \"Tetouan\"%}selected{%endif%}>Tetouan</option>
                <option value=\"Tanger\" {% if etd is defined and etd.getLieu1() == \"Tanger\" %}selected{%endif%}>Tanger</option>

              </select>
            </div>
             <div class=\"col-sm-2\">
                        <label class=\"control-label\" for=\"textinput\">Autre, précisez</label>
                      </div>
                      <div class=\"col-sm-4\">

                        <input type=\"text\" name=\"autre1\" placeholder=\"Autre...\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getAutre1() }}\"{%endif%}>

                      </div>
          </div>
               <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"textinput\">Lieu de naissance (fr)</label>
            <div class=\"col-sm-4\">

              <select name=\"lieu2\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getLieu2() }}\"{%endif%}>
                <option value=\"Autre\"  {% if etd is defined and etd.getLieu2() == \"Autre\" %}selected{%endif%}>Autre</option>
                <option value=\"Tetouan\" {% if etd is defined and etd.getLieu2() == \"Tetouan\" %}selected{%endif%}>Tetouan</option>
                <option value=\"Tanger\" {% if etd is defined and etd.getLieu2() == \"Tanger\" %}selected{%endif%}>Tanger</option>

              </select>
            </div>
                 <div class=\"col-sm-2\">
                        <label class=\"control-label\" for=\"textinput\">Autre, précisez</label>
                      </div>
                      <div class=\"col-sm-4\">
                        <input type=\"text\" name=\"autre2\" placeholder=\"Autre...\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getAutre2() }}\"{%endif%}>
                      </div>
          </div>
               <div class=\"form-group\">

            <label class=\"col-sm-2 control-label\" for=\"textinput\">Nationalité</label>
                  <div class=\"col-sm-6\">
                        <div class=\"be-radio inline\">
                          <input type=\"radio\" {% if etd is defined and etd.getNat()=='marocaine' %}checked{%endif%} name=\"nat\" value=\"marocaine\" id=\"raD6\" onclick= \"DisabledAP()\">
                          <label for=\"raD6\">Marocaine</label>
                        </div>
                        <div class=\"be-radio inline\">
                          <input type=\"radio\" {% if etd is defined and etd.getNat()!='marocaine'%}checked{%endif%} name=\"nat\" id=\"raD7\" value =\"autre\" onclick= \"DisabledAP()\">
                          <label for=\"raD7\">Autre</label>
                        </div>
                      </div>
            <div class=\"col-sm-4\">
              <input type=\"text\" placeholder=\"Autre précisez\" name=\"nat2\" class=\"form-control\" disabled id=\"AutreP\"{% if etd is defined %}value=\"{{ etd.getNat() }}\"{%endif%} >
            </div>
          </div>
               <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"textinput\">C.I.N</label>
            <div class=\"col-sm-4\">
              <input type=\"text\" name=\"cin\" placeholder=\"C.I.N\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getCin() }}\"{%endif%}>

            </div>
          </div>
                </div>
              </div>
            </div>
            <div class=\"col-sm-6 form-horizontal\">
              <div class=\"panel panel-default panel-border-color panel-border-color-primary\">
               <div class=\"panel-heading panel-heading-divider\">Situation Scolaire<span class=\"panel-subtitle\"></span></div>
                <div class=\"panel-body\">
                  
                     <!-- Block image -->
                    <div class=\"user-display-info2\">
                      <input type=\"file\" name= \"photo\" id=\"a\" class=\"form-control input-file-w65\" accept=\"image/*\" onchange=\"PreviewImage();\">
                    </div>
                    <div class=\"user-display-avatar2\">
                      <img id=\"b\" src=\"{{ asset('img/avatar-150.png') }}\" alt=\"Avatar\" >

                      
                    </div>

                     <!-- Text input-->
                     <div class=\"form-group xs-pt-10\">
                      {% if errMat is defined %}
                     <label class=\"col-sm-2 control-label\" for=\"textinput\" style=\"color: red\">Matricule</label>
                     {% else %}
                     <label class=\"col-sm-2 control-label\" for=\"textinput\">Matricule</label>
                     {% endif %}

            <div class=\"col-sm-4\">
                     {% if errMat is defined %}
                        <input type=\"text\" name=\"matricule\" placeholder=\"Matricule\" class=\"form-control\" style=\"border:1px solid red;\">
                     {% else %}
                         <input type=\"text\" name=\"matricule\" placeholder=\"Matricule\" class=\"form-control\">
                     {% endif %}

            </div>
             <div class=\"col-sm-2\">
                        <label class=\"control-label\" for=\"textinput\">Statut</label>
                      </div>
                      <div class=\"col-sm-4\">
                        <select name=\"statut\" class=\"form-control\" {% if etd is defined %}value=\"{{ etd.getStatut() }}\"{%endif%}>
                <option value=\"Inscrits\"  {% if etd is defined and etd.getStatut() == \"Inscrits\" %}selected{%endif%}>Inscrits</option>
                <option value=\"En attente\" {% if etd is defined and etd.getStatut() == \"En attente\" %}selected{%endif%}>En attente</option>
                <option value=\"Partis\"  {% if etd is defined and etd.getStatut() == \"Partis\" %}selected{%endif%}>Partis</option>
                <option value=\"Radiés\"  {% if etd is defined and etd.getStatut() == \"Radiés\" %}selected{%endif%}>Radiés</option>

              </select>
                      </div>
          </div>
                   <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Niveau de scolarité actuelle </label>
              <div class=\"col-sm-10\">
                <select class=\"form-control\" name=\"niveau\">
                  <option value=\"الأول\">الأول</option>
                  <option value =\"الثاني\">الثاني</option>
                  <option value =\"الثالث\">الثالث</option>
                  <option value =\"الرابع\">الرابع</option>
                  <option value =\"الخامس\">الخامس</option>
                  <option value =\"السادس\">السادس</option>
                </select>
              </div>
          </div>
                     <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Niveau de scolarité actuelle (fr)</label>
              <div class=\"col-sm-10\">
                <select class=\"form-control\" name=\"niveau2\">
                  <option value=\"CP\">CP</option>
                  <option value=\"CE1\">CE1</option>
                  <option value=\"CE2\">CE2</option>
                  <option value=\"CM1\">CM1</option>
                  <option value=\"CM2\">CEM2</option>
                </select>
              </div>
          </div>
           <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Classe actuelle </label>
              <div class=\"col-sm-4\">
                <select class=\"form-control\" name=\"classe\">
                  <option value=\"primaire\">cp</option>
                  <option value=\"secondaire\">cpe</option>
                </select>
              </div>
               <div class=\"col-sm-2\">
                        <label class=\"control-label\" for=\"textinput\">Redoublant</label>
                      </div>
                      <div class=\"col-sm-2\">

                        <input type=\"text\" name=\"red\" placeholder=\"\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getRed() }}\"{%endif%}>

                      </div>
          </div>   <div class=\"form-group xs-pt-10\">
                     <label class=\"col-sm-2 control-label\" for=\"textinput\">Transport scolaire</label>
            <div class=\"col-sm-2\">

              <input type=\"text\" name=\"transport\" placeholder=\"\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getTransport() }}\"{%endif%}>
            </div>
          </div>
              <div class=\"form-group\">
                <label for=\"date\" class=\"col-sm-2 control-label\">Date d'entrée'</label>
                  <div class=\"col-sm-4\">

                    <input type=\"date\" class=\"form-control\" id=\"date\" name=\"date2\" {% if etd is defined %} value=\"{{ etd.getDate2()|date('Y-m-d') }}\"{%endif%}>
                    </div>
                     <label class=\"col-sm-2 control-label\">Niveau scolaire d'entrée </label>
              <div class=\"col-sm-4\">
                <select class=\"form-control\" name=\"niveau3\">
                  <option value=\"primaire\">primaire</option>
                  <option value=\"secondaire\">secondaire</option>
                </select>
              </div> 
            </div>
                </div>
              </div>
           </div>
          
            <div class=\"col-sm-6 form-horizontal\">
              <div class=\"panel panel-default panel-border-color panel-border-color-primary\">
             <div class=\"panel-heading panel-heading-divider\">Etablissement d'origine<span class=\"panel-subtitle\"></span></div>
                <div class=\"panel-body\">
                  
                         <div class=\"form-group xs-pt-10\">
                     <label class=\"col-sm-2 control-label\" for=\"textinput\">Etablissement d'origine</label>
            <div class=\"col-sm-4\">
              <input type=\"text\" name=\"etablissement\" placeholder=\"Etablissement d'origine\" class=\"form-control\">
            </div>
                  <div class=\"col-sm-6\">
                        <div class=\"be-radio inline\">
                          <input type=\"radio\" checked=\"\" name=\"rad3\" id=\"Rad6\" value=\"public\" {% if etd is defined and etd.getRad3()=='public'%}checked{%endif%}>
                          <label for=\"Rad6\">public</label>
                        </div>
                        <div class=\"be-radio inline\">
                          <input type=\"radio\" checked=\"\" name=\"rad3\" id=\"Rad7\" value=\"prive\"{% if etd is defined and etd.getRad3()=='privé'%}checked{%endif%}>

                          <label for=\"Rad7\">privé</label>
                        </div>
                      </div>
          </div>
             <div class=\"form-group\">
                     <label class=\"col-sm-2 control-label\" for=\"textinput\">Code d'Etablissement d'origine</label>
            <div class=\"col-sm-4\">
              <input type=\"text\" name=\"code\" placeholder=\"Code\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getCode() }}\"{%endif%}>

            </div>
             <label class=\"col-sm-2 control-label\"> Ville</label>
              <div class=\"col-sm-4\">
                <select class=\"form-control\" name=\"ville\">
                  <option value=\"tanger\">Tanger</option>
                  <option value=\"tanger\">Tetouan</option>
                </select>
          </div>
        </div>
         <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"textinput\">Certificat de scolarité d'origine</label>
               <div class=\"col-sm-10\">
                <input type=\"file\" class=\"form-control\" name=\"testfile\">
                </div>
             </div>
      
                </div>
              </div>
            </div>
      <div class=\"row row-bottom-padded-md\">
        <div class=\"col-md-6 form-horizontal\">
          
              <div class=\"panel panel-default panel-border-color panel-border-color-primary\" style=\"margin-top:-200px;\">

                 <div class=\"panel-heading panel-heading-divider\">Adresse de communication <span class=\"panel-subtitle\"></span></div>
                <div class=\"panel-body\">
                  <form>
                      <div class=\"form-group xs-pt-10\">
                     <label class=\"col-sm-2 control-label\" for=\"textinput\">Adresse domicile</label>
            <div class=\"col-sm-10\">

              <input type=\"text\" name=\"adresse\" placeholder=\"Adresse domicile\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getAdresse() }}\"{%endif%}>

            </div>
          </div>
             <div class=\"form-group xs-pt-10\">
                     <label class=\"col-sm-2 control-label\" for=\"textinput\">Téléphone domicile</label>
                      <div class=\"col-sm-4\">

                        <input type=\"text\" name=\"telephone\" placeholder=\"téléphone\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getTel() }}\"{%endif%}>

                      </div>
                      <div class=\"col-sm-2\">
                        <label class=\"control-label\" for=\"textinput\">Portable élève</label>
                      </div>
                      <div class=\"col-sm-4\">

                        <input type=\"text\" name=\"portable\" placeholder=\"Portable\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getPortable() }}\"{%endif%}>

                      </div>
                    </div>
             
              <div class=\"form-group xs-pt-10\">
                     <label class=\"col-sm-2 control-label\" for=\"textinput\">E-mail élève</label>
            <div class=\"col-sm-10\">

              <input type=\"text\" name=\"email\" placeholder=\"E-mail élève\" class=\"form-control\"{% if etd is defined %}value=\"{{ etd.getEmail() }}\"{%endif%}>

            </div>
          </div>

                </div>
              </div>
            </div>

            </div>
<style type=\"text/css\">
.ce_btn_elv{
  border:none;
  background: transparent;
}
</style>
          <div class=\"row\">
            <div class=\"form-group xs-pt-10\"style=\"margin-left:200px;\">
              <div class=\"icon-container col-sm-3\">
                <button class=\"ce_btn_elv\" type=\"submit\"><div class=\"icon\"><span class=\"mdi mdi-check\"></span></div><span class=\"icon-class\"> Enregistrer </span></button>
              </div>
            
              <div class=\"icon-container col-sm-3\">
                <button class=\"ce_btn_elv\" type=\"button\" onClick=\"window.print()\"><div class=\"icon\"><span class=\"mdi mdi-print\"></span></div><span class=\"icon-class\">Imprimer fiche</span></button>
              </div>
              <div class=\"icon-container col-sm-3\">
                <button class=\"ce_btn_elv\" type=\"button\"><div class=\"icon\"><span class=\"mdi mdi-delete\"></span></div><span class=\"icon-class\">Supprimer</span></button>
              </div>
            </div>
          </div>
        </form>
  {% endblock %}", "myspace/ecolev3.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\myspace\\ecolev3.html.twig");
    }
}
