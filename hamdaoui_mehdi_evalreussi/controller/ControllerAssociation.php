<?php

namespace controller;

class ControllerAssociation{
    
    public $db;
    public function __construct(){

        $e = new Error; // gestion des erreurs. Pas besoin d'écrire : controller\Error car le fichier se trouve déjà à l'intérieur

        $this->db = new \model\EntityRepository3;
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
                $this->listAssociations();
            }
            elseif( $op == 'delete'){

                $this->deleteAssociation();
            }
            elseif( $op == 'show'){

                $this->showAssociation();
            }
            elseif($op == 'update'){

                $this->updateAssociation();
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
    public function listAssociations(){

        $orderby = isset( $_GET['orderby'])?$_GET['orderby'] : NULL;
        $associations = $this->db->selectAll($orderby);

        $title = 'Add new association';

		$vehicule= '';
		$conducteur = '';

		if( $_POST ){

			$vehicule = isset( $_POST['vehicule']) ? $_POST['vehicule'] : NULL;
			$conducteur = isset( $_POST['conducteur']) ? $_POST['conducteur'] : NULL;

			try{
                $res = $this->db->insert();
                  //$contacts = $this->db->selectAll($orderby);
				$this->redirect('index3.php');
				return;
			}
			catch(Exception $e){
				echo 'Error !';
			}

        }
        include 'view/associationVehicules.php';
	}
    //---------------------------------------------------------------------------------//
    public function deleteAssociation(){
        
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;

        if (!$id) {
            
            throw new Exception('Internal error.');
        }
        $res = $this->db->delete($id);

        $this->redirect('index3.php');
    }
    //---------------------------------------------------------------------------------//
    public function showAssociation(){

        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        
        if(!$id){

            throw new Exception('Internal error.');
        }
        $conducteur = $this->db->select($id);

		include 'view/associationVehicule.php';
    }
//---------------------------------------------------------------------------------//

    public function updateAssociation(){

        $id = isset($_GET['id']) ? $_GET['id'] : NULL;

        if(!$id){
            
            throw new Exception('Internal error.');
        }
        $vehicule = $this->db->select($id);

        $title = 'Add new association';

		$vehicule= '';
		$conducteur = '';

		if( $_POST ){

			$vehicule = isset( $_POST['vehicule']) ? $_POST['vehicule'] : NULL;
			$conducteur = isset( $_POST['conducteur']) ? $_POST['conducteur'] : NULL;

			try{
				$res = $this->db->update($id);
				$this->redirect('index3.php');
				return;
			}
			catch(Exception $e){
				echo 'Error !';
			}
        }

        
		include 'view/editeAssociationVehicule.php';

    }
}