<?php require('./layout/_header.php') ?>



<section class="container1" style="margin-top: 70px;">
    <div class="row">
        <div class="col-md-12 border-b">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="p-3 bg-dg">Offre de la semaine</h3>
            </div>
        </div>
    </div>
    <div class="ui grid">
        <div class="five column row">
            <?php foreach ($produits as $product) : ?>
                <div class="column">
                    <div class="card p-4">
                        <div class="p-1">
                            <a href="./product.php?id_prod=<?= $product['id'] ?>">
                                <img src="produit/<?= $product['image'] ?>" class="img-fluid" alt="">
                            </a>
                        </div>
                        <h3 class="text-center text-bold mt-4"><?= $product['nom'] ?></h3>
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h4 class="slash"><?= $product['prix_or'] ?> Fcfa</h4>
                            </div>
                            <div>
                                <h3 class="text-danger"><?= $product['prix'] ?> Fcfa</h3>
                            </div>
                        </div>
                        <div class="row">
                            <h3 class="mt-4 ml-2">
                                <strong class="str">4</strong> :
                                <strong class="str">30</strong> :
                                <strong class="str">12</strong> :
                                <strong class="str">15</strong>
                            </h3>
                        </div>
                        <div class="row commander">
                            <button class="ui red circular button" data-toggle="modal" data-target="#exampleModalCenter<?= $product['id'] ?>">
                                Commander
                            </button>
                        </div>
                    </div>
                    <!-- Modal -->'
                    <div class="modal fade" id="exampleModalCenter<?= $product['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Passer votre commande</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img src="./produit/<?= $product['image'] ?>" class="img-fluid bd" alt="">
                                            </div>
                                            <div class="col-md-7">
                                                <h3 class="text-primary"><?= $product['nom'] ?></h3>
                                                <div class="my-4">
                                                    <h4 class="slash"><?= $product['prix_or'] ?> Fcfa</h4>
                                                    <h1 class="text-danger">Prix : <?= $product['prix'] ?> Fcfa</h1>
                                                </div>
                                                <p class="text-dark">
                                                    <strong>Description :</strong> <br>
                                                    <?= $product['description'] ?>
                                                </p>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mt-4">
                                                    <form action="" class="ui form my-4" method="POST" target="_brank">
                                                        <div class="row">
                                                            <div class="field">
                                                                <input type="hidden" name="name" value="<?= $product['nom'] ?>">
                                                            </div>
                                                            <div class="field col-md-4">
                                                                <label for="">Quantité</label>
                                                                <select name="qte" id="">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                            <div class="field col-md-8 mt-4">
                                                                <button type="submit" name="commander" class="ui green button">
                                                                    <i class="fab fa-whatsapp"></i> Passer la commande sur whatsapp
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="ui button" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
