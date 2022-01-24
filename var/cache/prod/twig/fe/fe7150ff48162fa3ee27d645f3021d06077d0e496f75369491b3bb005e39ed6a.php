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
class __TwigTemplate_1548de3060b1ccdd96aba11e5794fb203fea3537d8b3a84b584dc78591cd1384 extends Template
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
        $this->parent = $this->loadTemplate("./backoffice/base_backoffice.html.twig", "backoffice/web_site_save_backoffice/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<section id=\"formulaire-template\">
                <div class=\"formulaire-template-container\">
                    <h1>Modifier les informations de votre site web</h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                    \t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formView"] ?? null), 'form_start');
        echo " 
                            <div class=\"container-title\">
                                <h1>Partie princiaple:</h1>
                                <div class=\"form_input\">
                                    <p>Le nom de votre site web</p>
                                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "title", [], "any", false, false, false, 15), 'widget', ["value" => twig_get_attribute($this->env, $this->source, ($context["titleSave"] ?? null), "content", [], "any", false, false, false, 15)]);
        echo "
                                </div>
                                <div class=\"form_input\">
                                    <p>Le texte d'information</p>
                                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "textBreakingNews", [], "any", false, false, false, 19), 'widget', ["value" => twig_get_attribute($this->env, $this->source, ($context["textFirstSave"] ?? null), "content", [], "any", false, false, false, 19)]);
        echo "
                                </div>
                                 <div class=\"form_input_file\">
                                    <div class=\"button-part\">
                                        <p>Selectionnez l'image princiaple</p>
                                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "pictureTableau", [], "any", false, false, false, 24), 'widget', ["id" => "pictureSelect1"]);
        echo "
                                    </div>
                                    <div id=\"img-part-1\"  class=\"img-part\" style='background-image: url(\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["imageFirstSave"] ?? null), "content", [], "any", false, false, false, 26), "html", null, true);
        echo "\")'>

                                    </div>
                                </div>
                            </div> 
                             <div class=\"container-title\">
                                <h1>Partie Biographie:</h1>
                                
                                <div class=\"form_input\">
                                    <p>Le texte de Biographie</p>
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "textBio", [], "any", false, false, false, 36), 'widget', ["value" => twig_get_attribute($this->env, $this->source, ($context["textBiographie"] ?? null), "content", [], "any", false, false, false, 36)]);
        echo "
                                </div>
                                 <div class=\"form_input_file\">
                                    <div class=\"button-part\">
                                        <p>Selectionnez l'image</p>
                                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "pictureBio", [], "any", false, false, false, 41), 'widget', ["id" => "pictureSelect2"]);
        echo "
                                    </div>
                                    <div id=\"img-part-2\" class=\"img-part\" style='background-image: url(\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["imageBiographie"] ?? null), "content", [], "any", false, false, false, 43), "html", null, true);
        echo "\")'>

                                    </div>
                                </div>
                            </div> 
                            <div class=\"container-title\">
                                <h1>Partie Contact:</h1>
                                <div class=\"form_input\">
                                    <p>Votre mail</p>
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "email", [], "any", false, false, false, 52), 'widget', ["value" => twig_get_attribute($this->env, $this->source, ($context["mailSave"] ?? null), "content", [], "any", false, false, false, 52)]);
        echo "
                                </div>
                            </div> 

                            <button type=\"submit\">Valider la création</button>
                        ";
        // line 57
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
                        \$('#img-part-1').attr('style', 'background-image:url('+e.target.result+')');
                        }
                        
                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }
                function readURL2(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        
                        reader.onload = function(e) {
                        \$('#img-part-2').attr('style', 'background-image:url('+e.target.result+')');
                        }
                        
                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }
                \$(\"#pictureSelect1\").change(function() {
                readURL(this);
                });
                \$(\"#pictureSelect2\").change(function() {
                readURL2(this);
                });
            
            </script>
";
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
        return array (  131 => 57,  123 => 52,  111 => 43,  106 => 41,  98 => 36,  85 => 26,  80 => 24,  72 => 19,  65 => 15,  57 => 10,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backoffice/web_site_save_backoffice/index.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/web_site_save_backoffice/index.html.twig");
    }
}
