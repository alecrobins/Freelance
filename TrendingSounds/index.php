<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>
<?php include("page-header.php"); ?>
<div class="blogFullBg">
<div class="wrap" id="blogBg">
			
			<?php query_posts($query_string . '&showposts=4'); ?>
            
			<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			// In the case of the home page, this will call for the most recent posts 
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have some posts to show, start a loop that will display each one the same way
				?>
                <?php if (in_category('3')) continue; ?>
                
                <div id="blogPost">

					<article class="post">
					 	
                        <div class="blogPostImg">
							<?php
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail();
                            }
                            ?>
                       </div>
                       
						<h1 class="title">
                   
							<a href="<?php the_permalink(); // Get the link to this post ?>" title="<?php the_title(); ?>">
								<?php the_title(); // Show the title of the posts as a link ?>
							</a>
						</h1>
                        
                        <div class="blogPostDate">
                        	<p>Posted on: </p>
                        	<?php the_time('F jS, Y') ?>
                        </div>
						
                       
						
						<div class="blogPostContent">
							<?php the_excerpt(); ?>
							
                            <p id="readMore">
                            	<a href="<?php the_permalink(); // Get the link to this post ?>" title="<?php the_title(); ?>">	Read more here
                  				</a>
                             </p>
                            
                            
						</div><!-- the-content -->
							<div class="clear"></div>
						
					</article>
                    
                    </div>

				<?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>
				
				<!-- pagintation -->
				<div id="pagination" class="clearfix">
					<div class="past-page"><?php previous_posts_link( 'newer' ); // Display a link to  newer posts, if there are any, with the text 'newer' ?></div>
					<div class="next-page"><?php next_posts_link( 'older' ); // Display a link to  older posts, if there are any, with the text 'older' ?></div>
				</div><!-- pagination -->


			<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>
            
         
 </div>
 </div>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>