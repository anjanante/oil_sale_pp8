<!-- Breadcrumbs-->
<div class="bg-dark py-6">
    <div class="container-fluid">
        <nav class="m-0" aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item breadcrumb-light"><a href="#">Home</a></li>
                <li class="breadcrumb-item breadcrumb-light"><a href="/index.php/products">oils</a></li>
                <li class="breadcrumb-item  breadcrumb-light active" aria-current="page"><?= $aProduct['name'] ?></li>
            </ol>
        </nav>
    </div>
</div>
<!-- / Breadcrumbs-->
<div class="container-fluid mt-5">
    <!-- Product Top Section-->
    <div class="row g-9" data-sticky-container>

        <!-- Product Images-->
        <div class="col-12 col-md-6 col-xl-7">
            <div class="row g-3" data-aos="fade-right">
                <div class="col-12">
                    <picture>
                        <?php  
                                $sFilePath = $aProduct['filename'] == ERROR_FILE ? "./assets/images/404.jpg" : "./uploads/".$aProduct['filename'];
                        ?>
                        <img class="img-fluid" data-zoomable src="<?= $sFilePath ?>" alt="<?= $aProduct['name'] ?>">
                    </picture>
                </div>
                <!-- FOR MORE IMAGES -->
                <!-- <div class="col-12">
                    <picture>
                        <img class="img-fluid" data-zoomable src="./assets/images/products/product-page-2.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                </div>
                <div class="col-12">
                    <picture>
                        <img class="img-fluid" data-zoomable src="./assets/images/products/product-page-3.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                </div>
                <div class="col-12">
                    <picture>
                        <img class="img-fluid" data-zoomable src="./assets/images/products/product-page-4.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                </div> -->
            </div>
        </div>
        <!-- /Product Images-->

        <!-- Product Information-->
        <div class="col-12 col-md-6 col-lg-5">
            <div class="sticky-top top-5">
                <div class="pb-3" data-aos="fade-in">
                    <!-- <div class="d-flex align-items-center mb-3">
                        <p class="small fw-bolder text-uppercase tracking-wider text-muted m-0 me-4">KiiKii</p>
                        <div class="d-flex justify-content-start align-items-center disable-child-pointer cursor-pointer" data-pixr-scrollto data-target=".reviews">
                            <!-- Review Stars Small->
                            <div class="rating position-relative d-table">
                                <div class="position-absolute stars" style="width: 80%">
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                    <i class="ri-star-fill text-dark mr-1"></i>
                                </div>
                                <div class="stars">
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                </div>
                            </div> <small class="text-muted d-inline-block ms-2 fs-bolder">(105 reviews)</small>
                        </div>
                    </div> -->

                    <h1 class="mb-1 fs-2 fw-bold"><?= $aProduct['name'] ?></h1>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="fs-4 m-0">Ar<?= $aProduct['price'] ?></p>
                    </div>
                    <!-- <div class="border-top mt-4 mb-3 product-option">
                        <small class="text-uppercase pt-4 d-block fw-bolder">
                            <span class="text-muted">Available Sizes (Mens)</span> : <span class="selected-option fw-bold" data-pixr-product-option="size">M</span>
                        </small>
                        <div class="mt-4 d-flex justify-content-start flex-wrap align-items-start">
                            <div class="form-check-option form-check-rounded">
                                <input type="radio" name="product-option-sizes" value="S" id="option-sizes-0">
                                <label for="option-sizes-0">

                                    <small>S</small>
                                </label>
                            </div>
                            <div class="form-check-option form-check-rounded">
                                <input type="radio" name="product-option-sizes" value="SM" id="option-sizes-1">
                                <label for="option-sizes-1">

                                    <small>SM</small>
                                </label>
                            </div>
                            <div class="form-check-option form-check-rounded">
                                <input type="radio" name="product-option-sizes" value="M" checked id="option-sizes-2">
                                <label for="option-sizes-2">

                                    <small>M</small>
                                </label>
                            </div>
                            <div class="form-check-option form-check-rounded">
                                <input type="radio" name="product-option-sizes" value="L" id="option-sizes-3">
                                <label for="option-sizes-3">

                                    <small>L</small>
                                </label>
                            </div>
                            <div class="form-check-option form-check-rounded">
                                <input type="radio" name="product-option-sizes" value="Xl" id="option-sizes-4">
                                <label for="option-sizes-4">

                                    <small>XL</small>
                                </label>
                            </div>
                            <div class="form-check-option form-check-rounded">
                                <input type="radio" name="product-option-sizes" value="XXL" id="option-sizes-5">
                                <label for="option-sizes-5">

                                    <small>XXL</small>
                                </label>
                            </div>
                        </div>
                    </div> -->
                    <div class="mb-3">
                        <small class="text-uppercase pt-4 d-block fw-bolder text-muted">
                            Available Designs :
                        </small>
                        <div class="mt-4 d-flex justify-content-start flex-wrap align-items-start">
                            <picture class="me-2">
                                <img class="f-w-24 p-2 bg-light border-bottom border-dark border-2 cursor-pointer" src="https://picsum.photos/350/350?random=1" alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                            <picture>
                                <img class="f-w-24 p-2 bg-light cursor-pointer" src="https://picsum.photos/350/350?random=2" alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                    </div>
                    <button class="btn btn-dark w-100 mt-4 mb-0 hover-lift-sm hover-boxshadow">Add To Shopping Bag</button>

                    <!-- Product Highlights-->
                    <div class="my-5">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="text-center px-2">
                                    <i class="ri-24-hours-line ri-2x"></i>
                                    <small class="d-block mt-1">Next-day Delivery</small>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="text-center px-2">
                                    <i class="ri-secure-payment-line ri-2x"></i>
                                    <small class="d-block mt-1">Secure Checkout</small>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="text-center px-2">
                                    <i class="ri-service-line ri-2x"></i>
                                    <small class="d-block mt-1">Free Returns</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Product Highlights-->

                    <!-- Product Accordion -->
                    <div class="accordion" id="accordionProduct">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Product Details
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionProduct">
                                <div class="accordion-body">
                                    <p class="m-0"><?= $aProduct['description'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Delivery & Returns
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionProduct">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex border-0 row g-0 px-0">
                                            <span class="col-4 fw-bolder">Delivery</span>
                                            <span class="col-7 offset-1">Standard delivery free for orders over $99. Next day delivery $9.99</span>
                                        </li>
                                        <li class="list-group-item d-flex border-0 row g-0 px-0">
                                            <span class="col-4 fw-bolder">Returns</span>
                                            <span class="col-7 offset-1">30 day return period. See our <a class="text-link-border" href="#">terms & conditions.</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Product Accordion-->
                </div>
            </div>
        </div>
        <!-- / Product Information-->
    </div>
    <!-- / Product Top Section-->
</div>
<!-- / container-fluid-->