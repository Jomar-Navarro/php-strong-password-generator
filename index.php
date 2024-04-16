<?php
include_once __DIR__ . '/partials/head.php';
include_once __DIR__ . '/partials/header.php';

require __DIR__ . '/data/functions.php';

?>

<main>
  <div class="container">
    <?php if (!empty($error)) : ?>
      <div class="text-danger"><?php echo $error ?></div>
    <?php endif ?>
    <form action="index.php" method="POST">
      <div>
        <div class="mb-3">
          <label for="passwordGen" class="form-label">Password</label>
          <input type="text" class="form-control" id="passwordGen" value="<?php echo $passwordGen ?>">
        </div>
        <div class="pe-3 mb-3">
          <label for="passwordLength" class="form-label">Lunghezza della password:</label>
          <input type="number" class="form-control" id="passwordLength" name="passwordLength" min="0" max="20" value="0">
        </div>
      </div>
      <button type="submit" class="btn btn-success ">Generate Password</button>
    </form>
  </div>
</main>


<?php
include_once __DIR__ . '/partials/footer.php';
?>