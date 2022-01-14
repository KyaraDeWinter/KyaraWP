<?php

// check if the repeater field has rows of data
if( have_rows('accordion_repeater') ):
	
 	
 	// loop through the rows of data for the tab header
    while ( have_rows('accordion_repeater') ) : the_row();
		
		$header = get_sub_field('accordion_header');
		$content = get_sub_field('accordion_content');

	?>
	
		<button class="accordion"><?php echo $header; ?></button>
		<div class="panel">
		  <p><?php echo $content; ?></p>
		</div>    
		<?php
	endwhile; //End the loop 

else :

    // no rows found
    echo 'Come back tomorrow';

endif;