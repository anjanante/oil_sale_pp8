<div class="d-flex justify-content-center align-items-center">
    <!-- Page Content Goes Here -->

    <!-- Login Form-->
    <div class="col col-md-8 col-lg-6 col-xxl-5">
        <div class="shadow-xl p-4 p-lg-5 bg-white">
            <h1 class="text-center fw-bold mb-5 fs-2">Login</h1>
            <!-- <a href="#" class="btn btn-facebook d-block mb-2"><i class="ri-facebook-circle-fill align-bottom"></i> Login
                with Facebook</a>
            <a href="#" class="btn btn-twitter d-block mb-2"><i class="ri-twitter-fill align-bottom"></i> Login with
                Twitter</a>
            <span class="text-muted text-center d-block fw-bolder my-4">OR</span> -->
            <form method="POST" action="/index.php/login" name="login">
                <div class="form-group">
                    <label class="form-label" for="login-email">Email address</label>
                    <input type="email" class="form-control" name="mail" id="login-email" placeholder="nantedevy@email.com" value="<?= isset($_POST["mail"]) ? $_POST["mail"] : '' ?>">
                </div>
                <div class="form-group">
                    <label for="login-password" class="form-label d-flex justify-content-between align-items-center">
                        Password
                        <a href="/index.php/forgotten-password" class="text-muted small">Forgot your password?</a>
                    </label>
                    <input type="password" class="form-control" name="password" id="login-password" placeholder="Enter your password">
                </div>
                <?php if(!empty($aErrors)): ?>
                <p class="text-danger"><?= $aErrors['error'] ?></p>
                <?php endif; ?>
                <button type="submit" class="btn btn-dark d-block w-100 my-4">Login</button>
            </form>
            <p class="d-block text-center text-muted">New customer? <a class="text-muted" href="/index.php/register">Sign up for an account</a></p>
        </div>

    </div>
    <!-- / Login Form-->

    <!-- /Page Content -->
</div>