<?php 
include ('connection.php');



extract($_POST);


//display code
if(isset($_POST['readrecord'])){
  

                    $display = "SELECT * from `washbooking`";
                    $result = $connect->query($display);

                    if(mysqli_num_rows($result)> 0){
                        
                            $data = '<table class="table style-1" id="ListDatatableView">
                                <thead>
                                    <tr>
                                        <th>#BOOKING ID</th>
                                    
                                        <th>PACKAGE</th>
                                        <th>DATE</th>
                                        <th>TIME</th>

                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                            ';


                          while($row = mysqli_fetch_assoc($result)){
                            $data .= '<tr>
                                        <td>
                                            <h6>'.$row['id'].'</h6>
                                        </td>
                                        
                                        <td>
                                            <div class="media-body">
                                                <h6 class="text-primary">'.$row['package_type'].'</h6>
                                                
                                            </div>
                                        </td>

                                        <td>
                                            <div class="media-body">
                                                <h6 >'.$row['wash_date'].'</h6>
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media-body">
                                                <h6 c>'.$row['wash_time'].'</h6>
                                                
                                            </div>
                                        </td>
                                       

                                        <td>
                                            <div class="d-flex action-button">

                                                <button 
                                                    class="btn btn-info btn-xs light px-2" onclick="editdisplay('.$row['id'].')">
                                                    <svg width="20" height="20" viewbox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M.2 10a11 11 0 0 1 19.6 0A11 11 0 0 1 .2 10zm9.8 4a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0-2a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" stroke="#fff" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path></svg>
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
                            
                            }

                        
     $data .= '</tbody';
     $data .= '</table';
                       
     
     echo $data;

    }
}


//delete code

if(isset($_POST['deleteid'])){

    $userid = $_POST['deleteid'];

    $delete = "DELETE from `washbooking` where `id` = '$userid'";
    $result = $connect->query($delete);
}

// display full details 
if(isset($_POST['id']) && isset($_POST['id']) != ""){ // chechinh weather id is null or not if not then run th next codes
    $serviceid = $_POST['id'];//id getting from edit button function
    $sql = "SELECT * from `washbooking` where `id` = '$serviceid'";
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



