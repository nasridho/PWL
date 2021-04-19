<?php
    $namaAgama = ['Islam','Protestan','Katolik','Hindu','Buddha','Konghucu'];
    if (!isset($_SESSION['MEMBER'])) header('location: index.php');
?>

<h1 class="mb-4">Tambah Data Pegawai</h1>
<form action="controllers/pegawaiController.php" method="POST">
    <div class="mb-3 row">
        <label for="nip" class="col-sm-3 col-form-label">NIP</label>
        <div class="col-sm-9">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">
                    <i class="fas fa-id-card"></i>
                </span>
                <input type="text" name="nip" class="form-control" aria-describedby="addon-wrapping" >
            </div>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
        <div class="col-sm-9">
            <input type="text" name="nama" class="form-control" id="inputNama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
            <input type="email" name="email" class="form-control" id="inputEmail">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="agama" class="col-sm-3 col-form-label">Agama</label>
        <div class="col-sm-9">
            <?php foreach ($namaAgama as $agama): ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="agama" value="<?=$agama?>">
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
                <option value="1">HRD</option>
                <option value="2">Keuangan</option>
                <option value="3">Operasional</option>
                <option value="4">Marketing</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="foto" class="col-sm-3 col-form-label">Foto</label>
        <div class="col-sm-9">
            <input type="text" name="foto" class="form-control" id="foto">
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <input type="submit" value="simpan" name="simpan" class="btn btn-success">
    </div>
</form>