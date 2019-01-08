<?php include_once("../Employee/employeeComman/head.php")?>
<?php include_once ("../Employee/employeeComman/header.php")?>
<?php include_once("../Employee/employeeComman/slider.php")?>
<?php include_once("../Employee/employeeComman/script.php")?>
<?php include("../Employee/employeeComman/connection.php") ?>

<?php
//$current_user = "erandishanu@gmail.com";
////$sql = "SELECT * FROM employee_leave";
//$sql = "SELECT *FROM employee_leave";
//
//if($result = mysqli_query($conn, $sql)){
//    if(mysqli_num_rows($result) > 0){
////        echo "<table>";
////        echo "<tr>";
////        echo "<th>id</th>";
////        echo "<th>first_name</th>";
////        echo "<th>last_name</th>";
////        echo "<th>email</th>";
////        echo "</tr>";
//        while($row = mysqli_fetch_array($result)){
//
////            echo $row['reason'];
//            echo "<tr>";
//            echo "<td>" . $row['reason'] . "</td>";
//            echo "<td>" . $row['reason'] . "</td>";
//            echo "<td>" . $row['reason'] . "</td>";
//            echo "<td>" . $row['reason'] . "</td>";
//            echo "</tr>";
//        }
//        echo "</table>";
//        // Free result set
//        mysqli_free_result($result);
//    } else{
//        echo "No records matching your query were found.";
//    }
//} else{
//    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
//}
//
//// Close connection
//mysqli_close($conn);
?>

<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Employee Details</h3>
                    </div>
                    <form role="form" action="" method="">
                        <div class="box-body">
                            <div class="form-group">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <th>Employee Id</th>
                                        <th>Name</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Reason</th>
                                    </tr>

                                    <?php
                                    $sql = "SELECT *FROM employee_leave";
                                    if($result = mysqli_query($conn, $sql)) {
                                        if(mysqli_num_rows($result) > 0){
                                            while ($row = mysqli_fetch_array($result)) {
                                                $nameId="EM1";//$row['employeeId'];
                                                $sql2 = "SELECT *FROM employee WHERE employeeId ='$nameId' ";
                                                $row2 = $conn->query($sql2)->fetch_array();
                                                echo "<tr>";
                                                echo "<td>" . $row['employeeId']  . "</td>";
                                                echo "<td>" . $row2['fname']." ".$row2['lname'] . "</td>";
                                                echo "<td>" . $row['startdate'] . "</td>";
                                                echo "<td>" . $row['enddate'] . "</td>";
                                                echo "<td>" . $row['reason'] . "</td>";
                                                echo "</tr>";
                                            }
                                        }
                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">

                        </div>
                    </form>
                </div><!-- /.box -->

            </div>

        </div>
        <div>
        </div>
    </section>
</section>

<?php include_once("../Employee/employeeComman/footer.php")?>


