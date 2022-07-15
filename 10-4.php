<form action="1.php" method="post">

	введите год в формате гггг: <input type="text" name="yars" /><br />
		
	<input type="submit" value="Узнать год" />
	
</form>


<?php

$yars=$_POST['yars'];

$dd = $yars % 400 == 0 || ($yars % 100 != 0 && ($yars & 3) == 0);
 
if ($dd == 1) {
	$s = "Високосный";
}elseif ($dd == 0){
	$s = "Не високосный";
}


$ip=$_SERVER['REMOTE_ADDR'];

$fopen  =  fopen('my_form_reports.txt', 'a+');

fputs ($fopen, $s);
fclose ($fopen); 

echo $s;

?>






