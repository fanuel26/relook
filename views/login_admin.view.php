<?php require('./layout/_header.php') ?>

<section class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-4">
            <div class="card p-4 bg-1">
                <h3 class="text-center text-white py-4">Noire relook | Connexion</h3>
                <form action="" method="POST" class="ui form">
                    <div class="form-group">
                        <?php if (isset($error)): ?>
                            <div class="ui negative message">
                                <p><?= $error ?></p>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <label for="" class="text-light">Username</label>
                        <input type="text" name="username" class="" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-light">Password</label>
                        <input type="password" name="password" class="" placeholder="Mot de passe">
                    </div> 
                    <div class="form-group text-right">
                        <button class="ui button" name="connexion" type="submit">
                            Connexion <i class="fa fa-angle-double-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>