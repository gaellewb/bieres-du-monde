<?php
$titlePage = "Nos couleurs | SBDM";
$descriptionPage = "Découvrez toutes nos bières blondes.";
require 'app/header.php';
?>

<div class="container">

<h1>Découvrez nos blondes :</h1>

<table class="table">
    <thead class="thead-">
        <tr class="text-center">
            <th scope="col">N° bière</th>
            <th scope="col">Nom bière</th>
            <th scope="col">Type</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($blondBeers as $blondBeer): ?>
    
    <tr class="text-center">
        <?= "<td>".$blondBeer['ID_ARTICLE']."</td>" ?>
        <?= "<td>".$blondBeer['NOM_ARTICLE']."</td>" ?>
        <?= "<td>".$blondBeer['NOM_TYPE']."</td>" ?>
    </tr>
    <?php endforeach ?>
    </tbody>

</table>

</div>

<?php
require 'app/footer.php';
?>