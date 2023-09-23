<?php
$title = "Sign in";
require_once "layout/header.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username= $_POST["username"];
  $password= $_POST["password"];
  $new_password=md5($password.$username);

  echo $username."<br>";
  echo $new_password."<br>";
}
?>

    <h1 class="text-center"><?php echo "Sign in" ?></h1>
    <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
      <div class="form-group">
        <label for=username>Username</label>
        <input type="text" 
        name="username" 
        value="<?php if($_SERVER["REQUEST_METHOD"]=="POST") echo $_POST["username"] ?>"
        class="form-control">
      </div>
      <div class="form-group">
        <label for=password>Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <input type="submit" name="submit" value="Sign in" class="btn btn-primary my-3">
    </form>
  </div>
</body>
</html>