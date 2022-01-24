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

/* backoffice/dashboard_backoffice/index.html.twig */
class __TwigTemplate_621b3cd1370d333ff6e9e1fe442278338b48be51c31fb225488c9e274ce6693a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/dashboard_backoffice/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/dashboard_backoffice/index.html.twig"));

        $this->parent = $this->loadTemplate("./backoffice/base_backoffice.html.twig", "backoffice/dashboard_backoffice/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section id=\"formulaire-template\">
        <div class=\"formulaire-template-container\">
            <h1>La liste de vos oeuvres</h1> 
            <div class=\"artwork-container\">
                <div class=\"artwork\">
                    <div style=\"background-image:url('/image/produit/article.png\"></div>
                    <h2>uktrat ze</h2>
                    <p>test</p>
                </div>
                <div class=\"artwork\">
                    <div style=\"background-image:url('/image/produit/article.png\"></div>
                    <h2>uktrat ze</h2>
                    <p>test</p>
                </div>
                <div class=\"artwork\">
                    <div style=\"background-image:url('/image/produit/article.png\"></div>
                    <h2>uktrat ze</h2>
                    <p>test</p>
                </div>
                <div class=\"artwork\">
                    <div style=\"background-image:url('/image/produit/article.png\"></div>
                    <h2>uktrat ze</h2>
                    <p>test</p>
                </div>
            </div>  
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/dashboard_backoffice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './backoffice/base_backoffice.html.twig' %}

{% block body %}
    <section id=\"formulaire-template\">
        <div class=\"formulaire-template-container\">
            <h1>La liste de vos oeuvres</h1> 
            <div class=\"artwork-container\">
                <div class=\"artwork\">
                    <div style=\"background-image:url('/image/produit/article.png\"></div>
                    <h2>uktrat ze</h2>
                    <p>test</p>
                </div>
                <div class=\"artwork\">
                    <div style=\"background-image:url('/image/produit/article.png\"></div>
                    <h2>uktrat ze</h2>
                    <p>test</p>
                </div>
                <div class=\"artwork\">
                    <div style=\"background-image:url('/image/produit/article.png\"></div>
                    <h2>uktrat ze</h2>
                    <p>test</p>
                </div>
                <div class=\"artwork\">
                    <div style=\"background-image:url('/image/produit/article.png\"></div>
                    <h2>uktrat ze</h2>
                    <p>test</p>
                </div>
            </div>  
        </div>
    </section>
{% endblock %}
", "backoffice/dashboard_backoffice/index.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/dashboard_backoffice/index.html.twig");
    }
}
