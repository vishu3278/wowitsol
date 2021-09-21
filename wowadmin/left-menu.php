<?php   $vertical_menu=$_SERVER['REQUEST_URI'];
    $menu=explode('/',$vertical_menu);
   //  $pro_menu = explode('/',$vertical_menu,3);

   // $pro_ver_menu=end($pro_menu);

  $ver_menu=end($menu);
  $x=explode('=',$ver_menu,3);
  $y = end($x);

  $xx = explode('&', $ver_menu);
    $yy = reset($xx);
 $zz = explode('=', $yy);
     $xyz = end($zz) ;
   ?>
<style type="text/css">
	#page-sidebar.font-inverse ul li.header{ list-style: none; }
	#sidebar-menu li{list-style: none;	}
	#sidebar-menu li.header{ font-weight: normal; }
	#sidebar-menu li ul li:last-child, #sidebar-menu li ul li:last-child a{ list-style: none; }
	#sidebar-menu .active{ border: 1px solid #888; background-color: #888;  }
	#sidebar-menu .active span, .active .glyph-icon{ color: #fff !important; }
	#sidebar-menu .side_border{ border:1px solid #bbb; }
	#sidebar-menu {
   margin: 0;
   padding: 5px 20px;
   list-style: none;
 
}
</style>

<?php 
$sql = "SELECT * from users where id='".$id."'";
$sqli = mysqli_query($conn, $sql);?>


        <div id="page-sidebar"  class="<?php echo $sidebar_style_class;?> font-inverse" >
			<div class="scroll-sidebar">
				<?php $row = mysqli_fetch_assoc($sqli)  ?>
						 
					<ul id="sidebar-menu" class="sf-js-enabled sf-arrows">

					
						   <li class="header"><span style="margin-bottom: 10px; display: block;">WOW IT Solutions DASHBOARD</span>
								<a href="<?php echo BASE_ADMIN_URL ;?>home.php" title="Dashboard">
									<i class="glyph-icon icon-dashboard"></i>
									<span>Dashboard</span>                        
								</a>                            
							</li>
					
						
					
						<li class="header">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" title ="ultradefender" class="sf-with-ul">
							<i class="glyph-icon icon-dashboard"></i>
							<span>WOW IT Solutions WEB</span>
							</a>
						</li>

						<div id="collapseOne" class="collapse side_border 
						<?php if($_GET['page'] == 'career' || $_GET['page'] == 'careeredit'  || $_GET['page'] == 'careeradd' || $_GET['page'] == 'careerdelete' || $_GET['page'] == 'culture' || $_GET['page'] == 'cultureadd' || $_GET['page'] == 'cultureedit' || $_GET['page'] == 'culturedelete' || $_GET['page'] == 'news' || $_GET['page'] == 'addnews' || $_GET['page'] == 'blog' || $_GET['page'] == 'addblog') { echo 'in' ; } ?>
						"> 
							
									<li class="header <?php if ($y=='career' || $xyz == 'careeredit') { echo 'active' ;}?> ">                            
										<a href="<?php echo BASE_ADMIN_URL ;?>home.php?page=career" title="Widgets" class="">
											<i class="glyph-icon icon-linecons-wallet"></i>
											<span>CAREERS</span>
										</a>
									</li>
							
					

									
									<li class="header <?php if ($y=='news' || $xyz == 'addnews') { echo 'active' ;}?> ">
										<a href="<?php echo BASE_ADMIN_URL ;?>home.php?page=news" title="Frontend template">
										   <i class="glyph-icon icon-linecons-beaker"></i>
										   <span>NEWS</span>                        
										</a>
									</li>

									<li class="header <?php if ($y=='blog' || $xyz == 'addblog') { echo 'active' ;}?> ">
										<a href="<?php echo BASE_ADMIN_URL ;?>home.php?page=blog" title="Frontend template">
										   <i class="glyph-icon icon-linecons-beaker"></i>
										   <span>BLOG</span>                        
										</a>
									</li>

									<li class="header <?php if ($y=='culture' || $xyz == 'cultureedit' || $xyz == 'cultureadd' || $xyz == 'culturedelete') { echo 'active' ;}?> ">
										<a href="<?php echo BASE_ADMIN_URL ;?>home.php?page=culture" title="Frontend template">
										   <i class="glyph-icon icon-linecons-beaker"></i>
										   <span>CULTURES</span>                        
										</a>
									</li>
													
							
							
									
								

						
								
							
							</div>
					</ul>
			</div>
             
					<div class="sidebar-submenu" style="display: none;">

						<ul>
							<li><a href="localhost/tabs.html" title="Responsive tabs"><span>Responsive tabs</span></a></li>
							<li><a href="localhost/collapsable.html" title="Collapsables"><span>Collapsable accordions</span></a></li>
							<li><a href="localhost/bs-carousel.html" title="Bootstrap Carousel"><span>Bootstrap carousel</span></a></li>
							<li><a href="localhost/calendar.html" title="Calendar"><span>Calendar</span></a></li>
							<li><a href="localhost/scrollbars.html" title="Custom scrollbars"><span>Custom scrollbars</span></a></li>
							<li><a href="localhost/modals.html" title="Modals"><span>Modals</span></a></li>
							<li><a href="localhost/notifications.html" title="Notifications"><span>Notifications</span></a></li>
							<li><a href="localhost/lazyload.html" title="Lazyload"><span>Lazyload</span></a></li>
							<li><a href="localhost/loading-feedback.html" title="Loading feedback"><span>Loading feedback</span></a></li>
							<li><a href="localhost/popovers-tooltips.html" title="Popovers &amp; Tooltips"><span>Popovers &amp; Tooltips</span></a></li>
							<li><a href="localhost/progress-bars.html" title="Progress bars"><span>Progress bars</span></a></li>
							<li><a href="localhost/sortable-elements.html" title="Sortable elements"><span>Sortable elements</span></a></li>
						</ul>

					</div><!-- .sidebar-submenu -->
				
					
					<div class="sidebar-submenu" style="display: none;">

						<ul>
							<li><a href="localhost/forms-elements.html" title="Form elements"><span>Form elements</span></a></li>
							<li><a href="localhost/forms-validation.html" title="Form validation"><span>Form validation</span></a></li>
							<li><a href="localhost/pickers.html" title="Pickers"><span>Pickers</span></a></li>
							<li><a href="localhost/sliders.html" title="Sliders"><span>Sliders</span></a></li>
							<li><a href="localhost/forms-wizard.html" title="Form wizards"><span>Form wizards</span></a></li>
							<li><a href="localhost/forms-masks.html" title="Form input masks"><span>Form input masks</span></a></li>
							<li><a href="localhost/image-crop.html" title="Image crop"><span>Image crop</span></a></li>
							<li><a href="localhost/dropzone-uploader.html" title="Dropzone uploader"><span>Dropzone uploader</span></a></li>
							<li><a href="localhost/multi-uploader.html" title="Multi uploader"><span>Multi uploader</span></a></li>
							<li><a href="localhost/input-knobs.html" title="Input knobs"><span>Input knobs</span></a></li>
							<li><a href="localhost/ckeditor.html" title="Ckeditor"><span>Ckeditor</span></a></li>
							<li><a href="localhost/summernote.html" title="Summernote"><span>Summernote</span></a></li>
							<li><a href="localhost/markdown.html" title="Markdown editor"><span>Markdown editor</span></a></li>
							<li><a href="localhost/inline-editor.html" title="Inline editor"><span>Inline editor</span></a></li>
						</ul>

					</div><!-- .sidebar-submenu -->
				
					
					<div class="sidebar-submenu" style="display: none;">

						<ul>
							<li><a href="localhost/flot-charts.html" title="Flot charts"><span>Flot charts</span></a></li>
							<li><a href="localhost/sparklines.html" title="Sparklines"><span>Sparklines</span></a></li>
							<li><a href="localhost/pie-gages.html" title="PieGages"><span>PieGages</span></a></li>
							<li><a href="localhost/just-gage.html" title="justGage"><span>justGage</span></a></li>
							<li><a href="localhost/morris-charts.html" title="Morris charts"><span>Morris charts</span></a></li>
							<li><a href="localhost/xcharts.html" title="xCharts"><span>xCharts</span></a></li>
							<li><a href="localhost/chart-js.html" title="Chart.js"><span>Chart.js</span></a></li>
						</ul>

					</div><!-- .sidebar-submenu -->
				
