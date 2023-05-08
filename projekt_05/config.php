<?php

$config->server_name = 'localhost:80';
$config->server_url = 'http://'.$config->server_name;
$config->app_root = '/projekt_04';
$config->action_root = $config->app_root.'/ctrl.php?action=';

$config->action_url = $config->server_url.$config->action_root;
$config->app_url = $config->server_url.$config->app_root;
$config->root_path = dirname(__FILE__);

?>