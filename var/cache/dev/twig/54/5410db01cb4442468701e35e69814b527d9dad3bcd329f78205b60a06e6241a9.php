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

/* backoffice/administrateur_backoffice/delete.html.twig */
class __TwigTemplate_5886f5a13a9a1235c809368e35fb77282319ace3f3d7cd9f0d28fc2de3f9c59d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/administrateur_backoffice/delete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/administrateur_backoffice/delete.html.twig"));

        $this->parent = $this->loadTemplate("./backoffice/base_backoffice.html.twig", "backoffice/administrateur_backoffice/delete.html.twig", 1);
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
                    <h1>Supprimer un administrateur</h1>
                    <div class=\"stroke\"></div>

                    <div class=\"container-tab-template\">
                        <table cellSpacing=\"0\" cellPadding=\"0\">
                            <tbody>
                            <tr>
                                <td>Nom</td>
                                <td>Pr??nom</td>
                                <td>E-mail</td>
                                <td>T??l??phone</td>

                                <td>Photo de profil</td>

                                <td>D??nomination</td>
                                <td>Derni??re connexion</td>

                                <td>Supprimer</td>
                            </tr>
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["administrators"]) || array_key_exists("administrators", $context) ? $context["administrators"] : (function () { throw new RuntimeError('Variable "administrators" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["administrator"]) {
            // line 27
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["administrator"], "visible", [], "any", false, false, false, 27) == false)) {
                // line 28
                echo "                                <tr>
                                    <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrator"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                                    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrator"], "firstname", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                                    <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrator"], "mail", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                                    <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrator"], "phone", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>

                                    <td><div class=\"user-img\" style='background-image: url(\"";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrator"], "picture", [], "any", false, false, false, 34), "html", null, true);
                echo "\")'></div></td>

                                    <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["administrator"], "job", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                                    ";
                // line 38
                echo "
                                    <td onClick=\"\"><div style='background-image:url(\"/image/icons/trash.png\")'></div></td>
                                </tr>
                                ";
            }
            // line 42
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['administrator'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
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
        return "backoffice/administrateur_backoffice/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 44,  133 => 42,  127 => 38,  123 => 36,  118 => 34,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  98 => 28,  95 => 27,  91 => 26,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './backoffice/base_backoffice.html.twig' %}


{% block body %}
            <section id=\"tab-template\">
                <div class=\"tab-template-container\">
                    <h1>Supprimer un administrateur</h1>
                    <div class=\"stroke\"></div>

                    <div class=\"container-tab-template\">
                        <table cellSpacing=\"0\" cellPadding=\"0\">
                            <tbody>
                            <tr>
                                <td>Nom</td>
                                <td>Pr??nom</td>
                                <td>E-mail</td>
                                <td>T??l??phone</td>

                                <td>Photo de profil</td>

                                <td>D??nomination</td>
                                <td>Derni??re connexion</td>

                                <td>Supprimer</td>
                            </tr>
                            {% for administrator in administrators %}
                                {% if administrator.visible == false %}
                                <tr>
                                    <td>{{ administrator.name }}</td>
                                    <td>{{ administrator.firstname }}</td>
                                    <td>{{ administrator.mail }}</td>
                                    <td>{{ administrator.phone }}</td>

                                    <td><div class=\"user-img\" style='background-image: url(\"{{ administrator.picture }}\")'></div></td>

                                    <td>{{ administrator.job }}</td>
                                    {# <td>{{ administrator.getCreationDate() }}</td> #}

                                    <td onClick=\"\"><div style='background-image:url(\"/image/icons/trash.png\")'></div></td>
                                </tr>
                                {% endif %}

                            {% endfor %}

                            </tbody>
                        </table>
                    </div>

                </div>
            </section>
{% endblock %}
", "backoffice/administrateur_backoffice/delete.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/administrateur_backoffice/delete.html.twig");
    }
}
