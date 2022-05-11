<!DOCTYPE html>
<html lang="en">
<!-- Form tambah Buku-->

<title>Tambah Buku</title>

<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header bg-light">
                    <h2 class="text-dark">Tambah Buku </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <!-- Button Submit akan mengarah ke Controller Koleksi/insert -->
                            <form action="<?php echo base_url('Koleksi/insert') ?>" method="post"
                                enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" name="judul" class="form-control" id="judul">
                                </div>
                                <div class="mb-3">
                                    <label for="genre" class="form-label">Genre</label>
                                    <input type="text" name="genre" class="form-control" id="genre">
                                </div>
                                <div class="mb-3">
                                    <label for="penulis" class="form-label">Penulis</label>
                                    <input type="text" name="penulis" class="form-control" id="penulis">
                                </div>
                                <div class="mb-3">
                                    <label for="penerbit" class="form-label">Penerbit</label>
                                    <input type="text" name="penerbit" class="form-control" id="penerbit">
                                </div>
                                <div class="mb-3">
                                    <label for="tahun" class="form-label">Tahun Terbit</label>
                                    <input type="number" name="tahun" class="form-control" id="tahun">
                                </div>
                                <div class="mb-3">
                                    <label for="sinopsis" class="form-label">Sinopsis</label>
                                    <textarea type="text" name="sinopsis" class="form-control" id="sinopsis"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="cover" class="form-label">Cover</label>
                                    <input type="file" name="cover" class="form-control" id="cover">
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

</html>