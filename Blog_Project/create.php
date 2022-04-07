//connecting to database file
<?php
    include "logic.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Blog Project</title>

    <style>
footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 60px;
  background-color: #f5f5f5;
}
</style>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <form class="form-inline" margin-left="20px">
    <a href="index.php" class="btn btn-outline-dark">Dashboard</a>
   
  </form>
  </nav>
    <div class="container mt-5">
        <form method="POST">
        <input type="text" name="title" placeholder="Blog Title" class="form-control bg-dark text-white my-3 text-center">
        <textarea name="content" class="form-control bg-dark text-white my-3"></textarea>
        <button name="new_post" class="btn btn-dark">Add Post</button>

        </form>
    </div>

    <footer class="bg-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" >Blog-Project</a>
  </div>
</footer>
</body>
</html>
