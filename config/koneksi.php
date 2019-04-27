<?php

// properti koneksi
$host = "localhost";
$username = "root";
$password = NULL;
$dbname = "nama_database";

// membuat koneksi ke database dan ditampung di variable $koneksi
$koneksi = new mysqli($host, $username, $password, $dbname) or die("koneksi ke database tidak berhasil");
