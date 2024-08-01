<?php
$conn = new mysqli('db', 'php_docker', 'root', 'php_docker');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];

    // Check if the provided category_id exists
    $check_category_sql = "SELECT * FROM Category_Product WHERE category_id = '$category_id'";
    $check_category_result = $conn->query($check_category_sql);

    if ($check_category_result->num_rows > 0) {
        $sql = "INSERT INTO Product (product_name, price, category_id) VALUES ('$product_name', '$price', '$category_id')";

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php?success=product");
            exit();
        } else {
            // Use output buffering to prevent premature output
            ob_start();
            echo "Erreur : " . $sql . "<br>" . $conn->error;
            ob_end_flush();
        }
    } else {
        header("Location: index.php?error=category_not_found");
        exit();
    }
}

$conn->close();
?>

