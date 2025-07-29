<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEKNODESA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">SELAMAT DATANG Selamat Datang di Layanan Kependudukan TeknoDesa</h1>

        <h3>Data Masyarakat Desa</h3>


        <a href="<?php echo base_url('index.php/Welcome/formInput') ?>" class="btn btn-primary">Tambah Data</a>
        
        <table class="table table-bordered table-striped" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $count = 0;
                    foreach($data as $row){
                        $count++;
                ?>
                <tr>
                    <td><?php echo $count ?></td>
                    <td><?php echo $row->nik ?></td>
                    <td><?php echo $row->nama ?></td>
                    <td><?php echo $row->alamat ?></td>
                    <td>
                        <a href="<?php echo base_url('index.php/Welcome/formEdit/'). $row->nik ?>" class="btn btn-warning btn-sm">Edit</a>
						<a href="<?php echo base_url('index.php/Welcome/aksiDelete/' . $row->nik); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
