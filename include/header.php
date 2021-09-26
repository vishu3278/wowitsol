<?php 
include_once('config-local.php');
include_once('connection.php');
include_once('db.php');?>
<?php

	$vertical_menu = $_SERVER['REQUEST_URI'];
    $menu=explode('/',$vertical_menu);
	
    $ver = $menu[1];
    $v = explode('.', $ver);
   $page = reset($v);
    $menu=explode('=',$ver);
    $ver_menu=end($menu);
    $m=explode('.',$ver_menu);
    $ver=reset($m);
    $url_key_news = $ver;

function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; //class name in css 
  } 
}

if($_GET['url_key'] != ''){
		$page = 'news-detail';
		$url_key = $_GET['url_key'];
}
?>

<!doctype html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<!-- <script type="text/javascript">

$(document).ready(function() {
  $('ul:nth-child(3)').css('position','');
  });

</script> -->


<meta name="viewport" content="width=device-width, height=device-height">
<link rel="icon" type="image/x-icon" href="<?php echo HOST_NAME; ?>/favicon.ico">
<link rel="alternate" href="<?php echo HOST_NAME; ?>" hreflang="en-in" />
<link rel="icon" type="image/x-icon" href="<?php echo HOST_NAME; ?>favicon.ico">
<?php if ($page == 'about') {  ?>

<title>WOW IT Solutions - About Us</title>
<meta name=description content="We understand the requirements of our clients and consider ourselves as an extension of our client's dreams, aspirations and ideas. Our team of expert designers, programmers, writers, and business developers are able to comprehend and further embellish the ideas of our client." />
<meta name=keywords content="About Us, Our Vision, Our Mission, Our Values, Lot of benefits work with us, Why Choose Us, The way we work, WOW IT Solutions Footprint"/>
<?php } elseif ($page == 'work-process') {  ?>

<title>WOW IT Solutions - Work Process</title>
<meta name=description content="Here are the key reasons why we are best placed to enhance your business performance and financial position." />
<meta name=keywords content="Your Idea, Recharge & Plan, Design & Development, Testing, Launch"/>

 
 <?php } elseif ($page == 'team') {  ?>

<title>WOW IT Solutions - Team</title>
<meta name=description content="WOW IT Solutions - Team" />
<meta name=keywords content="WOW IT Solutions Team"/>

<?php } elseif ($page == 'culture') {  ?>

<title>WOW IT Solutions - Culture</title>
<meta name=description content="WOW IT Solutions - Culture" />
<meta name=keywords content="WOW IT Solutions - Culture, Workshop, 2016, 2016 Diwali, New Year Party, 2017"/>

<?php } elseif ($page == 'services') {  ?>

<title>WOW IT Solutions - Services</title>
<meta name=description content="WOW IT Solutions - Services" />
<meta name=keywords content="WOW IT Solutions - Services, Responsive Website Design, E-Commerce Website Design, CMS Theme/Template Design, Emailer & Newsletter Design, Web & Mobile UI/UX Design"/>

<?php } elseif ($page == 'web-ui-engineering-solutions') {  ?>

<title>WOW IT Solutions - Web & UI Engineering Solutions</title>
<meta name=description content="WOW IT Solutions - Web & UI Engineering Solutions" />
<meta name=keywords content="WOW IT Solutions - Web & UI Engineering Solutions, Responsive Website Design, E-Commerce Website Design, CMS Theme/Template Design, Emailer & Newsletter Design, Web & Mobile UI/UX Design, Mobile Apps UI Design"/>

<?php } elseif ($page == 'web-development-solutions') {  ?>

<title>WOW IT Solutions - Web Development Solutions</title>
<meta name=description content="WOW IT Solutions - Web Development Solutions" />
<meta name=keywords content="WOW IT Solutions - Web Development Solutions, LAMP Development, WordPress Development, Joomla Development, Web Application Development, Custom Web Development, ERP & CRM Solutions"/>

<?php } elseif ($page == 'e-commerce') {  ?>

<title>WOW IT Solutions - E-Commerce Solutions</title>
<meta name=description content="WOW IT Solutions - E-Commerce Solutions" />
<meta name=keywords content="WOW IT Solutions - E-Commerce Solutions, Magento, OpenCart, PrestaShop, OsCommerce, WooCommerce, Zen Cart, Shopify"/>

<?php } elseif ($page == 'mobile-apps-development') {  ?>

<title>WOW IT Solutions - Mobile Apps Development</title>
<meta name=description content="WOW IT Solutions - Mobile Apps Development" />
<meta name=keywords content="WOW IT Solutions - Mobile Apps Development, iPhone, iPad/Tablet, Android, Hybrid HTML5, mCommerce, Game App Development"/>

<?php } elseif ($page == 'digital-marketing-solutions') {  ?>

<title>WOW IT Solutions - Digital Marketing Solutions</title>
<meta name=description content="WOW IT Solutions - Digital Marketing Solutions" />
<meta name=keywords content="WOW IT Solutions - Digital Marketing Solutions, Search Engine Optimization (SEO), Pay-Per-Click Marketing (PPC), Social Media Marketing (SMM), Email Marketing, YouTube Video Promotion, Backlinking & Remarketing"/>

<?php } elseif ($page == 'content-writing-solutions') {  ?>

<title>WOW IT Solutions - Content Writing Solutions</title>
<meta name=description content="WOW IT Solutions - Content Writing Solutions" />
<meta name=keywords content="WOW IT Solutions - Content Writing Solutions, SEO Content Writing, Blog Content Writing, Creative Writing, Press Release Writing, Newsletter Writing, Article Writing"/>

<?php } elseif ($page == 'portfolio') {  ?>

<title>WOW IT Solutions - Portfolio</title>
<meta name=description content="WOW IT Solutions - Portfolio" />
<meta name=keywords content="WOW IT Solutions - Portfolio, All, Design, Web, e-Commerce, Wordpress, Mobile"/>

<?php } elseif ($page == 'news.php') {  ?>

<title>WOW IT Solutions - News</title>
<meta name=description content="WOW IT Solutions - News" />
<meta name=keywords content="WOW IT Solutions - News, Latest News"/>
<link rel="canonical" href="<?php echo HOST_NAME; ?>news.html" />	

<?php } elseif($page == 'news-detail') { 

		$b_date = $_GET['b_date'] ;

		if(isset($_GET['b_date']) ) {
		$url_key = $b_date.'/'.$url_key ;
		}

		$query = "SELECT  * FROM news  Where b_id > 0 AND b_url_key ='".$url_key."'" ;
		$result = mysqli_query($conn,$query);
		$data = mysqli_fetch_assoc($result);
		$t_pro_pic = $data['b_featured_image'] ;
		$t_image = HOST_NAME."image/news/".$t_pro_pic; 
		$b_url_key     = $data['b_url_key'];
		$_b_url_path = HOST_NAME.'newsDetail/'.$b_url_key.'.html';
		?>
		<?php if($data['meta_title']) { ?>
		<title><?php echo $data['meta_title']." - WOW IT Solutions"; ?></title>
		<meta property="og:title" content="<?php echo $data['meta_title']." - WOW IT Solutions"; ?>" />
		<?php }else{ ?>
		<title><?php echo $data['b_title']." - WOW IT Solutions"; ?></title>
		<meta property="og:title" content="<?php echo $data['b_title']." - WOW IT Solutions"; ?>" />
		<?php } ?>

		<?php if($data['meta_description']) { ?>
		<meta name="description" content="<?php echo strip_tags($data['meta_description']); ?>"/>
		<meta property="og:description" content="<?php echo strip_tags($data['meta_description']); ?>" />
		<?php }else{ ?>
		<meta name="description" content="<?php echo substr(strip_tags($data['b_description']), 0, 150); ?>"/>
		<meta property="og:description" content="<?php echo substr(strip_tags($data['b_description']), 0, 350); ?>" />
		<?php } ?>

		<?php if($data['meta_keywords']) { ?>
		<meta name="keywords" content="<?php echo $data['meta_keywords']; ?>"/>
		<?php }else{ ?>
		<meta name="keywords" content="<?php echo $data['b_url_key']; ?>"/>
		<?php } ?>
		<meta property="og:url" content="<?php echo $_b_url_path; ?>" />
		<?php if($t_pro_pic != '' && @getimagesize($t_image) ) { ?>
		<meta property="og:image" content="<?php echo $t_image ?>" />
		<?php } ?>
		
	<?php } elseif ($page == 'careers') {  ?>
<title>WOW IT Solutions - Careers</title>
<meta name=description content="WOW IT Solutions - Careers" />
<meta name=keywords content="WOW IT Solutions - Careers, Graphics Designer, Web Developer, UI Developer"/>
	<?php } elseif ($page == 'contact') {  ?>
<title>WOW IT Solutions - Contact Us</title>
<meta name=description content="Get immediate assistance for any query you may have regarding WOW. We are available 24x7 to resolve your queries." />
<meta name=keywords content="WOW IT Solutions - Contact Us, Get in Touch with us, Our Support Team"/>
	<?php } elseif ($page == 'visitors-tracking-management-system') {  ?>
<title>WOW IT Solutions - Visitors Tracking Management System</title>
<meta name=description content="WOW IT Solutions will develop a custom Visitor Tracking Management System." />
<meta name=keywords content="Visitors Tracking Management System, Features, Product Highlights, Live Demo, Knowledge Base, Pricing, Testimonials, Contact Us"/>

<?php } elseif ($page == 'conference-room-booking-management') {  ?>

<title>WOW IT Solutions - Conference Room Booking Management</title>
<meta name=description content="WOW IT Solutions will develop a custom Conference Room Booking Management." />
<meta name=keywords content="Conference Room Booking Management, Product Highlights, Features, Knowledge Base, Live Demo, Pricing, Testimonials, Contact Us"/>

<?php } else { ?>

<title>Web Design & Development Company in India | WOW IT Solutions</title>
<meta name="description" content=" WOW IT Solutions specialized in Web Designing, UI Engineering, E-Commerce Solutions, Web Portal Development, Mobile Apps Development, Enterprise Application, ERP, CRM and Digital Marketing. We can provide extremely, cost-effective development without compromising on quality, which make us ideally suited for outsourcing your IT needs!" />
<meta name="keywords" content="Web development company, Web Development Company in India, Web development India, ecommerce website designing company, Website development company, Web application development, Website design company India, Custom web application development, Professional web design company, Professional web development company, Web design and development company, Custom web development, Custom web design company, Professional website design, Custom website design services, responsive website designing, search engine optimization, ecommerce website in delhi, internet marketing, E-Commerce Solutions, Web Portal Development, Mobile Apps Development, Enterprise Application, ERP, CRM, digital marketing" />

<?php } ?>

<meta name="abstract" content="WOW IT Solutions - Design and Development Company India, Website Design Services India, Custom Web Application Development" />
<meta name="author" content="WOW IT Solutions" />
<meta name="email" content="info@wowitsolutions.com" />
<meta name="Distribution" content="Global" />
<meta name="page-topic" content="Web Design Company, Web designers India" />
<link rel="stylesheet" type="text/css" href="<?php echo HOST_NAME; ?>css/semantic.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo HOST_NAME; ?>css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo HOST_NAME; ?>css/wow.css" >
<link rel="stylesheet" type="text/css" href="<?php echo HOST_NAME; ?>plugin/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo HOST_NAME; ?>plugin/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo HOST_NAME; ?>plugin/slidebars.min.css">
<!-- <link rel="stylesheet" href="<?php echo HOST_NAME; ?>plugin/meanmenu.css"> -->
<!-- <link rel="stylesheet" href="<?php echo HOST_NAME; ?>plugin/popup/chocolat.css"> -->

<script src="<?php echo HOST_NAME; ?>js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo HOST_NAME; ?>plugin/slidebars.min.js" type="text/javascript"></script>
<script src="<?php echo HOST_NAME; ?>js/semantic.min.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[ 
var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
jQuery(function ($) {
  var controller = new slidebars();
  controller.init();
  $('.toggle-slidebar').on( 'click', function ( event ) {
      event.stopPropagation();
      controller.toggle( 'slidebar-1' );
  } );
  $( controller.events ).on( 'opened', function () {
      $( '[canvas="container"]' ).addClass( 'js-close-any-slidebar' );
  } );

  $( controller.events ).on( 'closed', function () {
      $( '[canvas="container"]' ).removeClass( 'js-close-any-slidebar' );
  } );

  $( 'body' ).on( 'click', '.js-close-any-slidebar', function ( event ) {
      event.stopPropagation();
      controller.close();
  } );
  $('.ui.dropdown').dropdown();
})
    
</script>
</head>

<body>
  <div off-canvas="slidebar-1 right reveal">
    <div id="mainMenu" class="ui fluid inverted vertical pointing menu">
      
        <a href="<?php echo HOST_NAME; ?>" class="item <?php active('index.php');?>">Home</a>
        <div class="ui dropdown item">
          <i class="dropdown icon"></i>About Us
          <div class="menu">
            <a href="<?php echo HOST_NAME; ?>about.php" class="item <?php active('about.php');?>">About Us</a>
            <a href="<?php echo HOST_NAME; ?>work-process.php" class="item <?php active('work-process.php');?>">Work Process</a>
            <!-- <a href="#">Awards & Achivements</a>-->
            <a href="<?php echo HOST_NAME; ?>team.php" class="item <?php active('team.php');?>">WOW IT Team</a>
            <a href="<?php echo HOST_NAME; ?>culture.php" class="item <?php active('culture.php');?>">WOW Culture</a>
          </div>
        </div>
      
        <div class="ui dropdown item">
          <i class="dropdown icon"></i>Products
          <div class="menu">
            <!-- <a class="item <?php active('conference-room-booking-management.php');?> <?php active('visitors-tracking-management-system.php');?>">Products</a> -->
            <a href="<?php echo HOST_NAME; ?>HomeSalon" class="item <?php active('conference-room-booking-management.php');?>" target="_blank">Salon Booking System</a>
            <a href="<?php echo HOST_NAME; ?>conference-room-booking-management.php"  class="item <?php active('conference-room-booking-management.php');?>">Conference Room Booking Management</a>
            <a href="<?php echo HOST_NAME; ?>visitors-tracking-management-system.php" class="item <?php active('visitors-tracking-management-system.php');?>">Visitors Tracking Management System</a>
          </div>
        </div>
      
<!-- <a href="services.php" class="<?php //active('services.php');?>">Services</a> -->          
      
        <div class="ui dropdown item">
          <i class="dropdown icon"></i>Services
          <div class="menu">
            <a class="item <?php active('services.php');?>" href="<?php echo HOST_NAME; ?>services.php">Services</a>
            <a href="<?php echo HOST_NAME; ?>web-ui-engineering-solutions.php" class="item <?php active('web-ui-engineering-solutions.php');?>">Web & UI Engineering Solution</a>
            <a href="<?php echo HOST_NAME; ?>web-development-solutions.php" class="item <?php active('web-development-solutions.php');?>">Web Development Solutions</a>
            <a href="<?php echo HOST_NAME; ?>e-commerce.php" class="item <?php active('e-commerce.php');?>">E-Commerce Solutions</a>
            <a href="<?php echo HOST_NAME; ?>mobile-apps-development.php" class="item <?php active('mobile-apps-development.php');?>">Mobile Apps Development</a>
            <a href="<?php echo HOST_NAME; ?>digital-marketing-solutions.php" class="item <?php active('digital-marketing-solutions.php');?>">Digital Marketing Solutions</a>
            <a href="<?php echo HOST_NAME; ?>content-writing-solutions.php" class="item <?php active('content-writing-solutions.php');?>">Content Writing Solutions</a>                 
          </div>
        </div>

        <a href="<?php echo HOST_NAME; ?>portfolio.php" class="item <?php active('portfolio.php');?>">Portfolio</a>
        <a href="<?php echo HOST_NAME; ?>news.php" class="item <?php active('news.php');?>">News</a>
        <a href="<?php echo HOST_NAME; ?>careers.php" class="item <?php active('careers.php');?>">Careers</a> 
        <a href="<?php echo HOST_NAME; ?>contact.php" class="item <?php active('contact.php');?>">Contact Us</a>
        <!-- <a href="soon.php" class="item <?php active('soon.php');?>">Blog</a> -->
          
      </div>
  </div>
  <div canvas="container">
<header class="header">
  <div class="top-row">
    <div class="ui container">
      <div class="ui small menu">
        <div class="right menu">
            <a href="<?php echo HOST_NAME; ?>about.php" class="item">About</a> 
          <a href="<?php echo HOST_NAME; ?>services.php" class="item">Services</a> 
          <a href="<?php echo HOST_NAME; ?>portfolio.php" class="item">Portfolio</a> 
          <a href="mailto:info@wowitsolutions.com" class="item"><i class="icon mail outline"></i> info@wowitsolutions.com</a> <a href="tel:+919582408888" class="item"><i class="icon phone"></i> +91 95824 08888</a> 
          </div>
      </div>
    </div>
  </div>
  <div class="main-nav">
    <div class="ui container ">
      <div class="logo"><a href="<?php echo HOST_NAME; ?>" title="WOW It Solutions" data-content="Go to home page" data-position="right center" data-variation="mini inverted"><img src="<?php echo HOST_NAME; ?>image/WOW-Logo.png"  alt="WOW IT Solutions Logo" width="110" /></a></div>
      <div class="mobile-nav">
        <a class="ui tiny icon secondary button toggle-slidebar" ><span class="tablet-up-inline">MENU</span> <i class="icon sidebar"></i></a>
      </div>
      <div class="quote"> <a href="#" class="ui red tiny button" onclick="$('#quoteModal').modal('show')">Request a Quote</a> </div>
      
    </div>
  </div>
</header>