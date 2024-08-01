<?php
$conn = new mysqli('db', 'php_docker', 'root', 'php_docker');
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Product";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
</head>
<body>
    <a href="index.php">Back Home</a>
    <h2>Liste des produits</h2>
    <table>
        <tr>
            <th>Nom du produit</th>
            <th>Prix</th>
            <th>ID de catégorie</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["product_name"]. "</td><td>" . $row["price"]. "</td><td>" . $row["category_id"]. "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Aucun produit trouvé</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
