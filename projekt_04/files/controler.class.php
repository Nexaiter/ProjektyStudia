
<?php

require_once $config->root_path.'/libs/Smarty.class.php';
require_once $config->root_path.'/libs/messages.class.php';
require_once $config->root_path.'/files/calcform.class.php';
require_once $config->root_path.'/files/calcresult.class.php';

class CalcControler{

    private $msg;
    private $form;
    private $result;

    public function __construct(){
        $this->msg = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
    }

    public function getParams(){
        $this->form->a = isset($_REQUEST['a']) ? $_REQUEST['a'] : null;
        $this->form->b = isset($_REQUEST['b']) ? $_REQUEST['b'] : null;
        $this->form->c = isset($_REQUEST['c']) ? $_REQUEST['c'] : null;
    }

    public function walidacja(){

        if(! (isset ($this->form->a) && isset ($this->form->b) && isset ($this->form->c))){
            return false;
        }

        if($this->form->a == ""){$this->msg->addError("Nie podano wartości a.");}
        if($this->form->b == ""){$this->msg->addError("Nie podano wartości b.");}
        if($this->form->c == ""){$this->msg->addError("Nie podano wartości c.");}

        if(! $this->msg->isError()){
            if(! is_numeric($this->form->a)) { $this->msg->addError('Wartość a nie jest liczbą.');}
            if(! is_numeric($this->form->b)) { $this->msg->addError('Wartość b nie jest liczbą.');}
            if(! is_numeric($this->form->c)) { $this->msg->addError('Wartość c nie jest liczbą.');}
            return (! $this->msg->isError());
        }        
       
    }

    public function process(){
        $this->getparams();

        if($this->walidacja()){

            $this->form->a = intval($this->form->a);
            $this->form->b = intval($this->form->b);
            $this->form->c = intval($this->form->c);
            $this->msg->addInfo('parametery som omkej');
            
            //operacje
            $this->result->delta = pow($this->form->b,2) - (4*$this->form->a*$this->form->c);
            if($this->result->delta < 0) {
                $this->msg->addError('Delta ujemna');
                return false;
            }
            else if($this->result->delta == 0){
                $this->result->x1 = (-$this->form->b / (2*$this->form->a));
                $this->result->x1 = round($this->result->x1,2);
            }
            else if($this->result->delta > 0){
                $this->result->x1 = (- $this->form->b - (sqrt($this->result->delta)) / (2*$this->form->a));
                $this->result->x1 = round($this->result->x1,2);
                $this->result->x2 = (- $this->form->b + (sqrt($this->result->delta)) / (2*$this->form->a));
                $this->result->x2 = round($this->result->x2,2);
            }
            
            $this->msg->addInfo('Wykonano obliczenia.');
        }
       
        $this->generateView();
    }

    public function generateView(){
		global $config;
		
		$smarty = new Smarty();
		$smarty->assign('config',$config);
		
		$smarty->assign('page_title','Kalkulator delty');
		$smarty->assign('page_description','Liczy on delte');
		$smarty->assign('page_header','Szybko');
				
		$smarty->assign('msg',$this->msg);
		$smarty->assign('form',$this->form);
		$smarty->assign('result',$this->result);
		
		$smarty->display($config->root_path.'/files/calcView.html');
	}   
    
}

?>