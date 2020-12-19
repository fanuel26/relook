<?php require('./layout/_header.php') ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 py-4">
            <h3>Liste des produits ajoutés au panier</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Designation</th>
                        <th>Prix unitaire (Fcfa)</th>
                        <th>Quantité</th>
                        <th>Taille</th>
                        <th>Prix Total (Fcfa)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['panier'] as $panier) :
                        $q = $db->query('SELECT * FROM produit WHERE id = ' . $panier);
                        $produit = $q->fetch(PDO::FETCH_OBJ);
                    ?>
                        <tr>
                            <td><?= $produit->nom ?></td>
                            <td><?= $produit->prix ?></td>
                            <td class="field">
                                <select name="qte" class="custom custom-select" id="">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </td>
                            <td>
                                <select name="taille" class="custom custom-select" id="">
                                    <option value="46">46</option>
                                    <option value="48">48</option>
                                    <option value="50">50</option>
                                    <option value="52">52</option>
                                    <option value="54">54</option>
                                    <option value="56">56</option>
                                    <option value="58">58</option>
                                </select>
                            </td>
                            <td><?= isset($total) ? $total : 0 ?></td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="idid" value="<?= $panier ?>">
                                    <button type="submit" name="delet" class="small ui red button">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>