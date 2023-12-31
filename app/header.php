<?php    

function nav_item (string $lien, string $titre): string 
{
    $classe = 'nav-link';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe = $classe . ' active';
        // j'aurai pu aussi écrire $classe .= ' active'; c'est pareil
    }
    return '<li class="nav-item">
                <a class="' . $classe . '" href="' . $lien . '">' . $titre . '</a>
            </li>' ;
}
?>

<!doctype html>
<html lang="fr" class="h-100" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Je teste si $title existe ou pas, si elle n'existe pas j'affiche le else -->
    <meta name="description" content="
        <?php if (isset($descriptionPage)) { echo $descriptionPage; } else { echo 'ECF | Exercice de back end, PHP, structure MVC relié à une base de données';}; ?>
    ">

<!-- Je teste si $title existe ou pas, si elle n'existe pas j'affiche le else -->
    <title>
        <?php if (isset($titlePage)) { echo $titlePage; } else { echo 'ECF | Back End';}; ?>
    </title>

<!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<!-- CSS -->
    <link rel="stylesheet" href="../styles/style.css">
<!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Montserrat+Alternates:wght@500&family=Varela+Round&display=swap" rel="stylesheet">

</head>

<body class="d-flex flex-column h-100 monbg">

<header>
    <nav class="navbar navbar-expand-md navbar-dark mb-4 navbar-monbg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/ecf_sbdm/HomeController/home"><img src="../assets/img/logo.png" alt="petit logo SBDM"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-end" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <?= nav_item('/ecf_sbdm/HomeController/home', 'Accueil') ; ?>
                    <?= nav_item('/ecf_sbdm/BeersController/beers', 'Toutes nos bières') ; ?>
                    <?= nav_item('/ecf_sbdm/BlondController/blond', 'Nos blondes') ; ?>
                    <?= nav_item('/ecf_sbdm/BrownController/brown', 'Nos brunes') ; ?>
                    <?= nav_item('/ecf_sbdm/WhiteController/white', 'Nos blanches') ; ?>
                    <?= nav_item('/ecf_sbdm/AmberController/amber', 'Nos ambrées') ; ?>
                    <?= nav_item('/ecf_sbdm/SimpleCrudController/simpleCrud', 'CRUD simple') ; ?>
                    <?= nav_item('/ecf_sbdm/ComplexCrudController/complexCrud', 'CRUD complexe') ; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>