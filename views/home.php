<?php
$titlePage = "Accueil | SBDM";
$descriptionPage = "Chaque jour, décourvez 5 bières différentes pour un tour du monde avec le Salon des Bières du Monde";
require 'app/header.php';
?>

<div class="container">

<h1>Découvrez 5 bières au hasard :</h1>

<table class="table">
    <thead class="thead-">
        <tr class="text-center">
            <th scope="col">N° bière</th>
            <th scope="col">Nom bière</th>
            <th scope="col">Couleur</th>
            <th scope="col">Type</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($beers as $beer): ?>

    <tr class="text-center">
        <?= "<td>". $beer['ID_ARTICLE']."</td>" ?> 
        <?= "<td>". $beer['NOM_ARTICLE']."</td>" ?> 
        <?= "<td>". $beer['NOM_COULEUR']."</td>" ?> 
        <?= "<td>". $beer['NOM_TYPE']."</td>" ?> 
    </tr>

    <?php endforeach ?>
    </tbody>
</table>

<?php foreach ($beers as $beer): ?>
<!-- <div class="row"> -->
<!-- <div class="col-4"> -->
<!-- <div class="card-deck">
    <div class="card text-white bg-dark mb-3 text-center"> -->
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <!-- <div class="card-body"> -->
            <!-- <h5 class="card-title">  -->
                <?php
                // echo $beer['NOM_ARTICLE'] 
                ?>
            <!-- </h5> -->
            <!-- <p class="card-text">Bière de caractère, fabrication locale..</p> -->
        </div>
        <!-- <ul class="list-group list-group-flush"> -->
            <!-- <li class="list-group-item"> -->
                <?php 
                // echo "Article n° : ". $beer['ID_ARTICLE'] 
                ?>
            </li>
            <!-- <li class="list-group-item"> -->
                <?php
                // echo "Couleur : ". $beer['NOM_COULEUR'] 
                ?>
            </li>
            <!-- <li class="list-group-item"> -->
                <?php 
                // echo "Type : ". $beer['NOM_TYPE'] 
                ?> 
            </li>
            <!-- <li class="list-group-item">Vestibulum at eros</li> -->
        </ul>
        <!-- <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div> -->
    </div>
</div>
<!-- </div> -->
<?php endforeach ?>




</div>

<?php
require 'app/footer.php';
?>