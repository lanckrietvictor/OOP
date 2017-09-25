<?php

class Voiture {
  private $numImmatriculation;
  private $miseCirculation;
  public $kilometrage;
  private $modele;
  private $marque;
  public $couleur;
  private $poids;

  function __construct($numImmatriculation, $miseCirculation, $kilometrage, $modele, $marque, $couleur, $poids){
    $this->numImmatriculation = $numImmatriculation;
    $this->miseCirculation = $miseCirculation;
    $this->kilometrage = $kilometrage;
    $this->modele = $modele;
    $this->marque = $marque;
    $this->couleur = $couleur;
    $this->poids = $poids;
  }

  public function affiche()
  {
    return "<td>".$this->numImmatriculation."</td>".
    "<td>".$this->miseCirculation."</td>".
    "<td>".$this->kilometrage."</td>".
    "<td>".$this->modele."</td>".
    "<td>".$this->marque."</td>".
    "<td>".$this->couleur."</td>".
    "<td>".$this->poids."</td>";
  }

  public function reserved()
  {
    if($this->marque = "Audi") {
      return "This car is reserved";
    }
    else {
      return "This car is free";
    }
  }

  public function weight()
  {
    if($this->poids > 3.5) {
      return "C'est un véhicule utilitaire";
    }
    else {
      return "C'est un véhicule commerciale";
    }
  }

  public function origine()
  {
    $myStr = mb_substr($this->numImmatriculation, 0, 2);

    if($myStr == "BE") {
      return "La voiture est belge";
    }
    elseif ($myStr == "FR") {
      return "La voiture est française";
    }
    elseif ($myStr == "DE") {
      return "La voiture est allemande";
    }
    else {
      return "On ne sait pas le pays d'origine";
    }
  }

  public function distance()
  {
    if($this->kilometrage < 100000) {
      return "Low";
    }

    elseif($this->kilometrage < 200000 && $this->kilometrage < 200000) {
      return "Middle";
    }

    elseif ($this->kilometrage > 200000) {
      return "High";
    }
  }

  public function speedUp()
  {
    $this->kilometrage = $this->kilometrage + 100000;
    echo "<br />";
    echo self::distance();
    //return $this->kilometrage;
  }

  public function age()
  {
    $date1 = date_create($this->miseCirculation);
    $date2 = date_create(date("m/d/Y"));
    $diff = date_diff($date1, $date2);
    return $diff->y;
  }


}

 ?>
