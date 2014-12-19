<?php
/**
 * The template for displaying any single post.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>
<?php include("page-header.php"); ?>
<div class="blogFullBg">
<div class="wrap" id="singleBg">

			<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have a post to show, start a loop that will display it
				?>
				
					<article class="post">
						
                        <div id="backToBlog">
                        	<a href="trendingsounds.com/blog">
                            	< Back to blog
                        	</a>
                        </div>
                        	
						<h1 class="title"><?php the_title(); // Display the title of the post ?></h1>
						
                        <div class="blogPostDate">
                        	<p>Posted on: </p>
                        	<?php the_time('F jS, Y') ?>
                          </div>
						
						<div class="singleContent">
							<?php the_content(); 
							// This call the main content of the post, the stuff in the main text box while composing.
							// This will wrap everything in p tags
							?>
							
							<?php wp_link_pages(); // This will display pagination links, if applicable to the post ?>
						</div><!-- the-content -->
						
					</article>

				<?php endwhile; // OK, let's stop the post loop once we've displayed it ?>
				

			<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having a post or not having a post to show) ?>

		<div class="clear"></div>
	</div>
</div>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
