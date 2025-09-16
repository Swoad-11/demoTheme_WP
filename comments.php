<div class="comments-wrapper">


					<div class="comments" id="comments">


						<div class="comments-header">

							<h2 class="comment-reply-title">
								<?php if (have_comments()) : ?>
    <?php $comments_number = get_comments_number(); ?>
    
    <div class="comments-header d-flex align-items-center mb-4 p-3 border rounded bg-light">
        <i class="fa fa-comments me-2 text-primary"></i>
        <h5 class="mb-0">
            <?php
            if ('1' === $comments_number) {
                // One comment
                printf(
                    esc_html__('One thought on “%s”', 'twentytwenty'),
                    '<span class="fw-bold">' . get_the_title() . '</span>'
                );
            } else {
                // Multiple comments
                printf(
                    esc_html(
                        _nx(
                            '%1$s thought on “%2$s”',
                            '%1$s thoughts on “%2$s”',
                            $comments_number,
                            'comments title',
                            'twentytwenty'
                        )
                    ),
                    '<span class="badge bg-primary">' . number_format_i18n($comments_number) . '</span>',
                    '<span class="fw-bold">' . get_the_title() . '</span>'
                );
            }
            ?>
        </h5>
    </div>

<?php else : ?>
    <div class="comments-header d-flex align-items-center mb-4 p-3 border rounded bg-light text-muted">
        <i class="fa fa-comment-slash me-2"></i>
        <h5 class="mb-0">
            <?php esc_html_e('No thoughts on “' . get_the_title() . '”', 'twentytwenty'); ?>
        </h5>
    </div>
<?php endif; ?>


						</div><!-- .comments-header -->

						<div class="comments-inner">

							<?php

                            wp_list_comments(
                                array(
                                    'style'             => 'div',
                                    'avatar'       => 120,

                                )
                            );
                            ?>

						</div><!-- .comments-inner -->

					</div><!-- comments -->

					<hr class="" aria-hidden="true">
					<?php

                    if( comments_open()){
                        comment_form(
                            array(
                                'class_form' => 'comment-form',
                                'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                                'title_reply_after'  => '</h2>',
                            )
                        );
                    }

                    ?>

				</div>