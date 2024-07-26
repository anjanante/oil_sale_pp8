<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <h1>Add user</h1>
            <div class="col-lg-12">
                <form method="POST" name="user" action="/index.php/admin/user/add">
                <div class="form-group">
                        <label for="email">First name</label>
                        <input type="email" class="form-control" name="firstname" placeholder="First name">
                    </div>
                    <div class="form-group">
                        <label for="email">Last name</label>
                        <input type="email" class="form-control" name="lastname" placeholder="Last name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control" name="mail" placeholder="nantedevy@exemple.mg" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password*</label>
                        <input type="password" class="form-control" name="password" placeholder="password" required>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="admin" id="admin">
                        <label class="form-check-label" for="admin">
                            Is admin ?
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">save</button>
                </form>
            </div>
        </div>
    </div>
</div>
