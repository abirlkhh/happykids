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

/* evenement/show.html.twig */
class __TwigTemplate_58315e8532a61aba346b5ce1b192974aa1b93bad1b97c8ee98b27c27cae6daf1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        // line 1
        echo "
    <h1>Evenement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "titre", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 16
        if ($this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "dateE", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "dateE", []), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "lieu", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "description", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ticket disponible</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "ticket", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tarif</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "tarif", []), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_edit", ["id" => $this->getAttribute(($context["evenement"] ?? $this->getContext($context, "evenement")), "id", [])]), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "evenement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 47,  111 => 45,  105 => 42,  99 => 39,  89 => 32,  82 => 28,  75 => 24,  68 => 20,  59 => 16,  52 => 12,  45 => 8,  36 => 1,);
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
    <h1>Evenement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ evenement.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ evenement.titre }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if evenement.dateE %}{{ evenement.dateE|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>{{ evenement.lieu }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ evenement.description }}</td>
            </tr>
            <tr>
                <th>Ticket disponible</th>
                <td>{{ evenement.ticket }}</td>
            </tr>
            <tr>
                <th>Tarif</th>
                <td>{{ evenement.tarif }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('evenement_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('evenement_edit', { 'id': evenement.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
", "evenement/show.html.twig", "/Applications/MAMP/htdocs/pitest/app/Resources/views/evenement/show.html.twig");
    }
}
