<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/png" href="./outils_visuel/Logo.PNG">
</head>
<body>
    <?php 
        include "header.html" ;
    ?>
    <img src="./outils_visuel/upscalemedia-transformed.jpeg" alt="" class="sect02">
    
    <p class="phr1">BIENVENUE à</p>
    <p class="phr2">NOVAT <span class="span1">-</span> PHARMA</p>
    <p class="phr3" id="text"></p>
    <div class="btn1"><a href="./Açpropos.php" class="btn1a">En savoir plus</a></div>
    
    <section id="advantages">
        <h2 class="phr4">Pourquoi choisir NOVAT-PHARMA ?</h2>
        <div class="advantages">
            <div class="card">
                <h3>Une équipe certifiée et expérimentée</h3>
                <p>Nos visiteurs médicaux sont rigoureusement formés et possèdent une solide expérience dans le secteur pharmaceutique, garantissant un travail de qualité et un suivi personnalisé.</p>
            </div>
            <div class="card">
                <h3>Une couverture nationale efficace</h3>
                <p>Nous intervenons sur l'ensemble du territoire national, assurant une présence stratégique dans toutes les régions clés pour maximiser l’impact de vos produits.</p>
            </div>
            <div class="card">
                <h3>Un engagement pour la qualité et la conformité</h3>
                <p>NOVAT-PHARMA respecte toutes les normes et réglementations en vigueur, assurant une délégation médicale conforme et éthique.</p>
            </div>
            <div class="card">
                <h3>Des partenariats solides et durables</h3>
                <p>Nous bâtissons avec nos clients des relations basées sur la confiance, la transparence et la performance.</p>
            </div>
        </div>


        <section id="services" class="service">
            <h2 class="phr5">Nos services au service de votre succès</h2>
            <p style="text-align:center; max-width:700px; margin:0 auto 40px;">Nous proposons une gamme complète de services pour accompagner vos projets pharmaceutiques et optimiser la promotion de vos produits.</p>
            <div class="services">
                <div class="card">
                    <h3>Délégation de visiteurs médicaux</h3>
                    <p>Nos experts représentent votre laboratoire auprès des professionnels de santé, assurant la promotion et la diffusion de vos produits.</p>
                </div>
                <div class="card">
                    <h3>Promotion pharmaceutique ciblée</h3>
                    <p>Campagnes personnalisées pour atteindre efficacement vos clients cibles et booster votre visibilité.</p>
                </div>
                <div class="card">
                    <h3>Études de marché médicales</h3>
                    <p>Analyse précise et pertinente du marché pour orienter vos stratégies commerciales.</p>
                </div>
                <div class="card">
                    <h3>Formation et coaching</h3>
                    <p>Sessions de formation pour améliorer les compétences de vos équipes de visite médicale.</p>
                </div>
            </div>
            <div style="text-align:center; margin-top: 30px;">
                <a href="./Services.php" class="btn-cta">Voir tous nos services</a>
            </div>
        </section>
    </section>    
    

    <section id="contact" class="contact-cta">
        <h2 class="phr6">Prêt à booster votre délégation médicale ?</h2>
        <p>Notre équipe est à votre écoute pour répondre à vos besoins et vous accompagner dans vos projets. N’hésitez pas à nous contacter pour discuter de votre collaboration.</p>
        <a href="./contact.php">Contactez-nous dès maintenant</a>
    </section>


    <?php 
        include "footer.html" ;
    ?>
    <script src="./index.js"></script>
</body>
</html>