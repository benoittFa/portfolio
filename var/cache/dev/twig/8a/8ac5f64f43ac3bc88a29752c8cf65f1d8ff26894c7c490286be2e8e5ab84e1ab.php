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

        echo "Benoit Fabioux - Politiques de confidentialit??s";
        
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
            <h1>Politiques de confidentialit??s</h1>
            <p>
            <b>Introduction</b><br/>
                La pr??sente Politique de confidentialit?? d??crit les pratiques du site web <b>Benoit Fabioux</b> concernant les informations collect??es aupr??s des utilisateurs qui acc??dent ?? notre site web ?? l'adresse https://benoit-fabioux.fr ou qui partagent des informations personnelles avec nous.<br/><br/>

                Autorit?? responsable au sens des lois sur la protection des donn??es, en particulier le R??glement g??n??ral sur la protection des donn??es (RGPD)??: OVH.??<br/><br/>
                <b>Droits des utilisateurs</b><br/>
                Vous pouvez demander ????:??<br/>
                Recevoir une confirmation du traitement des informations personnelles vous concernant (ou un avis de non-traitement de vos informations personnelles, le cas ??ch??ant) et acc??der ?? vos informations personnelles stock??es, ainsi qu'?? des informations suppl??mentaires.??<br/>
                Recevoir une copie des informations personnelles que vous nous avez fournies volontairement dans un format structur??, couramment utilis?? et lisible par un ordinateur.??<br/>
                Demander la rectification de vos informations personnelles que nous stockons.<br/>
                Demander la suppression de vos informations personnelles.??<br/>
                Refuser le traitement de vos informations personnelles.??<br/>
                Demander que nous limitions le traitement de vos informations personnelles.<br/>
                D??poser une plainte aupr??s d'une autorit?? de surveillance.<br/><br/>

                Veuillez noter cependant que ces droits ne sont pas absolus et peuvent ??tre soumis ?? nos propres int??r??ts l??gitimes et exigences r??glementaires.??<br/><br/>

                Si vous souhaitez exercer l'un des droits susmentionn??s ou recevoir plus d'informations, veuillez contacter notre d??l??gu?? ?? la protection des donn??es ?? l'aide des informations fournies ci-dessous??:<br/>
                <a href=???mailto:benoit.fabioux0144@orange.fr???>bonjour@benoit-fabioux.fr</a> .<br/><br/>
                <b>Conservation</b><br/>
                Nous conserverons vos informations personnelles aussi longtemps que n??cessaire pour fournir nos services, et si n??cessaire pour respecter nos obligations l??gales, r??soudre des litiges et faire appliquer nos politiques. Les dur??es de conservation seront d??termin??es selon le type d'informations collect??es et l'objectif de leur collecte, compte tenu des exigences applicables ?? la situation et le besoin de d??truire des informations obsol??tes et non utilis??es dans les meilleurs d??lais. En vertu des lois et des r??glements en vigueur, nous conserverons des archives contenant les renseignements personnels du client, les documents d'ouverture du compte, les communications et toute autre information requise.??
                <br/><br/>
                Nous pouvons rectifier, compl??ter ou supprimer des informations incompl??tes ou incorrectes, ?? tout moment et ?? notre seule discr??tion.<br/><br/>
                <b>Raisons de la collecte de donn??es??</b><br/>
                Le traitement de vos informations personnelles (c'est-a-dire toute information qui pourrait potentiellement permettre votre identification par des moyens raisonnables??; ci-apr??s \"<b>Informations personnelles</b>???) est n??cessaire pour l'ex??cution de nos obligations contractuelles envers vous et pour vous fournir nos services, prot??ger nos int??r??ts l??gitimes et respecter les obligations r??glementaires (l??gales et financi??res) auxquelles nous sommes soumis.
                <br/><br/>
                Lorsque vous utilisez le Site, vous acceptez la collecte, le stockage, l'utilisation, la divulgation et d'autres utilisations de vos Informations personnelles comme pr??vu dans la pr??sente Politique de confidentialit??.
                <br/><br/>
                Nous encourageons nos Utilisateurs ?? lire attentivement la Politique de confidentialit?? et ?? l'utiliser pour prendre des d??cisions ??clair??es.??
                <br/><br/>
                <b>Quelles informations recueillons-nous???</b><br/>

                Nous recueillons deux types de donn??es et d'informations concernant nos Utilisateurs.??
                <br/><br/>

                Le premier type regroupe les informations non-identifi??es et ne permettant pas d'identification qui concernent un ou plusieurs Utilisateurs, et qui peuvent ??tre mises ?? notre disposition ou collect??es du fait de leur utilisation du Site (????<b>Informations non personnelles</b>????). Nous ne connaissons pas l'identit?? des Utilisateurs aupr??s desquels ces informations non personnelles ont ??t?? collect??es. Les informations non personnelles qui sont collect??es peuvent inclure vos informations d'utilisation agr??g??es et des informations techniques transmises par votre appareil, notamment certaines informations relatives aux logiciels et aux mat??riels informatiques (par ex.??: le type de navigateur et de syst??me d'exploitation que votre appareil utilise, les param??tres de langue, l'heure d'acc??s, etc.) afin d'am??liorer la fonctionnalit?? de notre Site. Nous pouvons ??galement recueillir des informations concernant votre activit?? sur le Site (par ex.??: les pages consult??es, la navigation en ligne, les clics, les actions, etc.).<br/>

                Le second type regroupe les <b>Informations personnelles</b> c'est ?? dire des informations d'identification individuelle, qui identifient un individu ou qui sont susceptibles, par des moyens raisonnables, de permettre l'identification d'un individu. <br/>
                Comment recevons-nous les informations vous concernant???<br/>
                Vos Informations personnelles sont collect??es de plusieurs fa??ons??:<br/>
                Lorsque vous fournissez volontairement vos donn??es personnelles en vous inscrivant sur notre Site??;<br/>
                Lorsque vous utilisez notre Site ou y acc??dez en rapport avec votre utilisation de nos services??;<br/>
                ?? partir de fournisseurs, de services et de registres publics tiers (par exemple??: des fournisseurs d'analyse du trafic).<br/><br/>
                <b>Comment ces informations sont-elles utilis??es??? Avec qui partageons-nous ces informations???</b><br/>
                Nous ne louons pas, ne vendons pas ni ne partageons les informations des Utilisateurs avec des tiers, sauf tel que d??crit dans la pr??sente Politique de confidentialit??.<br/><br/>

                Nous pouvons utiliser les informations pour les raisons suivantes??:<br/>
                Communiquer avec vous??: en vous envoyant des messages concernant nos services, en vous fournissant des informations techniques et en r??pondant ?? toute question relative au service client que vous pouvez poser??;<br/>
                Communiquer avec vous et vous informer des derni??res mises ?? jour et des nouveaux services??;<br/>
                Vous pr??senter des publicit??s lorsque vous utilisez notre Site (voir la section \"Publicit??s\" pour en savoir plus)??;??<br/>
                Promouvoir nos sites web et nos produits (voir la section ????Marketing???? pour en savoir plus)??;??<br/>
                Mener des enqu??tes statistiques et analytiques afin d'am??liorer le Site.<br/>
                Outre les diff??rentes utilisations mentionn??es ci-dessus, nous pouvons transf??rer ou divulguer les Informations personnelles ?? nos filiales, soci??t??s affili??es et sous-traitants.<br/><br/>

                Outre les raisons mentionn??es dans la pr??sente Politique de confidentialit??, nous pouvons partager les Informations personnelles avec des fournisseurs tiers de confiance (qui peuvent d??pendre de diff??rentes juridictions dans le monde), pour les raisons suivantes??:??<br/>
                H??berger et exploiter notre Site??;<br/>
                Vous fournir nos services, notamment un affichage personnalis?? de notre Site??;<br/>
                Stocker et traiter lesdites informations en notre nom??;??<br/>
                Vous pr??senter des publicit??s et nous aider ?? ??valuer la r??ussite de nos campagnes publicitaires pour nous permettre de recibler nos utilisateurs (le cas ??ch??ant)??;<br/>
                Vous proposer des offres marketing et du contenu promotionnel relatifs ?? notre Site et nos services??;??<br/>
                R??aliser des recherches, des diagnostics techniques ou analytiques??;<br/>
                Nous pouvons ??galement divulguer les informations si nous croyons de bonne foi que la divulgation de ces informations est utile ou raisonnablement n??cessaire pour??: (i) respecter la loi, le r??glement, la proc??dure judiciaire en vigueur ou une requ??te du gouvernement??; (ii) faire appliquer nos politiques (y compris notre politique de confidentialit??), notamment les enqu??tes sur des violations potentielles de celles-ci??; (iii) rechercher, d??tecter, emp??cher ou prendre des mesures contre des cas de fraude pr??sum??s ou les probl??mes de s??curit????; (iv) ??tablir ou exercer nos droits ?? nous d??fendre contre toute r??clamation l??gale??; (v) emp??cher l'atteinte aux droits, ?? la propri??t?? ou ?? la s??curit?? de notre entreprise, de nos utilisateurs, de vous-m??mes ou de toute partie tierce??; ou (vi) aux fins de collaborer avec les forces de l'ordre, et/ou dans le cas o?? nous estimons que c'est n??cessaire, afin d'exercer la propri??t?? intellectuelle ou d'autres droits juridiques.<br/><br/>
                <b>Cookies</b><br/>
                Nos partenaires de confiance et nous-m??mes utilisons des cookies et d'autres technologies dans nos services connexes, y compris lorsque vous visitez notre Site ou acc??dez ?? nos services.??<br/><br/>

                Un \"cookie\" est un petit fragment d'information qu'un site web attribue ?? votre appareil lors de votre consultation du site. Les cookies sont tr??s utiles et leur utilisation peut avoir diff??rents objectifs, notamment de vous permettre de naviguer efficacement d'une page ?? l'autre, d'autoriser l'activation automatique de certaines fonctionnalit??s, de m??moriser vos pr??f??rences et de vous permettre d'interagir avec nos Services plus rapidement et plus simplement. Les cookies sont ??galement utilis??s pour faire en sorte que les publicit??s que vous voyez correspondent ?? vos int??r??ts et soient personnalis??es en cons??quence, ainsi que pour compiler des donn??es statistiques sur votre utilisation de nos Services.??<br/><br/>

                Le Site utilise les types de cookies suivants??:<br/><br/>

                <b>a. Les ????cookies de session???? </b>qui sont conserv??s uniquement de fa??on temporaire lors de votre session de navigation afin de permettre une utilisation normale du syst??me, et sont supprim??s de votre appareil lorsque vous fermez le navigateur??;??<br/><br/>

                <b>b. Les ????cookies persistants????</b> qui ne sont lus que par le Site, qui sont enregistr??s sur votre ordinateur pour une dur??e d??termin??e et ne sont pas supprim??s lorsque le navigateur est ferm??. Ces cookies sont utilis??s lorsque nous devons vous reconnaitre lors de visites r??p??t??es, par exemple, pour nous permettre de conserver vos pr??f??rences lors de votre prochaine connexion??;??<br/><br/>

                <b>c. Les cookies ????tiers????</b> qui sont mis en place par d'autres services en ligne qui g??rent du contenu sur la page que vous consultez, par exemple, par les soci??t??s d'analyse tierces qui surveillent et analysent notre acc??s web.<br/><br/>

                Les cookies ne contiennent aucune information permettant de vous identifier personnellement, mais nous pouvons associer les Informations personnelles vous concernant que nous stockons aux informations stock??es et obtenues par les cookies. Vous pouvez supprimer les cookies en suivant les instructions dans les pr??f??rences de votre appareil. Sachez toutefois que si vous choisissez de d??sactiver les cookies, certaines fonctionnalit??s de notre Site pourront ne pas fonctionner correctement et votre exp??rience en ligne pourrait ??tre limit??e.<br/><br/>

                Nous utilisons un outil bas?? sur la technologie Snowplow Analytics?? pour recueillir des informations sur votre utilisation du Site. L'outil recueille des informations comme la fr??quence d'acc??s des utilisateurs au Site, les pages qu'ils consultent, ?? quel moment, etc. L'outil ne collecte aucune information personnelle, et il n'est utilis?? par l'h??bergeur et op??rateur de notre Site qu'?? des fins d'am??lioration de son Site et de ses services.<br/><br/>
                <b>Utilisation des biblioth??ques de scripts (Google Fonts)</b><br/>
                Afin de pr??senter nos contenus de fa??on agr??able et avec une bonne qualit?? graphique sur tous les navigateurs, nous utilisons dans ce site web des biblioth??ques de scripts et de polices comme Google Fonts (https://www.google.com/webfonts). Les polices de Google Fonts sont transf??r??es sur le cache de votre navigateur afin d'??viter les chargements multiples. Si votre navigateur ne prend pas en charge les polices Google Fonts ou bloque leur acc??s, les contenus seront affich??s en utilisant la police par d??faut.??<br/>
                Toute requ??te vers une biblioth??que de scripts ou de polices d??clenche automatiquement une connexion avec l'op??rateur de ladite biblioth??que. S'il est en th??orie possible que les op??rateurs des biblioth??ques collectent des donn??es, l'existence de cette pratique et, le cas ??ch??ant, les buts poursuivis n'ont pas encore pu ??tre ??tablis.<br/>
                Si vous souhaitez consulter la politique de confidentialit?? de l'op??rateur de biblioth??que Google, acc??dez ?? l'adresse suivante??: https://www.google.com/policies/privacy.<br/><br/>
                <b>Collecte d'informations par des tiers</b><br/>
                Notre politique concerne uniquement l'utilisation et la divulgation des informations que nous collectons aupr??s de vous. Dans la mesure o?? vous divulguez vos informations ?? d'autres parties ou sites sur Internet, des r??gles diff??rentes peuvent s'appliquer ?? leur utilisation ou ?? leur divulgation. Par cons??quent, nous vous encourageons ?? lire les conditions d'utilisation et la politique de confidentialit?? de chaque partie tierce ?? laquelle vous divulguez volontairement vos informations.??<br/><br/>

                La pr??sente Politique de confidentialit?? ne s'applique pas aux pratiques des soci??t??s dont nous ne sommes pas propri??taires et que nous ne contr??lons pas, ni aux individus que nous n'employons pas ni ne g??rons, notamment toute partie tierce ?? laquelle nous pouvons divulguer vos informations comme indiqu?? par la pr??sente Politique de confidentialit??.??<br/><br/>
                <b>Comment prot??geons-nous vos informations???</b><br/>
                Nous accordons une grande attention ?? la mise en ??uvre et au maintien de la s??curit?? du Site et de vos informations. Bien que nous mettions en ??uvre des mesures raisonnables pour prot??ger les informations, nous ne pouvons pas ??tre tenus responsables des actes de personnes qui obtiennent un acc??s non autoris?? ou abusent de notre Site, et nous n'offrons aucune garantie formelle, implicite ou autre, d'emp??cher un tel acc??s.<br/><br/>
                <b>Transfert des donn??es en dehors de l'EEE??</b><br/>
                Veuillez noter que certains destinataires de donn??es peuvent se trouver en dehors de l'Espace ??conomique europ??en (EEE). Dans de tels cas, nous transf??rerons vos donn??es auxdits pays uniquement tel qu'approuv?? par la Commission europ??enne en fournissant le niveau ad??quat de protection des donn??es, ou nous ??tablirons des accords juridiques garantissant un niveau ad??quat de protection des donn??es.<br/><br/>
                <b>Publicit??s</b><br/>
                ??Nous pouvons utiliser une technologie publicitaire tierce pour diffuser des publicit??s lorsque vous acc??dez au Site. Cette technologie utilise les informations relatives ?? votre utilisation des Services pour diffuser des publicit??s qui vous sont destin??es (par exemple, en pla??ant des cookies tiers sur votre navigateur web).??<br/><br/>

                Vous pouvez vous d??sabonner de nombreux r??seaux publicitaires tiers, y compris ceux exploit??s par les membres de Network Advertising Initiative (\"NAI\") et de Digital Advertising Alliance (\"DAA\"). Pour obtenir plus d'informations aupr??s des membres de NAI et de DAA sur cette pratique et sur vos choix concernant l'utilisation de ces informations par ces soci??t??s, notamment comment se d??sabonner des r??seaux publicitaires tiers exploit??s par les membres de NAI et de DAA, veuillez consulter leurs sites web respectifs??: http://optout.networkadvertising.org/#!/ et http://optout.aboutads.info/#!/.<br/><br/>
                <b>Marketing</b><br/>
                Nous pouvons utiliser vos Informations personnelles, notamment votre nom, votre adresse e-mail, votre num??ro de t??l??phone, etc., nous-m??mes ou par le biais de sous-traitants afin de vous fournir du contenu promotionnel concernant les services qui, selon nous, pourraient vous int??resser.<br/><br/>

                Par respect pour votre droit ?? la vie priv??e, nous incluons dans ce contenu promotionnel les moyens de refuser de recevoir de nouvelles offres promotionnelles de notre part. Si vous vous d??sabonnez, nous supprimerons votre adresse e-mail ou votre num??ro de t??l??phone de nos listes de distribution marketing.??<br/><br/>

                Veuillez noter que m??me si vous vous d??sabonnez afin de ne plus recevoir d'e-mails marketing de notre part, nous pouvons vous envoyer d'autres types de communications importantes par e-mail sans vous donner la possibilit?? de vous d??sabonner. Celles-ci peuvent inclure des messages du service client ou des notifications administratives.<br/><br/>
                <b>Transaction d'entreprise</b><br/>
                Nous pouvons partager des informations dans le cas d'une transaction commerciale (par ex.??: la vente d'une partie importante de notre entreprise, la fusion, la consolidation ou la vente d'actifs). Dans les cas mentionn??s pr??c??demment, le b??n??ficiaire ou la soci??t?? acqu??rante assumera les droits et obligations tels que d??crits dans la pr??sente Politique de confidentialit??<br/><br/>
                <b>Mineurs</b><br/>
                Nous comprenons l'importance de la protection des renseignements personnels des enfants, en particulier dans un environnement en ligne. Le Site n'a pas ??t?? con??u pour ??tre utilis?? par des enfants. En aucun cas nous n'autorisons l'utilisation de nos services par des mineurs sans le consentement ou l'autorisation pr??alable d'un parent ou d'un tuteur l??gal. Nous ne collectons pas sciemment d'Informations personnelles aupr??s de mineurs. Si un parent s'aper??oit que son enfant nous a fourni des Informations personnelles sans son consentement (ou si un tuteur se rend compte que l'enfant dont il a la responsabilit?? nous a fourni des informations personnelles sans son consentement), il ou elle doit nous contacter ?? l'adresse??: <a href=\"mailto:bonjour@benoit-fabioux.fr\">bonjour@benoit-fabioux.fr</a><br/><br/>
                <b>Mises ?? jour ou modifications de la pr??sente Politique de confidentialit??</b><br/>
                Nous nous r??servons le droit de modifier ou de r??viser p??riodiquement la politique de confidentialit????; les changements mat??riels entreront en vigueur d??s l'affichage de la politique de confidentialit?? r??vis??e. La derni??re r??vision sera disponible dans la section \"Derni??re modification\". Votre utilisation continue de la Plateforme, suite ?? la notification de ces modifications sur notre site web, constitue votre reconnaissance et votre acceptation desdites modifications et votre consentement ?? les respecter.<br/><br/>
                <b>Nous contacter</b><br/>
                Si vous avez des questions g??n??rales concernant le Site ou notre collecte et notre utilisation des informations vous concernant, veuillez nous contacter ?? l'adresse??: <a href=???mailto:benoit.fabioux0144@orange.fr???>bonjour@benoit-fabioux.fr</a>.<br/><br/>

                Benoit Fabioux <br/>

                <a href=???mailto:benoit.fabioux0144@orange.fr???>bonjour@benoit-fabioux.fr</a><br/><br/><br/>


                Derni??re modification 01/01/2022
            </p>
        </div>

     
        <div class='mentions-legales'>
            <p id=\"right-paragraph\">??2022 Tous droits r??serv??s Benoit Fabioux</p>

            <div>
                <a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_legales");
        echo "\">
                    <p>Mentions l??gales</p>
                </a>
                <a href=\"";
        // line 137
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

{% block title %}Benoit Fabioux - Politiques de confidentialit??s{% endblock %}


{% block body %}

    <section id=\"loi-section\">
        <div class=\"loi-container\">
            <h1>Politiques de confidentialit??s</h1>
            <p>
            <b>Introduction</b><br/>
                La pr??sente Politique de confidentialit?? d??crit les pratiques du site web <b>Benoit Fabioux</b> concernant les informations collect??es aupr??s des utilisateurs qui acc??dent ?? notre site web ?? l'adresse https://benoit-fabioux.fr ou qui partagent des informations personnelles avec nous.<br/><br/>

                Autorit?? responsable au sens des lois sur la protection des donn??es, en particulier le R??glement g??n??ral sur la protection des donn??es (RGPD)??: OVH.??<br/><br/>
                <b>Droits des utilisateurs</b><br/>
                Vous pouvez demander ????:??<br/>
                Recevoir une confirmation du traitement des informations personnelles vous concernant (ou un avis de non-traitement de vos informations personnelles, le cas ??ch??ant) et acc??der ?? vos informations personnelles stock??es, ainsi qu'?? des informations suppl??mentaires.??<br/>
                Recevoir une copie des informations personnelles que vous nous avez fournies volontairement dans un format structur??, couramment utilis?? et lisible par un ordinateur.??<br/>
                Demander la rectification de vos informations personnelles que nous stockons.<br/>
                Demander la suppression de vos informations personnelles.??<br/>
                Refuser le traitement de vos informations personnelles.??<br/>
                Demander que nous limitions le traitement de vos informations personnelles.<br/>
                D??poser une plainte aupr??s d'une autorit?? de surveillance.<br/><br/>

                Veuillez noter cependant que ces droits ne sont pas absolus et peuvent ??tre soumis ?? nos propres int??r??ts l??gitimes et exigences r??glementaires.??<br/><br/>

                Si vous souhaitez exercer l'un des droits susmentionn??s ou recevoir plus d'informations, veuillez contacter notre d??l??gu?? ?? la protection des donn??es ?? l'aide des informations fournies ci-dessous??:<br/>
                <a href=???mailto:benoit.fabioux0144@orange.fr???>bonjour@benoit-fabioux.fr</a> .<br/><br/>
                <b>Conservation</b><br/>
                Nous conserverons vos informations personnelles aussi longtemps que n??cessaire pour fournir nos services, et si n??cessaire pour respecter nos obligations l??gales, r??soudre des litiges et faire appliquer nos politiques. Les dur??es de conservation seront d??termin??es selon le type d'informations collect??es et l'objectif de leur collecte, compte tenu des exigences applicables ?? la situation et le besoin de d??truire des informations obsol??tes et non utilis??es dans les meilleurs d??lais. En vertu des lois et des r??glements en vigueur, nous conserverons des archives contenant les renseignements personnels du client, les documents d'ouverture du compte, les communications et toute autre information requise.??
                <br/><br/>
                Nous pouvons rectifier, compl??ter ou supprimer des informations incompl??tes ou incorrectes, ?? tout moment et ?? notre seule discr??tion.<br/><br/>
                <b>Raisons de la collecte de donn??es??</b><br/>
                Le traitement de vos informations personnelles (c'est-a-dire toute information qui pourrait potentiellement permettre votre identification par des moyens raisonnables??; ci-apr??s \"<b>Informations personnelles</b>???) est n??cessaire pour l'ex??cution de nos obligations contractuelles envers vous et pour vous fournir nos services, prot??ger nos int??r??ts l??gitimes et respecter les obligations r??glementaires (l??gales et financi??res) auxquelles nous sommes soumis.
                <br/><br/>
                Lorsque vous utilisez le Site, vous acceptez la collecte, le stockage, l'utilisation, la divulgation et d'autres utilisations de vos Informations personnelles comme pr??vu dans la pr??sente Politique de confidentialit??.
                <br/><br/>
                Nous encourageons nos Utilisateurs ?? lire attentivement la Politique de confidentialit?? et ?? l'utiliser pour prendre des d??cisions ??clair??es.??
                <br/><br/>
                <b>Quelles informations recueillons-nous???</b><br/>

                Nous recueillons deux types de donn??es et d'informations concernant nos Utilisateurs.??
                <br/><br/>

                Le premier type regroupe les informations non-identifi??es et ne permettant pas d'identification qui concernent un ou plusieurs Utilisateurs, et qui peuvent ??tre mises ?? notre disposition ou collect??es du fait de leur utilisation du Site (????<b>Informations non personnelles</b>????). Nous ne connaissons pas l'identit?? des Utilisateurs aupr??s desquels ces informations non personnelles ont ??t?? collect??es. Les informations non personnelles qui sont collect??es peuvent inclure vos informations d'utilisation agr??g??es et des informations techniques transmises par votre appareil, notamment certaines informations relatives aux logiciels et aux mat??riels informatiques (par ex.??: le type de navigateur et de syst??me d'exploitation que votre appareil utilise, les param??tres de langue, l'heure d'acc??s, etc.) afin d'am??liorer la fonctionnalit?? de notre Site. Nous pouvons ??galement recueillir des informations concernant votre activit?? sur le Site (par ex.??: les pages consult??es, la navigation en ligne, les clics, les actions, etc.).<br/>

                Le second type regroupe les <b>Informations personnelles</b> c'est ?? dire des informations d'identification individuelle, qui identifient un individu ou qui sont susceptibles, par des moyens raisonnables, de permettre l'identification d'un individu. <br/>
                Comment recevons-nous les informations vous concernant???<br/>
                Vos Informations personnelles sont collect??es de plusieurs fa??ons??:<br/>
                Lorsque vous fournissez volontairement vos donn??es personnelles en vous inscrivant sur notre Site??;<br/>
                Lorsque vous utilisez notre Site ou y acc??dez en rapport avec votre utilisation de nos services??;<br/>
                ?? partir de fournisseurs, de services et de registres publics tiers (par exemple??: des fournisseurs d'analyse du trafic).<br/><br/>
                <b>Comment ces informations sont-elles utilis??es??? Avec qui partageons-nous ces informations???</b><br/>
                Nous ne louons pas, ne vendons pas ni ne partageons les informations des Utilisateurs avec des tiers, sauf tel que d??crit dans la pr??sente Politique de confidentialit??.<br/><br/>

                Nous pouvons utiliser les informations pour les raisons suivantes??:<br/>
                Communiquer avec vous??: en vous envoyant des messages concernant nos services, en vous fournissant des informations techniques et en r??pondant ?? toute question relative au service client que vous pouvez poser??;<br/>
                Communiquer avec vous et vous informer des derni??res mises ?? jour et des nouveaux services??;<br/>
                Vous pr??senter des publicit??s lorsque vous utilisez notre Site (voir la section \"Publicit??s\" pour en savoir plus)??;??<br/>
                Promouvoir nos sites web et nos produits (voir la section ????Marketing???? pour en savoir plus)??;??<br/>
                Mener des enqu??tes statistiques et analytiques afin d'am??liorer le Site.<br/>
                Outre les diff??rentes utilisations mentionn??es ci-dessus, nous pouvons transf??rer ou divulguer les Informations personnelles ?? nos filiales, soci??t??s affili??es et sous-traitants.<br/><br/>

                Outre les raisons mentionn??es dans la pr??sente Politique de confidentialit??, nous pouvons partager les Informations personnelles avec des fournisseurs tiers de confiance (qui peuvent d??pendre de diff??rentes juridictions dans le monde), pour les raisons suivantes??:??<br/>
                H??berger et exploiter notre Site??;<br/>
                Vous fournir nos services, notamment un affichage personnalis?? de notre Site??;<br/>
                Stocker et traiter lesdites informations en notre nom??;??<br/>
                Vous pr??senter des publicit??s et nous aider ?? ??valuer la r??ussite de nos campagnes publicitaires pour nous permettre de recibler nos utilisateurs (le cas ??ch??ant)??;<br/>
                Vous proposer des offres marketing et du contenu promotionnel relatifs ?? notre Site et nos services??;??<br/>
                R??aliser des recherches, des diagnostics techniques ou analytiques??;<br/>
                Nous pouvons ??galement divulguer les informations si nous croyons de bonne foi que la divulgation de ces informations est utile ou raisonnablement n??cessaire pour??: (i) respecter la loi, le r??glement, la proc??dure judiciaire en vigueur ou une requ??te du gouvernement??; (ii) faire appliquer nos politiques (y compris notre politique de confidentialit??), notamment les enqu??tes sur des violations potentielles de celles-ci??; (iii) rechercher, d??tecter, emp??cher ou prendre des mesures contre des cas de fraude pr??sum??s ou les probl??mes de s??curit????; (iv) ??tablir ou exercer nos droits ?? nous d??fendre contre toute r??clamation l??gale??; (v) emp??cher l'atteinte aux droits, ?? la propri??t?? ou ?? la s??curit?? de notre entreprise, de nos utilisateurs, de vous-m??mes ou de toute partie tierce??; ou (vi) aux fins de collaborer avec les forces de l'ordre, et/ou dans le cas o?? nous estimons que c'est n??cessaire, afin d'exercer la propri??t?? intellectuelle ou d'autres droits juridiques.<br/><br/>
                <b>Cookies</b><br/>
                Nos partenaires de confiance et nous-m??mes utilisons des cookies et d'autres technologies dans nos services connexes, y compris lorsque vous visitez notre Site ou acc??dez ?? nos services.??<br/><br/>

                Un \"cookie\" est un petit fragment d'information qu'un site web attribue ?? votre appareil lors de votre consultation du site. Les cookies sont tr??s utiles et leur utilisation peut avoir diff??rents objectifs, notamment de vous permettre de naviguer efficacement d'une page ?? l'autre, d'autoriser l'activation automatique de certaines fonctionnalit??s, de m??moriser vos pr??f??rences et de vous permettre d'interagir avec nos Services plus rapidement et plus simplement. Les cookies sont ??galement utilis??s pour faire en sorte que les publicit??s que vous voyez correspondent ?? vos int??r??ts et soient personnalis??es en cons??quence, ainsi que pour compiler des donn??es statistiques sur votre utilisation de nos Services.??<br/><br/>

                Le Site utilise les types de cookies suivants??:<br/><br/>

                <b>a. Les ????cookies de session???? </b>qui sont conserv??s uniquement de fa??on temporaire lors de votre session de navigation afin de permettre une utilisation normale du syst??me, et sont supprim??s de votre appareil lorsque vous fermez le navigateur??;??<br/><br/>

                <b>b. Les ????cookies persistants????</b> qui ne sont lus que par le Site, qui sont enregistr??s sur votre ordinateur pour une dur??e d??termin??e et ne sont pas supprim??s lorsque le navigateur est ferm??. Ces cookies sont utilis??s lorsque nous devons vous reconnaitre lors de visites r??p??t??es, par exemple, pour nous permettre de conserver vos pr??f??rences lors de votre prochaine connexion??;??<br/><br/>

                <b>c. Les cookies ????tiers????</b> qui sont mis en place par d'autres services en ligne qui g??rent du contenu sur la page que vous consultez, par exemple, par les soci??t??s d'analyse tierces qui surveillent et analysent notre acc??s web.<br/><br/>

                Les cookies ne contiennent aucune information permettant de vous identifier personnellement, mais nous pouvons associer les Informations personnelles vous concernant que nous stockons aux informations stock??es et obtenues par les cookies. Vous pouvez supprimer les cookies en suivant les instructions dans les pr??f??rences de votre appareil. Sachez toutefois que si vous choisissez de d??sactiver les cookies, certaines fonctionnalit??s de notre Site pourront ne pas fonctionner correctement et votre exp??rience en ligne pourrait ??tre limit??e.<br/><br/>

                Nous utilisons un outil bas?? sur la technologie Snowplow Analytics?? pour recueillir des informations sur votre utilisation du Site. L'outil recueille des informations comme la fr??quence d'acc??s des utilisateurs au Site, les pages qu'ils consultent, ?? quel moment, etc. L'outil ne collecte aucune information personnelle, et il n'est utilis?? par l'h??bergeur et op??rateur de notre Site qu'?? des fins d'am??lioration de son Site et de ses services.<br/><br/>
                <b>Utilisation des biblioth??ques de scripts (Google Fonts)</b><br/>
                Afin de pr??senter nos contenus de fa??on agr??able et avec une bonne qualit?? graphique sur tous les navigateurs, nous utilisons dans ce site web des biblioth??ques de scripts et de polices comme Google Fonts (https://www.google.com/webfonts). Les polices de Google Fonts sont transf??r??es sur le cache de votre navigateur afin d'??viter les chargements multiples. Si votre navigateur ne prend pas en charge les polices Google Fonts ou bloque leur acc??s, les contenus seront affich??s en utilisant la police par d??faut.??<br/>
                Toute requ??te vers une biblioth??que de scripts ou de polices d??clenche automatiquement une connexion avec l'op??rateur de ladite biblioth??que. S'il est en th??orie possible que les op??rateurs des biblioth??ques collectent des donn??es, l'existence de cette pratique et, le cas ??ch??ant, les buts poursuivis n'ont pas encore pu ??tre ??tablis.<br/>
                Si vous souhaitez consulter la politique de confidentialit?? de l'op??rateur de biblioth??que Google, acc??dez ?? l'adresse suivante??: https://www.google.com/policies/privacy.<br/><br/>
                <b>Collecte d'informations par des tiers</b><br/>
                Notre politique concerne uniquement l'utilisation et la divulgation des informations que nous collectons aupr??s de vous. Dans la mesure o?? vous divulguez vos informations ?? d'autres parties ou sites sur Internet, des r??gles diff??rentes peuvent s'appliquer ?? leur utilisation ou ?? leur divulgation. Par cons??quent, nous vous encourageons ?? lire les conditions d'utilisation et la politique de confidentialit?? de chaque partie tierce ?? laquelle vous divulguez volontairement vos informations.??<br/><br/>

                La pr??sente Politique de confidentialit?? ne s'applique pas aux pratiques des soci??t??s dont nous ne sommes pas propri??taires et que nous ne contr??lons pas, ni aux individus que nous n'employons pas ni ne g??rons, notamment toute partie tierce ?? laquelle nous pouvons divulguer vos informations comme indiqu?? par la pr??sente Politique de confidentialit??.??<br/><br/>
                <b>Comment prot??geons-nous vos informations???</b><br/>
                Nous accordons une grande attention ?? la mise en ??uvre et au maintien de la s??curit?? du Site et de vos informations. Bien que nous mettions en ??uvre des mesures raisonnables pour prot??ger les informations, nous ne pouvons pas ??tre tenus responsables des actes de personnes qui obtiennent un acc??s non autoris?? ou abusent de notre Site, et nous n'offrons aucune garantie formelle, implicite ou autre, d'emp??cher un tel acc??s.<br/><br/>
                <b>Transfert des donn??es en dehors de l'EEE??</b><br/>
                Veuillez noter que certains destinataires de donn??es peuvent se trouver en dehors de l'Espace ??conomique europ??en (EEE). Dans de tels cas, nous transf??rerons vos donn??es auxdits pays uniquement tel qu'approuv?? par la Commission europ??enne en fournissant le niveau ad??quat de protection des donn??es, ou nous ??tablirons des accords juridiques garantissant un niveau ad??quat de protection des donn??es.<br/><br/>
                <b>Publicit??s</b><br/>
                ??Nous pouvons utiliser une technologie publicitaire tierce pour diffuser des publicit??s lorsque vous acc??dez au Site. Cette technologie utilise les informations relatives ?? votre utilisation des Services pour diffuser des publicit??s qui vous sont destin??es (par exemple, en pla??ant des cookies tiers sur votre navigateur web).??<br/><br/>

                Vous pouvez vous d??sabonner de nombreux r??seaux publicitaires tiers, y compris ceux exploit??s par les membres de Network Advertising Initiative (\"NAI\") et de Digital Advertising Alliance (\"DAA\"). Pour obtenir plus d'informations aupr??s des membres de NAI et de DAA sur cette pratique et sur vos choix concernant l'utilisation de ces informations par ces soci??t??s, notamment comment se d??sabonner des r??seaux publicitaires tiers exploit??s par les membres de NAI et de DAA, veuillez consulter leurs sites web respectifs??: http://optout.networkadvertising.org/#!/ et http://optout.aboutads.info/#!/.<br/><br/>
                <b>Marketing</b><br/>
                Nous pouvons utiliser vos Informations personnelles, notamment votre nom, votre adresse e-mail, votre num??ro de t??l??phone, etc., nous-m??mes ou par le biais de sous-traitants afin de vous fournir du contenu promotionnel concernant les services qui, selon nous, pourraient vous int??resser.<br/><br/>

                Par respect pour votre droit ?? la vie priv??e, nous incluons dans ce contenu promotionnel les moyens de refuser de recevoir de nouvelles offres promotionnelles de notre part. Si vous vous d??sabonnez, nous supprimerons votre adresse e-mail ou votre num??ro de t??l??phone de nos listes de distribution marketing.??<br/><br/>

                Veuillez noter que m??me si vous vous d??sabonnez afin de ne plus recevoir d'e-mails marketing de notre part, nous pouvons vous envoyer d'autres types de communications importantes par e-mail sans vous donner la possibilit?? de vous d??sabonner. Celles-ci peuvent inclure des messages du service client ou des notifications administratives.<br/><br/>
                <b>Transaction d'entreprise</b><br/>
                Nous pouvons partager des informations dans le cas d'une transaction commerciale (par ex.??: la vente d'une partie importante de notre entreprise, la fusion, la consolidation ou la vente d'actifs). Dans les cas mentionn??s pr??c??demment, le b??n??ficiaire ou la soci??t?? acqu??rante assumera les droits et obligations tels que d??crits dans la pr??sente Politique de confidentialit??<br/><br/>
                <b>Mineurs</b><br/>
                Nous comprenons l'importance de la protection des renseignements personnels des enfants, en particulier dans un environnement en ligne. Le Site n'a pas ??t?? con??u pour ??tre utilis?? par des enfants. En aucun cas nous n'autorisons l'utilisation de nos services par des mineurs sans le consentement ou l'autorisation pr??alable d'un parent ou d'un tuteur l??gal. Nous ne collectons pas sciemment d'Informations personnelles aupr??s de mineurs. Si un parent s'aper??oit que son enfant nous a fourni des Informations personnelles sans son consentement (ou si un tuteur se rend compte que l'enfant dont il a la responsabilit?? nous a fourni des informations personnelles sans son consentement), il ou elle doit nous contacter ?? l'adresse??: <a href=\"mailto:bonjour@benoit-fabioux.fr\">bonjour@benoit-fabioux.fr</a><br/><br/>
                <b>Mises ?? jour ou modifications de la pr??sente Politique de confidentialit??</b><br/>
                Nous nous r??servons le droit de modifier ou de r??viser p??riodiquement la politique de confidentialit????; les changements mat??riels entreront en vigueur d??s l'affichage de la politique de confidentialit?? r??vis??e. La derni??re r??vision sera disponible dans la section \"Derni??re modification\". Votre utilisation continue de la Plateforme, suite ?? la notification de ces modifications sur notre site web, constitue votre reconnaissance et votre acceptation desdites modifications et votre consentement ?? les respecter.<br/><br/>
                <b>Nous contacter</b><br/>
                Si vous avez des questions g??n??rales concernant le Site ou notre collecte et notre utilisation des informations vous concernant, veuillez nous contacter ?? l'adresse??: <a href=???mailto:benoit.fabioux0144@orange.fr???>bonjour@benoit-fabioux.fr</a>.<br/><br/>

                Benoit Fabioux <br/>

                <a href=???mailto:benoit.fabioux0144@orange.fr???>bonjour@benoit-fabioux.fr</a><br/><br/><br/>


                Derni??re modification 01/01/2022
            </p>
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
", "vitrine_website/politique.html.twig", "/Users/paul/Documents/Entreprenariat/project/2. Artiste Benoit/3. source_file/symfonyWebSite_Benoit_Fabioux/templates/vitrine_website/politique.html.twig");
    }
}
