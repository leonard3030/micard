<?php include '../pages/header.php'; ?>

    <title>Mischool | Students</title>
<section class="content-section row">
  <div class="col-md-1"></div>
  <div class="card col-md-10 card-info">
    <div class="card-header bg-info row">
      <h5 style="color: #fff;">Choose class</h5>
      <div class="table-menu">
      </div>
    </div>
    <div class="card-body">
      <form action="stu.php" class="form-inline" method="GET">
      	<label>Class:&nbsp;&nbsp;</label>
        <select class="form-control" name="class">
          <option>All</option>
        <?php 
        $sql = mysqli_query($db,"SELECT * FROM classes");
        while ($row = mysqli_fetch_assoc($sql)) {?>
       
          <option><?=$row['abbreviation']?></option>
          <!-- <option>L3 CAP</option> -->

           <?php } ?>

        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="submit" value="submit" class="btn btn-system">
      </form>
    </div>
    </div>
  </div>
</section>
<?php include '../pages/footer.php'; ?>