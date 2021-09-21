<script type="text/javascript">
	
$(document).ready(function () {
$('#form-update').validate({ 


rules: {
       
    old_password : {
					minlength: 6        
					},
	new_password : {
					minlength: 6        
					},
	confirm_password : {
					minlength: 6        
					}
 }




});
});




</script>
<?php

	$sqlN = "SELECT * FROM users WHERE id = '".$_SESSION['siteadmin']['id']."'";
	
	$resultN = mysqli_query($conn, $sqlN);
	$rowN = mysqli_fetch_array($resultN);
	
	$userEmail =  $rowN['email'];
	$passWord =  $rowN['password'];


?>
   
    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 style="color: #414C59; font-weight: 400;">
            My Profile
			<!--<small>List</small> -->
          </h1>
          <ol class="breadcrumb">
              <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">My Profile</li>
           
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
		   <div class="col-xs-12">
		  <div class="box">
                <div class="box-header">
                <h4>Change Password (Username : <?php echo $userEmail ; ?>)</h4>
                </div><!-- /.box-header -->
                
            

				 <?php if(isset($_SESSION['error'])) { ?>
				<div class="alert alert-danger" ><?php echo $_SESSION['error']; ?></div>
				<?php unset($_SESSION['error']); } ?>
				<?php if(isset($_SESSION['success'])) { ?>
					<div class="alert alert-success" ><?php echo $_SESSION['success']; ?></div>
				<?php unset($_SESSION['success']); } ?>
				
                <div class="box-body">			
					
					  <div class="row">
					  <form method="POST" action="include/change_password_code.php" id="form-update" enctype="multipart/form-data" >

						<input type="hidden" name="userEmail" value="<?php echo $userEmail ; ?>">
							<div class="col-md-4">
								<label class="pull-left text-right"><strong>Old Password </strong></label>
								<label class="col col-1  pull-left">:</label>
								<input name="old_password" class="form-control smaller required " type="password">
							</div>
							<div class="col-md-4">
								<label class="pull-left text-right"><strong>New Password </strong></label>
								<label class="col col-1  pull-left">:</label>
								<input name="new_password" class="smaller form-control required " type="password" >
							</div>
							<div class="col-md-4">					
								<label class="pull-left text-right"><strong>Confirm Password </strong></label>
								<label class="col col-1  pull-left">:</label>
								<input name="confirm_password" class="smaller form-control required " type="password" ">
								
							</div>
						
							
						</div>	
					
							<div class="col col-12 text-center">					
				   				<button type="submit" class="btn btn-danger" style="margin-top: 20px;">Submit</button>
				   			</div>
									
				
			</div>
	</form>
</div></div>
	</div></div></div></section></div>
	
