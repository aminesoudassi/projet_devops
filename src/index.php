</head>
<body>
    <?php
    if (isset($_GET['success'])) {
        $success = $_GET['success'];
        if ($success == 'category') {
            echo "<div class='success-message'>Catégorie ajoutée avec succès</div>";
        } elseif ($success == 'product') {
            echo "<div class='success-message'>Produit ajouté avec succès</div>";
        }
    }

    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 'category_not_found') {
            echo "<div class='error-message'>La catégorie spécifiée n'existe pas. Veuillez vérifier l'ID de la catégorie.</div>";
        }
    }
    ?>
    <div id="all">
        <div id="one">
            <h2>Ajouter une catégorie de produit</h2>
            <form action="add_category.php" method="post">
                <label for="category_name">Nom de la catégorie :</label><br>
                <input type="text" id="category_name" name="category_name" required><br><br>
                <input type="submit" value="Ajouter">
            </form>
            <h2>Voir toutes les catégories</h2>
            <form action="view_categories.php" method="get">
                <input type="submit" value="Voir">
            </form>
        </div>
        <div id="two">
            <h2>Ajouter un produit</h2>
            <form action="add_product.php" method="post">
                <label for="product_name">Nom du produit :</label><br>
                <input type="text" id="product_name" name="product_name" required><br><br>
                <label for="price">Prix :</label><br>
                <input type="number" id="price" name="price" required><br><br>
                <label for="category_id">ID de catégorie :</label><br>
                <input type="number" id="category_id" name="category_id" required><br><br>
                <input type="submit" value="Ajouter">
            </form>

            <h2>Voir tous les produits</h2>
            <form action="view_products.php" method="get">
                <input type="submit" value="Voir">
            </form>
        </div>

    </div>



</body>
</html>
