<?php
    require 'koneksi.php';
    require 'models/Pegawai.php';
    $namaAgama = ['Islam','Protestan','Katolik','Hindu','Buddha','Konghucu'];
    $pegawai = new Pegawai();
    if (!isset($_SESSION['MEMBER'])) header('location: index.php');
    if (!isset($_GET['id'])) header('location: index.php?hal=data-pegawai');
    $data = $pegawai->getPegawai($_GET['id']);
?>

<h1 class="mb-4">Edit data pegawai</h1>

<form action="controllers/pegawaiController.php" method="POST">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <div class="mb-3 row">
        <label for="nip" class="col-sm-3 col-form-label">NIP</label>
        <div class="col-sm-9">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">
                    <i class="fas fa-id-card"></i>
                </span>
                <input type="text" name="nip" class="form-control" aria-describedby="addon-wrapping" value="<?=$data['nip']?>" >
            </div>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
        <div class="col-sm-9">
            <input type="text" name="nama" class="form-control" id="inputNama" value="<?=$data['nama']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
            <input type="email" name="email" class="form-control" id="inputEmail" value="<?=$data['email']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="agama" class="col-sm-3 col-form-label">Agama</label>
        <div class="col-sm-9">
            <?php foreach ($namaAgama as $agama): ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="agama" value="<?=$agama?>" <?=($data['agama'] == $agama) ? 'checked': ''?>>
                <label class="form-check-label" ><?=$agama?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="divisi" class="col-sm-3 col-form-label">Divisi</label>
        <div class="col-sm-9">
            <select class="form-select" aria-label="Default select example" name="divisi">
                <option selected> -- pilih divisi -- </option>
                <option value="1" <?=($data['divisiId'] == 1) ? 'selected': ''?>>HRD</option>
                <option value="2" <?=($data['divisiId'] == 2) ? 'selected': ''?>>Keuangan</option>
                <option value="3" <?=($data['divisiId'] == 3) ? 'selected': ''?>>Operasional</option>
                <option value="4" <?=($data['divisiId'] == 4) ? 'selected': ''?>>Marketing</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="foto" class="col-sm-3 col-form-label">Foto</label>
        <div class="col-sm-9">
            <input type="text" name="foto" class="form-control" id="foto" value="<?=$data['foto']?>">
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <input type="submit" value="Update" name="update" class="btn btn-success">
    </div>
</form>