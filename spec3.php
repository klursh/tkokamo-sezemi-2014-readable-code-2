<?php

//command line arg check
if ($argc < 2) {
  echo "{$argv[0]} <input file>" . PHP_EOL;
  exit(1);
}

//open recipe file
if (($fp = fopen("recipe-data.txt", "r")) === NULL) {
  echo "fopen() error" . PHP_EOL;
  exit(1);
}

while ($line = fgets($fp)) {
  echo $line;
}

fclose($fp);

?>