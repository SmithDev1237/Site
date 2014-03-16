<?php

$post = new Post1();
$post->title = "Test Post";
$post->author = "Martin Smith";
$post->creationDate = "March 03, 2014, 22:00:00";
$post->content = "<p>My main project whilst at CWi was to develop the latest version of their portal system, NetPortal.</p>

<p>This portal system was used by a large food testing laboratory so their customers could submit samples for testing and then view the results online once they were done. The site had over 800 hundred users, was used 24 hours a day and was a critical part in the registration of samples and issuing of result certificates.</p>

<h3>Home Screen</h3>

<p>This area of the website is where the user enters the site after they login, there is a overview of the latest results and widgets to the rights showing information they find useful.</p>"

?>


<div id="midsection">
		<div class="container">
	  		<div class="row">
	  			<div class="col-md-4">
	  				<h1>Latest Blogs</h1>
	  				<hr>
	  				<h2><?php echo $post->title; ?></h2>
	  				<span>Posted by <?php echo $post->author; ?> on <?php echo $post->creationDate; ?></span>
	  				<?php echo $post->content; ?>
	  			</div>
	  			<div class="col-md-4">
	  				<h1>Work Experience</h1>
	  				<hr>
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus a dolor ut lorem semper venenatis. Aenean sit amet mollis nisi, in rutrum est. Ut egestas tellus urna, et tincidunt leo vulputate sit amet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non imperdiet eros. Duis dictum, massa et consectetur lacinia, erat mauris malesuada nunc, eu hendrerit massa augue vel ante. Aliquam varius consequat commodo. Morbi dolor dui, porta nec risus id, iaculis dignissim orci. Vestibulum nec erat ipsum. Ut condimentum nulla eu dolor viverra, eget pharetra risus condimentum. Fusce vel facilisis leo, id ultricies erat. In at lacinia neque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
	  			</div>
	  			<div class="col-md-4">
	  				<h1>Recent Projects</h1>
	  				<hr>
	  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus a dolor ut lorem semper venenatis. Aenean sit amet mollis nisi, in rutrum est. Ut egestas tellus urna, et tincidunt leo vulputate sit amet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non imperdiet eros. Duis dictum, massa et consectetur lacinia, erat mauris malesuada nunc, eu hendrerit massa augue vel ante. Aliquam varius consequat commodo. Morbi dolor dui, porta nec risus id, iaculis dignissim orci. Vestibulum nec erat ipsum. Ut condimentum nulla eu dolor viverra, eget pharetra risus condimentum. Fusce vel facilisis leo, id ultricies erat. In at lacinia neque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
	  			</div>
	  		</div>
	  	</div>
  	</div>
  	<div id="footer">
  		<div class="container">
	  		<div class="row">
	  			<div class="col-md-12"><h2>Footer</h2></div>
	  		</div>
	  	</div>
  	</div>
 </body>
</html>