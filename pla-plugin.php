<?php
/*
 * Plugin Name: Site Plugin for publandlordadvisor.uk
 * Description: Site specific code changes for publandlordadvisor.uk
 * */
/* Start Adding Functions Below this Line */
 
// Creating the widget 

function promotionContent() {
    return '<div class="promotion aligncenter"><a href="http://publandlordadvisor.uk/academy"><img style="display:block;width:100%;" src="http://publandlordadvisor.uk/wp-content/uploads/2017/02/Pub-Landlord_Advisor-Academy.jpg" /></a></div> ';
}

add_shortcode('promotion', 'promotionContent');

/* Stop Adding Functions Below this Line */
?>

