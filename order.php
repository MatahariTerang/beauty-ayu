<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $package = htmlspecialchars($_POST['package']);
    $Alamat = htmlspecialchars($_POST['Alamat']);

    $order = "Name: $name\nEmail: $email\nPackage: $package\nAlamat: $Alamat\n\n";
    file_put_contents('datapesanan.txt', $order, FILE_APPEND);

    echo "<p>Terimah Kasih Telah Memesan! Pesanan kamu Akan Segera Di proses.</p>";
    echo "t"
    echo "<a href='tampilan.html'>kembali ke beranda</a>";
} else {
    echo "<p>Metode permintaan tidak valid</p>";
}
?>
