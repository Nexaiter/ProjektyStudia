<!DOCTYPE html>
<html xml:lang="pl" lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>
    
<div style="width:90%; margin: 10px auto;">

<form action = " <?php print(_APP_ROOT); ?>/files/security/login.php" method="post" class="pure-form pure-form-stacked">
    <legend>Logowanie</legend>
    <fieldset>
        <label for="id_login">Login:</label>
        <input id="id_login" type="text" name="login" value="<?php out($test['login']); ?>" />
        <label for="id_password">Hasło:</label>
        <input id="id_password" type="password" name="pass" />
    </fieldset>
    <input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
</form>

<?php 
if(isset($errors)){
    if(count($errors) > 0){
        echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
        foreach ($errors as $key => $msg) {
            echo '<li>'.$msg.'</li>';
        }
        echo '</ol>';
    }
}
?>


</body>
</html>