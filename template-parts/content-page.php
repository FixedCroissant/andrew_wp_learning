<div class="container">
<section class="content px-3 py-5 p-md-5">
		    <div class="container">
			    <div class="post mb-5">
				    <div class="media">
                                            <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php  the_post_thumbnail_url('thumbnail'); ?>">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="<?php echo the_permalink() ?>"><?php the_title()?></a></h3>
						    <?php
                                the_content();
                            ?>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div>
		    </div>
	    </section>
</div>