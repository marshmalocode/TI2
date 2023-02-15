<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Document</title>
</head>

<body>
    <h1 id="titre">Le livre d'or</h1>
    <div class="pageflex">
        <img src="img/email.png" alt="email">
        <form action="" method="POST" id="formulaire">
            <h2 class="message"> Laissez-nous un message :</h2>
            <div class="conteneurChampsLabelInput">
                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname" placeholder="Votre prénom" autocomplete="given-name" maxlength="50">
            </div>
            <br>
            <div class="conteneurChampsLabelInput">
                <label for="lastname">Nom :(*)</label>
                <input type="text" name="lastname" placeholder="Votre nom" autocomplete="family-name" maxlength="50">
            </div>
            <br>
            <div class="conteneurChampsLabelInput">
                <label for="usermail">Adresse mail :(*)</label>
                <input type="email" name="usermail" placeholder="Votre adresse mail" autocomplete="email" maxlength="100" required>
            </div>
            <br>
            <div class="conteneurChampsLabelInput">
                <label for="message" class="labelcommentaire">Commentaire :(*)</label>
                <textarea id="textarea" name="message" cols="50" rows="10" maxlength="600" placeholder="veuillez laissez votre commentaire ici" required>
            </textarea>
            </div>
            <div style="float: right;" id="divCompteur"></div>

            <h5>Champs requis (*)</h5>
            <div class="positionbouton">
                <input type="button" id="captchaValidate" value="Envoyer">
            </div>
            <br>
            <br>

            <div class="captcha">
                <p id="captcha"></p></br><br>
                <div class="positionbouton">
                    <button id="captchaRefresh" type="button">Refresh</button><span></span></br>
                </div>
                <br>
                <br>
                <input id="captchaInput" type="text" placeholder="Entrez le captcha">

            </div>
        </form>
        <script src="js/captcha.js"></script>
    </div>
</body>

</html>