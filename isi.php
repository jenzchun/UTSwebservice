<html>
<head><head>
        <link href="bootstrap-responsive.css" rel="stylesheet">
	<title>APLIKASI CUACA</title>

</head>
<body>

<link type="text/css" rel="stylesheet" href="style.css" /><center>


<div align=center>
<?php
    require '9h.php';
?>
<?php	
	echo "<h2>Cuaca di ${daerah}, ${Kota} ${Neg} </h2>";
    echo "<br>";
	echo "Day  : ${hari}";
    echo "<br>";
	echo "Tanggal sekarang :${hari1}, ${hari3}  ${hari2}  \n";
	echo "<br>";
	echo " ${hari4} \n";
	echo "<br>";
    echo "<img src='http://icons.wxug.com/i/c/k/" . $png . ".gif'><br/>";
	echo "Catatan :<br> ${infor} \n";
	echo "<br>";

?>
			
</div>
</body>
</html>