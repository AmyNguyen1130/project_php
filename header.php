<!DOCTYPE html>
<html lang="">

<head>
	<title>header</title>
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="Project_css.css">
	<link rel="stylesheet" href="responsive.css">
	<link rel="stylesheet" href="Project-Js.js">
</head>
<body>
    
<!-- model -->
<form action="header.php" method="post">
<div style="margin: 3px 3px 0px 3px;" class="container-fluid">
		<div class="row">
			<div id="header">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<img src="Images/logo1.jpg" class="logo" alt="Image">
				</div>
				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
					<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						<div class="search-758px">
							<div class="input-group">
								<input type="text" class="form-control " placeholder="Search" />
								<span class="input-group-btn">
									<button class="btn btn-info " type="button">
										<i class="glyphicon glyphicon-search"></i>
									</button>
								</span>
							</div>
						</div>
					</div>

					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 fa-pull-right ">

						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<a href="#" class="glyphicon glyphicon-comment icon"></a>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<a href="#" class="glyphicon glyphicon-log-in icon" data-toggle="modal" data-target="#myModal2"></a>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<a href="#" class="glyphicon glyphicon-user icon" data-toggle="modal" data-target="#myModal1"></a>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<a href="#" class="glyphicon glyphicon-shopping-cart icon"></a>
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
										<li><a href="#" style="width: auto">Trang Chủ</a>
										</li>
									</ul>

									<ul class="nav navbar-nav  menubar">
										<li class="menu"><a href="../HTML/Project.php">Kính Nam</a></li>
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
										<li class="menu"><a href="#">Đo Khúc Xạ</a></li>
									</ul>
									<ul class="nav navbar-nav  menubar">
										<li class="menu"><a href="Dac_San.php">Hệ Thống Cửa Hàng</a></li>
									</ul>
									<ul class="nav navbar-nav  menubar">
										<li class="menu"><a href="#">Liên Hệ</a></li>
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
							<button type="button" class="navbar-toggle  but" data-toggle="collapse">
								<a href="#" class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#myModal2"></a>
							</button>
							<button type="button" class="navbar-toggle  but" data-toggle="modal" data-target="#myModal1">
								<a href="#" class="glyphicon glyphicon-user"></a>
							</button>
							<button type="button" class="navbar-toggle  but" data-toggle="collapse">
								<a href="#" class="glyphicon glyphicon-shopping-cart"></a>
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
										<li class="menu"><a href="../HTML/Project.php">Kính Nam</a></li>
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
										<li class="menu"><a href="#">Đo Khúc Xạ</a></li>
									</ul>
									<ul class="nav navbar-nav  menubar">
										<li class="menu"><a href="Dac_San.php">Hệ Thống Cửa Hàng</a></li>
									</ul>
									<ul class="nav navbar-nav  menubar">
										<li class="menu"><a href="#">Liên Hệ</a></li>
									</ul>
							<!-- </div> -->

						</div><!-- /.navbar-collapse -->
					</nav>
					<!-- menu -->
				</div>
			</div>
			<!-- header -->
		</div>

        <div id="myModal2" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header" style="background-color: dimgrey;">
						<b style="color: rgb(215, 238, 215); font-size: 170%;">Đăng Nhập</b>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body " style="margin-left: 5%; margin-right: 5%">
						<center>
								<table>
								<tr>
									<td colspan="2"> <img src="Images/logo1.jpg" alt="Image" style="width: 88%; height: 70%;margin-left: 7%; "></td>
								</tr>
								</table>
								<input type="text" class="form-control input-lg" name="userName" placeholder="Your UserName"/><br/>
								<input type="password" class="form-control input-lg" name="password" placeholder="Your Password"/><br/>
							<button name="Login" class="btn btn-outline-primary" style="border: green 1px solid; background-color: rgb(175, 238, 214)">Đăng Nhập</button>
						</center>
							<p>bằng việc tiếp tục bạn đồng ý với điều khoản của chúng tôi</p>
						</div>
						<div class="modal-footer" style="background-color: dimgrey">

						<a href="#" class="btn btn-outline-primary" style="border: green 1px solid; background-color: rgb(175, 238, 214)"
						data-dismiss="modal">Đóng</a>
					</div>
				</div>
			</div>
		</div>


		<div id="myModal1" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header" style="background-color: dimgrey;">
						<b style="color: rgb(215, 238, 215); font-size: 170%;">Đăng KÍ Thành Viên</b>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body " style="margin-left: 5%; margin-right: 5%">
						<center>
								<table>
								<tr>
									<td colspan="2"> <img src="Images/logo1.jpg" alt="Image" style="width: 88%; height: 70%;margin-left: 7%; "></td>
								</tr>
								</table>
								<input type="email" class="form-control input-lg" name="userEmail" placeholder="Your Email"/><br/>
								<input type="text" class="form-control input-lg" name="userName" placeholder="Your Name"/><br/>
								<input type="password" class="form-control input-lg" name="password" placeholder="Your Password"/><br/>
								<input type="text" class="form-control input-lg" name="userAddress" placeholder="Your Address"/><br/>
								<input type="text" class="form-control input-lg" name="userPhone" placeholder="Your Phone Numbers"/><br/>
								<select name="role" class="form-control input-lg">
									<option value="Admin">Admin</option>
									<option value="User">User</option>
									<option value="Stocker">Stocker</option>
								</select>
								<br/>
								
							<button name="register" class="btn btn-outline-primary" style="border: green 1px solid; background-color: rgb(175, 238, 214)">Đăng Kí</button>
						</center>
							<p>bằng việc tiếp tục bạn đồng ý với điều khoản của chúng tôi</p>
						</div>
						<div class="modal-footer" style="background-color: dimgrey">

						<a href="#" class="btn btn-outline-primary" style="border: green 1px solid; background-color: rgb(175, 238, 214)"
						data-dismiss="modal">Đóng</a>
					</div>
				</div>
			</div>
		</div>
		</form>
    </body>
    </html>