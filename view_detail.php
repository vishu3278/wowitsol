<?php  include('include/header.php');?>

<?php
  $query = "SELECT  * FROM  blog  Where b_id='".$_GET['id']."' " ;
  $result = mysqli_query($conn,$query);
  $records = mysqli_fetch_assoc($result);
 ?>

<style type="text/css">
a { text-decoration: none !important;}
.blog { padding-top: 20px;}
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
</style>
  <div class="page-title">
    <div class="ui container">
      <div class="ui doubling grid">
        <div class="ten wide column">
          <h2 class="ui red header">Blog</h2>
        </div>
        <div class="six wide right aligned column">
          <ul class="ui small breadcrumb">
            <li> <a href="index.php" >Home</a> </li>
            <li> <span class=" active">Blog</span> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <section class="inner-wrapper">
    <div class="ui container ">
      <div class="openings">
      	 
         
            <?php 
                $b_id     = $records['b_id'];
                $b_title     = $records['b_title'];
                $b_url_key     = $records['b_url_key'];
                $b_status     = $records['b_status'];
                $b_publish_date = date('d M, Y', strtotime($records['b_publish_date'])) ;
           	    $t_pro_pic = $records['b_featured_image'] ;
                $t_image = HOST_NAME."image/blog/".$t_pro_pic; 

                $_b_url_path = HOST_NAME.'view_detail.php?id='.$b_id;
                $b_description = $records['b_description']; 
              ?>
          <div class="blog">
            <article id="post-<?php echo $b_id; ?>" class="post-<?php echo $b_id; ?> post type-post status-<?php echo $b_status; ?> format-standard has-post-thumbnail hentry category-<?php echo $b_category; ?> category-information-series">
              <div class="post-content media" style="clear: both; display: flex;">
                <div class="pull-left">
                  <h4 class="post-format"> <i class="fa fa-star"></i> </h4>
                </div>
                <div class="media-body">
                  <div class="ui blue header">
                    <h3><a title="<?php echo $b_title; ?>" href="<?php echo $_b_url_path; ?>" rel="bookmark"><?php echo $b_title; ?></a> </h3>
                    <div class="sub header"><i class="calendar icon"></i><time class="entry-date" datetime="2016-03-21T09:06:44+00:00"> <?php echo $b_publish_date; ?></time></div>
                  </div>
                  
                  <!--/.entry-meta -->
                  <div class="ui stackable mobile reversed grid">
                    <div class="eight wide column">
                      <div class="entry-summary" id="entry_summary">
                        <p>
                          <?php  echo $b_description  ;?>
                        </p>
                      </div>
                    </div>
                    <?php if($t_pro_pic != '' ) { ?>
                    <div class="six wide column">
                    <figure class="entry-header" id="entry-header" style="margin: 0px;">
                      <a title="<?php echo $b_title;?>" href="<?php echo $_b_url_path; ?>" rel="bookmark"><img src='<?php echo $t_image ?>' class='ui fluid image' alt="<?php echo $b_title;?> "/></a>
                    </figure>
                    </div>
                    <?php } ?>
                    
                  </div>
                  
                </div>
              </div>
              <div class="ui divider"></div>
            </article>
      
         </div>
       </div>             
     </div>
  </section>
  <?php include('include/footer.php') ?>
