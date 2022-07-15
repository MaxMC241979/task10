<form action="1.php" method="post">

	введите первое число: <input type="text" name="nb1" /><br />
	введите второе число: <input type="text" name="nb2" /><br />
	
	<input type="submit" value="Вычислить" />
	
</form>


<?php

$nb1=$_POST['nb1'];
$nb2=$_POST['nb2'];
 
$gcd = gmp_gcd($nb1, $nb2);

$ip=$_SERVER['REMOTE_ADDR'];

$fopen  =  fopen('my_form_reports.txt', 'a+');

fputs ($fopen, $gcd);
fclose ($fopen);

echo $gcd;

?>
