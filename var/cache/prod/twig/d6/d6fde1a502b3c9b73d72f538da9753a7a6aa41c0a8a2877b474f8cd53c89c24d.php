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

/* vitrine_website/index.html.twig */
class __TwigTemplate_08ad3f4e13664c78f40e777dbefded7327dd59f02e900193539ff7f36feb7096 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "vitrine_website/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Benoit Fabioux - À propos";
    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <script src=\"/js/wordCounter.js\"></script>

    <script>
        function smoothScroll(target){
            document.getElementById('about-section-scroll').classList.remove('activeScroll');
            document.getElementById('biographie-section-scroll').classList.remove('activeScroll');
            document.getElementById('contact-section-scroll').classList.remove('activeScroll');

            document.getElementById(target+'-scroll').classList.add('activeScroll');

            document.getElementById(target).scrollIntoView({
                behavior: 'smooth'
            })
            history.pushState(null, null, hashval)
            e.preventDefault()
              
        }

        

        // Check si l'element passé en param est affiché sur l'écran
        function checkVisible(elm) {
            var rect = elm.getBoundingClientRect();
            var viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
            return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
        }

        //Regarde si la div competence est affichée toutes les 250ms puis désactive l'interval
        setInterval(function() {
            if ( checkVisible(document.getElementById('about-section')))     {
            document.getElementById('about-section-scroll').classList.add('activeScroll');
            document.getElementById('biographie-section-scroll').classList.remove('activeScroll');
            document.getElementById('contact-section-scroll').classList.remove('activeScroll');
            
            }
        }, 50);

        setInterval(function() {
            if ( checkVisible(document.getElementById('biographie-section')))     {
            document.getElementById('about-section-scroll').classList.remove('activeScroll');
            document.getElementById('biographie-section-scroll').classList.add('activeScroll');
            document.getElementById('contact-section-scroll').classList.remove('activeScroll');
            
            }
        }, 50);

        setInterval(function() {
            if ( checkVisible(document.getElementById('contact-section'))){
            document.getElementById('about-section-scroll').classList.remove('activeScroll');
            document.getElementById('biographie-section-scroll').classList.remove('activeScroll');
            document.getElementById('contact-section-scroll').classList.add('activeScroll');
     
            }
        }, 50);
        
    </script>
";
    }

    // line 64
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "
<div id=\"menu-scroll\">
    <div></div>
    <a onclick=\"smoothScroll('about-section')\"><p id='about-section-scroll' class=\"activeScroll\">Accueil</p></a>
    <div></div>
    <a onclick=\"smoothScroll('biographie-section')\"><p id='biographie-section-scroll'>Biographie</p></a>
    <div></div>
    <a onclick=\"smoothScroll('contact-section')\"><p id='contact-section-scroll'>Contact</p></a>
    <div></div>
</div>

    <section id=\"about-section\">
        <div class=\"about-container\">
            <div class=\"about-container-section-left\" >
                <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["imageFirstSave"] ?? null), "html", null, true);
        echo "\" alt=\"Benoit Fabioux\"/>
            </div>
            <div class=\"about-container-section-right\">
                <h1>";
        // line 82
        echo twig_escape_filter($this->env, ($context["titleSave"] ?? null), "html", null, true);
        echo "</h1>
                ";
        // line 83
        if ((($context["textFirstSave"] ?? null) != null)) {
            // line 84
            echo "                <p>
                    <span>Breaking news :</span> ";
            // line 85
            echo twig_escape_filter($this->env, ($context["textFirstSave"] ?? null), "html", null, true);
            echo "
                </p>
                ";
        }
        // line 88
        echo "
            </div>
        </div>
    </section>
    <section id=\"biographie-section\">
        <div class=\"biographie-container\">
            <h1>Biographie</h1>
            <div class=\"row-biographie-container\">
                <div>
                    <p id='text-biographie-1'></p>
                </div>
                <div class=\"middle-section\">
                    <div class=\"img-middle-section\" >
                        <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["imageBiographie"] ?? null), "html", null, true);
        echo "\" alt=\"Benoit Fabioux\"/>
                    </div>
                    <p id='text-biographie-2'>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l’imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n’a pas fait que survivre cinq</p>
                </div>
                <div>
                    <p id='text-biographie-3'>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l’imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n’a pas fait que survivre cinq siècles, mais s’est aussi adapté à la bureautique informatique, sans que son contenu n’en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
                </div>
            </div>
        </div>
    </section>

    <section id=\"contact-section\">
        <div class=\"contact-container\">
            <h1>Contact</h1>
            <div class=\"row-contact-container\"> 
                <div class=\"mail-contact\">
                    <div style=\"background-image:url(/image/icons/mail.png)\"></div>
                    <a href=\"mailto:";
        // line 118
        echo twig_escape_filter($this->env, ($context["mailSave"] ?? null), "html", null, true);
        echo "\"><p>";
        echo twig_escape_filter($this->env, ($context["mailSave"] ?? null), "html", null, true);
        echo "</p></a>
                </div>
                <div class=\"form-section-contact\">
                    ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formView"] ?? null), 'form_start');
        echo "
                        <div class=\"row-form-container\">
                            <div class=\"input-form-container\">
                                ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "name", [], "any", false, false, false, 124), 'widget');
        echo "
                                
                                <p>Votre nom</p>
                            </div>
                            <div class=\"input-form-container\">
                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "firstname", [], "any", false, false, false, 129), 'widget');
        echo "
                                <p>Votre prénom</p>
                            </div>
                        </div>
                        <div class=\"row-form-container\">
                            <div class=\"input-form-container\">
                                ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "mail", [], "any", false, false, false, 135), 'widget');
        echo "
                                <p>Votre mail</p>
                            </div>
                            <div class=\"input-form-container\">
                                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "phone", [], "any", false, false, false, 139), 'widget');
        echo "
                                <p>Votre téléphone (facultatif)</p>
                            </div>
                        </div>
                        <div class=\"input-form-container\">
                            ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "message", [], "any", false, false, false, 144), 'widget');
        echo "
                            <p>Votre message</p>
                        </div>
                            <div class=\"input-form-container-capcha\">
                                ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formView"] ?? null), "capcha", [], "any", false, false, false, 148), 'widget');
        echo "
                                <p>7+3 est égal à combien ?</p>
                            </div>
                        <p class=\"response-capcha\">";
        // line 151
        echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
        echo "   ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formView"] ?? null), 'errors');
        echo "</p>
                        <button type='submit'>
                            Envoyer le message
                        </button>
                    ";
        // line 155
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formView"] ?? null), 'form_end');
        echo "
                </div>
            </div>
        </div>
        <div class='mentions-legales'>
            <p id=\"right-paragraph\">©2022 Tous droits réservés Benoit Fabioux</p>

            <div>
                <a href=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_legales");
        echo "\">
                    <p>Mentions légales</p>
                </a>
                <a href=\"";
        // line 166
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
        window.onload = wordCounter( '";
        // line 175
        echo twig_escape_filter($this->env, ($context["textBiographie"] ?? null), "html", null, true);
        echo "' );
    </script>
";
    }

    public function getTemplateName()
    {
        return "vitrine_website/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 175,  280 => 166,  274 => 163,  263 => 155,  254 => 151,  248 => 148,  241 => 144,  233 => 139,  226 => 135,  217 => 129,  209 => 124,  203 => 121,  195 => 118,  175 => 101,  160 => 88,  154 => 85,  151 => 84,  149 => 83,  145 => 82,  139 => 79,  123 => 65,  119 => 64,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vitrine_website/index.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/vitrine_website/index.html.twig");
    }
}
