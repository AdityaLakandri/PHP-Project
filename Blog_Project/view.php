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
  <form class="form-inline">
    <a href="index.php" class="btn btn-outline-dark">Dashboard</a>
   
  </form>
</nav>
    <div class="container mt-5">
        <?php foreach($query as $q){?>
            <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h1><?php echo $q['title'];?></h1>
              
            <div class="d-flex mt-2 justify-content-center align-items-center">
                <a href="edit.php?id=<?php echo $q['id'];?>" class="btn btn-light btn-sm">Edit</a>

                <form method="POST">
                    <input type="text" name="id" value="<?php echo $q["id"];?>" hidden>
                    <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                </form>
            </div>

            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>

        <?php }?>
    
    
    </div>

    <footer class="bg-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" >Blog-Project</a>
  </div>
</footer>

    
    
</body>
</html>