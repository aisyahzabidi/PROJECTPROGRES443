<?php 
include ('complaintsession.php');
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
    <title>Jabatan Kerja Raya E-Aduan</title>
</head>

<body style="background-color:LightGoldenRodYellow;">
<!--Main Navigation-->
<header>
   
    
        
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px; background-color:LightGoldenRodYellow;">
    <div class="container pt-4" style="padding: 3rem;">

        <div class="row">
            <div class="col-lg col-md">
                <div class="card" style="min-height: 485px">
                <?php if (isset($_GET['success'])) { ?>  <br>   
                    <div class="alert alert-info text-center" style="font-size: 15px;text-align: center;color: green;"><?php echo "Successful!"; ?></div> <?php } ?>
                    
                    <?php if (isset($_GET['fail'])) { ?>  <br>   
                    <div class="alert alert-info text-center" style="font-size: 15px;text-align: center;color: red;"><?php echo "Failed!"; ?></div> <?php } ?>
                    <div class="card-header card-header-text">

                        <h4 class="card-title">Submitted Complaints
                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                    <a class="btn btn-outline-primary" href="complaintform.php"><i class="fa-solid fa-square-plus me-2"></i>Make a complaint </a></h4>
                </div>
                    <div class="card-content table-responsive p-2">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Complaint ID</th>
                                    <th scope="col">Name</th>
                                   <!-- <th scope="col"></th> submitted date - tambah dalam tb_complaint -->
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Status</th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
$sql2 = "SELECT * FROM tb_complaint INNER JOIN user ON tb_complaint.comp_user = user.username WHERE comp_user='$fuser' "; 
$result2 = mysqli_query($conn, $sql2);
while($row2 = mysqli_fetch_array($result2))
{
                                ?>
                                <tr>
                                    <td><?php echo $row2['comp_id']; ?></td>
                                    <td><?php echo $row2['name']; ?></td>
                                    <td><?php echo $row2['phone']; ?></td>
                                    <td><?php echo $row2['comp_desc']; ?></td>
                                    <td><?php 
                                    $type = $row2['comp_type'];
                                    $sql3 = "SELECT * FROM tb_complaint INNER JOIN tb_comptype ON tb_complaint.comp_type = tb_comptype.type_id WHERE tb_complaint.comp_type='$type'"; 
                                    $result3 = mysqli_query($conn, $sql3);
                                    $row3 = mysqli_fetch_array($result3);
                                    echo $row3['type_desc']; ?></td>
                                    <td><?php 
                                    if($row2['comp_status']=='1')
                                    {
                                        echo "Pending";
                                    }
                                    else
                                    {
                                        echo "Completed";

                                    }

                                     ?></td>
                                  
                        
                                </tr>
                               <?php }  ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                              <a href="logout.php" class="btn btn-secondary btn-sm" type="button">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    &nbsp;Log out
                </a> </div>
                </div>
            </div>
            
            
        </div>
        </div>
    </div>
</main>

<!--Main layout-->
</body>

</html>