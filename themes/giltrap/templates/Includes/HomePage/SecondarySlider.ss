<article class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-timeout="0" data-cycle-slides="> section">
	<div class="cycle-pager"></div>
	<% loop SecondarySlides %>
		<section>
			$HomePageImage.CroppedImage(630, 470)
			<div class="cycle-overlay">
				<p class="intro">$Intro</p>
				<p class="description">$Abstract</p>
				<p><a href="$Link">&gt; Read Full Story</a></p>
			</div>
		</section>
	<% end_loop %>
</article>