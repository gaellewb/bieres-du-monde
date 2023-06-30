<?php
$titlePage = "Nos couleurs | SBDM";
$descriptionPage = "Découvrez toutes nos bières blanches.";
require 'app/header.php';
?>

<div class="container">

<h1>Découvrez nos blanches :</h1>

<table class="table">
    <thead class="thead-">
        <tr>
            <th scope="col">N° bière</th>
            <th scope="col">Nom bière</th>
            <th scope="col">Type</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($whiteBeers as $whiteBeer): ?>
    
    <tr>
        <?= "<td>".$whiteBeer['ID_ARTICLE']."</td>" ?>
        <?= "<td>".$whiteBeer['NOM_ARTICLE']."</td>" ?>
        <?= "<td>".$whiteBeer['NOM_TYPE']."</td>" ?>
    </tr>
    <?php endforeach ?>
    </tbody>

</table>

</div>

<?php
require 'app/footer.php';
?>