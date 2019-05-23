<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Membre
 *
 * @ORM\Table(name="membre")
 * @ORM\Entity(repositoryClass="App\Repository\MembreRepository")
 */

class Membre implements UserInterface
{
    /**
     * Un membre a (0 ou) plusieurs commandes
     * @ORM\OneToMany(targetEntity="Commande", mappedBy="membre")
     */
    private $commandes;

    public function __construct(){
        $this -> commandes = new ArrayCollection();
        // On met un objet de la classe array collection dans $commandes.
    }

    public function getCommandes(){
        return $this -> commandes;
    }

    public function setCommandes(ArrayCollection $commandes){
        $this -> commandes = $commandes;
        return $this;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id_membre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=1, nullable=false)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=30, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=20, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=128, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostal", type="string")
     */
    private $codepostal;


    /**
     * @var integer
     *
     * @ORM\Column(name="roles", type="array")
     */
    private $roles = [];

    public function getRoles(){

        $roles = $this -> roles;
        // $roles[] = 'ROLE_USER';
        return $roles;
    }

    public function setRoles(array $roles){

        $this -> roles = $roles;
        return $this;
    }

    public function eraseCredentials(){}

    private $salt;

    public function setSalt(){

        $this -> salt =$salt;
        return $this;
    }

    public function getSalt(){
        
        return $this -> salt;
    }


    /**
     * Get idMembre
     *
     * @return integer
     */
    public function getIdMembre()
    {
        return $this->idMembre;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Membre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Membre
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Membre
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set civilite
     *
     * @param string $civilite
     *
     * @return Membre
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Membre
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Membre
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Membre
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Membre
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set codepostal
     *
     * @param integer $codepostal
     *
     * @return Membre
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return integer
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /* Deux fonctions obligatoires avec l'implementation de /serialize */
    public function serialize(){

        return serialize([
            $this->IdMembre,
            $this->username,
            $this->password,
            // see section on salt below
            // $this -> salt,
        ]);
    }

    public function unserialize($seriealized){

        list(
            $this->idMembre,
            $this->username,
            $this->password,

        ) = unserialize($seriealized, ['allowed_classes' => false]);
    }
}
