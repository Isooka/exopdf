<?php

use Dompdf\Dompdf;

require_once 'autoload.inc.php';

$dompdf = new Dompdf();

$dompdf->loadHTML('Salut je suis Zoukey');

$dompdf->render();

$dompdf->stream();
?>