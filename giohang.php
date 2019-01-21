<?php
require("index.php");
    // $idOrder = 0;
    $date = "";
    $total = 0;
    $count  = 0;
    $pass = $userName = $addUser = $addShip = $phone = $email = "";
    $odname =  0;
    $odadd = $oddate = "";

                    if (isset($_GET['cong']))
                    {  
                        $_SESSION['soluong'] +=1;
                        $cong = $_GET['cong'];
                        $_SESSION['cart'][$cong]['total'] = $_SESSION['cart'][$cong]['total'] + $_SESSION['cart'][$cong]['price'];
                        $_SESSION['cart'][$cong]['quan'] +=1;
                    }
                    if (isset($_GET['tru']))
                    {  
                        $_SESSION['soluong'] -=1;
                        $tru = $_GET['tru'];
                        $_SESSION['cart'][$tru]['total'] = $_SESSION['cart'][$tru]['total'] - $_SESSION['cart'][$tru]['price'];
                        $_SESSION['cart'][$tru]['quan'] -=1;
                    }

                    if (isset($_GET['xoa']))
                    {  
                        $xoa = $_GET['xoa'];
                        $_SESSION['soluong'] = $_SESSION['soluong'] - $_SESSION['cart']["'".$xoa."'"]['quan'];
                        unset($_SESSION['cart']["'".$xoa."'"]);
                    }

    require("header.php");
?>

<div></div>
    <script>
        function checkDelete(input){
            if (confirm('Are you sure you want to delete it?')== true) {
                window.location.href= 'giohang.php?xoa='+input+'';
                return true;
            } 
        }
    </script>

    <div class="row"> 
        <form action="" method ="POST">
            <table class="table table-striped table-hover table table-bordered table-striped" style="margin-left:50px">
                <tr><th>Sản Phẩm</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th>Xóa</th></tr>
        <?php
                    foreach(isset($_SESSION['cart']) ? $_SESSION['cart'] : array() as $k=>$v){
                        $total =  $total + $v['total'];
                        ?>
                        <tr>
                        <td style="width: 150px"><img src="<?php echo "Images/".$v['image'];?>" alt="anh" width="100px" heigth="30px">
                               <?php echo $v['name'];?>
                               </td>
                        <td><?php echo $v['price'];?></td>
                        <td><input type="text" value = "<?php echo $v['quan']; ?>" name="<?php echo $k;?>">
                                <a href="giohang.php?cong=<?php echo $k;?>"><button type="button" name="up">+</button></a>
                                <a href="giohang.php?tru=<?php echo $k;?>"><button type="button" name="down">-</button></a>
                        </td>
                        <td><?php echo  $v['total'];?></td>
                        <td><a href="#" onclick="checkDelete(<?php echo $k;?>)">Xóa</a></td>
                        </tr>
                    <?php
                    }
                ?>
            </table>        
        </form>
        <center>
        <div class="row">
        <h2>Tổng Tiền : <?php echo $total."vnd";?></h2>
        </div>
        </center>

        <center>
        <div class="row">
        <!-- data-toggle="modal" data-target="#myModal1" -->
        <a href="enterAdd.php?thanhtoan= thanhtoan" ><button type="button" class="btn btn-lg-primary" name = "buynow">Thanh toán</button></a>
        <a href="TrangChu.php"><button type="button" class="btn btn-lg-primary" name="continue">Tiếp Tục Mua Hàng</button></a>
        </div>
        </center>
                    
    </div>

<?php 

?>
<?php include("footer.php"); ?>