<?php

require_once 'DataBaseClass.php';

$db = new DataBase("localhost", "OOP", "root", "user");
$pdo = $db->connect();

$user1 = new User("dude", "dude@duderson.com", "dude", $pdo);
$user2 = new User("Victor", "Victor@whatever.be", "coolio", $pdo);
$user3 = new User("Thomas", "thomas@t.be", "thomas", $pdo);

$user1->changeUsername("dude");

$result = $pdo->query("SELECT * FROM Users");
$list = $result->fetchAll(PDO::FETCH_ASSOC);

for ($i=0; $i < count($list); $i++) {
  foreach ($list[$i] as $key => $value) {
    echo $value." ";
  }
  echo "<br />";
}

 ?>
