<?php
	if(isset($_GET['logout'])){
		unset($_SESSION['name']);
		unset($_SESSION['soluong']);
		unset($_SESSION['cart']);
	}
?>
<!DOCTYPE html>
<html lang="">

<head>
	<title></title>
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="href=//netdna.boostrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"rel="stylesheet"></script>
	<link rel="stylesheet" href="Project_css.css">
	<link rel="stylesheet" href="responsive.css">
	<link rel="stylesheet" href="Project-Js.js">
</head>
<body>
    
<!-- model -->
<form action="" method="post">
<div style="margin: 3px 3px 0px 3px;" class="container-fluid">
		<div class="row">
			<div id="header">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<img src="Images/logo1.jpg" class="logo" alt="Image">
				</div>
				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
					<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						<div class="search-758px">
						<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
							<div class="input-group">
							<input type="text" class="form-control" name="sear" placeholder="Search"/>
								<span class="input-group-btn">
									<button class="btn btn-info " type="submit" name = "submit">
										<i class="glyphicon glyphicon-search"></i>
									</button>
								</span>
							</div>
							</form>
						</div>
					</div>

					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 fa-pull-right ">

						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<a href="#" class="glyphicon glyphicon-comment icon"></a>
						</div>
						<?php 
							if(!isset($_SESSION['name'])){
								?>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								<a href="loginUser.php?login=loginUser" class="glyphicon glyphicon-log-in icon" ></a>
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<a href="RegisterUsers.php?register=register" class="glyphicon glyphicon-user icon"></a>
								</div>
								<?php
							}else{
								?>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<a href="<?php echo $_SERVER['PHP_SELF']."?logout=logout";?>"  class="glyphicon glyphicon-log-out icon"></a>
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<a href="#" class="glyphicon glyphicon-user icon"></a>
								</div>
								<?php
							}
						?>
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<a href="giohang.php" class="glyphicon glyphicon-shopping-cart icon" ><?php
							if(isset($_SESSION['soluong'])){
									echo "(".$_SESSION['soluong'].")";
							}else{
								echo "(0)";
							}
							?></a>
						</div>
					</div>

					<div class="menu-psive1" style="padding-right: 4px">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<nav class="navbar navbar-default" role="navigation">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<!-- <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"> -->
									<ul class="nav navbar-nav menubar search">
										<li class="menu" style="width: 96%; padding: 3%;">
											<div>
												<div class="input-group">
													<input type="text" class="form-control input-lg" placeholder="Search" />
													<span class="input-group-btn">
														<button class="btn btn-info btn-lg" type="button">
															<i class="glyphicon glyphicon-search"></i>
														</button>
													</span>
												</div>
											</div>
										</li>
									</ul>
									<ul class="nav navbar-nav  menu">
										<li><a href="Trangchu.php" style="width: auto">Trang Chủ</a>
										</li>
									</ul>
										<?php  $arrCategory = queryReturnArray("SELECT * FROM `categories`");
											foreach($arrCategory as $k=>$v){
												?>
												<ul class="nav navbar-nav  menubar">
												<li class="menu"><a href="content1.php?idcate=<?php echo $v['id_category']; ?>"><?php echo $v['name_category']; ?></a></li>
												</ul>
											<?php
											}
										?>
									
									<ul class="nav navbar-nav  menubar">
										<li class="menu"><a href="404notfound.php">Đo Khúc Xạ</a></li>
									</ul>
									<ul class="nav navbar-nav  menubar">
										<li class="menu"><a href="404notfound.php">Hệ Thống Cửa Hàng</a></li>
									</ul>
									<ul class="nav navbar-nav  menubar">
										<li class="menu"><a href="404notfound.php">Liên Hệ</a></li>
									</ul>
									<!-- </div> -->
								</div><!-- /.navbar-collapse -->
							</nav>
						</div>
					</div>
				</div>
				<!-- menu -->


				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menu-psive">
					<nav class="navbar navbar-default" role="navigation">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle but" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<button type="button" class="navbar-toggle  but" data-toggle="collapse">
								<a class="glyphicon glyphicon-comment"></a>
							</button>
							<?php 
							if(!isset($_SESSION['name'])){
								?>
							<button type="button" class="navbar-toggle  but" data-toggle="collapse">
								<a href="#" class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#myModal2"></a>
							</button>
							<button type="button" class="navbar-toggle  but">
								<a href="RegisterUsers.php?register=register" class="glyphicon glyphicon-user"></a>
							</button>
							<?php }else{ ?>
							<button type="button" class="navbar-toggle  but" data-toggle="collapse">
								<a href="#" class="glyphicon glyphicon-log-out"></a>
								<button type="button" class="navbar-toggle  but">
								<a href="#" class="glyphicon glyphicon-user"></a>
							</button>
							</button>
							<?php  }?>
							<button type="button" class="navbar-toggle  but" data-toggle="collapse">
								<a href="giohang.php" class="glyphicon glyphicon-shopping-cart">
								<?php
							if(isset($_SESSION['soluong'])){
									echo "(".$_SESSION['soluong'].")";
							}else{
								echo "(0)";
							}
							?></a>
							</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav menubar search">
								<li class="menu" style="width: 96%; padding: 3%;">
									<div>
										<div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-info btn-lg" type="button">
													<i class="glyphicon glyphicon-search"></i>
												</button>
											</span>
											<input type="text" class="form-control input-lg" placeholder="Search" />
										</div>
									</div>
								</li>
							</ul>
									<ul class="nav navbar-nav  menubar">
										<li class="menu"><a href="">Kính Nam</a></li>
									</ul>
									<ul class="nav navbar-nav  menubar">
										<li class="menu"><a href="#">Kính Nữ</a></li>
									</ul>
									<ul class="nav navbar-nav  menubar">
										<li class="menu"><a href="#">Kính Trẻ Em</a></li>
									</ul>
                                    <ul class="nav navbar-nav t menubar">
										<li class="menu"><a href="#">Lens</a></li>
									</ul>
									<ul class="nav navbar-nav  menubar">
										<li class="menu"><a href="404notfound.php">Đo Khúc Xạ</a></li>
									</ul>
									<ul class="nav navbar-nav  menubar">
										<li class="menu"><a href="404notfound.php">Hệ Thống Cửa Hàng</a></li>
									</ul>
									<ul class="nav navbar-nav  menubar">
										<li class="menu"><a href="404notfound.php">Liên Hệ</a></li>
									</ul>
							<!-- </div> -->

						</div><!-- /.navbar-collapse -->
					</nav>
					<!-- menu -->
				</div>
			</div>
			<!-- header -->
		</div>


		