<?php
require './config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $result = mysqli_query($db_connect, "UPDATE products SET name='$name', price='$price' WHERE id=$id");

    if ($result) {
        echo "Produk berhasil diperbarui.";
    } else {
        echo "Gagal memperbarui produk.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
