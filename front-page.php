<?php
get_header();
?>
    
		<article class="container  px-3 py-5 p-md-5">
	   	<?php
			if(have_posts()){
				while(have_posts()){
					the_post();
					the_content();
				}
			}
		?>
	    </article>
	
	<?php
	get_footer();
	?>
   