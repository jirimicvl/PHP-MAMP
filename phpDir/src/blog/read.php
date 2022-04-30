<?php

// Check the MySQL connection status
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
  $query = "SELECT * FROM todoTable";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Reading db records failed');
}
?>

<!-- <?php

while ($row = mysqli_fetch_assoc($result)) {
?>
<pre>
    <?php
    print_r($row);
    ?>
    </pre>
<?php
}
?> 

-->