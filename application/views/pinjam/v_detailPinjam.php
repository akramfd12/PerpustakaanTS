<!DOCTYPE html>
<html lang="en">

<title>Detail Peminjam</title>
<!-- Detail Peminjam -->

<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h2 class="text-dark">Detail Peminjam</h2>
                </div>
                <!-- Isi dari detail Peminjam -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <table class="table-hover">
                                <tr>
                                    <th>Nama</th>
                                    <td>: </td>
                                    <td><?= $detail['nama'] ?></td>
                                </tr>
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
                                <tr>
                                    <th>Buku Pinjam</th>
                                    <td>: </td>
                                    <td><?= $detail['judul'] ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Pinjam</th>
                                    <td>: </td>
                                    <td><?= $detail['tanggal_pinjam'] ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Kembali</th>
                                    <td>: </td>
                                    <td><?= $detail['batas_waktu'] ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-2">
                            <td><img style="width:128px"
                                    src="<?php echo base_url('assets/img/fotoprofile/' . $detail['profile']) ?>" alt="">
                            </td>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="<?= base_url('Pinjam'); ?>" class="btn btn-danger btn-md">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>