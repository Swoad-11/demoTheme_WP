<?php
get_header();
?>

<!-- Hero Section -->
<section class="hero text-center text-white py-5" style="background: linear-gradient(135deg, #6610f2, #6f42c1);">
    <div class="container">
        <h1 class="display-4 fw-bold">Welcome to <?php bloginfo('name'); ?></h1>
        <p class="lead mb-4">Your go-to blog for amazing content and insights</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-light btn-lg">Explore Now</a>
    </div>
</section>

<!-- Featured Posts Section -->
<section class="py-5" style="background-color: var(--lightgray);">
    <div class="container">
        <h2 class="mb-4 text-center text-dark">Featured Posts</h2>
        <div class="row">
            <?php
            $featured_query = new WP_Query(array(
                'posts_per_page' => 3,
                'meta_key' => 'featured',
                'meta_value' => '1',
            ));
            if ($featured_query->have_posts()) :
                while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                                </a>
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none"><?php the_title(); ?></a>
                                </h5>
                                <p class="card-text text-muted"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p class="text-center">No featured posts found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Latest Posts Section -->
<section class="py-5" style="background-color: var(--white);">
    <div class="container">
        <h2 class="mb-4 text-center text-dark">Latest Posts</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                                </a>
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none"><?php the_title(); ?></a>
                                </h5>
                                <p class="card-text text-muted"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-info text-white">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            else : ?>
                <p class="text-center">No posts found.</p>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-5 d-flex justify-content-center">
            <?php
            the_posts_pagination(array(
                'mid_size'  => 1,
                'prev_text' => '« Previous',
                'next_text' => 'Next »',
                'screen_reader_text' => ' ',
            ));
            ?>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5 text-center text-white" style="background: linear-gradient(135deg, #ee3577, #dc3545);">
    <div class="container">
        <h2 class="mb-3">Stay Updated!</h2>
        <p class="mb-4">Subscribe to our newsletter to get the latest updates directly in your inbox.</p>
        <form class="d-flex justify-content-center">
            <input type="email" class="form-control w-50 me-2" placeholder="Enter your email">
            <button type="submit" class="btn btn-light">Subscribe</button>
        </form>
    </div>
</section>

<?php
get_footer();
?>
