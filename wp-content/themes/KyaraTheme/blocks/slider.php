<?php

// *Repeater
// carousel_repeater
// *Sub-Fields
// carousel_image
// carousel_text

// check if the repeater field has rows of data
if( have_rows('slides') ):
	$i = 0; // Set the increment variable
	
	echo '<div id="carouselExampleSlidesNav3" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">';
			
	// loop through the rows of data for the tab header
    while ( have_rows('slides') ) : the_row();
    ?>
    
    <li data-target="#carouselExampleSlidesNav3" data-slide-to="<?php echo $i;?>" class="<?php if($i == 0) echo 'active';?>"></li>
			
	<?php   $i++; // Increment the increment variable	
	
	endwhile; //End the loop  
		
	echo 	'</ol>
		  <div class="carousel-inner">';
	
 	// loop through the rows of data for the tab header
 	$i = 0; // Set the increment variable
    while ( have_rows('slides') ) : the_row();
		
		$image = get_sub_field('slider_image');
		$text = get_sub_field('slider_text');

	?>
	
	 <div class="carousel-item <?php if($i == 0) echo 'active';?>">
      <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
    </div>
	
	              
	<?php   $i++; // Increment the increment variable

	endwhile; //End the loop 
	
	echo '</div>
			 <a class="carousel-control-prev" href="#carouselExampleSlidesNav3" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleSlidesNav3" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>';

else :

    // no rows found

endif;