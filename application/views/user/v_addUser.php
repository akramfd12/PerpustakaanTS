<!DOCTYPE html>
<html lang="en">

<title>Tambah User</title>
<!-- Form tambah User-->

<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header bg-light">
                    <h2 class="text-dark">Tambah User </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <!-- Button Submit akan mengarah ke Controller User/insert -->
                            <form action="<?php echo base_url('User/insert') ?>" method="post"
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
                                <button type="button" class="btn btn-danger" onclick="history.back();">Kembali</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>