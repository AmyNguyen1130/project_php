<?php  
session_start();

include("products_php.php");
include("functions.php");
$id = 0;
if(isset($_GET['idcate'])){
	$id = $_GET['idcate'];
}

function displayProduct($input,$category){
	$array = array();
	$count = 0;
	$array = queryReturnArray("SELECT * FROM products WHERE id_category = ".$input);
	foreach($array as $k=>$v){
		$count = $count + 1;
		if($v['status']==0){
			$pri = $v['price']*(20/100);
		?>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
			<div class="hovereffect  img<?php echo $count;?>">
				<a href=""><img src="Images/<?php  echo $category."/".$v['image'];?>" alt="<?php  echo $v['image'];?>" class="anhcontent img-responsive "></a>
				<div class="overlay">
				<a class="info" href="Chitiet.php?idProduct=<?php echo $v['id_product'];?>" target="Blank"><?php echo $v['name_product']  ?></a>
				</div>
			</div>
			<div class = "img<?php echo $count;?>">
			<span style="color:red"><?php echo $pri."vnd- <strike>".$v['price']."vnd</strike>";?></span><br/>
				<a href="Chitiet.php?idProduct=<?php echo $v['id_product'];?>"  ><button type="button" style="background: red" class="btn btn-lg-danger">Xem Chi Tiết</button></a>
			</div>
		</div>


	<?php
		}else{
			?>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
			<div class="hovereffect  img<?php echo $count;?>">
			<a href=""><img src="Images/<?php  echo $category."/".$v['image'];?>" alt="<?php  echo $v['image'];?>" class="anhcontent img-responsive "></a>
				<div class="overlay">
				<a class="info" href="Chitiet.php?idProduct=<?php echo $v['id_product'];?>" target="Blank"><?php echo $v['name_product']  ?></a>
				</div>
			</div>
			<div class = "img<?php echo $count;?>">
			<span style="color:red"><?php echo $v['price']."vnd";?></span><br/>
				<a href="Chitiet.php?idProduct=<?php echo $v['id_product'];?>"><button type="button" style="background: red" class="btn btn-lg-danger">Xem Chi Tiết</button></a>
			</div>
		</div>


		<?php
		}
	}
}
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
<div class="row" style="margin:3px 3px 3px 3px ; margin-top: 200px" >
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<div class="row">
			<?php 
			if($id == 1){
				?>
				<h2>Kính Nam</h2>
				<?php
				displayProduct($id,"KinhNam");
			}else if($id == 2){
				?>
				<h2>Kính Nữ</h2>
				<?php
				displayProduct($id,"KinhNu");
			}else if($id == 3){
				?>
				<h2>Kính Trẻ Em</h2>
				<?php
				displayProduct($id,"KinhTreEm");
			}else{
				?>
				<h2>Lens</h2>
				<?php
				displayProduct($id,"lens");
			}
			?>
			</div>
		</div>
		</div>


        </body>
		</html>
		<?php  include("header.php");include("footer.php"); ?>