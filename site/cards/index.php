<?php include '../pages/header.php'; ?>
<title>Micard | info</title>

<?php 
// actions

if (ISSET($_POST['submit_name'])) {
  $data = $_POST['data'];
  $sql = mysqli_query($db,"UPDATE template SET scho_name = '$data'");
  if ($sql) {
    echo "<script>alert('Information updated successfully')</script>";

    echo "<script>window.location.href=''</script>";
  }
}
if (ISSET($_POST['submit_moto'])) {
  $data = $_POST['data'];
  $sql = mysqli_query($db,"UPDATE template SET scho_moto = '$data'");
  if ($sql) {
    echo "<script>alert('Information updated successfully')</script>";

    echo "<script>window.location.href=''</script>";
  }
}
if (ISSET($_POST['submit_tore'])) {
  $data = $_POST['data'];
  $sql = mysqli_query($db,"UPDATE template SET scho_tore = '$data'");
  if ($sql) {
    echo "<script>alert('Information updated successfully')</script>";

    echo "<script>window.location.href=''</script>";
  }
}
if (ISSET($_POST['submit_logo'])) {
  $data = $_POST['data'];
  $sql = mysqli_query($db,"UPDATE template SET scho_logo = '$data'");
  if ($sql) {
    echo "<script>alert('Information updated successfully')</script>";

    echo "<script>window.location.href=''</script>";
  }
}
if (ISSET($_POST['submit_pcolor'])) {
  $data = $_POST['data'];
  $sql = mysqli_query($db,"UPDATE template SET pcolor = '$data'");
  if ($sql) {
    echo "<script>alert('Information updated successfully')</script>";

    echo "<script>window.location.href=''</script>";
  }
}
if (ISSET($_POST['submit_scolor'])) {
  $data = $_POST['data'];
  $sql = mysqli_query($db,"UPDATE template SET scolor = '$data'");
  if ($sql) {
    echo "<script>alert('Information updated successfully')</script>";

    echo "<script>window.location.href=''</script>";
  }
}
if (ISSET($_POST['submit_validity'])) {
  $data = $_POST['data'];
  $sql = mysqli_query($db,"UPDATE template SET validity = '$data'");
  if ($sql) {
    echo "<script>alert('Information updated successfully')</script>";

    echo "<script>window.location.href=''</script>";
  }
}
if (ISSET($_POST['submit_powered'])) {
  $data = $_POST['data'];
  $sql = mysqli_query($db,"UPDATE template SET powered = '$data'");
  if ($sql) {
    echo "<script>alert('Information updated successfully')</script>";

    echo "<script>window.location.href=''</script>";
  }
}
 ?>












<section class="content-section row">
  <div class="col-md-1"></div>
  <div class="card col-md-10 card-info">
    <div class="card-header bg-info row">
      <h5 style="color: #fff;">Manage Card Information</h5>
      <div class="table-menu">
      </div>
    </div>
    <div class="card-body">
      <div class="forms row">
        
      <form class="col-md-3" action="" method="POST">
        <div class="form-group">
          <label>School Name:</label>
          <input type="text" class="form-control" placeholder="school name.." name="data"><br>
          <input class="btn btn-system" type="submit" value="Update" name="submit_name">
        </div>
      </form>
      
      <form class="col-md-3" action="" method="POST">
        <div class="form-group">
          <label>Moto:</label>
          <input type="text" class="form-control" placeholder="school moto.." name="data"><br>
          <input class="btn btn-system" type="submit" value="Update" name="submit_moto">
        </div>
      </form>
      
      <form class="col-md-3" action="" method="POST">
        <div class="form-group">
          <label>Izina ry'ubutore:</label>
          <input type="text" class="form-control" placeholder="Izina ry'ubutore.." name="data"><br>
          <input class="btn btn-system" type="submit" value="Update" name="submit_tore">
        </div>
      </form>
      
      <form class="col-md-3" action="" method="POST">
        <div class="form-group">
          <label>Choose or drop Logo here:</label>
          <input type="file" class="form-control" placeholder="" name="data"><br>
          <input class="btn btn-system" type="submit" value="Update" name="submit_logo">
        </div>
      </form>

      <form class="col-md-3" method="POST" action="">
        <div class="form-group">
          <label>Primary color:</label>
          <input type="color" value="#1292dd" class="form-control" placeholder="Primary color.." name="data"><br>
          <input class="btn btn-system" type="submit" name="submit_pcolor" value="Update">
        </div>
      </form>

      <form class="col-md-3" action="" method="POST">
        <div class="form-group">
          <label>Secondary color:</label>
          <input type="color" class="form-control" value="#fee701" placeholder="Secondary color.." name="data"><br>
          <input class="btn btn-system" type="submit" value="Update" name="submit_scolor">
        </div>
      </form>

      <form class="col-md-3" action="" method="POST">
        <div class="form-group">
          <label>Validity:</label>
          <input type="text" class="form-control" placeholder="Add card validity.." name="data"><br>
          <input class="btn btn-system" type="submit" value="Update" name="submit_validity">
        </div>
      </form>
      
      <form class="col-md-3" action="" method="POST">
        <div class="form-group">
          <label>Powered By:</label>
          <input type="text" class="form-control" placeholder="Powered By.." name="data"><br>
          <input class="btn btn-system" type="submit" value="Update" name="submit_powered">
        </div>
      </form>
      
      

      </div>
    </div>
    </div>
  </div>
</section>
<?php include '../pages/footer.php'; ?>