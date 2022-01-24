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

/* vitrine_website/galerie.html.twig */
class __TwigTemplate_acf7be5802805dbabbb7d5624d87e9dbc4c218d1640c45d28d68e54df0638722 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "vitrine_website/galerie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Benoit Fabioux - Galerie";
    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<script>
    window.onscroll = function(ev) {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            document.getElementById('mouse-scroll').classList.add('un-active');
            document.getElementById('roll-up-button').classList.remove('un-active');
        }else{
            document.getElementById('mouse-scroll').classList.remove('un-active');
            document.getElementById('roll-up-button').classList.add('un-active');
        }
    };

    function categoryChange(category){
        if(category === 'huile'){   
            document.body.classList.remove('dark-theme');

            document.getElementById('huile-category').classList.add('active');
            document.getElementById('acrylique-category').classList.remove('active');

        }else if(category === 'acrylique'){
           
            document.body.classList.add('dark-theme');

            document.getElementById('huile-category').classList.remove('active');
            document.getElementById('acrylique-category').classList.add('active');

        }
    }

</script>
           
";
    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    <div id=\"action-right-bottom\">
        <div id=\"mouse-scroll\" class=\"mouse_btn\">
            <a class=\"smooth\" href=\"#qui_est_il\">
                <span class=\"mouse\">
                    <span>
                    </span>
                </span>
            </a>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
        </div>
        <div id=\"roll-up-button\" class=\"roll-up-button-g un-active\" onclick=\"window.scrollTo({top: 0, behavior: 'smooth'});\">
            <div></div>
        </div>
    </div>

    <section id=\"button-category-section\">
        <div id=\"button-category-container\" class=\"button-category-container\">
            <div id=\"huile-category\" onclick=\"categoryChange('huile')\" class=\"active\"><p>Huile</p></div>
            <div id=\"acrylique-category\" onclick=\"categoryChange('acrylique')\"><p>Acrylique</p></div>
        </div>
    </section>

    <section id=\"galery-section\">
        <div class=\"galery-container\">

            
                <div class=\" container huile-section\">
                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artworks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["artwork"]) {
            // line 67
            echo "                        
                        ";
            // line 68
            if ((twig_get_attribute($this->env, $this->source, $context["artwork"], "categorie", [], "any", false, false, false, 68) == "Huile")) {
                // line 69
                echo "                            <div  class=\"galery-contenu\">
                                    ";
                // line 70
                if ((twig_get_attribute($this->env, $this->source, $context["artwork"], "type", [], "any", false, false, false, 70) == true)) {
                    // line 71
                    echo "                                    <div style=\"width:75%\">

                                        <div class=\"image-contenu\" >
                                            <a href='";
                    // line 74
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galerie_oeuvre", ["id" => twig_get_attribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                    echo "'>
                                                <img src=\"";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "picture", [], "any", false, false, false, 75), "html", null, true);
                    echo "\"/>
                                            </a>    
                                        </div> 
                                    ";
                } else {
                    // line 79
                    echo "                                     <div style=\"width:100%\">

                                        <div class=\"image-contenu\" >
                                            <a href='";
                    // line 82
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galerie_oeuvre", ["id" => twig_get_attribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                    echo "'>
                                                <img src=\"";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "picture", [], "any", false, false, false, 83), "html", null, true);
                    echo "\"/>
                                            </a>                                         
                                        </div> 
                                    ";
                }
                // line 86
                echo "  
                                    
                                <h1>";
                // line 88
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "title", [], "any", false, false, false, 88)), "html", null, true);
                echo "</h1>
                                <p><span>";
                // line 89
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "categorie", [], "any", false, false, false, 89)), "html", null, true);
                echo " |</span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "format", [], "any", false, false, false, 89), "html", null, true);
                echo " x ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "format2", [], "any", false, false, false, 89), "html", null, true);
                echo "</p>
                            </div>
                            </div>
                        ";
            }
            // line 92
            echo "  
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artwork'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "  
                </div>
                <div class=\"container acrylyque-section\">
                    ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artworks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["artwork"]) {
            // line 97
            echo "                        
                        ";
            // line 98
            if ((twig_get_attribute($this->env, $this->source, $context["artwork"], "categorie", [], "any", false, false, false, 98) == "Acrylique")) {
                // line 99
                echo "                            <div  class=\"galery-contenu\">
                                     ";
                // line 100
                if ((twig_get_attribute($this->env, $this->source, $context["artwork"], "type", [], "any", false, false, false, 100) == true)) {
                    // line 101
                    echo "                                    <div style=\"width:75%\">

                                        <div class=\"image-contenu\" >
                                            <a href='";
                    // line 104
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galerie_oeuvre", ["id" => twig_get_attribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 104)]), "html", null, true);
                    echo "'>
                                                <img src=\"";
                    // line 105
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "picture", [], "any", false, false, false, 105), "html", null, true);
                    echo "\"/>
                                            </a>    
                                        </div> 
                                    ";
                } else {
                    // line 109
                    echo "                                     <div style=\"width:100%\">

                                        <div class=\"image-contenu\" >
                                            <a href='";
                    // line 112
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galerie_oeuvre", ["id" => twig_get_attribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 112)]), "html", null, true);
                    echo "'>
                                                <img src=\"";
                    // line 113
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "picture", [], "any", false, false, false, 113), "html", null, true);
                    echo "\"/>
                                            </a>                                         
                                        </div> 
                                    ";
                }
                // line 116
                echo "  
                                    
                                <h1>";
                // line 118
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "title", [], "any", false, false, false, 118)), "html", null, true);
                echo "</h1>
                                <p><span>";
                // line 119
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "categorie", [], "any", false, false, false, 119)), "html", null, true);
                echo " |</span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "format", [], "any", false, false, false, 119), "html", null, true);
                echo " x ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "format2", [], "any", false, false, false, 119), "html", null, true);
                echo "</p>
                            </div>
                            </div>
                        ";
            }
            // line 122
            echo "  
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artwork'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "  
                </div>
            
          

        </div>

        <div class='mentions-legales'>
            <p id=\"right-paragraph\">©2022 Tous droits réservés Benoit Fabioux</p>

            <div>
                <a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_legales");
        echo "\">
                    <p>Mentions légales</p>
                </a>
                <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("politiques_confidentialites");
        echo "\">
                    <p>Politique de confidentialités</p>
                </a>
            </div>
        </div>
    </section>

    <script> 
        let date = new Date();
        document.getElementById('right-paragraph').innerHTML = \"©\"+date.getFullYear()+\" Tous droits réservés Benoit Fabioux\";
    </script>

";
    }

    public function getTemplateName()
    {
        return "vitrine_website/galerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 137,  288 => 134,  275 => 123,  268 => 122,  257 => 119,  253 => 118,  249 => 116,  242 => 113,  238 => 112,  233 => 109,  226 => 105,  222 => 104,  217 => 101,  215 => 100,  212 => 99,  210 => 98,  207 => 97,  203 => 96,  198 => 93,  191 => 92,  180 => 89,  176 => 88,  172 => 86,  165 => 83,  161 => 82,  156 => 79,  149 => 75,  145 => 74,  140 => 71,  138 => 70,  135 => 69,  133 => 68,  130 => 67,  126 => 66,  97 => 39,  93 => 38,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vitrine_website/galerie.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/vitrine_website/galerie.html.twig");
    }
}
