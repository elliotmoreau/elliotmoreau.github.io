<?php
session_start();
if ($_SESSION['admin'] == true) {
echo "";
}
else {
    header("Location: login/index.php");
}
?>



<?php
        $file = fopen('../lastarticleid.txt', 'r+');

        $id = fgets($file);

        fclose($file);
?>



<?php
$target_dir = "../articles/";
$target_file = "$target_dir $id.pdf";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
  echo "Désolé, veuillez changer le nom de l'image celui ci existe deja.";
  $uploadOk = 0;
}


// Allow certain file formats
if($imageFileType != "pdf" ) {
  echo "Désolé, uniquement les PDF accéptes.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<br>Désolé, cela n'a pas marché.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    $file = fopen('../lastarticleid.txt', 'r+');
        $id += 1; // On augmente de 1 ce nombre de pages vues
        fseek($file, 0); // On remet le curseur au début du fichier
        fputs($file, $id); // On écrit le nouveau nombre de pages vues

        fclose($file);
  } else {
    echo "Désolé, cela n'a pas marché.";
  }
}
?>