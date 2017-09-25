<?php

class DataBase {
  private $host;
  private $dbname;
  private $user;
  private $password;
  private $pdo;
  function __construct($host, $dbname, $user, $password){
    $this->host = $host;
    $this->dbname = $dbname;
    $this->user = $user;
    $this->password = $password;

  }

  function connect() {
    try
    {
	     // On se connecte à MySQL
	      return $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->user, $this->password);
    }
    catch(Exception $e)
    {
	     // En cas d'erreur, on affiche un message et on arrête tout
	      die('Erreur : '.$e->getMessage());
    }
  }
}

class User {
  private $id;
  private $username;
  private $email;
  private $password;
  private $pdo;
  private $connected;
  private $i;
  function __construct($username, $email, $password, $pdo) {
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
    $this->pdo = $pdo;

    $result = $this->pdo->query("SELECT id_user FROM Users WHERE username = $this->username");
    $list = $result->fetchAll(PDO::FETCH_ASSOC);

    print_r($list);

    }

    function addUser () {

    $result = $this->pdo->query("SELECT * FROM Users");
    $list = $result->fetchAll(PDO::FETCH_ASSOC);

    foreach ($list as $key => $value) {
      if($value["username"]==$this->username){
        echo "Username exists <br />";
      }
      else {
          $this->i++;
      }
    }

    if(count($list)==$this->i){
      $sql = "INSERT INTO Users (username, email, password) VALUES ('$this->username', '$this->email', '$this->password')";
      $this->pdo->exec($sql);
    };

  }

  function changeUsername ($newUsername) {
    $sql = "UPDATE Users SET username = '$newUsername' WHERE username = '$this->username'";
    $this->pdo->exec($sql);
  }


}

 ?>
