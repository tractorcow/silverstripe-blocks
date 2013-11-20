<article class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true" data-cycle-slides="> section">
	<div class="cycle-pager"></div>
	<div class="cycle-prev"></div>
	<div class="cycle-next"></div>
	<% loop HeroSlides %>
		<section>
			$Image.CroppedImage(950, 470)
			<div class="cycle-overlay">
				<p class="description">$Description</p>
				<% if Button1Url %>
					<p class="buttons">
						<a href="$Button1URL.Link" class="first">
						$Button1Text
						<% if not $Button1Text %>Learn More<% end_if %>
						</a>

						<% if Button2URL %>
							<a href="$Button2URL.Link" class="second">
								$Button2Text
								<% if not $Button1Text %>Learn More<% end_if %>
							</a>
						<% end_if %>
					</p>
				<% end_if %>
			</div>
		</section>
	<% end_loop %>
</article>