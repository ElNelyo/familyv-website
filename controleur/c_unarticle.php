<?php
if(isset($_GET['num'])){
		$MediaDAO= new mediaDAO();
		$unArticle = $MediaDAO->get_media_By_PK($_GET['num']);
		include'vue/v_unarticle.php';
}

?>