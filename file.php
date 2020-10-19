<?php
function remove_numbers($string) {
    $num = array(0,1,2,3,4,5,6,7,8,9);
    return str_replace($num, null, $string);
}
function jami($row){
	$operator = remove_numbers($row);
	$a = explode($operator, $row);
	$javob = "";
	if($operator == "+"){
		$javob = $a[0] + $a['1'];
	}
	if($operator == "-"){
		$javob = $a[0] - $a['1'];
	}
	if($operator == "*"){
		$javob = $a[0] * $a['1'];
	}
	if($operator === "/"){
		$javob = $a[0] / $a['1'];
	}
	
	return $javob;
}
$text = ' BU esa ko`paytirilishi kerak bo`lgan summa  {56*8}, {8/2}, {8-2}, {8+2} salom yana';

// Поиск и замена.
preg_match_all("|\{(.*)\}|U", $text, $req);
//print_r($req['1']);
if (!empty($req{1})) {
	foreach ($req{1} as $row) {
        $replase = jami($row);
        $text = str_ireplace('{' . $row . '}', $replase, $text);
	}
}

echo $text;

?>
