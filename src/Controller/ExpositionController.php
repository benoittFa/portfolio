<?php

namespace App\Controller;

use App\Entity\Exposition;
use App\Repository\ExpositionRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExpositionController extends AbstractController
{
   /**
      * @Route("/admin/expoxition/create", name="add_exposition" )
    */
    public function create_exposition(FormFactoryInterface $factory, Request $request,  EntityManagerInterface $em): Response
    {

        $builder = $factory->createBuilder();
        
        $builder->add('title', TextType::class, [
                'label' => false,
                'required' => true,
                'attr' => ['placeholder' => 'Ma superbe oeuvre']
                
        ])
        ->add('picture', FileType::class, [
            'label' => false,
            'required' => true,
            'attr' => ['accept' => 'image/png, image/jpeg,  image/jpg']
        ])
        ->add('texte', TextareaType::class, [
            'label' => false,
            'required' => true,
            'attr' => ['placeholder' => 'Texte de l\'exposition']
            
        ]);

        $form = $builder->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $exposition = new Exposition;

            $file = $form['picture']->getData();; 
           
            $fileName = '/image/exposition/'.md5(uniqid()).'.'.$file->guessExtension(); 
            $file->move($this->getParameter('photos_directory_exposition'), $fileName); 

            $exposition->setTitle($data['title'])
                    ->setText($data['texte'])
                    ->setPicture($fileName)
                    ->setCreationDate(new \DateTime());
                
            $em->persist($exposition);
            $em->flush();

            return $this->redirectToRoute('dashboard');

        }
        $formView = $form->createView();

        return $this->render('backoffice/exposition/create.html.twig', [
            'formView' => $formView
        ]);

    }

    /**
      * @Route("/admin/exposition/manage", name="manage_exposition" )
    */
    public function delete_id_administrateur(ExpositionRepository $expositionRepository): Response
    {
        $exposition = $expositionRepository->findAll();

        return $this->render('backoffice/exposition/manage.html.twig', [
            'expositions' => $exposition

        ]);;
    }

    /**
      * @Route("/admin/exposition/delete/{id}", name="delete_id_exposition" )
    */
    public function delete_id_exposition(ExpositionRepository $expositionRepository, $id, EntityManagerInterface $em): Response
    {
        $exposition = $expositionRepository->find($id);
        
     
        $em->remove($exposition);
        $em->flush();
     
        return $this->redirectToRoute('manage_exposition');
    }
}
