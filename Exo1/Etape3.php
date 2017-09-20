<?php

class Validator {
    public $input;

    public function SetInput($input)
    {
      $this->input = $input;
    }

    public function String()
    {
      if(is_string($this->input)){
        return $this->input." is a string";
      }
      else {
        return $this->input." is not a string";
      }
    }

    public function Int()
    {
      if(is_int($this->input)){
        return $this->input." is an integer";
      }
      else {
        return $this->input." is not an integer";
      }
    }

    public function Array()
    {
      if(is_array($this->input)){
        return $this->input." is an array";
      }
      else {
        return $this->input." is not an array";
      }
    }
}

//$_POST["test"] = "Hi";
$validation = new Validator;

if (isset($_POST["submit"])) {
  $validation->SetInput(8);
  echo $validation->String();
  echo "<br />";
  echo $validation->Int();
}


 ?>

 <form action="Etape3.php" method="post">
   <input type="number" name="test">
   <input type="submit" name="submit">
 </form>
