-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2023 at 03:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `username`, `foto`, `date`) VALUES
(1, 'damarwulan1', 'umi.jpg', '2023-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `code` varchar(12) NOT NULL,
  `jdl_buku` varchar(80) NOT NULL,
  `updt_buku` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  `img` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `code`, `jdl_buku`, `updt_buku`, `status`, `img`) VALUES
(1, '001', 'PENELITIAN TUMBUHAN JAMUR TIRAM', '16-Feb-2023', '1', 'buku1.jpg'),
(2, '002', 'PENELITIAN TUMBUHAN JAMUR KUPING', '16-Feb-2023', '1', 'buku2.jpg'),
(3, '003', 'PENELITIAN TUMBUHAN JAMUR GAJAH', '16-Feb-2023', '1', 'buku3.jpg'),
(4, '004', 'PENELITIAN TUMBUHAN JAMUR LETONG', '16-Feb-2023', '1', 'buku4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `id` int(11) NOT NULL,
  `jdl_buku` varchar(80) NOT NULL,
  `username` varchar(40) NOT NULL,
  `denda` varchar(40) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `req_perpus` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `STB` varchar(25) NOT NULL,
  `fklts` int(25) NOT NULL,
  `jrsn` int(25) NOT NULL,
  `almt` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(4) NOT NULL,
  `status` int(11) NOT NULL,
  `img` varchar(40) NOT NULL,
  `daftar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `req_perpus`, `nama`, `STB`, `fklts`, `jrsn`, `almt`, `email`, `username`, `password`, `level`, `status`, `img`, `daftar`) VALUES
(1, 'YTGJB356GBH1', 'A Prabhu', '123', 122, 555, 'SSSS', 'APrabhu@gmail.com', 'APrabhu1', 'aaa123', '2', 0, 'umi.jpg', '14-02-2023'),
(2, 'YTGJB356GBH2', 'A. Budi Pranoto', '123', 122, 555, 'SSSS', 'A.BudiPranoto@gmail.com', 'A.BudiPranoto2', 'aaa123', '2', 0, 'umi.jpg', '23-02-2023'),
(3, 'YTGJB356GBH3', 'AAJ Batavia', '123', 122, 555, 'SSSS', 'AAJBatavia@gmail.com', 'AAJBatavia3', 'aaa124', '2', 0, 'umi.jpg', '13-02-2023'),
(4, 'YTGJB356GBH4', 'Aam Dewi Hamidah', '123', 122, 555, 'SSSS', 'AamDewiHamidah@gmail.com', 'AamDewiHamidah4', 'aaa124', '2', 0, 'umi.jpg', '11-02-2023'),
(5, 'YTGJB356GBH5', 'Aarti Lohia', '123', 122, 555, 'SSSS', 'AartiLohia@gmail.com', 'AartiLohia5', 'aaa125', '2', 0, 'umi.jpg', '27-02-2023'),
(6, 'YTGJB356GBH6', 'Abdul Hadi Ismail', '123', 122, 555, 'SSSS', 'AbdulHadiIsmail@gmail.com', 'AbdulHadiIsmail6', 'aaa125', '2', 0, 'umi.jpg', '16-02-2023'),
(7, 'YTGJB356GBH7', 'Abdul Rachman', '123', 122, 555, 'SSSS', 'AbdulRachman@gmail.com', 'AbdulRachman7', 'aaa126', '2', 0, 'umi.jpg', '10-02-2023'),
(8, 'YTGJB356GBH8', 'Abdul Rahman', '123', 122, 555, 'SSSS', 'AbdulRahman@gmail.com', 'AbdulRahman8', 'aaa126', '2', 0, 'umi.jpg', '2-02-2023'),
(9, 'YTGJB356GBH9', 'Abdul Rifai Natanegara', '123', 122, 555, 'SSSS', 'AbdulRifaiNatanegara@gmail.com', 'AbdulRifaiNatanegara9', 'aaa127', '2', 0, 'umi.jpg', '24-02-2023'),
(10, 'YTGJB356GBH10', 'Abdul Slam Tahir', '123', 122, 555, 'SSSS', 'AbdulSlamTahir@gmail.com', 'AbdulSlamTahir10', 'aaa127', '2', 0, 'umi.jpg', '22-02-2023'),
(11, 'YTGJB356GBH11', 'Abdullah Alatas', '123', 122, 555, 'SSSS', 'AbdullahAlatas@gmail.com', 'AbdullahAlatas11', 'aaa128', '2', 0, 'umi.jpg', '21-02-2023'),
(12, 'YTGJB356GBH12', 'Abu Djaja Bunjamin', '123', 122, 555, 'SSSS', 'AbuDjajaBunjamin@gmail.com', 'AbuDjajaBunjamin12', 'aaa128', '2', 0, 'umi.jpg', '8-02-2023'),
(13, 'YTGJB356GBH13', 'Abu Hermanto Budiono', '123', 122, 555, 'SSSS', 'AbuHermantoBudiono@gmail.com', 'AbuHermantoBudiono13', 'aaa129', '2', 0, 'umi.jpg', '15-02-2023'),
(14, 'YTGJB356GBH14', 'Achirsyah Moeis', '123', 122, 555, 'SSSS', 'AchirsyahMoeis@gmail.com', 'AchirsyahMoeis14', 'aaa129', '2', 0, 'umi.jpg', '24-02-2023'),
(15, 'YTGJB356GBH15', 'Achmad Fadjar', '123', 122, 555, 'SSSS', 'AchmadFadjar@gmail.com', 'AchmadFadjar15', 'aaa130', '2', 0, 'umi.jpg', '19-02-2023'),
(16, 'YTGJB356GBH16', 'Achmad Faried Joesoef', '123', 122, 555, 'SSSS', 'AchmadFariedJoesoef@gmail.com', 'AchmadFariedJoesoef16', 'aaa130', '2', 0, 'umi.jpg', '9-02-2023'),
(17, 'YTGJB356GBH17', 'Achmad Kalla', '123', 122, 555, 'SSSS', 'AchmadKalla@gmail.com', 'AchmadKalla17', 'aaa131', '2', 0, 'umi.jpg', '4-02-2023'),
(18, 'YTGJB356GBH18', 'Achmad Latief Alwy', '123', 122, 555, 'SSSS', 'AchmadLatiefAlwy@gmail.com', 'AchmadLatiefAlwy18', 'aaa131', '2', 0, 'umi.jpg', '3-02-2023'),
(19, 'YTGJB356GBH19', 'Achmad Nugraha Djuanda', '123', 122, 555, 'SSSS', 'AchmadNugrahaDjuanda@gmail.com', 'AchmadNugrahaDjuanda19', 'aaa132', '2', 0, 'umi.jpg', '8-02-2023'),
(20, 'YTGJB356GBH20', 'Achmad Sandi', '123', 122, 555, 'SSSS', 'AchmadSandi@gmail.com', 'AchmadSandi20', 'aaa132', '2', 0, 'umi.jpg', '26-02-2023'),
(21, 'YTGJB356GBH21', 'Achmad', '123', 122, 555, 'SSSS', 'Achmad@gmail.com', 'Achmad21', 'aaa133', '2', 0, 'umi.jpg', '25-02-2023'),
(22, 'YTGJB356GBH22', 'Adam Sautin', '123', 122, 555, 'SSSS', 'AdamSautin@gmail.com', 'AdamSautin22', 'aaa133', '2', 0, 'umi.jpg', '12-02-2023'),
(23, 'YTGJB356GBH23', 'Ade R. Syarief', '123', 122, 555, 'SSSS', 'AdeR.Syarief@gmail.com', 'AdeR.Syarief23', 'aaa134', '2', 0, 'umi.jpg', '4-02-2023'),
(24, 'YTGJB356GBH24', 'Ade Tjakralaksana', '123', 122, 555, 'SSSS', 'AdeTjakralaksana@gmail.com', 'AdeTjakralaksana24', 'aaa134', '2', 0, 'umi.jpg', '25-02-2023'),
(25, 'YTGJB356GBH25', 'Adelina Prasetio', '123', 122, 555, 'SSSS', 'AdelinaPrasetio@gmail.com', 'AdelinaPrasetio25', 'aaa135', '2', 0, 'umi.jpg', '18-02-2023'),
(26, 'YTGJB356GBH26', 'Adhi Utomo', '123', 122, 555, 'SSSS', 'AdhiUtomo@gmail.com', 'AdhiUtomo26', 'aaa135', '2', 0, 'umi.jpg', '3-02-2023'),
(27, 'YTGJB356GBH27', 'Adhi Utomo Jusman', '123', 122, 555, 'SSSS', 'AdhiUtomoJusman@gmail.com', 'AdhiUtomoJusman27', 'aaa136', '2', 0, 'umi.jpg', '28-02-2023'),
(28, 'YTGJB356GBH28', 'Adi Bisono', '123', 122, 555, 'SSSS', 'AdiBisono@gmail.com', 'AdiBisono28', 'aaa136', '2', 0, 'umi.jpg', '20-02-2023'),
(29, 'YTGJB356GBH29', 'Adi Sasono', '123', 122, 555, 'SSSS', 'AdiSasono@gmail.com', 'AdiSasono29', 'aaa137', '2', 0, 'umi.jpg', '21-02-2023'),
(30, 'YTGJB356GBH30', 'Adi Sumito', '123', 122, 555, 'SSSS', 'AdiSumito@gmail.com', 'AdiSumito30', 'aaa137', '2', 0, 'umi.jpg', '14-02-2023'),
(31, 'YTGJB356GBH31', 'Adimitra Baratama Nusantara', '123', 122, 555, 'SSSS', 'AdimitraBaratamaNusantara@gmail.com', 'AdimitraBaratamaNusantara31', 'aaa138', '2', 0, 'umi.jpg', '6-02-2023'),
(32, 'YTGJB356GBH32', 'Aditya Koeswojo', '123', 122, 555, 'SSSS', 'AdityaKoeswojo@gmail.com', 'AdityaKoeswojo32', 'aaa138', '2', 0, 'umi.jpg', '21-02-2023'),
(33, 'YTGJB356GBH33', 'Adji Muljo Teguh', '123', 122, 555, 'SSSS', 'AdjiMuljoTeguh@gmail.com', 'AdjiMuljoTeguh33', 'aaa139', '2', 0, 'umi.jpg', '8-02-2023'),
(34, 'YTGJB356GBH35', 'Adri Achmad Drajat', '123', 122, 555, 'SSSS', 'AdriAchmadDrajat@gmail.com', 'AdriAchmadDrajat35', 'aaa140', '2', 0, 'umi.jpg', '11-02-2023'),
(35, 'YTGJB356GBH36', 'Adriana Maya Politon', '123', 122, 555, 'SSSS', 'AdrianaMayaPoliton@gmail.com', 'AdrianaMayaPoliton36', 'aaa140', '2', 0, 'umi.jpg', '28-02-2023'),
(36, 'YTGJB356GBH37', 'Adryansyah', '123', 122, 555, 'SSSS', 'Adryansyah@gmail.com', 'Adryansyah37', 'aaa141', '2', 0, 'umi.jpg', '3-02-2023'),
(37, 'YTGJB356GBH38', 'Afandi Hermawan Oey', '123', 122, 555, 'SSSS', 'AfandiHermawanOey@gmail.com', 'AfandiHermawanOey38', 'aaa141', '2', 0, 'umi.jpg', '14-02-2023'),
(38, 'YTGJB356GBH39', 'Tjoeng Anna Chrisnadi', '123', 122, 555, 'SSSS', 'TjoengAnnaChrisnadi@gmail.com', 'TjoengAnnaChrisnadi39', 'aaa142', '2', 0, 'umi.jpg', '11-02-2023'),
(39, 'YTGJB356GBH40', 'Agam Nugraha Subagdja', '123', 122, 555, 'SSSS', 'AgamNugrahaSubagdja@gmail.com', 'AgamNugrahaSubagdja40', 'aaa142', '2', 0, 'umi.jpg', '13-02-2023'),
(40, 'YTGJB356GBH41', 'Ago Harlim', '123', 122, 555, 'SSSS', 'AgoHarlim@gmail.com', 'AgoHarlim41', 'aaa143', '2', 0, 'umi.jpg', '22-02-2023'),
(41, 'YTGJB356GBH42', 'Agoeng Noegroho', '123', 122, 555, 'SSSS', 'AgoengNoegroho@gmail.com', 'AgoengNoegroho42', 'aaa143', '2', 0, 'umi.jpg', '16-02-2023'),
(42, 'YTGJB356GBH43', 'Agung Podomoro Group', '123', 122, 555, 'SSSS', 'AgungPodomoroGroup@gmail.com', 'AgungPodomoroGroup43', 'aaa144', '2', 0, 'umi.jpg', '17-02-2023'),
(43, 'YTGJB356GBH44', 'Agung Salim', '123', 122, 555, 'SSSS', 'AgungSalim@gmail.com', 'AgungSalim44', 'aaa144', '2', 0, 'umi.jpg', '13-02-2023'),
(44, 'YTGJB356GBH45', 'Agung Tobing', '123', 122, 555, 'SSSS', 'AgungTobing@gmail.com', 'AgungTobing45', 'aaa145', '2', 0, 'umi.jpg', '27-02-2023'),
(45, 'YTGJB356GBH46', 'Agus Djohari', '123', 122, 555, 'SSSS', 'AgusDjohari@gmail.com', 'AgusDjohari46', 'aaa145', '2', 0, 'umi.jpg', '11-02-2023'),
(46, 'YTGJB356GBH47', 'AGUS HARTONO LIE', '123', 122, 555, 'SSSS', 'AGUSHARTONOLIE@gmail.com', 'AGUSHARTONOLIE47', 'aaa146', '2', 0, 'umi.jpg', '11-02-2023'),
(47, 'YTGJB356GBH48', 'Agus Lasmono Sudwikatmono', '123', 122, 555, 'SSSS', 'AgusLasmonoSudwikatmono@gmail.com', 'AgusLasmonoSudwikatmono48', 'aaa146', '2', 0, 'umi.jpg', '16-02-2023'),
(48, 'YTGJB356GBH49', 'Agus Leman Gunawan', '123', 122, 555, 'SSSS', 'AgusLemanGunawan@gmail.com', 'AgusLemanGunawan49', 'aaa147', '2', 0, 'umi.jpg', '17-02-2023'),
(49, 'YTGJB356GBH50', 'Agus Makmur', '123', 122, 555, 'SSSS', 'AgusMakmur@gmail.com', 'AgusMakmur50', 'aaa147', '2', 0, 'umi.jpg', '14-02-2023'),
(50, 'YTGJB356GBH51', 'Agus Nursalim', '123', 122, 555, 'SSSS', 'AgusNursalim@gmail.com', 'AgusNursalim51', 'aaa148', '2', 0, 'umi.jpg', '21-02-2023'),
(51, 'YTGJB356GBH52', 'Agus Pranoto Setiadi', '123', 122, 555, 'SSSS', 'AgusPranotoSetiadi@gmail.com', 'AgusPranotoSetiadi52', 'aaa148', '2', 0, 'umi.jpg', '8-02-2023'),
(52, 'YTGJB356GBH53', 'Agus Purnomo Edhi', '123', 122, 555, 'SSSS', 'AgusPurnomoEdhi@gmail.com', 'AgusPurnomoEdhi53', 'aaa149', '2', 0, 'umi.jpg', '27-02-2023'),
(53, 'YTGJB356GBH54', 'Agus Soenong / Intina Wirawan The', '123', 122, 555, 'SSSS', 'AgusSoenong/IntinaWirawanThe@gmail.com', 'AgusSoenong/IntinaWirawanThe54', 'aaa149', '2', 0, 'umi.jpg', '20-02-2023'),
(54, 'YTGJB356GBH55', 'Agus Suherman Wirjan', '123', 122, 555, 'SSSS', 'AgusSuhermanWirjan@gmail.com', 'AgusSuhermanWirjan55', 'aaa150', '2', 0, 'umi.jpg', '23-02-2023'),
(55, 'YTGJB356GBH56', 'Agus Susanto', '123', 122, 555, 'SSSS', 'AgusSusanto@gmail.com', 'AgusSusanto56', 'aaa150', '2', 0, 'umi.jpg', '23-02-2023'),
(56, 'YTGJB356GBH57', 'Agus Tjandra', '123', 122, 555, 'SSSS', 'AgusTjandra@gmail.com', 'AgusTjandra57', 'aaa151', '2', 0, 'umi.jpg', '24-02-2023'),
(57, 'YTGJB356GBH58', 'Agus Widagdo', '123', 122, 555, 'SSSS', 'AgusWidagdo@gmail.com', 'AgusWidagdo58', 'aaa151', '2', 0, 'umi.jpg', '8-02-2023'),
(58, 'YTGJB356GBH59', 'Agustinus Prasetio', '123', 122, 555, 'SSSS', 'AgustinusPrasetio@gmail.com', 'AgustinusPrasetio59', 'aaa152', '2', 0, 'umi.jpg', '12-02-2023'),
(59, 'YTGJB356GBH60', 'Agustinus Wishnu Handoyono', '123', 122, 555, 'SSSS', 'AgustinusWishnuHandoyono@gmail.com', 'AgustinusWishnuHandoyono60', 'aaa152', '2', 0, 'umi.jpg', '7-02-2023'),
(60, 'YTGJB356GBH61', 'Aguston Makmur', '123', 122, 555, 'SSSS', 'AgustonMakmur@gmail.com', 'AgustonMakmur61', 'aaa153', '2', 0, 'umi.jpg', '27-02-2023'),
(61, 'YTGJB356GBH62', 'Ahadiat Wargana', '123', 122, 555, 'SSSS', 'AhadiatWargana@gmail.com', 'AhadiatWargana62', 'aaa153', '2', 0, 'umi.jpg', '29-02-2023'),
(62, 'YTGJB356GBH63', 'Ahmad Dipoditiro', '123', 122, 555, 'SSSS', 'AhmadDipoditiro@gmail.com', 'AhmadDipoditiro63', 'aaa154', '2', 0, 'umi.jpg', '18-02-2023'),
(63, 'YTGJB356GBH64', 'Ahmad Marda', '123', 122, 555, 'SSSS', 'AhmadMarda@gmail.com', 'AhmadMarda64', 'aaa154', '2', 0, 'umi.jpg', '13-02-2023'),
(64, 'YTGJB356GBH65', 'Ahmad Rahman Pasaman', '123', 122, 555, 'SSSS', 'AhmadRahmanPasaman@gmail.com', 'AhmadRahmanPasaman65', 'aaa155', '2', 0, 'umi.jpg', '18-02-2023'),
(65, 'YTGJB356GBH66', 'Ahmaddin Ahmad', '123', 122, 555, 'SSSS', 'AhmaddinAhmad@gmail.com', 'AhmaddinAhmad66', 'aaa155', '2', 0, 'umi.jpg', '17-02-2023'),
(66, 'YTGJB356GBH67', 'Ahmades Miqailla', '123', 122, 555, 'SSSS', 'AhmadesMiqailla@gmail.com', 'AhmadesMiqailla67', 'aaa156', '2', 0, 'umi.jpg', '14-02-2023'),
(67, 'YTGJB356GBH68', 'Ahsanil Gusnawati', '123', 122, 555, 'SSSS', 'AhsanilGusnawati@gmail.com', 'AhsanilGusnawati68', 'aaa156', '2', 0, 'umi.jpg', '26-02-2023'),
(68, 'YTGJB356GBH69', 'Aida Ishak', '123', 122, 555, 'SSSS', 'AidaIshak@gmail.com', 'AidaIshak69', 'aaa157', '2', 0, 'umi.jpg', '14-02-2023'),
(69, 'YTGJB356GBH70', 'AIRIN OKTAVIANY GUNAWAN', '123', 122, 555, 'SSSS', 'AIRINOKTAVIANYGUNAWAN@gmail.com', 'AIRINOKTAVIANYGUNAWAN70', 'aaa157', '2', 0, 'umi.jpg', '2-02-2023'),
(70, 'YTGJB356GBH71', 'Aiwy', '123', 122, 555, 'SSSS', 'Aiwy@gmail.com', 'Aiwy71', 'aaa158', '2', 0, 'umi.jpg', '15-02-2023'),
(71, 'YTGJB356GBH72', 'Aizid Syafriel Adjam', '123', 122, 555, 'SSSS', 'AizidSyafrielAdjam@gmail.com', 'AizidSyafrielAdjam72', 'aaa158', '2', 0, 'umi.jpg', '6-02-2023'),
(72, 'YTGJB356GBH73', 'Aji Bayu Wirrotama', '123', 122, 555, 'SSSS', 'AjiBayuWirrotama@gmail.com', 'AjiBayuWirrotama73', 'aaa159', '2', 0, 'umi.jpg', '29-02-2023'),
(73, 'YTGJB356GBH74', 'AJI WIJAYA, SUNARTO YUDO ', '123', 122, 555, 'SSSS', 'AJIWIJAYA,SUNARTOYUDO@gmail.com', 'AJIWIJAYA,SUNARTOYUDO74', 'aaa159', '2', 0, 'umi.jpg', '2-02-2023'),
(74, 'YTGJB356GBH75', 'Akbar Yoso Trisedia', '123', 122, 555, 'SSSS', 'AkbarYosoTrisedia@gmail.com', 'AkbarYosoTrisedia75', 'aaa160', '2', 0, 'umi.jpg', '30-02-2023'),
(75, 'YTGJB356GBH76', 'Alan Clark', '123', 122, 555, 'SSSS', 'AlanClark@gmail.com', 'AlanClark76', 'aaa160', '2', 0, 'umi.jpg', '5-02-2023'),
(76, 'YTGJB356GBH77', 'Alan Robertson Clark', '123', 122, 555, 'SSSS', 'AlanRobertsonClark@gmail.com', 'AlanRobertsonClark77', 'aaa161', '2', 0, 'umi.jpg', '5-02-2023'),
(77, 'YTGJB356GBH78', 'Alanberg Pte. Ltd.', '123', 122, 555, 'SSSS', 'AlanbergPte.Ltd.@gmail.com', 'AlanbergPte.Ltd.78', 'aaa161', '2', 0, 'umi.jpg', '2-02-2023'),
(78, 'YTGJB356GBH79', 'ALBERT CAHYADI ', '123', 122, 555, 'SSSS', 'ALBERTCAHYADI@gmail.com', 'ALBERTCAHYADI79', 'aaa162', '2', 0, 'umi.jpg', '14-02-2023'),
(79, 'YTGJB356GBH80', 'Albert Kongoasa', '123', 122, 555, 'SSSS', 'AlbertKongoasa@gmail.com', 'AlbertKongoasa80', 'aaa162', '2', 0, 'umi.jpg', '19-02-2023'),
(80, 'YTGJB356GBH81', 'Albert Sugianto', '123', 122, 555, 'SSSS', 'AlbertSugianto@gmail.com', 'AlbertSugianto81', 'aaa163', '2', 0, 'umi.jpg', '3-02-2023'),
(81, 'YTGJB356GBH82', 'Albert Suherman', '123', 122, 555, 'SSSS', 'AlbertSuherman@gmail.com', 'AlbertSuherman82', 'aaa163', '2', 0, 'umi.jpg', '6-02-2023'),
(82, 'YTGJB356GBH83', 'Aldo Putra Brasali', '123', 122, 555, 'SSSS', 'AldoPutraBrasali@gmail.com', 'AldoPutraBrasali83', 'aaa164', '2', 0, 'umi.jpg', '2-02-2023'),
(83, 'YTGJB356GBH84', 'Alex Ivan Tanoyo', '123', 122, 555, 'SSSS', 'AlexIvanTanoyo@gmail.com', 'AlexIvanTanoyo84', 'aaa164', '2', 0, 'umi.jpg', '15-02-2023'),
(84, 'YTGJB356GBH85', 'Alexander Hermas Wolfe', '123', 122, 555, 'SSSS', 'AlexanderHermasWolfe@gmail.com', 'AlexanderHermasWolfe85', 'aaa165', '2', 0, 'umi.jpg', '10-02-2023'),
(85, 'YTGJB356GBH86', 'Alexander Johan Widjaja', '123', 122, 555, 'SSSS', 'AlexanderJohanWidjaja@gmail.com', 'AlexanderJohanWidjaja86', 'aaa165', '2', 0, 'umi.jpg', '20-02-2023'),
(86, 'YTGJB356GBH87', 'Alexander Thaslim', '123', 122, 555, 'SSSS', 'AlexanderThaslim@gmail.com', 'AlexanderThaslim87', 'aaa166', '2', 0, 'umi.jpg', '1-02-2023'),
(87, 'YTGJB356GBH88', 'Alexandra Miksar', '123', 122, 555, 'SSSS', 'AlexandraMiksar@gmail.com', 'AlexandraMiksar88', 'aaa166', '2', 0, 'umi.jpg', '24-02-2023'),
(88, 'YTGJB356GBH91', 'Alfari Narindra', '123', 122, 555, 'SSSS', 'AlfariNarindra@gmail.com', 'AlfariNarindra91', 'aaa168', '2', 0, 'umi.jpg', '5-02-2023'),
(89, 'YTGJB356GBH92', 'Ali Alimsyah', '123', 122, 555, 'SSSS', 'AliAlimsyah@gmail.com', 'AliAlimsyah92', 'aaa168', '2', 0, 'umi.jpg', '17-02-2023'),
(90, 'YTGJB356GBH93', 'Ali Chendra', '123', 122, 555, 'SSSS', 'AliChendra@gmail.com', 'AliChendra93', 'aaa169', '2', 0, 'umi.jpg', '2-02-2023'),
(91, 'YTGJB356GBH94', 'Alice Haryono', '123', 122, 555, 'SSSS', 'AliceHaryono@gmail.com', 'AliceHaryono94', 'aaa169', '2', 0, 'umi.jpg', '14-02-2023'),
(92, 'YTGJB356GBH95', 'Alien Wibowo', '123', 122, 555, 'SSSS', 'AlienWibowo@gmail.com', 'AlienWibowo95', 'aaa170', '2', 0, 'umi.jpg', '23-02-2023'),
(93, 'YTGJB356GBH96', 'Aling Hermawan Oey', '123', 122, 555, 'SSSS', 'AlingHermawanOey@gmail.com', 'AlingHermawanOey96', 'aaa170', '2', 0, 'umi.jpg', '3-02-2023'),
(94, 'YTGJB356GBH97', 'Alisyahrazad Hanafiah', '123', 122, 555, 'SSSS', 'AlisyahrazadHanafiah@gmail.com', 'AlisyahrazadHanafiah97', 'aaa171', '2', 0, 'umi.jpg', '16-02-2023'),
(95, 'YTGJB356GBH98', 'Allan Dijaya Keller', '123', 122, 555, 'SSSS', 'AllanDijayaKeller@gmail.com', 'AllanDijayaKeller98', 'aaa171', '2', 0, 'umi.jpg', '10-02-2023'),
(96, 'YTGJB356GBH99', 'Allan Tjahja Tjao', '123', 122, 555, 'SSSS', 'AllanTjahjaTjao@gmail.com', 'AllanTjahjaTjao99', 'aaa172', '2', 0, 'umi.jpg', '22-02-2023'),
(97, 'YTGJB356GBH100', 'Aluinanto Sandjojo', '123', 122, 555, 'SSSS', 'AluinantoSandjojo@gmail.com', 'AluinantoSandjojo100', 'aaa172', '2', 0, 'umi.jpg', '22-02-2023'),
(98, 'YTGJB356GBH101', 'Alvin Gozali', '123', 122, 555, 'SSSS', 'AlvinGozali@gmail.com', 'AlvinGozali101', 'aaa173', '2', 0, 'umi.jpg', '19-02-2023'),
(99, 'YTGJB356GBH102', 'Alwi Alatas', '123', 122, 555, 'SSSS', 'AlwiAlatas@gmail.com', 'AlwiAlatas102', 'aaa173', '2', 0, 'umi.jpg', '26-02-2023'),
(100, 'YTGJB356GBH103', 'Alwijaya Aw', '123', 122, 555, 'SSSS', 'AlwijayaAw@gmail.com', 'AlwijayaAw103', 'aaa174', '2', 0, 'umi.jpg', '13-02-2023'),
(101, 'YTGJB356GBH104', 'Amalia', '123', 122, 555, 'SSSS', 'Amalia@gmail.com', 'Amalia104', 'aaa174', '2', 0, 'umi.jpg', '5-02-2023'),
(102, 'YTGJB356GBH105', 'Amalia Aristiningsih', '123', 122, 555, 'SSSS', 'AmaliaAristiningsih@gmail.com', 'AmaliaAristiningsih105', 'aaa175', '2', 0, 'umi.jpg', '20-02-2023'),
(103, 'YTGJB356GBH106', 'Amaluddin Djambak', '123', 122, 555, 'SSSS', 'AmaluddinDjambak@gmail.com', 'AmaluddinDjambak106', 'aaa175', '2', 0, 'umi.jpg', '8-02-2023'),
(104, 'YTGJB356GBH107', 'Aman', '123', 122, 555, 'SSSS', 'Aman@gmail.com', 'Aman107', 'aaa176', '2', 0, 'umi.jpg', '7-02-2023'),
(105, 'YTGJB356GBH108', 'Ameesh Anand', '123', 122, 555, 'SSSS', 'AmeeshAnand@gmail.com', 'AmeeshAnand108', 'aaa176', '2', 0, 'umi.jpg', '12-02-2023'),
(106, 'YTGJB356GBH109', 'Amelia Kurniawan', '123', 122, 555, 'SSSS', 'AmeliaKurniawan@gmail.com', 'AmeliaKurniawan109', 'aaa177', '2', 0, 'umi.jpg', '15-02-2023'),
(107, 'YTGJB356GBH110', 'Amelia Mulyono', '123', 122, 555, 'SSSS', 'AmeliaMulyono@gmail.com', 'AmeliaMulyono110', 'aaa177', '2', 0, 'umi.jpg', '25-02-2023'),
(108, 'YTGJB356GBH111', 'Amin Halim K', '123', 122, 555, 'SSSS', 'AminHalimK@gmail.com', 'AminHalimK111', 'aaa178', '2', 0, 'umi.jpg', '22-02-2023'),
(109, 'YTGJB356GBH112', 'Amin Halim', '123', 122, 555, 'SSSS', 'AminHalim@gmail.com', 'AminHalim112', 'aaa178', '2', 0, 'umi.jpg', '25-02-2023'),
(110, 'YTGJB356GBH113', 'Amin Supriyadi Liu', '123', 122, 555, 'SSSS', 'AminSupriyadiLiu@gmail.com', 'AminSupriyadiLiu113', 'aaa179', '2', 0, 'umi.jpg', '16-02-2023'),
(111, 'YTGJB356GBH114', 'Aminoto Sutandi', '123', 122, 555, 'SSSS', 'AminotoSutandi@gmail.com', 'AminotoSutandi114', 'aaa179', '2', 0, 'umi.jpg', '1-02-2023'),
(112, 'YTGJB356GBH116', 'Amrullah Hasyim', '123', 122, 555, 'SSSS', 'AmrullahHasyim@gmail.com', 'AmrullahHasyim116', 'aaa180', '2', 0, 'umi.jpg', '6-02-2023'),
(113, 'YTGJB356GBH117', 'Amy Delia', '123', 122, 555, 'SSSS', 'AmyDelia@gmail.com', 'AmyDelia117', 'aaa181', '2', 1, 'umi.jpg', '2-02-2023'),
(114, 'YTGJB356GBH118', 'Anak Agung Alit Wiradarma', '123', 122, 555, 'SSSS', 'AnakAgungAlitWiradarma@gmail.com', 'AnakAgungAlitWiradarma118', 'aaa181', '2', 1, 'umi.jpg', '17-02-2023'),
(115, 'YTGJB356GBH119', 'Anak Agung Gde Agung', '123', 122, 555, 'SSSS', 'AnakAgungGdeAgung@gmail.com', 'AnakAgungGdeAgung119', 'aaa182', '2', 1, 'umi.jpg', '7-02-2023'),
(116, 'YTGJB356GBH120', 'Ananda Soewono', '123', 122, 555, 'SSSS', 'AnandaSoewono@gmail.com', 'AnandaSoewono120', 'aaa182', '2', 1, 'umi.jpg', '2-02-2023'),
(117, 'YTGJB356GBH121', 'Ance Anggraeny', '123', 122, 555, 'SSSS', 'AnceAnggraeny@gmail.com', 'AnceAnggraeny121', 'aaa183', '2', 1, 'umi.jpg', '18-02-2023'),
(118, 'YTGJB356GBH122', 'Andang Bachtiar', '123', 122, 555, 'SSSS', 'AndangBachtiar@gmail.com', 'AndangBachtiar122', 'aaa183', '2', 1, 'umi.jpg', '7-02-2023'),
(119, 'YTGJB356GBH123', 'Andhika Anindyaguna', '123', 122, 555, 'SSSS', 'AndhikaAnindyaguna@gmail.com', 'AndhikaAnindyaguna123', 'aaa184', '2', 1, 'umi.jpg', '5-02-2023'),
(120, 'YTGJB356GBH124', 'Andi Achmad Dara', '123', 122, 555, 'SSSS', 'AndiAchmadDara@gmail.com', 'AndiAchmadDara124', 'aaa184', '2', 1, 'umi.jpg', '15-02-2023');

-- --------------------------------------------------------

--
-- Table structure for table `p_buku`
--

CREATE TABLE `p_buku` (
  `id` int(11) NOT NULL,
  `code` varchar(12) NOT NULL,
  `jdl_buku` varchar(80) NOT NULL,
  `tgl_pnjm` varchar(40) NOT NULL,
  `tgl_kmbl` varchar(40) NOT NULL,
  `status` varchar(5) NOT NULL,
  `stts_buku` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `req_perpus` (`req_perpus`),
  ADD UNIQUE KEY `username` (`username`(12));

--
-- Indexes for table `p_buku`
--
ALTER TABLE `p_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `denda`
--
ALTER TABLE `denda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `p_buku`
--
ALTER TABLE `p_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
