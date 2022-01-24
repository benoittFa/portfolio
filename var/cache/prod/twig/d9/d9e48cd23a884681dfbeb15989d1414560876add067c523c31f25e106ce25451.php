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
class __TwigTemplate_bf8134ede32dd524f3c6b435c3122f4375158acb9fb6273c1b896bda228bb8ec extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "vitrine_website/mention.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Benoit Fabioux - Mentions Légales";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
    <section id=\"loi-section\">
        <div class=\"loi-container\">
            <h1>Mentions Légales</h1>
            <p>Le texte qui suit présente les conditions générales d’utilisation du site de Benoit Fabioux.<br/>
            Tout visiteur du site de Benoit Fabioux admet en avoir pris connaissance et les accepte. Elles ne le déchargent pas des obligations qu’il contracte en accédant par un lien à une page ou un site Internet tiers.<br/>
            Benoit Fabioux se réserve le droit de modifier à tout moment les présentes conditions notamment durant l'évolution de son site web.<br/><br/>

            Éditeurs:<br/>
            Ce site est celui de :<br/>
            Benoit Fabioux<br/><br/>

            SIRET : …<br/><br/>

            Mail : bonjour@benoit-fabioux.fr<br/><br/>

            Ce site a été conçu et développé par :<br/>
            Benoit Fabioux.<br/><br/>

            Ce site est hébergé par :<br/>
            OVH, 2 rue Kellermann - 59100 Roubaix - France<br/><br/>

            Objet :<br/>
            Le site de Benoit Fabioux a pour objet de présenter les oeuvres de Benoit Fabioux<br/><br/>

            Propriété intellectuelle :<br/>
            Vous disposez d’un droit d’usage privé, personnel, non collectif et non exclusif, sur le contenu du site. Nous entendons par contenu, en ce y compris mais non limitativement, les textes et images. Sous réserve des exceptions au droit d’auteur prévues par l’article L122-5 du Code de la Propriété Intellectuelle, tout autre usage du contenu est soumis à autorisation préalable, notamment dans le cas où l’utilisateur envisagerait de rediffuser le contenu sur un autre site.
<br/><br/>
            La violation de ces dispositions impératives soumet le contrevenant, et toutes personnes responsables, aux peines pénales et civiles prévues par la loi.
<br/><br/>
            Pour toute demande d’autorisation vous pouvez prendre contact avec Benoit Fabioux grâce au formulaire de contact ou bien à l'adresse mail : bonjour@benoit-fabioux.fr
<br/><br/>
            Contenu du site :<br/>
            Nous entendons par contenu du site la structure générale, les textes, les images animées ou non, dont le site web est composé. Benoit Fabioux se réserve le droit de modifier ou de corriger le contenu de ce site à tout moment et sans préavis. Elle ne confère aux utilisateurs internautes aucune garantie explicite ou implicite, en ce qui concerne l’exactitude, l’exhaustivité ou la mise à jour des informations contenues dans le présent site, ou accessibles depuis ce site. En conséquence, il appartient aux utilisateurs de vérifier leurs informations en les recoupant avec toutes autres sources disponibles. Benoit Fabioux ne garantit en aucun cas l’adéquation des informations avec les besoins de l’internaute, par conséquent Benoit Fabioux ne saurait supporter aucune demande de dédommagement pour préjudice direct ou indirect subi par l’internaute à la suite de la consultation de ce site web.
<br/><br/>
            Marque :<br/>
            La dénomination Benoit Fabioux et son logo, sont protégés.<br/>
            Toute reproduction totale ou partielle de ces signes distinctifs sans autorisation de leurs propriétaires est donc prohibée.</p>
        </div>

     
        <div class='mentions-legales'>
            <p id=\"right-paragraph\">©2022 Tous droits réservés Benoit Fabioux</p>

            <div>
                <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_legales");
        echo "\">
                    <p>Mentions légales</p>
                </a>
                <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("politiques_confidentialites");
        echo "\">
                    <p>Politique de confidentialités</p>
                </a>
            </div>
        </div>
    </section>


";
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
        return array (  111 => 55,  105 => 52,  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vitrine_website/mention.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/vitrine_website/mention.html.twig");
    }
}
