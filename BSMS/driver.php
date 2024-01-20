<?php include 'connection.php';
include 'topnav.php'; ?>
<style>
    body{
        height: 100%;
        background-image: url("https://img.freepik.com/free-photo/delicate-yellow-abstract-watercolor-background_3590-82.jpg?size=626&ext=jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
 <div class="col-lg-12">
                        <div>
            <i class="fas fa-table"></i>

               Driver Records  <a href="driveradd.php?action=add"  style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Add New</a>
            </div>    

                          <br> </br>      
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Driver ID</th>
                                        <th>Driver Name</th>
                                        <th>Employ Date</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM driver';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['DRIVER_ID'].'</td>';
                            echo '<td>'. $row['DRIVER_NAME'].'</td>';
                            echo '<td>'. $row['EMPLOY_DATE'].'</td>';
                            
                            echo ' <td><a  type="button" class="btn btn-xs btn-warning" href="driveredit.php?action=edit & id='.$row['DRIVER_ID'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="driverdel.php?type=driver&delete & id='.$row['DRIVER_ID'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
            </div>
                        <?php include 'footer.php'; ?>