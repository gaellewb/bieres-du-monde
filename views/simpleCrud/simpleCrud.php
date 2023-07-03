<?php
$titlePage = "Le coin des pro | SBDM";
$dscriptionPage = "Ajouter, modifier, supprimer une couleur.";
require 'app/header.php';
?>

<div class="container">

<h1 class="mb-4">Table Couleur</h1>
<h2>Créer, Lire, Modifier, Supprimer</h2>

<!-- FORMULAIRE DE CREATION -->
<form action='' method='POST' class="text-end mb-4">
    <div>
        <input type="text" id="newColor"  name="newColor" placeholder="Nom couleur">
        <button type="submit" class="btn btn-dark ps-5 pe-5" id="submit" name="submit"><i class="fa-regular fa-square-plus fa-lg pe-3"></i>Créer une couleur
        </button>
    </div>
</form>


<!-- FORMULAIRE DE MODIFICATION -->
<form action="" method="POST" class="text-end mb-4">
    <div class="mb-3">
        <input type="text" name="oldColor" id="oldColor" placeholder="Nom ancienne couleur">

        <input type="text" name="newName" id="newName" placeholder="Nom nouvelle couleur">

        <button type="submit" class="btn btn-dark ps-5 pe-5" id="submit2" name="submit"><i class="fa-regular fa-pen-to-square  pe-3"></i>Modifier la couleur
        </button>
    </div>
</form>





<!-- FORMULAIRE POUR MODIFIER -->
<!-- <form action='updateColor' method='POST' class="text-center mb-5">
    <div>
        <input type="number" id="idToUpdate"  name="idToUpdate" placeholder="N° couleur">
        <button type="submit" class="btn btn-dark ps-5 pe-5" id="submit1" name="submit"><i class="fa-regular fa-pen-to-square  pe-3"></i>N° couleur à modifier</button>
    </div>
</form>



<form action='' method='POST' class="text-center mb-5">
<div>
    <?php
    // echo $idToUpdate
    ?>
    <input type="number" id="nameToUpdate"  name="nameToUpdate" value="<?php
    // echo $updateColors['NOM_COULEUR']
    ?>">
    <button type="submit" class="btn btn-dark ps-5 pe-5" id="submit2" name="submit"> 
        <i class="fa-regular fa-pen-to-square  pe-3"></i>Modifier la couleur
    </button>
</div>
</form> -->





<!-- FORMULAIRE DE SUPPRESSION -->
<form action='' method='POST' class="text-end mb-4">
    <div>
        <!-- <label for="toDelete" class="lead">Supprimer</label> -->
        <input type="number" id="toDelete"  name="toDelete" placeholder="N° couleur">
        <!-- <input type="submit" class="btn btn-dark m-4 ps-5 pe-5" id="submit" name="submit" value="Supprimer"> -->
        <button type="submit" class="btn btn-dark ps-5 pe-5" id="submit" name="submit"> 
            <i class="fa-regular fa-trash-can pe-3"></i>Supprimer une couleur
        </button>
    </div>
</form>

<!-- TABLEAU PROPRIETES COULEUR -->
<table class="table">
    <thead class="thead">
        <tr class="text-center">
            <th scope="col">N° couleur</th>
            <th scope="col">Couleur</th>
            <th scope="col">Modification nom couleur</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($propertiesColors as $propertiesColor): ?>
        <tr class="text-center">
            <?= "<td>".$propertiesColor['ID_COULEUR']."</td>" ?> 
            <form action="" method="POST">
                <?= "<td>".$propertiesColor['NOM_COULEUR']."</td>" ?> 
            </form>
            <!-- Champ de MODIFICATION, création d'un formulaire pour pouvoir récupérer le  nom_couleur-->
            <td>
                <form action="" method="POST"> 

                    <input type="hidden" name="IdColor" value="<?= $propertiesColor['ID_COULEUR'] ?>">

                    <?php 
                    // echo $propertiesColor['ID_COULEUR'] 
                    ?>

                    <input type="text" name="updateColors" value="<?= $propertiesColor['NOM_COULEUR'] ?>">
                <!-- </form> -->
            </td>
            
            <!-- Update button : MARCHE PAS -->
            <td>
                <!-- <a href="update?id=<?php
                // echo $propertiesColor['ID_COULEUR'];
                ?>">   -->
                    <button class="btn btn-dark" name="update">
                        <i class="fa-regular fa-pen-to-square">
                        </i>
                    </button>
                </form>
                <!-- </a>   -->
            </td>

            <!-- Delete button : MARCHE PAS -->
            <td>
                <!-- <a href="delete?id= -->
                <a href="delete?id=<?php 
                echo $propertiesColor['ID_COULEUR'];
                ?>">
                    <button class="btn btn-dark" name="deleteColor"> 
                        <i class="fa-regular fa-trash-can"></i>
                    </button>
                </a>
            </td>

        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php
require 'app/footer.php';
?>