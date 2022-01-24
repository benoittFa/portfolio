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

/* backoffice/administrateur_backoffice/signup.html.twig */
class __TwigTemplate_510448c344683c05917531e1662e9652f39dd2dce83ffed6ad747d9b323fbc9d extends Template
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
        return "./base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("./base.html.twig", "backoffice/administrateur_backoffice/signup.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <section id=\"connexion-admin\">      
        <div class='form-container'>
            <div style='background-image: url(\"/image/webSite/logoN.png\")'></div>
                <h1>Connexion</h1>
                <p>Managez votre site en un clic ! </p>
                
                ";
        // line 11
        if (($context["error"] ?? null)) {
            // line 12
            echo "                    <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 12), "security"), "html", null, true);
            echo "</p>
                ";
        }
        // line 14
        echo "
                ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "                    <p>
                        Vous êtes connecté en tant que ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 17), "email", [], "any", false, false, false, 17), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                    </p>
                ";
        }
        // line 20
        echo "                <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup_administrateur");
        echo "\" method=\"post\">
                    <div class=\"form_input\">
                        <p>Votre identifiant</p>
                        <input type=\"text\" required placeholder=\"contact@mondomaine.com\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"_username\" />
                    </div>
                    <div class=\"form_input\">
                        <p>Votre mot de passe</p> 
                        <input type=\"password\" required placeholder=\"••••••••\" name=\"_password\" />
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_target_path\" value=\"/admin/dashboard\"/> 

                    <button type=\"submit\">Je me connecte</button>
                </form> 
                
       
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "backoffice/administrateur_backoffice/signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 29,  89 => 23,  82 => 20,  74 => 17,  71 => 16,  69 => 15,  66 => 14,  60 => 12,  58 => 11,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backoffice/administrateur_backoffice/signup.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/administrateur_backoffice/signup.html.twig");
    }
}
