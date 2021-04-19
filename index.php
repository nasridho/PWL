<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <?php include './pages/kode_atas.php';?>
  <body>
    <?php if(in_array('loginza', $_REQUEST)) : ?>
      <?php include './pages/loginza.php'?>
    <?php else: ?>
	
      <!-- Header -->
      <?php include 'pages/header.php'?>
	  
      <!-- Menu -->
      <?php include 'pages/menu.php';?>
	  
      <!-- Content -->
      <div class="container my-3 mt-3 mb-3" style="height: 75vh;">
        <div class="row">
          <!-- Main content -->
          <div class="col-sm-12 col-md-9 col-xl-9 my-3">
            <?php if(in_array('aboutUs',$_REQUEST)):?>
              <?php include './pages/aboutUs.php' ?>
			
			<?php elseif(in_array('login',$_REQUEST)):?>
              <?php include './pages/login.php';?>
			 
            <?php elseif(in_array('data-pegawai',$_REQUEST)):?>
              <?php include './pages/dataPegawai.php';?>
            <?php elseif(in_array('tambah-data',$_REQUEST)):?>
              <?php include './pages/formPegawai.php';?>
            <?php elseif(in_array('edit-data',$_REQUEST)):?>
              <?php include './pages/formEditPegawai.php';?>
            <?php elseif(in_array('detail-data',$_REQUEST)):?>
              <?php include './pages/detail.php';?>
            <?php else: ?>
                <?php include './pages/home.php' ?>
            <?php endif;?>
          </div>
		  
<?php include './pages/sidebar.php' ;?>
      <!-- footer -->
      <?php include './pages/footer.php' ;?>
    <?php endif;?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
