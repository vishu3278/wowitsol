<?php

   $sql ="SELECT * FROM cultures order by id desc"; 



   $result = mysqli_query($conn, $sql) ;





?>

<style type="text/css">

 .images img{ width: 100%; }

</style>







<div class="content-wrapper"> 

  <!-- Content Header (Page header) -->

  <section class="content-header">

        <ol class="breadcrumb">

      <li><a href="<?php echo BASE_ADMIN_URL ;?>home.php"><i class="fa fa-dashboard"></i> Home</a></li>

      <li class="active">WOW IT Solutions</li>        

    </ol>

  </section>

 



	<div id="page-title">

		<h2>Cultures<a href="<?php echo BASE_ADMIN_URL;?>home.php?page=cultureedit" class="btn btn-warning pull-right"  /> Add Cultures</a></h2>

		<p>Add new Cultures </p>

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

                  <th >S.No</th>

                  <th width="15%" >Title</th>

                  <th>Img_1</th>

                  <th >Img_2</th>

                  <th >Img_3</th>

                  <th >Img_4</th>

                  <th >Img_5</th>

                  <th >Img_6</th>

                  <th >Img_7</th>

                  <th >Img_8</th>

                  <th >Action</th>



                </tr>

              </thead>

              <tbody  class="images">

                <?php   $i= 1; while($row = mysqli_fetch_array($result)) { ?>

                <tr>

                  <td><?php echo $i ?></td>

                  <td><?php echo  ucfirst($row['culture_title']); ?> </td>

                  <td><img src="<?php if ($row['image_1'] != ''){

                       echo HOST_NAME; ?>image/cultures/<?php echo $row['image_1'];

                       }

                       else {

                        echo HOST_NAME; ?>image/cultures/dummy.jpg

                        

                       <?php  } ?>"></td>

                  <td><img src="<?php if ($row['image_2'] != ''){

                       echo HOST_NAME; ?>image/cultures/<?php echo $row['image_2'];

                       }

                       else {

                        echo HOST_NAME; ?>image/cultures/dummy.jpg

                        

                       <?php  } ?>"></td>

                  <td><img src="<?php if ($row['image_3'] != ''){

                       echo HOST_NAME; ?>image/cultures/<?php echo $row['image_3'];

                       }

                       else {

                        echo HOST_NAME; ?>image/cultures/dummy.jpg

                        

                       <?php  } ?>"></td>      

                  <td><img src="<?php if ($row['image_4'] != ''){

                       echo HOST_NAME; ?>image/cultures/<?php echo $row['image_4'];

                       }

                       else {

                        echo HOST_NAME; ?>image/cultures/dummy.jpg

                        

                       <?php  } ?>"></td> 

                  <td><img src="<?php if ($row['image_5'] != ''){

                       echo HOST_NAME; ?>image/cultures/<?php echo $row['image_5'];

                       }

                       else {

                        echo HOST_NAME; ?>image/cultures/dummy.jpg

                        

                       <?php  } ?>"></td> 

                  <td><img src="<?php if ($row['image_6'] != ''){

                       echo HOST_NAME; ?>image/cultures/<?php echo $row['image_6'];

                       }

                       else {

                        echo HOST_NAME; ?>image/cultures/dummy.jpg

                        

                       <?php  } ?>"></td> 

                  <td><img src="<?php if ($row['image_7'] != ''){

                       echo HOST_NAME; ?>image/cultures/<?php echo $row['image_7'];

                       }

                       else {

                        echo HOST_NAME; ?>image/cultures/dummy.jpg

                        

                       <?php  } ?>"></td> 

                  <td><img src="<?php if ($row['image_8'] != ''){

                       echo HOST_NAME; ?>image/cultures/<?php echo $row['image_8'];

                       }

                       else {

                        echo HOST_NAME; ?>image/cultures/dummy.jpg

                        

                       <?php  } ?>"></td> 

                  

          

				  

				   				  

                  <td style="text-align: center;"><a href="<?php echo BASE_ADMIN_URL ;?>home.php?page=cultureedit&c_id=<?php echo $row['id']; ?>" class="btn btn-info btn-xs" role="button" title="Edit" data-toggle="tooltip" name='edit'><span>Edit</span></a> <a href="<?php echo BASE_ADMIN_URL ;?>home.php?page=culturedelete&c_id=<?php echo $row['id']; ?>" class="btn btn-warning btn-xs delete"  role="button" title="Delete" name="delete" data-toggle="tooltip"><span>Delete</span></a></td>

                </tr>

                <?php  $i++; } ?>

              </tbody>

              <tfoot>

                <tr>

                  

                    <th >S.No</th>

                  <th   width="10%">Title</th>

                  <th >Img_1</th>

                  <th >Img_2</th>

                  <th >Img_3</th>

                  <th >Img_4</th>

                  <th >Img_5</th>

                  <th >Img_6</th>

                  <th >Img_7</th>

                  <th >Img_8</th>

                  <th >Action</th>

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