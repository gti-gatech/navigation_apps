<!DOCTYPE html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon"/>
  <title>Georgia Tech: Donate Google Location Data</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css" media="all">
    @import url("/css/blocks.css");
    @import url("/css/content.css");
    @import url("/css/default.css");
    @import url("/css/editor.css");
    @import url("/css/hg_reader.css");
    @import url("/css/layout.css");
    @import url("/css/reset.css");
    @import url("/css/static.css");
    @import url("/css/typography.css");
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i');
    @import url('https://fonts.googleapis.com/css?family=Roboto+Slab:400,700');
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')
    @import url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css')
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,100,300,500')

  </style>
  <style type="text/css" media="print"> @import url("/css/print.css") </style>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script type="text/javascript" src="/js/gt.js"></script>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500'>

      <link rel="stylesheet" href="css/stylew.css">

<!-- </head>



<head>
 -->    <meta charset="utf-8">
    <!-- <title>Donate Google Location Data for Research</title> -->
    <!-- <link rel="canonical" href="https://css-tricks.com/examples/DragAndDropFileUploading/"> -->
    <link rel="canonical" href="https://its.ce.gatech.edu/">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
<!--     <script type="text/javascript">
      <!--
      if (screen.width <= 699) {
      document.location = "mobile.html";
      }
      //-->
      <!-- </script>  -->
    <script>
        function basicPopup(url) {
            popupWindow = window.open(url,'popUpWindow','height=500,width=500,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');
        }
    </script>
    <style>
#myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
  display: none;
}
#centerDiv
{
    /*position: fixed;
    /* center the div */
    right: 0;
    left: 0;
    margin-right: auto;
    margin-left: auto;
    /* give it dimensions */
    min-height: 10em;
    width: 1024px;
    /* just for example presentation */
    top: 5em;
    background-color: CornflowerBlue;
    padding-top: 5px;
    padding-right: 5px;
    padding-bottom: 5px;
    padding-left: 5px;
}

.myButton {
  -moz-box-shadow: 3px 4px 0px 0px #1564ad;
  -webkit-box-shadow: 3px 4px 0px 0px #1564ad;
  box-shadow: 3px 4px 0px 0px #1564ad;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5));
  background:-moz-linear-gradient(top, #79bbff 5%, #378de5 100%);
  background:-webkit-linear-gradient(top, #79bbff 5%, #378de5 100%);
  background:-o-linear-gradient(top, #79bbff 5%, #378de5 100%);
  background:-ms-linear-gradient(top, #79bbff 5%, #378de5 100%);
  background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5',GradientType=0);
  background-color:#79bbff;
  -moz-border-radius:5px;
  -webkit-border-radius:5px;
  border-radius:5px;
  border:1px solid #337bc4;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:17px;
  font-weight:bold;
  padding:12px 44px;
  text-decoration:none;
  text-shadow:0px 1px 0px #528ecc;
}
.myButton:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff));
  background:-moz-linear-gradient(top, #378de5 5%, #79bbff 100%);
  background:-webkit-linear-gradient(top, #378de5 5%, #79bbff 100%);
  background:-o-linear-gradient(top, #378de5 5%, #79bbff 100%);
  background:-ms-linear-gradient(top, #378de5 5%, #79bbff 100%);
  background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff',GradientType=0);
  background-color:#378de5;
}
.myButton:active {
  position:relative;
  top:1px;
}

.form-submit-button {
background: #B9DFFF;
color: #fff;
border: 1px solid #eee;
border-radius: 20px;
box-shadow: 5px 5px 5px #eee;
text-shadow:none;
}

.form-submit-button:hover {
background: #016ABC;
color: #fff;
border: 1px solid #eee;
border-radius: 20px;
box-shadow: 5px 5px 5px #eee;
text-shadow:none;
}

input[type=submit] {
  width: 30%;
  background-color: #D3D3D3;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #66CCFF;
}

input[type=button] {
  width: 30%;
  background-color: CornflowerBlue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


input[type=button]:hover {
  background-color: #66CCFF;
}

#drop_file_zone {
    background-color: #EEE; 
    border: #999 5px dashed;
    width: 290px; 
    height: 200px;
    padding: 8px;
    font-size: 18px;
}
#drag_upload_file {
  width:50%;
  margin:0 auto;
}
#drag_upload_file p {
  text-align: center;
}
#drag_upload_file #selectfile {
  display: none;
}


/* Style the Image Used to Trigger the Modal */
.myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

.myImg:hover {opacity: 0.9;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  /*max-width: 700px;*/
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 100%;
  /*max-width: 1500px;*/
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption { 
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

</style>





<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript">
  function myFunction2() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  //alert("Copied the text: " + copyText.value);
}



  function checkAgree() {
    if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }
    return false;
  }
  function checkParticipation() {
    if(document.getElementById('criteria').checked) { return true; } else { alert('Please confirm that you satisfy ALL criteria required to participate'); return false; }
    return false;
  }

  function disableSubmit() {
    document.getElementById("submit").disabled = true;
  }

  function activateButton(element) {

      if(document.getElementById("agree").checked && 
        document.getElementById("criteria1").checked && 
        document.getElementById("criteria2").checked && 
        document.getElementById("criteria3").checked && 
        document.getElementById("criteria4").checked && 
        document.getElementById("criteria5").checked && 
        document.getElementById("criteria6").checked &&
        document.getElementById("criteria7").checked 
      ){
        document.getElementById("submit").disabled = false;
        document.getElementById("submit").style.background='green';
        // document.getElementById("submit").style.color='#000000';
       }
       else  {
        document.getElementById("submit").disabled = true;
        // document.getElementById("submit").style.background='#4CAF50';
        document.getElementById("submit").style.background='grey';
      }

  }
  function printDiv(printableArea) {
    var printContents = document.getElementById("printableArea").innerHTML;
    var originalContents = document.body.innerHTML;
    popup = window.open();
    popup.document.write(printContents);
    popup.focus(); //for IE
    popup.print()
  }
</script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script type="text/javascript">
  var fileobj;
  function upload_file(e) {
    e.preventDefault();
    for (i = 0; i < e.dataTransfer.files.length; i++) {
      fileobj = e.dataTransfer.files[i];
      ajax_file_upload(fileobj, i);
    }
  }
 
  function file_explorer() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
      ajax_file_upload(fileobj,0);
    };
  }
 
  function ajax_file_upload(file_obj, i) {
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
      $.ajax({
        type: 'POST',
        url: 'ajax.php?i=' + i,
        contentType: false,
        processData: false,
        data: form_data,
        success:function(response) {
          alert(response);
          $('#selectfile').val('');
        }
      });
    }
  }
</script>

<script>
$(document).ready(function(){
    
    $('.toggler').live('click',function(){
      $(this).parent().children().toggle();  //swaps the display:none between the two spans
      $(this).parent().parent().find('.toggled_content').slideToggle();  //swap the display of the main content with slide action

  });
    
});
</script>
<style>
mark { 
  background-color: gold;
  color: black;
}
</style>
</head>
