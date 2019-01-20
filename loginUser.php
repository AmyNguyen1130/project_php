<?php
require("index.php");
	$temp = array();
    $countPass = 0 ;
    
	if(isset($_POST['Login'])){
		if(checknull_String($_POST['userNameLogin'])==1){
                check_PassAndUsername($_POST['userNameLogin'],$_POST['passwordLogin']);
                header("location: TrangChu.php");
			}
        }
        
    function check_PassAndUsername($name,$password){
        global $mysqli;
        $sql = "SELECT * FROM users";
        $result = $mysqli ->query($sql);
        if($result){
            while($temp = mysqli_fetch_assoc($result)){
                if($name == $temp['name_cus']){
                if(password_verify($password,$temp['pass'])){
                        $_SESSION['name'] = $name;
                        $_SESSION['pass'] = $password; 
                }
                }
            }
        }
    }

require_once("header.php");
?>

			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header" style="background-color: dimgrey;">
						<b style="color: rgb(215, 238, 215); font-size: 170%;">Đăng Nhập</b>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body " style="margin-left: 5%; margin-right: 5%">
						<center>
								<table>
								<tr>
									<td colspan="2"> <img src="Images/logo1.jpg" alt="Image" style="width: 88%; height: 70%;margin-left: 7%; "></td>
								</tr>
								</table>
								<input type="text" class="form-control input-lg" name="userNameLogin" placeholder="Your UserName"/><br/>
								<span value="<?php echo $nameDXerr; ?>"></span>
								<input type="password" class="form-control input-lg" name="passwordLogin" placeholder="Your Password"/><br/>
								<span value="<?php echo $passDX; ?>"></span>
							<button name="Login" class="btn btn-outline-primary" style="border: green 1px solid; background-color: rgb(175, 238, 214)">Đăng Nhập</button>
						</center>
							<p>bằng việc tiếp tục bạn đồng ý với điều khoản của chúng tôi</p>
						</div>
						<div class="modal-footer" style="background-color: dimgrey">

						<a href="#" class="btn btn-outline-primary" style="border: green 1px solid; background-color: rgb(175, 238, 214)"
						data-dismiss="modal">Đóng</a>
					</div>
				</div>
			</div>
			<?php  require("footer.php") ;?>