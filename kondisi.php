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
	<h2 align=center>Kondisi Cuaca 9 Hari Kedepan</h2>
	<h3 align=center>di Mugassari, Semarang Indonesia</h3>

</head>
<body>
<?php
    require '9h.php';
?>
<div align=center>
<?php
		echo "<br>";
		echo "<table width = 900 border =1>
		<tr>
		<td align=center>Day : $haria<br>
		tanggal : $tgla, $blna $thna<br>
		$cona<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pnga . ".gif'><br>
		Suhu Berkisar $sla C- $sha C</td>
		
		<td align=center>Day : $harib<br>
		tanggal : $tglb, $blnb $thnb<br>
		$conb<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngb . ".gif'><br>
		Suhu Berkisar $slb C- $shb C</td>
		
		<td align=center>Day : $haric<br>
		tanggal : $tglc, $blnc $thnc<br>
		$conc<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngc . ".gif'><br>
		Suhu Berkisar $slc C- $shc C</td>
		
		</tr>
		<tr>
		
		<td align=center>Day : $harid<br>
		tanggal : $tgld, $blnd $thnd<br>
		$cond<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngd . ".gif'><br>
		Suhu Berkisar $sld C- $shd C</td>
		
		<td align=center>Day : $harie<br>
		tanggal : $tgle, $blne $thne<br>
		$cone<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pnge . ".gif'><br>
		Suhu Berkisar $sle C- $she C</td>
		
		<td align=center>Day : $harif<br>
		tanggal : $tglf, $blnf $thnf<br>
		$conf<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngf . ".gif'><br>
		Suhu Berkisar $slf C- $shf C</td>
		
		</tr>
		<tr>
		
		<td align=center>Day : $harig<br>
		tanggal : $tglg, $blng $thng<br>
		$cong<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngg . ".gif'><br>
		Suhu Berkisar $slg C- $shg C</td>
		
		<td align=center>Day : $harih<br>
		tanggal : $tglh, $blnh $thnh<br>
		$conh<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngh . ".gif'><br>
		Suhu Berkisar $slh C- $shh C</td>
		
		<td align=center>Day : $harii<br>
		tanggal : $tgli, $blni $thni<br>
		$coni<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngi . ".gif'><br>
		Suhu Berkisar $sli C- $shi C</td>
		
		</tr>
		</table>";
?>
</div>
	</body>


	<br></br>
	<div align=center>
	<form action="Index.php" method="get">
		<input class="btnForm" type="submit" name="submit" value="Selesai"/>
	</form>
	</div>
</html>