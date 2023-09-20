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

  function getStaffs(){
    try{
      $sql = "SELECT * FROM staffs a INNER JOIN departments b ON a.department_id = b.department_id;";
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

  function delete($id){
    try{
      $sql = "DELETE FROM staffs WHERE stf_id=:id";
      $stmt=$this->db->prepare($sql);
      $stmt->bindParam(":id",$id);
      $stmt->execute();
      return true;
    }catch(PDOException $e){
      echo $e->getMessage();
      return false;
    }
  }

  function getStaffInfo($id){
    try{
      $sql= "SELECT * FROM staffs a INNER JOIN departments b
      ON a.department_id = b.department_id
      WHERE stf_id = :id";
      $stmt=$this->db->prepare($sql);
      $stmt->bindParam(":id",$id);
      $stmt->execute();
      $result=$stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
    }catch(PDOException $e){
      echo $e->getMessage();
      return false;
    }
  }
}

?>