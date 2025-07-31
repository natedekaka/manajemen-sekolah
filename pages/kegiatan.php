<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<main class="p-4 flex-grow-1">
    <h2>Kelola Kegiatan</h2>

    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div class="alert alert-success"><?= htmlspecialchars($_GET['msg']) ?></div>
    <?php endif; ?>

    <form action="../process/kegiatan-action.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Judul Kegiatan</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="rencana">Rencana</option>
                <option value="dilaksanakan">Dilaksanakan</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</main>

<?php include '../includes/footer.php'; ?>
