<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>JogloDhepis</title>
</head>

<body>
  <div class="auth-container" id="family-suite">
    <div class="auth-box">
      <h1>Book</h1>
      <h1>Family Suite</h1> <br>
      <h2 id="price1">500K / Night</h2>
      <br><hr><br>
      <form action="create_booking.php" method="POST">
        <div class="input__group">
          <label for="nama">Nama</label>
          <input type="text" id="nama3" name="nama3" required>
        </div>
        <div class="input__group">
          <label for="email">Email</label>
          <input type="email" id="email3" name="email3" required>
        </div>
        <div class="input__group">
            <label for="checkin">Check-in Date</label>
            <input type="date" id="checkin3" name="checkin3" required>
        </div>
        <div class="input__group">
            <label for="checkout">Check-out Date</label>
            <input type="date" id="checkout3" name="checkout3" required>
        </div>
        <div class="input__group">
            <label for="pembayaran">Metode Pembayaran</label>
            <input type="text" id="pembayaran3" name="pembayaran3" required>
        </div>
        <div class="input__group">
            <label for="jumlah_uang">Jumlah Uang</label>
            <input type="text" id="jumlah_uang3" name="jumlah_uang3" required>
        </div>
        <button class="btn" type="submit" value="book_kamar3" name="book_kamar3">Book</button>
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>