<?php

namespace controller;

class ControllerAssociation{

	private $db;
	public function __construct(){

		$e = new Error; //gestion des erreurs. Pas besoin d'ecrire: controller\Error car le fichier se trouve déjà à l'intérieur

		$this->db = new \model\EntityRepository2;

	}
	//-------------------------------------------------
	public function redirect($location){

		header('Location: ' . $location);
	}

	//-------------------------------------------------
	public function handleRequest(){

		$asso = isset( $_GET['asso'] ) ? $_GET['asso'] : NULL;

		try{
			if( !$asso || $asso == 'list'){
				$this->listContacts();
			}
			elseif( $asso == 'delete' ){
				$this->deleteContact();
			}
			elseif( $asso == 'show'){
				$this->showContact();
			}
			elseif( $asso == 'update'){				
				$this->updateContact();
			}
			else{
				$this->showError("Page not found", "Page for operation ". $asso ." was not found." );
			}
		}
		catch(Exception $e){

			$this->showError("Application error", $e->getMessage() );
		}
	}
	//-------------------------------------------------
	public function listContacts(){

		$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : NULL;

		$assoc = $this->db->selectAll($orderby);

		$title = 'Add new contact';

		$id_conduteur ='';
		$id_vehicule ='';
		

		if( $_POST) {
            print_r($_POST);

			$id_conduteur = isset($_POST['id_conducteur']) ? $_POST['id_conducteur'] : NULL;
			$id_vehicule = isset($_POST['id_vehicule']) ? $_POST['id_vehicule'] : NULL;
            

			try{

				$res = $this->db->insert();
				$this->redirect('association.php');
				return;
			}
			catch(Exception $e){
				echo 'erreur !!';
			}
		}

		include 'view/contactsAssociation.php';
	}

	//-------------------------------------------------
	public function deleteContact(){

		$id = isset($_GET['id']) ? $_GET['id'] : NULL;

		if( !$id ){

			throw new Exception('Internal error.');
		}
		$res = $this->db->delete($id);

		$this->redirect('association.php');
	}

	//-------------------------------------------------
	public function showContact(){

		$id = isset($_GET['id']) ? $_GET['id'] : NULL;

		if( ! $id ){

			throw new Exception('Internal error.');
		}
		$association = $this->db->select($id);

		include 'view/contactAssociation.php';
	}



	public function updateContact(){

		$id = isset($_GET['id']) ? $_GET['id'] : NULL;
		if( ! $id ){
			throw new Exception('Internal error.');
		}
		$association = $this->db->select($id);



		$id_conduteur ='';
		$id_vehicule ='';

		if( $_POST) {

			$id_conduteur = isset($_POST['id_conducteur']) ? $_POST['id_conducteur'] : NULL;
			$id_vehicule = isset($_POST['id_vehicule']) ? $_POST['id_vehicule'] : NULL;
		

			try{

				$res = $this->db->update($id);
				$this->redirect('association.php');
			}
			catch(Exception $e){
				echo 'erreur !!';
			}
		}
		include 'view/modif-contactAssociation.php';
	}
}