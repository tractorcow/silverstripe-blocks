<article class="Layout Home">
	<% if Banners %>
		<section class="BannerArea">
			<ul class="Banners">
				<% loop Banners %>
					<li class="Banner" data-title="$Title.ATT">
						<div class="Copy typography">
							$Description
						</div>
						$Image.CroppedImage(593, 356)
					</li>
				<% end_loop %>
			</ul>
		</section>
	<% end_if %>
	<section>
		<h1>$Title.XML</h1>
		<div class="Copy typography">
			$Content
		</div>
		<% if Form %>
			<div class="Form">$Form</div>
		<% end_if %>
	</section>
</article>