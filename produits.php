<!doctype html>
<html lang="en">
<head>
    <?php include 'include/head.php' ?>
    <title>Liste des produits</title>
</head>
<body>
<?php include 'include/nav.php' ?>
<div class="container py-2">
    <h2>Liste des produits</h2>
    <a href="ajouter_produit.php" class="btn btn-primary">Ajouter produit</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Name</th>
                <th>Prix</th>
                <th>Description</th>
                <th>Catégorie</th>
                <th>Date de création</th>
                <th>Image</th>
                <th>Opérations</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once 'include/database.php';
        

        $products = $pdo->query("SELECT produit.*, categorie.lebelle as 'categorie_libelle' FROM produit INNER JOIN categorie ON produit.id_categorie = categorie.id")->fetchAll(PDO::FETCH_OBJ);
        
        foreach ($products as $produit) {
            $prix = $produit->prix;
            
            
            $imageQuery = $pdo->prepare("SELECT image_path FROM produit_image WHERE produit_id = ? ORDER BY id ASC LIMIT 1");
            $imageQuery->execute([$produit->id]);
            $firstImage = $imageQuery->fetch(PDO::FETCH_OBJ);
            
            
            $imagePath = $firstImage ? $firstImage->image_path : 'default.png';
            ?>
            <tr>
                <td><?= $produit->id ?></td>
                <td><?= $produit->lebelle ?></td>
                <td><?= $prix ?> MAD</td>
                <td><?= $produit->description ?></td>
                <td><?= $produit->categorie_libelle ?></td>
                <td><?= $produit->date_creation ?></td>
                <td>
                    <img class="img-fluid" width="90" src="upload/produit/<?= $imagePath ?>" alt="<?= $produit->lebelle ?>" onerror="this.src='upload/produit/default.png'">
                </td>
                <td>
                    <a class="btn btn-primary" href="modifier_produit.php?id=<?php echo $produit->id ?>">Modifier</a>
                    <a class="btn btn-danger" href="supprimer_produit.php?id=<?php echo $produit->id ?>" onclick="return confirm('Voulez vous vraiment supprimer le produit <?php echo $produit->lebelle?> ?')">Supprimer</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>