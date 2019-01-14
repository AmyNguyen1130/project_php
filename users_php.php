<?php
    // session_start();
    include("connect.php");
    include_once("functions.php");
    $_SESSION["count"] = 0;
   
    class users{

        protected $nameUser;
        protected $address ;
        protected $phone ;
        protected $pass ;
        protected $email;
        protected $userrole;

        function __construct(){

        }

        function getName(){
            return $this->nameUser;
        }
        function getAddress(){
            return $this->address;
        }
        function getPhone(){
            return $this->phone;
        }
        function getPass(){
            return $this->pass;
        }
        function getEmail(){
            return $this->email;
        }
        function getUserrole(){
            return $this->userrole;
        }
    
        function insertUser($name,$address,$phone,$pass,$email,$userrole){
            global $mysqli;
            if(checknull_String($name)==1 && isset($address)
            && checknull_Number($phone) && isset($pass) && isset($email) && checknull_String($userrole)==1){

            $this->nameUser = $name;
            $this->address = $address;
            $this->phone = $phone;
            $this->pass = $pass;
            $this->email = $email;
            $this->userrole = $userrole;
            $sql = "INSERT INTO users (name_cus,address,phone,pass,email,user_role)
            VALUES (?,?,?,?,?,?)";
                if($stm = $mysqli ->prepare($sql)){
                    $stm -> bind_param("ssssss",$this->nameUser,$this->address,$this->phone,$this->pass,$this->email,$this->userrole);
                    $stm->execute();
                    $mysqli->error;
                }
            }
        }


        function updateUser($id,$name,$address,$phone,$pass,$email,$userrole){
            global $mysqli;
            if(checknull_String($name)==1 && isset($address)
            && checknull_Number($phone) && isset($pass) && isset($email) && checknull_String($userrole)==1){
            $sql="UPDATE `products` SET `name_cus` =? , `address` = ? , `phone` = ?' , `pass` =?,
            `email` =? , `user_role` = ?";
                if($stm = $mysqli ->prepare($sql)){
                    $stm -> bind_param("ssssssi",$name,$address,$phone,$pass,$email,$userrole,$id);
                    $stm->execute();
                    $mysqli->error;
                }
            }
        }


        function deleteUsers($id){
                global $mysqli;
                $sql = "DELETE FROM users WHERE id_cus = $id";
                if($mysqli ->query($sql)){
                    }else{
                        echo $mysqli->error;
                    }
           
        }


}

    

    
    
    