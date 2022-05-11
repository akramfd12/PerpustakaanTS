<!DOCTYPE html>
<html lang="en">

<!-- Link css bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Register user pertama kali tanpa perlu login -->
<title>Register User</title>

<!-- Form Pendaftaran User -->

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Pendaftaran User</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <!-- Button Submit akan mengarah ke Login/register -->
                                <form action="<?php echo base_url('Login/register_user') ?>" method="post"
                                    enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" id="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea type="text" name="alamat" class="form-control" id="alamat"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="telepon" class="form-label">Telepon</label>
                                        <input type="text" name="telepon" class="form-control" id="telepon">
                                    </div>

                                    <div class="mb-3">
                                        <label for="profile" class="form-label">Foto Profile</label>
                                        <input type="file" name="profile" class="form-control" id="profile">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-danger"
                                        onclick="history.back();">Kembali</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>