<?php 
include ('connection.php');



extract($_POST);


//display code
if(isset($_POST['readrecord'])){
  

                    $display = "SELECT * from `service`";
                    $result = $connect->query($display);

                    if(mysqli_num_rows($result)> 0){
                        $number = 1;
                            $data = '<table class="table style-1" id="ListDatatableView">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ICON CODE</th>
                                        <th>SERVICE</th>
                                        <th>CONTENT</th>

                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                            ';


                          while($row = mysqli_fetch_assoc($result)){
                            $data .= '<tr>
                                        <td>
                                            <h6>'.$number.'</h6>
                                        </td>
                                        <td>
                                            <div class="media style-1 ">
                                            <h6 >'.$row['icon'].'</h6>
                                                

                                            </div>
                                        </td>
                                        <td>
                                            <div class="media-body">
                                                <h6 >'.$row['name'].'</h6>
                                                
                                            </div>
                                        </td>

                                        <td>
                                            <div class="media-body">
                                                <h6 >'.$row['content'].'</h6>
                                                
                                            </div>
                                        </td>
                                       

                                        <td>
                                            <div class="d-flex action-button">
                                                <button 
                                                    class="btn btn-info btn-xs light px-2" onclick="editdisplay('.$row['id'].')">
                                                    <svg width="20" height="20" viewbox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z"
                                                            stroke="#fff" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </button>

                                                <button
                                                    class="ml-2 btn btn-xs px-2 light btn-danger" onclick="deleteid('.$row['id'].')">
                                                    <svg width="20" height="20" viewbox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z"
                                                            stroke="#fff" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>

                                                </button>
                                            </div>
                                        </td>
                                    </tr>';
                            $number++;
                            }

                        
     $data .= '</tbody';
     $data .= '</table';
                       
     
     echo $data;

    }
}

// insert code
if(isset($_POST['name']) && isset($_POST['icon']) && isset($_POST['content']) ){

    
    
    //     
    //     
    //     
           
    //  

            $sql = "INSERT INTO `service`( `icon`,`name`,`content`) VALUES ('$icon','$name','$content')";
            $result = $connect->query($sql);

                        if($result){
                            echo 'done';
                        }else{
                            echo mysqli_error($connect);
                        }


    }


//delete code

if(isset($_POST['deleteid'])){

    $userid = $_POST['deleteid'];

    $delete = "DELETE from `service` where `id` = '$userid'";
    $result = $connect->query($delete);
}

// displaying in edit box
if(isset($_POST['id'])){ // chechinh weather id is null or not if not then run th next codes
                $manageid = $_POST['id'];//id getting from edit button function
                $sql = "SELECT * from `service` where `id` = '$manageid'";
                $fire = mysqli_query($connect,$sql);

                if(!$fire){
                    // exit(mysqli_query());
                }

                    $response = array(); // no need for this but still storing it

                    if(mysqli_num_rows($fire)>0){  
                        while($row = mysqli_fetch_assoc($fire)){
                            $response = $row;
                        }
                    }
                else{
                    $response['status'] = 200; 
                    $response['message'] = "data not found";
                }

                echo json_encode($response);  //converting array to json     
    }else{
         $response['status'] = 200;
         $response['message'] = "invalid request";
        }

            


//update codes


if(isset($_POST['add_hidden_id'])){
    $add_id= $_POST['add_hidden_id'];

    $add_name = $_POST['add_name'];
    $add_icon = $_POST['add_icon'];
    $add_content = $_POST['add_content'];
    
    
    

    $sql = "UPDATE `service` SET `icon`='$add_icon', `name`='$add_name', `content`='$add_content' WHERE `id` = '$add_id'";
    $result = $connect->query($sql);
}

?>

