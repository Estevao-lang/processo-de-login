<?php
session_start();
if (isset($_SESSION['llusuario'])) {
  setcookie('login', -1);
  session_unset();
  session_destroy();
  header("Location: index.php");
} else {
  header("Location: index.php");
}
