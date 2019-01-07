<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/Project_css.css">
	<link rel="stylesheet" href="../CSS/responsive.css">
	<link rel="stylesheet" href="../JS/Project-Js.js">
    <title>Admin</title>
    <style>
    html{
        scroll-behavior: smooth;
    }
    </style>
</head>
<body>
    
    <div class="row" style="margin :auto; margin-top:180px;">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border:1px solid black; margin:15px;">
            <a href="#"><img src="../Images/user.png" alt="User" width = "180px" height="180px"></a>
            <h3>Người Dùng</h3>
        </div>
        
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border:1px solid black; margin:15px;">
        <a href="#"><img src="../Images/product.png" alt="User" width = "180px" height="180px"></a>
            <h3>Sản Phẩm</h3>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border:1px solid black; margin:15px;">
        <a href="#"><img src="../Images/profit.png" alt="User" width = "180px" height="180px"></a>
            <h3>Lợi Nhuận</h3>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border:1px solid black; margin:15px;">
        <a href="#"><img src="../Images/feedback.jpg" alt="User" width = "180px" height="180px"></a>
            <h3>Phản Hồi</h3>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border:1px solid black; margin:15px;">
        <a href="#"><img src="../Images/provider.png" alt="User" width = "180px" height="180px"></a>
            <h3>Nhà Cung Cấp</h3>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>
</html>