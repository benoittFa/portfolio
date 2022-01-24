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

/* backoffice/realisation_backoffice/update.html.twig */
class __TwigTemplate_7bfc045f054952dcf6857a585b548eaf6613d68ca2da85fd4281e6e8ec006267 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/realisation_backoffice/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/realisation_backoffice/update.html.twig"));

        $this->parent = $this->loadTemplate("./backoffice/base_backoffice.html.twig", "backoffice/realisation_backoffice/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    <script src=\"/js/backoffice/checkbox.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo " <section id=\"formulaire-template\">
                <div class=\"formulaire-template-container\">
                    <h1>Modifier une oeuvre <span>- ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</span></h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                        <form onSubmit={this.handleSubmit}>
                            <div class=\"form_input\"> 
                                <p>Titre de l'oeuvre</p>
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), 'row');
        echo "

                            </div>

                            <div class=\"container-button\">
                                <p>Catégorie de l'oeuvre: </p>
                                <div id=\"oil-category-container\" onclick=\"checkboxCategory('oil')\">
                                    Huile
                                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 24, $this->source); })()), "oil", [], "any", false, false, false, 24), 'row', ["id" => "oil-check"]);
        echo "
                                </div>
                                <div id=\"acrylique-category-container\" onclick=\"checkboxCategory('acrylique')\">
                                    Acrylique
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 28, $this->source); })()), "acrylique", [], "any", false, false, false, 28), 'row', ["id" => "acrylique-check"]);
        echo "
                                </div>
                            </div>
                            <div class=\"form_input_file\">
                                <div class=\"button-part\">
                                    <p>Photo de l'oeuvre</p>
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 34, $this->source); })()), "picture", [], "any", false, false, false, 34), 'row');
        echo "
                                </div>
                                <div class=\"img-part\" style='background-image:url(\"/image/administrateur/default-user.png\")'>

                                </div>
                            </div>
                              <div class=\"container-button\">
                                <p>Type de l'oeuvre: </p>
                                <div id=\"portrait-category-container\" onclick=\"checkboxMode('portrait')\">
                                    Portrait
                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 44, $this->source); })()), "portrait", [], "any", false, false, false, 44), 'row', ["id" => "portrait-check"]);
        echo "
                                </div>
                                <div id=\"paysage-category-container\" onclick=\"checkboxMode('paysage')\">
                                    Paysage
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 48, $this->source); })()), "paysage", [], "any", false, false, false, 48), 'row', ["id" => "paysage-check"]);
        echo "
                                </div>
                            </div>
                            <div id=\"form-taille-number\" className=\"non-validate\">
                                <div class=\"form_input_double_input\">
                                    <p>Format</p>
                                    <div>
                                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 55, $this->source); })()), "format1", [], "any", false, false, false, 55), 'row');
        echo "
                                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 56, $this->source); })()), "format2", [], "any", false, false, false, 56), 'row');
        echo "    
                                    </div>     
                                </div>
                            </div>
                            
                            <button type=\"submit\">Valider la création</button>
                        </form>
                    </div>

                </div>
            </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/realisation_backoffice/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 56,  160 => 55,  150 => 48,  143 => 44,  130 => 34,  121 => 28,  114 => 24,  103 => 16,  94 => 10,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './backoffice/base_backoffice.html.twig' %}

{% block javascripts %}
    <script src=\"/js/backoffice/checkbox.js\"></script>
{% endblock %}

{% block body %}
 <section id=\"formulaire-template\">
                <div class=\"formulaire-template-container\">
                    <h1>Modifier une oeuvre <span>- {{ artwork.title }}</span></h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                        <form onSubmit={this.handleSubmit}>
                            <div class=\"form_input\"> 
                                <p>Titre de l'oeuvre</p>
                                {{ form_row(formView.title) }}

                            </div>

                            <div class=\"container-button\">
                                <p>Catégorie de l'oeuvre: </p>
                                <div id=\"oil-category-container\" onclick=\"checkboxCategory('oil')\">
                                    Huile
                                    {{ form_row(formView.oil, { 'id': 'oil-check'}) }}
                                </div>
                                <div id=\"acrylique-category-container\" onclick=\"checkboxCategory('acrylique')\">
                                    Acrylique
                                    {{ form_row(formView.acrylique, { 'id': 'acrylique-check'}) }}
                                </div>
                            </div>
                            <div class=\"form_input_file\">
                                <div class=\"button-part\">
                                    <p>Photo de l'oeuvre</p>
                                {{ form_row(formView.picture) }}
                                </div>
                                <div class=\"img-part\" style='background-image:url(\"/image/administrateur/default-user.png\")'>

                                </div>
                            </div>
                              <div class=\"container-button\">
                                <p>Type de l'oeuvre: </p>
                                <div id=\"portrait-category-container\" onclick=\"checkboxMode('portrait')\">
                                    Portrait
                                    {{ form_row(formView.portrait, { 'id': 'portrait-check'}) }}
                                </div>
                                <div id=\"paysage-category-container\" onclick=\"checkboxMode('paysage')\">
                                    Paysage
                                    {{ form_row(formView.paysage, { 'id': 'paysage-check'}) }}
                                </div>
                            </div>
                            <div id=\"form-taille-number\" className=\"non-validate\">
                                <div class=\"form_input_double_input\">
                                    <p>Format</p>
                                    <div>
                                        {{ form_row(formView.format1) }}
                                        {{ form_row(formView.format2) }}    
                                    </div>     
                                </div>
                            </div>
                            
                            <button type=\"submit\">Valider la création</button>
                        </form>
                    </div>

                </div>
            </section>
{% endblock %}
", "backoffice/realisation_backoffice/update.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/realisation_backoffice/update.html.twig");
    }
}
