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
class __TwigTemplate_be2119d5c87c91739de2797937795de4ff6f5bc99c6d8b76c4fd4cbcce62499f extends Template
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
        $this->parent = $this->loadTemplate("./backoffice/base_backoffice.html.twig", "backoffice/realisation_backoffice/manage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["artworks"] ?? null));
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
        return array (  114 => 35,  105 => 33,  101 => 32,  96 => 30,  92 => 29,  86 => 28,  82 => 27,  78 => 26,  75 => 25,  71 => 24,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backoffice/realisation_backoffice/manage.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/realisation_backoffice/manage.html.twig");
    }
}
