<?php
$titlePage = "Le coin des pro | SBDM";
$dscriptionPage = "Complex CRUD";
require 'app/header.php';
?>

<div class="container">

<h1>Tables  biere et couleur</h1>
<h2 class="mb-4">Créer, Lire, Modifier, Supprimer</h2>


<form action="" method="POST" class="text-end mb-5">
    
    <input type="text" id="article"  name="article" placeholder="Nom article">

    <input type="number" id="titrage"  name="titrage" placeholder="Titrage">
    

    <select  id="color">
        <option value="">Choix couleur</option>

        <?php foreach ($colors as $color): ?>

            <?php echo "<option name='color' value=".$color['ID_COULEUR'].">".$color['NOM_COULEUR']."</option>" ?>

        <?php endforeach ?>
    </select>


    <select  id="idMarque">
        <option value="">Choix marque</option>

        <?php foreach ($marques as $marque): ?>

            <option name="idMarque" value="<?php echo $marque['ID_MARQUE'] ?>">
                <?php echo $marque['NOM_MARQUE'] ?>
            </option>

        <?php endforeach ?>
    </select>


    <button type="submit" class="btn btn-dark ps-5 pe-5" id="submit" name="submit"><i class="fa-regular fa-square-plus fa-lg pe-3"></i>Créer un article
    </button>
</form>


<table class="table">
    <thead class="thead">
        <tr class="text-center">
            <th scope="col">N° article</th>
            <th scope="col">Nom article</th>
            <th scope="col">Titrage</th>
            <th scope="col">Couleur</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($beersAndColors as $beerAndColor): ?>
        <tr class="text-center">
            <?= "<td>".$beerAndColor['ID_ARTICLE']."</td>" ?> 
            <?= "<td>".$beerAndColor['NOM_ARTICLE']."</td>" ?> 
            <?= "<td>".$beerAndColor['TITRAGE']."</td>" ?> 
            <?= "<td>".$beerAndColor['NOM_COULEUR']."</td>" ?> 
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

















</div>

<?php
require 'app/footer.php';
?>