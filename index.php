<?php include "header.php"; ?>
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-container">
                        <?php
                            $sql = "SELECT * FROM post
                                    ORDER BY id DESC;";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="inner-content clearfix">
                                        <h3>
                                            <a href='description.php?post=<?php echo $row['id'];?>'>
                                                <?php echo $row['title']; ?>
                                            </a>
                                        </h3>
                                        <div class="post-information">
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <?php echo $row['post_date']; ?>
                                            </span>
                                            <div>
                                                <p>
                                                    <a href='update-post.php?post=<?php echo $row['id'];?>'>
                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                        Update
                                                    </a>
                                                    <a href='db/delete-post.php?post=<?php echo $row['id'];?>'>
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                        Delete
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <p class="description">
                                            <?php echo substr($row['descr'],0,200)."...";?>
                                        </p>
                                        <a class='read-more pull-right' href='description.php?post=<?php echo $row['id'];?>'>read more</a>
                                    </div>                                </div>

                            </div>
                        </div>
                        <?php 
                                }
                            }
                        ?>
                    </div>
                </div>
                
                <div id="sidebar" class="col-md-4">
                    <div class="search-box-container">
                        <form class="search-post" action="add-post.php">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-danger">Add New Post</button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="recent-post-container">
                        <h4>Recent Posts</h4>
                        <?php 
                             $limit = 5;
                             $sql = "SELECT * FROM post 
                                     ORDER BY id DESC LIMIT {$limit};";
                             $result = mysqli_query($conn,$sql);
                             if(mysqli_num_rows($result)>0){
                                 while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <div class="recent-post">
                            <div class="post-content">
                                <h5><a href='description.php?post=<?php echo $row['id'];?>'><?php echo $row['title']; ?></a></h5>
                                <span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <?php 
                                        echo $row['post_date'];
                                    ?>
                                </span>
                                <p class="description">
                                    <?php echo substr($row['descr'],0,60)."...";?>
                                </p>
                                <a class='read-more pull-right' href='description.php?post=<?php echo $row['id'];?>'>read more</a>
                            </div>
                        </div>
                        <?php
                                 }
                             }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php include "footer.php"; ?>