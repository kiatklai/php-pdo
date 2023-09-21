<?php
$title= "Edit info";
require_once "db/connect.php";
require_once "layout/header.php";
$result=$controller->getDepartment();

if(!isset($_GET["id"])){
  header("location:index.php");
}else{
  $id=$_GET["id"];
  $stf=$controller->getStaffInfo($id);
}

?>
<h1 class="text-center"><?php echo "Edit Form" ?></h1>
    <form method="POST" action="updateStaff.php">
      <input type="hidden" name="stf_id" value="<?php echo $stf["stf_id"] ?>"/>
      <div class="form-group">
        <label for=fname>Name</label>
        <input type="text" name="fname" class="form-control" value="<?php echo $stf["fname"] ?>">
      </div>
      <div class="form-group">
        <label for=lname>Last name</label>
        <input type="text" name="lname" class="form-control" value="<?php echo $stf["lname"] ?>">
      </div>
      <div class="form-group">
        <label for=salary>Salary</label>
        <input type="text" name="salary" class="form-control" value="<?php echo $stf["salary"] ?>">
      </div>
      <div class="form-group">
        <label for=department>Department</label>
          <select name="department_id" class="form-control">
            <?php while($row=$result->fetch(PDO::FETCH_ASSOC)){?>
              <option 
              <?php if($row["department_id"] == $stf["department_id"]) echo "selected" ?>
              value="<?php echo $row["department_id"] ?>"><?php echo $row["department_name"] ?></option>
            <?php }?>
          </select>
      </div>
      <input type="submit" name="submit" value="Update" class="btn btn-primary my-3">
    </form>
  </div>
</body>
</html>