-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2010 at 02:07 
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `victoria`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `NewsId` char(13) NOT NULL,
  `Type` varchar(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Content` text NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`NewsId`),
  FULLTEXT KEY `NewsId` (`NewsId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`NewsId`, `Type`, `Title`, `Content`, `Date`) VALUES
('N01', 'News', 'Argentina Diuntungkan Gol Bunuh Diri', '<p>Pelatih Korea Selatan Huh Jung-moo mengatakan bahwa gol bunuh diri yang dilakukan anak buahnya memberikan keuntungan bagi Argentina, dan mengawali keruntuhan Korsel.</p>\n<p>Tim Negeri Ginseng dibekap Argentina 1-4<a href="http://pialadunia.detiksport.com/read/2010/06/17/184919/1380736/439/higuain-hat-trick-argentina-hajar-korsel-4-1"></a> dalam laga yang berlangsung Kamis (17/6/2010) malam WIB.</p>\n<p>Tampil menekan, tim Tango harus menunggu hingga seperempat jam guna memetik gol pertama. Gol tersebut juga tidak disunting oleh pemain Argentina, melainkan bunuh diri Park Chu-young.</p>\n<p>"Argentina sangat beruntung dengan gol pertama mereka. Kami selanjutnya juga gagal memanfaatkan sejumlah kesempatan emas," ujar Jung-moo seperti dilansir dari <em>Reuters. </em></p>\n<p>Meski kalah, pelatih yang yakin bahwa timnya masih berpeluang lolos ke-16 besar itu mengatakan bahwa ada hal positif yang bisa diambil dari pertandingan tersebut.</p>\n<p>"Kami berjuang keras menghadapi tim yang dipenuhi pemain kelas dunia. Laga hari ini memberikan kami pelajaran berharga untuk ke depannya," tuntas dia.</p>', '2010-06-18'),
('N02', 'News', 'Yunani Akhirnya Bikin Gol & Menang', '<p>Yunani akhirnya mencetak gol di Piala Dunia. Keberhasilan itu kian manis karena dibarengi dengan kemenangan perdana di ajang yang sama.</p>\n<p>Sebelum gelaran Piala Dunia 2010, Yunani sudah pernah satu kali tampil di gelaran Piala Dunia yaitu pada tahun 1994 di Amerika Serikat. Saat itu si juara Eropa 2004 cuma jadi tim hiburan.</p>\n<p>Dari tiga laga fase grup, Yunani kalah di seluruh pertandingan. Pada laga pembuka, The Pirate Ship digasak Argentina 0-4. Yunani kembali kalah dengan skor sama di laga kedua lawan Bulgaria. Yunani kemudian kalah 0-2 dari Nigeria di laga terakhir.<br /><br />Dengan catatan tersebut, pengalaman pertama Yunani di Piala Dunia berjalan bak sebuah mimpi buruk. Mereka pulang tanpa kemenangan, tanpa sebiji gol pun sementara gawang mereka sendiri dibobol sepuluh kali.<br /><br />Pada tahun 2010, Yunani kembali lolos ke putaran final Piala Dunia 2010. Di laga pertama fase grup menghadapi Korea Selatan, Sabtu (12/6/2010), Yunani kalah 0-2 dan belum bisa mengakhiri catatan buruk mereka.<br /><br />Pasukan Otto Rehhagel tersebut akhirnya baru bisa membuat sejarah di Stadion Free State, Kamis (17/6/2010). Ketinggalan lebih dulu, Yunani sukses membuat gol balasan beberapa saat sebelum turun minum.<br /><br />Gol yang membuat skor jadi 1-1 tersebut membuat nama Dimitrios Salpingidis akan masuk buku sejarah Yunani karena dialah orang yang mencetak gol perdana Yunani di Piala Dunia.<br /><br />Tidak berhenti sampai situ, Vassillis Torosidis lantas menambah gol untuk Yunani. Skor 2-1 bertahan untuk kemenangan Yunani. Maka laga lawan Nigeria itu pun akan dikenang dengan manis oleh Yunani karena inilah kemenangan pertama mereka di ajang Piala Dunia.</p>', '2010-06-17'),
('N03', 'News', ' Ayo Ramai-ramai ''Tiup'' Vuvuzela!', '<p>Ingin merasakan meniup terompet vuvuzela tapi tidak bisa ke Afrika Selatan?</p>\n<p>Mudah, ada vuvuzela virtual yang bisa dibunyikan cukup dengan satu tekanan pada tetikus Anda.</p>', '2010-06-16'),
('N04', 'News', 'Swiss Kehilangan Senderos', '<p>Kemenangan Swiss atas Spanyol kemarin harus dibayar mahal dengan cederanya Philippe Senderos. Alhasil Otmar Hitzfeld pun tak bisa memakai jasa bek Fulham itu untuk dua pertandingan sisa di Grup H.</p>\n<p>Senderos dipasang sebagai starter dalam laga perdana Swiss di Piala Dunia. Namun bek berusia 25 tahun itu hanya mampu bermain selama 36 menit dan ditarik keluar akibat cedera pada engkel kanannya akibat salah menekel rekannya sendiri.<br /><br />Usai pertandingan pun Swiss langsung melakukan pemindaian kepada bek andalannya tersebut dan divonis Senderos harus menepi di dua laga tersisa grup karena mengalami pembengkakan pada engkelnya.<br /><br />"Senderos tidak mengalami retak namun engkelnya mengalami pembengkakan dan sakit luar biasa. Jadi dia akan absen di dua pertandingan selanjutnya," ungkap dokter tim Cuno Wetzel seperti dilansir <em>Yahoosports.</em><br /><br />Kehilangan Senderos tentunya kerugian bagi Swiss karena mereka kini berada di urutan teratas grup berkat kemenangan 1-0 atas Spanyol serta akan menghadapi dua laga krusial kontra Chile dan Honduras.</p>', '2010-06-17'),
('N05', 'News', 'Capello dan Maurinho tentang Manchaster United', '<p>Manchester - Fabio Capello dan Jose Mourinho memprediksi Manchester United bakal mengalami kesulitan untuk mempertahankan gelar juara. Tak perlu waktu lama, Sir Alex Ferguson langsung membantah prediksi itu.  Capello menilai "mesin perang" MU tengah mengalami penurunan. Bisa jadi pelatih tim nasional Inggris itu berkaca pada penampilan Wayne Rooney dkk. di sepanjang Desember ini yang kurang mantap. Hal ini kemungkinan bisa membuat upaya MU mempertahankan gelar Liga Primer kandas.</p>\n<p>Apa jawaban Ferguson untuk Capello? "Dengan segala masalah yang menerpa kami, baik itu masalah cedera pemain bertahan, saya bisa menerima kondisi bila kami tertinggal dua poin dari pemuncak klasemen sementara di akhir tahun ini," ujar manajer asal Skotlandia itu dilansir dari The Sun.  "Kami sudah melalui periode-periode penting. Bila kami bisa mengalahkan Wigan maka kami bisa melaju tanpa banyak mengalami kerugian," lanjut Sir Alex.  Saat ini MU tertinggal lima poin dari Chelsea. Kemenangan atas Wigan Kamis (31/12/2009) dinihari WIB akan membuat pasukan Old Trafford memangkas ketinggalan menjadi dua angka saja.</p>\n<p>Sedangkan Mourinho menilai kepergian Cristiano Ronaldo akan membuat MU limbung. Pasalnya, selain nyawa permainan Ronaldo juga menjadi mesin gol Setan Merah.  "Saat ini saya punya 14 pencetak gol yang berebeda. Mereka semua berada di posisi yang berbeda. Jadi mengapa harus khawatir? Yang penting kami menang dan kami bisa mencetak gol lebih banyak dibandingkan periode yang sama musim lalu," tegas Fergie.  Manajer kelahiran 31 Desember 1941 itu merujuk pada kondisi anak asuhnya yang saat ini telah mencetak delapan gol lebih banyak dibanding di pekan ke-19 musim lalu.  Ferguson pun optimistis bahwa gelar juara Liga Primer musim ini bakal tetap ada di Old Trafford. "Kami sudah berpengalaman untuk menjadi juara. Begitu pula dengan pemain-pemain kami," tuntasnya.  Manchester - Fabio Capello dan Jose Mourinho memprediksi Manchester United bakal mengalami kesulitan untuk mempertahankan gelar juara.</p>\n<p>Tak perlu waktu lama, Sir Alex Ferguson langsung membantah prediksi itu.  Capello menilai "mesin perang" MU tengah mengalami penurunan. Bisa jadi pelatih tim nasional Inggris itu berkaca pada penampilan Wayne Rooney dkk. di sepanjang Desember ini yang kurang mantap. Hal ini kemungkinan bisa membuat upaya MU mempertahankan gelar Liga Primer kandas.  Apa jawaban Ferguson untuk Capello? "Dengan segala masalah yang menerpa kami, baik itu masalah cedera pemain bertahan, saya bisa menerima kondisi bila kami tertinggal dua poin dari pemuncak klasemen sementara di akhir tahun ini," ujar manajer asal Skotlandia itu dilansir dari The Sun.  "Kami sudah melalui periode-periode penting. Bila kami bisa mengalahkan Wigan maka kami bisa melaju tanpa banyak mengalami kerugian," lanjut Sir Alex.</p>\n<p>Saat ini MU tertinggal lima poin dari Chelsea. Kemenangan atas Wigan Kamis (31/12/2009) dinihari WIB akan membuat pasukan Old Trafford memangkas ketinggalan menjadi dua angka saja.  Sedangkan Mourinho menilai kepergian Cristiano Ronaldo akan membuat MU limbung. Pasalnya, selain nyawa permainan Ronaldo juga menjadi mesin gol Setan Merah.  "Saat ini saya punya 14 pencetak gol yang berebeda. Mereka semua berada di posisi yang berbeda. Jadi mengapa harus khawatir? Yang penting kami menang dan kami bisa mencetak gol lebih banyak dibandingkan periode yang sama musim lalu," tegas Fergie.  Manajer kelahiran 31 Desember 1941 itu merujuk pada kondisi anak asuhnya yang saat ini telah mencetak delapan gol lebih banyak dibanding di pekan ke-19 musim lalu.  Ferguson pun optimistis bahwa gelar juara Liga Primer musim ini bakal tetap ada di Old Trafford. "Kami sudah berpengalaman untuk menjadi juara. Begitu pula dengan pemain-pemain kami," tuntasnya.</p>', '2009-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `IdUser` varchar(15) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `JenisKelamin` varchar(15) DEFAULT NULL,
  `Alamat` text,
  `Telepon` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Username` varchar(10) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL,
  `Level` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`IdUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IdUser`, `Nama`, `JenisKelamin`, `Alamat`, `Telepon`, `Email`, `Username`, `Password`, `Level`) VALUES
('IA160610150854', 'Kamal', 'Male', 'Jl. Yusuf No. 8 Kebon Jeruk Jakarta Barat 11540', '021-9292 5356', 'am4nks@gmail.com', 'am4nks', 'admin', ''),
('IA221209014204', 'Administrator', 'Male', 'Victoria Suites, Senayan City, Panin Tower 8th Floor', '021-7278 2310', 'admin@victoriasekuritas.co.id', 'admin', 'admin', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
