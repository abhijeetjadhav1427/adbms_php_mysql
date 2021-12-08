<?php
    include "dbconnection.php";
    
    $ptitle = mysqli_real_escape_string($conn,$_POST['post_title']);
    $pdescr = mysqli_real_escape_string($conn,$_POST['postdesc']);

    $code = null;
    $lang = null;
    
    $lang = $_POST['language'];
        
    $code = mysqli_real_escape_string($conn, $_POST['postdesc1']);

    $sql = "INSERT INTO post(title, descr, code_col,lang)
        VALUES('{$ptitle}', '{$pdescr}', '{$code}', '{$lang}');";
    // mysqli_query($conn,$sql);
    
    // $sql = "UPDATE category SET post = post + 1 WHERE category_id = $pcategory;";
    $rr = mysqli_query($conn,$sql);
    if($rr>0){
        header("Location: http://localhost/blog/");
    }
    else{
        echo "Some Problem has occured";
    }