<?php
include_once __DIR__ . '/partials/head.php';
include_once __DIR__ . '/partials/header.php';

function passwordGenerator($length)
{
  $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?&%$<>^+-*/()[]{}@#_=';

  $password = '';
  for ($i = 0; $i < $length; $i++) {
    $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
  }

  return $password;
}
?>

<main>
  <div class="container">
    <form action="index.php" method="POST">
      <div class="d-flex">
        <div class="mb-3 mx-2">
          <label for="passwordLength" class="form-label">Length:</label>
          <input type="number" class="form-control" id="passwordLength" name="passwordLength">
        </div>
        <div class="mb-3">
          <label for="passwordGen" class="form-label">Password</label>
          <input type="text" class="form-control" id="passwordGen" value="">
        </div>
      </div>
      <button type="submit" class="btn btn-success ">Generate Password</button>
    </form>
  </div>
</main>


<?php
include_once __DIR__ . '/partials/footer.php';
?>