-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Des 2016 pada 01.17
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simodul`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `Perminatan` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(25) NOT NULL,
  `bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `email`, `nama`, `Perminatan`, `password`, `status`, `bidang`) VALUES
(909, 'rifai@gmail.com', 'rifai', 'MIS', 'a5a7158118e59ee590424b55bb9aed17', 4, 'Sejarah'),
(1111, 'pab@com', 'paba', 'MIA', 'b59c67bf196a4758191e42f76670ceba', 3, 'Pendidikan agam dan Budi pekerti'),
(1112, 'ppk@com', 'ppk', 'MIA', '20d135f0f28185b84a4cf7aa51f29500', 3, 'Pendidikan pancasila dan Kewarganegaraan'),
(1113, 'bi@com', 'bi', 'MIA', '9c3b1830513cc3b8fc4b76635d32e692', 3, 'Bahasa Indonesia'),
(1114, 'sejarahindoipa@com', 'sejarah indo ipa', 'MIA', '9982b2a7fceaaee2c8444b5086aee008', 3, 'Sejarah Indonesia'),
(1115, 'matematika@com', 'matematika', 'MIA', 'e19347e1c3ca0c0b97de5fb3b690855a', 3, 'Matematika'),
(1116, 'bahasainggris@com', 'bahasa inggris', 'MIA', 'dd77279f7d325eec933f05b1672f6a1f', 3, 'Bahasa Inggris'),
(1117, 'sb@com', 'seni budaya', 'MIA', '0eec27c419d0fe24e53c90338cdc8bc6', 3, 'Seni budaya(Seni Musik)'),
(1118, 'pjok@com', 'pjok', 'MIA', 'c60d060b946d6dd6145dcbad5c4ccf6f', 3, 'Pendidikan Jasmani Olahraga dan Kesehatan'),
(1119, 'pbk@com', 'pbk', 'MIA', '8597a6cfa74defcbde3047c891d78f90', 3, 'Prakarya Budidaya dan Kewirausahaan'),
(1120, 'biologi@com', 'biologi', 'MIA', 'c6036a69be21cb660499b75718a3ef24', 3, 'Biologi'),
(1121, 'kimia@com', 'kimia', 'MIA', '3a15c7d0bbe60300a39f76f8a5ba6896', 3, 'Kimia'),
(1122, 'ekonomi@com', 'ekonomi', 'MIA', '3b712de48137572f3849aabd5666a4e3', 3, 'Ekonomi'),
(1123, 'bas@com', 'bas', 'MIA', '2cfd4560539f887a5e420412b370b361', 3, 'Bahasa Asing dan sastra Inggris'),
(1234, 'fisika@com', 'fisika', 'MIA', '81dc9bdb52d04dc20036dbd8313ed055', 3, 'Fisika'),
(1235, 'pab1@com', 'paba', 'MIS', '9996535e07258a7bbfd8b132435c5962', 4, 'Pendidikan agama dan Budi pekerti'),
(1236, 'ppk@com', 'ppk', 'MIS', '7bccfde7714a1ebadf06c5f4cea752c1', 4, 'Pendidikan pancasila dan Kewarganegaraan'),
(1237, 'bi@com', 'bi', 'MIS', 'a9eb812238f753132652ae09963a05e9', 4, 'Bahasa Indonesia'),
(1238, 'mtk@com', 'mtk', 'MIS', 'd38901788c533e8286cb6400b40b386d', 4, 'Matematika'),
(1239, 'sejarahindoips@com', 'sejarah indo ips', 'MIS', 'b3ba8f1bee1238a2f37603d90b58898d', 4, 'Sejarah Indonesia'),
(1240, 'bis@com', 'bis', 'MIS', 'a9078e8653368c9c291ae2f8b74012e7', 4, 'Bahasa Inggris'),
(1241, 'Sebi@com', 'seni budaya', 'MIS', '1c65cef3dfd1e00c0b03923a1c591db4', 4, 'Seni budaya(Seni Musik)'),
(1242, 'pjok@com', 'pjok', 'MIS', '2de5d16682c3c35007e4e92982f1a2ba', 4, 'Pendidikan Jasmani Olahraga dan Kesehatan'),
(1243, 'geo@com', 'geografi', 'MIS', 'e1d5be1c7f2f456670de3d53c7b54f4a', 4, 'Geografi'),
(1244, 'sejarah@com', 'sejarah', 'MIS', '2c89109d42178de8a367c0228f169bf8', 4, 'Sejarah'),
(1245, 'Sosiologi@com', 'Sosiologi', 'MIS', '5eac43aceba42c8757b54003a58277b5', 4, 'Sosiologi'),
(1246, 'ekonomi@com', 'ekonomi', 'MIS', '905056c1ac1dad141560467e0a99e1cf', 4, 'Ekonomi'),
(1247, 'bas@com', 'bas', 'MIS', 'e6d8545daa42d5ced125a4bf747b3688', 4, 'Bahasa Asing dan sastra Inggris'),
(1248, 'basjepang@com', 'bas jepang', 'MIS', '39e4973ba3321b80f37d9b55f63ed8b8', 4, 'Bahasa Asing(Jepang)'),
(9090, 'arif@gmail.com', 'arif', 'MIA', '38f629170ac3ab74b9d6d2cc411c2f3c', 3, 'Matematika'),
(10008, 'trisna@yahoo.com', 'trisna', 'MIA', '670eca4ad5de0e0cfcc60ab3dd008095', 3, 'Pendidikan agam dan Budi pekerti'),
(10009, 'dhimas_ali_balboa@yahoo.com', 'rangga', 'MIA', '483d8df877b31405c1e8fe4247f02d86', 3, 'Bahasa Asing dan sastra Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `matapel` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `Tahun` int(4) NOT NULL,
  `tanggal_upload` datetime NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `ukuran_file` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `minat` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `matapel`, `kelas`, `Tahun`, `tanggal_upload`, `nama_file`, `tipe`, `ukuran_file`, `file`, `minat`) VALUES
(57, 'Sejarah Indonesia', '10 MIA', 2016, '2016-09-09 08:09:56', 'siap', 'UAS', '1223247', '../../file_materi/pab/siap UAS MIA.pdf', 'MIA'),
(64, 'Sejarah Indonesia', '10 MIS', 2015, '2016-12-23 07:12:58', 'belajar sejarah (part 1)', 'MODUL PELAJARAN', '1864345', '../../file_materi/si/belajar sejarah (part 1) MODUL PELAJARAN MIS.pdf', 'MIS'),
(59, 'Sejarah Indonesia', '10 MIS', 2016, '2016-09-10 09:09:24', 'science', 'MODUL PELAJARAN', '0', '../../file_materi/pab/science MODUL PELAJARAN MIS.zip', 'MIS'),
(60, 'Sejarah Indonesia', '10 MIS', 2016, '2016-09-24 06:09:17', 'siap', 'UAS', '215052', '../../file_materi/pab/siap UAS MIS.pdf', 'MIS'),
(61, 'Sejarah Indonesia', '11 MIS', 2016, '2016-12-22 11:12:46', 'okee', 'MODUL PELAJARAN', '173668', '../../file_materi/si/okee MODUL PELAJARAN MIA.pdf', 'MIS'),
(62, 'Sejarah Indonesia', '10 MIS', 2015, '2016-12-22 11:12:31', 'latent semantik', 'MODUL PELAJARAN', '173668', '../../file_materi/si/latent semantik MODUL PELAJARAN MIA.pdf', 'MIS'),
(63, 'Sejarah Indonesia', '10 MIA', 2013, '2016-12-23 07:12:25', 'kemerdekaan indonesia', 'MODUL PELAJARAN', '173668', '../../file_materi/si/kemerdekaan indonesia MODUL PELAJARAN MIA.pdf', 'MIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `Perminatan` varchar(50) NOT NULL,
  `Tahun` int(4) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `email`, `nama`, `Perminatan`, `Tahun`, `password`, `status`) VALUES
(0, 'rahmat@gmail.com', 'rahmat', 'MIA', 2015, 'f09696910bdd874a99cd74c8f05b5c44', 1),
(1001, 'dhimas.nandista@gmail.com', 'dhimas nandista', 'MIA', 2016, '25d55ad283aa400af464c76d713c07ad', 1),
(1002, 'mulki@gmail.com', 'mulki rosyadi hidayat', 'MIA', 2013, 'd79c8788088c2193f0244d8f1f36d2db', 1),
(1003, 'suwarno@gmail.com', 'suwarno', 'MIS', 2016, '6074c6aa3488f3c2dddff2a7ca821aab', 2),
(1004, 'Rangga@gmail.com', 'Rangga satria', 'MIS', 2017, '827ccb0eea8a706c4c34a16891f84e7b', 1),
(1008, 'aji@yahoo.com', 'aji', 'MIA', 2014, '69f8ea31de0c00502b2ae571fbab1f95', 1),
(3131, 'sukoco@gmail.com', 'sukoco', 'MIS', 2015, 'e04755387e5b5968ec213e41f70c1d46', 2),
(101010, 'aldi@yahoo.com', 'aldi', 'MIA', 2016, '6d071901727aec1ba6d8e2497ef5b709', 1),
(109109, 'nawa@yahoo.com', 'nawa', 'MIA', 2017, '07d22fa4c3f9da63ddf39683e4eaa845', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `matapel` varchar(255) NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `minat` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `matapel`, `deadline`, `kelas`, `info`, `tgl`, `minat`) VALUES
(1, 'Sejarah Indonesia', '2016-09-10', '10 MIA', 'jangan lupa bahagia', '16-09-09 08:09:01', 'MIA'),
(2, 'Sejarah Indonesia', '2016-09-14', '10 MIS', 'oke apa itu', '16-09-10 09:09:32', 'MIS'),
(3, 'Sejarah Indonesia', '2016-12-25', '10 MIA', 'makan', '16-12-22 05:12:54', 'MIA'),
(4, 'Sejarah Indonesia', '2016-12-25', '10 MIA', 'makan', '16-12-22 05:12:04', 'MIA'),
(5, 'Sejarah Indonesia', '2016-12-24', '12 MIA', 'okee', '16-12-22 05:12:16', 'MIA'),
(6, 'Sejarah Indonesia', '2016-12-23', '10 MIS', 'okeee', '16-12-22 10:12:42', 'MIS'),
(7, 'Sejarah Indonesia', '2016-12-25', '10 MIS', 'sejarah hindu budha', '16-12-22 11:12:44', 'MIS'),
(8, 'Sejarah Indonesia', '2016-12-24', '11 MIA', 'belajar kemerdekaan', '16-12-23 07:12:49', 'MIA'),
(9, 'Sejarah Indonesia', '2016-12-31', '11 MIS', 'proklamasi', '16-12-23 07:12:13', 'MIS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugasupload`
--

CREATE TABLE `tugasupload` (
  `id` int(11) NOT NULL,
  `idtugas` int(11) NOT NULL,
  `matapel` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `tipe_file` varchar(50) NOT NULL,
  `ukuran_file` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  `tgl` datetime NOT NULL,
  `minat` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tugasupload`
--

INSERT INTO `tugasupload` (`id`, `idtugas`, `matapel`, `kelas`, `nama`, `subject`, `tipe_file`, `ukuran_file`, `file`, `tgl`, `minat`) VALUES
(36, 1, 'Sejarah Indonesia', '10 MIA', 'nandista', 'education', 'pdf', '379343', '../../file_tugas/bas/education_nandista_4444.pdf', '2016-12-22 05:12:51', 'MIA'),
(37, 1, 'Sejarah Indonesia', '10 MIA', 'dhimas nandista', 'lta', 'pdf', '173668', '../../file_tugas/si/lta_dhimas nandista_1001.pdf', '2016-12-22 10:12:15', 'MIA'),
(38, 2, 'Sejarah Indonesia', '10 MIS', 'suwarno', 'okkk', 'pdf', '173668', '../../file_tugas/si/okkk_suwarno_1003.pdf', '2016-12-22 10:12:02', 'MIS'),
(39, 2, 'Sejarah Indonesia', '10 MIS', 'suwarno', 'lda', 'pdf', '111580', '../../file_tugas/si/lda_suwarno_1003.pdf', '2016-12-23 12:12:52', 'MIS'),
(40, 2, 'Sejarah Indonesia', '10 MIS', 'suwarno', 'akan', 'pdf', '1864345', '../../file_tugas/si/akan_suwarno_1003.pdf', '2016-12-23 12:12:08', 'MIS'),
(41, 1, 'Sejarah Indonesia', '10 MIA', 'dhimas nandista', 'sudah di kerjakan', 'pdf', '1864345', '../../file_tugas/si/sudah di kerjakan_dhimas nandista_1001.pdf', '2016-12-23 07:12:13', 'MIA'),
(42, 2, 'Sejarah Indonesia', '10 MIS', 'suwarno', 'semantik', 'pdf', '272765', '../../file_tugas/si/semantik_suwarno_1003.pdf', '2016-12-23 07:12:24', 'MIS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tugasupload`
--
ALTER TABLE `tugasupload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tugasupload`
--
ALTER TABLE `tugasupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
