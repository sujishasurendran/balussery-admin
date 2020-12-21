<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New adds</h1>
             </div>
             <form  action="save-adds.php" method="POST" enctype="multipart/form-data">
             <div class="form-group">
                          <label for="exampleInputPassword1">add image</label>
                          <input type="file" name="fileToUpload" required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Save" required /></form>
         </div>
      </div>
</div>


