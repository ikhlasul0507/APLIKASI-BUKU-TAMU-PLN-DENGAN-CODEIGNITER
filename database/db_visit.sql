-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Nov 2019 pada 04.55
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_visit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(256) NOT NULL,
  `photo_admin` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `jenis_kelamin`, `email_admin`, `username_admin`, `password_admin`, `photo_admin`) VALUES
(30, 'Ikhlasul Amal', 'Laki-laki', 'amal@gmail.com', 'amal', '123', 'IMG_0166_copy.jpg'),
(40, 'DINA  JULIYANTI', 'Laki-laki', 'DINAJULIYANTI@pln.co.id', 'dina', 'dina', 'hasil.png'),
(41, 'SITI MAKWA', 'Perempuan', 'SITIMAKWA@pln.co.id', 'siti', 'siti', 'hasil1.png'),
(42, 'Alan Sanjaya', 'Laki-laki', 'AlanSanjaya@pln.co.id', 'alan', 'alan', 'a22eebb632457f9150f5fecbce8b68d2.jpg'),
(43, 'Firman', 'Laki-laki', 'Firman@pln.co.id', 'firman', 'firman', 'a22eebb632457f9150f5fecbce8b68d21.jpg'),
(44, 'M Bukhori', 'Laki-laki', 'MBukhori@pln.co.id', 'bukhori', 'bukhori', 'a22eebb632457f9150f5fecbce8b68d22.jpg'),
(45, 'Furqon', 'Laki-laki', 'Furqon@pln.co.id', 'furqon', 'furqon', 'a22eebb632457f9150f5fecbce8b68d23.jpg'),
(46, 'Sofiansyah', 'Laki-laki', 'Sofiansyah@pln.co.id', 'sofi', 'sofi', 'a22eebb632457f9150f5fecbce8b68d24.jpg'),
(47, 'Adi Putra', 'Laki-laki', 'AdiPutra@pln.co.id', 'adi', 'adi', 'a22eebb632457f9150f5fecbce8b68d25.jpg'),
(48, 'Wawan', 'Laki-laki', 'wawan@gmail.com', 'wawan', '123', 'a22eebb632457f9150f5fecbce8b68d26.jpg'),
(49, 'Angel Monica Putri', 'Perempuan', 'angel@gmail.com', 'angel', '123', 'gambar-kartun-lucu-wanita-berhijab-asli-gambar-kartun-wanita-berhijab-syar-i-of-gambar-kartun-lucu-wanita-berhijab14.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `waktu_berita` varchar(50) NOT NULL,
  `judul_berita` varchar(128) NOT NULL,
  `isi_berita` mediumtext NOT NULL,
  `photo_berita` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `waktu_berita`, `judul_berita`, `isi_berita`, `photo_berita`) VALUES
(3, '04 November 2019, 04:47:17 AM', 'Lengkapi Infrastruktur Kendaraan Listrik, PLN Luncurkan 5 SPKLU', 'Serpong, 28 Oktober 2019  – PLN meresmikan Stasiun Pengisian Kendaraan Listrik Umum (SPKLU) secara bersamaan di 4 kota yakni Tangerang, Bali Selatan, Jakarta dan Bandung. Khusus untuk Jakarta launching SPKLU dilakukan di Kantor Pusat PLN dan Depan Kantor Distribusi Jakarta Raya.\r\n\r\nAcara peresmian SPKLU ini sebagai bagian dari implementasi kelengkapan infrastruktur bagi kendaraan bermotor listrik berbasis baterei, sesuai dengan Peraturan Presiden no.55 tahun 2019. Untuk itu PLN berkomitmen menyediakan sejumlah SPKLU baik yang disediakan secara mandiri oleh PLN, ataupun melalui kerjasama dengan pihak swasta.\r\n \r\nAcara launching SPKLU dihadiri oleh Direktur Ketenagalistrikan ESDM Rida Mulyana, Deputi Bidang Usaha Pertambangan, Industri Strategis, dan Media Fajar Harry Sampurno, Plt Direktur Utama PLN Sripeni Inten Cahyani, Plt Komisaris Utama PLN Ilya Avianti yang berlokasi di Aeon Mall, BSD City, Banten. (28/10).\r\n\r\nPlt Direktur Utama PLN Sripeni Inten Cahyani saat meluncurkan berdirinya SPKLU mengatakan, dalam hal pembangunan SPKLU, pihaknya secara terbuka bekerjasama dengan berbagai pihak, baik perusahaan swasta ataupun BUMN lainnya.\r\n \r\nSebelumnya PLN juga telah menggandeng kerjasama dengan 20 mitra strategis dalam kerjasama percepatan kendaraan bermotor listrik berbasis baterai untuk transportasi jalan dan Stasiun Pengisian Kendaraan Listrik Umum (SPKLU) beberapa waktu yang lalu, disampaikan, kerjasama tersebut adalah untuk mengimplementasikan PERPRES Nomor 55 tahun 2019 tentang Percepatan Program Kendaraan Bermotor Listrik Berbasis Baterai (Battery Electric Vehicle).\r\n\r\nDalam tahun ini, PLN berencana membangun 10 SPKLU di seluruh Indonesia. Secara berangsur sampai tahun depan, diharapkan jumlahnya terus bertambah, guna menunjang hadirnya perangkat kendaraan listrik mulai dari mobil listrik berbasis baterei, skuter (motor listrik), dan berbagai kendaraan listrik lainnya.\r\n \r\nMelalui kerjasama tersebut, PLN telah mengikat kerjasama dengan 20 perusahaan swasta dan juga BUMN, dalam hal penyediaan SPKLU di sejumlah instansi, termasuk area parkir kendaraan bermotor di berbagai perkantoran dan juga nantinya di pusat-pusat perbelanjaan.\r\n \r\nItu semua dilakukan sebagai upaya menciptakan terwujudnya ekosistem kendaraan bermotor listrik berbasis baterei di Indonesia, guna menciptakan Indonesia yang tidak hanya bebas dari polusi, namun juga dalam jangka panjang, sekaligus mengurangi ketergantungan terhadap energi fosil yang tidak dapat diperbarui.\r\n\r\nPada kesempatan yang sama, General Manager Aeon Mall BSD, Banten menyebutkan Apresiasi dan rasa bangga dengan ditempatinya untuk launching SPKLU yang pertama.\r\n\r\n“Kami bangga PLN memilih kami dalam peluncuran SPKLU, ini sesuai komitmen untuk kami untuk menjaga lingkungan dan aktif dalam pemanfaatan energi bersih.” Windy.\r\n\r\nDalam sambutannya Dirjen ketenagalistrikan Rida Mulyana, menyebutkan apresiasi terhadap langkah PLN dalam penyediaan SPKLU.\r\n\r\n“Langkah PLN sangat bagus dan strategis dengan kerjasama untuk pemanfaatan kendaraan berbasis listrik. Hal ini juga bagus untuk peningkatan penjualan tenaga listrik kedepannya. ” Ungkap Rida Mulyana.\r\n\r\nPeresmian ini sangat penting bagi kami, sebagai wujud keseriusan PLN untuk mendukung program kendaraan berlistrik di Indonesia, seperti yang kita ketahui bahwa PLN mendapatkan penugasan dari Pemerintah dalam rangka penyediaan infrastruktur pengisian listrik untuk KBL berbasis baterai. Hal ini juga menjadi bukti komitmen dan kontribusi bersama terhadap program Pemerintah demi terwujudnya kehidupan masyarakat Indonesia yang lebih baik.\r\n\r\nSPKLU ini adalah hal mendasar untuk mendorong penggunaan kendaraan berlistrik.\r\n\r\nKontak :\r\nDwi Suryo Abdullah\r\nVice President Public Relation PLN', 'PLN-Luncurkan-5-SKPLU.jpeg'),
(5, '04 November 2019, 04:51:00 AM', 'PLN Kobarkan Energi Optimisme Melalui Electric Jakarta Marathon 2019', 'JAKARTA, 27 Oktober 2019 – PLN kembali terlibat dalam Lomba lari terbesar di Indonesia, Electric Jakarta Marathon yan digelar di Plaza Utara Gelora Bung Karno pada hari Minggu, pada 27 Oktober 2019. Tercatat 16.500 pelari telah terdaftar di Jakarta Marathon edisi ke-7 ini, bahkan 1.421 peserta diantaranya berasal dari mancanegara. Tidak kurang dari 32 negara yang bergabung dalam event yang di dukung penuh oleh PLN ini.\r\n\r\nEven tahunan ini dimulai dengan pelepasan peserta full marathon oleh Plt. Direktur Utama PT. PLN Persero, Sripeni Inten Cahyani, Sekretaris Kementerian Pariwisata dan Ekonomi Kreatif, Kurleni Ukar M.Sc, Kepala Dinas Pariwisata dan Kebudayaan DKI Jakarta, Edy Junaedi, dan Chairman Jakarta Marathon, Sapta Nirwandar.\r\n\r\nDengan mengusung tema “Keep Running, Spread Your Light” Energi Optimisme, PLN mencoba menyebarkan energi optimisme yang digelorakan oleh Electric Jakarta Marathon 2019.\r\n\r\nPlt Direktur Utama PLN Sripeni Inten Cahyani mengatakan melalui Energi Optimisme Electric Jakarta Marathon 2019 diharapkan dapat mendorong dan menyebarkan virus semangat optimisme kota Jakarta untuk terus maju dan termotivasi menjadi destinasi sport tourism berkelas dunia. Hal ini tentu mendorong gaya hidup sehat masyarakat Jakarta.\r\n\r\n“Kiprah PLN sejak 2018 lalu di ajang Marathon berskala International ini merupakan sumbangsih kami dalam mendorong masyarakat Indonesia menuju eco lifestyle dan menumbuhkembangkan sportourism Indonesia menjadi destinasi utama wisatawan mancanegara. Langkah konkrit kami di Electric Jakarta Marathon 2019 dalam mendukung program pemerintah menuju Indonesia Bersih adalah dengan mengerahkan mobil dan motor listrik sebagai kendaraan operasional panitia dan penggunaan Power Bank PLN sebagai energi listrik ramah lingkungan di area lomba. Selain itu melalui Electric Jakarta Marathon 2019 diharapkan dapat menyebarkan semangat Energi Optimisme PLN, khususnya di kota Jakarta agar dapat terus maju dan berkembang menjadi kota tujuan wisata yang aman dan nyaman untuk berolahraga” Ungkap Sripeni.\r\n\r\nDirinya menambahkan penyelenggaraan kegiatan ini dilakukan dalam rangkaian peringatan Hari Listrik Nasional ke-74 yang setiap tahun diperingati pada tanggal 27 Oktober. Diharapkan kegiatan ini akan menggambarkan juga potensi semangat, baik di kalangan internal manajemen PLN dan karyawan yang saling bahu-membahu, berkarya untuk negeri, dalam balutan kegiatan yang menggambarkan Energi Optimisme.\r\n\r\nDirinya menambahkan, minat peserta tahun ini relatif meningkat jika dibandingkan tahun lalu, Sementara itu peserta ber-passport asing masih didominasi warga negara Jepang yang mencapai 512 pelari, meningkat sebanyak 85 orang dari tahun sebelumnya yang hanya 427 peserta.\r\n\r\nMenurut pihak panitia, Ajang sport tourism Jakarta Marathon yang digelar sejak tahun 2013 lalu ini telah masuk ke dalam Calendar of Event (CoE) 2019 Kementerian Pariwisata Republik Indonesia.\r\n\r\nRute yang akan dilalui oleh para peserta Electric Jakarta Marathon 2019 masih tetap sama dengan rute tahun 2018 yang akan menonjolkan keindahan landmark-landmark ikonik kota Jakarta seperti Kawasan Kota Tua, Fatahillah Square, Gereja Katedral, Masjid Istiqlal, dan Monas.\r\nElectric Jakarta Marathon 2019 akan melombakan 5 (lima) nomor lari, yaitu;\r\n• Marathon (42,195 KM)\r\n• Half Marathon (21 KM)\r\n• 10K (10 KM)\r\n• 5K (5 KM)\r\n• Maratoonz (Children’s Sprint).\r\n\r\nKontak :\r\nDwi Suryo Abdullah\r\nVice President Public Relation PLN', 'PLN-Electric-Jakarta-Marathon-2019.jpeg'),
(7, '04 November 2019, 04:50:12 AM', 'PLN Dongkrak Pemakaian Kendaraan Berlistrik', 'Jakarta (28/10) Pemerintah Provinsi DKI Jakarta menggelar Karnaval Jakarta Langit Biru pada tanggal 27 Oktober 2019 dengan konvoi kendaraan listrik dari Patung Pemuda Senayan, Bundaran HI, dan kembali lagi ke Senayan. PLN mendukung penuh kegiatan ini karena mempunyai visi yang sama yaitu mengoptimalkan pemakaian energi listrik untuk mewujudkan lingkungan bebas polusi. Semangat ini sesuai dengan peringatan Hari Listrik Nasional ke-74 yang diperingati tanggal 27 Oktober dan dalam rangka peringatan Sumpah Pemuda tanggal 28 Oktober.\r\n\r\n“Tujuan dukungan kami yaitu PLN ingin bersama-sama Pemprov DKI Jakarta menggaungkan semangat menciptakan Jakarta yang lebih sehat tanpa polusi dengan lebih mengkampanyekan kendaraan listrik untuk operasional sehari-hari masyarakat,” kata Sripeni Inten Cahyanu, Plt. Direktur Utama PLN.\r\n\r\nDalam kegiatan Jakarta Langit Biru, dibutuhkan daya listrik sebesar 378.000 Volt Ampere (VA) yang semuanya dipasok menggunakan listrik PLN, tanpa genset. Untuk menambah keandalan pasokan, PLN menyiapkan 2 unit UPS dengan daya masing-masing 100.000 dan 300.000 VA.\r\n\r\n“Kita kampanye anti polusi dengan kendaraan listrik, untuk acarapun digelar tanpa asap polusi,” tambah Inten.\r\n\r\nGubernur Pemprov DKI Jakarta, Anies Baswedan, mengatakan bahwa program Jakarta Langit Biru adalah sebuah harapan mewujudkan kembalinya langit Jakarta menjadi biru, tanpa polusi. Komitmen bersama semua elemen diharapkan Anies untuk bersama-sama membangun ekosistem kendaraan listrik menjadi lebih besar.\r\n\r\nRekor MURI dipecahkan dengan konvoi kendaraan listrik terbanyak. Oleh karena itu PLN menyiapkan Stasiun Pengisisan Kendaraan Listrik Umum (SPKLU) untuk motor sebanyak 24 buah dimana masing-masing SPKLU bisa untuk mengisi baterai 4 motor bersamaan. Selain itu ada 1 buah SPKLU untuk mobil. SPKLU di acara tersebut bersifat temporer hanya untuk kebutuhan charging peserta karnaval.\r\n\r\n“PLN menampilkan booth juga dimana pengunjung bisa datang menanyakan terkait SPKLU, program promo PLN terkait kendaraan listrik, maupun layanan lainnya. Akan ada tim pemasaran PLN yang siap membantu pengunjung,” Inten menjelaskan.\r\n\r\nSelain melalui keikutsertaan di karnaval, dukungan PLN untuk mewujudkan Jakarta Langit Biru yaitu mendukung pertumbuhan kendaraan listrik sebagai penggerak penyedian Stasiun Pengisian Kendaraan Listrik Umum (SPKLU). PLN sudah menyiapkan beberapa titik SPKLU untuk Mobil maupun motor di Jakarta.\r\n\r\nPolusi di Jakarta tidak hanya disumbang dari kendaraan saja. Salah satu sumber polusi di Jakarta yaitu penggunaan generator set untuk event maupun pembangunan gedung-gedung di Jakarta. Andil PLN mengurangi polusi akibat genset untuk mewujudkan langit biru Jakarta yaitu menyiapkan listrik di luar ruang yang menggunakan alat disebut Power Bank PLN. Masyarakat cukup telepon ke Contact Center 123 atau datang ke kantor PLN terdekat untuk mendapatkan layanan listrik temporer di luar ruang dengan daya berapapun yang dibutuhkan.\r\n\r\nKontak :\r\nDwi Suryo Abdullah\r\nVice President Public Relation PLN', 'PLN-Karnaval-Jakarta-Langit-Biru-2019.jpeg'),
(8, '04 November 2019, 04:48:52 AM', 'PLN Siap Pasok Listrik 10 Destinasi Pariwisata Prioritas dan 11 Wilayah Shore Connection', 'Jakarta, 28 Oktober 2019 – PLN siap memasok listrik untuk 10 (sepuluh) Destinasi Pariwisata Prioritas dan 11 wilayah Shore Connection setelah melakukan penandatanganan 3 (tiga) Memorandum of Understanding (MoU) dalam perayaan Hari Listrik Nasional (HLN) ke 74 yaitu dengan Kementerian Pariwisata (Kemenpar) dan Pelindo III.\r\n\r\nPenandatanganan tersebut dilakukan setelah prosesi upacara Hari Listrik Nasional ke 74 juga peringatan Hari Sumpah Pemuda ke 91 oleh Plt Direktur Utama (Dirut) PLN Sripeni Inten Cahyani bersama dengan Deputi Bidang Pengembangan Destinasi Pariwisata Kementerian Pariwisata Dadang Rizki Ratman, SH., MPA dan Direktur Utama PT Pelindo III Doso Agung di PLN Kantor Pusat, Jakarta (28/10).\r\n\r\n“Bertepatan dengan Hari Sumpah Pemuda ke 91 serta dalam perayaan Hari Listrik Nasional ke 74, penandatanganan MoU ini kita laksanakan atas dasar prinsip kebersamaan saling menghormati dan menguntungkan baik dari sisi potensi maupun nilai strategis.” Kata Sripeni dalam sambutannya.\r\n\r\nMoU pertama adalah dengan Kemenpar untuk penyediaan Infrastruktur listrik destinasi pariwisata prioritas, PLN berkomitmen memenuhi kebutuhan listrik total sebesar 241.000 kVA, dimana 10 (sepuluh) Destinasi Pariwisata Prioritas tersebut terdiri dari:\r\n1. Danau Toba, Sumatera Utara,\r\n2. Tanjung Kelayang, Bangka Belitung,\r\n3. Tanjung Lesung, Banten,\r\n4. Kepulauan Seribu, Jakarta Raya,\r\n5. Borobudur, Jawa Tengah,\r\n6. Bromo Tengger Semeru, Jawa Timur,\r\n7. Mandalika, Nusa Tenggara Barat (NTB)\r\n8. Labuan Bajo, Nusa Tenggara Timur (NTT),\r\n9. Wakatobi, Sulawesi Tenggara,\r\n10. Morotai, Maluku Utara,\r\n\r\nSepuluh Destinasi Pariwisata Prioritas tersebut juga merupakan amanat Presiden Joko Widodo yang disampaikan melalui surat Sekretariat Kabinet Nomor: B652/Seskab/Maritim/2015 tanggal 06 November 2015 perihal Arahan Presiden RI mengenai Pariwisata, dan Arahan Presiden pada Sidang Kabinet Awal Tahun pada tanggal 04 Januari 2016. Dengan mendukung kebutuhan listrik pariwisata prioritas, perekonomian ke-10 daerah tersebut dapat tumbuh lebih cepat sehingga pada akhirnya menopang peningkatan jumlah wisatawan baik asing maupun lokal.\r\n\r\nMoU kedua berisi komitmen PLN dalam memasok tenaga listrik untuk memenuhi kebutuhan daya listrik di 11 (sebelas) lokasi Pelabuhan/Terminal PELINDO III guna mendukung kegiatan operasional pelabuhan, dengan pasokan Tegangan Menengah 20 kV (dua puluh kilo volt) dan total daya sebesar 29.892 kVA.\r\n\r\nAdapun ke 11 pelabuhan tersebut diantaranya adalah Bagendang Sampit, Kumai, Batulicin, dan pelabuhan Banjarmasin di Kalselteng, Tenau Kupang dan Maumere di NTT, Lembar di NTB, Tanjung Intan dan Tanjung Emas di DJTY, TPS dan Semen Tuban di Jawa Timur.\r\n\r\nSementara MoU ketiga dengan PELINDO III adalah tentang sinergi kerjasama bidang energi, logistik, kepelabuhanan dan pemanfaatan lahan idle.\r\n\r\nDiharapkan melalui kerjasama ini akan terjalin kemitraan dan terwujud sinergi usaha dengan prinsip saling menguntungkan dalam pengembangan dan peningkatan kegiatan dan program kerja, serta terjalinnya hubungan baik jangka panjang antara PLN dengan Kemenpar serta PLN dengan Pelindo III.\r\n\r\nKontak :\r\nDwi Suryo Abdullah\r\nVice President Public Relation PLN', 'PLN-Siap-Listriki-10-Destinasi-Wisata-Baru.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bukti`
--

CREATE TABLE `tbl_bukti` (
  `id_bukti` int(11) NOT NULL,
  `nama_bukti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bukti`
--

INSERT INTO `tbl_bukti` (`id_bukti`, `nama_bukti`) VALUES
(3, 'Kartu Pegawai'),
(7, 'SIM'),
(9, 'KTP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(255) NOT NULL,
  `email_kontak` varchar(100) NOT NULL,
  `subject_kontak` varchar(255) NOT NULL,
  `pesan_kontak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_kontak`, `nama_kontak`, `email_kontak`, `subject_kontak`, `pesan_kontak`) VALUES
(1, 'Neva Streich', 'ellis.leffler@steuber.org', 'Mollitia aut dolores nam totam.', 'Mozilla/5.0 (Windows NT 5.2) AppleWebKit/5332 (KHTML, like Gecko) Chrome/15.0.821.0 Safari/5332'),
(2, 'Lucienne Wunsch', 'eloise46@yahoo.com', 'Vitae minima velit illo est qui sint.', 'Mozilla/5.0 (Windows 98; Win 9x 4.90) AppleWebKit/5332 (KHTML, like Gecko) Chrome/14.0.886.0 Safari/5332'),
(3, 'Prof. Jettie Hodkiewicz III', 'franz.pouros@hettingerdamore.com', 'Consequatur praesentium quis quam non.', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_3) AppleWebKit/5332 (KHTML, like Gecko) Chrome/13.0.864.0 Safari/5332'),
(4, 'Nona Rippin III', 'sherman@gmail.com', 'Eveniet dolor inventore qui aut atque occaecati ut.', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5362 (KHTML, like Gecko) Chrome/15.0.848.0 Safari/5362'),
(5, 'Silas Renner', 'august09@gmail.com', 'Soluta delectus culpa quia.', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_9) AppleWebKit/5322 (KHTML, like Gecko) Chrome/13.0.859.0 Safari/5322'),
(6, 'Theresa Adams DVM', 'paolo.smitham@greenholt.com', 'Fugit tempora eos nostrum tempora ullam.', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_7_5) AppleWebKit/5340 (KHTML, like Gecko) Chrome/15.0.888.0 Safari/5340'),
(7, 'Robyn Klein', 'rachael05@kirlinschinner.com', 'Qui minima odit recusandae dolorem.', 'Mozilla/5.0 (Windows 98; Win 9x 4.90) AppleWebKit/5332 (KHTML, like Gecko) Chrome/15.0.893.0 Safari/5332'),
(8, 'Ms. Karen Roberts', 'zena13@predovicpollich.com', 'Omnis distinctio voluptatibus minus esse id qui.', 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/5310 (KHTML, like Gecko) Chrome/15.0.840.0 Safari/5310'),
(9, 'Cordelia Blick DVM', 'piper.denesik@vonruedenstroman.com', 'Qui sint quas soluta doloremque.', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_6_8) AppleWebKit/5340 (KHTML, like Gecko) Chrome/15.0.861.0 Safari/5340'),
(10, 'Dr. Bridgette Schinner', 'friesen.ernest@wardschowalter.com', 'Quibusdam officiis nemo incidunt eos eligendi sint.', 'Mozilla/5.0 (Windows CE) AppleWebKit/5362 (KHTML, like Gecko) Chrome/14.0.843.0 Safari/5362'),
(11, 'Lesly McDermott', 'aliza11@yahoo.com', 'Dolore molestias odit dolores et tempora blanditiis numquam.', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5322 (KHTML, like Gecko) Chrome/13.0.852.0 Safari/5322'),
(12, 'Henriette Cronin Sr.', 'rosamond14@yahoo.com', 'Dicta atque et accusantium sed repudiandae tenetur.', 'Mozilla/5.0 (Windows NT 5.2) AppleWebKit/5360 (KHTML, like Gecko) Chrome/13.0.844.0 Safari/5360'),
(13, 'Miss Arlie Hilll', 'ross67@maggioflatley.com', 'Natus et suscipit voluptatem beatae aut deserunt vitae.', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5322 (KHTML, like Gecko) Chrome/15.0.819.0 Safari/5322'),
(14, 'Cassie Corkery DVM', 'darrel37@hilll.info', 'Dignissimos iste et a doloribus.', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_8_9) AppleWebKit/5320 (KHTML, like Gecko) Chrome/13.0.891.0 Safari/5320'),
(15, 'Sarina Ziemann', 'imclaughlin@yahoo.com', 'Dolorum eos illo rerum ab laudantium minima.', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5331 (KHTML, like Gecko) Chrome/13.0.849.0 Safari/5331'),
(16, 'Abigail Effertz', 'dooley.orlo@hotmail.com', 'Provident totam quis alias.', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/5320 (KHTML, like Gecko) Chrome/14.0.897.0 Safari/5320'),
(17, 'Pamela Schneider PhD', 'ischowalter@davis.com', 'Unde reiciendis ut labore iure adipisci eum.', 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/5332 (KHTML, like Gecko) Chrome/15.0.846.0 Safari/5332'),
(18, 'Prof. Hilario Berge', 'kherzog@hotmail.com', 'Necessitatibus suscipit natus cumque.', 'Mozilla/5.0 (Windows 95) AppleWebKit/5311 (KHTML, like Gecko) Chrome/15.0.814.0 Safari/5311'),
(19, 'Vivien White', 'tcarter@strosinullrich.info', 'Provident vitae illum earum praesentium necessitatibus.', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_5_7) AppleWebKit/5341 (KHTML, like Gecko) Chrome/15.0.831.0 Safari/5341'),
(20, 'Hallie Welch', 'torrey21@wiegandsenger.com', 'Illum sunt neque dolorum sint doloribus consequatur et.', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_8_5) AppleWebKit/5360 (KHTML, like Gecko) Chrome/14.0.805.0 Safari/5360'),
(21, 'Cullen Wolff I', 'sarah60@rippinstamm.net', 'Ut doloremque sunt optio id incidunt voluptatem.', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5310 (KHTML, like Gecko) Chrome/15.0.843.0 Safari/5310'),
(22, 'Karolann Bode', 'jessy.lebsack@yahoo.com', 'Qui et vero in fuga enim quas.', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/5322 (KHTML, like Gecko) Chrome/14.0.831.0 Safari/5322'),
(23, 'Wallace Towne', 'altenwerth.raymundo@yahoo.com', 'Et optio voluptatem beatae eius eos dolore provident sequi.', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5351 (KHTML, like Gecko) Chrome/14.0.875.0 Safari/5351'),
(24, 'Celestino Walter Sr.', 'fhyatt@hotmail.com', 'Quam fugiat veniam ullam labore.', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5342 (KHTML, like Gecko) Chrome/13.0.873.0 Safari/5342'),
(25, 'Dr. Hugh Wisozk DVM', 'pasquale.wehner@yahoo.com', 'Id mollitia voluptate consequatur libero debitis.', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_6) AppleWebKit/5361 (KHTML, like Gecko) Chrome/15.0.822.0 Safari/5361'),
(26, 'Van Koss', 'ftremblay@cormier.com', 'Et eius dolorum mollitia commodi in quis.', 'Mozilla/5.0 (Windows 98) AppleWebKit/5330 (KHTML, like Gecko) Chrome/14.0.807.0 Safari/5330'),
(27, 'Drake Koepp', 'lhand@gmail.com', 'Molestiae architecto voluptatibus pariatur est ducimus.', 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/5310 (KHTML, like Gecko) Chrome/15.0.800.0 Safari/5310'),
(28, 'Lilyan Beatty', 'cheyenne62@gmail.com', 'Qui beatae qui enim voluptas.', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_2) AppleWebKit/5360 (KHTML, like Gecko) Chrome/14.0.831.0 Safari/5360'),
(29, 'Santina Harber', 'weber.asa@rolfsonwiza.com', 'Vitae laboriosam quod alias fugiat.', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_8_1) AppleWebKit/5360 (KHTML, like Gecko) Chrome/15.0.877.0 Safari/5360'),
(30, 'Dave Kulas', 'flo55@green.com', 'Iste quod suscipit nihil nobis amet eius.', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_8_6) AppleWebKit/5350 (KHTML, like Gecko) Chrome/13.0.860.0 Safari/5350'),
(31, 'Monserrate Jacobson', 'swalter@yahoo.com', 'Fuga provident asperiores cupiditate porro tenetur pariatur.', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_8_9) AppleWebKit/5341 (KHTML, like Gecko) Chrome/13.0.837.0 Safari/5341'),
(32, 'Zula Luettgen Jr.', 'mylene.crooks@brakus.net', 'Laboriosam perferendis sed deserunt voluptates dolor quas aspernatur cum.', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_8_7) AppleWebKit/5360 (KHTML, like Gecko) Chrome/13.0.867.0 Safari/5360'),
(33, 'Prof. Dion Nienow', 'ruecker.ottilie@kohlerkunde.com', 'Tempora eos velit aut et iure quidem.', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_7) AppleWebKit/5350 (KHTML, like Gecko) Chrome/14.0.832.0 Safari/5350'),
(34, 'Dasia Stracke I', 'alayna.rutherford@price.biz', 'Magnam suscipit neque tempora voluptatibus qui suscipit.', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8) AppleWebKit/5351 (KHTML, like Gecko) Chrome/15.0.807.0 Safari/5351'),
(35, 'Miss Nina Jacobi IV', 'keshawn.schuster@gerholdfriesen.org', 'Iure sit velit sint autem doloremque voluptatem.', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_5_2) AppleWebKit/5330 (KHTML, like Gecko) Chrome/14.0.810.0 Safari/5330'),
(36, 'Lucile Baumbach', 'alysa.boyer@yahoo.com', 'A culpa qui illo.', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5360 (KHTML, like Gecko) Chrome/15.0.885.0 Safari/5360'),
(37, 'Wilfredo Koelpin', 'destiny25@gmail.com', 'Adipisci sequi perspiciatis velit qui aut optio dicta.', 'Mozilla/5.0 (Windows 98; Win 9x 4.90) AppleWebKit/5361 (KHTML, like Gecko) Chrome/13.0.805.0 Safari/5361'),
(38, 'Brandy Kilback', 'oberbrunner.taurean@schamberger.org', 'Tempora nam fugit et consequatur officia eos velit.', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5360 (KHTML, like Gecko) Chrome/14.0.848.0 Safari/5360'),
(39, 'August Kautzer', 'melissa98@tromp.com', 'Nobis alias aspernatur vero minima voluptatem et.', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5332 (KHTML, like Gecko) Chrome/13.0.887.0 Safari/5332'),
(40, 'Prof. Noelia Brown', 'bergstrom.kira@koepp.com', 'Omnis et sequi iste.', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_6_3) AppleWebKit/5332 (KHTML, like Gecko) Chrome/14.0.816.0 Safari/5332'),
(41, 'Queenie Stark', 'wunsch.trent@gmail.com', 'Rerum est amet et non placeat.', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5331 (KHTML, like Gecko) Chrome/14.0.812.0 Safari/5331'),
(42, 'Ms. Alexane Kozey', 'kristina.lindgren@gmail.com', 'Aut natus magni ipsa voluptatem ea.', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_5_5) AppleWebKit/5350 (KHTML, like Gecko) Chrome/14.0.819.0 Safari/5350'),
(43, 'Prof. Chaim Hamill V', 'myrtle01@skiles.org', 'Incidunt laboriosam cumque nemo consequatur in quaerat.', 'Mozilla/5.0 (Windows 98) AppleWebKit/5352 (KHTML, like Gecko) Chrome/14.0.867.0 Safari/5352'),
(44, 'Emile Rempel', 'barton.torrance@yahoo.com', 'Dolore reiciendis omnis veritatis qui est asperiores veniam.', 'Mozilla/5.0 (Windows NT 5.0) AppleWebKit/5322 (KHTML, like Gecko) Chrome/13.0.854.0 Safari/5322'),
(45, 'Shemar King', 'gutmann.izaiah@bergnaumwyman.biz', 'Voluptas quas dolor recusandae laborum.', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_5) AppleWebKit/5362 (KHTML, like Gecko) Chrome/14.0.825.0 Safari/5362'),
(46, 'Aniya Hegmann', 'legros.marley@hotmail.com', 'Sapiente qui aut et incidunt.', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5360 (KHTML, like Gecko) Chrome/14.0.890.0 Safari/5360'),
(47, 'Lily Ruecker', 'jarret.herzog@ryanpouros.org', 'Molestiae minima doloremque ex minus sint.', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_7_8) AppleWebKit/5330 (KHTML, like Gecko) Chrome/14.0.867.0 Safari/5330'),
(48, 'Ozella Russel', 'mckayla20@yahoo.com', 'Quo sed iusto recusandae qui dicta voluptatem.', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_9) AppleWebKit/5320 (KHTML, like Gecko) Chrome/14.0.824.0 Safari/5320'),
(49, 'Abe Becker', 'elizabeth.maggio@kreigerkreiger.com', 'Aut autem reiciendis iure est aut quos.', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5321 (KHTML, like Gecko) Chrome/14.0.803.0 Safari/5321'),
(50, 'Maximus Roob', 'luettgen.llewellyn@hotmail.com', 'Corporis esse et quia qui ipsa et voluptatum.', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5322 (KHTML, like Gecko) Chrome/14.0.810.0 Safari/5322'),
(51, 'Athena Simonis I', 'esteban32@treutel.com', 'Qui vero nihil minima distinctio quo.', 'Mozilla/5.0 (Windows NT 5.01) AppleWebKit/5310 (KHTML, like Gecko) Chrome/15.0.841.0 Safari/5310'),
(52, 'Prof. Giles Marvin', 'wuckert.rose@jenkinshermann.org', 'Vitae dolorem eveniet voluptatem commodi perspiciatis.', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/5310 (KHTML, like Gecko) Chrome/13.0.800.0 Safari/5310'),
(53, 'Dr. Lucie Hansen', 'pmarvin@roob.com', 'Amet soluta autem qui est itaque in.', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5330 (KHTML, like Gecko) Chrome/15.0.805.0 Safari/5330'),
(54, 'Prof. Elmer Howe', 'onie51@murazik.net', 'Illo ut ex harum nisi aut.', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_2) AppleWebKit/5310 (KHTML, like Gecko) Chrome/13.0.886.0 Safari/5310'),
(55, 'Brody Brakus', 'bdibbert@hotmail.com', 'Itaque aut consequuntur quam ut.', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5332 (KHTML, like Gecko) Chrome/14.0.857.0 Safari/5332'),
(56, 'Dr. Mark Okuneva', 'hills.ansel@hotmail.com', 'Incidunt voluptatem sapiente ut dignissimos.', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5350 (KHTML, like Gecko) Chrome/14.0.895.0 Safari/5350'),
(57, 'Rhiannon Bartoletti V', 'anahi.effertz@tremblay.biz', 'Veritatis et vel qui ea.', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_6_7) AppleWebKit/5330 (KHTML, like Gecko) Chrome/13.0.893.0 Safari/5330'),
(58, 'Darius Koepp', 'raphaelle.dubuque@thielroberts.info', 'Nihil omnis dolore modi nulla.', 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/5332 (KHTML, like Gecko) Chrome/13.0.816.0 Safari/5332'),
(59, 'Lois Padberg', 'aterry@tillman.com', 'Tempore et quaerat vel est beatae laboriosam.', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_7_3) AppleWebKit/5320 (KHTML, like Gecko) Chrome/15.0.828.0 Safari/5320'),
(60, 'Dr. Emmanuelle Marquardt IV', 'gennaro46@hotmail.com', 'Molestiae exercitationem non illo neque sint aut at.', 'Mozilla/5.0 (Windows CE) AppleWebKit/5331 (KHTML, like Gecko) Chrome/15.0.803.0 Safari/5331'),
(61, 'Winnifred Rippin', 'annabell92@romaguera.com', 'Accusantium ex voluptatem eos totam.', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_4) AppleWebKit/5361 (KHTML, like Gecko) Chrome/14.0.845.0 Safari/5361'),
(62, 'Emmanuel Koch', 'noelia04@gusikowskimarks.net', 'Ducimus dolores aut alias nam nobis.', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5330 (KHTML, like Gecko) Chrome/14.0.892.0 Safari/5330'),
(63, 'Francisco Bailey', 'kkemmer@gmail.com', 'Tempore sint voluptatem suscipit.', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1) AppleWebKit/5342 (KHTML, like Gecko) Chrome/13.0.803.0 Safari/5342'),
(64, 'Marcelino Gaylord', 'gislason.alphonso@hotmail.com', 'Tempora occaecati deleniti libero.', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_8_2) AppleWebKit/5332 (KHTML, like Gecko) Chrome/13.0.885.0 Safari/5332'),
(65, 'Emely Hahn', 'josiane.harber@ebert.info', 'Et possimus veritatis tenetur minus.', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_5_5) AppleWebKit/5352 (KHTML, like Gecko) Chrome/13.0.832.0 Safari/5352'),
(66, 'Nettie Nitzsche', 'judge.emard@yahoo.com', 'Ullam ullam molestias eos officia optio voluptatem ex.', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_7) AppleWebKit/5350 (KHTML, like Gecko) Chrome/14.0.848.0 Safari/5350'),
(67, 'Mr. Alexandre Leffler I', 'aiyana53@boehm.com', 'Est et consequatur eos sint dicta reprehenderit fugit atque.', 'Mozilla/5.0 (Windows NT 5.2) AppleWebKit/5310 (KHTML, like Gecko) Chrome/13.0.878.0 Safari/5310'),
(68, 'Lulu Lind', 'jwisozk@bartonkautzer.biz', 'Blanditiis quia repellat dolore perferendis ut enim quisquam.', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5351 (KHTML, like Gecko) Chrome/14.0.838.0 Safari/5351'),
(69, 'Reed Goldner', 'smcdermott@sanford.com', 'Officia ut minima ut laborum.', 'Mozilla/5.0 (Windows NT 5.0) AppleWebKit/5350 (KHTML, like Gecko) Chrome/13.0.837.0 Safari/5350'),
(70, 'Laila Will', 'morar.theodore@gmail.com', 'Omnis molestiae sint ab rem consequatur consequatur quia.', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5341 (KHTML, like Gecko) Chrome/13.0.812.0 Safari/5341'),
(71, 'Gene Labadie', 'feeney.erich@morissettehintz.org', 'Ipsam at voluptas occaecati adipisci repellendus officia.', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5351 (KHTML, like Gecko) Chrome/13.0.876.0 Safari/5351'),
(72, 'Macie Toy Jr.', 'kspencer@yahoo.com', 'Doloremque eum quo facilis asperiores.', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_5_8) AppleWebKit/5340 (KHTML, like Gecko) Chrome/13.0.863.0 Safari/5340'),
(73, 'Prof. Aleen Hoppe', 'liam33@hotmail.com', 'Quis praesentium sunt modi inventore sed qui blanditiis esse.', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6) AppleWebKit/5360 (KHTML, like Gecko) Chrome/14.0.872.0 Safari/5360'),
(74, 'Prof. D''angelo Cole PhD', 'elmer.schinner@hotmail.com', 'Unde et officiis perspiciatis et neque ut officia eaque.', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_8_1) AppleWebKit/5361 (KHTML, like Gecko) Chrome/15.0.819.0 Safari/5361'),
(75, 'Rosalyn Jones', 'virginia51@macejkovic.org', 'Id aspernatur veritatis consequatur repellat impedit eligendi.', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5342 (KHTML, like Gecko) Chrome/13.0.867.0 Safari/5342'),
(76, 'Araceli Stracke', 'rnader@vondouglas.info', 'Magnam ut molestiae alias libero non est expedita magnam.', 'Mozilla/5.0 (Windows 98) AppleWebKit/5311 (KHTML, like Gecko) Chrome/15.0.868.0 Safari/5311'),
(77, 'Bette Erdman', 'walker.leland@cummerata.com', 'Iure occaecati a libero voluptatibus vel.', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5350 (KHTML, like Gecko) Chrome/15.0.865.0 Safari/5350'),
(78, 'Prof. Jovany Emard', 'jermey.mclaughlin@ziemannsmith.org', 'Incidunt non cumque odio praesentium eos.', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_7_6) AppleWebKit/5340 (KHTML, like Gecko) Chrome/14.0.835.0 Safari/5340'),
(79, 'Mrs. Sandy Funk', 'jlittel@labadie.org', 'Ut et qui sunt blanditiis.', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_8_6) AppleWebKit/5310 (KHTML, like Gecko) Chrome/13.0.860.0 Safari/5310'),
(80, 'Mr. Gardner Purdy III', 'gabriella.reynolds@yahoo.com', 'Impedit facilis delectus aliquid eius.', 'Mozilla/5.0 (Windows NT 4.0) AppleWebKit/5321 (KHTML, like Gecko) Chrome/14.0.819.0 Safari/5321'),
(81, 'Maud Mayert', 'wyman.raegan@gmail.com', 'Error qui ullam ut consequatur iste.', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_6_0) AppleWebKit/5312 (KHTML, like Gecko) Chrome/13.0.865.0 Safari/5312'),
(82, 'Alison Bayer', 'charity40@klocko.com', 'Cum qui quod quae iure sapiente.', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_8_9) AppleWebKit/5310 (KHTML, like Gecko) Chrome/15.0.874.0 Safari/5310'),
(83, 'Georgiana Rosenbaum III', 'candida.ondricka@schulistschultz.com', 'Voluptas iusto autem aut culpa enim omnis.', 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/5311 (KHTML, like Gecko) Chrome/15.0.847.0 Safari/5311'),
(84, 'Prof. Tracey Stoltenberg PhD', 'lbins@hotmail.com', 'Voluptas voluptatem id qui ad quaerat eos numquam aliquam.', 'Mozilla/5.0 (Windows 95) AppleWebKit/5362 (KHTML, like Gecko) Chrome/13.0.861.0 Safari/5362'),
(85, 'Marlon Goyette IV', 'geovany16@yahoo.com', 'Est aliquid repudiandae dignissimos doloribus sunt eum.', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5362 (KHTML, like Gecko) Chrome/14.0.813.0 Safari/5362'),
(86, 'Ms. Rosalind Kuphal V', 'brandy.ullrich@yahoo.com', 'Aut eos voluptates fugiat ut aut.', 'Mozilla/5.0 (Windows 95) AppleWebKit/5330 (KHTML, like Gecko) Chrome/15.0.879.0 Safari/5330'),
(87, 'Miss Maxie Feil', 'candelario00@gmail.com', 'Sapiente tempore cupiditate est doloremque neque ad.', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_7_1) AppleWebKit/5311 (KHTML, like Gecko) Chrome/14.0.849.0 Safari/5311'),
(88, 'Sam Jaskolski', 'wchamplin@gmail.com', 'Nisi aut et sed accusamus in quas iste.', 'Mozilla/5.0 (Windows CE) AppleWebKit/5340 (KHTML, like Gecko) Chrome/13.0.822.0 Safari/5340'),
(89, 'Mrs. Esta Powlowski', 'mohammad.wiegand@yahoo.com', 'Qui sunt molestias quas repudiandae.', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5320 (KHTML, like Gecko) Chrome/15.0.807.0 Safari/5320'),
(90, 'Prof. Laila Roberts', 'arjun78@yahoo.com', 'Et et deleniti deleniti dolores nulla eligendi nulla numquam.', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1) AppleWebKit/5311 (KHTML, like Gecko) Chrome/14.0.870.0 Safari/5311'),
(91, 'Zoila Kreiger', 'eli.hudson@gmail.com', 'Enim dolore amet qui quas minima.', 'Mozilla/5.0 (Windows 98) AppleWebKit/5362 (KHTML, like Gecko) Chrome/13.0.802.0 Safari/5362'),
(92, 'Lottie Cremin', 'dubuque.nikita@weissnat.com', 'Nam modi et rerum.', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5341 (KHTML, like Gecko) Chrome/15.0.829.0 Safari/5341'),
(93, 'Melisa Rowe II', 'dsanford@yahoo.com', 'Similique nihil et et molestias.', 'Mozilla/5.0 (Windows NT 5.0) AppleWebKit/5321 (KHTML, like Gecko) Chrome/14.0.807.0 Safari/5321'),
(94, 'Rhiannon Adams', 'herman.maryse@renner.com', 'Nihil cum rerum voluptatum ipsa.', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/5310 (KHTML, like Gecko) Chrome/15.0.870.0 Safari/5310'),
(95, 'Kattie Lesch', 'joy64@ebert.com', 'Dolores dolor minima et consequatur.', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_7_4) AppleWebKit/5342 (KHTML, like Gecko) Chrome/13.0.805.0 Safari/5342'),
(96, 'Paris Gislason', 'franecki.astrid@gmail.com', 'Veritatis qui voluptatibus est ut.', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5341 (KHTML, like Gecko) Chrome/13.0.876.0 Safari/5341'),
(97, 'Miss Precious Hahn Sr.', 'creola83@powlowskikshlerin.com', 'Qui facilis omnis distinctio modi debitis rerum debitis.', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_7_0) AppleWebKit/5310 (KHTML, like Gecko) Chrome/14.0.847.0 Safari/5310'),
(98, 'Clark Heaney', 'robert26@bechtelarjacobson.net', 'Doloremque ut sunt doloribus in sit et asperiores.', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_7_1) AppleWebKit/5341 (KHTML, like Gecko) Chrome/13.0.875.0 Safari/5341');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` int(9) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `handphone_pegawai` varchar(255) NOT NULL,
  `jabatan_pegawai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nama_pegawai`, `handphone_pegawai`, `jabatan_pegawai`) VALUES
(49, 'AKBAR PATONANGI', '-', 'MANAJER'),
(50, 'MUHAMMAD GHAZALI AL GHIFARI', '-', 'MANAGER BAGIAN OPERASI'),
(51, 'DWI PRASETYA', '-', 'MANAGER BAGIAN FASOP'),
(52, 'ISDIANTA SAPUTRA', '-', 'SPV RTU & PERIPHERAL'),
(53, 'RIZKY FADLIANSYAH', '-', 'PLT SPV SCADA & TELEKOMUNIKASI'),
(54, 'HENNY ARIYANTI', '-', 'MANAGER BAGIAN KSA'),
(55, 'HERU APRIANTO', '-', 'PEJABAT PELAKSANA PENGADAAN'),
(56, 'DESTI ERWITA SARI', '-', 'PLT PEJABAT PELAKSANA K3L'),
(57, 'KARMILA', '-', 'SPV KEUANGAN DAN AKUNTANSI'),
(58, 'MELIYANTI', '-', 'SPV SDM & ADMINISTRASI'),
(59, 'ROLI SIMATUPANG', '-', 'SPV PROTEKSI DAN METER'),
(60, 'YOSSA PERDANA', '-', 'SPV PERENCANAAN DAN EVALUASI OPERASI'),
(61, 'ANDRI AGUS SASMANTO', '-', 'SPV OPERASI'),
(62, 'BURHANUDDIN', '-', 'ASSISTANT OPERATOR PENGATURAN OPERASI'),
(63, 'SUHARJO', '-', 'ASSISTANT OFFICER ADMINISTRASI & UMUM'),
(64, 'NITA ANGELINA', '-', 'JUNIOR ANALYST KEUANGAN & AKUNTANSI'),
(65, 'SRI SULASTRI UTARI', '-', 'JUNIOR OFFICER ADMINISTRASI PENGADAAN'),
(66, 'WISNU KURNIAWAN SODIQ', '-', 'SVP PERENCANAAN SCADA'),
(67, 'ELITA KEMALA SARI', '-', 'ASSISTANT ENGINEER PERENCANAAN  SCADA'),
(68, 'FRIDARELA SEPTIANI', '-', 'ASISSTANT ANALYST KINERJA'),
(69, 'IMAM TARMIZI', '-', 'JUNIOR TECHNICIAN POWER SUPPLY & PERALATAN PENDUKUNG'),
(70, 'YOGI WARSOYO', '-', 'JUNIOR ENGINEER SCADA & TELEKOMUNIKASI'),
(71, 'ZULFAHMI ISLAMI', '-', 'ASSISTANT ENGINEER PEMELIHARAAN RTU'),
(72, 'ILHAM RIMANZAH', '-', 'ASSISTANT ENGINEER PERENCANAAN OPERASI'),
(73, 'RIVALDY PENTA SULASTANTO', '-', 'SUPERVISOR PEMELIHARAAN ELEKTROMEKANIK'),
(74, 'ASEP JUNAIDI', '-', 'JUNIOR OPERATOR PENGATURAN OPERASI'),
(75, 'MUHAMMAD YUNUS', '-', 'PLT SPV PERENCANAAN PEMELIHARAAN'),
(76, 'DICKY HERLAMBANG', '-', 'PLT SPV PENGELOLAAN DATA DAN GAMBAR'),
(77, 'SEPTIAN NUGRAHA', '-', 'JUNIOR OPERATOR PENGATURAN OPERASI'),
(78, 'ARIYANTO', '-', 'JUNIOR OPERATOR PENGATURAN OPERASI'),
(79, 'RIAN HIDAYAT', '-', 'JUNIOR OPERATOR PENGATURAN OPERASI'),
(80, 'PUTRA WIJAYA', '-', 'JUNIOR OPERATOR PENGATURAN OPERASI'),
(81, 'EFAN SAFITRA', '-', 'JUNIOR OPERATOR PENGATURAN OPERASI'),
(82, 'GANDI CHANDRA', '-', 'JUNIOR OPERATOR PENGATURAN OPERASI'),
(83, 'ELVIS VIKRAM NOVALDO', '-', 'JUNIOR OPERATOR PENGATURAN OPERASI'),
(84, 'DINA  JULIYANTI', '-', 'JUNIOR OFFICER LOGISTIK'),
(85, 'SITI MAKWA', '-', 'JUNIOR OFFICER ADMINISTRASI & UMUM'),
(86, 'VERA ROSALINA', '-', 'ASSISTANT ENGINEER SCADA & TELEKOMUNIKASI'),
(87, 'FIKKY SYOFYAN', '-', 'ASSISTANT ENGINEER SCADA & TELEKOMUNIKASI'),
(88, 'BASRI HADI', '-', 'ASSISTANT ENGINEER PEMELIHARAAN RTU'),
(89, 'ANGGA RENALDI', '-', 'JUNIOR OPERATOR PENGATURAN OPERASI'),
(90, 'DENNY DARMAWAN', '-', 'JUNIOR OPERATOR PENGATURAN OPERASI'),
(91, 'ENDANG MIRAH AYU', '-', 'JUNIOR ANALYST KEUANGAN & AKUNTANSI'),
(92, 'ANGGA RAKATA', '-', 'JUNIOR ENGINEER PERENCANAAN PEMELIHARAAN'),
(93, 'JIMMI ADRIAN', '-', 'JE PROTEKSI DAN METER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_saran`
--

CREATE TABLE `tbl_saran` (
  `id_saran` int(11) NOT NULL,
  `customRadioInline1` varchar(50) NOT NULL,
  `saran` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_saran`
--

INSERT INTO `tbl_saran` (`id_saran`, `customRadioInline1`, `saran`) VALUES
(1, '1', 'eq'),
(3, '1', 'dsadafsa'),
(4, '0', 'asdsads'),
(5, '1', 'sdasd'),
(6, '1', 'sadsadsad'),
(7, '1', 'asdsadsad'),
(9, '1', 'asdsad'),
(10, '1', 'sadsadsa'),
(11, '0', 'asdsadsa'),
(12, '1', 'asdsad'),
(13, '0', 'asdsadsa'),
(14, '1', 'asdsadsa'),
(15, '1', 'Jl. Kapten A. Rivai No.37, Sungai Pangeran, Kec. Ilir Tim. I\r\nKota Palembang, Sumatera Selatan 30127Jl. Kapten A. Rivai No.37, Sungai Pangeran, Kec. Ilir Tim. I\r\nKota Palembang, Sumatera Selatan 30127Jl. Kapten A. Rivai No.37, Sungai Pangeran, Kec. Ilir Tim. I\r\nKota Palembang, Sumatera Selatan 30127Jl. Kapten A. Rivai No.37, Sungai Pangeran, Kec. Ilir Tim. I\r\nKota Palembang, Sumatera Selatan 30127'),
(16, '1', 'PLN Sangat melayani dengan baik'),
(17, '1', '<img src="<?= base_url();?>assets/buku/img/logo6.png" width="150px" height="" class="d-inline-block align-top" alt="logo">'),
(18, '0', '<img src="<?= base_url();?>assets/buku/img/logo6.png" width="150px" height="" class="d-inline-block align-top" alt="logo">'),
(19, '1', '<img src="<?= base_url();?>assets/buku/img/logo6.png" width="150px" height="" class="d-inline-block align-top" alt="logo">'),
(20, '1', '<img src="<?= base_url();?>assets/buku/img/logo6.png" width="150px" height="" class="d-inline-block align-top" alt="logo">'),
(21, '0', '<img src="<?= base_url();?>assets/buku/img/logo6.png" width="150px" height="" class="d-inline-block align-top" alt="logo">'),
(22, '0', '<img src="<?= base_url();?>assets/buku/img/logo6.png" width="150px" height="" class="d-inline-block align-top" alt="logo">'),
(23, '0', '<img src="<?= base_url();?>assets/buku/img/logo6.png" width="150px" height="" class="d-inline-block align-top" alt="logo">'),
(24, '1', '<img src="<?= base_url();?>assets/buku/img/logo6.png" width="150px" height="" class="d-inline-block align-top" alt="logo">'),
(25, '0', '<img src="<?= base_url();?>assets/buku/img/logo6.png" width="150px" height="" class="d-inline-block align-top" alt="logo">'),
(26, '1', '<img src="<?= base_url();?>assets/buku/img/logo6.png" width="150px" height="" class="d-inline-block align-top" alt="logo">'),
(27, '0', '<img src="<?= base_url();?>assets/buku/img/logo6.png" width="150px" height="" class="d-inline-block align-top" alt="logo">'),
(28, '0', '<img src="<?= base_url();?>assets/buku/img/logo6.png" width="150px" height="" class="d-inline-block align-top" alt="logo">'),
(29, '1', '<img src="<?= base_url();?>assets/buku/img/logo6.png" width="150px" height="" class="d-inline-block align-top" alt="logo">'),
(30, '0', '<img src="<?= base_url();?>assets/buku/img/logo6.png" width="150px" height="" class="d-inline-block align-top" alt="logo">'),
(31, '1', 'wqewqeqweqwe'),
(32, '0', 'qwewqeqwe'),
(33, '0', 'qwewqewqe'),
(34, '1', 'SDSADSADAS'),
(35, '0', 'QWEWQEWQE'),
(36, '1', 'ee'),
(37, '1', 'kkkk'),
(38, '1', 'dfghj'),
(40, '1', 'hhhk'),
(42, '0', 'PLn itu jelek'),
(43, '1', 'sdasd'),
(46, '1', 'asas'),
(47, '1', 'qwqwqwq'),
(48, '1', 'Amal Itu Ganteng'),
(49, '1', 'PLN TERBAIK                         ADADADADADADADAD'),
(50, '1', 'naik seklai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_satpam`
--

CREATE TABLE `tbl_satpam` (
  `id_satpam` int(11) NOT NULL,
  `nama_satpam` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_satpam`
--

INSERT INTO `tbl_satpam` (`id_satpam`, `nama_satpam`) VALUES
(7, 'Adi Putra'),
(8, 'Sofiansyah'),
(9, 'Furqon'),
(10, 'M Bukhori'),
(11, 'Firman'),
(12, 'Alan Sanjaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `id_tamu` int(11) NOT NULL,
  `nomor_tamu` varchar(50) NOT NULL,
  `no_hp_tamu` int(20) NOT NULL,
  `tanggal_tamu` varchar(20) NOT NULL,
  `nama_satpam` varchar(128) NOT NULL,
  `bukti_tamu` varchar(50) NOT NULL,
  `jam_masuk_tamu` varchar(10) NOT NULL,
  `menemui_tamu` varchar(50) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `jam_keluar_tamu` varchar(10) DEFAULT NULL,
  `keterangan_tamu` varchar(256) NOT NULL,
  `photo_tamu` varchar(50) DEFAULT NULL,
  `status_tamu` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`id_tamu`, `nomor_tamu`, `no_hp_tamu`, `tanggal_tamu`, `nama_satpam`, `bukti_tamu`, `jam_masuk_tamu`, `menemui_tamu`, `nama_tamu`, `jam_keluar_tamu`, `keterangan_tamu`, `photo_tamu`, `status_tamu`) VALUES
(19, '1213131', 123123, '0000-00-00', 'Raven', 'KTM', '20:49:12', 'Henriette', 'askjasjh', '10:11:46', '54678', NULL, 'Selesai'),
(36, '122', 123123, '0000-00-00', 'Raven', 'SIM', '09:49:09 ', 'Stephan', 'heru', NULL, 'ssdsds', NULL, 'Proses'),
(37, '122', 123123, '0000-00-00', 'Raven', 'SIM', '09:49:09 ', 'Stephan', 'heru', NULL, 'ssdsds', NULL, 'Proses'),
(38, '122', 123123, '0000-00-00', 'Raven', 'SIM', '09:49:09 ', 'Stephan', 'heru', NULL, 'ssdsds', NULL, 'Proses'),
(39, '122', 123123, '0000-00-00', 'Raven', 'SIM', '09:49:09 ', 'Stephan', 'heru', NULL, 'ssdsds', NULL, 'Proses'),
(40, '122', 123123, '0000-00-00', 'Raven', 'SIM', '09:49:09 ', 'Stephan', 'heru', NULL, 'ssdsds', NULL, 'Proses'),
(41, '122', 123123, '0000-00-00', 'Raven', 'SIM', '09:49:09 ', 'Stephan', 'heru', NULL, 'ssdsds', NULL, 'Proses'),
(42, '122', 123123, '0000-00-00', 'Raven', 'SIM', '09:49:09', 'Stephan', 'heru', '10:32:03', 'ssdsds', NULL, 'Selesai'),
(43, '122', 123123, '0000-00-00', 'Raven', 'SIM', '09:49:09', 'Stephan', 'heru', '11:40:15', 'ssdsds', NULL, 'Selesai'),
(44, '122', 123123, '0000-00-00', 'Raven', 'SIM', '09:49:09', 'Stephan', 'heru', '11:40:03', 'ssdsds', NULL, 'Selesai'),
(45, '12312312323', 12121, '0000-00-00', 'Agung', 'Ktp', '11:18:47', 'Henriette', 'angel', '11:39:54', 'adsadsad', NULL, 'Selesai'),
(46, '1213131', 12121, '0000-00-00', 'Agung', 'Ktp', '11:18:47', 'Henriette', 'angel', '11:39:43', 'adsadsad', NULL, 'Selesai'),
(47, '1213131', 123123, '0000-00-00', 'Agung', 'KTM', '11:20:21', 'Stephan', 'okti', '11:39:32', 'erewr', NULL, 'Selesai'),
(48, '1213131', 123123, '0000-00-00', 'Agung', 'KTM', '11:20:21', 'Stephan', 'okti', '11:38:53', 'erewr', NULL, 'Selesai'),
(49, '1213131', 123123, '0000-00-00', 'Agung', 'SIM', '11:20:57', 'Alvaaaaaaa', 'qweqwe', '11:29:48', 'ssdsds', NULL, 'Selesai'),
(50, '1213131', 121212, '0000-00-00', 'Agung', 'KTM', '11:22:18', 'Stephan', 'okti', '11:29:41', 'erewr', NULL, 'Selesai'),
(51, '1213131', 123123, '0000-00-00', 'Agung', 'SIM', '11:23:45', 'Alvaaaaaaa', 'okti', '11:29:35', 'ssdsds', NULL, 'Selesai'),
(52, '1222', 1222, '0000-00-00', 'Raven', 'SIM', '11:23:45', 'Stephan', 'okti', '11:29:25', 'erewr', NULL, 'Selesai'),
(53, '1213131', 121212, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '14:31:52 ', '---Menemui---', 'qweqwe', NULL, 'erewr', NULL, 'Proses'),
(54, '122', 121212, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:05:56 ', '---Menemui---', 'qweqwe', NULL, 'erewr', NULL, 'Proses'),
(55, '122', 121212, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:14:04 ', '---Menemui---', 'qweqwe', NULL, 'erewr', NULL, 'Proses'),
(56, '122', 121212, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:14:04 ', '---Menemui---', 'qweqwe', NULL, 'erewr', NULL, 'Proses'),
(57, '1213131', 123123, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:15:23 ', '---Menemui---', 'qweqwe', NULL, 'erewr', NULL, 'Proses'),
(58, '1213131', 123123, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:15:23 ', '---Menemui---', 'qweqwe', NULL, 'erewr', NULL, 'Proses'),
(59, '1213131', 123123, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:15:23 ', '---Menemui---', 'qweqwe', NULL, 'erewr', NULL, 'Proses'),
(60, '1213131', 123123, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:15:23 ', '---Menemui---', 'qweqwe', NULL, 'erewr', NULL, 'Proses'),
(61, '1213131', 123123, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:15:23 ', '---Menemui---', 'qweqwe', NULL, 'erewr', NULL, 'Proses'),
(62, '1213131', 123123, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:15:23 ', '---Menemui---', 'qweqwe', NULL, 'erewr', NULL, 'Proses'),
(63, '1213131', 123123, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:15:23 ', '---Menemui---', 'qweqwe', NULL, 'erewr', NULL, 'Proses'),
(64, '1213131', 123123, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:15:23', '---Menemui---', 'qweqwe', '11:04:08', 'erewr', NULL, 'Selesai'),
(65, '122', 121212, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:28:44 ', '---Menemui---', 'qweqwe', NULL, 'erewr', NULL, 'Proses'),
(66, '1213131', 35467890, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:30:22 ', '---Menemui---', 'askjasjh', NULL, '54678', NULL, 'Proses'),
(67, '1213131', 121212, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:31:06 ', '---Menemui---', 'qweqwe', NULL, 'ssdsds', NULL, 'Proses'),
(68, '1213131', 123123, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:41:49', '---Menemui---', 'okti', '13:00:42', 'ssdsds', NULL, 'Selesai'),
(69, '12234', 12121, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:42:55', '---Menemui---', 'askjasjh', '13:04:32', '121', NULL, 'Selesai'),
(70, '12234', 123123, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:42:55', '---Menemui---', 'askjasjh', '13:31:45', 'ssdsds', NULL, 'Selesai'),
(71, '1213131', 121212, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:52:46', '---Menemui---', 'okti', '11:54:39', 'erewr', NULL, 'Selesai'),
(73, '12234', 35467890, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '16:56:02', '---Menemui---', 'heruuuu ganteng bat anj', '13:04:58', 'tfghjk', NULL, 'Selesai'),
(74, '1213131', 121212, '0000-00-00', 'Raven', 'SIM', '16:56:02', 'Jeromy', 'qweqwe', '20:55:55', 'erewr', NULL, 'Selesai'),
(75, '122', 121212, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '20:16:34', '---Menemui---', 'qweqwe', '20:55:48', 'ssdsds', NULL, 'Selesai'),
(76, '122', 123123, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '20:16:34', '---Menemui---', 'qweqwe', '20:55:41', 'erewr', NULL, 'Selesai'),
(80, '122', 121212, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '10:46:09', '---Menemui---', 'qweqwe', '11:41:21', 'erewr', NULL, 'Selesai'),
(81, '1213131', 123123, '0000-00-00', '---Pilih Nama Satpam---', '---Pilih Bukti Diri---', '10:46:09 ', '---Menemui---', 'okti', NULL, 'erewr', NULL, 'Proses'),
(83, '1213131', 123123, '0000-00-00', '---Pilih Nama Satpam---', 'SIM', '10:54:34', '---Menemui---', 'qweqwe', '10:42:01', 'ssdsds', NULL, 'Selesai'),
(84, '122', 121212, '0000-00-00', '---Pilih Nama Satpam---', 'KTM', '11:00:42', '---Menemui---', 'okti', '11:41:27', 'erewr', NULL, 'Selesai'),
(85, '1213131', 121212, '0000-00-00', 'Agung', 'SIM', '11:14:36', 'Makayla', 'okti', '11:41:33', 'erewr', NULL, 'Selesai'),
(86, '1213131', 12121, '0000-00-00', 'Raven', 'KTM', '11:14:36', 'Jeromy', 'okti', '11:41:38', 'erewr', NULL, 'Selesai'),
(87, '122', 121212, '0000-00-00', 'Raven', 'SIM', '11:32:50', 'Alvaaaaaaa', 'okti', '11:41:44', 'ssdsds', NULL, 'Selesai'),
(88, '122', 123123, '0000-00-00', 'Agung', 'SIM', '11:32:50', 'Adrien', 'qweqwe', '14:48:49', '121', NULL, 'Selesai'),
(93, '122', 121212, '0000-00-00', 'Agung', 'SIM', '12:04:04', 'Kenyon', 'qweqwe', '14:27:59', 'ssdsds', '1570511066.jpg', 'Selesai'),
(94, '1213131', 121212, '0000-00-00', 'Agung', 'SIM', '12:37:08', 'Stephan', 'okti', '14:27:36', 'erewr', '1570513057.jpg', 'Selesai'),
(95, '1213131', 123123, '0000-00-00', 'Heru', 'Ktp', '12:37:08', 'Alvaaaaaaa', 'qweqwe', '14:16:35', 'erewr', '1570515892.jpg', 'Selesai'),
(96, '12312312323', 123123, '0000-00-00', 'Amal', 'KTM', '13:24:57', 'Stephan', 'okti', '14:15:04', '121', '1570516463.jpg', 'Selesai'),
(97, '1213131', 123123, '0000-00-00', 'Agung', 'KTM', '13:24:57', 'Alvaaaaaaa', 'okti', '14:29:43', 'erewr', '1570519736.jpg', 'Selesai'),
(98, '1213131', 121212, '0000-00-00', 'Agung', 'SIM', '14:50:20', 'Stephan', 'Ikhlasul Amal', '22:41:45', 'erewr', '1570521507.jpg', 'Selesai'),
(99, '1213131', 121212, '0000-00-00', 'Heru', 'SIM', '15:35:13', 'Nils', 'okti', '22:42:28', 'ssdsds', '1570523733.jpg', 'Selesai'),
(100, '1213131', 121212, '0000-00-00', 'Agung', 'SIM', '09:40:37', 'Nils', 'okti', '09:46:33', 'ssdsds', '1570675270.jpg', 'Selesai'),
(101, '122', 123123, '0000-00-00', 'Heru', 'Kartu Pegawai', '14:50:06', 'Lenora', 'qweqwe', '13:21:06', 'ssdsds', '1570693830.jpg', 'Selesai'),
(102, '1213131', 12121, '0000-00-00', 'Agung', 'KTM', '15:29:51', 'Nils', 'okti', '15:53:59', 'ssdsds', '1570696207.jpg', 'Selesai'),
(103, '122', 123123, '0000-00-00', 'Amal', 'KTP', '15:35:21', 'Stephan', 'okti', '10:15:18', 'erewr', '1570696547.jpg', 'Selesai'),
(104, '1213131', 121212, '0000-00-00', 'Raven', 'KTP', '01:17:33', 'Nils', 'qweqwe', '01:20:57', 'ssdsds', '1571595490.jpg', 'Selesai'),
(105, '122', 121212, '0000-00-00', 'Agung', 'KTP', '01:26:16', 'Nils', 'qweqwe', '10:13:32', 'ssdsds', '1571596023.jpg', 'Selesai'),
(106, '1213131', 123123, '0000-00-00', 'Raven', 'SIM', '08:27:21', 'Nils', 'okti', '10:13:25', '121', '1571621263.jpg', 'Selesai'),
(107, '1213131', 121212, '0000-00-00', 'Agung', 'KTP', '08:34:41', 'Effie', 'okti', '10:13:42', 'ssdsds', '1571621710.jpg', 'Selesai'),
(108, '1213131', 123123, '0000-00-00', 'Raven', 'SIM', '08:38:17', 'Gregorio', 'qweqwe', '12:53:52', 'ssdsds', '1571621924.jpg', 'Selesai'),
(109, '1213131', 121212, '0000-00-00', 'Agung', 'KTP', '09:00:07', 'Stephan', 'okti', '12:53:44', 'ssdsds', '1571623263.jpg', 'Selesai'),
(110, '122', 121212, '0000-00-00', 'Heru', 'KTM', '09:09:40', 'Lenora', 'okti', '12:53:33', '121', '1571623816.jpg', 'Selesai'),
(111, '122', 121212, '0000-00-00', 'Amal', 'SIM', '12:51:47', 'Ceasar', 'amal', '12:53:16', 'adsadsad', '1571637142.jpg', 'Selesai'),
(112, '1213131', 121212, '0000-00-00', 'Raven', 'SIM', '13:39:27', 'Stephan', 'qweqwe', '10:12:53', 'ssdsds', '1571726403.jpg', 'Selesai'),
(115, '122', 121212, '0000-00-00', 'Agung', 'KTP', '13:00:40', 'Jeromy', 'ERTYUI', '13:30:43', 'ssdsds', '1571810460.jpg', 'Selesai'),
(116, '122', 121212, '0000-00-00', 'Raven', 'KTP', '13:13:58', 'Henriette', 'qweqwe', '13:29:01', 'sdsd', '1571811269.jpg', 'Selesai'),
(117, '122', 121212, '0000-00-00', 'Raven', 'SIM', '13:31:22', 'Gregorio', 'amal', '13:33:48', 'asas', '1571812324.jpg', 'Selesai'),
(118, '122', 121212, '0000-00-00', 'Agung', 'KTM', '09:00:12', 'Effie', 'qweqwe', '10:32:13', 'ssdsds', '1571882449.jpg', 'Selesai'),
(119, '1212', 213456, '0000-00-00', 'Agung', 'SIM', '15:37:14', 'Stephan', 'amal', '15:38:13', 'amal', '1571906266.jpg', 'Selesai'),
(120, '12212', 1212, '0000-00-00', 'Agung', 'SIM', '15:39:23', 'Myriam', 'asasa', '15:40:36', 'asasa', '1571906401.jpg', 'Selesai'),
(121, '122', 35467890, '0000-00-00', 'Raven', 'KTP', '16:06:41', 'Ceasar', 'okti', '16:07:48', '54678', '1571908029.jpg', 'Selesai'),
(122, '1213131', 123123, '0000-00-00', 'Raven', 'Kartu Pegawai', '16:11:32', 'Jasen', 'amal', '08:14:03', 'adsadsad', '1571994716.jpg', 'Selesai'),
(123, '1213131', 121212, '0000-00-00', 'Raven', 'SIM', '08:12:48', 'Myriam', 'amal', '08:13:58', 'ssdsds', '1572311594.jpg', 'Selesai'),
(124, '121', 1212, '0000-00-00', 'Raven', 'KTP', '07:57:07 ', 'Ceasar', 'amal', NULL, 'dfdf', '1572483602.jpg', 'Proses'),
(125, '1213131', 123123, '0000-00-00', 'Raven', 'KTP', '08:23:23 ', 'Jeromy', ' qweqwe', NULL, 'adsadsad', '1572485031.jpg', 'Proses'),
(126, '1213131', 123213, '0000-00-00', 'Agung', 'SIM', '08:25:50', 'Jeromy', 'qweqwe', '08:30:09', 'sdsd', '1572485172.jpg', 'Selesai'),
(127, '123213', 121212, '10-31-2019', 'Raven', 'KTP', '08:27:52', 'Jasen', 'qweqwe', '08:30:03', 'sdsd', '1572485310.jpg', 'Selesai'),
(128, '00011', 2147483647, '10-31-2019', 'Heru', 'Kartu Pegawai', '09:14:30', 'Maureen', 'Wawan', '09:25:11', 'Service AC', '1572488167.jpg', 'Selesai'),
(129, '12222', 12121, '31-Oct-2019', 'Agung', 'SIM', '09:17:10', 'Thelma', 'Agung', '09:24:52', 'asas', '1572488277.jpg', 'Selesai'),
(130, '1213131', 123123, '31-10-2019', 'Raven', 'KTP', '10:59:09', 'Kenyon', 'amal', '13:44:39', 'asas', '1572494387.jpg', 'Selesai'),
(131, '1213131', 121212, '01-11-2019', 'Alan Sanjaya', 'SIM', '13:43:35', 'AKBAR PATONANGI', 'amal', '13:45:03', 'erewr', '1572590697.jpg', 'Selesai'),
(132, '1213131', 121212, '04-11-2019', 'Alan Sanjaya', 'KTP', '10:53:56', 'SRI SULASTRI UTARI', 'amal', '10:54:21', 'erewr', '1572839654.jpg', 'Selesai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_bukti`
--
ALTER TABLE `tbl_bukti`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`),
  ADD KEY `email_kontak` (`email_kontak`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbl_saran`
--
ALTER TABLE `tbl_saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `tbl_satpam`
--
ALTER TABLE `tbl_satpam`
  ADD PRIMARY KEY (`id_satpam`);

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_bukti`
--
ALTER TABLE `tbl_bukti`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `tbl_saran`
--
ALTER TABLE `tbl_saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `tbl_satpam`
--
ALTER TABLE `tbl_satpam`
  MODIFY `id_satpam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
