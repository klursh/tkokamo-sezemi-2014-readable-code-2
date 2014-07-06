<?php

class RecipeCollection {

  private $recipes;

  public function __construct($filename = NULL)
  {
    //parameter check
    if ($filename === NULL) {
      echo "Class Recipe must be initialize with recipe file" . PHP_EOL;
      echo "EXAMPLE: $recipe = new Recipe($filename)" . PHP_EOL;
      return NULL;
    }

    //open recipe file
    if (($fp = fopen($filename, "r")) === NULL) {
      echo "fopen() error" . PHP_EOL;
      return NULL;
    }

    //import recipes
    $this->recipes = array();
    while ($line = fgets($fp)) {
      $this->add($line);
    }

    fclose($fp);
  }
  public function printAllWithId() {
    foreach ($this->recipes as $id => $val) {
      $this->printWithId($id);
    }
  }
  public function printWithId($id) {
    if (isset($this->recipes[$id])) {
      echo  $id . ": " . $this->recipes[$id];
    }
  }
  public function toArray() {
    return $this->recipes;
  }

  private function add($recipe) {
    $this->recipes[] = $recipe;
  }


}


?>