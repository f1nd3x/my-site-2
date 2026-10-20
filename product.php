<?php
require_once 'db.php';
$product = null;

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Карточка товара</title>
</head>
<body>
    <a href="index.php">Назад к списку</a>
    <hr>
    <?php if ($product): ?>
        <h1>Карточка товара</h1>
        <p><b>ID:</b> <?php echo $product['id']; ?></p>
        <p><b>Назавание:</b> <?php echo $product['title']; ?></p>
        <p><b>Цена:</b> <?php echo $product['price']; ?></p>
    <?php else: ?>
        <p>Товар не найден!</p>
    <?php endif; ?>
</body>
</html>
