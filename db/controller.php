<?php
class Controller{
  private $db;

  function __construct($con){
    $this->db=$con;
  }

  function getDepartment(){
    try{
      $sql = "SELECT * FROM departments";
      $result=$this->db->query($sql);
      return $result;
    }catch(PDOException $e){
      echo $e->getMessage();
      return false;
    }
  }
}


?>