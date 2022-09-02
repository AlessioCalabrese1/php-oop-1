<?php 

class Movie{
    private $name;
    private $exitDate;
    private $genre;


    function __construct($_name, $_exitDate, $_genre)
    {
        $this->name = $_name;
        $this->exitDate = $_exitDate;
        $this->genre = $_genre;
    }

    public function getName(){
        return $this->name;
    }

    public function getExitDate(){
        return $this->exitDate;
    }

    public function getGenre(){
        return $this->genre;
    }
}