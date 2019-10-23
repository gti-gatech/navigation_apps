<?php include('inc/head.inc'); ?>

<body class="front" >
<div id="page">
  <?php include('inc/masthead.inc'); ?>

    <section class="form-box" >
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-12  form-wizard">
          
            <!-- Form Wizard -->

                      <form role="form" id="Form2" action="submit.php" method="post" enctype="multipart/form-data" >

                        <!-- <p>Fill all form field to go to next step</p> -->
              
                        
              

                        <fieldset>

<?php 

$target_dir = "/export/data/uploads/";
$rand_str = time() . '_' . rand(100, 999) . '.' ;
$file_count = count($_FILES["fileToUpload"]["name"]);
if ($file_count == 0){
    echo "    <center><h4><mark>No files were received!</mark> <br>Please use the browser's back button to return to the previous page and try again. Otherwise email angshuman.guin@ce.gatech.edu for assitance.</h4><br></center>";
} else {
    echo "Number of files to upload: ".$file_count."<br>";
}
for ($i=0; $i<$file_count; $i++) {
    $target_file = $target_dir . $rand_str . basename($_FILES["fileToUpload"]["name"][$i]);
    if ($file_count > 0){$uploadOk = 1 ;}
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        // if($check !== false) {
        //     echo "File is an image - " . $check["mime"] . ". <br>";
        //     $uploadOk = 1;
        // } else {
        //     echo "File is not an image.";
        //     $uploadOk = 0;
        // }
        $allowed =  array('kml');
        $filename = $_FILES['fileToUpload']['name'][$i];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            echo 'Not a kml file';
            $uploadOk = 0;
            if (($i == $file_count - 1 ) || ($file_count == 0)){
                echo "    <center><h4>Please use the browser's back button to return to the previous page and try again. Otherwise email angshuman.guin@ce.gatech.edu for assitance.</h4><br></center>";
            }
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
            if (($i == $file_count - 1 ) || ($file_count == 0)){
                echo "    <center><h4>Please use the browser's back button to return to the previous page and try again. Otherwise email angshuman.guin@ce.gatech.edu for assitance.</h4><br></center>";
            }
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"][$i] > 10000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
            if (($i == $file_count - 1 ) || ($file_count == 0)){
                echo "    <center><h4>Please use the browser's back button to return to the previous page and try again. Otherwise email angshuman.guin@ce.gatech.edu for assitance.</h4><br></center>";
            }
    }
    // Allow certain file formats
    // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    // && $imageFileType != "gif" ) {
    if($imageFileType != "kml" ) {
        echo "Sorry, only KML files are allowed.";
        $uploadOk = 0;
            if (($i == $file_count - 1 ) || ($file_count == 0)){
                echo "    <center><h4>Please use the browser's back button to return to the previous page and try again. Otherwise email angshuman.guin@ce.gatech.edu for assitance.</h4><br></center>";
            }
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
            if (($i == $file_count - 1 ) || ($file_count == 0)){
                echo "    <center><h4>Please use the browser's back button to return to the previous page and try again. Otherwise email angshuman.guin@ce.gatech.edu for assitance.</h4><br></center>";
            }
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
            // echo "The file ". basename( $_FILES["fileToUpload"]["name"][$i]). " has been uploaded.<br>";
            if (($i == $file_count - 1 ) || ($file_count == 0)){
                echo "    <center><h4>Files successfully uploaded. Thank You for your support!</h4><br>The $10 amazon gift card will be emailed to your email address after verification of reciept of data.</center>";
            }

        } else {
            echo "Sorry, there was an error uploading your file: ". basename( $_FILES["fileToUpload"]["name"][$i]);
            if (($i == $file_count - 1 ) || ($file_count == 0)){
                echo "    <center><h4>Please use the browser's back button to return to the previous page and try again. Otherwise email angshuman.guin@ce.gatech.edu for assitance.</h4><br></center>";
            }
        }
    }
}
?>



                            <h4>Please provide your name and email address so we can send you the Amazon gift card.</h4>
                <div class="form-group">

                              <label>First Name: <span>*</span></label>
                                    <input type="text" name="FirstName" placeholder="First Name" class="form-control required">
                                </div>
                                <div class="form-group">
                              <label>Last Name: <span>*</span></label>
                                    <input type="text" name="LastName" placeholder="Last Name" class="form-control required">
                                </div>
                                <div class="form-group">
                              <label>Email: <span>*</span></label>
                                    <input type="text" name="Email" placeholder="Email" class="form-control required">
                                </div>
                                <div class="form-wizard-buttons">
                                    <button type="submit"  class="btn btn-submit">Submit</button>

                                </div>
                            </fieldset>
              <!-- Form Step 5 -->                      
                      </form>
            <!-- Form Wizard -->
                    </div>
                </div>
                    
            </div>
        </section>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>

  

    <script  src="js/index.js"></script>


</body>
</html>
