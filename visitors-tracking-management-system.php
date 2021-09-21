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
        'cssEase': 'linear',

    });

    /*$('.menu .item').tab();*/

    /*$('#view_features').on('click', function() {
        $.tab('change tab', 'features');

    });
    $('#viewdemo').on('click', function() {
        $.tab('change tab', 'home');

    });*/
});
</script>
<script type="text/javascript">
 $(document).ready(function(){
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
    }); */

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
          <li> <span class=" active">Visitors Tracking Management System</span> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="content">
  <div class="ui container  ">
    <div class="ui stackable padded grid visitors_head">
      <div class="sixteen wide center aligned column"> 
        <!-- <h1 class="ui capitalized blue header">About Us </h1> -->
        <h1 class="ui header">Visitors Tracking Management System</h1>
        <p>Visitor Management helps to track the visitor to your organization and communicate with concerned employees.</p>
      </div>
    </div>
  </div>
  <div class="ui container visitors_head_details">
    <div class="ui stackable centered padded grid">
      <div class="ui twelve wide center aligned column">
        <h5 class="ui heading"> Whether you're running a huge corporate company or a small office, you will have to deal with visitors on a daily basis. For safety sakes, you should keep track of all those who visit your premises. Do away with the old technique of manually entering all the visitor's details by automating the entire process. WOW IT Solutions's <b>Visitor tracking & Management system</b> offers an efficient and effective solution to manage visitors in your facility. </h5>
      </div>
      <div class="ui fourteen wide column">
        <div class="ui basic segment" id="visit_img">
          <div class="slider_vis_1">
            <div class="slides"><img src="<?php echo HOST_NAME; ?>image/visitors/login-1.png" class="ui fluid image" alt="Visitors Tracking Management System"></div>
            <div class="slides"><img src="<?php echo HOST_NAME; ?>image/visitors/visitor-history.jpg" class="ui fluid image" alt="Visitors Tracking Management System"></div>
            <div class="slides"><img src="<?php echo HOST_NAME; ?>image/visitors/visitor-entry.jpg" class="ui fluid image" alt="Visitors Tracking Management System"></div>
            <div class="slides"><img src="<?php echo HOST_NAME; ?>image/visitors/employes.jpg" class="ui fluid image" alt="Visitors Tracking Management System"></div>
            <div class="slides"><img src="<?php echo HOST_NAME; ?>image/visitors/visitor-slip.jpg" class="ui fluid image" alt="Visitors Tracking Management System"></div>
          </div>
        </div>
      </div>
      <div class="ui twelve wide center aligned column"> <a title="View Demo" id="viewdemo" class="ui red button" href="#demo">View Demo</a> </div>
    </div>
  </div>
  
  <!-- <div class="tab_menu">
        <div class="ui stackable tabs menu">
            <div class="ui container ">
                <a class="item active" data-tab="home" id="menu_home"  title="HOME">HOME</a>
                <a class="item" data-tab="features" id="menu_features" title="FEATURES">FEATURES</a>
                <a class="item "  href="#demo" id="home_demo"  data-tab="home" title="DEMO">DEMO</a>
                <a class="item" data-tab="knowledge" title="KNOWLEDGE BASE">KNOWLEDGE BASE</a>
                <a class="item"  href="#pricing" id="home_price" data-tab="home" title="PRICING">PRICING</a>
                <a class="item" title="CONTACT US" href="<?php echo HOST_NAME; ?>contact.php">CONTACT US</a>
            </div>
        </div>
    </div> --> 
</div>
<div class="ui divider"></div>
<div id="tab_content">
  <div class="ui container">
    
      <div class="ui teal center aligned header">
        <h3>Product Highlights</h3>
        <div class="sub header">WOW IT Solutions's <b>Visitor tracking & Management system</b> offers an efficient and effective solution to manage visitors in your facility.</div>
      </div>
      <div id="grid" class="ui stackable padded grid" >
        <div class="row">
          <div class="ui one wide column"> <i class="alarm outline big teal icon"></i> </div>
          <div class="ui seven wide column ">
            <div class="text-right">
              <h4>Easy & Fast notification of employee and reception of visitors: </h4>
              <p style="    text-align: justify;">With WOW IT Solutions’s Visitors Management System, you never have to keep your visitors waiting. The moment visitor checks-in, our visitor management software sends a notification to the host along with visitor’s photo, making it easy for the host to identify the visitor. In case a visitor is exceeding the stipulated time limit, an automated overstay alert is also triggered to the host.</p>
            </div>
          </div>
          <div class="ui one wide column"> <i class="line chart big teal icon"></i> </div>
          <div class="ui seven wide column ">
            <div class="text-left">
              <h4>Conduct analysis/reporting on visitor data</h4>
              <p style="    text-align: justify;">Know your visitor trends with the help of WOW IT Solutions’s Visitors Management System multi-dimensional reports. Get a centralized view of who is visiting your premises, why and how often a visitor is visiting. You can also export you reports to Excel / PDF files and store offline.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="ui one wide column"> <i class="wait big teal icon"></i> </div>
          <div class="ui seven wide column ">
            <div class="text-right">
              <h4>Enhance the professionalism of the enrollment process and visitor check-in </h4>
              <p style="    text-align: justify;">WOW IT Solutions’s Visitors Management System captures and stores your visitor data on our secure servers. Our visitor management software makes the registration of any repeat visitor very simple. Any repeat visitor can register by simply entering their contact number. You can also store and maintain a host address book from where you can quickly choose whom the visitor is meeting.</p>
            </div>
          </div>
          <div class="ui one wide column"> <i class="calendar big teal icon"></i> </div>
          <div class="ui seven wide column ">
            <div class="text-left">
              <h4>Capture accurate in & out time automatically, Streamlined Security</h4>
              <p style="    text-align: justify;">With WOW IT Solutions’s Visitors Management System, now enhance both digital and physical security at your premises. Our visitor management system records all the visitor details and lets you know who is on you premises, what is the purpose of their visit, how often do they visit and many more details. With features like digital photo capture, ID details capture, watch-list to keep track of unwarranted visitors and overstay alerts, you can ensure security on your premises without any exception!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="visitors_head_details" style="text-align: center;"> <a id="view_features" title="View All Features" data-tab="features" href="#features">View All Features</a> </div> -->
    <div class="ui section divider"></div>

    <div id="features">
        <div class="ui center aligned teal header">
          <h3>Product Features</h3>
        </div>
        <div class="ui stackable padded middle aligned vertically divided grid">

            <div class="row">
              <div class="ui nine wide column">
                <h3>Add accept or not accept appointment to website</h3>
                <p>Employee list is need to be add a feature regarding accept or not accept appointment for the particular visitors to particular employee who came to meet. </p>
              </div>
              <div class="ui six wide column">
                <figure><img  src="<?php echo HOST_NAME; ?>image/visitors/login-1.png" class="ui fluid image" alt="visitors"></figure>
              </div>
            </div>
            <div class="row">
                <div class="ui six wide column">
                <figure><img  src="<?php echo HOST_NAME; ?>image/visitors/visitor-entry.jpg" class="ui fluid image" alt="visitors"></figure>
              </div>
              <div class="ui nine wide column">
                <h3>Employee should get a mail or message for visitor's detail</h3>
                <p>Our Employee should get a mail or message so they can view the visitor’s details and can send the response back to security through the notification module.</p>
              </div>
            </div>
            <div class="row">
              <div class="ui nine wide column">
                <h3>Need a comment box regarding appointment</h3>
                <p>There is always need a comment box for the employee regarding appointment, if they are able to meet them right now please send them in our cabin, If they are not able to meet them right now there give a comment. Comment should be in dropdown: </p>
                <p>
                <ol>
                  <li>I am busy we can meet after half an hour.</li>
                  <li>I am busy will meet tomorrow.</li>
                  <li>Employee is absent.</li>
                  <li>I don't want to meet them because he is not related visitor for our company.</li>
                </ol>
                </p>
              </div>
              <div class="ui six wide column">
                <figure><img src="<?php echo HOST_NAME; ?>image/visitors/visitor-history.jpg" class="ui fluid image" alt="visitors"></figure>
              </div>
            </div>
        </div>
        
      </div>
    <div class="ui section divider"></div>

    <div class="demo" id="demo" data-tab="demo">
      <div class="ui container">
        
            <div class="ui teal center aligned header">
                <h3>Live Demo</h3>
                <p class="sub header">Fill in the form below to request access to demo installation. We will send you an email with login details where you can preview the script.</p>
            </div>
            <div class="ui stackable padded relaxed grid">
                <div class="ui middle aligned row">
                    <div class="ui eight wide column">
                      <div class="front-end"> <img src="<?php echo HOST_NAME; ?>image/visitors/login-1.png" class="ui fluid image" alt="Visitors"> </div>
                    </div>
                    <div class="ui eight wide column">
                        <div class="demo_heading">
                            <h3>Front-end</h3>
                            <p>Preview the front-end layout offered for our Visitor tracking &amp; Management</p>
                        </div>
                        <br>
                      <div class="demo_heading">
                        <h3>Administration page</h3>
                        <p>Click the button below to open the admin panel of the Visitor tracking &amp; Management</p>
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
                            <a href="https://wowitsolutions.com/visitormanagement/admin/" target="_blank" class="ui teal button">Launch Demo</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        
      </div>
    </div>

    <div class="ui section divider"></div>
    
    <div id="knowledge" data-tab="knowledge">
        <div class="ui container">
          
            <div class="ui center aligned teal header">
                <h3>Knowledge Base</h3>
            </div>
            <div class="ui stackable relaxed grid">
                <div class="ui eight wide column">
                    <div class="ui list">
                      <div class="item">
                          <i class="help large grey icon"></i>
                          <div class="content">
                              <h5 class="header">What is a Visitor Tracking &amp; Management System?</h5>
                              <p>A Visitor Tracking &amp; Management System helps manage the flow of visitors into a company. Visitor identification, such as a photo ID or business card can also be scanned and checked against a watch list to increase security.<br>Once the system clears a person for entry, they can print a customized visitor badge/slip that will allow them access to any area the company determines.<br>The system can also notify an employee that their guest has arrived.</p>
                          </div>
                      </div>
                      
                      <div class="item">
                          <i class="help large grey icon"></i>
                          <div class="content">
                                <h5 class="header">What hardware &amp; software required?</h5>
                                <ul>
                                    <li><b>Computer:</b> A receptionist can greet visitors and use a VMS to check them in.</li>
                                    <li><b>Printer:</b> Guests can be identified visually with customized badge/slip printed on a specialized printer located either behind the reception desk or next to a self-service.</li>
                                    <li><b>ID cards and keytags:</b> For frequent visitors, companies may decide to issue permanent plastic ID cards or keytags, which are small plastic tags security can enter card number in visitor record.</li>
                                </ul>
                          </div>
                      </div>
                      
                  </div>
                </div>
                <div class="ui eight wide column">
                    <div class="ui list">
                        <div class="item">
                              <i class="help large grey icon"></i>
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
                              <i class="help large grey icon"></i>
                              <div class="content">
                                  <h5 class="header">Can we customize the application?</h5>
                                  <p>WOW IT Solutions's Conference Room Bookinng Management System is a feature rich product that is highly customizable. Our experts will customized application as on your demand before deployee.</p>
                              </div>
                          </div>
                          <div class="item">
                              <i class="help large grey icon"></i>
                              <div class="content">
                                  <h5 class="header">What Type of Buyer Are You?</h5>
                                  <p>A variety of industries may use a VMS to increase security and efficiency in their facilities, such as: </p>
                                  <ul>
                                      <li>K-12 education</li>
                                      <li>University campus</li>
                                      <li>Corporate and government</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
      </div>

    <div class="ui section divider"></div>

    <div class="pricing demo" id="pricing" >
      <div class="ui container">

            <div class="ui center aligned teal header">
                <h3>Pricing</h3>
                <p class="sub header">You can book Conference Room Booking Management either with a Basic Version or with an Extended Version. Want to request a custom modification? Please contact us and describe what needs to be changed.</p>
            </div>

        <div class="ui stackable padded relaxed grid">
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
<div class="ui divider"></div>
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
<!-- <section class="testimonial">
  <div class="ui container center aligned">
    <div class="ui basic padded segment">
      <h1 class="ui inverted header">Testimonials</h1>
    </div>
    <div class="ui basic segment">
      <div id="testimonial" class="">
        <div class="slides">
          <div class="quote">
            <p>I was completely impressed with first look of their own website, really an amazing theme and what they bring for my business is really a creative job, i must say they have great designers.</p>
          </div>
          <div class="author">
            <p class="">- Nishan Bhardwaj<br>
              www.alliedservices-tech.com</p>
            <div class="ui tiny circular right floated image"><img src="image/nishant.jpg" alt=""></div>
          </div>
        </div>
        <div class="slides">
          <div class="quote">
            <p>This is a great group of dedicated professionals who will work day in and day out to get what you want. They are a laborious team, a team which does not get tired of listening to you. They will make sure that your website resonates with what you are and what you want. Hats off!</p>
          </div>
          <div class="author">
            <p class="">- Siddharth Kapur<br>
              www.sidsessentials.com</p>
            <div class="ui tiny circular right floated image"><img src="image/siddharth-kapur-sidsessentials.jpg" alt=""></div>
          </div>
        </div>
        <div class="slides">
          <div class="quote">
            <p>Wow IT is exceptional at understanding customer issues. I have been working with them for quite sometime and have recently awarded them with 5 new projects. Their commitment is unquestionable. Above all, they are highly flexible and understand the ethics to be practiced for brand building. I recommend WOW-IT to everyone who needs the right advise when it comes to IT and digital marketing solutions.</p>
          </div>
          <div class="author">
            <p class="">- Sudarshan R Chetlur<br>
              www.scdsglobal.com</p>
            <div class="ui tiny circular right floated image"><img src="image/Sudarshan-R-Chetlur.jpg" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<?php include 'include/testimonial.php'; ?>

<?php include('include/footer.php'); ?>
