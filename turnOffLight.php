<?php
$cod = $_GET['codDemora'];
if($cod==1) //1 APAGA  MAQUINA MALA
{
	system("echo raspberry | sudo -S python /var/www/html/scripts/offMM.py");
}
elseif($cod==2) //2 APAGA MALA CALIDAD
{
        system("echo raspberry | sudo -S python /var/www/html/scripts/offMC.py");
}
elseif($cod=="3") //3 ENCIENDE FALTA DE TRABAJO
{
        system("echo raspberry | sudo -S python /var/www/html/scripts/offFT.py");
}
elseif($cod=="4") //4 ENCIENDE CAMBIO DE ESTILO
{
        system("echo raspberry | sudo -S python /var/www/html/scripts/offCE.py");
}
?>
