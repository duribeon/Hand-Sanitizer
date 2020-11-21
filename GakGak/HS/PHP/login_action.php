<?php
        session_start();
        $connect = mysqli_connect("localhost","root","gakgak","gakgak") or die("fail");
        $id=$_POST['userID'];
        $password=$_POST['password'];
        //아이디가 있는지 검사
        $query = "SELECT * FROM HS_admin WHERE id='$id'";
        $result = $connect->query($query);
        if(mysqli_num_rows($result)==1) {
                $row=mysqli_fetch_assoc($result);
                if($row['pw']==$password){
                        $_SESSION['id']=$id;
                        if(isset($_SESSION['id'])){
                        ?>      <script>
                                        alert('<?php echo $id ?> 님 로그인 되었습니다.'); //로그인 되었습니다를 띄우고
                                        location.replace("full_list.html");
                                </script>
<?php
                        }
                        else{
                                echo "session fail"; //세션아이디가 정의되지 않았음
                        }
                }
                else { // ID와 세트인 PASSWORD가 입력된 비밀번호와 같지 않음
        ?>              <script>
                                alert("아이디 혹은 비밀번호가 잘못되었습니다."); //비밀번호와 아이디가 맞지않음
                                history.back(); //이전페이지로 돌아가기
                        </script>
        <?php
                }