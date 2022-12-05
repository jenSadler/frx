<?php/**
 * Template part for displaying message that posts can not be foudn
 * 
 * @package frx
 */?>

<section class="no-result not-found">
<header class="page-header">
<h1 class="page-title"> <?php esc_html_e('Nothing Found', 'frx');?></h1>
</header>
<div class="page-content">
    <?php if(is_home() && current_user_can('publish_posts')): ?>
        <p><?php printf(
            wp_kses(
                __('Ready to publish your first post? <a href="%s">Get Started Here </a>','frx'),
                    [
                        'a'=>[
                            'href'=>[]
                        ]
                    ]
            ), esc_url(admin_url('post-new.php'))); ?>
    
    <?php elseif(is_search()): ?>
        <p><?php esc_html_e('Sorry but nothing matched your seach item. Please try again with some diffent key words'); ?></p>
        <?php get_search_form();?>
       <?php else: ?>
        <p><?php esc_html_e('It seems that we cannot find what you are looking for, perhaps search can help:'); ?></p>
        <?php get_search_form();?>
        <?php endif; ?>
</div>
</section>