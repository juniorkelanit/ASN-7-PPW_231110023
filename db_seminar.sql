CREATE DATABASE IF NOT EXISTS seminar_db;
USE seminar_db;

CREATE TABLE IF NOT EXISTS pendaftaran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_peserta VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    no_hp VARCHAR(20) NOT NULL,
    nama_event VARCHAR(100) NOT NULL,
    tanggal_daftar DATE NOT NULL
);
