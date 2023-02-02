<?php 
include ('connection.php');



extract($_POST);




// insert code
if(isset($_POST['name']) && isset($_POST['package']) && isset($_POST['contact']) ){

    
    
     

            $sql = "INSERT INTO `washbooking`( `package_type`,`name`,`contact`,`wash_date`,`wash_time`,`vechile_model`) VALUES ('$package','$name','$contact','$date','$time','$message')";
            $result = $connect->query($sql);

                        if($result){
                            echo 'done';
                        }else{
                            echo mysqli_error($connect);
                        }


    }


?>

