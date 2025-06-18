<!doctype html>
<html lang="en">
<head>
    <?php include 'include/head.php' ?>
    <title>Modifier catégorie</title>
</head>
<body>
<?php include 'include/nav.php' ?>
<div class="container py-2">
    <h4>Modifier catégorie</h4>
    <?php
    require_once 'include/database.php';
    $sqlState = $pdo->prepare('SELECT * FROM categorie WHERE id=?');
    $id = $_GET['id'];
    $sqlState->execute([$id]);

    $category = $sqlState->fetch(PDO::FETCH_ASSOC);
    if (isset($_POST['modifier'])) {
        $libelle = $_POST['libelle'];
       
        $icone = $_POST['icone'];

        if (!empty($libelle)) {
            $sqlState = $pdo->prepare('UPDATE categorie
                                                SET lebelle = ? ,
                                                    icon = ?
                                            WHERE id = ?
                                            ');
            $sqlState->execute([$libelle, $icone, $id]);
            header('location: categories.php');
        } else {
            ?>
            <div class="alert alert-danger" role="alert">
                Libelle , description sont obligatoires
            </div>
            <?php
        }

    }

    ?>
    <form method="post">
        <input type="hidden" class="form-control" name="id" value="<?php echo $category['id'] ?>">
        <label class="form-label">Libelle</label>
        <input type="text" class="form-control" name="libelle" value="<?php echo $category['lebelle'] ?>">

        <label class="form-label">Icône</label>
        <input type="text" class="form-control" name="icone" value="<?php echo $category['icon'] ?>">

        <input type="submit" value="Modifier catégorie" class="btn btn-primary my-2" name="modifier">
    </form>
</div>

</body>
</html>