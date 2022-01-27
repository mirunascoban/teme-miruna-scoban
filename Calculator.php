<?php

class Calculator{
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
}




?>