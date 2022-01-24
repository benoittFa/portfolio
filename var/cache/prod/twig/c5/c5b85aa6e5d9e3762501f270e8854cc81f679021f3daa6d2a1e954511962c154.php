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

/* backoffice/exposition/create.html.twig */
class __TwigTemplate_1e889ff3b08c09cd8f75342fad1c2dae6fe047810439fc7d97b010cc513d30b3 extends Template
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
        $this->parent = $this->loadTemplate("./backoffice/base_backoffice.html.twig", "backoffice/exposition/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <script src=\"/js/backoffice/checkbox.js\"></script>
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo " <section id=\"formulaire-template\">
                <div class=\"formulaire-template-container\">
                    <h1>Créer une exposition</h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                    \t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formView"] ?? null), 'form_start');
        echo "
                            <div class=\"form_input\"> 
                                <p>Titre de l'exposition</p>
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "title", [], "any", false, false, false, 16), 'row');
        echo "
                            </div>

                            <div class=\"form_input_file\">
                                <div class=\"button-part\">
                                    <p>Photo de l'exposition</p>
                                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "picture", [], "any", false, false, false, 22), 'widget', ["id" => "pictureSelect"]);
        echo "
                                </div>
                                <div id=\"img-part\" class=\"img-part\" style='background-image:url(\"/image/default-picture.png\")'>

                                </div>
                            </div>
                            <div class=\"form_input\"> 
                                <p>Texte de l'exposition</p>
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "texte", [], "any", false, false, false, 30), 'row');
        echo "
                            </div>
                     
                            
                            <button type=\"submit\">Valider la création</button>
                        ";
        // line 35
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
                        \$('#img-part').attr('style', 'background-image:url('+e.target.result+')');
                        }
                        
                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }

                \$(\"#pictureSelect\").change(function() {
                readURL(this);
                });
            
            </script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/exposition/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 35,  93 => 30,  82 => 22,  73 => 16,  67 => 13,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backoffice/exposition/create.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/exposition/create.html.twig");
    }
}
