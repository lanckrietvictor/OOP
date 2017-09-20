<?php

class Form {

  public function create($action) {
    $this->action = $action;

    return "<form action=''".$this->action."' method='POST'>";
  }

  public function text($inputName, $inputValue) {
    $this->inputName = $inputName;
    $this->inputValue = $inputValue;

    return "<label>".$this->inputName."</label>
    <br>
    <input name='".$this->inputName."' value='".$this->inputValue."'>";
  }

  public function submit($submitValue) {
    $this->submitValue = $submitValue;

    return "<input type='submit' value='".$this->submitValue."' >";
  }

  public function end() {
    return "</form>";
  }

}

$form = new Form();
echo $form->create("Exo1.php"); // créer le début du formulaire
echo $form->text('nom',""); // créer un input de type texte avec comme valeur par défaut $nom
echo "<br>";
echo $form->text('prenom',""); // créer un input de type texte avec comme valeur par défaut $prenom
echo "<br>";
echo $form->submit('Modifier'); //Créer un bouton pour soumettre le formulaire se nommant Modifier
echo $form->end(); //fermer le formulaire

 ?>
