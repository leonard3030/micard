<?php include '../pages/header.php'; ?>

<?php 
if (ISSET($_POST['substu'])) {
  


  $classname      = $_POST['classname'];
  $abbreviation   = $_POST['abbreviation'];

  $query = mysqli_query($db,"INSERT into classes Values(NULL,'$classname','$abbreviation')");
  if ($query) {
    echo "<script>alert('Class inserted successfully')</script>";
  }



}
 ?>



    <title>Micard | Students</title>
<style type="text/css">
  label {
   cursor: pointer;
   /* Style as you please, it will become the visible UI component. */
}

#upload-photo {
   opacity: 1;
   position: absolute;
   z-index: -1;
}
</style>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add new Class</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form" action="" method="POST">
          <div class="form-group row">
            <label class="col-md-3">Class FullName:</label>
            <input type="text" placeholder="name..." name="classname" class="form-control col-md-8">
          </div>
          <div class="form-group row">
            <label class="col-md-3">Abbreviation:</label>
            <input type="text" placeholder="abbreviation..." name="abbreviation" class="form-control col-md-8">
          </div>
          <div class="form-group">
            <input type="submit" value="submit" name="substu" class="btn btn-system">
          </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>





<section class="content-section row">
  <div class="col-md-1"></div>
  <div class="card col-md-10 card-info">
    <div class="card-header bg-info row">
      <h5 style="color: #fff;">Classes</h5>
      <div class="table-menu">
        <!-- <a href="card.php?c='dsd'" target="_blank" class="btn btn-warning btn-sm">Print</a>&nbsp;&nbsp;&nbsp; -->
        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">New</button>&nbsp;&nbsp;&nbsp;
        <a href="#.php" onclick="return confirm('Are you sure you want to delete all students')" target="_blank" class="btn btn-danger btn-sm">Clear</a>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-hover table-striped" id="dt">
        <thead>
          <th>Class names</th>
          <!-- <th>Gender</th> -->
          <th>Abbreviation</th>
          <th>Action</th>
        </thead>
        <tbody>
          <?php 
  $sql = mysqli_query($db,"SELECT * FROM classes");
        while ($row = mysqli_fetch_assoc($sql)) {
 ?>
            <tr style="padding-bottom: 1px;">
              <td><?=$row['classname']?></td>
              <td><?=$row['abbreviation']?></td>
              <td>
                <div class="dropd">
                  <div class="dropd-content">
                    <!-- <a href="vstu.php" class="btn btn-sm btn-primary">View</a> -->
                    <a href="" class="btn btn-sm btn-info">Edit</a>
                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                  </div>
                  <button class="btn btn-sm dropbtn btn-system">Action</button>
                </div>
              </td>
            </tr>
          <?php }
           ?>
        </tbody>
      </table>
    </div>
    </div>
  </div>
</section>
<?php include '../pages/footer.php'; ?>