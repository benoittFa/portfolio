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
class __TwigTemplate_4149c92851777f57c126f9359bce6589bd7c15c2f1baf596a16ef4e5daa5671f extends Template
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
                    <h1>Cr??er un nouvel administrateur</h1>
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
                                <p>Son pr??nom</p>
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
                                <p>Son t??l??phone</p>
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 35, $this->source); })()), "picture", [], "any", false, false, false, 35), 'row');
        echo "
                                </div>
                                <div class=\"img-part\" style='background-image:url(\"/image/administrateur/default-user.png\")'>

                                </div>
                            </div>
                            <div class=\"form_input\">
                                <p>R??le dans la soci??t??</p>

                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 44, $this->source); })()), "jobName", [], "any", false, false, false, 44), 'row');
        echo "
                            </div>
                            <div id=\"password-input\" class=\"form_input\">
                                <p>Le mot de passe</p>
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 48, $this->source); })()), "password", [], "any", false, false, false, 48), 'row', ["id" => "password"]);
        echo "
                            </div>
                            <div id=\"password-review-input\" class=\"form_input\">
                                <p>Confirmer le mot de passe</p>
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 52, $this->source); })()), "verifPWD", [], "any", false, false, false, 52), 'row', ["id" => "verifPassword"]);
        echo "
                            </div>
                            <div class=\"password-status\">
                                <p id=\"number-in-password\">??? Le mot de passe doit contenir au moins un chiffre</p>
                                <p id=\"uppercase-in-password\">??? Le mot de passe doit contenir au moins une majuscule</p>
                                <p id=\"lowercase-in-password\">??? Le mot de passe doit contenir au moins une minuscule</p>
                                <p id=\"size-in-password\">??? Le mot de passe doit ??tre sup??rieur ?? 10 lettres</p>
                            </div>
                            <div id=\"server-response\">
                            </div>
                            <button type=\"submit\">Valider la cr??ation</button>
                        ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 63, $this->source); })()), 'form_end');
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
        return "backoffice/administrateur_backoffice/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 63,  163 => 52,  156 => 48,  149 => 44,  137 => 35,  129 => 30,  122 => 26,  115 => 22,  108 => 18,  102 => 15,  97 => 13,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
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
                    <h1>Cr??er un nouvel administrateur</h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                    \t{{ form_start(formView) }}

\t                    {{ form_errors(formView) }}
                            <div class=\"form_input\"> 
                                <p>Son nom</p>
                                {{ form_row(formView.name) }}
                            </div>
                            <div class=\"form_input\">
                                <p>Son pr??nom</p>
                                {{ form_row(formView.firstname) }}
                            </div>
                            <div class=\"form_input\">
                                <p>Son e-mail</p>
                                {{ form_row(formView.mail) }}
                            </div>
                            <div class=\"form_input\">
                                <p>Son t??l??phone</p>
                                {{ form_row(formView.phonenumber) }}
                            </div>
                            <div class=\"form_input_file\">
                                <div class=\"button-part\">
                                    <p>Photo de profil</p>
                                {{ form_row(formView.picture) }}
                                </div>
                                <div class=\"img-part\" style='background-image:url(\"/image/administrateur/default-user.png\")'>

                                </div>
                            </div>
                            <div class=\"form_input\">
                                <p>R??le dans la soci??t??</p>

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
                                <p id=\"number-in-password\">??? Le mot de passe doit contenir au moins un chiffre</p>
                                <p id=\"uppercase-in-password\">??? Le mot de passe doit contenir au moins une majuscule</p>
                                <p id=\"lowercase-in-password\">??? Le mot de passe doit contenir au moins une minuscule</p>
                                <p id=\"size-in-password\">??? Le mot de passe doit ??tre sup??rieur ?? 10 lettres</p>
                            </div>
                            <div id=\"server-response\">
                            </div>
                            <button type=\"submit\">Valider la cr??ation</button>
                        {{ form_end(formView) }}
                    </div>

                </div>
            </section>

{% endblock %}
", "backoffice/administrateur_backoffice/create.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/administrateur_backoffice/create.html.twig");
    }
}
