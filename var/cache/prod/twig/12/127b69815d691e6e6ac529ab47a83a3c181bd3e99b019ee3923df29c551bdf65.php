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

/* backoffice/realisation_backoffice/update.html.twig */
class __TwigTemplate_a402211da760be2b55b4084d3281365e469f8caf9103fd411d0c2a109b57d237 extends Template
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
        $this->parent = $this->loadTemplate("./backoffice/base_backoffice.html.twig", "backoffice/realisation_backoffice/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <script src=\"/js/backoffice/checkbox.js\"></script>
    <script>
        function startView(){

            ";
        // line 8
        if ((($context["category"] ?? null) == "Huile")) {
            // line 9
            echo "                document.getElementById('oil-category-container').classList.add('active');
                document.getElementById('oil-check').checked = true;
            ";
        } else {
            // line 12
            echo "                document.getElementById('acrylique-category-container').classList.add('active');
                document.getElementById('acrylique-check').checked = true;
            ";
        }
        // line 15
        echo "
            ";
        // line 16
        if ((($context["type"] ?? null) == true)) {
            // line 17
            echo "                document.getElementById('portrait-category-container').classList.add('active');
                document.getElementById('portrait-check').checked = true;
            ";
        } else {
            // line 20
            echo "                document.getElementById('paysage-category-container').classList.add('active');
                document.getElementById('paysage-check').checked = true;
            ";
        }
        // line 23
        echo "
        }
    </script>
";
    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo " <section id=\"formulaire-template\">
                <div class=\"formulaire-template-container\">
                    <h1>Modifier une oeuvre <span>- ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["artwork"] ?? null), "title", [], "any", false, false, false, 31), "html", null, true);
        echo "</span></h1>
                    <div class=\"stroke\"></div>
                    <div class=\"container-formulaire-template\">
                    \t";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formView"] ?? null), 'form_start');
        echo "
                            <div class=\"form_input\"> 
                                <p>Titre de l'oeuvre</p>
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "title", [], "any", false, false, false, 37), 'widget');
        echo "

                            </div>

                            <div class=\"container-button\">
                                <p>Catégorie de l'oeuvre: </p>
                                <div id=\"oil-category-container\" onclick=\"checkboxCategory('oil')\">
                                    Huile
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "oil", [], "any", false, false, false, 45), 'widget', ["id" => "oil-check"]);
        echo "
                                </div>
                                <div id=\"acrylique-category-container\" onclick=\"checkboxCategory('acrylique')\">
                                    Acrylique
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "acrylique", [], "any", false, false, false, 49), 'widget', ["id" => "acrylique-check"]);
        echo "
                                </div>
                            </div>
                            <div class=\"form_input_file\">
                                <div class=\"button-part\">
                                    <p>Photo de l'oeuvre</p>
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "picture", [], "any", false, false, false, 55), 'widget');
        echo "
                                </div>
                                <div class=\"img-part\" style='background-image:url(\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["picture"] ?? null), "html", null, true);
        echo "\")'>

                                </div>
                            </div>
                              <div class=\"container-button\">
                                <p>Type de l'oeuvre: </p>
                                <div id=\"portrait-category-container\" onclick=\"checkboxMode('portrait')\">
                                    Portrait
                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "portrait", [], "any", false, false, false, 65), 'widget', ["id" => "portrait-check"]);
        echo "
                                </div>
                                <div id=\"paysage-category-container\" onclick=\"checkboxMode('paysage')\">
                                    Paysage
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "paysage", [], "any", false, false, false, 69), 'widget', ["id" => "paysage-check"]);
        echo "
                                </div>
                            </div>
                            <div id=\"form-taille-number\" className=\"non-validate\">
                                <div class=\"form_input_double_input\">
                                    <p>Format</p>
                                    <div>
                                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "format", [], "any", false, false, false, 76), 'widget');
        echo "
                                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "format2", [], "any", false, false, false, 77), 'widget');
        echo "    
                                    </div>     
                                </div>
                            </div>
                            
                            <button type=\"submit\">Valider la création</button>
                    \t";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formView"] ?? null), 'form_end');
        echo "
                    </div>

                </div>
            </section>
            <script> 
                window.onload = startView();
            </script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/realisation_backoffice/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 83,  175 => 77,  171 => 76,  161 => 69,  154 => 65,  143 => 57,  138 => 55,  129 => 49,  122 => 45,  111 => 37,  105 => 34,  99 => 31,  95 => 29,  91 => 28,  84 => 23,  79 => 20,  74 => 17,  72 => 16,  69 => 15,  64 => 12,  59 => 9,  57 => 8,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backoffice/realisation_backoffice/update.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/backoffice/realisation_backoffice/update.html.twig");
    }
}
