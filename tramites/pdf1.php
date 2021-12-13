<?php


require_once __DIR__ . '/vendor/autoload.php';
require_once("tramite.php");
$plantilla = getPlantilla();
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($plantilla);
$mpdf->Output();
?>