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
    <?php if(isset($_REQUEST['info'])){?>
        <?php if($_REQUEST['info']=="post_added_successfully"){?>
            <div class="alert alert-success" role="alert">
                Post has been added successfully.
            </div>
        <?php } else if($_REQUEST['info']=="updated_successfully"){?>
            <div class="alert alert-success" role="alert">
                Post has been updated successfully.
            </div>
        <?php } else if($_REQUEST['info']=="deleted_successfully"){?>
            <div class="alert alert-danger" role="alert">
                Post has been deleted successfully.
            </div>
        <?php } ?>    
    <?php } ?>

        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">Create a new post</a>
    
        </div>
        <div class="row">

        <?php foreach($query as $q){?>
            <div class="col-4 d-flex justify-content-center align-items-center">
                <div class="card text-white bg-dark mt-5">
                   <div class="card-body" style="width:300px">
                        <h5 class="card-title"><?php echo $q['title'];?> </h5>
                        <p class="card-text"><?php echo $q['content'];?></p>
                        <a href="view.php?id=<?php echo $q['id'];?>" class="btn btn-light">Read More<span class="tet-danger">&rarr;</span></a>
                   </div>
                </div>
            </div>
        <?php }?>
        
        </div>
    </div>  
    <footer class="bg-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" >Blog-Project</a>
  </div>
</footer>
</body>
</html>