<?php

// Tema1
// Array Left rotation
$array = [1, 2, 3, 4, 5];
$n = 3;

for($i = 0; $i < $n; $i++){
    $first = $array[0];
    for($j = 0; $j < count($array)-1; $j++){
        $array[$j] = $array[$j+1];
    }
    $array[$j] = $first;
}

for ($i = 0; $i < count($array); $i++) {
    print($array[$i] . " ");
}

/****************************************************************** */


// Find certain item in array
$array = [1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89];

$count = 0;

foreach ($array as $item) {
  if ($item === 1) {
    $count++;
    break;
  }
}

print_r($count);

/****************************************************************** */

//Array item occurency
$array = [1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89];

$count = [];

foreach ($array as $value) {
  if (isset($count[$value])) {
    $count[$value] = $count[$value] + 1;
  } else {
    $count[$value] = 1;
  }
}

print_r($count);

/****************************************************************** */

// Reverse array
$array = [1, 2, 3, 4, 5];

$size = sizeof($array);

for($i = $size-1; $i >= 0; $i--){
    echo $array[$i];
}


?>