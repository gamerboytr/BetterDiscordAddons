<?
$file='Gamer-Theme.theme.css';
header("Content-Type: application/octet-stream; ");
header("Content-Transfer-Encoding: binary");
header("Content-Length: " . filesize($file) ."; ");
header('Content-Disposition: attachment; filename="'.$file.'"');
readfile($file);
flush();
?>