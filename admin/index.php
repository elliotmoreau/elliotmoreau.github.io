<?php
session_start();
if ($_SESSION['admin'] == true) {
echo "";
}
else {
    header("Location: login/index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ecrire un article-La Gazette Tulliste</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>

<body>

    <div class="container">
        <form id="contact" action="upload.php" method="post" enctype="multipart/form-data">
            <h3>Ecrire Un Nouvel Article</h3>
            <h4>Remplissez les formulaires</h4>
            <fieldset>
                <input placeholder="Titre de l'article" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Description (une a deux phrases)" type="text" tabindex="2" required>
            </fieldset>
            <fieldset>
            <input placeholder="Url de l'image" type="text" tabindex="2" required>
            </fieldset>
            <fieldset>
                <p>Pdf de google slide: </p><input type="file" name="fileToUpload" id="fileToUpload">
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Envoie">Envoyer</button>
            </fieldset>
            <a href="image/">Avoir un lien pour l'image</a>
        </form>
    </div>

</body>

</html>