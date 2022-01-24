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
class __TwigTemplate_e3c86a0073b58bdf13049c7fdfddc89a3cd673a62debb532b2ec26c789adbcef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine_website/galerie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine_website/galerie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vitrine_website/galerie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Benoit Fabioux - Galerie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        <div id=\"roll-up-button\" class=\"roll-up-button-g un-active\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["artworks"]) || array_key_exists("artworks", $context) ? $context["artworks"] : (function () { throw new RuntimeError('Variable "artworks" does not exist.', 66, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["artworks"]) || array_key_exists("artworks", $context) ? $context["artworks"] : (function () { throw new RuntimeError('Variable "artworks" does not exist.', 96, $this->source); })()));
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
                <a href=\"\">
                    <p>Mentions légales</p>
                </a>
                <a href=\"\">
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  317 => 123,  310 => 122,  299 => 119,  295 => 118,  291 => 116,  284 => 113,  280 => 112,  275 => 109,  268 => 105,  264 => 104,  259 => 101,  257 => 100,  254 => 99,  252 => 98,  249 => 97,  245 => 96,  240 => 93,  233 => 92,  222 => 89,  218 => 88,  214 => 86,  207 => 83,  203 => 82,  198 => 79,  191 => 75,  187 => 74,  182 => 71,  180 => 70,  177 => 69,  175 => 68,  172 => 67,  168 => 66,  139 => 39,  129 => 38,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Benoit Fabioux - Galerie{% endblock %}

{% block javascripts %}
<script>
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
           
{% endblock %}

{% block body %}
    <div id=\"action-right-bottom\">
        <div id=\"mouse-scroll\" class=\"mouse_btn\">
            <a class=\"smooth\" href=\"#qui_est_il\">
                <span class=\"mouse\">
                    <span>
                    </span>
                </span>
            </a>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
        </div>
        <div id=\"roll-up-button\" class=\"roll-up-button-g un-active\">
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
                    {% for artwork in artworks %}
                        
                        {% if artwork.categorie == 'Huile' %}
                            <div  class=\"galery-contenu\">
                                    {% if artwork.type == true %}
                                    <div style=\"width:75%\">

                                        <div class=\"image-contenu\" >
                                            <a href='{{ path ('galerie_oeuvre', {'id': artwork.id}) }}'>
                                                <img src=\"{{ artwork.picture }}\"/>
                                            </a>    
                                        </div> 
                                    {% else %}
                                     <div style=\"width:100%\">

                                        <div class=\"image-contenu\" >
                                            <a href='{{ path ('galerie_oeuvre', {'id': artwork.id}) }}'>
                                                <img src=\"{{ artwork.picture }}\"/>
                                            </a>                                         
                                        </div> 
                                    {% endif %}  
                                    
                                <h1>{{ artwork.title|upper }}</h1>
                                <p><span>{{ artwork.categorie|capitalize }} |</span> {{ artwork.format }} x {{ artwork.format2 }}</p>
                            </div>
                            </div>
                        {% endif %}  
                    {% endfor %}  
                </div>
                <div class=\"container acrylyque-section\">
                    {% for artwork in artworks %}
                        
                        {% if artwork.categorie == 'Acrylique' %}
                            <div  class=\"galery-contenu\">
                                     {% if artwork.type == true %}
                                    <div style=\"width:75%\">

                                        <div class=\"image-contenu\" >
                                            <a href='{{ path ('galerie_oeuvre', {'id': artwork.id}) }}'>
                                                <img src=\"{{ artwork.picture }}\"/>
                                            </a>    
                                        </div> 
                                    {% else %}
                                     <div style=\"width:100%\">

                                        <div class=\"image-contenu\" >
                                            <a href='{{ path ('galerie_oeuvre', {'id': artwork.id}) }}'>
                                                <img src=\"{{ artwork.picture }}\"/>
                                            </a>                                         
                                        </div> 
                                    {% endif %}  
                                    
                                <h1>{{ artwork.title|upper }}</h1>
                                <p><span>{{ artwork.categorie|capitalize }} |</span> {{ artwork.format }} x {{ artwork.format2 }}</p>
                            </div>
                            </div>
                        {% endif %}  
                    {% endfor %}  
                </div>
            
          

        </div>

        <div class='mentions-legales'>
            <p id=\"right-paragraph\">©2022 Tous droits réservés Benoit Fabioux</p>

            <div>
                <a href=\"\">
                    <p>Mentions légales</p>
                </a>
                <a href=\"\">
                    <p>Politique de confidentialités</p>
                </a>
            </div>
        </div>
    </section>

    <script> 
        let date = new Date();
        document.getElementById('right-paragraph').innerHTML = \"©\"+date.getFullYear()+\" Tous droits réservés Benoit Fabioux\";
    </script>

{% endblock %}
", "vitrine_website/galerie.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/vitrine_website/galerie.html.twig");
    }
}
