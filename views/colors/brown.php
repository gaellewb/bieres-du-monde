<?php
$titlePage = "Nos couleurs | SBDM";
$descriptionPage = "Découvrez toutes nos bières brunes.";
require 'app/header.php';
?>

<div class="container">

<h1>Découvrez nos brunes :</h1>

<table class="table">
    <thead class="thead-">
        <tr class="text-center">
            <th scope="col">N° bière</th>
            <th scope="col">Nom bière</th>
            <th scope="col">Type</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($brownBeers as $brownBeer): ?>
    
    <tr class="text-center">
        <?= "<td>".$brownBeer['ID_ARTICLE']."</td>" ?>
        <?= "<td>".$brownBeer['NOM_ARTICLE']."</td>" ?>
        <?= "<td>".$brownBeer['NOM_TYPE']."</td>" ?>
    </tr>
    <?php endforeach ?>
    </tbody>

</table>

</div>

<?php
require 'app/footer.php';
?>