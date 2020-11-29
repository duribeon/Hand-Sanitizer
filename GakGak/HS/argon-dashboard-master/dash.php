

<?php 
session_start();
$sess_id=$_SESSION['id'];
$connect = mysqli_connect("localhost","root","system","gakgak") or die("fail");
#echo $_SESSION['id'];
#$sess_id='duri';
$query = "SELECT * FROM HS_list WHERE USERID='$sess_id' AND LOCATION='446' ORDER BY CHKDATE DESC LIMIT 1";
$result=$connect->query($query);
while ($row = mysqli_fetch_array($result)){
#                      echo $row['REMAINDER'] . " " . $row['INIT_WEIGHT'];

                       $remain=$row['REMAINDER'];
                       $init=$row['INIT_WEIGHT'];

                       $building=$row['BUILDING'];
                       $loc=$row['LOCATION'];

                       $org=$row['ORGAN'];
                       $chg=$row['chg'];
                       
                      }

 $per=(int)$remain/(int)$init *100;

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.ico" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
  <style type="text/css">

   @import url('https://fonts.googleapis.com/css?family=Calligraffitti|Open+Sans');


   .sea {
    border: 3px;
  }

  .LightWaves {
    animation: lightwaves 4s infinite;
    position: relative;
  }

  @keyframes lightwaves {
    0%,100% { transform: translate(0,0); }
    25%     { transform: translate(5px,5px); transform: scale(1.05); }
    50%     { transform: translate(25px, 5px); }
    75%     { transform: translate(12px,10px); transform: scale(1.05); }
  }

</style>



</head>

<body>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6" style="background-color: darkturquoise;">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">

              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="../HTML/full_list.php"style="color: darkturquoise;"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#" style="color: darkturquoise;">Dashboards</a></li>
                  <!--<li class="breadcrumb-item active" aria-current="page">Default</li> -->
                </ol>
              </nav>
            </div>

          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Building</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $building;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-building"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Location</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $loc;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-square-pin"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Percent</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $per;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">바꾼횟수</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $chg;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-check-bold"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->

    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                  <h5 class="h3 mb-0">Total orders</h5>
                </div>
              </div>
            </div>
            <div class="card-body">

<div class="container" style="width: 600px; text-align: center;">
  <img src ="base.jpg" style="transform:translatex(-50px);width: 239px; height: 350px;">

  <svg class="sea"style="transform:translateX(-246px);"version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="143px"
  height="340px" viewBox="30 <?php echo -120+2.2*$per;?> 170 360" style="enable-background:new 0 0 800 400;"> <!--물통 -90~ 190-->

  <style>
    <![CDATA[
  .st3{fill:url(#SVGID_3_);}
  ]]>
</style>


  <g id="LightWaves" class="LightWaves">
    <g>
      <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="400.0005" y1="600" x2="400.0005" y2="214.3545">
         
        

        <?php
        if($per>70){
	echo ' 
        <stop  offset="0" style="stop-color:#008cff"/>
        <stop  offset="0.1643" style="stop-color:#008cff"/>
        <stop  offset="0.3574" style="stop-color:#209bff"/>
        <stop  offset="0.5431" style="stop-color:#7cacf5"/>
        <stop  offset="0.7168" style="stop-color:#99ceff"/>
        <stop  offset="0.874" style="stop-color:#a9e7ff"/>
        <stop  offset="1" style="stop-color:#dceff1"/>';
}
else if(20<$per){
echo '
        <stop  offset="0" style="stop-color:#008cff"/>
        <stop  offset="0.1643" style="stop-color:#008cff"/>
        <stop  offset="0.3574" style="stop-color:#f3c78e"/>
        <stop  offset="0.5431" style="stop-color:#fc8f8f"/>
        <stop  offset="0.7168" style="stop-color:#fa945a"/>
        <stop  offset="0.874" style="stop-color:#ff7300"/>
        <stop  offset="1" style="stop-color:#dceff1"/>';
}
else{
       echo'
        <stop  offset="0" style="stop-color:#008cff"/>
        <stop  offset="0.1643" style="stop-color:#008cff"/>
        <stop  offset="0.3574" style="stop-color:#fd7575"/>
        <stop  offset="0.5431" style="stop-color:#fc8f8f"/>
        <stop  offset="0.7168" style="stop-color:#ff4242"/>
        <stop  offset="0.874" style="stop-color:#ff0000"/>
        <stop  offset="1" style="stop-color:#dceff1"/>';}
 ?>
      </linearGradient>
      <path class="st3" d="M750.9,229.8c-14.8-7.9-28.7-15.4-57.2-15.4c-28.5,0-42.4,7.5-57.2,15.4c-15.2,8.2-30.9,16.6-62.1,16.6
      s-46.9-8.4-62.1-16.6c-14.8-7.9-28.7-15.4-57.2-15.4c-28.5,0-42.4,7.5-57.2,15.4c-15.2,8.2-30.9,16.6-62.1,16.6
      c-31.2,0-46.9-8.4-62.1-16.6c-14.8-7.9-28.7-15.4-57.2-15.4c-28.5,0-42.4,7.5-57.2,15.4c-15.2,8.2-30.9,16.6-62.1,16.6
      c-31.2,0-46.9-8.4-62.1-16.6c-14.8-7.9-28.9-15.4-57.3-15.4c-16.9,0-28.8,2.6-38.8,6.4V600h922V237c-12,5.3-26,9.4-47.8,9.4
      C782.1,246.4,766.1,237.9,750.9,229.8z"/>
    </g>
  </g>
  </svg>
</div>




          </div>
        </div>
      </div>
      <div class="col-xl-8">
        <div class="card bg-default">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
              <div class="col">
                <h6 class="text-light text-uppercase ls-1 mb-1">Overview</h6>
                <h5 class="h3 text-white mb-0">Sales value</h5>
              </div>
              <div class="col">
                <ul class="nav nav-pills justify-content-end">
                  <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">

                  </li>
                  <li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                    
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="card-body">
            <!-- Chart -->
            <div class="chart">
              <!-- Chart wrapper -->
              <canvas id="chart-sales-dark" class="chart-canvas"></canvas>
            </div>
          </div>


        </div>
      </div>




    </div>
    <div class="row">
      <div class="col-xl-8">

<!--
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Page visits</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
            </div>
          </div>
        -->

      </div>


      <div class="col-xl-4">

      </div>

    </div>
    <!-- Footer -->
    <footer class="footer pt-0">

    </footer>
  </div>
</div>


<!-- Argon Scripts -->




<!-- Core -->
<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/js-cookie/js.cookie.js"></script>
<script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
<!-- Argon JS -->
<script src="assets/js/argon.js?v=1.2.0"></script>


</body>

</html>
