<?php   
//vaja meeles pidada, keel, theme
//setcookie("nimi", "Kaeraküsis",time()-3600); //aeg on alati sekundites, ehk 3600 sekundid=1tund

//ostukord, login
session_start();
$_SESSION['nimi'] = "Rain";

print_r($_SESSION['nimi']);






?>