<?php
require 'koneksi.php';
require 'models/Pegawai.php';

?>

<div>
    <h2>Data Pegawai</h2>
	<br />
    <?php if (!empty($_REQUEST['status'])):?>
    <div class="alert <?=($_REQUEST['status'] == 'success') ? 'alert-success' : 'alert-warning'; ?> alert-dismissible fade show" role="alert">
        <?=($_REQUEST['status'] == 'success') ? 'Data telah di tambahkan atau di update' : 'Ada yang salah'; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif;?>
	
    
	
	<?php if(!isset($_SESSION['MEMBER'])): ?>
							
   
    <?php else: ?>
	<a href="index.php?hal=tambah-data" class="btn btn-info">Tambah data</a>
	<?php endif; ?>
	<br /><br />
    <table class="table table-bordered text-center">
        <thead>
            <tr class="table-success">
            <th scope="col">No</th>
			<th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Divisi</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $dataPegawai = new Pegawai();
            $no = 1;
            foreach($dataPegawai->selectData() as $data): ?>
                <form action="controllers/pegawaiController.php" method="POST">
                    <tr>
                        <input type="hidden" name="id" value="<?=$data['id']?>">
                        <td><?=$no?></td>
						<td><?=$data['nip']?></td>
                        <td><?=$data['nama']?></td>
                        <td><?=$data['namaDivisi']?></td>
                        <td>
                            <a href="index.php?hal=detail-data&id=<?=$data['id']?>" class="btn btn-secondary">Detail</a>
                            
                            <?php if(!isset($_SESSION['MEMBER'])): ?>
							
                            <?php elseif($_SESSION['MEMBER']['role'] == "staff"): ?>
							<a href="index.php?hal=edit-data&id=<?=$data['id']?>" class="btn btn-warning">Edit</a>
                            <?php else: ?>
							<a href="index.php?hal=edit-data&id=<?=$data['id']?>" class="btn btn-warning">Edit</a>
							<input type="submit" value="delete" name="delete" class="btn btn-danger" onclick="return confirm('Yakin mau di hapus ?')"/>
							<?php endif; ?>
                        </td>
                    </tr>
                </form>
                <?php $no++;?>
            <?php endforeach;?>
        </tbody>
    </table>
</div>

    