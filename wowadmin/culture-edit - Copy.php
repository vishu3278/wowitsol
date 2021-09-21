<?php
include_once ('../config.php');

    
     $c_id = $_GET['c_id'] ;

    $query = "SELECT * FROM cultures WHERE id = '".$c_id."'";
    $results = mysqli_query($conn, $query);
	$total_images = mysqli_num_rows($results);
    $my_q = mysqli_fetch_array($results);

    $title = $my_q['culture_title'];
    
    $image1 = $my_q['image_1'];
    $p_image1 = ROOT.'image/cultures/'.$image1;

    $image2 = $my_q['image_2'];
    $p_image2 = ROOT.'image/cultures/'.$image2;

    $image3 = $my_q['image_3'];
    $p_image3 = ROOT.'image/cultures/'.$image3;

    $image4 = $my_q['image_4'];
    $p_image4 = ROOT.'image/cultures/'.$image4;

    $image5 = $my_q['image_5'];
    $p_image5 = ROOT.'image/cultures/'.$image5;

    $image6 = $my_q['image_6'];
    $p_image6 = ROOT.'image/cultures/'.$image6;

    $image7 = $my_q['image_7'];
    $p_image7 = ROOT.'image/cultures/'.$image7;

    $image8 = $my_q['image_8'];
    $p_image8 = ROOT.'image/cultures/'.$image8;
 
    //print_r($my_q);
    
?>
<style type="text/css">
 h3{ font-weight: bold; margin-bottom: 10px; } 

</style>
<script type="text/javascript">
  $(document).ready(function () {

    $('#culture_img').validate();

  });
</script>
     <form class="form form-group" id="culture_img" action="<?php echo BASE_ADMIN_URL; ?>include/edit_culture_post.php" method="POST" role="form" enctype="multipart/form-data">

                    <fieldset>
                      <h3> Culture Images</h3>
                      <p><b>All images should be less than 2 MB </b></p>
                      <?php if(isset($_SESSION['success']) ) { ?>
                      <div class="alert alert-success" ><?php echo $_SESSION['success']; ?></div>
                      <?php unset($_SESSION['success']); } ?>
                      <?php if(isset($_SESSION['error']) ) { ?>
                      <div class="alert alert-warning" ><?php echo $_SESSION['error']; ?></div>
                      <?php unset($_SESSION['error']); } ?>
                    

                    <div class="row">
                      <div class="col-md-6 form-group">
                      <label>Culture Title</label>
                      <input type="text" name="c_title" id="c_title" class="form-control required" value="<?php echo $title; ?>">

                    


                    </div>
                      </div>
                      <div class="row">
                         <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                            <label>Image 1</label>
                            <input type="hidden" name="c_id" value="<?php echo $c_id ; ?>">
                            <input type="file" onchange="checkinput('fileToUpload')" id="fileToUpload" class="<?php if($my_q['image_1'] == '') {?> required <?php } ?>" value="<?php echo $image1 ; ?>" name="fileToUpload"/><br/>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                          <figure>
                           <?php if($my_q['image_1'] != '') { ?>          
                            <img src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $image1 ;?>" width="100" height="100" class="" alt="<?php echo $c_id; ?>">
                            <?php }else{ ?>
                            <img src="<?php echo HOST_NAME; ?>image/cultures/dummy.jpg" alt="<?php echo $c_id; ?>"  width="120">
                            <?php } ?>
                            </figure>
                          </div>
                        </div>
                      </div>
                       <div class="row">
                         <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                            <label>Image 2</label>
                            <input type="file" onchange="checkinput('fileToUpload_2')" id="fileToUpload_2" name="fileToUpload_2"/><br/>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                          <figure>
                           <?php if($my_q['image_2'] != '') { ?>          
                            <img src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $image2 ;?>" width="100" height="100" class="" alt="<?php echo $c_id; ?>">
                            <?php }else{ ?>
                            <img src="<?php echo HOST_NAME; ?>image/cultures/dummy.jpg" alt="<?php echo $c_id; ?>"  width="120">
                            <?php } ?>
                            </figure>
                          </div>
                        </div>
                      </div>
                       <div class="row">
                         <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                            <label>Image 3</label>
                            <input type="file" onchange="checkinput('fileToUpload_3')" id="fileToUpload_3" name="fileToUpload_3"/><br/>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                          <figure>
                           <?php if($my_q['image_3'] != '') { ?>          
                            <img src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $image3 ;?>" width="100" height="100" class="" alt="<?php echo $c_id; ?>">
                            <?php }else{ ?>
                            <img src="<?php echo HOST_NAME; ?>image/cultures/dummy.jpg" alt="<?php echo $c_id; ?>"  width="120">
                            <?php } ?>
                            </figure>
                          </div>
                        </div>
                      </div>
                       <div class="row">
                         <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                            <label>Image 4</label>
                            <input type="file" onchange="checkinput('fileToUpload_4')" id="fileToUpload_4" name="fileToUpload_4"/><br/>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                          <figure>
                           <?php if($my_q['image_4'] != '') { ?>          
                            <img src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $image4 ;?>" width="100" height="100" class="" alt="<?php echo $c_id; ?>">
                            <?php }else{ ?>
                            <img src="<?php echo HOST_NAME; ?>image/cultures/dummy.jpg" alt="<?php echo $c_id; ?>"  width="120">
                            <?php } ?>
                            </figure>
                          </div>
                        </div>
                      </div>
                       <div class="row">
                         <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                            <label>Image 5</label>
                            <input type="file" id="fileToUpload_5" onchange="checkinput('fileToUpload_5')" name="fileToUpload_5"/><br/>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                          <figure>
                           <?php if($my_q['image_5'] != '') { ?>          
                            <img src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $image5 ;?>" width="100" height="100" class="" alt="<?php echo $c_id; ?>">
                            <?php }else{ ?>
                            <img src="<?php echo HOST_NAME; ?>image/cultures/dummy.jpg" alt="<?php echo $c_id; ?>"  width="120">
                            <?php } ?>
                            </figure>
                          </div>
                        </div>
                      </div>
                       <div class="row">
                         <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                            <label>Image 6</label>
                            <input type="file" onchange="checkinput('fileToUpload_6')" id="fileToUpload_6" name="fileToUpload_6"/><br/>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                          <figure>
                           <?php if($my_q['image_6'] != '') { ?>          
                            <img src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $image6 ;?>" width="100" height="100" class="" alt="<?php echo $c_id; ?>">
                            <?php }else{ ?>
                            <img src="<?php echo HOST_NAME; ?>image/cultures/dummy.jpg" alt="<?php echo $c_id; ?>" width="120">
                            <?php } ?>
                            </figure>
                          </div>
                        </div>
                      </div>
                       <div class="row">
                         <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                            <label>Image 7</label>
                            <input type="file" onchange="checkinput('fileToUpload_7')" id="fileToUpload_7" name="fileToUpload_7"/><br/>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                          <figure>
                           <?php if($my_q['image_7'] != '') { ?>          
                            <img src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $image7 ;?>" width="100" height="100" class="" alt="<?php echo $c_id; ?>">
                            <?php }else{ ?>
                            <img src="<?php echo HOST_NAME; ?>image/cultures/dummy.jpg" alt="<?php echo $c_id; ?>"  width="120">
                            <?php } ?>
                            </figure>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                         <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                            <label>Image 8</label>
                            <input type="file" onchange="checkinput('fileToUpload_8')" id="fileToUpload_8" name="fileToUpload_8"/><br/>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                          <figure>
                           <?php if($my_q['image_8'] != '') { ?>          
                            <img src="<?php echo HOST_NAME; ?>image/cultures/<?php echo $image8 ;?>" width="100" height="100" class="" alt="<?php echo $c_id; ?>">
                            <?php }else{ ?>
                            <img src="<?php echo HOST_NAME; ?>image/cultures/dummy.jpg" alt="<?php echo $c_id; ?>"  width="120">
                            <?php } ?>
                            </figure>
                          </div>
                        </div>
                      </div>
				
                      <input type="submit" name="save" class="btn btn-danger" value="Submit" />
					
                    </fieldset>

                    </form>
  <script>

$(document).ready(function()
    {  
      $("#unit_picture").validate({
        
      }); 
});

function checkinput(id){

  var val = $("#"+id).val();
  var ext = val.substring(val.lastIndexOf('.') + 1).toLowerCase();
  //var siz  ;
  var siz = $('#'+id)[0].files[0].size;
      if (ext == 'gif' || ext == 'jpg' || ext == 'jpg'){
        if(siz > 500000){
          alert("File size exceeded 2 MB !");
          $("#"+id).val('');
        return false;

        }else{
          //alert("Success !");
        }
      }else{
        alert("Upload images only !");
        $("#"+id).val('');
        return false;
      }
  }
  


  </script>