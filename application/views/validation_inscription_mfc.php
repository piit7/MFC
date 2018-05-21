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
                <h2> Valider <br/></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <p> Votre dossier à bien été valider, nous vous enverrons un email dès que le dossier sera crée.<br> Par la suite, vous allez recevoir un dossier à nous renvoyer dès que possible.</p>
                <br>
                <p>Merci.</p>
            </div>
        </div>
        <hr class="bottom-line">
       
    </div>
</div>
<div class="container-fluid blanc"></div>
<div class="container-fluid blanc"></div>


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
