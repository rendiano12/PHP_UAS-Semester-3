<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <link rel="stylesheet" href="style.css">
    <title>UAS Pemrograman Web</title>
</head>
<body>
    <header>
        <h1>TOKO BUKU PEMROGRAMAN ONLINE</h1>
    </header>

    <main>       
        <div class="content">
            <h2><u>Daftar Buku yang Tersedia</u></h2><br><br>
            <a class="tambah" href="form_tambah.php">TAMBAH DATA</a>
            <table class="data-buku">
                <tr>
                    <th>NO</th>
                    <th>JUDUL BUKU</th>
                    <th>PENGARANG</th>
                    <th>GENRE</th>
                    <th>HARGA</th>
                    <th>COVER BUKU</th>
                    <th>OPSI</th>                    
                </tr>
                
                <?php 
                    include "koneksi.php";
                    $sql = "SELECT * FROM buku";
                    $data = mysqli_query($mysqli, $sql);
                    while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $d['id']; ?></td>
                    <td><?php echo $d['judul']; ?></td>
                    <td><?php echo $d['pengarang']; ?></td>
                    <td><?php echo $d['genre']; ?></td>
                    <td><?php echo $d['harga']; ?></td>
                    <td><img width="100" src="./img/<?php echo $d['cover']; ?>"></td>
                    <td>
                        <a class="edit" href="form_edit.php?id=<?php echo $d['id']; ?>&judul=<?php echo $d['judul']; ?>">EDIT</a>
                        <a class="hapus" href="hapus.php?id=<?php echo $d['id']; ?>&judul=<?php echo $d['judul']; ?>" onclick="return confirm('Hapus Data?')">HAPUS</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <div class="navigation">
            <h2>Website UMP</h2><br>
            <ul>
                <li><a href="https://ump.ac.id/" target="_blank">ump.ac.id</a></li>
                <li><a href="http://informatika.ump.ac.id/" target="_blank">informatika.ump.ac.id</a></li>
                <li><a href="https://fts.ump.ac.id/" target="_blank">fts.ump.ac.id</a></li>
            </ul>
        </div>
    </main>

    <footer>
        <div>
            <h2>Nama</h2>
            <hr>
            <p>&copy; 2003040117 Rendiano Pramuditya Ardhi</p>
            <p>&copy; 2003040135 Muhammad Ulil Azmi</p>
        </div>
        <div>
            <h2>Link Belajar Coding</h2>
            <hr>
            <a href="https://codepolitan.com/" target="_blank">codepolitan.com</a><br>
            <a href="https://petanikode.com/" target="_blank">petanikode.com</a><br>
            <a href="https://malasngoding.com/" target="_blank">malasngoding.com</a><br>
            <a href="https://gilacoding.com/" target="_blank">gilacoding.com</a>
        </div>
    </footer>
</body>
</html>