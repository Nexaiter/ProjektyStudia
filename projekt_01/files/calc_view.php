<?php 
require_once dirname(__FILE__) .'/../config.php';?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkuejtor</title>
</head>
<body style="background-color:Maroon;">
   
    <center>
        <div style = "background-color: Khaki; width:400px; text-align: center;border-radius: 50px">
        <form action="<?php print(_APP_URL);?>/files/calc.php" method="post">

            Proszę wpisać wartości a, b, c do obliczenia delty: <br />

            <label for="id_a">Liczba a:</label>
            <input id="id_a" type="text" name="a" value="<?php if(isset($a)) print($a); ?>" /><br />
        
            <label for="id_b">Liczba b:</label>
            <input id="id_b" type="text" name="b" value="<?php if(isset($b)) print($b); ?>" /><br />
            
            <label for="id_c">Liczba c:</label>
            <input id="id_c" type="text" name="c" value="<?php if(isset($c)) print($c); ?>" /><br />

            <input type="submit" value="Oblicz deltę" />

        </form>

        <?php  
        //Wyświetlanie errorów
        if(isset($errors)){
            foreach ($errors as $key => $msg){
                echo '<li>'.$msg.'</li>';
            }
            echo '</ol>';
        }
        //Wyświetlanie wyników
            ?>
            <center>
                <div style = "background-color: BlanchedAlmond;border-radius: 60px;width:300px;">
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
            </center>
        </div>
    </center>
</body>
</html>


