<?php 
$query = $_GET['q']; 
switch($query){
	case "1":
		echo "publication 1";
		break;
	default:
		echo "<li>publication d</li>";
		break;
}
?>