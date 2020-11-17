
<!doctype html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<title>손소독제 관리 프로그램</title>
	<h2>관리자 : </h2>
	<style>
	* {margin:0;padding:0;}
	.button {
	margin-bottom: 20px;
  width: 200px;
  height: 100px;
  font-family: 'Roboto', sans-serif;
  font-size: 38px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 300;
  color: #41b9fa;;
  background-color: #fff;
  border-style: solid;
  border-color: #41b9fa;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  }

.button:hover {
  background-color: #41b9fa;
  box-shadow: 0px 15px 20px rgba(206, 227, 246, 1);
  color: #fff;
  transform: translateY(-7px);
}
	.section {}
	.section input[id*="slide"] {display:none;}

	.section .slide-wrap {max-width:1200px;margin:0 auto;}
	.section .slidelist {white-space:nowrap;font-size:0;overflow:hidden;}
	.section .slidelist > li {display:inline-block;vertical-align:middle;width:100%;transition:all .5s;}
	.section .slidelist > li > a {display:block;position:relative;}
	.section .slidelist > li > a img {width:400%;}
	.section .slidelist label {position:absolute;z-index:10;top:50%;transform:translateY(-50%);padding:50px;cursor:pointer;}
	.section .slidelist .left {left:1px;background:url('./left.png') center center /  100% no-repeat;}
	.section .slidelist .right {right:1px;background:url('./right.png') center center / 100% no-repeat;}
	.section .slidelist .textbox {position:absolute;z-index:1;top:50%;left:50%;transform:translate(-50%,-50%);line-height:1.6;text-align:center;}

	.section .slidelist .textbox h3 {font-size:50px;color:##41b9fa;;opacity:0;transform:translateY(30px);transition:all .5s;}
	.section .slidelist .textbox p {font-size:24px;color:##41b9fa;;opacity:0;transform:translateY(30px);transition:all .5s;}

	.section input[id="slide01"]:checked ~ .slide-wrap .slidelist > li {transform:translateX(0%);}
	.section input[id="slide02"]:checked ~ .slide-wrap .slidelist > li {transform:translateX(-100%);}
	.section input[id="slide03"]:checked ~ .slide-wrap .slidelist > li {transform:translateX(-200%);}

	.section input[id="slide01"]:checked ~ .slide-wrap li:nth-child(1) .textbox h3 {opacity:1;transform:translateY(0);transition-delay:.2s;}
	.section input[id="slide01"]:checked ~ .slide-wrap li:nth-child(1) .textbox p {opacity:1;transform:translateY(0);transition-delay:.4s;}
	.section input[id="slide02"]:checked ~ .slide-wrap li:nth-child(2) .textbox h3 {opacity:1;transform:translateY(0);transition-delay:.2s;}
	.section input[id="slide02"]:checked ~ .slide-wrap li:nth-child(2) .textbox p {opacity:1;transform:translateY(0);transition-delay:.4s;}
	.section input[id="slide03"]:checked ~ .slide-wrap li:nth-child(3) .textbox h3 {opacity:1;transform:translateY(0);transition-delay:.2s;}
	.section input[id="slide03"]:checked ~ .slide-wrap li:nth-child(3) .textbox p {opacity:1;transform:translateY(0);transition-delay:.4s;}
	</style>
</head>
<body>


<div class="section" >
	<input type="radio" name="slide" id="slide01" checked>
	<input type="radio" name="slide" id="slide02">
	<input type="radio" name="slide" id="slide03">
	<div  class="slide-wrap">
		<ul style="overflow-y:scroll;" class="slidelist">
			<li>
				<a>
					<label for="slide03" class="left" width:10%;></label>
					<div class="textbox">
						<h1 style="margin-bottom:30px;"><p style="font-size:60px;" align="center">충무관</p></h1>
								<p align="center" ><input type="button" class="button" value="1층" onclick="location.href='detail.php?place=CH101'"></p>
								<p align="center"><input type="button" class="button" value="2층" onclick="location.href='detail.php?place=CH201'"></p>
								<p align="center"><input type="button" class="button" value="3층" onclick="location.href='detail.php?place=CH301'"></p>
								<p align="center"><input type="button" class="button" value="4층" onclick="location.href='detail.php?place=CH401'"></p>
								<p align="center"><input type="button" class="button" value="5층" onclick="location.href='chart/chart_test.php?place=CH501'"></p>

					</div>
					<img src="./back.png">
					<label for="slide02" class="right"></label>
				</a>
			</li>
			<li>
				<a>
					<label for="slide01" class="left"></label>
					<div class="textbox">
						<h1 style="margin-bottom:30px;"><p style="font-size:60px;" align="center">광개토관</p></h1>
								<p align="center" ><input type="button" class="button" value="1층" onclick="location.href='HS_show_place.php?place=Gwang101'"></p>
								<p align="center"><input type="button" class="button" value="2층" onclick="location.href='detail.php?place=GW201'"></p>
								<p align="center"><input type="button" class="button" value="3층" onclick="location.href='detail.php?place=GW301'"></p>
								<p align="center"><input type="button" class="button" value="4층" onclick="location.href='detail.php?place=GW401'"></p>
								<p align="center"><input type="button" class="button" value="5층" onclick="location.href='detail.php?place=GW501'"></p>
					</div>
					<img src="./back.png">
					<label for="slide03" class="right"></label>
				</a>
			</li>
			<li>
				<a>
					<label for="slide02" class="left"></label>
					<div class="textbox">
						<h1 style="margin-bottom:30px;"><p style="font-size:60px;" align="center">AI센터</p></h1>
								<p align="center" ><input type="button" class="button" value="1층" onclick="location.href='detail.php?place=AI101'"></p>
								<p align="center"><input type="button" class="button" value="2층" onclick="location.href='detail.php?place=AI201'"></p>
								<p align="center"><input type="button" class="button" value="3층" onclick="location.href='detail.php?place=AI301'"></p>
								<p align="center"><input type="button" class="button" value="4층" onclick="location.href='detail.php?place=AI401'"></p>
								<p align="center"><input type="button" class="button" value="5층" onclick="location.href='detail.php?place=AI501'"></p>
					</div>
					<img src="./back.png">
					<label for="slide01" class="right"></label>
				</a>
			</li>
		</ul>
	</div>
</div>


</body>
</html>
