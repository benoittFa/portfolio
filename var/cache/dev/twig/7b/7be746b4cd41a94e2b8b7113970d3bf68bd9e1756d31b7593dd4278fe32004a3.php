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

/* backoffice/realisation_backoffice/create.html.twig */
class __TwigTemplate_c0bd42534ce1dd1adc812b04dbba8dd71b6b1edda88476d62f4909d71425a3f2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/realisation_backoffice/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/realisation_backoffice/create.html.twig"));

        $this->parent = $this->loadTemplate("./backoffice/base_backoffice.html.twig", "backoffice/realisation_backoffice/create.html.twig", 1);
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
                    <h1>Créer une oeuvre</h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                    \t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                            <div class=\"form_input\"> 
                                <p>Titre de l'oeuvre</p>
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), 'widget');
        echo "

                            </div>

                            <div class=\"container-button\">
                                <p>Catégorie de l'oeuvre: </p>
                                <div id=\"oil-category-container\" class=\"active\" onclick=\"checkboxCategory('oil')\">
                                    Huile
                                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 24, $this->source); })()), "oil", [], "any", false, false, false, 24), 'widget', ["id" => "oil-check"]);
        echo "
                                </div>
                                <div id=\"acrylique-category-container\" onclick=\"checkboxCategory('acrylique')\">
                                    Acrylique
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 28, $this->source); })()), "acrylique", [], "any", false, false, false, 28), 'widget', ["id" => "acrylique-check"]);
        echo "
                                </div>
                            </div>

                            <div class=\"form_input_file\">
                                <div class=\"button-part\">
                                    <p>Photo de l'oeuvre</p>
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 35, $this->source); })()), "picture", [], "any", false, false, false, 35), 'widget', ["id" => "pictureSelect"]);
        echo "
                                </div>
                                <div id=\"img-part\" class=\"img-part\" style='background-image:url(\"/image/default-picture.png\")'>

                                </div>
                            </div>
                             <div class=\"container-button\">
                                <p>Type de l'oeuvre: </p>
                                <div id=\"portrait-category-container\" class=\"active\" onclick=\"checkboxMode('portrait')\">
                                    Portrait
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 45, $this->source); })()), "portrait", [], "any", false, false, false, 45), 'widget', ["id" => "portrait-check"]);
        echo "
                                </div>
                                <div id=\"paysage-category-container\" onclick=\"checkboxMode('paysage')\">
                                    Paysage
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 49, $this->source); })()), "paysage", [], "any", false, false, false, 49), 'widget', ["id" => "paysage-check"]);
        echo "
                                </div>
                            </div>

                            <div id=\"form-taille-number\" className=\"non-validate\">
                                <div class=\"form_input_double_input\">
                                    <p>Format</p>
                                    <div>
                                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 57, $this->source); })()), "format", [], "any", false, false, false, 57), 'widget');
        echo "
                                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 58, $this->source); })()), "format2", [], "any", false, false, false, 58), 'widget');
        echo "    
                                    </div>     
                                </div>
                            </div>

                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 63, $this->source); })()), "admin", [], "any", false, false, false, 63), 'widget', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63)]);
        echo "

                          
                            <button type=\"submit\">Valider la création</button>
                        ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 67, $this->source); })()), 'form_end');
        echo "
                    </div>

                </div>
            </section>
            <script>  
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        
                        reader.onload = function(e) {
                        \$('#img-part').attr('style', 'background-image:url('+e.target.result+')');
                        }
                        
                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }

                \$(\"#pictureSelect\").change(function() {
                readURL(this);
                });
            
            </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/realisation_backoffice/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 67,  174 => 63,  166 => 58,  162 => 57,  151 => 49,  144 => 45,  131 => 35,  121 => 28,  114 => 24,  103 => 16,  97 => 13,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
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
                    <h1>Créer une oeuvre</h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                    \t{{ form_start(formView) }}
                            <div class=\"form_input\"> 
                                <p>Titre de l'oeuvre</p>
                                {{ form_widget(formView.title) }}

                            </div>

                            <div class=\"container-button\">
                                <p>Catégorie de l'oeuvre: </p>
                                <div id=\"oil-category-container\" class=\"active\" onclick=\"checkboxCategory('oil')\">
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
                                {{ form_widget(formView.picture, {'id' : 'pictureSelect'}) }}
                                </div>
                                <div id=\"img-part\" class=\"img-part\" style='background-image:url(\"/image/default-picture.png\")'>

                                </div>
                            </div>
                             <div class=\"container-button\">
                                <p>Type de l'oeuvre: </p>
                                <div id=\"portrait-category-container\" class=\"active\" onclick=\"checkboxMode('portrait')\">
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

                            {{ form_widget(formView.admin, { 'value': app.user.id }) }}

                          
                            <button type=\"submit\">Valider la création</button>
                        {{ form_end(formView) }}
                    </div>

                </div>
            </section>
            <script>  
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        
                        reader.onload = function(e) {
                        \$('#img-part').attr('style', 'background-image:url('+e.target.result+')');
                        }
                        
                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }

                \$(\"#pictureSelect\").change(function() {
                readURL(this);
                });
            
            </script>
{% endblock %}
", "backoffice/realisation_backoffice/create.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/realisation_backoffice/create.html.twig");
    }
}
