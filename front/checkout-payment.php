<!-- Page Content Goes Here -->
<div class="container">
    <div class="row g-0 vh-lg-100">
        <div class="col-lg-7 pt-5 pt-lg-10">
            <div class="pe-lg-5">
                <nav class="d-none d-md-block">
                    <ul class="list-unstyled d-flex justify-content-start mt-4 align-items-center fw-bolder small">
                        <li class="me-4"><a class="nav-link-checkout " href="./cart.html">Your Cart</a></li>
                        <!-- <li class="me-4"><a class="nav-link-checkout " href="./checkout.html">Information</a></li>
                        <li class="me-4"><a class="nav-link-checkout " href="./checkout-shipping.html">Shipping</a></li> -->
                        <li><a class="nav-link-checkout nav-link-last active" href="./checkout-payment.html">Payment</a></li>
                    </ul>
                </nav>
                <div class="mt-5">
                    <!-- Checkout Information Summary ->
                    <ul class="list-group mb-5 d-none d-lg-block rounded-0">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-start align-items-center">
                                <span class="text-muted small me-2 f-w-36 fw-bolder">Contact</span>
                                <span class="small">test@email.com</span>
                            </div>
                            <a href="./checkout.html" class="text-muted small" role="button">Change</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-start align-items-center">
                                <span class="text-muted small me-2 f-w-36 fw-bolder">Deliver To</span>
                                <span class="small">123 Street, London, SM3 5TY, United Kingdom</span>
                            </div>
                            <a href="./checkout-shipping.html" class="text-muted small" role="button">Change</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-start align-items-center">
                                <span class="text-muted small me-2 f-w-36 fw-bolder">Method</span>
                                <span class="small">UPS Priority Delivery</span>
                            </div>
                            <a href="./checkout-shipping.html" class="text-muted small" role="button">Change</a>
                        </li>
                    </ul><!-- / Checkout Information Summary-->

                    <!-- Checkout Panel Information-->
                    <h3 class="fs-5 fw-bolder mb-4 border-bottom pb-4">Payment Information</h3>

                    <div class="row">

                        <!-- Payment Option->
                        <div class="col-12">
                            <div class="form-check form-group form-check-custom form-radio-custom mb-3">
                                <input class="form-check-input" type="radio" name="checkoutPaymentMethod" id="checoutPaymentStripe" checked>
                                <label class="form-check-label" for="checoutPaymentStripe">
                                    <span class="d-flex justify-content-between align-items-start">
                                        <span>
                                            <span class="mb-0 fw-bolder d-block">Credit Card (Stripe)</span>
                                        </span>
                                        <i class="ri-bank-card-line"></i>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <!-- Payment Option-->
                        <div class="col-12">
                            <div class="form-check form-group form-check-custom form-radio-custom mb-3">
                                <input class="form-check-input" type="radio" name="checkoutPaymentMethod" id="checkoutPaymentPaypal" checked>
                                <label class="form-check-label" for="checkoutPaymentPaypal">
                                    <span class="d-flex justify-content-between align-items-start">
                                        <span>
                                            <span class="mb-0 fw-bolder d-block">
                                                PayPal
                                            </span>
                                        </span>
                                        <i class="ri-paypal-line"></i>
                                    </span>
                                </label>
                            </div>
                        </div>

                    </div>

                    <!-- Payment Details->
                    <div class="card-details">
                        <div class="row pt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="cc-name" class="form-label">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                    <small class="text-muted">Full name as displayed on card</small>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="cc-number" class="form-label">Credit card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cc-expiration" class="form-label">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="d-flex">
                                        <label for="cc-cvv" class="form-label d-flex w-100 justify-content-between align-items-center">Security Code</label>
                                        <button type="button" class="btn btn-link p-0 fw-bolder fs-xs text-nowrap" data-bs-toggle="tooltip" data-bs-placement="top" title="A CVV is a number on your credit card or debit card that's in addition to your credit card number and expiration date">
                                            What's this?
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Payment Details-->

                    <!-- Paypal Info-->
                    <div class="paypal-details bg-light p-4 my-3 fw-bolder">
                        Please click on complete order. You will then be transferred to Paypal to enter your payment details.
                    </div>
                    <!-- /Paypal Info-->

                    <div class="row">
                        <div id="paypal-button-container"></div>
                    </div>

                    <!-- Accept Terms Checkbox-->
                    <div class="form-group form-check m-0">
                        <input type="checkbox" class="form-check-input" id="accept-terms" checked>
                        <label class="form-check-label fw-bolder" for="accept-terms">I agree to NanteDevy's <a href="#">terms &
                                conditions</a></label>
                    </div>

                    <div class="pt-5 mt-5 pb-5 border-top d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <a href="index.php/cart" class="btn ps-md-0 btn-link fw-bolder w-100 w-md-auto mb-2 mb-md-0" role="button">Back to
                            Cart</a>
                        <a id="button-paypal" href="#" class="btn btn-dark w-100 w-md-auto" role="button">Complete Order</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5 bg-light pt-lg-10 aside-checkout pb-5 pb-lg-0 my-5 my-lg-0">
            <div class="p-4 py-lg-0 pe-lg-0 ps-lg-5">
                <div class="pb-3">
                    <!-- Cart Item-->
                    <?php include $_SERVER['DOCUMENT_ROOT'] . "/_partials/cart_product.php" ?>
                    <!-- / Cart Item-->
                </div>
                <div class="py-4 border-bottom">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <p class="m-0 fw-bolder fs-6">Subtotal</p>
                        <p class="m-0 fs-6 fw-bolder"><?= CURRENCY ?><?= $_SESSION['total-cart-price'] ?? 0 ?></p>
                    </div>
                    <!--div class="d-flex justify-content-between align-items-center ">
                        <p class="m-0 fw-bolder fs-6">Shipping</p>
                        <p class="m-0 fs-6 fw-bolder">$8.95</p>
                    </div-->
                </div>
                <div class="py-4 border-bottom">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="m-0 fw-bold fs-5">Grand Total</p>
                            <span class="text-muted small">Inc sales tax</span>
                        </div>
                        <p class="m-0 fs-5 fw-bold"><?= CURRENCY ?><?= $_SESSION['total-cart-price'] ?? 0 ?></p>
                    </div>
                </div>
                <!--div class="py-4">
                    <div class="input-group mb-0">
                        <input type="text" class="form-control" placeholder="Enter your coupon code">
                        <button class="btn btn-dark btn-sm px-4">Apply</button>
                    </div>
                </div-->
            </div>
        </div>
    </div>
</div>
<!-- /Page Content -->
<!-- <script src="https://www.paypalobjects.com/api/checkout.js"></script> -->
<script src="https://www.paypal.com/sdk/js?client-id=<?= PAYPAL_ID ?>&currency=USD"></script>
<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({
        style: {
            layout: 'horizontal'
        },

        createOrder: function(data, actions) {
            return actions.order.create(<?= json_encode($aOrder) ?>);
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                console.log(details);
                alert('Transaction completed by ' + details.payer.name.given_name);
    //                 window.location = "/index.php/pay?paymentID=" + data.paymentID + "&token=" + data.paymentToken + "&payerID=" + data.payerID + "&pid=<?php echo rand(0, 9); ?>";
            });
        },
        onError: function(err) {
            console.error(err);
        }
    }).render('#paypal-button-container');

    // paypal.Button.render({
    //     // Configure environment
    //     env: 'sandbox',
    //     client: {
    //         sandbox: '<?= PAYPAL_ID ?>'
    //     },
    //     // Customize button (optional)
    //     locale: 'fr_FR',
    //     style: {
    //         size: 'small',
    //         color: 'gold',
    //         shape: 'pill',
    //     },
    //     // Set up a payment
    //     payment: function(data, actions) {
    //         return actions.payment.create({
    //             transactions: [{
    //                 amount: {
    //                     total: '<?= isset($_SESSION['total-cart-price']) ? (int)($_SESSION['total-cart-price'] / DOLLAR_RATE) : 1 ?>',
    //                     currency: 'USD'
    //                 }
    //             }]
    //         });
    //     },
    //     // Execute the payment
    //     onAuthorize: function(data, actions) {
    //         return actions.payment.execute()
    //             .then(function() {
    //                 // Show a confirmation message to the buyer
    //                 window.alert('Thank you for your purchase!');

    //                 // Redirect to the payment process page
    //                 window.location = "/index.php/pay?paymentID=" + data.paymentID + "&token=" + data.paymentToken + "&payerID=" + data.payerID + "&pid=<?php echo rand(0, 9); ?>";
    //             });
    //     }
    // }, '#paypal-button-container');
</script>