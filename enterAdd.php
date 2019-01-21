<?php
    require("index.php");
    $odname_cus = $odstatus= 0;
    $oddate = "";
    $total = 0;
    require("header.php");

    if(isset($_POST['pay'])){
        $odadd = $_SESSION['odadd'];
        $odphone = $_SESSION['odphone'];
        $date = date('Y-m-d H:i:s');
        $sql = "SELECT id_cus FROM users WHERE name_cus = '".$_SESSION['name']."'";
        $result = $mysqli->query($sql);
        if($result){
            while($temp = mysqli_fetch_assoc($result)){
                $odname_cus = $temp['id_cus'];
            }
            if(isset($odadd) && isset($odphone)){
                $sql = "INSERT INTO orders (id_cus,address,phone,date_ord)
                VALUES (?,?,?,?)";
                if($stm = $mysqli ->prepare($sql)){
                $stm -> bind_param("isss",$odname_cus,$odadd,$odphone,$date);
                $stm->execute();
                $mysqli->error;
                }
                $idOrder = $mysqli->insert_id;
                foreach(isset($_SESSION['cart']) ? $_SESSION['cart'] : array() as $k=>$v){
                        $a = str_replace("'","",$k);
                        $b = trim($a);
                    $sql = "INSERT INTO order_prod (id_order,id_product,quantity,status) VALUES (?,?,?,?)";
                    if($stm = $mysqli ->prepare($sql)){
                        $stm -> bind_param("iiii",$idOrder,$b,$_SESSION['cart'][$k]['quan'],$odstatus);
                        $stm->execute();
                $mysqli->error;
                }
                }
            }
        }
        echo '<meta http-equiv = "refresh" content = "0.5; url = TrangChu.php" ';
    }

    if(isset($_POST['review'])){
        $_SESSION['odadd'] = $_POST['odAddress'];
        $_SESSION['odphone'] = $_POST['odPhone'];
    ?>
    <form action="enterAdd.php" method="post">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: dimgrey;">
                                    <b style="color: rgb(215, 238, 215); font-size: 170%;">Hóa Đơn Của Bạn</b>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body " style="margin-left: 5%; margin-right: 5%">
                                    <center>
                                            <table>
                                            <tr><td colspan="2"> <img src="Images/logo1.jpg" alt="Image" style="width: 88%; height: 70%;margin-left: 7%; "></td></tr>
                                            <tr><td colspan="2"><?php echo "<center><h3> <b>".$_SESSION['name']."</b></h5></center> ";   ?></td></tr>
                                            <tr><td colspan="2"><?php echo "<h5>Địa Chỉ Giao Hàng : <b>".$_POST['odAddress']."</b></h3> ";   ?></td></tr>
                                            <tr><td colspan="2"><?php echo "<h5>Số Điện Thoại Người Nhận :  <b>".$_POST['odPhone']."</b></h5> ";   ?></td></tr>
                                            </table>
                                            <br/>
                                            <!-- <th  style="width: 20%">Tổng Tiền</th> -->
                                            <table>
                                                <tr>
                                                    <th style="width: 20%">Sản Phẩm</th>
                                                    <th style="width: 20%">Số Lượng</th>
                                                    <th  style="width: 20%">Giá </th>
                                                    </tr>
                                            <?php
                                            foreach(isset($_SESSION['cart']) ? $_SESSION['cart'] : array() as $k=>$v){
                                                $a = str_replace("'","",$k);
                                                $b = trim($a);
                                                $SpHoaDon = queryReturnArray("SELECT * FROM products WHERE id_product=".$b);
                                                foreach($SpHoaDon as $key=>$value){
                                                    ?>
                                                    <tr><td><?php  echo $value['name_product']; ?></td>
                                                    <td><?php  echo $v['quan']; ?></td>
                                                    <td><?php  echo $value['price']." (vnd)"; ?></td></tr>
                                                    <?php
                                                $total = $total + ($v['quan'] * $value['price']); 
                                                }
                                            }
                                            ?>
                                            <tr><td colspan="2"><b>Tổng Tiền :</b> </td><td style="color:red"><?php echo "<b>".$total."</b> (vnd)";?></td></tr>
                                        </table>
                                        <button name="pay" class="btn btn-lg-primary" style="border: green 1px solid; background-color: rgb(175, 238, 214)">Đồng Ý Mua</button>
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


<?php
    }else{
?>
    <form action="" method="post">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
                                        <input type="text" class="form-control input-lg" name="odAddress" placeholder="Your Address"/><br/>
                                        <input type="text" class="form-control input-lg" name="odPhone" placeholder="Your Phone Numbers"/><br/>
                                        <br/>
                                        
                                    <button name="review" class="btn btn-lg-primary" style="border: green 1px solid; background-color: rgb(175, 238, 214)">Xong</button>
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
    
<?php
    }
?>