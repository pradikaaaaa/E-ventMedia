-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Okt 2018 pada 10.27
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eventmedia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_event`
--

CREATE TABLE `tbl_event` (
  `idevent` int(11) NOT NULL,
  `kode_kategori` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_event` datetime NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `tiket` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_tampil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_event`
--

INSERT INTO `tbl_event` (`idevent`, `kode_kategori`, `nama_event`, `tanggal_event`, `lokasi`, `kapasitas`, `tiket`, `deskripsi`, `image`, `status_tampil`) VALUES
(8, '1234', 'Brawijaya Movie Day 2018 : Kompetisi Film Fiksi Pendek', '2018-07-04 21:49:45', 'Universitas Brawijaya', 100, 10000, '<p>[OPEN REGISTRATION]Halooo para sineas muda !Oh iyaa ada kabar gembira nih dari BYME DAY buat kalian sineas mudaJadi mulai besok kita OPEN REGISTRATION and SUBMISSION loh!Yuk langsung daftarkan crew kalian di :&nbsp;<a href=\"http://bit.ly/PendaftaranBYME2018\">http://bit.ly/PendaftaranBYME2018</a></p>\r\n\r\n<p>Open Registration dibuka 1 Juni 2018 hingga 23 Juli 2018 dan batas pengumpulan karya hingga 14 Agustus 2018&nbsp;Jadi tunggu apalagi</p>\r\n\r\n<p>Ayo buruan daftar dan kirim karya film kalian untuk menjadi juara di Brawijaya Movie Day 2018 !</p>\r\n\r\n<p>Hadiah jutaan rupiah dan hadiah menarik lainnya menanti kalian loh !&nbsp;Terus pantengin media sosial kita ya karena disana bakal ada informasi menarik lainnya tentang BYME DAY!</p>\r\n\r\n<p><strong>Timeline :</strong></p>\r\n\r\n<ul>\r\n	<li>Pendaftaran : 1 Juni &ndash; 23 Juli 2018</li>\r\n	<li>Submission : 1 Juni &ndash; 14 Agustus 2018</li>\r\n</ul>\r\n\r\n<p><strong>Syarat dan Ketentuan :</strong></p>\r\n\r\n<ul>\r\n	<li>Pesert amerupakan siswa katif SMA / SMK, sederajat dan berasal dari sekolah yang sama</li>\r\n	<li>Peserta terdiri dari maksimal 7 orang</li>\r\n	<li>Cerita berupa fiksi, bukan dokumenter dan non &ndash; animasi</li>\r\n	<li>Setiap tim haya boleh mengumpulkan 1 kayra</li>\r\n	<li>FIlm tidak mengandung unsur SARA (Suku, Agama, Ras, Antargolongan) dan pornografi</li>\r\n	<li>Film berdurasi 7 &ndash; 15 menit</li>\r\n</ul>\r\n\r\n<p><strong>Pendaftaran :</strong></p>\r\n\r\n<ul>\r\n	<li>Tanggal Pendaftaran : 1 Juni &ndash; 23 Juli 2018</li>\r\n	<li>Link Pendaftaran :&nbsp;<a href=\"http://bit.ly/PendaftaranBYME2018\">http://bit.ly/PendaftaranBYME2018</a></li>\r\n</ul>\r\n\r\n<p><strong>More Information :</strong></p>\r\n\r\n<ul>\r\n	<li>Nadia : 0896 0787 3789</li>\r\n	<li>Fikri : 0896 7646 7979</li>\r\n	<li>Instagram :&nbsp;<a href=\"http://instagram.com/brawijayamovieday\">brawijayamovieday</a></li>\r\n	<li>Facebook : brawijayamovieday</li>\r\n	<li>Twitter :&nbsp;<a href=\"http://twitter.com/ub_movieday\">ub_movieday</a></li>\r\n</ul>', 'MP-Kompetisi-Film-Fiksi-Pendek-BRAWIJAYA-MOVIE-DAY-Copy.jpg', 1),
(9, '1234', 'Seminar International “Project Management in the Global World”', '2018-06-02 10:00:50', 'Hotel Sahid Montana 2 Malang', 500, 100000, '<p><strong>Seminar International &ldquo;Project Management in the Global World&rdquo;</strong></p>\r\n\r\n<p><strong>Bersama :</strong></p>\r\n\r\n<ul>\r\n	<li>Majdi Anwar Quittaniah, Ph. D (Kuwait University)\r\n	<ul>\r\n		<li>Topic : Global Business and Opportunities I Gulf Cooperation Council Countries</li>\r\n	</ul>\r\n	</li>\r\n	<li>Kate Hughes (Stamford Unversity)\r\n	<ul>\r\n		<li>Topic : Transformational Supply Chains</li>\r\n	</ul>\r\n	</li>\r\n	<li>Alka Maurya (Amitv University)\r\n	<ul>\r\n		<li>Topic : India Distruption of Globalization</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>More Information :</strong></p>\r\n\r\n<ul>\r\n	<li>Dana Yurida : 0877 3639 1987</li>\r\n	<li>Ira Kristiana : 0895 4132 9737 6</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'MP-Seminar-International-Project-Management-In-The-Global-World-AIBPM-Copy.jpg', 1),
(10, '1234', 'Kelas Public Speaking Juli 2018 Empower Institute Indonesia', '2018-07-01 00:00:32', 'Empower Institute Indonesia, Komplek Ruko, Jl. Bon', 10, 600000, '<p>Banyak yang masih saja mengalami kecemasan saat bicara di depan umum, presentasi, atau bernegosiasi.</p>\r\n\r\n<p>Apakah anda salah satunya?</p>\r\n\r\n<p>@Empower.institute membuka KELAS PUBLIC SPEAKING dengan kurikulum yang tidak hanya melatih anda mahir berbicara tetapi juga melatihkan cara-cara agar bisa percaya diri, menguasai audiens, dan menyesuaikan gaya bicara.</p>\r\n\r\n<p>Kelas intensif dilaksanankan dalam 2 gelombang sesuai dengan kebutuhan Anda. Kelas terbagi menjadi kelas weekday (8x pertemuan) dan weekend (4x pertemuan) dan Anda akan dilatih hingga terbiasa oleh trainer-trainer profesional.</p>\r\n\r\n<p>Daftarkan diri anda segera, karena 1 kelas hanya menerima 10 Peserta saja.</p>\r\n\r\n<p><strong>Kamu akan menguasai :</strong></p>\r\n\r\n<ul>\r\n	<li>Mengatasi hambatan dalam public speaking</li>\r\n	<li>VOICE Rehearsal</li>\r\n	<li>Showmanship</li>\r\n	<li>Public Speaking Vocabulary Enrichment</li>\r\n	<li>Public Speaking Demonstration</li>\r\n</ul>\r\n\r\n<p><strong>Timeline :</strong></p>\r\n\r\n<ul>\r\n	<li>Public Speaking Weekdays : 10, 12, 17, 19, 24, 26, 31 Juli 2018, 2 Agustus 2018\r\n	<ul>\r\n		<li>Waktu : 19.00 &ndash; 21.00</li>\r\n	</ul>\r\n	</li>\r\n	<li>Public Speaking Weekend : 7, 14, 21, 28 Juli 2018\r\n	<ul>\r\n		<li>Waktu : 09.00 &ndash; 13.00</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Pendaftaran :</strong></p>\r\n\r\n<ul>\r\n	<li>Biaya Pendaftaran : Rp 600.000</li>\r\n	<li>Fasilitas :\r\n	<ul>\r\n		<li>Sertifikat</li>\r\n		<li>Course Kit</li>\r\n		<li>Konsultasi</li>\r\n		<li>Experiential Learning</li>\r\n		<li>Eksklusif untuk 10 Orang Saja</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>More Information :</strong></p>\r\n\r\n<ul>\r\n	<li>Hotline : 085222333798 (WA &amp; SMS )</li>\r\n	<li>Instagram :&nbsp;<a href=\"http://instagram.com/empower.institute\">empower.institute</a></li>\r\n</ul>', 'PP-Kelas-Public-Speaking-Juli-2018-Empower-Institute-Indonesia-Copy.jpg', 1),
(11, 'A002', 'Pementasan Tunggal Teater Kutu \"Sang Mandor\"', '2018-09-19 19:00:00', 'Graha Theater Politeknik Negeri Malang', 250, 10000, '<p><img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"height:16px; width:16px\" />✨Theatrisic Proudly Present<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"height:16px; width:16px\" />✨</p>\r\n\r\n<p>Pementasan Tunggal&nbsp;<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fae/1/16/1f3ad.png\" style=\"height:16px; width:16px\" />????&nbsp;Teater Kutu&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fae/1/16/1f3ad.png\" style=\"height:16px; width:16px\" />????</p>\r\n\r\n<p>&quot;SANG MANDOR&quot;</p>\r\n\r\n<p>Adaptasi dari naskah karya Rahman Arge<br />\r\nYang disutradarai oleh Slamet Danang<br />\r\nDan pemutaran dua film!!&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f2d/1/16/1f3ac.png\" style=\"height:16px; width:16px\" />????<br />\r\n&quot;Bangkit&quot;<br />\r\nSutradara: Nada Fairuz&nbsp;<br />\r\n&quot;Lho?!&quot;<br />\r\nSutradara: Megasari Wulan Sakti</p>\r\n\r\n<p><img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fac/1/16/1f3ab.png\" style=\"height:16px; width:16px\" />????&nbsp;Presale. : 10k (8 - 18 September 2017)<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fac/1/16/1f3ab.png\" style=\"height:16px; width:16px\" />????&nbsp;OTS: 13k (19 September 2017)<br />\r\nTiket box bisa didapatkan di<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff8/1/16/1f3e2.png\" style=\"height:16px; width:16px\" />????&nbsp;Sekretariat UKM Seni Theatrisic gedung AS lt. 2.17 Politeknik Negeri Malang Jl. Soekarno Hatta No. 9, Malang</p>\r\n\r\n<p>Tiket terbatas, buruan jangan sampai kehabisan!!!<br />\r\nCome and enjoy our show<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f50/1/16/1f525.png\" style=\"height:16px; width:16px\" />????</p>\r\n\r\n<p>Info lebih lanjut follow :<br />\r\nIg: @seni_theatrisic</p>\r\n\r\n<p>CP:<br />\r\nAnissa 081334143855<br />\r\nPutri 085806544343</p>', 'pt1.jpeg', 1),
(12, 'A001', 'Pesta Dansa 2018', '2018-07-08 09:00:18', 'Tribun DBL Arena Surabaya', 32, 50000, '<p><strong>MC :</strong></p>\r\n\r\n<ul>\r\n	<li>Zin Emy</li>\r\n	<li>Tekno</li>\r\n</ul>\r\n\r\n<p><strong>Pesta Dansa :</strong></p>\r\n\r\n<ul>\r\n	<li>Yoga</li>\r\n	<li>Zumba</li>\r\n	<li>Salsation</li>\r\n	<li>Hip Hop</li>\r\n	<li>Aerobic Marathon</li>\r\n</ul>\r\n\r\n<p><strong>Kategori Penilaian :</strong></p>\r\n\r\n<ul>\r\n	<li>Best Performance</li>\r\n	<li>Best Costume</li>\r\n</ul>\r\n\r\n<p><strong>Menghadirkan 25 Instruktur :</strong></p>\r\n\r\n<ul>\r\n	<li>Yoga : donna Resty, Conny &amp; Endah</li>\r\n	<li>Hip Hop : Adidkillasmood &amp; Glencrazyg</li>\r\n	<li>Aerobic : Zin Ayin, Zin Della, Zin Nanda, Zin Rara, Zin Anny, Zin Jay, Zin Ardi, Zin Gama, Zin Lintang, Zin Ricky, Zin Gunawan</li>\r\n</ul>\r\n\r\n<p><strong>Pendaftaran :</strong></p>\r\n\r\n<ul>\r\n	<li>Harga Tiket Masuk :\r\n	<ul>\r\n		<li>Presale (s/d 30 Juni 2018) : Rp 100.000</li>\r\n		<li>Regular : Rp 125.000</li>\r\n		<li>Aerobic Marathon : Rp 50.000</li>\r\n	</ul>\r\n	</li>\r\n	<li>Dress Code : Millenium</li>\r\n</ul>\r\n\r\n<p><strong>Hadiah Aerobic Marathon :</strong></p>\r\n\r\n<ul>\r\n	<li>Juara 1 ; Rp 1.500.000</li>\r\n	<li>Juara 2 : Rp 1.000.000</li>\r\n	<li>Juara 3 : Rp 750.000</li>\r\n	<li>Juara 4 : Rp 500.000</li>\r\n	<li>Juara 5 : Rp 400.000</li>\r\n	<li>Juara 6 : Rp 350.000</li>\r\n	<li>Juara 7 : Rp 200.000</li>\r\n	<li>Juara 8 : Rp 200.000</li>\r\n	<li>Juara 9 : Rp 200.000</li>\r\n	<li>Juara 10 : Rp 200.000</li>\r\n</ul>\r\n\r\n<p><strong>More Information :</strong></p>\r\n\r\n<ul>\r\n	<li>Hotline : 031 8287 999</li>\r\n</ul>', '1.jpg', 1),
(13, '1234', 'Seminar Nasional & Workshop Ilmu Komunikasi UNTAG', '2018-07-06 07:00:37', 'Gedung Graha Wiyata Lt. 9, UNTAG, Surabaya', 150, 50000, '<p><strong>SEMINAR NASIONAL : Bahasa Daerah Sebagai Identitas Bangsa</strong></p>\r\n\r\n<ul>\r\n	<li>Tanggal : 6 Juli 2018</li>\r\n	<li>Tempat : Gedung Graha Wiyata Lt. 9, UNTAG, Surabaya</li>\r\n	<li>Waktu : 07.00 &ndash; 11.00</li>\r\n	<li>Harga TIket Masuk :\r\n	<ul>\r\n		<li>UNTAG : Rp 55.000</li>\r\n		<li>Umum : Rp 65.000</li>\r\n		<li>On The Spot : Rp 75.000</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>WORKSHOP</strong></p>\r\n\r\n<ul>\r\n	<li>Tema : Create an Inspiring Content in Youtube</li>\r\n	<li>Tanggal : 6 Juli 2018</li>\r\n	<li>Tempat : Gedung Graha Wiyata Lt. 9, UNTAG, Surabaya</li>\r\n	<li>Waktu : 14.00 &ndash; 16.00</li>\r\n	<li>Harga Tiket Masuk :\r\n	<ul>\r\n		<li>Presale : Rp 120.000</li>\r\n		<li>On The Spot : Rp 140.000</li>\r\n	</ul>\r\n	</li>\r\n	<li>Fasilitas ;\r\n	<ul>\r\n		<li>Sertifikat</li>\r\n		<li>Snack</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>More Information :</strong></p>\r\n\r\n<ul>\r\n	<li>Clavira : 0857 3299 7586</li>\r\n	<li>Tyas : 0858 1575 7411</li>\r\n	<li>Instagram :&nbsp;<a href=\"http://instagram.com/Mice2k18\">Mice2k18</a></li>\r\n</ul>', '2.jpg', 1),
(14, 'A002', 'Tong Tong Indonesia Heritage Night Market 2018', '2018-07-07 16:00:19', 'Shalimar Boutique Hotel, Jl. Cerme No. 16, Malang', 200, 35000, '<p>Yuk, dating dan undang teman &ndash; temanmu untuk ikutan &ldquo;Pasar Malam Tong &ndash; Tong&rdquo;</p>\r\n\r\n<p>Rasakan pengalaman budaya &amp; kuliner Indonesia tempo dulu dan nikmati juga jajanan tempo dulu seperti arbanat, es gandul tali merang dan wedang cendana. Gak cuman itu, jumpai juga produk lokal asli Malang yaitu Topeng Malang, Batik Blimbing Malang dan Cenderamata Keramik Dinoyo.</p>\r\n\r\n<p>Tunggu apa lagi, ajak temanmu ke acara special tahunan Tong &ndash; Tong Night Market yang hadir dengan konsep baru dan yang pasti lebih menarik!</p>\r\n\r\n<p><strong>Konten Event :</strong></p>\r\n\r\n<ul>\r\n	<li>Jazz &amp; Acoustic Music</li>\r\n	<li>Art Workshop</li>\r\n	<li>Gamelan Tresno Budoyo</li>\r\n	<li>Demo Masak</li>\r\n	<li>Podjok Dolanan Anak</li>\r\n	<li>Tjemilan Raya</li>\r\n	<li>Layar Tantjep Nostalgia</li>\r\n	<li>Tarot Reading</li>\r\n	<li>Self Make Up 1990&rsquo;s Looks</li>\r\n</ul>\r\n\r\n<p><strong>Daftar Workshop :</strong></p>\r\n\r\n<ul>\r\n	<li>Mewarnai Keramik dengan Mr. HJ Syamsul dari Cenderamata Keramik Dinoyo\r\n	<ul>\r\n		<li>Tanggal : Sabtu, 7 Juli 2018</li>\r\n		<li>Waktu : 16.00 &ndash; 18.30</li>\r\n	</ul>\r\n	</li>\r\n	<li>Beauty Class dari La Tulipe dan Caroline Malang\r\n	<ul>\r\n		<li>Tanggal : Minggu, 8 Juli 2018</li>\r\n		<li>Waktu : 13.15 &ndash; 15.00</li>\r\n	</ul>\r\n	</li>\r\n	<li>Botanical watercolor painting dengan Elisabeth Soetopo @bethstudio\r\n	<ul>\r\n		<li>Tanggal : Minggu, 8 Juli 2018</li>\r\n		<li>Waktu : 16.00 &ndash; 18.30</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Pendaftaran :</strong></p>\r\n\r\n<ul>\r\n	<li>Harga Tiket Masuk : Rp 35.000</li>\r\n	<li>Fasilitas :\r\n	<ul>\r\n		<li>1 print photobooth</li>\r\n		<li>1 porsi Arbanat</li>\r\n		<li>1 kupon doorprize</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>More Information :</strong></p>\r\n\r\n<ul>\r\n	<li>Hotline : 0812 3220 8224</li>\r\n	<li>Instagram :&nbsp;<a href=\"http://instargram.com/theshalimarhotel.id\">theshalimarhotel.id</a></li>\r\n</ul>', '4.jpg', 1),
(15, '1234', 'Civil Days 2018 UM', '2018-09-13 10:00:03', 'Gd. Sasana Budaya, Universitas Negeri Malang', 250, 65000, '<p><strong>Tema :</strong>&nbsp;Inovasi Struktur Bangunan Tinggid engan Konsep Ramah Lingkungan di Daerah Padat Penduduk</p>\r\n\r\n<p>SEMINAR NASIOAL</p>\r\n\r\n<ul>\r\n	<li>Tanggal : 13 September 2018</li>\r\n	<li>Tempat : Gd. Sasana Budaya, Universitas Negeri Malang</li>\r\n	<li>Pembicara :\r\n	<ul>\r\n		<li>Jimmy Siswanto Juwana, MSAE (Dosen FTSP Universitas Trisakti, Core Founder Green Building COunsil Indonesia (GBCI)</li>\r\n		<li>Ir. H. Syarif Burhanuddin, M. Eng, IPU (Dirjen Bina Konstruksi Kementerian Pekerjaan Umum dan Perumahan Rakyat)</li>\r\n		<li>Tirta Mazli, S.T. (Green Officer PT. Pembangunan Perumahan, Tbk)</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>CALL FOR PAPER</strong></p>\r\n\r\n<ul>\r\n	<li>Tema : Inovasi Struktur Bangunan Tinggid engan Konsep Ramah Lingkungan di Daerah Padat Penduduk</li>\r\n	<li>Sub Tema :\r\n	<ul>\r\n		<li>Kependidikan</li>\r\n		<li>Struktur dan Bahan Bangunan</li>\r\n		<li>Transportasi</li>\r\n		<li>Survey dan Pemetaan</li>\r\n		<li>Arsitektur dan Lingkungan</li>\r\n		<li>Bangunan Air</li>\r\n		<li>Manajemen Konstruksi</li>\r\n		<li>Geoteknik</li>\r\n	</ul>\r\n	</li>\r\n	<li>Timeline :\r\n	<ul>\r\n		<li>Pendaftaran dan Pengumpulan Artikel (Full Paper) : 14 April &ndash; 2 Juli 2018</li>\r\n		<li>Pengumuman Paper Diterima : 16 Juli 2018</li>\r\n		<li>Pembayaran dan Pengumpulan Revisi : 17 &ndash; 24 Juli 2018</li>\r\n		<li>Presentasi : 13 September 2018</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>THE 3rd&nbsp;GREEN CONCRETE COMPETITION</strong></p>\r\n\r\n<ul>\r\n	<li>Tema : Inovasi Beton Serat Mutu Tinggi Ramah Lingkungan</li>\r\n	<li>Timeline :\r\n	<ul>\r\n		<li>Pendaftaran Pengiriman Proposal 1 Mei &ndash; 4 Juli 2018</li>\r\n		<li>Pengumuman Finalis : 1 Agustus 2018</li>\r\n		<li>Batas Konfirmasi Finalis : 4 Agustus 2018</li>\r\n		<li>Pembayaran Biaya Finalis : 1 &ndash; 8 Agustus 2018</li>\r\n		<li>Pemberian Kerangka Acuan Lomba : 11 Agustus 2018</li>\r\n		<li>Pembuatan Benda Uji dan Pengiriman Video : 12 Agustus 2018</li>\r\n		<li>Technical Meeting : 7 September 2018</li>\r\n		<li>Pengujian Benda Uji, Presentasi dan Pengumuman Pemenang : 8 September 2018</li>\r\n	</ul>\r\n	</li>\r\n	<li>Contact Person :\r\n	<ul>\r\n		<li>Ziana : 0857 8597 6139</li>\r\n		<li>Juli : 0812 2704 6048</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>THE 3rd&nbsp;CONSTRUCTION MANAGEMENT COMPETITION</strong></p>\r\n\r\n<ul>\r\n	<li>Tema : Vlue Engineering Innovation for Energy Saving in Building Construction</li>\r\n	<li>Timeline :\r\n	<ul>\r\n		<li>Pendaftaran : 1 Mei &ndash; 1 Jui 2018</li>\r\n		<li>Publikasi Kata Sandi : 2 Juli 2018</li>\r\n		<li>Pengerjaan Soal dan Pengumpulan Proposal : 2 Juli &ndash; 5 Agustus 2018</li>\r\n		<li>Question : 9 &ndash; 15 Juli 2018</li>\r\n		<li>Answer : 16 Juli 2018</li>\r\n		<li>Pengumuman Finalis : 22 Agustus 2018</li>\r\n		<li>Revisi Proposal Karya ; 22 &ndash; 29 Agustus 2018</li>\r\n		<li>Batas Pengumpulan Revisi Proposal Karya : 31 Agustus 2018</li>\r\n		<li>Technical Meeting : 7 September 2018</li>\r\n		<li>Presentasi dan Pengumuman Pemenang : 8 September 2018</li>\r\n	</ul>\r\n	</li>\r\n	<li>Contact Person :\r\n	<ul>\r\n		<li>Edwin : 0812 8725 9214</li>\r\n		<li>Tajus : 0877 0181 5437</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>THE 2nd&nbsp;NATIONAL PAPER COMPETITION</strong></p>\r\n\r\n<ul>\r\n	<li>Tema : Inovasi Green Building Guna Mewujudkan Pembangunan Berkelanjutan di Indonesia</li>\r\n	<li>Timeline :\r\n	<ul>\r\n		<li>Pendaftaran : 1 Mei &ndash; 2 Jui 2018</li>\r\n		<li>Pengumpulan Full Paper : 7 Mei &ndash; 2 Juli 2018</li>\r\n		<li>Pengumuman Finalis : 2 Agustus 2018</li>\r\n		<li>Batas Konfirmasi Finalis : 5 Agustus 2018</li>\r\n		<li>Pembayaran Biaya Finalis : 2 &ndash; 9 Agustus 2018</li>\r\n		<li>Pengerjaan Mading 3D dan materi Presentasi : 2 Agustus &ndash; 6 September 2018</li>\r\n		<li>Revisi Karya Tulis : 2 &ndash; 24 Agustus 2018</li>\r\n		<li>Technical Meeting : 7 September 2018</li>\r\n		<li>Presentasi dan Pengumuman Pemenang : 8 September 2018</li>\r\n	</ul>\r\n	</li>\r\n	<li>Contact Person :\r\n	<ul>\r\n		<li>Yola : 0812 3454 5533</li>\r\n		<li>Dymas : 0856 5561 4212</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>More Information :</strong></p>\r\n\r\n<ul>\r\n	<li>Hotline : 081218260772</li>\r\n	<li>Instagram :&nbsp;<a href=\"http://instagram.com/civildays2018\">civildays2018</a></li>\r\n	<li>Twitter :&nbsp;<a href=\"http://twitter.com/hmjsipil_um\">hmjsipil_um</a></li>\r\n</ul>', '5.jpg', 1),
(16, 'A001', 'Call For Essay Hima Perpajakan, FIA, UB', '2018-09-13 00:00:28', 'Universitas Brawijaya', 500, 70000, '<p>Untuk kamu Siswa SMA/SMK atau sederajat dan Mahasiswa aktif D1-S1 Universitas/Sekolah Tinggi, Himpunan Mahasiswa Perpajakan FIA UB mempersembahkan Call For Essay 2018.</p>\r\n\r\n<p>Call For Essay adalah perlombaan Karya Tulis Ilmiah dalam bentuk Essay tingkat Nasional. Daftarkan diri kalian.</p>\r\n\r\n<p><strong>Timeline :</strong></p>\r\n\r\n<ul>\r\n	<li>Pendaftaran Gelombang 1 : 28 Juni &ndash; 14 Juli 2018</li>\r\n	<li>Pendaftaran Gelombang 2 : 15 &ndash; 28 Juli 2018</li>\r\n	<li>Pendaftaran Gelombang 3 : 29 Juli &ndash; 5 Agustus 2018</li>\r\n	<li>Pengumpulan Essay : 15 Juli &ndash; 14 Agustus 2018</li>\r\n	<li>Desk Evaluation : 7 &ndash; 26 Agustus 2018</li>\r\n	<li>Pengumuman Babak Final : 28 Agustus 2018</li>\r\n	<li>Pengumpulan Powerpoint : 29 Agustus &ndash; 12 September 2018</li>\r\n	<li>Final : 28 September 2018</li>\r\n	<li>Pemaparan Essay di Seminar Nasional : 29 September 2018</li>\r\n</ul>\r\n\r\n<p><strong>Tema :&nbsp;</strong>Memacu Persiapan Perpajakan Indonesia dalam Menghadapi Ekonomi Digital di Era Globalisasi</p>\r\n\r\n<p><strong>Sub Tema :</strong></p>\r\n\r\n<ul>\r\n	<li>Kategori Mahasiswa :\r\n	<ul>\r\n		<li>Kemandirian Perekonomian Nasionald i Era Globalisasi</li>\r\n		<li>Optimalisasi Penerimaan Pajak dalam Transaksi Ekonomi Digital</li>\r\n		<li>Penerapan kebijakan Pajak atas Bisnis Konvensional dan Digital</li>\r\n		<li>Peran Civitas Akademika dan Masyarakat Umum dalam Kebijakan Pajak di Indonesia</li>\r\n	</ul>\r\n	</li>\r\n	<li>kategori Siswa :\r\n	<ul>\r\n		<li>Peran Civitas Akademika dan Masyarakat Umum dalam Kebijakan Pajak di Indonesia</li>\r\n		<li>Potensi Penerapan kebijakan Pajak pada Ekonomi Digital</li>\r\n		<li>Kesiapan Pemerintah Indonesia menghadapi Tantangan Pemajakan Ekonomi</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Persyaratan :</strong></p>\r\n\r\n<ul>\r\n	<li>Peserta terdiri dari dua kategori, yaitu Kateogri Mahasiswa dan Kategori Siswa</li>\r\n	<li>Mahasiswa/i aktif D1 s/d S1 Universitas / Sekolah Tinggi</li>\r\n	<li>Siswa/i aktif SMA/MA/SMK atau sederjaat</li>\r\n	<li>Peserta mengikuti lomba secara individual</li>\r\n	<li>Satu peserta dapat mengirimkan maksimal dua (2) karya essay nya</li>\r\n</ul>\r\n\r\n<p><strong>Pendaftaran :</strong></p>\r\n\r\n<ul>\r\n	<li>Tanggal Pendaftaran :\r\n	<ul>\r\n		<li>Pendaftaran Gelombang 1 : 28 Juni &ndash; 14 Juli 2018</li>\r\n		<li>Pendaftaran Gelombang 2 : 15 &ndash; 28 Juli 2018</li>\r\n		<li>Pendaftaran Gelombang 3 : 29 Juli &ndash; 5 Agustus 2018</li>\r\n	</ul>\r\n	</li>\r\n	<li>Biaya Pendaftaran :\r\n	<ul>\r\n		<li>Kategori SMA / Sederajat :\r\n		<ul>\r\n			<li>Gelombang 1 : Rp 45.000 / Essay</li>\r\n			<li>Gelombang 2 : Rp 50.000 / Essay</li>\r\n			<li>Gelombang 3 : Rp 55.000 / Essay</li>\r\n		</ul>\r\n		</li>\r\n		<li>Kategori Mahasiswa :\r\n		<ul>\r\n			<li>Gelombang 1 : Rp 60.000 / Essay</li>\r\n			<li>Gelombang 2 : Rp 65.000 / Essay</li>\r\n			<li>Gelombang 3 : Rp 70.000 / Essay</li>\r\n		</ul>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Total Hadiah :</strong></p>\r\n\r\n<ul>\r\n	<li>Kategori Siswa : Rp 2.250.000</li>\r\n	<li>Kategori Mahasiswa : Rp 3.250.000</li>\r\n	<li>+ Trofi</li>\r\n	<li>+ Piagam Penghargaan</li>\r\n</ul>\r\n\r\n<p><strong>More Information :</strong></p>\r\n\r\n<ul>\r\n	<li>Rahma Yuniar : 081259962696</li>\r\n	<li>Instagram :&nbsp;<a href=\"http://instagram.com/taxseries.ub\">taxseries.ub</a></li>\r\n	<li>Email :&nbsp;<a href=\"mailto:cfepajakfiaub@gmail.com\">cfepajakfiaub@gmail.com</a></li>\r\n</ul>', 'adas.jpg', 1),
(17, 'A001', 'JKT48 - Circus : Surabaya', '2018-07-01 14:00:10', 'ITS Robotic Surabaya', 500, 35000, '<p>Idol yang bisa kamu temui akan menjadi&hellip;</p>\r\n\r\n<p>&ldquo;IDOLA YANG AKAN DATANG MENEMUIMU&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Para member akan pergi ke seluruh Indonesia untuk menemuimu melalu <strong>JKT48 CIRCUS</strong></p>\r\n\r\n<p>Ada <strong>&ldquo;live performance&rdquo;</strong> dimana kamu bisa menikmati serunya pertunjukan ala JKT48!</p>\r\n\r\n<p>Kemudian ada <strong>&ldquo;handshake&rdquo;</strong> dan <strong>&ldquo;2-shot&rdquo; </strong>dimana kamu bisa bertemu dengan member dari jarak dekat!</p>\r\n\r\n<p>Lalu tiap tim juga telah menyiapkan &ldquo;program khusus&rdquo; agar bisa lebih dekat dengan para fans sekalian!!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Melalui JKT48 CIRCUS, kami akan mengirimkan energy ke kotamu!</p>', 'c12a7991-fef2-4ec6-8db6-4eba7164beab.jpg', 1),
(18, 'A001', 'JKT48 - Circus : Jember', '2018-07-03 14:00:06', 'Lippo Plaza Jember', 500, 35000, '<p>Idol yang bisa kamu temui akan menjadi&hellip;</p>\r\n\r\n<p>&ldquo;IDOLA YANG AKAN DATANG MENEMUIMU&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Para member akan pergi ke seluruh Indonesia untuk menemuimu melalu&nbsp;<strong>JKT48 CIRCUS</strong></p>\r\n\r\n<p>Ada&nbsp;<strong>&ldquo;live performance&rdquo;</strong>&nbsp;dimana kamu bisa menikmati serunya pertunjukan ala JKT48!</p>\r\n\r\n<p>Kemudian ada&nbsp;<strong>&ldquo;handshake&rdquo;</strong>&nbsp;dan&nbsp;<strong>&ldquo;2-shot&rdquo;&nbsp;</strong>dimana kamu bisa bertemu dengan member dari jarak dekat!</p>\r\n\r\n<p>Lalu tiap tim juga telah menyiapkan &ldquo;program khusus&rdquo; agar bisa lebih dekat dengan para fans sekalian!!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Melalui JKT48 CIRCUS, kami akan mengirimkan energy ke kotamu!</p>', 'c12a7991-fef2-4ec6-8db6-4eba7164beab1.jpg', 1),
(19, 'A001', 'JKT48 - Circus : Malang', '2018-07-05 14:00:47', 'UMM Dome Malang', 500, 35000, '<p>Idol yang bisa kamu temui akan menjadi&hellip;</p>\r\n\r\n<p>&ldquo;IDOLA YANG AKAN DATANG MENEMUIMU&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Para member akan pergi ke seluruh Indonesia untuk menemuimu melalu&nbsp;<strong>JKT48 CIRCUS</strong></p>\r\n\r\n<p>Ada&nbsp;<strong>&ldquo;live performance&rdquo;</strong>&nbsp;dimana kamu bisa menikmati serunya pertunjukan ala JKT48!</p>\r\n\r\n<p>Kemudian ada&nbsp;<strong>&ldquo;handshake&rdquo;</strong>&nbsp;dan&nbsp;<strong>&ldquo;2-shot&rdquo;&nbsp;</strong>dimana kamu bisa bertemu dengan member dari jarak dekat!</p>\r\n\r\n<p>Lalu tiap tim juga telah menyiapkan &ldquo;program khusus&rdquo; agar bisa lebih dekat dengan para fans sekalian!!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Melalui JKT48 CIRCUS, kami akan mengirimkan energy ke kotamu!</p>', 'c12a7991-fef2-4ec6-8db6-4eba7164beab2.jpg', 1),
(20, 'A001', 'JKT48 - Circus : Semarang', '2018-07-07 12:00:24', 'UTC Convention Hotel Semarang', 500, 35000, '<p>Idol yang bisa kamu temui akan menjadi&hellip;</p>\r\n\r\n<p>&ldquo;IDOLA YANG AKAN DATANG MENEMUIMU&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Para member akan pergi ke seluruh Indonesia untuk menemuimu melalu&nbsp;<strong>JKT48 CIRCUS</strong></p>\r\n\r\n<p>Ada&nbsp;<strong>&ldquo;live performance&rdquo;</strong>&nbsp;dimana kamu bisa menikmati serunya pertunjukan ala JKT48!</p>\r\n\r\n<p>Kemudian ada&nbsp;<strong>&ldquo;handshake&rdquo;</strong>&nbsp;dan&nbsp;<strong>&ldquo;2-shot&rdquo;&nbsp;</strong>dimana kamu bisa bertemu dengan member dari jarak dekat!</p>\r\n\r\n<p>Lalu tiap tim juga telah menyiapkan &ldquo;program khusus&rdquo; agar bisa lebih dekat dengan para fans sekalian!!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Melalui JKT48 CIRCUS, kami akan mengirimkan energy ke kotamu!</p>', 'c1de89dd-b3e3-4f5d-b228-f63d98e7b6aa.jpg', 1),
(21, 'A001', 'JKT48 - Circus : Purwokerto', '2018-07-12 12:00:42', 'Rita Mall Purwokerto', 500, 35000, '<p>Idol yang bisa kamu temui akan menjadi&hellip;</p>\r\n\r\n<p>&ldquo;IDOLA YANG AKAN DATANG MENEMUIMU&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Para member akan pergi ke seluruh Indonesia untuk menemuimu melalu <strong>JKT48 CIRCUS</strong></p>\r\n\r\n<p>Ada <strong>&ldquo;live performance&rdquo;</strong> dimana kamu bisa menikmati serunya pertunjukan ala JKT48!</p>\r\n\r\n<p>Kemudian ada <strong>&ldquo;handshake&rdquo;</strong> dan <strong>&ldquo;2-shot&rdquo; </strong>dimana kamu bisa bertemu dengan member dari jarak dekat!</p>\r\n\r\n<p>Lalu tiap tim juga telah menyiapkan &ldquo;program khusus&rdquo; agar bisa lebih dekat dengan para fans sekalian!!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Melalui JKT48 CIRCUS, kami akan mengirimkan energy ke kotamu!</p>', '466cbc85-5c5a-4665-930e-89fa078fb3ba.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori_event`
--

CREATE TABLE `tbl_kategori_event` (
  `kode_kategori` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_event` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_kategori_event`
--

INSERT INTO `tbl_kategori_event` (`kode_kategori`, `kategori_event`) VALUES
('1234', 'Workshop'),
('A001', 'Musik'),
('A002', 'Theater');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_simpan_event`
--

CREATE TABLE `tbl_simpan_event` (
  `id_simpan` int(11) NOT NULL,
  `idevent` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_simpan_event`
--

INSERT INTO `tbl_simpan_event` (`id_simpan`, `idevent`, `id_user`) VALUES
(2, 8, 1),
(3, 17, 1),
(5, 20, 4),
(6, 19, 5),
(7, 9, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `status` enum('Admin','User') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_user`, `jenis_kelamin`, `tanggal_lahir`, `email`, `no_telp`, `alamat`, `status`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Laki-Laki', '0000-00-00', 'administrator@gmail.com', '081234567891', 'Unknown', 'Admin'),
(1, 'yahuya', '57b6765018fd3dfd3d8fc1bb1bababc6', 'Yahya Dwi Pradika', 'Laki-Laki', '1998-01-13', 'yahuya@gmail.com', '089767681567', '<p>Pasuruan</p>', 'User'),
(3, 'pradika', '57b6765018fd3dfd3d8fc1bb1bababc6', 'Pradika Dwi', 'Laki-Laki', '1998-06-02', 'pradikanizer13@gmail.com', '089812347657', '<p>Jln. Mukibat III</p>\r\n\r\n<p>RT 03 RW 01 Purwosari, Pasuruan</p>', 'User'),
(4, 'shanju', '57b6765018fd3dfd3d8fc1bb1bababc6', 'Shania Junianatha', 'Perempuan', '1998-06-27', 'nju@gmail.com', '098989798755', '<p>Solo Raya</p>', 'User'),
(5, 'dio', '9b930621eaa7ca7e9f6f584a1450b8a6', 'Dio Siluman Air', 'Laki-Laki', '2018-07-12', 'dio@gmail.com', '089797988765', '<p>dasdsa</p>\r\n\r\n<p>dasdasdsa</p>\r\n\r\n<p>sdasd</p>', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`idevent`);

--
-- Indexes for table `tbl_kategori_event`
--
ALTER TABLE `tbl_kategori_event`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `tbl_simpan_event`
--
ALTER TABLE `tbl_simpan_event`
  ADD PRIMARY KEY (`id_simpan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `idevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_simpan_event`
--
ALTER TABLE `tbl_simpan_event`
  MODIFY `id_simpan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
