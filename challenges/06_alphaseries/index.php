<?php

require_once (__DIR__.'/src/functions/random_banner.php');
require_once (__DIR__.'/src/functions/popular_sort.php');
require_once (__DIR__.'/src/functions/rating_sort.php');

global $projectDir;
$projectDir = __DIR__;

 ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AlphaSeries</title>

    <!-- CSS Bootstrap 4 : https://getbootstrap.com/docs/4.0/getting-started/introduction/ -->
    <link defer rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS Font Awesome 5 : https://fontawesome.com/get-started -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link href="css/alphaseries.css" rel="stylesheet">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">AlphaSeries</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu principal -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-home"></i> Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="classement.php">
                         <i class="fas fa-trophy"></i> Classement
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="serie.php">
                        <i class="fas fa-random"></i> Une série aléatoire
                    </a>
                </li>
            </ul>

            <!-- Formulaire de recherche -->
            <form action="recherche.php" method="post" class="form-inline my-2 my-lg-0">
                <input name="search" class="form-control mr-sm-2" type="text" placeholder="Rechercher une série" aria-label="Rechercher une série">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                    <i class="fa fa-search"></i> <span class="d-md-none">Rechercher</span>
                </button>
            </form>
        </div>
    </nav>

    <main role="main">
        <!-- Header -->
        <div class="jumbotron" style="position: relative">
            <div class="jumbotron-background" style="background-image: url(<?= randomBanner() ?>);"></div>
            <div class="container">
                <h1 class="display-3">AlphaSeries</h1>
                <p>Retrouvez les meilleures séries TV !</p>
            </div>
        </div>

        <!-- Contenu -->
        <div class="container">
            <div class="row">

                <!-- Les 3 séries les plus populaires -->
                <div class="col-md-6">
                    <h2><i class="fa fa-fire"></i> Les plus populaires</h2>
                    <p>Les séries qui sont suivient par le plus de monde.</p>
                    <p>
                        <div class="card">
                          <img class="card-img-top" src= <?= popularSort()[0]['images']['banner']?>>
                          <div class="card-body">
                              <h5 class="card-title">#1 - <a href=<?="serie.php?slug=".popularSort()[0]['slug'] ?>><?= popularSort()[0]['name'] ?></a></h5>
                              <p class="card-text"><?= number_format(popularSort()[0]['statistics']['popularity'],0,"."," ") ?> personnes regardent cette série.</p>
                          </div>
                        </div>
                    </p>
                    <p>
                        <div class="card">
                          <img class="card-img-top" src=<?= popularSort()[1]['images']['banner']?>>
                          <div class="card-body">
                              <h5 class="card-title">#2 - <a href=<?="serie.php?slug=".popularSort()[1]['slug'] ?> ><?= popularSort()[1]['name'] ?></a></h5>
                              <p class="card-text"><?= number_format(popularSort()[1]['statistics']['popularity'],0,"."," "); ?> personnes regardent cette série.</p>
                          </div>
                        </div>
                    </p>
                    <p>
                        <div class="card">
                          <img class="card-img-top" src=<?= popularSort()[2]['images']['banner']?>>
                          <div class="card-body">
                              <h5 class="card-title">#3 - <a href=<?="serie.php?slug=".popularSort()[2]['slug'] ?>><?= popularSort()[2]['name'] ?></a></h5>
                              <p class="card-text"><?= number_format(popularSort()[2]['statistics']['popularity'],0,"."," "); ?> personnes regardent cette série.</p>
                          </div>
                        </div>
                    </p>
                    <p>
                        <a class="btn btn-outline-secondary" href="classement.html" role="button">
                            <i class="fa fa-trophy"></i> Voir tout le classement
                        </a>
                    </p>
                </div>

                <!-- Les 3 séries les mieux notées -->
                <div class="col-md-6">
                    <h2><i class="fa fa-star"></i> Les mieux notées</h2>
                    <p>Les séries qui ont eu les meilleures notes.</p>
                    <p>
                        <div class="card">
                          <img class="card-img-top" src=<?= ratingSort()[0]['images']['banner']?>>
                          <div class="card-body">
                              <h5 class="card-title">#1 - <a href=<?="serie.php?slug=".ratingSort()[0]['slug'] ?>><?= ratingSort()[0]['name'] ?></a></h5>
                              <p class="card-text"><i class="fa fa-star text-info"></i> La série est notée <?= number_format(ratingSort()[0]['statistics']['rating'],2,"."," "); ?> / 5</p>
                          </div>
                        </div>
                    </p>
                    <p>
                        <div class="card">
                          <img class="card-img-top" src=<?= ratingSort()[1]['images']['banner']?>>
                          <div class="card-body">
                              <h5 class="card-title">#2 - <a href=<?="serie.php?slug=".ratingSort()[1]['slug'] ?>><?= ratingSort()[1]['name'] ?></a></h5>
                              <p class="card-text"><i class="fa fa-star text-info"></i> La série est notée <?= number_format(ratingSort()[1]['statistics']['rating'],2,"."," "); ?> / 5 </p>
                          </div>
                        </div>
                    </p>
                    <p>
                        <div class="card">
                          <img class="card-img-top" src=<?= ratingSort()[2]['images']['banner']?>>
                          <div class="card-body">
                              <h5 class="card-title">#3 - <a href=<?="serie.php?slug=".ratingSort()[2]['slug'] ?>><?= ratingSort()[2]['name'] ?></a></h5>
                              <p class="card-text"><i class="fa fa-star text-info"></i> La série est notée <?= number_format(ratingSort()[2]['statistics']['rating'],2,"."," "); ?> / 5</p>
                          </div>
                        </div>
                    </p>
                    <p>
                        <a class="btn btn-outline-secondary" href="classement.html" role="button">
                            <i class="fa fa-trophy"></i> Voir tout le classement
                        </a>
                    </p>
                </div>
            </div>

            <hr>
        </div>
    </main>

    <!-- Footer -->
    <footer class="container">
        <p>&copy; Les données proviennent du site <a target="_blank" href="https://www.betaseries.com">BetaSeries</a></p>
    </footer>

    <!-- JavaScript Bootstrap -->
    <script defer src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
    // activation des tooltips bootstrap de partout
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
</body>
</html>