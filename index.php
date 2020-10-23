<?php
/*
 * Kod Akbarali tomonidan yozildi
 * Akbarali bilan bog`lanish
 * Email: Akbarali@uzhackersw.uz
 * Website: UzHackerSW.uz
 * Soat 09.40 sana 20-oktyabr 2020 yil
*/
require_once ("yadro.php");
$text = 'Bu shortcodelarga namunalar <br>  Ko`paytirish: {100*5},<br>Q o`shish: : {100+50},<br> Ayrish: : {100-25},<br> Bo`lish: : {100/5},<br>
Foizni aniqlash: : {1000/100*5},';
$textsort = new ShortCode();
$sort = $textsort->textsort($text);
echo $text."<br><br>";
echo $sort;
?>
