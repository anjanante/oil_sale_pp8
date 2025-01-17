<!-- Category Top Banner -->
<div class="py-10 bg-img-cover bg-overlay-dark position-relative overflow-hidden bg-pos-center-center rounded-0" style="background-image: url(./assets/images/banners/banner-category-top.jpg);">
    <div class="container-fluid position-relative z-index-20" data-aos="fade-right" data-aos-delay="300">
        <h1 class="fw-bold display-6 mb-4 text-white">Latest Arrivals</h1>
        <div class="col-12 col-md-6">
            <p class="text-white mb-0 fs-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quidem cumque nostrum ut magnam blanditiis voluptas earum harum vero eveniet. Eius harum cupiditate ducimus laborum iusto accusantium deserunt consectetur rerum?
            </p>
        </div>
    </div>
</div>
<!-- Category Top Banner -->

<div class="container-fluid" data-aos="fade-in">
    <!-- Category Toolbar-->
    <div class="d-flex justify-content-between items-center pt-5 pb-4 flex-column flex-lg-row">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/index.php/products">Oils</a></li>
                </ol>
            </nav>
            <h1 class="fw-bold fs-3 mb-2">New Releases (<?= count($aProducts) ?>)</h1>
            <!-- <p class="m-0 text-muted small">Showing 1 - 9 of 121</p> -->
        </div>
        <!--div class="d-flex justify-content-end align-items-center mt-4 mt-lg-0 flex-column flex-md-row">

            <!-- Filter Trigger->
            <button class="btn bg-light p-3 me-md-3 d-flex align-items-center fs-7 lh-1 w-100 mb-2 mb-md-0 w-md-auto " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters" aria-controls="offcanvasFilters">
                <i class="ri-equalizer-line me-2"></i> Filters
            </button>
            <!-- / Filter Trigger-->

            <!-- Sort Options->
            <select class="form-select form-select-sm border-0 bg-light p-3 pe-5 lh-1 fs-7">
                <option selected>Sort By</option>
                <option value="1">Hi Low</option>
                <option value="2">Low Hi</option>
                <option value="3">Name</option>
            </select>
            <!-- / Sort Options->
        </div-->
    </div> <!-- /Category Toolbar-->

    <!-- Products-->
    <div class="row g-4">
        <?php foreach ($aProducts as $aProduct) { ?>
        <div class="col-12 col-sm-6 col-lg-4">
            <!-- Card Product-->
            <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                <div class="card-img position-relative">
                    <div class="card-badges">
                        <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-success rounded-circle d-block me-1"></span> New in</span>
                    </div>
                    <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                    <picture class="position-relative overflow-hidden d-block bg-light">
                        <?php  
                                $sFilePath = $aProduct['filename'] == ERROR_FILE ? "./assets/images/404.jpg" : "./uploads/".$aProduct['filename'];
                        ?>
                        <img class="w-100 img-fluid position-relative z-index-10" title="" src="<?= $sFilePath ?>" alt="<?= $aProduct['name'] ?>">
                    </picture>
                    <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                        <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Quick Add</button>
                    </div>
                </div>
                <div class="card-body px-0">
                    <a class="text-decoration-none link-cover" href="/index.php/product?id=<?= $aProduct['id'] ?>"><?= $aProduct['name'] ?></a>
                    <small class="text-muted d-block"><?= truncateText($aProduct['description']) ?></small>
                    <p class="mt-2 mb-0 small">
                        <span class="text-muted"><?= CURRENCY?><?= $aProduct['price'] ?></s>
                        <!-- For Discount display -->
                        <!-- <s class="text-muted">$329.99</s> <span class="text-danger">$198.66</span> -->
                    </p>
                </div>
            </div>
            <!--/ Card Product-->
        </div>
        <?php } ?>
    </div>
    <!-- / Products-->

    <!-- Pagination->
    <div class="d-flex flex-column f-w-44 mx-auto my-5 text-center">
        <small class="text-muted">Showing 9 of 121 products</small>
        <div class="progress f-h-1 mt-3">
            <div class="progress-bar bg-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <a href="#" class="btn btn-outline-dark btn-sm mt-5 align-self-center py-3 px-4 border-2">Load More</a>
    </div> <!-- / Pagination-->
</div>