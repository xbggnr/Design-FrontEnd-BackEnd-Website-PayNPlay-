<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starfall Arena - PayNPlay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark py-3 mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="index.php">PayNPlay</a>
        </div>
    </nav>

    <div class="container pb-5 mb-5">
        <div class="row">
            <!-- Left Column: Inputs -->
            <div class="col-lg-8">
                <div class="d-flex align-items-center mb-4">
                    <div style="width: 80px; height: 80px; background: #333; border-radius: 12px; margin-right: 15px;"></div>
                    <div>
                        <h3 class="fw-bold mb-1">Starfall Arena</h3>
                        <p class="text-muted mb-0">Top-up langsung. Diamond masuk otomatis ke akun Anda.</p>
                    </div>
                </div>

                <h5 class="fw-bold mb-3"><span class="badge bg-dark border me-2">1</span> Masukkan Data Akun</h5>
                <div class="card bg-card border-0 mb-4 p-4" style="background: var(--bg-card); border-radius: 12px;">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label text-muted">User ID</label>
                            <input type="text" class="form-control form-control-dark" placeholder="Contoh: 123456789">
                            <small class="text-success mt-2 d-block">✓ Akun ditemukan: StarWarden_ID</small>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-muted d-flex justify-content-between">Server ID <span style="cursor:help" title="Cari di profil game">?</span></label>
                            <input type="text" class="form-control form-control-dark" placeholder="Contoh: 2041">
                        </div>
                    </div>
                </div>

                <h5 class="fw-bold mb-3"><span class="badge bg-dark border me-2">2</span> Pilih Nominal</h5>
                <div class="row g-3 mb-4">
                    <div class="col-6 col-md-4">
                        <div class="nominal-box" data-price="26000">
                            <h6 class="mb-1 text-white">100 Diamonds</h6>
                            <small class="text-muted">Rp 26.000</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="nominal-box active" data-price="130000">
                            <h6 class="mb-1 text-white">500 Diamonds</h6>
                            <small class="text-muted">Rp 130.000</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="nominal-box" data-price="255000">
                            <h6 class="mb-1 text-white">1.000 Diamonds</h6>
                            <small class="text-muted">Rp 255.000</small>
                        </div>
                    </div>
                </div>

                <h5 class="fw-bold mb-3"><span class="badge bg-dark border me-2">3</span> Pilih Pembayaran</h5>
                <div class="payment-method active" data-admin="0">
                    <div>
                        <h6 class="mb-1 text-white">WALLET | PayNPlay Wallet</h6>
                        <small class="text-muted">Saldo Rp 125.000 - butuh PIN</small>
                    </div>
                    <div class="fw-bold text-white">Rp 144.300</div>
                </div>
                <div class="payment-method" data-admin="910">
                    <div>
                        <h6 class="mb-1 text-white">QRIS</h6>
                        <small class="text-muted">Biaya admin Rp 910</small>
                    </div>
                    <div class="fw-bold text-white">Rp 145.210</div>
                </div>
            </div>

            <!-- Right Column: Summary -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="summary-card">
                    <h5 class="fw-bold mb-3 text-white">Ringkasan Pesanan</h5>
                    <div class="d-flex justify-content-between mb-2"><span class="text-muted">Game</span><span class="text-white text-end">Starfall Arena</span></div>
                    <div class="d-flex justify-content-between mb-2"><span class="text-muted">Akun</span><span class="text-white text-end">123456789 (2041)</span></div>
                    <div class="d-flex justify-content-between mb-2"><span class="text-muted">Item</span><span class="text-white text-end">500 Diamonds</span></div>
                    <hr style="border-color: #444;">
                    <div class="d-flex justify-content-between mb-2"><span class="text-muted">Subtotal</span><span class="text-white" id="summary-subtotal">Rp 130.000</span></div>
                    <div class="d-flex justify-content-between mb-2"><span class="text-muted">Biaya admin</span><span class="text-white" id="summary-admin">Rp 0</span></div>
                    <div class="d-flex justify-content-between mb-2"><span class="text-muted">PPN 11%</span><span class="text-white" id="summary-ppn">Rp 14.300</span></div>
                    <hr style="border-color: #444;">
                    <div class="d-flex justify-content-between fw-bold fs-5"><span class="text-white">Total</span><span class="text-orange" style="color: var(--accent-orange);" id="summary-total">Rp 144.300</span></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Checkout Bar -->
    <div class="sticky-checkout">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <small class="text-muted d-block">Total Bayar</small>
                <h4 class="fw-bold mb-0 text-white" id="sticky-total">Rp 144.300</h4>
            </div>
            <button class="btn btn-orange btn-lg px-5 py-3 rounded-pill" onclick="window.location.href='dashboard.php'">BAYAR SEKARANG</button>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>