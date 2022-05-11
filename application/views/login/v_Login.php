<!DOCTYPE html>
<html lang="en">
<!-- Tampilan Login -->

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php echo base_url("/assets/css/excss/style_login.css"); ?>" rel="stylesheet">
    <title>Login</title>
</head>
<!-- Form Login -->

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h3 class="card-title text-center mb-5">Login</h3>
                        <!-- Button Login akan mengarah ke login/auth -->
                        <form method="post" action="<?php echo base_url('login/auth') ?>">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="Username" name="email"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <!-- Button yang mengarah ke form pendaftaran -->
                            <div class="text-center">
                                <p>Not a member? <a href=<?php echo base_url('login/register') ?>>Register</a></p>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold"
                                    type="submit">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>