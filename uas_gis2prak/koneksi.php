<?php
    $conn = new mysqli("localhost", "root", "", "uas_gis2prak");

    if (!$conn) {
        echo 'koneksi gagal';
    }
?>