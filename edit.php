<?php

include "koneksi.php";

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $genre = $_POST['genre'];
    $harga = $_POST['harga'];
    $cover = $_POST['cover'];

    $sql = "ALTER TABLE buku AUTO_INCREMENT = 1;";
    $sql .= "UPDATE buku 
            SET judul = '$judul', 
                pengarang = '$pengarang', 
                genre = '$genre',
                harga = '$harga',
                cover = '$cover' 
            WHERE id = $id"; 
    $data = mysqli_multi_query($mysqli, $sql);
    if ($data) {
        echo "<script>
            alert('Berhasil mengubah data');
            document.location.href = 'index.php';
        </script>";
    } else { 
        echo "Error: Gagal update data. " . mysqli_error($mysqli); 
        echo "<br><a href=index.php>KEMBALI</a>"; 
    }
}

?>