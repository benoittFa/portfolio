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

/* base.html.twig */
class __TwigTemplate_3e73cd54ea0913384dff5937bd7707fe9d8d49cf7bf7966a870480f3dfd641e2 extends Template
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
       
        

             <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\"><div id=\"logotype-menu-img\" class=\"menu-vitrine logotype-menu\"></div></a>
            <div id=\"menu-vitrine\" class=\"menu-vitrine link-list\">
                <ul>
                    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galerie");
        echo "\">
                        <li id=\"galery\">
                            <p>Galerie</p>
                            <div class=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["galeryMenu"] ?? null), "html", null, true);
        echo "\"></div>
                        </li>

                    </a>
                    <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">
                        <li id=\"about\" >
                            <p>À propos</p>
                            <div class=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["aboutMenu"] ?? null), "html", null, true);
        echo "\" ></div>
                        </li>
                    </a>
                     <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("expositions");
        echo "\">
                        <li id=\"exposistions\">
                            <p>Expositions</p>
                            <div class=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["expositionMenu"] ?? null), "html", null, true);
        echo "\"></div>
                        </li>
                    </a>
                    <a href=\"/#contact-section\">
                        <li id=\"contact\">
                            <p>Contact</p>
                            <div ></div>
                        </li>
                    </a>
                    ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 49)) {
            // line 50
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">
                        <li>
                            <p>Backoffice</p>
                            <div ></div>
                        </li>
                    </a>
                    ";
        }
        // line 57
        echo "                </ul>
            </div>
        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Benoit Fabioux";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_link_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_script_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "            

        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 60,  172 => 59,  165 => 14,  161 => 13,  154 => 10,  150 => 9,  143 => 5,  137 => 63,  135 => 59,  131 => 57,  120 => 50,  118 => 49,  106 => 40,  100 => 37,  94 => 34,  88 => 31,  81 => 27,  75 => 24,  69 => 21,  62 => 16,  60 => 13,  57 => 12,  55 => 9,  52 => 8,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/base.html.twig");
    }
}
