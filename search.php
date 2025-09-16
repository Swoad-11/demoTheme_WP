<?php
get_header();
?>

<div class="container py-5">
    <!-- Search Title -->
    <header class="mb-5 text-center">
        <h1 class="display-5">Search Results for: <span class="text-primary"><?php echo get_search_query(); ?></span></h1>
    </header>

    <div class="row">
        <?php if ( have_posts() ) : ?>
            <div class="col-12">
                <?php
                // Start the loop
                while ( have_posts() ) :
                    the_post();
                ?>
                    <div class="card mb-4">
                        <div class="row g-0">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="col-md-4 d-none d-md-block">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid rounded-start']); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="col-md-<?php echo has_post_thumbnail() ? '8' : '12'; ?>">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h5>
                                    <p class="card-text text-muted mb-2">
                                        <small>
                                            <?php echo get_the_date(); ?> | <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
                                        </small>
                                    </p>
                                    <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                                    <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Read More &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <!-- Pagination -->
                <nav aria-label="Search Results Pagination">
                    <?php
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => __('« Previous', 'demoTheme'),
                        'next_text' => __('Next »', 'demoTheme'),
                        'screen_reader_text' => ' ',
                    ));
                    ?>
                </nav>
            </div>

        <?php else : ?>
            <!-- No Results Found -->
            <div class="col-12 text-center">
                <h3 class="mb-3">No results found for: <span class="text-danger"><?php echo get_search_query(); ?></span></h3>
                <p>Try a different keyword or browse our recent posts.</p>
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
?>
