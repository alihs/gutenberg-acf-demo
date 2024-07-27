<div class="w-banner swiper js-swiper-banner">
	<div class="swiper-wrapper">
		<?php
		$slides = get_field('slides');
		foreach ($slides as $key => $slide) : ?>
			<div class="swiper-slide slide-<?php echo $key; ?>">
				<?php if ($slide['image']) : ?>
					<img src="<?php echo $slide['image']; ?>" class="w-banner__media">
				<?php endif; ?>

				<div class="w-banner__content">
					<div class="container-fluid" style="padding-left: 1rem;">
						<?php echo $slide['content']; ?>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="swiper-pagination"></div>
</div>