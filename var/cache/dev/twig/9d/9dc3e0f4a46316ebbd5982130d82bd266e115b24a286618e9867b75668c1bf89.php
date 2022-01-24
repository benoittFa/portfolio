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

/* backoffice/web_site_save_backoffice/index.html.twig */
class __TwigTemplate_9c9f5862a6d95942d2b3943ca993785aaf9eb7dfe47154e5874acb8ec5685e6f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/web_site_save_backoffice/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/web_site_save_backoffice/index.html.twig"));

        $this->parent = $this->loadTemplate("./backoffice/base_backoffice.html.twig", "backoffice/web_site_save_backoffice/index.html.twig", 1);
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
        echo "<section id=\"formulaire-template\">
                <div class=\"formulaire-template-container\">
                    <h1>Modifier les informations de votre site web</h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                    \t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 10, $this->source); })()), 'form_start');
        echo " 
                            <div class=\"container-title\">
                                <h1>Partie princiaple:</h1>
                                <div class=\"form_input\">
                                    <p>Le nom de votre site web</p>
                                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["titleSave"]) || array_key_exists("titleSave", $context) ? $context["titleSave"] : (function () { throw new RuntimeError('Variable "titleSave" does not exist.', 15, $this->source); })()), "content", [], "any", false, false, false, 15)]);
        echo "
                                </div>
                                <div class=\"form_input\">
                                    <p>Le texte d'information</p>
                                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 19, $this->source); })()), "textBreakingNews", [], "any", false, false, false, 19), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["textFirstSave"]) || array_key_exists("textFirstSave", $context) ? $context["textFirstSave"] : (function () { throw new RuntimeError('Variable "textFirstSave" does not exist.', 19, $this->source); })()), "content", [], "any", false, false, false, 19)]);
        echo "
                                </div>
                                 <div class=\"form_input_file\">
                                    <div class=\"button-part\">
                                        <p>Selectionnez l'image princiaple</p>
                                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 24, $this->source); })()), "pictureTableau", [], "any", false, false, false, 24), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["imageFirstSave"]) || array_key_exists("imageFirstSave", $context) ? $context["imageFirstSave"] : (function () { throw new RuntimeError('Variable "imageFirstSave" does not exist.', 24, $this->source); })()), "content", [], "any", false, false, false, 24)]);
        echo "
                                    </div>
                                    <div class=\"img-part\" style='background-image: url(\"/image/administrateur/default-user.png\")'>

                                    </div>
                                </div>
                            </div> 
                             <div class=\"container-title\">
                                <h1>Partie Biographie:</h1>
                                
                                <div class=\"form_input\">
                                    <p>Le texte de Biographie</p>
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 36, $this->source); })()), "textBio", [], "any", false, false, false, 36), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["textBiographie"]) || array_key_exists("textBiographie", $context) ? $context["textBiographie"] : (function () { throw new RuntimeError('Variable "textBiographie" does not exist.', 36, $this->source); })()), "content", [], "any", false, false, false, 36)]);
        echo "
                                </div>
                                 <div class=\"form_input_file\">
                                    <div class=\"button-part\">
                                        <p>Selectionnez l'image</p>
                                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 41, $this->source); })()), "pictureBio", [], "any", false, false, false, 41), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["imageBiographie"]) || array_key_exists("imageBiographie", $context) ? $context["imageBiographie"] : (function () { throw new RuntimeError('Variable "imageBiographie" does not exist.', 41, $this->source); })()), "content", [], "any", false, false, false, 41)]);
        echo "
                                    </div>
                                    <div class=\"img-part\" style='background-image: url(\"/image/administrateur/default-user.png\")'>

                                    </div>
                                </div>
                            </div> 
                            <div class=\"container-title\">
                                <h1>Partie Contact:</h1>
                                <div class=\"form_input\">
                                    <p>Votre mail</p>
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["mailSave"]) || array_key_exists("mailSave", $context) ? $context["mailSave"] : (function () { throw new RuntimeError('Variable "mailSave" does not exist.', 52, $this->source); })()), "content", [], "any", false, false, false, 52)]);
        echo "
                                </div>
                            </div> 

                            <button type=\"submit\">Valider la création</button>
                        ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
                    </div>

                </div>
            </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/web_site_save_backoffice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 57,  135 => 52,  121 => 41,  113 => 36,  98 => 24,  90 => 19,  83 => 15,  75 => 10,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './backoffice/base_backoffice.html.twig' %}


{% block body %}
<section id=\"formulaire-template\">
                <div class=\"formulaire-template-container\">
                    <h1>Modifier les informations de votre site web</h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                    \t{{ form_start(formView) }} 
                            <div class=\"container-title\">
                                <h1>Partie princiaple:</h1>
                                <div class=\"form_input\">
                                    <p>Le nom de votre site web</p>
                                    {{ form_row(formView.title, {'value': titleSave.content}) }}
                                </div>
                                <div class=\"form_input\">
                                    <p>Le texte d'information</p>
                                    {{ form_row(formView.textBreakingNews, {'value': textFirstSave.content}) }}
                                </div>
                                 <div class=\"form_input_file\">
                                    <div class=\"button-part\">
                                        <p>Selectionnez l'image princiaple</p>
                                        {{ form_row(formView.pictureTableau, {'value': imageFirstSave.content}) }}
                                    </div>
                                    <div class=\"img-part\" style='background-image: url(\"/image/administrateur/default-user.png\")'>

                                    </div>
                                </div>
                            </div> 
                             <div class=\"container-title\">
                                <h1>Partie Biographie:</h1>
                                
                                <div class=\"form_input\">
                                    <p>Le texte de Biographie</p>
                                    {{ form_row(formView.textBio, {'value': textBiographie.content}) }}
                                </div>
                                 <div class=\"form_input_file\">
                                    <div class=\"button-part\">
                                        <p>Selectionnez l'image</p>
                                        {{ form_row(formView.pictureBio, {'value': imageBiographie.content}) }}
                                    </div>
                                    <div class=\"img-part\" style='background-image: url(\"/image/administrateur/default-user.png\")'>

                                    </div>
                                </div>
                            </div> 
                            <div class=\"container-title\">
                                <h1>Partie Contact:</h1>
                                <div class=\"form_input\">
                                    <p>Votre mail</p>
                                    {{ form_row(formView.email, {'value': mailSave.content}) }}
                                </div>
                            </div> 

                            <button type=\"submit\">Valider la création</button>
                        {{ form_end(formView) }}
                    </div>

                </div>
            </section>

{% endblock %}
", "backoffice/web_site_save_backoffice/index.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/web_site_save_backoffice/index.html.twig");
    }
}
