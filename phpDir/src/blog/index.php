<?php require "config.php"; ?>

<?php
  if (isset($_POST['submit'])) {
    $text = $_POST['text'];

    //Validate the form
    if ($text) {
    // echo $text;
    } else {
      echo "Username and password fields cannot be blank";
    }

    // Add data into todo database
    $add = "INSERT INTO blogTable(text)";
    $add .= "VALUES ('$text')";
    $added = mysqli_query($conn, $add);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Blog</title>
</head>

<body>
  <h1>PHP Blog list</h1>
  <form action="index.php" method="post">
    
  
    <!-- Input for title -->
    <label for="title"> </label>
    <input type="text" name="title">

    <!-- Input for content -->
    <label for="text"> </label>
    <input type="text" name="text">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    // Shows all the data WORKS
    $query = "SELECT * FROM blogTable";
    $result = mysqli_query($conn, $query);
  ?>

  <?php
  //Delete WORKS
  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM blogTable WHERE id=".$id);
    // header("location:index.php");
  } 
  ?>

  <?php
   //Update DONT WORK!!
  if(isset($_GET["edit"])) {
 
    $id = $_GET["id"];
    $text = $_GET["text"];
    // $edit = $_GET["edit"];

    // UPDATE `todoTable` SET `id`='[value-1]',`text`='[value-2]',`dateCreated`='[value-3]',`checked`='[value-4]' WHERE 1

    $update= "UPDATE `blogTable` SET `text` = '$edit' WHERE `todoTable`.`id`=".$id; 
    $result = mysqli_query($conn, $update);
    if (!$result) {
      die('Query update failed');
    }
  }
  ?>


  <div class="blogContainer">
    <?php
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="contentItem">
          <input type="checkbox">
          <h2><?php echo $row['text']?></h2> 
          <br>
          <small>Created: <?php echo $row['dateCreated']?></small>
          <button class="delete" name="delete"> 
					  <a href="index.php?delete=<?php echo $row['id'] ?>">Delete</a> 
          </button>
          <button class="update" name="update"> 
					  <a href="index.php?update=<?php echo $row['id'] ?>">Update</a> 
          </button>

          <!-- <a href="index.php?delete=<
            ?php echo $row['id']?>">Delete</a> -->
      </div>
    <?php } ?>
  </div>


  



</body>

</html>