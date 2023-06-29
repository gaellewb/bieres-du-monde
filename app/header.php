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
        <?php if (isset($descriptionPage)) { echo $descriptionPage; } else { echo 'ECF | Exercice de back end, PHP, structure MVC relié à base de données';}; ?>
    ">

<!-- Je teste si $title existe ou pas, si elle n'existe pas j'affiche le else -->
    <title>
        <?php if (isset($titlePage)) { echo $titlePage; } else { echo 'ECF | Back End';}; ?>
    </title>

<!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<!-- CSS -->
    <link rel="stylesheet" href="../styles/style.css">

</head>

<body class="d-flex flex-column h-100 monbg">

<header>
    <nav class="navbar navbar-expand-md navbar-dark mb-4 navbar-monbg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/ecf_sbdmVDavid/HomeController/home"><img src="../assets/img/logo6.png" alt="petit logo PHP"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <?= nav_item('/ecf_sbdm/HomeController/home', 'Accueil') ; ?>
                <?= nav_item('/ecf_sbdm/BeersController/beers', 'Nos bières') ; ?>
                <?= nav_item('/ecf_sbdm/ColorController/color', 'Nos couleurs') ; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>