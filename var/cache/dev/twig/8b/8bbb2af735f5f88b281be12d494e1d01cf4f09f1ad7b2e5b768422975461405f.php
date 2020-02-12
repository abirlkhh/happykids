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

/* @Home/Login/login.html.twig */
class __TwigTemplate_5925f8e8ce805e26a4be753ac17eb542774f3b878ebda0798041ac8e0d389f62 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/Login/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/Login/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Home/Login/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <!-- .bg-level-1 -->
    <div id=\"kids_middle_container\">
        <!-- .content -->
        <div class=\"kids_top_content\">
            <div class=\"kids_top_content_middle \">
                <div class=\"header_container \">
                    <div class=\"l-page-width\">
                        <h1>My Account</h1>
                        <ul id=\"breadcrumbs\">
                            <li><a href=\"\" title=\"Home\">Home</a></li> <span class=\"delimiter\">&gt;</span>
                            <li><span class=\"current_crumb\">My Account</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- .kids_top_content_middle -->
        </div>
        <div class=\"bg-level-2-full-width-container kids_bottom_content\">
            <div class=\"bg-level-2-page-width-container no-padding\">
                <section class=\"kids_bottom_content_container\">
                    <!-- ***************** - START Image floating - *************** -->
                    <div class=\"page-content\">
                        <div class=\"bg-level-2 first-part\"></div>
                        <div class=\"container l-page-width\">
                            <div class=\"entry-container single-sidebar\">
                                <main>
                                    <div class=\"woocommerce\">
                                        <h2>Login</h2>
                                        <form method=\"post\" class=\"login\">
                                            <p class=\"form-row form-row-wide\">
                                                <label for=\"username\">Username or email address <span class=\"required\">*</span></label>
                                                <input type=\"text\" class=\"input-text\" name=\"username\" id=\"username\" value=\"\" />
                                            </p>
                                            <p class=\"form-row form-row-wide\">
                                                <label for=\"password\">Password <span class=\"required\">*</span></label>
                                                <input class=\"input-text\" type=\"password\" name=\"password\" id=\"password\" />
                                            </p>
                                            <p class=\"form-row\">
                                                <input type=\"hidden\" id=\"_wpnonce\" name=\"_wpnonce\" value=\"23ec89b8f6\" />
                                                <input type=\"hidden\" name=\"_wp_http_referer\" value=\"/?page_id=1587\" />
                                                <input type=\"submit\" class=\"button\" name=\"login\" value=\"Login\" />
                                                <label for=\"rememberme\" class=\"inline\">
                                                    <input name=\"rememberme\" type=\"checkbox\" id=\"rememberme\" value=\"forever\" /> Remember me </label>
                                            </p>
                                            <p class=\"lost_password\">
                                                <a href=\"\">Lost your password?</a>
                                            </p>
                                        </form>
                                    </div>
                                    <!-- comments block -->
                                    <!-- //end comments block -->
                                </main>

                                <div class=\"kids_clear\"></div>
                            </div>
                            <!-- .entry-container -->
                        </div>
                        <div class=\"bg-level-2 second-part\"></div>
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
        return "@Home/Login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}
    <!-- .bg-level-1 -->
    <div id=\"kids_middle_container\">
        <!-- .content -->
        <div class=\"kids_top_content\">
            <div class=\"kids_top_content_middle \">
                <div class=\"header_container \">
                    <div class=\"l-page-width\">
                        <h1>My Account</h1>
                        <ul id=\"breadcrumbs\">
                            <li><a href=\"\" title=\"Home\">Home</a></li> <span class=\"delimiter\">&gt;</span>
                            <li><span class=\"current_crumb\">My Account</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- .kids_top_content_middle -->
        </div>
        <div class=\"bg-level-2-full-width-container kids_bottom_content\">
            <div class=\"bg-level-2-page-width-container no-padding\">
                <section class=\"kids_bottom_content_container\">
                    <!-- ***************** - START Image floating - *************** -->
                    <div class=\"page-content\">
                        <div class=\"bg-level-2 first-part\"></div>
                        <div class=\"container l-page-width\">
                            <div class=\"entry-container single-sidebar\">
                                <main>
                                    <div class=\"woocommerce\">
                                        <h2>Login</h2>
                                        <form method=\"post\" class=\"login\">
                                            <p class=\"form-row form-row-wide\">
                                                <label for=\"username\">Username or email address <span class=\"required\">*</span></label>
                                                <input type=\"text\" class=\"input-text\" name=\"username\" id=\"username\" value=\"\" />
                                            </p>
                                            <p class=\"form-row form-row-wide\">
                                                <label for=\"password\">Password <span class=\"required\">*</span></label>
                                                <input class=\"input-text\" type=\"password\" name=\"password\" id=\"password\" />
                                            </p>
                                            <p class=\"form-row\">
                                                <input type=\"hidden\" id=\"_wpnonce\" name=\"_wpnonce\" value=\"23ec89b8f6\" />
                                                <input type=\"hidden\" name=\"_wp_http_referer\" value=\"/?page_id=1587\" />
                                                <input type=\"submit\" class=\"button\" name=\"login\" value=\"Login\" />
                                                <label for=\"rememberme\" class=\"inline\">
                                                    <input name=\"rememberme\" type=\"checkbox\" id=\"rememberme\" value=\"forever\" /> Remember me </label>
                                            </p>
                                            <p class=\"lost_password\">
                                                <a href=\"\">Lost your password?</a>
                                            </p>
                                        </form>
                                    </div>
                                    <!-- comments block -->
                                    <!-- //end comments block -->
                                </main>

                                <div class=\"kids_clear\"></div>
                            </div>
                            <!-- .entry-container -->
                        </div>
                        <div class=\"bg-level-2 second-part\"></div>
                    </div>
                    <!-- ***************** - END Image floating - *************** -->
                </section>
                <!-- .bottom_content_container -->
            </div>
            <div class=\"content_bottom_bg\"></div>
        </div>
    </div>
{% endblock %}

", "@Home/Login/login.html.twig", "/Applications/MAMP/htdocs/pitest/src/HomeBundle/Resources/views/Login/login.html.twig");
    }
}
