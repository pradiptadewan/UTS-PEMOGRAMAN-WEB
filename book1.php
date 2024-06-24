<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>JogloDhepis</title>
</head>

<body>
  <div class="auth-container" id="standar-double">
    <div class="auth-box">
      <h1>Book</h1>
      <h1>Standart Double</h1> <br>
      <h2 id="price1">250K / Night</h2>
      <br><hr><br>
      <form action="create_booking.php" method="POST">
        <div class="input__group">
          <label for="nama">Nama</label>
          <input type="text" id="nama1" name="nama1" required>
        </div>
        <div class="input__group">
          <label for="email">Email</label>
          <input type="email" id="email1" name="email1" required>
        </div>
        <div class="input__group">
            <label for="checkin">Check-in Date</label>
            <input type="date" id="checkin1" name="checkin1" required>
        </div>
        <div class="input__group">
            <label for="checkout">Check-out Date</label>
            <input type="date" id="checkout1" name="checkout1" required>
        </div>
        <div class="input__group">
            <label for="pembayaran">Metode Pembayaran</label>
            <input type="text" id="pembayaran1" name="pembayaran1" required>
        </div>
        <div class="input__group">
            <label for="jumlah_uang">Jumlah Uang</label>
            <input type="text" id="jumlah_uang1" name="jumlah_uang1" required>
        </div>
        <button class="btn" type="submit" value="book_kamar1" name="book_kamar1">Book</button>
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>