<!doctype html>
<html lang="en">
<head>
    <?php include 'include/head.php' ?>
    <title>Ajouter produit</title>
</head>
<body>
<?php
require_once 'include/database.php';
include 'include/nav.php' ?>
<div class="container py-2">
    <h4>Ajouter produit</h4>
    <?php
    if (isset($_POST['ajouter'])) {
        $lebelle = $_POST["lebelle"];
        $prix = $_POST["prix"];
        $description = $_POST["description"];
        $categorie = $_POST["categorie"];
        $mainImageFilename = 'default.png';

        if (!empty($_FILES['images']['name'][0])) {
            $firstImageName = $_FILES['images']['name'][0];
            $tmp_name = $_FILES['images']['tmp_name'][0];
            $mainImageFilename = uniqid() . '_' . basename($firstImageName);
            $destination = 'upload/produit' . $mainImageFilename;
            move_uploaded_file($tmp_name, $destination);
        }

    
        if (!empty($lebelle) && !empty($prix) && !empty($categorie) && !empty($mainImageFilename)) {
            $sqlState = $pdo->prepare('INSERT INTO produit (lebelle, description, prix,image, id_categorie) VALUES(?,?,?,?,?)');
            $inserted = $sqlState->execute([$lebelle, $description, $prix,$mainImageFilename,$categorie]);
            
    
            if ($inserted) {
                $produit_id = $pdo->lastInsertId();
    
              
                foreach ($_FILES['images']['name'] as $key => $name) {
                    if (!empty($name)) {
                        $tmp_name = $_FILES['images']['tmp_name'][$key];
                        $unique_name = uniqid() . '_' . basename($name);
                        $destination = 'upload/produit/' . $unique_name;
                        move_uploaded_file($tmp_name, $destination);
                
                        $stmt = $pdo->prepare('INSERT INTO produit_image (produit_id, image_path) VALUES (?, ?)');
                        $stmt->execute([$produit_id, $unique_name]);
                    }
                }                
    
                header('Location: produits.php');
            } else {
                echo '<div class="alert alert-danger">Erreur lors de l\'insertion du produit.</div>';
            }
        } else {
            echo '<div class="alert alert-danger">Libellé, prix et catégorie sont obligatoires.</div>';
        }
}
    
    ?>
    <form method="post" enctype="multipart/form-data">
        <label class="form-label">lebelle</label>
        <input type="text" class="form-control" name="lebelle" required >

        <label class="form-label">Prix</label>
        <input type="number" class="form-control" name="prix" min="0" required >

        <label class="form-label">Description</label required >
        <textarea class="form-control" name="description"></textarea>

        <label class="form-label">Images</label>
        <input type="file" class="form-control" name="images[]" multiple>


        <?php
        $categories = $pdo->query('SELECT * FROM categorie')->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <label class="form-label">Catégorie</label>
        <select name="categorie" class="form-control" required >
            <option value="">Choisissez une catégorie</option>
            <?php
            foreach ($categories as $categorie) {
                echo "<option value='" . $categorie['id'] . "'>" . $categorie['lebelle'] . "</option>";
            }
            ?>
        </select>

        <input type="submit" value="Ajouter produit" class="btn btn-primary my-2" name="ajouter">
    </form>
</div>

</body>
</html>