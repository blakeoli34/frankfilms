<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frankfilms
 */

?>

	</div><!-- #content -->
	<footer class="site-footer <?php the_field('footer_position', 'options'); ?> background-color-<?php the_field('footer_color', 'options'); ?>" <?php if(get_field('footer_custom_color', 'options')){
	    $color = get_field('footer_custom_color', 'options');
	    echo 'style="background-color: ' . $color . ';"';
	}?>>
        <?php if(have_rows('footer_content_columns', 'options')): ?>
        <div class="columns is-centered">
            <?php while(have_rows('footer_content_columns', 'options')): the_row();
            $size = get_sub_field('column_size');
            $content = get_sub_field('column_content');
            ?>
            <div class="column <?php echo $size; ?>">
                <?php echo $content; ?>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <?php if(get_field('show_btt', 'options')): ?>
        <a href="#top" class="btt scroll-link"><i class="fa fa-caret-up"></i></a>
        <?php endif; ?>
	</footer>
    <div class="bottom-footer">
        <p>Copyright &copy; <?php echo date("Y"); ?> FrankFilms Productions</p>
    </div>
</div><!-- #top -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() . '/js/jquery.youtube-background.js'; ?>"></script>
</body>
</html>
