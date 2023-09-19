<?php

if(!isset($_GET["id"])){
  header("location:index.php");
}else{
  $id=$_GET["id"];
  echo $id;
}

?>