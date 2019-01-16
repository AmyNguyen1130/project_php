
<?php 
session_start();
include("products_php.php");
include("functions.php");
$array = array();
$arrCategory = array();

    if(isset($_POST['addCategory'])){
        if(isset($_POST['newName'])==1){
            $sql = "INSERT INTO `categories` (`name_category`) VALUES (?)";
            if($stm = $mysqli ->prepare($sql)){
                $stm -> bind_param("s",$_POST['newName']);
                $stm->execute();
                $mysqli->error;
            }
        }
        $arrCategory = queryReturnArray("SELECT * FROM `categories`");
    }
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
    <title><?php 
	if(isset($_SESSION['name'])){
		echo $_SESSION['name'];
	}else{
		echo "kinh mat Dieu Huong";
	}
	?></title>
    <style>
    html{
        scroll-behavior: smooth;
    }
    
    .table-wrapper-scroll-y {
        display: block;
        max-height: 500px;
        overflow-y: auto;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        padding-left : 50px;
}
    </style>
</head>
<body>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin:180px">
        <h3> Danh Mục Sản Phẩm</h3>
    
    <form action="" method="post">
    <div class="row" style="padding-left : 50px;">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <h4>Thêm Danh Mục Sản Phẩm</h4>
            <table>
                <tr>
                    <td>Tên Loại: </td>
                    <td><input type="text" name="newName"></td>
                </tr> 
                <tr>
                    <td colspan="2"><button name="addCategory">Thêm Loại Sản Phẩm</button></td>
                </tr>
                
            </table>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h4>Tất Cả Các Danh Mục Sản Phẩm</h4>
            <table>
                <tr>
                    <th>Mã</th>
                    <th>Danh Mục</th>
                    <th>Tùy Chỉnh</th>
                </tr>
                <script>
                    function checkDelete(input){
                        if (confirm('Are you sure you want to delete it?')== true) {
                            window.location.href= 'danhmuc.php?id_category='+ input+'';
                            return true;
                        } 
                    }
                </script>
                <?php  

                if (isset($_GET['id_category']))
                {
                    $idcate = $_GET['id_category'];
                    run("delete from categories where id_category = $idcate");
                    $arrCategory = queryReturnArray("SELECT * FROM `categories`");
                }
                $arrCategory = queryReturnArray("SELECT * FROM `categories`");
                foreach($arrCategory as $k=>$v){
                        ?>
                        <tr>
                            <td style="width: 50px"><?php  echo $v['id_category']  ?></td>
                            <td style="width: 150px"><?php  echo $v['name_category']  ?></td>
                            <td> <a href="sanpham.php?id_category=<?php echo $v['id_category'];?>">Chỉnh sữa</a> 
                            | <a href="#" onclick="checkDelete(<?php echo $v['id_category']; ?>)" >Xóa</a> </td>
                            <tr>
                        <?php
                        }
            ?>
            </table>
        </div>

        </div>
        </form>
    </div>

    </body>
    </html>
    <?php   include("header.php");include("footer.php");?>