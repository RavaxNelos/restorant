<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Rava</title>
    <!-- bootsrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css rava -->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap font awoseme -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="home" id="first">
        <div class="navbar" id="navbar">
            <div class="brand-container">
                <div class="brand">Taste</div>
                <div class="brandbottom">CAFE-CHILL-RAVA-AREA</div>
            </div>
            <div class="cart-btn" onclick="toggleCart()"><i class="fa-solid fa-cart-shopping"></i></div>
        </div>
        <div class="gambardeskripsi">
            <img src="img/gambar1-removebg-preview.png" alt="Deskripsi Image">
        </div>

        <div class="deskripsi">
            <h3>Penyajian makanan daging dan sup disini</h3>
        </div>
        <div class="makanan-btn">
            <button><img src="img/pizza3.png" alt=""></button>
            <button><img src="img/pizza 2.png" alt=""></button>
            <button><img src="img/red-bean-soup.png" alt=""></button>
            <button><img src="img/winter-melon-soup.png" alt=""></button>
        </div>
        <div class="keterangan">
            <button class="black-button">keterangan lainnya &#8599</button>
        </div>
    </div>
    <div class="shop">
        <div class="bodyaksenkanan">
            <img src="img/daun.png" alt="">
        </div>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="img/food (2).png" alt="Product Image">
                </div>
                <div class="product-details">
                    <h2>Sup Kare ayam</h2>
                    <button class="like">
                        <box-icon class="btn-like" name='heart'></box-icon>
                    </button>
                    <p>Sup Kare adalah sup yang memberikan rasa gurih.</p>
                    <span class="price">$15</span>
                    <button class="btn btn-dark btn-lg btn-add-to-cart">
                        <i class="fas fa-cart-shopping"></i> <!-- Menggunakan ikon cart dari Font Awesome -->
                    </button>
                </div>
            </div>
            <div class="penjelasan-makanan">
                <h3>Keterangan tentang makanan ada disini</h3>
                <p>Sup Kare atau Curry Soup adalah hidangan sup yang menggunakan bumbu kare sebagai bahan dasar untuk memberikan rasa gurih, pedas, dan harum rempah-rempah. Hidangan ini umumnya berasal dari Asia Selatan dan telah menjadi populer di berbagai belahan dunia.</p>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="img/food (4).png" alt="Product Image">
                </div>
                <div class="product-details">
                    <h2>Sup Keju dan sayur</h2>
                    <button class="like">
                        <box-icon class="btn-like" name='heart'></box-icon>
                    </button>
                    <p>Sup Keju adalah sup yang memberikan rasa keju.</p>
                    <span class="price">$20</span>
                    <button class="btn btn-dark btn-lg btn-add-to-cart">
                        <i class="fas fa-cart-shopping"></i>
                        <!-- Menggunakan ikon cart dari Font Awesome -->
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="shop2">
        <div class="penjelasan-lanjut">
            <div class="gambarsupindonesia">
                <img src="img/produk-removebg-preview.png" alt="Deskripsi Image">
            </div>
            <div class="angkashop">
                <button class="angka-button">$20</button>
            </div>
            <h3>Penjelasan Lebih Lanjut Tentang Makanan Khas Daerah Surabaya Yang Terkenal Saat Ini</h3>
            <p>Rawon adalah sup daging hitam khas Jawa Timur. Bahan utamanya adalah daging sapi yang dimasak dengan
                bumbu khas seperti keluak (buah keras) yang memberikan warna hitam khas pada kuahnya.</p>
        </div>
        <div class="hpdesainweb">
            <div class="cart-btn-hp" onclick="toggleCart()"><i class="fa-solid fa-cart-shopping"></i></i></i></div>
            <div class="card-menu-hp">
                <i class="bi bi-list"></i>
            </div>
            <div class="keterangan-di-hp">
                Persedian makanan
            </div>
            <div class="keteranganbottom-di-hp">
                <p>Makanan seperti sup dan daging</p>
            </div>
            <div class="makanan-btn-hp">
                <button><img src="img/pizza3.png" alt=""></button>
                <button><img src="img/pizza 2.png" alt=""></button>
                <button><img src="img/red-bean-soup.png" alt=""></button>
                <button><img src="img/winter-melon-soup.png" alt=""></button>
            </div>
            <div class="hpdesainweb-image-card">
                <div class="img-kiri">
                    <img src="img/food (4).png">
                </div>
                <div class="details-hpdesainweb">
                    <h2>Sup Keju</h2>
                    <p>Sup adalah sup yang memberikan rasa keju.</p>
                    <span class="price-hp">$20</span>
                    <button class="like" onclick="toogleLike()">
                        <box-icon class="btn-like" name='heart'></box-icon>
                    </button>
                </div>
            </div>
            <div class="hpdesainweb-image-card-kanan">
                <div class="img-kanan">
                    <img src="img/food (2).png">
                </div>
                <div class="details-hpdesainweb-kanan">
                    <h2>Sup ayam</h2>
                    <p>Sup adalah sup yang memberikan rasa gurih.</p>
                    <span class="price-hp">$15</span>
                    <button class="like">
                        <box-icon class="btn-like" name='heart'></box-icon>
                    </button>
                </div>
            </div>
            <div class="hpdesainweb-image-card-bawah">
                <div class="img-bawah">
                    <img src="img/food (4).png">
                </div>
                <div class="details-hpdesainweb-bawah">
                    <h2>Sup Keju</h2>
                    <p>Sup Keju yang lebih enak.</p>
                    <span class="price-hp">$20</span>
                    <button class="like">
                        <box-icon class="btn-like" name='heart'></box-icon>
                    </button>
                </div>
            </div>
            <div class="black-btn-interface">
                <button class="black-button-interface">
                    <i class="bi bi-house-door"></i>
                    <i class="bi bi-envelope-open"></i>
                    <i class="bi bi-chat-dots"></i>
                    <i class="bi bi-person-circle"></i>
                </button>
            </div>
        </div>
        <div class="card-hp">
            <div class="card-hp-image">
                <img src="img/food (4).png" alt="Product Image">
            </div>
            <div class="card-hp-details">
                <span class="card-hp-arrow">
                    <i class="fa-solid fa-chevron-left fa-fw"></i>
                </span>
                <span class="card-hp-menu">
                    <i class="bi bi-three-dots-vertical"></i>
                </span>
                <span class="card-hp-time">28 menit</span>
                <i class="fa-regular fa-clock"></i>
                <h2>Sup Keju</h2>
                <button class="like">
                    <box-icon class="btn-like" name='heart'></box-icon>
                </button>
                <p>Sup Keju adalah sup yang memberikan rasa keju.</p>
                <span class="card-hp-title-price">Harga</span>
                <span class="card-hp-price">$20</span>
                <button class="button-cart">Tambahkan</button>
            </div>
        </div>
        <div class="keterangan-aplikasi">
            <h2>Kalian Bisa Mengunduh Aplikasinya Di Media</h2>
            <p>App Store dan Play Store adalah platform distribusi aplikasi untuk perangkat mobile yang paling populer, yaitu iOS dan Android.</p>
            <div class="aplikasi">
                <button class="btn btn-dark btn-lg btn-aplikasi">
                    <i class="fa-brands fa-apple"></i>
                    <span>App Store</span>
                </button>
                <button class="btn btn-dark btn-lg btn-aplikasi">
                    <i class="fa-brands fa-google-play"></i>
                    <span>Google Play</span>
                </button>
            </div>
        </div>
        <div class="penjelasan-bawah">
            <h3>Ingin menghubungi kami dari jarak jauh?</h3>
            <div class="keterangan-bawah">
                <button class="btn-bawah">Info selengkapnya</button>
            </div>
        </div>
        <div class="footeraksenkanan">
            <img src="img/pizzaaksen.png" alt="">
        </div>
    </div>
    <div class="footer-bg">
        <div class="footer">
            <p>Penjelasan tentang toko kami,Toko makanan sup ini adalah surga bagi para pecinta kuliner yang menyukai hidangan hangat dan lezat.</p>
            <div class="footer-menu-group">
                <div class="row g-6" style="margin-top: 140px;">
                    <div class="col-4">
                        <div class="brandbawah">
                            <div class="brand-bawah">Taste</div>
                            <div class="brand-bawahbottom">CAFE-CHILL-RAVA-AREA</div>
                        </div>
                    </div>
                    <div class="col-2">
                        <h4 class="text-black fw-bold">PERALATAN</h4>
                        <div class="row g-2 mt-2 text-black">
                            <div class="col-12"><span style="font-size: 15px; color: white;">PERALATAN 1<span></div>
                            <div class="col-12"><span style="font-size: 15px; color: white;">PERALATAN 2<span></div>
                            <div class="col-12"><span style="font-size: 15px; color: white;">PERALATAN 3<span></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h4 class="text-black fw-bold">TOKO BUKA</h4>
                        <div class="row g-2 mt-2 text-black">
                            <div class="col12"><span style="font-size: 15px; color: white;">Senin - Jumat: 08:00 - 20:00</span></div>
                            <div class="col12"><span style="font-size: 15px; color: white;">Sabtu: 09:00 - 18:00</span></div>
                            <div class="col12"><span style="font-size: 15px; color: white;">Minggu: Tutup</span></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h4 class="text-black fw-bold">KONTAK</h4>
                        <div class="row g-2 mt-2 text-black">
                            <div class="col12"><span style="font-size: 15px; color: white;">Alamat: Jl Kalijudan 9/Trembesi</span></div>
                            <div class="col12"><span style="font-size: 15px; color: white;">Telepon: (+62) 823-3272-4688</span></div>
                            <div class="col12"><span style="font-size: 15px; color: white;">Email: info@taste.com</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footeraksenkiri">
            <img src="img/buahsemangkaaksen.png" alt="">
        </div>
        <div class="footeraksenkiriapel">
            <img src="img/apelhijauaksen.png" alt="">
        </div>
        <div class="btn-arrow-atas" onclick="topFunction()">
            <a href="#first"><i class="bi bi-chevron-up"></i></a>
        </div>
    </div>
    <!-- box icon -->
    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- js rava -->
    <script src="js/script.js"></script>
</body>

</html>
