<?php 
    include 'header.php';
    include 'db/dbconnection.php';
?>
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-container">
                        <?php 
                            $postid = $_GET['post'];
                            $sql = "SELECT * FROM post 
                                    WHERE id={$postid};";
                            $result = mysqli_query($conn,$sql) or die("problem");
                        function fun($text){
                            $text = preg_replace("/\r\n/","<br/>",$text);
                            return $text;
                        }
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <div class="post-content single-post">
                            <h3><?php echo $row['title'];?></h3>
                            <div class="post-information">
                                <span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <?php echo $row['post_date'];?>
                                </span>
                            </div>                            
                            <p class="description">
                                <?php echo $row['descr'];?>
                            </p>
                            <br>
                            <?php 
                                if($row['code_col'] and $row['lang']){
                                    $language_type = array("PYTHON" => "python", "CSS" => "css", "JAVASCRIPT" => "javascript", "C" => "c", "ARDUINO" => "arduino", "PHP" => "php" , "C#" => "csharp", "C++" => "cpp", "DART" => "dart", "DJANGO" => "django", "SWIFT" => "swift", "MATLAB" => "matlab", "KOTLIN" => "kotlin", "JSON" => "json", "JAVA" => "java", "LUA" => "lua", "GIT" => "git", "GameMaker Language" => "gamemakerlanguage");        
                            ?>
                                <pre><code class="language-<?php foreach($language_type as $key=>$val){
                                        if(strtoupper($row['lang']) == $key){
                                            echo $val;
                                        }
                            }?>"><?php echo $row['code_col'];?>
                                </code></pre>
                            <?php } ?>
                            
                        </div>
                        <?php }}?>
                    </div>
                </div>
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
<script src="prism.js"></script>
<?php include 'footer.php'; ?>