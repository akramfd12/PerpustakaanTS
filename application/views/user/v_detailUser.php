<!DOCTYPE html>
<html lang="en">

<title>Detail User</title>
<!-- Detail user -->

<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h2 class="text-dark">Detail User</h2>
                </div>
                <!-- Isi dari detail user -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="card-title"><?php echo $detail['nama'] ?></h4>
                            <table class="table-hover">
                                <tr>
                                    <th>Email</th>
                                    <td>: </td>
                                    <td><?= $detail['email'] ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>: </td>
                                    <td><?php echo $detail['alamat'] ?></td>
                                </tr>
                                <tr>
                                    <th>Telepon</th>
                                    <td>: </td>
                                    <td><?php echo $detail['telepon'] ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-2">
                            <td><img style="width:128px"
                                    src="<?php echo base_url('assets/img/fotoprofile/' . $detail['profile']) ?>" alt="">
                            </td>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="<?= base_url('User'); ?>" class="btn btn-danger btn-md">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>