
<?php 
    require("index.php");
    include("header.php");



    if(isset($_GET['accept'])){
        $idor = $_GET['accept'];
        run("UPDATE order_prod SET status = 1 where id_order=".$idor);
    }

    if(isset($_GET['delete'])){
        $idor = $_GET['delete'];
        run("DELETE FROM order_prod where id_order=".$idor);
        run("DELETE FROM orders where id_order=".$idor);
    }
?>

<div class="row table-wrapper-scroll-y" style="margin-top:0px">
    <table class="table table-striped table-hover table table-bordered table-striped" style="margin-left:50px">
                    <tr>
                        <th style="width: 50px">Khách hàng</th>
                        <th style="width: 80px">Mã Hóa Đơn</th>
                        <th  style="width: 40px">Sản Phẩm</th>
                        <th  style="width: 40px">Tổng Tiền</th>
                        <th  style="width: 40px">Tùy Chỉnh</th>
                    </tr>
            <tbody>
            <?php  
              
                $Tong= 0;
                $array = queryReturnArray("SELECT users.name_cus, orders.id_order FROM users,orders,order_prod where users.id_cus = orders.id_cus and orders.id_order = order_prod.id_order and order_prod.status = 0;");
                foreach($array as $k=>$v){
                    $Tong= $Tong +1;
                    ?>
                        <tr style="margin-left:50px">
                        <td style="width: 80px"><?php  echo $v['name_cus'] ; ?></td>
                        <td style="width: 70px"><?php  echo $v['id_order'] ; ?></td>
                        <td style="width: 70px"><?php 
                            $prod = queryReturnArray("SELECT products.name_product,order_prod.quantity,products.price FROM products,order_prod where order_prod.id_order =".$v['id_order']." AND products.id_product = order_prod.id_product;");
                                $count = 0;
                                $totalPrice = 0;                           
                            foreach($prod as $key=>$value)
                            { $count ++; 
                                $totalPrice = $totalPrice + ($value['quantity']*$value['price']);
                                echo "<br>".$count." : ".$value['name_product']."  (".$value['quantity'].") ";
                            }
                        ?></td>
                        <td style="width: 70px"><?php  echo $totalPrice."vnd" ; ?></td>
                        <td> <a href="order.php?accept=<?php echo $v['id_order'];?>">Chấp Nhận</a> 
                            | <a href="order.php?delete=<?php echo $v['id_order']; ?>">Xóa</a> </td><tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>

    <?php   include("footer.php"); ?>
