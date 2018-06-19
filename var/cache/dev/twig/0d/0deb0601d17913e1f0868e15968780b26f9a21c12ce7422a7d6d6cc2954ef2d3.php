<?php

/* base.html.twig */
class __TwigTemplate_fb9d94bc9cf75537140d68c7ddbca5bd46fe3cc635b72f7da37d793f5c0b9c0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_609efe4ae312c135b051b4b2e014a7193837fb6eed017bfe6b275c6c41dbc58a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609efe4ae312c135b051b4b2e014a7193837fb6eed017bfe6b275c6c41dbc58a->enter($__internal_609efe4ae312c135b051b4b2e014a7193837fb6eed017bfe6b275c6c41dbc58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_709bd6b9e7e4a056690bf2d8cb61ce1457f7db1bdd45cb465e7d76c0c692706b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709bd6b9e7e4a056690bf2d8cb61ce1457f7db1bdd45cb465e7d76c0c692706b->enter($__internal_709bd6b9e7e4a056690bf2d8cb61ce1457f7db1bdd45cb465e7d76c0c692706b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t<title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t
    </head>
  <body>
    <div class=\"be-wrapper\">
      <nav class=\"navbar navbar-default navbar-fixed-top be-top-header\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\"><a href=\"index.html\" class=\"navbar-brand\"></a></div>
          <div class=\"be-right-navbar\">
            <ul class=\"nav navbar-nav navbar-right be-user-nav\">
              <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"dropdown-toggle\"><img src=\"";
        // line 35
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
            <div class=\"page-title\"><span>Espace Administrateur</span></div>
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
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar2.png"), "html", null, true);
        echo "')}}\" alt=\"Avatar\"></div>
                                <div class=\"notification-info\">
                                  <div class=\"text\"><span class=\"user-name\">Jessica Caruso</span> accepted your invitation to join the team.</div><span class=\"date\">2 min ago</span>
                                </div></a></li>
                            <li class=\"notification\"><a href=\"#\">
                                <div class=\"image\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar3.png"), "html", null, true);
        echo "')}}\" alt=\"Avatar\"></div>
                                <div class=\"notification-info\">
                                  <div class=\"text\"><span class=\"user-name\">Joel King</span> is now following you</div><span class=\"date\">2 days ago</span>
                                </div></a></li>
                            <li class=\"notification\"><a href=\"#\">
                                <div class=\"image\"><img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar4.png"), "html", null, true);
        echo "')}}\" alt=\"Avatar\"></div>
                                <div class=\"notification-info\">
                                  <div class=\"text\"><span class=\"user-name\">John Doe</span> is watching your main repository</div><span class=\"date\">2 days ago</span>
                                </div></a></li>
                            <li class=\"notification\"><a href=\"#\">
                                <div class=\"image\"><img src=\"";
        // line 76
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
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/github.png"), "html", null, true);
        echo "')}}\" alt=\"Github\"><span>GitHub</span></a></div>
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bitbucket.png"), "html", null, true);
        echo "')}}\" alt=\"Bitbucket\"><span>Bitbucket</span></a></div>
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slack.png"), "html", null, true);
        echo "')}}\" alt=\"Slack\"><span>Slack</span></a></div>
                        </div>
                        <div class=\"row\">
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/dribbble.png"), "html", null, true);
        echo "')}}\" alt=\"Dribbble\"><span>Dribbble</span></a></div>
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/mail_chimp.png"), "html", null, true);
        echo "'))}}\" alt=\"Mail Chimp\"><span>Mail Chimp</span></a></div>
                          <div class=\"col-xs-4\"><a href=\"#\" class=\"connection-item\"><img src=\"";
        // line 99
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
                  <li class=\"divider\">Menu</li>
                  <li><a href=\"index.html\"><i class=\"icon mdi mdi-home\"></i><span>Dashboard</span></a>
                  </li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi-face\"></i><span>UI Elements</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"ui-alerts.html\">Alerts</a>
                      </li>
                      <li><a href=\"ui-buttons.html\">Buttons</a>
                      </li>
                      <li><a href=\"ui-panels.html\">Panels</a>
                      </li>
                      <li><a href=\"ui-general.html\">General</a>
                      </li>
                      <li><a href=\"ui-modals.html\">Modals</a>
                      </li>
                      <li><a href=\"ui-notifications.html\">Notifications</a>
                      </li>
                      <li><a href=\"ui-icons.html\">Icons</a>
                      </li>
                      <li><a href=\"ui-grid.html\">Grid</a>
                      </li>
                      <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a>
                      </li>
                      <li><a href=\"ui-nestable-lists.html\">Nestable Lists</a>
                      </li>
                      <li><a href=\"ui-typography.html\"><span class=\"label label-primary pull-right\">New</span>Typography</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"charts.html\"><i class=\"icon mdi mdi-chart-donut\"></i><span>Charts</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"charts-flot.html\">Flot</a>
                      </li>
                      <li><a href=\"charts-sparkline.html\">Sparklines</a>
                      </li>
                      <li><a href=\"charts-chartjs.html\">Chart.js</a>
                      </li>
                      <li><a href=\"charts-morris.html\">Morris.js</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi-dot-circle\"></i><span>Forms</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"form-elements.html\">Elements</a>
                      </li>
                      <li><a href=\"form-validation.html\">Validation</a>
                      </li>
                      <li><a href=\"form-wizard.html\">Wizard</a>
                      </li>
                      <li><a href=\"form-masks.html\">Input Masks</a>
                      </li>
                      <li><a href=\"form-wysiwyg.html\">WYSIWYG Editor</a>
                      </li>
                      <li><a href=\"form-upload.html\">Multi Upload</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi-border-all\"></i><span>Tables</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"tables-general.html\">General</a>
                      </li>
                      <li><a href=\"tables-datatables.html\">Data Tables</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi-layers\"></i><span>Pages</span></a>
                    <ul class=\"sub-menu\">
                      <li class=\"active\"><a href=\"pages-blank.html\">Blank Page</a>
                      </li>
                      <li><a href=\"pages-blank-header.html\">Blank Page Header</a>
                      </li>
                      <li><a href=\"pages-login.html\">Login</a>
                      </li>
                      <li><a href=\"pages-login2.html\">Login v2</a>
                      </li>
                      <li><a href=\"pages-404.html\">404 Page</a>
                      </li>
                      <li><a href=\"pages-sign-up.html\">Sign Up</a>
                      </li>
                      <li><a href=\"pages-forgot-password.html\">Forgot Password</a>
                      </li>
                      <li><a href=\"pages-profile.html\">Profile</a>
                      </li>
                      <li><a href=\"pages-pricing-tables.html\">Pricing Tables</a>
                      </li>
                      <li><a href=\"pages-pricing-tables2.html\">Pricing Tables v2</a>
                      </li>
                      <li><a href=\"pages-timeline.html\"><span class=\"label label-primary pull-right\">New</span>Timeline</a>
                      </li>
                      <li><a href=\"pages-timeline2.html\"><span class=\"label label-primary pull-right\">New</span>Timeline v2</a>
                      </li>
                      <li><a href=\"pages-invoice.html\"><span class=\"label label-primary pull-right\">New</span>Invoice</a>
                      </li>
                      <li><a href=\"pages-calendar.html\">Calendar</a>
                      </li>
                      <li><a href=\"pages-gallery.html\">Gallery</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"divider\">Features</li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi-inbox\"></i><span>Email</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"email-inbox.html\">Inbox</a>
                      </li>
                      <li><a href=\"email-read.html\">Email Detail</a>
                      </li>
                      <li><a href=\"email-compose.html\">Email Compose</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi-view-web\"></i><span>Layouts</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"layouts-primary-header.html\">Primary Header</a>
                      </li>
                      <li><a href=\"layouts-success-header.html\">Success Header</a>
                      </li>
                      <li><a href=\"layouts-warning-header.html\">Warning Header</a>
                      </li>
                      <li><a href=\"layouts-danger-header.html\">Danger Header</a>
                      </li>
                      <li><a href=\"layouts-nosidebar-left.html\">Without Left Sidebar</a>
                      </li>
                      <li><a href=\"layouts-nosidebar-right.html\">Without Right Sidebar</a>
                      </li>
                      <li><a href=\"layouts-nosidebars.html\">Without Both Sidebars</a>
                      </li>
                      <li><a href=\"layouts-fixed-sidebar.html\">Fixed Left Sidebar</a>
                      </li>
                      <li><a href=\"pages-blank-aside.html\">Page Aside</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi-pin\"></i><span>Maps</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"maps-google.html\">Google Maps</a>
                      </li>
                      <li><a href=\"maps-vector.html\">Vector Maps</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"progress-widget\">
            <div class=\"progress-data\"><span class=\"progress-value\">60%</span><span class=\"name\">Current Project</span></div>
            <div class=\"progress\">
              <div style=\"width: 60%;\" class=\"progress-bar progress-bar-primary\"></div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"be-content\">
        <div class=\"main-content container-fluid\">
          
\t\t  ";
        // line 272
        $this->displayBlock('body', $context, $blocks);
        // line 273
        echo "\t\t  ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 274
        echo "    
\t\t  
\t\t  
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
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar1.png"), "html", null, true);
        echo "\" alt=\"Avatar\">
                              <div class=\"user-data\"><span class=\"status away\"></span><span class=\"name\">Claire Sassu</span><span class=\"message\">Can you share the...</span></div></a></div>
                          <div class=\"user\"><a href=\"#\"><img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar2.png"), "html", null, true);
        echo "\" alt=\"Avatar\">
                              <div class=\"user-data\"><span class=\"status\"></span><span class=\"name\">Maggie jackson</span><span class=\"message\">I confirmed the info.</span></div></a></div>
                          <div class=\"user\"><a href=\"#\"><img src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar3.png"), "html", null, true);
        echo "\" alt=\"Avatar\">
                              <div class=\"user-data\"><span class=\"status offline\"></span><span class=\"name\">Joel King\t\t</span><span class=\"message\">Ready for the meeti...</span></div></a></div>
                        </div>
                        <h2>Contacts</h2>
                        <div class=\"contact-list\">
                          <div class=\"user\"><a href=\"#\"><img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar4.png"), "html", null, true);
        echo "\" alt=\"Avatar\">
                              <div class=\"user-data2\"><span class=\"status\"></span><span class=\"name\">Mike Bolthort</span></div></a></div>
                          <div class=\"user\"><a href=\"#\"><img src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar5.png"), "html", null, true);
        echo "\" alt=\"Avatar\">
                              <div class=\"user-data2\"><span class=\"status\"></span><span class=\"name\">Maggie jackson</span></div></a></div>
                          <div class=\"user\"><a href=\"#\"><img src=\"";
        // line 310
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
        // line 322
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
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/jquery/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/jquery.nestable/jquery.nestable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/moment.js/min/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/select2/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap-slider/js/bootstrap-slider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app-form-elements.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
      \$(document).ready(function(){
      \t//initialize the javascript
      \tApp.init();
        App.formElements();
      });
    </script>
  </body>
</html>
";
        
        $__internal_609efe4ae312c135b051b4b2e014a7193837fb6eed017bfe6b275c6c41dbc58a->leave($__internal_609efe4ae312c135b051b4b2e014a7193837fb6eed017bfe6b275c6c41dbc58a_prof);

        
        $__internal_709bd6b9e7e4a056690bf2d8cb61ce1457f7db1bdd45cb465e7d76c0c692706b->leave($__internal_709bd6b9e7e4a056690bf2d8cb61ce1457f7db1bdd45cb465e7d76c0c692706b_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_d44bdb78463d1765f3cf737c0d2c4148a4f4aa6abb016fc4bef963e8ef5a2a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44bdb78463d1765f3cf737c0d2c4148a4f4aa6abb016fc4bef963e8ef5a2a2c->enter($__internal_d44bdb78463d1765f3cf737c0d2c4148a4f4aa6abb016fc4bef963e8ef5a2a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b7c6a5eb2f5b92e358e0f378ca487f04a24a672299f8c98a9d967b86d39aa0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7c6a5eb2f5b92e358e0f378ca487f04a24a672299f8c98a9d967b86d39aa0b->enter($__internal_4b7c6a5eb2f5b92e358e0f378ca487f04a24a672299f8c98a9d967b86d39aa0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Keltoum";
        
        $__internal_4b7c6a5eb2f5b92e358e0f378ca487f04a24a672299f8c98a9d967b86d39aa0b->leave($__internal_4b7c6a5eb2f5b92e358e0f378ca487f04a24a672299f8c98a9d967b86d39aa0b_prof);

        
        $__internal_d44bdb78463d1765f3cf737c0d2c4148a4f4aa6abb016fc4bef963e8ef5a2a2c->leave($__internal_d44bdb78463d1765f3cf737c0d2c4148a4f4aa6abb016fc4bef963e8ef5a2a2c_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e006456ce09b4f72f2a248f0f20e7c44682e6caf9ed12d45dfb133ce06522d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e006456ce09b4f72f2a248f0f20e7c44682e6caf9ed12d45dfb133ce06522d6->enter($__internal_9e006456ce09b4f72f2a248f0f20e7c44682e6caf9ed12d45dfb133ce06522d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_329bbcd4bb4d89cc52cf70c8cdbfb6e59c6ba5b46bb42e632949ccde4fde5f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329bbcd4bb4d89cc52cf70c8cdbfb6e59c6ba5b46bb42e632949ccde4fde5f5a->enter($__internal_329bbcd4bb4d89cc52cf70c8cdbfb6e59c6ba5b46bb42e632949ccde4fde5f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/perfect-scrollbar/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\"/>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/material-design-icons/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\"/><!--[if lt IE 9]>
\t\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t\t<![endif]-->

      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/select2/css/select2.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap-slider/css/bootstrap-slider.css"), "html", null, true);
        echo "\"/>
\t\t <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\"/>

\t\t";
        
        $__internal_329bbcd4bb4d89cc52cf70c8cdbfb6e59c6ba5b46bb42e632949ccde4fde5f5a->leave($__internal_329bbcd4bb4d89cc52cf70c8cdbfb6e59c6ba5b46bb42e632949ccde4fde5f5a_prof);

        
        $__internal_9e006456ce09b4f72f2a248f0f20e7c44682e6caf9ed12d45dfb133ce06522d6->leave($__internal_9e006456ce09b4f72f2a248f0f20e7c44682e6caf9ed12d45dfb133ce06522d6_prof);

    }

    // line 272
    public function block_body($context, array $blocks = array())
    {
        $__internal_1efa1199673e710ed86a56f729e82c4701385479849fa3075ec74140d25271a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1efa1199673e710ed86a56f729e82c4701385479849fa3075ec74140d25271a8->enter($__internal_1efa1199673e710ed86a56f729e82c4701385479849fa3075ec74140d25271a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e5ffe77cbf58955e4ff08188a1c7cd116e253bb2acebae32f31b9b4574a0a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5ffe77cbf58955e4ff08188a1c7cd116e253bb2acebae32f31b9b4574a0a69->enter($__internal_0e5ffe77cbf58955e4ff08188a1c7cd116e253bb2acebae32f31b9b4574a0a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e5ffe77cbf58955e4ff08188a1c7cd116e253bb2acebae32f31b9b4574a0a69->leave($__internal_0e5ffe77cbf58955e4ff08188a1c7cd116e253bb2acebae32f31b9b4574a0a69_prof);

        
        $__internal_1efa1199673e710ed86a56f729e82c4701385479849fa3075ec74140d25271a8->leave($__internal_1efa1199673e710ed86a56f729e82c4701385479849fa3075ec74140d25271a8_prof);

    }

    // line 273
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c049382215166240a634bb6df4108b4a29cdc7df952c8f1de10969f9f08d3d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c049382215166240a634bb6df4108b4a29cdc7df952c8f1de10969f9f08d3d44->enter($__internal_c049382215166240a634bb6df4108b4a29cdc7df952c8f1de10969f9f08d3d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_885fe800e6641829486e25f3691e9aa785ffc94e2cc24100b26bafcfb2299d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885fe800e6641829486e25f3691e9aa785ffc94e2cc24100b26bafcfb2299d6b->enter($__internal_885fe800e6641829486e25f3691e9aa785ffc94e2cc24100b26bafcfb2299d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_885fe800e6641829486e25f3691e9aa785ffc94e2cc24100b26bafcfb2299d6b->leave($__internal_885fe800e6641829486e25f3691e9aa785ffc94e2cc24100b26bafcfb2299d6b_prof);

        
        $__internal_c049382215166240a634bb6df4108b4a29cdc7df952c8f1de10969f9f08d3d44->leave($__internal_c049382215166240a634bb6df4108b4a29cdc7df952c8f1de10969f9f08d3d44_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  712 => 273,  695 => 272,  682 => 22,  678 => 21,  674 => 20,  670 => 19,  662 => 14,  657 => 13,  648 => 12,  630 => 11,  609 => 491,  605 => 490,  601 => 489,  597 => 488,  593 => 487,  589 => 486,  585 => 485,  581 => 484,  577 => 483,  573 => 482,  569 => 481,  407 => 322,  392 => 310,  387 => 308,  382 => 306,  374 => 301,  369 => 299,  364 => 297,  339 => 274,  336 => 273,  334 => 272,  158 => 99,  154 => 98,  150 => 97,  144 => 94,  140 => 93,  136 => 92,  117 => 76,  109 => 71,  101 => 66,  93 => 61,  64 => 35,  50 => 25,  48 => 12,  44 => 11,  40 => 10,  29 => 1,);
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
\t<title>{% block title %}Keltoum{% endblock %}</title>
        {% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('lib/perfect-scrollbar/css/perfect-scrollbar.min.css')}}\"/>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('lib/material-design-icons/css/material-design-iconic-font.min.css')}}\"/><!--[if lt IE 9]>
\t\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t\t<![endif]-->

      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('lib/datetimepicker/css/bootstrap-datetimepicker.min.css')}}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('lib/select2/css/select2.min.css')}}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('lib/bootstrap-slider/css/bootstrap-slider.css')}}\"/>
\t\t <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\" type=\"text/css\"/>

\t\t{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
\t\t
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
            <div class=\"page-title\"><span>Espace Administrateur</span></div>
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
                  <li class=\"divider\">Menu</li>
                  <li><a href=\"index.html\"><i class=\"icon mdi mdi-home\"></i><span>Dashboard</span></a>
                  </li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi-face\"></i><span>UI Elements</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"ui-alerts.html\">Alerts</a>
                      </li>
                      <li><a href=\"ui-buttons.html\">Buttons</a>
                      </li>
                      <li><a href=\"ui-panels.html\">Panels</a>
                      </li>
                      <li><a href=\"ui-general.html\">General</a>
                      </li>
                      <li><a href=\"ui-modals.html\">Modals</a>
                      </li>
                      <li><a href=\"ui-notifications.html\">Notifications</a>
                      </li>
                      <li><a href=\"ui-icons.html\">Icons</a>
                      </li>
                      <li><a href=\"ui-grid.html\">Grid</a>
                      </li>
                      <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a>
                      </li>
                      <li><a href=\"ui-nestable-lists.html\">Nestable Lists</a>
                      </li>
                      <li><a href=\"ui-typography.html\"><span class=\"label label-primary pull-right\">New</span>Typography</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"charts.html\"><i class=\"icon mdi mdi-chart-donut\"></i><span>Charts</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"charts-flot.html\">Flot</a>
                      </li>
                      <li><a href=\"charts-sparkline.html\">Sparklines</a>
                      </li>
                      <li><a href=\"charts-chartjs.html\">Chart.js</a>
                      </li>
                      <li><a href=\"charts-morris.html\">Morris.js</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi-dot-circle\"></i><span>Forms</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"form-elements.html\">Elements</a>
                      </li>
                      <li><a href=\"form-validation.html\">Validation</a>
                      </li>
                      <li><a href=\"form-wizard.html\">Wizard</a>
                      </li>
                      <li><a href=\"form-masks.html\">Input Masks</a>
                      </li>
                      <li><a href=\"form-wysiwyg.html\">WYSIWYG Editor</a>
                      </li>
                      <li><a href=\"form-upload.html\">Multi Upload</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi-border-all\"></i><span>Tables</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"tables-general.html\">General</a>
                      </li>
                      <li><a href=\"tables-datatables.html\">Data Tables</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi-layers\"></i><span>Pages</span></a>
                    <ul class=\"sub-menu\">
                      <li class=\"active\"><a href=\"pages-blank.html\">Blank Page</a>
                      </li>
                      <li><a href=\"pages-blank-header.html\">Blank Page Header</a>
                      </li>
                      <li><a href=\"pages-login.html\">Login</a>
                      </li>
                      <li><a href=\"pages-login2.html\">Login v2</a>
                      </li>
                      <li><a href=\"pages-404.html\">404 Page</a>
                      </li>
                      <li><a href=\"pages-sign-up.html\">Sign Up</a>
                      </li>
                      <li><a href=\"pages-forgot-password.html\">Forgot Password</a>
                      </li>
                      <li><a href=\"pages-profile.html\">Profile</a>
                      </li>
                      <li><a href=\"pages-pricing-tables.html\">Pricing Tables</a>
                      </li>
                      <li><a href=\"pages-pricing-tables2.html\">Pricing Tables v2</a>
                      </li>
                      <li><a href=\"pages-timeline.html\"><span class=\"label label-primary pull-right\">New</span>Timeline</a>
                      </li>
                      <li><a href=\"pages-timeline2.html\"><span class=\"label label-primary pull-right\">New</span>Timeline v2</a>
                      </li>
                      <li><a href=\"pages-invoice.html\"><span class=\"label label-primary pull-right\">New</span>Invoice</a>
                      </li>
                      <li><a href=\"pages-calendar.html\">Calendar</a>
                      </li>
                      <li><a href=\"pages-gallery.html\">Gallery</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"divider\">Features</li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi-inbox\"></i><span>Email</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"email-inbox.html\">Inbox</a>
                      </li>
                      <li><a href=\"email-read.html\">Email Detail</a>
                      </li>
                      <li><a href=\"email-compose.html\">Email Compose</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi-view-web\"></i><span>Layouts</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"layouts-primary-header.html\">Primary Header</a>
                      </li>
                      <li><a href=\"layouts-success-header.html\">Success Header</a>
                      </li>
                      <li><a href=\"layouts-warning-header.html\">Warning Header</a>
                      </li>
                      <li><a href=\"layouts-danger-header.html\">Danger Header</a>
                      </li>
                      <li><a href=\"layouts-nosidebar-left.html\">Without Left Sidebar</a>
                      </li>
                      <li><a href=\"layouts-nosidebar-right.html\">Without Right Sidebar</a>
                      </li>
                      <li><a href=\"layouts-nosidebars.html\">Without Both Sidebars</a>
                      </li>
                      <li><a href=\"layouts-fixed-sidebar.html\">Fixed Left Sidebar</a>
                      </li>
                      <li><a href=\"pages-blank-aside.html\">Page Aside</a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"parent\"><a href=\"#\"><i class=\"icon mdi mdi-pin\"></i><span>Maps</span></a>
                    <ul class=\"sub-menu\">
                      <li><a href=\"maps-google.html\">Google Maps</a>
                      </li>
                      <li><a href=\"maps-vector.html\">Vector Maps</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"progress-widget\">
            <div class=\"progress-data\"><span class=\"progress-value\">60%</span><span class=\"name\">Current Project</span></div>
            <div class=\"progress\">
              <div style=\"width: 60%;\" class=\"progress-bar progress-bar-primary\"></div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"be-content\">
        <div class=\"main-content container-fluid\">
          
\t\t  {% block body %}{% endblock %}
\t\t  {% block javascripts %}{% endblock %}
    
\t\t  
\t\t  
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
                              <div class=\"user-data\"><span class=\"status offline\"></span><span class=\"name\">Joel King\t\t</span><span class=\"message\">Ready for the meeti...</span></div></a></div>
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
    <script src=\"{{ asset('js/main.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('lib/bootstrap/dist/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('lib/jquery-ui/jquery-ui.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('lib/jquery.nestable/jquery.nestable.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('lib/moment.js/min/moment.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('lib/datetimepicker/js/bootstrap-datetimepicker.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('lib/select2/js/select2.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('lib/bootstrap-slider/js/bootstrap-slider.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/app-form-elements.js')}}\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
      \$(document).ready(function(){
      \t//initialize the javascript
      \tApp.init();
        App.formElements();
      });
    </script>
  </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\codecole\\app\\Resources\\views\\base.html.twig");
    }
}
