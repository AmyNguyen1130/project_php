<?php
    session_start();
    // include("header.php");
    include("../PHP/products_php.php");

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
    <title>Sản Phẩm</title>
    <style>
    html{
        scroll-behavior: smooth;
    }
    </style>
</head>
<body>
<form action="sanpham.php" method="post" enctype = "multipart/form-data">
<div class="row" style="margin :auto; margin-top:180px;">
    <h3 style="">SẢN PHẨM</h3>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="border: 2px solid black; margin-top:10px;margin:20px; height:500px">
         <img src="1.jpg" alt="">   
         <input type="file" name = "upload1">
        </div>
    
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="border: 2px solid black; margin-top:10px;margin:20px; height:500px">
        
        <table>
            <tbody>
                <tr>
                    <td>Tên Sản Phẩm :</td>
                    <td> <input type="text" name="pro_name" placeholder="tên sản phẩm"style="width:500px; margin:10px"></td>
                </tr>

                <tr>
                    <td>Số Lượng :</td>
                    <td> <input type="text" name="pro_quantity" placeholder="số lượng"style="width:500px; margin:10px"></td>
                </tr>

                <tr>
                    <td>Loại Sản Phẩm :</td>
                    <td><select name="category"style="width:500px; margin:10px">
                        <option value="1">1</option>
                        <option value="3">2</option>
                        <option value="1">3</option>
                        </select></td>
                </tr>

                <tr>
                <tr>
                    <td>Giá Sản Phẩm :</td>
                    <td> <input type="text" name="price" placeholder="giá sản phẩm"style="width:500px; margin:10px"></td>
                </tr>

                <tr>
                    <td>Nhà Cung Cấp Sản Phẩm :</td>
                    <td><select name="provider"style="width:500px; margin:10px">
                        <option value="1">1</option>
                        <option value="3">2</option>
                        <option value="1">3</option>
                        </select></td>
                </tr>

                
            </tbody>
        </table>
    </div>
    </div>
    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">  
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <button name="add">Thêm Sản Phẩm</button>
    <button name="remove">Xóa Sản Phẩm</button>
    <button name="update">Sửa Sản Phẩm</button>
    <br/><br/>  
    </div>
   
     
    <div class="row">
        
        <table class="table table-striped table-hover" style="margin :auto;margin-left:10px">
                <tr>
                    <th style="width: 50px">Stt</th>
                    <th style="width: 150px">Tên</th>
                    <th style="width: 150px">Loại</th>
                    <th style="width: 150px">Tình Trạng</th>
                    <th style="width: 150px">Số Lượng</th>
                    <th style="width: 150px">Ngày Nhập</th>
                    <th style="width: 120px">Giá</th>
                    <th style="width: 170px">Nhà Cung Cấp</th>
                    <th style="width: 150px">Ảnh</th>
                </tr>
            <tbody>
            <?php  
                $mysqli;
                $sql = "SELECT * FROM products";
                $result = $mysqli ->query($sql);
                if($result){
                    ?>
                    
                    <?php
                    while($temp = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td style="width: 50px"><?php  echo $temp['id_product']  ?></td>
                            <td style="width: 150px"><?php  echo $temp['name_product']  ?></td>
                            <td style="width: 150px"><?php  echo $temp['id_category']  ?></td>
                            <td style="width: 150px"><?php  echo $temp['status']  ?></td>
                            <td style="width: 150px"><?php  echo $temp['quantity']  ?></td>
                            
                            <td style="width: 150px"><?php  echo $temp['date_insert']  ?></td>
                            <td style="width: 120px"><?php  echo $temp['price']  ?></td>
                            <td style="width: 170px"><?php  echo $temp['id_provider']  ?></td>
                            <td style="width: 150px"><img src="<?php  echo $temp['image']?>" alt="anh" width="100px" heigth="100px"></td>
                            <tr>
                        <?php
                    }
                }
            ?>
                
                    
                
            </tbody>
        </table>
        
    </div>
    
</div>
</form>
<?php  
    if(isset($_POST['add'])){
        $str = $_FILES['upload1']['name'];
        $product = createproduct($_POST['pro_name'],$_POST['pro_quantity'],$_POST['category'],$_POST['price'],$_POST['provider'],$str);
        insertIntoProduct($product->getName(),$product->getQuantity(),$product->getCategory(),$product->getStatus(),$product->getDate(),
        $product->getPrice(),$product->getProvider(),$product->getImage());
    }
    if(isset($_POST['remove'])){
        deleteProduct(3);
    }
include("footer.php");
?>
</body>
</html>