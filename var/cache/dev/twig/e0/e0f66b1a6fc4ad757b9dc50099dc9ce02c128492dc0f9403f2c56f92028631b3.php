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

/* base.html.twig */
class __TwigTemplate_1b6336740ac29a501201a66da4014d1940fa591fc64da8f49d296305f7bfcdec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lte IE 8]><html class=\"ie8 no-js\" lang=\"en\"><![endif]-->
<!--[if IE 9]><html class=\"ie9 no-js\" lang=\"en\"><![endif]-->
<html class=\"no-ie\">


<!-- Mirrored from html.cwsthemes.com/happykids/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jan 2020 21:23:24 GMT -->
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>HappyKids</title>
    <link rel=\"alternate\" type=\"application/rss+xml\" title=\"HappyKids\" href=\"#\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/css/styles.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/css/maps.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/css/woocommerce.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/css/flexnav.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/css/prettyPhoto.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/tuner/css/colorpicker.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/tuner/css/styles.csss"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/revslider/styles.css"), "html", null, true);
        echo "\" />
    <script type='text/javascript' src='";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/jquery.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/tuner/js/colorpicker.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/tuner/js/scripts.js"), "html", null, true);
        echo "'></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/revslider/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/revslider/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
</head>



<body data-type-of-widget=\"2\" class=\"home page kids-front-page t-pattern-1\">
<!-- HEADER BEGIN -->
<div class=\"top-panel\">
    <div class=\"l-page-width clearfix\">
        <div class=\"wrapper\">
            <div class=\"widget widget_cws_tweets\">
                <div class='cws-widget-content '>
                    <div class=\"latest_tweets \">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ .top-panel-->
<div class=\"kids-bg-level-1\">
    <div class=\"bg-level-1\"></div>
    <header id=\"kids_header\">
        <div class=\"l-page-width clearfix\">
            <ul class=\"kids_social\">
                <li class=\"openbtn\">
                    <a href=\"#\"></a>
                </li>
                <li class='lang_bar'>
                    <div id=\"lang_sel\">
                        <ul>
                            <li>
                                <a href=\"#\" class=\"lang_sel_sel icl-en\"><img class=\"iclflag\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/en.png"), "html", null, true);
        echo "\" alt=\"en\" title=\"English\" /> &nbsp;
                                </a>
                                <ul>
                                    <li class=\"icl-fr\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/fr.png"), "html", null, true);
        echo "\" alt=\"fr\" title=\"Français\" />&nbsp;</a>
                                    </li>
                                    <li class=\"icl-de\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/de.png"), "html", null, true);
        echo "\" alt=\"de\" title=\"Deutsch\" />&nbsp;</a>
                                    </li>
                                    <li class=\"icl-it\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/it.png"), "html", null, true);
        echo "\" alt=\"it\" title=\"Italiano\" />&nbsp;</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href=\"https://plus.google.com/115553712051048113965\" title=\"Google Plus\" target=\"_blank\"><i class=\"fa fa-google-plus fa-2x\"></i></a><span style=\"background-color:#dd4b39;\"></span></li>
                <li><a href=\"https://www.facebook.com/CreaWS\" title=\"Facebook\" target=\"_blank\"><i class=\"fa fa-facebook fa-2x\"></i></a><span style=\"background-color:#3b5998;\"></span></li>
                <li><a href=\"https://www.youtube.com/user/cwsvideotuts\" title=\"Youtube\" target=\"_blank\"><i class=\"fa fa-youtube-play fa-2x\"></i></a><span style=\"background-color:#b31217;\"></span></li>
                <li><a href=\"https://twitter.com/Creative_WS\" title=\"Twitter\" target=\"_blank\"><i class=\"fa fa-twitter fa-2x\"></i></a><span style=\"background-color:#4099ff;\"></span></li>
                <li class=\"search\">
                    <a href=\"#\" title=\"Search\"></a><span></span></li>
                <li>
                    <form role=\"search\" id=\"search-form\" method=\"get\" action=\"#\">
                        <input type=\"text\" value=\"\" name=\"s\" id=\"s\" />
                        <input class=\"button medium button-style1\" type=\"submit\" id=\"search-submit\" value=\"Search\" />
                    </form>
                </li>
            </ul>
            <!-- .kids_social -->
            <div class=\"kids_clear\"></div>
            <div id=\"kids_logo_block\" class=\"logo-position-left\">
                <a id=\"kids_logo_text\" href=\"\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/logo.png"), "html", null, true);
        echo "\" alt=\"HappyKids\" title=\"HappyKids\" /></a>
            </div>
            <nav id=\"kids_main_nav\" class=\"menu-position-right\">
                <div class=\"menu-button\">
                    <span class=\"menu-button-line\"></span>
                    <span class=\"menu-button-line\"></span>
                    <span class=\"menu-button-line\"></span>
                </div>
                <ul id=\"menu-main\" class=\"clearfix flexnav \" data-breakpoint=\"800\">
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item\"><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Home</a></li>
                    <li class=\"menu-item menu-item-has-children\"><a href=\"\">Features</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item\"><a href=\"\">Template Features</a></li>
                            <li class=\"menu-item menu-item-has-children\"><a href=\"\">Content Elements</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item\"><a href=\"\">Grids Showcase</a></li>
                                    <li class=\"menu-item\"><a href=\"\">Content Elements</a></li>
                                    <li class=\"menu-item\"><a href=\"\">Video</a></li>
                                    <li class=\"menu-item\"><a href=\"\">Text and Headings</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item\"><a href=\"\">Pricing Tables</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item menu-item-has-children\"><a href=\" ";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connect");
        echo "\">Connexion</a>
                    </li>
                    <li class=\"menu-itemmenu-item-has-children\"><a href=\"\">Portfolio</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item-has-children\"><a href=\"#\">Columns</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item\"><a href=\"\">Portfolio 1 Column</a></li>
                                    <li class=\"menu-item\"><a href=\"\">Portfolio 2 Columns</a></li>
                                    <li class=\"menu-item\"><a href=\"\">Portfolio 3 Columns</a></li>
                                    <li class=\"menu-item\"><a href=\"\">Portfolio 4 Columns</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item\"><a href=\"\">Full-width page</a></li>
                            <li class=\"menu-item\"><a href=\"\">Right Sidebar</a></li>
                            <li class=\"menu-item\"><a href=\"\">Left Sidebar</a></li>
                            <li class=\"menu-item\"><a href=\"\">Double Sidebars</a></li>
                            <li class=\"menu-item\"><a href=\"\">Gallery</a></li>
                            <li class=\"menu-item\"><a href=\"\">Gallery + Sidebar</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children\"><a href=\"#\">Blog</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item\"><a href=\"\">Right Sidebar</a></li>
                            <li class=\"menu-item\"><a href=\"\">Left Sidebar</a></li>
                            <li class=\"menu-item\"><a href=\"\">DoubleSidebars</a></li>
                            <li class=\"menu-item\"><a href=\"\">Full Width</a></li>

                        </ul>
                    </li>
                    <li class=\"menu-item menu-item-has-children\"><a href=\"\">Shop</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item\"><a href=\"\">Woo Shortcodes</a></li>
                            <li class=\"menu-item\"><a href=\"\">Cart</a></li>

                            <li class=\"menu-item\"><a href=\"\">Checkout</a></li>
                            <li class=\"menu-item\"><a href=\"\">My Account</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item\"><a href=\"\">Contact</a></li>
                </ul>
            </nav>
            <!-- #kids_main_nav -->
        </div>
        <!--/ .l-page-width-->
    </header>
    <!--/ #kids_header-->
    <!-- HEADER END -->
    ";
        // line 164
        $this->displayBlock('content', $context, $blocks);
        // line 716
        echo "<!-- .end_content -->
<!-- FOOTER BEGIN -->
<div class=\"kids_bottom_container footer\">
    <div class=\"l-page-width\">
        <div class=\"wrapper\">
            <div class=\"widget widget_text\">
                <div class=\"textwidget\">
                    <div class='shortcode_carousel' data-carousel-column=\"1\">
                        <div class='carousel_header clearfix'>
                            <div class='widget-title'>Gallery</div>
                        </div>
                        <div class='carousel_content'>
                            <!-- see gallery_shortcode() -->
                            <div id='ngallery-1' class='ngallery clearfix column-1'>
                                <dl class='gallery-item'>
                                    <dt class='gallery-icon '>
                                        <div class='content-wrapper'>
                                            <figure>
                                                <a href=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/HappyFeet_1st4.jpg"), "html", null, true);
        echo "\" data-rel=\"prettyPhoto[12135]\" class=\"prettyPhoto kids_picture\">
                                                    <img src=\"";
        // line 735
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/300x300-img-4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                </a>
                                            </figure>
                                        </div>
                                    </dt>
                                </dl>
                                <dl class='gallery-item'>
                                    <dt class='gallery-icon'>
                                        <div class='content-wrapper'>
                                            <figure>
                                                <a href=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/Tangled_3rd5.jpg"), "html", null, true);
        echo "\" data-rel=\"prettyPhoto[12135]\" class=\"prettyPhoto kids_picture\">
                                                    <img src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/300x300-img-12.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                </a>
                                            </figure>
                                        </div>
                                    </dt>
                                </dl>
                                <dl class='gallery-item'>
                                    <dt class='gallery-icon '>
                                        <div class='content-wrapper'>
                                            <figure>
                                                <a href=\"";
        // line 756
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/LegoMovie_3rd4.jpg"), "html", null, true);
        echo "\" data-rel=\"prettyPhoto[12135]\" class=\"prettyPhoto kids_picture\">
                                                    <img src=\"";
        // line 757
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/300x300-img-9.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                </a>
                                            </figure>
                                        </div>
                                    </dt>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"widget widget_cws_tweets\">
                <div class=\"cws-widget-content\">
                    <!-- twitter header -->
                    <div class='carousel_header clearfix'>
                        <div class='widget_carousel_nav'>
                            <i class='prev fa fa-angle-left'></i>
                            <i class='next fa fa-angle-right'></i>
                        </div>
                        <h3 class=\"widget-title\">Twitter</h3>
                    </div>
                    <!-- / twitter header -->
                    <!-- twitter carousel -->
                    <div class=\"twitter-carousel carousel latest_tweets\"></div>
                    <!--/twitter carousel -->
                </div>
            </div>
            <div class=\"widget widget_cws_latest_posts\">
                <div class=\"latest-posts-widget\">
                    <h3 class=\"widget-title\">Latest Posts</h3>
                    <div class=\"widget-content\">
                        <ul>
                            <li>
                                <div class=\"kids_image_wrapper \">
                                    <a href=\"";
        // line 791
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/HappyFeet_1st4.jpg"), "html", null, true);
        echo "\" class=\"prettyPhoto kids_mini_picture\" data-rel=\"prettyPhoto[rpwt]\">
                                        <img src=\"";
        // line 792
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/70x70-img-1.jpg"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"\"></a>
                                </div>
                                <div class=\"kids_post_content\">
                                    <h4><a href=\"#\">Image Post</a></h4>
                                    <p>Lorem ipsum dolor ...</p>
                                    <p class=\"time-post\">January 3, 2015</p>
                                </div>
                            </li>
                            <li>
                                <div class=\"kids_image_wrapper \">
                                    <a href=\"";
        // line 802
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/LegoMovie_3rd4.jpg"), "html", null, true);
        echo "\" class=\"prettyPhoto kids_mini_picture\" data-rel=\"prettyPhoto[rpwt]\">
                                        <img src=\"";
        // line 803
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/70x70-img-2.jpg"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"\"></a>
                                </div>
                                <div class=\"kids_post_content\">
                                    <h4><a href=\"#\">Image Post</a></h4>
                                    <p>Lorem ipsum dolor ...</p>
                                    <p class=\"time-post\">January 2, 2015</p>
                                </div>
                            </li>
                            <li>
                                <div class=\"kids_image_wrapper \">
                                    <a href=\"";
        // line 813
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/Tangled_3rd5.jpg"), "html", null, true);
        echo "\" class=\"prettyPhoto kids_mini_picture\" data-rel=\"prettyPhoto[rpwt]\">
                                        <img src=\"";
        // line 814
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/70x70-img-3.jpg"), "html", null, true);
        echo "\" width=\"70\" height=\"70\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"kids_post_content\">
                                    <h4><a href=\"#\">Video blog post</a></h4>
                                    <p>Lorem ipsum dolor ...</p>
                                    <p class=\"time-post\">January 1, 2015</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"widget widget_calendar\">
                <h3 class=\"widget-title\">Calendar</h3>
                <div id=\"calendar_wrap\">

                </div>
            </div>
        </div>
        <!-- /wrapper -->
    </div>
    <!--/ l-page-width-->
</div>
<!-- .kids_bottom_container -->
<div class=\"kids-footer-copyrights footer\">
    <div class=\"l-page-width  clearfix\">
        <div class=\"wrapper\">
            <ul class=\"kids_social\">
                <li><a href=\"https://plus.google.com/115553712051048113965\" title=\"Google Plus\" target=\"_blank\"><i class=\"fa fa-google-plus fa-2x\"></i></a><span style=\"background-color:#dd4b39;\"></span></li>
                <li><a href=\"https://www.facebook.com/CreaWS\" title=\"Facebook\" target=\"_blank\"><i class=\"fa fa-facebook fa-2x\"></i></a><span style=\"background-color:#3b5998;\"></span></li>
                <li><a href=\"https://www.youtube.com/user/cwsvideotuts\" title=\"Youtube\" target=\"_blank\"><i class=\"fa fa-youtube-play fa-2x\"></i></a><span style=\"background-color:#b31217;\"></span></li>
                <li><a href=\"https://twitter.com/Creative_WS\" title=\"Twitter\" target=\"_blank\"><i class=\"fa fa-twitter fa-2x\"></i></a><span style=\"background-color:#4099ff;\"></span></li>
                <li class=\"lang_bar\">
                    <div id=\"lang_sel\">
                        <ul>
                            <li>
                                <a href=\"#\" class=\"lang_sel_sel icl-en\"><img class=\"iclflag\" src=\"";
        // line 851
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/en.png"), "html", null, true);
        echo "\" alt=\"en\" title=\"English\" /> &nbsp;
                                </a>
                                <ul>
                                    <li class=\"icl-fr\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"";
        // line 855
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/fr.png"), "html", null, true);
        echo "\" alt=\"fr\" title=\"Français\" />&nbsp;</a>
                                    </li>
                                    <li class=\"icl-de\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"";
        // line 858
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/de.png"), "html", null, true);
        echo "\" alt=\"de\" title=\"Deutsch\" />&nbsp;</a>
                                    </li>
                                    <li class=\"icl-it\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"";
        // line 861
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/it.png"), "html", null, true);
        echo "\" alt=\"it\" title=\"Italiano\" />&nbsp;</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class=\"widget widget_text\">
                <div class=\"textwidget\">Happy Kids</div>
            </div>
        </div>
    </div>
    <div class=\"dark-mask\"></div>
</div>


<style id='cws-cp-1'></style>
<style id='cws-cp-2'></style>
<style id='cws-cp-3'></style>
<style id='cws-cp-4'></style>
<style id='cws-cp-5'></style>
<!--/ tuner -->
<!--[if lt IE 9]>
<script src=\"";
        // line 885
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/selectivizr-and-extra-selectors.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<script type=\"text/javascript\" src='";
        // line 887
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/jquery-ui.min.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 888
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/scripts.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 889
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/retina.min.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 890
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/jquery.tweet.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 891
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/jquery.lavalamp-1.4.min.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 892
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/jquery.easing-1.3.min.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 893
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/owl.carousel.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 894
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 895
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/jquery.isotope.min.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 896
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/jquery.flexnav.min.js"), "html", null, true);
        echo "'></script>



</body>


<!-- Mirrored from html.cwsthemes.com/happykids/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jan 2020 21:28:00 GMT -->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 164
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 165
        echo "    <div class=\"bg-level-2-page-width-container \">
        <div class=\"bg-level-2 first-part\" id=\"bg-level-2\"></div>
        <div class=\"l-page-width\">
            <div class=\"kids_slider_bg img_slider\">
                <div class=\"kids_slider_wrapper\">
                    <div class=\"kids_slider_inner_wrapper\">
                        <div class=\"img-slider\">
                            <div id=\"rev_slider_1_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\">
                                <!-- START REVOLUTION SLIDER 4.6.5 fullwidth mode -->
                                <div id=\"rev_slider_1_1\" class=\"rev_slider fullwidthabanner\">
                                    <ul>
                                        <!-- SLIDE  -->
                                        <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                            <!-- MAIN IMAGE -->
                                            <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/slide-17.jpg"), "html", null, true);
        echo "\" alt=\"slide-17\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class=\"tp-caption kids-slider-header customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"300\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"2\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">Responsive Design
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class=\"tp-caption kids-slider-header-alt customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"357\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"2\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">All pages look identically great regardless of the device’s resolution and display size.
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                            <!-- MAIN IMAGE -->
                                            <img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/slide-5.jpg"), "html", null, true);
        echo "\" alt=\"slide-5\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class=\"tp-caption kids-slider-header customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"300\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">Easy Color Management
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class=\"tp-caption kids-slider-header-alt customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"357\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"4\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">With the help of our customization panel
                                                you can easily select any color and preview the results.
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                            <!-- MAIN IMAGE -->
                                            <img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/slide-47.jpg"), "html", null, true);
        echo "\" alt=\"slide-47\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class=\"tp-caption kids-slider-header customin tp-resizeme\" data-x=\"7\" data-y=\"300\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">Shop pages included
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class=\"tp-caption kids-slider-header-alt customin tp-resizeme\" data-x=\"7\" data-y=\"357\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"2\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">HappyKids includes all the needed page templates, widgets, cart and other shop-related content to represent your online store.
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                            <!-- MAIN IMAGE -->
                                            <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/slide-27.jpg"), "html", null, true);
        echo "\" alt=\"slide-27\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class=\"tp-caption kids-slider-header customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"300\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">Slider Revolution Inside
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class=\"tp-caption kids-slider-header-alt customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"357\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"4\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">A very powerful image slier is bundled into this template. Create your slides and enjoy the result.
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                            <!-- MAIN IMAGE -->
                                            <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/slide-37.jpg"), "html", null, true);
        echo "\" alt=\"slide-37\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class=\"tp-caption kids-slider-header customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"300\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">Lifetime Support
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class=\"tp-caption kids-slider-header-alt customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"357\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"2\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">We support our products as long as they are being sold. Be sure to get a fast, proffessional and reliable support from our staff.
                                            </div>
                                        </li>
                                    </ul>
                                    <div class=\"tp-bannertimer tp-bottom\"></div>
                                </div>
                            </div>
                            <!-- END REVOLUTION SLIDER -->
                        </div>
                        <!--/ #kids-slider-->
                    </div>
                    <!--/ .kids_slider_inner_wrapper-->
                </div>
                <!--/ .kids_slider_wrapper-->
            </div>
            <!--/ .kids_slider_bg-->
        </div>
        <!-- .l-page-width -->
        <div class=\"bg-level-2 second-part\" id=\"bg-level-2\"></div>
    </div>
</div>
</div>
<!-- .bg-level-1 -->
<div id=\"kids_middle_container\">
    <!-- .content -->
    <div class=\"kids_top_content\">
        <div class=\"kids_top_content_middle homepage\">
            <div class=\"l-page-width\">
                <section class=\"kids_posts_container clearfix\">
                    <div class=\"widget_wrapper\">
                        <div id=\"cws_benefits-5\" class=\"widget widget_cws_benefits\">
                            <div class=\"widget-icon pic\"><img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/icon-2.png"), "html", null, true);
        echo "\" alt /></div>
                            <div class=\"cws-widget-content benefits_widget\">
                                <h3 class=\"widget-title\">Playground</h3>
                                <section class=\"text_part\">Ut wisi enim ad minim veniam, quis nostrud exerci tation corper suscipit lobortis nisl ut aliqup.</section>
                                <a href='' class='cws_button '>More</a> </div>
                        </div>
                        <div id=\"cws_benefits-2\" class=\"widget widget_cws_benefits\">
                            <div class=\"widget-icon pic\"><img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/icon-1.png"), "html", null, true);
        echo "\" alt /></div>
                            <div class=\"cws-widget-content benefits_widget\">
                                <h3 class=\"widget-title\">Entertainment</h3>
                                <section class=\"text_part\">Lorem ipsum dolor sit consectetur adipiscing elit. Sed venenatis mollis lac us a egestas.</section>
                                <a href='' class='cws_button '>More</a> </div>
                        </div>
                        <div id=\"cws_benefits-3\" class=\"widget widget_cws_benefits\">
                            <div class=\"widget-icon pic\"><img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/icon-3.png"), "html", null, true);
        echo "\" alt /></div>
                            <div class=\"cws-widget-content benefits_widget\">
                                <h3 class=\"widget-title\">Environment</h3>
                                <section class=\"text_part\">Ut wisi enim ad minim veniam, quis nostrud exerci tation corper suscipit lobortis nisl.</section>
                                <a href='#' class='cws_button '>More</a> </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class=\"bottom-border\"></div>
        </div>
        <!-- .kids_top_content_middle -->
    </div>
    <div class=\"bg-level-2-full-width-container kids_bottom_content\">
        <div class=\"bg-level-2-page-width-container no-padding\">
            <section class=\"kids_bottom_content_container\">
                <!-- ***************** - START Image floating - *************** -->
                <div class=\"page-content\">
                    <div class=\"container l-page-width\">
                        <div class=\"entry-container \">
                            <main>
                                <div class='grid-row clearfix'>
                                    <div class='grid-col grid-col-12'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <div class=\"recent_projects \">
                                                    <h3 class=\"section-title\">Recent Projects</h3>
                                                    <div class=\"projects_carousel clearfix\" data-carousel-column=\"4\">
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/250x250-kos-1%402x.jpg"), "html", null, true);
        echo "\" title=\"Project 1\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/250x250-kos-1.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                            <div class=\"gallery-text\">
                                                                <div class=\"title\">Project 1</div>
                                                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer </p>
                                                            </div>
                                                            <div><a href=\"#\" class=\"cws_button\">View Project</a></div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/250x250-kos-2%402x.jpg"), "html", null, true);
        echo "\" title=\"Project 2\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/250x250-kos-2.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                            <div class=\"gallery-text\">
                                                                <div class=\"title\">Project 2</div>
                                                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer </p>
                                                            </div>
                                                            <div><a href=\"#\" class=\"cws_button\">View Project</a></div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/250x250-kos-3%402x.jpg"), "html", null, true);
        echo "\" title=\"Project 3\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/250x250-kos-3.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                            <div class=\"gallery-text\">
                                                                <div class=\"title\">Project 3</div>
                                                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer </p>
                                                            </div>
                                                            <div><a href=\"#\" class=\"cws_button\">View Project</a></div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/250x250-kos-4%402x.jpg"), "html", null, true);
        echo "\" title=\"Project 4\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/250x250-kos-4.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                            <div class=\"gallery-text\">
                                                                <div class=\"title\">Project 4</div>
                                                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer </p>
                                                            </div>
                                                            <div><a href=\"#\" class=\"cws_button\">View Project</a></div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/250x250-kos-6%402x.jpg"), "html", null, true);
        echo "\" title=\"Project 5\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/250x250-kos-6.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                            <div class=\"gallery-text\">
                                                                <div class=\"title\">Project 5</div>
                                                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer </p>
                                                            </div>
                                                            <div><a href=\"#\" class=\"cws_button\">View Project</a></div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/250x250-kos-5%402x.jpg"), "html", null, true);
        echo "\" title=\"Project 6\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/250x250-kos-5.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                            <div class=\"gallery-text\">
                                                                <div class=\"title\">Project 6</div>
                                                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer </p>
                                                            </div>
                                                            <div><a href=\"#\" class=\"cws_button\">View Project</a></div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/250x250-kos-7%402x.html"), "html", null, true);
        echo "\" title=\"Project 7\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/250x250-kos-7.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                            <div class=\"gallery-text\">
                                                                <div class=\"title\">Project 7</div>
                                                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer </p>
                                                            </div>
                                                            <div><a href=\"#\" class=\"cws_button\">View Project</a></div>
                                                        </div>
                                                    </div>
                                                    <!--/ .projects-carousel -->
                                                </div>
                                                <!--/ .work-carousel-->
                                                <hr />
                                                <p>&nbsp;</p>
                                            </section>
                                        </section>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <div class=\"recent_projects \">
                                                    <h3 class=\"section-title\">Recent Posts</h3>
                                                    <div class=\"projects_carousel blog clearfix\" data-carousel-column=\"2\">
                                                        <div class=\"iso-item\">
                                                            <article class=\"post-item\">
                                                                <div class=\"post-meta\">
                                                                    <div class=\"post-date\">
                                                                        <span class=\"day\"> 3</span>
                                                                        <span class=\"month\">Jan.2015</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"post-entry\">
                                                                    <div class=\"content-wrapper alignleft\">
                                                                        <figure>
                                                                            <a data-rel=\"prettyPhoto[lt_posts]\" class=\"prettyPhoto kids_picture\" title=\"Image Post\" href=\"pic/HappyFeet_1st4.jpg\"><img class=\"pic\" src=\"pic/185x185-img-1.jpg\" alt=\"\" /></a>
                                                                        </figure>
                                                                    </div>
                                                                    <div class=\"entry\">
                                                                        <div class=\"post-title\">
                                                                            <a href=\"#\">Image Post</a>
                                                                        </div>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magn aliquam erat volutpat. Ut wisi enim ad minim veniam ...</div>
                                                                </div>
                                                                <div class=\"post-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"l-float-right\"><a href=\"#\" class=\"more-link cws_button\">
\t\t\t\t\tRead more</a></span>
                                                                    <div class=\"post_cats\">
                                                                        <p><span>Category:</span><a class=\"link\" href=\"#\" title=\"View all posts in\">Image</a></p>
                                                                    </div>
                                                                    <div class=\"post_tags\">
                                                                        <p><span>Tags:</span>
                                                                            <a href=\"#\" \" title=\"Tag \"\" class=\"link\">Blog</a></p>
                                                                    </div>
                                                                    <div class=\"kids_clear\"></div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <article class=\"post-item\">
                                                                <div class=\"post-meta\">
                                                                    <div class=\"post-date\">
                                                                        <span class=\"day\"> 2</span>
                                                                        <span class=\"month\">Jan.2015</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"post-entry\">
                                                                    <div class=\"content-wrapper alignleft\">
                                                                        <figure>
                                                                            <a data-rel=\"prettyPhoto[lt_posts]\" class=\"prettyPhoto kids_picture\" title=\"Image Post\" href=\"pic/LegoMovie_3rd4.jpg\"><img class=\"pic\" src=\"pic/185x185-img-2.jpg\" alt=\"\" /></a>
                                                                        </figure>
                                                                    </div>
                                                                    <div class=\"entry\">
                                                                        <div class=\"post-title\">
                                                                            <a href=\"#\">Image Post</a>
                                                                        </div>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magn aliquam erat volutpat. Ut wisi enim ad minim veniam ...</div>
                                                                </div>
                                                                <div class=\"post-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"l-float-right\"><a href=\"#\" class=\"more-link cws_button\">
\t\t\t\t\tRead more</a></span>
                                                                    <div class=\"post_cats\">
                                                                        <p><span>Category:</span><a class=\"link\" href=\"#\" title=\"View all posts in\">Image</a></p>
                                                                    </div>
                                                                    <div class=\"post_tags\">
                                                                        <p><span>Tags:</span>
                                                                            <a href=\"#\" \" title=\"Tag \"\" class=\"link\">Blog</a></p>
                                                                    </div>
                                                                    <div class=\"kids_clear\"></div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <article class=\"post-item\">
                                                                <div class=\"post-meta\">
                                                                    <div class=\"post-date\">
                                                                        <span class=\"day\"> 1</span>
                                                                        <span class=\"month\">Jan.2015</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"post-entry\">
                                                                    <div class=\"content-wrapper alignleft\">
                                                                        <figure>
                                                                            <a data-rel=\"prettyPhoto[lt_posts]\" class=\"prettyPhoto kids_picture\" title=\"Video blog post\" href=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/Tangled_3rd5.jpg"), "html", null, true);
        echo "\"><img class=\"pic\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/185x185-img-3.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                                                                        </figure>
                                                                    </div>
                                                                    <div class=\"entry\">
                                                                        <div class=\"post-title\">
                                                                            <a href=\"#\">Video blog post</a>
                                                                        </div>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magn aliquam erat volutpat. Ut wisi enim ad minim veniam ...</div>
                                                                </div>
                                                                <div class=\"post-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"l-float-right\"><a href=\"#\" class=\"more-link cws_button\">
\t\t\t\t\tRead more</a></span>
                                                                    <div class=\"post_cats\">
                                                                        <p><span>Category:</span><a class=\"link\" href=\"#\" title=\"View all posts in\">Image</a>, <a class=\"link\" href=\"#\" title=\"View all posts in\">test</a>, <a class=\"link\" href=\"#\" title=\"View all posts in\">Video</a></p>
                                                                    </div>
                                                                    <div class=\"post_tags\">
                                                                        <p><span>Tags:</span>
                                                                            <a href=\"#\" \" title=\"Tag \"\" class=\"link\">Blog</a>, <a href=\"#\" \" title=\"Tag \"\" class=\"link\">Post</a></p>
                                                                    </div>
                                                                    <div class=\"kids_clear\"></div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <!--/ .projects-carousel -->
                                                </div>
                                                <!--/ .work-carousel-->
                                                <hr />
                                            </section>
                                        </section>
                                    </div>
                                </div>
                                <div class='grid-row clearfix'>
                                    <div class='grid-col grid-col-12'>
                                        <section class='cws-widget'>
                                            <div class='widget-title'>About Happy Kids</div>
                                            <section class='cws_widget_content'>
                                                <p><img class=\"alignleft border size-thumbnail\" src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/150x150-img-1.png"), "html", null, true);
        echo "\" alt=\"content_img_1\" width=\"150\" height=\"150\" />In ac sollicitudin sem. Proin congue blandit eros, eu volutpat leo maximus vitae. Nulla a velit ut augue pretium fringilla. In hac habitasse platea dictumst. Sed vitae sodales purus. Cras ultrices condimentum lectus, nec laoreet sapien tempus vel. Duis pretium ante purus, et faucibus turpis pellentesque eget. Curabitur ac blandit dolor. Maecenas facilisis eleifend massa ac commodo. Integer justo felis, finibus at faucibus eget, pulvinar a odio. Suspendisse potenti. Curabitur auctor tristique arcu et dapibus. Praesent risus metus, ultricies ac ante interdum, fringilla finibus est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed nec varius enim. Aenean vitae ipsum pretium, elementum sapien at, tristique lacus. Nec laoreet sapien tempus vel. Duis pretium ante purus, et faucibus turpis pellentesque eget. Curabitur ac blandit dolor. Maecenas facilisis eleifend massa ac commodo.Donec at ullamcorper lectus, quis fringilla velit. Aliquam ipsum dui, porttitor id hendrerit nec, mollis ut odio.</p>
                                            </section>
                                        </section>
                                    </div>
                                </div>
                                <div class='grid-row clearfix margin-top-none'>
                                    <div class='grid-col grid-col-4'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <ul>
                                                    <li><span style=\"text-decoration: underline;\">Donec placerat lectus eu elit lobortis</span></li>
                                                    <li><span style=\"text-decoration: underline;\">Mauris vestibulum dui metus, quis</span></li>
                                                    <li><span style=\"text-decoration: underline;\">Fringilla libero gonec eget fusce</span></li>
                                                </ul>
                                            </section>
                                        </section>
                                    </div>
                                    <div class='grid-col grid-col-4'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <ul>
                                                    <li><span style=\"text-decoration: underline;\">Donec placerat lectus eu elit lobortis</span></li>
                                                    <li><span style=\"text-decoration: underline;\">Mauris vestibulum dui metus, quis</span></li>
                                                    <li><span style=\"text-decoration: underline;\">Fringilla libero gonec eget fusce</span></li>
                                                </ul>
                                            </section>
                                        </section>
                                    </div>
                                    <div class='grid-col grid-col-4'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <ul>
                                                    <li><span style=\"text-decoration: underline;\">Donec placerat lectus eu elit lobortis</span></li>
                                                    <li><span style=\"text-decoration: underline;\">Mauris vestibulum dui metus, quis</span></li>
                                                    <li><span style=\"text-decoration: underline;\">Fringilla libero gonec eget fusce</span></li>
                                                </ul>
                                            </section>
                                        </section>
                                    </div>
                                </div>
                                <div class='grid-row clearfix margin-top-none margin-bottom-none'>
                                    <div class='grid-col grid-col-12'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <hr />
                                                <p>&nbsp;</p>
                                            </section>
                                        </section>
                                    </div>
                                </div>
                                <div class='grid-row clearfix'>
                                    <div class='grid-col grid-col-4'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <div class='shortcode_carousel' data-carousel-column=\"1\">
                                                    <div class='carousel_header clearfix'>
                                                        <div class='widget-title'>Testimonials</div>
                                                    </div>
                                                    <div class='carousel_content'>
                                                        <ul>
                                                            <li>
                                                                <div class=\"testimonial clearfix\">
                                                                    <div>
                                                                        <img src='";
        // line 580
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/100x100-img-1.jpg"), "html", null, true);
        echo "' alt />
                                                                        <p>
                                                                            Mauris volutpat mi sed odio finibus commodo. Integer egestas eu elit vitae mattis.Curabitur auctorhe ndrerit nec. </p>
                                                                    </div>
                                                                    <div class=\"author\">
                                                                        Jane Doe </div>
                                                                </div>
                                                                <div class=\"testimonial clearfix\">
                                                                    <div>
                                                                        <img src='";
        // line 589
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/100x100-img-2.jpg"), "html", null, true);
        echo "' alt />
                                                                        <p>
                                                                            Maecenas facilisis eleifend massa ac commodo.Donec at ullamcorper lectus, quis fringilla velit. </p>
                                                                    </div>
                                                                    <div class=\"author\">
                                                                        Jane Doe </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"testimonial clearfix\">
                                                                    <div>
                                                                        <img src='";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/100x100-img-2.jpg"), "html", null, true);
        echo "' alt />
                                                                        <p>
                                                                            Maecenas facilisis eleifend massa ac commodo.Donec at ullamcorper lectus, quis fringilla velit.Aliquam ipsum dui. </p>
                                                                    </div>
                                                                    <div class=\"author\">
                                                                        Jane Doe </div>
                                                                </div>
                                                                <div class=\"testimonial clearfix\">
                                                                    <div>
                                                                        <img src='";
        // line 609
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/100x100-img-1.jpg"), "html", null, true);
        echo "' alt />
                                                                        <p>
                                                                            Mauris volutpat mi sed odio finibus commodo. Integer egestas eu elit vitae mattis.Curabitur auctor. </p>
                                                                    </div>
                                                                    <div class=\"author\">
                                                                        Jane Doe </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </section>
                                        </section>
                                    </div>
                                    <div class='grid-col grid-col-4'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <div class=\"recent_projects \">
                                                    <h3 class=\"section-title\">Mini Gallery</h3>
                                                    <div class=\"projects_carousel clearfix\" data-carousel-column=\"1\">
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"http://www.youtube.com/watch?v=HwXbtZXjbVE\" title=\"Project 5\"><img src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/347x347-img-2.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/HappyFeet_4th5.jpg"), "html", null, true);
        echo "\" title=\"Project 4\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/347x347-img-3.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/HappyFeet_3rd4.jpg"), "html", null, true);
        echo "\" title=\"Project 3\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/pic/347x347-img-1.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/ .projects-carousel -->
                                                </div>
                                                <!--/ .work-carousel-->
                                            </section>
                                        </section>
                                    </div>
                                    <div class='grid-col grid-col-4'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <div class=\"single_bar with_title\">
                                                    <div class=\"title\">Integer sollicitudin</div>
                                                    <div class=\"scale\">
                                                        <div class=\"progress\" data-value=\"89\" style=\"background-color:#ffdb5e;\"></div>
                                                    </div>
                                                </div>
                                                <div class=\"single_bar with_title\">
                                                    <div class=\"title\">Phasellus eleifend</div>
                                                    <div class=\"scale\">
                                                        <div class=\"progress\" data-value=\"69\" style=\"background-color:#f2a1b0;\"></div>
                                                    </div>
                                                </div>
                                                <div class=\"single_bar with_title\">
                                                    <div class=\"title\">Fusce in magna</div>
                                                    <div class=\"scale\">
                                                        <div class=\"progress\" data-value=\"42\" style=\"background-color:#3185cb;\"></div>
                                                    </div>
                                                </div>
                                                <div class=\"single_bar with_title\">
                                                    <div class=\"title\">Etiam a dignissim nisl</div>
                                                    <div class=\"scale\">
                                                        <div class=\"progress\" data-value=\"79\" style=\"background-color:#8ddd67;\"></div>
                                                    </div>
                                                </div>
                                                <div class=\"single_bar with_title\">
                                                    <div class=\"title\">Morbi nec purus</div>
                                                    <div class=\"scale\">
                                                        <div class=\"progress\" data-value=\"55\" style=\"background-color:#ff5c5c;\"></div>
                                                    </div>
                                                </div>
                                                <div class=\"single_bar with_title\">
                                                    <div class=\"title\">Hendrerit nec mollis</div>
                                                    <div class=\"scale\">
                                                        <div class=\"progress\" data-value=\"72\" style=\"background-color:#8fc0ea;\"></div>
                                                    </div>
                                                </div>
                                            </section>
                                        </section>
                                    </div>
                                </div>
                                <!-- comments block -->
                                <!-- //end comments block -->
                            </main>
                            <div class=\"kids_clear\"></div>
                        </div>
                        <!-- .entry-container -->
                    </div>
                </div>
                <!-- ***************** - END Image floating - *************** -->
            </section>
            <!-- .bottom_content_container -->
        </div>
        <div class=\"content_bottom_bg\"></div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  1129 => 646,  1117 => 639,  1107 => 632,  1081 => 609,  1069 => 600,  1055 => 589,  1043 => 580,  977 => 517,  936 => 481,  832 => 382,  815 => 370,  798 => 358,  781 => 346,  764 => 334,  747 => 322,  730 => 310,  696 => 279,  686 => 272,  676 => 265,  636 => 228,  621 => 216,  606 => 204,  590 => 191,  575 => 179,  559 => 165,  550 => 164,  530 => 896,  526 => 895,  522 => 894,  518 => 893,  514 => 892,  510 => 891,  506 => 890,  502 => 889,  498 => 888,  494 => 887,  489 => 885,  462 => 861,  456 => 858,  450 => 855,  443 => 851,  403 => 814,  399 => 813,  386 => 803,  382 => 802,  369 => 792,  365 => 791,  328 => 757,  324 => 756,  311 => 746,  307 => 745,  294 => 735,  290 => 734,  270 => 716,  268 => 164,  218 => 117,  200 => 102,  188 => 93,  162 => 70,  156 => 67,  150 => 64,  143 => 60,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if lte IE 8]><html class=\"ie8 no-js\" lang=\"en\"><![endif]-->
<!--[if IE 9]><html class=\"ie9 no-js\" lang=\"en\"><![endif]-->
<html class=\"no-ie\">


<!-- Mirrored from html.cwsthemes.com/happykids/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jan 2020 21:23:24 GMT -->
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>HappyKids</title>
    <link rel=\"alternate\" type=\"application/rss+xml\" title=\"HappyKids\" href=\"#\" />
    <link rel=\"shortcut icon\" href=\"{{ asset ('templates/images/favicon.png') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('templates/css/font-awesome.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('templates/css/styles.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('templates/css/maps.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('templates/css/woocommerce.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('templates/css/flexnav.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('templates/css/prettyPhoto.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('templates/tuner/css/colorpicker.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('templates/tuner/css/styles.csss') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('templates/revslider/styles.css') }}\" />
    <script type='text/javascript' src='{{ asset ('templates/js/jquery.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset ('templates/tuner/js/colorpicker.js') }}'></script>
    <script type='text/javascript' src='{{ asset ('templates/tuner/js/scripts.js') }}'></script>
    <script type=\"text/javascript\" src=\"{{ asset ('templates/revslider/jquery.themepunch.revolution.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('templates/revslider/jquery.themepunch.tools.min.js') }}\"></script>
</head>



<body data-type-of-widget=\"2\" class=\"home page kids-front-page t-pattern-1\">
<!-- HEADER BEGIN -->
<div class=\"top-panel\">
    <div class=\"l-page-width clearfix\">
        <div class=\"wrapper\">
            <div class=\"widget widget_cws_tweets\">
                <div class='cws-widget-content '>
                    <div class=\"latest_tweets \">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ .top-panel-->
<div class=\"kids-bg-level-1\">
    <div class=\"bg-level-1\"></div>
    <header id=\"kids_header\">
        <div class=\"l-page-width clearfix\">
            <ul class=\"kids_social\">
                <li class=\"openbtn\">
                    <a href=\"#\"></a>
                </li>
                <li class='lang_bar'>
                    <div id=\"lang_sel\">
                        <ul>
                            <li>
                                <a href=\"#\" class=\"lang_sel_sel icl-en\"><img class=\"iclflag\" src=\"{{ asset ('templates/images/en.png') }}\" alt=\"en\" title=\"English\" /> &nbsp;
                                </a>
                                <ul>
                                    <li class=\"icl-fr\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"{{ asset ('templates/images/fr.png') }}\" alt=\"fr\" title=\"Français\" />&nbsp;</a>
                                    </li>
                                    <li class=\"icl-de\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"{{ asset ('templates/images/de.png') }}\" alt=\"de\" title=\"Deutsch\" />&nbsp;</a>
                                    </li>
                                    <li class=\"icl-it\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"{{ asset ('templates/images/it.png') }}\" alt=\"it\" title=\"Italiano\" />&nbsp;</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href=\"https://plus.google.com/115553712051048113965\" title=\"Google Plus\" target=\"_blank\"><i class=\"fa fa-google-plus fa-2x\"></i></a><span style=\"background-color:#dd4b39;\"></span></li>
                <li><a href=\"https://www.facebook.com/CreaWS\" title=\"Facebook\" target=\"_blank\"><i class=\"fa fa-facebook fa-2x\"></i></a><span style=\"background-color:#3b5998;\"></span></li>
                <li><a href=\"https://www.youtube.com/user/cwsvideotuts\" title=\"Youtube\" target=\"_blank\"><i class=\"fa fa-youtube-play fa-2x\"></i></a><span style=\"background-color:#b31217;\"></span></li>
                <li><a href=\"https://twitter.com/Creative_WS\" title=\"Twitter\" target=\"_blank\"><i class=\"fa fa-twitter fa-2x\"></i></a><span style=\"background-color:#4099ff;\"></span></li>
                <li class=\"search\">
                    <a href=\"#\" title=\"Search\"></a><span></span></li>
                <li>
                    <form role=\"search\" id=\"search-form\" method=\"get\" action=\"#\">
                        <input type=\"text\" value=\"\" name=\"s\" id=\"s\" />
                        <input class=\"button medium button-style1\" type=\"submit\" id=\"search-submit\" value=\"Search\" />
                    </form>
                </li>
            </ul>
            <!-- .kids_social -->
            <div class=\"kids_clear\"></div>
            <div id=\"kids_logo_block\" class=\"logo-position-left\">
                <a id=\"kids_logo_text\" href=\"\"><img src=\"{{ asset ('templates/images/logo.png') }}\" alt=\"HappyKids\" title=\"HappyKids\" /></a>
            </div>
            <nav id=\"kids_main_nav\" class=\"menu-position-right\">
                <div class=\"menu-button\">
                    <span class=\"menu-button-line\"></span>
                    <span class=\"menu-button-line\"></span>
                    <span class=\"menu-button-line\"></span>
                </div>
                <ul id=\"menu-main\" class=\"clearfix flexnav \" data-breakpoint=\"800\">
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item\"><a href=\"{{ path('index') }}\">Home</a></li>
                    <li class=\"menu-item menu-item-has-children\"><a href=\"\">Features</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item\"><a href=\"\">Template Features</a></li>
                            <li class=\"menu-item menu-item-has-children\"><a href=\"\">Content Elements</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item\"><a href=\"\">Grids Showcase</a></li>
                                    <li class=\"menu-item\"><a href=\"\">Content Elements</a></li>
                                    <li class=\"menu-item\"><a href=\"\">Video</a></li>
                                    <li class=\"menu-item\"><a href=\"\">Text and Headings</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item\"><a href=\"\">Pricing Tables</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item menu-item-has-children\"><a href=\" {{ path('connect') }}\">Connexion</a>
                    </li>
                    <li class=\"menu-itemmenu-item-has-children\"><a href=\"\">Portfolio</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item-has-children\"><a href=\"#\">Columns</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item\"><a href=\"\">Portfolio 1 Column</a></li>
                                    <li class=\"menu-item\"><a href=\"\">Portfolio 2 Columns</a></li>
                                    <li class=\"menu-item\"><a href=\"\">Portfolio 3 Columns</a></li>
                                    <li class=\"menu-item\"><a href=\"\">Portfolio 4 Columns</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item\"><a href=\"\">Full-width page</a></li>
                            <li class=\"menu-item\"><a href=\"\">Right Sidebar</a></li>
                            <li class=\"menu-item\"><a href=\"\">Left Sidebar</a></li>
                            <li class=\"menu-item\"><a href=\"\">Double Sidebars</a></li>
                            <li class=\"menu-item\"><a href=\"\">Gallery</a></li>
                            <li class=\"menu-item\"><a href=\"\">Gallery + Sidebar</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children\"><a href=\"#\">Blog</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item\"><a href=\"\">Right Sidebar</a></li>
                            <li class=\"menu-item\"><a href=\"\">Left Sidebar</a></li>
                            <li class=\"menu-item\"><a href=\"\">DoubleSidebars</a></li>
                            <li class=\"menu-item\"><a href=\"\">Full Width</a></li>

                        </ul>
                    </li>
                    <li class=\"menu-item menu-item-has-children\"><a href=\"\">Shop</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item\"><a href=\"\">Woo Shortcodes</a></li>
                            <li class=\"menu-item\"><a href=\"\">Cart</a></li>

                            <li class=\"menu-item\"><a href=\"\">Checkout</a></li>
                            <li class=\"menu-item\"><a href=\"\">My Account</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item\"><a href=\"\">Contact</a></li>
                </ul>
            </nav>
            <!-- #kids_main_nav -->
        </div>
        <!--/ .l-page-width-->
    </header>
    <!--/ #kids_header-->
    <!-- HEADER END -->
    {% block content %}
    <div class=\"bg-level-2-page-width-container \">
        <div class=\"bg-level-2 first-part\" id=\"bg-level-2\"></div>
        <div class=\"l-page-width\">
            <div class=\"kids_slider_bg img_slider\">
                <div class=\"kids_slider_wrapper\">
                    <div class=\"kids_slider_inner_wrapper\">
                        <div class=\"img-slider\">
                            <div id=\"rev_slider_1_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\">
                                <!-- START REVOLUTION SLIDER 4.6.5 fullwidth mode -->
                                <div id=\"rev_slider_1_1\" class=\"rev_slider fullwidthabanner\">
                                    <ul>
                                        <!-- SLIDE  -->
                                        <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                            <!-- MAIN IMAGE -->
                                            <img src=\"{{ asset ('templates/pic/slide-17.jpg') }}\" alt=\"slide-17\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class=\"tp-caption kids-slider-header customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"300\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"2\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">Responsive Design
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class=\"tp-caption kids-slider-header-alt customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"357\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"2\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">All pages look identically great regardless of the device’s resolution and display size.
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                            <!-- MAIN IMAGE -->
                                            <img src=\"{{ asset ('templates/pic/slide-5.jpg') }}\" alt=\"slide-5\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class=\"tp-caption kids-slider-header customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"300\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">Easy Color Management
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class=\"tp-caption kids-slider-header-alt customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"357\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"4\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">With the help of our customization panel
                                                you can easily select any color and preview the results.
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                            <!-- MAIN IMAGE -->
                                            <img src=\"{{ asset ('templates/pic/slide-47.jpg') }}\" alt=\"slide-47\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class=\"tp-caption kids-slider-header customin tp-resizeme\" data-x=\"7\" data-y=\"300\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">Shop pages included
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class=\"tp-caption kids-slider-header-alt customin tp-resizeme\" data-x=\"7\" data-y=\"357\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"2\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">HappyKids includes all the needed page templates, widgets, cart and other shop-related content to represent your online store.
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                            <!-- MAIN IMAGE -->
                                            <img src=\"{{ asset ('templates/pic/slide-27.jpg') }}\" alt=\"slide-27\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class=\"tp-caption kids-slider-header customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"300\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">Slider Revolution Inside
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class=\"tp-caption kids-slider-header-alt customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"357\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"4\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">A very powerful image slier is bundled into this template. Create your slides and enjoy the result.
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                            <!-- MAIN IMAGE -->
                                            <img src=\"{{ asset ('templates/pic/slide-37.jpg') }}\" alt=\"slide-37\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class=\"tp-caption kids-slider-header customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"300\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">Lifetime Support
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class=\"tp-caption kids-slider-header-alt customin fadeout tp-resizeme\" data-x=\"7\" data-y=\"357\" data-customin=\"x:-90;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"600\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"2\" data-endelementdelay=\"0.1\" data-endspeed=\"300\">We support our products as long as they are being sold. Be sure to get a fast, proffessional and reliable support from our staff.
                                            </div>
                                        </li>
                                    </ul>
                                    <div class=\"tp-bannertimer tp-bottom\"></div>
                                </div>
                            </div>
                            <!-- END REVOLUTION SLIDER -->
                        </div>
                        <!--/ #kids-slider-->
                    </div>
                    <!--/ .kids_slider_inner_wrapper-->
                </div>
                <!--/ .kids_slider_wrapper-->
            </div>
            <!--/ .kids_slider_bg-->
        </div>
        <!-- .l-page-width -->
        <div class=\"bg-level-2 second-part\" id=\"bg-level-2\"></div>
    </div>
</div>
</div>
<!-- .bg-level-1 -->
<div id=\"kids_middle_container\">
    <!-- .content -->
    <div class=\"kids_top_content\">
        <div class=\"kids_top_content_middle homepage\">
            <div class=\"l-page-width\">
                <section class=\"kids_posts_container clearfix\">
                    <div class=\"widget_wrapper\">
                        <div id=\"cws_benefits-5\" class=\"widget widget_cws_benefits\">
                            <div class=\"widget-icon pic\"><img src=\"{{ asset ('templates/images/icon-2.png') }}\" alt /></div>
                            <div class=\"cws-widget-content benefits_widget\">
                                <h3 class=\"widget-title\">Playground</h3>
                                <section class=\"text_part\">Ut wisi enim ad minim veniam, quis nostrud exerci tation corper suscipit lobortis nisl ut aliqup.</section>
                                <a href='' class='cws_button '>More</a> </div>
                        </div>
                        <div id=\"cws_benefits-2\" class=\"widget widget_cws_benefits\">
                            <div class=\"widget-icon pic\"><img src=\"{{ asset ('templates/images/icon-1.png') }}\" alt /></div>
                            <div class=\"cws-widget-content benefits_widget\">
                                <h3 class=\"widget-title\">Entertainment</h3>
                                <section class=\"text_part\">Lorem ipsum dolor sit consectetur adipiscing elit. Sed venenatis mollis lac us a egestas.</section>
                                <a href='' class='cws_button '>More</a> </div>
                        </div>
                        <div id=\"cws_benefits-3\" class=\"widget widget_cws_benefits\">
                            <div class=\"widget-icon pic\"><img src=\"{{ asset ('templates/images/icon-3.png') }}\" alt /></div>
                            <div class=\"cws-widget-content benefits_widget\">
                                <h3 class=\"widget-title\">Environment</h3>
                                <section class=\"text_part\">Ut wisi enim ad minim veniam, quis nostrud exerci tation corper suscipit lobortis nisl.</section>
                                <a href='#' class='cws_button '>More</a> </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class=\"bottom-border\"></div>
        </div>
        <!-- .kids_top_content_middle -->
    </div>
    <div class=\"bg-level-2-full-width-container kids_bottom_content\">
        <div class=\"bg-level-2-page-width-container no-padding\">
            <section class=\"kids_bottom_content_container\">
                <!-- ***************** - START Image floating - *************** -->
                <div class=\"page-content\">
                    <div class=\"container l-page-width\">
                        <div class=\"entry-container \">
                            <main>
                                <div class='grid-row clearfix'>
                                    <div class='grid-col grid-col-12'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <div class=\"recent_projects \">
                                                    <h3 class=\"section-title\">Recent Projects</h3>
                                                    <div class=\"projects_carousel clearfix\" data-carousel-column=\"4\">
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"{{ asset ('templates/pic/250x250-kos-1%402x.jpg') }}\" title=\"Project 1\"><img src=\"{{ asset ('templates/pic/250x250-kos-1.jpg') }}\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                            <div class=\"gallery-text\">
                                                                <div class=\"title\">Project 1</div>
                                                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer </p>
                                                            </div>
                                                            <div><a href=\"#\" class=\"cws_button\">View Project</a></div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"{{ asset ('templates/pic/250x250-kos-2%402x.jpg') }}\" title=\"Project 2\"><img src=\"{{ asset ('templates/pic/250x250-kos-2.jpg') }}\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                            <div class=\"gallery-text\">
                                                                <div class=\"title\">Project 2</div>
                                                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer </p>
                                                            </div>
                                                            <div><a href=\"#\" class=\"cws_button\">View Project</a></div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"{{ asset ('templates/pic/250x250-kos-3%402x.jpg') }}\" title=\"Project 3\"><img src=\"{{ asset ('templates/pic/250x250-kos-3.jpg') }}\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                            <div class=\"gallery-text\">
                                                                <div class=\"title\">Project 3</div>
                                                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer </p>
                                                            </div>
                                                            <div><a href=\"#\" class=\"cws_button\">View Project</a></div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"{{ asset ('templates/pic/250x250-kos-4%402x.jpg') }}\" title=\"Project 4\"><img src=\"{{ asset ('templates/pic/250x250-kos-4.jpg') }}\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                            <div class=\"gallery-text\">
                                                                <div class=\"title\">Project 4</div>
                                                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer </p>
                                                            </div>
                                                            <div><a href=\"#\" class=\"cws_button\">View Project</a></div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"{{ asset ('templates/pic/250x250-kos-6%402x.jpg') }}\" title=\"Project 5\"><img src=\"{{ asset ('templates/pic/250x250-kos-6.jpg') }}\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                            <div class=\"gallery-text\">
                                                                <div class=\"title\">Project 5</div>
                                                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer </p>
                                                            </div>
                                                            <div><a href=\"#\" class=\"cws_button\">View Project</a></div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"{{ asset ('templates/pic/250x250-kos-5%402x.jpg') }}\" title=\"Project 6\"><img src=\"{{ asset ('templates/pic/250x250-kos-5.jpg') }}\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                            <div class=\"gallery-text\">
                                                                <div class=\"title\">Project 6</div>
                                                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer </p>
                                                            </div>
                                                            <div><a href=\"#\" class=\"cws_button\">View Project</a></div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"{{ asset ('templates/pic/250x250-kos-7%402x.html') }}\" title=\"Project 7\"><img src=\"{{ asset ('templates/pic/250x250-kos-7.jpg') }}\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                            <div class=\"gallery-text\">
                                                                <div class=\"title\">Project 7</div>
                                                                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer </p>
                                                            </div>
                                                            <div><a href=\"#\" class=\"cws_button\">View Project</a></div>
                                                        </div>
                                                    </div>
                                                    <!--/ .projects-carousel -->
                                                </div>
                                                <!--/ .work-carousel-->
                                                <hr />
                                                <p>&nbsp;</p>
                                            </section>
                                        </section>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <div class=\"recent_projects \">
                                                    <h3 class=\"section-title\">Recent Posts</h3>
                                                    <div class=\"projects_carousel blog clearfix\" data-carousel-column=\"2\">
                                                        <div class=\"iso-item\">
                                                            <article class=\"post-item\">
                                                                <div class=\"post-meta\">
                                                                    <div class=\"post-date\">
                                                                        <span class=\"day\"> 3</span>
                                                                        <span class=\"month\">Jan.2015</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"post-entry\">
                                                                    <div class=\"content-wrapper alignleft\">
                                                                        <figure>
                                                                            <a data-rel=\"prettyPhoto[lt_posts]\" class=\"prettyPhoto kids_picture\" title=\"Image Post\" href=\"pic/HappyFeet_1st4.jpg\"><img class=\"pic\" src=\"pic/185x185-img-1.jpg\" alt=\"\" /></a>
                                                                        </figure>
                                                                    </div>
                                                                    <div class=\"entry\">
                                                                        <div class=\"post-title\">
                                                                            <a href=\"#\">Image Post</a>
                                                                        </div>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magn aliquam erat volutpat. Ut wisi enim ad minim veniam ...</div>
                                                                </div>
                                                                <div class=\"post-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"l-float-right\"><a href=\"#\" class=\"more-link cws_button\">
\t\t\t\t\tRead more</a></span>
                                                                    <div class=\"post_cats\">
                                                                        <p><span>Category:</span><a class=\"link\" href=\"#\" title=\"View all posts in\">Image</a></p>
                                                                    </div>
                                                                    <div class=\"post_tags\">
                                                                        <p><span>Tags:</span>
                                                                            <a href=\"#\" \" title=\"Tag \"\" class=\"link\">Blog</a></p>
                                                                    </div>
                                                                    <div class=\"kids_clear\"></div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <article class=\"post-item\">
                                                                <div class=\"post-meta\">
                                                                    <div class=\"post-date\">
                                                                        <span class=\"day\"> 2</span>
                                                                        <span class=\"month\">Jan.2015</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"post-entry\">
                                                                    <div class=\"content-wrapper alignleft\">
                                                                        <figure>
                                                                            <a data-rel=\"prettyPhoto[lt_posts]\" class=\"prettyPhoto kids_picture\" title=\"Image Post\" href=\"pic/LegoMovie_3rd4.jpg\"><img class=\"pic\" src=\"pic/185x185-img-2.jpg\" alt=\"\" /></a>
                                                                        </figure>
                                                                    </div>
                                                                    <div class=\"entry\">
                                                                        <div class=\"post-title\">
                                                                            <a href=\"#\">Image Post</a>
                                                                        </div>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magn aliquam erat volutpat. Ut wisi enim ad minim veniam ...</div>
                                                                </div>
                                                                <div class=\"post-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"l-float-right\"><a href=\"#\" class=\"more-link cws_button\">
\t\t\t\t\tRead more</a></span>
                                                                    <div class=\"post_cats\">
                                                                        <p><span>Category:</span><a class=\"link\" href=\"#\" title=\"View all posts in\">Image</a></p>
                                                                    </div>
                                                                    <div class=\"post_tags\">
                                                                        <p><span>Tags:</span>
                                                                            <a href=\"#\" \" title=\"Tag \"\" class=\"link\">Blog</a></p>
                                                                    </div>
                                                                    <div class=\"kids_clear\"></div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <article class=\"post-item\">
                                                                <div class=\"post-meta\">
                                                                    <div class=\"post-date\">
                                                                        <span class=\"day\"> 1</span>
                                                                        <span class=\"month\">Jan.2015</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"post-entry\">
                                                                    <div class=\"content-wrapper alignleft\">
                                                                        <figure>
                                                                            <a data-rel=\"prettyPhoto[lt_posts]\" class=\"prettyPhoto kids_picture\" title=\"Video blog post\" href=\"{{ asset ('templates/pic/Tangled_3rd5.jpg') }}\"><img class=\"pic\" src=\"{{ asset ('templates/pic/185x185-img-3.jpg') }}\" alt=\"\" /></a>
                                                                        </figure>
                                                                    </div>
                                                                    <div class=\"entry\">
                                                                        <div class=\"post-title\">
                                                                            <a href=\"#\">Video blog post</a>
                                                                        </div>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magn aliquam erat volutpat. Ut wisi enim ad minim veniam ...</div>
                                                                </div>
                                                                <div class=\"post-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"l-float-right\"><a href=\"#\" class=\"more-link cws_button\">
\t\t\t\t\tRead more</a></span>
                                                                    <div class=\"post_cats\">
                                                                        <p><span>Category:</span><a class=\"link\" href=\"#\" title=\"View all posts in\">Image</a>, <a class=\"link\" href=\"#\" title=\"View all posts in\">test</a>, <a class=\"link\" href=\"#\" title=\"View all posts in\">Video</a></p>
                                                                    </div>
                                                                    <div class=\"post_tags\">
                                                                        <p><span>Tags:</span>
                                                                            <a href=\"#\" \" title=\"Tag \"\" class=\"link\">Blog</a>, <a href=\"#\" \" title=\"Tag \"\" class=\"link\">Post</a></p>
                                                                    </div>
                                                                    <div class=\"kids_clear\"></div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <!--/ .projects-carousel -->
                                                </div>
                                                <!--/ .work-carousel-->
                                                <hr />
                                            </section>
                                        </section>
                                    </div>
                                </div>
                                <div class='grid-row clearfix'>
                                    <div class='grid-col grid-col-12'>
                                        <section class='cws-widget'>
                                            <div class='widget-title'>About Happy Kids</div>
                                            <section class='cws_widget_content'>
                                                <p><img class=\"alignleft border size-thumbnail\" src=\"{{ asset ('templates/pic/150x150-img-1.png') }}\" alt=\"content_img_1\" width=\"150\" height=\"150\" />In ac sollicitudin sem. Proin congue blandit eros, eu volutpat leo maximus vitae. Nulla a velit ut augue pretium fringilla. In hac habitasse platea dictumst. Sed vitae sodales purus. Cras ultrices condimentum lectus, nec laoreet sapien tempus vel. Duis pretium ante purus, et faucibus turpis pellentesque eget. Curabitur ac blandit dolor. Maecenas facilisis eleifend massa ac commodo. Integer justo felis, finibus at faucibus eget, pulvinar a odio. Suspendisse potenti. Curabitur auctor tristique arcu et dapibus. Praesent risus metus, ultricies ac ante interdum, fringilla finibus est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed nec varius enim. Aenean vitae ipsum pretium, elementum sapien at, tristique lacus. Nec laoreet sapien tempus vel. Duis pretium ante purus, et faucibus turpis pellentesque eget. Curabitur ac blandit dolor. Maecenas facilisis eleifend massa ac commodo.Donec at ullamcorper lectus, quis fringilla velit. Aliquam ipsum dui, porttitor id hendrerit nec, mollis ut odio.</p>
                                            </section>
                                        </section>
                                    </div>
                                </div>
                                <div class='grid-row clearfix margin-top-none'>
                                    <div class='grid-col grid-col-4'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <ul>
                                                    <li><span style=\"text-decoration: underline;\">Donec placerat lectus eu elit lobortis</span></li>
                                                    <li><span style=\"text-decoration: underline;\">Mauris vestibulum dui metus, quis</span></li>
                                                    <li><span style=\"text-decoration: underline;\">Fringilla libero gonec eget fusce</span></li>
                                                </ul>
                                            </section>
                                        </section>
                                    </div>
                                    <div class='grid-col grid-col-4'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <ul>
                                                    <li><span style=\"text-decoration: underline;\">Donec placerat lectus eu elit lobortis</span></li>
                                                    <li><span style=\"text-decoration: underline;\">Mauris vestibulum dui metus, quis</span></li>
                                                    <li><span style=\"text-decoration: underline;\">Fringilla libero gonec eget fusce</span></li>
                                                </ul>
                                            </section>
                                        </section>
                                    </div>
                                    <div class='grid-col grid-col-4'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <ul>
                                                    <li><span style=\"text-decoration: underline;\">Donec placerat lectus eu elit lobortis</span></li>
                                                    <li><span style=\"text-decoration: underline;\">Mauris vestibulum dui metus, quis</span></li>
                                                    <li><span style=\"text-decoration: underline;\">Fringilla libero gonec eget fusce</span></li>
                                                </ul>
                                            </section>
                                        </section>
                                    </div>
                                </div>
                                <div class='grid-row clearfix margin-top-none margin-bottom-none'>
                                    <div class='grid-col grid-col-12'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <hr />
                                                <p>&nbsp;</p>
                                            </section>
                                        </section>
                                    </div>
                                </div>
                                <div class='grid-row clearfix'>
                                    <div class='grid-col grid-col-4'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <div class='shortcode_carousel' data-carousel-column=\"1\">
                                                    <div class='carousel_header clearfix'>
                                                        <div class='widget-title'>Testimonials</div>
                                                    </div>
                                                    <div class='carousel_content'>
                                                        <ul>
                                                            <li>
                                                                <div class=\"testimonial clearfix\">
                                                                    <div>
                                                                        <img src='{{ asset ('templates/pic/100x100-img-1.jpg') }}' alt />
                                                                        <p>
                                                                            Mauris volutpat mi sed odio finibus commodo. Integer egestas eu elit vitae mattis.Curabitur auctorhe ndrerit nec. </p>
                                                                    </div>
                                                                    <div class=\"author\">
                                                                        Jane Doe </div>
                                                                </div>
                                                                <div class=\"testimonial clearfix\">
                                                                    <div>
                                                                        <img src='{{ asset ('templates/pic/100x100-img-2.jpg') }}' alt />
                                                                        <p>
                                                                            Maecenas facilisis eleifend massa ac commodo.Donec at ullamcorper lectus, quis fringilla velit. </p>
                                                                    </div>
                                                                    <div class=\"author\">
                                                                        Jane Doe </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"testimonial clearfix\">
                                                                    <div>
                                                                        <img src='{{ asset ('templates/pic/100x100-img-2.jpg') }}' alt />
                                                                        <p>
                                                                            Maecenas facilisis eleifend massa ac commodo.Donec at ullamcorper lectus, quis fringilla velit.Aliquam ipsum dui. </p>
                                                                    </div>
                                                                    <div class=\"author\">
                                                                        Jane Doe </div>
                                                                </div>
                                                                <div class=\"testimonial clearfix\">
                                                                    <div>
                                                                        <img src='{{ asset ('templates/pic/100x100-img-1.jpg') }}' alt />
                                                                        <p>
                                                                            Mauris volutpat mi sed odio finibus commodo. Integer egestas eu elit vitae mattis.Curabitur auctor. </p>
                                                                    </div>
                                                                    <div class=\"author\">
                                                                        Jane Doe </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </section>
                                        </section>
                                    </div>
                                    <div class='grid-col grid-col-4'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <div class=\"recent_projects \">
                                                    <h3 class=\"section-title\">Mini Gallery</h3>
                                                    <div class=\"projects_carousel clearfix\" data-carousel-column=\"1\">
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"http://www.youtube.com/watch?v=HwXbtZXjbVE\" title=\"Project 5\"><img src=\"{{ asset ('templates/pic/347x347-img-2.jpg') }}\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"{{ asset ('templates/pic/HappyFeet_4th5.jpg') }}\" title=\"Project 4\"><img src=\"{{ asset ('templates/pic/347x347-img-3.jpg') }}\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <div class=\"iso-item\">
                                                            <div class=\"content-wrapper\">
                                                                <figure>
                                                                    <a data-rel=\"prettyPhoto[rs_projects]\" class=\"prettyPhoto kids_picture\" href=\"{{ asset ('templates/pic/HappyFeet_3rd4.jpg') }}\" title=\"Project 3\"><img src=\"{{ asset ('templates/pic/347x347-img-1.jpg') }}\" alt=\"\" /> </a>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/ .projects-carousel -->
                                                </div>
                                                <!--/ .work-carousel-->
                                            </section>
                                        </section>
                                    </div>
                                    <div class='grid-col grid-col-4'>
                                        <section class='cws-widget'>
                                            <section class='cws_widget_content'>
                                                <div class=\"single_bar with_title\">
                                                    <div class=\"title\">Integer sollicitudin</div>
                                                    <div class=\"scale\">
                                                        <div class=\"progress\" data-value=\"89\" style=\"background-color:#ffdb5e;\"></div>
                                                    </div>
                                                </div>
                                                <div class=\"single_bar with_title\">
                                                    <div class=\"title\">Phasellus eleifend</div>
                                                    <div class=\"scale\">
                                                        <div class=\"progress\" data-value=\"69\" style=\"background-color:#f2a1b0;\"></div>
                                                    </div>
                                                </div>
                                                <div class=\"single_bar with_title\">
                                                    <div class=\"title\">Fusce in magna</div>
                                                    <div class=\"scale\">
                                                        <div class=\"progress\" data-value=\"42\" style=\"background-color:#3185cb;\"></div>
                                                    </div>
                                                </div>
                                                <div class=\"single_bar with_title\">
                                                    <div class=\"title\">Etiam a dignissim nisl</div>
                                                    <div class=\"scale\">
                                                        <div class=\"progress\" data-value=\"79\" style=\"background-color:#8ddd67;\"></div>
                                                    </div>
                                                </div>
                                                <div class=\"single_bar with_title\">
                                                    <div class=\"title\">Morbi nec purus</div>
                                                    <div class=\"scale\">
                                                        <div class=\"progress\" data-value=\"55\" style=\"background-color:#ff5c5c;\"></div>
                                                    </div>
                                                </div>
                                                <div class=\"single_bar with_title\">
                                                    <div class=\"title\">Hendrerit nec mollis</div>
                                                    <div class=\"scale\">
                                                        <div class=\"progress\" data-value=\"72\" style=\"background-color:#8fc0ea;\"></div>
                                                    </div>
                                                </div>
                                            </section>
                                        </section>
                                    </div>
                                </div>
                                <!-- comments block -->
                                <!-- //end comments block -->
                            </main>
                            <div class=\"kids_clear\"></div>
                        </div>
                        <!-- .entry-container -->
                    </div>
                </div>
                <!-- ***************** - END Image floating - *************** -->
            </section>
            <!-- .bottom_content_container -->
        </div>
        <div class=\"content_bottom_bg\"></div>
    </div>
</div>
{% endblock %}
<!-- .end_content -->
<!-- FOOTER BEGIN -->
<div class=\"kids_bottom_container footer\">
    <div class=\"l-page-width\">
        <div class=\"wrapper\">
            <div class=\"widget widget_text\">
                <div class=\"textwidget\">
                    <div class='shortcode_carousel' data-carousel-column=\"1\">
                        <div class='carousel_header clearfix'>
                            <div class='widget-title'>Gallery</div>
                        </div>
                        <div class='carousel_content'>
                            <!-- see gallery_shortcode() -->
                            <div id='ngallery-1' class='ngallery clearfix column-1'>
                                <dl class='gallery-item'>
                                    <dt class='gallery-icon '>
                                        <div class='content-wrapper'>
                                            <figure>
                                                <a href=\"{{ asset ('templates/pic/HappyFeet_1st4.jpg') }}\" data-rel=\"prettyPhoto[12135]\" class=\"prettyPhoto kids_picture\">
                                                    <img src=\"{{ asset ('templates/pic/300x300-img-4.jpg') }}\" alt=\"\" />
                                                </a>
                                            </figure>
                                        </div>
                                    </dt>
                                </dl>
                                <dl class='gallery-item'>
                                    <dt class='gallery-icon'>
                                        <div class='content-wrapper'>
                                            <figure>
                                                <a href=\"{{ asset ('templates/pic/Tangled_3rd5.jpg') }}\" data-rel=\"prettyPhoto[12135]\" class=\"prettyPhoto kids_picture\">
                                                    <img src=\"{{ asset ('templates/pic/300x300-img-12.jpg') }}\" alt=\"\" />
                                                </a>
                                            </figure>
                                        </div>
                                    </dt>
                                </dl>
                                <dl class='gallery-item'>
                                    <dt class='gallery-icon '>
                                        <div class='content-wrapper'>
                                            <figure>
                                                <a href=\"{{ asset ('templates/pic/LegoMovie_3rd4.jpg') }}\" data-rel=\"prettyPhoto[12135]\" class=\"prettyPhoto kids_picture\">
                                                    <img src=\"{{ asset ('templates/pic/300x300-img-9.jpg') }}\" alt=\"\" />
                                                </a>
                                            </figure>
                                        </div>
                                    </dt>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"widget widget_cws_tweets\">
                <div class=\"cws-widget-content\">
                    <!-- twitter header -->
                    <div class='carousel_header clearfix'>
                        <div class='widget_carousel_nav'>
                            <i class='prev fa fa-angle-left'></i>
                            <i class='next fa fa-angle-right'></i>
                        </div>
                        <h3 class=\"widget-title\">Twitter</h3>
                    </div>
                    <!-- / twitter header -->
                    <!-- twitter carousel -->
                    <div class=\"twitter-carousel carousel latest_tweets\"></div>
                    <!--/twitter carousel -->
                </div>
            </div>
            <div class=\"widget widget_cws_latest_posts\">
                <div class=\"latest-posts-widget\">
                    <h3 class=\"widget-title\">Latest Posts</h3>
                    <div class=\"widget-content\">
                        <ul>
                            <li>
                                <div class=\"kids_image_wrapper \">
                                    <a href=\"{{ asset ('templates/pic/HappyFeet_1st4.jpg') }}\" class=\"prettyPhoto kids_mini_picture\" data-rel=\"prettyPhoto[rpwt]\">
                                        <img src=\"{{ asset ('templates/pic/70x70-img-1.jpg') }}\" width=\"70\" height=\"70\" alt=\"\"></a>
                                </div>
                                <div class=\"kids_post_content\">
                                    <h4><a href=\"#\">Image Post</a></h4>
                                    <p>Lorem ipsum dolor ...</p>
                                    <p class=\"time-post\">January 3, 2015</p>
                                </div>
                            </li>
                            <li>
                                <div class=\"kids_image_wrapper \">
                                    <a href=\"{{ asset ('templates/pic/LegoMovie_3rd4.jpg') }}\" class=\"prettyPhoto kids_mini_picture\" data-rel=\"prettyPhoto[rpwt]\">
                                        <img src=\"{{ asset ('templates/pic/70x70-img-2.jpg') }}\" width=\"70\" height=\"70\" alt=\"\"></a>
                                </div>
                                <div class=\"kids_post_content\">
                                    <h4><a href=\"#\">Image Post</a></h4>
                                    <p>Lorem ipsum dolor ...</p>
                                    <p class=\"time-post\">January 2, 2015</p>
                                </div>
                            </li>
                            <li>
                                <div class=\"kids_image_wrapper \">
                                    <a href=\"{{ asset ('templates/pic/Tangled_3rd5.jpg') }}\" class=\"prettyPhoto kids_mini_picture\" data-rel=\"prettyPhoto[rpwt]\">
                                        <img src=\"{{ asset ('templates/pic/70x70-img-3.jpg') }}\" width=\"70\" height=\"70\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"kids_post_content\">
                                    <h4><a href=\"#\">Video blog post</a></h4>
                                    <p>Lorem ipsum dolor ...</p>
                                    <p class=\"time-post\">January 1, 2015</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"widget widget_calendar\">
                <h3 class=\"widget-title\">Calendar</h3>
                <div id=\"calendar_wrap\">

                </div>
            </div>
        </div>
        <!-- /wrapper -->
    </div>
    <!--/ l-page-width-->
</div>
<!-- .kids_bottom_container -->
<div class=\"kids-footer-copyrights footer\">
    <div class=\"l-page-width  clearfix\">
        <div class=\"wrapper\">
            <ul class=\"kids_social\">
                <li><a href=\"https://plus.google.com/115553712051048113965\" title=\"Google Plus\" target=\"_blank\"><i class=\"fa fa-google-plus fa-2x\"></i></a><span style=\"background-color:#dd4b39;\"></span></li>
                <li><a href=\"https://www.facebook.com/CreaWS\" title=\"Facebook\" target=\"_blank\"><i class=\"fa fa-facebook fa-2x\"></i></a><span style=\"background-color:#3b5998;\"></span></li>
                <li><a href=\"https://www.youtube.com/user/cwsvideotuts\" title=\"Youtube\" target=\"_blank\"><i class=\"fa fa-youtube-play fa-2x\"></i></a><span style=\"background-color:#b31217;\"></span></li>
                <li><a href=\"https://twitter.com/Creative_WS\" title=\"Twitter\" target=\"_blank\"><i class=\"fa fa-twitter fa-2x\"></i></a><span style=\"background-color:#4099ff;\"></span></li>
                <li class=\"lang_bar\">
                    <div id=\"lang_sel\">
                        <ul>
                            <li>
                                <a href=\"#\" class=\"lang_sel_sel icl-en\"><img class=\"iclflag\" src=\"{{ asset ('templates/images/en.png') }}\" alt=\"en\" title=\"English\" /> &nbsp;
                                </a>
                                <ul>
                                    <li class=\"icl-fr\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"{{ asset ('templates/images/fr.png') }}\" alt=\"fr\" title=\"Français\" />&nbsp;</a>
                                    </li>
                                    <li class=\"icl-de\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"{{ asset ('templates/images/de.png') }}\" alt=\"de\" title=\"Deutsch\" />&nbsp;</a>
                                    </li>
                                    <li class=\"icl-it\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"{{ asset ('templates/images/it.png') }}\" alt=\"it\" title=\"Italiano\" />&nbsp;</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class=\"widget widget_text\">
                <div class=\"textwidget\">Happy Kids</div>
            </div>
        </div>
    </div>
    <div class=\"dark-mask\"></div>
</div>


<style id='cws-cp-1'></style>
<style id='cws-cp-2'></style>
<style id='cws-cp-3'></style>
<style id='cws-cp-4'></style>
<style id='cws-cp-5'></style>
<!--/ tuner -->
<!--[if lt IE 9]>
<script src=\"{{ asset ('templates/js/selectivizr-and-extra-selectors.min.js') }}\"></script>
<![endif]-->
<script type=\"text/javascript\" src='{{ asset ('templates/js/jquery-ui.min.js') }}'></script>
<script type='text/javascript' src='{{ asset ('templates/js/scripts.js') }}'></script>
<script type='text/javascript' src='{{ asset ('templates/js/retina.min.js') }}'></script>
<script type='text/javascript' src='{{ asset ('templates/js/jquery.tweet.js') }}'></script>
<script type='text/javascript' src='{{ asset ('templates/js/jquery.lavalamp-1.4.min.js') }}'></script>
<script type='text/javascript' src='{{ asset ('templates/js/jquery.easing-1.3.min.js') }}'></script>
<script type='text/javascript' src='{{ asset ('templates/js/owl.carousel.js') }}'></script>
<script type='text/javascript' src='{{ asset ('templates/js/jquery.prettyPhoto.js') }}'></script>
<script type='text/javascript' src='{{ asset ('templates/js/jquery.isotope.min.js') }}'></script>
<script type='text/javascript' src='{{ asset ('templates/js/jquery.flexnav.min.js') }}'></script>



</body>


<!-- Mirrored from html.cwsthemes.com/happykids/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jan 2020 21:28:00 GMT -->
</html>
", "base.html.twig", "F:\\wamp64\\www\\pitest\\app\\Resources\\views\\base.html.twig");
    }
}
