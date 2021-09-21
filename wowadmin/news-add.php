<?php
if(isset($_GET['n_id']))
  {
	$b_id = $_GET['n_id'];
	$qry = "SELECT * FROM news where b_id = '".$b_id."'";
	$result_blog = mysqli_query($conn, $qry);
	$row_blog = mysqli_fetch_array($result_blog);


 	$b_id = $row_blog["b_id"];
	$b_title = $row_blog["b_title"];
	$b_url_key = $row_blog["b_url_key"];
	$b_description = $row_blog["b_description"];
	
	$b_status = $row_blog["b_status"];
	$b_publish_date = $row_blog["b_publish_date"];
  	$t_pro_pic = $row_blog['b_featured_image'] ;
  	$t_image = HOST_NAME."image/news/".$t_pro_pic; 
 	$_b_url_path = HOST_NAME.'news/'.$b_url_key.'.html';
	
	
	
}

?>




<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h2>
			<?php if(isset($_GET['n_id']) && $_GET['n_id'] > 0 ) { echo 'Edit'; }else{ echo 'Add'; } ?>

			<small>News</small>
			
			</h2>
			<ol class=" breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active"><?php if(isset($_GET['n_id']) && $_GET['n_id'] > 0 ) { echo 'Edit'; }else{ echo 'Add'; } ?> News</li>
		   
			</ol>
		</section>


        <!-- Main content -->
        <section class="content">

			  <div class="row">
				   <div class="col-xs-12 col-md-12">  
						<?php if(isset($_SESSION['error'])) { ?>
							<div class="alert alert-danger" ><?php echo $_SESSION['error']; ?></div>
						<?php unset($_SESSION['error']); } ?>
						<?php if(isset($_SESSION['success'])) { ?>
							<div class="alert alert-success" ><?php echo $_SESSION['success']; ?></div>
						<?php unset($_SESSION['success']); } ?>
						<div class="">
							   <div class="">
									<?php if($b_id > 0 ) { ?>
									<form role="form" action="<?php echo BASE_ADMIN_URL;?>include/edit_news_post.php" method="POST" name="blog_add_frm" id="blog_add_frm"  enctype="multipart/form-data">
									<?php }else{ ?>
									
									<form role="form" action="<?php echo BASE_ADMIN_URL;?>include/add_news_post.php" method="POST" name="blog_add_frm" id="blog_add_frm"  enctype="multipart/form-data">
									<?php } ?>
									
										<input type="hidden" class="form-control"  name="action" value="post-add" />
										<input type="hidden" class="form-control"  name="b_id" value="<?php echo $b_id; ?>" />
										<div class="col-xs-12 col-md-9">
											<div class="box  box-body box-default" >
												<div class=" ">
													<!-- text input -->
													<div class="form-group">
														<div class="box-header">
															<h3 class="box-title">Title </h3>
																											
														</div><!-- /.box-header -->
														  <input type="text" class="form-control required" placeholder="Enter title here..." name="title" id="title" value="<?php echo $b_title; ?>" style=" font-size: 24px;" required  >
														 
													</div>
													<div class="form-group">
														
														 <span  class="form-control b_url_path" disabled> <label>Blog Url: </label> <?php echo $_b_url_path; ?></span>
													</div>
													<div class="form-group">
														<input type="hidden"  name="b_url_key" id="b_url_key" value="<?php echo $b_url_key; ?>">
													</div>

													<div class="box-header">
													  <h3 class="box-title">Detail <small>Blog Descripton</small></h3>
																										
													</div><!-- /.box-header -->
													<div class="box-body pad">
														<textarea id="editor1" name="editor1" rows="20" cols="80"  placeholder="Place some text here" style="resize:none" class="required" required >
															<?php echo $b_description; ?>
														</textarea>
													 
													</div>
													
													
												</div>
												
											</div><!-- box -->
											
											
											
										
											
										</div><!-- col-md-9 -->
										
										
										
										<div  class="col-md-3 col-xs-12">
											<div class="box box-info">
												<div class="box-header with-border">
												  <h3 class="box-title">Publish</h3>
												</div><!-- /.box-header -->
												<div class="box-body">
													<div class="input-group" >
													<!--	<p><i class="fa fa-map-pin" aria-hidden="true"></i>  -->
														<span class="input-group-addon"><i class="fa fa-map-pin"></i> </span>
														<select class="form-control required" name="b_status" id="b_status">
															<option value="publish" <?php if($b_status == 'publish'){echo 'selected'; } ?>>Published</option>
															<option  value="pending" <?php if($b_status == 'pending'){echo 'selected'; } ?>>Draft</option>
															
														</select>
													</div>
													<p></p>
													<?php if($b_status == 'publish'){ ?>
														<p><i class="fa fa-calendar" aria-hidden="true"></i> Published on <b><?php echo $b_publish_date ; ?></b></p>
													<?php }else{ ?>
														<p><i class="fa fa-calendar" aria-hidden="true"></i> Publish Immediately <b><?php echo $b_publish_date ; ?></b></p>
														
													<?php } ?>
													<p></p>
													
													<div class="form-group">
												 
														<input type="submit" class="btn btn-info pull-right"  name="b_submit" value="Publish">
													</div>
												</div>
												
											</div>
											<div class="box box-info">
												<div class="box-header with-border">
												  <h3 class="box-title">Featured Image</h3>
												</div><!-- /.box-header -->
												<div class="box-body image-holder-1">
													<?php if($t_pro_pic != '' && @getimagesize($t_image) ) { ?>
													
														<header class="entry-header">
															<input type="hidden" class=""  name="b_old_image" id = "b_old_image" value="<?php echo $t_pro_pic; ?>"> 
															<div class="entry-thumbnail" id="b_image">
																<img src='<?php echo $t_image ?>'  id='image-holder'  class='img-responsive center-block' alt="<?php echo $b_title;?> <?php echo $b_title; ?>"/>       
															</div>
															<p class="help-block">Click below to edit or update</p>
															<p><a href="javascript:void(0);" id="del_img" >Delete Image</a></p>
															<p><a href="javascript:void(0);" id="chnfti" >Change Featured Image</a></p>
														</header>
													<?php }else{ ?>
														<img src=''  id='image-holder'  class='img-responsive center-block' /> 
														<p><a href="javascript:void(0);" id="delt_img" style="display: none;">Delete Image</a></p>
													<?php } ?>
													<div class="form-group featured_div <?php if($t_pro_pic != '' && @getimagesize($t_image) ) { ?> hidden <?php } ?> >
														<label for="b_featured_image">Set Featured Image</label>
														<input type="file" id="b_featured_image" name="b_featured_image">
														
													</div>
												</div>
											</div>
										</div>
									
								</form>
								
									
									
							</div><!-- /.box body-->
						</div><!-- /.box -->
					</div><!-- /.box -->
					
					
					
					
				</div><!-- /.col -->
				
				
			
		</section><!-- /.content --> 
</div><!-- /.row -->
<style type="text/css">
				#page-sidebar .font-inverse #sidebar-menu li a{
					float: left;
					
				}
				#sidebar-menu li ul li:first-child, #sidebar-menu li ul li:first-child a{
					list-style: none;
				}
				#page-sidebar.font-inverse ul li.header{
					list-style:none;
				}
				</style>
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>

<script>
	$(document).ready(function() {

	  // place this within dom ready function
	  function showpanel() {     
		var str = $("#title").val();
		if(str != '' && str.length > 2){
			var dt = new Date($.now());
			var curr_date = dt.getDate();
			var curr_month = dt.getMonth();
			var curr_year = dt.getFullYear();
			var arch = curr_year+'-'+curr_month+'-'+curr_date ;
			//var str = "Sonic Free Games";
			str = str.replace('\'', '').toLowerCase();
			str = str.replace('\"', '').toLowerCase();
			str = str.replace('\/', '').toLowerCase();
			str = str.replace('?', '').toLowerCase();
			str = str.replace(':', '').toLowerCase();
			str = str.replace(';', '').toLowerCase();
			str = str.replace('@', '').toLowerCase();			str = str.replace('&', '').toLowerCase();			str = str.replace(',', '').toLowerCase();			str = str.replace('*', '').toLowerCase();			str = str.replace('%', '').toLowerCase();			str = str.replace('#', '').toLowerCase();
			str = str.replace(/\s+/g, '-').toLowerCase();
			// var b_url_path = '<?php echo $site_url; ?>blogs/'+arch+'/'+str+'.html';
			var b_url_path = '<?php echo $site_url; ?>blogs/'+str+'.html';
			$(".b_url_path").html('<label>Blog Url: </label> '+b_url_path+'');
			//$("#b_url_key").val(arch+'/'+str);
				$("#b_url_key").val(str);
			// alert(curr_year+'-'+curr_month+'-'+curr_date);
			
		}
	 }
	<?php if($b_id < 1 ) { ?>
		$("#title").keyup(function(){
			// alert('sdsds');
			 setTimeout(showpanel, 2000);
		});
	 // use setTimeout() to execute
	 // setTimeout(showpanel, 10000);
	 <?php } ?>

		$('#chnfti').click(function(){
			$('.featured_div').toggleClass('hidden');
		
		});
	});
</script>
 
<script type="text/javascript">
function readURL(input) {
	var imgPath = input.value;
	var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
	var image_holder = $("#image-holder");
	image_holder.empty();
	if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
		if (typeof(FileReader) != "undefined") {
			var reader = new FileReader();
			
			reader.onload = function (e) {
				$('#image-holder').attr('src', e.target.result);
				$('#delt_img').show();
			}
			image_holder.show();
			reader.readAsDataURL(input.files[0]);
		}else {
		  alert("This browser does not support FileReader.");
		  input.value = null;
		}
	}else {
		alert("Pls select only images");
		input.value = null;
	  }
}

$("#b_featured_image").change(function(){
	readURL(this);
});

$("#del_img").click(function(){
	$("#b_image").html('');
		$("#b_old_image").val('');

});
$("#delt_img").click(function(){
	$('#image-holder').attr('src', '');
	$("#delt_img").hide();
	$('#b_featured_image').val('');
	
});
</script>

<script>
      // $(function () {
		 // CKEDITOR.replace('editor1',
		 // {
			   // resize_enabled : false,
			     // height: '350',
			    // resize_minHeight : '300',
				 // entities_greek : false,
            // entities_latin : false,
			// uiColor:  '#cccccc',
			
		 
		 // });
       
      // });
    </script>
	 <script>
      $(function () {
		 CKEDITOR.replace('editor1',
		 {
			   resize_enabled : false,
			     height: '350',
			    resize_minHeight : '300',
				 entities_greek : false,
            entities_latin : false,
			uiColor:  '#cccccc',
			// filebrowserBrowseUrl: 'http://localhost/giveclass/admin/plugins/ckeditor/plugins/imageuploader/imgbrowser.php',
			// filebrowserUploadUrl: 'http://localhost/giveclass/admin/plugins/ckeditor/plugins/imageuploader/imgupload.php',
		 
		 });
       
      });
    </script>
