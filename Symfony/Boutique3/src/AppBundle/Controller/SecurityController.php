<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    /**
     * 
     * @Route("/connexion/", name="connexion")
     * 
     */
    public function connexionAction(Request $request){

        $auth = $this -> get('security.authentication_utils');

        $lastUserName = $auth -> getLastUserName();
        // récupère le username saisi

        $error = $auth -> getlastAuthenticationError();

        if (!empty($error)) {
            $request -> getSession() -> getFlashBag() -> add('errors', 'Problème d\'identifiant');
        }
        $params = array(
            'lastUserName' => $lastUserName  
        );

        return $this -> render('@App/Membre/connexion.html.twig', $params);
    }
    
    /**
     * 
     * @Route("/connexion_check/", name="connexion_check")
     * 
     */
    public function connexionCheckAction(){}
    
    /**
     * 
     * @Route("/deconnexion/", name="deconnexion")
     * 
     */
    public function deconnexionAction(){}
}