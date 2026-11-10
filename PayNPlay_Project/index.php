<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayNPlay - Top Up & Voucher Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="index.php">PayNPlay</a>
            <form class="d-flex mx-auto w-50">
                <input class="form-control search-bar rounded-pill" type="search" placeholder="🔍 Cari game atau voucher" aria-label="Search">
            </form>
            <div class="d-flex align-items-center">
                <span class="me-3 fw-bold text-white">Rp 125.000</span>
                <a href="login.php" class="btn btn-outline-light rounded-pill px-4">Masuk</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Hero Banner -->
        <div class="p-5 mb-4 rounded-3" style="background: linear-gradient(45deg, #1E1E1E, #FF5722); position: relative; overflow: hidden;">
            <div class="container-fluid py-3 position-relative z-1">
                <h1 class="display-5 fw-bold text-white">PROMO AKHIR TAHUN</h1>
                <p class="col-md-8 fs-5 text-white">Top-up diamond, bayar dalam hitungan detik.</p>
                <button class="btn btn-light btn-lg fw-bold" type="button">Top-Up Sekarang</button>
            </div>
        </div>

        <!-- Filter & Catalog -->
        <div class="d-flex gap-3 mb-4">
            <button class="btn btn-orange rounded-pill px-4">Semua</button>
            <button class="btn btn-outline-light rounded-pill px-4">Top-Up Langsung</button>
            <button class="btn btn-outline-light rounded-pill px-4">Voucher</button>
        </div>

        <h4 class="section-title">Populer</h4>
        <div class="row g-4">
            <!-- Game Cards -->
            <div class="col-6 col-md-3 col-lg-2">
                <div class="card card-game h-100" onclick="window.location.href='topup.php'">
                    <div style="height: 150px; background: #333; display: flex; align-items:center; justify-content:center; color:#555;">[Image]</div>
                    <span class="badge-category text-white">Instan</span>
                    <div class="card-body p-2 text-center">
                        <h6 class="card-title mb-0 text-white">Starfall Arena</h6>
                        <small class="text-muted">Diamond</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="card card-game h-100" onclick="window.location.href='topup.php'">
                    <div style="height: 150px; background: #333; display: flex; align-items:center; justify-content:center; color:#555;">[Image]</div>
                    <span class="badge-category text-white">Kode</span>
                    <div class="card-body p-2 text-center">
                        <h6 class="card-title mb-0 text-white">Voucher Pixel</h6>
                        <small class="text-muted">Kode digital</small>
                    </div>
                </div>
            </div>
            <!-- More cards omitted for brevity, logic remains same -->
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>