<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <h3>Categories</h3>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($aCategories as $c) { ?>
                        <tr>
                            <th scope="row"><?= $c['id'] ?></th>
                            <td><?= $c['name'] ?></td>
                            <td>
                                <a href="/index.php/admin/category/edit?id=<?= $c['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="/index.php/admin/category/del?id=<?= $c['id'] ?>" class="btn btn-danger text-white btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <h3>Products</h3>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($aProducts as $c) { ?>
                        <tr>
                            <th scope="row"><?= $c['id'] ?></th>
                            <td><?= $c['name'] ?></td>
                            <td>
                                <a href="/index.php/admin/product/edit?id=<?= $c['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="/index.php/admin/product/del?id=<?= $c['id'] ?>" class="btn btn-danger text-white btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>