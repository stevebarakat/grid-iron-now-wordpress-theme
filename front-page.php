<?php 
/**
 * Template Name: Front Page
 * Description: Front page for Sportsday Now
 */
?>

<?php get_header(); ?>






	



	<div class="col-md-12 advertisment-top">

<!-- Top Page Ad -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6709017539231181"
     data-ad-slot="2509812358"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

	</div>





	<div class="col-md-8 ">

		<!-- Slider -->		
		<div class="row"> <!-- start row -->
			<section id="rotator" class="col-md-12">
				<?php echo do_shortcode("[advps-slideshow optset='41']"); ?>
			</section>
		</div> <!-- end row -->



















			
			<!-- Start from_the_desk -->

				

				<!-- Start Grid -->
				<div id="row">

	


			<section id="from-the-desk">
				<h3 class="section-title">
					<a href="/sec-football/"><?php _e('FROM THE SPORTSDAY NEWS DESK','sportsdaynow'); ?></a>
				</h3>

<div class="margin-fix">

					<!-- Query -->
					<?php query_posts('category_name=articles&posts_per_page=8' ); ?>
					
					<!-- Loop Begins -->
					
					<?php 

					 $i=0;

					if (have_posts()) : while (have_posts()) : the_post();  ?>
						

						<!-- START DISPLAYING ARTICLES ON GRID -->
						<article class="col-sm-3 col-md-3 col-md-3 margin-bottom">

							<!-- if HAS featured image, display it! -->
							<?php if ( has_post_thumbnail() ) { ?>
								
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow">
									
									<?php echo '<div class="featured-thumbnail img-responsive">'; the_post_thumbnail(); echo '</div>'; ?>
																	
								</a>
							
							<!-- if NO featured image, display default image -->
							<?php } else { ?>
								
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow">
									
										<img src="<?php echo get_template_directory_uri(); ?>/images/nothumb.png" class="attachment-featured wp-post-image" alt="<?php the_title(); ?>">
																	
								</a>
							
							<?php } ?>
							<!-- END featured image -->

							<!-- Article Title -->
							<h2 class="article-title">
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h2>
							<!-- END Article Title -->
						

						  <span class="readMore"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow"><?php _e('Read More','sportsdaynow'); ?></a></span>
						

						</article>
							
						<?php $i++; if ($i % 4 === 0) {
							echo '<div class="clearfix"></div>';
						} ?>


						<?php endwhile; else: ?>
						<!-- END DISPLAYING ARTICLES ON GRID -->


						<div class="no-results">
							<h5><?php _e('There are no articles here yet.', 'sportsdaynow'); ?></h5>
						</div><!--noResults-->
						

					<?php endif; ?>

					<!-- Loop Ends-->

				</div>
				</div>
			</section>
			<!-- End from_the_desk -->




























		<!-- Lower Article Section -->		


		<div class="row"> <!-- start LA row -->
			<div class="col-md-9">
				<div class="row"> <!-- start top10 row -->
					<section id="top10" class="col-md-12">
						<img class="pull-left" src="<?php echo get_home_url() . '/wp-content/uploads/2015/01/10.jpg'?>"
						<span>
						<?php query_posts('category_name=top-10&posts_per_page=1' ); ?>
						<?php  if (have_posts()) {
							the_post(); ?>
							<h3><a href="<?php the_permalink() ?>">Sportsday Top 10</a></h3>
						<?php } else { ?>
							<h3>Sportsday Top 10</h3>
						<?php } ?>
							<p>Our latest &quot;you'll be talking about them&quot; Top 10. Teams, stadiums, movies, you name it, we'll rank it.</p>
						</span>
					</section>
				</div><!-- end top10 row -->















					<section id="videos">
						

										<h3 class="section-title">
												<a href="<?php echo get_site_url(); ?>/?cat=4141"><?php _e('Our Videos','sportsdaynow'); ?></a>
										</h3>
									<div class="row">

										<?php query_posts( 'cat=4141&posts_per_page=2' ); ?>
										<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
											


											<article class="col-md-6">
													
														<?php if ( has_post_thumbnail() ) { ?>
															<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow">
																<?php echo '<div>'; the_post_thumbnail('featured'); echo '</div>'; ?>
															</a>
														<?php } else { ?>
															<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow">
																<div>
																	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/nothumb.png" class="attachment-featured wp-post-image"  alt="<?php the_title(); ?>">
																</div>
															</a>
														<?php } ?>
										
											</article>

										<?php endwhile; else: ?>
												<h5><?php _e('Our videos will be coming soon!', 'sportsdaynow'); ?></h5>
									<?php endif; ?>
									</div>
									</section><!-- End Videos Section -->
	





















	<div class="col-md-12  advertisment">

		<!-- Mid Page Ad -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:468px;height:60px"
		     data-ad-client="ca-pub-6709017539231181"
		     data-ad-slot="1238228759"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>

	</div>








			</div>




			<div class="col-md-3">
				<!-- Start Team News -->
				<section id="team-news">
					<div>				
					<h3>Team News</h3>
						<ul>
							<li><a href="/alabama-football/"><img src=" <?php echo get_home_url() . '/wp-content/uploads/2014/12/Alabama.jpg'?>" alt="Alabama Crimson Tide Football" />Alabama</a></li>
							<li><a href="/arkansas-football/"><img src=" <?php echo get_home_url() . '/wp-content/uploads/2014/12/Arkansas.jpg'?>" alt="Arkansas Razorback Football" />Arkansas</a></li>
							<li><a href="/auburn-football/"><img src=" <?php echo get_home_url() . '/wp-content/uploads/2014/12/Auburn.jpg'?>" alt="Auburn Tigers Football" />Auburn</a></li>
							<li><a href="/florida-football/"><img src=" <?php echo get_home_url() . '/wp-content/uploads/2014/12/Florida.jpg'?>" alt="Florida Gators Football" />Florida</a></li>
							<li><a href="/georgia-football/"><img src=" <?php echo get_home_url() . '/wp-content/uploads/2014/12/Georgia.jpg'?>" alt="Georgia Bulldogs Football" />Georgia</a></li>
							<li><a href="/kentucky-football/"><img src=" <?php echo get_home_url() . '/wp-content/uploads/2014/12/Kentucky.jpg'?>" alt="Kentucky Wildcats Football" />Kentucky</a></li>
							<li><a href="/lsu-football/"><img src=" <?php echo get_home_url() . '/wp-content/uploads/2014/12/LSU.jpg'?>" alt="LSU Tigers Football" />LSU</a></li>
							<li><a href="/missst-football/"><img src=" <?php echo get_home_url() . '/wp-content/uploads/2014/12/MissSt.jpg'?>" alt="Mississippi State Bulldogs Football" />Miss State</a></li>
							<li><a href="/mizzou-football/"><img src=" <?php echo get_home_url() . '/wp-content/uploads/2014/12/missouri.jpg'?>" alt="Missouri Tigers Football" />Missouri</a></li>
							<li><a href="/olemiss-football/"><img src=" <?php echo get_home_url() . '/wp-content/uploads/2014/12/Miss.jpg'?>" alt="Ole Miss Rebels Football" />Ole Miss</a></li>
							<li><a href="/gamecock-football/"><img src=" <?php echo get_home_url() . '/wp-content/uploads/2014/12/SC.jpg'?>" alt="South Carolina Gamecocks Football" />S Carolina</a></li>
							<li><a href="/tennessee-football/"><img src=" <?php echo get_home_url() . '/wp-content/uploads/2014/12/Tennessee.jpg'?>" alt="Tennessee Volunteers Football" />Tennessee</a></li>
							<li><a href="/aggie-football/"><img src=" <?php echo get_home_url() . '/wp-content/uploads/2014/12/TexasAM.jpg'?>" alt="Texas A&M Aggies Football" />Texas A&M</a></li>
							<li><a href="/vanderbilt-football/"><img src=" <?php echo get_home_url() . '/wp-content/uploads/2014/12/Vanderbilt.jpg'?>" alt="Vanderbilt Commodores Football" />Vanderbilt</a></li>
						</ul>
					</div>
				</section>
				<!-- End Team News -->
			</div>
		</div> <!-- end LA row -->



	</div>




















<?php get_sidebar(); ?>
<div class="clearfix"></div>
<?php get_footer(); ?>