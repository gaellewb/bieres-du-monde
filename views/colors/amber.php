<?php
// Variables qui renvoient au header.php et qui définient le titre et la description de la page
$titlePage = "Nos ambrées | SBDM"; 
$descriptionPage = "Découvrez toutes nos bières ambrées.";
// Inclusion du fichier header.php
require 'app/header.php';
?>

<div class="container">

    <h1>Découvrez nos ambrées :</h1>

    <table class="table">
        <thead class="thead">
            <tr class="text-center">
            <!-- En-têtes des colonnes -->
                <th scope="col">N° bière</th>
                <th scope="col">Nom bière</th>
                <th scope="col">Type</th>
            </tr>
        </thead>

        <tbody>
        <!-- Boucle pour chaque bière ambrée dans la variable $amberBeers qui vient de la méthode getAmber, découpage du tablau $amberBeers en ligne $amberBeer -->
        <?php foreach ($amberBeers as $amberBeer): ?>
            <tr class="text-center">
                <!-- Affiche la valeur dans une cellule de tableau -->
                <?= "<td>".$amberBeer['ID_ARTICLE']."</td>" ?>
                <?= "<td>".$amberBeer['NOM_ARTICLE']."</td>" ?>
                <?= "<td>".$amberBeer['NOM_TYPE']."</td>" ?>
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