<?php
include_once "../components/Navbar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meu Blog</title>
  <link rel="icon" type="image/x-icon" href="static/mawizafavicon.jpg" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/index.css" />
</head>

<body>
  <?= Navbar() ?>
  <div class="container" id='write-container'>
    <h1 id="create-post-header" style="color: #053525;">Create Post</h1>
    <form action="./../../api/v1/post/create.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title" style="color: #053525;">Title</label>
        <input type="text" name="title" id="title" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="content" style="color: #053525;">Content</label>
        <textarea name="content" id="content" class="form-control" required></textarea>
      </div>
      <div class="form-group">
        <label for="image" style="color: #053525;">Image</label>
        <input type="file" name="image" id="image" class="form-control-file" required>
      </div>
      <button type="submit" class="btn btn-success" id="create-post-button" style="background-color: #053525; border-color: #053525;">Criar</button>
    </form>
  </div>
</body>


<?php include_once "./../utils/AddScripts.php"; ?>
<script type="module" src="js/create.js"></script>

</html>