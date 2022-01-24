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

/* vitrine_website/galerie_oeuvre.html.twig */
class __TwigTemplate_a373fc59e17517b41ad78e1d3f8163dd82e831d24c2eea0f132029d486536cea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine_website/galerie_oeuvre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine_website/galerie_oeuvre.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Benoit Fabioux - Galerie</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 9
        echo "        <link rel=\"stylesheet\" href=\"/css/style.css\"/>
        ";
        // line 10
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    </head>
    <body>
        <a href='";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galerie");
        echo "'><p id=\"return-galerie\">Retourner à la galerie</p></a>
            
        <a onclick=\"slideOn('left')\">
            <div id=\"arrow-left-nav-galerie\" style='background-image:url(\"/image/icons/back.svg\");' class=\"arrow-nav-galerie\"></div>
        </a>
        <a onclick=\"slideOn('right')\">
            <div id=\"arrow-right-nav-galerie\" style='background-image:url(\"/image/icons/back.svg\");' class=\"arrow-nav-galerie\" ></div>
        </a>
            

        <section id=\"galerie-oeuvre-carroussel\">
                

                 ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artworks"]) || array_key_exists("artworks", $context) ? $context["artworks"] : (function () { throw new RuntimeError('Variable "artworks" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["artwork"]) {
            // line 77
            echo "                    <script>
                        tabLenght = idTab.push(";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 78), "html", null, true);
            echo ");
              
                    </script>

                    <div id=\"container-oeuvre-galerie-";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "\" class=\"container-oeuvre-galerie\">
                        <div class=\"contenu-oeuvre-galerie\">
                            <img src=\"/";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "picture", [], "any", false, false, false, 84), "html", null, true);
            echo "\"/>
                            <div>
                                <h2>";
            // line 86
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "title", [], "any", false, false, false, 86)), "html", null, true);
            echo "</h2>
                                <p>";
            // line 87
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "categorie", [], "any", false, false, false, 87)), "html", null, true);
            echo "</span> | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "format", [], "any", false, false, false, 87), "html", null, true);
            echo " x ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "format2", [], "any", false, false, false, 87), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artwork'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    
                

        </section>
    </body>
</html>

<script>
    function carousselSet( id ){
        document.getElementById('container-oeuvre-galerie-'+id).classList.add('on-the-top');
        var i=1;
        while(id > i){
            document.getElementById('container-oeuvre-galerie-'+i).classList.add('on-the-left');
            i++;
        }
        i++;
        while(i<=tabLenght){
            document.getElementById('container-oeuvre-galerie-'+i).classList.add('on-the-right');
            i++;
        }
    }

    window.onload = carousselSet( '";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["idArt"]) || array_key_exists("idArt", $context) ? $context["idArt"] : (function () { throw new RuntimeError('Variable "idArt" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "' );
</script>      
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "            <script>
                var idTab = [] , tabLenght;
                var currentId = ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["idArt"]) || array_key_exists("idArt", $context) ? $context["idArt"] : (function () { throw new RuntimeError('Variable "idArt" does not exist.', 13, $this->source); })()), "html", null, true);
        echo ";


                function slideOn(side){
                    
                    if(side =='left'){
                        if(currentId <= 1){ 
                            document.getElementById('arrow-left-nav-galerie').style.display = 'none';
                        }else{
                            document.getElementById('arrow-right-nav-galerie').style.display = 'block';
                            document.getElementById('container-oeuvre-galerie-'+currentId).classList.remove('on-the-top');
                            document.getElementById('container-oeuvre-galerie-'+currentId).classList.add('on-the-right');
                            if(side == 'left'){
                                currentId--;                    
                            }else if(side == 'right'){
                                currentId++;
                            }
                        }
                        document.getElementById('container-oeuvre-galerie-'+currentId).classList.add('on-the-top');
                        document.getElementById('container-oeuvre-galerie-'+currentId).classList.remove('on-the-left');

                    }else if(side =='right'){
                        if(currentId >= tabLenght){
                            document.getElementById('arrow-right-nav-galerie').style.display = 'none';
                        }else{
                            document.getElementById('arrow-right-nav-galerie').style.display = 'block';
                            document.getElementById('container-oeuvre-galerie-'+currentId).classList.remove('on-the-top');
                            document.getElementById('container-oeuvre-galerie-'+currentId).classList.add('on-the-left');
                            if(side == 'left'){
                                currentId--;                    
                            }else if(side == 'right'){
                                currentId++;
                            }
                        }
                        document.getElementById('container-oeuvre-galerie-'+currentId).classList.add('on-the-top');
                        document.getElementById('container-oeuvre-galerie-'+currentId).classList.remove('on-the-right');

                    }
                       
                    console.log(currentId)
                    if(side == 'left'){
                    }else if(side == 'right'){
                    }
                    
                    
                }
            </script>      
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vitrine_website/galerie_oeuvre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 13,  168 => 11,  158 => 10,  145 => 113,  121 => 91,  106 => 87,  102 => 86,  97 => 84,  92 => 82,  85 => 78,  82 => 77,  78 => 76,  62 => 63,  58 => 61,  56 => 10,  53 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Benoit Fabioux - Galerie</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        <link rel=\"stylesheet\" href=\"/css/style.css\"/>
        {% block javascripts %}
            <script>
                var idTab = [] , tabLenght;
                var currentId = {{idArt}};


                function slideOn(side){
                    
                    if(side =='left'){
                        if(currentId <= 1){ 
                            document.getElementById('arrow-left-nav-galerie').style.display = 'none';
                        }else{
                            document.getElementById('arrow-right-nav-galerie').style.display = 'block';
                            document.getElementById('container-oeuvre-galerie-'+currentId).classList.remove('on-the-top');
                            document.getElementById('container-oeuvre-galerie-'+currentId).classList.add('on-the-right');
                            if(side == 'left'){
                                currentId--;                    
                            }else if(side == 'right'){
                                currentId++;
                            }
                        }
                        document.getElementById('container-oeuvre-galerie-'+currentId).classList.add('on-the-top');
                        document.getElementById('container-oeuvre-galerie-'+currentId).classList.remove('on-the-left');

                    }else if(side =='right'){
                        if(currentId >= tabLenght){
                            document.getElementById('arrow-right-nav-galerie').style.display = 'none';
                        }else{
                            document.getElementById('arrow-right-nav-galerie').style.display = 'block';
                            document.getElementById('container-oeuvre-galerie-'+currentId).classList.remove('on-the-top');
                            document.getElementById('container-oeuvre-galerie-'+currentId).classList.add('on-the-left');
                            if(side == 'left'){
                                currentId--;                    
                            }else if(side == 'right'){
                                currentId++;
                            }
                        }
                        document.getElementById('container-oeuvre-galerie-'+currentId).classList.add('on-the-top');
                        document.getElementById('container-oeuvre-galerie-'+currentId).classList.remove('on-the-right');

                    }
                       
                    console.log(currentId)
                    if(side == 'left'){
                    }else if(side == 'right'){
                    }
                    
                    
                }
            </script>      
        {% endblock %}
    </head>
    <body>
        <a href='{{ path ('galerie') }}'><p id=\"return-galerie\">Retourner à la galerie</p></a>
            
        <a onclick=\"slideOn('left')\">
            <div id=\"arrow-left-nav-galerie\" style='background-image:url(\"/image/icons/back.svg\");' class=\"arrow-nav-galerie\"></div>
        </a>
        <a onclick=\"slideOn('right')\">
            <div id=\"arrow-right-nav-galerie\" style='background-image:url(\"/image/icons/back.svg\");' class=\"arrow-nav-galerie\" ></div>
        </a>
            

        <section id=\"galerie-oeuvre-carroussel\">
                

                 {% for artwork in artworks %}
                    <script>
                        tabLenght = idTab.push({{ artwork.id }});
              
                    </script>

                    <div id=\"container-oeuvre-galerie-{{ artwork.id }}\" class=\"container-oeuvre-galerie\">
                        <div class=\"contenu-oeuvre-galerie\">
                            <img src=\"/{{ artwork.picture }}\"/>
                            <div>
                                <h2>{{ artwork.title|upper }}</h2>
                                <p>{{ artwork.categorie|capitalize }}</span> | {{ artwork.format }} x {{ artwork.format2 }}</p>
                            </div>
                        </div>
                    </div>
                {% endfor %}    
                

        </section>
    </body>
</html>

<script>
    function carousselSet( id ){
        document.getElementById('container-oeuvre-galerie-'+id).classList.add('on-the-top');
        var i=1;
        while(id > i){
            document.getElementById('container-oeuvre-galerie-'+i).classList.add('on-the-left');
            i++;
        }
        i++;
        while(i<=tabLenght){
            document.getElementById('container-oeuvre-galerie-'+i).classList.add('on-the-right');
            i++;
        }
    }

    window.onload = carousselSet( '{{idArt}}' );
</script>      
", "vitrine_website/galerie_oeuvre.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/vitrine_website/galerie_oeuvre.html.twig");
    }
}
