<?php

$name = $_GET['testo'];

$testo = ' i miei amici mi chiamano mark, il mio gatto si chiama Seth, mia sorella si chiama valeria';
echo 'il testo è lungo: '.strlen($testo).' |' ;

$result = str_replace($name,'***',$testo);

echo $result;
echo ' | lunghezza finale testo'.strlen($result);

?>
