<?php
session_start();
if ($_SESSION['admin'] == true) {
echo "";
}
else {
    header("Location: login/index.php");
}
?>

<script src="pdf/pdf.js">
</script>
<script src="pdf/pdf.worker.js"></script>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Avoir un lien-La Gazette Tulliste</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../style.css'>
</head>

<body>

    <div class="container">
        <form id="contact" action="upload.php" method="post" enctype="multipart/form-data">
            <h3>Avoir un lien pour l'image</h3>
                <p>Image: </p><input type="file" name="fileToUpload" id="fileToUpload">
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Envoie">Envoyer</button>
            </fieldset>
        </form>
    </div>

</body>

</html>