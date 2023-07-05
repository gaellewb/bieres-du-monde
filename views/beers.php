<?php
// Variables qui renvoient au header.php et qui définient le titre et la description de la page
$titlePage = "Nos bières | SBDM";
$descriptionPage = "Découvrez toutes les bières du Salon des Bières du Monde";
// Inclusion du fichier header.php
require 'app/header.php';
?>

<div class="container">

    <h1>Nos bières</h1>

    <table class="table">
        <thead class="thead-">
            <tr class="text-center">
                <!-- En-têtes des colonnes -->
                <th scope="col">N° bière</th>
                <th scope="col">Nom bière</th>
                <th scope="col">Couleur</th>
                <th scope="col">Type</th>
            </tr>
        </thead>

        <tbody>
        <!-- Boucle pour chaque bière ambrée dans la variable $beers qui vient de la méthode getAllBeers, découpage du tablau $beers en ligne $beer -->

        <?php foreach ($beers as $beer): ?>
            <!-- Affiche la valeur dans une cellule de tableau -->
            <tr class="text-center">
                <?= "<td>". $beer['ID_ARTICLE']."</td>" ?> 
                <?= "<td>". $beer['NOM_ARTICLE']."</td>" ?> 
                <?= "<td>". $beer['NOM_COULEUR']."</td>" ?> 
                <?= "<td>". $beer['NOM_TYPE']."</td>" ?> 
            </tr>
        <!-- Fin de la boucle -->
        <?php endforeach ?>
        </tbody>
    </table>

</div>

<?php
// Inclusion du fichier footer.php
require 'app/footer.php';
?>