<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ArtworkRepository;
use App\Repository\ExpositionRepository;
use App\Repository\WebsiteSaveRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VitrineWebsiteController extends AbstractController
{
    /** 
      * @Route("/", name="about" )
    */
    public function index(FormFactoryInterface $factory, Request $request, WebsiteSaveRepository $websiteSaveRepository, EntityManagerInterface $em): Response
    {
        $builder = $factory->createBuilder();
        $error = '';
        $builder->add('name', TextType::class, [
                'label' => false,
                'required' => true,  
        ])
        ->add('firstname', TextType::class, [
          'label' => false,
          'required' => true,       
        ])
        ->add('mail', EmailType::class, [
          'label' => false,
          'required' => true,       
        ])
        ->add('phone', NumberType::class, [
          'label' => false,
          'required' => true,  
        ])
        ->add('capcha', NumberType::class, [
          'label' => false,
          'required' => true,  
        ])
        ->add('message', TextareaType::class, [
            'label' => false,
            'required' => true,
        ])
      ;

        $form = $builder->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


          $data = $form->getData();
          $contact = new Contact;
        
          if($data['capcha'] == 10){
            $contact->setName($data['name'])
            ->setFirstname($data['firstname'])
            ->setMail($data['mail'])
            ->setPhone($data['phone'])
            ->setMessage($data['message'])
            ->setDate(new \DateTime());
        
            $em->persist($contact);
            $em->flush();
            
            $form = $builder->getForm();
            return $this->redirect("/#contact");
          }else{
            $error = 'Le chiffre clé est 10 !';
          }

         

        }
        $formView = $form->createView();

        return $this->render('vitrine_website/index.html.twig', [
            'galeryMenu' => '',
            'aboutMenu' => 'active',
            'expositionMenu' => '',

            'formView' => $formView,
            'error' => $error,
            'titleSave' => $websiteSaveRepository->find(1)->getContent(),
            'textFirstSave' => $websiteSaveRepository->find(2)->getContent(),
            'imageFirstSave' => $websiteSaveRepository->find(3)->getContent(),
            'textBiographie' => $websiteSaveRepository->find(5)->getContent(),
            'imageBiographie' => $websiteSaveRepository->find(4)->getContent(),
            'mailSave' => $websiteSaveRepository->find(6)->getContent(),
        ]);
    }

    /** 
      * @Route("/galerie", name="galerie" )
    */
    public function galerie(ArtworkRepository $artworkRepository): Response
    {
        $artworks = $artworkRepository->findAll();

        return $this->render('vitrine_website/galerie.html.twig', [
            'galeryMenu' => 'active',
            'aboutMenu' => '',
            'expositionMenu' => '',
            'artworks'=>$artworks
        ]);
    }

    /** 
      * @Route("/expositions", name="expositions" )
    */
    public function expositions(ExpositionRepository $expositionRepository): Response
    {
        $expositions = $expositionRepository->findAll();

        return $this->render('vitrine_website/expositions.html.twig', [
            'galeryMenu' => '',
            'aboutMenu' => '',
            'expositionMenu' => 'active',
            'expositions'=> $expositions
        ]);
    }

    /** 
      * @Route("/galerie-oeuvre/{id}", name="galerie_oeuvre" )
    */
    public function galerie_oeuvre($id, ArtworkRepository $artworkRepository): Response
    {
        $artworks = $artworkRepository->findAll();

        return $this->render('vitrine_website/galerie_oeuvre.html.twig', [
            'artworks'=>$artworks,
            'idArt' => $id
            
        ]);
    }

    /** 
      * @Route("/mentions-legales", name="mentions_legales" )
    */
    public function mention(): Response
    {
       

        return $this->render('vitrine_website/mention.html.twig', [
          'galeryMenu' => '',
          'aboutMenu' => '',
          'expositionMenu' => '',
            
        ]);
    }

     /** 
      * @Route("/politiques-confidentialites", name="politiques_confidentialites" )
    */
    public function politique(): Response
    {
       

        return $this->render('vitrine_website/politique.html.twig', [
          'galeryMenu' => '',
          'aboutMenu' => '',
          'expositionMenu' => '',
            
        ]);
    }
    
    /** 
      * @Route("/perdu-sur-mon-site", name="page_404" )
    */
    public function lost_page(WebsiteSaveRepository $websiteSaveRepository): Response
    {
        

        return $this->render('vitrine_website/index.html.twig', [
            'galeryMenu' => '',
            'aboutMenu' => '',
            'expositionMenu' => '',


            'titleSave' => $websiteSaveRepository->find(1)->getContent(),
            'textFirstSave' => $websiteSaveRepository->find(2)->getContent(),
            'imageFirstSave' => $websiteSaveRepository->find(3)->getContent(),
            'textBiographie' => $websiteSaveRepository->find(5)->getContent(),
            'imageBiographie' => $websiteSaveRepository->find(4)->getContent(),
            'mailSave' => $websiteSaveRepository->find(6)->getContent(),
        ]);
    }
}
