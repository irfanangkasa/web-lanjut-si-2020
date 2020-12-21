<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Irfan</a>
            <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto ">
                <a class="nav-item nav-link active" href="<?php echo site_url('Mahasiswa') ?>">Home <span class="sr-only ">(current)</span></a>
                <a class="nav-item nav-link" href="<?php echo site_url('Mahasiswa/tambah') ?>">Tambah Data </a>
                <a class="nav-item nav-link" href="#">List Mahasiswa</a>
                <a class="nav-item nav-link" href="#" tabindex="-1">Update Mahasiswa</a>
                <a class="nav-item nav-link" href="#" tabindex="-1">About</a>
                <a class="nav-item btn btn-primary tombol" href="" tabindex="-1">Join US</a>
            </div>
        </div>
    </div>
</nav>



<div class="card">
    <div class="card-header text-light">
        Featured
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <td>Nomor</td>
                <td>NIM</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Aksi</td>
            </tr>
            <?php $no =  1; ?>
            <?php foreach ($tbl_mahasiswa as $key) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $key->NIM ?></td>
                <td><?= $key->nama ?></td>
                <td><?= $key->alamat ?></td>
                <td>
                    <a href="<?php echo site_url('Mahasiswa/edit/'.$key->ID); ?>" class="btn btn-primary">Edit</a>
                    <a onclick="return confirm('Yakin Akan Menghapus?')" 
                    href="<?= site_url('Mahasiswa/delete/'.$key->ID) ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>

</body>
</html>