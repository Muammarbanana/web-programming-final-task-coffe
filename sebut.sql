-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 07:16 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sebut`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `namadep` varchar(20) NOT NULL,
  `namabel` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`namadep`, `namabel`, `username`, `email`, `password`) VALUES
('Alam', 'Fajaray', 'alamdhe', 'alamdhe@gmail.com', 'makan'),
('Fanan', 'ninini', 'test', 'muammarfanani@yahoo.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `penulis`, `tanggal`, `kategori`, `artikel`) VALUES
(1, 'Kopi robusta, mengenal jenis dan karakteristiknya', 'Ray Alam', '2018-05-16', 'Info', 'Robusta berasal dari kata ‘robust’ yang artinya kuat, sesuai dengan gambaran postur (body) atau tingkat kekentalannya yang kuat. Kopi robusta bukan merupakan spesies karena jenis ini turunan dari spesies Coffea canephora.\r\nRobusta dapat tumbuh di dataran rendah, namun lokasi paling baik untuk membudidayakan tanaman ini pada ketinggian 400-800 meter dpl. Suhu optimal pertumbuhan kopi robusta berkisar 24-30oC dengan curah hujan 2000-3000 mm per tahun.\r\nKopi robusta sangat cocok ditanam di daerah tropis yang basah. Dengan budidaya intensif akan mulai berbuah pada umur 2,5 tahun. Agar berbuah dengan baik, tanaman ini membutuhkan waktu kering 3-4 bulan dalam setahun dengan beberapa kali turun hujan.\r\nTanaman kopi robusta menghendaki tanah yang gembur dan kaya bahan organik. Tingkat keasaman tanah (pH) yang ideal untuk tanaman ini 5,5-6,5. Kopi robusta dianjurkan dibudidayakan dibawah naungan pohon lain.\r\nKaraktersitik tanaman\r\nCabang reproduksi atau wiwilan pada kopi robusta tumbuh tegak lurus. Buah kopi dihasilkan dari cabang primer yang tumbuh mendatar. Cabang primer ini cukup lentur sehingga membentuk tajuk seperti payung.\r\nBentuk daun membulat seperti telur dengan ujung daun runcing hingga tumpul. Daun-daunnya tumbuh pada batang, cabang dan ranting. Pada batang dan cabang tumbuhnya tegak lurus dengan susunan daun berselang-seling. Sedangkan pada ranting dan cabang-cabang mendatar pasangan daun tumbuh pada bidang yang sama. Robusta lebih relatif tahan terhadap penyakit karat daun.\r\nTanaman kopi robusta sudah mulai berbunga pada umur 2 tahun. Bunga tumbuh pada ketiak cabang primer. Setiap ketiak terdapat 3-4 kelompok bunga. Bunga biasanya mekar diawal musim kemarau. Berbeda dengan arabika, bunga robusta melakukan penyerbukan secara silang.\r\nBuah yang masih muda berwarna hijau, setelah masak berubah menjadi merah. Meski telah matang penuh, buah robusta menempel dengan kuat pada tangkainya. Jangka waktu dari mulai berbunga hingga buah siap panen berkisar 10-11 bulan.\r\nTanaman kopi robusta memiliki perakaran yang dangkal. Oleh karena itu membutuhkan tanah yang subur dan kaya kandungan organik. Tanaman ini juga cukup sensitif terhadap kekeringan.\r\nJenis klon kopi robusta\r\nKopi robusta diturunkan dari beberapa spesies terutama Canephora. Mungkin karena alasan itu, sumber bibit tanaman untuk robusta tidak disebut varietas melainkan klon.\r\nSama dengan varietas pada arabika, klon unggul robusta di Indonesia dikembangkan oleh Puslit Koka. Berikut ini beberapa jenis klon robusta yang direkomendasikan lembaga tersebut:\r\n?	Klon BP308. Klon ini merupakan tanaman unggul yang tahan terhadap serangan nematoda. Keistimewaan lain klon robusta ini adalah toleran terhadap tanah yang kurang subur. BP308 dianjurkan untuk dijadikan batang bawah, sedangkan batang atasnya disambung dengan klon-klon lain yang disesuaikan dengan agroklimat setempat.\r\n?	Klon BP42. Klon jenis ini memiliki produktivitas 800-1200 kg/ha/tahun. Perawakannya sedang dengan banyak cabang dan ruasnya pendek. Buah yang dihasilkan besar dan dompolannya rapat.\r\n?	Klon SA436. Memiliki produktivitas yang cukup tinggi, mencapai 1600-2800 kg/ha/tahun. Bentuk biji dari klon ini kecil dan ukurannya tidak seragam.\r\n?	Klon BP234. Produktivitasnya 800-1200 kg/ha/tahun. Perawakan ramping dengan percabangan yang panjang dan lentur. Butiran buah agak kecil dan ukurannya tidak seragam.\r\nKarakteristik produk\r\nDipasaran, kopi robusta dijual dengan harga lebih rendah dibanding arabika. Hal ini menyebabkan disinsentif terhadap petani. Sehingga untuk menghemat biaya produksi petani robusta cenderung mengabaikan penanganan pasca panen. Pada gilirannya akan membuat mutu kopi yang dihasilkan rendah.\r\nAroma robusta tidak sekuat arabika, dengan tingkat kekentalan (body) sedang hingga berat dan citarasa pahit. Kandungan kafein robusta lebih dari dua kali lipat arabika, yaitu berkisar 1,7-4%.\r\nPerdagangan kopi robusta\r\nSekitar 99% perdagangan kopi dunia adalah jenis robusta dan arabika. Kopi robusta banyak diproduksi oleh negara-negara Asia-Pasific dan Afrika, sedangkan kopi arabika banyak diproduksi oleh negara-negara Amerika Selatan. Penghasil robusta terbesar adalah Vietnam.\r\nTerdapat paradoks dalam perkembangan perdagangan robusta. Pada tahun 1950-an ketika pertama kali diperdagangkan di bursa London, tingkat harganya relatif sama dengan arabika. Saat itu proporsi pangsa pasar kopi robusta 25-30% dan arabika 70-75%.\r\nKeadaan mulai berubah ketika terjadi kenaikan produksi kopi robusta. Saat ini dimana pangsa pasarnya naik diatas 30%, harganya anjlok dibawah arabika hingga hampir setengahnya. Tentu saja ini sangat mengkhawatirkan mengingat lebih dari 80% produksi kopi Indonesia adalah robusta.\r\n'),
(6, 'Kopi arabika, jenis dan karakterstiknya', 'Ray Alam', '2018-04-10', 'Info', 'Kopi arabika (Coffea arabica) berasal dari hutan pegunungan di Etiopia, Afrika. Di habitat asalnya, tanaman ini tumbuh dibawah kanopi hutan tropis yang rimbun. Kopi jenis ini banyak ditumbuh di ketinggian di atas 500 meter dpl.\r\nKopi arabika akan tumbuh maksimal bila ditanam diketinggian 1000-2000 meter dpl. Dengan curah hujan berkisar 1200-2000 mm per tahun. Suhu lingkungan paling cocok untuk tanaman ini berkisar 15-24oC. Tanaman ini tidak tahan pada temperatur yang mendekati beku dibawah 4oC.\r\nUntuk berbunga dan menghasilkan buah, tanaman kopi arabika membutuhkan periode kering selama 4-5 bulan dalam setahun. Biasanya pohon arabika akan berbunga diakhir musim hujan. Bila bunga yang baru mekar tertimpa hujan yang deras akan menyebabkan kegagalan berbuah.\r\nKopi arabika menyukai tanah yang kaya dengan kandungan bahan organik. Material organik tersebut digunakan tanaman untuk sumber nutrisi dan mejaga kelembaban. Tingkat keasaman atau pH tanah yang cocok berkisar 5,5-6.\r\nKarakteristik tanaman\r\nTanaman kopi arabika pendek menyerupai perdu dengan ketinggian 2-3 meter. Batang berdiri tegak dengan bentuk membulat. Pohonnya memiliki percabangan yang banyak.\r\nWarna daun kopi arabika hijau mengkilap seperti memiliki lapisan lilin. Daun yang telah tua berwarna hijau gelap. Bentuk daun memanjang atau lonjong dengan ujung daun meruncing. Pangkal daun tumpul dan memiliki tangkai yang pendek. Struktur tulang daun menyirip.\r\nKopi arabika mulai berbunga setelah musim hujan. Bunga tumbuh pada ketiak daun. Bunga kopi berwarna putih dan bisa melakukan penyerbukan sendiri, tidak ada perbedaan bunga jantan dan betina. Dari bentuk kuncup hingga menjadi buah yang siap panen membutuhkan waktu 8-11 bulan.\r\nBuahnya bulat seperti telur, dengan warna buah hijau kemudian berubah menjadi merah terang saat matang. Apabila buah telah matang cenderung mudah rontok. Oleh karena itu harus dipanen dengan segera, untuk detailnya silahkan baca cara memanen buah kopi. Buah yang rontok ke tanah akan mengalami penurunan mutu, cenderung bau tanah.\r\nPohon kopi arabika mempunyai perakaran tunjang yang dalam. Guna akar yang dalam ini untuk menopang pohon agar tidak mudah roboh dan bertahan pada kondisi kekeringan. Pertumbuhan akar ditentukan sejak pohon dipindahkan dari pembibitan. Pohon yang perakarannya tidak tumbuh dengan baik, akan mengganggu produktivitas.\r\nVarietas kopi arabika\r\nAda banyak varietas kopi arabika yang ditanam di Indonesia. Setiap varietas mempunyai daya tumbuh dan daya adaptasi yang berbeda-beda. Pemilihan varietas dalam budidaya hendaknya disesuaikan dengan kondisi lingkungan tempat budidaya.\r\nUntuk mendapatkan hasil yang optimal gunakan varietas unggul dari sumber terpercaya. Kementerian pertanian melalui Puslit Koka selalu mengeluarkan varietas unggul. Beberapa diantaranya adalah sebagai berikut:\r\n?	S 795. Varietas ini memiliki produktivitas 1000-1500 kg/ha pada kepadatan tanam 1600-2000 pohon per hektar. Mulai berbunga pada umur 15-24 bulan. Agak tahan terhadap serangan karat daun bila ditanam diketinggian lebih dari 1000 meter dpl.\r\n?	USDA 762. Produktivitas kopi jenis ini mencapai 800-12000 kg/ha. Mulai berbunga pada umur 32-34 bulan. Agak tahan terhadap penyakit karat daun.\r\n?	Andung sari-1. Produktivitas sekitar 350 kg/ha. Mulai berbunga pada umur 15-24 bulan. Bila ditanam diketinggian kurang dari 900 meter, varietas ini rentan terhadap serangan karat daun namun cukup tahan ditanam di daerah yang kurang subur.\r\n?	Sigarar Utang. Produktivitasnya mencapai 1500 kg per hektar. Varietas ini memilikikeistimewaan bisa berbuah terus menerus mengikuti pola sebaran hujan. Bijinya berukuran besar, rentan terhadap hama bubuk buah dan nematoda, namun cukup tahan karat daun. Disarankan ditanam pada ketinggian di atas 1000 meter dpl.\r\nKarakteristik produk akhir\r\nSecara umum kopi arabika dihargai lebih tinggi dibanding jenis lainnya. Dari segi rasa, arabika mempunyai jangkauan yang luas. Setiap varietas kopi yang ditanam ditempat berbeda akan memiliki perbedaan citarasa yang signifikan.\r\nKopi arabika memiliki aroma yang kuat, sifat kekentalan (body) ringan hingga sedang dan tingkat keasaman tinggi. Kandungan kafeinnya lebih rendah dibanding robusta yaitu sekitar 0,8-1,5%.\r\nPerdagangan kopi arabika\r\nLebih dari 65% perdagangan kopi dunia di dominasi oleh jenis arabika. Selain mendominasi pangsa pasar, saat ini kopi arabika dihargai lebih tinggi hampir dua kali lipatnya dibanding robusta. Pusat perdagangan arabika berada di bursa komoditi New York.\r\nPenghasil kopi arabika terbesar ada di negara-negara Amerika Latin. Hampir 90% produksi kopi negara-negara Amerika Latin jenis arabika. Brasil merupakan produsen arabika terbesar dunia. Sedangkan konsumen kopi terbesar dunia adalah negara-negara Uni Eropa, disusul Amerika Serikat dan Jepang.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `keluhan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`id`, `nama`, `username`, `keluhan`) VALUES
(1, 'Alam Fajaray', 'alamdhe', 'Webnya kok jelek sih'),
(5, 'Alam Fajaray', 'alamdhe', 'Bintang tiga'),
(8, 'Fanan ninini', 'test', 'Perutku sakit');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `idkomentar` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`idkomentar`, `id`, `komentar`, `username`, `tanggal`) VALUES
(3, 6, 'Wah, sangat bermanfaat sekali artikelnya', 'alamdhe', '2018-05-16'),
(4, 6, 'Sering-sering update ya\r\n', 'alamdhe', '2018-05-16'),
(5, 1, 'Artikelnya mantab sekali ini bos\r\n', 'test', '2018-05-16'),
(6, 1, 'kunjungi blog saya juga ya, www.makanmakan.tk', 'test', '2018-05-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`idkomentar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `idkomentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
