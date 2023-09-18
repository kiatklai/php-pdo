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

  function insert($fname,$lname,$salary,$department_id){
    try{
      $sql = "INSERT INTO 
      staffs(fname,lname,salary,department_id)
      VALUE (:fname,:lname,:salary,:department_id)
      ";
      $stmt=$this->db->prepare($sql);
      $stmt->bindParam(":fname",$fname);
      $stmt->bindParam(":lname",$lname);
      $stmt->bindParam(":salary",$salary);
      $stmt->bindParam(":department_id",$department_id);
      $stmt->execute();
      return true;
    }catch(PDOException $e){
      return false;
    }
  }
}

?>