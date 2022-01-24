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
class __TwigTemplate_10dc046bd93b54b880b932d9239532d8b9e836afd6697c9f886e0fb9a5f83129 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/exposition/manage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/exposition/manage.html.twig"));

        $this->parent = $this->loadTemplate("./backoffice/base_backoffice.html.twig", "backoffice/exposition/manage.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["expositions"]) || array_key_exists("expositions", $context) ? $context["expositions"] : (function () { throw new RuntimeError('Variable "expositions" does not exist.', 22, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  120 => 31,  111 => 29,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  91 => 23,  87 => 22,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './backoffice/base_backoffice.html.twig' %}


{% block body %}
            <section id=\"tab-template\">
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
                            {% for exposition in expositions %}
                                <tr>
                                    <td><b>{{ exposition.title|upper }}</b></td>
                                    <td><b>{{ exposition.text }}</b></td>
                                    <td><div class=\"user-img\" style='background-image: url(\"{{ exposition.picture }}\")'></div></td>
                                    <td>{{ exposition.creationDate |format_datetime('short', 'none', locale='fr') }}</td>

                                    <td><a href=\"{{ path ('delete_id_exposition', {'id': exposition.id}) }}\"><div style='background-image:url(\"/image/icons/trash.png\")'></div></a></td>
                                </tr>
                            {% endfor %}     
                            </tbody>
                        </table>
                    </div>

                </div>
            </section>
{% endblock %}
", "backoffice/exposition/manage.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/exposition/manage.html.twig");
    }
}
