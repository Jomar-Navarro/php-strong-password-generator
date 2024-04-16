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
  <div class="container my-5">
    <h1>Ecco la tua Password Generata</h1>
    <h3><?php echo $password; ?></h3>
  </div>
</body>

</html>