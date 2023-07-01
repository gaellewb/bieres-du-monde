<?php
$titlePage = "Nos bières | SBDM";
$descriptionPage = "Découvrez toutes les bières du Salon des Bières du Monde";
require 'app/header.php';
?>

<div class="container">

<h1>Nos bières</h1>

<table class="table">
    <thead class="thead-">
        <tr class="text-center">
            <th scope="col">N° bière</th>
            <th scope="col">Nom bière</th>
            <th scope="col">Couleur</th>
            <th scope="col">Type</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($beers as $beer): ?>

    <tr class="text-center">
        <?= "<td>". $beer['ID_ARTICLE']."</td>" ?> 
        <?= "<td>". $beer['NOM_ARTICLE']."</td>" ?> 
        <?= "<td>". $beer['NOM_COULEUR']."</td>" ?> 
        <?= "<td>". $beer['NOM_TYPE']."</td>" ?> 
    </tr>

    <?php endforeach ?>
    </tbody>

</table>


<?php
require 'app/footer.php';
?>