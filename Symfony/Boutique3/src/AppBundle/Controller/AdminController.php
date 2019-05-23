<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Produit;
use AppBundle\Entity\Commande;
use AppBundle\Entity\Membre;

use AppBundle\Form\ProduitType;
use AppBundle\Form\MembreType;
use AppBundle\Form\CommandeType;

class AdminController extends Controller
{

    // Admin Crud produit
     /**
     * @Route("/admin/produit/", name="produit_list")
     */
    public function adminAction(){

        $repository = $this -> getDoctrine() -> getRepository(Produit::class);

        $produit = $repository -> findAll();

        $params = array(
            'produit' => $produit
        );

        return $this->render('@App/Admin/produit_list.html.twig', $params);
    }

    /**
     * @Route("/admin/produit/add/", name="produit_add")
     */
    public function produitAddAction(Request $request){

        $produit = new Produit;
        // objet vide de l'Entity Produit

        $form = $this-> createForm(ProduitType::class, $produit);

        $form->handleRequest($request);
        // Cette ligne est importante, elle permet de récupérer les infos en POST et donc lier définitivement aux $produit aux données saisies dans le formulaire.

        if ($form -> isSubmitted() && $form -> isValid()) {
        
            $em = $this -> getDoctrine() -> getManager();
        

            $em -> persist($produit);
            $produit -> uploadPhoto();
            $em -> flush();

            return $this -> redirectToRoute('produit_list');

            // localhost:8000/admin/produit/add

        }

        $params = array(
            'produitForm' => $form -> createView()
        );

        return $this->render('@App/Admin/produit_form.html.twig', $params);
    }

    /**
     * @Route("/admin/produit/update/{id}/", name="produit_update")
     */
    public function updateAction($id, Request $request){

        $em = $this->getDoctrine()->getManager();

        $produit = $em-> find(Produit::class, $id);

        $form = $this-> createForm(ProduitType::class, $produit);
        $form -> handleRequest($request);

        if ($form -> isSubmitted() && $form -> isValid()) {
            
            $em -> persist($produit);
            $produit -> uploadPhoto();
            $em -> flush();

            $request ->getSession() -> getFlashBag()-> add('success', 'Le produit id '. $id . ' a bien été modifié');

            return $this-> redirectToRoute('produit_list');
        }

        $params = array(
            'produitForm' => $form -> createView()
        );
        return $this->render('@App/Admin/produit_form.html.twig',$params);
    }

    /**
     * @Route("/admin/produit/delete/{id}/", name="produit_delete")
     */
    public function deleteAction($id, Request $request){

        $em = $this -> getDoctrine() -> getManager();  
        
        // 1: Récupérer l'objet 
        $produit = $em -> find(Produit::class, $id);

        if($produit){

        // 2: Suppression
        $em -> remove($produit);
        $em -> flush();

        // localhost:8000/admin/produit/delete/16


        $session = $request -> getSession();
        $session -> getFlashBag() -> add('success','tout est correcte' );

        }
        else {
             $session = $request -> getSession();
             $session -> getFlashBag() -> add('error','tout est erronée' );
        }

        return $this->redirectToRoute('produit_list');
    }


    //--------------------------------------------------------------//



     // Admin Crud Membre----------------------------------------------------------------//

    /**
     * @Route("/admin/membre/", name="membre_list")
     */
    public function membreAction(){

        $repository = $this -> getDoctrine() -> getRepository(Membre::class);

        $membres = $repository -> findAll();

        $params = array(
            'membres' => $membres
        );

        return $this->render('@App/Admin/membre_list.html.twig', $params);
    }


    /**
     * 
     * @Route("admin/membre/view/{id}", name="membre_view")
     * 
     */
    public function membreViewAction($id){

        //1 : Récupérer les infos du membre
        $repository = $this -> getDoctrine() -> getRepository(Membre::class);
    
        $membre = $repository -> find($id);

        //2 : On renvoie une vue
        $params = array(
            'membre' => $membre
        );

        return $this -> render('@App/Admin/membre_view.html.twig', $params);
    }


    /**
     * @Route("/admin/membre/add/", name="membre_add")
     */
    public function membreAddAction(Request $request){
        $em = $this-> getDoctrine() -> getManager();
        $membre = New Membre;

        $form = $this -> createForm(MembreType::class, $membre);
        $form -> handleRequest($request);

        if($form -> isSubmitted() && $form -> isValid()){
            $em -> persist($membre);
            $em ->flush();

            $request ->getSession() -> getFlashBag() -> add('success', 'le membre' .$membre -> getIdMembre(). 'a été ajouter avec succès');
            return $this -> redirectToRoute('membre_list');
        }

        $params = array(
            'membreForm' => $form -> createView()
        );

        return $this->render('@App/Admin/membre_form.html.twig', $params);
    }


    /**
     * @Route("/admin/membre/update/{id}/", name="membre_update")
     */
    public function membreUpdateAction($id, Request $request){
        $em = $this -> getDoctrine() -> getManager();
        $membre = $em -> find(Membre::class, $id);
        
        $form = $this -> createForm(MembreType::class, $membre);
        $form -> handleRequest($request);
        
        if($form -> isSubmitted() && $form -> isValid()){
            $em -> persist($membre);
            $em ->flush();

            $request ->getSession() -> getFlashBag() -> add('success', 'le membre ' .$membre -> getIdMembre(). ' a été ajouté avec succès');
            return $this -> redirectToRoute('membre_list');
        }

        $params = array(
            'membreForm' => $form -> createView()
        );

        return $this->render('@App/Admin/membre_form.html.twig', $params);
    }

    /**
     * @Route("/admin/membre/delete/{id}/", name="membre_delete")
     */
    public function membreDeleteAction($id, Request $request){

        $em = $this -> getDoctrine() -> getManager();
        $membre = $em -> find(Membre::class, $id);

        $em -> remove($membre);
        $em -> flush();

        $session = $request -> getSession();
        $session -> getFlashBag() -> add('success','tout est correcte' );
        // $session -> getFlashBag() -> add('error','tout est erronée' );

        return $this->redirectToRoute('membre_list');
    }
    //--------------------------------------------------------------//

    // Admin Crud Commande

    /**
     * @Route("/admin/commande/", name="commande_list")
     */
    public function commandeAction(){

        $repository = $this -> getDoctrine() -> getRepository(Commande::class);

        $commandes = $repository -> findAll();

        $params = array(
            'commandes' => $commandes,
        );

        

        return $this->render('@App/Admin/commande_list.html.twig', $params);
    }

    /**
     * @Route("/admin/commande/add/", name="commande_add")
     */
    public function commandeAddAction( Request $request){

         $em = $this-> getDoctrine() -> getManager();
        $commande = New Commande;

        $form = $this -> createForm(CommandeType::class, $commande);
        $form -> handleRequest($request);

        if($form -> isSubmitted() && $form -> isValid()){
            $em -> persist($commande);
            $em ->flush();

            $request ->getSession() -> getFlashBag() -> add('success', 'la commande' .$commande -> getIdCommande(). 'a été ajouter avec succès');
            return $this -> redirectToRoute('commande_list');
        }

        $params = array(
            'commandeForm' => $form -> createView()
        );

        return $this->render('@App/Admin/commande_form.html.twig', $params);
    }

    /**
     * @Route("/admin/commande/update/{id}/", name="commande_update")
     */
    public function commandeUpdateAction($id, Request $request){

        $em = $this -> getDoctrine() -> getManager();
         $commande = $em -> find(Commande::class, $id);

        $form = $this -> createForm(CommandeType::class, $commande);
        $form -> handleRequest($request);

        if($form -> isSubmitted() && $form -> isValid()){
            $em -> persist($commande);
            $em ->flush();

            $request ->getSession() -> getFlashBag() -> add('success', 'la commande' .$commande -> getIdCommande(). 'a été ajouter avec succès');
            return $this -> redirectToRoute('commande_list');
        }

        $params = array(
            'commandeForm' => $form -> createView()
        );

        return $this->render('@App/Admin/commande_form.html.twig', $params);
    }

    /**
     * @Route("/admin/commande/delete/{id}/", name="commande_delete")
     */
    public function commandeDeleteAction($id, Request $request){

        $session = $request -> getSession();
        $session -> getFlashBag() -> add('success','tout est correcte' );
        // $session -> getFlashBag() -> add('error','tout est erronée' );

        return $this->redirectToRoute('commande_list');
    }
}