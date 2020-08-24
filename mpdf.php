<?php
require_once __DIR__ . '/mpdf-6.1.0/mpdf.php';
// 支持中文zh
$mpdf = new mPDF('zh-cn');

$html = file_get_contents('./word.html');

$mpdf->WriteHTML($html);
$mpdf->Output('mpdf.pdf', 'I');