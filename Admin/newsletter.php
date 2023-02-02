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
    <title>Newsletter</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../img/carousel-3.jpg">
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
                            <h4 class="card-title mb-2">Newsletters</h4>
                            <span>List of all the subscribers</span>
                        </div>


                        <!-- Button trigger modal -->



                    
                    </div>
                    <div class=" card-body">
                        <div class="table-responsive">
                            

                            <div id="records"></div>


                        </div>
                    </div>


              



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
                url: "newsletter_db.php",
                type: "post",
                data: { readrecord: readrecord }, // sending data from this page 
                success: function (data, status) {
                    $('#records').html(data);  // receiving data from price_db page
                }
            });
        }

       

        //delect recode function..
        function deleteid(deleteid) {
            //confirming from the user so that it will run only
            // when the user will click yes 
            let conf = confirm("Are yo sure want to delete this data from database");
            if (conf == true) {
                $.ajax({
                    url: "newsletter_db.php",
                    type: "post",
                    data: { deleteid: deleteid }, //sending the id to write the delete query using this id
                    success: function (data, status) {
                        readRecords();// after deleting calling readRecord function to display remaining data
                    }

                });
            }

        }

        
    </script>

</body>

</html>