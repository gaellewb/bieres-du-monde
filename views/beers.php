<?php
$titlePage = "Nos bières | SBDM";
$descriptionPage = "Découvrez toutes les bières du Salon des Bières du Monde";
require (ROOT.'app/header.php');
?>

<h1>Liste de toutes les bières</h1>


<div class="container">
<?php 
foreach ($bieres as $biere): 
?>
    <div class="row">
        <div class="offset-1 col-2 mb-2">
            <?php 
            echo $biere['ID_ARTICLE']
            ?> 
            - 
            <?php 
            echo $biere['NOM_ARTICLE'] 
            ?> 
        </div>
    </div>
<?php 
endforeach 
?>
</div>



<?php
require (ROOT.'app/footer.php');
?>