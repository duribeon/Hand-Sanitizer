<?php
        @session_start();
        $connect = mysqli_connect("localhost","root","system","manager") or die("fail");
        $id=$_GET['id'];
        $password=$_GET['password'];
        //아이디가 있는지 검사
        $query = "SELECT * FROM manager_data WHERE id='$id'";
        $result = $connect->query($query);
        if(mysqli_num_rows($result)==1) {
                $row=mysqli_fetch_assoc($result);
                if($row['password']==$password){
                        $_SESSION['userid']=$id;
                        if(isset($_SESSION['userid'])){
                        ?>      <script>
                                        alert('<?php echo $id ?> 님 로그인 되었습니다.'); //로그인 되었습니다를 띄우고
                                        location.replace("SHOW_ALL.php");
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
