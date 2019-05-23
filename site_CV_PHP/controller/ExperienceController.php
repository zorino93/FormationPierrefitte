<?php

namespace controller;

class ExperienceController{
    
    public $db;
    public function __construct(){

        $e = new Error; // gestion des erreurs. Pas besoin d'écrire : controller\Error car le fichier se trouve déjà à l'intérieur

        $this->db = new \model\ExperienceEntityRepository;
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
                $this->listExperience();
            }
            elseif( $op == 'new'){

                $this->saveExperience();
            }
            elseif( $op == 'delete'){

                $this->deleteExperience();
            }
            elseif( $op == 'show'){

                $this->showExperience();
            }
            elseif($op == 'update'){

                $this->updateExperience();
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
    public function listExperience(){

        $orderby = isset( $_GET['orderby'])?$_GET['orderby'] : NULL;
        $experiences = $this->db->selectAll($orderby);

        include 'view/experiences/experiences.php';
    }
    //---------------------------------------------------------------------------------//
    public function saveExperience(){

		$title = 'Add new contact';

		$nomEntreprise= '';
		$date = '';
		$poste = '';
		$ville = '';

		if( $_POST ){

			$nomEntreprise = isset( $_POST['nomEntreprise']) ? $_POST['nomEntreprise'] : NULL;
			$date = isset( $_POST['date']) ? $_POST['date'] : NULL;
			$poste = isset( $_POST['poste']) ? $_POST['poste'] : NULL;
			$ville = isset( $_POST['ville']) ? $_POST['ville'] : NULL;

			try{
				$res = $this->db->insert();
				$this->redirect('exp.php');
				return;
			}
			catch(Exception $e){
				echo 'Error !';
			}
		}
		include 'view/experiences/experience-form.php';
	}
    //---------------------------------------------------------------------------------//
    public function deleteExperience(){
        
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;

        if (!$id) {
            
            throw new Exception('Internal error.');
        }
        $res = $this->db->delete($id);

        $this->redirect('exp.php');
    }
    //---------------------------------------------------------------------------------//
    public function showExperience(){

        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        
        if(!$id){

            throw new Exception('Internal error.');
        }
        $contact = $this->db->select($id);

		include 'view/experiences/experience.php';
    }
//---------------------------------------------------------------------------------//

    public function updateExperience(){

        $id = isset($_GET['id']) ? $_GET['id'] : NULL;

        if(!$id){
            
            throw new Exception('Internal error.');
        }
        $contact = $this->db->select($id);

        $title = 'Add new contact';

		$nomEntreprise = '';
		$date = '';
		$poste = '';
        $ville = '';

		if( $_POST ){

            $nomEntreprise = isset( $_POST['nomEntreprise']) ? $_POST['nomEntreprise'] : '';
			$date = isset( $_POST['date']) ? $_POST['date'] : NULL;
			$poste = isset( $_POST['poste']) ? $_POST['poste'] : NULL;
			$ville = isset( $_POST['ville']) ? $_POST['ville'] : NULL;

			try{
				$res = $this->db->update($id);
				$this->redirect('exp.php');
				return;
			}
			catch(Exception $e){
				echo 'Error !';
			}
        }

        
		include 'view/experiences/editeExperience.php';

    }
}