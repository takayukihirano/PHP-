<?php

  echo '演習問題１' . '<br>';
  for ($i = 100; $i >= 1; $i--){
    echo $i . '<br>';
  }

  echo '<br>' . '演習問題２' . '<br>';
  for ($i = 1; $i <= 9; $i++){
    echo $i * 3 . ' ';
  }

  echo '<br>' . '<br>' . '演習問題３' . '<br>';
  for ($i = 1; $i <= 100; ++$i){
    if ($i % 3 === 0 && $i % 5 === 0){
      echo 'FizzBuzz';
    } elseif ($i % 5 === 0){
      echo 'Buzz';
    } elseif ($i % 3 === 0){
      echo 'Fizz';
    } else {
      echo $i;
    }
    echo '<br>';
  }

  echo '<br>' . '演習問題４' . '<br>';
  for ($i = 1; $i <= 100; $i++){
    echo $i. ' ';
    if ($i % 10 === 0){
      echo '<br>';
    }
  }

  echo '<br>' . '演習問題５' . '<br>';
  $alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];
    $i = 0;
    foreach ($alpha as $v) {
    if ($v === 'A') {
        $i++;
      }
    }

  echo '<br>' . '演習問題６' . '<br>';
    $english = 70;
    $math = 70;
    $total = $english + $math;

    if ($english >= 60 && $math >= 60 && $total >= 140) {
        echo '合格';
    } else {
        echo '残念';
    }

  echo '<br>' . '演習問題７' . '<br>';
  for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        $res = $i * $j . ' ';
        echo $res;
    }
    echo '<br>';
    }

  echo '<br>' . '演習問題８' . '<br>';
  $primeNumbers = [];
    for ($i = 2; $i < 100; $i++) {
    for ($j = 2; $j <= $i; $j++) {
        if ($i % $j === 0 && $j < $i) {
            break;
        }

        if ($i === $j) {
            $primeNumbers[] = $i;
        }
    }
}
print_r($primeNumbers);


?>