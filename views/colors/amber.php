<?php
$titlePage = "Nos couleurs | SBDM";
$descriptionPage = "Découvrez toutes nos bières ambrées.";
require 'app/header.php';
?>

<div class="container">

<h1 class="">Découvrez nos ambrées :</h1>

<table class="table">
    <thead class="thead-">
        <tr class="text-center">
            <th scope="col">N° bière</th>
            <th scope="col">Nom bière</th>
            <th scope="col">Type</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($amberBeers as $amberBeer): ?>
    
    <tr class="text-center">
        <?= "<td>".$amberBeer['ID_ARTICLE']."</td>" ?>
        <?= "<td>".$amberBeer['NOM_ARTICLE']."</td>" ?>
        <?= "<td>".$amberBeer['NOM_TYPE']."</td>" ?>
    </tr>
    <?php endforeach ?>
    </tbody>

</table>

</div>

<?php
require 'app/footer.php';
?>