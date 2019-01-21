
<?php
require("index.php");
$emailErr = $passErr = $nameErr = $phoneErr = $addErr = "";
$email = $pass = $name = $phone = $add = "";
$er = "";
$duplicateUser = 0;
$user = new users();
function  hash_pass($password){
	$pass = password_hash("$password",PASSWORD_DEFAULT);
	return $pass;
}

require_once("header.php");

	if(isset($_POST['register'])){

		if(empty($_POST['userName'])){
			$nameErr = "xin mời bạn nhập tên";
		}else{
			$name = $_POST['userName'];
		}

		if(empty($_POST['userAddress'])){
			$addErr = "xin mời bạn nhập địa chỉ";
		}else{
			$add = $_POST['userAddress'];
		}
		
		if(empty($_POST['userPhone'])){
			$phoneErr = "xin mời bạn nhập số điện thoại";
		}else{
			$phone = $_POST['userPhone'];
		}

		if(empty($_POST['password'])){
			$passErr = "xin mời bạn nhập mật khẩu";
		}else{
			$pass = $_POST['password'];
		}

		if(empty($_POST['userEmail'])){
			$emailErr = "xin mời bạn nhập Email";
		}else{
			$email = $_POST['userEmail'];
		}

		if(!empty($_POST['userName']) && !empty($_POST['userPhone']) && !empty($_POST['password'])
			&& !empty($_POST['userAddress']) && !empty($_POST['userEmail'])){
				$sql = "SELECT * FROM users";
				$array = queryReturnArray("SELECT * FROM users");
				foreach($array as $key=>$value){
					if($value['name_cus'] == $_POST['userName']){
						$duplicateUser = 1;
					}
				}
			if($duplicateUser != 1 ){
				$user->insertUser($_POST['userName'],$_POST['userAddress'],$_POST['userPhone'],hash_pass($_POST['password']),$_POST['userEmail'],"User");
				echo '<script language="javascript">';
				echo 'alert("message successfully sent")';
				echo '</script>';
			}
		}
	}

?>


			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header" style="background-color: dimgrey;">
						<b style="color: rgb(215, 238, 215); font-size: 170%;">Đăng KÍ Thành Viên</b>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body " style="margin-left: 5%; margin-right: 5%">
						<center>
								<table>
								<tr>
									<td colspan="2"> <img src="Images/logo1.jpg" alt="Image" style="width: 88%; height: 70%;margin-left: 7%; "></td>
								</tr>
								</table>
								<p style="color:red"><?php  
								if($duplicateUser==0){
									echo "";
								}else{
									echo "Tên người dùng này đã tồn tại !";
								}
								?></p>
								<input type="email" class="form-control input-lg" name="userEmail" value="<?php echo  $email;?>" placeholder="Your Email"/><br/>
								<p style="color:red"><?php  echo $emailErr;?></p>
								<input type="text" class="form-control input-lg" name="userName" value="<?php echo  $name;?>" placeholder="Your Name"/><br/>
								<p style="color:red"><?php  echo $nameErr;?></p>
								<input type="password" class="form-control input-lg" name="password" value="<?php echo  $pass;?>" placeholder="Your Password"/><br/>
								<p style="color:red"><?php  echo $passErr;?></p>
								<input type="text" class="form-control input-lg" name="userAddress"value="<?php echo  $add;?>" placeholder="Your Address"/><br/>
								<p style="color:red"><?php  echo $addErr;?></p>
								<input type="text" class="form-control input-lg" name="userPhone"value="<?php echo  $phone;?>" placeholder="Your Phone Numbers"/><br/>
								<p style="color:red"><?php  echo $phoneErr;?></p>
								<br/>
								
							<button name="register" class="btn btn-lg-primary" style="border: green 1px solid; background-color: rgb(175, 238, 214)">Đăng Kí</button>
						</center>
							<p>bằng việc tiếp tục bạn đồng ý với điều khoản của chúng tôi</p>
						</div>
						<div class="modal-footer" style="background-color: dimgrey">
						<a href="#" style="border: green 1px solid; background-color: rgb(175, 238, 214)"
						data-dismiss="modal"></a>
					</div>
				</div>
			</div>
			<?php  require("footer.php") ;?>