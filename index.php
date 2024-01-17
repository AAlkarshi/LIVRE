<?php

require "Livre.php";
require "Auteur.php";



$AuteurSK = new Auteur("Stephen", "King");
echo $AuteurSK . "<br/>";



//Entre ds objet LIVRE et récup des données avec le GET
//echo $Ca->getPrix();


$Ca = New Livre("Ca",1138, 1986, 20.00, []);
$Simetierre = New Livre("Simetierre",374, 1983, 15.00,[]);
$LeFleau = New Livre("Le Fléau",823, 1978, 14.00, []);
$Shining = New Livre("Shining",447, 1977, 16.00 ,[]);

$livres = array($Ca, $Simetierre , $LeFleau , $Shining);
$Ca->afficherBibliographie($livres);





?>