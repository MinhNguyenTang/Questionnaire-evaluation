<?php

class manager
{
  /**
  * Database connection
  */
  public function db_connection()
  {
    $bdd = new PDO('mysql:host=localhost;dbname=e2c_bis;charset=utf8', 'root', '');
   } catch (Exception $e) {
     die('Error :' .$e->getMessage());
   }
   return $bdd;
  }

  /**
  * Getting messages
  */
  public function get_message()
  {
    $request = $this->db_connection()->prepare('SELECT * FROM messages WHERE id=:id');
    $request->execute($this->g());
    $result = $request->fetch();
    if($result==false)
    {
      $request = $this->db_connection()->prepare('INSERT INTO messages(nom, prenom, msg) VALUES(:nom, :prenom, :msg)');
      $request->execute($this->g());
      return 1:
    }
    else {
      return 0;
    }
  }
}

 ?>
