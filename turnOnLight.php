<?php
$cod = $_GET['codDemora'];
if($cod=="1") //1 ENCIENDE MAQUINA MALA
{
        system("echo raspberry | sudo -S python /var/www/html/scripts/onMM.py");
}elseif($cod=="2") //2 ENCIENDE MALA CALIDAD
{
        system("echo raspberry | sudo -S python /var/www/html/scripts/onMC.py");
}elseif($cod=="3") //3 ENCIENDE FALTA DE TRABAJO
{
        system("echo raspberry | sudo -S python /var/www/html/scripts/onFT.py");
}
elseif($cod=="4") //4 ENCIENDE CAMBIO DE ESTILO
{
        system("echo raspberry | sudo -S python /var/www/html/scripts/onCE.py");
}
?>
