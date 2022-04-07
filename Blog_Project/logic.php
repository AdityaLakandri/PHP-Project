<?php
$servername="localhost:3306";
$username="root";
$password="";
$db="blog";
$conn = mysqli_connect($servername, $username, $password,$db);

if(!$conn){
    echo "Connection Failed";
}

$sql="SELECT * FROM data";
$query=mysqli_query($conn,$sql);

if(isset($_REQUEST["new_post"])){
    $title=$_REQUEST["title"];
    $content=$_REQUEST["content"];

    $sql="INSERT INTO data(title,content) VALUES('$title','$content')";
    mysqli_query($conn,$sql);

    header("Location:index.php?info=post_added_successfully");
    exit();
}

if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];

    $sql="SELECT * FROM data WHERE id = $id";
    $query=mysqli_query($conn,$sql);
}

if(isset($_REQUEST['update'])){
    $id=$_REQUEST['id'];
    $title=$_REQUEST["title"];
    $content=$_REQUEST["content"];

    $sql="UPDATE data SET title='$title', content='$content' WHERE id=$id";
    mysqli_query($conn,$sql);
    header("Location:index.php?info=updated_successfully");
    exit();
}

if(isset($_REQUEST['delete'])){
    $id=$_REQUEST['id'];

    $sql="DELETE FROM data WHERE id = $id";
    $query=mysqli_query($conn,$sql);

    header("Location:index.php?info=deleted_successfully");
    exit();
}

?>

