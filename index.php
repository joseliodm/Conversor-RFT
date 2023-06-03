<?php
require_once 'rtf.php';

$reader = new RtfReader();
$rtf = file_get_contents("Teste.rtf"); // Ou uma string
$reader->Parse($rtf);
$formatter = new RtfHtml();
echo $formatter->Format($reader->root);
?>