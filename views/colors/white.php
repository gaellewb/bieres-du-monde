<?php
// Variables qui renvoient au header.php et qui définient le titre et la description de la page
$titlePage = "Nos blanches | SBDM";
$descriptionPage = "Découvrez toutes nos bières blanches.";
// Inclusion du fichier header.php
require 'app/header.php';
?>

<div class="container">

<h1>Découvrez nos blanches :</h1>

    <table class="table">
        <thead class="thead-">
            <tr class="text-center">
                <!-- En-têtes des colonnes -->
                <th scope="col">N° bière</th>
                <th scope="col">Nom bière</th>
                <th scope="col">Type</th>
            </tr>
        </thead>

        <tbody>
        <!-- Boucle pour chaque bière blanche dans la variable $whiteBeers qui vient de la méthode getWhite, découpage du tablau $whiteBeers en ligne $whiteBeer -->
        <?php foreach ($whiteBeers as $whiteBeer): ?>     
            <tr class="text-center">
                <!-- Affiche la valeur dans une cellule de tableau -->
                <?= "<td>".$whiteBeer['ID_ARTICLE']."</td>" ?>
                <?= "<td>".$whiteBeer['NOM_ARTICLE']."</td>" ?>
                <?= "<td>".$whiteBeer['NOM_TYPE']."</td>" ?>
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