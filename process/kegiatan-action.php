<?php
include '../config/database.php';
include '../includes/auth.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];
    $foto = '';

    if (!empty($_FILES['foto']['name'])) {
        $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        $foto = 'kegiatan/' . time() . '.' . $ext;
        $target = '../assets/uploads/' . $foto;
        move_uploaded_file($_FILES['foto']['tmp_name'], $target);
    }

    $stmt = $pdo->prepare("INSERT INTO kegiatan (judul, deskripsi, status, foto) VALUES (?, ?, ?, ?)");
    $stmt->execute([$judul, $deskripsi, $status, $foto]);

    header('Location: ../pages/kegiatan.php?status=success&msg=Kegiatan berhasil ditambahkan');
    exit;
}
?>
