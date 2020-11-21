<?php

        
        $connect = mysqli_connect("localhost", "root", "gakgak","gakgak") or die("fail");
        $userid=$_POST['userID'];
        $passwd=$_POST['password'];
        $email=$_POST['email'];
        $username=$_POST['username'];

        print_r($_POST);


        /*$query = "INSERT INTO HS_admin (USERID,PASSWD,EMAIL,USERNAME) values ($userid, $passwd,$email,$username)";
        $result = $connect->query($query);
        if($result) {
        ?>      <script>
                alert('가입 되었습니다.');
                location.replace("./login.html");
                </script>
<?php   }
        else{
?>              <script>
                        alert("fail");
                </script>
<?php   }
        mysqli_close($connect);*/


?>