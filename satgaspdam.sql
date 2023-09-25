-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Sep 2023 pada 02.46
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satgaspdam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datauser`
--

CREATE TABLE `datauser` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `status_pernikahan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telpon` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datauser`
--

INSERT INTO `datauser` (`id`, `nama_lengkap`, `no_ktp`, `email`, `agama`, `jurusan`, `sekolah`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `status_pernikahan`, `alamat`, `telpon`, `pendidikan_terakhir`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Zaid Abdillah', '3578092003000004', 'zaidabdillah18@gmail.com', 'Islam', 'Teknik Informatika', 'Politeknik Elektronika Negri Surabaya', 'Surabaya', '2023-09-24', 'Laki-Laki', 'Lajang', 'sdr1', '081331913558', 'D4', '2023-09-24 07:14:49', '2023-09-24 07:14:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `filedokumen`
--

CREATE TABLE `filedokumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cv` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `npwp` varchar(255) NOT NULL,
  `bpjs` varchar(255) NOT NULL,
  `skck` varchar(255) NOT NULL,
  `surat_sehat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `datauser_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `filedokumen`
--

INSERT INTO `filedokumen` (`id`, `cv`, `ktp`, `kk`, `npwp`, `bpjs`, `skck`, `surat_sehat`, `foto`, `ijazah`, `sertifikat`, `datauser_id`, `created_at`, `updated_at`) VALUES
(1, 'Logo MSECT.jpg', '166298776_WhatsApp Image 2023-03-06 at 13.56.56 (1).jpg', '166298776_WhatsApp Image 2023-03-06 at 13.56.56 (1).jpg', 'Muhammad Zaid Abdillah_KTP_1 (2).jpg', 'Picture5.jpg', 'Picture20.png', 'register TA.png', 'thermomaface.png-removebg-preview.png', 'web thermomaface.jpg', 'Muhammad zaid_sertifikat_fix (2)-8_page-0001 (1).jpg', 1, '2023-09-24 07:14:49', '2023-09-24 07:14:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalseleksi`
--

CREATE TABLE `jadwalseleksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pengumuman` varchar(255) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `tanggal_seleksi` datetime NOT NULL,
  `lokasi_seleksi` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `pilihlowongan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategorilowongan`
--

CREATE TABLE `kategorilowongan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategorilowongan`
--

INSERT INTO `kategorilowongan` (`id`, `nama_kategori`) VALUES
(1, 'Lowongan Pegawai Non-Tetap\r\n'),
(2, 'Lowongan Magang'),
(3, 'Lowongan Penelitian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE `lowongan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_lowongan` varchar(255) NOT NULL,
  `deskripsi_lowongan` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `penempatan` varchar(255) NOT NULL,
  `posisi_jabatan` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `syarat_dokumen` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `kategori_lowongan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id`, `judul_lowongan`, `deskripsi_lowongan`, `tanggal_mulai`, `tanggal_akhir`, `penempatan`, `posisi_jabatan`, `jenis_kelamin`, `pendidikan`, `jurusan`, `syarat_dokumen`, `keterangan`, `file`, `kategori_lowongan`, `created_at`, `updated_at`) VALUES
(1, 'Lowongan Programmer sebagai pegawai non-tetap', 'tes2', '2023-03-20', '2023-03-20', 'PDAM Surabaya', 'Programmer', 'Laki-Laki & Perempuan', 'D4', 'Teknik Elektro\nTeknik Informatika', 'CV\nKTP\nBJPS\nIjazah', 'Tolong lengkapi berkas dan pilih lowongan sesuai pilihan mu', NULL, 1, '2023-09-24 00:39:10', '2023-09-24 00:39:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(194, '2014_10_12_000000_create_users_table', 1),
(195, '2014_10_12_100000_create_password_resets_table', 1),
(196, '2019_08_19_000000_create_failed_jobs_table', 1),
(197, '2023_09_19_163539_create_datauser_table', 1),
(198, '2023_09_19_163606_create_lowongan_table', 1),
(199, '2023_09_19_163614_create_pilihlowongan_table', 1),
(200, '2023_09_20_011554_create_filedokumen_table', 1),
(201, '2023_09_20_075248_create_kategorilowongan_table', 1),
(202, '2023_09_23_081943_create_jadwalseleksi_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihlowongan`
--

CREATE TABLE `pilihlowongan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `datauser_id` bigint(20) UNSIGNED NOT NULL,
  `lowongan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pilihlowongan`
--

INSERT INTO `pilihlowongan` (`id`, `status`, `datauser_id`, `lowongan_id`, `created_at`, `updated_at`) VALUES
(1, 'Seleksi', 1, 1, '2023-09-24 07:14:49', '2023-09-24 07:14:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$DD3kMhQzghkymwvMiAOfmeVLURhQWiu9aOdQFVC/nsKOOmEY7fruG', NULL, '2023-09-24 07:15:18', '2023-09-24 07:15:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datauser`
--
ALTER TABLE `datauser`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `filedokumen`
--
ALTER TABLE `filedokumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filedokumen_datauser_id_foreign` (`datauser_id`);

--
-- Indeks untuk tabel `jadwalseleksi`
--
ALTER TABLE `jadwalseleksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwalseleksi_pilihlowongan_id_foreign` (`pilihlowongan_id`);

--
-- Indeks untuk tabel `kategorilowongan`
--
ALTER TABLE `kategorilowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pilihlowongan`
--
ALTER TABLE `pilihlowongan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pilihlowongan_datauser_id_foreign` (`datauser_id`),
  ADD KEY `pilihlowongan_lowongan_id_foreign` (`lowongan_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datauser`
--
ALTER TABLE `datauser`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `filedokumen`
--
ALTER TABLE `filedokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jadwalseleksi`
--
ALTER TABLE `jadwalseleksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategorilowongan`
--
ALTER TABLE `kategorilowongan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT untuk tabel `pilihlowongan`
--
ALTER TABLE `pilihlowongan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `filedokumen`
--
ALTER TABLE `filedokumen`
  ADD CONSTRAINT `filedokumen_datauser_id_foreign` FOREIGN KEY (`datauser_id`) REFERENCES `datauser` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwalseleksi`
--
ALTER TABLE `jadwalseleksi`
  ADD CONSTRAINT `jadwalseleksi_pilihlowongan_id_foreign` FOREIGN KEY (`pilihlowongan_id`) REFERENCES `pilihlowongan` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pilihlowongan`
--
ALTER TABLE `pilihlowongan`
  ADD CONSTRAINT `pilihlowongan_datauser_id_foreign` FOREIGN KEY (`datauser_id`) REFERENCES `datauser` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pilihlowongan_lowongan_id_foreign` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
