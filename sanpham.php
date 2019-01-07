<?php
    session_start();
    // include("header.php");
    include("products_php.php");
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
    <link rel="stylesheet" href="Project_css.css">
	<link rel="stylesheet" href="responsive.css">
	<link rel="stylesheet" href="Project-Js.js">
    <title>Sản Phẩm</title>
    <style>
    html{
        scroll-behavior: smooth;
    }
    .scroll{
        scroll-behavior: smooth;
        height: 200px;
    }
    </style>
</head>
<body>

<form action="sanpham.php" method="post" enctype = "multipart/form-data">
<div class="row" style="margin :auto; margin-top:180px; background:pink;">
    <h3 style="">SẢN PHẨM</h3>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11" style="border: 2px solid black; margin-top:10px;margin:20px; height:500px">
            
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
                    <tr>
                        <td>Chọn Ảnh Cho Sản Phẩm :</td>
                        <td style="width:500px; margin:10px"><input type="file" name="upload1" style="width:75px;"></td>
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
    
    </div>



    <div class="row">
        <table class="table table-striped table-hover scroll" style="margin-left:50px">
                <tr>
                    <th style="width: 60px">Mã</th>
                    <th style="width: 80px">Tên</th>
                    <th style="width: 50px">Loại</th>
                    <th style="width: 90px">Tình Trạng</th>
                    <th style="width: 90px">Số Lượng</th>
                    <th style="width: 150px">Ngày Nhập</th>
                    <th style="width: 80px">Giá</th>
                    <th style="width: 130px">Nhà Cung Cấp</th>
                    <th style="width: 120px">Ảnh</th>
                    <th style="width: 120px">Tùy Chỉnh</th>
                </tr>
            <tbody>
            <?php  
                $array = selectProducts();
                
                foreach($array as $k=>$v){
                    ?>
                        <tr style="margin-left:50px">
                        <td style="width: 60px"><?php  echo $v['id_product']  ?></td>
                        <td style="width: 80px"><?php  echo $v['name_product']  ?></td>
                        <td style="width: 50px"><?php  echo $v['id_category']  ?></td>
                        <td style="width: 90px"><?php  echo $v['status']  ?></td>
                        <td style="width: 90px"><?php  echo $v['quantity']  ?></td>
                        <td style="width: 150px"><?php  echo $v['date_insert']  ?></td>
                        <td style="width: 80px"><?php  echo $v['price']  ?></td>
                        <td style="width: 130px"><?php  echo $v['id_provider']  ?></td>
                        <td style="width: 120px"><img src="<?php  echo $v['image']?>" alt="anh" width="100px" heigth="100px"></td>
                        <td> <a href="edit_product.php?idProduct=<?php echo $value['id']; ?>">Chỉnh sữa</a> 
                            | <a href="index.php?idProduct=<?php echo $value['id']; ?>">Xóa</a> </td><tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>

        <?php  
        if(isset($_POST['add'])){
            $str = $_FILES['upload1']['name'];
            $product = createproduct($_POST['pro_name'],$_POST['pro_quantity'],$_POST['category'],$_POST['price'],$_POST['provider'],$str);
            insertIntoProduct($product->getName(),$product->getQuantity(),$product->getCategory(),$product->getStatus(),$product->getDate(),
            $product->getPrice(),$product->getProvider(),$product->getImage());
            $array = selectProducts();
        }

        if(isset($_POST['remove'])){
            $array=selectProducts();
            deleteProduct(3);
            $array = selectProducts();
        }
        ?>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h3> Danh Mục Sản Phẩm</h3>
    </div>
    
    <div class="row" style="padding-left : 50px;background:pink">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <h4>Thêm Danh Mục Sản Phẩm</h4>
            <table>
                <tr>
                    <td>Mã Loại: </td>
                    <td><input type="text" name="id_category"></td>
                </tr> 
                <tr>
                    <td>Tên Loại: </td>
                    <td><input type="text" name="newName"></td>
                </tr> 
            </table>
            
        </div>
        
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <br/>
        <br/><button name="removeCategory">Xóa Loại Sản Phẩm</button> <br/>
        <br/><button name="updateCategory">Sửa Loại Sản Phẩm</button> <br/>
        <br/><button name="addCategory">Thêm Loại Sản Phẩm</button>   <br/>
        </div>
        
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <h4>Tất Cả Các Danh Mục Sản Phẩm</h4>
            <table>
                <tr>
                    <th>Mã</th>
                    <th>Danh Mục</th>
                </tr>
                <?php  
                $mysqli;
                $sql = "SELECT * FROM `categories`";
                $result = $mysqli ->query($sql);
                if($result){

                    while($temp = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td style="width: 50px"><?php  echo $temp['id_category']  ?></td>
                            <td style="width: 150px"><?php  echo $temp['name_category']  ?></td><tr>
                        <?php
                    }
                }
            ?>
            </table>
        </div>
    </div>
</div>
</form>
    <?php
    // if(isset($_POST['addCategory'])){
    // }
    // if(isset($_POST['removeCategory'])){
    // }
    // if(isset($_POST['updateCategory']))
    include("footer.php");
?>

</body>
</html>