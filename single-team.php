<?php global $complete;?>
<?php get_header(); ?>

<div class="page_fullwidth_wrap layer_wrapper">
    <!--CUSTOM PAGE HEADER STARTS-->
        <?php get_template_part('sktframe/core','pageheader'); ?>
    <!--CUSTOM PAGE HEADER ENDS-->
	<div id="content">
		<div class="center">
           <!--POST START-->
			<div class="single_wrap no_sidebar">
				<div class="single_post">

                   <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                        
                    <!--EDIT BUTTON START-->
						<?php if ( is_user_logged_in() && is_admin() ) { ?>
                            <div class="edit_wrap">
                            	<a href="<?php echo get_edit_post_link(); ?>">
                            		<?php _e('Edit','complete'); ?>
                                </a>
                            </div>
                        <?php } ?>
    				<!--EDIT BUTTON END-->
                    <!--POST START-->
                        <div class="single_post_content">
                        	<?php
                            $designation = esc_html( get_post_meta( get_the_ID(), 'designation', true ) );
							
							$facebook = get_post_meta( get_the_ID(), 'facebook', true );
							$facebooklink = get_post_meta( get_the_ID(), 'facebooklink', true );
							
							$twitter = get_post_meta( get_the_ID(), 'twitter', true );
							$twitterlink = get_post_meta( get_the_ID(), 'twitterlink', true );
							
							$instagram = get_post_meta( get_the_ID(), 'instagram', true );
							$instagramlink = get_post_meta( get_the_ID(), 'instagramlink', true );
							
							$linkedin = get_post_meta( get_the_ID(), 'pinterest', true );
							$linkedinlink = get_post_meta( get_the_ID(), 'pinterestlink', true );
							
							$pinterest = get_post_meta( get_the_ID(), 'linkedin', true );
							$pinterestlink = get_post_meta( get_the_ID(), 'linkedinlink', true );
							?>
                                                        
                            
                            
                             <!--POST CONTENT START-->
                             <div class="thn_post_wrap teamwrap">
                                <div class="imgwrap">
                                	<?php
                                    if ( has_post_thumbnail() ) {
                                    ?><?php the_post_thumbnail('full'); ?>
                                    <?php }else{ ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/team_thumb.jpg" />
									<?php } ?>
                                    <div class="social-icons single-social">
                            		<?php if( $facebook != '' ) { ?><a href="<?php echo $facebooklink; ?>" title="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-<?php echo $facebook; ?> fa-lg"></i></a><?php } ?>
                                	<?php if( $twitter != '' ) { ?><a href="<?php echo $twitterlink; ?>" title="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-<?php echo $twitter; ?> fa-lg"></i></a><?php } ?>
                                	<?php if( $instagram != '' ) { ?><a href="<?php echo $instagramlink; ?>" title="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-<?php echo $instagram; ?> fa-lg"></i></a><?php } ?>
                                	<?php if( $pinterest != '' ) { ?><a href="<?php echo $pinterestlink; ?>" title="<?php echo $pinterest; ?>" target="_blank"><i class="fa fa-<?php echo $pinterest; ?> fa-lg"></i></a><?php } ?>
                                	<?php if( $linkedin != '' ) { ?><a href="<?php echo $linkedinlink; ?>" title="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-<?php echo $linkedin; ?> fa-lg"></i></a><?php } ?>
                                </div>
                              </div>
                                
                                <div class="descwrap">
                                	<h1 class="postitle entry-title"><?php the_title(); ?></h1>
                                    <?php if ($designation != '') { ?><span class="team-desig"><?php echo $designation; ?></span> <?php } ?>
                                    <?php the_content(); ?>
                                </div>									
                                </div>
                                <div style="clear:both"></div>
                                 
                            <!--POST CONTENT END-->
                        </div>
                    <!--POST END-->
                    </div>
            <?php endwhile ?> 
       
            <?php endif ?>
 			</div>
</div>
		</div><!--center class END-->
	</div><!--#content END-->
</div><!--layer_wrapper class END-->

<?php get_footer(); ?>