<?php 
include ('connection.php');



extract($_POST);


//display code
if(isset($_POST['readrecord'])){
  

                    $display = "SELECT * from `contact`";
                    $result = $connect->query($display);

                    if(mysqli_num_rows($result)> 0){
                        $number = 1;
                            $data = '<table class="table style-1" id="ListDatatableView">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                    
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>SUBJECT</th>
                                        <th>MESSAGE</th>

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
                                            <div class="media-body">
                                                <h6 class="text-primary">'.$row['name'].'</h6>
                                                
                                            </div>
                                        </td>

                                        
                                        
                                        <td>
                                            <div class="media-body">
                                                <h6 class="text-primary">'.$row['email'].'</h6>
                                                
                                            </div>
                                        </td>

                                        <td>
                                            <div class="media-body">
                                                <h6 class="text-primary">'.$row['subject'].'</h6>
                                                
                                            </div>
                                        </td>

                                        <td>
                                            <div class="media-body">
                                                <h6 class="text-primary">'.$row['message'].'</h6>
                                                
                                            </div>
                                        </td>
                                       

                                        <td>
                                            <div class="d-flex action-button">
                                               

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


//delete code

if(isset($_POST['deleteid'])){

    $userid = $_POST['deleteid'];

    $delete = "DELETE from `contact` where `id` = '$userid'";
    $result = $connect->query($delete);
}






