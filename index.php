<!DOCTYPE html>
<html>
<head><head>
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css">
          body {
				background: url(img/wunder.jpg) no-repeat fixed;
				-webkit-background-size: 100% 100%;
				-moz-background-size: 100% 100%;
				-o-background-size: 100% 100%;
				background-size: 100% 100%;
				}
				{
					background-repeat: no-repeat;
					padding-top: 30px;
					padding-bottom: 20px;
				}
        </style>
        <link href="bootstrap-responsive.css" rel="stylesheet">
	<title>APLIKASI CUACA</title>
	<h2 align=center>Perkiraan Cuaca</h2><br>

</head>
<body>
<div style="text-align:center;">
    <h3>WAKTU SEKARANG :
    <h2 id="clock">
</div>
<link type="text/css" rel="stylesheet" href="style.css" /><center>
<div id="clockDisplay" class="clockStyle">

</div>
<script type="text/javascript" language="javascript">
function renderTime(){
 var currentTime = new Date();
 var h = currentTime.getHours();
 var m = currentTime.getMinutes();
 var s = currentTime.getSeconds();
 if (h == 0){
  h = 24;
   }
   if (h < 10){
    h = "0" + h;
    }
    if (m < 10){
    m = "0" + m;
    }
    if (s < 10){
    s = "0" + s;
    }
 var myClock = document.getElementById('clockDisplay');
 myClock.textContent = h + ":" + m + ":" + s + "";    
 setTimeout ('renderTime()',1000);
 }
 renderTime();
</script>
<?php
    require 'isi.php';
?>
			<br><br><br>
		<div align=center>
			<form action="kondisi.php" method="get">
			<input class="btnForm" type="submit" name="submit" value="Perkiraan cuaca 9 hari ke depan"/>
			</form>
</div>
</body>
</html>