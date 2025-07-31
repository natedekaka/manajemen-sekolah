<?php
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

include '../config/database.php';
include '../includes/auth.php';

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama Siswa');
$sheet->setCellValue('C1', 'Jenis');
$sheet->setCellValue('D1', 'Tingkat');
$sheet->setCellValue('E1', 'Capaian');
$sheet->setCellValue('F1', 'Tahun');

$stmt = $pdo->query("SELECT nama_siswa, jenis, tingkat, capaian, tahun_pelajaran FROM prestasi");
$results = $stmt->fetchAll();

$row = 2;
foreach ($results as $i => $r) {
    $sheet->setCellValue('A' . $row, $i + 1);
    $sheet->setCellValue('B' . $row, $r['nama_siswa']);
    $sheet->setCellValue('C' . $row, $r['jenis']);
    $sheet->setCellValue('D' . $row, $r['tingkat']);
    $sheet->setCellValue('E' . $row, $r['capaian']);
    $sheet->setCellValue('F' . $row, $r['tahun_pelajaran']);
    $row++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="prestasi-siswa.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
