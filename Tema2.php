<?php

// Tema2 
// Display message
class Person {
  public $name;

  function setName($name) {
    $this->name = $name;
  }
  function getName() {
    return $this->name;
  }
 function hello(string $cineva)
{
  echo 'Hello, my name is '. $cineva ;
}
}

$cineva = new Person();
$cineva->setName('Alex');

 $cineva->hello('Alex');

/****************************************************************** */
// Describe type of vehicles 

class Vehicle {
  public $brand;

  function setName($brand) {
    $this->brand = $brand;
  }

  function start() {
    echo 'engine started';
  }
  
 
}

class Volkswagen Extends Vehicle{
  
}

class Porche Extends Vehicle{
  
}
class Dacia Extends Vehicle{
}
class Ferrari Extends Vehicle{
}
class Lamborghini Extends Vehicle{

}
class AlfaRomeo Extends Vehicle{
}
class Mercedes Extends Vehicle{
}
class Ford Extends Vehicle{
}

/****************************************************************** */
// Calculate Net Salary

class NetSalary{
    public $salary;

    function SetSalary($salary){
      $this->salary = $salary;
    }

    function Calculate(){

      $cass = ($this->salary*10)/100;
      $cas = ($this->salary*25)/100;
      $impozit = ($this->salary*10)/100;
      $mysalary = $this->salary - $cass - $cas - $impozit;

      echo 'Salariul meu net este de '.$mysalary.' lei';
    }
}

$salary = new NetSalary();
$initial_salary = $salary->SetSalary(4500);
$mysalary = $salary->Calculate();

?>