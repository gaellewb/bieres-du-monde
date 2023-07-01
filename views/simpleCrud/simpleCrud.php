<?php
$titlePage = "Le coin des pro | SBDM";
$dscriptionPage = "Ajouter, modifier, supprimer une couleur.";
require 'app/header.php';
?>

<div class="container">

<h1>A vous de jouer :</h1>

<div class="text-center">
    <a href="/TESTecf_sbdm/CreateColorController/createColor" class="btn btn-dark m-4 ps-5 pe-5"><i class="fa-regular fa-square-plus fa-lg pe-3"></i></i>Ajouter une couleur</a>
</div>

<table class="table">
    <thead class="thead-">
        <tr class="text-center">
            <th scope="col">N° couleur</th>
            <th scope="col">Nom couleur</th>
            <th scope="col">champ modif</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($propertiesColors as $propertiesColor): ?>
        <tr class="text-center">
            <?= "<td>". $propertiesColor['ID_COULEUR']."</td>" ?> 
            <?= "<td>". $propertiesColor['NOM_COULEUR']."</td>" ?> 
            <td><input type="text"></td>
            <td><button class="btn btn-dark" name="updateColor"><i class="fa-regular fa-pen-to-square"></i></button></td>


            <td><a href="controllers/simpleCrud/SimpleCrudController.php"><button class="btn btn-dark" name="deleteColor"> <i class="fa-regular fa-trash-can"></i></button></a></td>


        </tr>
        <?php endforeach ?>
    </tbody>

</table>

<!-- Ajouter une couleur à partir de cette page : -->
<!-- <div class="text-center">
<form action="" method="POST">
    <div>
        <label for="newColor" class="lead">Nouvelle Couleur :</label>
        <input type="text" id="newColor" name="newColor">
        <input type="submit" id="submit" class="btn btn-dark m-4 ps-5 pe-5">
    </div>
</form>
</div> -->

<?php
require 'app/footer.php';
?>