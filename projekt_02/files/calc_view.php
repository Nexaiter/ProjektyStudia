<?php 
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkuejtor</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>


<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_URL);?>/files/calc.php" method="post" class="pure-button pure-button-active">
    Proszę wpisać wartości a, b, c do obliczenia delty: <br />

    <fieldset>
            <label for="id_a">Liczba a:</label>
            <input id="id_a" type="text" name="a" value="<?php out($a); ?>" /><br />
        
            <label for="id_b">Liczba b:</label>
            <input id="id_b" type="text" name="b" value="<?php out($b); ?>" /><br />
            
            <label for="id_c">Liczba c:</label>
            <input id="id_c" type="text" name="c" value="<?php out($c); ?>" /><br />
    </fieldset>
    <input type="submit" value="Oblicz deltę" />
</form>

<?php
if(isset($errors)){
    if(count($errors) > 0){
    foreach ($errors as $key => $msg){
        echo '<li>'.$msg.'</li>';
    }
    echo '</ol>';
}
}  
?>
<div style="width:90%; margin: 2em auto;">
<?php 
    if (empty($errors)){
        if(isset($delta)){ 
            echo '<br> Delta: '.$delta.'<br>'; 
        }
        if(isset($x2)){
            echo 'Pierwsze miejsce zerowe: '.$x1.'<br>'; 
            echo 'Drugie miejsce zerowe: '.$x2.'<br><br>'; 
        }
        else if(isset($x1)){
            echo 'Pierwsze miejsce zerowe: '.$x1.'<br><br>';
        }      
    }
?>
</div>


<div style="width:90%; margin: 2em auto;">
    <a href="<?php print(_APP_ROOT);?>/files/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>
                
</div>
   
</body>
</html>


