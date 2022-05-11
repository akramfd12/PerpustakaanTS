<!DOCTYPE html>
<html lang="en">

<title>Pinjam Buku</title>
<!-- Form Pinjam Buku-->

<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header bg-light">
                    <h2 class="text-dark">Pinjam Buku </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <!-- Button Submit akan mengarah ke Pinjam/Insert_pinjam -->
                            <form action="<?php echo base_url('Pinjam/insert_pinjam/') ?>" method="post"
                                enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="id_buku" class="form-label">ID Buku</label>
                                    <input type="text" name="id_buku" class="form-control" id="id_buku" readonly
                                        value="<?php echo $detail['id_buku'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul Buku</label>
                                    <input type="text" name="judul" class="form-control" id="judul" readonly
                                        value="<?php echo $detail['judul'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="id" class="form-label">ID User</label>
                                    <input type="text" name="id" class="form-control" id="id" readonly
                                        value="<?php echo $this->session->userdata('id') ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Peminjam</label>
                                    <input type="text" name="nama" class="form-control" id="nama" readonly
                                        value="<?php echo $this->session->userdata('nama') ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="batas_waktu" class="form-label">Tanggal Kembali</label>
                                    <input type="date" name="batas_waktu" class="form-control" id="batas_waktu">
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