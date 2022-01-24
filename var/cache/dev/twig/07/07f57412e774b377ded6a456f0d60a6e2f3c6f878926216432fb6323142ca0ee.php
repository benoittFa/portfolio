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
class __TwigTemplate_8a44c2022bedb4603abb0d445805d7d2aa8b8a6672d3f590baa396ce6ba9805a extends Template
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
        echo "
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </head>
    <body>
     
            <section id=\"menu-admin-top\">
                <ul>
                    <a href='/'><li id='/' >À Propos<div></div></li></a>
                    <a href='/Individualy-Product'><li id='/Individualy-Product'>Mes oeuvres<div></div></li></a>
                    <a href='/#contact'><li id='/#contact'>Contact<div></div></li></a>
                </ul>
                <div class=\"user-section\">
                    <div class=\"row-part\">
                    <div>
                        <h1>
                            Paul
                            <span> Fauconnier</span>
                        </h1>
                    </div>
                    <div class=\"menu-arrow\">
                        <span class=\"menu one\"></span>
                        <span class=\"menu two\"></span>
                    </div>
                    <div>
                        <div class=\"user-image\" style='background-image: url(\"/image/administrateur/default-user.png\")'>

                        </div>
                    </div>
                    </div>
                   
                    <div class=\"hidden-menu\">
                        <ul>
                            <a href='/admin-user-account'><li id='/' >Mon compte</li></a>
                            <div class=\"stroke-admin\"></div>
                            <a href='/log-out'><li id='/Individualy-Product'>Déconnexion</li></a>
                        </ul>
                    </div>
                </div>
            </section>
            <section id=\"menu-admin\">
                <div class=\"container-menu-admin\">
                    <div class='header-menu-admin'>
                        <div style='background-image: url(\"/image/webSite/logo.png\")'></div>
                        <h1>Connexion</h1>
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
                            <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backoffice_contact");
        echo "\"><li class=\"main-category\"><div style='background-image: url(\"/image/icons/admin/mail.png\")'></div><p>Contact</p></li></a>
                            <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backoffice_websiteSave");
        echo "\"><li class=\"main-category\"><div style='background-image: url(\"/image/icons/admin/pen.png\")'></div><p>Modifier le site web</p></li></a>
                        </ul>
                    </div>
                </div>
            </section>
        ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 82
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

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_script_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
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
        return array (  234 => 80,  221 => 14,  211 => 13,  198 => 10,  188 => 9,  169 => 5,  157 => 82,  155 => 80,  147 => 75,  143 => 74,  138 => 72,  134 => 71,  127 => 67,  123 => 66,  116 => 62,  68 => 16,  66 => 13,  63 => 12,  61 => 9,  58 => 8,  53 => 5,  47 => 1,);
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

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
     
            <section id=\"menu-admin-top\">
                <ul>
                    <a href='/'><li id='/' >À Propos<div></div></li></a>
                    <a href='/Individualy-Product'><li id='/Individualy-Product'>Mes oeuvres<div></div></li></a>
                    <a href='/#contact'><li id='/#contact'>Contact<div></div></li></a>
                </ul>
                <div class=\"user-section\">
                    <div class=\"row-part\">
                    <div>
                        <h1>
                            Paul
                            <span> Fauconnier</span>
                        </h1>
                    </div>
                    <div class=\"menu-arrow\">
                        <span class=\"menu one\"></span>
                        <span class=\"menu two\"></span>
                    </div>
                    <div>
                        <div class=\"user-image\" style='background-image: url(\"/image/administrateur/default-user.png\")'>

                        </div>
                    </div>
                    </div>
                   
                    <div class=\"hidden-menu\">
                        <ul>
                            <a href='/admin-user-account'><li id='/' >Mon compte</li></a>
                            <div class=\"stroke-admin\"></div>
                            <a href='/log-out'><li id='/Individualy-Product'>Déconnexion</li></a>
                        </ul>
                    </div>
                </div>
            </section>
            <section id=\"menu-admin\">
                <div class=\"container-menu-admin\">
                    <div class='header-menu-admin'>
                        <div style='background-image: url(\"/image/webSite/logo.png\")'></div>
                        <h1>Connexion</h1>
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
