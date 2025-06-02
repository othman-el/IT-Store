<?php
foreach ($produits as $produit) {
    $idProduit = $produit->id;

    // Fetch all images for this product
    $stmt = $pdo->prepare("SELECT image_path FROM produit_image WHERE produit_id = ?");
    $stmt->execute([$idProduit]);
    $images = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <!-- Carousel Slider -->
            <div id="carousel<?= $idProduit ?>" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php if (!empty($images)): ?>
                        <?php foreach ($images as $index => $img): ?>
                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                <img class="d-block w-100 mx-auto" style="max-height: 250px; object-fit: contain;" src="../upload/produit/<?= htmlspecialchars($img['image_path']) ?>" alt="image produit">
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="carousel-item active">
                            <img class="d-block w-100 mx-auto" style="max-height: 250px; object-fit: contain;" src="../upload/produit/<?= htmlspecialchars($produit->image) ?>" alt="image produit">
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (count($images) > 1): ?>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= $idProduit ?>" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $idProduit ?>" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                <?php endif; ?>
            </div>

            <!-- Product Details -->
            <div class="card-body">
                <a href="produit.php?id=<?= $idProduit ?>" class="btn stretched-link"></a>
                <h5 class="card-title"><?= htmlspecialchars($produit->lebelle) ?></h5>
                <p class="card-text"><?= htmlspecialchars($produit->description) ?></p>
                <p class="card-text">
                    <small class="text-muted">Ajouté le : <?= date('Y/m/d', strtotime($produit->date_creation)) ?></small>
                </p>
            </div>
            <div class="card-footer bg-white" style="z-index: 10">
                <div class="h5">
                    <span class="badge rounded-pill text-bg-success"><?= htmlspecialchars($produit->prix) ?> MAD</span>
                </div>
                <?php include '../include/front/counter.php'; ?>
            </div>
        </div>
    </div>
<?php
}
if (empty($produits)) {
    echo '<div class="alert alert-info" role="alert">Pas de produits pour l\'instant</div>';
}
?>
