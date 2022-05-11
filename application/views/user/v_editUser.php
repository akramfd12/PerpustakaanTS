<!DOCTYPE html>
<html lang="en">

<title>Edit User</title>
<!-- Form Edit User-->

<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header bg-light">
                    <h2 class="text-dark">Edit User </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <!-- Button Submit akan mengarah ke User/update -->
                            <form action="<?php echo base_url('User/update/' . $detail['id']) ?>" method="post"
                                enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama"
                                        value="<?php echo $detail['nama'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" id="email"
                                        value="<?php echo $detail['email'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        value="<?php echo $detail['password'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea type="text" name="alamat" class="form-control"
                                        id="alamat"><?php echo $detail['alamat'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="telepon" class="form-label">Telepon</label>
                                    <input type="text" name="telepon" class="form-control" id="telepon"
                                        value="<?php echo $detail['telepon'] ?>">
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