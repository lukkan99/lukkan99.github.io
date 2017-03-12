<?php
// Set Script by 9/11.
// HTTP Variables: code, id

$ScriptCode = htmlspecialchars($_GET["code"]);
$GameId = htmlspecialchars($_GET["id"]);
$open = fopen("id","w+");
$open2 = fopen("code","w+");
fwrite($open, $GameId);
fclose($open);
fwrite($open2, $ScriptCode);
fclose($open2);

echo "Success with changing ID to : {$GameId} and script to : {$ScriptCode}";
?> 