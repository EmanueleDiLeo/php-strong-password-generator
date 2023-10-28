<?php

  function checkLeng($number){
    if($number > 7 && $number < 33){
      return true;
    }
    else{
      return false;
    }
  }

  function randomPassword($numder){
    $charAll = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789@-_.,:;";
    $password = "";
    for($i = 0; $i < $number; $i++){
      $index = rand(0, strlen($charAll) - 1);
      $password .= $number[$index];
    }
    return $password;
  }
?>