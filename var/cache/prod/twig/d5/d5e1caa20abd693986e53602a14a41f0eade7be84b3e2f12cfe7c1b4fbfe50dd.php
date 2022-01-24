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
class __TwigTemplate_87c1f4896f83e6db1e95b3067025f3f5706f301714b3cc21d7292fe21bc2e4a3 extends Template
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
        $this->parent = $this->loadTemplate("./backoffice/base_backoffice.html.twig", "backoffice/administrateur_backoffice/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <script src=\"/js/backoffice/password.js\"></script>
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo " <section id=\"formulaire-template\">
                <div class=\"formulaire-template-container\">
                    <h1>Créer un nouvel administrateur</h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                    \t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formView"] ?? null), 'form_start');
        echo "

\t                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formView"] ?? null), 'errors');
        echo "
                            <div class=\"form_input\"> 
                                <p>Son nom</p>
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "name", [], "any", false, false, false, 18), 'row');
        echo "
                            </div>
                            <div class=\"form_input\">
                                <p>Son prénom</p>
                                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "firstname", [], "any", false, false, false, 22), 'row');
        echo "
                            </div>
                            <div class=\"form_input\">
                                <p>Son e-mail</p>
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "mail", [], "any", false, false, false, 26), 'row');
        echo "
                            </div>
                            <div class=\"form_input\">
                                <p>Son téléphone</p>
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "phonenumber", [], "any", false, false, false, 30), 'row');
        echo "
                            </div>
                            <div class=\"form_input_file\">
                                <div class=\"button-part\">
                                    <p>Photo de profil</p>
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "picture", [], "any", false, false, false, 35), 'widget', ["id" => "pictureAdmin"]);
        echo "
                                </div>
                                <div id=\"img-admin-part\"  style='background-image:url(\"/image/administrateur/default-user.png\")' class=\"img-part\" >
                                </div>
                            </div>
                            <div class=\"form_input\">
                                <p>Rôle dans la société</p>

                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "jobName", [], "any", false, false, false, 43), 'row');
        echo "
                            </div>
                            <div id=\"password-input\" class=\"form_input\">
                                <p>Le mot de passe</p>
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "password", [], "any", false, false, false, 47), 'row', ["id" => "password"]);
        echo "
                            </div>
                            <div id=\"password-review-input\" class=\"form_input\">
                                <p>Confirmer le mot de passe</p>
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "verifPWD", [], "any", false, false, false, 51), 'row', ["id" => "verifPassword"]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formView"] ?? null), 'form_end');
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
        return array (  146 => 62,  132 => 51,  125 => 47,  118 => 43,  107 => 35,  99 => 30,  92 => 26,  85 => 22,  78 => 18,  72 => 15,  67 => 13,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backoffice/administrateur_backoffice/create.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/administrateur_backoffice/create.html.twig");
    }
}
