<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
?>

<div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">
                                    Selamat Datang, <?php echo $_SESSION['username']; ?>
                                </span>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>