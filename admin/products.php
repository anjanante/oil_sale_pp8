<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Products</h1>
                <a class="btn btn-primary text-white" href="/index.php/admin/product/add">Add New</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Image</th>
                        <th scope="col">Deletion</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($aProducts as $p) { ?>
                        <tr>
                            <th scope="row"><?= $p['id'] ?></th>
                            <td><?= $p['name'] ?></td>
                            <td>
                            <?php  
                                $sFilePath = $p['filename'] == ERROR_FILE ? "./assets/images/404.jpg" : "./uploads/".$p['filename'];
                            ?>
                            <div>
                                <picture>
                                    <img class="rounded shadow-sm img-fluid medium-zoom-image" data-zoomable="" src="<?= $sFilePath ?>" title="" alt="Product" width="80">
                                </picture>
                            </div>
                            </td>
                            <td>
                                <a href="/index.php/admin/product/edit?id=<?= $p['id'] ?>" class="btn btn-primary btn-sm text-white">edit</a>
                                <a href="/index.php/admin/product/del?id=<?= $p['id'] ?>" class="btn btn-danger btn-sm text-white">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
