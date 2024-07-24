<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <h1>
            <?= isset($aProduct) && $aProduct ? 'Update Product' : 'Add New Product'; ?>
            </h1>
            <div class="col-lg-12">
                <form method="POST" name="product" action="/index.php/admin/product/add" enctype="multipart/form-data">
                    <input type="hidden" name="id" class="form-control" id="id" value="<?= isset($aProduct['id']) ? $aProduct['id'] : '' ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="<?= isset($aProduct['name']) ? $aProduct['name'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="textarea" class="form-control" name="description" value="<?= isset($aProduct['description']) ? $aProduct['description'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" value="<?= isset($aProduct['price']) ? $aProduct['price'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="file">File</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                    <div class="form-group">
                        <label for="category">Categories</label>
                        <select class="form-control" name="category">
                            <?php foreach ($aCategories as $c) { 
                                    $selected = isset($aProduct['category']) && $aProduct['category'] == $c['id'] ? 'selected' : '';  
                                    echo "<option value=" .  $c['id'] . " $selected>". $c['name'] . "</option>";
                                } 
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <?= isset($aCategories) && $aCategories ? 'Update' : 'Save'; ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
