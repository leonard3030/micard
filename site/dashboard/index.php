<?php include '../pages/header.php'; ?>

    <title>MiCard | Dashboard</title>
<section class="content-section row">
  <div class="col-md-2"></div>
  <div class="card col-md-8 card-info">
    <div class="card-header bg-info row">
      <center><h5 style="color: #fff;">Modules</h5></center>
    </div>
    <div class="card-body">
      <div class="dash-widget row" style="display: flex;">
        <div class="dash-item col-md-3">
          <a href="../students/stude.php">
            <div class="dash-icon">
              <img src="<?=$ASSETS?>all/img/students.png">
            </div>
            <div class="dash-txt">
              <h5>Students</h5>
            </div>
          </a>
        </div>
        <div class="dash-item col-md-3">
          <a href="../classes">
            <div class="dash-icon">
              <img src="<?=$ASSETS?>all/img/class.png">
            </div>
            <div class="dash-txt">
              <h5>Classes</h5>
            </div>
          </a>
        </div>
        <div class="dash-item col-md-3">
          <a href="../cards">
            <div class="dash-icon">
              <img src="<?=$ASSETS?>all/img/card.png">
            </div>
            <div class="dash-txt">
              <h5>Cards</h5>
            </div>
          </a>
        </div>
        <div class="dash-item col-md-3">
          <a href="../settings">
            <div class="dash-icon">
              <img src="<?=$ASSETS?>all/img/settings.png">
            </div>
            <div class="dash-txt">
              <h5>Settings</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include '../pages/footer.php'; ?>