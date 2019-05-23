<?php

namespace controller;

class ControllerVehicule{
    
    public $db;
    public function __construct(){

        $e = new Error; // gestion des erreurs. Pas besoin d'écrire : controller\Error car le fichier se trouve déjà à l'intérieur

        $this->db = new \model\EntityRepository2;
    }
    //---------------------------------------------------------------------------------//
    public function redirect($location){

        header('Location : '.$location);
    }
    //---------------------------------------------------------------------------------//
    public function handleRequest(){

        $op = isset($_GET['op']) ? $_GET['op'] : Null;

        try{

            if( !$op || $op == 'list'){
                $this->listVehicules();
            }
            elseif( $op == 'delete'){

                $this->deleteVehicule();
            }
            elseif( $op == 'show'){

                $this->showVehicule();
            }
            elseif($op == 'update'){

                $this->updateVehicule();
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
    public function listVehicules(){

        $orderby = isset( $_GET['orderby'])?$_GET['orderby'] : NULL;
        $vehicules = $this->db->selectAll($orderby);

        $title = 'Add new vehicule';

		$marque = '';
		$model = '';
		$couleur = '';
		$immatricule = '';

		if( $_POST ){

			$marque = isset( $_POST['marque']) ? $_POST['marque'] : NULL;
			$model = isset( $_POST['model']) ? $_POST['model'] : NULL;
			$couleur = isset( $_POST['couleur']) ? $_POST['couleur'] : NULL;
			$immatricule = isset( $_POST['immatricule']) ? $_POST['immatricule'] : NULL;

			try{
                $res = $this->db->insert();
                  //$contacts = $this->db->selectAll($orderby);
				$this->redirect('index2.php');
				return;
			}
			catch(Exception $e){
				echo 'Error !';
			}

        }
        include 'view/vehicules.php';
	}
    //---------------------------------------------------------------------------------//
    public function deleteVehicule(){
        
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;

        if (!$id) {
            
            throw new Exception('Internal error.');
        }
        $res = $this->db->delete($id);

        $this->redirect('index2.php');
    }
    //---------------------------------------------------------------------------------//
    public function showVehicule(){

        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        
        if(!$id){

            throw new Exception('Internal error.');
        }
        $conducteur = $this->db->select($id);

		include 'view/vehicule.php';
    }
//---------------------------------------------------------------------------------//

    public function updateVehicule(){

        $id = isset($_GET['id']) ? $_GET['id'] : NULL;

        if(!$id){
            
            throw new Exception('Internal error.');
        }
        $vehicule = $this->db->select($id);

        $title = 'Add new vehicule';

		$marque = '';
		$model = '';
		$couleur = '';
		$immatricule = '';

		if( $_POST ){

			$marque = isset( $_POST['marque']) ? $_POST['marque'] : NULL;
			$model = isset( $_POST['model']) ? $_POST['model'] : NULL;
			$couleur = isset( $_POST['couleur']) ? $_POST['couleur'] : NULL;
			$immatricule = isset( $_POST['immatricule']) ? $_POST['immatricule'] : NULL;

			try{
				$res = $this->db->update($id);
				$this->redirect('index2.php');
				return;
			}
			catch(Exception $e){
				echo 'Error !';
			}
        }

        
		include 'view/editeVehicule.php';

    }
}