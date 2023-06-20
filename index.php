<?php
  session_start();
 if ( !isset($_SESSION["login"] ) ) {
     header("Location: login.php");
     exit;
 }
    require 'controller.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HAUS!</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo"><img src="img/iconhaus.png" /></a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search-button"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart-button"
          ><i data-feather="shopping-cart"></i
        ></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        <a href="logout.php" id="" onclick="return confirm('Yakin ingin Logout?')"><i data-feather="log-out"></i></a>
      </div>

      <!-- Search Form Start -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="Cari..." />
        <label for="search-box"><i data-feather="search"></i></label>
      </div>
      <!-- Search Form End -->

      <!-- Shopping Cart Start -->
      <div class="shopping-cart">
      <div class="cart-item">
          <img src="img/menu/brownsugar.png" alt="brownsugar" />
          <a href="beli.php"><div class="item-detail">
            <h3>Brown Sugar</h3>
            <div class="item-price">Rp 14.000</div>
          </div></a>
        </div>
        <div class="cart-item">
          <img src="img/menu/green.png" alt="greentea" />
          <a href="beli.php"><div class="item-detail">
            <h3>Green Tea</h3>
            <div class="item-price">Rp 8.000</div>
          </div></a>
        </div>
        <div class="cart-item">
          <img src="img/menu/hazelnut.png" alt="hazelnut" />
          <a href="beli.php"><div class="item-detail">
            <h3>Choco Hazelnut</h3>
            <div class="item-price">Rp 14.000</div>
          </div></a>
      <!-- Shopping Cart End -->
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Semua Berhak Minum <span>Enak</span></h1>
        <p>
        Anda haus? Jangan biarkan dahaga menghantui, segera beli minuman favoritmu dan hidupkan kembali semangatmu!
        </p>
        <a href="beli.php" class="cta">Beli Sekarang</a>
      </main>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/tentang.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <p>
            PT. Inspirasi Bisnis Nusantara merupakan perusahaan yang bergerak di
            bidang Food & Beverage dan dikenal dengan brand "Haus!" yang
            menyediakan minuman dan makanan kekinian yang di gandrungi oleh
            generasi milenial dengan berbagai macam varian rasa serta harga yang
            terjangkau.
          </p>
          <p>
            Saat ini Haus! sudah memiliki 197 cabang outlet yang tersebar di 18
            kota di Pulau Jawa. Selain ekspansi ke kota-kota besar lainnya di
            Indonesia, Haus! juga akan terus melakukan pengembangan dan inovasi.
          </p>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Menu Section Start -->
    <section id="menu" class="menu">
      <h2><span>Menu</span> Kami</h2>
      <p>Berikut adalah daftar menu dan harga Haus! yang ada untuk saat ini.</p>

      <div class="row">
        <div class="menu-card">
          <div class="logo-beli">
            <a href="beli.php"><i data-feather="shopping-cart"></i></a>
          </div>
          <img
            src="img/menu/thaitea.png"
            alt="thaitea"
            class="menu-card-img"
            width="150"
            height="244"
          />
          <h3 class="menu-card-title">- Thai Tea -</h3>
          <p class="menu-card-price">Rp 6.000</p>
        </div>
        <div class="menu-card">
          <div class="logo-beli">
            <a href="beli.php"
              ><i data-feather="shopping-cart" class="logo-beli"></i
            ></a>
          </div>
          <img
            src="img/menu/green.png"
            alt="greentea"
            class="menu-card-img"
            width="150"
            height="244"
          />
          <h3 class="menu-card-title">- Green Tea -</h3>
          <p class="menu-card-price">Rp 8.000</p>
        </div>
        <div class="menu-card">
          <div class="logo-beli">
            <a href="beli.php"
              ><i data-feather="shopping-cart" class="logo-beli"></i
            ></a>
          </div>
          <img
            src="img/menu/taro.png"
            alt="taro"
            class="menu-card-img"
            width="150"
            height="244"
          />
          <h3 class="menu-card-title">- Taro -</h3>
          <p class="menu-card-price">Rp 12.000</p>
        </div>
        <div class="menu-card">
          <div class="logo-beli">
            <a href="beli.php"
              ><i data-feather="shopping-cart" class="logo-beli"></i
            ></a>
          </div>
          <img
            src="img/menu/brownsugar.png"
            alt="brownsugar"
            class="menu-card-img"
            width="150"
            height="244"
          />
          <h3 class="menu-card-title">- Brown Sugar -</h3>
          <p class="menu-card-price">Rp 14.000</p>
        </div>
        <div class="menu-card">
          <div class="logo-beli">
            <a href="beli.php"
              ><i data-feather="shopping-cart" class="logo-beli"></i
            ></a>
          </div>
          <img
            src="img/menu/hazelnut.png"
            alt="hazelnut"
            class="menu-card-img"
            width="150"
            height="244"
          />
          <h3 class="menu-card-title">- Choco Hazelnut -</h3>
          <p class="menu-card-price">Rp 14.000</p>
        </div>
        <div class="menu-card">
          <div class="logo-beli">
            <a href="beli.php"
              ><i data-feather="shopping-cart" class="logo-beli"></i
            ></a>
          </div>
          <img
            src="img/menu/red.png"
            alt="redvelvet"
            class="menu-card-img"
            width="150"
            height="244"
          />
          <h3 class="menu-card-title">- Red Velvet -</h3>
          <p class="menu-card-price">Rp 14.000</p>
        </div>
      </div>
    </section>

    <!-- Menu Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>Berikut adalah daftar menu dan harga Haus! yang ada untuk saat ini.</p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0671907078945!2d106.83220809999999!3d-6.6385784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c9187633a9fd%3A0xb28b37b1c673bc60!2sHaus*21%20Tajur!5e0!3m2!1sid!2sid!4v1687068614812!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user" color="black"></i>
            <input type="text" placeholder="Nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail" color="black"></i>
            <input type="text" placeholder="Email" />
          </div>
          <div class="input-group">
            <i data-feather="phone" color="black"></i>
            <input type="text" placeholder="No hp" />
          </div>
          <div class="input-group">
            <i data-feather="message-square" color="black"></i>
            <input type="text" placeholder="Beri Pesan" />
          </div>
          <button type="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer>
      <div class="socials">
        <a href="https://web.whatsapp.com/" target="_blank"
          ><i data-feather="phone"></i
        ></a>
        <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"
          ><i data-feather="mail"></i
        ></a>
        <a href="https://www.instagram.com/haus.indonesia/" target="_blank"
          ><i data-feather="instagram"></i
        ></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">mfathirp</a>. | &copy; 2023</p>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
