<?php
get_header();
?>

<div class="container text-center py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- 404 Error Code -->
            <h1 class="display-1 fw-bold text-danger">404</h1>
            
            <!-- Title -->
            <h2 class="mb-4">Oops! Page Not Found</h2>
            
            <!-- Description -->
            <p class="lead mb-4">
                Sorry, but the page you were trying to view does not exist, has been removed, or is temporarily unavailable.
            </p>
            
            <!-- Search Form -->
            <div class="mb-4">
                <?php get_search_form(); ?>
            </div>
            
            <!-- Back to Home Button -->
            <a class="btn btn-primary btn-lg" href="<?php echo esc_url(home_url('/')); ?>">
                <i class="fas fa-home me-2"></i>Back to Home
            </a>
        </div>
    </div>
</div>

<?php
get_footer();
?>
