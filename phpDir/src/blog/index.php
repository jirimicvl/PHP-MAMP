<?php 
  require "config.php"; 
  require "submit.php";  
  require "delete.php"; 
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
  <header>
    <h1>Tweeter</h1>
  </header>

  <!-- Input for content -->

 
  <form action="index.php?action=submit" method="post" enctype="multipart/form-data">

    <!-- Input for content -->
    <label for="content"> </label>
    <input type="text" name="content" placeholder="content">

    <label for="uploadFiles"> </label>
    <input type="file" name="uploadFiles" id="fileToUpload">

    <!-- Submit Button -->
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php require "allData.php"; ?>

  <div class="blogContainer">
    <?php
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="contentItem">
          <p><?php echo $row['content']?></p>
          <br>
          <small><?php echo date($row['dateCreated']);?></small>

          <button class="delete" name="delete"> 
					  <a href="index.php?delete=<?php echo $row['id'] ?>">Delete</a> 
          </button>

          <!--
          <small><?php echo date('Y-m-d',strtotime(intval($row['dateCreated'])));?></small>
          <small><?php echo date('h:i:sa', strtotime(intval($row['dateCreated'])));?></small>
          

        
            <button class="update" name="update"> 
              <a href="index.php?update=<?php echo $row['id'] ?>">Update</a> 
            </button>

            <a href="index.php?delete=<
              ?php echo $row['id']?>">Delete</a> 
            
          -->
            
      </div>
    <?php } ?>
  </div>


  


<?php mysqli_close($conn); ?>
</body>

</html>