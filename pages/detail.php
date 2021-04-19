<?php
require 'koneksi.php';
require 'models/Pegawai.php' ;
$pegawai = new Pegawai();
if (!isset($_GET['id'])) header('location: index.php?hal=data-pegawai');
$dataPegawai = $pegawai->getPegawai($_GET['id']);
?>
<h1>Detail Pegawai</h1>
<div>
<img style="width: 100px;" src="img/<?=$dataPegawai['foto']?>" alt="<?=$dataPegawai[ 'nama']?>">
<p>NIP: <?=$dataPegawai["nip"]?></p>
<p>Nama: <?=$dataPegawai[ 'nama']?></p>
<p>E-mail <?=$dataPegawai['email']?></p>
<p>Agama: <?=$dataPegawai['agama']?></p>
<p>Divisi: <?=$dataPegawai['namaDivisi']?></p>

<form action="controllers/pegawaiController.php" method="POST">
<input type="hidden" value="<?=$dataPegawai['id']?>" name="id">
<div class="d-flex justify-content-between">
    
    <div>
	
       
      <a href="index.php?hal=data-pegawai" class="btn btn-secondary">Kembali</a>
						
		
		<?php if(!isset($_SESSION['MEMBER'])): ?>
						
        <?php elseif($_SESSION['MEMBER']['role'] == "staff"): ?>
							<a href="index.php?hal=edit-data&id=<?=$dataPegawai['id']?>" class="btn btn-warning">Edit</a>
        <?php else: ?>
		<a href="index.php?hal=edit-data&id=<?=$dataPegawai['id']?>" class="btn btn-warning">Edit</a>
							<input type="submit" value="delete" name="delete" class="btn btn-danger" onclick="return confirm('Yakin mau di hapus ?')"/>
							<?php endif; ?>
		
		
    </div>
</div>
</form>
</div>