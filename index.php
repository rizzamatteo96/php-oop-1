<?php

/* CONSEGNA
è definita una classe ‘Movie’ 
=> all'interno della classe sono dichiarate delle variabili d'istanza 
=> all'interno della classe è definito un costruttore 
=> all'interno della classe è definito almeno un metodo vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
*/


class Movie{
  // dichiaro variabili d'istanza
  public $title;
  public $length = 'Durata sconosciuta';
  public $genre;
  public $plot;

  // definisco un costruttore
  function __construct($_title){
    $this->title = $_title;
  }

  /*
  definisco 2 metodi:
  uno per settare una descrizione della durata
  uno per fare il get di questa informazione
  */
  public function setLength($duration){
    if($duration < 60){
      $this->length = 'Cortometraggio';
    }
    elseif($duration > 60 && $duration < 120){
      $this->length = 'Media durata';
    }
    else{
      $this->length = 'Lunga durata';
    }
  }

  public function getLength(){
    return $this->length;
  }

}

// Creazione del primo "Movie"
$it = new Movie('IT');
$it->setLength(50);


// Creazione del secondo "Movie"
$the_blind_side = new Movie('The blind side');
$the_blind_side->setLength(100);
$the_blind_side->genre = 'Drammatico';


// Creazione del terzo "Movie"
$quasi_amici = new Movie('Quasi amici');
$quasi_amici->setLength(150);
$quasi_amici->genre = 'Commedia';
$quasi_amici->plot = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.';

// stampo a schermo i tre "movie"
var_dump($it);
var_dump($the_blind_side);
var_dump($quasi_amici);
var_dump('Il film \'' . $quasi_amici->title . '\' è di ' . $quasi_amici->getLength());