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
class __TwigTemplate_8a0441b3ee3009f17b5314d319cdd6dce32ad1e27cda7c1bf60b30f2dc751d31 extends Template
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
    <script>
        function startView(){

            ";
        // line 8
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 8, $this->source); })()) == "Huile")) {
            // line 9
            echo "                document.getElementById('oil-category-container').classList.add('active');
                document.getElementById('oil-check').checked = true;
            ";
        } else {
            // line 12
            echo "                document.getElementById('acrylique-category-container').classList.add('active');
                document.getElementById('acrylique-check').checked = true;
            ";
        }
        // line 15
        echo "
            ";
        // line 16
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 16, $this->source); })()) == true)) {
            // line 17
            echo "                document.getElementById('portrait-category-container').classList.add('active');
                document.getElementById('portrait-check').checked = true;
            ";
        } else {
            // line 20
            echo "                document.getElementById('paysage-category-container').classList.add('active');
                document.getElementById('paysage-check').checked = true;
            ";
        }
        // line 23
        echo "
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo " <section id=\"formulaire-template\">
                <div class=\"formulaire-template-container\">
                    <h1>Modifier une oeuvre <span>- ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artwork"]) || array_key_exists("artwork", $context) ? $context["artwork"] : (function () { throw new RuntimeError('Variable "artwork" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), "html", null, true);
        echo "</span></h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                    \t";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
                            <div class=\"form_input\"> 
                                <p>Titre de l'oeuvre</p>
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 37, $this->source); })()), "title", [], "any", false, false, false, 37), 'widget');
        echo "

                            </div>

                            <div class=\"container-button\">
                                <p>Catégorie de l'oeuvre: </p>
                                <div id=\"oil-category-container\" onclick=\"checkboxCategory('oil')\">
                                    Huile
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 45, $this->source); })()), "oil", [], "any", false, false, false, 45), 'widget', ["id" => "oil-check"]);
        echo "
                                </div>
                                <div id=\"acrylique-category-container\" onclick=\"checkboxCategory('acrylique')\">
                                    Acrylique
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 49, $this->source); })()), "acrylique", [], "any", false, false, false, 49), 'widget', ["id" => "acrylique-check"]);
        echo "
                                </div>
                            </div>
                            <div class=\"form_input_file\">
                                <div class=\"button-part\">
                                    <p>Photo de l'oeuvre</p>
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 55, $this->source); })()), "picture", [], "any", false, false, false, 55), 'widget');
        echo "
                                </div>
                                <div class=\"img-part\" style='background-image:url(\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "\")'>

                                </div>
                            </div>
                              <div class=\"container-button\">
                                <p>Type de l'oeuvre: </p>
                                <div id=\"portrait-category-container\" onclick=\"checkboxMode('portrait')\">
                                    Portrait
                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 65, $this->source); })()), "portrait", [], "any", false, false, false, 65), 'widget', ["id" => "portrait-check"]);
        echo "
                                </div>
                                <div id=\"paysage-category-container\" onclick=\"checkboxMode('paysage')\">
                                    Paysage
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 69, $this->source); })()), "paysage", [], "any", false, false, false, 69), 'widget', ["id" => "paysage-check"]);
        echo "
                                </div>
                            </div>
                            <div id=\"form-taille-number\" className=\"non-validate\">
                                <div class=\"form_input_double_input\">
                                    <p>Format</p>
                                    <div>
                                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 76, $this->source); })()), "format", [], "any", false, false, false, 76), 'widget');
        echo "
                                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 77, $this->source); })()), "format2", [], "any", false, false, false, 77), 'widget');
        echo "    
                                    </div>     
                                </div>
                            </div>
                            
                            <button type=\"submit\">Valider la création</button>
                    \t";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
                    </div>

                </div>
            </section>
            <script> 
                window.onload = startView();
            </script>
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
        return array (  214 => 83,  205 => 77,  201 => 76,  191 => 69,  184 => 65,  173 => 57,  168 => 55,  159 => 49,  152 => 45,  141 => 37,  135 => 34,  129 => 31,  125 => 29,  115 => 28,  102 => 23,  97 => 20,  92 => 17,  90 => 16,  87 => 15,  82 => 12,  77 => 9,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './backoffice/base_backoffice.html.twig' %}

{% block javascripts %}
    <script src=\"/js/backoffice/checkbox.js\"></script>
    <script>
        function startView(){

            {% if category == 'Huile' %}
                document.getElementById('oil-category-container').classList.add('active');
                document.getElementById('oil-check').checked = true;
            {% else %}
                document.getElementById('acrylique-category-container').classList.add('active');
                document.getElementById('acrylique-check').checked = true;
            {% endif %}

            {% if type == true %}
                document.getElementById('portrait-category-container').classList.add('active');
                document.getElementById('portrait-check').checked = true;
            {% else %}
                document.getElementById('paysage-category-container').classList.add('active');
                document.getElementById('paysage-check').checked = true;
            {% endif %}

        }
    </script>
{% endblock %}

{% block body %}
 <section id=\"formulaire-template\">
                <div class=\"formulaire-template-container\">
                    <h1>Modifier une oeuvre <span>- {{ artwork.title }}</span></h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                    \t{{ form_start(formView) }}
                            <div class=\"form_input\"> 
                                <p>Titre de l'oeuvre</p>
                                {{ form_widget(formView.title) }}

                            </div>

                            <div class=\"container-button\">
                                <p>Catégorie de l'oeuvre: </p>
                                <div id=\"oil-category-container\" onclick=\"checkboxCategory('oil')\">
                                    Huile
                                    {{ form_widget(formView.oil, { 'id': 'oil-check'}) }}
                                </div>
                                <div id=\"acrylique-category-container\" onclick=\"checkboxCategory('acrylique')\">
                                    Acrylique
                                    {{ form_widget(formView.acrylique, { 'id': 'acrylique-check'}) }}
                                </div>
                            </div>
                            <div class=\"form_input_file\">
                                <div class=\"button-part\">
                                    <p>Photo de l'oeuvre</p>
                                {{ form_widget(formView.picture) }}
                                </div>
                                <div class=\"img-part\" style='background-image:url(\"{{picture}}\")'>

                                </div>
                            </div>
                              <div class=\"container-button\">
                                <p>Type de l'oeuvre: </p>
                                <div id=\"portrait-category-container\" onclick=\"checkboxMode('portrait')\">
                                    Portrait
                                    {{ form_widget(formView.portrait, { 'id': 'portrait-check'}) }}
                                </div>
                                <div id=\"paysage-category-container\" onclick=\"checkboxMode('paysage')\">
                                    Paysage
                                    {{ form_widget(formView.paysage, { 'id': 'paysage-check'}) }}
                                </div>
                            </div>
                            <div id=\"form-taille-number\" className=\"non-validate\">
                                <div class=\"form_input_double_input\">
                                    <p>Format</p>
                                    <div>
                                        {{ form_widget(formView.format) }}
                                        {{ form_widget(formView.format2) }}    
                                    </div>     
                                </div>
                            </div>
                            
                            <button type=\"submit\">Valider la création</button>
                    \t{{ form_end(formView) }}
                    </div>

                </div>
            </section>
            <script> 
                window.onload = startView();
            </script>
{% endblock %}
", "backoffice/realisation_backoffice/update.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/realisation_backoffice/update.html.twig");
    }
}
