<?php

include('../vendor/autoload.php');

$mpdf = new Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Antrian Nomor 1 >> Percobaan</h1>');
$mpdf->Output("Antrian.pdf", 'I');