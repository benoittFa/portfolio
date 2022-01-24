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

/* backoffice/exposition/manage.html.twig */
class __TwigTemplate_27d6223c1ec553ce2e31d2ef793386c7437204ce94302593d122e3a7f464141d extends Template
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
        $this->parent = $this->loadTemplate("./backoffice/base_backoffice.html.twig", "backoffice/exposition/manage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            <section id=\"tab-template\">
                <div class=\"tab-template-container\">
                    <h1>Manager vos expositions</h1>
                    <div class=\"stroke\"></div>

                    <div class=\"container-tab-template\">
                        <table cellSpacing=\"0\" cellPadding=\"0\">
                            <tbody>
                            <tr>
                                <td>Titre</td>
                                <td>Texte</td>
                                <td>Photo</td>
                                <td>Création</td>


                                <td>Supprimer</td> 
                            </tr>
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["expositions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["exposition"]) {
            // line 23
            echo "                                <tr>
                                    <td><b>";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exposition"], "title", [], "any", false, false, false, 24)), "html", null, true);
            echo "</b></td>
                                    <td><b>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exposition"], "text", [], "any", false, false, false, 25), "html", null, true);
            echo "</b></td>
                                    <td><div class=\"user-img\" style='background-image: url(\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exposition"], "picture", [], "any", false, false, false, 26), "html", null, true);
            echo "\")'></div></td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["exposition"], "creationDate", [], "any", false, false, false, 27), "short", "none", "", null, "gregorian", "fr"), "html", null, true);
            echo "</td>

                                    <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_id_exposition", ["id" => twig_get_attribute($this->env, $this->source, $context["exposition"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"><div style='background-image:url(\"/image/icons/trash.png\")'></div></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exposition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
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
        return "backoffice/exposition/manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  93 => 29,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  73 => 23,  69 => 22,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backoffice/exposition/manage.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/exposition/manage.html.twig");
    }
}
