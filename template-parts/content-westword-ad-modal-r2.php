<?php
/**
 * Template part for WestWord Advert Modal Window
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
<div class="container-fluid">
    <div class="row">
        <div class="col">

					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
						<div class="modal-dialog">

        		<!-- Modal content-->
						<div class="modal-content">

							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Our Weekly Westword Ad</h4>
							</div><!-- /.modal-header -->


							<div class="modal-body">
				    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Westword Weekly Ad Image") ) : ?>
				    <?php endif;?>

				    	</div><!-- /.modal-body -->


							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div><!-- /.modal-footer -->

						</div><!-- /.modal-content -->

						</div><!-- /.modal-dialog -->
					</div><!-- /#myModal -->

				</div><!-- .col -->
		</div><!-- .row -->
</div><!-- .container-fluid -->

