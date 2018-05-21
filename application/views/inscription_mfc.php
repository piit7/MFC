<style>
    .ouvert {
        display: block;
    }

    .ferme {
        display: none;
    }

</style>
<!-- Formulaire inscription -->
<div class="container section-padding">
    <div class="well well-sm">
        <div class="row">
            <div class="col-md-offset-1 col-md-8">
                <h2> Informations <br/></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <p> Il est important de noté qu'aucune inscription se fait sur le site, il nous est nécessaire d'avoir certaines informations pour créer un dossier. </p>
                <p>Suite à cela nous vous enverrons un dossier par email qu'il faudra nous retourner dans les plus bref délai.</p><br>
                <p>Merci.</p>
            </div>
        </div>
        <hr class="bottom-line">
        <div class="row">
            <div class="col-md-offset-1 col-md-8">
                <h2> Entreprise <br/></h2>
            </div>
        </div>
        <form method="post" action="<?php echo base_url("home/valider_envoi"); ?>">
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <div class="form-group">
                        <label class="radio-inline"><input type="radio" name="genre" value="Mme">Mme</label>
                        <label class="radio-inline"><input type="radio" name="genre" value="M">M : </label>
                        <input type="text" class="form-control" id="nom" placeholder="Nom">
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <div class="form-group">
                        <label for="fonction">Fonction :</label>
                        <input type="text" class="form-control" id="fonction" placeholder="Votre fonction">
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Société -->
                <div class="col-md-offset-2 col-md-4">
                    <div class="form-group">
                        <label for="societe">Nom de la Société :</label>
                        <input type="text" class="form-control" id="societe" placeholder="Société">
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Adresse -->
                <div class="col-md-offset-2 col-md-8">
                    <div class="form-group">
                        <label for="adresse">Votre adresse : </label>
                        <input type="text" class="form-control" id="adresse" placeholder="Adresse">
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Ville CP -->
                <div class="col-md-offset-2 col-md-4">
                    <div class="form-group">
                        <label for="ville">Ville :</label>
                        <input type="text" class="form-control" id="ville" placeholder="Ville">
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-2">
                    <div class="form-group">
                        <label for="cp">Code Postale :</label>
                        <input type="text" class="form-control" id="cp" placeholder="Code Postale">
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- N Siret -->
                <div class="col-md-offset-2 col-md-2">
                    <div class="form-group">
                        <label for="siret">N°Siret :</label>
                        <input type="text" class="form-control" id="siret" placeholder="N°">
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- tel & mail -->
                <div class="col-md-offset-2 col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-earphone"></span>
                        <input type="text" class="form-control" name="telephone" placeholder="Téléphone" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-md-offset-2 col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-globe"></span>
                        <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <hr class="bottom-line">
            <div class="row">
                <div class="col-md-offset-1 col-md-8">
                    <h2><br> Facturation <br/></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-md-8">
                    <label class="checkbox-inline">
                            <input onclick="adressediff('chk1', 'adressecoche')" type="checkbox" id="chk1" name="chk1">Cocher si l'adresse email de réception du dossier est différente </label><br><br>
                    <div class="ferme" id="adressecoche">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-12">
                                    <label for="adresse2">Adresse email de réception :</label>
                                    <input type="text" class="form-control" id="adresse2" placeholder="Adresse de facturation"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-md-8">
                    <h2><br> Commentaire/Question : <br/></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-md-8">
                    <div class="form-group">
                        <textarea class="form-control" rows="5" id="commentaire"></textarea><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <input type="submit" class="form-group btn btn-info" value="Envoyer">
                </div>
            </div>
        </form>
    </div>
</div>



<script type="text/javascript">
    // Script permettant d'afficher si chk coché
    // ap1 correspond à l'id et ap2 à l'id du div caché
    function adressediff(ap1, ap2) {
        var etat = document.getElementById(ap1).checked;
        if (etat) {
            document.getElementById(ap2).className = 'ouvert';
        } else {
            document.getElementById(ap2).className = 'ferme';
        }
    }

</script>
