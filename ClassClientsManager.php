<?php

class ClientsManager
{
  
  private $_db;

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(Client $client)
  {
    
  }

  public function delete(Client $client)
  {
    
  }

  public function getClient($Id)
  {
    
  }

  public function getList()
  {

  }

  public function update(Client $client)
  {

  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}