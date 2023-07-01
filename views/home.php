<?php
$titlePage = "Accueil | SBDM";
$descriptionPage = "Chaque jour, décourvez 5 bières différentes pour un tour du monde avec le Salon des Bières du Monde";
require 'app/header.php';
?>

<div class="container">

<h1>Découvrez 5 bières au hasard :</h1>

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

</div>

<?php
require 'app/footer.php';
?>