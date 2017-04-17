<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/forecast10day/q/ID/mugassari.json");   
    $json_a = json_decode($json_string);
	
	$json_string2 = file_get_contents("http://api.wunderground.com/api/47e99b8cefa287ed/conditions/q/ID/mugassari.json");   
    $json_b = json_decode($json_string2);

	
	$hari3 = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"monthname"};
    $hari1 = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"day"};
    $hari2 = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"year"};
	$hari4 = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"conditions"};
	$periode = $json_a->{"forecast"}->{"txt_forecast"}->forecastday[0]->{'period'};
    $png = $json_a->{'forecast'}->{'txt_forecast'}->forecastday[0]->{'icon'};
    $hari   = $json_a->{'forecast'}->{'txt_forecast'}->forecastday[0]->{'title'};
	$infor  = $json_a->{'forecast'}->{'txt_forecast'}->forecastday[0]->{'fcttext_metric'};
	$daerah  = $json_b->{'current_observation'}->{'display_location'}->{'city'};
	$Kota  = $json_b->{'current_observation'}->{'observation_location'}->{'city'};
    $Neg  = $json_b->{'current_observation'}->{'display_location'}->{'state_name'};
	
	$haria = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"date"}->{"weekday"};
	$tgla = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"date"}->{"day"};
	$blna = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"date"}->{"monthname"};
	$thna = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"date"}->{"year"};
	$cona = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"conditions"};
	$pnga = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"icon"};
	$sha = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"high"}->{"celsius"};
	$sla = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"low"}->{"celsius"};
	
	$harib = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"date"}->{"weekday"};
	$tglb = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"date"}->{"day"};
	$blnb = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"date"}->{"monthname"};
	$thnb = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"date"}->{"year"};
	$conb = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"conditions"};
	$pngb = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"icon"};
	$shb = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"high"}->{"celsius"};
	$slb = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"low"}->{"celsius"};
	
	$haric = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"date"}->{"weekday"};
	$tglc = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"date"}->{"day"};
	$blnc = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"date"}->{"monthname"};
	$thnc = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"date"}->{"year"};
	$conc = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"conditions"};
	$pngc = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"icon"};
	$shc = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"high"}->{"celsius"};
	$slc = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"low"}->{"celsius"};
	
	$harid = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"date"}->{"weekday"};
	$tgld = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"date"}->{"day"};
	$blnd = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"date"}->{"monthname"};
	$thnd = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"date"}->{"year"};
	$cond = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"conditions"};
	$pngd = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"icon"};
	$shd = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"high"}->{"celsius"};
	$sld = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"low"}->{"celsius"};
	
	$harie = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"date"}->{"weekday"};
	$tgle = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"date"}->{"day"};
	$blne = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"date"}->{"monthname"};
	$thne = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"date"}->{"year"};
	$cone = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"conditions"};
	$pnge = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"icon"};
	$she= $json_a->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"high"}->{"celsius"};
	$sle = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"low"}->{"celsius"};
	
	$harif = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"date"}->{"weekday"};
	$tglf = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"date"}->{"day"};
	$blnf = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"date"}->{"monthname"};
	$thnf = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"date"}->{"year"};
	$conf = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"conditions"};
	$pngf = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"icon"};
	$shf = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"high"}->{"celsius"};
	$slf = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"low"}->{"celsius"};
	
	$harig = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[7]->{"date"}->{"weekday"};
	$tglg = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[7]->{"date"}->{"day"};
	$blng = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[7]->{"date"}->{"monthname"};
	$thng = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[7]->{"date"}->{"year"};
	$cong = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[7]->{"conditions"};
	$pngg = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[7]->{"icon"};
	$shg = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[7]->{"high"}->{"celsius"};
	$slg = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[7]->{"low"}->{"celsius"};
	
	$harih = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[8]->{"date"}->{"weekday"};
	$tglh = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[8]->{"date"}->{"day"};
	$blnh = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[8]->{"date"}->{"monthname"};
	$thnh = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[8]->{"date"}->{"year"};
	$conh = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[8]->{"conditions"};
	$pngh = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[8]->{"icon"};
	$shh = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[8]->{"high"}->{"celsius"};
	$slh = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[8]->{"low"}->{"celsius"};
	
	$harii = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[9]->{"date"}->{"weekday"};
	$tgli = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[9]->{"date"}->{"day"};
	$blni = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[9]->{"date"}->{"monthname"};
	$thni = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[9]->{"date"}->{"year"};
	$coni = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[9]->{"conditions"};
	$pngi = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[9]->{"icon"};
	$shi = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[9]->{"high"}->{"celsius"};
	$sli = $json_a->{"forecast"}->{"simpleforecast"}->forecastday[9]->{"low"}->{"celsius"};
?>