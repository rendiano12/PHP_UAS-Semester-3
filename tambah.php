<?php 

include "koneksi.php";

if (isset($_POST['tambah'])) {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $genre = $_POST['genre'];
    $harga = $_POST['harga'];
    $cover = $_POST['cover'];

    $sql = "ALTER TABLE buku AUTO_INCREMENT = 1;";
    $sql .= "INSERT INTO buku (judul, pengarang, genre, harga, cover) 
            VALUES ('$judul', '$pengarang', '$genre', '$harga', '$cover')";

    if (mysqli_multi_query($mysqli, $sql) > 0) {
        echo "<script>
            alert('Berhasil menambah data');
            document.location.href = 'index.php';
        </script>";
    } else if (mysqli_multi_query($mysqli, $sql) == 0) {
        echo "<script>
            alert('Anda membatalkan penambahan data');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($mysqli);
    } 
}

?>