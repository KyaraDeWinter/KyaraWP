<script type='text/javascript'> 

var acc = document.getElementsByClassName("faq");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

</script>

<?php

// check if the repeater field has rows of data
if( have_rows('faq') ):
	
 	
 	// loop through the rows of data for the tab header
    while ( have_rows('faq') ) : the_row();
		
		$question = get_sub_field('faq_question');
		$answer = get_sub_field('faq_answer');

	?>
	
		<button class="faq"><?php echo $question; ?></button>
		<div class="panel">
		  <p><?php echo $answer; ?></p>
		</div>    
		<?php
	endwhile; //End the loop 

else :

    // no rows found
    echo 'No questions or answers found.';

endif;