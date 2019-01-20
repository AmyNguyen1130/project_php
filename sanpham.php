<?php
    require("index.php");
    include("header.php");
    $product = new products();
    $array = array();
    $arrCategory = array();
?>
    <script>
        function checkDelete(input){
            if (confirm('Are you sure you want to delete it?')== true) {
                window.location.href= 'sanpham.php?idProduct='+ input+'';
                return true;
            } 
        }
    </script>
<form action="" method="post" enctype = "multipart/form-data">
<div class="row" style="margin :auto; margin-top:80px; background:pink;">
    <h3 style="">SẢN PHẨM</h3>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11" style="border: 2px solid black; margin-top:10px;margin:20px; height:auto">
            
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

                    <tr><td>Mô Tả Về Sản Phẩm:</td>
                        <td> <textarea name="content" cols="30" rows="10"style="width:500px; margin:10px" placeholder="Mô Tả Về Sản Phẩm"></textarea></td></tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">  
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <button name="add" class="btn btn-lg-primary">Thêm Sản Phẩm</button>
        <br/><br/>  
        </div>
    
    </div>

    <?php  
        if(isset($_POST['add'])){
            $str = $_FILES['upload1']['name'];
            $product->insertIntoProduct($_POST['pro_name'],$_POST['pro_quantity'],$_POST['category'],$_POST['price'],$_POST['provider'],$str,$_POST['content']);
            $array = queryReturnArray("SELECT * FROM products");
        }

        if (isset($_GET['idProduct']))
	    {
            $idProduct = $_GET['idProduct'];
            $product->deleteProduct($idProduct);
            $array = queryReturnArray("SELECT * FROM products");
        }

        if(!empty($_POST['search'])){
            if(isset($_POST['searchContent'])){
                $search = $_POST['searchContent'];
                $array = queryReturnArray("SELECT * FROM products WHERE `name_product`like'%$search%' OR `quantity` LIKE '%$search%' OR `id_category` LIKE '%$search%' OR `status` LIKE '%$search%'OR
                `date_insert` LIKE '%$search%' OR `price` LIKE '%$search%' OR `id_provider` LIKE '%$search%' OR `image`LIKE '%$search%'OR `content` LIKE '%$search%'");
            }
        }
        ?>

    
    <!-- <div class="row" style="margin :auto;background: black;">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <h1 style="color: white;">Tìm kiếm Sản Phẩm</h1>
        </div>
        
        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
        <div class="search-758px" style="padding-top:20px">
                <div>
                    <input type="text" name="searchContent" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-info" type="button" name="search">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div> -->

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
                        <td style="width: 80px"><?php  echo $v['id_category']  ?></td>
                        <td style="width: 70px"><?php  echo $v['status']  ?></td>
                        <td style="width: 90px"><?php  echo $v['quantity']  ?></td>
                        <td style="width: 150px"><?php  echo $v['date_insert']  ?></td>
                        <td style="width: 90px"><?php  echo $v['price']  ?></td>
                        <td style="width: 140px"><?php  echo $v['id_provider']  ?></td>
                        <td style="width: 150px"><img src="<?php echo "Images/".$v['image'];?>" alt="anh" width="80px" heigth="80px"></td>
                        <td> <a href="edit_products.php?idProduct=<?php echo $v['id_product'];?>">Chỉnh sữa</a> 
                            | <a href="#" onclick="checkDelete(<?php echo $v['id_product']; ?>)">Xóa</a> </td><tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>

</div>
</form>
    <?php
    
    include("footer.php");
?>
