<?php
$sql ="SELECT * FROM careers"; 

$result = mysqli_query($conn, $sql) ;

?>




<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
        <ol class="breadcrumb">
      <li><a href="<?php echo BASE_ADMIN_URL ;?>home.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">WOW IT Solutions</li>        
    </ol>
  </section>
 

	<div id="page-title">
		<h2>Careers<a  href="<?php echo BASE_ADMIN_URL;?>home.php?page=careeredit" class="btn btn-warning pull-right"  /> Add Careers</a></h2>
		<p>Add new Careers </p>
	</div>
  <!-- Main content -->
<?php if(isset($_SESSION['success']) ) { ?>
<div class="alert alert-success" ><?php echo $_SESSION['success']; ?></div>
<?php unset($_SESSION['success']); } ?>
<?php if(isset($_SESSION['error']) ) { ?>
<div class="alert alert-warning" ><?php echo $_SESSION['error']; ?></div>
<?php unset($_SESSION['error']); } ?>
	<div class="panel">
		<div class="panel-header">
			
		</div>
   
		<div class="panel-body">
			<h3 class="title-hero">
				
			</h3>

			<table id="career-table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th width="20%">Designation</th>
                  <th width="25%">Skill</th>
                  <th width="15%">Exp</th>
                  <th width="15%">Description</th>
                  <th width="15%">Responsibility</th>
                  <th width="15%">Requirements</th>
                  <th width="15%">Interview Date</th>
                  <th width="5%">Opening</th>
                  <th width="5%">Status</th>
                  <th width="15%">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i= 1; while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo ucwords ($row['designation']); ?> </td>
                  <td><?php echo $row['skills']; ?></td>
                  <td><?php echo  $row['experience'] ; ?></td>
                  <td><?php echo  $row['description'] ; ?></td>
                  <td><?php echo  $row['responsibility'] ; ?></td>
                  <td><?php echo  $row['requirements'] ; ?></td>
                  <td><?php echo date('d-M-Y', strtotime($row['interveiw_date'])); ?></td>      
                  <td><?php echo $row['opening']; ?></td> 
                  <td><?php echo  ucwords($row['status']); ?></td> 
          
				  
				   				  
                  <td><a href="<?php echo BASE_ADMIN_URL ;?>home.php?page=careeredit&c_id=<?php echo $row['id']; ?>" class="btn btn-info btn-xs" role="button" title="Edit" data-toggle="tooltip" name='edit'><span>Edit</span></a> <a href="<?php echo BASE_ADMIN_URL ;?>home.php?page=careerdelete&c_id=<?php echo $row['id']; ?>" class="btn btn-warning btn-xs delete"  role="button" title="Delete" name="delete" data-toggle="tooltip"><span>Delete</span></a></td>
                </tr>
                <?php $i++; } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>S.No</th>
                   <th width="20%">Designation</th>
                  <th width="25%">Skill</th>
                  <th width="15%">Exp</th>
                  <th width="15%">Description</th>
                  <th width="15%">Responsibility</th>
                  <th width="15%">Requirements</th>
                  <th width="15%">Interview Date</th>
                  <th width="5%">Opening</th>
                  <th width="5%">Status</th>
                  <th width="15%">Action</th>
                </tr>
              </tfoot>
            </table>
			
		</div>
  
  </div> <!-- panel -->

  <!-- /.content --> 
</div>
<!-- /.content-wrapper --> 

<script type="text/javascript">

$(document).ready(function(){
  $('.delete').click(function(e)
{
 
    if(confirm("Are you sure you want to delete ?"))
    {
        //alert('navigate!');
    }
    else
    {
        e.preventDefault();
    }
});

      $('#career-table').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });

});

</script>