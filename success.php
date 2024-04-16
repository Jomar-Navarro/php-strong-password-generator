<?php
include_once __DIR__ . '/partials/head.php';

session_start();

if (!isset($_SESSION['new_password'])) {
  header('Location: ./index.php');
} else {
  $password = $_SESSION['new_password'];
}

// var_dump($_SESSION['new_password'])
?>

<body class="bg-secondary">
  <div class="container my-5 text-center">
    <h1 class="mb-5">Ecco la tua Password Generata</h1>
    <div class="d-flex justify-content-center">
      <div class="square d-flex align-items-center text-center justify-content-center">
        <h3><?php echo $password; ?></h3>
      </div>
    </div>
  </div>
</body>

</html>