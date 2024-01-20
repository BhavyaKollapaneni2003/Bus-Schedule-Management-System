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

            Schedule Records  <a href="scheduleadd.php?action=add"  style="background-image: linear-gradient(black, #014923);> type="button" class="btn btn-xs btn-info">Add New</a>
            </div>    

                        <br> </br>       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Bus ID</th>
                                        <th>Start</th>
                                        <th>End</th>
                                        <th>Out time</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM schedule';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['BUS_ID'].'</td>';
                            echo '<td>'. $row['START'].'</td>';
                            echo '<td>'. $row['END'].'</td>';
                            echo '<td>'. $row['OUT_TIME'].'</td>';
                            
                            
                           
                            echo ' <td> <a  type="button" class="btn btn-xs btn-warning" href="scheduleedit.php?action=edit & id='.$row['BUS_ID'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="scheduledel.php?type=schedule&delete & id='.$row['BUS_ID'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
            </div>
                        <?php include 'footer.php'; ?>