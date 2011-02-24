<div class="grid_3 omega" style="text-align:right; margin-top:50px">
	<div style="text-align:right; position:relative; padding-bottom:20px">
		<div class="search">
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
		            <input class="search_input" name="s" type="text" onfocus="if(this.value=='SEARCH') this.value='';" onblur="if(this.value=='') this.value='SEARCH';" value="SEARCH" />
		    </form>
		</div>
	</div>
	<div>
		<span class="title">CATEGORIES</span>
		<ul class="menu" style="float:right">
			<?php
			$args=array(
				'orderby' => 'name',
				'order' => 'ASC'
			);
			$categories=get_categories($args);
			foreach($categories as $category) { 
				echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.' ('.$category->count.')</a></li>';
			}
			?>
		</ul>
		<div class="clear"></div>
	</div>

	<div>
		<span class="title">ARCHIVES</span>
		<ul class="menu" style="float:right">
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ul>
		<div class="clear"></div>
	</div>

</div>