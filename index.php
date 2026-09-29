<?php 
// Memanggil koneksi jika diperlukan
include 'koneksi.php'; 

// Memanggil header
include 'header.php'; 
?>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container position-relative">
        <span class="badge-hero mb-3">✨ Laundry Premium Sejak 2020</span>
        <h1 class="display-4 fw-bold mb-3">Pakaian Bersih, Rapi & Wangi</h1>
        <p class="lead mb-4">Percayakan pakaian kotor Anda kepada kami. Proses cepat, higienis, dan terjangkau.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="login.php" class="btn btn-hero-primary btn-lg fw-bold px-4">Cek Status Pesanan</a>
            <a href="#layanan" class="btn btn-hero-outline btn-lg fw-bold px-4">Lihat Layanan</a>
        </div>
    </div>
    <div class="hero-wave"></div>
</section>

<!-- Section Layanan -->
<section id="layanan" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">LAYANAN KAMI</span>
            <h2 class="fw-bold section-title">Pilih Sesuai Kebutuhan Anda</h2>
            <p class="text-muted">Harga transparan, kualitas terjamin</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card layanan-card h-100 text-center p-4">
                    <div class="icon-box mb-3">🧺</div>
                    <h5 class="fw-bold">Cuci Kering</h5>
                    <p class="text-muted">Pakaian dicuci, dikeringkan, dan dilipat rapi siap pakai.</p>
                    <div class="price-tag">Rp 5.000 <span>/ kg</span></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card layanan-card featured h-100 text-center p-4">
                    <div class="badge-populer">TERPOPULER</div>
                    <div class="icon-box mb-3">👔</div>
                    <h5 class="fw-bold">Cuci Setrika</h5>
                    <p class="text-muted">Pakaian dicuci, dikeringkan, disetrika wangi dan rapi.</p>
                    <div class="price-tag">Rp 7.000 <span>/ kg</span></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card layanan-card h-100 text-center p-4">
                    <div class="icon-box mb-3">⚡</div>
                    <h5 class="fw-bold">Express 6 Jam</h5>
                    <p class="text-muted">Layanan kilat, pakaian selesai dalam 6 jam saja.</p>
                    <div class="price-tag">Rp 12.000 <span>/ kg</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Keunggulan -->
<section class="keunggulan-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">KEUNGGULAN</span>
            <h2 class="fw-bold section-title">Kenapa Pilih Kami?</h2>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-3 col-6">
                <div class="keunggulan-item">
                    <div class="fs-1">⏱️</div>
                    <h6 class="fw-bold mt-2">Tepat Waktu</h6>
                    <p class="text-muted small">Selalu selesai sesuai jadwal</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="keunggulan-item">
                    <div class="fs-1">💧</div>
                    <h6 class="fw-bold mt-2">Higienis</h6>
                    <p class="text-muted small">Air bersih & deterjen premium</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="keunggulan-item">
                    <div class="fs-1">💰</div>
                    <h6 class="fw-bold mt-2">Terjangkau</h6>
                    <p class="text-muted small">Harga ramah kantong</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="keunggulan-item">
                    <div class="fs-1">🚚</div>
                    <h6 class="fw-bold mt-2">Antar Jemput</h6>
                    <p class="text-muted small">Gratis dalam radius 3 km</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section CTA -->
<section class="cta-section text-center">
    <div class="container">
        <h2 class="fw-bold mb-3">Siap Mencuci Sekarang?</h2>
        <p class="mb-4">Daftar dan nikmati kemudahan layanan laundry kami</p>
        <a href="login.php" class="btn btn-cta btn-lg fw-bold px-5">Mulai Sekarang</a>
    </div>
</section>

<!-- CSS Styling -->
<style>
    :root {
        --navy-dark: #0A0E2A;
        --navy: #1A2340;
        --navy-mid: #2B3D7A;
        --blue: #3D52A0;
        --blue-light: #5B71C7;
        --cream: #F5E6C8;
        --cream-light: #FAF0DC;
        --white: #FFFFFF;
    }

    /* ===== FONT GLOBAL ===== */
    body,
    p,
    a,
    span,
    button,
    input,
    .lead,
    .badge-hero,
    .price-tag,
    .section-label {
        font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    }

    h1, h2, h3, h4, h5, h6,
    .section-title,
    .display-4 {
        font-family: 'Playfair Display', Georgia, serif;
        letter-spacing: -0.5px;
    }

    body {
        font-weight: 400;
        line-height: 1.7;
        color: #333;
    }

    /* ===== HERO SECTION ===== */
    .hero-section {
        background: linear-gradient(135deg, var(--navy-dark) 0%, var(--navy) 50%, var(--navy-mid) 100%);
        color: var(--white);
        padding: 110px 0 140px;
        position: relative;
        overflow: hidden;
    }
    .hero-section::before {
        content: "";
        position: absolute;
        top: -100px;
        right: -100px;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(91, 113, 199, 0.35) 0%, transparent 70%);
        border-radius: 50%;
    }
    .hero-section::after {
        content: "";
        position: absolute;
        bottom: -50px;
        left: -50px;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(245, 230, 200, 0.12) 0%, transparent 70%);
        border-radius: 50%;
    }
    .hero-section h1 {
        position: relative;
        z-index: 2;
        font-weight: 800;
        font-size: 3.5rem;
        line-height: 1.15;
        color: var(--white);
    }
    .hero-section h1::after {
        content: "";
        display: block;
        width: 80px;
        height: 4px;
        background: var(--cream);
        margin: 20px auto 0;
        border-radius: 2px;
    }
    .hero-section p {
        position: relative;
        z-index: 2;
        opacity: 0.9;
        font-size: 1.1rem;
        font-weight: 400;
        color: var(--cream-light);
    }
    .badge-hero {
        display: inline-block;
        background: rgba(91, 113, 199, 0.25);
        border: 1px solid var(--blue-light);
        color: var(--cream);
        padding: 8px 20px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 500;
        position: relative;
        z-index: 2;
        letter-spacing: 0.5px;
    }
    .btn-hero-primary {
        background: var(--cream);
        color: var(--navy-dark);
        border: none;
        border-radius: 50px;
        padding: 14px 32px;
        position: relative;
        z-index: 2;
        box-shadow: 0 10px 25px rgba(245, 230, 200, 0.3);
        transition: all 0.3s ease;
        font-weight: 700;
    }
    .btn-hero-primary:hover {
        background: var(--cream-light);
        color: var(--navy-dark);
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(245, 230, 200, 0.5);
    }
    .btn-hero-outline {
        background: transparent;
        color: var(--cream);
        border: 2px solid var(--cream);
        border-radius: 50px;
        padding: 14px 32px;
        position: relative;
        z-index: 2;
        transition: all 0.3s ease;
        font-weight: 700;
    }
    .btn-hero-outline:hover {
        background: var(--cream);
        color: var(--navy-dark);
        transform: translateY(-3px);
    }
    .hero-wave {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 80px;
        background: var(--cream);
        clip-path: ellipse(75% 100% at 50% 100%);
    }

    /* ===== SECTION LABEL ===== */
    .section-label {
        display: inline-block;
        color: var(--navy-mid);
        font-weight: 700;
        font-size: 0.8rem;
        letter-spacing: 3px;
        margin-bottom: 10px;
    }
    .section-title {
        color: var(--navy-dark);
        font-weight: 800;
        font-size: 2.5rem;
    }

    /* ===== LAYANAN ===== */
    #layanan {
        background: var(--cream);
    }
    #layanan p.text-muted {
        font-size: 1rem;
        font-weight: 400;
    }
    .layanan-card {
        border: none;
        border-radius: 24px;
        background: var(--white);
        box-shadow: 0 5px 20px rgba(10, 14, 42, 0.08);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }
    .layanan-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--navy-dark), var(--blue-light));
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.4s ease;
    }
    .layanan-card:hover::before {
        transform: scaleX(1);
    }
    .layanan-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(10, 14, 42, 0.15);
    }
    .layanan-card.featured {
        background: linear-gradient(180deg, var(--white) 0%, #EEF2FC 100%);
        border: 2px solid var(--navy-mid);
        transform: scale(1.03);
    }
    .layanan-card.featured:hover {
        transform: scale(1.03) translateY(-10px);
    }
    .layanan-card h5 {
        font-family: 'Playfair Display', Georgia, serif;
        font-weight: 700;
        color: var(--navy-dark);
        font-size: 1.4rem;
    }
    .badge-populer {
        position: absolute;
        top: 15px;
        right: -35px;
        background: var(--navy-mid);
        color: var(--white);
        padding: 5px 40px;
        font-size: 0.7rem;
        font-weight: 700;
        transform: rotate(45deg);
        letter-spacing: 1px;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .icon-box {
        font-size: 3.5rem;
        line-height: 1;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 15px;
        background: var(--cream);
        border-radius: 50%;
        width: 90px;
        height: 90px;
        transition: all 0.3s ease;
    }
    .layanan-card:hover .icon-box {
        background: var(--navy-dark);
        transform: rotate(-10deg) scale(1.1);
    }
    .price-tag {
        font-size: 1.4rem;
        font-weight: 800;
        color: var(--navy-mid);
        margin-top: 15px;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .price-tag span {
        font-size: 0.85rem;
        font-weight: 400;
        color: #888;
    }

    /* ===== KEUNGGULAN ===== */
    .keunggulan-section {
        background: var(--white);
    }
    .keunggulan-item {
        padding: 30px 15px;
        border-radius: 20px;
        transition: all 0.3s ease;
        background: var(--cream);
        height: 100%;
    }
    .keunggulan-item:hover {
        background: var(--navy-dark);
        color: var(--white);
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(10, 14, 42, 0.25);
    }
    .keunggulan-item:hover .text-muted {
        color: rgba(255, 255, 255, 0.8) !important;
    }
    .keunggulan-item h6 {
        font-family: 'Playfair Display', Georgia, serif;
        font-weight: 700;
        font-size: 1.1rem;
    }

    /* ===== CTA SECTION ===== */
    .cta-section {
        background: linear-gradient(135deg, var(--navy-mid) 0%, var(--navy-dark) 100%);
        color: var(--white);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }
    .cta-section::before {
        content: "";
        position: absolute;
        top: -50%;
        right: -10%;
        width: 400px;
        height: 400px;
        background: rgba(245, 230, 200, 0.08);
        border-radius: 50%;
    }
    .cta-section h2 {
        font-family: 'Playfair Display', Georgia, serif;
        font-weight: 800;
        font-size: 2.5rem;
        position: relative;
        z-index: 2;
        color: var(--white);
    }
    .cta-section p {
        position: relative;
        z-index: 2;
        font-size: 1.1rem;
        opacity: 0.95;
        color: var(--cream-light);
    }
    .btn-cta {
        background: var(--cream);
        color: var(--navy-dark);
        border: none;
        border-radius: 50px;
        transition: all 0.3s ease;
        position: relative;
        z-index: 2;
        font-weight: 700;
    }
    .btn-cta:hover {
        background: var(--white);
        color: var(--navy-mid);
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
        .hero-section {
            padding: 70px 0 110px;
        }
        .hero-section h1 {
            font-size: 2.2rem;
        }
        .hero-section h1::after {
            margin: 15px auto 0;
        }
        .section-title {
            font-size: 1.9rem;
        }
        .cta-section h2 {
            font-size: 1.9rem;
        }
        .layanan-card.featured {
            transform: scale(1);
        }
        .layanan-card.featured:hover {
            transform: translateY(-10px);
        }
        .icon-box {
            width: 75px;
            height: 75px;
            font-size: 2.5rem;
        }
    }
</style>

<?php 
// Memanggil footer
include 'footer.php'; 
?>