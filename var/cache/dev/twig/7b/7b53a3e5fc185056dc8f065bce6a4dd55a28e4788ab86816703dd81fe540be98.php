<?php

/* base2.html.twig */
class __TwigTemplate_83d64f71b5bbb0ce1e6c816cde3b372fc6143bdbe519c7c0d2d1fd18578e85d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'selectAnneeScolaire' => array($this, 'block_selectAnneeScolaire'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3528ba9805250932ba1054f07592cebb61a78970ce573c24c86c227e1754c7e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3528ba9805250932ba1054f07592cebb61a78970ce573c24c86c227e1754c7e2->enter($__internal_3528ba9805250932ba1054f07592cebb61a78970ce573c24c86c227e1754c7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_ad23721c724a4f1820f5d6d1d05ad5a36e67e5697acdbc02a5920dd94bf9e245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad23721c724a4f1820f5d6d1d05ad5a36e67e5697acdbc02a5920dd94bf9e245->enter($__internal_ad23721c724a4f1820f5d6d1d05ad5a36e67e5697acdbc02a5920dd94bf9e245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"\">
    
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo-fav.png"), "html", null, true);
        echo "\">
  <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    
    </head>
  <body>
    <div class=\"be-wrapper\">
      <nav class=\"navbar navbar-default navbar-fixed-top be-top-header\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\"><a href=\"index.html\" class=\"navbar-brand\"></a></div>
          <div class=\"be-right-navbar\">
            <ul class=\"nav navbar-nav navbar-right be-user-nav\">
              <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"dropdown-toggle\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.png"), "html", null, true);
        echo "')}}\" alt=\"Avatar\"><span class=\"user-name\">Túpac Amaru</span></a>
                <ul role=\"menu\" class=\"dropdown-menu\">
                  <li>
                    <div class=\"user-info\">
                      <div class=\"user-name\">Túpac Amaru</div>
                      <div class=\"user-position online\">Available</div>
                    </div>
                  </li>
                  <li><a href=\"#\"><span class=\"icon mdi mdi-face\"></span> Account</a></li>
                  <li><a href=\"#\"><span class=\"icon mdi mdi-settings\"></span> Settings</a></li>
                  <li><a href=\"#\"><span class=\"icon mdi mdi-power\"></span> Logout</a></li>
                </ul>
              </li>
            </ul>



            <div class=\"page-title\" style=\"display : inline-block; width: 35% ;\"><span>Espace Administrateur</span>
                ";
        // line 51
        $this->displayBlock('selectAnneeScolaire', $context, $blocks);
        // line 52
        echo "            </div>

            <ul class=\"nav navbar-nav navbar-right be-icons-nav\">
              <li class=\"dropdown\"><a href=\"#\" role=\"button\" aria-expanded=\"false\" class=\"be-toggle-right-sidebar\"><span class=\"icon mdi mdi-settings\"></span></a></li>
              <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"dropdown-toggle\"><span class=\"icon mdi mdi-notifications\"></span><span class=\"indicator\"></span></a>
                <ul class=\"dropdown-menu be-notifications\">
                  <li>
                    <div class=\"title\">Notifications<span class=\"badge\">3</span></div>
                    <div class=\"list\">
                      <div class=\"be-scroller\">
                        <div class=\"content\">
                          <ul>
                            <li class=\"notification notification-unread\"><a href=\"#\">
                                <div class=\"image\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar2.png"), "html", null, true);
        echo "')}}\" alt=\"Avatar\"></div>
                                <div class=\"notification-info\">
                                  <div class=\"text\"><span class=\"user-name\">Jessica Caruso</span> accepted your invitation to join the team.</div><span class=\"date\">2 min ago</span>
                                </div></a></li>
                            <li class=\"notification\"><a href=\"#\">
                                <div class=\"image\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar3.png"), "html", null, true);
        echo "')}}\" alt=\"Avatar\"></div>
                                <div class=\"notification-info\">
                                  <div class=\"text\"><span class=\"user-name\">Joel King</span> is now following you</div><span class=\"date\">2 days ago</span>
                                </div></a></li>
                            <li class=\"notification\"><a href=\"#\">
                                <div class=\"image\"><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar4.png"), "html", null, true);
        echo "')}}\" alt=\"Avatar\"></div>
                                <div class=\"notification-info\">
                                  <div class=\"text\"><span class=\"user-name\">John Doe</span> is watching your main repository</div><span class=\"date\">2 days ago</span>
                                </div></a></li>
                            <li class=\"notification\"><a href=\"#\">
                                <div class=\"image\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar5.png"), "html", null, true);
        echo "')}}\" alt=\"Avatar\"></div>
                                <div class=\"notification-info\"><span class=\"text\"><span class=\"user-name\">Emily Carter</span> is now following you</span><span class=\"date\">5 days ago</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class=\"footer\"> <a href=\"#\">View all notifications</a></div>
                  </li>
                </ul>
              </li>
              <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"dropdown-toggle\"><span class=\"icon mdi mdi-apps\"></span></a>
                <ul class=\"dropdown-menu be-connections\">
                  <li>
                    <div class=\"list\">
                      <div class=\"content\">
                        <div class=\"row\">
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/github.png"), "html", null, true);
        echo "')}}\" alt=\"Github\"><span>GitHub</span></a></div>
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bitbucket.png"), "html", null, true);
        echo "')}}\" alt=\"Bitbucket\"><span>Bitbucket</span></a></div>
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slack.png"), "html", null, true);
        echo "')}}\" alt=\"Slack\"><span>Slack</span></a></div>
                        </div>
                        <div class=\"row\">
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/dribbble.png"), "html", null, true);
        echo "')}}\" alt=\"Dribbble\"><span>Dribbble</span></a></div>
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/mail_chimp.png"), "html", null, true);
        echo "'))}}\" alt=\"Mail Chimp\"><span>Mail Chimp</span></a></div>
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/dropbox.png"), "html", null, true);
        echo "'))}}\" alt=\"Dropbox\"><span>Dropbox</span></a></div>
                        </div>
                      </div>
                    </div>
                    <div class=\"footer\"> <a href=\"#\">More</a></div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class=\"be-left-sidebar\">
        <div class=\"left-sidebar-wrapper\"><a href=\"#\" class=\"left-sidebar-toggle\">Blank Page</a>
          <div class=\"left-sidebar-spacer\">
            <div class=\"left-sidebar-scroll\">
              <div class=\"left-sidebar-content\">
                <ul class=\"sidebar-elements\">
                  <li class=\"divider\">Gestion des inscription</li>
                  <li><a href=\"accueil.html\"><i class=\"icon mdi mdi-home\"></i><span>Accueil</span></a>
                  </li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi -face\"></i><span>Gestion des Inscription</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"ui-alerts.html\">Nouvelle Inscription</a>
                      </li>
                      <li><a href=\"Ficheseleve.html\">Fiches élèves</a>
                      </li>
                      <li><a href=\"Listeeleve.html\">Listes élèves</a>
                      </li>
                      <li><a href=\"ui-general.html\">Suivi des inscription </a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"charts.html\"></i><span>Services scolaire</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"transportVCL.html\">Transport scolaire</a>
                      </li>
                      <li><a href=\"cTransportAUTRE.html\">Autres services</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"#\"></i><span>Mobilité élèves</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"ecole v3.html\">Départ</a>
                      </li>
                      <li><a href=\"Listedepart.html\">Liste des départs/arrivés</a>
                      </li>
                      <li><a href=\"mobilitesynth.html\">Synthèse sur la mobilité</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"#\"></i><span>Registre des inscriptions</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"Ficheselevehtml\">Fiches élèves archivées</a>
                      </li>
                      <li><a href=\"editionregistre.html\"> Edition registre</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class=\"be-content\">
        <div class=\"main-content container-fluid\">
          
      ";
        // line 172
        $this->displayBlock('body', $context, $blocks);
        // line 173
        echo "      ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 174
        echo "    
      
      
        </div>
      </div>
      <nav class=\"be-right-sidebar\">
        <div class=\"sb-content\">
          <div class=\"tab-navigation\">
            <ul role=\"tablist\" class=\"nav nav-tabs nav-justified\">
              <li role=\"presentation\" class=\"active\"><a href=\"#tab1\" aria-controls=\"tab1\" role=\"tab\" data-toggle=\"tab\">Chat</a></li>
              <li role=\"presentation\"><a href=\"#tab2\" aria-controls=\"tab2\" role=\"tab\" data-toggle=\"tab\">Todo</a></li>
              <li role=\"presentation\"><a href=\"#tab3\" aria-controls=\"tab3\" role=\"tab\" data-toggle=\"tab\">Settings</a></li>
            </ul>
          </div>
          <div class=\"tab-panel\">
            <div class=\"tab-content\">
              <div id=\"tab1\" role=\"tabpanel\" class=\"tab-pane tab-chat active\">
                <div class=\"chat-contacts\">
                  <div class=\"chat-sections\">
                    <div class=\"be-scroller\">
                      <div class=\"content\">
                        <h2>Recent</h2>
                        <div class=\"contact-list contact-list-recent\">
                          <div class=\"user\"><a href=\"#\"><img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar1.png"), "html", null, true);
        echo "\" alt=\"Avatar\">
                              <div class=\"user-data\"><span class=\"status away\"></span><span class=\"name\">Claire Sassu</span><span class=\"message\">Can you share the...</span></div></a></div>
                          <div class=\"user\"><a href=\"#\"><img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar2.png"), "html", null, true);
        echo "\" alt=\"Avatar\">
                              <div class=\"user-data\"><span class=\"status\"></span><span class=\"name\">Maggie jackson</span><span class=\"message\">I confirmed the info.</span></div></a></div>
                          <div class=\"user\"><a href=\"#\"><img src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar3.png"), "html", null, true);
        echo "\" alt=\"Avatar\">
                              <div class=\"user-data\"><span class=\"status offline\"></span><span class=\"name\">Joel King   </span><span class=\"message\">Ready for the meeti...</span></div></a></div>
                        </div>
                        <h2>Contacts</h2>
                        <div class=\"contact-list\">
                          <div class=\"user\"><a href=\"#\"><img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar4.png"), "html", null, true);
        echo "\" alt=\"Avatar\">
                              <div class=\"user-data2\"><span class=\"status\"></span><span class=\"name\">Mike Bolthort</span></div></a></div>
                          <div class=\"user\"><a href=\"#\"><img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar5.png"), "html", null, true);
        echo "\" alt=\"Avatar\">
                              <div class=\"user-data2\"><span class=\"status\"></span><span class=\"name\">Maggie jackson</span></div></a></div>
                          <div class=\"user\"><a href=\"#\"><img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar6.png"), "html", null, true);
        echo "\" alt=\"Avatar\">
                              <div class=\"user-data2\"><span class=\"status offline\"></span><span class=\"name\">Jhon Voltemar</span></div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"bottom-input\">
                    <input type=\"text\" placeholder=\"Search...\" name=\"q\"><span class=\"mdi mdi-search\"></span>
                  </div>
                </div>
                <div class=\"chat-window\">
                  <div class=\"title\">
                    <div class=\"user\"><img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar2.png"), "html", null, true);
        echo "\" alt=\"Avatar\">
                      <h2>Maggie jackson</h2><span>Active 1h ago</span>
                    </div><span class=\"icon return mdi mdi-chevron-left\"></span>
                  </div>
                  <div class=\"chat-messages\">
                    <div class=\"be-scroller\">
                      <div class=\"content\">
                        <ul>
                          <li class=\"friend\">
                            <div class=\"msg\">Hello</div>
                          </li>
                          <li class=\"self\">
                            <div class=\"msg\">Hi, how are you?</div>
                          </li>
                          <li class=\"friend\">
                            <div class=\"msg\">Good, I'll need support with my pc</div>
                          </li>
                          <li class=\"self\">
                            <div class=\"msg\">Sure, just tell me what is going on with your computer?</div>
                          </li>
                          <li class=\"friend\">
                            <div class=\"msg\">I don't know it just turns off suddenly</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"chat-input\">
                    <div class=\"input-wrapper\"><span class=\"photo mdi mdi-camera\"></span>
                      <input type=\"text\" placeholder=\"Message...\" name=\"q\" autocomplete=\"off\"><span class=\"send-msg mdi mdi-mail-send\"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div id=\"tab2\" role=\"tabpanel\" class=\"tab-pane tab-todo\">
                <div class=\"todo-container\">
                  <div class=\"todo-wrapper\">
                    <div class=\"be-scroller\">
                      <div class=\"todo-content\"><span class=\"category-title\">Today</span>
                        <ul class=\"todo-list\">
                          <li>
                            <div class=\"be-checkbox be-checkbox-sm\"><span class=\"delete mdi mdi-delete\"></span>
                              <input id=\"todo1\" type=\"checkbox\" checked=\"\">
                              <label for=\"todo1\">Initialize the project</label>
                            </div>
                          </li>
                          <li>
                            <div class=\"be-checkbox be-checkbox-sm\"><span class=\"delete mdi mdi-delete\"></span>
                              <input id=\"todo2\" type=\"checkbox\">
                              <label for=\"todo2\">Create the main structure</label>
                            </div>
                          </li>
                          <li>
                            <div class=\"be-checkbox be-checkbox-sm\"><span class=\"delete mdi mdi-delete\"></span>
                              <input id=\"todo3\" type=\"checkbox\">
                              <label for=\"todo3\">Updates changes to GitHub</label>
                            </div>
                          </li>
                        </ul><span class=\"category-title\">Tomorrow</span>
                        <ul class=\"todo-list\">
                          <li>
                            <div class=\"be-checkbox be-checkbox-sm\"><span class=\"delete mdi mdi-delete\"></span>
                              <input id=\"todo4\" type=\"checkbox\">
                              <label for=\"todo4\">Initialize the project</label>
                            </div>
                          </li>
                          <li>
                            <div class=\"be-checkbox be-checkbox-sm\"><span class=\"delete mdi mdi-delete\"></span>
                              <input id=\"todo5\" type=\"checkbox\">
                              <label for=\"todo5\">Create the main structure</label>
                            </div>
                          </li>
                          <li>
                            <div class=\"be-checkbox be-checkbox-sm\"><span class=\"delete mdi mdi-delete\"></span>
                              <input id=\"todo6\" type=\"checkbox\">
                              <label for=\"todo6\">Updates changes to GitHub</label>
                            </div>
                          </li>
                          <li>
                            <div class=\"be-checkbox be-checkbox-sm\"><span class=\"delete mdi mdi-delete\"></span>
                              <input id=\"todo7\" type=\"checkbox\">
                              <label for=\"todo7\" title=\"This task is too long to be displayed in a normal space!\">This task is too long to be displayed in a normal space!</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"bottom-input\">
                    <input type=\"text\" placeholder=\"Create new task...\" name=\"q\"><span class=\"mdi mdi-plus\"></span>
                  </div>
                </div>
              </div>
              <div id=\"tab3\" role=\"tabpanel\" class=\"tab-pane tab-settings\">
                <div class=\"settings-wrapper\">
                  <div class=\"be-scroller\"><span class=\"category-title\">General</span>
                    <ul class=\"settings-list\">
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" checked=\"\" name=\"st1\" id=\"st1\"><span>
                            <label for=\"st1\"></label></span>
                        </div><span class=\"name\">Available</span>
                      </li>
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" checked=\"\" name=\"st2\" id=\"st2\"><span>
                            <label for=\"st2\"></label></span>
                        </div><span class=\"name\">Enable notifications</span>
                      </li>
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" checked=\"\" name=\"st3\" id=\"st3\"><span>
                            <label for=\"st3\"></label></span>
                        </div><span class=\"name\">Login with Facebook</span>
                      </li>
                    </ul><span class=\"category-title\">Notifications</span>
                    <ul class=\"settings-list\">
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" name=\"st4\" id=\"st4\"><span>
                            <label for=\"st4\"></label></span>
                        </div><span class=\"name\">Email notifications</span>
                      </li>
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" checked=\"\" name=\"st5\" id=\"st5\"><span>
                            <label for=\"st5\"></label></span>
                        </div><span class=\"name\">Project updates</span>
                      </li>
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" checked=\"\" name=\"st6\" id=\"st6\"><span>
                            <label for=\"st6\"></label></span>
                        </div><span class=\"name\">New comments</span>
                      </li>
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" name=\"st7\" id=\"st7\"><span>
                            <label for=\"st7\"></label></span>
                        </div><span class=\"name\">Chat messages</span>
                      </li>
                    </ul><span class=\"category-title\">Workflow</span>
                    <ul class=\"settings-list\">
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" name=\"st8\" id=\"st8\"><span>
                            <label for=\"st8\"></label></span>
                        </div><span class=\"name\">Deploy on commit</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/jquery/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
      \$(document).ready(function(){
        //initialize the javascript
        App.init();
      });
    </script>
    ";
        // line 390
        $this->displayBlock('js', $context, $blocks);
        echo " 

  </body>
</html>
";
        
        $__internal_3528ba9805250932ba1054f07592cebb61a78970ce573c24c86c227e1754c7e2->leave($__internal_3528ba9805250932ba1054f07592cebb61a78970ce573c24c86c227e1754c7e2_prof);

        
        $__internal_ad23721c724a4f1820f5d6d1d05ad5a36e67e5697acdbc02a5920dd94bf9e245->leave($__internal_ad23721c724a4f1820f5d6d1d05ad5a36e67e5697acdbc02a5920dd94bf9e245_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6a688f56645e0cc9c3a4a176d014061ec22c010b94898cb89656377821acbd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a688f56645e0cc9c3a4a176d014061ec22c010b94898cb89656377821acbd4->enter($__internal_c6a688f56645e0cc9c3a4a176d014061ec22c010b94898cb89656377821acbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c638fbb46f9b5fab833449fb3da6e561ae8869ba73ec942efd05d8bb115e6596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c638fbb46f9b5fab833449fb3da6e561ae8869ba73ec942efd05d8bb115e6596->enter($__internal_c638fbb46f9b5fab833449fb3da6e561ae8869ba73ec942efd05d8bb115e6596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Keltoum";
        
        $__internal_c638fbb46f9b5fab833449fb3da6e561ae8869ba73ec942efd05d8bb115e6596->leave($__internal_c638fbb46f9b5fab833449fb3da6e561ae8869ba73ec942efd05d8bb115e6596_prof);

        
        $__internal_c6a688f56645e0cc9c3a4a176d014061ec22c010b94898cb89656377821acbd4->leave($__internal_c6a688f56645e0cc9c3a4a176d014061ec22c010b94898cb89656377821acbd4_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e75268d3711b70f8898f23bb0539ae5d3b91b8e364caf91f206884b8bb5df78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e75268d3711b70f8898f23bb0539ae5d3b91b8e364caf91f206884b8bb5df78->enter($__internal_8e75268d3711b70f8898f23bb0539ae5d3b91b8e364caf91f206884b8bb5df78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fdfc81b88c0cd9180cc43ee101d226776d1c7ea5a3cb4421201f01659a53295f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfc81b88c0cd9180cc43ee101d226776d1c7ea5a3cb4421201f01659a53295f->enter($__internal_fdfc81b88c0cd9180cc43ee101d226776d1c7ea5a3cb4421201f01659a53295f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/perfect-scrollbar/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\"/>
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/material-design-icons/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\"/><!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
      <![endif]-->
      
      
      <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
     
    ";
        
        $__internal_fdfc81b88c0cd9180cc43ee101d226776d1c7ea5a3cb4421201f01659a53295f->leave($__internal_fdfc81b88c0cd9180cc43ee101d226776d1c7ea5a3cb4421201f01659a53295f_prof);

        
        $__internal_8e75268d3711b70f8898f23bb0539ae5d3b91b8e364caf91f206884b8bb5df78->leave($__internal_8e75268d3711b70f8898f23bb0539ae5d3b91b8e364caf91f206884b8bb5df78_prof);

    }

    // line 51
    public function block_selectAnneeScolaire($context, array $blocks = array())
    {
        $__internal_b4f4049d62ac8e8d3b1f4c2732ed013f2fc6ffb8df9465080841690385c5e243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f4049d62ac8e8d3b1f4c2732ed013f2fc6ffb8df9465080841690385c5e243->enter($__internal_b4f4049d62ac8e8d3b1f4c2732ed013f2fc6ffb8df9465080841690385c5e243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "selectAnneeScolaire"));

        $__internal_deed1d3d61067fab6bd4a1574eba3033a7df3f456ef08c834207b1983ca374a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deed1d3d61067fab6bd4a1574eba3033a7df3f456ef08c834207b1983ca374a9->enter($__internal_deed1d3d61067fab6bd4a1574eba3033a7df3f456ef08c834207b1983ca374a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "selectAnneeScolaire"));

        
        $__internal_deed1d3d61067fab6bd4a1574eba3033a7df3f456ef08c834207b1983ca374a9->leave($__internal_deed1d3d61067fab6bd4a1574eba3033a7df3f456ef08c834207b1983ca374a9_prof);

        
        $__internal_b4f4049d62ac8e8d3b1f4c2732ed013f2fc6ffb8df9465080841690385c5e243->leave($__internal_b4f4049d62ac8e8d3b1f4c2732ed013f2fc6ffb8df9465080841690385c5e243_prof);

    }

    // line 172
    public function block_body($context, array $blocks = array())
    {
        $__internal_08f19e60a60a89669d4516343a2ca1c7b0138a16a87aff4471ec4ec1309e661e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f19e60a60a89669d4516343a2ca1c7b0138a16a87aff4471ec4ec1309e661e->enter($__internal_08f19e60a60a89669d4516343a2ca1c7b0138a16a87aff4471ec4ec1309e661e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef25749e1bdd682d252563b932dfa866c79e65ec05fd601d07c1d337de0587bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef25749e1bdd682d252563b932dfa866c79e65ec05fd601d07c1d337de0587bc->enter($__internal_ef25749e1bdd682d252563b932dfa866c79e65ec05fd601d07c1d337de0587bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef25749e1bdd682d252563b932dfa866c79e65ec05fd601d07c1d337de0587bc->leave($__internal_ef25749e1bdd682d252563b932dfa866c79e65ec05fd601d07c1d337de0587bc_prof);

        
        $__internal_08f19e60a60a89669d4516343a2ca1c7b0138a16a87aff4471ec4ec1309e661e->leave($__internal_08f19e60a60a89669d4516343a2ca1c7b0138a16a87aff4471ec4ec1309e661e_prof);

    }

    // line 173
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f67435d0ad99d55b32e9529ea8180cad0e1ba4ec63e51821ba5e9a2118f2a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f67435d0ad99d55b32e9529ea8180cad0e1ba4ec63e51821ba5e9a2118f2a22->enter($__internal_1f67435d0ad99d55b32e9529ea8180cad0e1ba4ec63e51821ba5e9a2118f2a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dae5ab53cbc9ea72368d69f7fa69d8ea16fc1f3435a07ba5ba3538f126d7d691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae5ab53cbc9ea72368d69f7fa69d8ea16fc1f3435a07ba5ba3538f126d7d691->enter($__internal_dae5ab53cbc9ea72368d69f7fa69d8ea16fc1f3435a07ba5ba3538f126d7d691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dae5ab53cbc9ea72368d69f7fa69d8ea16fc1f3435a07ba5ba3538f126d7d691->leave($__internal_dae5ab53cbc9ea72368d69f7fa69d8ea16fc1f3435a07ba5ba3538f126d7d691_prof);

        
        $__internal_1f67435d0ad99d55b32e9529ea8180cad0e1ba4ec63e51821ba5e9a2118f2a22->leave($__internal_1f67435d0ad99d55b32e9529ea8180cad0e1ba4ec63e51821ba5e9a2118f2a22_prof);

    }

    // line 390
    public function block_js($context, array $blocks = array())
    {
        $__internal_b7826cfd93d970589735ea12dc16ecc2d7b104bee333b06fcf9c7c71611ca544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7826cfd93d970589735ea12dc16ecc2d7b104bee333b06fcf9c7c71611ca544->enter($__internal_b7826cfd93d970589735ea12dc16ecc2d7b104bee333b06fcf9c7c71611ca544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_9fac13d7e641a316b52ddb8a8a617ef1ff6fe71d86ab10136261cf616003cdb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fac13d7e641a316b52ddb8a8a617ef1ff6fe71d86ab10136261cf616003cdb3->enter($__internal_9fac13d7e641a316b52ddb8a8a617ef1ff6fe71d86ab10136261cf616003cdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_9fac13d7e641a316b52ddb8a8a617ef1ff6fe71d86ab10136261cf616003cdb3->leave($__internal_9fac13d7e641a316b52ddb8a8a617ef1ff6fe71d86ab10136261cf616003cdb3_prof);

        
        $__internal_b7826cfd93d970589735ea12dc16ecc2d7b104bee333b06fcf9c7c71611ca544->leave($__internal_b7826cfd93d970589735ea12dc16ecc2d7b104bee333b06fcf9c7c71611ca544_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 390,  600 => 173,  583 => 172,  566 => 51,  553 => 20,  544 => 14,  539 => 13,  530 => 12,  512 => 11,  497 => 390,  487 => 383,  483 => 382,  479 => 381,  475 => 380,  314 => 222,  299 => 210,  294 => 208,  289 => 206,  281 => 201,  276 => 199,  271 => 197,  246 => 174,  243 => 173,  241 => 172,  169 => 103,  165 => 102,  161 => 101,  155 => 98,  151 => 97,  147 => 96,  128 => 80,  120 => 75,  112 => 70,  104 => 65,  89 => 52,  87 => 51,  66 => 33,  52 => 23,  50 => 12,  46 => 11,  42 => 10,  31 => 1,);
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
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"\">
    
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"{{asset('img/logo-fav.png')}}\">
  <title>{% block title %}Keltoum{% endblock %}</title>
        {% block stylesheets %}
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('lib/perfect-scrollbar/css/perfect-scrollbar.min.css')}}\"/>
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('lib/material-design-icons/css/material-design-iconic-font.min.css')}}\"/><!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
      <![endif]-->
      
      
      <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\" type=\"text/css\"/>
     
    {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    
    </head>
  <body>
    <div class=\"be-wrapper\">
      <nav class=\"navbar navbar-default navbar-fixed-top be-top-header\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\"><a href=\"index.html\" class=\"navbar-brand\"></a></div>
          <div class=\"be-right-navbar\">
            <ul class=\"nav navbar-nav navbar-right be-user-nav\">
              <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"dropdown-toggle\"><img src=\"{{asset('img/avatar.png')}}')}}\" alt=\"Avatar\"><span class=\"user-name\">Túpac Amaru</span></a>
                <ul role=\"menu\" class=\"dropdown-menu\">
                  <li>
                    <div class=\"user-info\">
                      <div class=\"user-name\">Túpac Amaru</div>
                      <div class=\"user-position online\">Available</div>
                    </div>
                  </li>
                  <li><a href=\"#\"><span class=\"icon mdi mdi-face\"></span> Account</a></li>
                  <li><a href=\"#\"><span class=\"icon mdi mdi-settings\"></span> Settings</a></li>
                  <li><a href=\"#\"><span class=\"icon mdi mdi-power\"></span> Logout</a></li>
                </ul>
              </li>
            </ul>



            <div class=\"page-title\" style=\"display : inline-block; width: 35% ;\"><span>Espace Administrateur</span>
                {% block selectAnneeScolaire%}{% endblock %}
            </div>

            <ul class=\"nav navbar-nav navbar-right be-icons-nav\">
              <li class=\"dropdown\"><a href=\"#\" role=\"button\" aria-expanded=\"false\" class=\"be-toggle-right-sidebar\"><span class=\"icon mdi mdi-settings\"></span></a></li>
              <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"dropdown-toggle\"><span class=\"icon mdi mdi-notifications\"></span><span class=\"indicator\"></span></a>
                <ul class=\"dropdown-menu be-notifications\">
                  <li>
                    <div class=\"title\">Notifications<span class=\"badge\">3</span></div>
                    <div class=\"list\">
                      <div class=\"be-scroller\">
                        <div class=\"content\">
                          <ul>
                            <li class=\"notification notification-unread\"><a href=\"#\">
                                <div class=\"image\"><img src=\"{{asset('img/avatar2.png')}}')}}\" alt=\"Avatar\"></div>
                                <div class=\"notification-info\">
                                  <div class=\"text\"><span class=\"user-name\">Jessica Caruso</span> accepted your invitation to join the team.</div><span class=\"date\">2 min ago</span>
                                </div></a></li>
                            <li class=\"notification\"><a href=\"#\">
                                <div class=\"image\"><img src=\"{{asset('img/avatar3.png')}}')}}\" alt=\"Avatar\"></div>
                                <div class=\"notification-info\">
                                  <div class=\"text\"><span class=\"user-name\">Joel King</span> is now following you</div><span class=\"date\">2 days ago</span>
                                </div></a></li>
                            <li class=\"notification\"><a href=\"#\">
                                <div class=\"image\"><img src=\"{{asset('img/avatar4.png')}}')}}\" alt=\"Avatar\"></div>
                                <div class=\"notification-info\">
                                  <div class=\"text\"><span class=\"user-name\">John Doe</span> is watching your main repository</div><span class=\"date\">2 days ago</span>
                                </div></a></li>
                            <li class=\"notification\"><a href=\"#\">
                                <div class=\"image\"><img src=\"{{asset('img/avatar5.png')}}')}}\" alt=\"Avatar\"></div>
                                <div class=\"notification-info\"><span class=\"text\"><span class=\"user-name\">Emily Carter</span> is now following you</span><span class=\"date\">5 days ago</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class=\"footer\"> <a href=\"#\">View all notifications</a></div>
                  </li>
                </ul>
              </li>
              <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"dropdown-toggle\"><span class=\"icon mdi mdi-apps\"></span></a>
                <ul class=\"dropdown-menu be-connections\">
                  <li>
                    <div class=\"list\">
                      <div class=\"content\">
                        <div class=\"row\">
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"{{asset('img/github.png')}}')}}\" alt=\"Github\"><span>GitHub</span></a></div>
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"{{asset('img/bitbucket.png')}}')}}\" alt=\"Bitbucket\"><span>Bitbucket</span></a></div>
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"{{asset('img/slack.png')}}')}}\" alt=\"Slack\"><span>Slack</span></a></div>
                        </div>
                        <div class=\"row\">
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"{{asset('img/dribbble.png')}}')}}\" alt=\"Dribbble\"><span>Dribbble</span></a></div>
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"{{asset('img/mail_chimp.png')}}'))}}\" alt=\"Mail Chimp\"><span>Mail Chimp</span></a></div>
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"{{asset('img/dropbox.png')}}'))}}\" alt=\"Dropbox\"><span>Dropbox</span></a></div>
                        </div>
                      </div>
                    </div>
                    <div class=\"footer\"> <a href=\"#\">More</a></div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class=\"be-left-sidebar\">
        <div class=\"left-sidebar-wrapper\"><a href=\"#\" class=\"left-sidebar-toggle\">Blank Page</a>
          <div class=\"left-sidebar-spacer\">
            <div class=\"left-sidebar-scroll\">
              <div class=\"left-sidebar-content\">
                <ul class=\"sidebar-elements\">
                  <li class=\"divider\">Gestion des inscription</li>
                  <li><a href=\"accueil.html\"><i class=\"icon mdi mdi-home\"></i><span>Accueil</span></a>
                  </li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi -face\"></i><span>Gestion des Inscription</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"ui-alerts.html\">Nouvelle Inscription</a>
                      </li>
                      <li><a href=\"Ficheseleve.html\">Fiches élèves</a>
                      </li>
                      <li><a href=\"Listeeleve.html\">Listes élèves</a>
                      </li>
                      <li><a href=\"ui-general.html\">Suivi des inscription </a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"charts.html\"></i><span>Services scolaire</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"transportVCL.html\">Transport scolaire</a>
                      </li>
                      <li><a href=\"cTransportAUTRE.html\">Autres services</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"#\"></i><span>Mobilité élèves</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"ecole v3.html\">Départ</a>
                      </li>
                      <li><a href=\"Listedepart.html\">Liste des départs/arrivés</a>
                      </li>
                      <li><a href=\"mobilitesynth.html\">Synthèse sur la mobilité</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"#\"></i><span>Registre des inscriptions</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"Ficheselevehtml\">Fiches élèves archivées</a>
                      </li>
                      <li><a href=\"editionregistre.html\"> Edition registre</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class=\"be-content\">
        <div class=\"main-content container-fluid\">
          
      {% block body %}{% endblock %}
      {% block javascripts %}{% endblock %}
    
      
      
        </div>
      </div>
      <nav class=\"be-right-sidebar\">
        <div class=\"sb-content\">
          <div class=\"tab-navigation\">
            <ul role=\"tablist\" class=\"nav nav-tabs nav-justified\">
              <li role=\"presentation\" class=\"active\"><a href=\"#tab1\" aria-controls=\"tab1\" role=\"tab\" data-toggle=\"tab\">Chat</a></li>
              <li role=\"presentation\"><a href=\"#tab2\" aria-controls=\"tab2\" role=\"tab\" data-toggle=\"tab\">Todo</a></li>
              <li role=\"presentation\"><a href=\"#tab3\" aria-controls=\"tab3\" role=\"tab\" data-toggle=\"tab\">Settings</a></li>
            </ul>
          </div>
          <div class=\"tab-panel\">
            <div class=\"tab-content\">
              <div id=\"tab1\" role=\"tabpanel\" class=\"tab-pane tab-chat active\">
                <div class=\"chat-contacts\">
                  <div class=\"chat-sections\">
                    <div class=\"be-scroller\">
                      <div class=\"content\">
                        <h2>Recent</h2>
                        <div class=\"contact-list contact-list-recent\">
                          <div class=\"user\"><a href=\"#\"><img src=\"{{asset('img/avatar1.png')}}\" alt=\"Avatar\">
                              <div class=\"user-data\"><span class=\"status away\"></span><span class=\"name\">Claire Sassu</span><span class=\"message\">Can you share the...</span></div></a></div>
                          <div class=\"user\"><a href=\"#\"><img src=\"{{asset('img/avatar2.png')}}\" alt=\"Avatar\">
                              <div class=\"user-data\"><span class=\"status\"></span><span class=\"name\">Maggie jackson</span><span class=\"message\">I confirmed the info.</span></div></a></div>
                          <div class=\"user\"><a href=\"#\"><img src=\"{{asset('img/avatar3.png')}}\" alt=\"Avatar\">
                              <div class=\"user-data\"><span class=\"status offline\"></span><span class=\"name\">Joel King   </span><span class=\"message\">Ready for the meeti...</span></div></a></div>
                        </div>
                        <h2>Contacts</h2>
                        <div class=\"contact-list\">
                          <div class=\"user\"><a href=\"#\"><img src=\"{{asset('img/avatar4.png')}}\" alt=\"Avatar\">
                              <div class=\"user-data2\"><span class=\"status\"></span><span class=\"name\">Mike Bolthort</span></div></a></div>
                          <div class=\"user\"><a href=\"#\"><img src=\"{{asset('img/avatar5.png')}}\" alt=\"Avatar\">
                              <div class=\"user-data2\"><span class=\"status\"></span><span class=\"name\">Maggie jackson</span></div></a></div>
                          <div class=\"user\"><a href=\"#\"><img src=\"{{asset('img/avatar6.png')}}\" alt=\"Avatar\">
                              <div class=\"user-data2\"><span class=\"status offline\"></span><span class=\"name\">Jhon Voltemar</span></div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"bottom-input\">
                    <input type=\"text\" placeholder=\"Search...\" name=\"q\"><span class=\"mdi mdi-search\"></span>
                  </div>
                </div>
                <div class=\"chat-window\">
                  <div class=\"title\">
                    <div class=\"user\"><img src=\"{{asset('img/avatar2.png')}}\" alt=\"Avatar\">
                      <h2>Maggie jackson</h2><span>Active 1h ago</span>
                    </div><span class=\"icon return mdi mdi-chevron-left\"></span>
                  </div>
                  <div class=\"chat-messages\">
                    <div class=\"be-scroller\">
                      <div class=\"content\">
                        <ul>
                          <li class=\"friend\">
                            <div class=\"msg\">Hello</div>
                          </li>
                          <li class=\"self\">
                            <div class=\"msg\">Hi, how are you?</div>
                          </li>
                          <li class=\"friend\">
                            <div class=\"msg\">Good, I'll need support with my pc</div>
                          </li>
                          <li class=\"self\">
                            <div class=\"msg\">Sure, just tell me what is going on with your computer?</div>
                          </li>
                          <li class=\"friend\">
                            <div class=\"msg\">I don't know it just turns off suddenly</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"chat-input\">
                    <div class=\"input-wrapper\"><span class=\"photo mdi mdi-camera\"></span>
                      <input type=\"text\" placeholder=\"Message...\" name=\"q\" autocomplete=\"off\"><span class=\"send-msg mdi mdi-mail-send\"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div id=\"tab2\" role=\"tabpanel\" class=\"tab-pane tab-todo\">
                <div class=\"todo-container\">
                  <div class=\"todo-wrapper\">
                    <div class=\"be-scroller\">
                      <div class=\"todo-content\"><span class=\"category-title\">Today</span>
                        <ul class=\"todo-list\">
                          <li>
                            <div class=\"be-checkbox be-checkbox-sm\"><span class=\"delete mdi mdi-delete\"></span>
                              <input id=\"todo1\" type=\"checkbox\" checked=\"\">
                              <label for=\"todo1\">Initialize the project</label>
                            </div>
                          </li>
                          <li>
                            <div class=\"be-checkbox be-checkbox-sm\"><span class=\"delete mdi mdi-delete\"></span>
                              <input id=\"todo2\" type=\"checkbox\">
                              <label for=\"todo2\">Create the main structure</label>
                            </div>
                          </li>
                          <li>
                            <div class=\"be-checkbox be-checkbox-sm\"><span class=\"delete mdi mdi-delete\"></span>
                              <input id=\"todo3\" type=\"checkbox\">
                              <label for=\"todo3\">Updates changes to GitHub</label>
                            </div>
                          </li>
                        </ul><span class=\"category-title\">Tomorrow</span>
                        <ul class=\"todo-list\">
                          <li>
                            <div class=\"be-checkbox be-checkbox-sm\"><span class=\"delete mdi mdi-delete\"></span>
                              <input id=\"todo4\" type=\"checkbox\">
                              <label for=\"todo4\">Initialize the project</label>
                            </div>
                          </li>
                          <li>
                            <div class=\"be-checkbox be-checkbox-sm\"><span class=\"delete mdi mdi-delete\"></span>
                              <input id=\"todo5\" type=\"checkbox\">
                              <label for=\"todo5\">Create the main structure</label>
                            </div>
                          </li>
                          <li>
                            <div class=\"be-checkbox be-checkbox-sm\"><span class=\"delete mdi mdi-delete\"></span>
                              <input id=\"todo6\" type=\"checkbox\">
                              <label for=\"todo6\">Updates changes to GitHub</label>
                            </div>
                          </li>
                          <li>
                            <div class=\"be-checkbox be-checkbox-sm\"><span class=\"delete mdi mdi-delete\"></span>
                              <input id=\"todo7\" type=\"checkbox\">
                              <label for=\"todo7\" title=\"This task is too long to be displayed in a normal space!\">This task is too long to be displayed in a normal space!</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"bottom-input\">
                    <input type=\"text\" placeholder=\"Create new task...\" name=\"q\"><span class=\"mdi mdi-plus\"></span>
                  </div>
                </div>
              </div>
              <div id=\"tab3\" role=\"tabpanel\" class=\"tab-pane tab-settings\">
                <div class=\"settings-wrapper\">
                  <div class=\"be-scroller\"><span class=\"category-title\">General</span>
                    <ul class=\"settings-list\">
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" checked=\"\" name=\"st1\" id=\"st1\"><span>
                            <label for=\"st1\"></label></span>
                        </div><span class=\"name\">Available</span>
                      </li>
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" checked=\"\" name=\"st2\" id=\"st2\"><span>
                            <label for=\"st2\"></label></span>
                        </div><span class=\"name\">Enable notifications</span>
                      </li>
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" checked=\"\" name=\"st3\" id=\"st3\"><span>
                            <label for=\"st3\"></label></span>
                        </div><span class=\"name\">Login with Facebook</span>
                      </li>
                    </ul><span class=\"category-title\">Notifications</span>
                    <ul class=\"settings-list\">
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" name=\"st4\" id=\"st4\"><span>
                            <label for=\"st4\"></label></span>
                        </div><span class=\"name\">Email notifications</span>
                      </li>
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" checked=\"\" name=\"st5\" id=\"st5\"><span>
                            <label for=\"st5\"></label></span>
                        </div><span class=\"name\">Project updates</span>
                      </li>
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" checked=\"\" name=\"st6\" id=\"st6\"><span>
                            <label for=\"st6\"></label></span>
                        </div><span class=\"name\">New comments</span>
                      </li>
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" name=\"st7\" id=\"st7\"><span>
                            <label for=\"st7\"></label></span>
                        </div><span class=\"name\">Chat messages</span>
                      </li>
                    </ul><span class=\"category-title\">Workflow</span>
                    <ul class=\"settings-list\">
                      <li>
                        <div class=\"switch-button switch-button-sm\">
                          <input type=\"checkbox\" name=\"st8\" id=\"st8\"><span>
                            <label for=\"st8\"></label></span>
                        </div><span class=\"name\">Deploy on commit</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <script src=\"{{ asset('lib/jquery/jquery.min.js')}}\" type=\"text/javascript\"></script> 
    <script src=\"{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/main.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('lib/bootstrap/dist/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
      \$(document).ready(function(){
        //initialize the javascript
        App.init();
      });
    </script>
    {% block js %}{% endblock %} 

  </body>
</html>
", "base2.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\base2.html.twig");
    }
}
