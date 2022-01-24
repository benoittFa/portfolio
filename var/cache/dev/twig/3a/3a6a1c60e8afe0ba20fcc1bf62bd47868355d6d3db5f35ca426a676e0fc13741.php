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

/* backoffice/administrateur_backoffice/create.html.twig */
class __TwigTemplate_1565adf43f3a5596371f089790c9218ab2d22c885ada645bedcd80d7d94f2570 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/administrateur_backoffice/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/administrateur_backoffice/create.html.twig"));

        $this->parent = $this->loadTemplate("./backoffice/base_backoffice.html.twig", "backoffice/administrateur_backoffice/create.html.twig", 1);
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
        echo "    <script src=\"/js/backoffice/password.js\"></script>
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
                    <h1>Créer un nouvel administrateur</h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                    \t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 13, $this->source); })()), 'form_start');
        echo "

\t                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 15, $this->source); })()), 'errors');
        echo "
                            <div class=\"form_input\"> 
                                <p>Son nom</p>
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), 'row');
        echo "
                            </div>
                            <div class=\"form_input\">
                                <p>Son prénom</p>
                                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 22, $this->source); })()), "firstname", [], "any", false, false, false, 22), 'row');
        echo "
                            </div>
                            <div class=\"form_input\">
                                <p>Son e-mail</p>
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 26, $this->source); })()), "mail", [], "any", false, false, false, 26), 'row');
        echo "
                            </div>
                            <div class=\"form_input\">
                                <p>Son téléphone</p>
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 30, $this->source); })()), "phonenumber", [], "any", false, false, false, 30), 'row');
        echo "
                            </div>
                            <div class=\"form_input_file\">
                                <div class=\"button-part\">
                                    <p>Photo de profil</p>
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 35, $this->source); })()), "picture", [], "any", false, false, false, 35), 'widget', ["id" => "pictureAdmin"]);
        echo "
                                </div>
                                <div id=\"img-admin-part\"  style='background-image:url(\"/image/administrateur/default-user.png\")' class=\"img-part\" >
                                </div>
                            </div>
                            <div class=\"form_input\">
                                <p>Rôle dans la société</p>

                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 43, $this->source); })()), "jobName", [], "any", false, false, false, 43), 'row');
        echo "
                            </div>
                            <div id=\"password-input\" class=\"form_input\">
                                <p>Le mot de passe</p>
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 47, $this->source); })()), "password", [], "any", false, false, false, 47), 'row', ["id" => "password"]);
        echo "
                            </div>
                            <div id=\"password-review-input\" class=\"form_input\">
                                <p>Confirmer le mot de passe</p>
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 51, $this->source); })()), "verifPWD", [], "any", false, false, false, 51), 'row', ["id" => "verifPassword"]);
        echo "
                            </div>
                            <div class=\"password-status\">
                                <p id=\"number-in-password\">• Le mot de passe doit contenir au moins un chiffre</p>
                                <p id=\"uppercase-in-password\">• Le mot de passe doit contenir au moins une majuscule</p>
                                <p id=\"lowercase-in-password\">• Le mot de passe doit contenir au moins une minuscule</p>
                                <p id=\"size-in-password\">• Le mot de passe doit être supérieur à 10 lettres</p>
                            </div>
                            <div id=\"server-response\">
                            </div>
                            <button id=\"validation-form\" disabled='true' type=\"submit\">Valider la création</button>
                        ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
                    </div>

                </div>
            </section>
            <script>  
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        
                        reader.onload = function(e) {
                        \$('#img-admin-part').attr('style', 'background-image:url('+e.target.result+')');
                        }
                        
                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }

                \$(\"#pictureAdmin\").change(function() {
                readURL(this);
                });
            
            </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/administrateur_backoffice/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 62,  162 => 51,  155 => 47,  148 => 43,  137 => 35,  129 => 30,  122 => 26,  115 => 22,  108 => 18,  102 => 15,  97 => 13,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './backoffice/base_backoffice.html.twig' %}

{% block javascripts %}
    <script src=\"/js/backoffice/password.js\"></script>
{% endblock %}

{% block body %}
 <section id=\"formulaire-template\">
                <div class=\"formulaire-template-container\">
                    <h1>Créer un nouvel administrateur</h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                    \t{{ form_start(formView) }}

\t                    {{ form_errors(formView) }}
                            <div class=\"form_input\"> 
                                <p>Son nom</p>
                                {{ form_row(formView.name) }}
                            </div>
                            <div class=\"form_input\">
                                <p>Son prénom</p>
                                {{ form_row(formView.firstname) }}
                            </div>
                            <div class=\"form_input\">
                                <p>Son e-mail</p>
                                {{ form_row(formView.mail) }}
                            </div>
                            <div class=\"form_input\">
                                <p>Son téléphone</p>
                                {{ form_row(formView.phonenumber) }}
                            </div>
                            <div class=\"form_input_file\">
                                <div class=\"button-part\">
                                    <p>Photo de profil</p>
                                    {{ form_widget(formView.picture , { 'id': 'pictureAdmin'} ) }}
                                </div>
                                <div id=\"img-admin-part\"  style='background-image:url(\"/image/administrateur/default-user.png\")' class=\"img-part\" >
                                </div>
                            </div>
                            <div class=\"form_input\">
                                <p>Rôle dans la société</p>

                                {{ form_row(formView.jobName) }}
                            </div>
                            <div id=\"password-input\" class=\"form_input\">
                                <p>Le mot de passe</p>
                                {{ form_row(formView.password, { 'id': 'password'} ) }}
                            </div>
                            <div id=\"password-review-input\" class=\"form_input\">
                                <p>Confirmer le mot de passe</p>
                                {{ form_row(formView.verifPWD, { 'id': 'verifPassword'}) }}
                            </div>
                            <div class=\"password-status\">
                                <p id=\"number-in-password\">• Le mot de passe doit contenir au moins un chiffre</p>
                                <p id=\"uppercase-in-password\">• Le mot de passe doit contenir au moins une majuscule</p>
                                <p id=\"lowercase-in-password\">• Le mot de passe doit contenir au moins une minuscule</p>
                                <p id=\"size-in-password\">• Le mot de passe doit être supérieur à 10 lettres</p>
                            </div>
                            <div id=\"server-response\">
                            </div>
                            <button id=\"validation-form\" disabled='true' type=\"submit\">Valider la création</button>
                        {{ form_end(formView) }}
                    </div>

                </div>
            </section>
            <script>  
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        
                        reader.onload = function(e) {
                        \$('#img-admin-part').attr('style', 'background-image:url('+e.target.result+')');
                        }
                        
                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }

                \$(\"#pictureAdmin\").change(function() {
                readURL(this);
                });
            
            </script>
{% endblock %}
", "backoffice/administrateur_backoffice/create.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/administrateur_backoffice/create.html.twig");
    }
}
