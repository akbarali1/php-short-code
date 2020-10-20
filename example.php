<?php
/*
 * Kod Akbarali tomonidan yozildi
 * Akbarali bilan bog`lanish
 * Email: Akbarali@uzhackersw.uz
 * Website: UzHackerSW.uz
 * Soat 09.40 sana 20-oktyabr 2020 yil
*/
require_once ("yadro.php");
echo 'Namumaviy matn: <br> BU Shortcodelarga namunalar Ko`paytirish: {100*5},<br> Qo`shish: : {100+50},<br> Ayrish: : {100-25},<br> Bo`lish: : {100/5},<br>
Foizni aniqlash: : {1000/100*5},';
$text = '<br><br>BU Shortcodelarga namunalar <br>  Ko`paytirish: {100*5},<br>Q o`shish: : {100+50},<br> Ayrish: : {100-25},<br> Bo`lish: : {100/5},<br>
Foizni aniqlash: : {1000/100*5},';
preg_match_all("|\{(.*)\}|U", $text, $req);
if (!empty($req{1})) {
    foreach ($req{1} as $row) {
        $Cal = new Field_calculate();
        $replase = $Cal->calculate($row);
        $text = str_ireplace('{' . $row . '}', $replase, $text);
    }
}
echo $text;
?>
