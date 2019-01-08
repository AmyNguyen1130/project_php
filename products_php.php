<?php
    // session_start();
    include("connect.php");
    $_SESSION["count"] = 0;

    class products {
        protected $name_product ;
        protected $quantity ;
        protected $category ;
        protected $status ;
        protected $date_insert;
        protected $price ;
        protected $id_provider ;
        protected $image ;

    function __construct($name,$quantity,$category,$status,$date,$price,$provider,$image){
        $this->name_product = $name;
        $this->quantity = $quantity;
        $this->category = $category;
        $this->status = $status;
        $this->date_insert = $date;
        $this->price = $price;
        $this->id_provider = $provider;
        $this->image = $image;
    }

    function getName(){
        return $this->name_product;
    }
    function getQuantity(){
        return $this->quantity;
    }
    function getCategory(){
        return $this->category;
    }
    function getStatus(){
        return $this->status;
    }
    function getDate(){
        return $this->date_insert;
    }
    function getPrice(){
        return $this->price;
    }
    function getProvider(){
        return $this->id_provider;
    }
    function getImage(){
        return $this->image;
    }
    }

    function checknull_String($input){
        $result;
        if(isset($input)){
            if(is_numeric($input)){
                $result = 0;
            }else{
                $result = 1;
            }
        }else{
            $result = 0;
        }
        return $result;
    }

    function checknull_Number($input){
        $result;
        if(isset($input)){
            if(!is_numeric($input)){
                $result = 0;
            }else{
                $result = 1;
            }
        }else{
            $result = 0;
        }
        return $result;
    }

    function queryReturnArray($sql){
        global $mysqli;
                $array = array();
                $result = $mysqli ->query($sql);
                if($result){
                    while($temp=mysqli_fetch_assoc($result)){
                        array_push($array,$temp);
                    }
                }
        return $array;
    }

    function Run($sql){
        global $mysqli;
                $result = $mysqli ->query($sql);
                if(!$result){
                    echo $mysqli->error;    
                }
 
    }

    function deleteProduct($input){
        global $mysqli;
        $sql = "DELETE FROM products WHERE id_product = $input";
        if($mysqli ->query($sql)){
            echo "xoa thanh cong";
            }else{
            echo "xoa that bai".$mysqli->error;
            }
    }

    function createproduct($name,$quantity,$category,$price,$provider,$image){
        $product;
        if(checknull_String($name)==1 && checknull_Number($quantity)==1 
        && isset($category) && checknull_Number($price)==1 && isset($provider) &&
        isset($image)){
            $date = date('Y-m-d H:i:s');
            $status = 1;
            $product = new products($name,$quantity,$category,$status,$date,$price,$provider,$image);
            return $product;
        }
        
    }

    function insertIntoProduct($name,$quantity,$category,$status,$date,$price,$provider,$image){
        global $mysqli;
        if(checknull_String($name)==1 && checknull_Number($quantity)==1 
        && isset($category) && isset($status) && checknull_Number($price)==1 && isset($provider) &&
        isset($image) && isset($date)){
        $sql = "INSERT INTO products (name_product,quantity,id_category,status,date_insert,price,id_provider,image)
        VALUES (?,?,?,?,?,?,?,?)";
        if($stm = $mysqli ->prepare($sql)){
            $stm -> bind_param("siiisiis",$name,$quantity,$category,$status,$date,$price,$provider,$image);
            $stm->execute();
            $mysqli->error;
        }
        }
    }

    function updateProduct($id,$name,$quantity,$category,$status,$date,$price,$provider,$image){
        global $mysqli;
        // if(checknull_String($name) == 1 && checknull_Number($quantity) == 1 && isset($id) && isset($category) && 
        // isset($status) && checknull_Number($price) == 1 && isset($provider) && isset($image) && isset($date)){
        $sql="UPDATE `products` SET `name_product` ='$name' , `quantity` = '$quantity' , `id_category` = '$category' , `status` ='$status',
         `date_insert` ='$date' , `price` = '$price' , `id_provider` = '$provider' , `image`='$image' WHERE `id_product` = '$id'";
            if($mysqli ->query($sql)){
                echo " thanh cong". $mysqli->error;
                }else{
                echo $mysqli->error;
                }
        // }else{
        //     echo "nhap chua dung";
        // }

    }

    

    
?>