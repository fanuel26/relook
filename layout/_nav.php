<header>
    <section class="bg-1">
        <div class="container1">
            <div class="row p-4">
                <div class="col-md-6 text-left">
                    <p class="text-white">
                        <span class="mx-4">(+228) 99 43 37 04</span>
                        <span class="mx-4">noirerelook@gmail.com</span>
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-between">
                        <p></p>
                        <p class="text-white">
                            <span class="mx-4">Fcfa</span>
                            <span class="ml-4"><a href="#">Connexion</a></span>
                            <span class="">| <a href="#">Inscription</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-2 p-4">
        <div class="container1">
            <div class="row align-items-center">
                <div class="col-md-3 text-center">
                    <a href="./index.html"><img src="./asset/image/banner/logo.jpeg" class="img-fluid logo"></a>
                </div>
                <?php if (!isset($_GET['id'])) : ?>
                    <div class="col-md-7">
                        <form action="" class="big ui form">
                            <div class="input-group">
                                <span class="bg-dark text-white px-4 pt-3 b-l">
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                                <input type="text" class="w-75 u" placeholder="Recherchez prouits ...">
                                <button class="ui black button">
                                    Rechercher
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2">
                        <h1 class="cart mx-4">
                            <a href="./panier.html">
                                <i class="fab fa-opencart text-white"></i> <span class="doré size"></span>
                            </a>
                        </h1>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="bg-1 p-2 sticky-top">
        <div class="container1">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <nav class="navbar navbar-expand-sm">
                        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <?php if (isset($_GET['id'])) : ?>
                                <ul class="navbar-nav">
                                    <li class="nav-item mx-2 active">
                                        <a class="nav-link" href="#publier"><i class="fas fa-home mx-1"></i> Publier produit</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="#commande"><i class="far fa-list-alt mx-1"></i> commande effectuer</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="#produit"><i class="far fa-list-alt mx-1"></i> Liste produits</a>
                                    </li>

                                    <li class="nav-item mx-4">
                                        <a class="nav-link" href="logout.php"><i class="fas fa-power-off mx-1"></i>
                                            Déconnexion</a>
                                    </li>
                                </ul>
                            <?php else : ?>
                                <ul class="navbar-nav">
                                    <li class="nav-item mx-2 active">
                                        <a class="nav-link" href="#"><i class="fas fa-home mx-1"></i> Accueil</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="#"><i class="far fa-list-alt mx-1"></i> Nos
                                            catégories</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="#"><i class="fas fa-address-card mx-1"></i> A
                                            propos</a>
                                    </li>

                                    <li class="nav-item mx-4">
                                        <a class="nav-link" href="#"><i class="fas fa-phone-alt mx-1"></i>
                                            Contactez-nous</a>
                                    </li>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </nav>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
</header>