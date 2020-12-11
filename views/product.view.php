<?php require('./layout/_header.php') ?>


<style>
    .h {
        height: 600px;
    }

    .h1 {
        height: 380px;
    }

    .h2 {
        height: 270px;
    }
</style>


<div class="container1">
    <div class="row">
        <div class="col-md-9">
            <section class="section">
                <div class="container1">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="./produit/<?= $produit->image ?>" class="img-fluid bd" alt="">
                        </div>
                        <div class="col-md-7">
                            <h3 class="text-dark"><?= $produit->nom ?></h3>
                            <h1 class="doré"><?= $produit->prix ?> Fcfa</h1>
                            <p class="text-dark"> <strong>Catégories :</strong> <?= $categorie->nom ?></p>
                            <p class="text-dark">
                                <strong>Description :</strong> <br>
                                <?= $produit->description ?>
                            </p>
                            <div class="mt-4">
                                <form action="" class="ui form my-4" method="POST" target="_brank">
                                    <div class="field">
                                        <?php if (isset($error)) : ?>
                                            <div class="ui negative message">
                                                <p><?= $error ?></p>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                    <div class="field">
                                        <label for="">Quantité</label>
                                        <input type="number" name="qte" placeholder="Quantité à payer">
                                    </div>
                                    <div class="field text-right">
                                        <button type="submit" name="commander" class="ui green button">
                                            <i class="fab fa-whatsapp"></i> Passer la commande sur whatsapp
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-4">
                <div class="container1">
                    <div class="row my-4">
                        <div class="col-md-12 my-4">
                            <h1>Les produits simulaires</h1>
                            <hr>
                        </div>
                        <?php foreach ($produits as $produit) : ?>
                            <div class="col-md-4 mt-4">
                                <div class="card bg-1 bd">
                                    <div class="card-img">
                                        <a href="./product.php?id_prod=<?= $produit['id'] ?>"><img src="./produit/<?= $produit['image'] ?>" class="img-fluid bd1 h2 prod-i"></a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="text-white"><?= $produit['nom'] ?></h3>
                                        <h2 class="doré topi"><?= $produit['prix'] ?> Fcfa</h2>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-md-3 mt-4">
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