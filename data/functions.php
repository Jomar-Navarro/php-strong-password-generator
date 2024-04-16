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

$passwordGen = '';
$error = '';
if (isset($_POST['passwordLength'])) {
  $passwordLength = $_POST['passwordLength'];
  if ($passwordLength < 6) {
    $error = 'Errore! La password deve essere almeno di 6 caratteri!!';
  } else {
    $passwordGen = passwordGenerator($passwordLength);
  }
}
