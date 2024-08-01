<?php
$conn = new mysqli('db', 'php_docker', 'root', 'php_docker');
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Category_Product";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des catégories</title>
</head>
<body>
    <a href="index.php">Back Home</a>
    <h2>Liste des catégories</h2>
    <table>
        <tr>
            <th>ID de catégorie</th>
            <th>Nom de la catégorie</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["category_id"]. "</td><td>" . $row["category_name"]. "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Aucune catégorie trouvée</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>

