create database registrasi_mahasiswa;

use registrasi_mahasiswa;

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL auto_increment,
  `program_pendidikan` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
);