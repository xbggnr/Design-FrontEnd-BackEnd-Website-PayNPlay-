<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - PayNPlay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark py-3 mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="index.php">PayNPlay</a>
            <div class="d-flex align-items-center">
                <span class="text-white fw-bold me-3">Halo, Budi</span>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 mb-4">
                <div class="sidebar">
                    <a href="#" class="sidebar-link">Profil</a>
                    <a href="#" class="sidebar-link">Saldo E-Money</a>
                    <a href="#" class="sidebar-link active fw-bold text-white">Riwayat Transaksi</a>
                    <a href="#" class="sidebar-link">Keamanan (Sandi / PIN)</a>
                </div>
            </div>

            <!-- Content -->
            <div class="col-md-9">
                <!-- Saldo Card -->
                <div class="card bg-card border-0 mb-4 p-4 d-flex flex-row justify-content-between align-items-center" style="background: var(--bg-card); border-radius: 12px; border: 1px solid var(--border-color) !important;">
                    <div>
                        <p class="text-muted mb-1">Saldo PayNPlay Wallet</p>
                        <h2 class="fw-bold text-white mb-0">Rp 125.000</h2>
                    </div>
                    <button class="btn btn-green rounded-pill px-4 py-2">Top-Up Saldo</button>
                </div>

                <!-- Riwayat Transaksi -->
                <h4 class="fw-bold text-white mb-3">Riwayat Transaksi</h4>
                <div class="table-responsive bg-card rounded-3 p-3 border" style="background: var(--bg-card); border-color: var(--border-color) !important;">
                    <table class="table table-dark table-borderless align-middle mb-0">
                        <thead style="border-bottom: 1px solid var(--border-color);">
                            <tr>
                                <th class="text-muted">Tanggal</th>
                                <th class="text-muted">Game</th>
                                <th class="text-muted">Item</th>
                                <th class="text-muted">Total</th>
                                <th class="text-muted">Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid #2A2A2A;">
                                <td>10 Nov 2026</td>
                                <td>Starfall Arena</td>
                                <td>500 Diamonds</td>
                                <td>Rp 145.210</td>
                                <td class="status-sukses fw-bold">• Sukses</td>
                                <td class="text-end"><button class="btn btn-sm btn-outline-light rounded-pill">Beli Lagi</button></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #2A2A2A;">
                                <td>08 Nov 2026</td>
                                <td>Kingdom Clash</td>
                                <td>1.200 Gems</td>
                                <td>Rp 189.500</td>
                                <td class="status-pending fw-bold">• Pending</td>
                                <td></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #2A2A2A;">
                                <td>03 Nov 2026</td>
                                <td>Dragon Rift</td>
                                <td>300 Crystal</td>
                                <td>Rp 78.400</td>
                                <td class="status-sukses fw-bold">• Sukses</td>
                                <td class="text-end"><button class="btn btn-sm btn-outline-light rounded-pill">Beli Lagi</button></td>
                            </tr>
                            <tr>
                                <td>29 Okt 2026</td>
                                <td>Neon Drift</td>
                                <td>800 Token</td>
                                <td>Rp 120.000</td>
                                <td class="status-gagal fw-bold">• Gagal</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>