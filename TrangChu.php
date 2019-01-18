<?php  
require("header.php");

function displayProduct($input,$category){
	$array = array();
	$count = 0;
	$array = queryReturnArray("SELECT * FROM products WHERE id_category = $input LIMIT 4");
	foreach($array as $k=>$v){
		$count = $count + 1;
		if($v['status']==0){
			$pri = $v['price']*(20/100);
		?>
		<!-- <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<a href="#" class="thumbnail">
			<img src="Images/KinhNam/1.jpg" alt="dfssssssssss">
			ftgshtyeutyut
		</a>
		</div> -->

		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 thumbnail" style="height:300px">
			<div class="hovereffect  img<?php echo $count;?>">
				<a href=""><img src="Images/<?php  echo $category."/".$v['image'];?>" alt="<?php  echo $v['image'];?>" class="anhcontent img-responsive "></a>
				<div class="overlay">
					<a class="info" href="Chitiet.php?idProduct=<?php echo $v['id_product'];?>" target="Blank"><?php echo $v['name_product']  ?></a>
				</div>
			</div>
			<div class = "img<?php echo $count;?>">
				<span style="color:red"><?php echo $pri."vnd- <strike>".$v['price']."vnd</strike>";?></span><br/>
				<a href="Chitiet.php?idProduct=<?php echo $v['id_product'];?>"><button type="button" style="background: red" class="btn btn-lg-danger">Xem Chi Tiết</button></a>
			</div>
		</div>
	<?php
		}else{
			?>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 thumbnail" style="height:300px">
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


// table thumbnail
?>
	<!-- <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<a href="#" class="thumbnail">
			<img src="Images/KinhNam/1.jpg" alt="dfssssssssss">
			ftgshtyeutyut
		</a>
	</div> -->


<?php

//
?> 
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:0px">
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

    <!-- Wrapper for slides -->
				<div class="carousel-inner">
				<?php  $slide = queryReturnArray("SELECT * FROM `slides` where event = 'tet'");
					$couSlide = 0;
											foreach($slide as $k=>$v){
												$couSlide ++;
												if($couSlide == 1){
													?>
													<div class="item active">
														<img src="Images/slide/<?php echo $v['image']; ?>" alt="chicoa" style="width:100%;">
													</div>
												<?php
												}else{
													?>
													<div class="item ">
														<img src="Images/slide/<?php echo $v['image']; ?>" alt="chicoa" style="width:100%;">
													</div>
											<?php
												}
												
											}
										?>
				</div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    </div>
    
<div class="row" style="margin:3px 3px 3px 3px " >


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 	">
		<h4>Kính Nam
			<a href="sanpham.php?idProduct=" style="float: right; font-size: 15px;">Tất cả</a>
		</h4>
			<div class="row">
			<?php displayProduct(1,"KinhNam");?>
			</div>


		<h4>Kính Nữ
			<a href="sanpham.php?idProduct=" style="float: right; font-size: 15px;">Tất cả</a>
		</h4>
		<div class="row">
			<?php displayProduct(2,"KinhNu");?>
		</div>

        <h4>Kính Trẻ Em
			<a href="sanpham.php?idProduct=" style="float: right; font-size: 15px;">Tất cả</a>
		</h4>
		<div class="row">
			<?php displayProduct(3,"KinhTreEm");?>
		</div>

        <h4>Lens
			<a href="sanpham.php?idProduct=" style="float: right; font-size: 15px;">Tất cả</a>
		</h4>
		<div class="row">
			<?php displayProduct(4,"lens");?>
		</div>
</div>
</div>

<div class="row" style = "margin-top:50px;">
<?php  include("footer.php");?>
</div>

	