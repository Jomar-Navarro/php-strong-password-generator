<?php
include_once __DIR__ . '/partials/head.php';
include_once __DIR__ . '/partials/header.php';

require __DIR__ . '/data/functions.php';


$passwordGen = '';
$error = '';
if (isset($_POST['passwordLength'])) {
  $passwordLength = $_POST['passwordLength'];
  if ($passwordLength < 6) {
    $error = 'Errore! La password deve essere almeno di 6 caratteri!!';
  } else {
    session_start();
    $passwordGen = passwordGenerator($passwordLength);
    $_SESSION['new_password'] = $passwordGen;
    header('Location: ./success.php');
  }
}
?>

<main>
  <div class="container d-flex justify-content-center">

    <div class="square w-50 p-5">

      <?php if (!empty($error)) : ?>
        <p class="text-danger"><?php echo $error ?></p>
      <?php endif ?>

      <form action="index.php" method="POST">
        <div>
          <div class="pe-3 mb-3 d-flex ">
            <label for="passwordLength" class="form-label w-75">Lunghezza della password:</label>
            <input type="number" class="form-control w-25" id="passwordLength" name="passwordLength">
          </div>
        </div>
        <button type="submit" class="btn btn-success ">Generate Password</button>
      </form>

    </div>

  </div>
</main>


<?php
include_once __DIR__ . '/partials/footer.php';
?>