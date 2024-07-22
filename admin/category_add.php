<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <h1>
                <?= isset($aCategories) && $aCategories ? 'Update Category' : 'Add New Category'; ?>
            </h1>
            <div class="col-lg-12">
                <form method="POST" name="category" action="/index.php/admin/category/add">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="hidden" name="id" class="form-control" id="id" value="<?= isset($aCategories['id']) ? $aCategories['id'] : '' ?>">
                        <input type="text" name="name" class="form-control" id="name" value="<?= isset($aCategories['name']) ? $aCategories['name'] : '' ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <?= isset($aCategories) && $aCategories ? 'Update' : 'Save'; ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
