<?php $the_query = new WP_Query( 'posts_per_page=3' ); // Define our WP Query Parameters ?>

<?php 
    // Start our WP Query
    while ($the_query -> have_posts()) : $the_query -> the_post(); 
    // Display the Post Title with Hyperlink
?>

<div class="col-4">
    <div class="card">

        <?php 
            $image = get_field('image');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="card-body">
            <a class="h5" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            <p class="card-text"><?php the_excerpt(__('(more…)')); // Display the Post Excerpt (automatisch text afkorten) ?></p> 
        </div>
    </div>
</div>

<?php 
    // Repeat the process and reset once it hits the limit
    endwhile;
    wp_reset_postdata();
?>