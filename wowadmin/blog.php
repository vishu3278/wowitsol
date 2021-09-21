<?php 
 $sql = "SELECT * FROM blog" ;
 $result = mysqli_query($conn, $sql) ;
 ?>



<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
        <ol class="breadcrumb">
      <li><a href="<?php echo BASE_ADMIN_URL; ?>home.php?page=blog"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">blog</li>
    </ol>
  </section>
  <div id="page-title">
    <h2>Blog<a href="<?php echo BASE_ADMIN_URL;?>home.php?page=addblog" class="btn btn-warning pull-right"  /> Add Blog</a></h2>
    <p>Add new Blog </p>
  </div>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Blog</h3>
          </div>
		  <?php if(isset($_SESSION['error'])) { ?>
				<div class="alert alert-danger" ><?php echo $_SESSION['error']; ?></div>
			<?php unset($_SESSION['error']); } ?>
			<?php if(isset($_SESSION['success'])) { ?>
				<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
			<?php unset($_SESSION['success']); } ?>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="blog-table" class="table table-bordered table-striped">
              <thead>
                <tr>
                    <th>S.No.</th>
                    <th >Title</th>
                    <th width="10%" >Image</th>
                    <th >Date</th> 
                    <th >Status</th> 
                    <th >Action</th>
                </tr>
              </thead>
				<tbody>
        <?php $i = 1; while($row = mysqli_fetch_array($result)) { 
           $id = $row['b_id'];
					$t_pro_pic = $row['b_featured_image'] ;
				 	$t_image = HOST_NAME."image/blog/".$t_pro_pic; 
				?>
         <tr>
          <td><?php echo $i; ?></td>
					<td><?php echo $row['b_title']; ?></td>
					<td><?php if($t_pro_pic != '' && @getimagesize($t_image) ) { ?>
          <img style="width: 100%;" src='<?php echo $t_image ?>'  alt="<?php echo $row['b_title'];?>"  /> 
          <?php } ?>
          </td>
					<td><?php echo date('d M, Y', strtotime($row['b_publish_date'])); ?></td>
					
					<td><?php echo ucfirst($row['b_status']); ?></td>
          <td>
           
            <br/><a href="<?php echo BASE_ADMIN_URL; ?>home.php?page=addblog&n_id=<?php echo $row['b_id']; ?>"><span class="btn btn-warning btn-sm">Edit</span></a>   
             <a href="<?php echo HOST_NAME; ?>blog-detail.php?url_key=<?php echo $row['b_url_key']; ?>.html" target="_blank"><span class="btn btn-info btn-sm">View</span> </a> 
            <a href="<?php echo BASE_ADMIN_URL ;?>home.php?page=blogdelete&n_id=<?php echo $row['b_id']; ?>"><span class="btn btn-danger btn-sm confirm">Delete</span></a>

          </td>
					
                 
                </tr>
                <?php $i++;  } ?>
              </tbody>
				<tfoot>
					<tr>
				            <th>S.No.</th>
                    <th >Title</th>
                    <th >Image</th>
                    <th >Date</th> 
                    <th >Status</th> 
                    <th >Action</th>
					</tr>
				</tfoot>
            </table>
          </div>
       
        </div>
    
      </div>
      
    </div>

    
  </section>
 
</div>

<script>
	$(function() {
		$('.confirm').click(function() {
			return window.confirm("Are you sure?");
		});
	});
</script>

<script>

	$(document).ready(function() {
		$('#blog-table').DataTable( {
			"order": [[ 3, "desc" ]]
		} );
	} );
</script>