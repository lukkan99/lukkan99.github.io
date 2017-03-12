<?php
// Add Log by 9/11.
// HTTP Variables: id

$PlaceId = htmlspecialchars($_GET["id"]);
$open = fopen("placelogs","a+");
fwrite($open, "GameID[" . $PlaceId "] is running your LoadScript.\n");
fclose($open);

echo "Success!";
?> 