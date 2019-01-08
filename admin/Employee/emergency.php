<?php include_once("employeeComman/head.php")?>
<?php include_once ("employeeComman/header.php")?>
<?php include_once("employeeComman/slider.php")?>
<?php include_once("employeeComman/script.php")?>
<?php include_once("employeeComman/connection.php")?>
 
<?php 
    
    $sql = "SELECT * FROM employee_leave WHERE id='3'";
    $row = $conn->query($sql)->fetch_array();

    if(isset($_POST['leavBTN'])) {
        //$employeeId = $_POST['id'];
        $startdate = date("Y-m-d", strtotime($_POST['startdate']));
        $enddate =   date("Y-m-d", strtotime($_POST['enddate']));
        $reason = $_POST['reason'];
        $sql = "INSERT INTO employee_leave VALUES (null,'$startdate','$enddate','$reason',0)";
        // $sql="INSERT INTO employee_leave VALUES (2,'2012-02-12','2012-02-12','2012-02-12',0)";

        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("Saved!")</script>';
        } else {
            echo "Error: ";
        }
    }
?>


<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title"><b>Emergency Information</b></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Contact Person:</label>
                                </div>
                                <div class="form-group">
                                    <label>Address:</label>
                                </div>
                                <div class="form-group">
                                    <label>Contact Number:</label>
                                </div>
                                <div class="form-group">
                                    <label>Blood Group:</label>
                                </div>
                                <div class="form-group">
                                    <label>Allergies:</label>
                                </div>

                            </div>

                            <div class="col-md-3">

                                <div class="form-group">
                                    <label>Ariyarathne Hettirachchi</label>
                                </div>
                                <div class="form-group">
                                    <label>No7/3,kohuwala,colombo</label>
                                </div>
                                <div class="form-group">
                                    <label>0717275722</label>
                                </div>
                                <div class="form-group">
                                    <label>A+</label>
                                </div>
                                <div class="form-group">
                                    <label>Sinusitis</label>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="box-footer">

                    </div>

                </div>
            </div>
        </div>
    </section>
</section>
<?php include_once("employeeComman/footer.php")?>



