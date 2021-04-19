<?php
require '../koneksi.php';
require '../models/Pegawai.php';

$dataInput = array(
    'nip' => filter_input(INPUT_POST, 'nip', FILTER_SANITIZE_STRING),
    'nama' => filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING),
    'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
    'agama' => filter_input(INPUT_POST, 'agama', FILTER_SANITIZE_STRING),
    'divisi' => filter_input(INPUT_POST, 'divisi', FILTER_SANITIZE_STRING),
    'foto' => filter_input(INPUT_POST, 'foto', FILTER_SANITIZE_STRING)
);

$pegawai = new Pegawai();

if (!empty($_POST['simpan'])) {
    $status = $pegawai->addPegawai($dataInput);

    if($status){
        header('Location:../index.php?hal=data-pegawai&status=success');
    } else {
        header('Location:../index.php?hal=data-pegawai&status=gagal');
    }
}else if(!empty($_POST['update'])){
    $dataInput['id'] = $_POST['id'];
    $status = $pegawai->updatePegawai($dataInput);

    if($status){
        header('Location:../index.php?hal=data-pegawai&status=success');
    } else {
        header('Location:../index.php?hal=data-pegawai&status=gagal');
    }
} else if(!empty($_POST['delete'])){
    
        $pegawai->deletePegawai($_POST['id']);
        header('Location:../index.php?hal=data-pegawai');
    
}else {
    header('Location:../index.php?hal=tambah-data');
}
