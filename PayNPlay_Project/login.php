<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - PayNPlay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-card text-center">
            <h2 class="fw-bold text-white mb-2">Selamat datang kembali</h2>
            <p class="text-muted mb-4 text-start">Masuk untuk top-up lebih cepat dan melihat riwayat transaksi.</p>
            
            <div class="d-flex mb-4 p-1 rounded-pill" style="background: #2A2A2A;">
                <button class="btn btn-dark w-50 rounded-pill text-white fw-bold">Masuk</button>
                <button class="btn btn-link w-50 rounded-pill text-muted text-decoration-none">Daftar</button>
            </div>

            <form action="dashboard.php" method="GET" class="text-start">
                <div class="mb-3">
                    <label class="form-label text-muted">Email</label>
                    <input type="email" class="form-control form-control-dark p-3" placeholder="nama@email.com" required>
                </div>
                <div class="mb-2">
                    <label class="form-label text-muted">Password</label>
                    <input type="password" class="form-control form-control-dark p-3" placeholder="Minimal 8 karakter" required>
                </div>
                <div class="text-end mb-4">
                    <a href="#" class="text-orange text-decoration-none" style="color: var(--accent-orange); font-size: 0.9rem;">Lupa password?</a>
                </div>
                <button type="submit" class="btn btn-orange w-100 py-3 rounded-3 mb-3">Masuk</button>
            </form>
            
            <p class="text-muted">atau</p>
            <button class="btn btn-outline-light w-100 py-3 rounded-3 d-flex align-items-center justify-content-center gap-2">
                <span>G</span> Login with Google
            </button>
        </div>
    </div>
</body>
</html>