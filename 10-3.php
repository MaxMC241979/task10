<form action="1.php" method="post">

	введите дату рождения в формате мм.гг: <input type="text" name="date_r" /><br />
		
	<input type="submit" value="Узнать знак зодиака" />
	
</form>


<?php

$date_r=$_POST['date_r'];
 
if (isset($_REQUEST['date_r'])) {
    $date_r = explode('.', $_REQUEST['date_r']);
    $dateStr = $date_r[1].$date_r[0];
    if ($dateStr >= '0321' and $dateStr <= '0419') {
        $sing = 'Овен';
    }
    if ($dateStr >= '0420' and $dateStr <= '0520') {
        $sing = 'Телец';
    }
    if ($dateStr >= '0521' and $dateStr <= '0620') {
        $sing = 'Близнецы';
    }
    if ($dateStr >= '0621' and $dateStr <= '0722') {
        $sing = 'Рак';
    }
    if ($dateStr >= '0723' and $dateStr <= '0822') {
        $sing = 'Лев';
    }
    if ($dateStr >= '0823' and $dateStr <= '0922') {
        $sing = 'Дева';
    }
    if ($dateStr >= '0923' and $dateStr <= '1022') {
        $sing = 'Весы';
    }
    if ($dateStr >= '1023' and $dateStr <= '1121') {
        $sing = 'Скорпион';
    }
    if ($dateStr >= '1122' and $dateStr <= '1221') {
        $sing = 'Стрелец';
    }
    if (($dateStr >= '1222' and $dateStr <= '1231') or ($dateStr >= '0101' and $dateStr <= '0119')) {
        $sing = 'Козерог';
    }
    if ($dateStr >= '0120' and $dateStr <= '0218') {
        $sing = 'Водолей';
    }
    if ($dateStr >= '0219' and $dateStr <= '0320') {
        $sing = 'Рыбы';
    }
}

$ip=$_SERVER['REMOTE_ADDR'];

$fopen  =  fopen('my_form_reports.txt', 'a+');

fputs ($fopen, $sing);
fclose ($fopen); 

echo $sing;

?>






