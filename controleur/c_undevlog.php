<?php 
if(isset($_GET['num'])){
		$DevlogDAO= new devlogDAO();
		$unDevlog = $DevlogDAO->get_devlog_By_PK($_GET['num']);
		include'vue/v_undevlog.php';
}
