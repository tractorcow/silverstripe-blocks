<!-- Homepage hero section -->
<div class="Container">
	<div class="col grid triple">
		<section id="HeroSlider" class="Widget Span Double">
			<% include HeroSlider %>
		</section>
	</div>
	<div class="col grid stacked">
		<div class="Widget">
			<% include GetInTouch %>
		</div>
		<section class="Widget" id="Block1">
			<% include Block %>
		</div>
	</div>
</div>

<!-- Homepage featured products -->
<div class="Container ProductListing">
	<div class="col grid">
		<a href="#">$PlaceholdIt(200,115,'Product Image')</a>
		<p><a href="#">View Product</a></p>
	</div>
	<div class="col grid">
		<a href="#">$PlaceholdIt(200,115,'Product Image')</a>
		<p><a href="#">View Product</a></p>
	</div>
	<div class="col grid">
		<a href="#">$PlaceholdIt(200,115,'Product Image')</a>
		<p><a href="#">View Product</a></p>
	</div>
	<div class="col grid stacked">
		<a href="#">$PlaceholdIt(200,115,'Product Image')</a>
		<p><a href="#">View Product</a></p>
	</div>
</div>

<!-- Homepage bottom section -->
<div class="Container">
	<div class="col grid">
		<section id="Block2" class='block-area' data-areaid='$AreaID'>
			$BlockArea(LowerTallBlock)
			<% loop Blocks %>
				<div class="Widget Stacked">
					<div class="Block">
					<h3>$Description</h3>
					<% if LinkText %>
					<p><a href="#">&gt; $LinkText</a></p>
					<% end_if %>
					</div>
				</div>
			<div class="Widget">$Image.CroppedImage(310,230)</div>
			<% end_loop %>
		</section>
	</div>
	<div class="col grid">
		<div class="Widget" id="Block3">
			<% include Block %>
		</div>
		<div class="Widget" id="Block4">
			<% include Block %>
		</div>
	</div>
	<div class="col grid double stacked">
		<div id="SecondarySlider" class="Widget Span Double">
			<% include SecondarySlider %>
		</div>
	</div>
</div>