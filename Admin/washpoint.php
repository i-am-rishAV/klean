<?php 
include ("session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Zenix - Crypto Admin Dashboard">
    <meta property="og:title" content="Zenix - Crypto Admin Dashboard">
    <meta property="og:description" content="Zenix - Crypto Admin Dashboard">
    <meta property="og:image" content="https://zenix.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <title>washpoint</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

            <!--**********************************
                Nav header start
            ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <img src="../images/logo.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
                Nav header end
            ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php include ("includes/header.php")?>
        <!--**********************************
            Header end 
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include("includes/sidebar.php") ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header d-sm-flex d-block">
                        <div class="mr-auto mb-sm-0 mb-3">
                            <h4 class="card-title mb-2">Wash point</h4>
                            <span>List of all the wash points</span>
                        </div>


                        <!-- Button trigger modal -->



                        <button type="button" class="btn btn-info mb-2" data-toggle="modal"
                            data-target="#addservice">+ Add Wash point</button>
                    </div>
                    <div class=" card-body">
                        <div class="table-responsive">
                            

                            <div id="records"></div>


                        </div>
                    </div>


                    <!-- add Modal -->
                    <div class="modal fade" id="addservice">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add location</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>


                                <div class="modal-body">
                                    <form id="myform">

                                        <div class="mb-3">
                                            <label for="title">Point name<span
                                                    style="color:red; padding-left:10px;">*</span></label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Enter point name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="title">Point address<span
                                                    style="color:red; padding-left:10px;">*</span></label>
                                            <input type="text" class="form-control" name="address" id="address"
                                                placeholder="Enter point address">
                                        </div>

                                        <div class="mb-3">
                                            <label for="image" class="form-label">contact<span
                                                    style="color:red; padding-left:10px;">*</span></label>
                                            <input class="form-control" type="number" name="contact" id="contact" placeholder="phone number">
                                        </div>



                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger light"
                                        data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="addrecord()">Save</button>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!-- modal end  -->

                    <!-- edit Modal -->
                    <div class="modal fade" id="editmodal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Update</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>


                                <div class="modal-body">
                                    <form id="myform" enctype="multipart/form-data">
                                        

                                     <div class="mb-3">
                                            <label for="title">Point name<span
                                                    style="color:red; padding-left:10px;">*</span></label>
                                            <input type="text" class="form-control" name="update_name" id="update_name"
                                                placeholder="Enter service name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="title">Point address<span
                                                    style="color:red; padding-left:10px;">*</span></label>
                                            <input type="text" class="form-control" name="update_address" id="update_address"
                                                placeholder="Enter service name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="image" class="form-label">contact<span
                                                    style="color:red; padding-left:10px;">*</span></label>
                                            <input class="form-control" type="number" name="update_contact" id="update_contact">
                                        </div>

                                        


                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger light"
                                        data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="update()">update</button>
                                    <input type="hidden" id="hidden_id">
                                </div>


                            </div>
                        </div>
                    </div>

                    <!-- edit modal end  -->



                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->










    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
            Scripts
        ***********************************-->


    <!-- Required vendors -->

    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>



    <script src="vendor/owl-carousel/owl.carousel.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <!-- <script src="js/styleSwitcher.js"></script> -->
    <script>
        jQuery(document).ready(function () {
            setTimeout(function () {
                dezSettingsOptions.version = 'dark';
                new dezSettings(dezSettingsOptions);
            }, 1500)
        });
    </script>

    <script>


        $(document).ready(function () {
            readRecords();
        });



        // to display on dom function..
        function readRecords() {
            let readrecord = "readrecord"; // creating a varaible to send to use it as isset function
            $.ajax({
                url: "washpoint_db.php",
                type: "post",
                data: { readrecord: readrecord }, // sending data from this page 
                success: function (data, status) {
                    $('#records').html(data);  // receiving data from price_db page
                }
            });
        }

        //add record function..
        function addrecord() {
            // storing all the inputs by user in variable 






            let name = $('#name').val();
            let contact = $('#contact').val();
            let address = $('#address').val();
            

            // let content = document.getElementById('content').value ;  
            
            // console.log(name, post, image.length);

            

            if (name != '' && contact != '' && address != ''  ) {

                $.ajax({

                    url: "washpoint_db.php",
                    type: "post",
                     data: {
                        address: address,
                        name: name,
                        contact: contact
                        
        },

        success: function (data, status) {
            $('#address').val(""); //  reseting the value back to null
            $('#name').val("");
            $('#contact').val("");
            
            $('#addservice').modal("hide");
            readRecords(); //to display the new data entered in database we callinf this function
            
        }
                });


            } else {

                alert("please fill everything in the form");
            };



        }

        //delect recode function..
        function deleteid(deleteid) {
            //confirming from the user so that it will run only
            // when the user will click yes 
            let conf = confirm("Are yo sure want to delete this data from database");
            if (conf == true) {
                $.ajax({
                    url: "washpoint_db.php",
                    type: "post",
                    data: { deleteid: deleteid }, //sending the id to write the delete query using this id
                    success: function (data, status) {
                        readRecords();// after deleting calling readRecord function to display remaining data
                    }

                });
            }

        }

        //edit record function..
        function editdisplay(id) {
            $('#hidden_id').val(id); //giving id to the hidden input

            $.post("washpoint_db.php", { id: id }, function (data, status) {

                let management = JSON.parse(data); // converting json data to javascript object
                $('#update_name').val(management.point_name); // accessing the data that we just converted into javascript object
                $('#update_address').val(management.point_address); // accessing the data that we just converted into javascript object
                $('#update_contact').val(management.contact); // accessing the data that we just converted into javascript object
                
                

            }
            );
            

            $('#editmodal').modal("show"); // now showing the modal with all the data

        }


        function update() {
            let add_name = $('#update_name').val();
            let add_address = $('#update_address').val();
            let add_contact = $('#update_contact').val();

            


            let add_hidden_id = $('#hidden_id').val();

            if (add_name != '') {
                $.post("washpoint_db.php", {

                    add_name: add_name,
                    add_address: add_address,
                    add_contact: add_contact,
                    add_hidden_id: add_hidden_id,
                    

                },
                    function (data, status) {
                        $('#editmodal').modal("hide");
                        readRecords();
                    }

                );
            } else {
                alert("please fill everything in the update form");
            }


        }
    </script>

</body>

</html>