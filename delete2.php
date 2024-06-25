<?php
// Memeriksa apakah ID disediakan dalam URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "joglodephis_book";

    // Membuat koneksi ke database
    $connection = new mysqli($servername, $username, $password, $database);

    // Memeriksa koneksi
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Menggunakan prepared statement untuk mencegah SQL injection
    $stmt = $connection->prepare("DELETE FROM kamar2 WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Menjalankan statement
    if ($stmt->execute()) {
        // Mengarahkan kembali ke halaman admin.php setelah penghapusan berhasil
        header("location: admin.php");
        exit;
    } else {
        // Menampilkan pesan kesalahan jika penghapusan gagal
        echo "Error: " . $stmt->error;
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $connection->close();
} else {
    // Mengarahkan kembali ke halaman admin.php jika ID tidak disediakan
    header("location: admin.php");
    exit;
}
?>