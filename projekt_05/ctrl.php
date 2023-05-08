<?php
require_once 'init.php';

switch ($action) {
	default : 
		include_once 'app/controllers/controler.class.php';
		$ctrl = new CalcControler();
		$ctrl->generateView();
	break;
	case 'calcCompute' :
		include_once 'app/controllers/controler.class.php';
		$ctrl = new CalcControler();
		$ctrl->process();
	break;
}
