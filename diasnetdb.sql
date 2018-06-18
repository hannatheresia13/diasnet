/*
SQLyog Community v11.52 (32 bit)
MySQL - 5.5.32 : Database - diasnetdb
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`diasnetdb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `diasnetdb`;

/*Table structure for table `basis_aturan` */

DROP TABLE IF EXISTS `basis_aturan`;

CREATE TABLE `basis_aturan` (
  `id_gejala` varchar(10) DEFAULT NULL,
  `pertanyaan` varchar(300) DEFAULT NULL,
  `fakta_ya` varchar(150) DEFAULT NULL,
  `fakta_tidak` varchar(150) DEFAULT NULL,
  `ngejala_akut` double NOT NULL,
  `ngejala_kronis` double NOT NULL,
  `ngejala_periodik` double NOT NULL,
  `rute` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `id_penyakit` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `basis_aturan` */

insert  into `basis_aturan`(`id_gejala`,`pertanyaan`,`fakta_ya`,`fakta_tidak`,`ngejala_akut`,`ngejala_kronis`,`ngejala_periodik`,`rute`,`status`,`id_penyakit`) values ('g1','Apakah ada bunyi napas (mengi)?','Ada bunyi napas(mengi)','Tidak terasa bunyi napas (mengi)',0.83,0.75,0.33,'g2','',0),('g2','Apakah batuk?','Batuk','Tidak batuk',0.83,0.88,0.67,'g3','',0),('g3','Apakah sesak napas tiba-tiba?','Sesak napas tiba-tiba','Tidak terjadi Sesak napas tiba-tiba',0.83,1,0.83,'g4','',0),('g4','Apakah intensitas sesak yang berat?','Intensitas sesak yang berat','Tidak terjadi intensitas sesak yang berat',0.67,0.5,0.33,'g5','',0),('g5','Apakah dada terasa berat?','Dada terasa berat','Dada tidak terasa berat',0,0.5,0.17,'g6','',0),('g6','Apakah gelisah?','Gelisah','Tidak Gelisah',0.5,0.38,0.67,'g7','',0),('g7','Apakah sesak napas kambuh-kambuh?','Sesak napas kambuh-kambuh','Tidak mengalami Sesak napas kambuh-kambuh',0.67,0.38,0.5,'g8','',0),('g8','Apakah intensitas sesak dari ringan hingga sedang','Intensitas sesak dari ringan sampai sedang','Tidak mengalami intensitas sesak ringan sampai sedang',0.33,0.5,0.17,'g9','',0),('g9','Apakah kadang ada bunyi napas(mengi) dan kadang tidak?','Kadang mengi kadang tidak','Tidak ada bunyi napas',0.17,0.5,0.5,'g10','',0),('g10','Apakah kadang batuk?','Kadang batuk','Tidak batuk',0.17,0.25,0.83,'g11','',0),('g11','Apakah sesak napas yang sering kambuh karena penyebab tertentu misal debu, asap, dan udara dingin?','Sesak napas yang sering kambuh, karena penyebab tertentu misal debu, asap, dan udara dingin.','Tidak pernah mengalami sesak napas',0,1,0,'final','',0);

/*Table structure for table `daftar_gejala` */

DROP TABLE IF EXISTS `daftar_gejala`;

CREATE TABLE `daftar_gejala` (
  `id_gejala` varchar(10) DEFAULT NULL,
  `gejala` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `daftar_gejala` */

insert  into `daftar_gejala`(`id_gejala`,`gejala`) values ('g1','ada bunyi saat bernafas'),('g2','batuk'),('g3','sesak napas tiba-tiba'),('g4','intensitas sesak napas yang berat'),('g5','dada terasa berat'),('g6','gelisah'),('g7','sering sesak napas'),('g8','sering sesak ringan sampai berat'),('g9','bunyi napas kadang terdengar kadang tidak'),('g10','kadang ada batuk'),('g11','sesak napas akibat sesuatu seperti debu, asap, uda');

/*Table structure for table `daftar_penyakit` */

DROP TABLE IF EXISTS `daftar_penyakit`;

CREATE TABLE `daftar_penyakit` (
  `id_penyakit` varchar(10) DEFAULT NULL,
  `nama_penyakit` varchar(50) DEFAULT NULL,
  `npenyakit` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `daftar_penyakit` */

insert  into `daftar_penyakit`(`id_penyakit`,`nama_penyakit`,`npenyakit`) values ('p1','asma akut',0.3),('p2','asma kronis',0.3),('p3','asma periodik',0.4);

/*Table structure for table `daftar_solusi` */

DROP TABLE IF EXISTS `daftar_solusi`;

CREATE TABLE `daftar_solusi` (
  `id_solusi` varchar(10) DEFAULT NULL,
  `solusi` varchar(300) DEFAULT NULL,
  `id_penyakit` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `daftar_solusi` */

insert  into `daftar_solusi`(`id_solusi`,`solusi`,`id_penyakit`) values ('s0','Anda tidak terdeteksi menderita penyakit asma','p0'),('s1','Dapat menggunakan obat-obatan asma inhaler nebulizer atau suntikan','p2'),('s2','Hindari penyebab asma, minum obat  asma saat terasa sesak, olahraga, dan jangan terlalu lelah','p3'),('s3','Hindari penyebab asma, minum obat asma jika kambuh, olah raga, hidari stres, dan jangan terlalu lelah','p1'),('s4','Hindari penyebab alergi misalnya debu, tepung sari, makanan tertentu, terkadang sembuh sendiri tanpa obat, desensitiasi','p2'),('s5','Obat penyebab infeksi misalnya dengan antibiotik, dan minum obat asma','p3'),('s6','Dapat diberikan nebulizer, beri oksigen, dan suntik obat-obatan asma.','p1'),('s7','Dapat diberikan nebulizer, beri oksigen, dan obat-obatan oral.','p2'),('s8','Dapat diberikan nebulizer dan obat-obatan oral.','p3'),('s9','Ubahlah kondisi kerja. Hal ini dapat berupa dipindahkan kebagian lain.','p1'),('s10','Dapat diberikan obat Montelukast (Singulair) dan obat antagonis reseptor leukotrin yang dapat mencegah leukotrin agar tidak dapat bekerja secara normal.','p3'),('s11','Pilih dan batasi beberapa jenis olahraga serta konsultasikan dengan profesional kesehatan atau dokter.','p2'),(NULL,NULL,'');

/*Table structure for table `daftar_user` */

DROP TABLE IF EXISTS `daftar_user`;

CREATE TABLE `daftar_user` (
  `id_user` int(15) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `usia` int(10) DEFAULT NULL,
  `tgl_diagnosa` date DEFAULT NULL,
  `keterangan` varchar(35) DEFAULT NULL,
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `daftar_user` */

insert  into `daftar_user`(`id_user`,`nama`,`password`,`jenis_kelamin`,`usia`,`tgl_diagnosa`,`keterangan`) values (1,'hendras','pass','pria',21,'2015-11-22','Negatif Asma (Normal)'),(2,'jimi','pass2','pria',21,'2015-11-15','-'),(3,'wili','pass3','pria',21,'2015-11-10','-'),(4,'mike','pass4','pria',21,'2015-11-19','-');

/*Table structure for table `mail` */

DROP TABLE IF EXISTS `mail`;

CREATE TABLE `mail` (
  `id_mail` int(15) NOT NULL AUTO_INCREMENT,
  `nama_pengirim` varchar(30) DEFAULT NULL,
  `email_pengirim` varchar(100) DEFAULT NULL,
  `pesan` text,
  KEY `id_mail` (`id_mail`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `mail` */

insert  into `mail`(`id_mail`,`nama_pengirim`,`email_pengirim`,`pesan`) values (1,'Your Name *','Your E-mail *','Your Message *'),(2,'hendras','hendras.com','wohoooo');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
