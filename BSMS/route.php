<?php include 'connection.php';
include 'topnav.php';?>
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

               Route Records  <a href="routeadd.php?action=add" style="background-image: linear-gradient(black, #014923);> type="button" class="btn btn-xs btn-info">Add New</a>

               <a href="map.php?action=add" style="background-image: linear-gradient(black, #014923);> type="button" class="btn btn-xs btn-info">route map</a>
            </div>  <br> </br>
                                
                        <div class="table-responsive">
                           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                                    <tr>
                                        <th>Route ID</th>
                                        <th>Start</th>
                                        <th>Finish</th> 
                                        <th>Options</th>  
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM route';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {

                           echo '<tr>';
                           
                            echo '<td>'. $row['ROUTE_ID'].'</td>';
                            echo '<td>'. $row['START'].'</td>';
                            echo '<td>'. $row['FINISH'].'</td>';
                                             
                            
                            echo ' <td><a  type="button" class="btn btn-xs btn-warning" href="routeedit.php?action=edit & id='.$row['ROUTE_ID'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="routedel.php?type=route&delete & id=' . $row['ROUTE_ID'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <?php include 'footer.php'; ?>