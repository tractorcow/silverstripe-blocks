<% include BreadCrumbs %>
<article class="Layout ContentSection">
	<section class="col grid double">
		<h1>$Title.XML</h1>
		$Content
		<ul class="Phone">
			<li class="First">
				<dl>
					<dt>Phone an Expert (NZ Only)</dt>
					<dd>0800 804 458</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>International</dt>
					<dd>+64 7 873 8131</dd>
				</dl>
			</li>
		</ul>
		
		<p class="Button"><a href="#">Email an Expert</a></p>
	</section>
	<section class="col grid double stacked">
		$MainImage.CroppedImage(630, 470)
	</section>
	<section>
		<div class="col grid">
			<% include Block %>
		</div>
		<div class="col grid">
			<% include Block %>
		</div>
		<div class="col grid">
			<% include Block %>
		</div>
		<div class="col grid stacked">
			<% include Block %>
		</div>
	</section>
</article>