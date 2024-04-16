<?php

function passwordGenerator($length)
{
  $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?&%$<>^+-*/()[]{}@#_=';

  $password = '';
  for ($i = 0; $i < $length; $i++) {
    $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
  }

  return $password;
}
