<?php require('./layout/_header.php') ?>

<section class="mt-4">
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h3 class="ui header">
                    Publier un produit
                </h3>
                <?php if (isset($errors)) : ?>
                    <div class="ui negative message">
                        <?= $errors ?>
                    </div>
                <?php endif; ?>
                <?php if (isset($success)) : ?>
                    <div class="ui positive message">
                        <?= $success ?>
                    </div>
                <?php endif; ?>
                <form action="" method="post" class="ui form container" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-12">
                            <img src="" id="imgprofile" class="img-fluid my-4" style="border-radius: 10px;width:150px" alt="">
                            <button type="button" class="ui black button" id="imagebtn" onclick="sendimage()"><span class="fa fa-edit"></span> image produit
                            </button>

                            <input type="file" name="photo1" id="addprofile" onchange="placeimage()" hidden />

                            <h3 class="ui header my-4">Information du produit</h3>
                        </div>
                        <div class="col-md-4">
                            <div class="field">
                                <label for="" class="">Nom du produit*</label>
                                <input type="text" name="nom" id="" placeholder="Nom du produit">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="field">
                                <label for="" class="">Categorie*</label>
                                <select name="categorie" id="">
                                    <?php foreach ($categories as $categorie) : ?>
                                        <option value="<?= $categorie['id'] ?>"><?= $categorie['nom'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="field">
                                <label for="" class="">Prix (Fcfa)*</label>
                                <input type="number" name="prix" id="" placeholder="Prix du produit">
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="field">
                                <label for="" class="">Description*</label>
                                <textarea name="description" id="" cols="30" rows="3" maxlength="100" placeholder="description du produit">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id aliquam eveniet </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="m-4 text-right">
                            <button type="submit" name="publier" class="ui black button">Publier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>









<script>
    let sending = false

    function placeimage() {
        var profile = document.getElementById('addprofile');
        if (profile.files && profile.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgprofile').attr('src', e.target.result);
            }
            reader.readAsDataURL(profile.files[0]);
        }

        sending = true;
        $('#imagebtn').html("<span class='fa fa-check'></span> Image choisie");
        $('#imagebtn').removeClass("inverted pink").addClass("positive");
    }

    function sendimage() {
        if (sending) {} else {
            $('#addprofile').click();
        }
    }
</script>