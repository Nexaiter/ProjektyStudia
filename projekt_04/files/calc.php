<?php
require_once dirname(__FILE__).'/../config.php';
require_once $config->root_path.'/files/controler.class.php';

$controler = new CalcControler();
$controler->process();
