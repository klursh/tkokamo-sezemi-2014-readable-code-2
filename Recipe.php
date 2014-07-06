<?php

require_once './common.php';

class Recipe {
    private $name;
    private $url;

    public function __construct($name, $url) {
        $this->name = $name;
        $this->url  = $url;
    }
    public function __toString() {
        return $this->name . " " . $this->url;
    }
}