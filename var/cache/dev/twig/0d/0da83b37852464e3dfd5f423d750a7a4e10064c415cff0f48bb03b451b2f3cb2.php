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

/* vitrine_website/mention.html.twig */
class __TwigTemplate_5ce0f23393c737934532795b4cfe747d00a260324481725a8165bb7d8af8099d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine_website/mention.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine_website/mention.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vitrine_website/mention.html.twig", 1);
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

        echo "Benoit Fabioux - Mentions L??gales";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <section id=\"loi-section\">
        <div class=\"loi-container\">
            <h1>Mentions L??gales</h1>
            <p>Le texte qui suit pr??sente les conditions g??n??rales d???utilisation du site de Benoit Fabioux.<br/>
            Tout visiteur du site de Benoit Fabioux??admet en avoir pris connaissance et les accepte. Elles ne le d??chargent pas des obligations qu???il contracte en acc??dant par un lien ?? une page ou un site Internet tiers.<br/>
            Benoit Fabioux se r??serve le droit de modifier ?? tout moment les pr??sentes conditions notamment durant l'??volution de??son site web.<br/><br/>

            ??diteurs:<br/>
            Ce site est celui de :<br/>
            Benoit Fabioux<br/><br/>

            SIRET : ???<br/><br/>

            Mail :??bonjour@benoit-fabioux.fr<br/><br/>

            Ce site a ??t?? con??u et d??velopp?? par :<br/>
            Benoit Fabioux.<br/><br/>

            Ce site est h??berg?? par :<br/>
            OVH, 2 rue Kellermann - 59100 Roubaix - France<br/><br/>

            Objet :<br/>
            Le site de Benoit Fabioux??a pour objet de pr??senter les oeuvres de Benoit Fabioux<br/><br/>

            Propri??t?? intellectuelle :<br/>
            Vous disposez d???un droit d???usage priv??, personnel, non collectif et non exclusif, sur le contenu du site. Nous entendons par contenu, en ce y compris mais non limitativement, les textes et images. Sous r??serve des exceptions au droit d???auteur pr??vues par l???article L122-5 du Code de la Propri??t?? Intellectuelle, tout autre usage du contenu est soumis ?? autorisation pr??alable, notamment dans le cas o?? l???utilisateur envisagerait de rediffuser le contenu sur un autre site.
<br/><br/>
            La violation de ces dispositions imp??ratives soumet le contrevenant, et toutes personnes responsables, aux peines p??nales et civiles pr??vues par la loi.
<br/><br/>
            Pour toute demande d???autorisation vous pouvez prendre contact avec Benoit Fabioux gr??ce au formulaire de contact ou bien ?? l'adresse mail :??bonjour@benoit-fabioux.fr
<br/><br/>
            Contenu du site :<br/>
            Nous entendons par contenu du site la structure g??n??rale, les textes, les images anim??es ou non, dont le site web est compos??. Benoit Fabioux se r??serve le droit de modifier ou de corriger le contenu de ce site ?? tout moment et sans pr??avis. Elle ne conf??re aux utilisateurs internautes aucune garantie explicite ou implicite, en ce qui concerne l???exactitude, l???exhaustivit?? ou la mise ?? jour des informations contenues dans le pr??sent site, ou accessibles depuis ce site. En cons??quence, il appartient aux utilisateurs de v??rifier leurs informations en les recoupant avec toutes autres sources disponibles. Benoit Fabioux ne garantit en aucun cas l???ad??quation des informations avec les besoins de l???internaute, par cons??quent Benoit Fabioux ne saurait supporter aucune demande de d??dommagement pour pr??judice direct ou indirect subi par l???internaute ?? la suite de la consultation??de ce site web.
<br/><br/>
            Marque :<br/>
            La d??nomination Benoit Fabioux et son logo, sont prot??g??s.<br/>
            Toute reproduction totale ou partielle de ces signes distinctifs sans autorisation de leurs propri??taires est donc prohib??e.</p>
        </div>

     
        <div class='mentions-legales'>
            <p id=\"right-paragraph\">??2022 Tous droits r??serv??s Benoit Fabioux</p>

            <div>
                <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_legales");
        echo "\">
                    <p>Mentions l??gales</p>
                </a>
                <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("politiques_confidentialites");
        echo "\">
                    <p>Politique de confidentialit??s</p>
                </a>
            </div>
        </div>
    </section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vitrine_website/mention.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 55,  135 => 52,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Benoit Fabioux - Mentions L??gales{% endblock %}


{% block body %}

    <section id=\"loi-section\">
        <div class=\"loi-container\">
            <h1>Mentions L??gales</h1>
            <p>Le texte qui suit pr??sente les conditions g??n??rales d???utilisation du site de Benoit Fabioux.<br/>
            Tout visiteur du site de Benoit Fabioux??admet en avoir pris connaissance et les accepte. Elles ne le d??chargent pas des obligations qu???il contracte en acc??dant par un lien ?? une page ou un site Internet tiers.<br/>
            Benoit Fabioux se r??serve le droit de modifier ?? tout moment les pr??sentes conditions notamment durant l'??volution de??son site web.<br/><br/>

            ??diteurs:<br/>
            Ce site est celui de :<br/>
            Benoit Fabioux<br/><br/>

            SIRET : ???<br/><br/>

            Mail :??bonjour@benoit-fabioux.fr<br/><br/>

            Ce site a ??t?? con??u et d??velopp?? par :<br/>
            Benoit Fabioux.<br/><br/>

            Ce site est h??berg?? par :<br/>
            OVH, 2 rue Kellermann - 59100 Roubaix - France<br/><br/>

            Objet :<br/>
            Le site de Benoit Fabioux??a pour objet de pr??senter les oeuvres de Benoit Fabioux<br/><br/>

            Propri??t?? intellectuelle :<br/>
            Vous disposez d???un droit d???usage priv??, personnel, non collectif et non exclusif, sur le contenu du site. Nous entendons par contenu, en ce y compris mais non limitativement, les textes et images. Sous r??serve des exceptions au droit d???auteur pr??vues par l???article L122-5 du Code de la Propri??t?? Intellectuelle, tout autre usage du contenu est soumis ?? autorisation pr??alable, notamment dans le cas o?? l???utilisateur envisagerait de rediffuser le contenu sur un autre site.
<br/><br/>
            La violation de ces dispositions imp??ratives soumet le contrevenant, et toutes personnes responsables, aux peines p??nales et civiles pr??vues par la loi.
<br/><br/>
            Pour toute demande d???autorisation vous pouvez prendre contact avec Benoit Fabioux gr??ce au formulaire de contact ou bien ?? l'adresse mail :??bonjour@benoit-fabioux.fr
<br/><br/>
            Contenu du site :<br/>
            Nous entendons par contenu du site la structure g??n??rale, les textes, les images anim??es ou non, dont le site web est compos??. Benoit Fabioux se r??serve le droit de modifier ou de corriger le contenu de ce site ?? tout moment et sans pr??avis. Elle ne conf??re aux utilisateurs internautes aucune garantie explicite ou implicite, en ce qui concerne l???exactitude, l???exhaustivit?? ou la mise ?? jour des informations contenues dans le pr??sent site, ou accessibles depuis ce site. En cons??quence, il appartient aux utilisateurs de v??rifier leurs informations en les recoupant avec toutes autres sources disponibles. Benoit Fabioux ne garantit en aucun cas l???ad??quation des informations avec les besoins de l???internaute, par cons??quent Benoit Fabioux ne saurait supporter aucune demande de d??dommagement pour pr??judice direct ou indirect subi par l???internaute ?? la suite de la consultation??de ce site web.
<br/><br/>
            Marque :<br/>
            La d??nomination Benoit Fabioux et son logo, sont prot??g??s.<br/>
            Toute reproduction totale ou partielle de ces signes distinctifs sans autorisation de leurs propri??taires est donc prohib??e.</p>
        </div>

     
        <div class='mentions-legales'>
            <p id=\"right-paragraph\">??2022 Tous droits r??serv??s Benoit Fabioux</p>

            <div>
                <a href=\"{{ path ('mentions_legales') }}\">
                    <p>Mentions l??gales</p>
                </a>
                <a href=\"{{ path ('politiques_confidentialites') }}\">
                    <p>Politique de confidentialit??s</p>
                </a>
            </div>
        </div>
    </section>


{% endblock %}
", "vitrine_website/mention.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/vitrine_website/mention.html.twig");
    }
}
