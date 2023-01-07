<?php

class RollManagement{
    public $name ;
    public function setName($names){
       $this->name = $names;
    }
    public function getName(){
        return $this->name;
    }
}

class PositionManagement extends RollManagement{
    public function setName($names){
       if($names == 'Emon'){
        $this ->name = "CEO of AAE software & it solution";
       }else{
        $this ->name = "There Are Employee";
       }
    }
    public function getName(){
        return $this->name;
    }
}

class TitleManagement extends RollManagement{
    public function setName($names)
    {
        $this -> name = $names;
    }
   public function getName(){
       return $this ->name;
    }
}




?>