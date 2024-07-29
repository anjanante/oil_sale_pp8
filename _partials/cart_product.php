<?php if (isset($_SESSION['cart']) && $_SESSION['cart']) : ?>
<?php foreach ($_SESSION['cart'] as $nIdProduct => $aData) : ?>
    <!-- Cart Item-->
    <div class="row mx-0 py-4 g-0 border-bottom">
        <div class="col-2 position-relative">
            <span class="checkout-item-qty"><?= $aData['quantity'] ?></span>
            <?php
            $sFilePath = $aData['filename'] == ERROR_FILE ? "./assets/images/404.jpg" : "./uploads/" . $aData['filename'];
            ?>
            <picture class="d-block border">
                <img class="img-fluid" src="<?= $sFilePath ?>" alt="HTML Bootstrap Template by Pixel Rocket">
            </picture>
        </div>
        <div class="col-9 offset-1">
            <div>
                <h6 class="justify-content-between d-flex align-items-start mb-2">
                    <?= $aData['name'] ?>
                    <a class="text-decoration-none" href="index.php/cart/del?id=<?= $nIdProduct ?>">
                        <i class="ri-close-line ms-3"></i>
                    </a>
                </h6>
                <span class="d-block text-muted fw-bolder text-uppercase fs-9">Qty: <?= $aData['quantity'] ?></span>
            </div>
            <p class="fw-bolder text-end text-muted m-0">Ar<?= $aData['price'] ?? '' ?></p>
        </div>
    </div>
    <!-- / Cart Item-->
<?php endforeach; ?>
<?php endif; ?>