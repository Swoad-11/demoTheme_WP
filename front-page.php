<?php get_header(); ?>

<div class="main-wrapper">
    <header class="page-title theme-bg-light text-center gradient py-5">
        <h1 class="heading">
			<?php the_title(); ?>
		</h1>
    </header>

    <article class="content px-3 py-5 p-md-5">
        <?php
		 		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				the_title( '<h2 class="post-title">', '</h2>' );
				the_content();
			}
		} else {
			echo '<p> No content found</p>';}
		?>
    </article>

    <footer class="footer text-center py-2 theme-bg-dark">
        <p class="copyright">
            <a href="https://youtube.com/FollowAndrew">FollowAndrew</a>
        </p>
    </footer>
</div>

<?php wp_footer(); ?>
