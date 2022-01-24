<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactBackofficeController extends AbstractController
{
    /**
      * @Route("/admin/contact", name="backoffice_contact" )
    */
    public function index(ContactRepository $contactRepository): Response
    {
        $contacts = $contactRepository->findAll();

        return $this->render('backoffice/contact_backoffice/index.html.twig', [
            'contacts' => $contacts
        ]);
    }

   /**
      * @Route("/admin/contact/delete/{id}", name="delete_id_contact" )
    */
    public function delete_id_administrateur(ContactRepository $contactRepository, $id, EntityManagerInterface $em): Response
    {
        $contact = $contactRepository->find($id);
     
        $em->remove($contact);
        $em->flush();
     
        return $this->redirectToRoute('backoffice_contact');
    }
}
