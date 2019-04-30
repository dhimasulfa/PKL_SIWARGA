-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2019 pada 04.08
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siwarga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `emergency`
--

CREATE TABLE `emergency` (
  `id_emergency` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `pelapor` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` varchar(15) NOT NULL,
  `profil` varchar(100) NOT NULL,
  `ket_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `profil`, `ket_profil`) VALUES
('2', 'DESA WONOREJO', 'Desa Wonorejo merupakan salah satu Desa Agropolitan yang terletak di Kecamatan Poncokusumo, Kabupaten Malang. Secara geografis Desa Wonorejo terletak pada ketinggian 500-600 m dari permukaan laut, dengan curah hujan 2000-3000 MM/TH dan keadaan suhu rata-rata 26-27°c. Topografi yang ada di wilayah ini berupa dataran dengan luas 466.070 Ha, keadaan tanah yang ada di wilayah ini berpotensi sedang sehingga cocok untuk pertanian sayur-sayuran, terutama sayur  Kol, cabai, jagung, kentang. Tidak hanya sayur-sayuran, masyarakat juga menanam padi sebagai makanan pokok warga Desa. Dengan melimpahnya sayur-sayuran di Desa ini, Perangkat Desa beserta warga mendirikan kelompok tani yang diberi nama Sumber Urip 1 dengan jumlah anggota 40 orang dan Sumber Urip 2 dengan jumlah 30 orang.  Selain itu, warga juga berternak hewan sebagai pekerjaan sampingan. Hewan ternak tersebut diantaranya: sapi, kambing/domba, kuda, bebek/itik, dan ayam potong.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt`
--

CREATE TABLE `rt` (
  `id_rt` varchar(15) NOT NULL,
  `rt` int(15) NOT NULL,
  `rw` int(15) NOT NULL,
  `nama_ketua` varchar(100) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `telp` int(15) NOT NULL,
  `no_kk` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rt`
--

INSERT INTO `rt` (`id_rt`, `rt`, `rw`, `nama_ketua`, `alamat`, `telp`, `no_kk`, `status`) VALUES
('1', 1, 2, 'yuyuyu', 'yuyu', 98765, '98765', 'RT'),
('2', 1, 3, 'yiyi', 'kjhgfdxcv ', 87654, '78654', 'RT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rw`
--

CREATE TABLE `rw` (
  `id_rw` varchar(15) NOT NULL,
  `rw` int(15) NOT NULL,
  `nama_ketua` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` int(15) NOT NULL,
  `no_kk` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rw`
--

INSERT INTO `rw` (`id_rw`, `rw`, `nama_ketua`, `alamat`, `telp`, `no_kk`, `status`) VALUES
('W001', 3, 'sari', 'lumajang', 2147483647, '318639694758', 'ketua rw'),
('123', 1, 'DEFI', 'GUBENG', 8143323, '223344', 'RW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `nik` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_kk` varchar(15) NOT NULL,
  `tmp_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telp` int(15) NOT NULL,
  `status` varchar(25) NOT NULL,
  `id_rt` int(15) NOT NULL,
  `rw` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`nik`, `nama`, `no_kk`, `tmp_lahir`, `tgl_lahir`, `telp`, `status`, `id_rt`, `rw`) VALUES
('34426', 'fgdf', '123526', 'fdgd', '2019-03-12', 2145, 'dfgdf', 3, 4),
('3345', 'deka', '455', 'Lumajang', '1998-09-07', 81556432, 'Warga', 1, 3),
('12345', 'feri', '887', 'jember', '1997-04-02', 81653748, 'Warga', 123, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
