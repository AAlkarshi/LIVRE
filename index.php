<?php

require "Livre.php";
require "Auteur.php";

$AuteurSK = new Auteur("Stephen", "King", []);
echo $AuteurSK . "<br/>";


$Ca = New Livre("Ca",1138, 1986, 20.00, $AuteurSK);
$Simetierre = New Livre("Simetierre",374, 1983, 15.00, $AuteurSK);
$LeFleau = New Livre("Le Fléau",823, 1978, 14.00,$AuteurSK);
$Shining = New Livre("Shining",447, 1977, 16.00 , $AuteurSK);

$livres = array($Ca, $Simetierre , $LeFleau , $Shining);
//$Ca->afficherBibliographie($livres);


$AuteurSK->afficherBibliographie();




?>