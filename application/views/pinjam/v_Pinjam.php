<!DOCTYPE html>
<html lang="en">

<!-- Link css datatables Bootstrap -->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css">
<title>Daftar Pinjam</title>

<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h1 class="text-dark">Daftar Pinjam</h1>
                </div>
                <div class="card-body">
                    <!-- Button Pinjam Buku yang mengarah ke koleksi -->
                    <a href="Koleksi" class="btn btn-success mb-3 float-right">Pinjam Buku</a>
                    <table class="table display nowrap table-bordered table-striped" style="width:100%" id="tableDP">
                        <thead>
                            <tr>
                                <!-- Nama table head user -->
                                <th class="text-center">ID Pinjam</th>
                                <th class="text-center">Nama User</th>
                                <th class="text-center">Buku</th>
                                <th class="text-center">Tanggal Pinjam</th>
                                <th class="text-center">Tanggal Kembali</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list as $p) : {
                            ?>
                            <tr>
                                <!-- Isi table dari database -->
                                <td><?php echo $p['id_pinjam'] ?></td>
                                <td><?php echo $p['nama'] ?></td>
                                <td><?php echo $p['judul'] ?> <br>
                                <td><?php echo $p['tanggal_pinjam'] ?></td>
                                <td><?php echo $p['batas_waktu'] ?></td>
                                <!-- Untuk membuat status waktu Masa Pinjam -->
                                <td><?php 
                                $sekarang = strtotime(date("d-m-Y"));
                                $bts_waktu = strtotime($p['batas_waktu']);
                                $selisih = $bts_waktu - $sekarang;
                                if($selisih > 0)
                                {
                                echo "Masa Pinjam";
                                }
                                elseif($selisih == 0)
                                {
                                echo "Jatuh Tempo";
                                }
                                else{
                                echo "Terlambat";
                                }
                                      ?></td>
                                <td class="d-grid gap-2 d-md-flex justify-content-md-end"> 
                                    <a href="pinjam/detail_pinjam/<?php echo $p['id_pinjam']; ?>"
                                        class="btn btn-primary">Detail
                                    <a href="pinjam/selesai/<?php echo $p['id_pinjam']; ?>"
                                        class="btn btn-success">Selesai</a></td>
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
    $('#tableDP').DataTable();
});
$('#tableU').DataTable({
    scrollX: true
});
$('#tableDP').DataTable({
    responsive: true
});
</script>

</html>