<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* backoffice/realisation_backoffice/manage.html.twig */
class __TwigTemplate_c196916367faf580086fb659cc4635f79585349e4ba838ca936b14bde38424c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./backoffice/base_backoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/realisation_backoffice/manage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/realisation_backoffice/manage.html.twig"));

        $this->parent = $this->loadTemplate("./backoffice/base_backoffice.html.twig", "backoffice/realisation_backoffice/manage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "            <section id=\"tab-template\">
                <div class=\"tab-template-container\">
                    <h1>Manager vos oeuvres</h1>
                    <div class=\"stroke\"></div>

                    <div class=\"container-tab-template\">
                        <table cellSpacing=\"0\" cellPadding=\"0\">
                            <tbody>
                            <tr>
                                <td>Titre</td>
                                <td>Catgorie</td>
                                <td>Format</td>
                                <td>Photo</td>
                                <td>Création</td>

                                <td>Modifier</td>

                                <td>Supprimer</td> 
                            </tr>
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artworks"]) || array_key_exists("artworks", $context) ? $context["artworks"] : (function () { throw new RuntimeError('Variable "artworks" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["artwork"]) {
            // line 25
            echo "                                <tr>
                                    <td><b>";
            // line 26
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "title", [], "any", false, false, false, 26)), "html", null, true);
            echo "</b></td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "categorie", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "format", [], "any", false, false, false, 28), "html", null, true);
            echo " x ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "format2", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                    <td><div class=\"user-img\" style='background-image: url(\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "picture", [], "any", false, false, false, 29), "html", null, true);
            echo "\")'></div></td>
                                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "creationDate", [], "any", false, false, false, 30), "short", "none", "", null, "gregorian", "fr"), "html", null, true);
            echo "</td>

                                    <td><a href=\"/admin/oeuvre/update/";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\"><div style='background-image:url(\"/image/icons/pen.png\")'></div></a></td>
                                    <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_id_artwork", ["id" => twig_get_attribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"><div style='background-image:url(\"/image/icons/trash.png\")'></div></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artwork'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "     
                            </tbody>
                        </table>
                    </div>

                </div>
            </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/realisation_backoffice/manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 35,  123 => 33,  119 => 32,  114 => 30,  110 => 29,  104 => 28,  100 => 27,  96 => 26,  93 => 25,  89 => 24,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './backoffice/base_backoffice.html.twig' %}


{% block body %}
            <section id=\"tab-template\">
                <div class=\"tab-template-container\">
                    <h1>Manager vos oeuvres</h1>
                    <div class=\"stroke\"></div>

                    <div class=\"container-tab-template\">
                        <table cellSpacing=\"0\" cellPadding=\"0\">
                            <tbody>
                            <tr>
                                <td>Titre</td>
                                <td>Catgorie</td>
                                <td>Format</td>
                                <td>Photo</td>
                                <td>Création</td>

                                <td>Modifier</td>

                                <td>Supprimer</td> 
                            </tr>
                            {% for artwork in artworks %}
                                <tr>
                                    <td><b>{{ artwork.title|upper }}</b></td>
                                    <td>{{ artwork.categorie }}</td>
                                    <td>{{ artwork.format }} x {{ artwork.format2 }}</td>
                                    <td><div class=\"user-img\" style='background-image: url(\"{{ artwork.picture }}\")'></div></td>
                                    <td>{{ artwork.creationDate |format_datetime('short', 'none', locale='fr') }}</td>

                                    <td><a href=\"/admin/oeuvre/update/{{ artwork.id }}\"><div style='background-image:url(\"/image/icons/pen.png\")'></div></a></td>
                                    <td><a href=\"{{ path ('delete_id_artwork', {'id': artwork.id}) }}\"><div style='background-image:url(\"/image/icons/trash.png\")'></div></a></td>
                                </tr>
                            {% endfor %}     
                            </tbody>
                        </table>
                    </div>

                </div>
            </section>
{% endblock %}
", "backoffice/realisation_backoffice/manage.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/realisation_backoffice/manage.html.twig");
    }
}
