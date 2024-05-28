<?php
if (isset($_POST['download'])) {
    $imgUrl = $_POST['imgUrl'];
    $ch = curl_init($imgUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $download = curl_exec($ch);
    curl_close($ch);
    header('content-type: image/jpg')
    header('content-Disposition: attachment; filename="thumnbnail.jpg"')
    echo $download;
}
?>