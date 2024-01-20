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

<div class="contanier"> 
<div class="card card-register mx-auto mt-5">
<div class="card-header"><h2>Add new Record</h2> </div>
<div class="card-body">
                 

                        <form role="form" method="post" action="bustrans.php?action=add">
                            
                            <div class="form-group">
                            <input type="id" class="form-control" placeholder="BUS ID" name="BUS_ID">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control"  placeholder="BUS Name" name="BUS_NAME">
                            </div>
                            <div class="form-group">
                              <input type="id" class="form-control" placeholder="Driver ID" name="DRIVER_ID">
                            </div> 
                            
                            <button type="submit" class="btn btn-default"> <h6> Save Record </h6> </button>
                            <button type="reset" class="btn btn-default"> <h6> Clear Entry </h6> </button>


                      </form>  
                    </div>
                </div>

        </div>
        <!-- /.container-fluid -->
 <?php include 'footer.php'; ?>