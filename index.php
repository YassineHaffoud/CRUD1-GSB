

<?php
include 'data/class.pdogsb.php';
include "Vue/v_entete.php";
/* création de l'objet $pdo d'accès aux données*/
$pdo = PdoGsb::getPdoGsb();

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

	 
switch($uc)
{
	case 'accueil':
    	{include("Controleur/c_accueil.php");break;}
}


include "Vue/v_pied.php";