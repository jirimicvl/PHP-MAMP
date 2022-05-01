<?php require "config.php"; ?>
<?php require "submit.php"; ?>
<?php require "delete.php"; ?>

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
  <form action="index.php?action=submit" method="post">
    
  
    <!-- Input for title -->
    <label for="title"></label>
    <input type="text" name="title" placeholder="title">

    <!-- Input for content -->
    <label for="text"> </label>
    <input type="text" name="content" placeholder="content">

    <!-- Submit Button -->
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php require "allData.php"; ?>

  <div class="blogContainer">
    <?php
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="contentItem">
          <input type="checkbox">
          <h2><?php echo $row['title']?></h2>
          <p><?php echo $row['content']?></p>
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