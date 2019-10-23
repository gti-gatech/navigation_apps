<?php
// $arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
// $arr_file_types = ['application/xml', 'text/xml'];

// if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
//   echo $_FILES['file']['type'];
//   return;
// }

$allowed =  array('kml');
$filename = $_FILES['file']['name'];
$i = $argv[0];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!in_array($ext,$allowed) ) {
    echo 'Not a kml file';
    $uploadOk = 0;
    if ($i > 5 ) {
        echo "    <center><h4>Please use the browser's back button to return to the previous page and try again. Otherwise email angshuman.guin@ce.gatech.edu for assitance.</h4><br></center>";
    }
  	return;
}

 
if (!file_exists('uploads')) {
  mkdir('uploads', 0777);
}
 
move_uploaded_file($_FILES['file']['tmp_name'], '/export/data/uploads/' . time() . '_' . $_FILES['file']['name']);
 
// echo "File uploaded successfully.";
    if ($i >5 ) {
        echo "File uploaded successfully.";
    }
?>

