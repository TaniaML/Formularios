
<?php 
require_once __DIR__ . '/vendor/autoload.php';
require_once("req_u.php");

$plantilla = getPlantilla();
$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
$mpdf->WriteHTML($plantilla);

$mpdf->Output();
?>

