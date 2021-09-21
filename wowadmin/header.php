<?php 
include_once('../config-local.php'); ?>
<?php 
	if(isset($_COOKIE['uid'])){
		$_SESSION['siteadmin']['id']=$_COOKIE['uid'];
	}
	if(!(isset($_SESSION['siteadmin']['id']))){
		if (headers_sent())
		{
		echo "<script> window.location.assign('" . BASE_ADMIN_URL . "'); </script>";
		}
		else
		{
		header('Location: ' . BASE_ADMIN_URL . "");
		}
   }
?>

<?php

    //GLOBAL $box_layout;

     $id = $_SESSION['siteadmin']['id'];
 
    $s = "SELECT * FROM theme_setting WHERE id='".$id."'";
   $getselect = mysqli_query($conn, $s);
   if(mysqli_num_rows($getselect) > 0){
		while($profile=mysqli_fetch_array($getselect))
		{
       
		if( $profile['box_layout'] == 'YES'){
		echo 	$box_layout = 'boxed-layout';
			}else{
				$box_layout = '';
			}

		  
		if( $profile['fixed_header'] == 'YES'){
			$fixed_header = 'fixed-header';
			}else{
				$fixed_header = '';
			}

		if( $profile['fixed_sidebar'] == 'YES'){
			$fixed_sidebar = 'fixed-sidebar';
			}else{
				$fixed_sidebar = '';
			}

		if( $profile['closed_sidebar'] == 'YES'){
			$closed_sidebar = 'closed-sidebar';
			}else{
				$closed_sidebar = '';
			}
		
		$header_style = $profile['header_style'];

		if($header_style == 'SOLID') {    

			if($profile['header_style_solid'] != NULL){
			$header_style_class = $profile['header_style_solid'];    
			}else {
			$header_style_class = 'bg-blue font-inverse';            
			}

		}else
		{  

			if($profile['header_style_gradients'] != NULL){
				$header_style_class = $profile['header_style_gradients'];
			}else {
				$header_style_class = 'bg-gradient-7 font-inverse';            
			}        

		}

		$sidebar_style = $profile['sidebar_style'];

		if($sidebar_style == 'SOLID'){
		 
			
			if($profile['sidebar_style_solid'] != NULL){
				$sidebar_style_class = $profile['sidebar_style_solid'];
			}else {
				$sidebar_style_class = 'bg-black font-inverse';            
			} ;
		}else{

				if($profile['sidebar_style_gradients'] != NULL){
					$sidebar_style_class = $profile['sidebar_style_gradients'];
				}else {
					$sidebar_style_class = 'bg-gradient-8 font-inverse';            
				} 
		}
	   
    
   }
}else{
    $header_style_class = "bg-gradient-8";
    $sidebar_style_class = "bg-black";
	$box_layout = '';
	$fixed_sidebar = '';
	$fixed_header = '';
	$closed_sidebar = '';

}


?>




<!DOCTYPE html>
<html lang="en" class="sb-init">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
		.btn-success{ background-color:#00cc99 !important; border:1px solid #00cc99 !important;}
    </style>

	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title><?php echo WEBSITE; ?>| Dashboard</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo BASE_ADMIN_URL; ?>images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo BASE_ADMIN_URL; ?>images/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo BASE_ADMIN_URL; ?>images/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo BASE_ADMIN_URL; ?>images/favicon.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo BASE_ADMIN_URL; ?>images/favicon.png">
	<!-- <link rel="shortcut icon" href="images/favicon.png"> -->
    

	<link rel="stylesheet" type="text/css" href="<?php echo BASE_ADMIN_URL; ?>css/admin-all-demo.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_ADMIN_URL; ?>css/roomsoom-custom-style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_ADMIN_URL; ?>css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_ADMIN_URL; ?>css/sumoselect.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_ADMIN_URL; ?>css/datepicker.css">
	<!-- JS Core -->
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	
    <script type="text/javascript" src="<?php echo BASE_ADMIN_URL; ?>js/js-core.js"></script>
	<!-- JS Demo -->
	<script type="text/javascript" src="<?php echo BASE_ADMIN_URL; ?>js/admin-all-demo.js"></script>    
    
    <link rel="stylesheet" href="<?php echo BASE_ADMIN_URL; ?>css/style.css">

    <script src="<?php echo BASE_ADMIN_URL; ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo BASE_ADMIN_URL; ?>js/jquery.sumoselect.min.js"></script>
    <script src="<?php echo BASE_ADMIN_URL; ?>js/bootstrap-datepicker.js"></script>
    <script src="<?php echo BASE_ADMIN_URL; ?>plugins/datatables/dataTables.bootstrap.min.js"></script> 
	<script src="<?php echo BASE_ADMIN_URL; ?>js/jquery.validate.js"></script>
   



    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });

        
    </script>

<script>
$(document).ready(function(){
        $('.SlectBox').SumoSelect({
          floatWidth: 400,
          forceCustomRendering: false,
          nativeOnDevice: ['BlackBerry', 'iPhone', 'iPad', 'iPod', 'Opera Mini', 'IEMobile', 'Silk'],
      });
        $('.datepicker').datepicker({
      format: 'dd-mm-yyyy',
      startDate: '-70y',
      endDate:'-10y',
      autoclose: true
});

$( ".datepicker1" ).datepicker({  format: 'dd-mm-yyyy', autoclose: true,
      startDate:'0y',  minDate: new Date });

        });

    </script>


<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;} #register-form .SumoSelect{ width: 100%;border: 1px solid #dfe8f1; }#register-form .SumoSelect > .CaptionCont{ border:0; }</style></head>


    <body class="<?php echo $box_layout;?> <?php echo $fixed_header;?> <?php echo $fixed_sidebar;?> <?php echo $closed_sidebar; ?>">
    <div id="sb-site">


<div class="sb-slidebar bg-black sb-right sb-style-overlay" style="margin-right: -350px;">
<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="scrollable-content scrollable-slim-sidebar" style="overflow: hidden; width: auto; height: 100%;">
<div class="pad15A">
<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-1" class="popover-title">
    GOTEA Target Status For 2017
    <span class="caret"></span>
</a>
<div id="sidebar-toggle-1" class="collapse in">
    <div class="pad15A container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center font-gray pad5B text-transform-upr font-size-12">Tenant</div>
                <div class="chart-alt-3 font-gray-dark easyPieChart" data-percent="55" style="width: 50px; height: 50px; line-height: 50px;"><span>-631</span>%<canvas width="50" height="50"></canvas></div>
            </div>
            <div class="col-md-4">
                <div class="text-center font-gray pad5B text-transform-upr font-size-12">Owner</div>
                <div class="chart-alt-3 font-gray-dark easyPieChart" data-percent="46" style="width: 50px; height: 50px; line-height: 50px;"><span>-529</span>%<canvas width="50" height="50"></canvas></div>
            </div>
            <div class="col-md-4">
                <div class="text-center font-gray pad5B text-transform-upr font-size-12">Properties</div>
                <div class="chart-alt-3 font-gray-dark easyPieChart" data-percent="92" style="width: 50px; height: 50px; line-height: 50px;"><span>-1057</span>%<canvas width="50" height="50"></canvas></div>
            </div>
        </div>
        <div class="divider mrg15T mrg15B"></div>
        <div class="text-center">
           
        </div>
    </div>
</div>



<div class="clear"></div>

<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-3" class="popover-title">
    GOTEA Data
    <span class="caret"></span>
</a>
<div id="sidebar-toggle-3" class="collapse in">

    <ul class="progress-box">
        <li>
            <div class="progress-title">
                Owner
                <b>87%</b>
            </div>
            <div class="progressbar-smaller progressbar" data-value="87">
                <div class="progressbar-value bg-azure" style="width: 0px;">
                    <div class="progressbar-overlay"></div>
                </div>
            </div>
        </li>
        <li>
            <b class="pull-right">66%</b>
            <div class="progress-title">
                Tenant
                
            </div>
            <div class="progressbar-smaller progressbar" data-value="66">
                <div class="progressbar-value bg-red" style="width: 0px;">
                    <div class="progressbar-overlay"></div>
                </div>
            </div>
        </li>
        <li>
            <div class="progress-title">
                Properties
                <b>58%</b>
            </div>
            <div class="progressbar-smaller progressbar" data-value="58">
                <div class="progressbar-value bg-blue-alt" style="width: 0px;"></div>
            </div>
        </li>
        <li>
            <div class="progress-title">
                Newsletter
                <b>74%</b>
            </div>
            <div class="progressbar-smaller progressbar" data-value="74">
                <div class="progressbar-value bg-purple" style="width: 0px;"></div>
            </div>
        </li>
    </ul>

</div>

<div class="clear"></div>

</div>
</div><div class="slimScrollBar" style="background: rgb(141, 160, 170); width: 10px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 10px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
</div>
    <div id="loading" style="display: none;">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div id="page-wrapper">
        <div id="page-header" class="<?php echo $header_style_class;?> font-inverse">
    <div id="mobile-navigation">
        <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
        <a href="<?php echo BASE_URL; ?>" class="logo-content-small" title="<?php echo WEBSITE; ?>"></a>
    </div>
    <div id="header-logo" class="logo-bg">
        <a href="" class="logo-content-big" title="MonarchUI">
            
           
        </a>
        <a href="" class="logo-content-small" title="MonarchUI">
            Monarch <i>UI</i>
            <span>The perfect solution for user interfaces</span>
        </a>
        <a id="close-sidebar" href="#" title="Close sidebar">
            <i class="glyph-icon icon-angle-left"></i>
        </a>
    </div>
    <div id="header-nav-left">
        <div class="user-account-btn dropdown">
            <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                <img width="28" src="images/default-image.jpg" alt="Profile image">
                <span><?php echo ucwords($_SESSION['siteadmin']['username']) ;?></span>
                <i class="glyph-icon icon-angle-down"></i>
            </a>
            <div class="dropdown-menu float-left">
                <div class="box-sm">
                    <div class="login-box clearfix">
                        <div class="user-img">
                            <a href="#" title="" class="change-img">Change photo</a>
                            <img src="images/default-image.jpg" alt="">
                        </div>
                        <div class="user-info">
                            <span>
                                <?php echo ucwords($_SESSION['siteadmin']['username']) ;?>
                                <?php echo ucwords($_SESSION['siteadmin']['role_id']) ;?>
                            </span>
                           
						   <a href="#" title="Edit profile">Edit profile</a>
                           
                        </div>
                    </div>
                    <div class="divider"></div>
                    <ul class="reset-ul mrg5B">
                      
                        <li>
                            <a href="#">
                                <i class="glyph-icon float-right icon-caret-right"></i>
                               View profile
                                
                            </a>
                        </li>
                    </ul>
                    <div class="pad5A button-pane button-pane-alt text-center">
                        <a href="<?php echo BASE_ADMIN_URL; ?>logout.php" class="btn display-block font-normal btn-danger">
                            <i class="glyph-icon icon-power-off"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
	


</div>
			<?php echo include "left-menu.php" ; ?>
			<!-- </div> -->
		</div><!-- page-sidebar -->
		
        <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    
					<?php  include_once "right-setting.php"; ?>
