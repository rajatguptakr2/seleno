   <?php include 'header.php';?>
 
<!--header section end-->
<!--slider section start-->
 <!--<div class="slider-section">
    <div class="container" style="position: relative;">
        <div class="row">
            <div class="slider-box">
                <h2> Your groceries, <br/><span>delivered.</span></h2>
                <p>Fresh from your local store in as soon as one hour.</p>
                <button  class="delivered-btn"> Get Started</button>
            </div>
        </div>
    </div>
</div> -->


<div class="myslider">
<!--<section class="jk-slider">
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <a href="#"><img src="assets/images/sliderbanner.jpg"></a>
        <div class="hero">
        <div class="slider-box">
            <h2>groceries delivered,  <br/><span>at your command</span></h2>
            <p>From your local store in as soon as one hour</p>
        </div>
        
      </div>
    </div>
    <div class="item">
       <a href="#"><img src="assets/images/sliderbanner.jpg"></a>
      <div class="hero">
      <div class="slider-box">
             <h2>Groceries delivered,  <br/><span>at your command</span></h2>
            <p>From your local store in as soon as one hour</p>
        </div>
      </div>
    </div>
    <div class="item">
      <a href="#"><img src="assets/images/sliderbanner.jpg"></a>
      <div class="hero">
      <div class="slider-box">
             <h2>groceries delivered,  <br/><span>at your command</span></h2>
            <p>From your local store in as soon as one hour</p>
        </div>
      </div>
    </div>
  </div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <i class="fa fa-angle-left arrowicons glyphicon-chevron-left" aria-hidden="true"></i>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
      <i class="fa fa-angle-right arrowicons glyphicon-chevron-right" aria-hidden="true"></i>
  </a>
</div>
    
</section>-->





<div id="themeSlider" class="carousel slide" data-ride="carousel">
   <!-- <ol class="carousel-indicators">
        <li data-target="#themeSlider" data-slide-to="0" class="active"></li>
        <li data-target="#themeSlider" data-slide-to="1"></li>
        <li data-target="#themeSlider" data-slide-to="2"></li>
    </ol>-->

    <div class="carousel-inner">
        <div class="item active">
            <div class="imgOverlay"></div>
           <img src="assets/images/sliderbanner.jpg">
             
        </div>
        <div class="item">
            <div class="imgOverlay"></div>
            <img src="assets/images/sliderbanner.jpg">
           
        </div>
        <div class="item">
            <div class="imgOverlay"></div>
           <img src="assets/images/sliderbanner.jpg">
            
        </div>
    </div>

    <a class="left carousel-control" href="#themeSlider" data-slide="prev">
        <span class="fa fa-chevron-left"></span>
    </a>
    <a class="right carousel-control"href="#themeSlider" data-slide="next">
        <span class="fa fa-chevron-right"></span>
    </a>

    <div class="main-text hidden-xs hidden-sm">
        <div class="col-md-12 text-center">
            <div class="carousel-caption" style="bottom:0; top:0%;  ">
                <div class="slider-box">
                     <h2>Seleno <br/><span style="color:#fe6001;font-size:23px">Leading Through Technology.</span></h2>
                    <p style="color:rgb(22, 143, 238);font-size:23px">
                        <?php if(!empty($cms_list)){ pr($cms_list);?>

                        <?php }else{?>
                            Solution For Everything.
                        <?php }?>
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>




</div>

<!--slider section end-->


<!--homesection div start-->
<div id="homesection">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>High Quality Assurance</h2>
                <hr class="borderwhite-sm1">
            </div>
            <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <img src="assets/images/mid-icon-1.jpg">
                <h3> Quick Service</h3>
                <p>With the Store at your fingertips, shop and schedule delivery as often as you want</p>
            </div>
            <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <img src="assets/images/mid-icon-2.jpg">
                <h3> From your Local Grocery Store</h3>
                <p> This is as fresh as it can get. Same product, just the way you would hand pick</p>
            </div>
            <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <img src="assets/images/mid-icon-3.jpg">
                <h3> At your Door</h3>
                <p> Have your order delivered wherever you are. At home, the office, on vacation, or to friends and family</p>
            </div>
            
        </div>
    </div>  
</div>
<!-- homesection div end -->
<div id="homesecton2">
    <div class="container centermy-div" style="background-color: #3a2525bf; height: 38%; border-radius:2px">
        <div class="row">
            <h3 style="color:#fff ">Our Major Cities</h3>
            <p style="color:#fff ">You ready to make to India Digital</p>
            
                 <div class="drop-menu">
                    <div class="select">
                      <span>Select City</span>
                      <i class="fa fa-chevron-down"></i>
                    </div>
                    <input type="hidden" name="">
                    <ul class="dropeddown">
                      <li>Delhi </li>
                      <li>Mumbai</li>
                      <li>Noida </li>
                      <li>kolkata</li>
                    </ul>
              </div>
               <div class="drop-menu">
                    <div class="select">
                      <span>Select Area</span>
                      <i class="fa fa-chevron-down"></i>
                    </div>
                    <input type="hidden" name="">
                    <ul class="dropeddown">
                      <li>Sector 65 </li>
                      <li>Sector 64</li>
                      <li>Sector 63</li>
                      <li>Sector 62</li>
                    </ul>
              </div>
              
              <!-- <div class="drop-menu" style="background-color:transparent">
                     <button class="get-start" data-toggle="modal" data-target="#myModal">Get Started</button>
              </div>
               -->
              
      
      
        </div>
    </div>
</div>

<!--
<div class="client-review">

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Testimonials </h2>
                <hr class="borderwhite-sm1">
            </div>
            <div class="col-md-12">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel" style="margin-top:30px">
                 
                    <div class="carousel-inner text-center">
                      
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
                                        d exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute ir
                                        ure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                       
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
                                        d exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute ir
                                        ure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                       
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
                                        d exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute ir
                                        ure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                   
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                        </li>
                    </ol>
 
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        
    </div>
    

</div>-->

<!--app download section start-->
<!-- <div id="app-download">
 <div class="container">
    <div class="row">
        <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <h2>Get your FREE APP now</h2>
            <hr class="borderwhite-sm2">
            <p> Are you ready to shop online from stores near you? </p>
            <h4>Download Now</h4>
            <a class="sec-get-app" href="#"><img class="appdownload-img" src="assets/images/app-store1.png"></a> 
            <a class="sec-get-app sec-get-app1" href="#"><img class="appdownload-img" src="assets/images/app-store2.png"></a>
        </div>
        <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6">
             
                <img class="appdownload-img1" src="assets/images/mobile-app3.png">
             
        </div>
        
    </div>
 </div>  
</div> -->
<!--app download section end-->
<!--contact div start-->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Contact us </h2>
                <hr class="borderwhite-sm1">
            </div>  
            <div class=" col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <input type="text" class="contact-field" placeholder="Name">
            </div>
            <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <input type="text" class="contact-field" placeholder="Email">
            </div>
            <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <input type="text" class="contact-field" placeholder="Subject">
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <textarea rows="9" cols="100" name="massage"class="contact-field" placeholder="Message"></textarea>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <input type="submit" style="background-color:#fe6001 " name="submit" id="sub20" value="Submit">
            </div>
            </div>
            <div class=" col-xs-12 col-sm-3 col-md-3 col-lg-3 ">
            <div class="right-contact-div">
             <p class="contact-p"> <i class="fa fa-phone contctimg" style="font-size: 30px; color:#fe6001" aria-hidden="true"></i> <span>0585-GROCERY</span></p>
              <p class="contact-p"> <i class="fa fa-envelope contctimg" style="font-size: 30px; color:#fe6001" aria-hidden="true"></i> <span>voc@allaboutgrocery.com</span></p> 
              </div>
            </div>
            
        </div>
    </div>

</div>

<!--contact div end-->


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="    padding: 15px 15px 0px !important">
        <button type="button" class="close" data-dismiss="modal" style="font-size:30px">&times;</button>
            
      </div>
      <div class="modal-body"style="padding:0px !important">
        <h3>Be the first to know</h3>
        <p class="model-popup-p">We aren't in your area yet, but we're expanding every week. Enter your Email to be notified when
        AllAboutGrocery launches in your neighborhood.</p>
        <form>
            <input type="text"class="popup-input" placeholder="Enter Email">
            <input type="submit" value="Submit" class="popup-submit">
        </form>
      </div>
      <div class="modal-footer" style="border-top:none;">
        
      </div>
    </div>

  </div>
</div>



    <?php include 'footer.php';?>
