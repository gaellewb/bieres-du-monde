<?php
$titlePage = "Nos couleurs | SBDM";
$descriptionPage = "Découvrez toutes nos bières blondes.";
require 'app/header.php';
?>

<div class="container">

<h1>Découvrez nos blondes :</h1>

<?php 
// var_dump($beersColor) 
?>

<table class="table">
    <thead class="thead-">
        <tr>
            <th scope="col">N° bière</th>
            <th scope="col">Nom bière</th>
            <th scope="col">Type</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($beersColor as $beerColor): ?>
    
    <tr>
        <?= "<td>".$beerColor['ID_ARTICLE']."</td>" ?>
        <?= "<td>".$beerColor['NOM_ARTICLE']."</td>" ?>
        <?= "<td>".$beerColor['NOM_TYPE']."</td>" ?>
    </tr>
    <?php endforeach ?>
    </tbody>

</table>

</div>

<?php
require 'app/footer.php';
?>