<?php 

include 'connect_book.php';

if(isset($_POST['book_kamar1'])){
    $nama1 = $_POST['nama1'];
    $email1 = $_POST['email1'];
    $checkin1 = $_POST['checkin1'];
    $checkout1 = $_POST['checkout1'];
    $pembayaran1 = $_POST['pembayaran1'];
    $jumlah_uang1 = $_POST['jumlah_uang1'];

        if($jumlah_uang1 > 250000){
            $kembalian1 = $jumlah_uang1 - 250000;
            echo "Jumlah Kembalian: Rp. $kembalian1";
            $insertQuery = "INSERT INTO kamar1(nama, email, checkin, checkout, metode_pembayaran, jumlah_uang, kembalian)
                        VALUES ('$nama1', '$email1', '$checkin1', '$checkout1', '$pembayaran1', '$jumlah_uang1', '$kembalian1')";
        }
        elseif($jumlah_uang1 < 250000){
            $kurang = 250000 - $jumlah_uang1;
            header("location: uang_kurang.php");
        }
        if($conn->query($insertQuery) === TRUE){
            header("location: sukses.php");
            exit();
        }
        else{
            echo "Error: " . $conn->error;  
        }
    }
else{
    echo "Form submission error.";
}


if(isset($_POST['book_kamar2'])){
    $nama2 = $_POST['nama2'];
    $email2 = $_POST['email2'];
    $checkin2 = $_POST['checkin2'];
    $checkout2 = $_POST['checkout2'];
    $pembayaran2 = $_POST['pembayaran2'];
    $jumlah_uang2 = $_POST['jumlah_uang2'];

        if($jumlah_uang2 > 300000){
            $kembalian2 = $jumlah_uang2 - 300000;
            echo "Jumlah Kembalian: Rp. $kembalian2";
            $insertQuery = "INSERT INTO kamar2(nama, email, checkin, checkout, metode_pembayaran, jumlah_uang, kembalian)
                        VALUES ('$nama2', '$email2', '$checkin2', '$checkout2', '$pembayaran2', '$jumlah_uang2', '$kembalian2')";
        }
        elseif($jumlah_uang2 < 300000){
            $kurang = 300000 - $jumlah_uang2;
            header("location: uang_kurang.php");
        }
        if($conn->query($insertQuery) === TRUE){
            header("location: sukses.php");
            exit();
        }
        else{
            echo "Error: " . $conn->error;
        }
    }
else{
    echo "Form submission error.";
}


if(isset($_POST['book_kamar3'])){
    $nama3 = $_POST['nama3'];
    $email3 = $_POST['email3'];
    $checkin3 = $_POST['checkin3'];
    $checkout3 = $_POST['checkout3'];
    $pembayaran3 = $_POST['pembayaran3'];
    $jumlah_uang3 = $_POST['jumlah_uang3'];

        if($jumlah_uang > 500000){
            $kembalian3 = $jumlah_uang3 - 500000;
            echo "Jumlah Kembalian: Rp. $kembalian3";
            $insertQuery = "INSERT INTO kamar3(nama, email, checkin, checkout, metode_pembayaran, jumlah_uang, kembalian)
                        VALUES ('$nama3', '$email3', '$checkin3', '$checkout3', '$pembayaran3','$jumlah_uang3', '$kembalian3')";
        }
        elseif($jumlah_uang3 < 500000){
            $kurang = 500000 - $jumlah_uang3;
            header("location: uang_kurang.php");
        }
        if($conn->query($insertQuery) === TRUE){
            header("location: sukses.php");
            exit();
        }
        else{
            echo "Error: " . $conn->error;
        }
    }
else{
    echo "Form submission error.";
}

?>