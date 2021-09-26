<?php  include('include/header.php');  
  if(isset($_GET['page']) && $_GET['page'] > 0 ) {
    $page_no = $_GET['page'];
  }else{
    $page_no = 1;
  }
  $num_rec_per_page = 10;
  $start = ((($page_no-1)*$num_rec_per_page)  );
  
  
  $query = "SELECT  * FROM   news  Where b_id > 0 AND b_status = 'publish' ".$search." ORDER BY b_publish_date DESC" ;
  $result = mysqli_query($conn, $query);
  $total_records = mysqli_num_rows($result);
  
  $query = "SELECT  * FROM   news  Where b_id > 0 AND b_status = 'publish' ".$search." ORDER BY b_publish_date DESC LIMIT $start, $num_rec_per_page" ;
  $result = mysqli_query($conn, $query);
  $records = mysqli_num_rows($result);

?>
<style type="text/css">
a { text-decoration: none !important;}
.news { padding-top: 20px;}
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
          <h2 class="ui red header">News</h2>
        </div>
        <div class="six wide right aligned column">
          <ul class="ui small breadcrumb">
            <li> <a href="index.php" >Home</a> </li>
            <li> <span class=" active">News</span> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <section class="inner-wrapper">
    <div class="ui container ">
      <h2 class="ui black header">Latest News</h2>
      <div class="openings">        
          <div class=" news">
            <?php if($records > 0 ) { ?>
            <?php while($data = mysqli_fetch_assoc($result)) { ?>
            <?php 
                $b_id     = $data['b_id'];
                $b_title     = $data['b_title'];
                $b_url_key     = $data['b_url_key'];

                $b_status     = $data['b_status'];
                $b_publish_date = date('d M, Y', strtotime($data['b_publish_date'])) ;
             $t_pro_pic = $data['b_featured_image'] ;
                $t_image = HOST_NAME."image/news/".$t_pro_pic; 

                $_b_url_path = HOST_NAME.'view_news.php/?id='.$b_id;

                $b_description = strip_tags($data['b_description']); 

                $pieces = explode(" ", $b_description);
                $b_description = implode(" ", array_splice($pieces, 0, 60));
                
              ?>
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
                        <p> <a class="ui blue tiny button " href="<?php echo $_b_url_path; ?>" title="View Detail">View Detail</a> </p>
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
            <?php } ?>
            <?php }
           else{ ?>
            <article  class=" post type-post status-publish format-standard ">
              <div class="clearfix post-content media">
                <div class="media-body">
                  <h2 class="entry-title"> <a href="#" title="No Event" rel="bookmark">There is no event.</a> </h2>
                </div>
              </div>
            </article>
            <?php } ?>
            <div class="row">
              <div class=" clearfix text-right">
                  <div class="ui tiny pagination menu">
                    <?php 
                                
            $total_pages = ceil($total_records / $num_rec_per_page); 

            echo "<a class='item' title='1' href='".$site_url."news.php?page=1'>".'&laquo;'."</a> "; // Goto 1st page  

            for ($i=1; $i<=$total_pages; $i++) { 
                $class = "";
                if($page_no == $i ){
                  $class = "active";
                }
                  echo "<a class='item ".$class."' title='".$i."' href='".$site_url."news.php?page=".$i."'>".$i."</a> "; 
              
            }; 
            echo "<a class='item' title='$total_pages' href='".$site_url."news.php?page=$total_pages'>".'&raquo;'."</a> "; // Goto last page
            ?>
                  </div>
              </div>
            </div>
          </div>

      </div>
    </div>
  </section>
  <?php include('include/footer.php') ?>
