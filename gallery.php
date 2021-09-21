<?php include("include/header.php"); ?>
  
    <link rel="stylesheet" href="gallery-layout/css/normalize.min.css">
    <link rel="stylesheet" href="gallery-layout/css/prism.css" />
    <link rel="stylesheet" href="css/style.css" />
   
    <script src="gallery-layout/js/modernizr.min.js"></script>
			
		<div class="page-title">
		  <div class="ui container">
			<div class="ui doubling grid">
			  <div class="ten wide column">
				<h2 class="ui red header">Gallery</h2>
			  </div>
			  <div class="six wide right aligned column">
				<ul class="ui small breadcrumb">
				  <li>
					<a href="index.php" >Home</a>
				  </li>
				  <li>
					<span class=" active">Gallery</span>
				  </li>
				</ul>
			  </div>
			</div>
		  </div>
		</div>
	<!-- <section class="banner">
	  <div class="ui ">
		<div class="ui fluid image"><img src="image/gallery-bg.jpg" alt=""></div>
	  </div>
	</section> -->
<section class="inner-wrapper">
 <div class="ui  stackable " >
      <div class="loader-wrapper">
        <div class="loader"></div>
      </div>
      <div class="gallery clearfix">
	  
	  <?php
		error_reporting(0);
		define('ROOT', $_SERVER['DOCUMENT_ROOT']. '/image/gallery/') ;
		$path = ROOT ;
		$files = scandir($path);
		$files = array_diff(scandir($path), array('.', '..'));
		foreach($files as $picture){
			if (exif_imagetype($path.$picture) == IMAGETYPE_GIF || exif_imagetype($path.$picture) == IMAGETYPE_JPEG || exif_imagetype($path.$picture) == IMAGETYPE_PNG ) { ?>
				 <img class="picture" src="image/gallery/<?php echo $picture; ?>" />
		<?php	}
		}
	
		?>
	  
        
      
      </div>
	  </div>
	   <div class="ui divider"></div>
</section>

    <script src="gallery-layout/js/jquery.js"></script>
    <script src="gallery-layout/js/foundation.min.js"></script>
    <script src="gallery-layout/js/pycs-layout.jquery.js"></script>
    <script src="gallery-layout/js/gallery.js"></script>
 <?php //include('include/footer.php') ?>
