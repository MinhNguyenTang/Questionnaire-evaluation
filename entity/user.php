<?php
/**
 * Class user
 */

class user
{
  /**
   *@var int
   */
   protected $id;
   /**
   *@var string
   */
   protected $nom;
   /**
   *@var string
   */
   protected $prenom;
   /**
   *@var string
   */
   protected $mail;
   /**
   *@var string
   */
   protected $mdp;


   /**
   *user constructor
   *@param array $array
   */
   public function __construct($array)
   {
     $this->hydrate($array);
   }
   /**
   *@param array $donnees
   */
   public function hydrate($array)
   {
     foreach($donnees as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this,$method)){
                $this->$method($value);
            }
        }
   }

   /**
   *@return int
   */
   public function getId()
   {
     return $this->id;
   }
   /**
   *@param int $id
   */
   public function setId($id)
   {
     $this->id = $id;
   }

   /**
   *@return string
   */
   public function getNom()
   {
     return $this->nom;
   }
   /**
   *@param string $nom
   */
   public function setNom($nom)
   {
     $this->nom = $nom;
   }

   /**
   *@return string
   */
   public function getPrenom()
   {
     return $this->prenom;
   }
   /**
   *@param string $prenom
   */
   public function setPrenom($prenom)
   {
     $this->prenom = $prenom;
   }

   /**
   *@return string
   */
   public function getMail()
   {
     return $this->mail;
   }
   /**
   *@param string $mail
   */
   public function setMail($mail)
   {
     $this->mail = $mail;
   }

   /**
   *@return string
   */
   public function getMdp()
   {
     return $this->mdp;
   }
   /**
   *@param string $prenom
   */
   public function setMdp($mdp)
   {
     $this->mdp = $mdp;
   }

}
 ?>
