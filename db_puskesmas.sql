-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 12:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Admin 1', 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telp` bigint(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `status_aktif` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`id`, `nama`, `telp`, `foto`, `deskripsi`, `status_aktif`) VALUES
(5, 'Kop', 9213121122, 'Kop70.png', 'Khusus Covid-19', '1'),
(6, 'Wahyu', 748372221, 'Wahyu93.png', 'Khusus Gejala Umum', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak_admin`
--

CREATE TABLE `tbl_kontak_admin` (
  `id` int(11) NOT NULL,
  `telp` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kontak_admin`
--

INSERT INTO `tbl_kontak_admin` (`id`, `telp`) VALUES
(1, 2121312244);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak_ambulan`
--

CREATE TABLE `tbl_kontak_ambulan` (
  `id` int(11) NOT NULL,
  `telp` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kontak_ambulan`
--

INSERT INTO `tbl_kontak_ambulan` (`id`, `telp`) VALUES
(1, 21331234);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_layanan`
--

CREATE TABLE `tbl_layanan` (
  `id` int(11) NOT NULL,
  `nama_layanan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status_aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_layanan`
--

INSERT INTO `tbl_layanan` (`id`, `nama_layanan`, `keterangan`, `status_aktif`) VALUES
(1, 'Gigi', '(Buka Pukul 09.00 - 14.00) Pemeriksaan dan penyembuhan gigi.', 1),
(2, 'Umum', '(Buka Pukul 09.00 - 14.00) Sakit dengan gejala umum.', 1),
(3, 'Anak', '(Buka Pukul 09.00 - 14.00) Pemeriksaan khusus Anak', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telp` bigint(20) NOT NULL,
  `gender` enum('pria','wanita') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota_kab` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `tgl_daftar` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id`, `nik`, `no_pasien`, `nama`, `telp`, `gender`, `tgl_lahir`, `alamat`, `provinsi`, `kota_kab`, `kecamatan`, `kelurahan`, `tgl_daftar`) VALUES
(9, 1234567891011121, 2222, 'Wahyu A.BA', 81253024003, 'pria', '2021-09-01', 'pamulang', 'awdas', 'tangerang selatan', 'f', 'a', '2021-10-02'),
(12, 8012312312311, 161519, 'Mamat', 8934234222, 'pria', '2021-11-12', 'w', 'w', 'w', 'w', 'w', '2021-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `id` int(11) NOT NULL,
  `nik_pasien` bigint(20) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `no_antri` int(11) NOT NULL,
  `kode_booking` int(11) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `tgl_booking` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id`, `nik_pasien`, `nama_pasien`, `id_layanan`, `no_antri`, `kode_booking`, `tgl_kunjungan`, `tgl_booking`) VALUES
(27, 1231231, 's', 1, 1, 1031182689, '2021-10-30', '2021-10-31'),
(28, 1231231, 's', 1, 2, 103118098, '2021-10-30', '2021-10-31'),
(30, 22222, 's', 2, 1, 1031190936, '2021-10-29', '2021-10-31'),
(33, 442342, 'c', 3, 1, 1031192584, '2021-10-30', '2021-10-31'),
(34, 442342, 'c', 3, 2, 103119209, '2021-10-30', '2021-10-31'),
(35, 2131231231, 'd', 2, 1, 1101184072, '2021-11-03', '2021-11-01'),
(36, 312312, 'ss', 2, 1, 1101182099, '2021-11-12', '2021-11-01'),
(37, 213123, 'f', 2, 1, 1101191272, '2021-11-04', '2021-11-01'),
(38, 2131231231, 'd', 2, 1, 1101193040, '2021-11-17', '2021-11-01'),
(39, 1234567891011121, '3', 1, 1, 1101193760, '2021-11-18', '2021-11-01'),
(40, 8012312312311, '3', 3, 1, 1101192764, '2021-11-26', '2021-11-01'),
(41, 8012312312311, 's', 3, 2, 1101200766, '2021-11-26', '2021-11-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kontak_admin`
--
ALTER TABLE `tbl_kontak_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kontak_ambulan`
--
ALTER TABLE `tbl_kontak_ambulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_layanan` (`id_layanan`),
  ADD KEY `id_poli` (`id_layanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_kontak_admin`
--
ALTER TABLE `tbl_kontak_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kontak_ambulan`
--
ALTER TABLE `tbl_kontak_ambulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD CONSTRAINT `tbl_pendaftaran_ibfk_1` FOREIGN KEY (`id_layanan`) REFERENCES `tbl_layanan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
