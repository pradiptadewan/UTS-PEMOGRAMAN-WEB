<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" />
  <title>Homestay Joglo Dhepis</title>
  <style>
    .logout{
      padding: 0.75rem 2rem;
      font-size: 1rem;
      background-color: red;
      outline: none;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>

<body>
<!-- Navbar -->
  <nav>
    <div class="nav__bar">
      <div class="nav__header">
        <div class="logo nav__logo">
          <div class="judul-nav">JD</div>
          <span>HOMESTAY<br />JOGLODHEPIS</span>
          <div></div>
          <i class="ri-star-fill"></i>
          <i class="ri-star-fill"></i>
          <i class="ri-star-fill"></i>
          <i class="ri-star-fill"></i>
          <i class="ri-star-fill"></i>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#about">Tentang Kami</a></li>
        <li><a href="room.html">Ruangan</a></li>
        <li><a href="#fiturr">Fasilitas</a></li>
        <li><a href="logout.php" class="logout">Logout</a></li>
      </ul>
    </div>
  </nav>

  <header class="header" id="home">
    <div class="section__container header__container">
      <p class="section__subheader">TENTANG KAMI</p>
      <h1>Homestay Mewah<br />Untuk Liburan Anda</h1>
      <button class="btn"  onclick="window.location.href='room.html'">PESAN SEKARANG</button>
    </div>
  </header>
<!-- Navbar -->

<!-- Tentang Kami -->
  <section class="about" id="about">
    <div class="section__container about__container">
      <div class="about__grid">
        <div class="about__image">
          <img src="gambar/about--1.jpg" alt="Joglo Dhepis">
        </div>
        <div class="about__card">
          <span> <i class="ri-user-line"></i></span>
          <h4>Bintang Lima</h4>
          <p>
            Fasilitas dan Pelayanan yang Menjaga Keamanan dan Kenyamanan
          </p>
        </div>
        <div class="about__image">
          <img src="gambar/about--2.jpg" alt="Joglo Dhepis">
        </div>
        <div class="about__card">
          <span><i class="ri-calendar-check-line"></i></span>
          <h4>Lingkungan yang Nyaman</h4>
          <p>Rasakan Kenikmatan Menginap di Tempat Kami</p>
        </div>
      </div>
      <div class="about__content">
        <p class="section__subheader" id="tentang"> TENTANG KAMI</p>
        <h2 class="section__header"></h2>
        <p class="section__description">
          Mari jelajahi kemewahan di penginapan kami, tempat kenyamanan dan keindahan bersatu.
          Di sini, Anda akan menemukan pengalaman yang tak terlupakan, di mana setiap sudut memancarkan keanggunan dan
          keindahan.
          Sambutlah perjalanan Anda ke tempat yang penuh pemandangan indah di penginapan kami.
        </p>
        <button class="btn" onclick="window.location.href='room.html'">Booking Sekarang</button>
      </div>
    </div>
  </section>
<!-- Tentang Kami -->

<!-- Fitur -->
<section class="section__container feature__container" id="feature">
  <p class="section__subheader">FASILITAS</p>
  <h2 class="section__header" id="fiturr">FITUR</h2>
  <div class="feature__grid">
    <div class="feature__card">
      <span><i class="ri-thumb-up-line"></i></span>
      <h4>Punya Rating Yang Tinggi</h4>
      <p>
        Kami bangga menerima peringkat tinggi dan ulasan positif.
      </p>
    </div>
    <div class="feature__card">
      <span><i class="ri-time-line"></i></span>
      <h4>Jam Tenang</h4>
      <p>
        Kami memahami bahwa kedamaian dan istirahat
        tanpa gangguan sangat penting bagi anda.
      </p>
    </div>
    <div class="feature__card">
      <span><i class="ri-map-pin-line"></i></span>
      <h4>Lokasi Terbaik</h4>
      <p>
        Di situs pemesanan penginapan kami, kami bangga menawarkan
        akomodasi di lokasi paling prima dan paling dicari.
      </p>
    </div>
    <div class="feature__card">
      <span><i class="ri-close-circle-line"></i></span>
      <h4>Pembatalan Gratis</h4>
      <p>
        Kami paham bahwa rencana perjalanan dapat berubah sewaktu-waktu
        maka dari itu kami menawarkan fleksibilitas pembatalan gratis.
      </p>
    </div>
    <div class="feature__card">
      <span><i class="ri-wallet-line"></i></span>
      <h4>Opsi Pembayaran</h4>
      <p>
        Situs pemesanan penginapan kami menawarkan berbagai
        macam opsi pembayaran yang nyaman dan sesuai dengan preferensi anda.
      </p>
    </div>
    <div class="feature__card">
      <span><i class="ri-coupon-line"></i></span>
      <h4>Penawaran Spesial</h4>
      <p>
        Nikmati Kenyamanan tanpa batas dengan harga terbaik.
        pesan sekarang untuk liburan tak terlupakan!
      </p>
    </div>
  </div>
</section>
<!-- Fitur -->

<!-- Maps -->
<br><br><hr>
<h2 id="location">Lokasi</h2>
<div class="maps" id="lokasi">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15818.19733330406!2d110.1971244808419!3d-7.623914270958199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8dac1cac2513%3A0x1fc9cfb8bf75a3b!2sGRIYO%20DHAHAR%20JOGLO%20DHEPIS!5e0!3m2!1sen!2sid!4v1715325084943!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div><br><br>
<!-- Maps -->

<!-- Footer -->
<footer class="footer">
  <div class="section__container footer__container">
    <div class="footer__col">
      <div class="logo footer__logo">
        <div>JD</div>
        <span>HOMESTAY<br />JOGLODHEPIS</span>
      </div>
      <p class="section__description">
        Info lengkap mengenai Homestay Joglo Dhepis Borobudur dan layanan lainnya.
      </p>
      <ul class="footer__socials">
        <li>
          <a href="https://www.instagram.com/joglodhepis_homestayandresto?igsh=eGhyMXBhdXBubGFw" target="_blank"><i
              class="ri-instagram-line"></i></a>
        </li>
        <li>
          <a href="https://www.facebook.com/share/rpqX8WnG8cN3JFFe/?mibextid=LQQJ4d" target="_blank"><i
              class="ri-facebook-fill"></i></a>
        </li>
        <li>
          <a href="https://www.tiktok.com/@joglodhepis_resto?_t=8mEhpPxgrNR&_r=1" target="_blank"><i
              class="ri-tiktok-fill"></i></a>
        </li>
      </ul>
    </div>
    <div class="footer__col">
      <h4>Layanan</h4>
      <div class="footer__links">
        <li><a href="#">Pemesanan Online</a></li>
        <li><a href="#">Bayar di Tempat</a></li>
        <li><a href="#">Upgrade Kamar</a></li>
        <li><a href="#">Vw Wisata</a></li>
        <li><a href="#">Rumah Makan</a></li>
      </div>
    </div>
    <div class="footer__col">
      <h4>Hubungi Kami</h4>
      <div class="footer__links">
        <li>
          <span><i class="ri-phone-fill"></i></span>
          <div>
            <h5><a href="https://wa.me/6285801262682" target="_blank">No WhatsApp</a></h5>
            <p><a href="https://wa.me/6285801262682" target="_blank">+6285801262682</a></p>
          </div>
        </li>
        <li>
          <span><i class="ri-record-mail-line"></i></span>
          <div>
            <h5> <a href="http://joglodhepis1@gmail.com" target="_blank">Email</a></h5>
            <p><a href="http://joglodhepis1@gmail.com" target="_blank">joglodhepis1@gmail.com</a></p>
          </div>
        </li>
        <li>
          <span><i class="ri-map-pin-2-fill"></i></span>
          <div>
            <h5><a href="https://maps.app.goo.gl/h17vUUFymQJuC1gM7?g_st=ic" target="_blank">Lokasi</a></h5>
            <p><a href="https://maps.app.goo.gl/h17vUUFymQJuC1gM7?g_st=ic" target="_blank">JogloDhepis</a></p>
          </div>
        </li>
      </div>
    </div>
  </div>
  <div class="footer__bar">
    Copyright © 2024 UTS Pemograman Web.
  </div>
</footer>
<!-- Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="script.js"></script>
</body>
</html>