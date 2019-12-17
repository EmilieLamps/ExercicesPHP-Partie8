<?php
$page = "Exercice 1"; // Définir la variable pour changer le titre !

include 'header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 1</h2>
 <h3 class="text-center pb-5"></h3>
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-5">
            <p>Veuillez entrer vos informations</p>
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label class="userAgent" for="userAgent">User Agent : </label>
                    <input class="form-control" type="text" name="userAgent" id="userAgent" />
                </div>
                <div class="form-group">
                    <label class="IPadress" for="IPadress">Adresse IP : </label>
                    <input class="form-control" type="text" name="IPadress" id="IPadress" />
                </div>
                <div class="form-group">
                    <label class="serverName" for="serverName">Nom du serveur : </label>
                    <input class="form-control" type="text" name="serverName" id="serverName" />
                </div>
                <div class="text-center pt-2">
                    <button class="btn btn-primary mt-3" type="submit" name="submit" id="button">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>
