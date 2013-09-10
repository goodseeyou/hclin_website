<?php 
$query = $_GET['q']; 
switch($query){
	case "1":
		echo "news 1";
		for($i=0;$i<100;$i++)
			echo "news $i<br/>";
		break;
	default:
		echo "<li>news d</li>";
		break;
}
?>