<?php include '../pages/header.php'; ?>

<?php 
if (ISSET($_POST['substu'])) {
  


  $class      = $_POST['stuclass'];
  $stunames   = $_POST['stunames'];
  $sturegno   = $_POST['sturegno'];
  // $stupic     = $_POST['stupic'];

  $temp = explode(".", $_FILES["stupic"]["name"]);
  $newfilename = round(microtime(true)) . '.' . end($temp);

  $query = mysqli_query($db,"INSERT into students Values(NULL,'$sturegno','$stunames','$class','$newfilename')");
  if ($query) {
    move_uploaded_file($_FILES["stupic"]["tmp_name"], "../../assets/all/info/sjitc/" . $newfilename);
    echo "<script>alert('Student inserted successfully')</script>";
  }



}
 ?>

<?php 
  $abbre = $_GET['class'];
  $sql = mysqli_query($db,"SELECT * FROM classes WHERE abbreviation = '$abbre'");
        while ($row = mysqli_fetch_assoc($sql)) {
          $cid = $row['classid'];
          // echo $cid;
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
        <h4 class="modal-title">Add new Student</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form" action="" method="POST" enctype="multipart/form-data">
          <div class="form-group row none">
            <label class="col-md-3">Class:</label>
            <input type="text" placeholder="regno..." value="<?=$cid;?>" name="stuclass" class="form-control col-md-8">
          </div>
          <div class="form-group row">
            <label class="col-md-3">Regno:</label>
            <input type="text" placeholder="regno..." name="sturegno" class="form-control col-md-8">
          </div>
          <div class="form-group row">
            <label class="col-md-3">Names:</label>
            <input type="text" placeholder="Names..." name="stunames" class="form-control col-md-8">
          </div>
          <div class="form-group row">
            <label class="col-md-3">Photo:</label>

            <label for="upload-photo" name="" class="btn btn-system btn-sm">Browse...</label>
            <input type="file" name="stupic" id="upload-photo" />


            <!-- <input type="file" placeholder="Names..." name="photo" class="form-control col-md-8"> -->
          </div>
          <!-- <div class="form-group row">
            <label class="col-md-3">Gender:</label>
            <select class="form-control col-md-8">
              <option disabled selected>---select---</option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </div> 
          <div class="form-group row">
            <label class="col-md-3">DOB:</label>
            <input type="date" placeholder="Names..." name="dob" class="form-control col-md-8">
          </div>-->
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
      <h5 style="color: #fff;">Students</h5>
      <div class="table-menu">
        <a href="card.php?c=<?=$cid?>" target="_blank" class="btn btn-warning btn-sm">Print</a>&nbsp;&nbsp;&nbsp;

  <?php 
  if ($abbre == 'All') { ?>
  <?php 
    }else{?>
        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">New</button>&nbsp;&nbsp;&nbsp;
  <?php   }?>
        <a href="#.php" onclick="return confirm('Are you sure you want to delete all students')" target="_blank" class="btn btn-danger btn-sm">Clear</a>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-hover table-striped" id="dt">
        <thead>
          <th>Photo</th>
          <th>RegNo</th>
          <th>Names</th>
          <!-- <th>Gender</th> -->
          <th>Class</th>
          <th>Action</th>
        </thead>
        <tbody>
          <?php 
  $abbre = $_GET['class'];

  if ($abbre == 'All') {
    $sql = mysqli_query($db,"SELECT *,classes.abbreviation FROM students join classes on students.stu_class = classes.classid");
  }else{
    $sql = mysqli_query($db,"SELECT *,classes.abbreviation FROM students join classes on students.stu_class = classes.classid WHERE students.stu_class = '$cid'");
  }
  
        while ($row = mysqli_fetch_assoc($sql)) {
 ?>
            <tr style="padding-bottom: 1px;">
              <td><img src="../../assets/all/info/sjitc/<?=$row['stu_pic']?>" style="width: 30px;height: 30px;"></td>
              <td><?=$row['stu_regno']?></td>
              <td><?=$row['stu_names']?></td>
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