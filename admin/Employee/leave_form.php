<?php include_once("employeeComman/head.php")?>
<?php include_once("employeeComman/header.php")?>
<?php include_once("employeeComman/slider.php")?>
<?php include_once("employeeComman/script.php")?>
<?php include_once("employeeComman/connection.php")?>
 
<?php 
    
    $sql = "SELECT * FROM employee_leave WHERE id='3'";
    $row = $conn->query($sql)->fetch_array();
                                                                                // select query ->method call on the object
    if(isset($_POST['leavBTN'])) {
        //$employeeId = $_POST['id'];
        $startdate = date("Y-m-d", strtotime($_POST['startdate']));
        $enddate =  date("Y-m-d", strtotime($_POST['enddate']));
        $strttime = date('H:i:s'),strtotime($_POST['strttime']));
        $endtime = date('H:i:s'),strtotime($POST['endtime']));
        $reason = $_POST['reason'];
        $sql = "INSERT INTO employee_leave VALUES (null,'$startdate','$enddate','$reason',0)";         // insert query
        // $sql="INSERT INTO employee_leave VALUES (2,'2012-02-12','2012-02-12','2012-02-12',0)";

        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("Saved!")</script>';           
        } else {
            echo "Error: ";
        }
    }
?>


//
<section class="content-wrapper">
    <section class="content-header" >
        <!-- <div class="row"> -->
            <!-- <div class="col-md-12"> -->

                <!--                leave details-->
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <!-- form start action="employeeComman/query.php" -->
                    <form method="POST" action="leave_form.php">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class=row>                             
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>From:</label>
                                                <input name = 'startdate' style="width:200px" type="date" class="form-control" id="startdate" placeholder=" " required>
                                            </div>
                                        </div> 
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>To:</label>
                                                <input name = 'enddate' style="width:200px" type="date" class="form-control" id="enddate" placeholder="" required>
                                            </div>    
                                        </div>
                                    </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>From:</label>
                                                        <input  name = 'starttime' type="date" value="08:00"  min="8:00 AM" max="05:00 PM" class="form-control" style="width:200px"id="starttime" required>
                                                        <!-- <input name = 'starttime' value="08:00 AM" min="8:00 AM" max="05:00 PM" style="width:200px" type="time" class="form-control" id="starttime"  required> -->
                                                    </div> 
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>To:</label>
                                                        <input name = 'endtime' type="date" value="05:00"  class="form-control" style="width:200px" id="endtime" required>
                                                        <!-- <input name = 'endtime' value="05:00 PM" min="8:00 AM" max="05:00 PM" style="width:200px" type="time" class="form-control" id="enddate" placeholder="" required> -->
                                                    </div> 
                                                </div>
                                            </div>
                                </div>
                                <div class="row-md-6">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Reason:</label>
                                            <textarea name='reason' style="width:450px" class="form-control" id="messageTxt"  placeholder="" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <button style="width:150px" name="leavBTN" type="post" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                        </div>
                    </form>
                </div>
    </section>
</section>
