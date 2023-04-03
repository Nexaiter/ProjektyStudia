<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/files/security/check.php';


function getParams(&$a,&$b,&$c){
	$a = isset($_REQUEST['a']) ? $_REQUEST['a'] : null;
	$b = isset($_REQUEST['b']) ? $_REQUEST['b'] : null;
	$c = isset($_REQUEST['c']) ? $_REQUEST['c'] : null;
}

function validation(&$a,&$b,&$c,&$errors){
	if(!(isset($a) && isset($b) && isset($c))){
		$errors [] = "Błędnie podane dane";
		return false;
	}

	if($a == NULL) { $errors [] = 'Nie podano wartości a.'; }
	if($b == NULL) { $errors [] = 'Nie podano wartości b.'; }
	if($c == NULL) { $errors [] = 'Nie podano wartości c.'; }

	if(count($errors) > 0) return false;

	if(! is_numeric($a)) { $errors [] = 'Wartość a nie jest liczbą.'; }
	if(! is_numeric($b)) { $errors [] = 'Wartość b nie jest liczbą.'; }
	if(! is_numeric($c)) { $errors [] = 'Wartość c nie jest liczbą.'; }

	if($a == 0) { $errors [] = 'Nie funkcja kwadratowa/dzielenie przez zero.'; }
		
	if(count($errors) > 0) return false;
	else return true;
}

function deltaOperation(&$a,&$b,&$c,&$errors,&$delta,&$x1,&$x2){
	global $role;	

	$a = floatval($a);
	$b = floatval($b);
	$c = floatval($c);

	$delta = pow($b,2) - (4*$a*$c);
	if($delta < 0) {
		$errors [] = 'Delta ujemna.';
		return false;
	}

	else if ($role == 'admin')
	{
		if ($delta == 0)
		{
			$x1 = (-$b / (2*$a));
			$x1 = round($x1, 2);
		}
		else if($delta > 0)
		{
			$x1 = (-$b - (sqrt($delta))) / (2*$a);
			$x1 = round($x1, 2);
			$x2 = (-$b + (sqrt($delta))) / (2*$a);
			$x2 = round($x2, 2);
		}	
		else{ $errors[] = 'Miejsca zerowe tylko dla administratora'; }
	}
} 

$a = null;
$b = null;
$c = null;
$delta = null;
$x1 = null;
$x2 = null;
$errors = array();

getParams($a,$b,$c);
if(validation($a,$b,$c,$errors)){
	deltaOperation($a,$b,$c,$errors,$delta,$x1,$x2);
}

include 'calc_view.php';
?>