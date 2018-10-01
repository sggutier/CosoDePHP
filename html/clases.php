<?php

class Klaso {
    private $x;
    function __construct($w) {
        $this->x = $w;
    }

    public function getX() {
        return $this->x;
    }

    public function setX($x) {
        $this->x = $x;
    }
}


$obj = new Klaso(77);
echo $obj->getX();


?>