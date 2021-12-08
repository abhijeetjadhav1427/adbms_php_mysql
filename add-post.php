<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h2 class="admin-heading">Add New Post</h2>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="db/add-postdb.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="post_title">Title</label>
                          <input type="text" name="post_title" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1"> Description</label>
                          <textarea name="postdesc" class="form-control" rows="5"  required></textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Language</label>
                          <select name="language" class="form-control">
                            <option selected disabled>Select Language</option>
                              <option value="PYTHON">PYTHON</option>
                              <option value="C">C</option>
                              <option value="HTML">HTML</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Source Code</label>
                          <textarea name="postdesc1" class="form-control" rows="6"></textarea>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>