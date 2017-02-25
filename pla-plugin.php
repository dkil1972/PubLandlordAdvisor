<?php
/*
 * Plugin Name: Site Plugin for publandlordadvisor.uk
 * Description: Site specific code changes for publandlordadvisor.uk
 * */
/* Start Adding Functions Below this Line */
 
// Creating the widget 

function promotionContent() {
    return '<div class="promotion aligncenter"><img style="display:block;width:100%;" src="http://localhost:8000/wp-content/uploads/2017/01/LANDLORD-1.jpg" /></div> ';
}

add_shortcode('promotion', 'promotionContent');

/* Stop Adding Functions Below this Line */
?>

