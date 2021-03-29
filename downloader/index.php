<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamerboyTR Downloader</title>
    <link rel="stylesheet" href="res/style.css">
</head>

<body>
    <div class="container">
        <div class="title">
            <h1><b>GamerboyTR Tema İndiricisi</b></h1>
        </div>
    </div>
</body>
<?
$file='../Themes/Gamer-Theme/Gamer-Theme.theme.css';
header("Content-Type: application/octet-stream; ");
header("Content-Transfer-Encoding: binary");
header("Content-Length: " . filesize($file) ."; ");
header('Content-Disposition: attachment; filename="'.$file.'"');
readfile($file);
flush();
?>
</html>