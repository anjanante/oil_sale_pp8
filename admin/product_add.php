<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <h1>Add a product</h1>
            <div class="col-lg-12">
                <form method="POST" name="product" action="/index.php/admin/products/add" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="textarea" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label for="file">File</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                    <div class="form-group">
                        <label for="category">Categories</label>
                        <select class="form-control" name="category">
                            <?php foreach ($aCategories as $c) { 
                                    echo "<option value=" .  $c['id'] . ">". $c['name'] . "</option>";
                                } 
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </div>
        </div>
    </div>
</div>
