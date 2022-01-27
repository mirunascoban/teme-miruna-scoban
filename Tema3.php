<?php

// Tema3 
// Calculator cu autoloader

spl_autoload_register(function($Calculator){
    require_once $Calculator . '.php' ;
});



// Calculator cu   switch
/*class Calculator{
    public $a, $b, $type ;

    function SetValue($a,$b,$type){
      $this->a = $a;
      $this->b = $b;
      $this->type = $type;

    }

    function GetValue(){
       
        switch ($this->type) {
            case 'addition':
                echo $this->a + $this->b;
                break;
            case 'substraction':
                echo $this->a - $this->b;
                break;
            case 'multiplication':
                echo $this->a * $this->b;
                break;
             case 'divizion':
                echo $this->a / $this->b;
                 break;
        }
      } 
    */

    /*function add(){
        return $this->a + $this->b;
    }

    function substract(){
        return $this->a - $this->b;
    }

    function multiply(){
        return $this->a * $this->b;
    }
    function divide(){
        return $this->a / $this->b;
    }


}  */

$calculator = new Calculator();
 $calculator->SetValue(10,5,'addition');
 $calculator->GetValue();
//echo $calculator->add().'<br/>'.$calculator->substract().'<br/>'.$calculator->multiply().'<br/>'.$calculator->divide(); 
?>