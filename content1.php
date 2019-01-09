<?php  
session_start();
// include("header.php");
include("products_php.php");
?>
<!DOCTYPE html>
<html lang="">

<head>
	<title>Đi mọi nơi</title>
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="Project_css.css">
	<link rel="stylesheet" href="responsive.css">
	<link rel="stylesheet" href="Project-Js.js">
</head>

<body>
<div class="row" style="margin:3px 3px 3px 3px " >

<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
	
</div>

<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">


		<h4>Kính Nam
			<a href="#" style="float: right; font-size: 15px;">Tất cả</a>
		</h4>
			<div class="row">
				<?php  
					$array = array();
					$count = 0;
					$array = queryReturnArray("SELECT * FROM products WHERE id_category = 1");
					foreach($array as $k=>$v){
						$count = $count + 1;
						if($v['status']==0){
							$pri = $v['price']*(20/100);
						?>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
							<div class="hovereffect  img<?php echo $count;?>">
								<a href=""><img src="Images/kinhNam/<?php  echo $v['image'];?>" alt="Can't Show" class="anhcontent img-responsive "></a>
								<div class="overlay">
									<a class="info" href="sanpham.php" target="Blank"><?php echo $v['name_product']  ?></a>
								</div>
							</div>
							<div class = "img<?php echo $count;?>">
								<a href="#"><?php echo $pri."vnd- <strike>".$v['price']."vnd</strike>";?></a>
							</div>
						</div>
					<?php
						}else{
							?>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
								<div class="hovereffect  img<?php echo $count;?>">
									<a href=""><img src="Images/kinhNam/<?php  echo $v['image'];?>" alt="Can't Show" class="anhcontent img-responsive "></a>
									<div class="overlay">
										<a class="info" href="sanpham.php" target="Blank"><?php echo $v['name_product']  ?></a>
									</div>
								</div>
								<div class = "img<?php echo $count;?>">
									<a href="#"><?php echo $v['price']."vnd";?></a>
								</div>
							</div>

						<?php
						}
					}
				?>
			</div>


		<h4>Kính Nữ
			<a href="#" style="float: right; font-size: 15px;">Tất cả</a>
		</h4>
		<div class="row">
				<?php  
					$array2 = array();
					$count2 = 0;
					$array2 = queryReturnArray("SELECT * FROM products WHERE id_category = 2");
					foreach($array2 as $k=>$v){
						$count2 = $count2 + 1;
						if($v['status']==0){
							$pri = $v['price']*(20/100);
						?>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
							<div class="hovereffect  img<?php echo $count2;?>">
								<a href=""><img src="Images/kinhNu/<?php  echo $v['image'];?>" alt="Can't Show" class="anhcontent img-responsive "></a>
								<div class="overlay">
									<a class="info" href="sanpham.php" target="Blank"><?php echo $v['name_product']  ?></a>
								</div>
							</div>
							<div class = "img<?php echo $count;?>">
								<a href="#"><?php echo $pri."vnd- <strike>".$v['price']."vnd</strike>";?></a>
							</div>
						</div>
					<?php
						}else{
							?>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
								<div class="hovereffect  img<?php echo $count2;?>">
									<a href=""><img src="Images/kinhNu/<?php  echo $v['image'];?>" alt="Can't Show" class="anhcontent img-responsive "></a>
									<div class="overlay">
										<a class="info" href="sanpham.php" target="Blank"><?php echo $v['name_product']  ?></a>
									</div>
								</div>
								<div class = "img<?php echo $count;?>">
									<a href="#"><?php echo $v['price']."vnd";?></a>
								</div>
							</div>

						<?php
						}
					}
				?>
			</div>

</div>
</div>


        </body>
        </html>