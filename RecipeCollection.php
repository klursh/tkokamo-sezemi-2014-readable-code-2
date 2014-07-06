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
      $this->recipes[] = $line;
    }

    fclose($fp);
  }

  public function printRecipeWithId() {
    $i = 1;
    foreach ($this->recipes as $recipe) {
      echo  $i++ . ": " . $recipe;
    }
  }

}


?>