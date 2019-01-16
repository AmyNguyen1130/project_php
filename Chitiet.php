<?php
    include("header.php");
    include("products_php.php");
?>
        <?php
       
            $nameErr  = $quanErr = $categoryErr = $dateErr = $priceErr = $statusErr = $providerErr = $imageErr  = "";
            $nameSp  =  $categorySP = $dateSP =    $image  = "";
            $quanSp = $priceSp = $providerSp = $statusSP = 0;
            $err = array();
            $idProduct;
            //xuất dữ liệu cần update
            require_once("Chitiet.php");
            if (isset($_GET['idProduct']))
            { 
                $idProduct = $_GET['idProduct'];
                $sql = "SELECT * FROM products WHERE id_product = " . $idProduct;
                $array = queryReturnArray($sql);
                foreach ($array as $key => $value) {
                    $nameSp= $value['name_product']; 
                    $categorySP= $value['id_category']; 
                    $statusSP = $value['status']; 
                    $dateSP= $value['date_insert']; 
                    $priceSp= $value['price']; 
                    $quanSp= $value['quantity']; 
                    $providerSp= $value['id_provider']; 
                    $image= $value['image']; 
                }
                
            }

            function getAllPro()
                {
                    return isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
                }
                
            function addPro($idProduct,$nameSp,$priceSp,$total,$quan,$image,$categorySP){
                $arr = getAllPro();
                // session_destroy();
                $check = 0;
                echo $idProduct;    
                foreach($arr as $key=> $value){
                    if($key == "'".$idProduct."'"){
                        $_SESSION['cart'][$key]['quan'] = $_SESSION['cart'][$key]['quan'] + 1;
                        $_SESSION['cart'][$key]['price'] = $_SESSION['cart'][$key]['price'] + 1;
                        $check = 1;
                    }   
                }

                if($check == 0){
                    $newpro = array(
                        "'".$idProduct."'"=>array(
                            'name'=>$nameSp,
                            'price'=>$priceSp,
                            'quan'=>$quan,
                            'total'=>$total,
                            'image'=>$image,
                            'category'=>$categorySP));
                    $pro = getAllPro();
                    $pro1 = array_merge($pro,$newpro);
                    $_SESSION['cart'] = $pro1;
                }
            }
            $quantity = 1;

            if(isset($_POST['addtocart'])){
                $idProduct = $_GET['idProduct'];
                addPro($idProduct,$nameSp,$priceSp,$priceSp,$quantity,$image,$categorySP);
                var_dump($_SESSION['cart']);
                $studentstotal1 = getAllPro();
            }

            if(isset($_POST['back'])){
                header('Location: Trangchu.php');
                $sql = "select * from products";
                $array = selectProducts($sql);
            }
        ?>
        
        <div class="row"style=" margin-top:50px;height:auto" >
        <form action="" method="post" role="form" enctype = "multipart/form-data">
        
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        </div>
    
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style=" margin-top:10px;margin:20px; height:auto">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php 
                                
                                        if($categorySP == 1){
                                             echo "Images/KinhNam/".$image;
                                        }else if($categorySP == 2){
                                            echo "Images/KinhNu/".$image;
                                        }else if($categorySP == 3){
                                            echo "Images/KinhTreEm/".$image;
                                        }else{
                                            echo "Images/lens/".$image;
                                        }
                                       ?>" 
                                       style="margin-top:70px" alt="image" width="250px" heigth="250px"><br/>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="padding-left:10px; padding-top:70px" >
                <table>
                    <tbody>
                        <tr>
                            <td style="width:400px;">Tên Sản Phẩm :</td>
                            <td style="width:400px; margin:5px"> <?php echo $nameSp ;?></td>
                        </tr>

                        <tr>
                            <td style="width:400px;">Loại Sản Phẩm :</td>
                            <td style="width:400px; margin:5px">
                            <?php
                                $mysqli;
                                    $array = array();
                                    $sql = "SELECT * FROM  categories";
                                    $array = queryReturnArray($sql);
                                    foreach($array as $k=> $v){
                                        if($v['id_category'] == $categorySP){
                                            echo $v['name_category'];
                                        }
                                        }
                                ?>
                                </td>
                        </tr>
                        <tr>
                        <tr>
                            <td style="width:400px;">Giá Sản Phẩm :</td>
                            <td style="width:400px; margin:5px"> <?php 
                                if($statusSP==1){
                                    echo $priceSp;
                                }else{
                                    echo $priceSp*(20/100)."vnd - <strike>$priceSp vnd</strike>";
                                }
                            ?></td>
                        </tr>
                        <tr>
                            <td style="width:400px;">Nhà Cung Cấp Sản Phẩm :</td>
                            <td style="width:400px; margin:5px">
                            <?php
                                $mysqli;
                                    $array = array();
                                    $sql = "SELECT * FROM  providers";
                                    $array = queryReturnArray($sql);
                                    foreach($array as $k=> $v){
                                        if($v['id_provider'] == $providerSp){
                                            echo $v['name_provider'];
                                        }
                                        }
                                ?></td></tr>
                        <tr><td style="width:400px;"><button  style="background: red" class="btn btn-lg-danger" name="addtocart">Thêm Vào Giỏ Hàng</button>
                        <button class="btn btn-lg-danger" style="background: red"  name="back" style="margin:5px">Trở Về</button></td></tr>
                    </tbody>
                </table>
            </div>

        </div>
    


    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">

    </div>
    
</form>
</div>
<?php  include("footer.php"); ?>
  