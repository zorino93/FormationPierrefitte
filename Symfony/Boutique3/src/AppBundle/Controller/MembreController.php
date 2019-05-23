<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use AppBundle\Entity\Membre;
use AppBundle\Form\MembreType;


class MembreController extends Controller
{
    // inscription, connexion, profil, deconnexion, modifier, supprimer

    /**
     * @Route("/inscription/", name="inscription")
     */
    public function inscriptionAction( Request $request, UserPasswordEncoderInterface $encoder){
        
        $membre = new Membre;

        $form = $this -> createForm(MembreType::class, $membre);

        $form -> handleRequest($request);

        if($form -> isSubmitted() && $form -> isValid()){

            $em = $this -> getDoctrine() -> getManager();

            $em -> persist($membre);

            // Crypter le mot de passe
            $mdp = $membre-> getPassword();
            $mdp_crypter = $encoder -> encodePassword($membre, $mdp);
            $membre-> setPassword($mdp_crypter);

            $membre -> setRoles(['ROLE_USER']);
            
            $em -> flush();

            return $this -> redirectToRoute('connexion');
        }
        $params = array(
            'inscriptionForm' => $form -> createView()
        );

        return $this->render('@App/Membre/inscription.html.twig', $params);
    }


    /**
     * @Route("/connexion/", name="connexion")
     */
    public function connexionAction(){

        $params = array();

        return $this->render('@App/Membre/connexion.html.twig');
    }

     /**
     * @Route("/profil/", name="profil")
     */
    public function profilAction(){

        $params = array();

        return $this->render('@App/Membre/profil.html.twig');
    }



}