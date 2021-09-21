<?php
include('config.php');
 include('include/header.php');

 $s = "SELECT * FROM cultures order by id desc";
 $ss = mysqli_query($conn, $s);




 ?>
<div class="page-title">
  <div class="ui container">
    <div class="ui doubling grid">
      <div class="ten wide column">
        <h1 class="ui red header">WOW IT Culture</h1>  
          
      </div>
      <div class="six wide right aligned column">
        <ul class="ui small breadcrumb">
          <li>
            <a href="index.php" >Home</a>
          </li>
          <li>
            <span class=" active">Culture</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<section class="inner-wrapper">  
  <div class="ui container stackable grid">
  <div class="row">
     <div class="sixteen wide center aligned column">
      <!-- <h1 class="ui capitalized blue header">About Us </h1> -->
      <h2 class="ui header">WOW Activity</h2>
      <!-- <p><a href="#">View all <i class="fa fa-chevron-right"></i></a></p> -->
    </div>
  </div>
  <div class="ui divider"></div>
  <?php $i = 1; while ($row = mysqli_fetch_array($ss)) {
?>
  <div class="row">
    <div class="sixteen wide aligned column">
      <h4 class="ui header"><?php echo ucwords($row['culture_title']); ?></h4>
       <div class="ui grid culture">
        <div class="doubling four column row">
        <?php if ($row['image_1'] != '') {?>
         <div class="column">         
          <a class="example-image-link" href="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_1']; ?>" data-lightbox="example-1"><img class="example-image" src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_1']; ?>" alt="image-1" /></a>           
          </div>
          <?php } ?>
           <?php if ($row['image_2'] != '') {?>
         <div class="column">          
              <a class="example-image-link" href="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_2']; ?>" data-lightbox="example-1"><img class="example-image" src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_2']; ?>" alt="image-1" /></a> 
         </div>
         <?php } ?>
          <?php if ($row['image_3'] != '') {?>
         <div class="column">          
              <a class="example-image-link" href="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_3']; ?>" data-lightbox="example-1"><img class="example-image" src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_3']; ?>" alt="image-1" /></a> 
         </div>
         <?php } ?>
          <?php if ($row['image_4'] != '') {?>
         <div class="column">            
              <a class="example-image-link" href="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_4']; ?>" data-lightbox="example-1"><img class="example-image" src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_4']; ?>" alt="image-1" /></a>           
            
         </div>
         <?php } ?>
         </div>
         </div>


         <div class="ui grid culture">
        <div class="doubling four column row">
         <?php if ($row['image_5'] != '') {?>
         <div class="column">         
              <a class="example-image-link" href="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_5']; ?>" data-lightbox="example-1"><img class="example-image" src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_5']; ?>" alt="image-1" /></a>           
          </div>
          <?php } ?>
          <?php if ($row['image_6'] != '') {?>
         <div class="column">          
              <a class="example-image-link" href="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_6']; ?>" data-lightbox="example-1"><img class="example-image" src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_6']; ?>" alt="image-1" /></a> 
         </div>
         <?php } ?>
          <?php if ($row['image_7'] != '') {?>
         <div class="column">          
              <a class="example-image-link" href="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_7']; ?>" data-lightbox="example-1"><img class="example-image" src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_7']; ?>" alt="image-1" /></a> 
         </div>
         <?php } ?>
          <?php if ($row['image_8'] != '') {?>
         <div class="column">            
              <a class="example-image-link" href="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_8']; ?>" data-lightbox="example-1"><img class="example-image" src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $row['image_8']; ?>" alt="image-1" /></a>           
            
         </div>
        <?php } ?>
        </div>
     </div>



  </div>
  </div>
  <?php } ?>


      
    </div>  
  
</section>
<style type="text/css">
  .culture img{
    width: 100%;
    border: 2px solid #fff;    
    box-shadow: 0 0 14px #cccccc;
  }
  .culture p{
    text-align: center;
  }
</style>
<link rel="stylesheet" href="css/lightbox.css" type="text/css">
<script src="js/lightbox.js"></script>

<?php include('include/footer.php') ?>

