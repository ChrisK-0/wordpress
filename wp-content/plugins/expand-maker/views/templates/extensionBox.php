<div class="product-banner" onclick="window.open('<?php echo YRM_PRO_URL.'#yrm-'.esc_attr($extension['shortKey']); ?>')">
	<div class="yrm-<?php echo esc_attr($extension['shortKey']);?>">
		<div class="yrm-types type-banner-pro">
			<?php if (!empty($extension['comingSoon'])): ?>
				<p class="yrm-ext-title yrm-ext-title-coming"><?php _e('Coming Soon', YRM_LANG);?></p>
			<?php else : ?>
				<p class="yrm-ext-title yrm-ext-title-pro"><?php _e('PRO EXTENSION', YRM_LANG);?></p>
			<?php endif; ?>
		</div>
	</div>
	<div class="yrm-type-view-footer">
		<span class="yrm-promotion-title"><?php _e($extension['boxTitle'], YRM_LANG);?></span>
		<?php if(!empty($extension['videoURL'])): ?>
			<span class="yrm-play-promotion-video" data-href="<?php echo esc_attr($extension['videoURL']); ?>"></span>
		<?php endif; ?>
	</div>
</div>