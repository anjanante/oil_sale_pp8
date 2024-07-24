<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Users</h1>
                <a href="index.php/admin/user/add" class="btn btn-primary text-white">Add</a>
                <a href="index.php/admin/user/import" class="btn btn-primary text-white">Import</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Deletion</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($aUsers as $u) { ?>
                        <tr>
                            <th scope="row"><?= $u['id'] ?></th>
                            <td><?= $u['email'] ?></td>
                            <td><?= $u['admin'] ? 'Admin' : 'Simple User' ?></td>
                            <td>
                                <a href="/index.php/admin/user/del?id=<?= $u['id'] ?>" class="btn btn-danger btn-sm text-white" >Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
