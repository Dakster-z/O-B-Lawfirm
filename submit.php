<?php
if (isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["message"])) {
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $file = fopen("submissions.txt", "a");
  fwrite($file, "Nom et prénom : $name\n");
  fwrite($file, "Numéro de téléphone : $phone\n");
  fwrite($file, "Adresse e-mail : $email\n");
  fwrite($file, "Objet du rendez-vous : $message\n\n");
  fclose($file);

  header("Location: about.html");
  exit;
}
?>