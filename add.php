<?php

$conn = mysqli_connect("localhost", "root", "landais40", "comtool");

$societe = filter_input(INPUT_POST, 'societe');
$effectif = filter_input(INPUT_POST, 'effectif');
$genre = filter_input(INPUT_POST, 'genre');
$prenom = filter_input(INPUT_POST, 'prenom');
$nom = filter_input(INPUT_POST, 'nom');
$fonction = filter_input(INPUT_POST, 'fonction');
$service = filter_input(INPUT_POST, 'service');
$role = filter_input(INPUT_POST, 'role');
$email = filter_input(INPUT_POST, 'email');
$web = filter_input(INPUT_POST, 'web');
$code_postal = filter_input(INPUT_POST, 'code_postal');
$pays = filter_input(INPUT_POST, 'pays');
$cible = filter_input(INPUT_POST, 'cible');
$tel1 = filter_input(INPUT_POST, 'tel1');
$tel2 = filter_input(INPUT_POST, 'tel2');
$ville = filter_input(INPUT_POST, 'ville');
$priorite = filter_input(INPUT_POST, 'priorite');
$langue = filter_input(INPUT_POST, 'langue');

$sql = "INSERT INTO contacts(Origine, Societe, Effectif, Genre, Prenom, Nom, Fonction, Service, Role, Email, Site_web, Code_postal, Pays, Cible, Tel1, Tel2, Ville, Priorité, Langue, Campagne) VALUES ('', '$societe', '$effectif', '$genre', '$prenom', '$nom', '$fonction', '$service', '$role', '$email', '$web', '$code_postal', '$pays', '$cible', '$tel1', '$tel2', '$ville', '$priorite', '$langue', '')";

echo $langue;
if ($conn->query($sql) === TRUE)
{
  echo "le contact a été créé!";
  sleep(10);
  header('Location: index.php');
  exit();
}

else
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


 ?>
