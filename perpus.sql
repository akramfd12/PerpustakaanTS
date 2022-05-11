-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 04:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `koleksi_buku`
--

CREATE TABLE `koleksi_buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun` year(4) NOT NULL,
  `cover` text NOT NULL,
  `sinopsis` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `koleksi_buku`
--

INSERT INTO `koleksi_buku` (`id_buku`, `judul`, `genre`, `penulis`, `penerbit`, `tahun`, `cover`, `sinopsis`, `created_at`, `updated_at`) VALUES
(1, 'Negeri Lima Menara', 'Fiksi', 'Ahmad Fuadi', 'Gramedia', 2009, 'negerilimamenara.jpg', 'Alif lahir di pinggir Danau Maninjau dan tidak pernah menginjak tanah di luar ranah Minangkabau. Masa kecilnya adalah berburu durian runtuh di rimba Bukit Barisan, bermain bola di sawah berlumpur dan tentu mandi berkecipak di air biru Danau Maninjau. Tiba-tiba saja dia harus naik bus tiga hari tiga malam melintasi punggung Sumatera dan Jawa menuju sebuah desa di pelosok Jawa Timur. Ibunya ingin dia menjadi Buya Hamka walau Alif ingin menjadi Habibie. Dengan setengah hati dia mengikuti perintah Ibunya: belajar di pondok. Di kelas hari pertamanya di Pondok Madani (PM), Alif terkesima dengan \"mantera\" sakti man jadda wajada. Siapa yang bersungguh-sungguh pasti sukses. Dia terheran-heran mendengar komentator sepakbola berbahasa Arab, anak menggigau dalam bahasa Inggris, merinding mendengar ribuan orang melagukan Syair Abu Nawas dan terkesan melihat pondoknya setiap pagi seperti melayang di udara. Dipersatukan oleh hukuman jewer berantai, Alif berteman dekat dengan Raja dari Medan, Said dari Surabaya, Dulmajid dari Sumenep, Atang dari Bandung dan Baso dari Gowa. Di bawah menara masjid yang menjulang, mereka berenam kerap menunggu maghrib sambil menatap awan lembayung yang berarak pulang ke ufuk. Di mata belia mereka, awan-awan itu menjelma menjadi negara dan benua impian masing-masing. Kemana impian jiwa muda ini membawa mereka?', '2022-04-04 03:24:35', '2022-04-04 03:24:35'),
(2, 'Sepasang Kaus Kaki Hitam', 'Drama, Romance', 'Ariadi Ginting', 'Gramedia', 2017, 'sepasangkauskakihitam.jpg', 'Cerita dimulai ketika Ari merantau untuk bekerja dari Kalimantan ke Karawang. Ia menempati sebuah petak kamar kos di daerah Karawang. Ia kerap kali melihat wanita berambut panjang dan berkaos kaki hitam duduk di depan pintu sebelah kamarnya. Wanita itu membuat Ari penasaran, membuatnya mendatangi Indra yang bertempat di sebelah kamarnya juga. Namun Indra mengatakan tidak pernah ada wanita tinggal di sana, karena kamar itu sudah lama kosong. Hingga pada suatu ketika Ari dan Indra mendapati darah mengalir dari bawah pintu kamar kosong itu, setelah menjungkil jendela mereka menemukan sesosok wanita telah bersimbah darah di dalam kamar mandi kecil kamar itu, kakinya penuh dengan sayatan yang mengerikan. Kamar wanita itu sangat remang dan kotor dengan bercak darah di mana-mana, serta bau anyar yang sangat menyengat. Ketika Dokter didatangkan, ia menjelaskan Meva mengindap penyakit self-injury, di mana dorongan untuk menyakiti diri sendiri ketika dalam keadaan depresi tingkat tinggi.\r\n\r\nSemenjak Ari dan Indra menolong Meva, wanita itu mulai terbuka kepada mereka berdua, khususnya terhadap Ari. Meva bercerita, ia selalu mengenakan kaos kaki hitam panjang untuk menutupi luka-luka di kakinya akibat sayatan-sayatan yang dilakukannya ketika banyak pikiran.\r\n\r\nMeva menyakiti dirinya sendiri semenjak berhasil kabur dari ayah kandungnya yang merupakan pria kebangsaan asing. Ayahnya seorang penganut Kristen sesat, istrinya boleh disetubuhi sesama jemaat sekte sesat tersebut. Jadilah ia sering melihat ibunya di perkosa dan disiksa secara bergantian. Suatu ketika Meva dan ibunya berhasil melarikan diri karena ibunya tidak rela ketika Meva akan diperkosa ramai-ramai pula.\r\n\r\nKetika pulang ke Padang, keluarga neneknya menolak kehadiran Meva dan ibunya. Karena dulunya ibu Meva menikah tanpa restu. Akibat tidak tega neneknya memberikan rumah peninggalan untuk ditempati oleh Meva dan ibunya di kota berbeda. Akibat banyak tekanan ibunya mulai menjadi gila, ketika itulah neneknya mulai tinggal bersama mereka. Ibunya gila selama bertahun-tahun. Meva pindah ke Karawang melanjutkan pendidikan ke perguruan tinggi, namun ia tidak mempunyai teman dan perkuliahannya terbengkalai.\r\n\r\n“Saat kami disakiti, Tuhan diam. Bukan karena nggak perduli, tapi dia ingin melihat kami kuat,” ucap Meva kala itu.\r\n\r\nSemakin lama kedekatan Ari dengan Meva menimbulkan perasaan-perasaan lebih dari sahabat. Seringnya Ari memotivasi Meva menggunakan perumpamaan-perumpamaan sesuatu hal menjadikan motivasi itu melekat di hati Meva. Ketika ibu Meva meninggal, Meva kembali menyakiti dirinya sendiri. Di sinilah Ari kembali memberikan dorongan pada Meva, begitu pula ketika ibu Ari meninggal, yang membuat Ari tenggelam di dunia gelap. Meva memberikan dorongan agar Ari kembali bersemangat menjalani kehidupan, dan tidak mabuk-mabukan.\r\n\r\nKetika Ari tidak bisa lagi membendung perasaannya pada Meva, ia memutuskan mempacari teman kantornya karena tidak sanggup mengungkapkan perasaannya pada Meva. Menjadikan hubungannya dengan Meva sedikit merenggang, karena Meva pun sebenarnya menyukai Ari. Ketika Ari akan di pindah tugaskan ke Jepang, ia memilih tetap berada di Karawang agar tetap bersama Meva.\r\nTanpa terduga kekasih Ari meninggal dunia akibat kecelakaan, membuatnya terpukul hebat walaupun perasaan cintanya tidak sedalam cintanya kepada Meva. Ketika itulah peran Meva dan Indra berhasil mengembalikan Ari ke kehidupan semula.\r\n\r\nCerita berakhir ketika Meva berhasil wisuda dan memutuskan pindah dari kota Karawang untuk mengejar cita-citanya. Semenjak Meva pindah, ada hal yang hilang dari diri Ari. Dia sering mengutuki dirinya akibat tidak bisa menggungkapkan perasaannya. Ari menjadi lebih pendiam dan pemurung.\r\n\r\nHingga suatu hari Tuhan kembali mempertemukan Meva dan Ari di salah satu kantor Stasiun Televisi swasta setelah bertahun-tahun berpisah. Keduanya saling berpelukan menumpahkan kesedihan dan kerinduaan. Keduanya telah berkeluarga dan memutuskan untuk tidak mengungkit perasaan di masa lalu, agar tidak menyakiti masing-masing pasangannya.', '2022-04-04 03:24:35', '2022-04-04 03:24:35'),
(5, 'Dilan 1990', 'Drama, Romance', 'Pidi Baiq', 'Pastel Books', 2014, 'dilan.jpg', 'Cinta, walaupun sudah berlalu sekian lama, tetap saja, saat dikenang begitu manis.\r\n\r\nMilea, dia kembali ke tahun 1990 untuk menceritakan seorang laki-laki yang pernah menjadi seseorang yang sangat dicintainya, Dilan.\r\n\r\nLaki-laki yang mendekatinya (milea) bukan dengan seikat bunga atau kata-kata manis untuk menarik perhatiannya. Namun, melalui ramalan seperti tergambarkan pada penggalan cerita berikut :\r\n\r\n“Aku ramal, nanti kita bertemu di kantin.” – Dilan -hlm. 20\r\n\r\nTapi, sayang sekali ramalannya salah. Hari itu, Miela tidak ke kantin karena ia harus membicarakan urusan kelas dengan kawan-kawannya. Sebuah cara sederhana namun bikin senyum dipilih Dilan untuk kembali menarik perhatian dari Milea. Dian mengirim Piyan untuk menyampaikan suratnya yang isinya :\r\n\r\n“Milea, ramalanku, kita akan bertemu di kantin. Ternyata salah. Maaf, tapi ingin meramal lagi : besok kita akan bertemu.”  – Dilan – halaman. 22\r\n\r\nTunggu, besok yang dimaksud oleh dilan itu adalah hari minggu. Ngga mungkin, kan mereka bertemu? Namun, ternyata ramalannya kali ini benar. Dilan datang ke rumah Miela untuk menyampaikan surat undangannya yang isinya :\r\n\r\n“Bismillahirrahmanirrahim. Dengan nama Allah Yang Maha Pengasih lagiPenyayang. Dengan ini, dengan penuh perasaan, mengundang Milea Adnan untuk sekolah pada : Hari Senin, Selasa, Rabu, Kamis, Jumat, dan Sabtu.” – Dilan – hlm. 27\r\n\r\nHal-hal yang sederhana ini nyatanya dapat membuat Milea tersenyum, dan perlahan mulai menaruh perhatiannya kepada Dilan. Sampai-sampai, sebentar dia lupa, ada Beni yaitu pacarnya yang berada di Jakarta.\r\n\r\nMilea tak mau kehilangan Dilan. Baginya, Dilan seperti sesuatu yang selalu dapat membuat hari-harinya penuh warna. Tapi, dia tampak sangat jahat pada Dilan, karena dia mau untuk menerima perhatian dari Dilan, padahal dia sudah ada yang memiliki.\r\n\r\nSampai pada waktu milea memutuskan hubungannya dengan beni, pacarnya di jakarta. Ia cowok yang sangat emosian dan manja. Karena suatu hal yang ga perlu dijelaskan. Semenjak itu hubugan Dilan dan Milea semakin erat saja.', '2022-04-04 04:31:05', '2022-04-04 04:31:05'),
(17, 'My Nerd Girls', 'Drama, Remaja, Misteri', 'Aidah Harisah', 'Gramedia', 2019, 'nerd.jpg', 'Meski mempunyai banyak penggemar, Reyhan seorang siswa teladan dan populer tidak tertarik kepada siapa pun di sekolahnya. Hingga dia bertemu dengan Faradilla Andrea siswi baru di sekolahnya yang berpenampilan cupu. Reyhan menemukan sesuatu yang berbeda dalam diri Fara. Terlebih lagi Reyhan mengetahui sedikit demi sedikit rahasia Fara, yang membuatnya penasaran dengan gadis cupu tersebut. Fara dijuluki cupu oleh teman-temannya karena penampilannya. Namun, Fara sama sekali tidak memusingkan hal itu. Bahkan, pada saat teman-teman perempuannya sibuk mencari perhatian Rehyan, Fara malah tidak tertarik sama sekali kepada Reyhan. Sebenarnya, apa rahasia Fara? Dan, siapakah sebenarnya sosok Fara yang dapat membuat Reyhan penasaran, bahkan tertarik kepadanya?', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'La Tahzan Jangan Bersedih', 'Buku Bantuan Diri', 'Dr. Aidh Al Qarui', 'Qisthi Press Chue', 2002, 'ID_LATAHZ2019MTH08.jpg', 'Tulisan dalam buku ini merupakan resep-resep manjur, yang menunjukkan kepada kita bagaimana harus meniti jalan kehidupan dan membangun kehidupan yang bahagia dengan berpedoman pada satu kata: Lâ Tahzan, jangan bersedih. Dengan kata kunci ini kita akan dapat menjalani kehidupan dengan penuh semangat. Kita tidak akan pernah dirisaukan oleh masa lalu yang telah lewat dan tidak pula dicemaskan oleh masa depan yang akan datang. Kita akan menjadi manusia masa kini yang bekerja pada hari ini dengan mencurahkan segenap kekuatan dan pikiran yang ada dengan keyakinan bahwa hasil akhirnya kita serahkan kepada Allah.\r\n\r\nBuku-buku yang dianggap sangat berpengaruh dan menjadi  best seller, semisal The Magic of Thinking Big, karya David J. Schwart, How to Stop Worrying and Start Living, karya Dale Carnegie, Speech Can Change Your Life, karya Dorothy Sarnoff maupun buku “Tujuh Kebiasaan Orang yang Sangat Efektif” tulisan Steven R. Covey, Anda akan mendapatkan petunjuk-petunjuk praktis ke arah kebahagiaan yang lebih cenderung duniawi yang sesuai ukhrawi. Allah dan akhirat tidak menjadi bagian paling penting dalam kajian-kajian mereka. Di sinilah, menurut orang-orang yang beriman, kekurangannya meski karya-karya mereka enak dibaca. Sisi kerohaniannya terasa begitu kering.\r\n\r\nBerbeda tatkala kita membaca buku Lâ Tahzan yang ditulis oleh Dr. ‘Aidh al-Qarni. Buku ini sangat padat dengan nuansa rabbani tanpa mengesampingkan sisi-sisi duniawi. Kita seakan diajak untuk menatap dunia dengan pandangan yang seimbang: Kita diajak untuk menjadi idealis dengan tetap realistis, menjadi duniawi dan ukhrawi sekaligus, memper siapkan kehidupan masa kini namun tak lupa masa depan, diajak bekerja dengan keras dan juga beristirahat.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'KKN di Desa Penari', 'Horor', 'SimpleMan', 'Bukune', 2019, '53154120._SX318_SY475_.jpg', 'Buku KKN di Desa Penari karangan SimpleMan ini mengisahkan tentang kehidupan 6 Mahasiswa yaitu Widya, Ayu, Nur, Bima, Wahyu, Anton yang akan melakukan KKN (Kuliah Kerja Nyata) jalur mandiri ke sebuah desa di ujung timur Pulau Jawa selama 45 hari.\r\n\r\nSetelah melakukan perjalanan 4-6 jam dari kota mereka berangkat, tibalah disuatu hutan dipinggir jalan raya yang begitu sepi dan mereka dijemput oleh warga desa dengan motor dikarenakan akses menju desa mereka yang cukup terjal dan sulit dilalui mobil.\r\n\r\nPada saat perjalanan pun Widya dan Nur merasakan kejanggalan mulai dari suara gamelan nan meriah layaknya sebuah pesta dan juga melihat siluet seorang wanita yang tengah menari di kegelapan hingga akhirnya mereka tiba di sebuah desa di tengah hutan.\r\n\r\nSelama di desa tersebut mereka menjalankan Proker (Program Kerja) yang sudah mereka siapkan sebelum KKN dimulai. Namun kejanggalan-kejanggalan yang ada di desa tersebut mulai dirasakan oleh 6 Mahasiswa yang tengah melaksanakan KKN.\r\n\r\nHingga tiba pada suatu malam dimana Widya mengikuti Bima ke suatu tempat terlarang yang dinamakan “tapak tilas” dan posisinya berada di sebelah desa tersebut. Ternyata disaat Widya sampai di tapak tilas ia terkejut melihat ada bangunan megah lengkap dengan alat musik tradisional jawa yang terlihat sangat terbengkalai.\r\n\r\nSampai akhirnya ia mendengar sebuah suara wanita yang tengah menangis namun begitu familier. Tiba-tiba tersirat wajah seseorang, dan orang itu adalah Ayu.\r\n\r\nKemudian pandangan Widya teralihkan oleh sebuah gubuk berbahan kayu jati. Karena ia seperti mendengar suara Bima dan rasa penasarannya yang sangat tinggi, ia pun memberanikan diri mengintip dari lubang kecil untuk mengetahui apa isi dari dalam gubuk tersebut.\r\n\r\nTak disangka ternyata isi dari gubuk itu ialah Bima yang sedang berendam di sebuah sinden dan dikelilingi oleh seekor ular besar. Namun anehnya sinden tersebut sangat mirip dengan sinden yang ada di desa yang ia tempati.\r\n\r\nSetelah itu Widya pun terkejut melihat apa yang ada di dalam gubuk maka ia segera lari tetapi seketika tempat itu menjadi ramai dengan bermacam-macam mahluk dan juga dendangan irama gamelan yang berbeda. Dan para mahluk itu sedang menari-nari layaknya sebuah pesta yang ditengahnya ada seorang penari. Ternyata penari itu adalah temannya Ayu. Kemudian Widya pun berlari menuju desa saking takutnya dengan kondisi tapak tilas.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Layangan Putus', 'Drama, Family, Romance', 'Mommy ASF', 'RDM Publisher', 2020, 'layanganputus.jpg', 'Seorang gadis remaja lugu dan polos yang berasal dari daerah, tumbuh, berkembang, dan menemukan cinta di kota besar yang sangat berbeda dengan iklim daerah asalnya. Gadis remaja ini hanya memiliki mimpi sederhana, yaitu menyambung pendidikan dan menyelesaikannya tepat waktu.\r\n\r\nNamun, semua itu berubah ketika ia bertemu dengan seorang pria tangguh. Lelaki yang mandiri dan berpendirian keras itu mengenalkannya dengan dunia baru yang belum pernah ia temui di daerah asalnya. Laki-laki bernama Aris itu membuat Kinan jatuh cinta karena sosoknya yang menyenangkan, gigih, dan mampu mengubah cara pandangnya kepada dunia.\r\n\r\nHingga akhirnya Mereka berdua menyamakan visi dan berjanji dalam ikatan pernikahan. mereka memulai semua kehidupan dari awal, Kinan dengan setia mendampingi Aris membangun mimpi mereka. Perubahan pola pikir Aris kembali mengubah cara pandang Kinan terhadap prioritas kehidupan.\r\n\r\nKinan tetap setia di sisi Aris dan melupakan mimpinya menjadi seorang wanita karier serta memilih merawat keluarga di rumah sesuai permintaan Aris, sambil kembali mengenal Tuhan. Aris mampu meyakinkan Kinan bahwa cukup Aris saja yang bekerja di luar rumah dan itu sudah cukup membawa Kinan memenuhi mimpinya saat kecil bertualang menaiki balon udara. Kinan jatuh cinta akan keindahan Cappadocia dan balon udara yang menghiasi angkasa. \r\n\r\nKinan mempunyai mimpi pergi ke Capadocia, Turki. Namun takdir berkata lain saat Kinan menemukan foto-foto di ponsel suaminya. Di mana Kinan melihat dan menikmati keindahan Capadocia, tapi dari foto sang suami bersama wanita lain. Dunia seperti runtuh, orang yang paling Kinan percayai, ternyata telah tega berbohong dan menyakitinya selama ini.\r\n\r\nDua belas hari menghilang, Aris kembali ke rumah dengan semua hal baru yang tak pernah Kinan duga. Kehidupan rumah tangganya pun akhirnya tidak selamanya bisa bahagia, namun Kinan tetap berusaha dan bekerja keras agar mampu menghidupi anak-anaknya dalam menggapai setiap impian.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Black Showman Dan Pembunuhan Di Kota Tak Bernama', 'Misteri Detektif', 'Keigo Higashino', 'Gramedia', 2021, 'Black_Showman_cov.jpg', 'Pembunuhan bisa terjadi di mana saja, termasuk di sebuah kota kecil, terpencil, dan nyaris terlupakan di tengah pandemi Covid-19. Seorang mantan guru SMP ditemukan tewas tercekik di halaman rumahnya sendiri. Polisi tidak tahu apakah ini pembunuhan terencana, pembunuhan tak disengaja, atau aksi pencurian yang berakhir dengan pembunuhan. Korban adalah guru yang disegani. Setelah pensiun pun, mantan murid-muridnya sering menghubunginya untuk meminta bantuan atau nasihat. Jadi, tentu saja para mantan muridnya, yang pulang ke kota itu demi menghadiri reuni, termasuk dalam daftar orang-orang yang dicurigai. Polisi kebingungan, dan si pembunuh lega karena identitasnya tidak akan pernah ketahuan. Namun, ia tidak menyangka bahwa putri korban akan muncul bersama pamannya—seorang mantan pesulap eksentrik—dan ikut menyelidiki apa yang sebenarnya terjadi dan mencari tahu siapa yang membunuh Kamio Eiichi.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Lebih Senyap dari Bisikan', 'Drama Rumah Tangga', 'Andina Dwifatma', 'Gramedia', 2021, 'lebihsenyap.jpg', 'Di akhirat nanti, kalau aku ketemu Tuhan, akan kutanyakan kenapa Dia bikin tubuh perempuan seperti makanan kaleng. Kubayangkan di bawah pusar atau pantatku ada tulisan: Best Before: Mei 2026.\r\nAmara dan Baron dikepung pertanyaan mengapa belum punya anak. Aneka usaha untuk hamil nyatanya telah mereka lakukan, dari yang normal hingga ekstrem. Namun, persoalan tidak selesai tatkala Amara hamil dan melahirkan. Ada yang tidak ditulis di buku panduan menjadi orangtua, ada yang tidak pernah disampaikan di utas Program Hamil.', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id` int(5) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_pinjam` date NOT NULL DEFAULT current_timestamp(),
  `batas_waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `id_buku`, `id`, `judul`, `nama`, `tanggal_pinjam`, `batas_waktu`) VALUES
(2, 19, 24, 'KKN di Desa Penari', 'admin', '2022-05-11', '2022-05-11'),
(3, 20, 25, 'Layangan Putus', 'test', '2022-05-11', '2022-05-18'),
(4, 5, 25, 'Dilan 1990', 'test', '2022-05-11', '2022-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `profile` text NOT NULL,
  `cookies` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `alamat`, `telepon`, `profile`, `cookies`, `created_at`, `update_at`) VALUES
(23, 'User', 'user@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Jakarta', '0211234567', 'jilbab.jpeg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'admin', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Kepulauan Seribu', '02144224423', 'download.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'test', 'test@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'SMS', '0120101021', 'jennie.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koleksi_buku`
--
ALTER TABLE `koleksi_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `koleksi_buku`
--
ALTER TABLE `koleksi_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `koleksi_buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pinjam_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
