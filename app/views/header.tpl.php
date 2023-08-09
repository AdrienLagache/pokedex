<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $absoluteUrl?>/css/reset.css">
    <link rel="stylesheet" href="<?= $absoluteUrl?>/css/style.css">
    <title>Pokedex</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <a href="<?= $absoluteUrl?>/"><h1 class="header__title">Pokédex</h1></a>
            <nav class="header__nav">
                <ul class="nav">
                    <li class="nav__item"><a class="nav__link" href="<?= $absoluteUrl?>/">Liste</a></li>
                    <li class="nav__item"><a class="nav__link" href="<?= $absoluteUrl?>/types">Types</a></li>
                </ul>
            </nav>
        </header>