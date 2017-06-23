<?php
include_once 'DAO/mainDAO.inc.php';
include_once 'vue/top.php';
if(isset($_GET['page'])){
	switch ($_GET['page']) {
		case 'accueil':
			include_once 'controleur/c_index.php';
			break;
		case 'devlog':
			include_once'controleur/c_devlog.php';
			break;
		case 'panel':
			include_once'controleur/c_commingsoon.php';
			break;
		case 'connect':
			include_once'controleur/c_commingsoon.php';
			break;
		case 'info':
			include_once'controleur/c_commingsoon.php';
			break;
		case 'media':
			include_once'controleur/c_commingsoon.php';
			break;
		case 'termes':
			include_once'controleur/c_termes.php';
			break;
		case 'article':
			include_once'controleur/c_unarticle.php';
			break;
		case 'dev':
			include_once'controleur/c_undevlog.php';
			break;


		default:
			include_once 'controleur/c_index.php';
			break;
	}
}else{
	include_once'controleur/c_index.php'; 
}
include_once'vue/bot.php';



?>