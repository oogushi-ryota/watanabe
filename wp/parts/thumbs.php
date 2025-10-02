<li class="p-news-archive__item">
	<a href="<?php the_permalink(); ?>" class="p-news-archive__link c-news-link">
		<span class="p-news-archive__link-head c-news-link__head">
			<time class="p-news-archive__time c-news-link__time" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_post_time('Y.m.d'); ?></time>
			<?php
			$tags = get_the_tags();
			if ( $tags ) :
				foreach ( $tags as $tag ) :
			?>
				<span class="p-news-archive__tag c-news-link__tag tag-<?php echo esc_attr( $tag->slug ); ?>">
					<?php echo esc_html( $tag->name ); ?>
				</span>
			<?php
				endforeach;
			endif;
			?>
		</span>
		<h3 class="p-news-archive__details-ttl c-news-link__ttl"><?php the_title(); ?></h3>
	</a>
</li>