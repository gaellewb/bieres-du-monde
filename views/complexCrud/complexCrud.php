<?php
// Variables qui renvoient au header.php et qui définient le titre et la description de la page
$titlePage = "CRUD tables article et Marque | SBDM";
$dscriptionPage = "Ajouter, modifier, supprimer une bière";
// Inclusion du fichier header.php
require 'app/header.php';
?>

<div class="container">

    <h1>Tables  bière et marque</h1>
    <h2 class="mb-4">Créer, Lire, Modifier, Supprimer</h2>

<!-- FORMULAIRE DE CREATION de bière avec titrage, marque -->
    <form action="" method="POST" class="text-end mb-4">  
        <div>
            <input type="text" id="article" name="nomBiere" placeholder="Nom bière à créer">
            <input type="text" id="titrage" name="titrage" class="mb-1" placeholder="Titrage">   

            <select name="marque" id="marque">
                <option value="">Choix marque</option>
                <!-- Boucle pour chaque marque dans la variable $creates qui vient de la méthode getCreate, découpage du tablau $creates en ligne $create -->
                <?php foreach ($creates as $create): ?>
                    <option value="<?php echo $create['ID_MARQUE']?>">
                        <?php echo $create['NOM_MARQUE'] ?>
                    </option>
                <!-- Fin de la boucle -->
                <?php endforeach ?>
            </select>

            <button type="submit" class="mt-1 btn btn-dark ps-5 pe-5" id="submit1" name="submit1"><i class="fa-regular fa-square-plus fa-lg pe-3"></i>Créer une bière
            </button>
        </div> 
    </form>

<!-- FORMULAIRE DE MODIFICATION -->
    <form action="" method="POST" class="text-end mb-4">
        <div class="mb-3">
            <input type="number" name="idBeer" id="idBeer" placeholder="N° bière à modifier">
            <input type="text" name="newNameBeer" id="newNameBeer" placeholder="Nom nouvelle bière">           
            <input type="number" id="titrage"  name="titrage" class="mt-1 mb-1"  placeholder="Nouveau titrage">         
            <select name="marque2" id="marque2">
                <option value="">Modifier marque</option>
                <!-- Boucle pour chaque marque dans la variable $updates qui vient de la méthode getUpdate, découpage du tablau $updates en ligne $update -->
                <?php foreach ($updates as $update): ?>
                    <option value="<?= $update['ID_MARQUE'] ?>">
                        <?= $update['NOM_MARQUE'] ?>
                    </option>
                <!-- Fin de la boucle -->
                <?php endforeach ?>
            </select>
            <button type="submit" class="mt-1 btn btn-dark ps-5 pe-5" id="submit2" name="submit2"><i class="fa-regular fa-pen-to-square pe-3"></i>Modifier une bière
            </button>
        </div>
    </form>

<!-- FORMULAIRE DE SUPPRESSION -->
    <form action="" method="POST" class="text-end mb-4">
        <div>
            <input type="number" id="toDelete" name="toDelete" placeholder="N° bière à supprimer">
            <button type="submit" class="mt-1 btn btn-dark ps-5 pe-5" id="submit" name="submit"> 
                <i class="fa-regular fa-trash-can pe-3"></i>Supprimer une bière
            </button>
        </div>
    </form>

<!-- TABLEAU POUR LIRE les informations de la fonction getRead -->
    <table class="table">
        <thead class="thead">
            <tr class="text-center">
                <th scope="col">N° article</th>
                <th scope="col">Nom article</th>
                <th scope="col">Titrage</th>
                <th scope="col">Marque</th>
            </tr>
        </thead>
        <tbody>
            <!-- Boucle pour chaque bière dans la variable $reads qui vient de la méthode getRead, découpage du tablau $reads en ligne $read -->
            <?php foreach ($reads as $read): ?>
                <tr class="text-center">
                    <?= "<td>".$read['ID_ARTICLE']."</td>" ?> 
                    <?= "<td>".$read['NOM_ARTICLE']."</td>" ?> 
                    <?= "<td>".$read['TITRAGE']."</td>" ?> 
                    <?= "<td>".$read['NOM_MARQUE']."</td>" ?> 
                </tr>
            <!-- Fin de la boucle -->
            <?php endforeach ?>
        </tbody>
    </table>

</div>

<?php
// Inclusion du fichier footer.php
require 'app/footer.php';
?>