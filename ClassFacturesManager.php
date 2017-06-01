<?php

class FacturesManager
{
  
  private $_db;

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(Facture $facture)
  {
    
  }

  public function delete(Facture $facture)
  {
    
  }

  public function getProduit($Num)
  {
    
  }

  public function getList()
  {

  }

  public function update(Facture $facture)
  {

  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}