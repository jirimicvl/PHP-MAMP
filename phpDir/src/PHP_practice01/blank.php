<!-- <form action="blank.php" method="post">
  <label for="username">Username</label>
  <input type="text" name="username">
  <label for="password">Password</label>
  <input type="password" name="password">
  <input type="submit" name="submit">
</form> -->

<form action="blank.php" method="post">
  <label for="username">Username</label>
  <input type="text" name="username">
  <label for="password">Password</label>
  <input type="password" name="password">
  <select name="id">
      <?php
      while($row = mysqli_fetch_assoc($result))
        $id = $row['id'];
        echo "<option value='$id'>$id</option>"
      ?>

      <option value="">1</option>

  </select>

  <input type="submit" name="submit" value="UPDATE">
</form>

<?php include 'db.php'?>

<?php
	

    //   $query = "INSERT INTO Users(username, password)";
    //   $query .= "VALUES ('$user','$pass')";

    $query = "SELECT * FROM Users";

      $result = mysqli_query($connection, $query);

      if (!$result) {
          die('Query failed');
        }
?>

<?php
        if (isset($_POST['submit'])) {
            $user = $_POST['username'];// Get data from username in HTML
            $pass = $_POST['password']; // Get data from password in HTML
            $id     = $_POST['id'];
          }

          $query = "UPDATE Users SET ";
          $query .= "username = '$user',"; 
          $query .= "password = '$pass'"; 
          $query .= "WHERE ID = $id";

          $result = mysqli_query($connection, $query);

        if (!$result) {
          die('Update Query failed');
        }
?>





