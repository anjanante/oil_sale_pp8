<!-- Page Content Goes Here -->
<div class="container">
    <div class="row g-0 vh-lg-100">
        <div class="col-12 col-lg-7 pt-5 pt-lg-10">
            <div class="pe-lg-5">
                <nav class="d-none d-md-block">
                    <ul class="list-unstyled d-flex justify-content-start mt-4 align-items-center fw-bolder small">
                        <li class="me-4"><a class="nav-link-checkout active" href="./cart.html">Your Cart</a></li>
                        <!-- <li class="me-4"><a class="nav-link-checkout " href="./checkout.html">Information</a></li>
                        <li class="me-4"><a class="nav-link-checkout " href="./checkout-shipping.html">Shipping</a></li> -->
                        <li><a class="nav-link-checkout nav-link-last " href="index.php/checkout-payment">Payment</a></li>
                    </ul>
                </nav>
                <div class="mt-5">
                    <h3 class="fs-5 fw-bolder mb-0 border-bottom pb-4">Your Cart</h3>
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <tbody class="border-0">
                                <?php include __DIR__ . "/../_partials/cart_product.php" ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5 bg-light pt-lg-10 aside-checkout pb-5 pb-lg-0 my-5 my-lg-0">
            <div class="p-4 py-lg-0 pe-lg-0 ps-lg-5">
                <div class="pb-4 border-bottom">
                    <div class="d-flex flex-column flex-md-row justify-content-md-between mb-4 mb-md-2">
                        <div>
                            <p class="m-0 fw-bold fs-5">Grand Total</p>
                            <span class="text-muted small">Inc sales tax</span>
                        </div>
                        <p class="m-0 fs-5 fw-bold">Ar<?= $_SESSION['total-cart-price'] ?? 0 ?></p>
                    </div>
                </div>
                <!-- form for coupon -->
                <!-- <div class="py-4">
                            <div class="input-group mb-0">
                                <input type="text" class="form-control" placeholder="Enter coupon code">
                                <button class="btn btn-secondary btn-sm px-4">Apply</button>
                            </div>
                        </div> -->
                <a href="index.php/checkout-payment" class="btn btn-dark w-100 text-center" role="button">Proceed to checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- /Page Content -->