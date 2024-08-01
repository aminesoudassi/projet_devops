<?php
$conn = new mysqli('db', 'php_docker', 'root', 'php_docker');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category_name = $_POST['category_name'];

    $sql = "INSERT INTO Category_Product (category_name) VALUES ('$category_name')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?success=category");
        exit();
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
