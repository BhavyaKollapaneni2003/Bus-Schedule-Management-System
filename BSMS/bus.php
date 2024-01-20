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
<link rel="icon" href="image\favicon.jpg" sizes="16*16 32*32">
           <div class="col-lg-12">

            <div>
            <i class="fas fa-table"></i>

            Bus Records  <a href="busadd.php?action=add"  style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Add New</a>
            </div>    

          <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Bus Id</th>
                                        <th>Bus Name</th>
                                        <th>Driver ID</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM bus';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['BUS_ID'].'</td>';
                            echo '<td>'. $row['BUS_NAME'].'</td>';
                            echo '<td>'. $row['DRIVER_ID'].'</td>';
                           
                            echo '<td> <a  type="button" class="btn btn-xs btn-warning" href="busedit.php?action=edit & id='.$row['BUS_ID'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="busdel.php?type=bus&delete & id=' . $row['BUS_ID'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
            </div>
<?php include 'footer.php'; ?>