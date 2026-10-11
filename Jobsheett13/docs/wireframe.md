# Wireframe & User Flow — SIMPUS-Mini

# SIMPUS-Mini
## Wireframe & Alur Pengguna — Sistem Informasi Perpustakaan

**Sub-CPMK:** Merancang UI/UX aplikasi (proyek).

SIMPUS-Mini adalah aplikasi Sistem Informasi Perpustakaan berbasis web yang dirancang untuk mengelola data buku, anggota, serta transaksi peminjaman dan pengembalian secara efisien.

---
## 1. Aktor Sistem
* **Tamu (Guest)**
  * Hanya bisa melihat katalog buku (Beranda, Daftar Buku).
  * Tidak perlu login.
* **Petugas (Librarian)**
  * Login untuk mengakses seluruh fitur.
  * CRUD Buku & CRUD Anggota.
  * Peminjaman & Pengembalian.

---
## 2. Alur Pengguna (User Flow)

#### A. Alur Pengguna — Peminjaman Buku
`Petugas Login` → `Dashboard` → `Pilih Menu "Peminjaman Baru"` → `Pilih Anggota` → `Pilih Buku (stok > 0)` → `Simpan` → `Stok buku berkurang 1` → `Kembali ke Dashboard`

#### B. Alur Pengguna — Pengembalian Buku
`Dashboard` → `Menu "Pengembalian"` → `Cari transaksi aktif (anggota/buku)` → `Tandai "Dikembalikan"` → `Stok buku bertambah 1` → `Kembali ke Dashboard`

---

## 3. Wireframe Halaman
#### 3.1 Halaman Login
```
+----------------------------------+
|           SIMPUS-Mini            |
|          Login Petugas           |
|----------------------------------|
| Username                         |
| [ Masukkan username        ]     |
|                                  |
| Password                         |
| [ Masukkan password        ]     |
|                                  |
|     [         Masuk        ]     |
|                                  |
| Belum punya akun? Daftar di sini |
+----------------------------------+
```

#### 3.2 Dashboard Petugas
```
+--------------------------------------------------------------------------+
| SIMPUS-Mini       Beranda  Buku  Anggota  Peminjaman    Petugas | Logout |
|--------------------------------------------------------------------------|
|  +---------------+   +---------------+   +---------------+               |
|  |  Total Buku   |   | Total Anggota |   |Sedang Dipinjam|               |
|  |      215      |   |      95       |   |      18       |               |
|  +---------------+   +---------------+   +---------------+               |
|                                                                          |
| Aksi Cepat                                                               |
| [ + Peminjaman Baru ]                                                    |
|                                                                          |
| Transaksi Terbaru                                                        |
| +----------------------------------------------------------------------+ |
| | Anggota       | Buku            | Tgl Pinjam    | Status             | |
| |----------------------------------------------------------------------| |
| | Siti Aminah   | Laskar Pelangi  | 15/03/2024    | [Dipinjam]         | |
| | Budi Santoso  | Bumi Manusia    | 15/03/2024    | [Dipinjam]         | |
| | Dewi Lestari  | Negeri 5 Menara | 19/09/2024    | [Dikembalikan]     | |
| +----------------------------------------------------------------------+ |
|                                             Lihat semua transaksi →      |
+--------------------------------------------------------------------------+
```

#### 3.3 Form Peminjaman
```
+----------------------------------+
| Form Peminjaman Buku             |
|----------------------------------|
| Anggota                          |
| [ -- Pilih Anggota -- ]          |
|                                  |
| Buku                             |
| [ -- Pilih Buku (stok > 0) -- ]  |
|                                  |
| Tanggal Pinjam                   |
| [ 09-10-26 ]                     |
| (Otomatis: hari ini)             |
|                                  |
|   [    Simpan Peminjaman    ]    |
+----------------------------------+
```

#### 3.4 Form Pengembalian
```
+---------------------------------------------------------------------+
| Pengembalian Buku                                                   |
|---------------------------------------------------------------------|
| Cari transaksi aktif:                                               |
| [ Nama anggota / judul buku... ]                                    |
|                                                                     |
| +--------------------------------------------------------- -------+ |
| | Anggota      | Buku           | Tgl Pinjam    | Aksi            | |
| |---------------------------------------------------------   -----| |
| | Siti Aminah  | Bumi Manusia   | 11/05/2024    | [ Kembalikan ]  | |
| | Budi Santoso | Laskar Pelangi | 15/05/2024    | [ Kembalikan ]  | |
| | Dewi Lestari | Negeri 5 Menara| 19/05/2024    | [ Kembalikan ]  | |
| +-----------------------------------------------------------------+ |
+---------------------------------------------------------------------+
```

#### 3.5 Riwayat Peminjaman per Anggota
```
+-----------------------------------------------------------+
| Riwayat Peminjaman — Siti Aminah                          |
|-----------------------------------------------------------+
| Buku           | Pinjam      | Kembali    | Status        |
|-----------------------------------------------------------|
| Laskar Pelangi | 01/07/2024  | 10/07/2024 | [Selesai]     |
| Bumi Manusia   | 15/07/2024  | -          | [Dipinjam]    |
| Negeri 5 Menara| 20/06/2024  | 22/06/2024 | [Selesai]     |
| Pulang         | 05/06/2024  | 05/06/2024 | [Selesai]     |
|                                                           |
| Keterangan Status:                                        |
| Dipinjam         Selesai        Dikembalikan              |
+-----------------------------------------------------------+
```