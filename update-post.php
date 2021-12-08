<?php 
    include "header.php"; 
    include "dbconnection.php";
    $postid = $_GET['post'];
    
?>
<div id="admin-content">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Update Post</h1>
    </div>
    <div class="col-md-offset-3 col-md-6">
        <!-- Form for show edit-->
        <?php 
            
            $sql = "SELECT * FROM post 
                   WHERE post.id = {$postid};";    
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
        ?>
        <form action="db/update-postdb.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <input type="hidden" name="post_id"  class="form-control" value="<?php echo $postid;?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputTile">Title</label>
                <input type="text" name="post_title"  class="form-control" id="exampleInputUsername" value="<?php echo $row['title'];?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea name="postdesc" class="form-control"  required rows="6">
                    <?php echo $row['descr'];?>
                </textarea>
            </div>            
            <div class="form-group">
                <input type="hidden" name="lang_old" value="<?php echo $row['lang'];?>">
                <label for="exampleInputCategory">Language</label>
                <select class="form-control" name="lang">
                    
                    <?php
                        if($row['lang']){
                            echo "<option value=''> Select Language</option>";
                            ?>
                        <option <?php
                            if($row['lang'] == 'PYTHON'){
                                echo "selected";
                            } ?> value = 'PYTHON'>PYTHON</option>
                        <option <?php
                            if($row['lang'] == 'C'){
                                echo "selected";
                            } ?> value = 'C'>C</option>
                        <option <?php
                            if(strtoupper($row['lang']) == 'HTML'){
                                echo "selected";
                            } ?> value = 'HTML'>HTML</option>
                    
                    <?php }
                        else{ ?>
                            <option selected disabled> Select Language</option>
                            <option value = 'PYTHON'>PYTHON</option>
                            <option value = 'C'>C</option>
                            <option value = 'HTML'>HTML</option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Language</label>
                <textarea name="code" class="form-control" rows="5">
                    <?php echo $row['code_col'];?>
                </textarea>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Update" />
        </form>
        <?php 
                }
            }
            else{
                echo "<h2>Result not found</h2>";
            }
        ?>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
