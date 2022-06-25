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
        $file = fopen('../../lastarticleid.txt', 'r+');

        $id = fgets($file)+1;

        fclose($file);
?>

<?php
$extention = strtolower(pathinfo(basename($_FILES["fileToUpload"]["name"]),PATHINFO_EXTENSION));
$target_dir = "../../img/articles/";
$target_file = "$target_dir $id.$extention";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$filename = $id.".$extention";

// Check if file already exists
if (file_exists($target_file)) {
  echo "Désolé, veuillez changer le nom de l'image celui ci existe deja.";
  $uploadOk = 0;
}

// Check file size

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "pdf" ) {
  echo "Désolé, uniquement PDF, JPG, JPEG, PNG & GIF sont accéptes.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<br>Désolé, cela n'a pas marché.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Le lien est : https://journal.elliotmoreau.fr/img/". htmlspecialchars( $filename). "";
  } else {
    echo "Désolé, cela n'a pas marché.";
  }
}
?>