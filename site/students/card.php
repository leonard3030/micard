
<?php

$cid = $_GET['c'];

session_start();
include("../../includes/config.php");
require "../../assets/vendor/autoload.php";
// if(!isset($_COOKIE['adminid'])&&$_COOKIE['adminemail']){ header('location:index.php');
//       exit;}
	

$serial="0001";
$Bar = new Picqer\Barcode\BarcodeGeneratorHTML();
$code = $Bar->getBarcode($serial, $Bar::TYPE_CODE_128);
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>card</title>
<?php 
// include_once("db_connect.php");

$sqluse ="SELECT * FROM template";
$retrieve = mysqli_query($db,$sqluse);
    $numb=mysqli_num_rows($retrieve); 
	while($sch = mysqli_fetch_array($retrieve))
    {
      $scho_name  = $sch['scho_name'];
      $scho_moto  = $sch['scho_moto'];
      $scho_tore  = $sch['scho_tore'];
      $scho_logo  = $sch['scho_logo'];
      $pcolor     = $sch['pcolor'];
      $scolor     = $sch['scolor'];
      $validity   = $sch['validity'];
		  $powered    = $sch['powered'];
		                                  }
?>
	<body>
    <?php 
// $idx = $_GET['id'];
      $sqlmember ="SELECT *,classes.abbreviation FROM students join classes on students.stu_class = classes.classid WHERE students.stu_class = '$cid'";
        $retrieve = mysqli_query($db,$sqlmember);
          while($stu = mysqli_fetch_array($retrieve))
                   {
                       $stu_regno = $stu['stu_regno'];
                       $stu_names = $stu['stu_names'];
                       $stu_class = $stu['abbreviation'];
                       $stu_pic   = $stu['stu_pic'];
 ?>



 <style>
  body{
        background:#eee;
      }
#bg {
  width: 1000px;
  height: 450px;
 
  margin:60px;
  float: left; 
    
}

#id {
  width:250px;
  height:450px;
  position:absolute;
  opacity: 0.88;
font-family: sans-serif;

        transition: 0.4s;
        background-color: #FFFFFF;
        border-radius: 2%;
    }

#id::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: url('images/malawi.png');   /*if you want to change the background image replace logo.png*/
  background-repeat:repeat-x;
  background-size: 250px 450px;
  opacity: 0.2;
  z-index: -1;
  text-align:center;
 
}
 .container{
        font-size: 12px;
        font-family: sans-serif;
        
      }
     .id-1{
        transition: 0.4s;
        width:250px;
        height:450px;
        background: #FFFFFF;
        text-align:center;
        font-size: 16px;
        font-family: sans-serif;
        float: left;
        margin:auto;        
        margin-left:270px;
        border-radius:2%;

        
      }
      .card-front{
        min-width:250px;min-height:390px;width:250px;height:390px;background-color: white; margin-right: 20px;
      }
      .main-div{
        display: flex;
        font-family: sans-serif;
      }
</style>
  </head>




<div class="main-div">
<div class="card widget" style="">
  <div class="card-front" style="box-shadow: 2px 2px 10px 2px;margin: 10px;">
    <div class="card-body" style="">
      
      <center>
        <div class="down" style="width: 250px;height: 183px;background-color: <?=$pcolor?>;">
          <div class="down-top" style="font-family: sans-serif;">
            <h5 style="color:  <?=$scolor?>; font-weight: bolder;padding-top: 10px;height: 33px;"><?=$scho_name?></b></h5>
            <h6 style="margin-top: -20px;color: #fff;height: 10px;"><?=$scho_tore?></h6>
            <img src="../../assets/all/info/logo/<?=$scho_logo?>" style="width: 80px;height: 80px;margin-top: -20px;">
            <h6 style="margin-top: 3px; color: #fee701;letter-spacing: 1px; font-weight: 700;height: 12px;"><?=$scho_moto?></h6>
            <h5 style="margin-top: -19px; color: <?=$pcolor?>;letter-spacing: 1px; font-weight: 700; background-color: <?=$scolor?>;padding: 3px;">STUDENT ID CARD</h5>
          </div>
        </div>
        <div class="card-body">
          <div class="photo-container" style="height: 130px;width: 130px;border: 2px <?=$scolor?> solid;border-radius: 0px 0px 5% 5%;margin-top: -2px;background-color: #fff">
            <img src="../../assets/all/info/sjitc/<?=$stu_pic?>" style="width: 130px;height: 130px;border-radius: 3%;">
            
          </div>
          <div class="card-info">
            <h5 style="margin-top: 5px;font-family: sans-serif;"><b><?=$stu_names?></b></h5>
            <h5 style="margin-top: -20px;"><?=$stu_class?></h5>
            <h5 style="margin-top: -8px;background-color: #1292dd; color: #fee701;padding: 4px"><b>REG. NO: <?=$stu_regno?></b></h5>
          </div>
        </div>
      </center>
    </div>
  </div>
</div>
<?php 
           }     ?>
		<script type="text/javascript">	
 		
 	// window.print();
 </script>
 
   
<div class="card widget" style="font-family: sans-serif;float: left;">
  <div class="card-front" style="margin: 10px;box-shadow: 2px 2px 10px 2px;">
    <div class="card-body" style="">
      
      <center>
        <div class="down" style="width: 250px;height: 183px;">
          <div class="down-top" style="font-family: sans-serif;">
            <h5 style="color: #1292dd; font-weight: bolder;padding-top: 10px;"><?=$scho_name?></b></h5>
            <h6 style="margin-top: -20px;">(SJITC - NYAMIRAMBO)</b></h6>
            <p style="font-size: 14px;padding: 5px;"><small>This Card is the property of the school. If lost and found, please return it to SJITC or contact the address below:</small></p>
          </div>
        </div>
        <div class="card-body">
          <div class="photo-container">
            <p style="font-size: 15px;margin-top: -30px;"><small>Tel: (+25) 0782306593</small></p>
            <p style="font-size: 15px;margin-top: -10px;"><small>Email: sjitc2010@yahoo.fr</small></p>
            <p style="font-size: 15px;margin-top: -10px;"><small>Website: www.sjitc.ac.rw</small></p>
            <img src="../../assets/all/info/logo/ddd.jpg" style="width: 105px;height: 101px;border-radius: 3%;border-radius: 50%;margin-top: -8px;">
            
          </div>
          <div class="card-info">
            <h5 style="margin-top: 5px; font-weight: 100;">The School's Principal</h5>
            <h5 style="margin-top: -20px;font-family: sans-serif;font-weight: 700;">CARD VALIDITY: <?=$validity?></h5>
            <h5 style="margin-top: -8px;background-color: #1292dd; color: #fff;padding: 4px;letter-spacing: 1px;">POWERED BY <?=$powered?></h5>
          </div>
        </div>
      </center>
    </div>
  </div>
</div>

	</body>
</html>
