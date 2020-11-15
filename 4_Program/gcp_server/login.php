
<!DOCTYPE>

<html>
<head>
        <meta charset='utf-8'>
</head>
<body>
  <h1 align="center">손소독제 관리 프로그램</h1>
  <style>
    * {
      font-size: 25px;
      font-family: Consolas, sans-serif;
    }
  </style>
        <div align='center'>
        <form method='get' action='login_action.php'>
                <p align="center"><label>관리자 ID : <input type="text" name="id"></label></p>
                <p align="center"><label>패스워드 : <input type="password" name="password"></label></p>
                <input type="submit" value="로그인">
        </form>
        <br />
        <button id="join" onclick="location.href='./join.php'">관리자 등록</button>
        </div>
</body>
</html>
