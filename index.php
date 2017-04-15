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
<div align=left>
<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/forecast10day/q/ID/mugassari.json");   
    $json_a = json_decode($json_string);
	
	$json_string2 = file_get_contents("http://api.wunderground.com/api/47e99b8cefa287ed/conditions/q/ID/mugassari.json");   
    $json_b = json_decode($json_string2);

	$hari3 = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"monthname"};
    $hari1 = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"day"};
    $hari2 = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"year"};
	$hari4 = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"conditions"};;
	$periode = $json_a->{"forecast"}->{"txt_forecast"}->forecastday[0]->{'period'};
    $png = $json_a->{'forecast'}->{'txt_forecast'}->forecastday[0]->{'icon'};
    $hari   = $json_a->{'forecast'}->{'txt_forecast'}->forecastday[0]->{'title'};
	$infor  = $json_a->{'forecast'}->{'txt_forecast'}->forecastday[0]->{'fcttext_metric'};
	$daerah  = $json_b->{'current_observation'}->{'display_location'}->{'city'};
	$Kota  = $json_b->{'current_observation'}->{'observation_location'}->{'city'};
    $Neg  = $json_b->{'current_observation'}->{'display_location'}->{'state_name'};
	
	echo "<h2>Cuaca di ${daerah}, ${Kota} ${Neg} </h2>";
    echo "<br>";
	echo "Day  : ${hari}";
    echo "<br>";
	echo "Tanggal sekarang :${hari1}, ${hari3}  ${hari2}  \n";
	echo "<br>";
	echo " $hari4 \n";
	echo "<br>";
    echo "<img src='http://icons.wxug.com/i/c/k/" . $png . ".gif'><br/>";
	echo "Catatan :<br> ${infor} \n";
	echo "<br>";

?>
</div>
</body>
</html>