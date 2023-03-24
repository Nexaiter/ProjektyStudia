<?php
//Kontroler strony kalkulatora delty

//Pobieranie parametrów

$a = $_REQUEST ['a'];
$b = $_REQUEST ['b'];
$c = $_REQUEST ['c'];

//Walidacje

if(! (isset($a) && isset($b) && isset($c))){
	$errors [] = "Błędnie podane dane";
}

//Sprawdzanie czy wartosci podane

if($a == NULL) { $errors [] = 'Nie podano wartości a.'; }
if($b == NULL) { $errors [] = 'Nie podano wartości b.'; }
if($c == NULL) { $errors [] = 'Nie podano wartości c.'; }

//Sprawdzenie czy a,b,c to liczby całkowite gdy brak errorów

if(empty($errors)){

if(! is_numeric($a)) { $errors [] = 'Wartość a nie jest liczbą.'; }
if(! is_numeric($b)) { $errors [] = 'Wartość b nie jest liczbą.'; }
if(! is_numeric($c)) { $errors [] = 'Wartość c nie jest liczbą.'; }
}

//Sprawdzenie czy istnieje dzielenie przez zero
if($a == 0) { $errors [] = 'Nie funkcja kwadratowa/dzielenie przez zero.'; }

//Wykonanie obliczenia delty gdy brak errorów

if(empty($errors)){

//Konwersja parametrów na int dla pewności

	$a = floatval($a);
	$b = floatval($b);
	$c = floatval($c);

	$delta = pow($b,2) - (4*$a*$c);  //delta


	if($delta < 0) 
	{ 
		$errors [] = 'Delta ujemna.'; 
	}
	//Miejsca zerowe
	else if ($delta == 0)
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
include 'calc_view.php';
?>