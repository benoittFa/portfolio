<?php

namespace App\Controller;

use App\Entity\Artwork;
use App\Repository\AdministratorRepository;
use App\Repository\ArtworkRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RealisationBackofficeController extends AbstractController
{

      /**
      * @Route("/admin/dashboard", name="dashboard" )
    */
    public function dashboard(ArtworkRepository $artworkRepository): Response 
    {
        $artworks = $artworkRepository->findAll();
        return $this->render('backoffice/dashboard_backoffice/index.html.twig', [
            'artworks' => $artworks,
        ]);
    }

    /**
      * @Route("/admin/oeuvre/create", name="add_oeuvre" )
    */
    public function add_artwork(FormFactoryInterface $factory, Request $request, EntityManagerInterface $em, AdministratorRepository $administratorRepository): Response
    {
        $builder = $factory->createBuilder();
        
        $builder->add('title', TextType::class, [
                'label' => false,
                'required' => true,
                'attr' => ['placeholder' => 'Ma superbe oeuvre']
                
        ])
        ->add('format', NumberType::class, [
            'label' => false,
            'required' => true,
            'attr' => ['placeholder' => '88']
        ])
        ->add('format2', NumberType::class, [
            'label' => false,
            'required' => true,
            'attr' => ['placeholder' => '120']
        ])
        ->add('oil', CheckboxType::class, [
            'label' => false,
            'required' => false,
            'attr' => ['checked' => true, 'value'=>'Huile']
        ])
        ->add('acrylique', CheckboxType::class, [
            'label' => false,
            'required' => false,
            'attr' => ['value'=>'Acrylique']

        ])
        ->add('picture', FileType::class, [
            'label' => false,
            'required' => true,
            'attr' => ['accept' => 'image/png, image/jpeg,  image/jpg']
        ])
        ->add('portrait', CheckboxType::class, [
            'label' => false,
            'required' => false,
            'attr' => ['checked' => true, 'value'=>true]
        ])
        ->add('paysage', CheckboxType::class, [
            'label' => false,
            'required' => false,
            'attr' => ['value'=>false]

        ])
        ->add('admin', HiddenType::class, [
            'label' => false,
            'required' => true,

        ]);

        $form = $builder->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $artworkUp = new Artwork;

            $file = $form['picture']->getData();; 
           
            $fileName = '/image/oeuvre/'.md5(uniqid()).'.'.$file->guessExtension(); 
            $file->move($this->getParameter('photos_directory_artwork'), $fileName); 

            if($data['oil'] == true){
                $category = 'Huile';
            }else if($data['acrylique'] == true){
                $category = 'Acrylique';
            }

            if(isset($data['portrait'])){
                $mode = $data['portrait'];
            }else if(isset($data['paysage'])){
                $mode = $data['paysage'];
            }

            $artworkUp->setTitle($data['title'])
                        ->setCategorie($category)
                        ->setFormat($data['format'])
                        ->setFormat2($data['format2'])
                        ->setType($mode)
                        ->setAdmin($administratorRepository->find($data['admin']))
                        ->setPicture($fileName)
                        ->setCreationDate(new \DateTime());
            $em->persist($artworkUp);
            $em->flush();
            return $this->redirectToRoute('add_oeuvre');

        }

        $formView = $form->createView();

        return $this->render('backoffice/realisation_backoffice/create.html.twig', [
            'formView' => $formView
        ]);
    }
 
     /**
      * @Route("/admin/oeuvre/update/{id}", name="update_oeuvre" )
    */
    public function update_artwork(FormFactoryInterface $factory, $id, Request $request, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $artwork = $entityManager->getRepository(Artwork::class)->find(['id' => $id]);


        $builder = $factory->createBuilder();
        
        $builder->add('title', TextType::class, [
                'label' => false,
                'required' => true,
                'attr' => ['value' => $artwork->getTitle()]
                
        ])
        ->add('format', NumberType::class, [
            'label' => false,
            'required' => true,
            'attr' => ['value' => $artwork->getFormat()]
        ])
        ->add('format2', NumberType::class, [
            'label' => false,
            'required' => true,
            'attr' => ['value' => $artwork->getFormat2()]
        ])
        ->add('oil', CheckboxType::class, [
            'label' => false,
            'required' => false,
            'attr' => ['value'=>'Huile']
        ])
        ->add('acrylique', CheckboxType::class, [
            'label' => false,
            'required' => false,
            'attr' => ['value'=>'Acrylique']

        ])
        ->add('picture', FileType::class, [
            'label' => false,
            'required' => false,
            'attr' => ['accept' => 'image/png, image/jpeg,  image/jpg']
        ])
        ->add('portrait', CheckboxType::class, [
            'label' => false,
            'required' => false,
            'attr' => [ 'value'=>true]
        ])
        ->add('paysage', CheckboxType::class, [
            'label' => false,
            'required' => false,
            'attr' => ['value'=>false]

        ]);

        $form = $builder->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()){
            $data = $form->getData();
                

            $file = $form['picture']->getData();; 
            
            if(isset($file)){

                $fileName = '/image/oeuvre/'.md5(uniqid()).'.'.$file->guessExtension(); 
                $file->move($this->getParameter('photos_directory_artwork'), $fileName); 
                $artwork->setPicture($fileName);

            }

            if($data['oil'] == true){
                $category = 'Huile';
            }else if($data['acrylique'] == true){
                $category = 'Acrylique';
            }

            if(isset($data['portrait'])){
                $mode = $data['portrait'];
            }else if(isset($data['paysage'])){
                $mode = $data['paysage'];
            }

            $artwork->setTitle($data['title'])
                    ->setCategorie($category)
                    ->setFormat($data['format'])
                    ->setFormat2($data['format2'])
                    ->setType($mode)
                    ->setCreationDate(new \DateTime());
                       

            $entityManager->flush();

            return $this->redirectToRoute('dashboard');

        }
       

        $formView = $form->createView();

        return $this->render('backoffice/realisation_backoffice/update.html.twig', [
            'formView' => $formView,
            'artwork'=>$artwork,        
            'category'=>$artwork->getCategorie(),
            'type'=>$artwork->getType(),
            'picture'=>$artwork->getPicture()

        ]);
    }

    /**
      * @Route("/admin/oeuvre/manage", name="manage_oeuvre" )
    */
    public function manage_artwork(ArtworkRepository $artworkRepository): Response
    {
        $artworks = $artworkRepository->findAll();

        return $this->render('backoffice/realisation_backoffice/manage.html.twig', [
            'artworks' => $artworks,
        ]);
    }

    /**
      * @Route("/admin/oeuvre/delete/{id}", name="delete_id_artwork" )
    */
    public function delete_id_administrateur(ArtworkRepository $artworkRepository, $id, EntityManagerInterface $em): Response
    {
        $artwork = $artworkRepository->find($id);
     
        $em->remove($artwork);
        $em->flush();
     
        return $this->redirectToRoute('manage_oeuvre');
    }
}
