<?php

define("WORKDIR", dirname(__FILE__));

$tableauControleurs = ["controleurVoiture", "controleurUtilisateur"];
$actionParDefaut = array(
	"controleurVoiture" => "lireVoitures",
	"controleurUtilisateur" => "lireUtilisateurs"
);

if (isset($_GET["controleur"])) $controleur = $_GET["controleur"];
else $controleur = "";

if(!in_array($controleur, $tableauControleurs)) {
	$controleur = $tableauControleurs[0];
}

if (isset($_GET["action"])) $action = $_GET["action"];
else $action = "";

require_once(WORKDIR . "/config/connexion.php");
Connexion::connect();
require_once(WORKDIR . "/controleur/$controleur.php");

$actionsControleur = get_class_methods($controleur);

if (!in_array($action, $actionsControleur)) {
	$action = $actionParDefaut[$controleur];
}

$controleur::$action();

?>