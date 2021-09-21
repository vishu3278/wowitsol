<?php include('include/header.php') ?>

<section class="inner-wrapper">
  <div class="ui container ">
    <div class="">
      <h1 class="ui center aligned icon header"> <i class="icon anim"><img src="image/wow-icon2.png" alt=""></i> Coming Soon...
        <div class="sub header">We're working on this section and will be back soon.</div>
      </h1>
      <div class="ui center aligned sub header">Go to <a href="index.php" title="Home">Home page</a></div>
    </div>
    <script>
    	$(function () {
    		$('i.anim')
			.transition('set looping')
			.transition('pulse', '1500ms');
    	});

    </script> 
  </div>
</section>
<?php include('include/footer.php') ?>
