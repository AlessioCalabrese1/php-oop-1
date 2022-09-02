<?php 

class Movie{
    private $title;
    private $exitDate;
    private $genre;

    /**
     * Costruisce l'istanza Movie
     * 
     * @param mixed $_title Titolo del film
     * 
     * @param mixed $_exitDate Data di uscita del film
     * 
     * @param mixed $_genre Genere cinematografico del film
     */
    function __construct($_title, $_exitDate, $_genre)
    {
        $this->title = $_title;
        $this->exitDate = $_exitDate;
        $this->genre = $_genre;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getExitDate(){
        return $this->exitDate;
    }

    public function getGenre(){
        return $this->genre;
    }
}