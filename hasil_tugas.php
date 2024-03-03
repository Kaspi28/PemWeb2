<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $costumer = $_POST['costumer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    //Data
    if ($jumlah <=0) {
        echo "Jumlah lebih besar dari 0. Silahkan masukan jumlah yang diinginkan";
    } else {
        //Proses pemesanan
        $total_belanja = hitungTotalHarga($produk, $jumlah);

        //Cetak Hasil
        echo "Terima Kasih Atas Pesanan Anda <br> ";
        echo 'Nama Costumer : ' . $costumer . '<br>';
        echo 'Produk Pilihan : ' . $produk . '<br>';
        echo 'Jumlah : ' . $jumlah . '<br>';
        echo 'Total Belanja : ' . $total_belanja ;
    }
} else {
    //Jika formulir tidak dikirim
    echo "Akses Tidak Valid";
}

//Fungsi untuk menghitung
function hitungTotalHarga($produk, $jumlah) {
    //Harga Produk
    $harga_produk = [
        'tv' => 4200000,
        'kulkas' => 3100000,
        'mesin cuci' => 3800000
    ];

    //Menghitung Total Harga Belanja
    $total_belanja = $harga_produk[$produk] * $jumlah;

    return $total_belanja;
}
?>