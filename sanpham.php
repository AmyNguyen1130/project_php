<?php
    session_start();
    // include("header.php");
    include("products_php.php");
    $array = array();
    $arrCategory = array();
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
    
    .table-wrapper-scroll-y {
        display: block;
        max-height: 300px;
        overflow-y: auto;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        padding-left : 50px;
}
    </style>
</head>
<body>

<form action="" method="post" enctype = "multipart/form-data">
<div class="row" style="margin :auto; margin-top:180px; background:pink;">
    <h3 style="">SẢN PHẨM</h3>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11" style="border: 2px solid black; margin-top:10px;margin:20px; height:500px">
            
            <table>
                <tbody>
                    <tr><td>Tên Sản Phẩm :</td>
                        <td> <input type="text" name="pro_name" placeholder="tên sản phẩm"style="width:500px; margin:10px"></td> </tr>
                    
                    <tr><td>Số Lượng :</td>
                        <td> <input type="text" name="pro_quantity" placeholder="số lượng"style="width:500px; margin:10px"></td></tr>
                    
                    <tr><td>Loại Sản Phẩm :</td>
                        <td><select name="category"style="width:500px; margin:10px">
                            <option value="1">1</option>
                            <option value="3">2</option>
                            <option value="1">3</option>
                            </select></td></tr><tr>
                   
                    <tr><td>Giá Sản Phẩm :</td>
                        <td> <input type="text" name="price" placeholder="giá sản phẩm"style="width:500px; margin:10px"></td></tr>
                    
                    <tr><td>Nhà Cung Cấp Sản Phẩm :</td>
                        <td><select name="provider"style="width:500px; margin:10px">
                            <option value="1">1</option>
                            <option value="3">2</option>
                            <option value="1">3</option>
                            </select></td></tr>
                    <tr><td>Chọn Ảnh Cho Sản Phẩm :</td>
                        <td style="width:500px; margin:10px"><input type="file" name="upload1" style="width:75px;"></td></tr>

                </tbody>
            </table>
        </div>
        </div>
        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">  
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <button name="add" claa="btn btn-lg-primary">Thêm Sản Phẩm</button>
        <br/><br/>  
        </div>
    
    </div>

    <?php  
        if(isset($_POST['add'])){

            $str = $_FILES['upload1']['name'];
            $product = createproduct($_POST['pro_name'],$_POST['pro_quantity'],$_POST['category'],$_POST['price'],$_POST['provider'],$str);
            insertIntoProduct($product->getName(),$product->getQuantity(),$product->getCategory(),$product->getStatus(),$product->getDate(),
            $product->getPrice(),$product->getProvider(),$product->getImage());
            $array = queryReturnArray("SELECT * FROM products");
        }

        if(isset($_POST['remove'])){
            $array=selectProducts();
            deleteProduct(3);
            $array = selectProducts("SELECT * FROM products");
        }

        if (isset($_GET['idProduct']))
	    {
            $idProduct = $_GET['idProduct'];
            deleteProduct($idProduct);
            $sql = "select * from products";
            $array = queryReturnArray("SELECT * FROM products");
   

        }
        ?>


    <div class="row ">
        <table class="table table-striped table-hover table table-bordered table-striped" style="margin-left:50px" >
                <tr>
                    <th style="width: 50px">Mã</th>
                    <th style="width: 80px">Tên</th>
                    <th  style="width: 40px">Loại</th>
                    <th  style="width: 70px">Tình Trạng</th>
                    <th style="width: 70px">Số Lượng</th>
                    <th  style="width: 100px">Ngày Nhập</th>
                    <th  style="width: 80px">Giá</th>
                    <th  style="width: 130px">Nhà Cung Cấp</th>
                    <th  style="width: 120px">Ảnh</th>
                    <th  style="width: 120px">Tùy Chỉnh</th>
                </tr>
            </table>
        </div>
    
    <div class="row table-wrapper-scroll-y">
        <table style="margin-left:20px">
            <tbody>
            <?php  
                $array = queryReturnArray("SELECT * FROM products");
                foreach($array as $k=>$v){
                    ?>
                        <tr style="margin-left:50px">
                        <td style="width: 60px"><?php  echo $v['id_product']  ?></td>
                        <td style="width: 80px"><?php  echo $v['name_product']  ?></td>
                        <td style="width: 40px"><?php  echo $v['id_category']  ?></td>
                        <td style="width: 70px"><?php  echo $v['status']  ?></td>
                        <td style="width: 90px"><?php  echo $v['quantity']  ?></td>
                        <td style="width: 150px"><?php  echo $v['date_insert']  ?></td>
                        <td style="width: 90px"><?php  echo $v['price']  ?></td>
                        <td style="width: 140px"><?php  echo $v['id_provider']  ?></td>
                        <td style="width: 150px"><img src="<?php  echo $v['image']?>" alt="anh" width="80px" heigth="80px"></td>
                        <td> <a href="edit_products.php?idProduct=<?php echo $v['id_product'];?>">Chỉnh sữa</a> 
                            | <a href="sanpham.php?idProduct=<?php echo $v['id_product']; ?>">Xóa</a> </td><tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>

        
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
                $arrCategory = queryReturnArray("SELECT * FROM `categories`");
                foreach($arrCategory as $k=>$v){
                        ?>
                        <tr>
                            <td style="width: 50px"><?php  echo $v['id_category']  ?></td>
                            <td style="width: 150px"><?php  echo $v['name_category']  ?></td><tr>
                        <?php
                        }
            ?>
            </table>
        </div>
    </div>
</div>
</form>
    <?php
    if(isset($_POST['addCategory'])){
        if(checknull_String($_POST['id_category'])==1 && checknull_Number($_POST['newName'])==1){
            $sql = "INSERT INTO `categories` (`name_category`)"
        }
    }
    // if(isset($_POST['removeCategory'])){
    // }
    // if(isset($_POST['updateCategory']))
    include("footer.php");
?>

</body>
</html>