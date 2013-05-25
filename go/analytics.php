<?php
	$domain = xss_cleaner($_POST['dom']);
	$location = xss_cleaner($_POST['loc']);
	$reffer = xss_cleaner($_POST['ref']);
	$osinfo = xss_cleaner($_POST['os']);
	$broinfo = xss_cleaner($_POST['bro']);
	$myFile = "data_analytics.php";
	$fh = fopen($myFile, 'a') or die("can't open file");
	$stringData = "<li>";
	$stringData .= "Domain : ";
	$stringData .= $domain;
	$stringData .= " | URL : ";
	$stringData .= $location;
	$stringData .= " | reffer : ";
	$stringData .= $reffer;
	$stringData .= " | OS : ";
	$stringData .= $osinfo;
	$stringData .= " | BROWSER : ";
	$stringData .= $broinfo;
	$stringData .= " | timestemp : ";
	$stringData .= date("Y-m-d H:i:s",time())."</li>\n";
	echo $stringData;

	fwrite($fh, $stringData);
	fclose($fh);

	function xss_cleaner($input_str) {
	    $return_str = str_replace( array('<','>',"'",'"',')','('), array('&lt;','&gt;','&apos;','&#x22;','&#x29;','&#x28;'), $input_str );
	    $return_str = str_ireplace( '%3Cscript', '', $return_str );
	    return $return_str;
	}

?>
