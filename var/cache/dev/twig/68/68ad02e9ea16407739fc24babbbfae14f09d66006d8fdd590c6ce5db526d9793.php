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

/* ./backoffice/base_backoffice.html.twig */
class __TwigTemplate_67298eb7f64358a210e52a2308232f74c6ad727f76522f62190f9c6b24d04f82 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./backoffice/base_backoffice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./backoffice/base_backoffice.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"/css/style.css\"/>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>

        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
     
            <section id=\"menu-admin-top\">
                <ul>
                    <a href='";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "'><li>À Propos<div></div></li></a>
                    <a href='";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galerie");
        echo "'><li>Mes oeuvres<div></div></li></a>
                    <a href='";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("expositions");
        echo "'><li>Mes expositions<div></div></li></a>
                    <a href='/#contact'><li>Contact<div></div></li></a>
                </ul>
                <div class=\"user-section\">
                    <div class=\"row-part\">
                    <div>
                        <h1>
                            ";
        // line 31
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "firstname", [], "any", false, false, false, 31)), "html", null, true);
        echo "
                            <span>  ";
        // line 32
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32)), "html", null, true);
        echo "</span>
                        </h1>
                    </div>
                    <div class=\"menu-arrow\">
                        <span class=\"menu one\"></span>
                        <span class=\"menu two\"></span>
                    </div>
                    <div>
                        <div class=\"user-image\" style='background-image: url(\" ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "picture", [], "any", false, false, false, 40), "html", null, true);
        echo "\")'>

                        </div>
                    </div>
                    </div>
                   
                    <div class=\"hidden-menu\">
                        <ul>
                            <a href='";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "'><li id='/Individualy-Product'>Déconnexion</li></a>
                        </ul>
                    </div>
                </div>
            </section>
            <section id=\"menu-admin\">
                <div class=\"container-menu-admin\">
                    <div class='header-menu-admin'>
                        <div style='background-image: url(\"/image/webSite/logo.png\")'></div>
                        <h1>Back-Office</h1>
                        <p>Managez votre site en un clic ! </p>
                    </div>
                    <div class=\"link-container-menu-admin\">
                        <ul class=\"main-list\">
                            <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\"><li class=\"main-category\"><div style='background-image: url(\"/image/icons/admin/statistique.png\")'></div><p>Dashboard</p></li></a>
  
                            <li class=\"main-category\"><div style='background-image: url(\"/image/icons/admin/user.png\")'></div><p>Administrateur</p></li>
                            <ul>
                                <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_administrateur");
        echo "\"><li><div style='background-image: url(\"/image/icons/admin/plus.png\")'></div><p>Créer un nouvel administrateur</p></li></a>
                                <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_administrateur");
        echo "\"><li><div style='background-image: url(\"/image/icons/admin/delete.png\")'></div><p>Supprimer un administrateur</p></li></a>
                            </ul>
                            <li class=\"main-category\"><div style='background-image: url(\"/image/icons/admin/art.png\")'></div><p>Mes oeuvres</p></li>
                            <ul>
                                <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_oeuvre");
        echo "\"><li><div style='background-image: url(\"/image/icons/admin/plus.png\")'></div><p>Créer une oeuvre</p></li></a>
                                <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_oeuvre");
        echo "\"><li><div style='background-image: url(\"/image/icons/admin/pen.png\")'></div><p>Gérer mes oeuvres</p></li></a>
                            </ul>
                            <li class=\"main-category\"><div style='background-image: url(\"/image/icons/admin/spotlight.png\")'></div><p>Mes expositions</p></li>
                            <ul>
                                <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_exposition");
        echo "\"><li><div style='background-image: url(\"/image/icons/admin/plus.png\")'></div><p>Créer une exposition</p></li></a>
                                <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_exposition");
        echo "\"><li><div style='background-image: url(\"/image/icons/admin/pen.png\")'></div><p>Gérer mes expositions</p></li></a>
                            </ul>
                            <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backoffice_contact");
        echo "\"><li class=\"main-category\"><div style='background-image: url(\"/image/icons/admin/mail.png\")'></div><p>Contact</p></li></a>
                            <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backoffice_websiteSave");
        echo "\"><li class=\"main-category\"><div style='background-image: url(\"/image/icons/admin/pen.png\")'></div><p>Modifier le site web</p></li></a>
                        </ul>
                    </div>
                </div>
            </section>
        ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Benoit Fabioux - BackOffice";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_link_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_script_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "./backoffice/base_backoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 85,  253 => 15,  243 => 14,  230 => 10,  220 => 9,  201 => 5,  189 => 87,  187 => 85,  179 => 80,  175 => 79,  170 => 77,  166 => 76,  159 => 72,  155 => 71,  148 => 67,  144 => 66,  137 => 62,  120 => 48,  109 => 40,  98 => 32,  94 => 31,  84 => 24,  80 => 23,  76 => 22,  69 => 17,  67 => 14,  63 => 12,  61 => 9,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Benoit Fabioux - BackOffice{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        <link rel=\"stylesheet\" href=\"/css/style.css\"/>
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
     
            <section id=\"menu-admin-top\">
                <ul>
                    <a href='{{ path ('about') }}'><li>À Propos<div></div></li></a>
                    <a href='{{ path ('galerie') }}'><li>Mes oeuvres<div></div></li></a>
                    <a href='{{ path ('expositions') }}'><li>Mes expositions<div></div></li></a>
                    <a href='/#contact'><li>Contact<div></div></li></a>
                </ul>
                <div class=\"user-section\">
                    <div class=\"row-part\">
                    <div>
                        <h1>
                            {{ app.user.firstname|capitalize }}
                            <span>  {{ app.user.name|upper }}</span>
                        </h1>
                    </div>
                    <div class=\"menu-arrow\">
                        <span class=\"menu one\"></span>
                        <span class=\"menu two\"></span>
                    </div>
                    <div>
                        <div class=\"user-image\" style='background-image: url(\" {{ app.user.picture }}\")'>

                        </div>
                    </div>
                    </div>
                   
                    <div class=\"hidden-menu\">
                        <ul>
                            <a href='{{ path ('app_logout') }}'><li id='/Individualy-Product'>Déconnexion</li></a>
                        </ul>
                    </div>
                </div>
            </section>
            <section id=\"menu-admin\">
                <div class=\"container-menu-admin\">
                    <div class='header-menu-admin'>
                        <div style='background-image: url(\"/image/webSite/logo.png\")'></div>
                        <h1>Back-Office</h1>
                        <p>Managez votre site en un clic ! </p>
                    </div>
                    <div class=\"link-container-menu-admin\">
                        <ul class=\"main-list\">
                            <a href=\"{{ path ('dashboard') }}\"><li class=\"main-category\"><div style='background-image: url(\"/image/icons/admin/statistique.png\")'></div><p>Dashboard</p></li></a>
  
                            <li class=\"main-category\"><div style='background-image: url(\"/image/icons/admin/user.png\")'></div><p>Administrateur</p></li>
                            <ul>
                                <a href=\"{{ path ('add_administrateur') }}\"><li><div style='background-image: url(\"/image/icons/admin/plus.png\")'></div><p>Créer un nouvel administrateur</p></li></a>
                                <a href=\"{{ path ('delete_administrateur') }}\"><li><div style='background-image: url(\"/image/icons/admin/delete.png\")'></div><p>Supprimer un administrateur</p></li></a>
                            </ul>
                            <li class=\"main-category\"><div style='background-image: url(\"/image/icons/admin/art.png\")'></div><p>Mes oeuvres</p></li>
                            <ul>
                                <a href=\"{{ path ('add_oeuvre') }}\"><li><div style='background-image: url(\"/image/icons/admin/plus.png\")'></div><p>Créer une oeuvre</p></li></a>
                                <a href=\"{{ path ('manage_oeuvre') }}\"><li><div style='background-image: url(\"/image/icons/admin/pen.png\")'></div><p>Gérer mes oeuvres</p></li></a>
                            </ul>
                            <li class=\"main-category\"><div style='background-image: url(\"/image/icons/admin/spotlight.png\")'></div><p>Mes expositions</p></li>
                            <ul>
                                <a href=\"{{ path ('add_exposition') }}\"><li><div style='background-image: url(\"/image/icons/admin/plus.png\")'></div><p>Créer une exposition</p></li></a>
                                <a href=\"{{ path ('manage_exposition') }}\"><li><div style='background-image: url(\"/image/icons/admin/pen.png\")'></div><p>Gérer mes expositions</p></li></a>
                            </ul>
                            <a href=\"{{ path ('backoffice_contact') }}\"><li class=\"main-category\"><div style='background-image: url(\"/image/icons/admin/mail.png\")'></div><p>Contact</p></li></a>
                            <a href=\"{{ path ('backoffice_websiteSave') }}\"><li class=\"main-category\"><div style='background-image: url(\"/image/icons/admin/pen.png\")'></div><p>Modifier le site web</p></li></a>
                        </ul>
                    </div>
                </div>
            </section>
        {% block body %} 
        {% endblock %}
    </body>
</html>
", "./backoffice/base_backoffice.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/base_backoffice.html.twig");
    }
}
