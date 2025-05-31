<!DOCTYPE html>
<html>
<body>

<?php
$user_whatsapp = "my password is jay123";
$user_chg ='a';
$fc=str_replace($user_chg, "m", $user_whatsapp);
$user_chg ='y';
$sc=str_replace($user_chg, "r", $fc);
$user_chg ='p';
$lc=str_replace($user_chg, "s", $sc);
$nlc=strrev($lc);
echo $nlc;
?> 
 
</body>
</html>
