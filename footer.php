</div>
<div class="clear"></div>
<div class="grid_13 suffix_2 prefix_1" style="text-align:left; margin-top:70px; margin-left:0">
	<div class="grid_4 alpha" style="text-align:left">
		<span class="title">FRIENDS</span>
		<ul class="list">
			<li><a href="http://eliasdiab.net/" target="_blank">Elias Diab</a></li>
			<li><a href="http://laviebohemie.wordpress.com" target="_blank">La Vie Bohemie</a></li>
			<li><a href="http://www.dansmonsalon.net" target="_blank">Dans Mon Salon</a></li>
			<li><a href="http://agorf.gr" target="_blank">Aggelos Orfanakos</a></li>
		</ul>
	</div>
	<div class="grid_4" style="text-align:left">
		<span class="title">PROJECTS</span>
		<ul class="list">
			<li><a href="#">Real-time jamming system<div class="description">My MSc thesis</div></a></li>
			<li><a href="#">Amplify<div class="description">Electronic music collective</div></a></li>
		</ul>
	</div>
	<div class="grid_4 omega" style="text-align:left;">
		<span class="title">LATEST POSTS</span>
		<ul class="post_list">
			<?php
			      $recent_posts = get_posts('type=postbypost');
			      foreach($recent_posts as $post){
			        echo '<li><a href="' . get_permalink($post->ID) . '" title="Look '.$post->post_title.'" >» ' .   $post->post_title.'
					<div class="date">' .   get_the_time( 'd M Y', $post->ID ).'</div></a> </li> ';
			} ?>
		</ul>
	</div>
</div>
<div class="clear"></div>
<div class="grid_16 footer" style="text-align:left; margin-top:70px; margin-left:0">
	LAST UPDATED FEBRUARY 2011
</div>
</div>
<div class="clear"></div>
</div>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-11218704-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

</body>
</html>