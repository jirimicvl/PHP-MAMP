<form action="blank.php" method="post">
  <label for="username">Username</label>
  <input type="text" name="username">
  <label for="password">Password</label>
  <input type="password" name="password">
  <input type="submit" name="submit">
</form>

<?php
	if (isset($_POST['submit'])) {
	//   echo "yes, data";
	  $user = $_POST['username'];// Get data from username in HTML
	  $pass = $_POST['password']; // Get data from password in HTML

      $host = "db"; //servername normally localhost
      $dbname = "loginapp"; // database name
      $dbuser = "root"; //  username
      $dbpass= "lionPass"; //userpassword

      // Step 1) PDO 2) MYSQLI
      $connection = new mysqli($host, $dbuser, $dbpass, $dbname);

	  if($connection->connect_error) {
        die("Connection failed" . $connection->error);
      } else {
          echo "Connection ok";
      }
      
      if ($user && $pass) {
	    echo $user . " " . $pass;
	  } else {
	    echo "Username and Password field cannot be blank <br/>";
	  }

      $query = "INSERT INTO Users(username, password)";
      $query .= "VALUES ('$user'),('$pass')";

      $result = mysqli_query($connection, $query);

      if (!$result) {
          die('Query failed');
        } else {
            echo "QUery success";
        }

      
	}
	
?>

