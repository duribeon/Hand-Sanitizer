<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>손소독제 잔량</title>
    <style>
      table
      {
        width: 600px;
      }
      table, th, td
      {
        border: 1px solid #444444;
        border-collapse: collapse;
      }
    </style>
  </head>
  <body>
     <script src="getParam_test.js"></script>
<script>        
 var place=getParam('place');
 document.write("<h1>"+place+"</h1>");
</script>
    <table>
      <thead>
        <tr>
          <th>place</th>
          <th>갱신 시간</th>
          <th>손소독제 잔량</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $db_conn = mysqli_connect('localhost','root', '****', 'HS_db');
          if(mysqli_connect_errno())
          {
           die('Connect Error : '.mysqli_connect_error());
          }
          $place=$_GET['place'];
          $db_sql = "SELECT * FROM HS WHERE place=\"".$place."\" ORDER BY time DESC LIMIT 12;";
          $db_result = mysqli_query( $db_conn, $db_sql);
          while( $db_row = mysqli_fetch_array( $db_result ) )
            {
            echo '<tr><td>'. $db_row['place'].'</td><td>'.$db_row[ 'time' ] . '</td><td>';
            if($db_row['remains']>=50)
              echo '<font color="green">'.$db_row['remains'].'</td></tr>';
            else if($db_row['remains']>10)
              echo '<font color="orange">'.$db_row['remains'].'</td></tr>';
            else
               echo '<font color="red">'.$db_row['remains'].'</td></tr>';
          }
        ?>
      </tbody>
    </table>
    </body>
    </html>
