<?php
class Controller{
  private $db;

  function __construct($con){
    $this->db=$con;
    echo "Call to controller";
  }
}


?>