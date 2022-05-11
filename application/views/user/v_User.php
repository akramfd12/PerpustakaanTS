<!DOCTYPE html>
<html lang="en">

<!-- link css datatables -->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css">
<title>User</title>

<!-- Table User -->

<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h1 class="text-dark">Daftar User</h1>
                </div>
                <div class="card-body">
                    <!-- Button Tambah User -->
                    <a href="user/add" class="btn btn-success mb-3 float-right">Tambah User</a>
                    <table class="table display nowrap table-bordered table-striped" style="width:100%" id="tableU">
                        <thead>
                            <tr>
                                <!-- Nama table head user -->
                                <th class="text-center">ID User</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list as $i) : {
                            ?>
                            <tr>
                                <!-- Isi table dari database -->
                                <td><?php echo $i['id'] ?></td>
                                <td><?php echo $i['nama'] ?></td>
                                <!-- Tempat button terdapat detail, edit dan delete -->
                                <td class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="user/detail_user/<?php echo $i['id']; ?>" class='btn btn-primary'>Detail</a>
                                    <a href="user/edit/<?php echo $i['id']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="user/delete/<?php echo $i['id']; ?>"
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
<!-- Script untuk javascript Datatables -->
<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/jquery/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
    $('#tableU').DataTable();
});
$('#tableU').DataTable({
    scrollX: true
});
$('#tableK').DataTable({
    responsive: true
});
</script>

</html>