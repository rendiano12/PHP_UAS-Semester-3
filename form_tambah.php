<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <link rel="stylesheet" href="style.css">
    <title>UAS Pemrograman Web</title>
    <style>
        /* Content */
        div.content h1 {
            padding: 5px;
            border: 2px solid black;
            width: fit-content;
        }

        div.content a {
            display: inline-block;
            font-weight: bold;
            padding: 5px;
            color: white;
            text-decoration: none;
            background-color: darkorange;
            margin-bottom: 15px;
        }

        a.kembali:hover {
            background-color: orange;
        }

        div.content {
            background-color: white;
            padding: 50px;
            width: 60%;
            margin: 50px auto;
            border: 1px solid black;
        }

        fieldset {
            padding: 10px;
            border: 2px outset black;
            width: fit-content;
        }

        legend {
            padding: 5px;
            border: 2px outset black;
        }
    </style>
</head>
<body>
    <header>
        <h1>TOKO BUKU PEMROGRAMAN ONLINE</h1>
    </header>

    <main>
        <div class="content">
            <h1>Menambah Data Buku</h1><br><br>
            <a class="kembali" href="./index.php">KEMBALI</a>
            <fieldset>
                <legend>ISI DATA BUKU</legend>
                <form method="post" action="tambah.php">
                    <table>
                        <tr>
                            <td>Judul Buku</td>
                            <td>:</td>
                            <td><input type="text" name="judul" autocomplete="off" required></td>
                        </tr>
                        <tr>
                            <td>Pengarang</td>
                            <td>:</td>
                            <td><input type="text" name="pengarang" autocomplete="off" required></td>
                        </tr>
                        <tr>
                            <td>Genre</td>
                            <td>:</td>
                            <td><input type="text" name="genre" autocomplete="off" required></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <td><input type="number" name="harga" autocomplete="off" required></td>
                        </tr>
                        <tr>
                            <td>Cover</td>
                            <td>:</td>
                            <td><input type="file" name="cover" autocomplete="off" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><br><input type="submit" value="Tambah" name="tambah"></td>
                        </tr>
                    </table>
                </form>
            </fieldset>
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