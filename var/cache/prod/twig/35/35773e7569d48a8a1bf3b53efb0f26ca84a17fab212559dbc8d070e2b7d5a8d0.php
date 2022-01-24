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

/* vitrine_website/expositions.html.twig */
class __TwigTemplate_d0d6fa408148170cfaf9e0f566554a0600e3cfb5aa241a5bcf984ab64dc279dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "vitrine_website/expositions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Benoit Fabioux - Expositions";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <section id=\"exposition-section\">
       <div class=\"container-exposition\">
            <h1>Expositions</h1>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["expositions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["exposition"]) {
            // line 10
            echo "                <div class=\"contenu-exposition\">
                    <div class=\"image-container\">
                        <img src='";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exposition"], "picture", [], "any", false, false, false, 12), "html", null, true);
            echo "'/>
                    </div>
                    <div class='text-container'>
                        <h2>";
            // line 15
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exposition"], "title", [], "any", false, false, false, 15)), "html", null, true);
            echo "</h2>
                        <p>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exposition"], "text", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exposition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    
       </div>
   
        <div class='mentions-legales'>
            <p id=\"right-paragraph\">©2022 Tous droits réservés Benoit Fabioux</p>
            <div>
                <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_legales");
        echo "\">
                    <p>Mentions légales</p>
                </a>
                <a href=\"";
        // line 28
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
        return "vitrine_website/expositions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 28,  99 => 25,  91 => 19,  81 => 16,  77 => 15,  71 => 12,  67 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vitrine_website/expositions.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/vitrine_website/expositions.html.twig");
    }
}
