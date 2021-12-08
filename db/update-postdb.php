<?php 
    include "dbconnection.php";
    
    $post_id =  $_POST['post_id'];
    $ptitle = mysqli_real_escape_string($conn,$_POST['post_title']);
    $pdescr = mysqli_real_escape_string($conn,$_POST['postdesc']);
    $lang = mysqli_real_escape_string($conn,$_POST['lang']);
    $code = mysqli_real_escape_string($conn,$_POST['code']);
    
    $sql1 = "UPDATE post SET title='{$ptitle}', descr = '{$pdescr}', code_col = '{$code}', lang = '{$lang}' WHERE id = {$post_id};";
    
    $result1 = mysqli_multi_query($conn,$sql1) or die("problem");
    header("Location: http://localhost/blog/");
