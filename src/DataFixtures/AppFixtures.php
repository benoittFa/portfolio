<?php

namespace App\DataFixtures;

use App\Entity\Administrator;
use App\Entity\Artwork;
use App\Entity\Contact;
use App\Entity\Exposition;
use App\Entity\WebsiteSave;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    public function __construct(UserPasswordHasherInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager): void
    {
        $administrator = new Administrator();


        $hash = $this->passwordEncoder->hashPassword(
                $administrator,
                'Password$'
            );


        $administrator->setRoles(['ROLE_SUPER_ADMIN'])
            ->setEmail('paulfauconnier@icloud.com')
            ->setPassword($hash)
            ->setName('Fauconnier')
            ->setFirstname('paul')
            ->setPhone('0783112426')
            ->setJob('Airbus')
            ->setPicture('/image/administrateur/default-user.png')
            ->setVisible(false)
            ->setCreation(new \DateTime())
            ->setLastConnection(new \DateTime());
        $manager->persist($administrator);

        $contact = new Contact();
        $contact->setName('Dupont')
            ->setFirstname('Jean')
            ->setMail('jeandupont@orange.com')
            ->setPhone('0234932901')
            ->setMessage('Bonjour, je suis ton premier contact !')
            ->setDate(new \DateTime());
        $manager->persist($contact);

        $artwork = new Artwork();
        $artwork->setTitle('Brouillard')
            ->setFormat(20)
            ->setFormat2(120)
            ->setPicture('/image/oeuvre/huile/brouillard.jpg')
            ->setCategorie('Huile')
            ->setCreationDate(new \DateTime())
            ->setCreationDate(new \DateTime())
            ->setType(false)
            ->setAdmin($administrator);
        $manager->persist($artwork);
        
        $artwork = new Artwork();
        
        $artwork->setTitle('Enzo')
            ->setFormat(200)
            ->setFormat2(120)
            ->setPicture('/image/oeuvre/huile/enzo.jpg')
            ->setCategorie('Huile')
            ->setCreationDate(new \DateTime())
            ->setCreationDate(new \DateTime())
            ->setType(true)
            ->setAdmin($administrator);
        $manager->persist($artwork);

        $artwork = new Artwork();
        $artwork->setTitle('Martin')
            ->setFormat(80)
            ->setFormat2(19)
            ->setPicture('/image/oeuvre/huile/martin.jpg')
            ->setCategorie('Huile')
            ->setCreationDate(new \DateTime())
            ->setCreationDate(new \DateTime())
            ->setType(true)
            ->setAdmin($administrator);
        $manager->persist($artwork);

        $artwork = new Artwork();
        $artwork->setTitle('Jeanne')
            ->setFormat(80)
            ->setFormat2(19)
            ->setPicture('/image/oeuvre/acrylique/P1050754.jpg')
            ->setCategorie('Acrylique')
            ->setCreationDate(new \DateTime())
            ->setCreationDate(new \DateTime())
            ->setType(true)
            ->setAdmin($administrator);
        $manager->persist($artwork);
        $artwork = new Artwork();
        $artwork->setTitle('Mia')
            ->setFormat(80)
            ->setFormat2(19)
            ->setPicture('/image/oeuvre/acrylique/P1050712.jpg')
            ->setCategorie('Acrylique')
            ->setCreationDate(new \DateTime())
            ->setCreationDate(new \DateTime())
            ->setType(true)
            ->setAdmin($administrator);
        $manager->persist($artwork);


        $website = new WebsiteSave();
        $website->setName('1-title')
            ->setContent('Benoit Fabioux');
        $manager->persist($website);
       
        $website = new WebsiteSave();
        $website->setName('2-text')
            ->setContent('Prochaine exposition le 5 mai 2022 à la MJC de La Châtre');
        $manager->persist($website);

        $website = new WebsiteSave();
        $website->setName('3-firstImage')
            ->setContent('/image/website/first.jpg');
        $manager->persist($website);

        $website = new WebsiteSave();
        $website->setName('4-person')
            ->setContent('/image/website/benoitFabioux.jpg');
        $manager->persist($website);

        $website = new WebsiteSave();
        $website->setName('5-biography')
            ->setContent('Né à la Châtre en 1975, Benoît Fabioux est venu à la peinture vers trente ans, sans autre formation que la copie des grands maîtres, notamment Le Caravage, Goya et Turner, et sans autre conseil que ceux de son inspiration. En revanche, il avait déjà acquis une solide culture esthétique par la lecture d’innombrables ouvrages et livres d’art.Professeur des Ecoles, il a dans l’apprentissage du dessin et de la peinture aux enfants pris goût pour ces modes d’expression et, par un travail assidu et rigoureux, acquis une maîtrise exceptionnelle des techniques picturales. Se détachant progressivement de ses modèles, il a créé son univers, à la fois classique et environné d’une atmosphère qui lui est propre.S’il peint quelques paysages, c’est surtout par ses portraits qu’il retient l’attention, des visages le plus souvent emprunts d’une tristesse ou d’une douleur intérieure maîtrisée et qui sont présentés sans artifice ni mise en scène. Ses personnages, principalement des femmes et des enfants, font tous partie de son entourage amical ou professionnel. Sa technique se rapproche de celle des glacis, avec une accumulation de couches successives, affinant le dessin et entrant davantage dans le détail à chacune d’entre elles. Le contraste omniprésent s’inscrit dans sa quête du réalisme et apporte une certaine émotion. S’il privilégie la peinture à l’huile, il fait aussi des incursions dans l’acrylique mais garde comme jardin secret le dessin dans lequel il excelle. A noter qu’il aime peu la couleur et que ses œuvres sont toujours réalisées avec des gammes chromatiques restreintes, notamment ses très beaux drapés faits de blanc, de bleu de cobalt et de terre d’ombre naturelle. Solitaire mais chaleureux, rêveur par nature mais pragmatique par raison, il vit dans sa maison qui pour être en pleine campagne n’en n’est pas moins accueillante. Son atelier est à son image, rempli de tableaux dans des états d’avancement différents et à l’achèvement desquels il s’attelle comme il veut, quand il veut, sa liberté étant son plus précieux trésor. D’une infinie modestie, c’est par le regard des autres que Benoît Fabioux a pris conscience de la qualité et de l’intérêt de son travail, sans accepter encore que l’on parle de son talent.');
        $manager->persist($website);

        $website = new WebsiteSave();
        $website->setName('6-mail')
            ->setContent('bonjour@benoit-fabioux.fr');
        $manager->persist($website);

       $exposition = new Exposition;
       $exposition->setTitle('2016')
                ->setText('Saint-Denis de Jouhet, Aigurande et Salon des Arts de Chéniers')
                ->setPicture('/image/oeuvre/acrylique/P1050712.jpg')
                ->setCreationDate(new \DateTime());
        $manager->persist($exposition);

        $exposition = new Exposition;
        $exposition->setTitle('2017')
                    ->setText('Aigurande, Saint-Denis de Jouhet, Galerie l’Art et la Main à Fresseline, Salon des artistes du Boischaut Sud à Badecon-le-Pin (lauréat du Prix du Conseil départemental), Abbaye de Varennes à Fougerolles, Salon des arts de Chéniers')
                    ->setPicture('/image/oeuvre/acrylique/P1050712.jpg')
                    ->setCreationDate(new \DateTime());
        $manager->persist($exposition);

        $manager->flush();
    }
}
