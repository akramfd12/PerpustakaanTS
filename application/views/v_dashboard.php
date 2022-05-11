<!DOCTYPE html>
<html lang="en">
<!-- Tampilan Dashboard -->


<title>Perpustakaan Tiga Serangkai</title>

<!-- Isi dari tampilan dashboard -->

<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <!-- Memanggil data nama setelah hallo -->
                    <h1 class="text-black">Hallo <?php echo $detail['nama'] ?></h1>
                </div>
                <!-- Isi dari dashboard -->
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <h2 class="text-center text-success">Selamat Datang di Perpustakaan Tiga Serangkai</h2>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>