-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 08:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyakit_kambing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id_admin` int(10) NOT NULL,
  `admin_nama` varchar(45) NOT NULL,
  `admin_username` varchar(45) NOT NULL,
  `admin_password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id_admin`, `admin_nama`, `admin_username`, `admin_password`) VALUES
(1, 'Admin', 'admin', 'admin'),
(2, 'Sulthan', 'sonik', 'repscordio'),
(3, 'Labay', 'lealsf', 'kokoro');

-- --------------------------------------------------------

--
-- Table structure for table `aturan_tbl`
--

CREATE TABLE `aturan_tbl` (
  `id_aturan` varchar(10) NOT NULL,
  `id_penyakit` varchar(10) NOT NULL,
  `id_gejala` varchar(10) NOT NULL,
  `mb_aturan` float NOT NULL,
  `md_aturan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aturan_tbl`
--

INSERT INTO `aturan_tbl` (`id_aturan`, `id_penyakit`, `id_gejala`, `mb_aturan`, `md_aturan`) VALUES
('A001', 'P001', 'G001', 0.9, 0.1),
('A002', 'P001', 'G002', 0.9, 0.1),
('A003', 'P001', 'G003', 1, 0),
('A004', 'P002', 'G001', 0.8, 0.2),
('A005', 'P002', 'G004', 1, 0),
('A006', 'P003', 'G005', 0.9, 0.1),
('A007', 'P003', 'G006', 0.8, 0.2),
('A008', 'P003', 'G007', 0.9, 0.1),
('A009', 'P004', 'G008', 0.8, 0.2),
('A010', 'P004', 'G009', 0.9, 0.1),
('A011', 'P004', 'G010', 0.8, 0.2),
('A012', 'P004', 'G011', 0.8, 0.2),
('A013', 'P005', 'G012', 0.9, 0.1),
('A014', 'P005', 'G013', 0.8, 0.2),
('A015', 'P005', 'G014', 0.8, 0.2),
('A016', 'P006', 'G015', 0.8, 0.2),
('A017', 'P006', 'G016', 1, 0),
('A018', 'P006', 'G017', 0.9, 0.1),
('A019', 'P007', 'G015', 0.8, 0.2),
('A020', 'P007', 'G018', 1, 0),
('A021', 'P008', 'G019', 0.8, 0.2),
('A022', 'P008', 'G020', 0.9, 0.1),
('A023', 'P008', 'G021', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gejala_tbl`
--

CREATE TABLE `gejala_tbl` (
  `id_gejala` varchar(10) NOT NULL,
  `gejala_nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala_tbl`
--

INSERT INTO `gejala_tbl` (`id_gejala`, `gejala_nama`) VALUES
('G001', 'Kambing terlihat lesu, lemah, pucat'),
('G002', 'Nafsu makan berkurang'),
('G003', 'Diare kambing, perut membesar dan rambut berdiri dan kusam'),
('G004', 'Kotoran kambing berwarna hijau muda, mengkilat, atau berwarna kemerahan, atau kehitaman'),
('G005', 'Kulit muncul bintik-bintik merah yang terbentuk bisul sehingga mengalami kekakuan, penebalan, dan penskalaan'),
('G006', 'Kambing Kurus'),
('G007', 'Ternak menggosok kulit mereka ke lumbung karena gatal dan tampak seperti mereka kehilangan rambut mereka'),
('G008', 'Ternak mengalami kesulitan bernafas'),
('G009', 'Sisi kiri perut terlihat besar, jika diketuk akan terdengar seperti drum'),
('G010', 'Ternak tampak gelisah'),
('G011', 'Ternak jatuh dan susah bangun lagi'),
('G012', 'Mata berair dan berkedip'),
('G013', 'Mata merah dan bengkak'),
('G014', 'Ulkus muncul di selaput bening sampai  mengalami kebutaan'),
('G015', 'Ternak kejang – kejang '),
('G016', 'Mulutnya berbusa, lendir selaput mata berwarna kebiruan'),
('G017', 'Kotoran bercampur darah'),
('G018', 'Sebagian tubuhnya menjadi kaku'),
('G019', 'Kelenjar limpa bengkak'),
('G020', 'Keluar darah dari dubur saat mati'),
('G021', 'Mati mendadak');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit_tbl`
--

CREATE TABLE `penyakit_tbl` (
  `id_penyakit` varchar(10) NOT NULL,
  `penyakit_nama` varchar(100) NOT NULL,
  `penyakit_penjelasan` text NOT NULL,
  `penaykit_penanganan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyakit_tbl`
--

INSERT INTO `penyakit_tbl` (`id_penyakit`, `penyakit_nama`, `penyakit_penjelasan`, `penaykit_penanganan`) VALUES
('P001', 'Cacingan', '<p><img alt=\"\" src=\"http://localhost/webPenyakit/asset/ckfinder/userfiles/files/cacingna.jpg\" style=\"height:181px; width:279px\" /></p>\r\n\r\n<p>Penyakit cacingan bisa disebakan oleh cacing pita, cacing pipih, cacing bulat, cacing giling lambung dan usus dan masih banyak lagi jenis - jenis cacing parasit. Kambing yang terinfeksi cacing parasit akan menjadi kurus, produksi menurun, perut membesar, anemia, dan bisa jadi kematian.</p>\r\n', '<p>Pengobatan yang diberikan apabila terkena cacingan&nbsp;</p>\r\n\r\n<ol>\r\n	<li>memberikan obat cacing secara teratur, terutama kambing gembala.</li>\r\n	<li>Jenis oabat yang tersedia dipasaran antara lain albendazole, valbanzen atau ivermectin.&nbsp;</li>\r\n	<li>Pengobatan tradisional yaitu dengan buah pinang dan juga :\r\n	<ul>\r\n		<li>Daun nanas yang dikeringkan dan dihaluskan, kemudian ditimbang 300 mg untuk 1 kg berat badan kambing, dicampur air, selanjutnya diminumkan dan diulang 10 hari sekali (jangan diberikan pada ternak bunting).</li>\r\n		<li>Daun nanas segar dihilangkan durinya, ditimbang 600 mg untuk 1 kg berat badan kambing, kemudian diberikan pada kambing dan diulang 10 hari sekali (jangan diberikan pada ternak bunting).</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n\r\n<p>Pencegahan&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Jagalah kandang kambing tetap bersih dan kering</li>\r\n	<li>Buang kotoran, sampah, dan sisa makanan dilokasi kandang, atau dijadikan menjadi kompos</li>\r\n	<li>Jangan berikan rumput yang masih berembun</li>\r\n	<li>Sabitlah rumput 2 - 3 cm diatas tanah</li>\r\n</ol>\r\n'),
('P002', 'Diare', '<p><img alt=\"\" src=\"http://localhost/webPenyakit/asset/ckfinder/userfiles/files/diare.jpg\" style=\"height:181px; width:279px\" /></p>\r\n\r\n<p>Pakan berjamur atau terlalu muda, bakteri, virus dan protozoa.&nbsp;Kotoran encer dan warnanya hijau terang/hijau gelap sampai hijau kekuningan.&nbsp;Kambing lemas, bila dibiarkan dapat menyebabkan kematian.&nbsp;Bulu-bulu sekitar dubur kotor akibat kotoran.</p>\r\n', '<p>Pengobatan yang diberikan ialah&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Pisahkan kambing sakit dari kambing sehat.&nbsp;</li>\r\n	<li>Berikan larutan oralit, larutkan 2 sendok makan garam + 2 sendok makan gula dalam 2,5 liter air dingin yang sudah dimasak.&nbsp;</li>\r\n	<li>Bila keadaannya tidak membaik segera hubungi petugas kesehatan hewan (dokter hewan).</li>\r\n</ol>\r\n\r\n<p>Penanganan</p>\r\n\r\n<ol>\r\n	<li>Hindari pemberian pakan yang menyebabkan diare.</li>\r\n	<li>Jagalah kandang tetap bersih.</li>\r\n</ol>\r\n'),
('P003', 'Scabies', '<p><img alt=\"\" src=\"http://localhost/webPenyakit/asset/ckfinder/userfiles/files/scabies.jpg\" style=\"height:195px; width:259px\" /></p>\r\n\r\n<p>Scabies atau kudis adalah penyakit kulit menular yang disebabkan oleh infrestasi tungau&nbsp;<em>Sarcoptes scabiei&nbsp;</em>dan bersifat zoonosis (Penyakit yang dapat ditularkan dari hewan ke manusia atau sebaliknya). Tungau menyerang dengan cara menginfeksi kulit inang dan bergerak membuat terowongan dibawah lapisan kulit. Penularan terjadi secara kontak hewan yang menderita scabies.&nbsp;</p>\r\n', '<p>Penderita scabies dapat diberikan obat secara langsung dikulit, oral (diminum secara langsung), dan parenteral (suntikan). pengobatan bisa diulang secara 2 - 3 kali dengan jangka waktu 1 - 2 minggu. Supaya dapat di memutus raintai scabies. obat yang bersifat sistemik(Obat yang memengaruhi sebagian tertentu dibadan) yang cukup ampuh&nbsp;ivermectin, secara subkutan ( suntikan dengan sudut 45 derajat) dengan dosis 200mg/kg bb. Secara oral ivermectin tablet diberikan dengan dosis 100-200 mg/kg bb setiap hari selama 7 hari.</p>\r\n\r\n<p><br />\r\nPencegahan :<br />\r\nPerhatikan kebersihan kandang dan lingkungannya. Juga perhatikan populasi dikadang, sesuaikan dengan ukuran kandang agar tidak terlalu padat.</p>\r\n'),
('P004', 'Typani', '<p><img alt=\"\" src=\"http://localhost/webPenyakit/asset/ckfinder/userfiles/files/typani.jpg\" style=\"height:168px; width:300px\" />te</p>\r\n\r\n<p>Typani atau Perut Kembug akibat pembentukan gas didalam lambung yang berlebihan dalam waktu cepat. Kadang - kadang penyakit ini trejadi secara mendadak. penyebabnya adalah gas yang ditimbulkan oleh makanan (rumput muda)</p>\r\n', '<p>Penangannya adalah&nbsp;Berikan larutan gula merah dan asam jawa, keluarkan gas dengan cara mengurut-urut perut kambing.</p>\r\n\r\n<p>Pencegahannya</p>\r\n\r\n<p>Jangan memberikan satu jenis hijauan, terutama hijauan leguminosa (daun tanaman tersebut kaya akan nitrogen). Berikan rumput kering sebelum memberikan legum (bahan makanan dari jenis kacang-kacangan)</p>\r\n'),
('P005', 'Pink Eye', '<p><img alt=\"\" src=\"http://localhost/webPenyakit/asset/ckfinder/userfiles/files/pink_eye(1).JPG\" style=\"height:480px; width:640px\" /></p>\r\n\r\n<p>Pink eye adalah penyakit mata menular pada ternak, terutama sapi, kerbau, domba, dan kambing. Gejala yang dapat dikenali berupa kemerahan dan peradangan pada konjungtiva(selaput bening yang menutupi bagian putih mata) serta kekeruhan pada kornea.&nbsp;Penyebab pink eye dapat berupa bakteri, virus, rickettsia maupun chlamydia, tetapi yang paling sering ditemukan adalah bakteri Moraxella bovis (M. bovis) yang bersifat hemolitik.</p>\r\n', '<p>Preparat topikal (Obat yang diterapkan didaerah tertentu, seperti salep, gell, dll) seperti furazolidone spray dapat mengurangi jumlah bakteri yang tinggal di daerah mata serta memperkecil ukuran ulcer. Pengobatan topikal yang lebih efektif yaitu pemberian Benzathine cloxacillin.</p>\r\n\r\n<p>Pencegahan :</p>\r\n\r\n<p>Dengan cara menjaga kebersihan lingkungan, menjaga kualitas pakan, serta menjaga populasi kepadatan kandang ternak.&nbsp;Untuk menghindari meluasnya penyakit, hewan yang terinfeksi segera diisolasi dan diobati. Pada kasus parah, hewan harus dihindarkan dari sinar matahari secara langsung. Sebagian besar vaksin yang ada saat ini belum menunjukkan hasil yang memuaskan.</p>\r\n'),
('P006', 'Keracunan', '<p><img alt=\"\" src=\"http://localhost/webPenyakit/asset/ckfinder/userfiles/files/keracunan.jpg\" style=\"height:284px; width:448px\" /></p>\r\n\r\n<p>berbagai jenis keracunan ada beberapa contohnya :</p>\r\n\r\n<p><strong>Keracunan Pb (Keracunan Timbal)</strong></p>\r\n\r\n<p>Keracunan ini disebabkan oleh ternak mengkonsumsi rumput yang tercemar minyak motor di tepi jalan raya. Kercunna ini ditandai dengna jalan sempoyongan, menjadi buta, convulsi (Kejang - kejang), urat daging bergetar, tidak nafsu makan, terjadi kolik (Sering menangis), kadang - kadang diare. Tetapi untuk mengetaui ternak mengalami keracunan Pb, perlu ada dilakukan uji kandungan Pb di dalam hati, ginjal dan fases.</p>\r\n\r\n<p><strong>Keracunan Pestisida</strong></p>\r\n\r\n<p>Keracunan ini terjadi apabila mengkonsumsi rumput yang tercemar pastisida yang cukup untuk menyebabkan keracunan. Bisa jadi pad awaktu melakukan permberantasan ektoparasit (Pemberatasan parasit) pada ternak dengan cara dipping (proses pencelupan puting ambing&nbsp;<strong>ternak</strong>&nbsp;perah yang termasuk ke&nbsp;<strong>dalam</strong>&nbsp;tahapan proses pemerahan susu dan berfungsi untuk mencegah berkembangnya bakteri paska pemerahan). atau bisa juga terminum larutan pastisida yang tercampur diminuman.</p>\r\n\r\n<ol>\r\n	<li><strong>Pestisida Golongan Dipiridil.</strong>&nbsp;Gejala yang ditimbulkan antara lain&nbsp;Rusaknya jaringan epitel kulit(salah satu 4 jaringan dasar kulit), kulit, kuku, saluran pernapasan, dan terjadi peradangan.</li>\r\n	<li><strong>Pestisida Golongan Arsen.&nbsp;</strong>Gejala yang ditimbulkan antara lain nyeri pada perut, Muntah, dan diare, serta banyak mengeluarkan air liur.&nbsp;</li>\r\n	<li><strong>Pestisida Golongan Anticoagulan.&nbsp;</strong>Gejala yang ditimbulkan antara lain nyeri lambung, usus, muntah, peradangan hidung dan gusi, timbul bintik merah pada kulit, terdapat darah dalam urin dan fases dan kerusakan ginjal</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>Pengoabatan yang dilakukan :</p>\r\n\r\n<p><strong>Keracunan Pb</strong></p>\r\n\r\n<p>dilakukan penyuntikan kalsium disodium edentate dengan cara intra vena (metode pemberian obat melalui injeksi atau infus melalui vena). Obat lain yang dapat digunakan adalah Dicalcium phospoglukonate.</p>\r\n\r\n<p><strong>Keracunan Pestisida</strong></p>\r\n\r\n<p>Penggunaan zat anti racun sesuai dengan jenis pestisida</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Golongan Pestisida</td>\r\n			<td>Senyawa Anti Racun</td>\r\n		</tr>\r\n		<tr>\r\n			<td>khlorhidrokarbon</td>\r\n			<td>Natrium bicarbonat 5%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Organofosfat</td>\r\n			<td>Antidota Atropin sulfat</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Karbamat</td>\r\n			<td>Antidota Atropin sulfat</td>\r\n		</tr>\r\n		<tr>\r\n			<td>senyawa dipiridil</td>\r\n			<td>Adsorben Fuller Earth 30%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Arsen</td>\r\n			<td>Antidota dimerkaprol</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6Antikoagulan</td>\r\n			<td>Antidota fitonadion</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n'),
('P007', 'Tetanus', '<p><img alt=\"\" src=\"http://localhost/webPenyakit/asset/ckfinder/userfiles/files/tetanus.jpg\" style=\"height:155px; width:210px\" /></p>\r\n\r\n<p>Tetanus adalah keracunan akibat&nbsp;neurotoksin (sebuah toksin yang bereaksi di sel saraf-neuron yang biasanya dengan berinteraksi pada protein membran)&nbsp;yang disebabkan oleh <em>Clostridium tetani</em> dengan gejala klinis spasmus otot dan mengakibatkan kematian pada hewan mamalia serta manusia. Pada peternakan yang memungkinankan terjadinya tetanus perlukaan yang terkontaminasi oleh bakteri&nbsp;<em>Clostridium tetani&nbsp;</em>kastrasi, pencukuran bulu pada ternak domba, pemasangan nomor telinga, pemasangan ladam pada kuda, proses kelahiran, atau luka lainnya.</p>\r\n', '<p>Pengobatan yang diberikan adalah :</p>\r\n\r\n<ol>\r\n	<li>Buang luka dibagian jaringan yang rusak, supaya bersih lukanya, setela itu cuci luka dengan&nbsp;KMnO4 (Kalium permanganat) atau H2O2 (Hidrogen peroksida) dan diberikan antibiotik</li>\r\n	<li>Diberikan antitoksin (anti racun) tetanus dosis kuratif (penyembuha)</li>\r\n	<li>Perlakuakuan pada hewan yang sakit :\r\n	<ul>\r\n		<li>Kadang bersih, kering, gelap</li>\r\n		<li>Diberikan kain penyangga perut</li>\r\n		<li>Makanan yang diberikan setinggi hidung</li>\r\n		<li>Luka yang ada diobatin</li>\r\n	</ul>\r\n	</li>\r\n	<li>Obat yang disediakan apabila terjadi gejala - gejalanya :\r\n	<ul>\r\n		<li>Obat penenang</li>\r\n		<li><em>muscle relaxan</em></li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n\r\n<p>Pencahan supaya mengurangi terjadinya tetanus&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Menyikirkan benda - benda tajam disekitar kandang</li>\r\n	<li>Apabila ada luka langsung diberiskan dan diobatin</li>\r\n	<li>Lakukan vaksinasi aktif dengan formol vaksin</li>\r\n	<li>Lakukan vaksinasi pasif dengan antitoksin</li>\r\n	<li>Gunakan peralatan steril dan simpan peralatan ditempat bersih</li>\r\n</ol>\r\n'),
('P008', 'Anthrax', '<p><img alt=\"\" src=\"http://localhost/webPenyakit/asset/ckfinder/userfiles/files/anthrax.jpg\" style=\"height:143px; width:440px\" /></p>\r\n\r\n<p>Anthraks adalah penyakit menular yang disebabkan oleh Bacillus anthracis, biasanya bersifat akut atau perakut pada berbagai jenis ternak (pemamah biak, kuda, babi dan sebagainya). Ditandai dengan demam tinggi yang disertai dengan perubahan jaringan bersifat septisemia, infi ltrasi serohemoragi pada jaringan subkutan dan subserosa, serta pembengkakan akut limpa.</p>\r\n', '<p>Pengobatan yang diberikan untuk penderita anthrax :</p>\r\n\r\n<p>Pengobatan pada hewan sakit diberikan suntikan antiserum dengan dosis kuratif 100-150 ml untuk hewan besar dan 50-100 ml untuk hewan kecil. Penyuntikan antiserum homolog adalah IV atau SC, sedang yang heterolog SC. Jika perlu penyuntikan pengobatan dapat diulangi secukupnya. Antiserum yang diberikan lebih dini sesudah timbul gejala sakit, kemungkinan untuk diperoleh hasil yang baik akan lebih besar.</p>\r\n\r\n<p>Hewan tersangka sakit atau yang sekandang dengan hewan sakit, diberi suntikan pencegahan dengan antiserum. Kekebalan pasif timbul seketika, akan tetapi berlangsung tidak lebih lama dari 2 minggu.</p>\r\n\r\n<p>Pencegahan :</p>\r\n\r\n<ul>\r\n	<li>Hewan yang penderita anthrax dilarang untuk dipotong</li>\r\n	<li>Bagi daerah bebas anthraks, tindakan pencegahan didasarkan pada pengaturan yang ketat terhadap pemasukan hewan kedaerah tersebut.</li>\r\n	<li>Anthraks pada hewan ternak dapat dicegah dengan vaksinasi. Vaksinasi dilakukan pada semua hewan ternak di daerah enzootik anthraks setiap tahun sekali, disertai cara-cara pengawasan dan pengendalian yang ketat.</li>\r\n</ul>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `aturan_tbl`
--
ALTER TABLE `aturan_tbl`
  ADD PRIMARY KEY (`id_aturan`),
  ADD UNIQUE KEY `id_penyakit` (`id_penyakit`,`id_gejala`);

--
-- Indexes for table `gejala_tbl`
--
ALTER TABLE `gejala_tbl`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `penyakit_tbl`
--
ALTER TABLE `penyakit_tbl`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
