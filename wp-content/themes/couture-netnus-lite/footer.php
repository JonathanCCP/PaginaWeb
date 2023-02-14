<?php
/**
 * The template for displaying the footer
 * 
 * @subpackage couture-netnus-lite
 * @since 1.0
 * @version 1.4
 */

?>
		</div>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')) { ?>
				<div class="container">
					<?php
					get_template_part( 'template-parts/footer/footer', 'widgets' );
					?>
				</div>	
			<?php }?>	
			<div class="clearfix"></div>
			<div class="copyright">
				<div class="container">
					<?php
					get_template_part( 'template-parts/footer/site', 'info' );
					?>
				</div>
			</div>
		</footer>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>