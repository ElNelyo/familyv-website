<?php
$mediaDAO = new mediaDAO();
$DernierArticle =  $mediaDAO->get_last_media();



$devlogDAO = new devlogDAO();
$DernierDevlog = $devlogDAO->get_last_devlog();


include_once'vue/v_index.php';



?>