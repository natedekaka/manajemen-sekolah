<nav class="bg-dark text-white p-3" style="width: 250px; min-height: 100vh;">
    <h4>Admin Panel</h4>
    <hr>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="dashboard.php" class="nav-link text-white">Dashboard</a>
        </li>
        <li class="nav-item">
            <a href="kegiatan.php" class="nav-link text-white">Kegiatan Sekolah</a>
        </li>
        <li class="nav-item">
            <a href="prestasi.php" class="nav-link text-white">Prestasi Siswa</a>
        </li>
        <li class="nav-item">
            <a href="ptn.php" class="nav-link text-white">Siswa Masuk PTN</a>
        </li>
        <li class="nav-item">
            <a href="tahun-pelajaran.php" class="nav-link text-white">Tahun Pelajaran</a>
        </li>
        <?php if ($_SESSION['role'] === 'admin'): ?>
        <li class="nav-item">
            <a href="users.php" class="nav-link text-white">Manajemen Pengguna</a>
        </li>
        <?php endif; ?>
        <li class="nav-item mt-3">
            <a href="../process/logout.php" class="nav-link text-danger">Logout</a>
        </li>
    </ul>
</nav>
