<?php
if (isset($_GET['nama'])) {
    $nama = htmlspecialchars($_GET['nama']); // untuk keamanan
    echo "Halo, $nama!";
} else {
    echo "Halo, pengunjung!";
}
?>