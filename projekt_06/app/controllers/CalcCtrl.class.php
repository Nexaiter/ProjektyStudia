<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl{

private $form;
private $result;

public function __construct(){
    $this->form = new CalcForm();
    $this->result = new CalcResult();
}

public function getParams(){
    $this->form->a = getFromRequest('a');
    $this->form->b = getFromRequest('b');
    $this->form->c = getFromRequest('c');
}

public function validate(){

    if(! (isset ($this->form->a) && isset ($this->form->b) && isset ($this->form->c))){
        return false;
    }

    if($this->form->a == ""){getMessages()->addError("Nie podano wartości a.");}
    if($this->form->b == ""){getMessages()->addError("Nie podano wartości b.");}
    if($this->form->c == ""){getMessages()->addError("Nie podano wartości c.");}

    if(! getMessages()->isError()){
        if(! is_numeric($this->form->a)) { getMessages()->addError('Wartość a nie jest liczbą.');}
        if(! is_numeric($this->form->b)) { getMessages()->addError('Wartość b nie jest liczbą.');}
        if(! is_numeric($this->form->c)) { getMessages()->addError('Wartość c nie jest liczbą.');}
        
    }        
   return (! getMessages()->isError());
}

public function action_calcCompute(){
    $this->getParams();

    if($this->validate()){

        $this->form->a = intval($this->form->a);
        $this->form->b = intval($this->form->b);
        $this->form->c = intval($this->form->c);
        getMessages()->addInfo('parametery som omkej');
        
        //operacje
        $this->result->delta = pow($this->form->b,2) - (4*$this->form->a*$this->form->c);
        if($this->result->delta < 0) {
            getMessages()->addError('Delta ujemna');
            return false;
        }
        else if($this->result->delta == 0){
            if(inRole('admin')){
                $this->result->x1 = (-$this->form->b / (2*$this->form->a));
                $this->result->x1 = round($this->result->x1,2);
            }
            else{getMessages()->addError('Tylko administrator może wykonać tę operację');}
        }
        else if($this->result->delta > 0){
            if(inRole('admin')){
            $this->result->x1 = (- $this->form->b - (sqrt($this->result->delta)) / (2*$this->form->a));
            $this->result->x1 = round($this->result->x1,2);
            $this->result->x2 = (- $this->form->b + (sqrt($this->result->delta)) / (2*$this->form->a));
            $this->result->x2 = round($this->result->x2,2);
            }
            else{getMessages()->addError('Tylko administrator może wykonać tę operację');}
    }
        
        getMessages()->addInfo('Wykonano obliczenia.');
    }
   
    $this->generateView();
}

public function action_calcShow(){
    getMessages()->addInfo('Zaraz obliczysz deltuche');
    $this->generateView();
}

public function generateView(){

    getSmarty()->assign('user',unserialize($_SESSION['user']));
            
    getSmarty()->assign('page_title','Kalkulejtor delty');

    getSmarty()->assign('form',$this->form);
    getSmarty()->assign('res',$this->result);
    
    getSmarty()->display('CalcView.tpl');
}
}
?>