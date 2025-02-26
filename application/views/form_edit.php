<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3 class="text-center">Form Edit Data</h3>
        
        <form action="<?php echo base_url('index.php/Welcome/AksiEdit') ?>" method="post">
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" value="<?php echo $data->nik ?>" class="form-control" id="nik" name="nik_display" disabled>
                <input type="hidden" name="nik" value="<?php echo $data->nik; ?>"> <!-- Menampung data -->
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="<?php echo $data->nama ?>" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" value="<?php echo $data->alamat ?>" class="form-control" id="alamat" name="alamat" required>
            </div>
            <button type="submit" class="btn btn-success">SIMPAN</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
