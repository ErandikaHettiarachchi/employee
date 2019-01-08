<?php include_once("employeeComman/head.php")?>
<?php include_once("employeeComman/header.php")?>
<?php include_once("employeeComman/slider.php")?>
<?php include_once("employeeComman/script.php")?>
<?php include("employeeComman/connection.php") ?>
<!---->

<?php 
    if(isset($_POST['saveBtn'])) {

        $cperson = $_POST['cperson'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $blood = $_POST['blood'];
        $aleg = $_POST['aleg'];
        
        $sql = "INSERT INTO emergencydetails VALUES (1,'$cperson','$address','$contact','$blood','$aleg')";
//('id', 'cntperson', 'address', 'contact', 'blood', 'allergic') 
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
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Upload user image</h3>
                        </div>
                        <form enctype="multipart/form-data"action="update.php" method="post">
                            <div class="box-body">
                                <!-- <div class="row"> -->
                                    <div class="form-group">
                                        <input type="file" name="myfile" id="fileToUpload">
                                        <input type="submit" name="submit" value="Upload File Now" >
                                    </div>
                                <!-- </div> -->
                                <!-- <hr> -->
                                <div class="row">
                                    <div class="box-header with-border">
                                        <h2 class="box-title">Upload Emergency Informations</h2>
                                    </div>
                                    <div class="col-md-1"><br></div>
                                    <div class="col-md-4">
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
                                    <div ><!--hello-->
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <input name="cperson">
                                            </div>
                                            <div class="form-group">
                                                <input name = "address">
                                            </div>
                                            <div class="form-group">
                                                <input name="contact">
                                            </div>
                                            <div class="form-group">
                                                <input name ="blood">
                                            </div>
                                            <div class="form-group">
                                                <input name="aleg">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-8"></div>
                                        <button style="width:150px" name="saveBtn" type="post" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->

                            <div class="box-footer">

                            </div>
                        </form>
                    </div>
                </div>
            <div>
        </div>
    </section>
</section>

<?php include_once("employeeComman/footer.php");?>

<?php

if(isset($_POST['submit'])) {
    $currentDir = getcwd();
    $uploadDirectory = "/employeeComman/upload/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpeg', 'jpg', 'png']; // Get all the file extensions

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = strtolower(end(explode('.', $fileName)));

    $uploadPath = $currentDir . basename($fileName);

    if (isset($_POST['submit'])) {

        if (!in_array($fileExtension, $fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        }

        if ($fileSize > 2000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, 'employeeComman/upload/'.$fileName);

            if ($didUpload) {
                echo '<script language="javascript" >';
                echo 'alert("message successfully uploaded")';
                echo '</script>';
                // echo "The file " . basename($fileName) . " has been uploaded";
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
    }

}
?>


