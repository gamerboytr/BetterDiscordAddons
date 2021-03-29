<?php
echo "<head>";
echo "<title>GamerboyTR Theme Downloader</title>";
echo "</head>";
$file='../Themes/Gamer-Theme/Gamer-Theme.theme.css';
header("Content-Type: application/octet-stream; ");
header("Content-Transfer-Encoding: binary");
header("Content-Length: " . filesize($file) ."; ");
header('Content-Disposition: attachment; filename="'.$file.'"');
readfile($file);
flush();
?>