<style>
    #developpement, #reseau, #bureautique, #cursus {
        display: none;
    }
    .mycontent-left {
  border-left: 1px dotted #333;
}
</style>

<div class="container section-padding">
    <div class="row">
        <div class="col-md-12">
        <!-- titre -->
            <h2>Les formations</h2>
            <!-- Présentation -->
            <p>Le site MFC de Lille propose différentes formations et différents cursus. Ces formations ce regroupent en 3 grandes catégories qui sont la programmation, le réseau et la bureautique.
            <br>
            Vous trouverez la durée et le prix de chacune des formations et cursus.</p>
            <img class="img-rounded center-block" src=" <?php echo base_url("assets/photo/Form.jpg"); ?>" alt="Salle">
        </div>
    </div>
    <hr class="bottom-line">
    <div class="row">
        <div class="col-md-3 ">
            <ul class="list-group">
                <li class="list-group-item"><a href="#" onclick="afficher_section('cursus')">Cursus </a> <span class="badge">8</span></li>
              <li class="list-group-item"><a href="#" onclick="afficher_section('developpement')">Programmation </a> <span class="badge">5</span></li>
                <li class="list-group-item"><a href="#" onclick="afficher_section('reseau')">Réseau </a><span class="badge">11</span></li> 
                <li class="list-group-item"><a href="#" onclick="afficher_section('bureautique')">Bureautique </a><span class="badge">7</span></li> 
            </ul>
        </div>
        <div class="col-md-7 mycontent-left" id="a_cacher">
            <hr>
            Veuiller cliquer sur l'une des catégories pour accéder à nos formations
            <hr>
        </div>
        <div class="col-md-7 mycontent-left" id="cursus">
            <hr>
            <p>Vous êtes dans la catégorie Cursus. <br> Un cursus est une formation plus complète et plus longue. Vous trouverez ici, les différents cursus disponible au MFC de Lille.</p>
            <hr>
            <h4>Cursus Administrateur de Réseau</h4><br>
            <p>Synthèse réseaux TCP/IP <br>
                L'essentiel pour administrer et con gurer des réseaux Cisco<br>
                Mettre en œuvre IPv6<br>
                Gérer les réseaux avec SNMP <br>
                Solutions et outils d'administration réseaux La technologie sans- l WiFi<br>
            </p>
            <p>Prix : 15 000 Euros <br>
            Durée : 30 jours</p>
            <hr>
            <h4>Cursus certifiant Windows Server 2008</h4><br>
            <p>Les fondamentaux Windows Server 2008<br>
                Configurer, gérer et maintenir des serveurs Windows<br>
                Configurer et dépanner l'infrastructure réseau <br>
                Concevoir une infrastructure d'annuaire<br>
                Gérer l'identité et les accès avec Active Directory <br>
                Configurer et dépanner Terminal Services Automatiser les tâches d'administration Windows avec PowerShellTM 2.0<br></p>
            <p>Prix : 11 000 Euros<br> Durée : 25 jours</p>
            <hr>
            <h4>Cursus Développeur Web Microsoft .Net</h4><br>
            <p> Programmation C# avec Microsoft .Net Framework 4.5<br>
                Programmation Visual Basic .Net avec Microsoft .Net Framework 4.5<br>
                Développer des applications Web ASP .Net<br><br>
                Créer des sites et applications web avec HTML5 et CSS3<br>
                Développer des applications avec Visual Basic 6<br></p>
            <p>Prix : 12 000 Euros <br> Durée : 25 jours</p>
            <hr>
            <h4>Cursus certifiant MCSA SQL Server 2012</h4><br>
            <p>
            Écrire des requêtes Transact SQL pour SQL Server <br>
            Implémenter une base de données SQL Server<br><br>
                
            Administrer et maintenir une base de données <br>
            SQL<br>
            Server<br></p>
            <p>Prix : 7 000 Euros <br> Durée : 15 jours</p>
            <hr>
            <h4>Cursus Administrateur Linux</h4><br>
            <p>Unix - Linux, les commandes <br>
            Administration Linux niveau 1 <br>
            Administration Linux niveau 2<br>
            Automatiser l'administration Unix-Linux <br>
            Administration Linux niveau 3<br>
            Maîtriser les services réseaux : FTP, Apache, Samba...<br>
            Sécuriser un système Linux<br>
            Administration avancée de serveurs Unix<br></p>
            <p>Prix : 15 000 Euros <br> Durée : 35 jours</p>
            <hr>
            <h4>Cursus Sécurité</h4><br>
            <p> État de l'art de la sécurité des Systèmes d'Information<br>
                Concevoir et mettre en œuvre la sécurité du système d'information<br>
                Contrer les attaques des hackers et les intrusions <br>
                Devenir Responsable de la Sécurité du Système d'Information<br>
                Sécurité des applications et des serveurs web <br>
                Implémenter Forefront Threat Management Gateway <br>
</p>
            <p>Prix : 12 000 Euros <br> Durée : 20 jours</p>
            <hr>
            <h4>Cursus OFFICE</h4><br>
            <p>Word 2007/2010 - Niveau 1<br>
                Word 2007/2010 - Niveau 2<br>
                Word 2007/2010 : Formulaires et Mailings<br><br>
                PowerPoint 2007/2010<br><br>
                Excel 2007/2010 - Niveau 1 <br>
                Excel 2007/2010 - Niveau 2 <br>
                Excel Macros VBA<br></p>
            <p>Prix : 7 700 Euros <br> Durée : 20 jours</p>
            <hr>
            <h4>Cursus ACCESS</h4><br>
            <p>Access 2007/2010 : les bases<br>
                Access 2007/2010 : Exploiter une base de données<br>
                Access 2007/2010 : Macros<br>
                Access VBA<br></p>
            <p>Prix : 6 000 Euros <br> Durée : 15 jours</p><hr>
        </div>
        <div class="col-md-7 mycontent-left" id="developpement">
            <hr>
            <p>Vous êtes dans la catégorie Programmation.<br> La programmation est l'ensemble des activités qui permettent l'écriture de programmes informatiques grâce à différents langages de codage. <br> Vous trouverez ici, les différents formations spécialisées dans la programmation disponible au MFC de Lille.</p>
            <hr>
            <h4>Programmation C# avec Microsoft .Net Framework 4.5</h4>
            <p>Prix : 3 000 Euros <br> Durée : 5 jours</p>
            <hr>
            <h4>Programmez en PHP 5</h4>
            <p>Prix : 1 800 Euros <br> Durée : 3 jours</p>
            <hr>
            <h4>Créer des sites et applications web avec HTML5 et CSS3</h4>
            <p>Prix : 2 700 Euros <br> Durée : 5 jours</p>
            <hr>
            <h4>Développez vos applications avec android</h4>
            <p>Prix : 2 200 Euros <br> Durée : 4 jours</p>
            <hr>
            <h4>Administrer et maintenir une base de données SQL Server</h4>
            <p>Prix : 2 700 Euros <br> Durée : 5 jours</p>
            <hr>
        </div>
        <div class="col-md-7 mycontent-left" id="reseau">
            <hr>
            <p>Vous êtes dans la catégorie Réseau.<br> Un réseau est un ensemble d'éléments informatique connectés les uns aux autres. La connexion entre ces éléments peut se faire de manière physique (connexion filaire) ou bien via des ondes radio (connexion sans fil, wifi) <br> Vous trouverez ici, les différents formations spécialisées dans le réseau disponible au MFC de Lille.</p>
            <hr>
            <h4>Synthèse réseaux</h4>
            <p>Prix : 2 700Euros <br> Durée : 5 jours</p>
            <hr>
            <h4>Solutions et outils d'administration réseaux</h4>
            <p>Prix : 2 900 Euros <br> Durée : 5 jours</p>
            <hr>
            <h4>L'essentiel pour administrer et configurer des réseaux Cisco</h4>
            <p>Prix : 2 700 Euros <br> Durée : 5 jours</p>
            <hr>
            <h4>TCP/IP</h4>
            <p>Prix : 1 600 Euros <br> Durée : 3 jours</p>
            <hr>
            <h4>Mettre en oeuvre IPv6</h4>
            <p>Prix : 2 300 Euros <br> Durée : 4 jours</p>
            <hr>
            <h4>Configurer, gérer et maintenir des serveurs Windows</h4>
            <p>Prix : 2 700 Euros <br> Durée : 5 jours</p>
            <hr>
            <h4>Unix - Linux, les commandes</h4>
            <p>Prix : 2 700 Euros <br> Durée : 5 jours</p>
            <hr>
            <h4>Administration Linus</h4>
            <p>Prix : 2 700 Euros <br> Durée : 5 jours</p>
            <hr>
            <h4>Assurer le support PC</h4>
            <p>Prix : 2 000 Euros <br> Durée : 5 jours</p>
            <hr>
            <h4>Maîtriser les services réseaux : FTP, Apache, Samba...</h4>
            <p>Prix : 2 700 Euros <br> Durée : 5 jours</p>
            <hr>
            <h4>Contrer les attaques des hackers et les intrusions</h4>
            <p>Prix : 3 000 Euros <br> Durée : 5 jours</p>
            <hr>
        </div>
        <div class="col-md-7 mycontent-left" id="bureautique">
            <hr>
            <p>Vous êtes dans la catégorie Bureautique.<br> La bureautique est l'ensemble des techniques et des moyens tendant à automatiser les activités de bureau et, principalement, le traitement et la communication de la parole, de l'écrit et de l'image. <br> Vous trouverez ici, les différents formations spécialisées dans la bureautique disponible au MFC de Lille.</p>
            <hr>
            <h4>L'univers Apple de A à Z</h4>
            <p>Prix : 2 000 Euros <br> Durée : 5 jours</p>
            <hr>
            <h4>S'initier à la micro-informatique</h4>
            <p>Prix : 2 000 Euros <br> Durée : 5 jours</p>
            <hr>
            <h4>PowerPoint 2007/2010</h4>
            <p>Prix : 1 200 Euros <br> Durée : 3 jours</p>
            <hr>
            <h4>Excel 2007/2010</h4>
            <p>Prix : 2 000 Euros <br> Durée : 5 jours</p>
            <hr>
            <h4>Access 2007/2010</h4>
            <p>Prix : 2 200 Euros <br> Durée : 5 jours</p>
            <hr>
            <h4>Word 2007/2010</h4>
            <p>Prix : 2 000 Euros <br> Durée : 5 jours</p>
            <hr>
            <h4>S'initier à la micro-informatique</h4>
            <p>Prix : 2 000 Euros <br> Durée : 5 jours</p>
            <hr>
            
        </div>
    </div><hr class="bottom-line">
    <div class="row">
        <div class="col-md-12">
            <h3>Notre plaquette</h3>
            <p>Vous trouverez notre plaquette présentant chacune des formations des différents sites MFC.</p><br>
            <a href="<?php echo base_url("document/plaquetteMFC.pdf"); ?>" class="btn btn-primary bouton-bleu" role="button">Télécharger</a>
        </div> 
    </div>
</div>

<script>
    function afficher_section(id) {
        switch (id) {
            case 'reseau':
                document.getElementById('reseau').style.display = 'block';
                document.getElementById('developpement').style.display = 'none';
                document.getElementById('cursus').style.display = 'none';
                document.getElementById('bureautique').style.display = 'none';
                document.getElementById('a_cacher').style.display = 'none';
                break;

            case 'developpement':
                document.getElementById('developpement').style.display = 'block';
                document.getElementById('reseau').style.display = 'none';
                document.getElementById('a_cacher').style.display = 'none';
                document.getElementById('cursus').style.display = 'none';
                document.getElementById('bureautique').style.display = 'none';
                break;

            case 'bureautique':
                document.getElementById('bureautique').style.display = 'block';
                document.getElementById('cursus').style.display = 'none';
                document.getElementById('developpement').style.display = 'none';
                document.getElementById('reseau').style.display = 'none';
                document.getElementById('a_cacher').style.display = 'none';
                break;
            
            case 'cursus':
                document.getElementById('cursus').style.display = 'block';
                document.getElementById('bureautique').style.display = 'none';
                document.getElementById('developpement').style.display = 'none';
                document.getElementById('reseau').style.display = 'none';
                document.getElementById('a_cacher').style.display = 'none';
                break;
        }
    }

</script>
