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
                    <?php for ($i=0; $i < 3; $i++) { ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td>Category <?= $i ?></td>
                            <td>
                                <a type="button" class="btn btn-primary btn-sm">Edit</a>
                                <a type="button" class="btn btn-danger btn-sm">Delete</a>
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
                    <?php for ($i=0; $i < 3; $i++) { ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td>Product <?= $i ?></td>
                            <td>
                                <a type="button" class="btn btn-primary btn-sm">Edit</a>
                                <a type="button" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>