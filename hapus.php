<?php

include "koneksi.php";

$sql = "ALTER TABLE buku AUTO_INCREMENT = 1;";
$sql .= "DELETE FROM buku WHERE id = ". $_GET['id'];
mysqli_multi_query($mysqli, $sql);

if (mysqli_affected_rows($mysqli) > 0) {
    echo "<script>
        alert('Gagal menghapus data');
        document.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('Berhasil menghapus data');
        document.location.href = 'index.php';
    </script>";
}

?>