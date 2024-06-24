<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>JogloDhepis</title>
</head>

<body>
  <div class="auth-container" id="deluxe-double">
    <div class="auth-box">
      <h1>Book</h1>
      <h1>Deluxe Double</h1> <br>
      <h2 id="price1">300K / Night</h2>
      <br><hr><br>
      <form action="create_booking.php" method="POST">
        <div class="input__group">
          <label for="nama">Nama</label>
          <input type="text" id="nama2" name="nama2" required>
        </div>
        <div class="input__group">
          <label for="email">Email</label>
          <input type="email" id="email2" name="email2" required>
        </div>
        <div class="input__group">
            <label for="checkin">Check-in Date</label>
            <input type="date" id="checkin2" name="checkin2" required>
        </div>
        <div class="input__group">
            <label for="checkout">Check-out Date</label>
            <input type="date" id="checkout2" name="checkout2" required>
        </div>
        <div class="input__group">
            <label for="pembayaran">Metode Pembayaran</label>
            <input type="text" id="pembayaran2" name="pembayaran2" required>
        </div>
        <div class="input__group">
            <label for="jumlah_uang">Jumlah Uang</label>
            <input type="text" id="jumlah_uang2" name="jumlah_uang2" required>
        </div>
        <button class="btn" type="submit" value="book_kamar2" name="book_kamar2">Book</button>
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>