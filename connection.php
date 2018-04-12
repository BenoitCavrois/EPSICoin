<?php
session_start();

//recupération des données
 $identifiant = $_POST['identifiant'];
 $mdp = $_POST['password'];

$_SESSION['identifiant'] = $identifiant;

//connection
$bdd = new PDO('mysql:host=localhost;dbname=EPSICoin;charset=utf8', 'root', 'root');

//vérification des identifiants Etudiant
$reqApprennant = $bdd->prepare('SELECT id FROM etudiant WHERE Identifiant = :identifiant AND Mdp = :password');
$reqApprennant->execute(array(
    'identifiant' => $identifiant,
    'password' => $mdp));
 
$resultatApprennant = $reqApprennant->fetch();

//vérification des identifiants intervenant
$reqIntervenant = $bdd->prepare('SELECT id FROM intervenant WHERE Identifiant = :identifiant AND Mdp = :password');
$reqIntervenant->execute(array(
    'identifiant' => $identifiant,
    'password' => $mdp));
 
$resultatIntervenant = $reqIntervenant->fetch();

//vérification des identifiants intervenant
$reqPedago = $bdd->prepare('SELECT id FROM responsable_pedagogique WHERE Identifiant = :identifiant AND Mdp = :password');
$reqPedago->execute(array(
    'identifiant' => $identifiant,
    'password' => $mdp));
 
$resultatPedago = $reqPedago->fetch();

if($resultatPedago){
	header('Location: Page_Pedagogie.php');
}
else if($resultatIntervenant){
	header('Location: Page_Intervenant.php');
}
else if($resultatIntervenant){
	header('Location: Page_Intervenant.php');
}
else if($resultatApprennant){
	header('Location: Page_Apprennant.php');
}
else{
	header('Location: Login.php');
}
?>