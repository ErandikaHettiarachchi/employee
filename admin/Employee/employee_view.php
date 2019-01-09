<?php include_once("employeeComman/head.php")?>
<?php include_once ("employeeComman/header.php")?>
<?php include_once("employeeComman/slider.php")?>
<?php include_once("employeeComman/script.php")?>
<?php include("employeeComman/connection.php") ?>
<!---->
<?php
    $current_user = "erandishanu@gmail.com";
    $sql = "SELECT * FROM employee WHERE email='$current_user'";
    $row = $conn->query($sql)->fetch_array();

?>


<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-9">
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Employee Details</h3>
                        </div>
                        <form role="form" action="" method="">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>First Name:</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name:</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Gender: </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Address:</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone No:</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Hired Date :</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Department:</label>
                                        </div>

                                    </div>
                                    <div >
                                        <div class="col-md-8">

                                            <div class="form-group">
                                                <label id="fnamelabel" value="Erandika">
                                                    <?php  echo $row['fname']; ?>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label id="lnamelabel"><?php  echo $row['lname']; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <label id="genderlabel"><?php  echo $row['gendar']; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <label id="emaillabel"><?php  echo $row['email']; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <label id="addresslabel"><?php  echo $row['address']; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <label id="phonelabel"><?php  echo $row['phone']; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <label id="hirelable"><?php  echo $row['hireddate']; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <label id="departmentlabel"><?php  echo $row['department']; ?></label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div><!-- /.box-body -->

                            <div class="box-footer">

                            </div>
                        </form>
                    </div>

            </div>
        </div>
        <div>
        </div>
    </section>
</section>

<?php include_once("employeeComman/footer.php")?>
