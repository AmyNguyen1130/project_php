
<?php
    require("index.php");
    $nameErr  = $quanErr = $categoryErr = $dateErr = $priceErr = $statusErr = $providerErr = $imageErr  = "";
            $nameSp  =  $categorySP = $dateSP =    $image  = $description = "";
            $quanSp = $priceSp = $providerSp = $statusSP = 0;
            $err = array();
            $quantity = 1;
            $idProduct;
    function displayProduct($sql){
                $array = array();
                $count = 0;
                $array = queryReturnArray($sql);
                foreach($array as $k=>$v){
                    $count = $count + 1;
                    if($v['status']==0){
                        $pri = $v['price']*(20/100);
                    ?>
                    
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 thumbnail" style="height:300px">
                        <div class="hovereffect  img<?php echo $count;?>">
                            <a href=""><img src="Images/<?php  echo $v['image'];?>" alt="<?php  echo $v['image'];?>" class="anhcontent img-responsive "></a>
                            <div class="overlay">
                                <a class="info" href="Chitiet.php?idProduct=<?php echo $v['id_product'];?>" target="Blank"><?php echo $v['name_product']  ?></a>
                            </div>
                        </div>
                        <div class = "img<?php echo $count;?>">
                            <span style="color:red"><?php echo $pri."vnd- <strike>".$v['price']."vnd</strike>";?></span><br/>
                            <a href="Chitiet.php?idProduct=<?php echo $v['id_product'];?>"><button type="button" style="background: red" class="btn btn-lg-danger">Xem Chi Tiết</button></a>
                        </div>
                    </div>
                <?php
                    }else{
                        ?>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 thumbnail" style="height:300px">
                            <div class="hovereffect  img<?php echo $count;?>">
                            <a href=""><img src="Images/<?php  echo $v['image'];?>" alt="<?php  echo $v['image'];?>" class="anhcontent img-responsive "></a>
                                <div class="overlay">
                                    <a class="info" href="Chitiet.php?idProduct=<?php echo $v['id_product'];?>" target="Blank"><?php echo $v['name_product']  ?></a>
                                </div>
                            </div>
                            <div class = "img<?php echo $count;?>">
                                <span style="color:red"><?php echo $v['price']."vnd";?></span><br/>
                                <a href="Chitiet.php?idProduct=<?php echo $v['id_product'];?>"><button type="button" style="background: red" class="btn btn-lg-danger">Xem Chi Tiết</button></a>
                            </div>
                        </div>
            
                    <?php
                    }
                }
            }
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
                    $description = $value['content'];
                    $image= $value['image']; 
                }
                
            }

            function getAllPro()
                {
                    return isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
                }
                
            function addPro($idProduct,$nameSp,$priceSp,$total,$quan,$image,$categorySP){
                $arr = getAllPro();
                $check = 0;
                foreach($arr as $key=> $value){
                    if($key == "'".$idProduct."'"){
                        $_SESSION['cart'][$key]['quan'] = $_SESSION['cart'][$key]['quan'] + 1;
                        $_SESSION['cart'][$key]['total'] = $_SESSION['cart'][$key]['total'] + $_SESSION['cart'][$key]['price'];
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
    if(isset($_POST['addtocart'])){

        $idProduct = $_GET['idProduct'];
        run("UPDATE view set view = view + 1 where id_product =".$idProduct);
        addPro($idProduct,$nameSp,$priceSp,$priceSp,$quantity,$image,$categorySP);
        $_SESSION['soluong'] = $_SESSION['soluong'] + 1;
    }
           
    
    include("header.php");

    if(isset($_POST['back'])){
        header('Location: TrangChu.php');
        $sql = "select * from products";
        $array = selectProducts($sql);
    }
    ?>
       <script>
           $('#pic-1').elevateZoom({
            zoomType:"inner",
            cursor: "crosshair",
            zoomwindowFadeIn:500,
            zoomwindoeFaceOut:750,
           });
       </script>

    <div class="row"style="height:auto" >
        <form action="" method="post" role="form" enctype = "multipart/form-data">
    
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11" style="height:auto">
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        
        <center>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                <div class="preview-pic tab-content">
                <img id = "pic-1" data-zoom-image="<?php echo "Images/".$image;?>"  src="<?php echo "Images/".$image;?>"style="margin-top:70px" alt="image" width="350px" heigth="250px"><br/>
                </div>
            </div>

            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7" style=" padding-top:50px" >
                <table>
                    <tbody>
                        <tr><td colspan = "2" style="width:400px"> <h4><?php echo "<h3><b>".$nameSp."</b></h3>";?></h4></td></tr>
                            <tr><td colspan = "2" style="width:400px"> <h4><?php echo "<i>Loại Sản Phẩm : </i> <b>";
                            $mysqli;
                            $array = array();
                            $sql = "SELECT * FROM  categories";
                            $array = queryReturnArray($sql);
                            foreach($array as $k=> $v){
                                if($v['id_category'] == $categorySP){
                                    echo $v['name_category']."</b>";
                                }
                                }
                            ?></h4></td></tr>

                            <tr><td colspan = "2" style="width:400px"> <h4><?php echo "<i>Giá Sản Phẩm : </i><b>";
                            if($statusSP==1){
                                echo $priceSp."</b>";
                            }else{
                                echo $priceSp*(20/100)."vnd - <strike>$priceSp vnd</strike></b>";
                            }
                            ?></h4></td></tr>

                            <tr><td colspan = "2" style="width:400px"> <h4><?php echo "<i>Nhà Cung Cấp Sản Phẩm : </i><b>";
                            $mysqli;
                            $array = array();
                            $sql = "SELECT * FROM  providers";
                            $array = queryReturnArray($sql);
                            foreach($array as $k=> $v){
                                if($v['id_provider'] == $providerSp){
                                    echo $v['name_provider']."</b>";
                                }
                                }
                            ?></h4></td></tr>
                            <tr><td colspan = "2" style="width:400px"> <h4><?php echo "<b>".$description."</b>";?></h4></td></tr>
                            <tr><td>
                            <?php
                                $view = queryReturnArray("SELECT * FROM  view where id_product =".$idProduct);
                                foreach($view as $k=> $v){
                                        echo "<h5><b> <p class='glyphicon glyphicon-heart'></p> <p class='glyphicon glyphicon-heart'></p> <p class='glyphicon glyphicon-heart'></p>
                                        <p class='glyphicon glyphicon-heart'></p> <p class='glyphicon glyphicon-heart'></p>  ( ".$v['view'].")</b></h5>";}
                                    ?>
                            </td></tr>
                            <tr><td style="width:400px;"><button  type="submit" style="background: red" class="btn btn-lg-danger" name="addtocart">Thêm Vào Giỏ Hàng</button>
                        <button type = "button" class="btn btn-lg-danger" style="background: red"  name="back" style="margin:5px">Trở Về</button></td></tr>
                    </tbody>
                </table>
            </div>
        </center>
    </div>
    
</form>
</div>
  <div class="row">
      <center><h3><b>Có thể bạn quan tâm</b></h3></center>
  </div>
<div class="row" style=" margin-bottom:30px">
    <?php   displayProduct("SELECT * FROM products WHERE id_category = 1 LIMIT 1");
    displayProduct("SELECT * FROM products WHERE id_category = 2 LIMIT 1");
    displayProduct("SELECT * FROM products WHERE id_category = 3 LIMIT 1");
    displayProduct("SELECT * FROM products WHERE id_category = 4 LIMIT 1");?>
</div>

<div class="row" style="margin-top: 20px">
<?php  include("footer.php"); ?>
</div>


  