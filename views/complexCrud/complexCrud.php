<?php
$titlePage = "Le coin des pro | SBDM";
$dscriptionPage = "Complex CRUD";
require 'app/header.php';
?>

<div class="container">

<h1>Tables  biere et marque</h1>
<h2 class="mb-4">Créer, Lire, Modifier, Supprimer</h2>

<!-- FORMULAIRE DE CREATION de bière avec titrage, marque -->
<form action="" method="POST" class="text-end mb-5">   
    <input type="text" id="article"  name="nomBiere" placeholder="Nom article">
    <input type="text" id="titrage"  name="titrage" placeholder="Titrage">   
<!-- 
    <select name='color' id="color">
        <option value="">Choix couleur</option>

        <?php 
        // foreach ($creates as $create): 
        ?>
            <option value="
            <?php 
                // echo $create['ID_COULEUR'] 
                ?>
                ">
                <?php 
                // echo $create['NOM_COULEUR'] 
                ?>
            </option>
        <?php 
        // endforeach 
        ?>
    </select> -->
    <select name="marque" id="marque">
        <option value="">Choix marque</option>
        <?php foreach ($creates as $create): ?>
            <option value="<?php echo $create['ID_MARQUE'] ?>">
                <?php echo $create['NOM_MARQUE'] ?>
            </option>
        <?php endforeach ?>
    </select>

    <button type="submit" class="btn btn-dark ps-5 pe-5" id="submit1" name="submit1"><i class="fa-regular fa-square-plus fa-lg pe-3"></i>Créer un article
    </button>
</form>



<!-- FORMULAIRE DE MODIFICATION -->
<form action="" method="POST" class="text-end mb-5">
    <div class="mb-3">
        <input type="number" name="idBeer" id="idBeer" placeholder="N° bière à modifier">
        <input type="text" name="newNameBeer" id="newNameBeer" placeholder="Nom nouvelle bière">
        
        <input type="number" id="titrage"  name="titrage" value="<?php
        ?>" placeholder="Nouveau titrage">
        
        <select name="marque2" id="marque2">
            <option value="">Changer marque</option>
        <?php foreach ($updates as $update): ?>
            <option value="<?= $update['NOM_MARQUE'] ?>">
                <?= $update['NOM_MARQUE'] ?>
            </option>
        <?php endforeach ?>
    </select>

        <button type="submit" class="btn btn-dark ps-5 pe-5" id="submit2" name="submit2"><i class="fa-regular fa-pen-to-square  pe-3"></i>Modifier la bière
        </button>
    </div>
</form>






<!-- FORMULAIRE DE SUPPRESSION -->
<form action='' method='POST' class="text-end mb-4">
    <div>
        <input type="number" id="toDelete"  name="toDelete" placeholder="N° article">
        <button type="submit" class="btn btn-dark ps-5 pe-5" id="submit" name="submit"> 
            <i class="fa-regular fa-trash-can pe-3"></i>Supprimer une bière
        </button>
    </div>
</form>



<!-- TABLEAU POUR LIRE les info de la function read -->
<table class="table">
    <thead class="thead">
        <tr class="text-center">
            <th scope="col">N° article</th>
            <th scope="col">Nom article</th>
            <th scope="col">Titrage</th>
            <!-- <th scope="col">Couleur</th> -->
            <th scope="col">Marque</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($reads as $read): ?>
        <tr class="text-center">
            <?= "<td>".$read['ID_ARTICLE']."</td>" ?> 
            <?= "<td>".$read['NOM_ARTICLE']."</td>" ?> 
            <?= "<td>".$read['TITRAGE']."</td>" ?> 
            <!-- <?= "<td>".$read['NOM_COULEUR']."</td>" ?>  -->
            <?= "<td>".$read['NOM_MARQUE']."</td>" ?> 
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

</div>

<?php
require 'app/footer.php';
?>