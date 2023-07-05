<?php
// Variables qui renvoient au header.php et qui définient le titre et la description de la page
$titlePage = "Nos brunes | SBDM";
$descriptionPage = "Découvrez toutes nos bières brunes.";
// Inclusion du fichier header.php
require 'app/header.php';
?>

<div class="container">

    <h1>Découvrez nos brunes :</h1>

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
        <!-- Boucle pour chaque bière brune dans la variable $brownBeers qui vient de la méthode getBrown, découpage du tablau $brownBeers en ligne $brownBeer -->
        <?php foreach ($brownBeers as $brownBeer): ?>
            <tr class="text-center">
                <?= "<td>".$brownBeer['ID_ARTICLE']."</td>" ?>
                <?= "<td>".$brownBeer['NOM_ARTICLE']."</td>" ?>
                <?= "<td>".$brownBeer['NOM_TYPE']."</td>" ?>
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