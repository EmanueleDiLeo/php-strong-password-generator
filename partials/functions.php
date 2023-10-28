<?php

  function checkLeng($number){
    if($number > 7 && $number < 33){
      return true;
    }
    else{
      return false;
    }
  }

  function randomPassword($number){
    $charAll = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789@-_.";
    $password = "";
    for($i = 0; $i < $number; $i++){
      $index = mt_rand(0, strlen($charAll) - 1);
      $password .= $charAll[$index];
    }
    return $password;
  }
?>