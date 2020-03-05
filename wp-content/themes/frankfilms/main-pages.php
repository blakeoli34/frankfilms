<?php
/**
 * Template Name: Main Pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package frankfilms
 */

get_header();
?>
<div class="hero <?php the_field('hero_size'); ?>">
    <?php $herotype = get_field('hero_type');
        if($herotype === 'video'):
        $videourl = get_field('hero_video');
    ?>
    <div class="hero__video">
        <div id="ytbg" data-youtube="https://www.youtube.com/watch?v=<?php echo $videourl; ?>"></div>
    </div>
    <?php elseif($herotype === 'photo'): $heroimg = get_field('hero_image'); ?>
    <div class="hero__photo">
        <?php echo wp_get_attachment_image( $heroimg, 'full', false ); ?>
    </div>s
    <?php endif;
    if(get_field('hero_content')):
        $herocontent = get_field('hero_content');?>
    <div class="hero__overlay">
        <div class="hero__content" data-aos="zoom-out-up" data-aos-delay="2000">
            <?php echo $herocontent; ?>
        </div>
    </div>
    <?php endif; ?>
</div>


<?php
/* Begin Sections */
if(have_rows('content_sections')):
    while(have_rows('content_sections')): the_row();
        // Case: Services Section
        if( get_row_layout() == 'services_section'):
            $bg = get_sub_field('section_background_color');
            $cbg = get_sub_field('custom_background_color');
            $title = get_sub_field('section_title');
            $width = get_sub_field('section_width');
            $id = get_sub_field('section_id');
            $layout = get_sub_field('layout_type');
?>
        <div id="<?php echo $id ; ?>" class="section background-color-<?php echo $bg . ' ' . $width; ?>" <?php if($bg === 'custom'){ echo 'style="background: ' . $cbg . ';"' ;} ?>>
            <?php if($title !== ""): ?><h2 data-aos="fade-down" class="section-title"><?php echo $title; ?></h2><?php endif;
            if(have_rows('services')): ?>
            <div class="columns layout-<?php echo $layout; ?>">
                <?php while(have_rows('services')): the_row();
                    $name = get_sub_field('service_name');
                    $simg = get_sub_field('service_photo');
                    $page = get_sub_field('link_to_page');
                    $link = get_sub_field('link_to_url');
                ?>
                <div class="service" data-aos="fade-up" data-aos-duration="1800">
                    <a href="<?php if($page !== ""){ echo $page;} if($link !== ""){ echo $link; } ?>">
                        <div class="service-image">
                            <?php echo wp_get_attachment_image( $simg, 'large', false ); ?>
                        </div>
                        <p class="service-name"><?php echo $name; ?></p>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endif;
        if(get_row_layout() == 'videos_section'):
            $bg = get_sub_field('section_background_color');
            $cbg = get_sub_field('custom_background_color');
            $title = get_sub_field('section_title');
            $width = get_sub_field('section_width');
            $id = get_sub_field('section_id');
            $layout = get_sub_field('layout_type'); ?>
        <div id="<?php echo $id ; ?>" class="section background-color-<?php echo $bg . ' ' . $width; ?>" <?php if($bg === 'custom'){ echo 'style="background: ' . $cbg . ';"' ;} ?>>
            <?php if($title !== ""): ?><h2 data-aos="fade-down" class="section-title"><?php echo $title; ?></h2><?php endif;
            if(have_rows('videos')): ?>
            <div class="columns layout-<?php echo $layout; ?>">
                <?php while(have_rows('videos')): the_row();
                    $videourl = get_sub_field('video_id');
                    $label = get_sub_field('video_label');
                ?>
                <div class="video" data-aos="zoom-in" data-aos-delay="1000">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/<?php echo $videourl;?>?rel=0&modestbranding=1&autohide=1&showinfo=0&loop=1&playlist=<?php echo $videourl;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <p class="vidlabel"><?php echo $label; ?></p>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endif;
            if(get_row_layout() == 'cards_section'):
                $bg = get_sub_field('section_background_color');
                $cbg = get_sub_field('custom_background_color');
                $title = get_sub_field('section_title');
                $width = get_sub_field('section_width');
                $id = get_sub_field('section_id'); ?>
            <div id="<?php echo $id ; ?>" class="section background-color-<?php echo $bg . ' ' . $width; ?>" <?php if($bg === 'custom'){ echo 'style="background: ' . $cbg . ';"' ;} ?>>
                <?php if($title !== ""): ?><h2 data-aos="fade-down" class="section-title"><?php echo $title; ?></h2><?php endif;
                if(have_rows('cards')): ?>
                <div class="columns is-centered">
                    <?php while(have_rows('cards')): the_row();
                        $column = get_sub_field('d_column_size');
                        $card_bg = get_sub_field('card_background_color');
                        $card_pad = get_sub_field('card_padding');
                        $card_shadow = get_sub_field('card_drop_shadow');
                        $layout = get_sub_field('card_layout');
                        $title = get_sub_field('card_title');
                        $content = get_sub_field('card_content');
                        $custom = get_sub_field('custom_card');
                        ?>
                    <div class="column <?php echo $column; ?>" data-aos="flip-up" data-aos-duration="1200">
                        <div class="card" style="background:<?php echo $card_bg; ?>; padding: <?php echo $card_pad; ?>; <?php if($card_shadow){ ?> box-shadow: 0 0 10px rgba(0,0,0,0.2); <?php } ?>">
                            <?php if($title !== ""): ?><h3 class="card-title"><?php echo $title; ?></h3><?php endif;
                            if($layout === 'basic') {
                                echo '<p>' . $content . '</p>';
                            } else if($layout === 'custom') {
                                echo $custom;
                            } else if($layout === 'list') {
                                if(have_rows('list_items')): ?>
                                    <ul class="card_list">
                                        <?php while(have_rows('list_items')): the_row();
                                            $item = get_sub_field('item'); ?>
                                            <li><?php echo $item; ?></li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif;
                            }?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php endif;
            if(get_row_layout() == 'custom_code_columns'):
                $bg = get_sub_field('section_background_color');
                $cbg = get_sub_field('custom_background_color');
                $title = get_sub_field('section_title');
                $width = get_sub_field('section_width');
                $id = get_sub_field('section_id');
                $c_settings = get_sub_field('column_settings');
                if(have_rows('columns')): ?>
                <div id="<?php echo $id ; ?>" class="section background-color-<?php echo $bg . ' ' . $width; ?>" <?php if($bg === 'custom'){ echo 'style="background: ' . $cbg . ';"' ;} ?>>
                    <?php if($title !== ""): ?><h2 data-aos="fade-down" class="section-title"><?php echo $title; ?></h2><?php endif; ?>
                    <div class="columns <?php echo implode(' ', $c_settings); ?>">
                        <?php while(have_rows('columns')): the_row();
                            $d_size = get_sub_field('d_column_size');
                            $m_size = get_sub_field('m_column_size');
                            $offset = get_sub_field('column_offset');
                            $content = get_sub_field('column_content');
                        ?>
                        <div class="column <?php echo $d_size . ' ' . $m_size . ' ' . $offset; ?>" data-aos="fade-up">
                            <?php echo $content; ?>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
<?php endif; endif; endwhile; endif; ?>
<script>
    jQuery(function(){
        jQuery('[data-youtube]').youtube_background({
            'mobile':true
        });
    });
    AOS.init({
        delay:200,
        once: true,
        duration: 800
    });
</script>

<?php
get_footer();
