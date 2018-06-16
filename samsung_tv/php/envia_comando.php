<?php
$comando = $_POST['c'];
$port = fopen('dev/cu.usbmodem1431', 'w+');
fwrite($port, '^');
fwrite($port, $comando);
fwrite($port, '$');
sleep(1);
$resposta = fgets($port);
fclose($port);

print $resposta;
?>