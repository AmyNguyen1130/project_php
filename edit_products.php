<?php
    session_start();
    include("header.php");
    include("products_php.php");
    $product = new products();
?>


    html{
        scroll-behavior: smooth;
        padding-top: 200px;
    }
    .scroll{
        scroll-behavior: smooth;
        height: 200px;
    }
    </style>
</head>
    <body>
        <?php
            $nameErr  = $quanErr = $categoryErr = $dateErr = $priceErr = $statusErr = $providerErr = $imageErr  = "";
            $nameSp  =  $categorySP = $dateSP =    $image  = $contentSp="";
            $quanSp = $priceSp = $providerSp = $statusSP = 0;
            $err = array();
            $idProduct;
            //xuất dữ liệu cần update
            if (isset($_GET['idProduct']))
            {
                $idProduct = $_GET['idProduct'];
                $sql = "SELECT * FROM products WHERE id_product  = " . $idProduct;
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
                    $contentSp = $value['content']; 
                }
            }


            if(isset($_POST['update'])){
                $nameSp=$_POST['pro_name']; 
                $categorySP= $_POST['category']; 
                $statusSP = 1; 
                $priceSp= $_POST['price']; 
                $quanSp= $_POST['pro_quantity']; 
                $providerSp= $_POST['provider']; 
                $image= $_FILES['upload']['name'];
                $contentSp = $_POST['content'];
                $product->updateProduct($idProduct,$nameSp,$quanSp,$categorySP,$statusSP, $dateSP,$priceSp,$providerSp,$image,$contentSp);
            }
        ?>
        <form action="" method="post" role="form" enctype = "multipart/form-data">
            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11" style="border: 2px solid black; margin-top:10px;margin:20px; height:auto">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <img src="<?php echo $image ;?>" style="margin-top:70px" alt="image" width="250px" heigth="250px"><br/>
                        <br/><br/><input type="file" name="upload" style="width:75px;">
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" >
                    <table>
                        <tbody>
                            <tr>
                                <td>Tên Sản Phẩm :</td>
                                <td> <input type="text" name="pro_name" placeholder="tên sản phẩm" value="<?php echo $nameSp ;?>" style="width:500px; margin:10px"></td>
                            </tr>
                            <tr>
                                <td>Số Lượng :</td>
                                <td> <input type="text" name="pro_quantity" placeholder="số lượng" value="<?php echo $quanSp ;?>" style="width:500px; margin:10px"></td>
                            </tr>

                            <tr>
                                <td>Loại Sản Phẩm :</td>
                                <td><select name="category" style="width:500px; margin:10px">
                                <?php
                                    $mysqli;
                                        $array = array();
                                        $sql = "SELECT * FROM  categories";
                                        $array = queryReturnArray($sql);
                                        foreach($array as $k=> $v){
                                            if($v['id_category'] == $categorySP){
                                                ?>
                                                <option value="<?php echo $v['id_category'] ?>" selected ><?php echo $v['name_category'] ?></option>
                                                <?php
                                            }else{
                                            ?>
                                            <option value="<?php echo $v['id_category'] ?>" ><?php echo $v['name_category'] ?></option>
                                            <?php
                                            }
                                            }
                                    ?>
                                    </select></td>
                            </tr>
                            <tr>
                            <tr>
                                <td>Giá Sản Phẩm :</td>
                                <td> <input type="text" name="price" placeholder="giá sản phẩm" value="<?php echo $priceSp; ?>" style="width:500px; margin:10px"></td>
                            </tr>
                            <tr>
                                <td>Nhà Cung Cấp Sản Phẩm :</td>
                                <td><select name="provider"style="width:500px; margin:10px">
                                <?php
                                    $mysqli;
                                        $array = array();
                                        $sql = "SELECT * FROM  providers";
                                        $array = queryReturnArray($sql);
                                        foreach($array as $k=> $v){
                                            if($v['id_provider'] == $providerSp){
                                                ?>
                                                <option value="<?php echo $v['id_provider'] ?>" selected ><?php echo $v['name_provider'] ?></option>
                                                <?php
                                            }else{
                                            ?>
                                            <option value="<?php echo $v['id_provider'] ?>" ><?php echo $v['name_provider'] ?></option>
                                            <?php
                                            }
                                            }
                                    ?>
                                    </select></td>
                            </tr>
                            <tr><td>Mô Tả Về Sản Phẩm:</td>
                        <td> <input name="content" style="width:500px; height:50px;margin:10px" value="<?php echo $contentSp;?>"></td></tr>
                        </tbody>
                    </table>
                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">  
                        </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <button name="update">Sửa Sản Phẩm</button>
                    <a href="sanpham.php"><button type= "button" name="back">Trở Về</button></a>
                    <br/><br/>  
                        </div>
                    </div>
                </div>
            </div>
    </form>

    <?php  include("footer.php"); ?>
    </body>
</html>