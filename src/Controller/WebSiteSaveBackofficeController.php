<?php

namespace App\Controller;

use App\Entity\WebsiteSave;
use App\Repository\WebsiteSaveRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebSiteSaveBackofficeController extends AbstractController
{
    /**
      * @Route("/admin/web-site", name="backoffice_websiteSave" )
    */
    public function index(FormFactoryInterface $factory, Request $request, WebsiteSaveRepository $websiteSaveRepository, ManagerRegistry $doctrine): Response
    {
        $builder = $factory->createBuilder();

        $builder->add('title', TextType::class, [
                'label' => false,
                'required' => true,
                'attr' => ['placeholder' => 'Benoit Fabioux']
                
        ])
        ->add('textBreakingNews', TextareaType::class, [
            'label' => false,
            'required' => true,
        ])
        ->add('pictureTableau', FileType::class, [
            'label' => false,
            'required' => false,
            'attr' => ['accept' => 'image/png, image/jpeg,  image/jpg']
        ])
        ->add('textBio', TextareaType::class, [
            'label' => false,
            'required' => true,
        ])
        ->add('pictureBio', FileType::class, [
            'label' => false,
            'required' => false,
            'attr' => ['accept' => 'image/png, image/jpeg,  image/jpg']
        ])
        ->add('email', TextType::class, [
            'label' => false,
            'required' => true,
            'attr' => ['placeholder' => 'bonjour@benoit-fabioux.fr']
            
        ]);


  

        $form = $builder->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $entityManager = $doctrine->getManager();
            
            $entityManager->getRepository(WebsiteSave::class)->find(1)->setContent($data['title']);
            $entityManager->flush();
            $entityManager->getRepository(WebsiteSave::class)->find(2)->setContent($data['textBreakingNews']);
            $entityManager->flush();
            $entityManager->getRepository(WebsiteSave::class)->find(5)->setContent($data['textBio']);
            $entityManager->flush();
            $entityManager->getRepository(WebsiteSave::class)->find(6)->setContent($data['email']);
            $entityManager->flush();
            
            
            $pictureTableau = $form['pictureTableau']->getData();
            $pictureBio = $form['pictureBio']->getData();
           
  
            if(isset($pictureBioName)){
                $pictureBioName = '/image/webSite/'.md5(uniqid()).'.'.$pictureBio->guessExtension(); 

                $entityManager->getRepository(WebsiteSave::class)->find(4)->setContent($pictureBioName);
                $pictureBio->move($this->getParameter('photos_directory_webSite'), $pictureBioName); 

            }
            if(isset($pictureTableauName)){
                $pictureTableauName = '/image/webSite/'.md5(uniqid()).'.'.$pictureTableau->guessExtension(); 
                
                $entityManager->getRepository(WebsiteSave::class)->find(3)->setContent($pictureTableauName);
                $pictureTableau->move($this->getParameter('photos_directory_webSite'), $pictureTableauName); 

            }


     
            // $entityManager->flush();
        }


        $formView = $form->createView();

        return $this->render('backoffice/web_site_save_backoffice/index.html.twig', [
            'formView' => $formView,

            'titleSave' => $websiteSaveRepository->find(1),
            'textFirstSave' => $websiteSaveRepository->find(2),
            'imageFirstSave' => $websiteSaveRepository->find(3),
            'textBiographie' => $websiteSaveRepository->find(5),
            'imageBiographie' => $websiteSaveRepository->find(4),
            'mailSave' => $websiteSaveRepository->find(6),
        ]);
    }

   
}
