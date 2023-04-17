<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/libs/Smarty.class.php';


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

//smarty rzeczy jeszcze nie rozumiem

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator delty');
$smarty->assign('page_description','Liczy on delte');
$smarty->assign('page_header','Szybko');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('a',$a);
$smarty->assign('b',$b);
$smarty->assign('c',$c);
$smarty->assign('delta',$delta);
$smarty->assign('x1',$x1);
$smarty->assign('x2',$x2);
$smarty->assign('errors',$errors);

//Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/files/calc.html');
?>