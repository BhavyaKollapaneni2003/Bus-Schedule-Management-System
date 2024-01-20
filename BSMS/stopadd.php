<?php include 'connection.php';
include 'topnav.php'; ?>

<div class="contanier " style:"width:450px"> 
<div class="card card-register mx-auto mt-5 bg-dark">
<div class="card-header bg-danger"><h2>Add Stop</h2> </div>
<div class="card-body" >
                 

                        <form role="form" method="post" action="stoptrans.php?action=add">

                        <div class="form-group">
                              <input class="form-control" placeholder="Location ID" name="LOCATION_ID">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Location Name" name="LOCATION_NAME">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Route ID" name="ROUTE_ID">
                            </div>
                           
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                    </div>
                </div>

        </div>
        <!-- /.container-fluid -->
 <?php include 'footer.php'; ?>