<?php
$titlePage = "Nouvelle Couleur | SBDM";
$dscriptionPage = "Ajouter une couleur.";
require 'app/header.php';
?>

<div class="container">

<h1>CREER UNE COULEUR</h1>

<div class=" bg-light">

<div class="text-center">
<form action="" method="POST">
    <div>
        <label for="newColor" class="lead">Nouvelle couleur :</label>
        <input type="text" id="newColor" name="newColor">
        <input type="submit" id="submit" name="submit "class="btn btn-dark m-4 ps-5 pe-5" value="Créer">
    </div>
</form>
</div>

<div class="container lead text-center mt-4">
    <div class="row">
        <div class="offset-1 col-10 offset-md-3 col-md-6">
            <?php
            if (isset ($newColor)){
                echo "la couleur ".$newColor." a été créée";
            }
            ?>
        </div>
        <div>
            <a href="/TESTecf_sbdm/SimpleCrudController/simpleCrud" class="btn btn-dark m-4 ps-5 pe-5">Retour</a> 
        </div>
                    
    </div>
</div>
    
</div>
<?php
require 'app/footer.php';
?>