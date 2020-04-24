<?php
session_start();
$_SESSION['nom'] = null;
session_destroy();
header('Location: redirection tu connais');
?>


<?php
session_start();
if (isset($_SESSION['nom'])) {
  echo 'BOUTON';
} else {
  setcookie("TestCookie", $_SESSION['nom'], time() + 1800);
?>
  <a href="controller/logout.php" type="button" class="btn btn-primary btn-sm">Log out</a>
  <span><?php echo $_SESSION['nom']; ?></span>
<?php } ?>