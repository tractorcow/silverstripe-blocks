<!-- Homepage hero section -->
<div class="Container">
	<div class="col grid triple">
		<section id="HeroSlider" class="Widget Span Double">
			<% include HeroSlider %>
		</section>
	</div>
	<div class="col grid stacked">
		$BlockArea(HeroBlocks)
	</div>
</div>

<!-- Homepage featured products -->
<div class="Container ProductListing">
	<% loop FeaturedProducts %>
		<div class="col grid<% if Last %> stacked<% end_if %>">
			<a href="$SiteTreeURL.Link">$SiteTreeURL.MainImage.CroppedImage(200,115)</a>
			<p><a href="$SiteTreeURL.Link">$LinkText</a></p>
		</div>
	<% end_loop %>
</div>

<!-- Homepage bottom section -->
<div class="Container">
	<div class="col grid">
		<section id="Block2">
			$BlockArea(LowerTallBlock)
		</section>
	</div>
	<div class="col grid">
		$BlockArea(LowerBlocks)
	</div>
	<div class="col grid double stacked">
		<div id="SecondarySlider" class="Widget Span Double">
			<% include SecondarySlider %>
		</div>
	</div>
</div>