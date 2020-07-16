<aside class="col-md-4 ">
	<div id="secondary" class="row" role="complementary">
		

		<!-- Opening Kickoff -->
		<section class="col-md-12">
			<h3 class="sidebar-title"><?php _e('Opening Kickoff','sportsdaynow'); ?></h3>
					<?php query_posts('category_name=opening-kickoff&posts_per_page=1' ); ?>
					<?php  $j=0; $i =0; if (have_posts()) : the_post(); ?>
					

				<!-- Start Article -->
				<article class="sidebar-post">
					<!-- Display Author Info -->
					<div class="sidebarinfo">
					<?php if(function_exists('get_avatar')) { 
						echo str_replace("avatar ", "opening-avatar ", get_avatar( get_the_author_meta('email'), '70' ));  
					} ?>
						<span>
							<h5 class='sidebar-author-name'><?php the_author_meta( 'nickname' ); ?></h5>
							<h2 class="opening-kickoff-title">
								<a class="link" href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h2>
							<div class="clear"></div>
						</span>
					</div>
					<?php if (empty($mts_options['mts_full_posts'])) : ?>
    				<div class="image-caption-format-1">
            <div class="clearfix"></div>
            <?php echo the_excerpt();?>
    				</div>
				    <span class="readMore"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow"><?php _e('Read More','sportsdaynow'); ?></a></span>
				    <?php else : ?>
                    <div class="post-content image-caption-format-1 full-post">
                        <?php the_content(); ?>
                    </div>
                        <?php if (mts_post_has_moretag()) : ?>
                            <span class="readMore"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow"><?php _e('Read More','sportsdaynow'); ?></a></span>
						<?php endif; ?>
                    <?php endif; ?>
					</article>
					<!-- End Article -->
					<?php else: ?>
					<div class="no-results">
						<h5><?php _e('There are no articles here yet.', 'sportsdaynow'); ?></h5>
					</div><!--noResults-->
					<?php endif; ?>
				</div>
			</section>



















		<div class="rss">
			<h3 class="sidebar-title"><?php _e('Just In&hellip;','sportsdaynow'); ?></h3>
			<?php echo do_shortcode('[wp_rss_multi_importer showdate="0" showgroup="0" windowstyle="2" maxperpage="9"]') ?>
		</div>



























		<!-- What We Think -->
		<section>
			<h3 class="sidebar-title"><?php _e('What We Think','sportsdaynow'); ?></h3>
			<div>
					<?php query_posts('category_name=what-we-think&posts_per_page=1' ); ?>
					<?php  $j=0; $i =0; if (have_posts()) : the_post(); ?>
					<!-- Start Article -->
				<article>
						<!-- Display Author Info -->
					<div>
					<?php if(function_exists('get_avatar')) { 
						echo str_replace("avatar ", "opening-avatar ", get_avatar( get_the_author_meta('email'), '70' ));  
					} ?>
						<span>
							<h5 class='sidebar-author-name'><?php the_author_meta( 'nickname' ); ?></h5>
							<h2 class="opening-kickoff-title">
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h2>
							<div class="clear"></div>
						</span>
					</div>
					<?php if (empty($mts_options['mts_full_posts'])) : ?>
    				<div class="post-content image-caption-format-1">
    				<div class="clearfix"></div>
                        <?php echo the_excerpt(75);?>
    				</div>
				    <span class="readMore"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow"><?php _e('Read More','sportsdaynow'); ?></a></span>
				    <?php else : ?>
                    <div class="post-content image-caption-format-1 full-post">
                        <?php the_content(); ?>
                    </div>
                        <?php if (mts_post_has_moretag()) : ?>
                            <span class="readMore"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow"><?php _e('Read More','sportsdaynow'); ?></a></span>
						<?php endif; ?>
                    <?php endif; ?>
					</article>
					<!-- End Article -->
					<?php else: ?>
					<div class="no-results">
						<h5><?php _e('There are no articles here yet.', 'sportsdaynow'); ?></h5>
					</div><!--noResults-->
					<?php endif; ?>
				</div>
			</section>
	</div><!--sidebars-->
</aside>