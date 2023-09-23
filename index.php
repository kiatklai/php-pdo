<?php
$title = "First Page";
require_once "layout/header.php";
require_once "db/connect.php";
require_once "layout/check_admin.php";
$result=$controller->getStaffs();
$i=1;
?>

    <h1 class="text-center"><?php echo "Staffs Info" ?></h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">First name</th>
          <th scope="col">Last name</th>
          <th scope="col">Salary</th>
          <th scope="col">Department</th>
          <th scope="col">Edit/Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row=$result->fetch(PDO::FETCH_ASSOC)) {?>
          <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $row["fname"] ?></td>
            <td><?php echo $row["lname"] ?></td>
            <td><?php echo number_format($row["salary"]) ?></td>
            <td><?php echo $row["department_name"] ?></td>
            <td>
              <a onclick="return confirm('Do you want to delete?')"
              href="delete.php?id=<?php echo $row["stf_id"] ?>" class="btn btn-danger">Delete</a>
              <a href="editForm.php?id=<?php echo $row["stf_id"] ?>" class="btn btn-warning">Edit</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>