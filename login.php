<?php include('cabecalho.php'); ?>

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="row w-100">
        <div class="col-md-6 login-form-1 mx-auto">
            <h3>Login Form</h3>

            <form action="login_process.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email *" name="email" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your Password *" name="senha" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>
                <div class="form-group">
                    <a href="#" class="btnForgetPwd">Forget Password?</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>