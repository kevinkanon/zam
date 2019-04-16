<section class="gallery-block grid-gallery">
	<div class="heading"><h2>Galerie photos</h2></div>
	<div class="row">
		{if isset($gallery_lists) && $gallery_lists}
			{foreach from=$gallery_lists item=galleryimg}
				<div class="col-md-4 col-lg-4 item">
					<a class="lightbox" href="{$galleryimg.$imagesize}"><img class="img-thumbnail image scale-on-hover" src="{$galleryimg.$imagesize}"></a>
				</div>
			{/foreach}
		{/if}
	</div>
</section>

<script>
	baguetteBox.run('.grid-gallery', 
		{ animation: 'slideIn', async: 'true' }
	);
</script>