<?php

namespace App\Controller;

use App\Entity\Administrator;
use App\Repository\AdministratorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdministrateurBackofficeController extends AbstractController
{
    /**
      * @Route("/login/", name="signup_administrateur" )
    */
    public function signup_administrateur(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
         $error = $authenticationUtils->getLastAuthenticationError();

         // last username entered by the user
         $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('backoffice/administrateur_backoffice/signup.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'galeryMenu' => '',
            'aboutMenu' => '',
            'expositionMenu' => '',
        ]);
    }
    /**
     * @Route("/logout", name="app_logout")
    */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    
    /**
      * @Route("/admin/administrateur/create", name="add_administrateur" )
    */
    public function add_administrateur(FormFactoryInterface $factory, Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher): Response
    {
        $builder = $factory->createBuilder();
        
        $builder->add('name', TextType::class, [
                'label' => false,
                'required' => true,
                'attr' => ['placeholder' => 'Dupont']
                
        ])
        ->add('firstname', TextType::class, [
            'label' => false,
            'required' => true,
            'attr' => ['placeholder' => 'Jean']
        ])
        ->add('mail', EmailType::class, [
            'label' => false,
            'required' => true,
            'attr' => ['placeholder' => 'jean.dupont@gmail.com']
        ])
        ->add('phonenumber', NumberType::class, [
            'label' => false,
            'required' => true,
            'attr' => ['placeholder' => '0783112426']
        ])
        ->add('picture', FileType::class, [
            'label' => false,
            'required' => false,
            'mapped' => false,
            'attr' => ['accept' => 'image/png, image/jpeg,  image/jpg']
        ])
        ->add('jobName', TextType::class, [
            'label' => false,
            'required' => false,
            'attr' => ['placeholder' => 'Directeur général']
        ])
        ->add('password', PasswordType::class, [
            'label' => false,
            'required' => true,
            'attr' => ['placeholder' => '••••••••', 'onkeyup' => 'validatePassword()'],
      
        ])
        ->add('verifPWD', PasswordType::class, [
            'label' => false,
            'required' => true,
            'attr' => ['placeholder' => '••••••••', 'onkeyup' => 'comparePassword()']
        ]);

        $form = $builder->getForm();

        $form->handleRequest($request);

    
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
            
            $admin = $form->getData();

            if($admin['password'] == $admin['verifPWD']){
                $administrateur = new Administrator;

                //Picture
                $file = $form['picture']->getData();; 
           
                if(isset($file)){
                    $fileName = '/image/administrateur/'.md5(uniqid()).'.'.$file->guessExtension(); 
                    $file->move($this->getParameter('photos_directory_admin'), $fileName); 

                    $administrateur->setPicture($fileName);
                }else{
                    $administrateur->setPicture('/image/administrateur/default-user.png');
                }              

                //Password 
                $hashedPassword = $passwordHasher->hashPassword(
                    $administrateur,
                    $admin['password']
                );
                $roles[] = 'ROLE_SUPER_ADMIN';
                $administrateur->setName($admin['name'])
                    ->setFirstname($admin['firstname'])
                    ->setJob($admin['jobName'])
                    ->setEmail($admin['mail'])
                    ->setPhone($admin['phonenumber'])
                    ->setPassword($hashedPassword)
                    ->setRoles($roles)
                    ->setVisible(true)
                    ->setCreation(new \DateTime())
                    ->setLastConnection(new \DateTime());
                $em->persist($administrateur);
                $em->flush();

                return $this->redirectToRoute('dashboard');
                
            }
          
        }
        $formView = $form->createView();



        return $this->render('backoffice/administrateur_backoffice/create.html.twig', [
            'formView' => $formView
        ]);
    }

    /**
      * @Route("/admin/administrateur/delete", name="delete_administrateur" )
    */
    public function delete_administrateur(AdministratorRepository $administratorRepository): Response
    {
        $administrators = $administratorRepository->findAll();

        return $this->render('backoffice/administrateur_backoffice/delete.html.twig', [
            'administrators' => $administrators
        ]);
    }

    /**
      * @Route("/admin/administrateur/delete/{id}", name="delete_id_administrateur" )
    */
    public function delete_id_administrateur(AdministratorRepository $administratorRepository, $id, EntityManagerInterface $em): Response
    {
        $admin = $administratorRepository->find($id);
     
        $em->remove($admin);
        $em->flush();
     
        return $this->redirectToRoute('delete_administrateur');
    }
}
