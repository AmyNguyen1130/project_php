<?php 
    include("header.php"); 
    if(isset($_GET['id2'])){
        $id = $_GET['id2'];
        run("DELETE FROM `users` where `id_cus` = $id ");
    }

?>

<div class="row table-wrapper-scroll-y" style="margin-top:0px">
    <table class="table table-striped table-hover table table-bordered table-striped" style="margin-left:50px" >
                    <tr>
                        <th style="width: 50px">Mã</th>
                        <th style="width: 80px">Tên</th>
                        <th  style="width: 40px">Địa Chỉ </th>
                        <th  style="width: 70px">Số Điện Thoại</th>
                        <th style="width: 70px">Email</th>
                        <th style="width: 70px">Tùy Chỉnh</th>
                    </tr>
            <tbody>
            <?php  
                $count = 0;
                $Tong= 0;
                $array = queryReturnArray("SELECT * FROM users");
                foreach($array as $k=>$v){
                    $count ++;
                    $Tong= $Tong +1;
                    ?>
                        <tr style="margin-left:50px">
                        <td style="width: 60px"><?php  echo $count; ?></td>
                        <td style="width: 80px"><?php  echo $v['name_cus']  ?></td>
                        <td style="width: 70px"><?php  echo $v['address']  ?></td>
                        <td style="width: 90px"><?php  echo $v['phone']  ?></td>
                        <td style="width: 150px"><?php  echo $v['email']  ?></td>
                        <td> <a href="user.php?id1=<?php echo $v['id_cus'];?>">Chặn</a> 
                            | <a href="user.php?id2=<?php echo $v['id_cus']; ?>">Xóa</a> </td><tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>

    
    <div class="row" style="margin-left: 20px">
        <h5>Tổng Số Khách Hàng Đã Đăng Kí Là : <?php echo $Tong;?></h5>
    </div>
    <?php   include("footer.php"); ?>
