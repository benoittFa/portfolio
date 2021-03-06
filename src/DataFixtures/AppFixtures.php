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
            ->setContent('Prochaine exposition le 5 mai 2022 ?? la MJC de La Ch??tre');
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
            ->setContent('N?? ?? la Ch??tre en 1975, Beno??t Fabioux est venu ?? la peinture vers trente ans, sans autre formation que la copie des grands ma??tres, notamment Le Caravage, Goya et Turner, et sans autre conseil que ceux de son inspiration. En revanche, il avait d??j?? acquis une solide culture esth??tique par la lecture d???innombrables ouvrages et livres d???art.Professeur des Ecoles, il a dans l???apprentissage du dessin et de la peinture aux enfants pris go??t pour ces modes d???expression et, par un travail assidu et rigoureux, acquis une ma??trise exceptionnelle des techniques picturales. Se d??tachant progressivement de ses mod??les, il a cr???? son univers, ?? la fois classique et environn?? d???une atmosph??re qui lui est propre.S???il peint quelques paysages, c???est surtout par ses portraits qu???il retient l???attention, des visages le plus souvent emprunts d???une tristesse ou d???une douleur int??rieure ma??tris??e et qui sont pr??sent??s sans artifice ni mise en sc??ne. Ses personnages, principalement des femmes et des enfants, font tous partie de son entourage amical ou professionnel. Sa technique se rapproche de celle des glacis, avec une accumulation de couches successives, affinant le dessin et entrant davantage dans le d??tail ?? chacune d???entre elles. Le contraste omnipr??sent s???inscrit dans sa qu??te du r??alisme et apporte une certaine ??motion. S???il privil??gie la peinture ?? l???huile, il fait aussi des incursions dans l???acrylique mais garde comme jardin secret le dessin dans lequel il excelle. A noter qu???il aime peu la couleur et que ses ??uvres sont toujours r??alis??es avec des gammes chromatiques restreintes, notamment ses tr??s beaux drap??s faits de blanc, de bleu de cobalt et de terre d???ombre naturelle. Solitaire mais chaleureux, r??veur par nature mais pragmatique par raison, il vit dans sa maison qui pour ??tre en pleine campagne n???en n???est pas moins accueillante. Son atelier est ?? son image, rempli de tableaux dans des ??tats d???avancement diff??rents et ?? l???ach??vement desquels il s???attelle comme il veut, quand il veut, sa libert?? ??tant son plus pr??cieux tr??sor. D???une infinie modestie, c???est par le regard des autres que Beno??t Fabioux a pris conscience de la qualit?? et de l???int??r??t de son travail, sans accepter encore que l???on parle de son talent.');
        $manager->persist($website);

        $website = new WebsiteSave();
        $website->setName('6-mail')
            ->setContent('bonjour@benoit-fabioux.fr');
        $manager->persist($website);

       $exposition = new Exposition;
       $exposition->setTitle('2016')
                ->setText('Saint-Denis de Jouhet, Aigurande et Salon des Arts de Ch??niers')
                ->setPicture('/image/oeuvre/acrylique/P1050712.jpg')
                ->setCreationDate(new \DateTime());
        $manager->persist($exposition);

        $exposition = new Exposition;
        $exposition->setTitle('2017')
                    ->setText('Aigurande, Saint-Denis de Jouhet, Galerie l???Art et la Main ?? Fresseline, Salon des artistes du Boischaut Sud ?? Badecon-le-Pin (laur??at du Prix du Conseil d??partemental), Abbaye de Varennes ?? Fougerolles, Salon des arts de Ch??niers')
                    ->setPicture('/image/oeuvre/acrylique/P1050712.jpg')
                    ->setCreationDate(new \DateTime());
        $manager->persist($exposition);

        $manager->flush();
    }
}
