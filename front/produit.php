<?php
session_start();
require_once '../include/database.php';
$id = $_GET['id'];
$sqlState = $pdo->prepare("SELECT * FROM produit WHERE id=?");
$sqlState->execute([$id]);
$produit = $sqlState->fetch(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en">
<head>
    <?php include '../include/head_front.php' ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <title>Produit | <?php echo $produit['lebelle'] ?></title>
    <style>
        .swiper {
            width: 100%;
            height: 400px;
        }
        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
    </style>
</head>
<body>
<?php include '../include/nav_front.php' ?>

<div class="container py-2">
    <h4><?php echo $produit['lebelle'] ?></h4>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                    $stmt = $pdo->prepare("SELECT image_path FROM produit_image WHERE produit_id = ?");
                    $stmt->execute([$produit['id']]);
                    $images = $stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                            <?php foreach ($images as $img): ?>
                                <div class="swiper-slide">
                                    <img src="../upload/produit/<?= htmlspecialchars($img['image_path']) ?>" alt="image produit">
                                </div>
                            <?php endforeach; ?>
                    </div>
                    <!-- Navigation buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-center">
                    <h1 class="w-100"><?php echo $produit['lebelle'] ?></h1>
                </div>
                <hr>
                <p class="text-justify"><?php echo $produit['description'] ?></p>
                <hr>
                <div class="d-flex">
                    <h5 class="mx-1">
                        <span class="badge text-bg-success">
                            <?php echo $produit['prix'] ?> <i class="fa fa-solid fa-dollar"></i>
                        </span>
                    </h5>
                </div>
                <hr>
                <?php
                $idProduit = $produit['id'];
                include '../include/front/counter.php';
                ?>
                <hr>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper(".mySwiper", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        spaceBetween: 20
    });
</script>
</body>
</html>
