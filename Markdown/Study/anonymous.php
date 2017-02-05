<?php

  function funcname($a,$b)
  {
    return $a * $b ."<br>";
  }

  $var = "funcname";

  echo $var(12,21);

  $var = function($d,$e)
  {
    return $d * $e;
  };

  echo $var(32,23);

 ?>
