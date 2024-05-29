<?php 
require_once("../models/Model.php");
require_once("../models/AgenceModel.php");
require_once("../models/CompteModel.php");
require_once("../models/DemandeModel.php");
require_once("../models/ProfilModel.php");
require_once("../models/TypeCompteModel.php");
require_once("../models/UserModel.php");

// $compte= new Compte ();
// $comptes=$compte->findAll();
$profil= new Profil ();
$profils=$profil->findAll();

$profil->setlibp("abc");
$profil->save();
$profils=$profil->findAll();
var_dump($profils);