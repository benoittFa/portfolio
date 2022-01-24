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

/* vitrine_website/politique.html.twig */
class __TwigTemplate_be852bcf14d570ab1ed0f10529831418f141f96dc50a820175e517c31e39e05b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine_website/politique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine_website/politique.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vitrine_website/politique.html.twig", 1);
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

        echo "Benoit Fabioux - Politiques de confidentialités";
        
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
            <h1>Politiques de confidentialités</h1>
            <p>
            <b>Introduction</b><br/>
                La présente Politique de confidentialité décrit les pratiques du site web <b>Benoit Fabioux</b> concernant les informations collectées auprès des utilisateurs qui accèdent à notre site web à l'adresse https://benoit-fabioux.fr ou qui partagent des informations personnelles avec nous.<br/><br/>

                Autorité responsable au sens des lois sur la protection des données, en particulier le Règlement général sur la protection des données (RGPD) : OVH. <br/><br/>
                <b>Droits des utilisateurs</b><br/>
                Vous pouvez demander à : <br/>
                Recevoir une confirmation du traitement des informations personnelles vous concernant (ou un avis de non-traitement de vos informations personnelles, le cas échéant) et accéder à vos informations personnelles stockées, ainsi qu'à des informations supplémentaires. <br/>
                Recevoir une copie des informations personnelles que vous nous avez fournies volontairement dans un format structuré, couramment utilisé et lisible par un ordinateur. <br/>
                Demander la rectification de vos informations personnelles que nous stockons.<br/>
                Demander la suppression de vos informations personnelles. <br/>
                Refuser le traitement de vos informations personnelles. <br/>
                Demander que nous limitions le traitement de vos informations personnelles.<br/>
                Déposer une plainte auprès d'une autorité de surveillance.<br/><br/>

                Veuillez noter cependant que ces droits ne sont pas absolus et peuvent être soumis à nos propres intérêts légitimes et exigences réglementaires. <br/><br/>

                Si vous souhaitez exercer l'un des droits susmentionnés ou recevoir plus d'informations, veuillez contacter notre délégué à la protection des données à l'aide des informations fournies ci-dessous :<br/>
                <a href=“mailto:benoit.fabioux0144@orange.fr”>bonjour@benoit-fabioux.fr</a> .<br/><br/>
                <b>Conservation</b><br/>
                Nous conserverons vos informations personnelles aussi longtemps que nécessaire pour fournir nos services, et si nécessaire pour respecter nos obligations légales, résoudre des litiges et faire appliquer nos politiques. Les durées de conservation seront déterminées selon le type d'informations collectées et l'objectif de leur collecte, compte tenu des exigences applicables à la situation et le besoin de détruire des informations obsolètes et non utilisées dans les meilleurs délais. En vertu des lois et des règlements en vigueur, nous conserverons des archives contenant les renseignements personnels du client, les documents d'ouverture du compte, les communications et toute autre information requise. 
                <br/><br/>
                Nous pouvons rectifier, compléter ou supprimer des informations incomplètes ou incorrectes, à tout moment et à notre seule discrétion.<br/><br/>
                <b>Raisons de la collecte de données </b><br/>
                Le traitement de vos informations personnelles (c'est-a-dire toute information qui pourrait potentiellement permettre votre identification par des moyens raisonnables ; ci-après \"<b>Informations personnelles</b>”) est nécessaire pour l'exécution de nos obligations contractuelles envers vous et pour vous fournir nos services, protéger nos intérêts légitimes et respecter les obligations réglementaires (légales et financières) auxquelles nous sommes soumis.
                <br/><br/>
                Lorsque vous utilisez le Site, vous acceptez la collecte, le stockage, l'utilisation, la divulgation et d'autres utilisations de vos Informations personnelles comme prévu dans la présente Politique de confidentialité.
                <br/><br/>
                Nous encourageons nos Utilisateurs à lire attentivement la Politique de confidentialité et à l'utiliser pour prendre des décisions éclairées. 
                <br/><br/>
                <b>Quelles informations recueillons-nous ?</b><br/>

                Nous recueillons deux types de données et d'informations concernant nos Utilisateurs. 
                <br/><br/>

                Le premier type regroupe les informations non-identifiées et ne permettant pas d'identification qui concernent un ou plusieurs Utilisateurs, et qui peuvent être mises à notre disposition ou collectées du fait de leur utilisation du Site (« <b>Informations non personnelles</b> »). Nous ne connaissons pas l'identité des Utilisateurs auprès desquels ces informations non personnelles ont été collectées. Les informations non personnelles qui sont collectées peuvent inclure vos informations d'utilisation agrégées et des informations techniques transmises par votre appareil, notamment certaines informations relatives aux logiciels et aux matériels informatiques (par ex. : le type de navigateur et de système d'exploitation que votre appareil utilise, les paramètres de langue, l'heure d'accès, etc.) afin d'améliorer la fonctionnalité de notre Site. Nous pouvons également recueillir des informations concernant votre activité sur le Site (par ex. : les pages consultées, la navigation en ligne, les clics, les actions, etc.).<br/>

                Le second type regroupe les <b>Informations personnelles</b> c'est à dire des informations d'identification individuelle, qui identifient un individu ou qui sont susceptibles, par des moyens raisonnables, de permettre l'identification d'un individu. <br/>
                Comment recevons-nous les informations vous concernant ?<br/>
                Vos Informations personnelles sont collectées de plusieurs façons :<br/>
                Lorsque vous fournissez volontairement vos données personnelles en vous inscrivant sur notre Site ;<br/>
                Lorsque vous utilisez notre Site ou y accédez en rapport avec votre utilisation de nos services ;<br/>
                À partir de fournisseurs, de services et de registres publics tiers (par exemple : des fournisseurs d'analyse du trafic).<br/><br/>
                <b>Comment ces informations sont-elles utilisées ? Avec qui partageons-nous ces informations ?</b><br/>
                Nous ne louons pas, ne vendons pas ni ne partageons les informations des Utilisateurs avec des tiers, sauf tel que décrit dans la présente Politique de confidentialité.<br/><br/>

                Nous pouvons utiliser les informations pour les raisons suivantes :<br/>
                Communiquer avec vous : en vous envoyant des messages concernant nos services, en vous fournissant des informations techniques et en répondant à toute question relative au service client que vous pouvez poser ;<br/>
                Communiquer avec vous et vous informer des dernières mises à jour et des nouveaux services ;<br/>
                Vous présenter des publicités lorsque vous utilisez notre Site (voir la section \"Publicités\" pour en savoir plus) ; <br/>
                Promouvoir nos sites web et nos produits (voir la section « Marketing » pour en savoir plus) ; <br/>
                Mener des enquêtes statistiques et analytiques afin d'améliorer le Site.<br/>
                Outre les différentes utilisations mentionnées ci-dessus, nous pouvons transférer ou divulguer les Informations personnelles à nos filiales, sociétés affiliées et sous-traitants.<br/><br/>

                Outre les raisons mentionnées dans la présente Politique de confidentialité, nous pouvons partager les Informations personnelles avec des fournisseurs tiers de confiance (qui peuvent dépendre de différentes juridictions dans le monde), pour les raisons suivantes : <br/>
                Héberger et exploiter notre Site ;<br/>
                Vous fournir nos services, notamment un affichage personnalisé de notre Site ;<br/>
                Stocker et traiter lesdites informations en notre nom ; <br/>
                Vous présenter des publicités et nous aider à évaluer la réussite de nos campagnes publicitaires pour nous permettre de recibler nos utilisateurs (le cas échéant) ;<br/>
                Vous proposer des offres marketing et du contenu promotionnel relatifs à notre Site et nos services ; <br/>
                Réaliser des recherches, des diagnostics techniques ou analytiques ;<br/>
                Nous pouvons également divulguer les informations si nous croyons de bonne foi que la divulgation de ces informations est utile ou raisonnablement nécessaire pour : (i) respecter la loi, le règlement, la procédure judiciaire en vigueur ou une requête du gouvernement ; (ii) faire appliquer nos politiques (y compris notre politique de confidentialité), notamment les enquêtes sur des violations potentielles de celles-ci ; (iii) rechercher, détecter, empêcher ou prendre des mesures contre des cas de fraude présumés ou les problèmes de sécurité ; (iv) établir ou exercer nos droits à nous défendre contre toute réclamation légale ; (v) empêcher l'atteinte aux droits, à la propriété ou à la sécurité de notre entreprise, de nos utilisateurs, de vous-mêmes ou de toute partie tierce ; ou (vi) aux fins de collaborer avec les forces de l'ordre, et/ou dans le cas où nous estimons que c'est nécessaire, afin d'exercer la propriété intellectuelle ou d'autres droits juridiques.<br/><br/>
                <b>Cookies</b><br/>
                Nos partenaires de confiance et nous-mêmes utilisons des cookies et d'autres technologies dans nos services connexes, y compris lorsque vous visitez notre Site ou accédez à nos services. <br/><br/>

                Un \"cookie\" est un petit fragment d'information qu'un site web attribue à votre appareil lors de votre consultation du site. Les cookies sont très utiles et leur utilisation peut avoir différents objectifs, notamment de vous permettre de naviguer efficacement d'une page à l'autre, d'autoriser l'activation automatique de certaines fonctionnalités, de mémoriser vos préférences et de vous permettre d'interagir avec nos Services plus rapidement et plus simplement. Les cookies sont également utilisés pour faire en sorte que les publicités que vous voyez correspondent à vos intérêts et soient personnalisées en conséquence, ainsi que pour compiler des données statistiques sur votre utilisation de nos Services. <br/><br/>

                Le Site utilise les types de cookies suivants :<br/><br/>

                <b>a. Les « cookies de session » </b>qui sont conservés uniquement de façon temporaire lors de votre session de navigation afin de permettre une utilisation normale du système, et sont supprimés de votre appareil lorsque vous fermez le navigateur ; <br/><br/>

                <b>b. Les « cookies persistants »</b> qui ne sont lus que par le Site, qui sont enregistrés sur votre ordinateur pour une durée déterminée et ne sont pas supprimés lorsque le navigateur est fermé. Ces cookies sont utilisés lorsque nous devons vous reconnaitre lors de visites répétées, par exemple, pour nous permettre de conserver vos préférences lors de votre prochaine connexion ; <br/><br/>

                <b>c. Les cookies « tiers »</b> qui sont mis en place par d'autres services en ligne qui gèrent du contenu sur la page que vous consultez, par exemple, par les sociétés d'analyse tierces qui surveillent et analysent notre accès web.<br/><br/>

                Les cookies ne contiennent aucune information permettant de vous identifier personnellement, mais nous pouvons associer les Informations personnelles vous concernant que nous stockons aux informations stockées et obtenues par les cookies. Vous pouvez supprimer les cookies en suivant les instructions dans les préférences de votre appareil. Sachez toutefois que si vous choisissez de désactiver les cookies, certaines fonctionnalités de notre Site pourront ne pas fonctionner correctement et votre expérience en ligne pourrait être limitée.<br/><br/>

                Nous utilisons un outil basé sur la technologie Snowplow Analytics  pour recueillir des informations sur votre utilisation du Site. L'outil recueille des informations comme la fréquence d'accès des utilisateurs au Site, les pages qu'ils consultent, à quel moment, etc. L'outil ne collecte aucune information personnelle, et il n'est utilisé par l'hébergeur et opérateur de notre Site qu'à des fins d'amélioration de son Site et de ses services.<br/><br/>
                <b>Utilisation des bibliothèques de scripts (Google Fonts)</b><br/>
                Afin de présenter nos contenus de façon agréable et avec une bonne qualité graphique sur tous les navigateurs, nous utilisons dans ce site web des bibliothèques de scripts et de polices comme Google Fonts (https://www.google.com/webfonts). Les polices de Google Fonts sont transférées sur le cache de votre navigateur afin d'éviter les chargements multiples. Si votre navigateur ne prend pas en charge les polices Google Fonts ou bloque leur accès, les contenus seront affichés en utilisant la police par défaut. <br/>
                Toute requête vers une bibliothèque de scripts ou de polices déclenche automatiquement une connexion avec l'opérateur de ladite bibliothèque. S'il est en théorie possible que les opérateurs des bibliothèques collectent des données, l'existence de cette pratique et, le cas échéant, les buts poursuivis n'ont pas encore pu être établis.<br/>
                Si vous souhaitez consulter la politique de confidentialité de l'opérateur de bibliothèque Google, accédez à l'adresse suivante : https://www.google.com/policies/privacy.<br/><br/>
                <b>Collecte d'informations par des tiers</b><br/>
                Notre politique concerne uniquement l'utilisation et la divulgation des informations que nous collectons auprès de vous. Dans la mesure où vous divulguez vos informations à d'autres parties ou sites sur Internet, des règles différentes peuvent s'appliquer à leur utilisation ou à leur divulgation. Par conséquent, nous vous encourageons à lire les conditions d'utilisation et la politique de confidentialité de chaque partie tierce à laquelle vous divulguez volontairement vos informations. <br/><br/>

                La présente Politique de confidentialité ne s'applique pas aux pratiques des sociétés dont nous ne sommes pas propriétaires et que nous ne contrôlons pas, ni aux individus que nous n'employons pas ni ne gérons, notamment toute partie tierce à laquelle nous pouvons divulguer vos informations comme indiqué par la présente Politique de confidentialité. <br/><br/>
                <b>Comment protégeons-nous vos informations ?</b><br/>
                Nous accordons une grande attention à la mise en œuvre et au maintien de la sécurité du Site et de vos informations. Bien que nous mettions en œuvre des mesures raisonnables pour protéger les informations, nous ne pouvons pas être tenus responsables des actes de personnes qui obtiennent un accès non autorisé ou abusent de notre Site, et nous n'offrons aucune garantie formelle, implicite ou autre, d'empêcher un tel accès.<br/><br/>
                <b>Transfert des données en dehors de l'EEE </b><br/>
                Veuillez noter que certains destinataires de données peuvent se trouver en dehors de l'Espace économique européen (EEE). Dans de tels cas, nous transférerons vos données auxdits pays uniquement tel qu'approuvé par la Commission européenne en fournissant le niveau adéquat de protection des données, ou nous établirons des accords juridiques garantissant un niveau adéquat de protection des données.<br/><br/>
                <b>Publicités</b><br/>
                 Nous pouvons utiliser une technologie publicitaire tierce pour diffuser des publicités lorsque vous accédez au Site. Cette technologie utilise les informations relatives à votre utilisation des Services pour diffuser des publicités qui vous sont destinées (par exemple, en plaçant des cookies tiers sur votre navigateur web). <br/><br/>

                Vous pouvez vous désabonner de nombreux réseaux publicitaires tiers, y compris ceux exploités par les membres de Network Advertising Initiative (\"NAI\") et de Digital Advertising Alliance (\"DAA\"). Pour obtenir plus d'informations auprès des membres de NAI et de DAA sur cette pratique et sur vos choix concernant l'utilisation de ces informations par ces sociétés, notamment comment se désabonner des réseaux publicitaires tiers exploités par les membres de NAI et de DAA, veuillez consulter leurs sites web respectifs : http://optout.networkadvertising.org/#!/ et http://optout.aboutads.info/#!/.<br/><br/>
                <b>Marketing</b><br/>
                Nous pouvons utiliser vos Informations personnelles, notamment votre nom, votre adresse e-mail, votre numéro de téléphone, etc., nous-mêmes ou par le biais de sous-traitants afin de vous fournir du contenu promotionnel concernant les services qui, selon nous, pourraient vous intéresser.<br/><br/>

                Par respect pour votre droit à la vie privée, nous incluons dans ce contenu promotionnel les moyens de refuser de recevoir de nouvelles offres promotionnelles de notre part. Si vous vous désabonnez, nous supprimerons votre adresse e-mail ou votre numéro de téléphone de nos listes de distribution marketing. <br/><br/>

                Veuillez noter que même si vous vous désabonnez afin de ne plus recevoir d'e-mails marketing de notre part, nous pouvons vous envoyer d'autres types de communications importantes par e-mail sans vous donner la possibilité de vous désabonner. Celles-ci peuvent inclure des messages du service client ou des notifications administratives.<br/><br/>
                <b>Transaction d'entreprise</b><br/>
                Nous pouvons partager des informations dans le cas d'une transaction commerciale (par ex. : la vente d'une partie importante de notre entreprise, la fusion, la consolidation ou la vente d'actifs). Dans les cas mentionnés précédemment, le bénéficiaire ou la société acquérante assumera les droits et obligations tels que décrits dans la présente Politique de confidentialité<br/><br/>
                <b>Mineurs</b><br/>
                Nous comprenons l'importance de la protection des renseignements personnels des enfants, en particulier dans un environnement en ligne. Le Site n'a pas été conçu pour être utilisé par des enfants. En aucun cas nous n'autorisons l'utilisation de nos services par des mineurs sans le consentement ou l'autorisation préalable d'un parent ou d'un tuteur légal. Nous ne collectons pas sciemment d'Informations personnelles auprès de mineurs. Si un parent s'aperçoit que son enfant nous a fourni des Informations personnelles sans son consentement (ou si un tuteur se rend compte que l'enfant dont il a la responsabilité nous a fourni des informations personnelles sans son consentement), il ou elle doit nous contacter à l'adresse : <a href=\"mailto:bonjour@benoit-fabioux.fr\">bonjour@benoit-fabioux.fr</a><br/><br/>
                <b>Mises à jour ou modifications de la présente Politique de confidentialité</b><br/>
                Nous nous réservons le droit de modifier ou de réviser périodiquement la politique de confidentialité ; les changements matériels entreront en vigueur dès l'affichage de la politique de confidentialité révisée. La dernière révision sera disponible dans la section \"Dernière modification\". Votre utilisation continue de la Plateforme, suite à la notification de ces modifications sur notre site web, constitue votre reconnaissance et votre acceptation desdites modifications et votre consentement à les respecter.<br/><br/>
                <b>Nous contacter</b><br/>
                Si vous avez des questions générales concernant le Site ou notre collecte et notre utilisation des informations vous concernant, veuillez nous contacter à l'adresse : <a href=“mailto:benoit.fabioux0144@orange.fr”>bonjour@benoit-fabioux.fr</a>.<br/><br/>

                Benoit Fabioux <br/>

                <a href=“mailto:benoit.fabioux0144@orange.fr”>bonjour@benoit-fabioux.fr</a><br/><br/><br/>


                Dernière modification 01/01/2022
            </p>
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


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vitrine_website/politique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 137,  217 => 134,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Benoit Fabioux - Politiques de confidentialités{% endblock %}


{% block body %}

    <section id=\"loi-section\">
        <div class=\"loi-container\">
            <h1>Politiques de confidentialités</h1>
            <p>
            <b>Introduction</b><br/>
                La présente Politique de confidentialité décrit les pratiques du site web <b>Benoit Fabioux</b> concernant les informations collectées auprès des utilisateurs qui accèdent à notre site web à l'adresse https://benoit-fabioux.fr ou qui partagent des informations personnelles avec nous.<br/><br/>

                Autorité responsable au sens des lois sur la protection des données, en particulier le Règlement général sur la protection des données (RGPD) : OVH. <br/><br/>
                <b>Droits des utilisateurs</b><br/>
                Vous pouvez demander à : <br/>
                Recevoir une confirmation du traitement des informations personnelles vous concernant (ou un avis de non-traitement de vos informations personnelles, le cas échéant) et accéder à vos informations personnelles stockées, ainsi qu'à des informations supplémentaires. <br/>
                Recevoir une copie des informations personnelles que vous nous avez fournies volontairement dans un format structuré, couramment utilisé et lisible par un ordinateur. <br/>
                Demander la rectification de vos informations personnelles que nous stockons.<br/>
                Demander la suppression de vos informations personnelles. <br/>
                Refuser le traitement de vos informations personnelles. <br/>
                Demander que nous limitions le traitement de vos informations personnelles.<br/>
                Déposer une plainte auprès d'une autorité de surveillance.<br/><br/>

                Veuillez noter cependant que ces droits ne sont pas absolus et peuvent être soumis à nos propres intérêts légitimes et exigences réglementaires. <br/><br/>

                Si vous souhaitez exercer l'un des droits susmentionnés ou recevoir plus d'informations, veuillez contacter notre délégué à la protection des données à l'aide des informations fournies ci-dessous :<br/>
                <a href=“mailto:benoit.fabioux0144@orange.fr”>bonjour@benoit-fabioux.fr</a> .<br/><br/>
                <b>Conservation</b><br/>
                Nous conserverons vos informations personnelles aussi longtemps que nécessaire pour fournir nos services, et si nécessaire pour respecter nos obligations légales, résoudre des litiges et faire appliquer nos politiques. Les durées de conservation seront déterminées selon le type d'informations collectées et l'objectif de leur collecte, compte tenu des exigences applicables à la situation et le besoin de détruire des informations obsolètes et non utilisées dans les meilleurs délais. En vertu des lois et des règlements en vigueur, nous conserverons des archives contenant les renseignements personnels du client, les documents d'ouverture du compte, les communications et toute autre information requise. 
                <br/><br/>
                Nous pouvons rectifier, compléter ou supprimer des informations incomplètes ou incorrectes, à tout moment et à notre seule discrétion.<br/><br/>
                <b>Raisons de la collecte de données </b><br/>
                Le traitement de vos informations personnelles (c'est-a-dire toute information qui pourrait potentiellement permettre votre identification par des moyens raisonnables ; ci-après \"<b>Informations personnelles</b>”) est nécessaire pour l'exécution de nos obligations contractuelles envers vous et pour vous fournir nos services, protéger nos intérêts légitimes et respecter les obligations réglementaires (légales et financières) auxquelles nous sommes soumis.
                <br/><br/>
                Lorsque vous utilisez le Site, vous acceptez la collecte, le stockage, l'utilisation, la divulgation et d'autres utilisations de vos Informations personnelles comme prévu dans la présente Politique de confidentialité.
                <br/><br/>
                Nous encourageons nos Utilisateurs à lire attentivement la Politique de confidentialité et à l'utiliser pour prendre des décisions éclairées. 
                <br/><br/>
                <b>Quelles informations recueillons-nous ?</b><br/>

                Nous recueillons deux types de données et d'informations concernant nos Utilisateurs. 
                <br/><br/>

                Le premier type regroupe les informations non-identifiées et ne permettant pas d'identification qui concernent un ou plusieurs Utilisateurs, et qui peuvent être mises à notre disposition ou collectées du fait de leur utilisation du Site (« <b>Informations non personnelles</b> »). Nous ne connaissons pas l'identité des Utilisateurs auprès desquels ces informations non personnelles ont été collectées. Les informations non personnelles qui sont collectées peuvent inclure vos informations d'utilisation agrégées et des informations techniques transmises par votre appareil, notamment certaines informations relatives aux logiciels et aux matériels informatiques (par ex. : le type de navigateur et de système d'exploitation que votre appareil utilise, les paramètres de langue, l'heure d'accès, etc.) afin d'améliorer la fonctionnalité de notre Site. Nous pouvons également recueillir des informations concernant votre activité sur le Site (par ex. : les pages consultées, la navigation en ligne, les clics, les actions, etc.).<br/>

                Le second type regroupe les <b>Informations personnelles</b> c'est à dire des informations d'identification individuelle, qui identifient un individu ou qui sont susceptibles, par des moyens raisonnables, de permettre l'identification d'un individu. <br/>
                Comment recevons-nous les informations vous concernant ?<br/>
                Vos Informations personnelles sont collectées de plusieurs façons :<br/>
                Lorsque vous fournissez volontairement vos données personnelles en vous inscrivant sur notre Site ;<br/>
                Lorsque vous utilisez notre Site ou y accédez en rapport avec votre utilisation de nos services ;<br/>
                À partir de fournisseurs, de services et de registres publics tiers (par exemple : des fournisseurs d'analyse du trafic).<br/><br/>
                <b>Comment ces informations sont-elles utilisées ? Avec qui partageons-nous ces informations ?</b><br/>
                Nous ne louons pas, ne vendons pas ni ne partageons les informations des Utilisateurs avec des tiers, sauf tel que décrit dans la présente Politique de confidentialité.<br/><br/>

                Nous pouvons utiliser les informations pour les raisons suivantes :<br/>
                Communiquer avec vous : en vous envoyant des messages concernant nos services, en vous fournissant des informations techniques et en répondant à toute question relative au service client que vous pouvez poser ;<br/>
                Communiquer avec vous et vous informer des dernières mises à jour et des nouveaux services ;<br/>
                Vous présenter des publicités lorsque vous utilisez notre Site (voir la section \"Publicités\" pour en savoir plus) ; <br/>
                Promouvoir nos sites web et nos produits (voir la section « Marketing » pour en savoir plus) ; <br/>
                Mener des enquêtes statistiques et analytiques afin d'améliorer le Site.<br/>
                Outre les différentes utilisations mentionnées ci-dessus, nous pouvons transférer ou divulguer les Informations personnelles à nos filiales, sociétés affiliées et sous-traitants.<br/><br/>

                Outre les raisons mentionnées dans la présente Politique de confidentialité, nous pouvons partager les Informations personnelles avec des fournisseurs tiers de confiance (qui peuvent dépendre de différentes juridictions dans le monde), pour les raisons suivantes : <br/>
                Héberger et exploiter notre Site ;<br/>
                Vous fournir nos services, notamment un affichage personnalisé de notre Site ;<br/>
                Stocker et traiter lesdites informations en notre nom ; <br/>
                Vous présenter des publicités et nous aider à évaluer la réussite de nos campagnes publicitaires pour nous permettre de recibler nos utilisateurs (le cas échéant) ;<br/>
                Vous proposer des offres marketing et du contenu promotionnel relatifs à notre Site et nos services ; <br/>
                Réaliser des recherches, des diagnostics techniques ou analytiques ;<br/>
                Nous pouvons également divulguer les informations si nous croyons de bonne foi que la divulgation de ces informations est utile ou raisonnablement nécessaire pour : (i) respecter la loi, le règlement, la procédure judiciaire en vigueur ou une requête du gouvernement ; (ii) faire appliquer nos politiques (y compris notre politique de confidentialité), notamment les enquêtes sur des violations potentielles de celles-ci ; (iii) rechercher, détecter, empêcher ou prendre des mesures contre des cas de fraude présumés ou les problèmes de sécurité ; (iv) établir ou exercer nos droits à nous défendre contre toute réclamation légale ; (v) empêcher l'atteinte aux droits, à la propriété ou à la sécurité de notre entreprise, de nos utilisateurs, de vous-mêmes ou de toute partie tierce ; ou (vi) aux fins de collaborer avec les forces de l'ordre, et/ou dans le cas où nous estimons que c'est nécessaire, afin d'exercer la propriété intellectuelle ou d'autres droits juridiques.<br/><br/>
                <b>Cookies</b><br/>
                Nos partenaires de confiance et nous-mêmes utilisons des cookies et d'autres technologies dans nos services connexes, y compris lorsque vous visitez notre Site ou accédez à nos services. <br/><br/>

                Un \"cookie\" est un petit fragment d'information qu'un site web attribue à votre appareil lors de votre consultation du site. Les cookies sont très utiles et leur utilisation peut avoir différents objectifs, notamment de vous permettre de naviguer efficacement d'une page à l'autre, d'autoriser l'activation automatique de certaines fonctionnalités, de mémoriser vos préférences et de vous permettre d'interagir avec nos Services plus rapidement et plus simplement. Les cookies sont également utilisés pour faire en sorte que les publicités que vous voyez correspondent à vos intérêts et soient personnalisées en conséquence, ainsi que pour compiler des données statistiques sur votre utilisation de nos Services. <br/><br/>

                Le Site utilise les types de cookies suivants :<br/><br/>

                <b>a. Les « cookies de session » </b>qui sont conservés uniquement de façon temporaire lors de votre session de navigation afin de permettre une utilisation normale du système, et sont supprimés de votre appareil lorsque vous fermez le navigateur ; <br/><br/>

                <b>b. Les « cookies persistants »</b> qui ne sont lus que par le Site, qui sont enregistrés sur votre ordinateur pour une durée déterminée et ne sont pas supprimés lorsque le navigateur est fermé. Ces cookies sont utilisés lorsque nous devons vous reconnaitre lors de visites répétées, par exemple, pour nous permettre de conserver vos préférences lors de votre prochaine connexion ; <br/><br/>

                <b>c. Les cookies « tiers »</b> qui sont mis en place par d'autres services en ligne qui gèrent du contenu sur la page que vous consultez, par exemple, par les sociétés d'analyse tierces qui surveillent et analysent notre accès web.<br/><br/>

                Les cookies ne contiennent aucune information permettant de vous identifier personnellement, mais nous pouvons associer les Informations personnelles vous concernant que nous stockons aux informations stockées et obtenues par les cookies. Vous pouvez supprimer les cookies en suivant les instructions dans les préférences de votre appareil. Sachez toutefois que si vous choisissez de désactiver les cookies, certaines fonctionnalités de notre Site pourront ne pas fonctionner correctement et votre expérience en ligne pourrait être limitée.<br/><br/>

                Nous utilisons un outil basé sur la technologie Snowplow Analytics  pour recueillir des informations sur votre utilisation du Site. L'outil recueille des informations comme la fréquence d'accès des utilisateurs au Site, les pages qu'ils consultent, à quel moment, etc. L'outil ne collecte aucune information personnelle, et il n'est utilisé par l'hébergeur et opérateur de notre Site qu'à des fins d'amélioration de son Site et de ses services.<br/><br/>
                <b>Utilisation des bibliothèques de scripts (Google Fonts)</b><br/>
                Afin de présenter nos contenus de façon agréable et avec une bonne qualité graphique sur tous les navigateurs, nous utilisons dans ce site web des bibliothèques de scripts et de polices comme Google Fonts (https://www.google.com/webfonts). Les polices de Google Fonts sont transférées sur le cache de votre navigateur afin d'éviter les chargements multiples. Si votre navigateur ne prend pas en charge les polices Google Fonts ou bloque leur accès, les contenus seront affichés en utilisant la police par défaut. <br/>
                Toute requête vers une bibliothèque de scripts ou de polices déclenche automatiquement une connexion avec l'opérateur de ladite bibliothèque. S'il est en théorie possible que les opérateurs des bibliothèques collectent des données, l'existence de cette pratique et, le cas échéant, les buts poursuivis n'ont pas encore pu être établis.<br/>
                Si vous souhaitez consulter la politique de confidentialité de l'opérateur de bibliothèque Google, accédez à l'adresse suivante : https://www.google.com/policies/privacy.<br/><br/>
                <b>Collecte d'informations par des tiers</b><br/>
                Notre politique concerne uniquement l'utilisation et la divulgation des informations que nous collectons auprès de vous. Dans la mesure où vous divulguez vos informations à d'autres parties ou sites sur Internet, des règles différentes peuvent s'appliquer à leur utilisation ou à leur divulgation. Par conséquent, nous vous encourageons à lire les conditions d'utilisation et la politique de confidentialité de chaque partie tierce à laquelle vous divulguez volontairement vos informations. <br/><br/>

                La présente Politique de confidentialité ne s'applique pas aux pratiques des sociétés dont nous ne sommes pas propriétaires et que nous ne contrôlons pas, ni aux individus que nous n'employons pas ni ne gérons, notamment toute partie tierce à laquelle nous pouvons divulguer vos informations comme indiqué par la présente Politique de confidentialité. <br/><br/>
                <b>Comment protégeons-nous vos informations ?</b><br/>
                Nous accordons une grande attention à la mise en œuvre et au maintien de la sécurité du Site et de vos informations. Bien que nous mettions en œuvre des mesures raisonnables pour protéger les informations, nous ne pouvons pas être tenus responsables des actes de personnes qui obtiennent un accès non autorisé ou abusent de notre Site, et nous n'offrons aucune garantie formelle, implicite ou autre, d'empêcher un tel accès.<br/><br/>
                <b>Transfert des données en dehors de l'EEE </b><br/>
                Veuillez noter que certains destinataires de données peuvent se trouver en dehors de l'Espace économique européen (EEE). Dans de tels cas, nous transférerons vos données auxdits pays uniquement tel qu'approuvé par la Commission européenne en fournissant le niveau adéquat de protection des données, ou nous établirons des accords juridiques garantissant un niveau adéquat de protection des données.<br/><br/>
                <b>Publicités</b><br/>
                 Nous pouvons utiliser une technologie publicitaire tierce pour diffuser des publicités lorsque vous accédez au Site. Cette technologie utilise les informations relatives à votre utilisation des Services pour diffuser des publicités qui vous sont destinées (par exemple, en plaçant des cookies tiers sur votre navigateur web). <br/><br/>

                Vous pouvez vous désabonner de nombreux réseaux publicitaires tiers, y compris ceux exploités par les membres de Network Advertising Initiative (\"NAI\") et de Digital Advertising Alliance (\"DAA\"). Pour obtenir plus d'informations auprès des membres de NAI et de DAA sur cette pratique et sur vos choix concernant l'utilisation de ces informations par ces sociétés, notamment comment se désabonner des réseaux publicitaires tiers exploités par les membres de NAI et de DAA, veuillez consulter leurs sites web respectifs : http://optout.networkadvertising.org/#!/ et http://optout.aboutads.info/#!/.<br/><br/>
                <b>Marketing</b><br/>
                Nous pouvons utiliser vos Informations personnelles, notamment votre nom, votre adresse e-mail, votre numéro de téléphone, etc., nous-mêmes ou par le biais de sous-traitants afin de vous fournir du contenu promotionnel concernant les services qui, selon nous, pourraient vous intéresser.<br/><br/>

                Par respect pour votre droit à la vie privée, nous incluons dans ce contenu promotionnel les moyens de refuser de recevoir de nouvelles offres promotionnelles de notre part. Si vous vous désabonnez, nous supprimerons votre adresse e-mail ou votre numéro de téléphone de nos listes de distribution marketing. <br/><br/>

                Veuillez noter que même si vous vous désabonnez afin de ne plus recevoir d'e-mails marketing de notre part, nous pouvons vous envoyer d'autres types de communications importantes par e-mail sans vous donner la possibilité de vous désabonner. Celles-ci peuvent inclure des messages du service client ou des notifications administratives.<br/><br/>
                <b>Transaction d'entreprise</b><br/>
                Nous pouvons partager des informations dans le cas d'une transaction commerciale (par ex. : la vente d'une partie importante de notre entreprise, la fusion, la consolidation ou la vente d'actifs). Dans les cas mentionnés précédemment, le bénéficiaire ou la société acquérante assumera les droits et obligations tels que décrits dans la présente Politique de confidentialité<br/><br/>
                <b>Mineurs</b><br/>
                Nous comprenons l'importance de la protection des renseignements personnels des enfants, en particulier dans un environnement en ligne. Le Site n'a pas été conçu pour être utilisé par des enfants. En aucun cas nous n'autorisons l'utilisation de nos services par des mineurs sans le consentement ou l'autorisation préalable d'un parent ou d'un tuteur légal. Nous ne collectons pas sciemment d'Informations personnelles auprès de mineurs. Si un parent s'aperçoit que son enfant nous a fourni des Informations personnelles sans son consentement (ou si un tuteur se rend compte que l'enfant dont il a la responsabilité nous a fourni des informations personnelles sans son consentement), il ou elle doit nous contacter à l'adresse : <a href=\"mailto:bonjour@benoit-fabioux.fr\">bonjour@benoit-fabioux.fr</a><br/><br/>
                <b>Mises à jour ou modifications de la présente Politique de confidentialité</b><br/>
                Nous nous réservons le droit de modifier ou de réviser périodiquement la politique de confidentialité ; les changements matériels entreront en vigueur dès l'affichage de la politique de confidentialité révisée. La dernière révision sera disponible dans la section \"Dernière modification\". Votre utilisation continue de la Plateforme, suite à la notification de ces modifications sur notre site web, constitue votre reconnaissance et votre acceptation desdites modifications et votre consentement à les respecter.<br/><br/>
                <b>Nous contacter</b><br/>
                Si vous avez des questions générales concernant le Site ou notre collecte et notre utilisation des informations vous concernant, veuillez nous contacter à l'adresse : <a href=“mailto:benoit.fabioux0144@orange.fr”>bonjour@benoit-fabioux.fr</a>.<br/><br/>

                Benoit Fabioux <br/>

                <a href=“mailto:benoit.fabioux0144@orange.fr”>bonjour@benoit-fabioux.fr</a><br/><br/><br/>


                Dernière modification 01/01/2022
            </p>
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


{% endblock %}
", "vitrine_website/politique.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/vitrine_website/politique.html.twig");
    }
}
