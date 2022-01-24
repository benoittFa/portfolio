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

/* backoffice/realisation_backoffice/create.html.twig */
class __TwigTemplate_90e99f4458d95bbfcc469921301b4de9e121f1e4d12adcd4e92cca06102b52cd extends Template
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
        $this->parent = $this->loadTemplate("./backoffice/base_backoffice.html.twig", "backoffice/realisation_backoffice/create.html.twig", 1);
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
                    <h1>Créer une oeuvre</h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                    \t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formView"] ?? null), 'form_start');
        echo "
                            <div class=\"form_input\"> 
                                <p>Titre de l'oeuvre</p>
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "title", [], "any", false, false, false, 16), 'widget');
        echo "

                            </div>

                            <div class=\"container-button\">
                                <p>Catégorie de l'oeuvre: </p>
                                <div id=\"oil-category-container\" class=\"active\" onclick=\"checkboxCategory('oil')\">
                                    Huile
                                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "oil", [], "any", false, false, false, 24), 'widget', ["id" => "oil-check"]);
        echo "
                                </div>
                                <div id=\"acrylique-category-container\" onclick=\"checkboxCategory('acrylique')\">
                                    Acrylique
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "acrylique", [], "any", false, false, false, 28), 'widget', ["id" => "acrylique-check"]);
        echo "
                                </div>
                            </div>

                            <div class=\"form_input_file\">
                                <div class=\"button-part\">
                                    <p>Photo de l'oeuvre</p>
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "picture", [], "any", false, false, false, 35), 'widget', ["id" => "pictureSelect"]);
        echo "
                                </div>
                                <div id=\"img-part\" class=\"img-part\" style='background-image:url(\"/image/default-picture.png\")'>

                                </div>
                            </div>
                             <div class=\"container-button\">
                                <p>Type de l'oeuvre: </p>
                                <div id=\"portrait-category-container\" class=\"active\" onclick=\"checkboxMode('portrait')\">
                                    Portrait
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "portrait", [], "any", false, false, false, 45), 'widget', ["id" => "portrait-check"]);
        echo "
                                </div>
                                <div id=\"paysage-category-container\" onclick=\"checkboxMode('paysage')\">
                                    Paysage
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "paysage", [], "any", false, false, false, 49), 'widget', ["id" => "paysage-check"]);
        echo "
                                </div>
                            </div>

                            <div id=\"form-taille-number\" className=\"non-validate\">
                                <div class=\"form_input_double_input\">
                                    <p>Format</p>
                                    <div>
                                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "format", [], "any", false, false, false, 57), 'widget');
        echo "
                                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "format2", [], "any", false, false, false, 58), 'widget');
        echo "    
                                    </div>     
                                </div>
                            </div>

                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "admin", [], "any", false, false, false, 63), 'widget', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63)]);
        echo "

                          
                            <button type=\"submit\">Valider la création</button>
                        ";
        // line 67
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
        return "backoffice/realisation_backoffice/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 67,  144 => 63,  136 => 58,  132 => 57,  121 => 49,  114 => 45,  101 => 35,  91 => 28,  84 => 24,  73 => 16,  67 => 13,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backoffice/realisation_backoffice/create.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/realisation_backoffice/create.html.twig");
    }
}
