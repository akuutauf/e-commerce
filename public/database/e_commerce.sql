-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 17 Jun 2022 pada 00.52
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `itm1s`
--

CREATE TABLE `itm1s` (
  `DocEntry` bigint(20) UNSIGNED NOT NULL,
  `Itemcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Itemname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MPName` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MP_ProductName` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MP_ProductCategory` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Etalase` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MPKondisi` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MP_ProductDescription` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UrlVideoProduct` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MP_MinOrder` int(11) NOT NULL,
  `MP_UnitPrice` decimal(8,2) NOT NULL,
  `MP_GroceryPrice` decimal(8,2) NOT NULL,
  `MPStatusProduct` tinyint(1) NOT NULL,
  `MPStockProduct` int(11) NOT NULL,
  `MPSKU` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MPProductWeight` decimal(8,2) NOT NULL,
  `MP_ProductLength` decimal(8,2) NOT NULL,
  `MP_ProductWidth` decimal(8,2) NOT NULL,
  `MP_ProductHeight` decimal(8,2) NOT NULL,
  `MP_ProdInsurance` tinyint(1) NOT NULL,
  `MP_Delivery` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MP_POProduct` tinyint(1) NOT NULL,
  `MP_Pic1` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MP_Pic2` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MP_Pic3` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MP_Pic4` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MP_Pic5` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PromoSupport` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MPProductLink` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `itm1s`
--

INSERT INTO `itm1s` (`DocEntry`, `Itemcode`, `Itemname`, `MPName`, `MP_ProductName`, `MP_ProductCategory`, `Etalase`, `MPKondisi`, `MP_ProductDescription`, `UrlVideoProduct`, `MP_MinOrder`, `MP_UnitPrice`, `MP_GroceryPrice`, `MPStatusProduct`, `MPStockProduct`, `MPSKU`, `MPProductWeight`, `MP_ProductLength`, `MP_ProductWidth`, `MP_ProductHeight`, `MP_ProdInsurance`, `MP_Delivery`, `MP_POProduct`, `MP_Pic1`, `MP_Pic2`, `MP_Pic3`, `MP_Pic4`, `MP_Pic5`, `PromoSupport`, `MPProductLink`) VALUES
(1, 'ITM1-001', 'Banana Snack (Keripik Pisang Kepok) Varian Jagung Manis', 'Shopee', 'Banana Snack', 'Makanan', 'Fruit Chips', 'Baru', 'Banana Snack adalah Kripik Pisang dengan tampilan kekinian (Berongga) yg dibuat dengan penggorengan menjadi maksimal, dan keripik menjadi renyah. Kami menggunakan pisang kepok yang rasanya tidak perlu diragukan lagi.\r\n\r\n                Varian rasa yang tersedia adalah: Cokelat, Jagung Manis, dan Pedas Manis.\r\n\r\n                4 alasan memilih BANANA SNACK\r\n                1. Menggunakan pisang kepok\r\n                2. Kripik berbentuk taro berongga, membuat penggorengan maksimal, sehingga renyah menjadi maksimal\r\n                3. Gak pelit bumbu\r\n                4. Rasa yang bikin kangen (gak bisa berhenti sampai kenyang)\r\n\r\n                Informasi Produk:\r\n                Berat bersih : 65 g (per bungkus)\r\n                Exp date : 5 bulan\r\n                Izin Edar P-IRT : 214 3510 08 1177 - 26\r\n                Kemasan : Material Metalized / Alumunium Foil\r\n                Diproduksi : Secara Bersih dan Higienis', 'https://www.instagram.com/reel/CWqiYk-hDOK/', 1, '18000.00', '14000.00', 1, 46, '46', '65.50', '0.00', '0.00', '0.00', 0, 'Default', 0, 'img/banana-snack/banana_snack_jagung_manis_01.jpg', 'img/banana-snack/banana_snack_jagung_manis_01.jpg', 'img/banana-snack/banana_snack_jagung_manis_02.jpg', 'img/banana-snack/banana_snack_jagung_manis_02.jpg', 'img/banana-snack/banana_snack_jagung_manis_02.jpg', '#olahanbuahnaga#produkoleholeh#produkkhasbanyuwangi#aslibanyuwangi#produkkekinian#produksehat#kulinerbanyuwangi#explorebanyuwangi', 'https://shopee.co.id/Banana-Snack-(Keripik-Pisang-Kepok)-varian-jagung-manis-i.65325206.14530487418?sp_atk=aed2e3b8-f605-4c37-a951-4916bd1f0c69&xptdk=aed2e3b8-f605-4c37-a951-4916bd1f0c69'),
(2, 'ITM1-002', 'Banana Snack (Keripik Pisang Kepok) Varian Pedas Manis', 'Shopee', 'Banana Snack', 'Makanan', 'Fruit Chips', 'Baru', 'Banana Snack adalah Kripik Pisang dengan tampilan kekinian (Berongga) yg dibuat dengan penggorengan menjadi maksimal, dan keripik menjadi renyah. Kami menggunakan pisang kepok yang rasanya tidak perlu diragukan lagi.\r\n\r\n                Varian rasa yang tersedia adalah: Cokelat, Jagung Manis, dan Pedas Manis.\r\n\r\n                4 alasan memilih BANANA SNACK\r\n                1. Menggunakan pisang kepok\r\n                2. Kripik berbentuk taro berongga, membuat penggorengan maksimal, sehingga renyah menjadi maksimal\r\n                3. Gak pelit bumbu\r\n                4. Rasa yang bikin kangen (gak bisa berhenti sampai kenyang)\r\n\r\n                Informasi Produk:\r\n                Berat bersih : 65 g (per bungkus)\r\n                Exp date : 5 bulan\r\n                Izin Edar P-IRT : 214 3510 08 1177 - 26\r\n                Kemasan : Material Metalized / Alumunium Foil\r\n                Diproduksi : Secara Bersih dan Higienis', 'https://www.instagram.com/reel/CWFEg-dJr99/', 1, '14000.00', '14000.00', 1, 50, '50', '65.00', '0.00', '0.00', '0.00', 0, 'Default', 0, 'img/banana-snack/banana_snack_pedas_manis_02.jpg', 'img/banana-snack/banana_snack_pedas_manis_01.jpg', 'img/banana-snack/banana_snack_pedas_manis_02.jpg', 'img/banana-snack/banana_snack_pedas_manis_02.jpg', 'img/banana-snack/banana_snack_pedas_manis_02.jpg', '#olahanbuahnaga#produkoleholeh#produkkhasbanyuwangi#aslibanyuwangi#produkkekinian#produksehat#kulinerbanyuwangi#explorebanyuwangi', 'https://shopee.co.id/Banana-Snack-(Keripik-Pisang-Kepok)-Varian-Pedas-Manis-i.65325206.12666317338?sp_atk=f6c9c669-195b-46b7-9c72-05d6212e5756&xptdk=f6c9c669-195b-46b7-9c72-05d6212e5756'),
(3, 'ITM1-003', 'Banana Snack Varian Coklat', 'Shopee', 'Banana Snack', 'Makanan', 'Fruit Chips', 'Baru', 'Banana Snack adalah Kripik Pisang dengan tampilan kekinian (Berongga) yg dibuat dengan penggorengan menjadi maksimal, dan keripik menjadi renyah. Kami menggunakan pisang kepok yang rasanya tidak perlu diragukan lagi.\r\n\r\n                Varian rasa yang tersedia adalah: Cokelat, Jagung Manis, dan Pedas Manis.\r\n\r\n                4 alasan memilih BANANA SNACK\r\n                1. Menggunakan pisang kepok\r\n                2. Kripik berbentuk taro berongga, membuat penggorengan maksimal, sehingga renyah menjadi maksimal\r\n                3. Gak pelit bumbu\r\n                4. Rasa yang bikin kangen (gak bisa berhenti sampai kenyang)\r\n\r\n                Informasi Produk:\r\n                Berat bersih : 65 g (per bungkus)\r\n                Exp date : 5 bulan\r\n                Izin Edar P-IRT : 214 3510 08 1177 - 26\r\n                Kemasan : Material Metalized / Alumunium Foil\r\n                Diproduksi : Secara Bersih dan Higienis', 'https://www.instagram.com/reel/CXzi1ZNArjn/', 1, '15000.00', '15000.00', 1, 35, '30', '65.00', '0.00', '0.00', '0.00', 0, 'Default', 0, 'img/banana-snack/banana_snack_coklat_01.jpg', 'img/banana-snack/banana_snack_coklat_01.jpg', 'img/banana-snack/banana_snack_coklat_01.jpg', 'img/banana-snack/banana_snack_coklat_01.jpg', 'img/banana-snack/banana_snack_coklat_01.jpg', '#olahanbuahnaga#produkoleholeh#produkkhasbanyuwangi#aslibanyuwangi#produkkekinian#produksehat#kulinerbanyuwangi#explorebanyuwangi', 'https://shopee.co.id/Banana-Snack-Varian-Cokelat-i.65325206.14530486516?sp_atk=423e7c69-40bf-48e4-88d8-778fe878d390&xptdk=423e7c69-40bf-48e4-88d8-778fe878d390'),
(4, 'ITM1-004', 'Obugame DRAGON RECO (Rengginang Coklat) 175 gram', 'Shopee', 'Dragon Rengginang', 'Makanan', 'Fruit Chips', 'Baru', 'DRAGON RECO (Rengginang Coklat) adalah produk jajanan tradisional rengginang namun tampil kekinian dengan rasa yang khas serta balutan coklat yang bikin anda ketagihan. Produk ini menggunakan bahan-bahan yang berkualitas.\n\n                Tersedia dalam 2 ukuran: 80 gram, 175gram\n                Komposisi : beras ketan, buah naga, garam, penyedap, rempah-rempah\n\n                Nore: Harap disimpan di suhu ruang dan kering. Dan nikmati langsung sehabis munkin setelah dibuka, jika masih tersisa bisa disimpan di topel/ tempat kedap udara agar tetap terasa renyah\n\n                Pirt : 515 3510 07 1177-24\n                Halal : 07100058960419\n\n                Produk ini cocok menemanimu hari-harimu dan oleh-oleh lo.  Yukk tunggu apalagi sebelum kehabisan.', 'https://www.instagram.com/reel/CRcgYRBA9zF/', 1, '20000.00', '20000.00', 1, 272, '272', '175.00', '0.00', '0.00', '0.00', 0, 'STANDAR', 0, 'img/rengginang/dragon_reco.jpg', 'img/rengginang/rengginang_all.jpg', 'img/rengginang/dragon_reco.jpg', 'img/rengginang/rengginang_all.jpg', 'img/rengginang/dragon_reco.jpg', '#olahanbuahnaga#produkoleholeh#produkkhasbanyuwangi#aslibanyuwangi#produkkekinian#produksehat#kulinerbanyuwangi#explorebanyuwangi', 'https://shopee.co.id/Obugame-DRAGON-RECO-(Rengginang-Coklat)-175-gram-i.65325206.2716073514?sp_atk=a87e49ff-9685-45a6-be09-e4490a2c46d9&xptdk=a87e49ff-9685-45a6-be09-e4490a2c46d9'),
(5, 'ITM1-005', 'Obugame Rennginang Buah Naga (Varian Salted Egg) 100 gram', 'Shopee', 'Dragon Rengginang', 'Makanan', 'Fruit Chips', 'Baru', 'Varian camilan tradisional, Rengginang Buah Naga Salted Egg, dibuat dari bumbu telur asin khas Indonesia. Ini sangat renyah dengan rasa telur asin yang lezat dan kami menjamin Sahabat Obugamenia tidak akan pernah berhenti untuk menyantapnya.\n\n                Komposisi : Beras Ketan, Buah Naga, bubuk Telur Asin, Garam, Bawang Putih, Ketumbar, Penyedap Rasa, Minyak Goreng.\n                Grosir : Beli (>=25) Rp17.000\n                PIRT : 515 3510 06 1177-23\n                Halal : 07100058960419\n\n                Produk ini cocok menemani hari-harimu dan oleh-oleh lo. Yuk segera order sebelum kehabisan!!!!!', 'https://www.instagram.com/reel/CRYhT3QgzXJ/', 1, '18000.00', '17000.00', 1, 10, '10', '100.00', '0.00', '0.00', '0.00', 0, 'STANDAR', 0, 'img/rengginang/rengginang_salted_egg_01.jpg', 'img/rengginang/rengginang_all.jpg', 'img/rengginang/rengginang_salted_egg_01.jpg', 'img/rengginang/rengginang_all.jpg', 'img/rengginang/rengginang_salted_egg_01.jpg', '#olahanbuahnaga#produkoleholeh#produkkhasbanyuwangi#aslibanyuwangi#produkkekinian#produksehat#kulinerbanyuwangi#explorebanyuwangi', 'https://shopee.co.id/Obugame-Rennginang-Buah-Naga-Varian-Salted-Egg-100-gram-i.65325206.3210396084?sp_atk=456dd973-1e45-423b-b22e-905789169831&xptdk=456dd973-1e45-423b-b22e-905789169831'),
(6, 'ITM1-006', 'Obugame Dragon Drink Varian jahe 20 gram', 'Shopee', 'Dragon Drink', 'Minuman', 'Dragon Drink', 'Baru', 'Dragon Drink Varian Jahe terbuat dari buah naga yang khas warna merah alami alami bagi tubuh,  dan Jahe yang memiliki rasa hangat. Tanpa pewarna, pengawet, dan menggunakan gula pasir asli (tanpa pemanis buatan).\n\n                Kamu bisa memilih tingkatan level jahe yang sesuai dengan selera kamu, semakin tinggi level semakin tinggi kadar jahe.\n                Komposisi : buah naga, gula pasir, jahe\n                Netto : 100 gram\n                PIRT : 513 3510 05 1177-23\n                Tersedia juga ukuran 20 gram, 100 gram, 250 gram, 500 gram, 1000 gram', 'https://www.instagram.com/reel/CRNud8-gnrF/', 1, '2500.00', '2500.00', 1, 2, '2', '100.00', '0.00', '0.00', '0.00', 0, 'STANDAR', 0, 'img/dragon_drink/dragon_drink_jahe.jpg', 'img/dragon_drink/dragon_drink_jahe.jpg', 'img/dragon_drink/dragon_drink_jahe.jpg', 'img/dragon_drink/dragon_drink_jahe.jpg', 'img/dragon_drink/dragon_drink_jahe.jpg', '#minumansehat#minumansegar#minumanbuahnaga#minumanjahe ', 'https://shopee.co.id/Obugame-Dragon-Drink-Varian-jahe-20-gram-i.65325206.7943012742?sp_atk=395d91cc-5aaa-416b-b0d6-f099b8f6b8bc&xptdk=395d91cc-5aaa-416b-b0d6-f099b8f6b8bc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_31_185221_create_itm1s_table', 1),
(6, '2022_05_31_185355_create_oprinfs_table', 1),
(7, '2022_05_31_190611_create_owbevs_table', 1),
(8, '2022_05_31_191351_create_wbev1s_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `oprinfs`
--

CREATE TABLE `oprinfs` (
  `PrID` bigint(20) UNSIGNED NOT NULL,
  `PromoCode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PromoName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PromoDescription` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PromoSDate` date NOT NULL,
  `PromoEDate` date NOT NULL,
  `PromoIsActive` tinyint(1) NOT NULL,
  `PrCreatedBy` int(11) DEFAULT NULL,
  `PrCreatedDate` datetime NOT NULL DEFAULT current_timestamp(),
  `ImgUrlPromo1` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImgUrlPromo2` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PromoSupport` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oprinfs`
--

INSERT INTO `oprinfs` (`PrID`, `PromoCode`, `PromoName`, `PromoDescription`, `PromoSDate`, `PromoEDate`, `PromoIsActive`, `PrCreatedBy`, `PrCreatedDate`, `ImgUrlPromo1`, `ImgUrlPromo2`, `PromoSupport`) VALUES
(1, 'PRM-BS001', 'PROMO BIG DISKON 22% - Tahun Baru', 'Berlaku Untuk 10 Pembeli Pertama di Shopee', '2022-12-31', '2023-01-02', 1, 0, '0000-00-00 00:00:00', 'promo_banana_snack_01.jpg', 'promo_banana_snack_01.jpg', '#bananasnackpromo#bananasnacknewyearpromo#bigdiskon'),
(5, 'PRM-BS002', 'Promo Banana Snack', 'Hanya Untuk yang beruntung', '2022-06-08', '2022-06-12', 0, NULL, '2022-06-08 15:14:24', 'promo_banana_snack_02.jpg', 'promo_banana_snack_02.jpg', '#bananacoklat#bananasnack#kulinerbanyuwangi'),
(6, 'PRM-BS003', 'PROMO Bahagia OFF 10% Banana Snack All Varian - Dengan Kemasan Baru', 'Untuk Kantong Mahasiswa di Banyuwangi, Diskon 10% OFF selama Bulan Juni', '2022-06-24', '2022-06-30', 1, NULL, '2022-06-09 10:01:47', 'promo_banana_snack_05.jpg', 'promo_banana_snack_05.jpg', '#bananacoklat#bananasnack#kulinerbanyuwangi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `owbevs`
--

CREATE TABLE `owbevs` (
  `EventID` bigint(20) UNSIGNED NOT NULL,
  `EventCode` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EventName` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EventDescription` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PromoSupport` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `EventCDate` datetime NOT NULL,
  `EventCreatedBy` int(11) NOT NULL,
  `EventMainPict` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EventUpdatedDate` datetime NOT NULL,
  `EventCreateBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Obugame', 'obugame@gmail.com', NULL, '$2y$10$akBtr6kLRhROTjvJaX9TQ.jgWcLTL02wwlqbOjhstdV.PQ7zdQ2A2', NULL, '2022-06-05 22:22:55', '2022-06-05 22:22:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wbev1s`
--

CREATE TABLE `wbev1s` (
  `IDGallery` bigint(20) UNSIGNED NOT NULL,
  `EventCode` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PictLineNo` int(11) NOT NULL,
  `ShowPicture` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `itm1s`
--
ALTER TABLE `itm1s`
  ADD PRIMARY KEY (`DocEntry`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oprinfs`
--
ALTER TABLE `oprinfs`
  ADD PRIMARY KEY (`PrID`);

--
-- Indeks untuk tabel `owbevs`
--
ALTER TABLE `owbevs`
  ADD PRIMARY KEY (`EventID`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wbev1s`
--
ALTER TABLE `wbev1s`
  ADD PRIMARY KEY (`IDGallery`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `itm1s`
--
ALTER TABLE `itm1s`
  MODIFY `DocEntry` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `oprinfs`
--
ALTER TABLE `oprinfs`
  MODIFY `PrID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `owbevs`
--
ALTER TABLE `owbevs`
  MODIFY `EventID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `wbev1s`
--
ALTER TABLE `wbev1s`
  MODIFY `IDGallery` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
