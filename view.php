<?php
    include "koneksi.php";
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
    $sql = "INSERT INTO bukutamu (nama, email,komentar) VALUES ('$nama', '$email', '$komentar')";
    $koneksi->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Buku Tamu</title>
</head>
<body>
    <!-- Bagian Top -->
    <nav>
        <ul>
            <li class="uts">Praktikum 8 Web-C</li>
            <li class="nama">Muhammad Zaim Maulana (19650058)</li>
        </ul>
    </nav>
    <!-- Akhir Bagian Top -->
    <!-- Header -->
    <header></header>
    <!-- Akhir header -->
    <!-- Pembungkus Halaman Web -->
    <div class="pembungkus">
        <!-- Bagian Konten -->
        <div class="konten clearfix">
            <!-- Bagian Form -->
            <form action="view.php" method="post">
                <table>
                    <tr>
                        <td>
                            <label for="nama">Nama :</label>
                            <input type="text" name="nama" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email :</label>
                            <input type="text" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="komentar">Komentar :</label><br>
                            <textarea name="komentar" id="" rows="5"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="KIRIM"></td>
                    </tr>
                </table>
            </form>
            <!-- Akhir bagian Form -->
            <!-- bagian output table -->
            <div>
                <h3>Tabel Buku Tamu</h3>
                <table id="hasilbukutamu">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Komentar</th>
                    </tr>
                <?php
                    $no = 1;
                    include "koneksi.php";
                    $a = "SELECT * FROM bukutamu";
                    $b = $koneksi->query($a);
                    while ($data=$b->fetch_array()) {?>
                        <tr>
                            <td> <?php echo $no++; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['komentar']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <!-- akhir bagian output table -->
        </div>
        <!-- Akhir Bagian Konten -->
        <!-- footer -->
        <footer>
            <p>Copyright &#169; 2021 Muhammad Zaim Maulana</p>
        </footer>
        <!-- akhir footer -->
    </div>
    <!-- Akhir Pembungkus Halaman Web -->
</body>
</html>