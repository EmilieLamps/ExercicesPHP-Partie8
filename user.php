<?php
session_start();
$page = "Exercice 2"; // Définir la variable pour changer le titre !
$message = 'Vous vous appelez toujours' . ' ' .$_SESSION['firstName']. ' ' .$_SESSION['lastName'].'. Vous avez toujours '.$_SESSION['age']. 'ans.';
include 'header.php';
 ?>
<p><?= $message ?></p>
<?php
include 'footer.php';
?>
