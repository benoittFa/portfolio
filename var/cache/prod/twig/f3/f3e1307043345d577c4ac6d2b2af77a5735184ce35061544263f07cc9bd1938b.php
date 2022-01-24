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
class __TwigTemplate_0f876cdcc0ffda91509ff2b42774d6748ce16b91c1bb538ae2f0e8ad9e1348a3 extends Template
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
        // line 57
        echo "    </head>
    <body>
        <a href='";
        // line 59
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
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artworks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["artwork"]) {
            // line 73
            echo "                    <script>
                        tabLenght = idTab.push(";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo ");
              console.log(idTab)
                    </script>

                    <div id=\"container-oeuvre-galerie-";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 78), "html", null, true);
            echo "\" class=\"container-oeuvre-galerie\">
                        <div class=\"contenu-oeuvre-galerie\">
                            <img src=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "picture", [], "any", false, false, false, 80), "html", null, true);
            echo "\"/>
                            <div>
                                <h2>";
            // line 82
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "title", [], "any", false, false, false, 82)), "html", null, true);
            echo "</h2>
                                <p>";
            // line 83
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "categorie", [], "any", false, false, false, 83)), "html", null, true);
            echo "</span> | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "format", [], "any", false, false, false, 83), "html", null, true);
            echo " x ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artwork"], "format2", [], "any", false, false, false, 83), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artwork'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    
                

        </section>
    </body>
</html>

<script>
    function carousselSet( id ){

        idTab.forEach(otherId => {

            if(id > otherId){
                document.getElementById('container-oeuvre-galerie-'+otherId).classList.add('on-the-left');
            }else{
                document.getElementById('container-oeuvre-galerie-'+otherId).classList.add('on-the-right');
            }

        });
        document.getElementById('container-oeuvre-galerie-'+id).classList.remove('on-the-right');
        document.getElementById('container-oeuvre-galerie-'+id).classList.remove('on-the-left');
        document.getElementById('container-oeuvre-galerie-'+id).classList.add('on-the-top');
  
    }

    window.onload = carousselSet( '";
        // line 112
        echo twig_escape_filter($this->env, ($context["idArt"] ?? null), "html", null, true);
        echo "' );
</script>      
";
    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            <script>
                var idTab = [] , tabLenght;
                var currentId = ";
        // line 13
        echo twig_escape_filter($this->env, ($context["idArt"] ?? null), "html", null, true);
        echo ";


                function slideOn(side){
                    document.getElementById('arrow-left-nav-galerie').style.display = 'block';
                    document.getElementById('arrow-right-nav-galerie').style.display = 'block';
                    
                    if(side =='left'){
                        document.getElementById('arrow-right-nav-galerie').style.display = 'block';
                        document.getElementById('container-oeuvre-galerie-'+currentId).classList.remove('on-the-top');
                        document.getElementById('container-oeuvre-galerie-'+currentId).classList.add('on-the-right');
                        if(side == 'left'){
                                currentId--;                    
                        }else if(side == 'right'){
                                currentId++;
                            }

                        if(currentId <= idTab[0]){ 
                            document.getElementById('arrow-left-nav-galerie').style.display = 'none';
                        }
                        document.getElementById('container-oeuvre-galerie-'+currentId).classList.add('on-the-top');
                        document.getElementById('container-oeuvre-galerie-'+currentId).classList.remove('on-the-left');

                    }else if(side =='right'){
                        
                            document.getElementById('arrow-right-nav-galerie').style.display = 'block';
                            document.getElementById('container-oeuvre-galerie-'+currentId).classList.remove('on-the-top');
                            document.getElementById('container-oeuvre-galerie-'+currentId).classList.add('on-the-left');
                            if(side == 'left'){
                                currentId--;                    
                            }else if(side == 'right'){
                                currentId++;
                            }
                        if(currentId >= idTab[tabLenght-1]){
                            document.getElementById('arrow-right-nav-galerie').style.display = 'none';
                        }
                        document.getElementById('container-oeuvre-galerie-'+currentId).classList.add('on-the-top');
                        document.getElementById('container-oeuvre-galerie-'+currentId).classList.remove('on-the-right');

                    }
                    
                }
            </script>      
        ";
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
        return array (  157 => 13,  153 => 11,  149 => 10,  142 => 112,  115 => 87,  100 => 83,  96 => 82,  91 => 80,  86 => 78,  79 => 74,  76 => 73,  72 => 72,  56 => 59,  52 => 57,  50 => 10,  47 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vitrine_website/galerie_oeuvre.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/vitrine_website/galerie_oeuvre.html.twig");
    }
}
