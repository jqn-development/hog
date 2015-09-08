<?php 
require('includes/config.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
// Query by column
// $about = mysql_query("SELECT * FROM pages WHERE pageID='1'");

// $about_section = mysql_fetch_object($about);

// echo $about_section->pageCont;

$query = "SELECT * FROM pages"; 
	 
$result = mysql_query($query) or die(mysql_error());


while($row = mysql_fetch_array($result)){
	// echo $row['pageCont'] . " ";
	var_dump($row[3]);
}

?>
</body>
</html>