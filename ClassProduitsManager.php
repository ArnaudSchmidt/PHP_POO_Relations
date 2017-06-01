<?php

class ProduitsManager
{
  
  private $_db;

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(Produit $produit)
  {
    
  }

  public function delete(Produit $produit)
  {
    
  }

  public function getProduit($Num)
  {
    
  }

  public function getList()
  {

  }

  public function update(Produit $produit)
  {

  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}