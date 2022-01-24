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
class __TwigTemplate_288918e35bef23837b86b2c14830fad26d23ffad6b8eafc7a103607d88a5992d extends Template
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), 'row');
        echo "
                                </div>
                                <div class=\"form_input\">
                                    <p>Le texte d'information</p>
                                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 19, $this->source); })()), "textBreakingNews", [], "any", false, false, false, 19), 'row');
        echo "
                                </div>
                                 <div class=\"form_input_file\">
                                    <div class=\"button-part\">
                                        <p>Selectionnez l'image princiaple</p>
                                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 24, $this->source); })()), "pictureTableau", [], "any", false, false, false, 24), 'row');
        echo "
                                    </div>
                                    <div class=\"img-part\" style='background-image: url(\"/image/administrateur/default-user.png\")'>

                                    </div>
                                </div>
                            </div> 
                             <div class=\"container-title\">
                                <h1>Partie Biographie:</h1>
                                <div class=\"form_input\">
                                    <p>Nom de la section</p>
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 35, $this->source); })()), "nameBio", [], "any", false, false, false, 35), 'row');
        echo "
                                </div>
                                <div class=\"form_input\">
                                    <p>Le texte de Biographie</p>
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 39, $this->source); })()), "textBio", [], "any", false, false, false, 39), 'row');
        echo "
                                </div>
                                 <div class=\"form_input_file\">
                                    <div class=\"button-part\">
                                        <p>Selectionnez l'image</p>
                                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 44, $this->source); })()), "pictureBio", [], "any", false, false, false, 44), 'row');
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
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'row');
        echo "
                                </div>
                            </div> 

                            <button type=\"submit\">Valider la création</button>
                        ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 60, $this->source); })()), 'form_end');
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
        return array (  149 => 60,  141 => 55,  127 => 44,  119 => 39,  112 => 35,  98 => 24,  90 => 19,  83 => 15,  75 => 10,  68 => 5,  58 => 4,  35 => 1,);
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
                                    {{ form_row(formView.title) }}
                                </div>
                                <div class=\"form_input\">
                                    <p>Le texte d'information</p>
                                    {{ form_row(formView.textBreakingNews) }}
                                </div>
                                 <div class=\"form_input_file\">
                                    <div class=\"button-part\">
                                        <p>Selectionnez l'image princiaple</p>
                                        {{ form_row(formView.pictureTableau) }}
                                    </div>
                                    <div class=\"img-part\" style='background-image: url(\"/image/administrateur/default-user.png\")'>

                                    </div>
                                </div>
                            </div> 
                             <div class=\"container-title\">
                                <h1>Partie Biographie:</h1>
                                <div class=\"form_input\">
                                    <p>Nom de la section</p>
                                    {{ form_row(formView.nameBio) }}
                                </div>
                                <div class=\"form_input\">
                                    <p>Le texte de Biographie</p>
                                    {{ form_row(formView.textBio) }}
                                </div>
                                 <div class=\"form_input_file\">
                                    <div class=\"button-part\">
                                        <p>Selectionnez l'image</p>
                                        {{ form_row(formView.pictureBio) }}
                                    </div>
                                    <div class=\"img-part\" style='background-image: url(\"/image/administrateur/default-user.png\")'>

                                    </div>
                                </div>
                            </div> 
                            <div class=\"container-title\">
                                <h1>Partie Contact:</h1>
                                <div class=\"form_input\">
                                    <p>Votre mail</p>
                                    {{ form_row(formView.email) }}
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
