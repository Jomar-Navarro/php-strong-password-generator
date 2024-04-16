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
?>

<main>
  <div class="container">
    <?php if (!empty($error)) : ?>
      <p class="text-danger"><?php echo $error ?></p>
    <?php endif ?>
    <form action="index.php" method="POST">
      <div class="d-flex">
        <div class="pe-3">
          <label for="passwordLength" class="form-label">Choose the password Length:</label>
          <input type="number" class="form-control" id="passwordLength" name="passwordLength" max="20">
        </div>
        <div class="mb-3">
          <label for="passwordGen" class="form-label">Password</label>
          <input type="text" class="form-control" id="passwordGen" value="<?php echo $passwordGen ?>">
        </div>
      </div>
      <button type="submit" class="btn btn-success ">Generate Password</button>
    </form>
  </div>
</main>


<?php
include_once __DIR__ . '/partials/footer.php';
?>