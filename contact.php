<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact_style.css">
    <title></title>
</head>
<body>

<?php
    include_once('entete.php')
?>
    
<div class="divform">
<h1>Contactez notre équipe CaninCâlin</h1>
    <form action="#" name="monFormulaire "method="post">

        <label for="nom">Nom, prénom</label>
        <input type="text" id="nom" name="nom" required>

        <label for="identité">Qui êtes-vous ? </label>
        <select name="" class="qui">
            <option value="" selected disabled>Sélectionner</option>
            <option value="">Un(e) de nos compagnons</option>
            <option value="">Un(e) nouveau/elle compagnon</option>
            <option value="">Un de nos partenaires</option>
            <option value="">Autre</option>
        </select>

        <label for="email">Votre Email</label>
        <input type="email" id="email" name="email" required>

        <label for="telephone">Numéro de téléphone</label>
        <input type="text" id="telephone" name="telephone" required>

        <label for="date">Date de l'incident s'il y a eu :</label>
        <input type="date" id="date" name="date" required>

        <label for="message">Un message à nous adresser ? </label>
        <label for="message" id="message">(Les raisons de votre contact, l'état de votre compagnon, les dernières prises de médicaments...)</label>
        <textarea id="message" name="message" rows="4"></textarea>

        <input type="submit" value="Contactez-nous" class="sub">

    </form>
</div>

    
<?php
include_once('foot.php');
?>

</body>
</html>
