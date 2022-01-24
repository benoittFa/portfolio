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
class __TwigTemplate_2bd4462882dc78752fe19558bc28275d70f849f3fbd97da6a7ee4c3231518f67 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine_website/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine_website/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vitrine_website/index.html.twig", 1);
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

        echo "Benoit Fabioux - À propos";
        
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["imageFirstSave"]) || array_key_exists("imageFirstSave", $context) ? $context["imageFirstSave"] : (function () { throw new RuntimeError('Variable "imageFirstSave" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "\" alt=\"Benoit Fabioux\"/>
            </div>
            <div class=\"about-container-section-right\">
                <h1>";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["titleSave"]) || array_key_exists("titleSave", $context) ? $context["titleSave"] : (function () { throw new RuntimeError('Variable "titleSave" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "</h1>
                ";
        // line 83
        if (((isset($context["textFirstSave"]) || array_key_exists("textFirstSave", $context) ? $context["textFirstSave"] : (function () { throw new RuntimeError('Variable "textFirstSave" does not exist.', 83, $this->source); })()) != null)) {
            // line 84
            echo "                <p>
                    <span>Breaking news :</span> ";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["textFirstSave"]) || array_key_exists("textFirstSave", $context) ? $context["textFirstSave"] : (function () { throw new RuntimeError('Variable "textFirstSave" does not exist.', 85, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["imageBiographie"]) || array_key_exists("imageBiographie", $context) ? $context["imageBiographie"] : (function () { throw new RuntimeError('Variable "imageBiographie" does not exist.', 101, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["mailSave"]) || array_key_exists("mailSave", $context) ? $context["mailSave"] : (function () { throw new RuntimeError('Variable "mailSave" does not exist.', 118, $this->source); })()), "html", null, true);
        echo "\"><p>";
        echo twig_escape_filter($this->env, (isset($context["mailSave"]) || array_key_exists("mailSave", $context) ? $context["mailSave"] : (function () { throw new RuntimeError('Variable "mailSave" does not exist.', 118, $this->source); })()), "html", null, true);
        echo "</p></a>
                </div>
                <div class=\"form-section-contact\">
                    ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 121, $this->source); })()), 'form_start');
        echo "
                        <div class=\"row-form-container\">
                            <div class=\"input-form-container\">
                                ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 124, $this->source); })()), "name", [], "any", false, false, false, 124), 'widget');
        echo "
                                
                                <p>Votre nom</p>
                            </div>
                            <div class=\"input-form-container\">
                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 129, $this->source); })()), "firstname", [], "any", false, false, false, 129), 'widget');
        echo "
                                <p>Votre prénom</p>
                            </div>
                        </div>
                        <div class=\"row-form-container\">
                            <div class=\"input-form-container\">
                                ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 135, $this->source); })()), "mail", [], "any", false, false, false, 135), 'widget');
        echo "
                                <p>Votre mail</p>
                            </div>
                            <div class=\"input-form-container\">
                                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 139, $this->source); })()), "phone", [], "any", false, false, false, 139), 'widget');
        echo "
                                <p>Votre téléphone (facultatif)</p>
                            </div>
                        </div>
                        <div class=\"input-form-container\">
                            ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 144, $this->source); })()), "message", [], "any", false, false, false, 144), 'widget');
        echo "
                            <p>Votre message</p>
                        </div>
                            <div class=\"input-form-container-capcha\">
                                ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 148, $this->source); })()), "capcha", [], "any", false, false, false, 148), 'widget');
        echo "
                                <p>7+3 est égal à combien ?</p>
                            </div>
                        <p class=\"response-capcha\">";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 151, $this->source); })()), "html", null, true);
        echo "   ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 151, $this->source); })()), 'errors');
        echo "</p>
                        <button type='submit'>
                            Envoyer le message
                        </button>
                    ";
        // line 155
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new RuntimeError('Variable "formView" does not exist.', 155, $this->source); })()), 'form_end');
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
        echo twig_escape_filter($this->env, (isset($context["textBiographie"]) || array_key_exists("textBiographie", $context) ? $context["textBiographie"] : (function () { throw new RuntimeError('Variable "textBiographie" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "' );
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  334 => 175,  322 => 166,  316 => 163,  305 => 155,  296 => 151,  290 => 148,  283 => 144,  275 => 139,  268 => 135,  259 => 129,  251 => 124,  245 => 121,  237 => 118,  217 => 101,  202 => 88,  196 => 85,  193 => 84,  191 => 83,  187 => 82,  181 => 79,  165 => 65,  155 => 64,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Benoit Fabioux - À propos{% endblock %}

{% block javascripts %}
    <script src=\"/js/wordCounter.js\"></script>

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
{% endblock %}

{% block body %}

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
                <img src=\"{{imageFirstSave}}\" alt=\"Benoit Fabioux\"/>
            </div>
            <div class=\"about-container-section-right\">
                <h1>{{titleSave}}</h1>
                {% if textFirstSave != null %}
                <p>
                    <span>Breaking news :</span> {{textFirstSave}}
                </p>
                {% endif %}

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
                        <img src=\"{{imageBiographie}}\" alt=\"Benoit Fabioux\"/>
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
                    <a href=\"mailto:{{mailSave}}\"><p>{{mailSave}}</p></a>
                </div>
                <div class=\"form-section-contact\">
                    {{ form_start(formView) }}
                        <div class=\"row-form-container\">
                            <div class=\"input-form-container\">
                                {{ form_widget(formView.name) }}
                                
                                <p>Votre nom</p>
                            </div>
                            <div class=\"input-form-container\">
                                {{ form_widget(formView.firstname) }}
                                <p>Votre prénom</p>
                            </div>
                        </div>
                        <div class=\"row-form-container\">
                            <div class=\"input-form-container\">
                                {{ form_widget(formView.mail) }}
                                <p>Votre mail</p>
                            </div>
                            <div class=\"input-form-container\">
                                {{ form_widget(formView.phone) }}
                                <p>Votre téléphone (facultatif)</p>
                            </div>
                        </div>
                        <div class=\"input-form-container\">
                            {{ form_widget(formView.message) }}
                            <p>Votre message</p>
                        </div>
                            <div class=\"input-form-container-capcha\">
                                {{ form_widget(formView.capcha) }}
                                <p>7+3 est égal à combien ?</p>
                            </div>
                        <p class=\"response-capcha\">{{ error }}   {{ form_errors(formView) }}</p>
                        <button type='submit'>
                            Envoyer le message
                        </button>
                    {{ form_end(formView) }}
                </div>
            </div>
        </div>
        <div class='mentions-legales'>
            <p id=\"right-paragraph\">©2022 Tous droits réservés Benoit Fabioux</p>

            <div>
                <a href=\"{{ path ('mentions_legales') }}\">
                    <p>Mentions légales</p>
                </a>
                <a href=\"{{ path ('politiques_confidentialites') }}\">
                    <p>Politique de confidentialités</p>
                </a>
            </div>
        </div>
    </section>
    <script> 
        let date = new Date();
        document.getElementById('right-paragraph').innerHTML = \"©\"+date.getFullYear()+\" Tous droits réservés Benoit Fabioux\";
        window.onload = wordCounter( '{{textBiographie}}' );
    </script>
{% endblock %}
", "vitrine_website/index.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/vitrine_website/index.html.twig");
    }
}
