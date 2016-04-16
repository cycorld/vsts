<?php
	$username = xss_cleaner($_POST['username']);
	$score = xss_cleaner($_POST['score']);



	$myFile = "data.php";
	$fh = fopen($myFile, 'a') or die("can't open file");
	$stringData = "<li>이름 : ".$username." | 점수 : ".$score." / 56 | 시간 : ".date("Y-m-d H:i:s",time())."</li>\n";
	fwrite($fh, $stringData);
	fclose($fh);

	function xss_cleaner($input_str) {
	    $return_str = str_replace( array('<','>',"'",'"',')','('), array('&lt;','&gt;','&apos;','&#x22;','&#x29;','&#x28;'), $input_str );
	    $return_str = str_ireplace( '%3Cscript', '', $return_str );
	    return $return_str;
	}

?>
