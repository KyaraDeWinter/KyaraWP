<script type='text/javascript'> 

var acc = document.getElementsByClassName("faq");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active_faq");

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

<style>

/* Style the buttons that are used to open and close the accordion panel */
.faq {
  background-color: #bdc9a1;
  color: #444;
  cursor: pointer;
  padding: 15px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
  margin-bottom: 10px;
  border: none;
  border-radius: 0.2rem;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.click .active_faq, .faq:hover,
button:focus {
  background-color: #9EAA83;
  background: #9EAA83;
  border: none;
  border-radius: 0.2rem;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 15px;
  background-color: white;
  display: none;
  overflow: hidden;

}

.faq:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  color: #777;
  float: right;
  margin-left: 5px;
}

.active_faq:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}
	
</style>

<?php

// check if the repeater field has rows of data
if( have_rows('accordion') ):
	
 	
 	// loop through the rows of data for the tab header
    while ( have_rows('accordion') ) : the_row();
		
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