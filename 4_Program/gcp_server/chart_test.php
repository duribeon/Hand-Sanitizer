<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '****';
  $db = 'HS_db';
  $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
  $place=$_GET['place'];
  $remains = '';
  $time='';
  $sql = "SELECT remains,time FROM HS WHERE place=\"".$place."\" ORDER BY time ASC LIMIT 12;";
  $result = mysqli_query($mysqli, $sql);
  while ($row = mysqli_fetch_array($result))
  {
    $remains = $remains . '"'. $row['remains'].'",';
    $time=$time.'"'.$row['time'].'",';
  }
  $remains = trim($remains,",");
  $time = trim($time,",");
?>
<!DOCTYPE html>
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js">
</script>
    <title>손소독제 잔량</title>
    <style type="text/css">
      body{
        font-family: Arial;
          margin: 80px 100px 10px 100px;
          padding: 0;
          color: white;
          text-align: center;
          background: #555652;
      }
      .container {
        color: #E8E9EB;
        background: #222;
                border: #555652 1px solid;
        padding: 10px;
      }
    </style>
  </head>
  <body>
      <div class="container">
      <h1>손소독제 잔량 변화</h1>
      <canvas id="chart" style="width: 100%; height: 65vh; background: #222; border: 1px solid #555652; margin-top:
 10px;"></canvas>
      <script>
        var ctx = document.getElementById("chart").getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php echo $time ?>],
                datasets: 
                [{
                    label: '잔량',
                    data: [<?php echo $remains ?>],
                    backgroundColor: 'transparent',
                    borderColor:'rgba(255,99,132)',
                    borderWidth: 3
                }]
            },
         
            options: {
                scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
                tooltips:{mode: 'index'},
                legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
            }
        });
      </script>
      </div>
  </body>
</html>
