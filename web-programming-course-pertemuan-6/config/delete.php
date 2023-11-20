<?php
require './config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($db_connect, "DELETE FROM products WHERE id=$id");

    if ($result) {
        echo "Produk berhasil dihapus.";
    } else {
        echo "Gagal menghapus produk.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
