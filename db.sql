-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2023 at 01:47 PM
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
  `status` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `username`, `foto`, `status`, `created`) VALUES
(1, 'damarwulan1', 'umi.jpg', 0, '2023-02-21 02:17:51'),
(2, 'damarwulan1', 'umi.jpg', 2, '2023-02-26 17:13:47'),
(3, 'damarwulan1', 'umi.jpg', 2, '2023-02-26 17:13:47'),
(4, 'damarwulan1', 'umi.jpg', 2, '2023-02-26 17:13:46'),
(5, 'damarwulan1', 'umi.jpg', 2, '2023-02-26 17:13:46'),
(6, 'damarwulan1', 'umi.jpg', 2, '2023-01-26 17:13:45'),
(7, 'damarwulan1', 'umi.jpg', 1, '2023-03-26 17:13:40'),
(8, 'damarwulan1', 'umi.jpg', 1, '2023-02-26 17:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `req_perpus` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `STB` varchar(25) NOT NULL,
  `fklts` varchar(25) DEFAULT NULL,
  `jrsn` varchar(25) DEFAULT NULL,
  `almt` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(4) NOT NULL,
  `status` int(11) NOT NULL,
  `img` varchar(40) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `req_perpus`, `nama`, `STB`, `fklts`, `jrsn`, `almt`, `email`, `username`, `password`, `level`, `status`, `img`, `created`) VALUES
(19, 'YTGJB356GBH19', 'Achmad Nugraha Djuanda', '123', '122', '555', 'SSSS', 'AchmadNugrahaDjuanda@gmail.com', 'AchmadNugrahaDjuanda19', 'aaa132', '2', 1, 'umi.jpg', '2023-02-26 16:38:33'),
(24, 'YTGJB356GBH24', 'Ade Tjakralaksana', '123', '122', '555', 'SSSS', 'AdeTjakralaksana@gmail.com', 'AdeTjakralaksana24', 'aaa134', '2', 1, 'umi.jpg', '2023-02-27 12:30:17'),
(25, 'YTGJB356GBH25', 'Adelina Prasetio', '123', '122', '555', 'SSSS', 'AdelinaPrasetio@gmail.com', 'AdelinaPrasetio25', 'aaa135', '2', 1, 'umi.jpg', '2023-02-27 12:30:20'),
(26, 'YTGJB356GBH26', 'Adhi Utomo', '123', '122', '555', 'SSSS', 'AdhiUtomo@gmail.com', 'AdhiUtomo26', 'aaa135', '2', 1, 'umi.jpg', '2023-02-27 12:30:22'),
(27, 'YTGJB356GBH27', 'Adhi Utomo Jusman', '123', '122', '555', 'SSSS', 'AdhiUtomoJusman@gmail.com', 'AdhiUtomoJusman27', 'aaa136', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(28, 'YTGJB356GBH28', 'Adi Bisono', '123', '122', '555', 'SSSS', 'AdiBisono@gmail.com', 'AdiBisono28', 'aaa136', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(29, 'YTGJB356GBH29', 'Adi Sasono', '123', '122', '555', 'SSSS', 'AdiSasono@gmail.com', 'AdiSasono29', 'aaa137', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(30, 'YTGJB356GBH30', 'Adi Sumito', '123', '122', '555', 'SSSS', 'AdiSumito@gmail.com', 'AdiSumito30', 'aaa137', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(31, 'YTGJB356GBH31', 'Adimitra Baratama Nusantara', '123', '122', '555', 'SSSS', 'AdimitraBaratamaNusantara@gmail.com', 'AdimitraBaratamaNusantara31', 'aaa138', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(32, 'YTGJB356GBH32', 'Aditya Koeswojo', '123', '122', '555', 'SSSS', 'AdityaKoeswojo@gmail.com', 'AdityaKoeswojo32', 'aaa138', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(33, 'YTGJB356GBH33', 'Adji Muljo Teguh', '123', '122', '555', 'SSSS', 'AdjiMuljoTeguh@gmail.com', 'AdjiMuljoTeguh33', 'aaa139', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(34, 'YTGJB356GBH35', 'Adri Achmad Drajat', '123', '122', '555', 'SSSS', 'AdriAchmadDrajat@gmail.com', 'AdriAchmadDrajat35', 'aaa140', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(35, 'YTGJB356GBH36', 'Adriana Maya Politon', '123', '122', '555', 'SSSS', 'AdrianaMayaPoliton@gmail.com', 'AdrianaMayaPoliton36', 'aaa140', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(36, 'YTGJB356GBH37', 'Adryansyah', '123', '122', '555', 'SSSS', 'Adryansyah@gmail.com', 'Adryansyah37', 'aaa141', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(37, 'YTGJB356GBH38', 'Afandi Hermawan Oey', '123', '122', '555', 'SSSS', 'AfandiHermawanOey@gmail.com', 'AfandiHermawanOey38', 'aaa141', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(38, 'YTGJB356GBH39', 'Tjoeng Anna Chrisnadi', '123', '122', '555', 'SSSS', 'TjoengAnnaChrisnadi@gmail.com', 'TjoengAnnaChrisnadi39', 'aaa142', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(39, 'YTGJB356GBH40', 'Agam Nugraha Subagdja', '123', '122', '555', 'SSSS', 'AgamNugrahaSubagdja@gmail.com', 'AgamNugrahaSubagdja40', 'aaa142', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(40, 'YTGJB356GBH41', 'Ago Harlim', '123', '122', '555', 'SSSS', 'AgoHarlim@gmail.com', 'AgoHarlim41', 'aaa143', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(41, 'YTGJB356GBH42', 'Agoeng Noegroho', '123', '122', '555', 'SSSS', 'AgoengNoegroho@gmail.com', 'AgoengNoegroho42', 'aaa143', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(42, 'YTGJB356GBH43', 'Agung Podomoro Group', '123', '122', '555', 'SSSS', 'AgungPodomoroGroup@gmail.com', 'AgungPodomoroGroup43', 'aaa144', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(43, 'YTGJB356GBH44', 'Agung Salim', '123', '122', '555', 'SSSS', 'AgungSalim@gmail.com', 'AgungSalim44', 'aaa144', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(44, 'YTGJB356GBH45', 'Agung Tobing', '123', '122', '555', 'SSSS', 'AgungTobing@gmail.com', 'AgungTobing45', 'aaa145', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(45, 'YTGJB356GBH46', 'Agus Djohari', '123', '122', '555', 'SSSS', 'AgusDjohari@gmail.com', 'AgusDjohari46', 'aaa145', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(46, 'YTGJB356GBH47', 'AGUS HARTONO LIE', '123', '122', '555', 'SSSS', 'AGUSHARTONOLIE@gmail.com', 'AGUSHARTONOLIE47', 'aaa146', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(47, 'YTGJB356GBH48', 'Agus Lasmono Sudwikatmono', '123', '122', '555', 'SSSS', 'AgusLasmonoSudwikatmono@gmail.com', 'AgusLasmonoSudwikatmono48', 'aaa146', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(48, 'YTGJB356GBH49', 'Agus Leman Gunawan', '123', '122', '555', 'SSSS', 'AgusLemanGunawan@gmail.com', 'AgusLemanGunawan49', 'aaa147', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(49, 'YTGJB356GBH50', 'Agus Makmur', '123', '122', '555', 'SSSS', 'AgusMakmur@gmail.com', 'AgusMakmur50', 'aaa147', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(50, 'YTGJB356GBH51', 'Agus Nursalim', '123', '122', '555', 'SSSS', 'AgusNursalim@gmail.com', 'AgusNursalim51', 'aaa148', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(51, 'YTGJB356GBH52', 'Agus Pranoto Setiadi', '123', '122', '555', 'SSSS', 'AgusPranotoSetiadi@gmail.com', 'AgusPranotoSetiadi52', 'aaa148', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(52, 'YTGJB356GBH53', 'Agus Purnomo Edhi', '123', '122', '555', 'SSSS', 'AgusPurnomoEdhi@gmail.com', 'AgusPurnomoEdhi53', 'aaa149', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(53, 'YTGJB356GBH54', 'Agus Soenong / Intina Wirawan The', '123', '122', '555', 'SSSS', 'AgusSoenong/IntinaWirawanThe@gmail.com', 'AgusSoenong/IntinaWirawanThe54', 'aaa149', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(54, 'YTGJB356GBH55', 'Agus Suherman Wirjan', '123', '122', '555', 'SSSS', 'AgusSuhermanWirjan@gmail.com', 'AgusSuhermanWirjan55', 'aaa150', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(55, 'YTGJB356GBH56', 'Agus Susanto', '123', '122', '555', 'SSSS', 'AgusSusanto@gmail.com', 'AgusSusanto56', 'aaa150', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(56, 'YTGJB356GBH57', 'Agus Tjandra', '123', '122', '555', 'SSSS', 'AgusTjandra@gmail.com', 'AgusTjandra57', 'aaa151', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(57, 'YTGJB356GBH58', 'Agus Widagdo', '123', '122', '555', 'SSSS', 'AgusWidagdo@gmail.com', 'AgusWidagdo58', 'aaa151', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(58, 'YTGJB356GBH59', 'Agustinus Prasetio', '123', '122', '555', 'SSSS', 'AgustinusPrasetio@gmail.com', 'AgustinusPrasetio59', 'aaa152', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(59, 'YTGJB356GBH60', 'Agustinus Wishnu Handoyono', '123', '122', '555', 'SSSS', 'AgustinusWishnuHandoyono@gmail.com', 'AgustinusWishnuHandoyono60', 'aaa152', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(60, 'YTGJB356GBH61', 'Aguston Makmur', '123', '122', '555', 'SSSS', 'AgustonMakmur@gmail.com', 'AgustonMakmur61', 'aaa153', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(61, 'YTGJB356GBH62', 'Ahadiat Wargana', '123', '122', '555', 'SSSS', 'AhadiatWargana@gmail.com', 'AhadiatWargana62', 'aaa153', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(62, 'YTGJB356GBH63', 'Ahmad Dipoditiro', '123', '122', '555', 'SSSS', 'AhmadDipoditiro@gmail.com', 'AhmadDipoditiro63', 'aaa154', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(63, 'YTGJB356GBH64', 'Ahmad Marda', '123', '122', '555', 'SSSS', 'AhmadMarda@gmail.com', 'AhmadMarda64', 'aaa154', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(64, 'YTGJB356GBH65', 'Ahmad Rahman Pasaman', '123', '122', '555', 'SSSS', 'AhmadRahmanPasaman@gmail.com', 'AhmadRahmanPasaman65', 'aaa155', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(65, 'YTGJB356GBH66', 'Ahmaddin Ahmad', '123', '122', '555', 'SSSS', 'AhmaddinAhmad@gmail.com', 'AhmaddinAhmad66', 'aaa155', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(66, 'YTGJB356GBH67', 'Ahmades Miqailla', '123', '122', '555', 'SSSS', 'AhmadesMiqailla@gmail.com', 'AhmadesMiqailla67', 'aaa156', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(67, 'YTGJB356GBH68', 'Ahsanil Gusnawati', '123', '122', '555', 'SSSS', 'AhsanilGusnawati@gmail.com', 'AhsanilGusnawati68', 'aaa156', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(68, 'YTGJB356GBH69', 'Aida Ishak', '123', '122', '555', 'SSSS', 'AidaIshak@gmail.com', 'AidaIshak69', 'aaa157', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(69, 'YTGJB356GBH70', 'AIRIN OKTAVIANY GUNAWAN', '123', '122', '555', 'SSSS', 'AIRINOKTAVIANYGUNAWAN@gmail.com', 'AIRINOKTAVIANYGUNAWAN70', 'aaa157', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(70, 'YTGJB356GBH71', 'Aiwy', '123', '122', '555', 'SSSS', 'Aiwy@gmail.com', 'Aiwy71', 'aaa158', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(71, 'YTGJB356GBH72', 'Aizid Syafriel Adjam', '123', '122', '555', 'SSSS', 'AizidSyafrielAdjam@gmail.com', 'AizidSyafrielAdjam72', 'aaa158', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(72, 'YTGJB356GBH73', 'Aji Bayu Wirrotama', '123', '122', '555', 'SSSS', 'AjiBayuWirrotama@gmail.com', 'AjiBayuWirrotama73', 'aaa159', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(73, 'YTGJB356GBH74', 'AJI WIJAYA, SUNARTO YUDO ', '123', '122', '555', 'SSSS', 'AJIWIJAYA,SUNARTOYUDO@gmail.com', 'AJIWIJAYA,SUNARTOYUDO74', 'aaa159', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(74, 'YTGJB356GBH75', 'Akbar Yoso Trisedia', '123', '122', '555', 'SSSS', 'AkbarYosoTrisedia@gmail.com', 'AkbarYosoTrisedia75', 'aaa160', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(75, 'YTGJB356GBH76', 'Alan Clark', '123', '122', '555', 'SSSS', 'AlanClark@gmail.com', 'AlanClark76', 'aaa160', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(76, 'YTGJB356GBH77', 'Alan Robertson Clark', '123', '122', '555', 'SSSS', 'AlanRobertsonClark@gmail.com', 'AlanRobertsonClark77', 'aaa161', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(77, 'YTGJB356GBH78', 'Alanberg Pte. Ltd.', '123', '122', '555', 'SSSS', 'AlanbergPte.Ltd.@gmail.com', 'AlanbergPte.Ltd.78', 'aaa161', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(78, 'YTGJB356GBH79', 'ALBERT CAHYADI ', '123', '122', '555', 'SSSS', 'ALBERTCAHYADI@gmail.com', 'ALBERTCAHYADI79', 'aaa162', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(79, 'YTGJB356GBH80', 'Albert Kongoasa', '123', '122', '555', 'SSSS', 'AlbertKongoasa@gmail.com', 'AlbertKongoasa80', 'aaa162', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(80, 'YTGJB356GBH81', 'Albert Sugianto', '123', '122', '555', 'SSSS', 'AlbertSugianto@gmail.com', 'AlbertSugianto81', 'aaa163', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(81, 'YTGJB356GBH82', 'Albert Suherman', '123', '122', '555', 'SSSS', 'AlbertSuherman@gmail.com', 'AlbertSuherman82', 'aaa163', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(82, 'YTGJB356GBH83', 'Aldo Putra Brasali', '123', '122', '555', 'SSSS', 'AldoPutraBrasali@gmail.com', 'AldoPutraBrasali83', 'aaa164', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(83, 'YTGJB356GBH84', 'Alex Ivan Tanoyo', '123', '122', '555', 'SSSS', 'AlexIvanTanoyo@gmail.com', 'AlexIvanTanoyo84', 'aaa164', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(84, 'YTGJB356GBH85', 'Alexander Hermas Wolfe', '123', '122', '555', 'SSSS', 'AlexanderHermasWolfe@gmail.com', 'AlexanderHermasWolfe85', 'aaa165', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(85, 'YTGJB356GBH86', 'Alexander Johan Widjaja', '123', '122', '555', 'SSSS', 'AlexanderJohanWidjaja@gmail.com', 'AlexanderJohanWidjaja86', 'aaa165', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(86, 'YTGJB356GBH87', 'Alexander Thaslim', '123', '122', '555', 'SSSS', 'AlexanderThaslim@gmail.com', 'AlexanderThaslim87', 'aaa166', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(87, 'YTGJB356GBH88', 'Alexandra Miksar', '123', '122', '555', 'SSSS', 'AlexandraMiksar@gmail.com', 'AlexandraMiksar88', 'aaa166', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(88, 'YTGJB356GBH91', 'Alfari Narindra', '123', '122', '555', 'SSSS', 'AlfariNarindra@gmail.com', 'AlfariNarindra91', 'aaa168', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(89, 'YTGJB356GBH92', 'Ali Alimsyah', '123', '122', '555', 'SSSS', 'AliAlimsyah@gmail.com', 'AliAlimsyah92', 'aaa168', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(90, 'YTGJB356GBH93', 'Ali Chendra', '123', '122', '555', 'SSSS', 'AliChendra@gmail.com', 'AliChendra93', 'aaa169', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(91, 'YTGJB356GBH94', 'Alice Haryono', '123', '122', '555', 'SSSS', 'AliceHaryono@gmail.com', 'AliceHaryono94', 'aaa169', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(92, 'YTGJB356GBH95', 'Alien Wibowo', '123', '122', '555', 'SSSS', 'AlienWibowo@gmail.com', 'AlienWibowo95', 'aaa170', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(93, 'YTGJB356GBH96', 'Aling Hermawan Oey', '123', '122', '555', 'SSSS', 'AlingHermawanOey@gmail.com', 'AlingHermawanOey96', 'aaa170', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(94, 'YTGJB356GBH97', 'Alisyahrazad Hanafiah', '123', '122', '555', 'SSSS', 'AlisyahrazadHanafiah@gmail.com', 'AlisyahrazadHanafiah97', 'aaa171', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(95, 'YTGJB356GBH98', 'Allan Dijaya Keller', '123', '122', '555', 'SSSS', 'AllanDijayaKeller@gmail.com', 'AllanDijayaKeller98', 'aaa171', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(96, 'YTGJB356GBH99', 'Allan Tjahja Tjao', '123', '122', '555', 'SSSS', 'AllanTjahjaTjao@gmail.com', 'AllanTjahjaTjao99', 'aaa172', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(97, 'YTGJB356GBH100', 'Aluinanto Sandjojo', '123', '122', '555', 'SSSS', 'AluinantoSandjojo@gmail.com', 'AluinantoSandjojo100', 'aaa172', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(98, 'YTGJB356GBH101', 'Alvin Gozali', '123', '122', '555', 'SSSS', 'AlvinGozali@gmail.com', 'AlvinGozali101', 'aaa173', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(99, 'YTGJB356GBH102', 'Alwi Alatas', '123', '122', '555', 'SSSS', 'AlwiAlatas@gmail.com', 'AlwiAlatas102', 'aaa173', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(100, 'YTGJB356GBH103', 'Alwijaya Aw', '123', '122', '555', 'SSSS', 'AlwijayaAw@gmail.com', 'AlwijayaAw103', 'aaa174', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(101, 'YTGJB356GBH104', 'Amalia', '123', '122', '555', 'SSSS', 'Amalia@gmail.com', 'Amalia104', 'aaa174', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(102, 'YTGJB356GBH105', 'Amalia Aristiningsih', '123', '122', '555', 'SSSS', 'AmaliaAristiningsih@gmail.com', 'AmaliaAristiningsih105', 'aaa175', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(103, 'YTGJB356GBH106', 'Amaluddin Djambak', '123', '122', '555', 'SSSS', 'AmaluddinDjambak@gmail.com', 'AmaluddinDjambak106', 'aaa175', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(104, 'YTGJB356GBH107', 'Aman', '123', '122', '555', 'SSSS', 'Aman@gmail.com', 'Aman107', 'aaa176', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(105, 'YTGJB356GBH108', 'Ameesh Anand', '123', '122', '555', 'SSSS', 'AmeeshAnand@gmail.com', 'AmeeshAnand108', 'aaa176', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(106, 'YTGJB356GBH109', 'Amelia Kurniawan', '123', '122', '555', 'SSSS', 'AmeliaKurniawan@gmail.com', 'AmeliaKurniawan109', 'aaa177', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(107, 'YTGJB356GBH110', 'Amelia Mulyono', '123', '122', '555', 'SSSS', 'AmeliaMulyono@gmail.com', 'AmeliaMulyono110', 'aaa177', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(108, 'YTGJB356GBH111', 'Amin Halim K', '123', '122', '555', 'SSSS', 'AminHalimK@gmail.com', 'AminHalimK111', 'aaa178', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(109, 'YTGJB356GBH112', 'Amin Halim', '123', '122', '555', 'SSSS', 'AminHalim@gmail.com', 'AminHalim112', 'aaa178', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(110, 'YTGJB356GBH113', 'Amin Supriyadi Liu', '123', '122', '555', 'SSSS', 'AminSupriyadiLiu@gmail.com', 'AminSupriyadiLiu113', 'aaa179', '2', 0, 'umi.jpg', '2023-02-21 02:08:08'),
(125, 'NOREGIUXNGK6362', 'wafi', 'asdas', '1', '1', 'awd', 'admins@admin.com', 'maswafi', '1234', '2', 0, NULL, '2023-02-21 13:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `code` varchar(12) NOT NULL,
  `jdl_buku` varchar(80) NOT NULL,
  `status` varchar(4) NOT NULL,
  `img_bk` varchar(40) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `code`, `jdl_buku`, `status`, `img_bk`, `created`) VALUES
(12, '1', 'dada', '1', 'umi.jpg', '2023-02-26 15:18:08'),
(15, '232', '232323', '1', 'umi.jpg', '2023-02-27 12:26:43'),
(17, '123', '1345', '1', 'umi.jpg', '2023-02-27 12:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `id` int(11) NOT NULL,
  `jdl_buku` varchar(80) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `denda` varchar(40) NOT NULL,
  `status` varchar(5) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`id`, `jdl_buku`, `nama`, `denda`, `status`, `created`) VALUES
(1, 'asd', 'KWxWPleDs5yRXIm', '100000', '1', '2023-04-02 08:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama`) VALUES
(6, 'asdss'),
(5, 'sad');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `fklts` varchar(40) NOT NULL,
  `jrsn` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `fklts`, `jrsn`) VALUES
(6, 'asddf', 'asd'),
(7, 'asdss', '44444');

-- --------------------------------------------------------

--
-- Table structure for table `p_buku`
--

CREATE TABLE `p_buku` (
  `id` int(11) NOT NULL,
  `code` varchar(12) NOT NULL,
  `jdl_buku` varchar(80) NOT NULL,
  `tgl_pnjm` timestamp NOT NULL DEFAULT current_timestamp(),
  `tgl_kmbl` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(5) NOT NULL,
  `stts_buku` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_buku`
--

INSERT INTO `p_buku` (`id`, `code`, `jdl_buku`, `tgl_pnjm`, `tgl_kmbl`, `status`, `stts_buku`, `nama`, `created`) VALUES
(1, '4', '3333', '2023-02-28 16:38:10', '2023-03-09 00:00:00', '0', '1', 'nama', '2023-03-02 05:30:05'),
(2, '4', '3333', '2023-02-28 16:38:58', '2023-03-09 00:00:00', '0', '1', 'nama', '2023-03-02 05:30:11'),
(3, '1', '3333', '2023-03-02 05:15:00', '2023-03-16 00:00:00', '0', '1', 'nama', '2023-03-02 05:30:14'),
(4, '2', '3333', '2023-03-02 05:15:00', '2023-02-16 00:00:00', '0', '1', 'nama', '2023-03-02 12:06:27'),
(5, '4', '3333', '2023-03-02 05:15:00', '2023-02-16 00:00:00', '0', '1', 'nama', '2023-03-02 12:06:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `req_perpus` (`req_perpus`),
  ADD UNIQUE KEY `username` (`username`(12));

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jrsn` (`jrsn`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `denda`
--
ALTER TABLE `denda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `p_buku`
--
ALTER TABLE `p_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;