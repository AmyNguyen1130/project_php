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
        protected $image;
        protected $content;

        
        function __construct(){
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
        function getContent(){
            return $this->content;
        }

            function deleteProduct($input){
                global $mysqli;
                $sql = "DELETE FROM products WHERE id_product = $input";
                if($mysqli ->query($sql)){
                    echo $mysqli->error;
                    }
            }

            function insertIntoProduct($name,$quantity,$category,$price,$provider,$image,$content){
                $date = date('Y-m-d H:i:s');
                $status = 1;
                $this->name_product = $name;
                $this->quantity = $quantity;
                $this->category = $category;
                $this->status = $status;
                $this->date_insert = $date;
                $this->price = $price;
                $this->id_provider = $provider;
                $this->image = $image;
                $this->content = $content;
                global $mysqli;

                if(checknull_String($name)==1 && checknull_Number($quantity)==1 
                && isset($category) && isset($status) && checknull_Number($price)==1 && isset($provider) &&
                isset($image) && isset($date) && isset($content)){
                $sql = "INSERT INTO products (name_product,quantity,id_category,status,date_insert,price,id_provider,image,content)
                VALUES (?,?,?,?,?,?,?,?,?)";
                if($stm = $mysqli ->prepare($sql)){
                    $stm -> bind_param("siiisiiss",$name,$quantity,$category,$status,$date,$price,$provider,$image,$content);
                    $stm->execute();
                    $mysqli->error;
                }
                }
            }

            function updateProduct($id,$name,$quantity,$category,$status,$date,$price,$provider,$image,$content){
                global $mysqli;
                $sql="UPDATE `products` SET `name_product` ='$name' , `quantity` = '$quantity' , `id_category` = '$category' , `status` ='$status',
                `date_insert` ='$date' , `price` = '$price' , `id_provider` = '$provider' , `image`='$image', `content` = '$content' WHERE `id_product` = '$id'";
                    if($mysqli ->query($sql)){
                        echo " thanh cong". $mysqli->error;
                        }else{
                        echo $mysqli->error;
                        }
            }
}
      
?>

            <!-- function deleteProduct($input){
                global $mysqli;
                $sql = "DELETE FROM products WHERE id_product = $input";
                if($mysqli ->query($sql)){
                   
                   
                    echo .$mysqli->error;
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

            function insertIntoProduct($name,$quantity,$category,$status,$date,$price,$provider,$image,$content){
                $this->name_product = $name;
                $this->quantity = $quantity;
                $this->category = $category;
                $this->status = $status;
                $this->date_insert = $date;
                $this->price = $price;
                $this->id_provider = $provider;
                $this->image = $image;
                global $mysqli;
                if(checknull_String($name)==1 && checknull_Number($quantity)==1 
                && isset($category) && isset($status) && checknull_Number($price)==1 && isset($provider) &&
                isset($image) && isset($date)){
                $sql = "INSERT INTO products (name_product,quantity,id_category,status,date_insert,price,id_provider,image,content)
                VALUES (?,?,?,?,?,?,?,?,?)";
                if($stm = $mysqli ->prepare($sql)){
                    $stm -> bind_param("siiisiiss",$name,$quantity,$category,$status,$date,$price,$provider,$image,$content);
                    $stm->execute();
                    $mysqli->error;
                }
                }
            }

            function updateProduct($id,$name,$quantity,$category,$status,$date,$price,$provider,$image){
                global $mysqli;
                $sql="UPDATE `products` SET `name_product` ='$name' , `quantity` = '$quantity' , `id_category` = '$category' , `status` ='$status',
                `date_insert` ='$date' , `price` = '$price' , `id_provider` = '$provider' , `image`='$image' WHERE `id_product` = '$id'";
                    if($mysqli ->query($sql)){
                        echo " thanh cong". $mysqli->error;
                        }else{
                        echo $mysqli->error;
                        }
            }

}
    

    
?> -->