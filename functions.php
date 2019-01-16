<?php

    function run($sql){
        global $mysqli;
                $result = $mysqli ->query($sql);
                if(!$result){
                    echo $mysqli->error;    
                }
    }

    function queryReturnArray($sql){
        global $mysqli;
                $array = array();
                $result = $mysqli->query($sql);
                if($result){
                    while($temp = mysqli_fetch_assoc($result)){
                        array_push($array,$temp);
                    }
                }else{
                  echo $mysqli->error; 
                }
        return $array;
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
?>