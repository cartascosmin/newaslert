<?php 
require_once("../includes/database.php");
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset="UTF-8" />
<title>News Alert</title>
</head>
<body>
<div>
<h1>Latest News</h1>
</div>
</body>
<div>Copyright Cosmin Cartas</div>
</html>
<?php
if(isset($database->connection)){
$database->closeConnection(); 
}
?>