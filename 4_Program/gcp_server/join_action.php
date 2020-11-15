<?php
        $connect = mysqli_connect("localhost", "root", "system","manager")
or die("fail");
        $id=$_GET['id'];
        $password=$_GET['password'];
        $query = "INSERT INTO manager_data (id, password) values ('$id', '$
password')";
        $result = $connect->query($query);
        if($result) {
        ?>      <script>
                alert('가입 되었습니다.');
                location.replace("./login.php");
                </script>
<?php   }
        else{
?>              <script>
                        alert("fail");
                </script>
<?php   }
        mysqli_close($connect);
?>
