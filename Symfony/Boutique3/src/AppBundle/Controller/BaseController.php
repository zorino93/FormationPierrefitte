<?php

// src/Controller/BaseController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Form\ContactType;


class BaseController extends Controller
{

    // Contact
    // Mention legal
    // Qui sommes nous
    // Condition générale de vente
    // Recrutement

    /**
     * 
     * @Route("/contact/", name="contact")
     */
    public function contactAction(Request $request){

        // 1: récupérer le formulaire de contact :
        $form = $this -> createForm(ContactType::class);

        // 2: Traiter les infos du formulaire :
        $form -> handleRequest($request);

        if($form -> isSubmitted() && $form -> isValid()){

            $data = $form -> getData();
            echo '<pre>';
            var_dump($data);
            echo'</pre>';

            $destinataire = 'contact@monsite.com';
            $objet = $data['objet'];
            $message = $data['message'];
            $headers = '';

            //mail($destinataire, $objet, $message, $headers);

            $request -> getSession() -> getFlashBag() -> add('success', 'Votre email a été envoyé avec succès');
        }

        // 3: Retourner la vue :
        return $this -> render('@App/Base/contact.html.twig', ['contactForm' => $form -> createView()]);
    }
}