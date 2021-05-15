			</div><!-- End Main Container -->

			<div class="sidebarBg"></div>

			<footer id="footer">
				<div class="container-xl">
					<div id="copyright">
						<!-- &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?> -->
					</div>
				</div>
			</footer>

		</div><!-- End Wrapper -->
		<?php wp_footer(); ?>

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/jquery.mCustomScrollbar.min.css" />
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.mCustomScrollbar.min.js"></script>
		<script>
		    (function($){
		        $(window).on("load",function(){
		            $(".module_box_of_text").mCustomScrollbar({
		                theme:"dark"
		            });
		            // $(".sp-left-thumbnails").mCustomScrollbar({
		            //     theme:"dark"
		            // });		            
		        });
		    })(jQuery);
		</script>

		<script>
		function readMode() {
		   var element = document.getElementById("main-container");
		   element.classList.toggle("read-mode");
		}
		function readModeClass() {
		   var element = document.getElementById("wrapper");
		   element.classList.toggle("read-mode-class");
		}
		</script>

		<script type="text/javascript">
			jQuery( document ).ready(function($) {
				$(document).scroll(function () {
				    let $nav = $("nav.fixed-top");
				    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
				}).ready(function () {
				    let $nav = $("nav.fixed-top");
				    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
				});				
			});			
		</script>

		<!-- 
		<button onclick="readMode()">read mode</button>
		<button onclick="nextSlide()">next slide</button>

		<script type="text/javascript">
			var slider = $( '#pro-5' ).data( 'sliderPro' );
			slider.nextSlide();	
		</script>
		-->
	</body>
</html>