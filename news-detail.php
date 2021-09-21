<?php include_once('include/header.php');?>
<?php
	// $vertical_menu=$_SERVER['REQUEST_URI'];
	// $menu=explode('=',$vertical_menu);
	// $ver_menu=end($menu);
	// $m=explode('.',$ver_menu);
	// $ver=reset($m);

	$url_key = $_GET['url_key'];

	$query = "SELECT  * FROM news  Where b_id > 0 AND b_url_key ='".$url_key."'" ;
	$result = mysqli_query($conn, $query);
	
?>
  <style type="text/css">

.post-content{ padding:20px 0;

}
.post-content.media .pull-left {
    margin-right: 15px;
  }
.type-post .post-content .media-body {
    padding-right: 20px;
}
.post-content .media-body .header h3 { margin-bottom: 0;}
.post-content.media .post-format {
    margin: 0 0 15px;
}
.post-content.media .post-format i {
    color: #fff;
    font-size: 18px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    transition: all 0.4s linear 0s;
    width: 40px;
    background: #de3532 none repeat scroll 0 0;
}
.publish-date{ list-style: none; margin-left: 20px; }
p{ line-height: 26px; }

.entry-summary{ margin-left: 60px; }

#share_btn{margin-top: 35px;}
#entry_summary li{margin-bottom: 15px; line-height: 1.5em;}
</style>
<div class="inner-wrapper">
  <div class=" ui container" style="margin-top:2em;">
    <div class="ui grid"> 
      <div id="contents" class="site-content fourteen wide column" role="main">
        <?php if(mysqli_num_rows($result) > 0 ) { ?>
        <?php while($data = mysqli_fetch_assoc($result)) { ?>
        <?php 
			$b_id     = $data['b_id'];
			$b_title     = $data['b_title'];
			$b_url_key     = $data['b_url_key'];
			
			$b_status     = $data['b_status'];
			$b_publish_date = date('d M, Y', strtotime($data['b_publish_date'])) ;
			$t_pro_pic = $data['b_featured_image'] ;
			$t_image = HOST_NAME."image/news/".$t_pro_pic; 
			$_b_url_path = HOST_NAME.'news-detail.php?url_key='.$b_url_key.'.html';
			/* total comment */
			
			
		?>
        <article id="post-<?php echo $b_id; ?>" class="post-<?php echo $b_id; ?> post single-post type-post status-<?php echo $b_status; ?> format-standard has-post-thumbnail hentry category-<?php echo $b_category; ?> category-information-series">
          <div class="clearfix post-content media">
            <div class="pull-left">
              <h4 class="post-format"> <i class="fa fa-thumb-tack"></i> </h4>
            </div>
			<div class="media-body">
            <div class="ui blue header">
                <h3><a title="<?php echo $b_title; ?>" rel="bookmark"><?php echo $b_title; ?></a> </h3>
                <div class="sub header"><i class="calendar icon"></i><time class="entry-date" datetime="2016-03-21T09:06:44+00:00"> <?php echo $b_publish_date; ?></time></div>
            </div>

              <div class="entry-summary" id="entry_summary">
                <?php if($t_pro_pic != '' && @getimagesize($t_image) ) { ?>
                <header class="">
                  <div class=""> <img style="width: 100%;  margin-bottom: 10px;" src='<?php echo $t_image ?>' alt="<?php echo $b_title;?> <?php echo $b_title; ?>"/> </div>
                </header>
                <?php } ?>
                <?php echo $data['b_description'] ;?>
                </div>
              <!-- //.entry-summary --> 
              
            </div>
            <div id="share_btn"> <span style="font-weight: bold;">Did you like this? Share it:</span>
              <div id="share"></div>
            </div>
          </div>
        </article>
        <?php } ?>
        <?php } else{ ?>
        <article  class=" post type-post status-publish format-standard ">
          <div class="clearfix post-content media">
            <div class="media-body">
              <h2 class="entry-title"> <a href="#" rel="bookmark">There is no blog.</a> </h2>
            </div>
          </div>
        </article>
        <?php } ?>
      </div>
    </div>
  </div>
  </div>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
  <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />
  <script>
  $(function() {
		// Setup form validation on the form
		$("#comment_form").validate();

	});
$("#share").jsSocials({
	shares: ["twitter", "facebook", "googleplus", "linkedin"]
});
</script>
  <?php include_once('include/footer.php');?>