<?php include('config.php');
include('include/header.php');

$s= "SELECT * FROM careers ORDER BY interveiw_date desc";
$ss = mysqli_query($conn, $s);



  ?>
<div class="page-title">
  <div class="ui container">
    <div class="ui doubling grid">
      <div class="ten wide column">
        <h1 class="ui red header">Careers</h1>  
          
      </div>
      <div class="six wide right aligned column">
        <ul class="ui small breadcrumb">
          <li>
            <a href="index.php" >Home</a>
          </li>
          <li>
            <span class=" active">Careers</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<section class="inner-wrapper">  
  <div class="ui container stackable grid">
  <div class="row">
    <div class="sixteen wide column">
      <!-- <h1 class="ui capitalized blue header">About Us </h1> -->
      <h2 class="ui blue header">Current Openings</h2>
      <hr>
    </div>
  
      <div class="twelve wide column">
        <div class="ui divided items">
        <?php while ($row = mysqli_fetch_array($ss)) {
            
         ?>
           
            <div class="item">
              <div class="content">
                <h4 class="ui orange header "> <?php echo ucwords($row['designation']); ?></h4>
                <div class="meta"><span > Opening(s): <?php echo $row['opening'];?></span>
                </div>
              
                <div class="description">
                  <p> Skills: <?php echo ucwords($row['skills']);?></p>
                  <p> Experience: <?php echo $row['experience']; ?></p>

                  <button class="details" data-id="<?php echo $row['id']; ?>" type="button">Details</button>

              <!--<p class="desp"> Description: <?php echo $row['description']; ?></p>
                  <p class="response"> Responsibility: <?php echo $row['responsibility']; ?></p>
                  <p class="require"> Requirements: <?php echo $row['requirements']; ?></p>-->

                  <p> Interview Date: <?php
                    echo $interveiw_date = date('d M, Y', strtotime($row['interveiw_date'])); 
                    ?></p>
                </div>
                <div class="extra">
                  
                  <?php $status = $row['status']; 
                  if ($status == 'closed') { 
                    echo '<span class="ui orange small label">'.$row['status'].'</span>';
                  } else {
                    echo '<span class="ui blue small label">'.$row['status'].'</span>';
                  } ?>
                
                </div>
              </div> 
           </div>
          
          <?php  }  ?>
         </div>
      </div>
    <div class="four wide column"></div> 
  </div>
  </div>
</section>
    <div class="ui longer test modal">

    <div class="scrolling content">
    
      <div>        
      <div class="ui red header">Designation:<span id="career_title"></span></div>
      <hr>
       <div class="ui red header">Job Description:-</div>

       <div class="ui message"><b>Skills:</b><span id="skills"></span></div>

       <div class="ui message"><b>Experience:</b><span id="experience"></span></div>

       <div class="ui message"><b>Description:</b><span id="desp"></span></div>
       
       <div class="ui message"><b>Responsibility:</b><span id="response"></span></div>
       
       <div class="ui message"><b>Requirements:</b><span id="require"></span></div>

       <div class="ui message"><b>Opening:</b><span id="opening"></span></div>

      </div>
    </div>
    <div class="actions">
      <div class="ui primary approve button">
        Close       
      </div>
    </div>
  </div>
<?php include('include/footer.php') ?>
<script>   

$('.details').click(function(){
    var details_id = $(this).data('id');
     console.log(details_id); 

     $('.longer.modal')
     .modal('show'); 

$.ajax({

         type: 'POST',

         data :{"id":details_id},

         url   : '<?php echo BASE_ADMIN_URL; ?>include/career_api.php',

         success  : function (result) {

                    var s = JSON.parse(result);

                    console.log(s);
                    $('#career_title').html(s.data.designation);
                    $('#skills').html(s.data.skills);
                    $('#experience').html(s.data.experience);
                    $('#desp').html(s.data.description);
                    $('#response').html(s.data.responsibility);
                    $('#require').html(s.data.requirements);
                    $('#opening').html(s.data.opening);

              }

              });
   });

</script>