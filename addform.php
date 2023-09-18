<?php
$title = "Register Form";
require_once "layout/header.php";
require_once "db/connect.php";
$result=$controller->getDepartment();
?>

    <h1 class="text-center"><?php echo "Register Form" ?></h1>
    <form method="GET" action="showData.php">
      <div class="form-group">
        <label for=fname>Name</label>
        <input type="text" name="fname" class="form-control">
      </div>
      <div class="form-group">
        <label for=lname>Last name</label>
        <input type="text" name="lname" class="form-control">
      </div>
      <div class="form-group">
        <label for=salary>Salary</label>
        <input type="text" name="salary" class="form-control">
      </div>
      <div class="form-group">
        <label for=department>Department</label>
          <select name="department_id" class="form-control">
            <?php while($row=$result->fetch(PDO::FETCH_ASSOC)){?>
              <option value="<?php echo $row["department_id"] ?>"><?php echo $row["department_name"] ?></option>
            <?php }?>
          </select>
      </div>
      <input type="submit" value="Register" class="btn btn-primary my-3">
    </form>
  </div>
</body>
</html>