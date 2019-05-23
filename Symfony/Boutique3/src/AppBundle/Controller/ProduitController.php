<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Produit;

class ProduitController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // 1: Qu'est-ce que j'ai besoin ?
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $produits = $repository->findAll();

        // Categorie :
        // SELECT DISTINCT(categorie) FROM produit :

        $categorie = $repository -> getAllCategories();
        $categorie = $repository -> getAllCategories2();

        // 2: Qu'est-ce que j'affiche ?
        $params = array(
            'produits' => $produits,
            'categorie' => $categorie
        );

        return $this->render('@App/Produit/index.html.twig', $params);
        
    }

    /**
     * @Route("/produit/{id}", name="produit")
     */
    public function produitAction($id){

        // 1: Qu'est-ce que j'ai besoin ?
        // SELECT * FROM produit WHERE id = 12

        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $produit = $repository->find($id);

        // Manager :
        $em = $this->getDoctrine() -> getManager();
        $produit = $em ->find(Produit::class, $id);


        // 2: Qu'est-ce que j'affiche ?

        $params = array(
            'id' => $id,
            'produit' => $produit
        );

        return $this->render('@App/Produit/produit.html.twig', $params);

    }

    /**
     * @Route("/categorie/{cat}", name="categorie")
     */
    public function categorieAction($cat){

        // localhost:8000/categorie/pull
        // 1: Qu'est-ce que j'ai besoin ?
        // SELECT * FROM produit WHERE categorie = pull

        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $produits = $repository->findBy(['categorie'=>$cat]);
        // $categorie = $repository->findBy(array('categorie'=>$cat));

        // Categorie :
        // SELECT DISTINCT(categorie) FROM produit :
        $categorie = $repository -> getAllCategories();
        $categorie = $repository -> getAllCategories2();

        // 2: Qu'est-ce que j'affiche ?

         $params = array(
             'produits' => $produits,
             'title' => 'Tous les produits de la categorie : '.$cat,
             'categorie' => $categorie
         );

        return $this->render('@App/Produit/index.html.twig', $params);
        // test : localhost:8000/categorie/tshirt
    }



}
