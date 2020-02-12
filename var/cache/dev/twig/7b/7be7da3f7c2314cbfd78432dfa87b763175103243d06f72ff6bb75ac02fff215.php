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

/* club/show.html.twig */
class __TwigTemplate_615f368f68f02347a5997857f43b4c51ef08cc23d76b0f165f560577b5487058 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/show.html.twig"));

        // line 1
        echo "
    <h1>Club</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomc</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "nomC", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Activite</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "activite", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "type", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descrip</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "descrip", []), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_edit", ["id" => $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", [])]), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "club/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 39,  95 => 37,  89 => 34,  83 => 31,  73 => 24,  66 => 20,  59 => 16,  52 => 12,  45 => 8,  36 => 1,);
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
    <h1>Club</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ club.id }}</td>
            </tr>
            <tr>
                <th>Nomc</th>
                <td>{{ club.nomC }}</td>
            </tr>
            <tr>
                <th>Activite</th>
                <td>{{ club.activite }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ club.type }}</td>
            </tr>
            <tr>
                <th>Descrip</th>
                <td>{{ club.descrip }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('club_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('club_edit', { 'id': club.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
", "club/show.html.twig", "/Applications/MAMP/htdocs/pitest/app/Resources/views/club/show.html.twig");
    }
}
