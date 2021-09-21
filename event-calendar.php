<?php include('config.php');
include('include/header.php'); ?>
<script type="text/javascript" src="plugin/slick/slick.min.js"></script>
<script type="text/javascript" src="plugin/rslides/responsiveslides.min.js"></script>

<!-- <script type="text/javascript">
$(document).ready(function() {

    $('.slider_vis_1').slick({
        'autoplay': true,
        'slidesToShow': 1,
        'slidesToScroll': 1,
        'dots': true,
        'infinite': true,
        'cssEase': 'linear',

    });

    $('.menu .item').tab();

    $('#view_features').on('click', function() {
        $.tab('change tab', 'features');

    });
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
  
    $("#slider2").responsiveSlides({speed:800, timeout:8000,autoplay:false });

$('#menu_home').on('click', function() {
        $('.ui .item').removeClass('active');
        $(this).addClass('active');
    }); 
$('#view_features').on('click', function() {
        $('.ui .item').removeClass('active');
        $('#menu_features').addClass('active');
    });
});

</script> -->
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

    $('.menu .item').tab();

    $('#view_features').on('click', function() {
        $.tab('change tab', 'features');

    });
    $('#viewdemo').on('click', function() {
        $.tab('change tab', 'home');

    });
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
  
    $("#slider2").responsiveSlides({speed:800, timeout:8000,autoplay:false });


$('#view_features').on('click', function() {
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
    }); 

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
                    <li>
                        <a title="Home" href="index.php">Home</a>
                    </li>
                    <li>
                        <span class=" active">Event Calendar</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div class="ui container stackable ">
        <div class="ui grid visitors_head">
            <div class="sixteen wide center aligned column">
                <!-- <h1 class="ui capitalized blue header">About Us </h1> -->
                <h1 class="ui header">Event Calendar</h1>
                <p>VERSION 2.0 / PRICE: FREE / 650 DOWNLOADS</p>
            </div>
        </div>
    </div>
    <div class="ui container  stackable grid visitors_head_details">
        <div class="ui eight wide column">
            <div class="ui basic segment  " id="visit_img">
                <div class="slider_vis_1">
                    <div class="slides"><img src="<?php echo HOST_NAME; ?>image/free/calendar.jpg" alt="Event Calendar PHP script"></div>
                   
                </div>
            </div>
        </div>
        <div class="ui eight wide column">
            <p>
                Use our free Event Calendar PHP script to add a calendar that shows events on your website. Your website visitors will be able to show events on date and see the events detail for that date.
            </p>
            <a title="View Demo" id="viewdemo" class="pull-left" href="#demo">View Demo</a>
			<a title="Download Demo" id="downloaddemo" class="pull-right" href="#demo">Download</a>
        </div>
    </div>
    <div class="tab_menu">
        <div class="ui top attached tabular menu">
            <div class="ui container ">
                <a class="item active" data-tab="home" id="menu_home"  title="HOME">HOME</a>
                <a class="item" data-tab="features" id="menu_features" title="FEATURES">FEATURES</a>
                <a class="item "  href="#demo" id="home_demo"  data-tab="home" title="DEMO">DEMO</a>
                <a class="item" data-tab="knowledge" title="KNOWLEDGE BASE">KNOWLEDGE BASE</a>
                <a class="item"  href="#pricing" id="home_price" data-tab="home" title="PRICING">PRICING</a>
                <a class="item" title="CONTACT US" href="<?php echo HOST_NAME; ?>contact.php">CONTACT US</a>
            </div>
        </div>
    </div>
</div>
<div id="tab_content">
    <div class="ui tab segment active" data-tab="home">
        <div class="ui container">
            <div class="center">
                <h2>Product Description</h2>
                <p>The Event Calendar script reads events from MySQL table. Below is a description of the files used and what each one of them does.</p>
				<p>calendar.css - external CSS file which lets you easily change the appearance. If you do not know how to locate the styles used for each calendar element please refer to "Inspect CSS styles using Chrome"<br/></p>
				<p></p>
				<p>calendar.js - all the JS functions used to scroll the calendar and the ajax calls made to load both the calendar and the events
				calendar.php - this is the PHP script used to build and print the calendar widget</p>
				<p>config.php - the file where mysql database login is defined<br/></p>
				<p>database.sql - mysql table structure </p>
				<p>events.php - this is the PHP file which loads the events once you click on a date</p>

				<p>example-page.html - a sample web page with embed calendar widget.
				</p>
            </div>
            <div class="visitors_head_details" style="text-align: center;">
                <a id="view_features" title="View All Features" data-tab="features" href="#features">View All Features</a>
            </div>
        </div>
        <div class="demo" id="demo" data-tab="demo">
        <div class="ui container">
        <div class="center">
            <h2>Live Demo</h2>
            <p>Fill in the form below to request access to demo installation. We will send you an email with login details where you can preview the script.</p>
        </div>
        <div class="ui grid " id="demo_content">
            <div class="ui eight wide column">
                <div class="demo_heading">
                    <h3>Download </h3>
                    <p>Please login here & download Event Calender code.</p>
                </div>
                <div class="front-end administration">
					<form>
						<input type="text" name="u_email" placeholder="Your Email"/>
						<input type="password" name="u_password"  placeholder="Your Password"/>
						<input type="submit" name="submit" />
					</form>
                    
                </div>
            </div>
            <div class="ui eight wide column">
                <div class="demo_heading">
                    <h3>Demo Event Calendar page</h3>
                    <p>Click the button below to open the demo page of Event Calendar</p>
                </div>
                
                <div style="clear:both;"></div>
                <div class="administration" style="text-align: center;">
                    <a id="" data-tab="" href="https://wowitsolutions.com/visitormanagement" title="Open" class="open" target="_blank">Open</a>
                    <p>Default Login Details</p>
                    <div class="ui grid">
                        <div class="ui two wide column"></div>
                        <div class="ui eight wide column">
                            <strong>Email</strong> : <span>admin@wowitsolutions.com</span>
                        </div>
                        <div class="ui six wide column">
                            <strong>Password</strong> : <span>123456</span>
                        </div>
                        <div class="ui two wide column"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="pricing demo" id="pricing" >
        <div class="ui container">
		<div class="center">
            <h2>Pricing</h2>
            <p>You can use Visitor tracking & Management system either with a Basic Version or with a Extended Version. 
            Want to request a custom modification? Please contact us and describe what needs to be changed.</p>
        </div>







    <div class="ui grid">
       <ul class="ui six wide column " id="price_1">
       <li></li>
       <li><p>Free Updates</p></li>
       <li><p>Copyright removal</p></li>
	   <li><p>Get SMS / e-Mail Alerts</p></li>
	   <li><p>Print Visitor Pass</p></li>
       <li><p>Custom modifications</p></li>
       <li></li>
       <li><p>Price</p></li>
      </ul>
     <ul class="ui five wide column ">       
		<li class="price_title">BASIC VERSION</li>
		<li><i class="fa fa-check-circle-o"></i></li>
		<li><i class="fa-times-circle-o fa ui green"></i></li>
		<li><i class="fa-times-circle-o fa ui green"></i></li>
		<li><i class="fa-times-circle-o fa ui green"></i></li>
		<li><i class="fa fa-times-circle-o"></i></li>
		<li class="empty"></li>
		<li > &#x20b9; 3900 / Year <br>For Purchase mail at <a href="mailto:info@wowitsolutions.com" >info@wowitsolutions.com</a></li>

     </ul>
     <ul class="ui five wide column" >
		<li class="price_title">EXTENDED VERSION</li>
		<li><i class="fa fa-check-circle-o"></i></li>
		<li><i class="fa fa-check-circle-o"></i></li>
		<li><i class="fa fa-check-circle-o"></i></li>
		<li><i class="fa fa-check-circle-o"></i></li>
		<li><i class="fa fa-check-circle-o"></i></li>
       <li class="empty"></li>
       <li >Looking for better Price contact at <a href="mailto:info@wowitsolutions.com" >info@wowitsolutions.com </a></li>


     </ul>
    </div>
     </div>
    </div>
    </div>
    <div class="ui bottom attached tab segment" data-tab="features" id="features">
        <div id="border">
            <div class="ui container">
                <div class="ui sixteen wide column grid">
                    <div class="ui eleven wide column" id="grid">
                       
                            <h2>Add accept or not accept appointment to website</h2>
                            <p>Employee list is need to be add a feature regarding accept or not accept appointment for the particular visitors to particular employee who came to meet. </p>
                       
                    </div>
                    <div class="ui five wide column" id="grid">
                        <figure><img  src="<?php echo HOST_NAME; ?>image/visitors/login-1.png" alt="visitors"></figure>
                        
                    </div>
                    </div>
                     <div class="ui sixteen wide column grid">
                    <div class="ui five wide column" id="grid">
                       <figure><img  src="<?php echo HOST_NAME; ?>image/visitors/visitor-entry.jpg" alt="visitors"></figure>
                     
                    </div>
                    <div class="ui eleven wide column" id="grid">
                        
                            <h2>Employee should get a mail or message for visitor's detail</h2>
                            <p>Our Employee should get a mail or message so they can view the visitor’s details and can send the response back to security through the notification module.</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="">
            <div class="ui container">
                <div class="ui sixteen wide column grid">
                    <div class="ui eleven wide column" id="grid">
                       
                            <h2>Need a comment box regarding appointment</h2>
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
                    <div class="ui five wide column" id="grid">
                       <figure><img  src="<?php echo HOST_NAME; ?>image/visitors/visitor-history.jpg" alt="visitors"></figure>
                    
                    </div>
                   
                </div>
            </div>
        </div>








    </div>
    <div class="ui bottom attached tab segment " data-tab="knowledge">
        <div class="ui container">
            <section class="knowledge">
                <div class="center">
                    <h2>Knowledge</h2>
                </div>
                <ul class="unstyled">
                    <li>
                        <div class="ui grid">
                            <div class="ui sixteen wide column">
                                <i class="help icon"></i>
                                <p class="questionTitle">What Is a Visitor Tracking & Management System?</p>
                                <div class="questionSection">
                                    <p>A VMS helps manage the flow of visitors into a company. Visitor identification, such as a photo ID or business card, can also be scanned and checked against a watch list to increase security. </p>
                                    <p>Once the system clears a person for entry, they can print a customized visitor badge/slip that will allow them access to any area the company determines.</p>
                                    <p>he system can also notify an employee that their guest has arrived.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ui grid">
                            <div class="ui sixteen wide column">
                                <i class="help icon"></i>
                                <p class="questionTitle">What Type of Buyer Are You?</p>
                                <div class="questionSection">
                                    <p>A variety of industries may use a VMS to increase security and efficiency in their facilities, such as: </p>
									<p>K-12 education</p>
									<p>University campus</p>
									<p>Corporate and government</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ui grid">
                            <div class="ui sixteen wide column">
                                <i class="help icon"></i>
                                <p class="questionTitle">What hardware & software required?</p>
                                <div class="questionSection">
                                    <p><b>Computer:-</b> A receptionist can greet visitors and use a VMS to check them in.</p>
                                    <p><b>Printer:-</b> Guests can be identified visually with customized badge/slip printed on a specialized printer located either behind the reception desk or next to a self-service.</p>
                                    <p><b>ID cards and keytags:-</b> For frequent visitors, companies may decide to issue permanent plastic ID cards or keytags, which are small plastic tags security can enter card number in visitor record.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ui grid">
                            <div class="ui sixteen wide column">
                                <i class="help icon"></i>
                                <p class="questionTitle">Pricing and Purchasing Options</p>
                                <div class="questionSection">
                                    <p>Annual fee</p>
                                    <p>Customised licence for unlimited users</p>
                                    <p>No limit of visitors</p>
									<p>Free maintenance</p>
                                </div>
                            </div>
                        </div>
                    </li>
					<li>
                        <div class="ui grid">
                            <div class="ui sixteen wide column">
                                <i class="help icon"></i>
                                <p class="questionTitle">Can we customize the application?</p>
                                <div class="questionSection">
                                    <p>WOW IT Solutions’s Visitors Management System is a feature rich product that is highly customizable. Our experts will customized application as on your demand before deployee.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
        </div>
    </div>

<div class="ui bottom attached tab segment demo" data-tab="demo" id="demo">
    </div>
<div class="ui bottom attached tab segment pricing" data-tab="pricing" >

    

</div>
</div>
<div id="features_list">
<div class="ui container ">
<ul class="ui grid" style="margin-left: 30px;">
    <li class="ui four wide column" id="f_list">
    <div class="feature_border">
   <i class="fa fa-file-text-o" aria-hidden="true"></i>
    <p class="f_text">Annual  Licence</p>
    <p>You can renew your licence annually</p>
    </div>
</li>
<li class="ui four wide column" id="f_list">
<i class="fa fa-edit"></i>
    <p class="f_text">Custom Modifications</p>
    <p>You can get our custom modification service!</p>
</li>

<li class="ui four wide column" id="f_list">
    <i class="fa fa-desktop"></i>
    <p class="f_text">Remote Hosting</p>
    <p>Save yourself the hassle - let us host our Application in the our server!</p>
</li>
<li class="ui four wide column" id="f_list">
    <i class="fa fa-download"></i>
    <p class="f_text">Free Installation</p>
    <p>We can install our Application for you upon request. Just ping us!</p>
</li>

</ul>
</div>
</div>
<section class="testimonial">
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
</section>
<script type="text/javascript">
  $(document).ready(function(){
     
      $("#testimonial").slick({'autoplay':true,'autoplaySpeed':8000,'slidesToShow':1,'arrows':false,'dots':true,'mobileFirst':true,'adaptiveHeight':true});
      
  })
</script>
<?php include('include/footer.php'); ?>
