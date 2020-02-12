<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* tp.html.twig */
class __TwigTemplate_e5eeb4311f0795260be5a6b5d284c9a50e3cd5232408828650e3416db8329c53 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tp.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/summernote/summernote-bs4.css"), "html", null, true);
        echo "\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">

    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("index3.html"), "html", null, true);
        echo "\" class=\"nav-link\">Home</a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"#\" class=\"nav-link\">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class=\"form-inline ml-3\">
            <div class=\"input-group input-group-sm\">
                <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-navbar\" type=\"submit\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
            </div><b></b>
        </form>



        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            <!-- Messages Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-comments\"></i>
                    <span class=\"badge badge-danger navbar-badge\">3</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <a href=\"#\" class=\"dropdown-item\">

                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user8-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    John Pierce
                                    <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">I got your message bro</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Nora Silvester
                                    <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">The subject goes here</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-bell\"></i>
                    <span class=\"badge badge-warning navbar-badge\">15</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                        <span class=\"float-right text-muted text-sm\">3 mins</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                        <span class=\"float-right text-muted text-sm\">12 hours</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-file mr-2\"></i> 3 new reports
                        <span class=\"float-right text-muted text-sm\">2 days</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\">
                    <i class=\"fas fa-th-large\"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("index3.html"), "html", null, true);
        echo "\" class=\"brand-link\">
            <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\"
                 style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">espace administrateur</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img src=\"#\" class=\"img-circle elevation-2\" alt=\"User Image\">
                </div>
                <div class=\"info\">
                    <a href=\"#\" class=\"d-block\">Abir lakhal</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class=\"nav-item has-treeview menu-open\">
                        <a href=\"#\" class=\"nav-link active\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Dashboard
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./index.html"), "html", null, true);
        echo "\" class=\"nav-link active\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard v1</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./index2.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard v2</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./index3.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard v3</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-copy\"></i>
                            <p>
                                Layout Options
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\">6</span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/layout/top-nav.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Top Navigation</p>
                                </a>
                            </li>




                            <li class=\"nav-item\">
                                <a href=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/layout/collapsed-sidebar.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Collapsed Sidebar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-chart-pie\"></i>
                            <p>
                                Charts
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/charts/chartjs.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>ChartJS</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/charts/flot.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Flot</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/charts/inline.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Inline</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tree\"></i>
                            <p>
                                UI Elements
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/general.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>General</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/icons.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Icons</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/buttons.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Buttons</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/sliders.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Sliders</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/modals.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Modals & Alerts</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/navbar.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Navbar & Tabs</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/timeline.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Timeline</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/UI/ribbons.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Ribbons</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-edit\"></i>
                            <p>
                                Forms
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/forms/general.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>General Elements</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/forms/advanced.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Advanced Elements</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/forms/editors.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Editors</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/forms/validation.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Validation</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-table\"></i>
                            <p>
                                activite
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>scolaire</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>parascolaire</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class=\"nav-header\">EXAMPLES</li>
                    <li class=\"nav-item\">
                        <a href=\"pages/calendar.html\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-calendar-alt\"></i>
                            <p>
                                Calendar
                                <span class=\"badge badge-info right\">2</span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"pages/gallery.html\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-image\"></i>
                            <p>
                                Gallery
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-envelope\"></i>
                            <p>
                                Mailbox
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/mailbox/mailbox.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/mailbox/compose.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/mailbox/read-mail.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-book\"></i>
                            <p>
                                Pages
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/invoice.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Invoice</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/profile.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/e-commerce.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>E-commerce</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/projects.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Projects</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/project-add.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Add</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/project-edit.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Edit</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/project-detail.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Detail</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/contacts.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Contacts</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-plus-square\"></i>
                            <p>
                                Extras
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/login.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Login</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/register.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Register</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/forgot-password.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Forgot Password</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/recover-password.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Recover Password</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/lockscreen.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Lockscreen</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/legacy-user-menu.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Legacy User Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/language-menu.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Language Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/404.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 404</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/500.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 500</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/pace.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Pace</p>
                                </a>
                            </li>


                            <!-- ./col -->
                            <div class=\"col-lg-3 col-6\">
                                <!-- small box -->
                                <div class=\"small-box bg-danger\">
                                    <div class=\"inner\">
                                        <h3>65</h3>

                                        <p>Unique Visitors</p>
                                    </div>
                                    <div class=\"icon\">
                                        <i class=\"ion ion-pie-graph\"></i>
                                    </div>
                                    <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class=\"row\">
            <!-- Left col -->
            <section class=\"col-lg-7 connectedSortable\">
                <!-- Custom tabs (Charts with tabs)-->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"fas fa-chart-pie mr-1\"></i>
                            Sales
                        </h3>
                        <div class=\"card-tools\">
                            <ul class=\"nav nav-pills ml-auto\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"#revenue-chart\" data-toggle=\"tab\">Area</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#sales-chart\" data-toggle=\"tab\">Donut</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.card-header -->
                    <div class=\"card-body\">
                        <div class=\"tab-content p-0\">
                            <!-- Morris chart - Sales -->
                            <div class=\"chart tab-pane active\" id=\"revenue-chart\"
                                 style=\"position: relative; height: 300px;\">
                                <canvas id=\"revenue-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
                            </div>
                            <div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\">
                                <canvas id=\"sales-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
                            </div>
                        </div>
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- DIRECT CHAT -->
                <div class=\"card direct-chat direct-chat-primary\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Direct Chat</h3>

                        <div class=\"card-tools\">
                            <span data-toggle=\"tooltip\" title=\"3 New Messages\" class=\"badge badge-primary\">3</span>
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                <i class=\"fas fa-minus\"></i>
                            </button>
                            <button type=\"button\" class=\"btn btn-tool\" data-toggle=\"tooltip\" title=\"Contacts\"
                                    data-widget=\"chat-pane-toggle\">
                                <i class=\"fas fa-comments\"></i>
                            </button>
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"><i class=\"fas fa-times\"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                        <!-- Conversations are loaded here -->
                        <div class=\"direct-chat-messages\">
                            <!-- Message. Default to the left -->
                            <div class=\"direct-chat-msg\">
                                <div class=\"direct-chat-infos clearfix\">
                                    <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                    <span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
                                <!-- /.direct-chat-img -->
                                <div class=\"direct-chat-text\">
                                    Is this template really for free? That's unbelievable!
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class=\"direct-chat-msg right\">
                                <div class=\"direct-chat-infos clearfix\">
                                    <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                    <span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
                                <!-- /.direct-chat-img -->
                                <div class=\"direct-chat-text\">
                                    You better believe it!
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message. Default to the left -->
                            <div class=\"direct-chat-msg\">
                                <div class=\"direct-chat-infos clearfix\">
                                    <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                    <span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
                                <!-- /.direct-chat-img -->
                                <div class=\"direct-chat-text\">
                                    Working with AdminLTE on a great new app! Wanna join?
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class=\"direct-chat-msg right\">
                                <div class=\"direct-chat-infos clearfix\">
                                    <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                    <span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
                                <!-- /.direct-chat-img -->
                                <div class=\"direct-chat-text\">
                                    I would love to.
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                        </div>
                        <!--/.direct-chat-messages-->

                        <!-- Contacts are loaded here -->
                        <div class=\"direct-chat-contacts\">
                            <ul class=\"contacts-list\">
                                <li>
                                    <a href=\"#\">
                                        <img class=\"contacts-list-img\" src=\"";
        // line 704
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\">

                                        <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Count Dracula
                            <small class=\"contacts-list-date float-right\">2/28/2015</small>
                          </span>
                                            <span class=\"contacts-list-msg\">How have you been? I was...</span>
                                        </div>
                                        <!-- /.contacts-list-info -->
                                    </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                    <a href=\"#\">
                                        <img class=\"contacts-list-img\" src=\"";
        // line 719
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user7-128x128.jpg"), "html", null, true);
        echo "\">

                                        <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Sarah Doe
                            <small class=\"contacts-list-date float-right\">2/23/2015</small>
                          </span>
                                            <span class=\"contacts-list-msg\">I will be waiting for...</span>
                                        </div>
                                        <!-- /.contacts-list-info -->
                                    </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                    <a href=\"#\">
                                        <img class=\"contacts-list-img\" src=\"dist/img/user3-128x128.jpg\">

                                        <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Nadia Jolie
                            <small class=\"contacts-list-date float-right\">2/20/2015</small>
                          </span>
                                            <span class=\"contacts-list-msg\">I'll call you back at...</span>
                                        </div>
                                        <!-- /.contacts-list-info -->
                                    </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                    <a href=\"#\">
                                        <img class=\"contacts-list-img\" src=\"dist/img/user5-128x128.jpg\">

                                        <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Nora S. Vans
                            <small class=\"contacts-list-date float-right\">2/10/2015</small>
                          </span>
                                            <span class=\"contacts-list-msg\">Where is your new...</span>
                                        </div>
                                        <!-- /.contacts-list-info -->
                                    </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                    <a href=\"#\">
                                        <img class=\"contacts-list-img\" src=\"dist/img/user6-128x128.jpg\">

                                        <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            John K.
                            <small class=\"contacts-list-date float-right\">1/27/2015</small>
                          </span>
                                            <span class=\"contacts-list-msg\">Can I take a look at...</span>
                                        </div>
                                        <!-- /.contacts-list-info -->
                                    </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                    <a href=\"#\">
                                        <img class=\"contacts-list-img\" src=\"dist/img/user8-128x128.jpg\">

                                        <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Kenneth M.
                            <small class=\"contacts-list-date float-right\">1/4/2015</small>
                          </span>
                                            <span class=\"contacts-list-msg\">Never mind I found...</span>
                                        </div>
                                        <!-- /.contacts-list-info -->
                                    </a>
                                </li>
                                <!-- End Contact Item -->
                            </ul>
                            <!-- /.contacts-list -->
                        </div>
                        <!-- /.direct-chat-pane -->
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer\">
                        <form action=\"#\" method=\"post\">
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
                                <span class=\"input-group-append\">
                      <button type=\"button\" class=\"btn btn-primary\">Send</button>
                    </span>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!--/.direct-chat -->

                <!-- TO DO List -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"ion ion-clipboard mr-1\"></i>
                            To Do List
                        </h3>

                        <div class=\"card-tools\">
                            <ul class=\"pagination pagination-sm\">
                                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">&laquo;</a></li>
                                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">1</a></li>
                                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">3</a></li>
                                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                        <ul class=\"todo-list\" data-widget=\"todo-list\">
                            <li>
                                <!-- drag handle -->
                                <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                <!-- checkbox -->
                                <div  class=\"icheck-primary d-inline ml-2\">
                                    <input type=\"checkbox\" value=\"\" name=\"todo1\" id=\"todoCheck1\">
                                    <label for=\"todoCheck1\"></label>
                                </div>
                                <!-- todo text -->
                                <span class=\"text\">Design a nice theme</span>
                                <!-- Emphasis label -->
                                <small class=\"badge badge-danger\"><i class=\"far fa-clock\"></i> 2 mins</small>
                                <!-- General tools such as edit or delete-->
                                <div class=\"tools\">
                                    <i class=\"fas fa-edit\"></i>
                                    <i class=\"fas fa-trash-o\"></i>
                                </div>
                            </li>
                            <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                <div  class=\"icheck-primary d-inline ml-2\">
                                    <input type=\"checkbox\" value=\"\" name=\"todo2\" id=\"todoCheck2\" checked>
                                    <label for=\"todoCheck2\"></label>
                                </div>
                                <span class=\"text\">Make the theme responsive</span>
                                <small class=\"badge badge-info\"><i class=\"far fa-clock\"></i> 4 hours</small>
                                <div class=\"tools\">
                                    <i class=\"fas fa-edit\"></i>
                                    <i class=\"fas fa-trash-o\"></i>
                                </div>
                            </li>
                            <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                <div  class=\"icheck-primary d-inline ml-2\">
                                    <input type=\"checkbox\" value=\"\" name=\"todo3\" id=\"todoCheck3\">
                                    <label for=\"todoCheck3\"></label>
                                </div>
                                <span class=\"text\">Let theme shine like a star</span>
                                <small class=\"badge badge-warning\"><i class=\"far fa-clock\"></i> 1 day</small>
                                <div class=\"tools\">
                                    <i class=\"fas fa-edit\"></i>
                                    <i class=\"fas fa-trash-o\"></i>
                                </div>
                            </li>
                            <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                <div  class=\"icheck-primary d-inline ml-2\">
                                    <input type=\"checkbox\" value=\"\" name=\"todo4\" id=\"todoCheck4\">
                                    <label for=\"todoCheck4\"></label>
                                </div>
                                <span class=\"text\">Let theme shine like a star</span>
                                <small class=\"badge badge-success\"><i class=\"far fa-clock\"></i> 3 days</small>
                                <div class=\"tools\">
                                    <i class=\"fas fa-edit\"></i>
                                    <i class=\"fas fa-trash-o\"></i>
                                </div>
                            </li>
                            <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                <div  class=\"icheck-primary d-inline ml-2\">
                                    <input type=\"checkbox\" value=\"\" name=\"todo5\" id=\"todoCheck5\">
                                    <label for=\"todoCheck5\"></label>
                                </div>
                                <span class=\"text\">Check your messages and notifications</span>
                                <small class=\"badge badge-primary\"><i class=\"far fa-clock\"></i> 1 week</small>
                                <div class=\"tools\">
                                    <i class=\"fas fa-edit\"></i>
                                    <i class=\"fas fa-trash-o\"></i>
                                </div>
                            </li>
                            <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                <div  class=\"icheck-primary d-inline ml-2\">
                                    <input type=\"checkbox\" value=\"\" name=\"todo6\" id=\"todoCheck6\">
                                    <label for=\"todoCheck6\"></label>
                                </div>
                                <span class=\"text\">Let theme shine like a star</span>
                                <small class=\"badge badge-secondary\"><i class=\"far fa-clock\"></i> 1 month</small>
                                <div class=\"tools\">
                                    <i class=\"fas fa-edit\"></i>
                                    <i class=\"fas fa-trash-o\"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer clearfix\">
                        <button type=\"button\" class=\"btn btn-info float-right\"><i class=\"fas fa-plus\"></i> Add item</button>
                    </div>
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class=\"col-lg-5 connectedSortable\">

                <!-- Map card -->
                <div class=\"card bg-gradient-primary\">
                    <div class=\"card-header border-0\">
                        <h3 class=\"card-title\">
                            <i class=\"fas fa-map-marker-alt mr-1\"></i>
                            Visitors
                        </h3>
                        <!-- card tools -->
                        <div class=\"card-tools\">
                            <button type=\"button\"
                                    class=\"btn btn-primary btn-sm daterange\"
                                    data-toggle=\"tooltip\"
                                    title=\"Date range\">
                                <i class=\"far fa-calendar-alt\"></i>
                            </button>
                            <button type=\"button\"
                                    class=\"btn btn-primary btn-sm\"
                                    data-card-widget=\"collapse\"
                                    data-toggle=\"tooltip\"
                                    title=\"Collapse\">
                                <i class=\"fas fa-minus\"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                        .                    </div>
                    <div class=\"card-body\">
                        <div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
                    </div>
                    <!-- /.card-body-->
                    <div class=\"card-footer bg-transparent\">
                        <div class=\"row\">
                            <div class=\"col-4 text-center\">
                                <div id=\"sparkline-1\"></div>
                                <div class=\"text-white\">Visitors</div>
                            </div>
                            <!-- ./col -->
                            <div class=\"col-4 text-center\">
                                <div id=\"sparkline-2\"></div>
                                <div class=\"text-white\">Online</div>
                            </div>
                            <!-- ./col -->
                            <div class=\"col-4 text-center\">
                                <div id=\"sparkline-3\"></div>
                                <div class=\"text-white\">Sales</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.card -->

                <!-- solid sales graph -->
                <div class=\"card bg-gradient-info\">
                    <div class=\"card-header border-0\">
                        <h3 class=\"card-title\">
                            <i class=\"fas fa-th mr-1\"></i>
                            Sales Graph
                        </h3>

                        <div class=\"card-tools\">
                            <button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"collapse\">
                                <i class=\"fas fa-minus\"></i>
                            </button>
                            <button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"remove\">
                                <i class=\"fas fa-times\"></i>
                            </button>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <canvas class=\"chart\" id=\"line-chart\" style=\"min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;\"></canvas>
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer bg-transparent\">
                        <div class=\"row\">
                            <div class=\"col-4 text-center\">
                                <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\"
                                       data-fgColor=\"#39CCCC\">

                                <div class=\"text-white\">Mail-Orders</div>
                            </div>
                            <!-- ./col -->
                            <div class=\"col-4 text-center\">
                                <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\"
                                       data-fgColor=\"#39CCCC\">

                                <div class=\"text-white\">Online</div>
                            </div>
                            <!-- ./col -->
                            <div class=\"col-4 text-center\">
                                <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\"
                                       data-fgColor=\"#39CCCC\">

                                <div class=\"text-white\">In-Store</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->

                <!-- Calendar -->
                <div class=\"card bg-gradient-success\">
                    <div class=\"card-header border-0\">

                        <h3 class=\"card-title\">
                            <i class=\"far fa-calendar-alt\"></i>
                            Calendar
                        </h3>
                        <!-- tools card -->
                        <div class=\"card-tools\">
                            <!-- button with a dropdown -->
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fas fa-bars\"></i></button>
                                <div class=\"dropdown-menu float-right\" role=\"menu\">
                                    <a href=\"#\" class=\"dropdown-item\">Add new event</a>
                                    <a href=\"#\" class=\"dropdown-item\">Clear events</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a href=\"#\" class=\"dropdown-item\">View calendar</a>
                                </div>
                            </div>
                            <button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"collapse\">
                                <i class=\"fas fa-minus\"></i>
                            </button>
                            <button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"remove\">
                                <i class=\"fas fa-times\"></i>
                            </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body pt-0\">
                        <!--The calendar -->
                        <div id=\"calendar\" style=\"width: 100%\"></div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->
<footer class=\"main-footer\">

    ";
        // line 1100
        $this->displayBlock('body', $context, $blocks);
        // line 1102
        echo "    <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class=\"float-right d-none d-sm-inline-block\">
        <b>Version</b> 3.0.3-pre
    </div>
</footer>

<!-- Control Sidebar -->
<aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"";
        // line 1118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"";
        // line 1120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=\"";
        // line 1126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- ChartJS -->
<script src=\"";
        // line 1128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 1130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/sparklines/sparkline.js"), "html", null, true);
        echo "\"></script>
<!-- JQVMap -->
<script src=\"";
        // line 1132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jqvmap/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery Knob Chart -->
<script src=\"";
        // line 1135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-knob/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
<!-- daterangepicker -->
<script src=\"";
        // line 1137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"";
        // line 1140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Summernote -->
<script src=\"";
        // line 1142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
<!-- overlayScrollbars -->
<script src=\"";
        // line 1144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 1146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 1148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 1150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1100
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 1101
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1366 => 1101,  1357 => 1100,  1343 => 1150,  1338 => 1148,  1333 => 1146,  1328 => 1144,  1323 => 1142,  1318 => 1140,  1313 => 1138,  1309 => 1137,  1304 => 1135,  1299 => 1133,  1295 => 1132,  1290 => 1130,  1285 => 1128,  1280 => 1126,  1271 => 1120,  1266 => 1118,  1248 => 1102,  1246 => 1100,  862 => 719,  844 => 704,  484 => 347,  475 => 341,  466 => 335,  457 => 329,  437 => 312,  428 => 306,  419 => 300,  410 => 294,  401 => 288,  392 => 282,  383 => 276,  374 => 270,  354 => 253,  345 => 247,  336 => 241,  316 => 224,  303 => 214,  281 => 195,  272 => 189,  263 => 183,  228 => 151,  224 => 150,  166 => 95,  147 => 79,  107 => 42,  89 => 27,  84 => 25,  79 => 23,  74 => 21,  69 => 19,  64 => 17,  59 => 15,  54 => 13,  49 => 11,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"plugins/fontawesome-free/css/all.min.css\") }}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}\">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\") }}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"plugins/icheck-bootstrap/icheck-bootstrap.min.css\") }}\">
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/jqvmap/jqvmap.min.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"dist/css/adminlte.min.css\") }}\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/daterangepicker/daterangepicker.css') }}\">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/summernote/summernote-bs4.css') }}\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">

    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"{{ asset('index3.html') }}\" class=\"nav-link\">Home</a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"#\" class=\"nav-link\">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class=\"form-inline ml-3\">
            <div class=\"input-group input-group-sm\">
                <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-navbar\" type=\"submit\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
            </div><b></b>
        </form>



        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            <!-- Messages Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-comments\"></i>
                    <span class=\"badge badge-danger navbar-badge\">3</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <a href=\"#\" class=\"dropdown-item\">

                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"{{asset ('dist/img/user8-128x128.jpg') }}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    John Pierce
                                    <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">I got your message bro</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"{{ asset('dist/img/user3-128x128.jpg') }}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Nora Silvester
                                    <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">The subject goes here</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-bell\"></i>
                    <span class=\"badge badge-warning navbar-badge\">15</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                        <span class=\"float-right text-muted text-sm\">3 mins</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                        <span class=\"float-right text-muted text-sm\">12 hours</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-file mr-2\"></i> 3 new reports
                        <span class=\"float-right text-muted text-sm\">2 days</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\">
                    <i class=\"fas fa-th-large\"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"{{ asset('index3.html') }}\" class=\"brand-link\">
            <img src=\"{{ asset('dist/img/AdminLTELogo.png') }}\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\"
                 style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">espace administrateur</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img src=\"#\" class=\"img-circle elevation-2\" alt=\"User Image\">
                </div>
                <div class=\"info\">
                    <a href=\"#\" class=\"d-block\">Abir lakhal</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class=\"nav-item has-treeview menu-open\">
                        <a href=\"#\" class=\"nav-link active\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Dashboard
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('./index.html') }}\" class=\"nav-link active\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard v1</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('./index2.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard v2</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('./index3.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard v3</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-copy\"></i>
                            <p>
                                Layout Options
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\">6</span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/layout/top-nav.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Top Navigation</p>
                                </a>
                            </li>




                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/layout/collapsed-sidebar.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Collapsed Sidebar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-chart-pie\"></i>
                            <p>
                                Charts
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/charts/chartjs.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>ChartJS</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/charts/flot.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Flot</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/charts/inline.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Inline</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tree\"></i>
                            <p>
                                UI Elements
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/UI/general.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>General</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/UI/icons.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Icons</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/UI/buttons.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Buttons</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/UI/sliders.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Sliders</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/UI/modals.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Modals & Alerts</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/UI/navbar.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Navbar & Tabs</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/UI/timeline.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Timeline</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/UI/ribbons.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Ribbons</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-edit\"></i>
                            <p>
                                Forms
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/forms/general.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>General Elements</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/forms/advanced.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Advanced Elements</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/forms/editors.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Editors</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset('pages/forms/validation.html') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Validation</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-table\"></i>
                            <p>
                                activite
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>scolaire</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>parascolaire</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class=\"nav-header\">EXAMPLES</li>
                    <li class=\"nav-item\">
                        <a href=\"pages/calendar.html\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-calendar-alt\"></i>
                            <p>
                                Calendar
                                <span class=\"badge badge-info right\">2</span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"pages/gallery.html\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-image\"></i>
                            <p>
                                Gallery
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-envelope\"></i>
                            <p>
                                Mailbox
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/mailbox/mailbox.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/mailbox/compose.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/mailbox/read-mail.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-book\"></i>
                            <p>
                                Pages
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/invoice.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Invoice</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/profile.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/e-commerce.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>E-commerce</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/projects.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Projects</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/project-add.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Add</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/project-edit.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Edit</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/project-detail.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Detail</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/contacts.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Contacts</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-plus-square\"></i>
                            <p>
                                Extras
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/login.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Login</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/register.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Register</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/forgot-password.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Forgot Password</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/recover-password.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Recover Password</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/lockscreen.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Lockscreen</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/legacy-user-menu.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Legacy User Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/language-menu.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Language Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/404.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 404</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/500.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 500</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/pace.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Pace</p>
                                </a>
                            </li>


                            <!-- ./col -->
                            <div class=\"col-lg-3 col-6\">
                                <!-- small box -->
                                <div class=\"small-box bg-danger\">
                                    <div class=\"inner\">
                                        <h3>65</h3>

                                        <p>Unique Visitors</p>
                                    </div>
                                    <div class=\"icon\">
                                        <i class=\"ion ion-pie-graph\"></i>
                                    </div>
                                    <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class=\"row\">
            <!-- Left col -->
            <section class=\"col-lg-7 connectedSortable\">
                <!-- Custom tabs (Charts with tabs)-->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"fas fa-chart-pie mr-1\"></i>
                            Sales
                        </h3>
                        <div class=\"card-tools\">
                            <ul class=\"nav nav-pills ml-auto\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" href=\"#revenue-chart\" data-toggle=\"tab\">Area</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#sales-chart\" data-toggle=\"tab\">Donut</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.card-header -->
                    <div class=\"card-body\">
                        <div class=\"tab-content p-0\">
                            <!-- Morris chart - Sales -->
                            <div class=\"chart tab-pane active\" id=\"revenue-chart\"
                                 style=\"position: relative; height: 300px;\">
                                <canvas id=\"revenue-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
                            </div>
                            <div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\">
                                <canvas id=\"sales-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
                            </div>
                        </div>
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- DIRECT CHAT -->
                <div class=\"card direct-chat direct-chat-primary\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Direct Chat</h3>

                        <div class=\"card-tools\">
                            <span data-toggle=\"tooltip\" title=\"3 New Messages\" class=\"badge badge-primary\">3</span>
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                <i class=\"fas fa-minus\"></i>
                            </button>
                            <button type=\"button\" class=\"btn btn-tool\" data-toggle=\"tooltip\" title=\"Contacts\"
                                    data-widget=\"chat-pane-toggle\">
                                <i class=\"fas fa-comments\"></i>
                            </button>
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"><i class=\"fas fa-times\"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                        <!-- Conversations are loaded here -->
                        <div class=\"direct-chat-messages\">
                            <!-- Message. Default to the left -->
                            <div class=\"direct-chat-msg\">
                                <div class=\"direct-chat-infos clearfix\">
                                    <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                    <span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
                                <!-- /.direct-chat-img -->
                                <div class=\"direct-chat-text\">
                                    Is this template really for free? That's unbelievable!
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class=\"direct-chat-msg right\">
                                <div class=\"direct-chat-infos clearfix\">
                                    <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                    <span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
                                <!-- /.direct-chat-img -->
                                <div class=\"direct-chat-text\">
                                    You better believe it!
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message. Default to the left -->
                            <div class=\"direct-chat-msg\">
                                <div class=\"direct-chat-infos clearfix\">
                                    <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                    <span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
                                <!-- /.direct-chat-img -->
                                <div class=\"direct-chat-text\">
                                    Working with AdminLTE on a great new app! Wanna join?
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class=\"direct-chat-msg right\">
                                <div class=\"direct-chat-infos clearfix\">
                                    <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                    <span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
                                <!-- /.direct-chat-img -->
                                <div class=\"direct-chat-text\">
                                    I would love to.
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                        </div>
                        <!--/.direct-chat-messages-->

                        <!-- Contacts are loaded here -->
                        <div class=\"direct-chat-contacts\">
                            <ul class=\"contacts-list\">
                                <li>
                                    <a href=\"#\">
                                        <img class=\"contacts-list-img\" src=\"{{ asset('dist/img/user1-128x128.jpg') }}\">

                                        <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Count Dracula
                            <small class=\"contacts-list-date float-right\">2/28/2015</small>
                          </span>
                                            <span class=\"contacts-list-msg\">How have you been? I was...</span>
                                        </div>
                                        <!-- /.contacts-list-info -->
                                    </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                    <a href=\"#\">
                                        <img class=\"contacts-list-img\" src=\"{{ asset('dist/img/user7-128x128.jpg') }}\">

                                        <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Sarah Doe
                            <small class=\"contacts-list-date float-right\">2/23/2015</small>
                          </span>
                                            <span class=\"contacts-list-msg\">I will be waiting for...</span>
                                        </div>
                                        <!-- /.contacts-list-info -->
                                    </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                    <a href=\"#\">
                                        <img class=\"contacts-list-img\" src=\"dist/img/user3-128x128.jpg\">

                                        <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Nadia Jolie
                            <small class=\"contacts-list-date float-right\">2/20/2015</small>
                          </span>
                                            <span class=\"contacts-list-msg\">I'll call you back at...</span>
                                        </div>
                                        <!-- /.contacts-list-info -->
                                    </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                    <a href=\"#\">
                                        <img class=\"contacts-list-img\" src=\"dist/img/user5-128x128.jpg\">

                                        <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Nora S. Vans
                            <small class=\"contacts-list-date float-right\">2/10/2015</small>
                          </span>
                                            <span class=\"contacts-list-msg\">Where is your new...</span>
                                        </div>
                                        <!-- /.contacts-list-info -->
                                    </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                    <a href=\"#\">
                                        <img class=\"contacts-list-img\" src=\"dist/img/user6-128x128.jpg\">

                                        <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            John K.
                            <small class=\"contacts-list-date float-right\">1/27/2015</small>
                          </span>
                                            <span class=\"contacts-list-msg\">Can I take a look at...</span>
                                        </div>
                                        <!-- /.contacts-list-info -->
                                    </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                    <a href=\"#\">
                                        <img class=\"contacts-list-img\" src=\"dist/img/user8-128x128.jpg\">

                                        <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Kenneth M.
                            <small class=\"contacts-list-date float-right\">1/4/2015</small>
                          </span>
                                            <span class=\"contacts-list-msg\">Never mind I found...</span>
                                        </div>
                                        <!-- /.contacts-list-info -->
                                    </a>
                                </li>
                                <!-- End Contact Item -->
                            </ul>
                            <!-- /.contacts-list -->
                        </div>
                        <!-- /.direct-chat-pane -->
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer\">
                        <form action=\"#\" method=\"post\">
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
                                <span class=\"input-group-append\">
                      <button type=\"button\" class=\"btn btn-primary\">Send</button>
                    </span>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!--/.direct-chat -->

                <!-- TO DO List -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">
                            <i class=\"ion ion-clipboard mr-1\"></i>
                            To Do List
                        </h3>

                        <div class=\"card-tools\">
                            <ul class=\"pagination pagination-sm\">
                                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">&laquo;</a></li>
                                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">1</a></li>
                                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">3</a></li>
                                <li class=\"page-item\"><a href=\"#\" class=\"page-link\">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                        <ul class=\"todo-list\" data-widget=\"todo-list\">
                            <li>
                                <!-- drag handle -->
                                <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                <!-- checkbox -->
                                <div  class=\"icheck-primary d-inline ml-2\">
                                    <input type=\"checkbox\" value=\"\" name=\"todo1\" id=\"todoCheck1\">
                                    <label for=\"todoCheck1\"></label>
                                </div>
                                <!-- todo text -->
                                <span class=\"text\">Design a nice theme</span>
                                <!-- Emphasis label -->
                                <small class=\"badge badge-danger\"><i class=\"far fa-clock\"></i> 2 mins</small>
                                <!-- General tools such as edit or delete-->
                                <div class=\"tools\">
                                    <i class=\"fas fa-edit\"></i>
                                    <i class=\"fas fa-trash-o\"></i>
                                </div>
                            </li>
                            <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                <div  class=\"icheck-primary d-inline ml-2\">
                                    <input type=\"checkbox\" value=\"\" name=\"todo2\" id=\"todoCheck2\" checked>
                                    <label for=\"todoCheck2\"></label>
                                </div>
                                <span class=\"text\">Make the theme responsive</span>
                                <small class=\"badge badge-info\"><i class=\"far fa-clock\"></i> 4 hours</small>
                                <div class=\"tools\">
                                    <i class=\"fas fa-edit\"></i>
                                    <i class=\"fas fa-trash-o\"></i>
                                </div>
                            </li>
                            <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                <div  class=\"icheck-primary d-inline ml-2\">
                                    <input type=\"checkbox\" value=\"\" name=\"todo3\" id=\"todoCheck3\">
                                    <label for=\"todoCheck3\"></label>
                                </div>
                                <span class=\"text\">Let theme shine like a star</span>
                                <small class=\"badge badge-warning\"><i class=\"far fa-clock\"></i> 1 day</small>
                                <div class=\"tools\">
                                    <i class=\"fas fa-edit\"></i>
                                    <i class=\"fas fa-trash-o\"></i>
                                </div>
                            </li>
                            <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                <div  class=\"icheck-primary d-inline ml-2\">
                                    <input type=\"checkbox\" value=\"\" name=\"todo4\" id=\"todoCheck4\">
                                    <label for=\"todoCheck4\"></label>
                                </div>
                                <span class=\"text\">Let theme shine like a star</span>
                                <small class=\"badge badge-success\"><i class=\"far fa-clock\"></i> 3 days</small>
                                <div class=\"tools\">
                                    <i class=\"fas fa-edit\"></i>
                                    <i class=\"fas fa-trash-o\"></i>
                                </div>
                            </li>
                            <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                <div  class=\"icheck-primary d-inline ml-2\">
                                    <input type=\"checkbox\" value=\"\" name=\"todo5\" id=\"todoCheck5\">
                                    <label for=\"todoCheck5\"></label>
                                </div>
                                <span class=\"text\">Check your messages and notifications</span>
                                <small class=\"badge badge-primary\"><i class=\"far fa-clock\"></i> 1 week</small>
                                <div class=\"tools\">
                                    <i class=\"fas fa-edit\"></i>
                                    <i class=\"fas fa-trash-o\"></i>
                                </div>
                            </li>
                            <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                <div  class=\"icheck-primary d-inline ml-2\">
                                    <input type=\"checkbox\" value=\"\" name=\"todo6\" id=\"todoCheck6\">
                                    <label for=\"todoCheck6\"></label>
                                </div>
                                <span class=\"text\">Let theme shine like a star</span>
                                <small class=\"badge badge-secondary\"><i class=\"far fa-clock\"></i> 1 month</small>
                                <div class=\"tools\">
                                    <i class=\"fas fa-edit\"></i>
                                    <i class=\"fas fa-trash-o\"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer clearfix\">
                        <button type=\"button\" class=\"btn btn-info float-right\"><i class=\"fas fa-plus\"></i> Add item</button>
                    </div>
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class=\"col-lg-5 connectedSortable\">

                <!-- Map card -->
                <div class=\"card bg-gradient-primary\">
                    <div class=\"card-header border-0\">
                        <h3 class=\"card-title\">
                            <i class=\"fas fa-map-marker-alt mr-1\"></i>
                            Visitors
                        </h3>
                        <!-- card tools -->
                        <div class=\"card-tools\">
                            <button type=\"button\"
                                    class=\"btn btn-primary btn-sm daterange\"
                                    data-toggle=\"tooltip\"
                                    title=\"Date range\">
                                <i class=\"far fa-calendar-alt\"></i>
                            </button>
                            <button type=\"button\"
                                    class=\"btn btn-primary btn-sm\"
                                    data-card-widget=\"collapse\"
                                    data-toggle=\"tooltip\"
                                    title=\"Collapse\">
                                <i class=\"fas fa-minus\"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                        .                    </div>
                    <div class=\"card-body\">
                        <div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
                    </div>
                    <!-- /.card-body-->
                    <div class=\"card-footer bg-transparent\">
                        <div class=\"row\">
                            <div class=\"col-4 text-center\">
                                <div id=\"sparkline-1\"></div>
                                <div class=\"text-white\">Visitors</div>
                            </div>
                            <!-- ./col -->
                            <div class=\"col-4 text-center\">
                                <div id=\"sparkline-2\"></div>
                                <div class=\"text-white\">Online</div>
                            </div>
                            <!-- ./col -->
                            <div class=\"col-4 text-center\">
                                <div id=\"sparkline-3\"></div>
                                <div class=\"text-white\">Sales</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.card -->

                <!-- solid sales graph -->
                <div class=\"card bg-gradient-info\">
                    <div class=\"card-header border-0\">
                        <h3 class=\"card-title\">
                            <i class=\"fas fa-th mr-1\"></i>
                            Sales Graph
                        </h3>

                        <div class=\"card-tools\">
                            <button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"collapse\">
                                <i class=\"fas fa-minus\"></i>
                            </button>
                            <button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"remove\">
                                <i class=\"fas fa-times\"></i>
                            </button>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <canvas class=\"chart\" id=\"line-chart\" style=\"min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;\"></canvas>
                    </div>
                    <!-- /.card-body -->
                    <div class=\"card-footer bg-transparent\">
                        <div class=\"row\">
                            <div class=\"col-4 text-center\">
                                <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\"
                                       data-fgColor=\"#39CCCC\">

                                <div class=\"text-white\">Mail-Orders</div>
                            </div>
                            <!-- ./col -->
                            <div class=\"col-4 text-center\">
                                <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\"
                                       data-fgColor=\"#39CCCC\">

                                <div class=\"text-white\">Online</div>
                            </div>
                            <!-- ./col -->
                            <div class=\"col-4 text-center\">
                                <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\"
                                       data-fgColor=\"#39CCCC\">

                                <div class=\"text-white\">In-Store</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->

                <!-- Calendar -->
                <div class=\"card bg-gradient-success\">
                    <div class=\"card-header border-0\">

                        <h3 class=\"card-title\">
                            <i class=\"far fa-calendar-alt\"></i>
                            Calendar
                        </h3>
                        <!-- tools card -->
                        <div class=\"card-tools\">
                            <!-- button with a dropdown -->
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fas fa-bars\"></i></button>
                                <div class=\"dropdown-menu float-right\" role=\"menu\">
                                    <a href=\"#\" class=\"dropdown-item\">Add new event</a>
                                    <a href=\"#\" class=\"dropdown-item\">Clear events</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a href=\"#\" class=\"dropdown-item\">View calendar</a>
                                </div>
                            </div>
                            <button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"collapse\">
                                <i class=\"fas fa-minus\"></i>
                            </button>
                            <button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"remove\">
                                <i class=\"fas fa-times\"></i>
                            </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body pt-0\">
                        <!--The calendar -->
                        <div id=\"calendar\" style=\"width: 100%\"></div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->
<footer class=\"main-footer\">

    {% block body%}
    {% endblock %}
    <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class=\"float-right d-none d-sm-inline-block\">
        <b>Version</b> 3.0.3-pre
    </div>
</footer>

<!-- Control Sidebar -->
<aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"{{ asset('plugins/jquery/jquery.min.js') }}\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=\"{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<!-- ChartJS -->
<script src=\"{{ asset('plugins/chart.js/Chart.min.js') }}\"></script>
<!-- Sparkline -->
<script src=\"{{ asset('plugins/sparklines/sparkline.js') }}\"></script>
<!-- JQVMap -->
<script src=\"{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}\"></script>
<script src=\"{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}\"></script>
<!-- jQuery Knob Chart -->
<script src=\"{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}\"></script>
<!-- daterangepicker -->
<script src=\"{{ asset('plugins/moment/moment.min.js') }}\"></script>
<script src=\"{{ asset('plugins/daterangepicker/daterangepicker.js') }}\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}\"></script>
<!-- Summernote -->
<script src=\"{{ asset('plugins/summernote/summernote-bs4.min.js') }}\"></script>
<!-- overlayScrollbars -->
<script src=\"{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('dist/js/adminlte.js') }}\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"{{ asset('dist/js/pages/dashboard.js') }}\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"{{ asset('dist/js/demo.js') }}\"></script>
</body>
</html>
", "tp.html.twig", "/Applications/MAMP/htdocs/pitest/app/Resources/views/tp.html.twig");
    }
}
