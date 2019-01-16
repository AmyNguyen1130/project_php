<?php 
    include("connect.php");
    include("functions.php");
?>
<!DOCTYPE html>
<html lang="">

<head>
	<title><?php if(isset($_SESSION['name'])){
		echo $_SESSION['name'];
	}else{
		echo "kinh mat Dieu Huong";
	}?></title>
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="Project_css.css">
	<link rel="stylesheet" href="responsive.css">
	<link rel="stylesheet" href="Project-Js.js">
</head>
<body>

<div class="row">
    <form action="" method="post">
    <center>
        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7" style="margin-left: 250px">
        <table>
            <tr>
                <td colspan="2"> <img src="Images/logo1.jpg" alt="Image" style="width: 88%; height: 70%;margin-left: 7%; "></td>
            </tr>
            </table>
            <input type="text" class="form-control input-lg" name="adName" placeholder="Your UserName"/><br/>
            <span value="<?php echo $nameDXerr; ?>"></span>
            <input type="password" class="form-control input-lg" name="adPass" placeholder="Your Password"/><br/>
            <span value="<?php echo $passDX; ?>"></span>
        <button name="LoginAdmin" class="btn btn-outline-primary" style="border: green 1px solid; background-color: rgb(175, 238, 214)">Đăng Nhập</button>

        </div>
    </center>
    </form>
</div>
   
        <?php 
        $name = $pass = "";
        $countUser = $countPass = 0;

        if(isset($_POST['LoginAdmin'])){

            if(isset($_POST['adName']) && isset($_POST['adPass'])){
                $name = $_POST['adName'];
                $pass = $_POST['adPass'];
                echo $name,$pass;
                global $mysqli;

                $sql = "SELECT * FROM `users` where `user_role` = 'admin' and name_cus = '$name' and pass = '$pass';";
                $result = $mysqli ->query($sql);
                if(mysqli_num_rows($result)>0){
                    $_SESSION['name'] = $name;
					$_SESSION['pass'] = $pass;
                    header('location: admin.php');
                } else {echo $mysqli-> error;}
            }
        }
        ?>              
</body>
</html>