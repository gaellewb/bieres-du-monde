<?php
// Variables qui renvoient au header.php et qui définient le titre et la description de la page
$titlePage = "CRUD table couleur | SBDM";
$dscriptionPage = "Ajouter, modifier, supprimer une couleur";
// Inclusion du fichier header.php
require 'app/header.php';
?>

<div class="container">

    <h1>Table Couleur</h1>
    <h2>Créer, Lire, Modifier, Supprimer</h2>

<!-- FORMULAIRE DE CREATION de couleur -->
    <form action="" method="POST" class="text-end mb-4">
        <div>
            <input type="text" id="newColor"  name="newColor" placeholder="Nom couleur à créer">

            <button type="submit" class="mt-1 btn btn-dark ps-5 pe-5" id="submit1" name="submit"><i class="fa-regular fa-square-plus fa-lg pe-3"></i>Créer une couleur</button>
        </div>
    </form>

<!-- FORMULAIRE DE MODIFICATION -->
    <form action="" method="POST" class="text-end mb-4">
        <div class="mb-3">
            <input type="number" name="idColor2" id="idColor2" placeholder="N° couleur à modifier">

            <input type="text" name="newName" id="newName" placeholder="Nom nouvelle couleur">

            <button type="submit" class="mt-1 btn btn-dark ps-5 pe-5" id="submit2" name="submit"><i class="fa-regular fa-pen-to-square pe-3"></i>Modifier la couleur</button>
        </div>
    </form>

<!-- MARCHE PAS : Essais de formulaires de modification -->
    <!-- <form action='updateColor' method='POST' class="text-center mb-5">
        <div>
            <input type="number" id="idToUpdate"  name="idToUpdate" placeholder="N° couleur">
            <button type="submit" class="btn btn-dark ps-5 pe-5" id="submit5" name="submit"><i class="fa-regular fa-pen-to-square  pe-3"></i>N° couleur à modifier</button>
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
            <button type="submit" class="btn btn-dark ps-5 pe-5" id="submit4" name="submit"> 
                <i class="fa-regular fa-pen-to-square  pe-3"></i>Modifier la couleur
            </button>
        </div>
    </form> -->


<!-- FORMULAIRE DE SUPPRESSION -->
    <form action="" method="POST" class="text-end mb-4">
        <div>
            <input type="number" id="toDelete" name="toDelete" placeholder="N° couleur à supprimer">

            <button type="submit" class="mt-1 btn btn-dark ps-5 pe-5" id="submit3" name="submit"><i class="fa-regular fa-trash-can pe-3"></i>Supprimer une couleur</button>
        </div>
    </form>

<!-- TABLEAU PROPRIETES COULEUR -->
    <table class="table">
        <thead class="thead">
            <tr class="text-center">
                <!-- En-têtes des colonnes -->
                <th scope="col">N° couleur</th>
                <th scope="col">Couleur</th>
                <!-- <th scope="col">Modification nom couleur</th> -->
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <!-- Boucle pour chaque couleur dans la variable $colors qui vient de la méthode getReadColor, découpage du tablau $colors en ligne $color -->
            <?php foreach ($colors as $color): ?>
            <tr class="text-center">
                <?= "<td>".$color['ID_COULEUR']."</td>" ?> 
                <?= "<td>".$color['NOM_COULEUR']."</td>" ?> 

                <!-- MARCHE PAS : Champ de modification. Création d'un formulaire pour pouvoir récupérer le  nom_couleur-->
                <!-- <td> -->
                    <!-- <form action="" method="POST">  -->
                        <!-- <input type="hidden" name="IdColor" value="      -->
                            <?
                            // echo $color['ID_COULEUR'] 
                            ?>
                            <!-- "> -->
                        <!-- <input type="text" name="updateColors" value=" -->
                            <? 
                            // echo$color['NOM_COULEUR'] 
                            ?>
                            <!-- "> -->
                    <!-- </form> -->
                <!-- </td> -->
                
                <!-- MARCHE PAS : Update button -->
                <td>
                    <!-- <a href="update?id=<?php
                    // echo $propertiesColor['ID_COULEUR'];
                    ?>">   -->
                        <button class="btn btn-dark" name="update">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </button>
                    </form>
                    <!-- </a>   -->
                </td>

                <!-- MARCHE PAS : Delete button -->
                <td>
                    <!-- <a href="delete?id= -->
                    <a href="delete?id=<?php 
                    echo $color['ID_COULEUR'];
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

</div>

<?php
// Inclusion du fichier footer.php
require 'app/footer.php';
?>