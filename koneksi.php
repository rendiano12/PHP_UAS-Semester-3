<?php

$mysqli = mysqli_connect('localhost', 'root', '', 'sia');

if ($mysqli -> connect_errno) {
    echo 'Gagal mengkoneksi ke MySQL: '. $mysqli -> connect_error;
    exit();
}

?>