<?php get_header(); ?>
<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="off-canvas position-left reveal-for-medium" id="offCanvas" data-off-canvas>
			<a href="/" class="logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" /></a>
			<ul class="vertical menu">        
				<li>
					<a href="http://foundation.zurb.com/learn/about.html">Kínálatunk</a>
					<ul class="submenu menu vertical image" data-submenu="">
						<?php 
							//global $post;
							$args = array(
								'number'     => $number,
								'orderby'    => $orderby,
								'order'      => $order,
								'hide_empty' => $hide_empty,
								'include'    => $ids
							);

							$product_categories = get_terms( 'product_cat', $args );
							foreach ($product_categories as $term) : ?>
								<li>
									<a href="<?php echo get_term_link( $term->term_id, 'product_cat' ); ?>">
										<?php  
										$thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
										$image = wp_get_attachment_url( $thumbnail_id );
										if ( $image ) {
											echo '<img src="' . $image . '" alt="" />';
										}
										?>
										<span class="category-name"><?php echo $term->name ?></span>
									</a>
								</li> 
							<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<a href="http://foundation.zurb.com/learn/about.html">Learn</a>
					<ul class="submenu menu vertical" data-submenu="">
						<li><a href="http://foundation.zurb.com/learn/about.html">About Foundation</a></li> 
						<li><a href="http://foundation.zurb.com/learn/tutorials.html">Tutorials</a></li>
						<li><a href="http://foundation.zurb.com/learn/classes.html">Classes</a></li>
						<li><a href="http://foundation.zurb.com/learn/case-studies.html">Case Studies</a></li>
						<li><a href="http://foundation.zurb.com/learn/brands.html">Brands</a></li>
					</ul>
				</li>
				<li>
					<a href="http://foundation.zurb.com/learn/about.html">Learn</a>
					<ul class="submenu menu vertical" data-submenu="">
						<li><a href="http://foundation.zurb.com/learn/about.html">About Foundation</a></li> 
						<li><a href="http://foundation.zurb.com/learn/tutorials.html">Tutorials</a></li>
						<li><a href="http://foundation.zurb.com/learn/classes.html">Classes</a></li>
						<li><a href="http://foundation.zurb.com/learn/case-studies.html">Case Studies</a></li>
						<li><a href="http://foundation.zurb.com/learn/brands.html">Brands</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="off-canvas-content" data-off-canvas-content>
			<header class="title-bar hide-for-medium">
				<div class="title-bar-left">
					<button class="menu-icon" type="button" data-open="offCanvas"></button>
				</div>
			</header>
			<main class="row">
									<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
						<ul class="orbit-container">
							<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
							<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
							<li class="orbit-slide is-active">
								<img src="http://placehold.it/2000x750&text=1st">
							</li>
							<li class="orbit-slide">
								<img src="http://placehold.it/2000x750&text=2nd">
							</li>
							<li class="orbit-slide">
								<img src="http://placehold.it/2000x750&text=3nd">
							</li>
							<li class="orbit-slide">
								<img src="http://placehold.it/2000x750&text=4nd">
							</li>
						</ul>
					</div>
				<article class="">

				</article>
			</main>
		</div>
	</div>
</div>
<?php get_footer(); ?>