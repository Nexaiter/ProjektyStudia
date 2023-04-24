<?php
require_once 'config.class.php';

$config = new Config();

$config->root_path = dirname(__FILE__);
$config->server_name = 'localhost:80';
$config->server_url = 'http://'.$config->server_name;
$config->app_root = '/projekt_01';
$config->app_url = $config->server_url.$config->app_root;


?>