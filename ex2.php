<?php
session_start();
$_SESSION['lastName'] = 'Lamps';
$_SESSION['firstName'] = 'Emilie';
$_SESSION['age'] = 28;
$page = "Exercice 2"; // Définir la variable pour changer le titre !
include 'header.php';
?>
<h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 2</h2>
<h3 class="text-center pb-5"></h3>
<p>Bonjour<?= ' ' . $_SESSION['firstName'] . ' ' . $_SESSION['lastName'] ?>. Vous avez <?= $_SESSION['age'] ?> ans</p>
<div>
    <a title="page user" href="user.php">Cliquez ici</a>
</div>
<?php
include 'footer.php';
?>
