<?php include_once("employeeComman/head.php")?>
<?php include_once ("employeeComman/header.php")?>
<?php include_once("employeeComman/slider.php")?>
<?php include_once("employeeComman/script.php")?>
<?php include("employeeComman/connection.php") ?>
<!---->

<script>session_start();</script>

<?php
    $id=intval($_SESSION["id"]);
    $sql = "SELECT * FROM employee WHERE id=$id";
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
                    </div><!-- /.box -->

<!--                    <div class="box box-primary">-->
<!--                        <div class="box-header  with-border">-->
<!--                            <h3 class="box-title">Other</h3>-->
<!--                        </div><!-- /.box-header -->
<!--                        <!-- form start -->
<!--                        <form role="form">-->
<!--                            <div class="box-body">-->
<!--                                <div class="row">-->
<!--                                    <div class="col-md-6">-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Employee ID:</label>-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Date Hired:</label>-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Department: </label>-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Tax Status:</label>-->
<!--                                        </div>-->
<!---->
<!--                                    </div>-->
<!--                                    <div >-->
<!--                                        <div class="col-md-6">-->
<!---->
<!--                                            <div class="form-group">-->
<!--                                                <label>EMP1</label>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label>01/01/2018</label>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label>Wash</label>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label>Free</label>-->
<!--                                            </div>-->
<!---->
<!--                                        </div>-->
<!---->
<!--                                    </div>-->
<!---->
<!--                                </div>-->
<!---->
<!---->
<!---->
<!---->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div><!-- /.box -->
<!--                </div>-->

                <!--        parent details-->
<!--                <div class="col-md-6">-->
<!--                    <div class="box box-primary">-->
<!--                        <div class="box-header with-border">-->
<!--                            <h3 class="box-title">-->
<!--                                Salary Informations-->
<!--                            </h3>-->
<!--                        </div><!-- /.box-header -->
<!--                        <!-- form start -->
<!--                        <form role="form">-->
<!--                            <div class="box-body">-->
<!--                                <div class="row">-->
<!--                                    <div class="col-md-6">-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Basic:</label>-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Bonus:</label>-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Allowances: </label>-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>EPF 12%:</label>-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>ETF 3%:</label>-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Total:</label>-->
<!--                                        </div>-->
<!---->
<!--                                    </div>-->
<!--                                    <div >-->
<!--                                        <div class="col-md-6">-->
<!---->
<!--                                            <div class="form-group">-->
<!--                                                <label id="basiclabel">60000</label>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label id="bonuslabel">6000</label>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label id="allowanceslabel">3000</label>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label id="epflabel">7200</label>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label id="etflable">1800</label>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label id="totallabel">78000</label>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!---->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="box-footer">-->
<!---->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div><!-- /.box -->
<!---->
<!---->
<!--                </div>-->

            </div>
        </div>
        <div>
        </div>
    </section>
</section>

<?php include_once("employeeComman/footer.php")?>
