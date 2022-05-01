<?php
  if (isset($_POST['submit'])) {
    $content = $_POST['content'];
    $title = $_POST['title'];

    //Validate the form
    if ($content) {
    // echo $text;
    } else {
      echo "Username and password fields cannot be blank";
    }

    // Add data into todo database
    $add = "INSERT INTO blogTable(title, content)";
    $add .= "VALUES ('$title','$content')";
    $added = mysqli_query($conn, $add);
  }
?>