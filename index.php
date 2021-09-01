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
  public $time;
  public $genre;
  public $plot;

  // definisco un costruttore
  function __construct($_title){
    $this->title = $_title;
  }


}