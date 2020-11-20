-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Nov 2020 pada 06.52
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blitz_baru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `access_menu`
--

CREATE TABLE `access_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `access_menu`
--

INSERT INTO `access_menu` (`id`, `menu`) VALUES
(1, 'Home'),
(2, 'Data_Pt'),
(3, 'Data_Tka'),
(4, 'Data_Voucher'),
(5, 'Data_Rptka'),
(6, 'Data_Visa'),
(7, 'Profile'),
(8, 'User_List'),
(9, 'Jenis_Proses'),
(10, 'jenis_visa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan_rptka`
--

CREATE TABLE `jabatan_rptka` (
  `id` int(255) NOT NULL,
  `rptka_id` int(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `terpakai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_proses`
--

CREATE TABLE `jenis_proses` (
  `id` int(11) NOT NULL,
  `nama_proses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_visa`
--

CREATE TABLE `jenis_visa` (
  `id` int(11) NOT NULL,
  `visa` varchar(255) NOT NULL,
  `kode_voucher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pt`
--

CREATE TABLE `pt` (
  `id` int(11) NOT NULL,
  `nama_pt` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `nama_client` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `input_by_id` varchar(255) NOT NULL,
  `tgl_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pt`
--

INSERT INTO `pt` (`id`, `nama_pt`, `pic`, `nama_client`, `alamat`, `keterangan`, `input_by_id`, `tgl_input`) VALUES
(1, 'HUBEI INDUSTRIAL CONSTRUCTION GROUP CO.,LTD', 'Dewi', 'CAO LI', 'PODOMORO CITY RUKO GARDEN SHOPPING ARCADE BLOK B/8', 'APARTEMEN TAMAN ANGGREK TOWER 6 LANTAI 36 H', 'input_by_id', 0),
(2, 'SHANGHAI ELECTRIC POWER CONSTRUCTION CO.,LTD', 'Dewi', 'YANG LI', 'THE EAST LANTAI 36 UNIT 06', 'GORONTALO,JAKARTA,BENGKULU,BELAWAN,PANGKALAN SUSU', '', 0),
(3, 'PT GUOHUA TAIDIAN PEMBANGKITAN JAWABALI', 'Dewi', 'SIANI', 'APL TOWER LANTAI 39 UNIT D', 'PROYEK JAWA 7 ,SERANG', '', 0),
(4, 'CEEC GANSU CO., LTD', 'Vella', '??  FAN BIN', 'TERNATE', 'TERNATE', '', 0),
(5, 'PT SHENHUA GUOHUA PEMBANGKITAN JAWABALI', 'Dewi', 'SIANI', 'APL TOWER LANTAI 39 UNIT D', 'PROYEK JAWA 7 ,SERANG', '', 0),
(6, 'PT SHANGHAI ELECTRIC POWER CONSTRUCTION', 'Dewi', 'YANG LI', 'THE EAST LANTAI 36 UNIT 06', 'GORONTALO,JAKARTA,BENGKULU,BELAWAN,PANGKALAN SUSU', '', 0),
(7, 'PT GHEMM INDONESIA', 'Dewi', 'FANNY', 'APL TOWER LANTAI 39 UNIT D', 'JAKARTA,MUARA ENIM', '', 0),
(8, 'PT SHENHUA GUOHUA LION POWER INDONESIA', 'Dewi', 'FANNY', 'APL TOWER LANTAI 39 UNIT D', 'JAKARTA,MUARA ENIM', '', 0),
(9, 'PT EVERGREEN SEAFER FEED', 'Dewi', 'PAK SURMAN', 'JALAN SOEKARNO KM 33,KALIANDA LAMPUNG', 'KALIANDA,LAMPUNG', '', 0),
(10, 'PT SUMBER MEGA KARYA KONSTRUKSI', 'Vella', 'LIU DONGPENG', 'RUKAN BUKIT GOLF MEDITERANIA EKSKLUSIVE BLOK D15 PIK', '', '', 0),
(11, 'PT WANATIARA PERSADA', 'Vella', 'FENNY', 'GEDUNG GRAHAM INDOCHEM LT 3 , PIK', '', '', 0),
(12, 'JINCHUAN GROUP ENGINEERING AND CONSTRUCTION CO.,LTD', 'Vella', 'JULIANA ??', 'Ruko Exclusive Blok G no 51, pik', '', '', 0),
(13, 'PT SINOTEK NANO INDONESIA', 'Vella', 'LI XIAOBEI / ??? ', 'APARTEMEN PESONA BAHARI TOWER JADE T07 , MANGGA DUA', '', '', 0),
(14, 'METALLURGICAL CORPORATION OF CHINA LTD', 'Vella', 'ELSA ', 'PERWATA TOWER LANTAI 7', '', '', 0),
(15, 'AN JIANPING (PRIVATE)', 'Vella', 'AN JIANPING (???)', 'PIK', 'PRIVATE', '', 0),
(16, 'PT CHINESE NORTHWEST RESTAURANT', 'Vella', 'ZHOU YING / ??', 'JL PANTAI INDAH KAPUK RUKO CROWN BLOK A NO 7', '', '', 0),
(17, 'HUANG WEI PRIVATE', 'Vella', '??/ HUANG WEI', 'APARTEMEN BEVERLY TOWER TWO ', '', '', 0),
(18, 'PT MULTISARANA ADITRANSJAYA', 'Vella', 'SCIENTIA / ZHANG YUZE ??? ', 'KOMPLEK CEMPAKA INDAH BLOK A 6-7 JAKARTA PUSAT', '', '', 0),
(19, 'CHINA ALUMINUM INTERNATIONAL ENGINEERING CORPORATION', 'Vella', '??? WANG WEIJI', 'PERWATA TOWER LT 9, SUITE F', '', '', 0),
(20, 'PT SHANDONG ZHONGCHENG INTERNATIONAL INDONESIA', 'Vella', '??? / ZHANG DAPENG', 'THE MANSION KEMAYORAN', '', '', 0),
(21, 'PT SHANDONG ZHENGTAI CONSTRUCTION INDONESIA', 'Dewi', 'LU BINHUA/QU WEI', 'PLUIT KARANG SARI VI R7 S NO 12', 'JAKARTA, KETAPANG,TANJUNG PINANG', '', 0),
(22, 'PT INDONESIA EVERGREEN FEED', 'Dewi', 'PAK SATRIA', 'MENARA CITICON LANTAI 8', 'JAKARTA', '', 0),
(23, 'PT WYSER CONSTRUCTION INDONESIA', 'Dewi', 'NING DA/JENY', 'APARTEMEN WEST COURT MANGGA DUA', 'JAKARTA,GORONTALO,BELAWAN,BITUNG', '', 0),
(24, 'PT HYPEC INTERNATIONAL', 'Dewi', 'GUO JIANGLI', 'PROYEK BENGKULU', 'BENGKULU', '', 0),
(25, 'LINGHU LAO BAN NIANG', 'Dewi', 'ANNE/JIANG LI', 'PROYEK JAWA 7 SERANG', 'PROYEK JAWA 7 SERANG', '', 0),
(26, 'NANTONG KETAPANG', 'Dewi', 'MAO MIN', '', 'BENGKULU,JAKARTA,MUARA ENIM,KETAPANG', '', 0),
(27, 'PT DRAZ ENGINEERING INDONESIA', 'Dewi', 'ZHAI DONGFU', 'JAKARTA.KENDARI', 'JAKARTA ,KENDARI', '', 0),
(28, 'PT MEULABOH POWER GENERATION', 'Dewi', 'RYAN', 'MEULABOH', '', '', 0),
(29, 'PT ZHONGAN CONSTRUCTION INDONESIA ', 'Dewi', 'Xu Weijie ???', 'Ruko Mangga Dua Square Blok D-11', '', '', 0),
(30, 'PT CENTRAL SOUTHERN ELECTRIC POWER PROJECT MANAGEMENT INDONESIA', 'Dewi', 'Hawke Chen', 'The Mansion at Dukuh Golf Kemayoran Fontana Office Tower Bougenville Unit BF/27/M2, Jl. Trembesi Blok D, Pademangan Timur, Pademangan, Jakarta Utara', '', '', 0),
(31, 'PT LEMATANG COAL LESTARI', 'Dewi', 'Ye Hongxiang ???', 'Jl. Sako Baru No. 7 Kel. Sako baru Kec. Sako, Palembang, Sumatera Selatan', '', '', 0),
(32, 'PT YAOHUA TECHNOLOGY INDONESIA', 'Dewi', 'Song Taotao ???', 'Komplek Rukan Toho L No. 22, Jl. Pantai Indah Barat, Kamal Muara, Penjaringan, Jakarta Utara', '', '', 0),
(33, 'PT MUSI PRIMA COAL', 'Dewi', 'Tarmizi', 'Komplek DMiro Residence Blok A No. 9 Rt. 003 Rw. 001, Sukamaju Sako, Palembang, Sumatera Selatan, 30164', '', '', 0),
(34, 'PT MUTIARA INDAH CONSTRUCTION', 'Vella', 'DUAN MENGKE', 'THE MANSION AT DUKUH GOLF KEMAYORAN TOWER FONTANA LT 29 NO. G1', '', '', 0),
(35, 'CHINA HUADIAN HONGKONG COMPANY LIMITED', 'Vella', 'LIU YINAN/SUSANTI', 'THE EAST BUILDING LT 11 UNIT 05', 'JAKARTA', '', 0),
(36, 'PT KARYATAMA KONAWE UTARA', 'Vella', 'LIMNA', 'DESA SARIMUKTI, KONAWE UTARA, KEC. LANGGIKIMA', 'KONAWE', '', 0),
(37, 'PT KONUTARA SEJATI', 'Vella', 'LIMNA', 'DESA SARIMUKTI, KONAWE UTARA, KEC. LANGGIKIMA', 'KONAWE', '', 0),
(38, 'PT ALAM RAYA ABADI', 'Vella', 'LIMNA', 'GD. MENARA BATAVIA LT 15, JL KH MAS AMBSYUR KAV 126', 'JAKARTA', '', 0),
(39, 'PT PUSAKA JAYA INTI SERVIS', 'Vella', 'RIA / ADI', 'GD. THE EAST LT. 20 UNIT 03, JL. DR. IDE ANAK AGUNG GDE KAV E 3.2 NO 1', 'JAKARTA', '', 0),
(40, 'PT SUMBER MATERIAL INDONESIA', 'Vella', 'ZHANG DAPENG', 'THE MANSION BOUGENVILLE TOWER FONTANA LT. 29 UNIT 29GI', 'JAKARTA', '', 0),
(41, 'PT KARYATAMA MAKMUR PERKASA', 'Vella', 'ANDY', 'KOMPLEK RUKAN PURI MUTIARA BLOK BD NO 25 ', '', '', 0),
(42, 'PT  XIN DIAN INDONESIA', 'Vella', 'MIKEY ', 'PERWATA TOWER LT.1 SUITE A1 RT.21 RW.8 PENJARINGAN JAKARTA UTARA', '', '', 0),
(43, 'PT RISLAND SUTERA PROPERTY', 'Dewi', 'PAK YUSRAN', 'BSD TANGERANG', '', '', 0),
(44, 'PT SUNNY GARDEN PROPERTY', 'Dewi', 'PAK YUSRAN', 'BSD TANGERANG', '', '', 0),
(45, 'PT MINISO LIFESTYLE TRADING', 'Dewi', 'LISA KANG', 'UOB PLAZA LANTAI 33 JAKARTA PUSAT', '', '', 0),
(46, 'PT MUTIARA INDAH ANUGERAH', 'Vella', 'EDY', 'KOMPLEK MEGA GLODOK KEMAYORAN BLOK C6 JL.ANGKASA KAV B.6 KEMAYORAN JAKARTA PUSAT 10616', '-', '', 0),
(47, 'PT DIYONG TEKNIK INDONESIA', 'Vella', 'ZHANG HONGTAO', 'RUKAN SEDAYU SQUARE BLOK L NO. 55 RT006/RW012 KEL. CENGKARENG BARAT KEC. CENGKARENG JAKARTA BARAT', '', '', 0),
(48, 'CHINA CONSTRUCTION YANGTZE RIVER INDONESIA PT', 'Vella', 'Jarvis Liu Jun', 'Menara Prima Unit A-B Lantai 21 Jl. Dr. Ide Anak Agung Gde Agung Kawasan Mega Kuningan RT. 004/RW. 005 Kuningan Timur, Setia Budi, Jakarta Selatan', '', '', 0),
(49, 'PT BLITZINDO UTAMA', 'Dewi', '', 'MEGA GLODOK KEMAYORAN  BLOK E NO 18', '', '', 0),
(50, 'PT KARKA NUTRI INDUSTRI', 'Vella', 'NITA', 'JL RAYA PEMBANGUNAN KM 31 RT 02 RW 01 DESA KETAPANG KEC TANGGULANGIN - KAB SIDOARJO', '', '', 0),
(51, 'BUT CHINA RAILWAY 11 BUREAU GROUP CO. LTD', 'Vella', 'ZHANG CUNHE', 'GREEN LAKE CITY, BLOK B NO 76, RUKAN GREAT WALL KEC. CIPONDOH KELURAHAN PASIR', '-', '', 0),
(52, 'ENTERTAIN', 'Dewi', '-', '-', '-', '', 0),
(53, 'PT KIDSPLACE TECHNOLOGY DEVELOPMENT', 'Vella', 'YANNI', 'MENARA MATAHARI LT 15 JL BOULEVARD PALEM RAYA NO 7 LIPPO KARAWACI KEL KELAPA DUA KEC KELAPA DUA KAB TANGERANG', '', '', 0),
(54, 'PT ANTAM NITERRA HALTIM', 'Vella', 'CAROLINE', 'DBS BANK TOWER 21 FLOOR, CIPUTRA WORLD 1. JL PROF DR SATRIO KAV 3-5, JAKARTA SELATAN 12940', '-', '', 0),
(55, 'PT GEO CENTRAL MINING', 'Vella', 'GUO LINZHONG', 'RUKO BGM BLOK 1 N 19 PIK KAMAL MUARA PENJARINGAN JAKARTA UTARA', '-', '', 0),
(56, 'PT FALKON REKSA JAYA', 'Dewi', 'ZHANG XIN', 'PLUIT MUARA KARANG', 'SINGKAWANG, TANJUNG PINANG', '', 0),
(57, 'PT GREEN ASIA FOOD INDONESIA', 'Vella', 'MARISSA HSIEH', 'PERWATA TOWER LANTA 6 SUITE A JL PLUIT SELATAN RAYA KAV 1, JAKRTA UTARA', '-', '', 0),
(58, 'PT. KOKA INDONESIA', 'Vella', 'Mr. Pei Yaxing', 'Thamrin Residence Office Park No.C17 Jl. Kebon Kacang Raya', '', '', 0),
(59, 'PT NANFANG ', 'Vella', 'ZHOU ZHEN', '', '', '', 0),
(60, 'HANDAL ENERGI INDONESIA PT', 'Dewi', 'Ma Pan ??', 'AXA Tower Lantai 45, Jl. Prof Dr. Satrio Kav. 18 Rt. 011 Rw. 007 Kel. Karet Kuningan, Kec. Setiabudi, Jakarta Selatan, 12940', '-', '', 0),
(61, 'PT AFFIRMATE BISNIS NUSANTARA', 'Dewi', 'HUSEN', 'GEDUNG CENTENNIAL TOWER LT. 29 UNIT D-E', '', '', 0),
(62, 'ARUNA MARTHA INDOJAYA PT', 'Fanny', 'Ibu Diana', 'Ruko Ruko Mega Kemayoran C No. 6', '- ', '', 0),
(63, 'PT NUSARAYA/DEWI MILKBEAR', 'Pilih', '', '', '', '', 0),
(64, 'PT HUNAN MUARA ENIM', 'Vella', 'ZHAO ZHEN', '', '', '', 0),
(65, 'PT NEW POWER BUSINESS INDONESIA', 'Vella', 'MR LI. KAIDI ????', 'JALAN PLUIT INDAH RAYA BLOK 0 NO 168 B-G', '', '', 0),
(66, 'PT. THE SIXTH CHEMICAL ENGINEERING CONSTRUCTION', 'Vella', 'PEI YAXING', 'GD BAKRIE TOWER LT. 5B-2 RASUNA EPICENTRUM, JL. HR RASUNA SAID KARET KUNINGAN, SETIABUDI JAKARTA SELATAN', '', '', 0),
(67, 'CHINA CIVIL ENGINEERING CORPORATION', 'Vella', 'LIU BO', 'The Bellagio Residence Tower A lt.23 no.02 Kawasan Mega Kuningan Barat Kav E4-3  Kuningan Timur, Setia budi ', '-', '', 0),
(68, 'PT SEMUTMAS MAKMUR PERKASA', 'Vella', 'ANDY', 'KOMPLEK RUKAN PURI MUTIARA BLOK BD NO 25. JL GRIYA UTAMA KEL SUNTER AGUNG KEC TANJUNG PRIOK, JAKRTA UTARA', '-', '', 0),
(69, 'PT TRIMEGA KONSTRUKSI', 'Vella', 'LINA', 'Gold Coast Office Tower Lantai 1 Unit OTA01M, Pantai Indah Kapuk, Jakarta Utara', '-', '', 0),
(70, 'PT BIGO INFORMATION INDONESIA', 'VELLA', 'COCO', 'Menara Sun Life Flr. 19 Unit E-F, Jl. Dr. Ide Anak Agung Gde Agung, Blok 6.3 Kawasan Mega Kuningan Timur Setiabudi, Jakarta Selatan 12950', '-', '', 0),
(71, 'PT ZHEJIANG TENAGA PEMBANGKITAN INDONESIA', 'DEWI', 'CHEN LONG', 'SUMSEL 8 MUARA ENIM', '', '', 0),
(72, 'PT MEGA KONSTRUKSI PERKASA INDONESIA	', 'VELLA', '', '', '', '', 0),
(73, 'CHINA NATIONAL MACHINERY', 'VELLA', 'ZHANG YUZE', '-', '-', '', 0),
(74, 'INDUSTRI PERIKANAN NAMATOTA PT', 'VELLA', 'Garry', 'Jl. Mangga Dua Raya No. 63 A Kel. Pinangsia, Kec. Taman Sari, Kota Jakarta Barat', '-', '', 0),
(75, 'YAOHUA TEKNIK INDONESIA PT', 'VELLA', 'SONG TAOTAO', 'KAWASAN INDUSTRI & PERGUDANGAN MARUNDA CENTER BLOK H 1-25 JL. MARUNDA MAKMUR, SEGARAMAKMUR', '-', '', 0),
(76, 'NANTONG MEIQI', 'DEWI', 'Mei Qi ', '', '', '', 0),
(77, 'PT YILI INDONESIA DAIRY', 'VELLA', 'MARISSA HSIEH', 'GedungPerwata Tower Lantai VI Suite B Jl. Pluit Raya Selatan Kav. I Kawasan CBD Pluit Jakarta Utara 14440', '-', '', 0),
(78, 'PT YOSEPHINE GLOBAL INDONESIA', 'VELLA', 'VINCENT', 'THE MANSION BOUGENVILLE TOWER FONTANA BF 21J1 PADEMANGAN, JAKARTA UTARA', '-', '', 0),
(79, 'CHINA ELECTRIC POWER EQUIPMENT AND TECHNOLOGY CO.,LTD', 'DEWI', 'KIMBERLY', 'MENARA PRIMA LANTAI 24', '', '', 0),
(80, 'PT BAUING CONSTRUCTION INDONESIA', 'VELLA', 'ZHONG SHIZHEN', 'PIk golf island concerto beach boulevard No.10', '-', '', 0),
(81, 'PT HONOR INDONESIA METAL', 'VELLA', 'YENNY', 'DE PLOEIT CENTRALE LT.7 SUITE 701. JL. PLUIT SELATAN  RAYA BLOK K', '-', '', 0),
(82, 'KOORDINASI', '', '', '', '', '', 0),
(83, 'PT NUSANTARA PERDAGANGAN INDONESIA', 'VELLA', 'ANDY', 'KOMPLEK RUKAN PURI MUTIARA BLOK BD NO 25. JL GRIYA UTAMA KEL SUNTER AGUNG KEC TANJUNG PRIOK, JAKRTA UTARA', '-', '', 0),
(84, 'ENERGY CHINA TIANJIN INDONESIA PT', 'Selvi', 'Fu Lian', 'Soho Capital #25-6A Jl. Letjend S. parman Kav 28, Jakarta Barat', '', '', 0),
(85, 'PT INDONESIA EVERGREEN AGRICULTURE', 'SEVI ', 'MR. CHANDRA ', '-', 'JAKARTA ', '', 0),
(86, 'PT SEMUTMAS MAKMUR INDONESIA', 'VELLA', '-', '-', '-', '', 0),
(87, 'PT FURU SATO INDONESIA', 'VELLA', 'BOB', 'JL JENDRAL SUDIRMAN KAV 36 BENDUNGAN HILIR TANAH ABANG JAKARTA PUSAT', '-', '', 0),
(88, 'SEDAYA TRADING MEKARINDO PT', 'Selvi', 'Lu Tianyun', 'Sunter', '-', '', 0),
(89, 'PT DUO PUTRI ABADI', 'VELLA', 'PUTRI EVITA', 'KOMP. GROGOL PERMAI BLOK A NO 3 RT 01 RW 07', '-', '', 0),
(90, 'CHANGHONG ELECTRIC INDONESIA PT', 'Selvi', 'Adi', 'Bekasi', '-', '', 0),
(91, 'CHINA RAILWAY CONSTRUCTION CORPORATION (INTERNATIONAL) LIMITED', 'SEVI ', 'XU YONGTAO ', '', '', '', 0),
(92, 'PRIVATE BU DIANA ', 'DEWI', 'BU DIANA', '', '', '', 0),
(93, 'PT PUTRA UTAMA SUKSES', 'VELLA', 'SENY ANTAM', 'DBS BANK TOWER 21 FLOOR, CIPUTRA WORLD 1. JL PROF DR SATRIO KAV 3-5, JAKARTA SELATAN 12940', 'ANAK DARI PERUSAHAAN PT ANTAM NITERRA HALTIM', '', 0),
(94, 'PRIVATE CHEN CHAOYING', 'DEWI', 'CHEN CHAOYING', '-', '-', '', 0),
(95, 'PT SUMBER DAYA ENERGI', 'VELLA', '-', '-', '-', '', 0),
(96, 'Private Chen Chaojing', 'VELLA', 'Chen Chaojing', '-', '-', '', 0),
(97, 'PT RUIMIN ', 'VELLA', 'RUIMIN ', '-', '-', '', 0),
(98, 'HUBEI HUANING FANGFUJI SHUGUFEN YOUXIANG GONGSI', 'VELLA', 'LEI TING', 'diNO.9 Xingfa road,XianAn Economic Development Zone,Xianning,Hubei,China', 'UNDER WYSER', '', 0),
(99, 'CHINT ELECTRIC INDONESIA PT', 'SELVI', '', 'JL. PLUIT SELATAN RAYA KAV. I PERMATA TOWER LT. 10 SUITE F RT.021/RW.008', '-', '', 0),
(100, 'PT NEW SILKROAD DEVELOPMENT ', 'VELLA', '-', '-', '-', '', 0),
(101, 'PT GREENWORLD RESOURCES', 'VELLA', 'WU GUILIN', '-', '-', '', 0),
(102, 'NASSIM JASA CUCI PT', 'Selvi', 'Tawfiq', 'Bintaro', '-', '', 0),
(103, 'PT ELEQ CABLE INDONESIA', 'VELLA', 'JENNY (EX FUKUDA)', '', '', '', 0),
(104, 'CHINA SHENHUA ENERGY COMPANY LIMITED GUOHUA ELECTRIC POWER BRANCH', 'Selvi', 'Phanie', 'Taman Anggrek', '-', '', 0),
(105, 'PT HEBEI HANJING INVESTMENT INDONESIA', 'VELLA', 'JIANG BIN', 'JL OSOK RT 1 RW 2 KEL AIMAS DIST. AIMAS KAB SORONG', '-', '', 0),
(106, 'PT JINCHUAN CONSTRUCTION INDONESIA ', 'VELLA', 'JULIANA', 'RUKAN EKSLUSIVE MEDITERANIA BLOK D NO.15 RT.08/05, KEL. KAMAL MUARA, KEC. PENJARINGAN, JAKARTA UTARA', '-', '', 0),
(107, 'PT KINTENG NEW ENERGY RESOURCES', 'VELLA', 'JOHN DAVID', 'APL. TOWER, LT 16, T9, PODOMORO CITY (CENTRAL PARK), JL. LETJEND S. PARMAN, KAV 28, KEL. TANJUNG DUREN SELATAN, KEC. GROGOL PERTAMBURAN, JAKARTA BARAT', '-', '', 0),
(108, 'PT CHINA UNICOM INDONESIA OPERATIONS', 'VELLA', 'SHI WENQING', 'Office 8 Building, Sudirman Central Business District (SCBD) Lot 28, Lantai 23 Unit C2, Jl. Jenderal Sudirman Kav. 52-53', '-', '', 0),
(109, 'LEASEN NEW MATERIAL STEEL PT', 'SEVI', 'YENNY', 'DE PLOEIT CENTRALE SUITE 702 LT 7 JL. PLUIT SELATAN RAYA BLOK Q, KEL. PLUIT KEC. PENJARINGAN, JAKARTA UTARA', '-', '', 0),
(110, 'PT ZHONGYE INDUSTRY CONSTRUCTION INDONESIA', 'VELLA', '-', '-', '-', '', 0),
(111, 'HUNAN ELECTRIC POWER LOGISTIC SERVICE', 'VELLA', 'EDY', '-', '-', '', 0),
(112, 'PT RUIMIN MATERIAL INDONESIA', 'VELLA', 'LENNY', 'MUTIARA TAMAN PALEM BLOK A20 NO.8B KEL.CENGKARENG TIMUR KEC.CENGKARENG KOTA ADMINISTRASI JAKARTA BARAT', '-', '', 0),
(113, 'CV OBI MART', 'VELLA', '-', 'DESA MANDAONG KEC.BACAN SELATAN KAB.HALMAHERA SELATAN', '-', '', 0),
(114, 'HENAN D.R CONSTRUCTION CO., LTD', 'VELLA', 'LI QI', 'GD. TEMPO SCAN TOWER LT. 32, JL. HR RASUNA SAID KAV 3-4, KUNINGAN TIMUR, SETIABUDI, JAKARTA SELATAN', '-', '', 0),
(115, 'PT NUSANTARA PERTANIAN INDONESIA', 'VELLA', 'QIN YUFANG', 'JL. GRIYA UTAMA, KEL. SUNTER AGUNG, KEC. TANJUNG PRIOK, KOTA ADM JAKARTA PUSAT, DKI JAKARTA', 'JAKARTA & KEDIRI', '', 0),
(116, 'PT JIANGXI THERMAL POWER CONSTRUCTION', 'VELLA', 'XIE XIAOPING', 'Soho Capital LT 35, Jalan S. Parman No.08', '-', '', 0),
(117, 'PT TIGA SAWUDARA RESOURCE ', 'VELLA', 'CHEN CHAOJING', 'SOHO CAPITAL Podomoro City, Lantai 16 Suite SC-1606A, Jl. Letjen. S. Parman Kav. 28', '-', '', 0),
(118, 'PT ANUGRAH TAMBANG SMELTER', 'SEVI', 'ULI', 'PONDOK INDAH OFFICE TOWER 2 LANTAI 11 SUITE 1101, JALAN SULTAN ISKANDAR MUDA KAVELING V-TA', '-', '', 0),
(119, 'PT MITRANIAGA ABADI NUSANTARA', 'SELVI', 'WANG MEIQI', 'Jalan Sunter Jaya 1, Ruko Danau Sunter Mas Blok B 43, Kel. Sunter Jaya, Kec. Tanjung Priok, Kota Adm. Jakarta Utara, Prov. DKI Jakarta', '-', '', 0),
(120, 'PT DATANG ELECTRIC POWER OPERATION AND MAINTANANCE INDONEISA', 'VELLA', 'MR GAO XUEFENG', 'JL MEULABOH TAPAKTUAN KEL SUAK PUNTONG KEC KUALA PESISIR', '-', '', 0),
(121, 'PT ARUNA MARTHA NUSAJAYA', 'VELLA', 'EDY', 'Mega Glodok Kemayoran Blok C nomor 6, Jl. Angkasa Kaveling B6, Kel. Gunung Sahari Selatan, Kec. Kemayoran', '-', '', 0),
(123, 'PT KARYA SEJATI READYMIX BORNEO', 'VELLA', 'LENY RUIMIN', 'RUKAN THE BEACH BOULEVARD BLOK B  NOMOR 28', '-', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(2) NOT NULL,
  `role_id` int(2) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role_id`, `role`) VALUES
(1, 1, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rptka`
--

CREATE TABLE `rptka` (
  `id` int(11) NOT NULL,
  `id_pt` int(11) NOT NULL,
  `no_rptka` int(11) NOT NULL,
  `tgl_terbit` int(11) NOT NULL,
  `jumlah_rptka` int(11) NOT NULL,
  `ket` int(11) NOT NULL,
  `input_by_id` int(11) NOT NULL,
  `tgl_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sidebar_access_menu`
--

CREATE TABLE `sidebar_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sidebar_access_menu`
--

INSERT INTO `sidebar_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(3, 1, 1),
(4, 1, 2),
(5, 1, 3),
(6, 1, 4),
(7, 2, 1),
(8, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tka`
--

CREATE TABLE `tka` (
  `id` int(255) NOT NULL,
  `id_pt` int(255) NOT NULL,
  `nama_mandarin` varchar(255) NOT NULL,
  `nama_latin` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `expired_passport` int(11) NOT NULL,
  `tgl_lahir` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `input_by_id` int(255) NOT NULL,
  `tgl_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role_id` int(2) NOT NULL,
  `is_active` int(2) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Andi Rahmadi', 'andimohan2601@gmail.com', '$2y$10$4xj9oF6Q2EG0rrF0CLoj6e8VNdY2kGvnVPNKwaLvMwywh.vlh0BrK', '', 1, 1, 0),
(2, 'Iqbal Adhis', 'iqbaladhis@gmail.com', '$2y$10$4xj9oF6Q2EG0rrF0CLoj6e8VNdY2kGvnVPNKwaLvMwywh.vlh0BrK', '', 1, 1, 0),
(3, 'Mohan', 'andimohan3@gmail.com', '$2y$10$4xj9oF6Q2EG0rrF0CLoj6e8VNdY2kGvnVPNKwaLvMwywh.vlh0BrK', '', 2, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `access_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`, `access_id`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 1, 2, 3),
(4, 1, 2, 4),
(5, 1, 2, 5),
(6, 1, 2, 6),
(7, 1, 1, 7),
(10, 2, 1, 1),
(11, 2, 2, 2),
(12, 2, 2, 3),
(13, 2, 2, 4),
(14, 2, 2, 5),
(15, 2, 2, 6),
(16, 2, 1, 7),
(17, 1, 3, 8),
(18, 1, 4, 9),
(19, 1, 4, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Dashboard'),
(2, 'Manajemen Data'),
(3, 'Manajemen User'),
(4, 'Manajemen Visa & Voucher');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `judul`, `url`, `icon`) VALUES
(1, 1, 'Home', 'Home', 'metismenu-icon pe-7s-home'),
(2, 2, 'Data PT', 'Data_Pt', 'metismenu-icon pe-7s-portfolio'),
(3, 2, 'Data TKA', 'Data_Tka', 'metismenu-icon pe-7s-users'),
(4, 2, 'Data Voucher', 'Data_Voucher', 'metismenu-icon pe-7s-ticket'),
(5, 2, 'Data Visa', 'Data_Visa', 'metismenu-icon pe-7s-photo-gallery'),
(6, 2, 'Data RPTKA', 'Data_Rptka', 'metismenu-icon pe-7s-share'),
(7, 3, 'User List', 'User_list', 'metismenu-icon pe-7s-user'),
(8, 4, 'Visa', 'Jenis_Visa', 'metismenu-icon pe-7s-credit'),
(9, 4, 'Jenis Proses Voucher', 'Jenis_Voucher', 'metismenu-icon pe-7s-cash');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(12, 'andimohan2601@gmail.com', 'tIbewhD8F2XtG27n3ACC7dc/DP/gyMuJ7Pcfnlq9K8g=', 1605080916),
(13, 'andimohan2601@gmail.com', 'TP75epqmGTsnO4dmUIE1zNJPktD1hFLlXdN8DMnygVw=', 1605437547);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `access_menu`
--
ALTER TABLE `access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jabatan_rptka`
--
ALTER TABLE `jabatan_rptka`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_proses`
--
ALTER TABLE `jenis_proses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_proses` (`nama_proses`);

--
-- Indeks untuk tabel `jenis_visa`
--
ALTER TABLE `jenis_visa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `visa` (`visa`);

--
-- Indeks untuk tabel `pt`
--
ALTER TABLE `pt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_pt` (`nama_pt`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rptka`
--
ALTER TABLE `rptka`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_rptka` (`no_rptka`);

--
-- Indeks untuk tabel `sidebar_access_menu`
--
ALTER TABLE `sidebar_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tka`
--
ALTER TABLE `tka`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `passport` (`passport`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `access_menu`
--
ALTER TABLE `access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jabatan_rptka`
--
ALTER TABLE `jabatan_rptka`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_proses`
--
ALTER TABLE `jenis_proses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_visa`
--
ALTER TABLE `jenis_visa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pt`
--
ALTER TABLE `pt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rptka`
--
ALTER TABLE `rptka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sidebar_access_menu`
--
ALTER TABLE `sidebar_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tka`
--
ALTER TABLE `tka`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
