<?php

namespace controller;

class Controller{
    
    public $db;
    public function __construct(){

        $e = new Error; // gestion des erreurs. Pas besoin d'écrire : controller\Error car le fichier se trouve déjà à l'intérieur

        $this->db = new \model\EntityRepository;
    }
    //---------------------------------------------------------------------------------//
    public function redirect($location){

        header('location:'.$location);
    }
    //---------------------------------------------------------------------------------//
    public function handleRequest(){

        $op = isset($_GET['op']) ? $_GET['op'] : Null;

        try{

            if( !$op || $op == 'list'){
                $this->listConducteurs();
            }
            elseif( $op == 'delete'){

                $this->deleteConducteur();
            }
            elseif( $op == 'show'){

                $this->showConducteur();
            }
            elseif($op == 'update'){

                $this->updateConducteur();
            }
            else{

                $this->showError( "Page not found", 'Page for operation'. $op .'was not found.');
            }
        }
        catch(Exception $e){

            $this->showError("Application erro", $e->getMessage() );
        }
    }
    //---------------------------------------------------------------------------------//
    public function listConducteurs(){

        $orderby = isset( $_GET['orderby'])?$_GET['orderby'] : NULL;
        $conducteurs = $this->db->selectAll($orderby);

        $title = 'Add new conducteur';

		$prenom = '';
		$nom = '';

		if( $_POST ){

			$prenom = isset( $_POST['prenom']) ? $_POST['prenom'] : NULL;
			$nom = isset( $_POST['nom']) ? $_POST['nom'] : NULL;

			try{
                $res = $this->db->insert();
                  //$contacts = $this->db->selectAll($orderby);
				$this->redirect('index.php?op=list');
				return;
			}
			catch(Exception $e){
				echo 'Error !';
            }
            
        }

        include 'view/conducteurs.php';
    
	}
    //---------------------------------------------------------------------------------//
    public function deleteConducteur(){
        
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;

        if (!$id) {
            
            throw new Exception('Internal error.');
        }
        $res = $this->db->delete($id);

        $this->redirect('index.php');
    }
    //---------------------------------------------------------------------------------//
    public function showConducteur(){

        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        
        if(!$id){

            throw new Exception('Internal error.');
        }
        $conducteur = $this->db->select($id);

		include 'view/conducteur.php';
    }
//---------------------------------------------------------------------------------//

    public function updateConducteur(){

        $id = isset($_GET['id']) ? $_GET['id'] : NULL;

        if(!$id){
            
            throw new Exception('Internal error.');
        }
        $conducteur = $this->db->select($id);

        $title = 'Add new conducteur';

		$prenom = '';
		$nom = '';

		if( $_POST ){

			$prenom = isset( $_POST['prenom']) ? $_POST['prenom'] : NULL;
			$nom = isset( $_POST['nom']) ? $_POST['nom'] : NULL;

			try{
				$res = $this->db->update($id);
				$this->redirect('index.php');
				return;
			}
			catch(Exception $e){
				echo 'Error !';
			}
        }

        
		include 'view/editeConducteur.php';

    }

}

