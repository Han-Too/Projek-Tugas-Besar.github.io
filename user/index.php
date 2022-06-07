<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="https://cdn0.iconfinder.com/data/icons/learning-icons-rounded/110/Books-512.png" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	<title>Halaman User</title>
</head>
<body  style="background-color: #ecb807;">
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	
 
	?>
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <img src="https://cdn0.iconfinder.com/data/icons/learning-icons-rounded/110/Books-512.png" alt="" width="40" height="40" class="img-responsive" />
            <a class="navbar-brand ps-3" href="index.php">
            
            E-Perpustakaan</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                       <!--  <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li> -->
                        <li><a class="dropdown-item" href="..\logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Download</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-video"></i></div>
                                Video
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Terbaru</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Terfavorit</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="true" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                                Kelola
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="buku.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-book-bookmark"></i></div>
                                    E-Books</a>
                                    <a class="nav-link" href="video.php">   
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-video"></i></div>    
                                    Videos</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['role']; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
					<h1 class="mt-4">Welcome <?php echo $_SESSION['username']; ?> di Halaman User</h1>
			
			
<div>
	<style>
		* {
	font-family: 'Montserrat', sans-serif;
}
#clock {
	font-size: 80px;
	background: -webkit-linear-gradient(#2b32b2, #db1514);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	font-weight: 500;
	text-align: center;
	
}
	</style>
       
</div>
                        <ol class="breadcrumb mb-4">
                            <!-- <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Sidenav Light</li> -->
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="text-center">
                                <p class="h3 text-center text-primary">Jam Sekarang</p>	
                                <p id="clock"></p>
	<script>
	   setInterval(customClock, 500);
	   function customClock() {
	       var time = new Date();
	       var hrs = time.getHours();
	       var min = time.getMinutes();
	       var sec = time.getSeconds();
	       
	       document.getElementById('clock').innerHTML = hrs + ":" + min + ":" + sec;
	       
	   }
	   
	</script>
                                    </div>
                            </div>
                        </div>
                        <hr color="black" size="10" class="mt-5">
                    </div>
	
 
	<br/>
	<br/>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
 </body>
</html>