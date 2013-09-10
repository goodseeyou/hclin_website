<?php 
$query = $_GET['q']; 
switch($query){
	case "1":
		echo "profile 1";
		break;
	default:
		echo "<li>profile d</li>";
		break;
}
?>