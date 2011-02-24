<?php

function several_replacements( $content ) {
	$content = preg_replace('/\[bibtex url="(.*)"\]/i','<script type="text/javascript" src="$1"></script>',$content);
	$content = preg_replace('/\[code lang="?(.*)"?\]/i','<pre class="brush: $1">',$content);
	$content = preg_replace('/\[\/code\]/i','</pre>',$content);
	$content = preg_replace('/\<code lang="?(.*)"?\>/i','<pre class="brush: $1">',$content);
	$content = preg_replace('/\<\/code\>/i','</pre>',$content);
	
	return $content;
}

function new_excerpt_more($more) {
       global $post;
	return '<div class="read-more"><a href="'. get_permalink($post->ID) . '">read more »</a></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');
add_filter( 'the_content', 'several_replacements' );

?>