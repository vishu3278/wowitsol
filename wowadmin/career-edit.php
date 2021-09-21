<?php
//include('../../connection.php');?>
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script>

  // When the browser is ready...

  $(function() {
   // Setup form validation on the #register-form element
    $("#register-form").validate({ 

         
    });

  });

  </script>
<!-- jQuery Form Validation code -->

<?php

  if(isset($_GET['c_id']) && $_GET['c_id'] > 0 )
  {
    $id = $_GET['c_id'];
    $s = "SELECT * FROM careers WHERE  id='".$id."'";
    $getselect=mysqli_query($conn, $s);
    $profile = mysqli_fetch_assoc($getselect) ;    
      
       
      $designation=$profile['designation'];
      $skills=$profile['skills'];
      $experience =$profile['experience'];
      $description =$profile['description'];
      $responsibility =$profile['responsibility'];
      $requirements =$profile['requirements'];
      $interveiw_date=date('Y-m-d', strtotime($profile['interveiw_date']));
      $opening=$profile['opening'];
      $status=$profile['status'];
           
    }
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
 <section class="content-header">
        <ol class="breadcrumb">
      <li><a href="<?php echo BASE_ADMIN_URL ;?>home.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">CAREERS EDIT</li>        
    </ol>
  </section>

  <div id="page-title">
    <h2>CAREERS</h2>
    <p> <?php if(isset($_GET['c_id'])){ ?>
      Edit
      <?php } else {?> 
      Add 
      <?php  } ?> Careers</p>
  </div>
  <!-- Main content -->

  <!-- Main content -->
  <div class="panel">
    <div class="panel-header">
      
    </div>
    <div class="panel-body">
      <h3 class="title-hero">
        
      </h3> 
      
          <div class="box ">

            <div class=" box-body">
              <div class="row">
                <div class="col-md-12">
               
                    <div class="profile-bottom">
                      
                      <?php if(isset($_SESSION['success']) ) { ?>
                       <div class="alert alert-success" ><?php echo $_SESSION['success']; ?></div>
                      <?php unset($_SESSION['success']); } ?>
                        <?php if(isset($_SESSION['error']) ) { ?>
                      <div class="alert alert-warning" ><?php echo $_SESSION['error']; ?></div>
                        <?php unset($_SESSION['error']); } ?>
                    <div class="row">

                      <form action="include/edit_career_details.php" method="post" class="form col-md-10" id="register-form" novalidate="novalidate" enctype="multipart/form-data">            
                        <div class="row form-group">
                          <div class="col-md-6">
                          <label>Designation*</label>
                          <input type="hidden" name="c_id" id="c_id" value="<?php echo $_GET['c_id']; ?>">
                          <input type="text" id="c_design" name="c_design" class="form-control required" placeholder="Ex: Web Developer" value="<?php echo $designation;?>">
                          </div>
                         <div class="col-md-6">
                            <label>Experience*</label>
                            <input type="text" name="c_exp" id="c_exp" class="form-control required" placeholder="Ex: Freshers/6 Months" value="<?php echo $experience;?>">
                          </div>
                         
                        </div>
                    <div class="row form-group">
                         <div class="col-md-12">
                          <label>Skills*</label>
                          <textarea  name="c_skills" id="c_skills" class="form-control required" placeholder="Ex: HTML, CSS, Jquery"> <?php echo $skills; ?> </textarea>
                          </div>
                      </div>

                      <div class="row form-group">
                         <div class="col-md-12">
                          <label>Description*</label>
                          <textarea  name="c_description" id="c_description" class="form-control required" placeholder="Ex: HTML, CSS, Jquery"> <?php echo $description; ?> </textarea>
                          </div>
                      </div>

                      <div class="row form-group">
                         <div class="col-md-12">
                          <label>Responsibility</label>
                          <textarea  name="c_responsibility" id="c_responsibility" class="form-control" placeholder="Ex: HTML, CSS, Jquery"> <?php echo $responsibility; ?> </textarea>
                          </div>
                      </div>

                      <div class="row form-group">
                         <div class="col-md-12">
                          <label>Requirement</label>
                          <textarea  name="c_requirements" id="c_requirements" class="form-control" placeholder="Ex: HTML, CSS, Jquery"> <?php echo $requirements; ?> </textarea>
                          </div>
                      </div>

                        <div class="row form-group">
                       
                           <div class="col-md-6">
                            <label>Openings*</label>
                           <select name="c_opening" id="c_opening"  class="form-control required">
                             <option value="" selected="selected">Select Openings</option>
                             <?php 
                              for($i=1; $i<=10; $i++){ ?>
                                <option value="<?php echo $i ?>"
                              
                                <?php if($opening ==$i )
                                 { echo 'selected'; } ?> >
                                <?php echo $i; ?> </option>

                             <?php } ?>
                        </select>
                          </div>
                          <div class="col-md-6">
                            <label>Interview Date*</label>
                            <input type="text" name="c_date" id="c_date" class="form-control required"   value="<?php echo $interveiw_date; ?>" >
                          </div>
                          </div>
                        <div class="row form-group">
                      <div class="col-md-6">
                      <label>Current Stage*</label>
                      <fieldset class="radio">
                        <label class="radio-inline">                    
                        <input type="radio" name="current_stage"  <?php if (isset($status) && $status=="opened") { echo "checked";}?> class="required" value="opened" >
                       Opened</label>
                        <label class="radio-inline">
                        <input type="radio" name="current_stage" <?php if (isset($status) && $status=="closed"){ echo "checked";}?> value="closed">
                        Closed</label>
                      </fieldset>
                    </div>
						  
                        </div>
                      <div class="row form-group">
                      <div class="col-md-6">
                      <input type="submit" class="btn btn-danger text-uppercase sign-up" id="save" name="save" value="SAVE" />
                                      </div>
                                    </div>
					   
                                  </form>
                                </div>

                              </div>
                          
                          </div>
                        </div>

                      </div><!-- /.box-body -->

                  </div><!-- /.box -->
              
              </div><!-- /.col -->
            </div><!-- /.row -->
          </section><!-- /.content --> 
</div><!-- wrapper -->
<script type="text/javascript">
    $(document).ready(function()
    {  
       

      $("#state").on('change',function(){
       
        $.ajax({
          type: 'POST',
          data:{state:$('#state').val()},
          url         : '<?php echo BASE_ADMIN_URL; ?>include/regions.php',
          success: function(data) {
              $('#city').html(data);
          }
        });
      });
	  });

    $('#c_date').datepicker({
      format: 'dd-mm-yyyy',
      autoclose:true,
      daysOfWeekDisabled:[0],
      daysOfWeekHighlighted:'0',
      Default: false
    
    });
</script>
 <script>
      $(function () {
		 CKEDITOR.replace('c_description',
		 {
			   resize_enabled : false,
			     height: '200',
			    resize_minHeight : '300',
				 entities_greek : false,
            entities_latin : false,
			uiColor:  '#cccccc',
		 
		 });
       
      });

    </script>

<script>
      $(function () {
		 CKEDITOR.replace('c_responsibility',
		 {
			   resize_enabled : false,
			     height: '200',
			    resize_minHeight : '300',
				 entities_greek : false,
            entities_latin : false,
			uiColor:  '#cccccc',
		 
		 });
       
      });
      
    </script>

<script>
      $(function () {
		 CKEDITOR.replace('c_requirements',
		 {
			   resize_enabled : false,
			     height: '200',
			    resize_minHeight : '300',
				 entities_greek : false,
            entities_latin : false,
			uiColor:  '#cccccc',
		 
		 });
       
      });
      
    </script>
