<?php include('inc/head.inc'); ?>
<body class="front" >

  <div id="page">
    <?php include('inc/masthead.inc'); ?>
                                <!-- The Modal -->
                                <div id="myModal" class="modal">

                                  <!-- The Close Button -->
                                  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

                                  <!-- Modal Content (The Image) -->
                                  <img class="modal-content" id="img01">

                                  <!-- Modal Caption (Image Text) -->
                                  <div id="caption"></div>



                                  <script>
                                    // Open the Modal
                                    function openModal() {
                                      document.getElementById('myModal').style.display = "block";
                                    }

                                    // Close the Modal
                                    function closeModal() {
                                      document.getElementById('myModal').style.display = "none";
                                    }

                                    var slideIndex = 1;
                                    showSlides(slideIndex);

                                    // Next/previous controls
                                    function plusSlides(n) {
                                      showSlides(slideIndex += n);
                                    }

                                    // Thumbnail image controls
                                    function currentSlide(n) {
                                      showSlides(slideIndex = n);
                                    }

                                    function showSlides(n) {
                                      var i;
                                      var slides = document.getElementsByClassName("mySlides");
                                      var dots = document.getElementsByClassName("demo");
                                      var captionText = document.getElementById("caption");
                                      if (n > slides.length) {slideIndex = 1}
                                      if (n < 1) {slideIndex = slides.length}
                                      for (i = 0; i < slides.length; i++) {
                                            slides[i].style.display = "none";
                                      }
                                      for (i = 0; i < dots.length; i++) {
                                        dots[i].className = dots[i].className.replace(" active", "");
                                      }
                                      slides[slideIndex-1].style.display = "block";
                                      dots[slideIndex-1].className += " active";
                                      captionText.innerHTML = dots[slideIndex-1].alt;
                                    }
                                  </script>
                                  <script type="text/javascript">
                                    // Get the modal
                                    var modal = document.getElementById('myModal');

                                    // Get the image and insert it inside the modal - use its "alt" text as a caption
                                    var img = $('.myImg');
                                    var modalImg = $("#img01");
                                    var captionText = document.getElementById("caption");
                                    // var captionText = "Press the ESC key to return to previous page";
                                    $('.myImg').click(function(){
                                      modal.style.display = "block";
                                      var newSrc = this.src;
                                      modalImg.attr('src', newSrc);
                                        // captionText.innerHTML = this.alt;
                                        captionText.innerHTML = "Press the ESC key to return to previous page";
                                      });

                                    // Get the <span> element that closes the modal
                                    var span = document.getElementsByClassName("close")[0];

                                    // When the user clicks on <span> (x), close the modal
                                    span.onclick = function() {
                                      modal.style.display = "none";
                                    }
                                    $(document).keydown(function(e) { 
                                      if (e.keyCode == 27) { 
                                          // $("#popdiv").fadeOut(500);
                                          //or
                                          // window.close();
                                          modal.style.display = "none";
                                        } 
                                      });
                                  </script>
                                </div>




                    <section class="form-box" >
                      <div class="container">

                        <div class="row">
                          <div class="col-sm-12  form-wizard">

                            <!-- Form Wizard -->

                            <form role="form" id="Form2" action="upload.php" method="post" enctype="multipart/form-data" >

                              <!-- <p>Fill all form field to go to next step</p> -->

                              <!-- Form progress -->
                              <div class="form-wizard-steps form-wizard-tolal-steps-4">
                                <div class="form-wizard-progress">
                                  <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="4" style="width: 12.25%;"></div>
                                </div>
                                <!-- Step 1 -->
                                <div class="form-wizard-step active">
                                  <div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                  <p>Criteria</p>
                                </div>
                                <!-- Step 1 -->

                                <!-- Step 2 -->
                                <div class="form-wizard-step">
                                  <div class="form-wizard-step-icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                                  <p>Consent</p>
                                </div>
                                <!-- Step 2 -->

                                <!-- Step 3 -->
                                <div class="form-wizard-step">
                                  <div class="form-wizard-step-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                                  <p>Setup</p>
                                </div>
                                <!-- Step 3 -->

                                <!-- Step 4 -->
                                <div class="form-wizard-step">
                                  <div class="form-wizard-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                                  <p>Submit</p>
                                </div>
                                <!-- Step 4 -->
                              </div>
                              <!-- Form progress -->


                              <!-- Form Step 1 -->
                              <fieldset>
                                <font color="black">
                                Tired of getting stuck in traffic? Georgia Tech is conducting a research study to understand the impact of smartphone navigation apps, like Google Maps® and Waze, on congestion in Atlanta. Help us unravel the mysteries of social media interactions with traffic congestion by participating in our study and uploading your Google® location data here. Applicable participants will receive a $30 Amazon gift card code! </font><p></p><br>

                                <center><h3> Participation Criteria </h3></center>
                                <div class="form-group" id="foo1">

                             <!-- <a href="#" data-toggle="popover" title="Popover Header" data-content="You need to satisfy all of the above criteria to proceed with the data donation for this research study.">Note</a> -->

                                <input type="checkbox" name="checkbox" value="" id="criteria1" onchange="activateButton(this)" class="checkbox-inline required"/> I am above 18
                                <br><input type="checkbox" name="checkbox" value="" id="criteria2" onchange="activateButton(this)" class="checkbox-inline required"/> I regularly drive a car (at least twice a week) 
                                <br><input type="checkbox" name="checkbox" value="" id="criteria3" onchange="activateButton(this)" class="checkbox-inline required"/> My primary phone is an android phone
                                <br><input type="checkbox" name="checkbox" value="" id="criteria4" onchange="activateButton(this)" class="checkbox-inline required"/> I use my android smartphone for vehicle navigation 
                                <br><input type="checkbox" name="checkbox" value="" id="criteria5" onchange="activateButton(this)" class="checkbox-inline required"/> I have "Google location services" turned on
                                <br><input type="checkbox" name="checkbox" value="" id="criteria6" onchange="activateButton(this)" class="checkbox-inline required"/> My primary residence is in Metro Atlanta (Georgia)
                                <br><input type="checkbox" name="checkbox" value="" id="criteria7" onchange="activateButton(this)" class="checkbox-inline required"/> I am not currently in an EU Country.
                                <p><b>Please Note:</b>You need to satisfy <b>all of the above criteria</b> to proceed with the data submission for this research study.</p>
                                <p>While it is possible to complete this task on a mobile device, it is considerably easier to complete it on a computer.</p>
                                <p><b>You will receive a $30 gift card via email on successful submission of the data.</b>
                                  For this study, we need data from <i>active users of the Metro Atlanta roadway network</i>. We are required to limit sending gift cards only to donors providing such data (in order to obtain data relevant to the project).  This study is enrolling up to <mark>80 participants</mark>.
                                </p>
                                <div class="form-wizard-buttons">
                                  <!-- <button type="button" class="btn btn-next" >Next</button> -->
                                  <button type="button" class="btn btn-next" onclick="checkParticipation(this)">Next</button>
                                </div>
                              </fieldset>
                              <!-- Form Step 1 -->

                              <!-- Form Step 2 -->
                              <fieldset>

                                <center><h3> Consent Form </h3></center>
                                <div id="printableArea" style="height:430px;width:100%;overflow:scroll;border-style: inset;"><center>
                                  <img src="Location_Data_Consent.v5_Page_1.jpg" alt="Location_Data_Consent.v5_Page_1.jpg" width="98%"><br>
                                  <img src="Location_Data_Consent.v5_Page_2.jpg" alt="Location_Data_Consent.v5_Page_2.jpg" width="98%"><br>
                                  <img src="Location_Data_Consent.v5_Page_3.jpg" alt="Location_Data_Consent.v5_Page_3.jpg" width="98%"><br>
                                  <br></center>
                                </div>
                                <input type="checkbox" name="checkbox" value="" id="agree" class="checkbox-inline required"/> I have read and agree to the Consent Form <br>


                                <div class="form-wizard-buttons">
                                  <button type="button"  onclick="printDiv('printableArea')" >Print Consent Form</button>&nbsp;  &nbsp;  &nbsp; 
                                  <button type="button" class="btn btn-previous">Previous</button>
                                  <!-- <button type="button" class="btn btn-next">Next</button> -->
                                  <button type="button" class="btn btn-next" onclick="checkAgree(this)">Next</button>
                                </div>
                              </fieldset>
                              <!-- Form Step 2 -->

                              <!-- Form Step 3 -->
                              <fieldset>
                                <center><h3> Setup Steps </h3></center><br>
                                <div class="block" style="background-color:white">
                                  <p>The submission of data requires the download of data from Google takeout first, followed by upload of several files to the GT server.  Please make sure you follow the instructions on this page carefully to ensure that the submission goes smoothly in the next page. </p><br>
                                  <div class="sb-skin-gold">
                                    <h5 class="super-block__title-small"> Test Pop-up and Multiple Tab Opening Permissions </h5>
                                  </div>
                                  This site needs pop-up enabled to work. Click the button below to confirm if two new windows or tabs open. If two new windows/tabs open, you are all set. Close off the two popup windows/tabs and come back to this page for the next step. If only one window/tab opens, or no additional windows/tabs opens, please click the icons below, based on the browser you are using, and follow the instructions (unless you already know how to unblock popups for a site). Thank you for your patience.  <p><center>

                                  <button type="button" class="btn btn-sub" value="Pop-up / Multi-tab Test" onClick="
                                  window.open('https://its.ce.gatech.edu/pop1.html');
                                  window.open('https://its.ce.gatech.edu/pop2.html');
                                  return true;"
                                  >Pop-up / Multi-tab Test</button>
                                  <p></p>
                                  </center>


                                  Pop-up settings instructions for :<br><center>
                                  <button type="button" class="btn btn-sub"  data-container="body" data-html="true"  animation="true" data-toggle="popover" data-placement="bottom" title="Download Settings Instructions for Chrome  <button type='button' class='close' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" data-content="
                                    <div id='myCarousel' class='carousel slide' data-ride='carousel' data-interval='false' data-wrap='false'>
                                      <!-- Indicators -->
                                      <ol class='carousel-indicators'>
                                        <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                                        <li data-target='#myCarousel' data-slide-to='1'></li>
                                      </ol>

                                      <!-- Wrapper for slides -->
                                      <div class='carousel-inner'>
                                        <div class='item active'>
                                      <br>In Chrome, look for a red cross mark <img src='blocked.png'> towards the right of the URL window (near the top right corner of your browser) that indicates popups were blocked. Enable pop-ups for this site by following the instructions below to move on to the next step. Left click on the red cross mark <br><br>
                                          <center><img src='popup_blocked.png' alt='Popup blocked' width='90%'>
                                          <br><b>Hit ESC or tap outside this window to close this window</b></center>
                                          <div class='carousel-caption'>
                                            <p style='color:black;'>Instruction Page 1 / 2</p>
                                          </div>
                                        </div>

                                        <div class='item'>
                                          Select 'Always allow pop-up redirects from https://its.ce.gatech.edu' and click <b>Done</b> 
                                          <p>
                                          <center><img src='always_allow.jpg' alt='Always Allow' width='90%'>
                                          <br><b>Hit ESC or tap outside this window to close this window</b></center>
                                          <div class='carousel-caption'>
                                            <p style='color:black;'>Instruction Page 2 / 2</p>
                                          </div>
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
                                    </div>">Chrome <img src="chrome-512.png" width="25"></button> 


                                  <button type="button" class="btn btn-sub"  data-container="body"    data-html="true"  animation="true" data-toggle="popover" data-placement="top" title="Download Settings Instructions for Firefox  <button type='button' class='close' aria-label='Close'><span aria-hidden='true'>&times;</span></button> " data-content="
                                    <div id='myCarousel' class='carousel slide' data-ride='carousel' data-interval='false' data-wrap='false'>
                                      <!-- Indicators -->
                                      <ol class='carousel-indicators'>
                                        <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                                        <li data-target='#myCarousel' data-slide-to='1'></li>
                                      </ol>

                                      <!-- Wrapper for slides -->
                                      <div class='carousel-inner'>
                                        <div class='item active'>
                                          <br>In Firefox, you will most likely see only one page that says 'First Popup window'. Go back to the original data submission tab. You will see a yellow bar that says 'Firefox prevented this site from opening a pop-up window' with an 'Options' button to the right. 
                                          <center><img width='90%' src='firefox_popup1.png' alt='Firefox 1'>
                                          <br><b>Hit ESC or tap outside this window to close this window</b></center>
                                          <div class='carousel-caption'>
                                            <p style='color:black;'>Instruction Page 1 / 2</p>
                                          </div>
                                        </div>

                                        <div class='item'>
                                          Left click on <img src='OptionsButton.png' > and select <b>'Allow pop-ups for its.ce.gatech.edu'</b> <p>
                                          <center><img width='90%' src='firefox_popup2.png' alt='Firefox 2'>
                                          <br><b>Hit ESC or tap outside this window to close this window</b></center>
                                          <div class='carousel-caption'>
                                            <p style='color:black;'>Instruction Page 2 / 2</p>
                                          </div>
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
                                    </div>">Firefox <img src="firefox-logo.png" width="25"></button>


                                  <button type="button" class="btn btn-sub"  data-container="body"    data-html="true"  animation="true" data-toggle="popover" data-placement="top" title="Download Settings Instructions for Android Chrome  <button type='button' class='close' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" data-content="
                                    <div id='myCarousel' class='carousel slide' data-ride='carousel' data-interval='false' data-wrap='false'>
                                      <!-- Indicators -->
                                      <ol class='carousel-indicators'>
                                        <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                                        <li data-target='#myCarousel' data-slide-to='1'></li>
                                        <li data-target='#myCarousel' data-slide-to='2'></li>
                                        <li data-target='#myCarousel' data-slide-to='3'></li>
                                        <li data-target='#myCarousel' data-slide-to='4'></li>
                                      </ol>

                                      <!-- Wrapper for slides -->
                                      <div class='carousel-inner'>
                                        <div class='item active'>
                                          <br> Click the 'Allow Pop-up button'. <p></p>
                                          <br>If you do not see that option after clicking the 'Pop-up / Multi-tab Test' button, go to Android Chrome settings and enable popups for the its.ce.gatech.edu site. <p>
                                          <center><img src='AndroidChromeAllow.jpg' alt='AndroidChromeSettings 1' width='320'>
                                          <br><br><b>Hit ESC or tap outside this window to close this window</b></center>
                                          <div class='carousel-caption'>
                                            <p style='color:black;'>Instruction Page 1 / 5</p>
                                          </div>
                                                                                

                                        </div>

                                        <div class='item'>
                                          <center><img src='AndroidChromeSettings.jpg' alt='Android 2' width='320'>
                                          <br><br><b>Hit ESC or tap outside this window to close this window</b></center>
                                          <div class='carousel-caption'>
                                            <p style='color:black;'>Instruction Page 2 / 5</p>
                                          </div>
                                                                                

                                        </div>

                                        <div class='item'>
                                          <center><img src='AndroidChromeSiteSettings.jpg' alt='Android 2' width='320'>
                                          <br><br><b>Hit ESC or tap outside this window to close this window</b></center>
                                          <div class='carousel-caption'>
                                            <p style='color:black;'>Instruction Page 3 / 5</p>
                                          </div>
                                                                                

                                        </div>

                                        <div class='item'>
                                          <center><img src='AndroidChromePopupSettings.jpg' alt='Android 2' width='320'>
                                          <br><br><b>Hit ESC or tap outside this window to close this window</b></center>
                                          <div class='carousel-caption'>
                                            <p style='color:black;'>Instruction Page 4 / 5</p>
                                          </div>
                                                                                
                                        </div>

                                        <div class='item'>
                                          <center><img src='AndroidChromeAllowSettings.jpg' alt='Android 2' width='320'>
                                          <br><br><b>Hit ESC or tap outside this window to close this window</b></center>
                                          <div class='carousel-caption'>
                                            <p style='color:black;'>Instruction Page 5 / 5</p>
                                          </div>
                                                                                
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


                                  <p></p>
                                </div>
                                  <!-- </div> -->
                                <div style="background-color:white">
                                    <!-- <br><center><h4>Google Login</h4></center> -->
                                    <div class="sb-skin-gold">
                                     <h5 class="super-block__title-small">Google Login</h5>
                                   </div>
                                   Click the <i>Login to Google Takeout</i> button to open a new window that will prompt you to login to your google account that you use on your android phone.  If you are already logged in to a different google account on your browser, you will need to log off from that account (or switch account) and log in to the account associated with your android phone. <b>Come back to this page once you have logged in.</b> <p><center>
                                   <button type="button" class="btn btn-sub" value="Login to Google Takeout" onClick="
                                   basicPopup('https://takeout.google.com/?pli=1');
                                   return true;"
                                   >Login to Google Takeout</button>
                                                                     <button type="button" class="btn btn-sub"  data-container="body" data-html="true"  animation="true" data-toggle="popover" data-placement="bottom" title="Sample screenshots of login page  <button type='button' class='close' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" data-content="
                                    <div id='myCarousel' class='carousel slide' data-ride='carousel' data-interval='false' data-wrap='false'>
                                      <!-- Indicators -->
                                      <ol class='carousel-indicators'>
                                        <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                                        <li data-target='#myCarousel' data-slide-to='1'></li>
                                        <li data-target='#myCarousel' data-slide-to='2'></li>
                                      </ol>

                                      <!-- Wrapper for slides -->
                                      <div class='carousel-inner'>
                                        <div class='item active'>
                                          <center><img src='google_login_prompt1.png' alt='Popup blocked' width='90%'>
                                          <br><b>Hit ESC or tap outside this window to close this window</b></center>
                                          <div class='carousel-caption'>
                                            <p style='color:black;'>Instruction Page 1 / 3</p>
                                          </div>
                                        </div>

                                        <div class='item'>
                                          <center><img src='google_login_prompt2.png' alt='Always Allow' width='90%'>
                                          <br><b>Hit ESC or tap outside this window to close this window</b></center>
                                          <div class='carousel-caption'>
                                            <p style='color:black;'>Instruction Page 2 / 3</p>
                                          </div>
                                        </div>

                                        <div class='item'>
                                          <center><img src='google_login_prompt3.png' alt='Always Allow2' width='90%'>
                                          <br><b>Hit ESC or tap outside this window to close this window</b></center>
                                          <div class='carousel-caption'>
                                            <p style='color:black;'>Instruction Page 3 / 3</p>
                                          </div>
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
                                    </div>">Sample Screenshots</button> 

                                    </center>

                                   <br>
                                   <p>
                                </div>

                                <div class="content" style="background-color:white" id="foo2">
                                  <!-- <br><center><h4>Check Download settings</h4></center> -->
                                  <div class="sb-skin-gold">
                                   <h5 class="super-block__title-small">Check Download settings</h5>
                                  </div>
                                  To ensure that we limit the data download to the 4 month period, we will need to download each day separately. <b>This will result in the opening of 122 windows followed by the saving of 122 files.</b>  To avoid having to click and save each file individually, lets ensure that your browser is configured to save files automatically to your downloads folder [you can change the settings back later by reversing the steps]. <p><center>

                                  <style type="text/css">
                                      .popover{
                                          max-width:100%;
                                          margin-left: -380px;
                                          min-width: 100%;
                                          /*margin-top: -20px;*/
                                          /*position: fixed;*/
                                      }
                                  </style></center>
                                  Download settings instructions for :<br><center>
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
                                          <center><img width='90%' src='GoogleSettings1.png' alt='Chrome 1'>
                                          <br><b>Hit ESC or tap outside this window to close this window</b></center>
                                          <div class='carousel-caption'>
                                            <p style='color:black;'>Instruction Page 1 / 2</p>
                                          </div>
                                        </div>

                                        <div class='item'>
                                          <br><br>Scroll down to the bottom of the settings page to the downloads section.<br><br><br><br><br><br>
                                          <center><img width='90%' src='download_settings.png' alt='Chrome 2'>
                                          <br><b>Hit ESC or tap outside this window to close this window</b></center>
                                          <div class='carousel-caption'>
                                            <p style='color:black;'>Instruction Page 2 / 2</p>
                                          </div>
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
                                          <center><img width='90%' src='FirefoxOptions.png' alt='Firefox 1'>
                                          <br><b>Hit ESC or tap outside this window to close this window</b></center>
                                        </div>

                                        <div class='item'>
                                          <br> <br><br>
                                          <center><img width='90%' src='FirefoxOptions2.jpg' alt='Firefox 2'>
                                          <br><b>Hit ESC or tap outside this window to close this window</b></center>
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
                                          <br>Go to Android Chrome Download settings: <br><br>
                                          <center><img src='AndroidChromeSettings.jpg' alt='AndroidChromeSettings 1' width='320'>
                                          <br><br><b>Hit ESC or tap outside this window to close this window</b></center>
                                        </div>

                                        <div class='item'>
                                          <br><br><br>
                                          <center><img src='AndroidChromeDownloadSettings.jpg' alt='Android 2' width='320'>
                                          <br><br><b>Hit ESC or tap outside this window to close this window</b></center>
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


                                <div class="form-wizard-buttons">
                                  <button type="button" class="btn btn-previous">Previous</button>
                                  <button type="button" class="btn btn-next">Next</button>
                                </div>
                              </fieldset>
                              <!-- Form Step 3 -->

                              <!-- Form Step 4 -->
                              <fieldset>
                                <center><h3> Data Submission </h3></center><br>
                                <div class="block" style="background-color:white">
                                  <div class="sb-skin-gold">
                                    <h5 class="super-block__title-small"> Download data </h5>
                                  </div>
                                   <!-- <br><center><h4>Download data</h4></center> -->
                                   Click the following button to download the location data for the months of March and April of 2017 and 2018 to your downloads folder. <p><center>
                                   <button type="button" class="btn btn-sub" value="Download" onClick="

                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i1!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i2!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i3!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i4!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i5!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i6!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i7!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i8!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i9!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i10!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i11!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i12!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i13!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i14!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i15!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i16!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i17!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i18!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i19!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i20!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i21!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i22!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i23!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i24!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i25!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i26!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i27!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i28!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i29!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i30!2m3!1i2018!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i2!3i31!2m3!1i2018!2i2!3i2');

                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i1!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i2!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i3!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i4!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i5!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i6!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i7!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i8!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i9!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i10!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i11!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i12!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i13!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i14!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i15!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i16!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i17!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i18!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i19!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i20!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i21!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i22!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i23!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i24!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i25!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i26!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i27!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i28!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i29!2m3!1i2018!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2018!2i3!3i30!2m3!1i2018!2i3!3i2');

                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i1!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i2!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i3!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i4!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i5!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i6!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i7!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i8!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i9!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i10!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i11!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i12!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i13!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i14!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i15!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i16!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i17!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i18!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i19!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i20!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i21!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i22!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i23!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i24!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i25!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i26!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i27!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i28!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i29!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i30!2m3!1i2017!2i2!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i2!3i31!2m3!1i2017!2i2!3i2');

                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i1!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i2!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i3!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i4!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i5!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i6!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i7!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i8!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i9!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i10!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i11!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i12!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i13!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i14!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i15!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i16!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i17!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i18!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i19!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i20!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i21!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i22!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i23!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i24!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i25!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i26!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i27!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i28!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i29!2m3!1i2017!2i3!3i2');
                                   window.open('https://www.google.com/maps/timeline/kml?authuser=0&pb=!1m8!1m3!1i2017!2i3!3i30!2m3!1i2017!2i3!3i2');


                                   return true;
                                   "
                                   >Download my data</button></center>
                                   <br>
                                   <p>

                                     <div class="sb-skin-gold">
                                       <h5 class="super-block__title-small">Upload data</h5>
                                     </div>
                                     <!-- <br><center><h4>Upload Data</h4></center> -->
                                     Once the download windows close, click the <b>Choose Files</b> button and select all the files with names like "history-2017-03-01.kml" to "history-2018-04-30.kml" and upload them to the secure Georgia Tech server.  <br><br><i>Hint: To choose multiple files, click the first file, then hold down the shift key while clicking on the last file you want to select.</i><br><br>
                                     Select KML files to upload: <br>
                                     <i>[Browse to your default download location, e.g. <b>Downloads</b> folder on windows]</i><br><br><center>
                                     <input type="file" name="fileToUpload[]" id="fileToUpload" multiple="multiple" accept=".kml"> <br>

                                     <button type="submit" class="btn btn-submit" value="Upload KML files" name="submit" id="submit" title="Note: All checkboxes  near the top of the page need to be checked to enable the upload button. It might be disabled if you used the back button to return to this page. Uncheck and recheck any checkbox to renable this button. ">Upload KML files</button></center>
                                     <p><b>Remember to provide your contact details on the next page for the $30 gift card</b></p>
                                     



                                     <div class="form-wizard-buttons">
                                      <button type="button" class="btn btn-previous">Previous</button>
                                    </div>
                                  </div>
                              </fieldset>
                              <!-- Form Step 4 -->


                            </form>
                            <!-- Form Wizard -->
                          </div>
                        </div>
                      </div>
                    </section>
    <!-- /#main -->

    <?php /* include('inc/superfooter.inc');  */ ?>
    <?php include('inc/footer.inc'); ?>
  </div>
  <!-- /#page -->
<!--   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
  <script  src="js/index.js"></script>
 --></body>
</html>