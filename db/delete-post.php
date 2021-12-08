<?php
    include "dbconnection.php";
    $postid = $_GET['post'];

    $sql = "DELETE FROM post WHERE id = {$postid};";
    $result = mysqli_multi_query($conn,$sql) or die("problem");
    header("Location: http://localhost/blog/");