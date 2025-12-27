<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOVAT-PHARMA contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="contact.css">
    <link rel="icon" type="image/png" href="./outils_visuel/Logo.PNG">
</head>
<body>
    <?php 
        include "header.html" ;
    ?>
    <p class="entete">CONTACTEZ-NOUS</p>
    <div class="opti">
        <div class="chx">
            <img src="./outils_visuel/map-marker-outline.svg" alt="" class="icone">
            <p class="txt"> <b>Adresse :</b>
                Ahouansori-Agata, 6ᵉ arrondissement de Cotonou <br>
                Carré n°1211 S <br>
                03 BP 0007 Cotonou 03 - Jéricho</p>
        </div>
        <div class="chx">
            <img src="./outils_visuel/phone-call.png" alt="" class="icone">
            <p class="txt"> <b>Téléphone :</b> +229 01 99 90 42 31 / 01 21 60 38 76</p>
        </div>
        <div class="chx">
            <img src="./outils_visuel/whatsapp.svg" alt="" class="icone">
            <p class="txt"> <b>whatsapp :</b> +229 95 33 34 12</p>
        </div>
         <div class="chx">
            <img src="./outils_visuel/email-outline.svg" alt="" class="icone">
            <p class="txt"> <b>Email :</b> megamedpromo2019@yahoo.com</p>
        </div>
    </div>
    

    <form action="./contact.php" method="post">
        <label for="" class="titrf">Envoyer un message</label>
        <label for="N">Nom et Prénom</label>
        <input type="text" name="nom" id="N" required placeholder="Entrez votre nom et prénom...">
        <label for="E">E-mail</label>
        <input type="email" name="email" id="E" required placeholder="Entrez votre email...">
        <label for="O">Objet</label>
        <input type="text" name="objet" id="" placeholder="Sujet du message">
        <label for="M" >Message</label>
        <textarea name="message" id="M" placeholder="saisir votre message..." required class="tes"></textarea>
        <input type="submit" value="ENVOYER" class="bout">
    </form>


    <?php 
        include "footer.html" ;
    ?>
    <script src="./index.js"></script>
</body>
</html>