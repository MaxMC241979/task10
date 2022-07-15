<form action="1.php" method="post">

	введите первое число: <input type="text" name="nb1" /><br />
	введите второе число: <input type="text" name="nb2" /><br />
	введите третье число: <input type="text" name="nb3" /><br />
	
	<input type="submit" value="Вычислить" />
	
</form>


<?php

$nb1=$_POST['nb1'];
$nb2=$_POST['nb2'];
$nb3=$_POST['nb3'];

 
if (($nb1*$nb1+$nb2*$nb2)==($nb3*$nb3)) {
	$res = " Это тройка Пифагора ";
	} else if (($nb1*$nb1+$nb3*$nb3)==($nb2*$nb2)) {
		$res = " Это тройка Пифагора ";
	} else if (($nb2*$nb2+$nb3*$nb3)==($nb1*$nb1)) {
		$res = " Это тройка Пифагора ";
	} else{
		$res = " Это НЕ тройка Пифагора ";
	}

$ip=$_SERVER['REMOTE_ADDR'];

$fopen  =  fopen('my_form_reports.txt', 'a+');

fputs ($fopen, $res);
fclose ($fopen);

echo $res;

?>