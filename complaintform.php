<?php 

    include('complaintsession.php');
  if(!session_id())
  {
    session_start();
  }
include('dbconnect.php');
$fuser=$_SESSION['fuser'];

 
?>

 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />
    <title>CS443 Project</title>
</head>

<body>
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    
    
        <!-- Sidebar -->
    
        
        <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4" style="padding: 3rem;">

        <div class="row">
            <div class="col-lg col-md">
                
                <div class="card" style="min-height: 485px">
                    
                    <div class="card-header card-header-text">

                        <h3 class="card-title">Complaint Form</h3>

                    </div>   <!-- DEENAAAAAAA -->

                    <div class="card-content table-responsive p-2">
                        <form method="POST" action="complaintprocess.php" enctype="multipart/form-data" class="row g-3">
                            <h5 class="form-label">User Details</h5>
                            <div class="col-md-6">
                                <b><label for="fname" class="form-label">Name</label></b><br>
                                <?php
                             $sql4 = "SELECT * FROM user WHERE username='$fuser'";
                              $result4 = mysqli_query($conn, $sql4);
                              $row4=mysqli_fetch_array($result4);
                              
                            echo $row4['name'];
                             
                          
                          ?>
                                
                            </div>
                            <div class="col-md-6"> <!-- Stated kat form-->
                                <b><label for="fphone" class="form-label">Phone Number</label></b><br>
                                <?php
                            
                              
                            echo $row4['phone']; 
                          ?>
                                
                            </div>
                            <hr/>
                            <h5 class="form-label">Complaint Details</h5>
                            <div class="col-md-6">
                                <label for="fdesc" class="form-label">Complaint Description</label>
                                <input type="text" class="form-control" id="fdesc" name="fdesc" placeholder="Enter complaint details" required="">
                            </div> 

                       
                            <div class="col-md-6">
                                <label for="ftype" class="form-label">Complaint Type</label>
                                <select id="ftype" class="form-select" name="ftype" required="">
                                <option disabled selected>Choose complaint type</option>
                                <option value="1">Jalan Raya</option>
                                <option value="2">Lampu Isyarat</option>
                                <option value="3">Papan Tanda</option>
                                <option value="4">Pembahagi Jalan</option>
                                <option value="4">Longkang Jambatan</option>  <!---TAMBAH JENIS COMPLAINT----->
                            </div>
                               
                            </select><br><br><br>
</div>
<div style="text-align: center;">
                                <input type="submit" class="btn btn-primary" value="Submit complaint"></input>
                                
                            </div> 
                        </form>
                    </div>
                
            <div class="col-md-6">
                                <a href="homepage.php" class="btn btn-secondary btn-sm" type="button">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    &nbsp;Back to main page
                </a></div>
            </div>
            
        </div>
    </div>
</main>
<!--Main layout-->
</body>

</html>
