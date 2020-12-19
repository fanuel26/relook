<?php require('./layout/_header.php') ?>

<section class="container1 mt-4">
    <div class="row">
        <div class="col-md-12 mt-4">
            <h3>Liste des produits</h3>
            <div class="table-responsive mt-4">
                <table class="table display table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Nom</th>
                            <th>categorie</th>
                            <th>Prix</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($produits as $product) : ?>
                            <tr>
                                <td><?= $product['created_at'] ?></td>
                                <td><?= $product['nom'] ?></td>
                                <td>
                                    Veste
                                </td>
                                <td><?= $product['prix'] ?> Fcfa</td>
                                <td>
                                    <button type="button" class="small ui blue button" data-toggle="modal" data-target="#exampleModalCenter<?= $product['id'] ?>">
                                        Détail
                                    </button>
                                    <button type="button" class="small ui orange button" data-toggle="modal" data-target="#edit<?= $product['id'] ?>">
                                        Modifier
                                    </button>
                                    <button type="button" class="small ui red button" data-toggle="modal" data-target="#supp<?= $product['id'] ?>">
                                        Supprimer
                                    </button>
                                </td>
                            </tr>
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="ui button" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="ui button" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Modal -->'
                            <div class="modal fade" id="edit<?= $product['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                    <div class="col-md-4">
                                                        <img src="./produit/<?= $product['image'] ?>" class="img-fluid bd" alt="">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h5>Modifier le produit</h5>
                                                        <form action="" method="post" class="ui form">
                                                            <input type="hidden" name="id" class="form-control" placeholder="Nom produit" value="<?= $product['id'] ?>">
                                                            <div class="field">
                                                                <label for="">Nom</label>
                                                                <input type="text" name="nom" class="form-control" placeholder="Nom produit" value="<?= $product['nom'] ?>">
                                                            </div>
                                                            <div class="field mt-2">
                                                                <label for="">Prix</label>
                                                                <input type="text" name="prix" class="form-control" placeholder="Prix produit" value="<?= $product['prix'] ?>">
                                                            </div>
                                                            <div class="field mt-2">
                                                                <label for="">Description</label>
                                                                <textarea name="description" id="" class="form-control" cols="30" rows="4"><?= $product['description'] ?></textarea>
                                                            </div>

                                                            <div class="field mt-2">
                                                                <button type="submit" name="edit" class="btn btn-dark">Modifier</button>
                                                            </div>
                                                        </form>
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

                            <!-- Modal -->'
                            <div class="modal fade" id="supp<?= $product['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Passer votre commande</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post" class="ui form">
                                                <div class="text-center">
                                                    <h5>Voulez vous vraiment supprimer ?</h5>
                                                    <input type="hidden" name="id_s" value="<?= $product['id'] ?>">
                                                    <button type="submit" name="supprimer" class="ui red button">Oui, Supprimer</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="ui button" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>