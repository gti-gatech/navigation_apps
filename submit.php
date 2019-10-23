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
        
                        
              

          <div class="form-group">
            <?php
              if(isset($_POST["LastName"])){
                echo "Thanks ".$_POST["FirstName"]." ". $_POST["LastName"]." for your submission.<br>
                Your email address has been received as: ".$_POST["Email"]." <br> 
                The Amazon Gift card will be emailed to you at this addresses if the dataset received is deemed valid. <p>";
                $myfile = fopen("/export/data/uploads/newfile.txt", "a") or die("Unable to open file!");
                $txt = $_POST["FirstName"].",".$_POST["LastName"].",".$_POST["Email"]."\n";
                fwrite($myfile, $txt);
              } else{
                $txt = "Debug\n";
                fwrite($myfile, $txt);
              }
              fclose($myfile);
            ?>




            <style type="text/css">
                .popover{
                    max-width:100%;
                    margin-left: -380px;
                    min-width: 100%;
                    /*margin-top: -20px;*/
                    /*position: fixed;*/
                }
            </style>
            <br>
            Here are the instructions to reverse the download settings (in case you had to make changes):<br><center>
            <button type="button" class="btn btn-sub"  data-container="body"   data-html="true"  animation="true" data-toggle="popover" data-placement="top" title="Download Settings Instructions for Chrome   <button type='button' class='close' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" data-content="
              <div id='myCarousel' class='carousel slide' data-ride='carousel' data-interval='false' data-wrap='false'>
                <!-- Indicators -->
                <ol class='carousel-indicators'>
                  <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                  <li data-target='#myCarousel' data-slide-to='1'></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class='carousel-inner'>
                  <div class='item active'>
                    Go to google settings and search for <i>Downloads</i>; Or open a new tab and copy+paste the following as the URL: <br>
                    <!-- The text field -->
                    <input type='text' value='chrome://settings/?search=downloads' id='myInput' size='35'> <br><br>
                    <center><img src='GoogleSettings1.png' alt='Chrome 1' width=90%>
                    <div class='carousel-caption'>
                      <p style='color:black;'>Instruction Page 1 / 2</p>
                    </div>
                    <br><b>Hit ESC  or tap outside this window to close this window</b></center>
                  </div>

                  <div class='item'>
                    <center><img src='download_settings_Reverse.png' alt='Chrome 2' width=90%>
                    <div class='carousel-caption'>
                      <p style='color:black;'>Instruction Page 2 / 2</p>
                    </div>
                    <br><b>Hit ESC  or tap outside this window to close this window</b></center>
                  </div>

                </div>

                <!-- Left and right controls -->
                <a class='left carousel-control' href='#myCarousel' data-slide='prev'><span style='padding-top:10px;  writing-mode: vertical-rl; text-orientation: mixed;'>Previous Instruction</span>
                  <span class='glyphicon glyphicon-chevron-left'></span>
                  <span class='sr-only'>Previous</span>
                </a>
                <a class='right carousel-control' href='#myCarousel' data-slide='next'><span align='center' style='padding-top:10px;  writing-mode: vertical-rl; text-orientation: mixed;'>
                  Next Instruction</span><span class='glyphicon glyphicon-chevron-right'></span>
                  <span class='sr-only'>Next</span>
                </a>
              </div>">Chrome <img src="chrome-512.png" width="25"></button> 
            <script>
            $(document).ready(function(){
              $('[data-toggle="popover"]').popover({
                placement: 'bottom',
                  // container: 'body',
              }); 

              $('body').on('click', function (e) {
                $('[data-toggle="popover"]').each(function () {
                    //the 'is' for buttons that trigger popups
                    //the 'has' for icons within a button that triggers a popup
                    if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                        $(this).popover('hide');
                    }
                });


            });
            });
            $(document).keyup(function (event) {
              if (event.which === 27) {
                  $('[data-toggle="popover"]').popover('hide');
              }
            });
            $(document).on("click", ".popover .close" , function(){
             $(this).parents(".popover").popover('hide');
            });
            </script>
    <!--                                   <script type="text/javascript">
              $(document).ready(function() {
                  $("#example").popover({
                      placement: 'bottom',
                      html: 'true',
                      container: 'body',
                      title : '<span class="text-info"><strong>title</strong></span>'+
                              '<button type="button" id="close" class="close" onclick="$(&quot;#example&quot;).popover(&quot;hide&quot;);">&times;</button>',
                      content : 'test'
                  });
              });  
            </script> -->


            <button type="button" class="btn btn-sub"  data-container="body"   data-html="true"  animation="true" data-toggle="popover" data-placement="top" title="Download Settings Instructions for Firefox  <button type='button' class='close' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"  data-content="
              <div id='myCarousel' class='carousel slide' data-ride='carousel' data-interval='false' data-wrap='false'>
                <!-- Indicators -->
                <ol class='carousel-indicators'>
                  <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                  <li data-target='#myCarousel' data-slide-to='1'></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class='carousel-inner'>
                  <div class='item active'>
                    <br>Go to Firefox settings and search for <i>Downloads</i><br><br>
                    <center><img src='FirefoxOptions.png' alt='Firefox 1' width='90%'>
                    <div class='carousel-caption'>
                      <p style='color:black;'>Instruction Page 1 / 2</p>
                    </div>
                    <br><b>Hit ESC  or tap outside this window to close this window</b></center>
                  </div>

                  <div class='item'>
                    <center><img src='FirefoxOptions2Reverse.jpg' alt='Firefox 2' width='90%'>
                    <div class='carousel-caption'>
                      <p style='color:black;'>Instruction Page 2 / 2</p>
                    </div>
                    <br><b>Hit ESC  or tap outside this window to close this window</b></center>
                  </div>

                </div>

                <!-- Left and right controls -->
                <a class='left carousel-control' href='#myCarousel' data-slide='prev'><span style='padding-top:10px;  writing-mode: vertical-rl; text-orientation: mixed;'>Previous Instruction</span>
                  <span class='glyphicon glyphicon-chevron-left'></span>
                  <span class='sr-only'>Previous</span>
                </a>
                <a class='right carousel-control' href='#myCarousel' data-slide='next'><span align='center' style='padding-top:10px;  writing-mode: vertical-rl; text-orientation: mixed;'>
                  Next Instruction</span><span class='glyphicon glyphicon-chevron-right'></span>
                  <span class='sr-only'>Next</span>
                </a>
              </div>">Firefox <img src="firefox-logo.png" width="25"></button>


            <button type="button" class="btn btn-sub"   data-container="body"   data-html="true"  animation="true" data-toggle="popover" data-placement="top" title="Download Settings Instructions for Android Chrome  <button type='button' class='close' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"  data-content="
              <div id='myCarousel' class='carousel slide' data-ride='carousel' data-interval='false' data-wrap='false'>
                <!-- Indicators -->
                <ol class='carousel-indicators'>
                  <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                  <li data-target='#myCarousel' data-slide-to='1'></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class='carousel-inner'>
                  <div class='item active'>
                    <br>Go to Android Chrome Download settings. <br><br>
                    <center><img src='AndroidChromeSettings.jpg' alt='AndroidChromeSettings 1' width='320'><br><br>
                    <div class='carousel-caption'>
                      <p style='color:black;'>Instruction Page 1 / 2</p>
                    </div>
                    <b>Hit ESC  or tap outside this window to close this window</b></center>
                  </div>

                  <div class='item'>
                    <br>Turn off <i>Ask where to save files</i>. <br><br>
                    <center><img src='AndroidChromeDownloadSettingsReverse.jpg' alt='Android 2' width='320'><br><br>
                    <div class='carousel-caption'>
                      <p style='color:black;'>Instruction Page 2 / 2</p>
                    </div>
                    <b>Hit ESC or tap outside this window to close this window</b></center>
                  </div>

                </div>

                <!-- Left and right controls -->
                <a class='left carousel-control' href='#myCarousel' data-slide='prev'><span style='padding-top:10px; writing-mode: vertical-rl; text-orientation: mixed;'>Previous Instruction</span>
                  <span class='glyphicon glyphicon-chevron-left'></span>
                  <span class='sr-only'>Previous</span>
                </a>
                <a class='right carousel-control' href='#myCarousel' data-slide='next'><span align='center' style='padding-top:10px; writing-mode: vertical-rl; text-orientation: mixed;'>
                  Next Instruction</span><span class='glyphicon glyphicon-chevron-right'></span>
                  <span class='sr-only'>Next</span>
                </a>
              </div>">Android Chrome <img src="Android.png" width="25"></button>

            <br>
          </div>
          <p></p>





        </form>
        <!-- Form Wizard -->
        </div>
      </div>
      <?php include('inc/footer.inc'); ?>
              
    </div>
  </section>
<!--   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
 -->
  

    <script  src="js/index.js"></script>


</body>
</html>

