<?php
require './config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($db_connect, "SELECT * FROM products WHERE id=$id");

    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    } else {
        echo "Produk tidak ditemukan.";
        exit();
    }
} else {
    echo "Permintaan tidak valid.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?=$product['id'];?>">
        Nama Produk: <input type="text" name="name" value="<?=$product['name'];?>" required><br>
        Harga: <input type="text" name="price" value="<?=$product['price'];?>" required><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
