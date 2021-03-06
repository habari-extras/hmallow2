<!-- Sidebar menu div -->
<div id="menu">


	<?php Plugins::act( 'theme_sidebar_top' ); ?>

<ul>
	<?php if ($this->request->display_search) { ; ?>
	<li id="search">
<?php _e('Search results for \'%s', array( htmlspecialchars( $criteria ) ) ); ?>'</li>
	<?php } ?>
	
	
<?php if (Plugins::is_loaded('TagCloud')) { ?>	
	<li id="colophon">
		<?php $theme->colophon(); ?>
	</li>
<?php } ?>

	<li><?php _e('Recent comments'); ?>
			<ul id="recentcomments">
				<?php foreach($recent_comments as $comment): ?>
				<li><a href="<?php echo $comment->url ?>"><?php echo $comment->name ?></a> <?php _e('on'); ?> <a href="<?php echo $comment->post->permalink; ?>"><?php echo $comment->post->title; ?></a></li>
				<?php endforeach; ?>
			</ul>
	</li>


	<li><?php _e('Monthly archives'); ?>
			<ul id="monthlyarchives">
					<?php $theme->monthly_archives(5, 'N'); ?>
				<li>	<a href="<?php Site::out_url( 'habari' ); ?>/archives">More...</a></li>
			
			</ul>
	</li>
		
		
	<li><?php _e('More posts'); ?>
			<ul id="moreposts">
				<?php foreach($more_posts as $post): ?>
					<?php
					echo '<li>';
					echo '<a href="' . $post->permalink .'">' . $post->title_out . '</a>';
					echo '</li>';
					?>
				<?php endforeach; ?>
			</ul>
	</li>
	

<?php if (Plugins::is_loaded('PopularPosts')) { ?>	
	<div id="PopularPosts">
	<?php $theme->popular_posts(); ?>
	</div>
<?php } ?>


<?php if (Plugins::is_loaded('TagCloud')) { ?>	
	<li><?php _e('Tag cloud'); ?>
		<ul id="tagcloud">
		<?php $theme->tag_cloud(); ?>
	</ul></li>
<?php } ?>

<?php if (Plugins::is_loaded('fluffytag')) { ?>	
	<li><?php _e('Tag cloud'); ?>
		<ul id="tagcloud">
		<?php $theme->fluffytag(); ?>
	</ul></li>
<?php } ?>
	
<?php if (Plugins::is_loaded('blogroll')) { ?>	
		<div id="blogroll">
		<?php $theme->show_blogroll(); ?>
	</div>
<?php } ?>
	
	
	
<?php if (Plugins::is_loaded('deliciousfeed')) { ?>		
	<li><?php _e('Delicious'); ?>
		<ul id="delicious">
		<?php $theme->deliciousfeed(); ?>
	</ul></li>
<?php } ?>


<?php if (Plugins::is_loaded('audioscrobbler')) { ?>			
	<li><?php _e('Last.fm'); ?>
		<ul id="lastfm">
		<?php $theme->audioscrobbler(); ?>
	</ul></li>
<?php } ?>
	
	
<?php if (Plugins::is_loaded('lastrecent')) { ?>			
	<li><?php _e('Last.fm'); ?>
		<ul id="lastfm">
		<?php $theme->lastrecent(); ?>
	</ul></li>
<?php } ?>
	
		
	
<?php if (Plugins::is_loaded('flickrfeed')) { ?>
	<li><?php _e('Flickr'); ?>
		<ul id="flickr">
		<?php $theme->flickrfeed(); ?>
	</ul></li>
<?php } ?>
	

<?php if (Plugins::is_loaded('twitter')) { ?>	
	<li><?php _e('Twitter'); ?>
		<ul id="twitter">
		<?php $theme->twitter(); ?>
	</ul></li>
<?php } ?>


<?php if (Plugins::is_loaded('Brightkite')) { ?>	
	<div id="brightkite">
	<?php $theme->bk_location(); ?>
	</div>
<?php } ?>
	

<li class="user"><?php _e('User'); ?><ul> 
	<?php $theme->display ( 'loginform' ); ?>
</ul></li>


<?php $theme->switcher(); ?>

<?php $theme->area('sidebar'); ?>



</ul>



<?php Plugins::act( 'theme_sidebar_bottom' ); ?>



</div>
