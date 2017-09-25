<?php

require_once 'ParcVoituresClasse.php';

$v1 = new Voiture("BE5476", "07/15/1995", 120000, "A4", "Audi", "Red", 2);
$v2 = new Voiture("FR3523", "20/22/2001", 15873, "M5", "BMW", "Red", 1.5);

if (isset($_GET["submit"])) {
  echo $v1->speedUp();
}

if (isset($_GET["refresh"])) {
  echo '
  <script type="text/javascript">
    location.assign("ParcVoitures.php");
  </script>';
}

echo $v1->reserved();
echo "<br />";
echo $v1->origine();
echo "<br />";
echo $v1->distance();
echo "<br />";
echo $v1->age();

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>ParcVoitures</title>
   </head>
   <style>
     table, th, tr, td {
       border: solid 1px black;
     }
   </style>
   <body>
     <br />

    <table>
      <thead>
        <th>numéro d'immatriculation</th>
        <th>date de mise en circulation</th>
        <th>kilométrage</th>
        <th>modèle</th>
        <th>marque</th>
        <th>couleur</th>
        <th>poids</th>
      </thead>
      <tr>
        <?php echo $v1->affiche(); ?>
      </tr>
      <tr>
        <?php echo $v2->affiche(); ?>
      </tr>
    </table>

     <form action="ParcVoitures.php" method="get">
       <input type="submit" name="submit" value="rouler">
       <input type="submit" name="refresh" value="refresh">
     </form>
   </body>
 </html>
