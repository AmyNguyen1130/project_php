<?php
    require("index.php");
    include("header.php");
?>
    <div class="row" style="margin-top:0px;">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border:1px solid black; margin:15px;">
            <a href="user.php"><img src="Images/user.png" alt="User" width = "180px" height="180px"></a>
            <h3>Người Dùng</h3>
        </div>
        
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border:1px solid black; margin:15px;">
        <a href="sanpham.php"><img src="Images/product.png" alt="User" width = "180px" height="180px"></a>
            <h3>Sản Phẩm</h3>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border:1px solid black; margin:15px;">
        <a href="danhmuc.php"><img src="Images/cate.jpg" alt="User" width = "180px" height="180px"></a>
            <h3>Danh Mục</h3>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border:1px solid black; margin:15px;">
        <a href="order.php"><img src="Images/provider.png" alt="User" width = "180px" height="180px"></a>
            <h3>Hóa Đơn</h3>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border:1px solid black; margin:15px;">
        <a href="404notfound.php"><img src="Images/feedback.jpg" alt="User" width = "180px" height="180px"></a>
            <h3>Phản Hồi</h3>
        </div>
        
    </div>
    <?php
    include("footer.php");
    ?>