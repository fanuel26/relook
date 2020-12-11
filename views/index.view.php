<?php require('./layout/_header.php') ?>

<style>
    .h {
        height: 650px;
    }

    .h1 {
        height: 380px;
    }

    .h2 {
        height: 230px;
    }


    @media screen and (max-width: 700px) {
        .h1 {
            height: 420px;
        }

        .h2 {
            height: 350px;
        }

        .banner {
            display: none;
        }

        .s {
            display: none;
        }
    }
</style>

<section class="banner"></section>

<section class="my-4">
    <div class="container1">
        <div class="row">
            <div class="col-md-3 my-4">
                <div class="card p-4 bg-1">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <h1 class="text-white">
                                <i class="fas fa-history"></i>
                            </h1>
                        </div>
                        <div class="col-md-9">
                            <h3 class="text-white">Lorem ipsum dolor</h3>
                            <p class="text-light">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-4">
                <div class="card p-4 bg-1">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <h1 class="text-white">
                                <i class="fab fa-opencart"></i>
                            </h1>
                        </div>
                        <div class="col-md-9">
                            <h3 class="text-white">Lorem ipsum dolor</h3>
                            <p class="text-light">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-4">
                <div class="card p-4 bg-1">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <h1 class="text-white">
                                <i class="fas fa-truck"></i>
                            </h1>
                        </div>
                        <div class="col-md-9">
                            <h3 class="text-white">Lorem ipsum dolor</h3>
                            <p class="text-light">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-4">
                <div class="card p-4 bg-1">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <h1 class="text-white">
                                <i class="fas fa-users"></i>
                            </h1>
                        </div>
                        <div class="col-md-9">
                            <h3 class="text-white">Lorem ipsum dolor</h3>
                            <p class="text-light">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container1">
        <div class="row my-4">
            <div class="col-md-12 my-4">
                <h1>Nos nouveaux produits</h1>
                <hr>
            </div>
            <div class="col-md-3 my-4">
                <div id="carouselId" class="carousel slide mt-4" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($produits_rd1 as $produit) : ?>
                            <div class="carousel-item active">
                                <div class="card bg-1 bd h">
                                    <div class="card-img">
                                        <a href="./product.php?id_prod=<?= $produit['id'] ?>"><img src="./produit/<?= $produit['image'] ?>" class="img-fluid bd1 h1 prod-i"></a>
                                        <span class="badge rounded-pill bg-dark top p-3">
                                            <h5 class="doré">New</h5>
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="text-white"><?= $produit['nom'] ?></h3>
                                        <h2 class="doré"><?= $produit['prix'] ?> Fcfa</h2>
                                        <p class="text-light">
                                            <?= $produit['description'] ?>
                                        </p>
                                        <div class="mt-4">
                                            <button class="ui  button">
                                                Commander
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php foreach ($produits_rd as $produit) : ?>
                            <div class="carousel-item">
                                <div class="card bg-1 bd h">
                                    <div class="card-img">
                                        <a href="./product.php?id_prod=<?= $produit['id'] ?>"><img src="./produit/<?= $produit['image'] ?>" class="img-fluid bd1 h1 prod-i"></a>
                                        <span class="badge rounded-pill bg-dark top p-3">
                                            <h5 class="doré">New</h5>
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="text-white"><?= $produit['nom'] ?></h3>
                                        <h2 class="doré"><?= $produit['prix'] ?> Fcfa</h2>
                                        <p class="text-light">
                                            <?= $produit['description'] ?>
                                        </p>
                                        <div class="mt-4">

                                            <button class="ui  button">
                                                Commander
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                        <h3 class="text-dark1"><i class="fas fa-chevron-circle-left"></i></h3>
                    </a>
                    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                        <h3 class="text-dark1"><i class="fas fa-chevron-circle-right"></i></h3>
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php foreach ($produits as $produit) : ?>
                        <div class="col-md-3 mt-4">
                            <div class="card bg-1 bd">
                                <div class="card-img">
                                    <a href="./product.php?id_prod=<?= $produit['id'] ?>"><img src="./produit/<?= $produit['image'] ?>" class="img-fluid bd1 h2 prod-i"></a>
                                    <span class="badge rounded-pill bg-dark top p-3">
                                        <h5 class="doré">New</h5>
                                    </span>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-white"><?= $produit['nom'] ?></h3>
                                    <h2 class="doré topi"><?= $produit['prix'] ?> Fcfa</h2>
                                    <div class="mt-2">
                                        <a href="./product.php?id_prod=<?= $produit['id'] ?>" class="ui  button">
                                            <i class="fab fa-opencart"></i> Decouvrire
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section banner2">
</section>



<section class="section">
    <div class="container1">
        <div class="row my-4">
            <div class="col-md-12 my-4">
                <h1>Nos nouveaux produits</h1>
                <hr>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php foreach ($produits as $produit) : ?>
                        <div class="col-md-3 mt-4">
                            <div class="card bg-1 bd">
                                <div class="card-img">
                                    <a href="./product.php?id_prod=<?= $produit['id'] ?>"><img src="./produit/<?= $produit['image'] ?>" class="img-fluid bd1 h2 prod-i"></a>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-white"><?= $produit['nom'] ?></h3>
                                    <h2 class="doré topi"><?= $produit['prix'] ?> Fcfa</h2>
                                    <div class="mt-2">
                                        <a href="./product.php?id_prod=<?= $produit['id'] ?>" class="ui  button">
                                            <i class="fab fa-opencart"></i> Decouvrire
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-md-3 my-4">
                <div id="carouselId" class="carousel slide mt-4" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($produits_rd1 as $produit) : ?>
                            <div class="carousel-item active">
                                <div class="card bg-1 bd h">
                                    <div class="card-img">
                                        <a href="./product.php?id_prod=<?= $produit['id'] ?>"><img src="./produit/<?= $produit['image'] ?>" class="img-fluid bd1 h1 prod-i"></a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="text-white"><?= $produit['nom'] ?></h3>
                                        <h2 class="doré"><?= $produit['prix'] ?> Fcfa</h2>
                                        <p class="text-light">
                                            <?= $produit['description'] ?>
                                        </p>
                                        <div class="mt-4">

                                            <button class="ui  button">
                                                Commander
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php foreach ($produits_rd as $produit) : ?>
                            <div class="carousel-item">
                                <div class="card bg-1 bd h">
                                    <div class="card-img">
                                        <a href="./product.php?id_prod=<?= $produit['id'] ?>"><img src="./produit/<?= $produit['image'] ?>" class="img-fluid bd1 h1 prod-i"></a>

                                    </div>
                                    <div class="card-body">
                                        <h3 class="text-white"><?= $produit['nom'] ?></h3>
                                        <h2 class="doré"><?= $produit['prix'] ?> Fcfa</h2>
                                        <p class="text-light">
                                            <?= $produit['description'] ?>
                                        </p>
                                        <div class="mt-4">

                                            <button class="ui  button">
                                                Commander
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                        <h3 class="text-dark1"><i class="fas fa-chevron-circle-left"></i></h3>
                    </a>
                    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                        <h3 class="text-dark1"><i class="fas fa-chevron-circle-right"></i></h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container1">
        <div class="row my-4">
            <div class="col-md-12 my-4">
                <h1>Quelques autres produits</h1>
                <hr>
            </div>

            <?php foreach ($produits_rd as $produit) : ?>
                <div class="col-md-2 mt-4">
                    <div class="card bg-1 bd">
                        <div class="card-img">
                            <a href="./product.php?id_prod=<?= $produit['id'] ?>"><img src="./produit/<?= $produit['image'] ?>" class="img-fluid bd1 h2 prod-i"></a>
                        </div>
                        <div class="card-body">
                            <h3 class="text-white"><?= $produit['nom'] ?></h3>
                            <h2 class="doré topi"><?= $produit['prix'] ?> Fcfa</h2>
                            <div class="mt-2">
                                <button class="ui  button">
                                    <i class="fab fa-opencart"></i> Commander
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>