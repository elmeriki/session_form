<?php


class Form{
private $name;
private $gname;
private $cname;



public function person($newname){

$this->name = $newname;

echo "Your Student Name is :$newname ";


}


public function guadian($newgname){

$this->gname = $newgname;

echo "Your Guadiann Name is :$newgname";
    
}


public function course($newcname){

    $this->cname = $newcname;

    echo "Your Course Details  is : $newcname;";
    
}


}



?>