<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<main class="p-4 flex-grow-1 bg-light">
    <h2>Dashboard</h2>
    <p>Selamat datang, <strong><?= htmlspecialchars($_SESSION['username']) ?></strong>!</p>

    <div class="row mt-4">
        <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h6>Kegiatan</h6>
                    <p id="kegiatan-count">...</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h6>Prestasi</h6>
                    <p id="prestasi-count">...</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h6>Siswa PTN</h6>
                    <p id="ptn-count">...</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card bg-warning text-dark">
                <div class="card-body">
                    <h6>Tahun Ajaran</h6>
                    <p id="tahun-count">...</p>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
// Simulasi data (ganti dengan AJAX ke API jika diperluas)
document.getElementById('kegiatan-count').textContent = '12';
document.getElementById('prestasi-count').textContent = '24';
document.getElementById('ptn-count').textContent = '18';
document.getElementById('tahun-count').textContent = '5';
</script>

<?php include '../includes/footer.php'; ?>
