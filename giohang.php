<?php
    include("header.php");
    $total = 0;
    $count  = 0;
    $cartquantiy = 0;
    $pass = $userName = $addUser = $addShip = $phone = $email = "";
?>
<body>
    <script>
        function checkDelete(input){
            if (confirm('Are you sure you want to delete it?')== true) {
                window.location.href= 'giohang.php?id='+ input+'';
                //document.write(input);
                return true;
            } 
        }
    </script>
    <div class="row" style="margin-top: 200px"> 
        <form action="giohang.php" method ="POST">
            <table class="table table-striped table-hover table table-bordered table-striped" style="margin-left:50px">
                <tr><th>Sản Phẩm</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th>Xóa</th></tr>
                <?php

                    if (isset($_GET['id1']))
                    {  
                        $k = $_GET['id1'];
                        $_SESSION['cart'][$k]['total'] = $_SESSION['cart'][$k]['total'] + $_SESSION['cart'][$k]['price'];
                        $_SESSION['cart'][$k]['quan'] +=1;
                    }

                    if (isset($_GET['id2']))
                    {  
                        $k = $_GET['id2'];
                        $_SESSION['cart'][$k]['total'] = $_SESSION['cart'][$k]['total'] - $_SESSION['cart'][$k]['price'];
                        $_SESSION['cart'][$k]['quan'] -=1;
                    }

                    if (isset($_GET['id']))
                    {  
                        $k = $_GET['id'];
                        unset($_SESSION['cart']["'".$k."'"]);
                        
                    }
                    
                    
                    foreach(isset($_SESSION['cart']) ? $_SESSION['cart'] : array() as $k=>$v){
                        $total =  $total + $v['total'];
                        $cartquantiy = $cartquantiy + $v['quan'];
                       
                        ?>
                        <tr>
                        <td style="width: 150px"><img src="<?php 
                                if($v["category"] == 1){
                                     echo "Images/kinhNam/".$v['image'];
                                }else if($v['category']== 2){
                                    echo "Images/kinhNu/".$v['image'];
                                }else if($v['category'] == 3){
                                    echo "Images/kinhTreEm/".$v['image'];
                                }else{
                                    echo "Images/lens/".$k['image'];
                                }
                               ?>"  alt="anh" width="100px" heigth="30px">
                               <?php  echo $v['name'];?>
                               </td>
                        <td><?php echo $v['price'];?></td>
                        <td><input type="text" value = "<?php echo $v['quan']; ?>" name="<?php echo $k;?>">
                                <a href="giohang.php?id1=<?php echo $k;?>"><button type="button" name="up">+</button></a>
                                <a href="giohang.php?id2=<?php echo $k;?>"><button type="button" name="down">-</button></a>
                    </td>
                        <td><?php echo  $v['total'];?></td>
                        <td><a href="#" onclick="checkDelete(<?php echo $k;?>)">Xóa</a> </td>
                        </tr>
                    <?php
                   
                    }
                ?>
            </table>        
        </form>
        <center>
        <div class="row">
                    <?php  $_SESSION['soluong'] = $cartquantiy;?>
        <h2>Tổng Tiền : <?php echo $total."vnd";?></h2>
        </div>
        </center>

        <center>
        <div class="row">
        <a href="#" data-toggle="modal" data-target="#myModal1"><button type="button" class="btn btn-lg-primary" name = "buynow">Mua Ngay</button></a>
        <a href="TrangChu.php"><button type="button" class="btn btn-lg-primary" name="continue">Tiếp Tục Mua Hàng</button></a>
        </div>
        </center>
                    
    </div>

<?php 

?>
<div id="myModal1" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header" style="background-color: dimgrey;">
						<b style="color: rgb(215, 238, 215); font-size: 170%;">Điền Thông Tin Đầy Đủ</b>
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
								<input type="text" class="form-control input-lg" name="userAddress" placeholder="Your Address"/><br/>
								<input type="text" class="form-control input-lg" name="userPhone" placeholder="Your Phone Numbers"/><br/>
								<br/>
								
							<button name="register" class="btn btn-lg-primary" style="border: green 1px solid; background-color: rgb(175, 238, 214)">Đăng Kí</button>
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
<?php include("footer.php"); ?>