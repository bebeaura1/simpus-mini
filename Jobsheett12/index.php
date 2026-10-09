<?php
$page_title = "Beranda";
include __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/koneksi.php';

$totalBuku = (int) $pdo->query("SELECT COUNT(*) FROM buku")->fetchColumn();
$totalAnggota = (int) $pdo->query("SELECT COUNT(*) FROM anggota")->fetchColumn();
$totalDipinjam = $pdo->query("SELECT COUNT(*) FROM peminjaman")->fetchColumn();
?>
        <section>
            <h2>Selamat Datang di Sistem Perpustakaan Mini</h2>
            <p>Aplikasi sederhana untuk mengelola data buku dan anggota perpustakaan.</p>
        </section>

        <section>
            <h2>Ringkasan</h2>
            <article>
                <a href="<?= $base ?>buku/list.php">
                    <h3>Total Buku</h3>
                    <p><?php echo $totalBuku; ?></p>
                </a>
            </article>
            <article>
                <a href="<?= $base ?>anggota/list.php">
                    <h3>Total Anggota</h3>
                    <p><?php echo $totalAnggota; ?></p>
                </a>
            </article>
            <article>
                <a href="<?= $base ?>peminjaman/riwayat.php">
                    <h3>Sedang Dipinjam</h3>
                    <p><?= $totalDipinjam ?></p>
                </a>
            </article>
        </section>
<?php include __DIR__ . '/includes/footer.php'; ?>