<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
if ( count( get_included_files() ) == 1 ){ exit(); }?>

</div></div><!-- postbox & inside -->
</div> <!-- post-body-content -->

<div id="postbox-container-1" class="postbox-container"><?php require_once( $this->templates .'/sidebar.php' );?></div>

<br class="clear" />
</div></div><!-- poststuff and post-body -->

<br /><hr />
<p style="text-align:right;"><small><b><?php echo $this->statement();?></small></p>
</div><!-- wrap -->

<br class="clear" />
