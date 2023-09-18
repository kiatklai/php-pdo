<?php
$title = "Register Form";
require_once "layout/header.php";
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
          <select name="department" class="form-control">
            <option value="IT">IT</option>
            <option value="Marketing">Marketing</option>
            <option value="Accounting">Accounting</option>
            <option value="HR">HR</option>
            <option value="Sale">Sale</option>
            <option value="Other">Other</option>
          </select>
      </div>
      <input type="submit" value="Register" class="btn btn-primary my-3">
    </form>
  </div>
</body>
</html>