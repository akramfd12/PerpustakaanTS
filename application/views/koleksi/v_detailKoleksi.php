<!DOCTYPE html>
<html lang="en">

<title>Detail Buku</title>

<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h2 class="text-dark">Detail Buku</h2>
                </div>
                <!-- Isi dari detail buku -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="card-title"><?php echo $detail['judul'] ?></h4>
                            <table class="table-hover">
                                <tr>
                                    <th>Genre</th>
                                    <td>: </td>
                                    <td><?= $detail['genre'] ?></td>
                                </tr>
                                <tr>
                                    <th>Penulis</th>
                                    <td>: </td>
                                    <td><?= $detail['penulis'] ?></td>
                                </tr>
                                <tr>
                                    <th>Penerbit</th>
                                    <td>: </td>
                                    <td><?php echo $detail['penerbit'] ?></td>
                                </tr>
                                <tr>
                                    <th>Tahun Terbit</th>
                                    <td>: </td>
                                    <td><?php echo $detail['tahun'] ?></td>
                                </tr>
                                <tr>
                                    <th>Sinopsis</th>
                                    <td>: </td>
                                    <td><?php echo $detail['sinopsis'] ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-2">
                            <td><img style="width:128px"
                                    src="<?php echo base_url('assets/img/cover/' . $detail['cover']) ?>" alt="">
                            </td>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="<?= base_url('Koleksi'); ?>" class="btn btn-danger btn-md">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>