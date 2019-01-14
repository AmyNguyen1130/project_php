<?php 
    session_start();
    include("connect.php");
    include("functions.php");
    if(isset($_GET['id2'])){
        $id = $_GET['id2'];
        run("DELETE FROM `users` where `id_cus` = $id ");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="Project_css.css">
	<link rel="stylesheet" href="responsive.css">
	<link rel="stylesheet" href="Project-Js.js">
    <title>user</title>
</head>
<body>
    
<div class="row table-wrapper-scroll-y" style="margin-top:200px">
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
    <?php   include("header.php");  include("footer.php"); ?>
</body>
</html>