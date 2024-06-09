-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2024 at 07:29 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040103`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_book_form`
--

CREATE TABLE `tabel_book_form` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_book_form`
--

INSERT INTO `tabel_book_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(1, 'Wi', 'wi2dwiii27@gmail.com', '099878678678', 'java', 'Bandung', 3, '2024-05-25', '2024-05-27'),
(5, 'Maelani', 'maelani@gmail.com', '09090978987', 'Bandung', 'Maliboro', 4, '2024-06-26', '2024-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_destinasi`
--

CREATE TABLE `tabel_destinasi` (
  `id` int NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nama_makanan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_hotel` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_transportasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `harga` varchar(255) NOT NULL,
  `user_iduser` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_destinasi`
--

INSERT INTO `tabel_destinasi` (`id`, `nama_destinasi`, `deskripsi`, `lokasi`, `image`, `nama_makanan`, `nama_hotel`, `nama_transportasi`, `harga`, `user_iduser`) VALUES
(2, 'Bromo Tengger Semeru', 'Wisata Gunung Bromo adalah salah satu tempat wisata di indonesia yang menjadi favorit bagi wisatawan baik dalam negeri maupun luar negeri. Gunung Bromo terletak di Kabupaten Probolinggo. Gunung Bromo memiliki ketinggian sekitar 2392 mdpl. Memiliki kawah yang menjadi objek utama yang sering dikunjungi oleh wisatawan asing maupun lokal. Untuk sampai di bibir kawah, para wisatawan harus menaiki tangga yang cukup panjang.\r\n\r\nGunung Bromo juga di kenal dengan sunrise dan sunsetnya. Tidak hanya pemandangan matahari terbit saja yang menjadi daya tarik utama Gunung Bromo, namun ada banyak sekali tempat wisata di sekitar Gunung Bromo yang jarang di explore oleh wisatawan.', 'Malang, Jawa Timur', '66655286b02ed.jpg', '• Nasi Aron: Nasi ini terbuat dari jagung putih dan biasanya disajikan dengan lauk pauk seperti tempe, tahu, dan sambal.\r\n•  Sawut Kabut: Jajanan ini terbuat dari singkong yang diparut dan dimasak dengan gula merah.', 'Lereng Bromo Hotel: Hotel ini terletak di dekat pintu masuk taman nasional dan menawarkan pemandangan Gunung Bromo yang indah.\r\n', 'Jeep adalah salah satu moda transportasi paling populer untuk berkeliling Taman Nasional Bromo Tengger Semeru.', '• Tour 1 hari: Rp 300.000 - Rp 500.000 per orang\r\n• Tour 2 hari 1 malam: Rp 500.000 - Rp 700.000 per orang\r\n• Tour 3 hari 2 malam: Rp 700.000 - Rp 1.000.000 per orang', 0),
(3, 'Danau Toba', 'Danau Toba adalah danau vulkanik terbesar di dunia yang terletak di Sumatera Utara, Indonesia. Danau ini terbentuk sekitar 74.000 tahun yang lalu akibat letusan gunung berapi supervolcano yang dahsyat. Letusan ini menyebabkan kaldera raksasa dengan panjang 100 kilometer, lebar 30 kilometer, dan kedalaman 505 meter terbentuk. Danau Toba kemudian terisi air dan menjadi danau air tawar terbesar di Asia Tenggara.\r\n\r\nDanau Toba terkenal dengan keindahan alamnya yang luar biasa. Pemandangan danau yang dikelilingi oleh pegunungan hijau, air danau yang jernih, dan Pulau Samosir yang menawan menjadi daya tarik utama bagi wisatawan. Danau Toba juga memiliki budaya dan tradisi yang unik yang masih dilestarikan oleh masyarakat setempat.\r\n', 'Kabupaten Toba Samosir, Sumatera Utara', '6665529e30a86.jpg', '• Ikan Arsik: Ikan arsik adalah ikan mas yang diasap dan dimasak dengan bumbu khas Batak.\r\n• Sambal Andaliman: Sambal andaliman adalah sambal khas Batak yang menggunakan andaliman (buah jeruk hutan) sebagai bahan utamanya.\r\n', '• Silangit Airport Hotel: Hotel ini terletak di dekat Bandara Silangit dan menawarkan pemandangan Danau Toba yang indah.\r\n• Aston Lake Toba Hotel: Hotel ini terletak di tepi Danau Toba dan menawarkan berbagai macam fasilitas, seperti kolam renang, spa, dan restoran.\r\n', '• Kapal feri: Kapal feri merupakan pilihan yang populer untuk menyeberang ke Pulau Samosir. \r\n• Perahu tradisional: Perahu tradisional dapat disewa untuk berkeliling di sekitar Pulau Samosir.\r\n', '• Jakarta: Rp 700.000 - Rp 1.000.000 per orang\r\n• Bali: Rp 750.000 - Rp 1.00.000 per orang\r\n• Yogyakarta: Rp 500.000 - Rp 900.000 per orang\r\n• Kota-kota kecil: Rp 450.000 - Rp 700.000 per orang\r\n', 0),
(4, 'Malioboro', 'Malioboro adalah sebuah jalan terkenal di Yogyakarta, Indonesia. Jalan ini membentang sepanjang 3,6 kilometer dari Tugu Yogyakarta hingga Keraton Yogyakarta. Malioboro terkenal sebagai pusat perbelanjaan dan wisata di Yogyakarta. Di sepanjang jalan ini, terdapat berbagai macam toko yang menjual berbagai macam barang, seperti pakaian, souvenir, makanan, dan kerajinan tangan.\r\n\r\nMalioboro juga merupakan tempat yang populer untuk wisata kuliner. Di sepanjang jalan ini, terdapat berbagai macam warung makan dan restoran yang menyajikan berbagai macam masakan, mulai dari masakan tradisional Jawa hingga masakan internasional.\r\nSelain itu, Malioboro juga merupakan tempat yang sering digunakan untuk berbagai macam acara, seperti festival, pertunjukan seni, dan demonstrasi budaya.\r\n', 'Yogyakarta', '666552c483614.jpg', '• Gudeg: adalah makanan khas Yogyakarta yang terbuat dari nangka muda yang dimasak dengan santan dan gula merah.\r\n• Soto Bathok: adalah soto yang disajikan di dalam batok kelapa. Soto ini biasanya berisi daging sapi, ayam, atau jeroan, dan disiram dengan kuah kaldu sapi yang gurih.\r\n', '• The Rich Jogja Hotel\r\n• Ambarrukmo Hotel Yogyakarta\r\n• Malioboro Boutique Hotel\r\n', 'Transportasi Umum:\r\n• Bus Trans Jogja: Rp 4.000 - Rp 6.000 per orang\r\n• Becak: Rp 20.000 - Rp 30.000 per perjalanan\r\n• Andong: Rp 100.000 - Rp 150.000 per jam\r\n', 'Berikut adalah kisaran harga booking bersama tour guide per harinya:\r\n• Jakarta: Rp 300.000 - Rp 1.000.000 per orang\r\n•  Bali: Rp 250.000 - Rp 750.000 per orang\r\n•  Kota-kota kecil: Rp 150.000 - Rp 400.000 per orang\r\n', 0),
(5, 'Labuan Bajo', 'Labuan Bajo adalah sebuah kota di ujung barat Pulau Flores, Nusa Tenggara Timur, Indonesia. Kota ini merupakan gerbang utama untuk menuju Taman Nasional Komodo, salah satu dari tujuh keajaiban alam dunia. Labuan Bajo terkenal dengan keindahan alamnya yang luar biasa, seperti pantai berpasir putih, air laut yang jernih, dan pulau-pulau kecil yang eksotis. Selain itu, Labuan Bajo juga memiliki budaya dan tradisi yang unik, serta keramahan penduduknya yang terkenal.', 'Manggarai Barat, NTT', '666552ea94740.jpg', '•Ikan Bakar: Ikan bakar adalah salah satu makanan khas Labuan Bajo yang paling populer. Ikan bakar biasanya dibakar dengan bumbu rempah-rempah khas Labuan Bajo dan disajikan dengan sambal roa.', '• Plataran Komodo Beach Resort & Spa: adalah resort mewah yang terletak di tepi pantai Labuan Bajo.\r\n• Ayana Komodo Resort Waecicu: adalah resort mewah yang terletak di pulau pribadi di dekat Labuan Bajo.', '• Kapal wisata: dapat disewa untuk berkeliling Taman Nasional Komodo dan mengunjungi berbagai tempat menarik, seperti Pulau Padar, Pulau Komodo, dan Pulau Rinca.\r\n•Perahu tradisional: dapat disewa untuk berkeliling di sekitar Labuan Bajo dan mengunjungi tempat-tempat terpencil.', '• Tour 1 hari: Rp 300.000 - Rp 500.000 per orang\r\n• Tour 2 hari 1 malam: Rp 500.000 - Rp 700.000 per orang\r\n• Tour 3 hari 2 malam: Rp 700.000 - Rp 1.000.000 per orang\r\n', 0),
(10, 'Raja Ampat', 'Kepulauan Raja Ampat terletak di Provinsi Papua Barat, Indonesia. Kepulauan ini terdiri dari lebih dari 1.500 pulau kecil yang tersebar di sekitar empat pulau utama, yaitu Waigeo, Batanta, Salawati, dan Misool.\r\n\r\nRaja Ampat terkenal dengan keindahan alamnya yang luar biasa, termasuk pantai berpasir putih, air laut yang jernih, dan terumbu karang yang masih terjaga kealamiannya. Kepulauan ini juga merupakan rumah bagi berbagai macam flora dan fauna, termasuk burung Cendrawasih yang eksotis. Raja Ampat merupakan salah satu destinasi wisata bahari terbaik di dunia dan telah diakui oleh UNESCO sebagai Situs Warisan Dunia.', 'Waisai, Papua Barat Daya', '66655305bcef3.jpg', '• Papeda: adalah makanan khas Papua yang terbuat dari sagu.\r\n• Gohu: adalah makanan khas Papua yang terbuat dari jagung yang dimasak dengan santan dan rempah-rempah.', '• The Raja Ampat Resort: adalah resort mewah yang terletak di pulau Waigeo.\r\n• Mansuar Eco Dive Lodge: adalah hotel yang ramah lingkungan yang terletak di pulau Misool.', '• Speedboat: Anda dapat menggunakan speedboat untuk berkeliling di pulau-pulau di Raja Ampat.\r\n• Perahu tradisional: Anda dapat menggunakan perahu tradisional untuk berkeliling di pulau-pulau di Raja Ampat.', 'Berikut kisaran harga tour guide di Raja Ampat, belum termasuk akomodasi dan transportasi:\r\n1 hari Rp 300.000 - Rp 500.000\r\n• 2 hari 1 malam Rp 500.000 - Rp 700.000\r\n• 3 hari 2 malam Rp 700.000 - Rp 1.000.000\r\n• 4 hari 3 malam Rp 1.000.000 - Rp 1.500.000', 0),
(11, 'Candi Borobudur', ' Candi Borobudur adalah candi Buddha terbesar di dunia. Candi ini dibangun pada abad ke-8 dan ke-9 dan merupakan situs warisan dunia UNESCO. Candi Borobudur terdiri dari enam teras berbentuk bujur sangkar yang di atasnya terdapat tiga pelataran melingkar. Di dinding candi terdapat 2.672 panel relief yang menceritakan kisah Buddha Gautama. Candi Borobudur merupakan salah satu tujuan wisata paling populer di Indonesia dan setiap tahun dikunjungi oleh jutaan wisatawan dari seluruh dunia.', 'Magelang, Jawa Tengah', '6665534e3dca4.jpg', '• Sup Senerek: Hanya beberapa menit dari Borobudur, ada beberapa tempat yang bisa anda datangi untuk menikmati Sop Senerek Iga Sapi, seperti Sop Senerek Pak Parton di Jalan Jenderal Sudirman.\r\n• Ndas Beong: Ikan beong merupakan salah satu jenis ikan yang hanya terdapat di Sungai Progo.', '• Plataran Borobudur Resort & Spa: adalah resort mewah yang terletak di dekat Candi Borobudur.\r\n• Manohara Hotel: adalah hotel yang terletak di dekat Candi Borobudur.', '• Delman: adalah kereta kuda tradisional yang dapat Anda gunakan untuk berkeliling di sekitar Candi Borobudur. Tarif delman sekitar Rp 50.000 - Rp 100.000 per jam.', '•  Tour 1 hari: Rp 200.000 - Rp 300.000 per orang\r\n• Tour 2 hari 1 malam: Rp 300.000 - Rp 500.000 per orang\r\n•  Tour 3 hari 2 malam: Rp 500.000 - Rp 700.000 per orang', 0),
(12, 'Pura Lempuyang Luhur', 'Pura Lempuyang Luhur adalah sebuah pura Hindu yang terkenal dengan keindahan alamnya yang menakjubkan dan keunikan arsitekturnya. Pura ini terdiri dari 7 tingkatan, dengan Pura Penataran Agung Lempuyang di puncaknya. Pemandangan dari Pura Lempuyang Luhur sangatlah indah, terutama saat matahari terbit dan terbenam. Di sini, Anda dapat melihat Gunung Agung yang menjulang tinggi dan Gunung Rinjani di Lombok pada hari yang cerah.\r\n\r\nPura Lempuyang Luhur juga terkenal dengan \"Gerbang ke Surga\" atau \"Gate of Heaven\" yang merupakan sebuah spot foto ikonik dengan latar belakang pura dan Gunung Agung.', 'Kabupaten Karangasem, Bali', '6665536d56a20.jpg', '• Sate Lilit: Sate khas Bali yang terbuat dari daging cincang yang dibalut dengan batang serai dan dibakar.\r\n• Lawar: Hidangan tradisional Bali yang terbuat dari campuran daging cincang, sayur-sayuran, dan bumbu rempah-rempah.', '• Aryaduta Hotel & Resort Bali: Hotel bintang 5 yang terletak di dekat Pura Lempuyang Luhur, dengan pemandangan Gunung Agung yang indah.\r\n• The Kayon Jungle Resort: Resort mewah yang terletak di tengah hutan, dengan pemandangan Gunung Lempuyang yang menakjubkan.', 'Angkutan umum untuk mencapai Lempuyang Luhur. Dari Terminal Ubung Denpasar, dapat naik bus jurusan Amlapura dan turun di Desa Tumbukan. Dari sana, dapat melanjutkan perjalanan dengan ojek atau angkutan desa menuju Lempuyang Luhur.', 'Berikut adalah kisaran harga tour guide Pura Lempuyang Luhur:\r\n• Tour 1-2 jam: Rp 100.000 - Rp 200.000 per orang\r\n•  Tour 3-4 jam: Rp 200.000 - Rp 300.000 per orang\r\n•  Tour 5-6 jam: Rp 300.000 - Rp 400.000 per orang', 0),
(13, 'Ranca Upas', ' Ranca Upas terkenal sebagai salah satu destinasi wisata alam favorit di Jawa Barat. Tempat ini menawarkan berbagai macam aktivitas wisata yang menarik, seperti berkemah, berpetualang, dan menikmati keindahan alam. Ranca Upas terkenal dengan hamparan padang rumputnya yang luas dan hijau, serta pemandangan Gunung Patuha yang menawan. Di sini, Anda dapat menikmati udara yang sejuk dan segar, jauh dari hiruk pikuk perkotaan.', 'Ciwidey, Bandung', '6665539d904f1.jpg', '• Nasi Liwet: Hidangan nasi gurih yang dimasak dengan santan dan bumbu rempah-rempah. Biasanya disajikan dengan ayam goreng, ikan asin, dan lalapan.', '• Ranca Upas Camping Ground: Camping ground yang luas dan nyaman untuk Anda yang ingin berkemah di alam terbuka.', '• Bus Pariwisata: Untuk rombongan besar atau wisata grup, bus pariwisata sering digunakan. Area parkir Ranca Upas juga mampu menampung bus.\r\n• Sepeda: Beberapa pengunjung yang ingin berolahraga atau menikmati perjalanan dengan lebih santai memilih untuk bersepeda.', '• Tour 1-2 jam: Rp 100.000 - Rp 200.000 per orang\r\n• Tour 3-4 jam: Rp 200.000 - Rp 300.000 per orang\r\n• Tour 5-6 jam: Rp 300.000 - Rp 400.000 per orang', 0),
(14, 'Waerebo', 'Waerebo terkenal dengan rumah adatnya yang unik, yaitu Mbaru Niang. Mbaru Niang adalah rumah adat berbentuk kerucut yang terbuat dari kayu, bambu, dan ilalang. Rumah ini memiliki beberapa tingkat dan dihuni oleh beberapa keluarga. Waerebo juga dikenal sebagai \"desa mumi\" karena di sini terdapat tradisi menyimpan jenazah leluhur di dalam gua.\r\n\r\nSelain itu, Waerebo juga menawarkan pemandangan alam yang indah, seperti sawah terasering, hutan, dan air terjun. Pengunjung dapat menikmati berbagai aktivitas di Waerebo, seperti trekking, bersepeda, dan berenang.', 'Manggarai Timur, NTT', '666553b42c6aa.jpg', '• Wolo: Hidangan tradisional Flores yang terbuat dari jagung dan kacang merah.\r\n• Ubi Bakar: Ubi jalar yang dibakar dengan api unggun.', '• Waerebo Eco Lodge: Penginapan tradisional yang terbuat dari kayu dan bambu, dengan pemandangan alam yang indah.\r\n• Satar Uma Homestay: Penginapan sederhana yang dikelola oleh penduduk setempat.', '• Dari Dintor, menyewa ojek motor untuk menuju Waerebo. Perjalanan dari Dintor ke Waerebo memakan waktu sekitar 1 jam.\r\n• Jika Anda ingin merasakan sensasi yang berbeda, Anda dapat memilih untuk trekking menuju Waerebo. Jalur trekking dari Dintor ke Waerebo memakan waktu sekitar 3-4 jam.', 'Berikut adalah kisaran harga tour guide di Waerebo:\r\n• Tour 1-2 jam: Rp 100.000 - Rp 200.000 per orang\r\n• Tour 3-4 jam: Rp 200.000 - Rp 300.000 per orang\r\n• Tour 5-6 jam: Rp 300.000 - Rp 400.000 per orang', 0),
(15, 'Banda Neira', 'Banda Neira terkenal dengan sejarahnya yang panjang dan kaya sebagai pusat perdagangan rempah-rempah pada abad ke-16 dan ke-17. Pulau ini juga memiliki keindahan alam yang luar biasa, dengan pantai berpasir putih, air laut yang jernih, dan gunung berapi yang masih aktif.\r\n\r\nDestinasi Wisata:\r\nBenteng Belgica: Benteng peninggalan Belanda yang terletak di atas bukit, menawarkan pemandangan indah Banda Neira.\r\nMuseum Banda Neira: Museum yang menceritakan sejarah Banda Neira dan perdagangan rempah-rempah.\r\n', 'Kepulauan Banda, Maluku Tengah', '666553d191456.jpg', '• Ikan Kuah Kuning: Hidangan ikan yang dimasak dengan santan dan bumbu rempah-rempah.\r\n• Papeda: Makanan khas Maluku yang terbuat dari sagu, biasanya disajikan dengan ikan kuah kuning atau sayur.', '• Hotel Maulana: Hotel dengan pemandangan laut yang indah, terletak di dekat Benteng Belgica.\r\n• The Nutmeg Tree Boutique Hotel: Hotel butik dengan suasana yang nyaman dan asri, terletak di pusat kota Banda Neira.', '• Kapal: Anda juga dapat mencapai Banda Neira dengan kapal dari Pelabuhan Ambon atau Pelabuhan Tual.\r\n• Perahu: Di Banda Neira, Anda dapat menyewa perahu untuk berkeliling pulau dan mengunjungi pulau-pulau kecil di sekitarnya.\r\n', 'Berikut adalah kisaran harga tour guide di Banda Neira:\r\n• Tour 1-2 jam: Rp 150.000 - Rp 250.000 per orang\r\n• Tour 3-4 jam: Rp 250.000 - Rp 350.000 per orang\r\n• Tour 5-6 jam: Rp 350.000 - Rp 450.000 per orang', 0),
(16, 'Nusa Penida', 'Nusa Penida terkenal dengan keindahan alamnya yang luar biasa, dengan pantai berpasir putih, air laut yang jernih, dan tebing-tebing batu kapur yang menjulang tinggi. Pulau ini juga memiliki banyak gua, air terjun, dan pura Hindu yang menarik untuk dikunjungi.\r\n\r\nDestinasi Wisata:\r\n• Pantai Kelingking: Pantai dengan tebing batu kapur berbentuk T-Rex yang ikonik.\r\n• Broken Beach: Pantai dengan lubang alami di tebing batu kapur, menawarkan pemandangan yang indah.', 'Klungkung, Bali', '666553f2686d3.jpg', '• Bubur Injin: Bubur beras hitam yang dimasak dengan santan dan gula merah, disajikan dengan kacang hijau dan pisang.\r\n• Gurame bakar: Ikan gurame yang dibakar dengan bumbu rempah-rempah, disajikan dengan sambal dan lalapan.', '• Kupu Kupu Nusa Penida: Hotel dengan pemandangan laut yang indah, terletak di dekat Pantai Kelingking.\r\n• The Acala Nusa Penida: Hotel butik dengan suasana yang nyaman dan asri, terletak di pusat kota Nusa Penida.', '• Speedboat: dapat mencapai Nusa Penida dengan speedboat dari Pelabuhan Benoa di Nusa Dua. Perjalanan dengan speedboat memakan waktu sekitar 15 menit.', '• Tiket Kapal: Rp 50.000 - Rp 100.000 per orang\r\n• Tiket Speedboat: Rp 100.000 - Rp 200.000 per orang\r\n• Sewa Sepeda Motor: Rp 50.000 - Rp 100.000 per hari\r\n• Sewa Mobil: Rp 200.000 - Rp 500.000 per hari\r\n• Akomodasi: Rp 200.000 - Rp 1.000.000 per malam', 0),
(17, 'Karimun Jawa', 'Karimun Jawa terkenal dengan keindahan alamnya yang luar biasa, dengan pantai berpasir putih, air laut yang jernih, dan terumbu karang yang masih alami. Pulau ini juga memiliki banyak hutan mangrove, gua, dan air terjun yang menarik untuk dikunjungi. Karimun Jawa merupakan salah satu Taman Nasional di Indonesia yang dilindungi.\r\n\r\nDestinasi Wisata:\r\n• Pantai Ujung Gelam: Pantai dengan pasir putih yang halus dan air laut yang jernih, ideal untuk berenang dan berjemur.\r\n• Pulao Tengah: Pulau dengan pantai berpasir putih dan air laut yang jernih, terkenal dengan hutan mangrove yang masih alami.\r\n', 'Jepara, Jawa Tengah', '6665540859dee.jpg', '• Soto Kudus: Sup daging sapi atau jeroan yang dimasak dengan bumbu rempah-rempah dan santan.\r\n• Es Dawet Ayu: Minuman segar yang terbuat dari santan, gula merah, cincau, dan es serut.\r\n', '• The Royal Emerald Resort: Resort mewah dengan pemandangan laut yang indah, terletak di Pulau Karimun.\r\n• Karimun Jawa Cottages: Penginapan sederhana dengan suasana yang nyaman dan asri, terletak di tepi pantai.', '• Perahu: Di Karimun Jawa, Anda dapat menyewa perahu untuk berkeliling pulau dan mengunjungi pulau-pulau kecil di sekitarnya.', 'Berikut adalah kisaran harga tour guide di Karimun Jawa:\r\n• Tour 1-2 jam: Rp 100.000 - Rp 200.000 per orang\r\n• Tour 3-4 jam: Rp 200.000 - Rp 300.000 per orang\r\n• Tour 5-6 jam: Rp 300.000 - Rp 400.000 per orang', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `iduser` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`iduser`, `username`, `password`, `role`) VALUES
(1, 'dwiy', '$2y$10$RNF7JyAh0KTmrkjMC.AA4u8rJhS52rzIVElDb4VITNHU92ZgU9hfW', 'admin'),
(2, 'wi', '$2y$10$Ee7kHQOWTFrtqH6SST.M6Ox0aFoVHfEUUfn0o86bLXaXL2etDRnNO', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_book_form`
--
ALTER TABLE `tabel_book_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_destinasi`
--
ALTER TABLE `tabel_destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_book_form`
--
ALTER TABLE `tabel_book_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_destinasi`
--
ALTER TABLE `tabel_destinasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `iduser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
