<?php include 'connection.php';
include 'topnav.php'; ?>
<style>
    body{
        height: 100%;
        background-image: url("https://image.shutterstock.com/image-photo/light-color-abstract-background-created-260nw-1564029013.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<div class="contanier">
<div class="card card-register mx-auto mt-5">
<?php 
$query = 'SELECT * FROM schedule
              WHERE
             BUS_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['BUS_ID'];
                $i= $row['START'];
                $a=$row['END'];
                $b=$row['OUT_TIME'];
                $c=$row['day'];
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="scheduleedit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Start" name="START" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="End" name="END" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Out time" name="OUT_TIME" value="<?php echo $b; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Day" name="DAY" value="<?php echo $b; ?>">
                            </div>

                            <button type="submit" class="btn btn-default">Update Record</button>
                            <br></br>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <?php include 'footer.php'; ?>