<?php
// Variables qui renvoient au header.php et qui définient le titre et la description de la page
$titlePage = "Nos blondes | SBDM";
$descriptionPage = "Découvrez toutes nos bières blondes.";
// Inclusion du fichier header.php
require 'app/header.php';
?>

<div class="container">

    <h1>Découvrez nos blondes :</h1>

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
        <!-- Boucle pour chaque bière blonde dans la variable $blondBeers qui vient de la méthode getBlond, découpage du tablau $blondBeers en ligne $blondBeer -->
        <?php foreach ($blondBeers as $blondBeer): ?>        
            <tr class="text-center">
                <!-- Affiche la valeur dans une cellule de tableau -->
                <?= "<td>".$blondBeer['ID_ARTICLE']."</td>" ?>
                <?= "<td>".$blondBeer['NOM_ARTICLE']."</td>" ?>
                <?= "<td>".$blondBeer['NOM_TYPE']."</td>" ?>
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