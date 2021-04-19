<div class="row">
	<div class="col-md-12">
        <!-------awal menu----------->

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #cbffda;">
      <div class="container">
        <a class="navbar-brand" href="index.php"><b>Go-Jack</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
		
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?hal=aboutUs">About Us</a>
            </li>


			<div class="dropdown">
            
            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Data
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item"  href="index.php?hal=data-pegawai">Data pegawai</a></li>
            
            </ul>
          
			</div>

          </ul>
          <div class="dropdown">
            <?php if(!isset($_SESSION['MEMBER'])): ?>
            <a class="btn btn-success" href="index.php?hal=login">Login</a>
            <?php else: ?>
            <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <?=$_SESSION['MEMBER']['fullname']?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="index.php?hal=data-pegawai">Data pegawai</a></li>
              <li><a class="dropdown-item" href="index.php?hal=tambah-data">Tambah data</a></li>
              <li><a class="dropdown-item" href="pages/logout.php">Logout</a></li>
            </ul>
            <?php endif; ?>
        </div>
      </div>
    </nav>
 <!--------akhir menu---------->
	</div>
</div>