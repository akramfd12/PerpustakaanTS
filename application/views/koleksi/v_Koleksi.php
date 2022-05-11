<!DOCTYPE html>
<html lang="en">

<!-- Link css datatables Bootstrap -->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css">
<title>Koleksi Buku</title>

<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h1 class="text-dark">Koleksi Buku</h1>
                </div>
                <div class="card-body">
                    <!-- Button Tambah User -->
                    <a href="Koleksi/add" class="btn btn-success mb-3 float-right">Tambah Buku</a>
                    <table class="table display nowrap table-bordered table-striped" style="width:100%" id="tableK">
                        <thead>
                            <tr>
                                <!-- Nama table head user -->
                                <th class="text-center">ID</th>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Penulis</th>
                                <th class="text-center">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list as $item) : {
                            ?>
                            <tr>
                                <!-- Isi table dari database -->
                                <td><?php echo $item['id_buku'] ?></td>
                                <td><?php echo $item['judul'] ?></td>
                                <td><?php echo $item['penulis'] ?></td>
                                <td class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <!-- Tempat button terdapat detail, edit dan delete -->
                                    <a href="pinjam/add_pinjam/<?php echo $item['id_buku']; ?>"
                                        class="btn btn-success">Pinjam Buku</a>
                                    <a href="Koleksi/detail_koleksi/<?php echo $item['id_buku']; ?>"
                                        class='btn btn-primary'>Detail</a>
                                    <a href="Koleksi/edit/<?php echo $item['id_buku']; ?>"
                                        class="btn btn-warning">Edit</a>
                                    <a href="Koleksi/delete/<?php echo $item['id_buku']; ?>"
                                        onclick="return confirm('Data ini akan dihapus. Anda yakin?')"
                                        class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php }
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Script untuk javascript datatable -->
<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/jquery/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
    $('#tableK').DataTable();
});
$('#tableU').DataTable({
    scrollX: true
});
$('#tableK').DataTable({
    responsive: true
});
</script>

</html>