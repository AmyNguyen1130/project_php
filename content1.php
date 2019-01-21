<?php 
require("index.php");
include("header.php");

$id = 0;
if(isset($_GET['idcate'])){
	$id = $_GET['idcate'];
}

function displayProduct($sql){
	$array = array();
	$count = 0;
	$array = queryReturnArray($sql);
	foreach($array as $k=>$v){
		$count = $count + 1;
		if($v['status']==0){
			$pri = $v['price']*(20/100);
		?>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 thumbnail" style="height:300px;margin:40px;">
			<div class="hovereffect  img<?php echo $count;?>">
				<a href=""><img src="Images/<?php  echo $v['image'];?>" alt="<?php  echo $v['image'];?>" class="anhcontent img-responsive "></a>
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
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 thumbnail" style="height:300px;margin:40px;">
			<div class="hovereffect  img<?php echo $count;?>">
			<a href=""><img src="Images/<?php  echo $v['image'];?>" alt="<?php  echo $v['image'];?>" class="anhcontent img-responsive "></a>
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

<div class="row" style="margin:3px 3px 3px 3px ; margin-top: 0px" >
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<div class="row">
			<?php 
			if($id == 1){
				?>
				<h2>Kính Nam</h2>
				<?php
				displayProduct("SELECT * FROM products WHERE id_category = 1");
			}else if($id == 2){
				?>
				<h2>Kính Nữ</h2>
				<?php
				displayProduct("SELECT * FROM products WHERE id_category = 2");
			}else if($id == 3){
				?>
				<h2>Kính Trẻ Em</h2>
				<?php
				displayProduct("SELECT * FROM products WHERE id_category = 3");
			}else{
				?>
				<h2>Lens</h2>
				<?php
				displayProduct("SELECT * FROM products WHERE id_category = 4");
			}
			?>
			</div>
		</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:20px">
		<?php include("footer.php"); ?>
		</div>

		