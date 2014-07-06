<?php

require_once './RecipeCollection.php';

//command line arg check
if ($argc < 2) {
  echo "{$argv[0]} <input file>" . PHP_EOL;
  exit(1);
}

//initialize recipe
$recipes = new RecipeCollection($argv[1]);
if ($recipes === NULL) {
  echo "Initialize Recipe failed" . PHP_EOL;
  exit(1);
}

$recipes->printRecipeWithId();

?>