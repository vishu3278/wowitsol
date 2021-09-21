<?php include('config.php');
include('include/header.php'); ?>
<script type="text/javascript" src="plugin/slick/slick.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

    $('.slider_vis_1').slick({
        'autoplay': true,
        'slidesToShow': 1,
        'slidesToScroll': 1,
        'dots': true,
        'infinite': true,
        'cssEase': 'linear'
    });

    $('.menu .item').tab();

    /*$('#view_features').on('click', function() {
        $.tab('change tab', 'features');

    });
    $('#viewdemo').on('click', function() {
        $.tab('change tab', 'home');
    });*/

    $('a[href^="#"]').on('click',function (e) {
      // e.preventDefault();

      var target = this.hash;
      var $target = $(target);

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 900, 'swing', function () {
          window.location.hash = target;
      });
  });
});
</script>
<script type="text/javascript">
 $(document).ready(function(){
  
  
    /*$("#slider2").responsiveSlides({speed:800, timeout:8000,autoplay:false });*/


    /*$('#view_features').on('click', function() {
            $('.ui .item').removeClass('active');
            $('#menu_features').addClass('active');
        });
    $('#viewdemo').on('click', function() {
            $('.ui .item').removeClass('active');
            $('#menu_home').addClass('active');
        }); 
    $('#home_demo,#home_price,#menu_home').on('click', function() {
        $('.ui .item').removeClass('active');
        $('#menu_home').addClass('active');
    });*/ 

});

</script>

<div class="page-title">
  <div class="ui container">
    <div class="ui doubling grid">
      <div class="ten wide column"> 
        <!-- <h1 class="ui red header">Visitors Tracking Management System</h1> --> 
      </div>
      <div class="six wide right aligned column">
        <ul class="ui small breadcrumb">
          <li> <a title="Home" href="index.php">Home</a> </li>
          <li> <span class=" active">Conference Room Booking Management</span> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="content">
  <div class="ui container stackable ">
    <div class=" visitors_head">
      <h1 class="ui header">Conference Room Booking Management</h1>
        <p>WOW IT Solutions's Conference Room Booking System let you book, amend and cancel meeting room bookings anywhere, anytime.</p>
    </div>
  </div>
  <div class="ui container visitors_head_details">
    <div class="ui centered vertically padded grid">
      <div class="ui sixteen wide mobile twelve wide tablet column">
        <div class="ui basic segment " id="visit_img">
          <div class="slider_vis_1">
            <div class="slides"><img src="<?php echo HOST_NAME; ?>image/visitors/c_1.jpg" class="ui fluid image" alt="Visitors"></div>
            <div class="slides"><img src="<?php echo HOST_NAME; ?>image/visitors/c_2.jpg" class="ui fluid image" alt="Visitors"></div>
            <div class="slides"><img src="<?php echo HOST_NAME; ?>image/visitors/c_4.jpg" class="ui fluid image" alt="Visitors"></div>
            <div class="slides"><img src="<?php echo HOST_NAME; ?>image/visitors/c_6.jpg" class="ui fluid image" alt="Visitors"></div>
            <div class="slides"><img src="<?php echo HOST_NAME; ?>image/visitors/c_5.jpg" class="ui fluid image" alt="Visitors"></div>
          </div>
        </div>
      </div>
      <div class="ui sixteen wide mobile twelve wide tablet center aligned column ">
        
            <p class="large"> <strong>Conference Room Booking Management</strong> is a web based booking system package that makes it easy for you to manage conference rooms. Every business needs an effective web presence, whether purely virtual or a brick-and-mortar store. WOW IT Solutions has successfully helped design and implement Web Solutions and Developed Web Applications for Indian and Overseas Clients. </p>
            <a title="View Demo" id="viewdemo" class="ui primary button" href="https://wowitsolutions.com/bookmyconference/" target="_blank">View Demo</a>
          
      </div>
    </div>
  </div>
  <div class="tab_menu">
    <div class="ui container ">
      
    </div>
  </div>
  <div id="tab_content">
    <div class="ui container">
        <div class="ui stackable top attached pointing menu"> <a class="item active" data-tab="home" title="HOME">HOME</a> <a class="item" data-tab="features" title="FEATURES">FEATURES</a> <a class="item " data-tab="demo" title="DEMO">DEMO</a> <a class="item" data-tab="knowledge" title="KNOWLEDGE BASE">KNOWLEDGE BASE</a> <a class="item" data-tab="pricing" title="PRICING">PRICING</a> </div>

        <div class="ui bottom attached segment tab active" data-tab="home">
          <div class="ui container">
            <div id="grid" class="ui stackable padded grid">
                <div class="ui sixteen wide column">
                    <div class="ui teal header">
                      <h3>Product Highlights</h3>
                      <span class="sub header">WOW IT Solutions is a contemporary Website Design and Development company with a focus on user centric design while helping our clients achieve the desired result.</span>
                    </div>
                </div>
              <div class="row">
                <div class="ui one wide column"> <i class="wait big teal icon"></i> </div>
                <div class="ui seven wide column ">
                  <div class="text-right">
                    <h4>Real Time Saver: </h4>
                    <p style="text-align: justify;">With WOW IT Solutions's Conference Room Booking System, you can schedule a meeting in the room of your choice right from your home screen. Our System offers at a glance availability for a day, week or month. This way, you will always know if the room you need is available at the time and date you want.</p>
                  </div>
                </div>
                <div class="ui one wide column"> <i class="square outline big teal icon"></i> </div>
                <div class="ui seven wide column ">
                  <div class="text-left">
                    <h4>Understand the Space You Need:</h4>
                    <p style="text-align: justify;">WOW IT Solutions's Conference Room Booking System's detailed reporting on how space is used lets you decide what meeting room space you need - and what you don't – helping you cut overhead costs.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="ui one wide column"> <i class="remove bookmark big teal icon"></i> </div>
                <div class="ui seven wide column ">
                  <div class="text-right">
                    <h4>Book a Meeting, Anywhere, Anytime: </h4>
                    <p style="text-align: justify;">The WOW IT Solutions's Conference Room Booking System let you book, amend and cancel meeting room bookings anywhere, anytime - the easiest way to increase your meeting room usage.</p>
                  </div>
                </div>
                <div class="ui one wide column"> <i class="calendar big teal icon"></i> </div>
                <div class="ui seven wide column ">
                  <div class="text-left">
                    <h4>Conference Room Booking System; Manage Devices Easily and Efficiently:</h4>
                    <p style="text-align: justify;">Digital displays that can only be controlled from the device itself are counterproductive. With our conference room displays, which you can manage from a web-based dashboard, you won't have to go from device to device (or floor to floor) to make adjustments.</p>
                  </div>
                </div>
              </div>
                <div class="ui divider"></div>
                <div class="row">
                    <div class="ui center aligned column visitors_head_details" > <a id="view_features" class="ui red button" title="View All Features" data-tab="features" >View All Features</a> </div>
                </div>
            </div>
            
          </div>
          
        </div>
        <div class="ui bottom attached tab segment" data-tab="features" id="features">
          <div id="border">
            <div class="ui container">
                <div class="ui padded grid">
                    <div class="ui sixteen wide column">
                        <div class="ui teal header">
                          <h3>Product Features</h3>
                        </div>
                    </div>
                </div>
              <div class="ui stackable centered padded vertically divided grid">
              <div class="ui middle aligned row">
                  <div class="ui ten wide column">
                      <h3>Add accept or not accept appointment to website</h3>
                      <p>Employee list is need to be add a feature regarding accept or not accept appointment for the particular visitors to particular employee who came to meet. </p>
                </div>
                <div class="ui five wide column">
                  <img  src="<?php echo HOST_NAME; ?>image/visitors/c_1.jpg" class="ui fluid image" alt="visitors">
                </div>
              </div>
                
                <div class="ui middle aligned row">
                    <div class="ui five wide column">
                      <img  src="<?php echo HOST_NAME; ?>image/visitors/c_7.jpg" class="ui fluid image" alt="visitors">
                    </div>
                    <div class="ui ten wide column">
                      <h3>Employee should get a mail or message for visitor's detail</h3>
                      <p>Our Employee should get a mail or message so they can view the visitor's details and can send the response back to security through the notification module.</p>
                    </div>
                  </div>
                
                <div class="ui middle aligned row">
                    <div class="ui ten wide column">
                      <h3>Need a comment box regarding appointment</h3>
                      <p>There is always need a comment box for the employee regarding appointment, if they are able to meet them right now please send them in our cabin, If they are not able to meet them right now there give a comment. Comment should be in dropdown: </p>
                      
                      <ol>
                        <li>I am busy we can meet after half an hour.</li>
                        <li>I am busy will meet tomorrow.</li>
                        <li>Employee is absent.</li>
                        <li>I don't want to meet them because he is not related visitor for our company.</li>
                      </ol>
                      
                    </div>
                    <div class="ui five wide column">
                      <img  src="<?php echo HOST_NAME; ?>image/visitors/c_4.jpg" class="ui fluid image" alt="visitors">
                    </div>
                  </div>
              </div>
              
            </div>
          </div>
          
        </div>

        <div class="ui bottom attached tab segment " data-tab="knowledge">
          <div class="ui container">
            <div class="ui stackable padded grid">
                <div class="ui sixteen wide column">
                    <div class="ui teal header">
                        <h3>Knowledge Base</h3>
                    </div>
                </div>
                <div class="ui sixteen wide column">
                    <div class="ui list">
                      <div class="item">
                          <i class="help icon"></i>
                          <div class="content">
                              <h5 class="header">Can I buy this application ?</h5>
                              <p>Yes, you can buy this application indivisually. </p>
                          </div>
                      </div>
                      <div class="item">
                          <i class="help icon"></i>
                          <div class="content">
                              <h5 class="header">Can we manage this application independently?</h5>
                              <p>Yes, you can. All of this application can be maintained with rudimentary technical knowledge and skills. </p>
                          </div>
                      </div>
                      <div class="item">
                          <i class="help icon"></i>
                          <div class="content">
                                <h5 class="header">Pricing and Purchasing Options</h5>
                                <ul>
                                    <li>Annual fee</li>
                                    <li>Customised licence for unlimited users</li>
                                    <li>No limit of visitors</li>
                                    <li>Free maintenance</li>
                                </ul>
                          </div>
                      </div>
                      <div class="item">
                          <i class="help icon"></i>
                          <div class="content">
                              <h5 class="header">Can we customize the application?</h5>
                              <p>WOW IT Solutions's Conference Room Bookinng Management System is a feature rich product that is highly customizable. Our experts will customized application as on your demand before deployee.</p>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <div class="ui bottom attached tab segment demo" id="demo" data-tab="demo">
            <div class="ui container">
                <div class="ui stackable padded relaxed grid">
                    <div class="ui sixteen wide column">
                        <div class="ui teal header">
                            <h3>Live Demo</h3>
                            <p class="sub header">Fill in the form below to request access to demo installation. We will send you an email with login details where you can preview the script.</p>
                        </div>
                    </div>
                    <div class="ui middle aligned row">
                        <div class="ui eight wide column">
                          <div class="front-end"> <img src="<?php echo HOST_NAME; ?>image/visitors/c_1.jpg" class="ui fluid image" alt="Visitors"> </div>
                        </div>
                        <div class="ui eight wide column">
                            <div class="demo_heading">
                                <h3>Front-end</h3>
                                <p>Preview the front-end layout offered for our Conference Room Booking Management</p>
                            </div>
                            <br>
                          <div class="demo_heading">
                            <h3>Administration page</h3>
                            <p>Click the button below to open the admin panel of the Conference Room Booking Management</p>
                          </div>
                          <div style="clear:both;"></div>

                          <div class="ui blue card">
                              <div class="content">
                                <div class="header">Demo</div>
                              </div>
                              <div class="content">
                                <h4 class="ui sub header">Default Login Details</h4>
                                <div class="description">
                                    <div class="ui "> <strong>Email</strong> : <span>admin@wowitsolutions.com</span> </div>
                                    <div class="ui "> <strong>Password</strong> : <span>123456</span> </div>
                                  </div>
                                </div>

                              <div class="extra content">
                                <a href="https://wowitsolutions.com/bookmyconference/" target="_blank" class="ui teal button">Launch Demo</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        <div class="ui bottom attached tab segment pricing" data-tab="pricing" >
            <div class="pricing demo" id="pricing" >
                <div class="ui container">
                    <div class="ui stackable padded relaxed grid">
                        <div class="ui sixteen wide column">
                            <div class="ui teal header">
                                <h3>Pricing</h3>
                                <p class="sub header">You can book Conference Room Booking Management either with a Basic Version or with an Extended Version. Want to request a custom modification? Please contact us and describe what needs to be changed.</p>
                            </div>
                        </div>
                        <div class="equal width row">
                            <div class="column topic">
                                <ul class="tablet-up">
                                  <li></li>
                                  <li>
                                    <p>Free Updates</p>
                                  </li>
                                  <li>
                                    <p>Copyright removal</p>
                                  </li>
                                  <li>
                                    <p>Custom modifications</p>
                                  </li>
                                  <li>
                                    <p>SMS &amp; Email Notification</p>
                                  </li>
                                  <li class="price">
                                    <h4>Price</h4>
                                  </li>
                                </ul>
                            </div>
                            <div class="column basic">
                                <ul class=" ">
                                  <li class="price_title">BASIC VERSION</li>
                                  <li><i class="check circle outline green large icon"></i> <span class="mobile-only-inline">Free Updates</span></li>
                                  <li><i class="remove circle outline red large icon"></i> <span class="mobile-only-inline">Copyright removal</span></li>
                                  <li><i class="remove circle outline red large icon"></i> <span class="mobile-only-inline">Custom modifications</span></li>
                                  <li><i class="remove circle outline red large icon"></i> <span class="mobile-only-inline">SMS &amp; Email Notification</span></li>
                                  <li class="price">
                                    <div class="ui small horizontal statistic">
                                      <div class="value">
                                        3900
                                      </div>
                                      <div class="label">
                                        <i class="fa fa-inr"></i> per year
                                      </div>
                                    </div>
                                    <br>
                                    To purchase mail at <a href="mailto:wowitsol@gmail.com" >wowitsol@gmail.com</a>, <a href="mailto:info@wowitsolutions.com" >info@wowitsolutions.com</a></li>
                                </ul>
                            </div>
                            <div class="column extend">
                                <ul class=" " >
                                  <li class="price_title">EXTENDED VERSION</li>
                                  <li><i class="check circle outline green large icon"></i> <span class="mobile-only-inline">Free Updates</span></li>
                                  <li><i class="check circle outline green large icon"></i> <span class="mobile-only-inline">Copyright removal</span></li>
                                  <li><i class="check circle outline green large icon"></i> <span class="mobile-only-inline">Custom modifications</span></li>
                                  <li><i class="check circle outline green large icon"></i> <span class="mobile-only-inline">SMS &amp; Email Notification</span></li>
                                  <li class="price">
                                    <div class="ui small horizontal statistic">
                                      <div class="value">
                                        ASK
                                      </div>
                                    </div><br>
                                    Looking for better Price, contact <a href="mailto:wowitsol@gmail.com" >wowitsol@gmail.com</a>, <a href="mailto:info@wowitsolutions.com" >info@wowitsolutions.com </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div id="features_list">
    <div class="ui container ">
      <ul class="ui stackable equal width padded grid" >
        <li class="column"> 
          <h3 class="ui center aligned blue icon header"> <i class="checked calendar grey circular icon"></i>
            <div class="content"> Annual  Licence
              <div class="sub header">You can renew your licence annually</div>
            </div>
          </h3>
        </li>
        <li class="column">
          <h3 class="ui center aligned blue icon header"> <i class="edit grey circular icon"></i>
            <div class="content"> Custom Modifications
              <div class="sub header">You can get our custom modification service!</div>
            </div>
          </h3>
        </li>
        <li class="column">
          <h3 class="ui center aligned blue icon header"> <i class="desktop grey circular icon"></i>
            <div class="content"> Remote Hosting
              <div class="sub header">Save yourself the hassle - let us host our Application in the our server!</div>
            </div>
          </h3>
        </li>
        <li class="column">
          <h3 class="ui center aligned blue icon header"> <i class="download grey circular icon"></i>
            <div class="content"> Free Installation
              <div class="sub header">We can install our Application for you upon request. Just ping us!</div>
            </div>
          </h3>
        </li>
      </ul>
    </div>
  </div>
  
  </div>
<?php include 'include/testimonial.php'; ?>
  
<?php include('include/footer.php'); ?>
