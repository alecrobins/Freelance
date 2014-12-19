<?php
/*
Template Name: Philanthropy
MultiEdit: philanthropyContent
*/
?>

<?php include("header.php"); ?>
<?php include("page-header.php"); ?>

<div id="philanthropyBg" class="pageBg">
	
    <div class="pageTitle" id="philanthropyPageTitle">
    	<!--Need to replace with generated content-->
        <div class="wrap">
        	<h1><?php echo get_the_title($ID); ?></h1>
    	</div>
    </div>
	
    <div class="wrap" id="wrapContent">
    	
		<div class="pageInfo" id="philanthropyInfo">
              <?php multieditDisplay('philanthropyContent'); ?>
        </div>
        
        <?php $recent = new WP_Query("cat=3&showposts=0"); while($recent->have_posts()) : $recent->the_post();?>
   		<div id="fundraiserWrap">     
        	 <div class="fundraiserImg">
				<?php
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  the_post_thumbnail();
                }
                ?>
            </div>
            
            <div class="fundraiserContent">
                <h3><a href="http://<?php
					  $myExcerpt = get_the_excerpt();
					  $tags = array("<p>", "</p>");
					  $myExcerpt = str_replace($tags, "", $myExcerpt);
					  echo $myExcerpt;
					  ?>" 
                      rel="bookmark"
                      target="_blank" >
					  
					  <?php the_title(); ?></a></h3>
                <p>
                    <?php the_content(); 
                                // This call the main content of the post, the stuff in the main text box while composing.
                                // This will wrap everything in p tags
                                ?>
                               
                </p>
            </div>
		</div>

<?php endwhile; ?>

       
    </div>
</div>

<?php include("footer.php"); ?>