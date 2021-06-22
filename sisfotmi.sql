-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2021 pada 15.40
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfotmi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `idguru` varchar(50) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `jeniskelamin` varchar(100) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `idjenisptk` varchar(50) NOT NULL,
  `idmatapelajaran` varchar(50) NOT NULL,
  `tugastambahan` varchar(100) NOT NULL,
  `idstatuskepegawaian` varchar(50) NOT NULL,
  `nip` bigint(50) NOT NULL,
  `skcpns` varchar(100) NOT NULL,
  `tanggalcpns` date NOT NULL,
  `skpengangkat` varchar(100) NOT NULL,
  `tmtpengangkat` varchar(100) NOT NULL,
  `lembpengangkat` varchar(100) NOT NULL,
  `pangkatgolruang` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`idguru`, `guru`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `alamat`, `idjenisptk`, `idmatapelajaran`, `tugastambahan`, `idstatuskepegawaian`, `nip`, `skcpns`, `tanggalcpns`, `skpengangkat`, `tmtpengangkat`, `lembpengangkat`, `pangkatgolruang`, `foto`) VALUES
('01.01.22', 'Prof. Dr. Ir. Soekarno, SH', 'L', 'Malang', '2021-06-16', 'Jl. Abdul Manan 216 Pujon Lor Kab. Malang', 'Kepala Sekolah', 'Aqidah Akhlaq', 'Wali Kelas VII A', 'PNS', 485769385768394859, 'SK/CPNS/34?dsjj/2021', '2021-06-16', 'Depag', 'Subandiman', 'Depag', 'VII A', ''),
('01.01.23', 'Prof. Dr. Ir. Hatta, SH, MM', 'Laki-Laki', 'Malang', '2021-07-01', 'Jl. Brig. Abd. Manan 216 Rt 08 Rw 05 Pujon Malang', 'PTK 2', 'Aqidah Akhlaq', 'Wali Kelas VII B', 'pegawai3', 940596859458692059, 'SK/2304/sdfn/2021', '2021-06-07', 'ojadnf/akfn/32021', 'Loajfn jdnf', 'sdfsdf', 'Pang/Gol.Ruang', 'wrwerwr');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenisptk`
--

CREATE TABLE `tb_jenisptk` (
  `idjenisptk` varchar(50) NOT NULL,
  `jenisptk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenisptk`
--

INSERT INTO `tb_jenisptk` (`idjenisptk`, `jenisptk`) VALUES
('PNS', 'Pegawai Negeri Sipil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matapelajaran`
--

CREATE TABLE `tb_matapelajaran` (
  `idmatapelajaran` varchar(50) NOT NULL,
  `matapelajaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_matapelajaran`
--

INSERT INTO `tb_matapelajaran` (`idmatapelajaran`, `matapelajaran`) VALUES
('KIM1', 'Kimia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ruangankelas`
--

CREATE TABLE `tb_ruangankelas` (
  `idruangankelas` varchar(50) NOT NULL,
  `ruangan` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `jumlahsiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ruangankelas`
--

INSERT INTO `tb_ruangankelas` (`idruangankelas`, `ruangan`, `kelas`, `kapasitas`, `jumlahsiswa`) VALUES
('A02', 'A02', 'VII B', 4, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_statuskepegawaian`
--

CREATE TABLE `tb_statuskepegawaian` (
  `idstatuskepegawaian` varchar(50) NOT NULL,
  `statuskepegawaian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`idguru`);

--
-- Indeks untuk tabel `tb_jenisptk`
--
ALTER TABLE `tb_jenisptk`
  ADD PRIMARY KEY (`idjenisptk`);

--
-- Indeks untuk tabel `tb_matapelajaran`
--
ALTER TABLE `tb_matapelajaran`
  ADD PRIMARY KEY (`idmatapelajaran`);

--
-- Indeks untuk tabel `tb_ruangankelas`
--
ALTER TABLE `tb_ruangankelas`
  ADD PRIMARY KEY (`idruangankelas`);

--
-- Indeks untuk tabel `tb_statuskepegawaian`
--
ALTER TABLE `tb_statuskepegawaian`
  ADD PRIMARY KEY (`idstatuskepegawaian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
