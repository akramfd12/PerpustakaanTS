<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Tempat untuk meletakkan link css  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<!-- Bagian navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Tempat image brand di navbar -->
        <a class="navbar-brand" href="<?php echo base_url('dashboard'); ?>">
            <img src="<?php echo base_url('assets/img/logo_serangkai.jpg'); ?>" alt="" width="100px" height="40px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu-menu yang ada di navbar -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url ('dashboard'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url ('user'); ?>">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url ('koleksi'); ?>">Koleksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url ('pinjam'); ?>">Pinjam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('about'); ?>">About</a>
                </li>
            </ul>
            <!-- Button Logout yang mengarah ke controller login/logout -->
            <form action="<?php echo ('login/logout') ?>" class="d-flex">
                <button class="btn btn-outline-danger" type="submit">Log Out</button>
            </form>
        </div>
    </div>
</nav>

</html>